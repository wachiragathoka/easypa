$(document).ready(function(){
	
			var customerDOB="";
			var todaydate= new Date();

			// Custom method to validate username
			$.validator.addMethod("usernameRegex", function(value, element) {
				return this.optional(element) || /^[a-zA-Z0-9]*$/i.test(value);
			}, "Username must contain only letters, numbers");
			
			//validate date of birth
			$.validator.addMethod("MinimunDOB", function (value, element) {
				
				return computeAge(element.value) >= 18;
		
			},"You must be 18 Years and above");
			
			/**Date validator */
			$.validator.addMethod("greaterThan", 
					function(value, element, params) {

					    if (!/Invalid|NaN/.test(new Date(value))) {
					        return new Date(value) > new Date($(params).val());
					    }

					    return isNaN(value) && isNaN($(params).val()) 
					        || (Number(value) > Number($(params).val())); 
					},'Must be greater than {0}.');
			
			//validate input date not greater than today
			$.validator.addMethod("notGreaterThanToday", function(value, element) {
				var todaysdate=new Date();
				var month = todaysdate.getMonth();
				var day = todaysdate.getdate();
				var year=todaysdate.getFullYear();
				
				var date=new date(day+'/'+month+'/'+year);
				
				//return date>element.value;
				
				//console.log("selected start date is: " +element.value);
				//console.log("todays date= "+date);
				
			},'Date must not be earlier than today');
			
			//capture the value first captured
			$.validator.addMethod("assignfirstNameField",function(value,element){
				$("#fname2").val(element.value);
				//console.log("Assigned first name "+element.value);
				return true;
			}," ");
			
			
			//capture phone number
			$.validator.addMethod("assignPhoneNo",function(value, element){
				$('#conf_phone2').val(element.value);
				//console.log("Assign Phone Number "+element.value);
				return true;
			}," ");		
			
			//capture Email
			$.validator.addMethod("assignEmail",function(value, element){
				$('#email2').val(element.value);
				//console.log("Email: "+element.value);
				return true;
			}, " ");
			
			$.validator.addMethod("assignDOB", function(value, element){
				$("#custdob").val(element.value);
				//console.log("Assigned DOB "+element.value);
				return true;
			}," ")
			

			$(".next").click(function(){
				var form = $("#myform");
				form.validate({
					errorElement: 'span',
					errorClass: 'help-block',
					highlight: function(element, errorClass, validClass) {
						$(element).closest('.form-group').addClass("has-error");
					},
					
					unhighlight: function(element, errorClass, validClass) {
						$(element).closest('.form-group').removeClass("has-error");
					},
					
					rules: {
						fname: {
							required: true,
							usernameRegex: true,
							minlength: 3,
							assignfirstNameField: true,
						},
						
						custdob1: {
							required: true,	
							MinimunDOB: true,
							assignDOB : true,
						},
						
						email: {
							required: true,
							minlength: 3,
							email: true,
							assignEmail : true,
						},
						
						conf_phone:{
							required: true,
							assignPhoneNo : true,
						},
						
						coverOption_pa_stdnt:{
							required: true,
						},
						
						name: {
							required: true,
							minlength: 3,
						},
						
						startdate:{
							required: true,
							//greaterThan : true,
						},
						
						enddate:{
							required: true,
						},
						
						coverOption_pa_stdnt:{
							required : true,
						},
						
						annualSemiaAnnual :{
							require : true,
						},
						
						coverOption: {
							required : true,
						},
						
						s_coverOption : {
							required : true,
						},
						
						fname2: {
							required: true,
							usernameRegex: true,
							minlength: 3,
						},
						
						lname: {
							required: true,
						},
						
						idpass :{
							required : true,
						},
						
						email2 : {
							required : true,
						},
						
						krapin : {
							required : true,
						},
						
						custdob :{
							required : true,
						},
						
						postaladdress :{
							required : true,
						},
						
						postalcode : {
							required : true,
						},
						
						nok :{
							required : true,
						},
						
						nokrelationship : {
							required : true,
						},
						
						conf_nokphone :{
							required : true,
						},
						
						conf_nokemail: {
							required : true,
						},
						
						previus_cover :{
							required : true,
						},
						
						physical_disability:{
							required : true,
						},
						
						final_declarations:{
							required : true,
						},
					},
					messages: {
						fname: {
							required: "First name required",
							minlength: $.validator.format("Please, at least 3 characters are necessary")
						},
						custdob1: {
							required: "This is required to generate an accurate quote",
						},
						email: {
							required: "Email is required",
						},
						
										
						coverOption_pa_stdnt:{
							required: "Please select a cover",
						},
						
						startdate:{
								required: "When is the cover supposed to start",
						},
						
						enddate:{
							required: "When cover ends",
						},
						
					},

					submitHandler: function() {
			            $.ajax({
			                type : "POST",
			                url : "controller/pa.php",
			                data : $('#myform').serialize(),
			                success : function (data) {
			                    //alert(data);
			                    if(data=="success"){//success
									current_fs = $('#account_information');
									next_fs = $('#company_information');
									print_fs=$('#print-email-quote');

									next_fs.hide();
									current_fs.hide();
									print_fs.show();
									$('#declarations').hide();
									
			                    }else{
									alert(data);
			                    }
			                }
			            });
					  }
				});

				
				
				
				if (form.valid() === true){
					if ($('#account_information').is(":visible")){
						current_fs = $('#account_information');
						next_fs = $('#company_information');
						print_fs=$('#print-email-quote');
						
					}else if($('#company_information').is(":visible")){
						current_fs = $('#company_information');
						next_fs = $('#personal_information');
						print_fs=$('#print-email-quote');
					}
					
					next_fs.show();
					current_fs.hide();
					print_fs.hide();
					$('#declarations').hide();
					$('#student-internship-cover-table').hide();
					$('#pa-cover-table').hide();
					$('#cover-start-end-dates').hide();
				}
			});

			 $('#datePicker')
		        .datepicker({
		        	autoclose: true,    // It is false, by default
		            format: 'dd/mm/yyyy'
		        })
		        .on('changeDate', function(e) {
		            // Revalidate the date field
		            //$('#myform').formValidation('revalidateField', 'custdob1');
		        	
		        	console.log(computeAge($('#custdob1').val()));
		        	//customerDOB=$('#custdob1').val();
		        	if(computeAge($('#custdob1').val())<1){
		        		console.log("Less "+computeAge($('#custdob1').val()))
		        	}else{
		        		console.log("Ok "+computeAge($('#custdob1').val()))
		        	}
		
		        });

			 $('#datetimepicker6')
		        .datepicker({
		        	autoclose: true,    // It is false, by default
		            format: 'dd/mm/yyyy'
		        })
		        .on('changeDate', function(e) {
		            // Revalidate the date field
		            //$('#myform').formValidation('revalidateField', 'startdate');
		        });

			 $('#datetimepicker7')
		        .datepicker({
		        	autoclose: true,    // It is false, by default
		            format: 'dd/mm/yyyy'
		        })
		        .on('changeDate', function(e) {
		            // Revalidate the date field
		            //$('#myform').formValidation('revalidateField', 'enddate');
		        });
			 

			 $('#dob')
		        .datepicker({
		        	autoclose: true,    // It is false, by default
		            format: 'dd/mm/yyyy'
		        })
		        .on('changeDate', function(e) {
		            // Revalidate the date field
		            //$('#myform').formValidation('revalidateField', 'date');
		        });
			 
			 
			$('#previous').click(function(){
				if($('#company_information').is(":visible")){
					current_fs = $('#company_information');
					next_fs = $('#account_information');
					print_fs=$('#print-email-quote');
					declarations=('#declarations');
				}else if ($('#personal_information').is(":visible")){
					current_fs = $('#personal_information');
					next_fs = $('#company_information');
					print_fs=$('#print-email-quote');
					declarations=$('#declarations');
				}
				next_fs.show(); 
				current_fs.hide();
				print_fs.hide();
				declarations.hide();
			});

			$('#stage2').click(function(){
				if($('#company_information').is(":visible")){
					current_fs = $('#company_information');
					next_fs = $('#account_information');
				}else if ($('#personal_information').is(":visible")){
					current_fs = $('#personal_information');
					next_fs = $('#company_information');
				}
				next_fs.show(); 
				current_fs.hide();
				print_fs.hide();
				$('#declarations').hide();
			});

			$('#preview-quote').click(function(){
				//alert("Clicked");
				if($('#company_information').is(":visible")){
					current_fs = $('#company_information');
					next_fs = $('#account_information');
				}else if ($('#personal_information').is(":visible")){
					current_fs = $('#personal_information');
					next_fs = $('#company_information');
				}

				myModalData();
				next_fs.hide(); 
				current_fs.show();
				print_fs.hide();
				$('#declarations').hide();
			});
			
			
			//account information - Step 1
			//company information - step 2
			//personal_information- step 3
			
			$('#ok-quote').click(function(){
				//alert("Clicked");
				if($('#company_information').is(":visible")){ //step 2
					current_fs = $('#company_information');
					next_fs = $('#personal_information');
				}else if ($('#personal_information').is(":visible")){
					current_fs = $('#personal_information');
					next_fs = $('#company_information'); /*Change to print**/
				}

				//myModalData();
				next_fs.show(); 
				current_fs.hide();
				print_fs.hide();
				$('#declarations').hide();
			});
			
			$('#to-declarations').click(function(){
				
				if($('#personal_information').is(":visible")){ 
					$('#declarations').show();
					$('#personal_information').hide();					
					$('#print-email-quote').hide();
					$('#company_information').hide();
				
				}
			});
			
			$('#to-personal-info').click(function(){
				
				if($('#declarations').is(":visible")){ 
					$('#declarations').hide();
					$('#personal_information').show();					
					$('#print-email-quote').hide();
					$('#company_information').hide();				
				}
			});
			
			$( ".excluded_activities_extension" ).change(function() {
				if($('#excluded_activities_extension').find(":selected").text()=="Yes"){
				//premiumAmount=premiumAmount+(premiumAmount*0.25);
				alert("Your new premium is KES+premiumAmount0.25 "  );
			}
				 // console.log("HI");
		});
			
			$('#declarations').hide();			
			$('#student-internship-cover-table').hide();
			//$('#pa-cover-table').hide();
		 
			 //http://formvalidation.io/examples/bootstrap-datepicker/
			 
			/* $('#myform').formValidation({
			        framework: 'bootstrap',
			        icon: {
			            valid: 'glyphicon glyphicon-ok',
			            invalid: 'glyphicon glyphicon-remove',
			            validating: 'glyphicon glyphicon-refresh'
			        },
			        fields: {

			        	enddate: {
			                validators: {
			                    notEmpty: {
			                        message: 'The date is required'
			                    },
			                    enddate: {
			                        format: 'MM/DD/YYYY',
			                        message: 'The date is not a valid'
			                    }
			                }
			            },
			            
			            custdob1: {
			                validators: {
			                    notEmpty: {
			                        message: 'The date is required'
			                    },
			                    custdob1: {
			                        //format: 'MM/DD/YYYY',
			                       // message: 'The date is not a valid'
			                    }
			                }
			            }
			        
			        }
			        
			        
			    });*/
			
			
	
	        		
	});


		$("#myBtn").click(function(){
	        $("#myModal").modal();
	    });

		function ajaxSubmit() {
			alert('Good Form');
		}

		function paStudentPaView() {
			var selected = $('#coverOption_pa_stdnt').find(":selected").text(); 

			if(selected=="Personal Accident Cover"){
				 $('#student-internship-cover-table').hide();
				 $('#pa-cover-table').show();
				 $('#cover-start-end-dates').show();
				 
			}else if(selected=="Student Accident Cover"){
				$('#student-internship-cover-table').show();
				 $('#pa-cover-table').hide();
				 $('#cover-start-end-dates').show();
			}
		}

		function myModalData(){	

			var premiumAmount;
			var strtdate = $('#startdate').val();
			var enddte = $('#enddate').val();
			var selected = $('#coverOption_pa_stdnt').find(":selected").text(); 
			
			

			//Calculate premiums
			
			//if(selected=="Student Personal Accident"){
				//$("#exampleModalLabel").html("Personal Accident Cover");
			//}else if(selected==="2"){
				//$("#exampleModalLabel").html("Student Personal Accident Cover");
			//}el/se{
				
			//}
			
			//if(computeAge(customerDOB)<=65){
				//alert("Customer Age is between 18 and 56: "+computeAge(customerDOB));
			//}else{
				//alert("Customer Age is greater than 65: "+);
			//}
			
			//alert("1 ");
			
			//console.log(selected);
			//console.log(strtdate);
			//console.log(enddte);
			
			
			
			if(selected=="Personal Accident Cover" ){//&& customerAge()=="normal"
				var selectedOption=$('input[name=coverOption]:checked').val();
				console.log(selectedOption);
				
				customerAge();
				if(selectedOption=="A"){
					premiumAmount=2800;
				}else if(selectedOption=="B"){
					premiumAmount= 4000;
				}else if(selectedOption=="C"){
					premiumAmount=6800;
				}else if(selectedOption=="D"){
					premiumAmount=9900;
				}else if(selectedOption=="E"){
					premiumAmount=14600;
				}else if(selectedOption=="F"){
					premiumAmount=20200
				}else if(selectedOption=="G"){
					premiumAmount=26300;
				}else{}

			/*}else if(selected=="Personal Accident Cover" && customerAge()=="advanced"){
				//old memmbers ratings
				if(selectedOption=="A"){
					premiumAmount=3200;
				}else if(selectedOption=="B"){
					premiumAmount= 4800;
				}else if(selectedOption=="C"){
					premiumAmount=8200;
				}else if(selectedOption=="D"){
					premiumAmount=11900;
				}else if(selectedOption=="E"){
					premiumAmount=17500;
				}else if(selectedOption=="F"){
					premiumAmount=24300
				}else if(selectedOption=="G"){
					premiumAmount=31600
				}else{}
				
			}else if(selected=="Personal Accident Cover" && customerAge()=="out"){*/
				
			}				
			else if(selected=="Student Accident Cover"){

				var s_selectedOption=$('input[name=s_coverOption]:checked').val();				
				var studentAnnualSemiannual=$('#annualSemiaAnnual').val();
				
				if(studentAnnualSemiannual=="Annual"){
					if(s_selectedOption=="A"){
						premiumAmount=1000;
					}else if(s_selectedOption=="B"){
						premiumAmount=1200;
					}else if(s_selectedOption=="C"){
						premiumAmount=1500;
					}else if(s_selectedOption=="D"){
						premiumAmount=2000;
					}else{}

				}else if(studentAnnualSemiannual=="Semi Annual"){
					if(s_selectedOption=="A"){
						premiumAmount=500;
					}else if(s_selectedOption=="B"){
						premiumAmount=600;
					}else if(s_selectedOption=="C"){
						premiumAmount=750;
					}else if(s_selectedOption=="D"){
						premiumAmount=1000;
					}else{}

				}else{
					premiumAmount="Please select a Cover";
				}
				

			}else{

			}
			

			
			$("#exampleModalLabel").html(selected);
			$("#premium-amount").html("<b>"+formatedNumber(premiumAmount)+"</b>");
			$("#premiumamount").val(premiumAmount);
			$("#Start-date").html( strtdate );
			$("#end-date").html(enddte);
		}
		
		function computeAge(custAge){
			var today = new Date(); //"now"
			var custDOB = stringToDate(custAge,"dd/MM/yyyy","/");
			var age = Math.abs(today-custDOB);  // difference in milliseconds			
			return 	Math.floor((age/1000) / 31536000);
		}
		
		function customerAge() {
			//alert ("tt"+customerDOB);//customerDOB
			

			
			
			console.log("customerAge()");
			//if(customerDOB>=18 && customerDOB<=50){
				//alert ("normal");
				//return "normal";
			//}else if(customerDOB=51 && computeAgecustomerDOB<=65){
				//return "advanced";
				//alert ("advanced");
			//}else{
				//alert ("");
			//}
		}
		
		function setCoverEndDate(){
			var startdate=$('#startdate').val();
			var todaysdate=new Date();
			
			
			var _startdate =stringToDate(startdate,"dd/MM/yyyy","/");
			
			//console.log("Start date=: "+_startdate);
			//console.log("todays date= "+todaysdate);
			
			if(_startdate<todaysdate){
				alert('Cover Start date must not be a past date');				
				$('#startdate').val(today);
				
			}else{
				
				var year = _startdate.getFullYear();			
				var month = _startdate.getMonth();
				 month = month.length > 1 ? month : '0' + month;
				
				var day = _startdate.getDate()-1;
				day = day.length > 1 ? day : '0' + day;
				
				var c = new Date(year+1, month, day);			
				$('#enddate').val(c.getDate()+'/'+(c.getMonth()+1) +'/'+c.getFullYear());
			}
						
		}
		
		
		function stringToDate(_date,_format,_delimiter)
		{
		            var formatLowerCase=_format.toLowerCase();
		            var formatItems=formatLowerCase.split(_delimiter);
		            var dateItems=_date.split(_delimiter);
		            var monthIndex=formatItems.indexOf("mm");
		            var dayIndex=formatItems.indexOf("dd");
		            var yearIndex=formatItems.indexOf("yyyy");
		            var month=parseInt(dateItems[monthIndex]);
		            month-=1;
		            var formatedDate = new Date(dateItems[yearIndex],month,dateItems[dayIndex]);
		            return formatedDate;
		}
		
		

		function formatedNumber(value){
			return 'KES '+value.toFixed(2).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
		}
		
		function increasePremiumby25() {
			alert("Hi");
			console.log("Hi");
		}