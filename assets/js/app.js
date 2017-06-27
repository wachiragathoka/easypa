$(document).ready(function(){
	
			var customerDOB="";
			var todaydate= new Date();

			// Custom method to validate username
			$.validator.addMethod("usernameRegex", function(value, element) {
				return this.optional(element) || /^[a-zA-Z0-9]*$/i.test(value);
			}, "Username must contain only letters, numbers");

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
						},
						//custdob1: {
							//required: true,							
						//},
						email: {
							required: true,
							minlength: 3,
							email: true,
						},
						conf_phone:{
							required: true,
							
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
							
						},
						
						enddate:{
							required: true,							
							greaterThan: "#startdate",
						},
					},
					messages: {
						fname: {
							required: "First name required",
							minlength: jQuery.validator.format("Please, at least 3 characters are necessary")
						},
						custdob1: {
							required: "We would need this to give you a more accurate quote",
						},
						email: {
							required: "Email is required",
						},
						conf_phone: {
							required: "This is how we will reach you",
						},
						email :{
							required: "This is where we will send the quote",
						},
						
						coverOption_pa_stdnt:{
							required: "Please select a cover",
						},
						
						startdate:{
								required: "When is the cover supposed to start",
						},
						
						enddate:{
							required: "When cover ends",
							greaterThan : "Must be Greater than strat date",
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

				/**Date validator */
				jQuery.validator.addMethod("greaterThan", 
						function(value, element, params) {

						    if (!/Invalid|NaN/.test(new Date(value))) {
						        return new Date(value) > new Date($(params).val());
						    }

						    return isNaN(value) && isNaN($(params).val()) 
						        || (Number(value) > Number($(params).val())); 
						},'Must be greater than {0}.');
				
				
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
		        	
		        	//console.log(computeAge($('#custdob1').val()));
		        	//customerDOB=$('#custdob1').val();
		        	if(computeAge($('#custdob1').val())<1){
		        		console.log("Less "+computeAge($('#custdob1').val()))
		        	}else{
		        		console.log("Ok"+computeAge($('#custdob1').val()))
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
				  alert( "Handler for .change() called." );
				  console.log("HI");
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
				 
			}else if(selected=="Student Personal Accident Cover"){
				$('#student-internship-cover-table').show();
				 $('#pa-cover-table').hide();
			}
		}

		function myModalData(){	

			var premiumAmount;
			var strtdate = $('#startdate').val();
			var enddte = $('#enddate').val();
			var selected = $('#coverOption_pa_stdnt').find(":selected").text(); 
			var selectedOption=$('input[name=coverOption]:checked').val();
			

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
			
			console.log(selected);
			console.log(strtdate);
			console.log(enddte);
			console.log(selectedOption);
			
			
			if(selected=="Personal Accident Cover" ){//&& customerAge()=="normal"
				
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
					premiumAmount=26300
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
			else if(selected=="Student Personal Accident Cover"){

				var s_selectedOption=$('input[name=s_coverOption]:checked').val();				
				var studentAnnualSemiannual=$('#annualSemiaAnnual').val();
				
				if(studentAnnualSemiannual=="annual"){
					if(s_selectedOption=="A"){
						premiumAmount=1000;
					}else if(s_selectedOption=="B"){
						premiumAmount=1200;
					}else if(s_selectedOption=="C"){
						premiumAmount=1500;
					}else if(s_selectedOption=="D"){
						premiumAmount=2000;
					}else{}

				}else if(studentAnnualSemiannual=="semiannual"){
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
			
			//if($('#excluded_activities_extension').find(":selected").text()){
				premiumAmount=premiumAmount+(premiumAmount*0.25);
				alert("Your new premium is KES " +premiumAmount );
			//}
			
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
			
			//
			
			
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