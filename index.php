<?php 

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>easyDIRECT | Personal Accident Cover</title>

<link rel="stylesheet"	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

<!-- Include Bootstrap Datepicker -->
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.min.css" />
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker3.min.css" />

<!-- <link rel="stylesheet" href="http://bsdp-assets.blackcherry.us/1.3.0/datepicker.min.css">	 -->
<link rel="stylesheet" type="text/css" href="assets/css/style.css"> 
	
<!-- <script type="text/javascript" src="assets/js/jquery-3.2.1.min.js"></script>-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/app.js"></script>

<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.js"></script>
<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/additional-methods.js"></script>

<script src="http://bsdp-assets.blackcherry.us/1.3.0/bootstrap-datepicker.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.min.js"></script>

<script type="text/javascript" src="/bower_components/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>

<style type="text/css">
#personal_information, #company_information, #print-email-quote {
	display: none;
}

.my-input
{
    width: 100%;
    padding: 4px 0 4px 0 !important;
}

#eventForm .form-control-feedback {
    top: 0;
    right: -15px;
}

</style>
</head>
<body>
	<div class="container-fluid">
	<div class="top"> </div>
<div class="top2" align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="http://easydirect.co.ke/assets/easy-direct-logo.png"></div><br />
		
		<div class="col-lg-8">
			<form class="form-horizontal" action="" method="POST" id="myform">

				<!-- Step 1 -->
				<fieldset id="account_information" class="">
					<legend>Lets Know you first</legend>
					<div class="form-group">
						<label for="fname" class="col-lg-4 control-label">First Name*</label>
						<div class="col-lg-3">
							<input type="text" class="form-control" id="fname"
								name="fname" placeholder="First Name">
						</div>
					</div>
					
					<!-- Date of birth -->
					<div class="form-group">
						 <label class="col-lg-4 control-label">Date of Birth (dd/mm/yy)*</label>
						 	<div class="col-lg-4 date">
						 		<div class="input-group input-append date" id="datePicker">
						 			<input type="text" class="form-control" name="custdob1" id="custdob1" />
                					<span class="input-group-addon add-on"><span class="glyphicon glyphicon-calendar"></span></span>
						 		</div>
						 	</div>					
					</div>
					
					<!-- Customer email address -->
					<div class="form-group">
						<label for="email" class="col-lg-4 control-label">Your Email
							Address*</label>
						<div class="col-xs-5">
							<input type="email" class="form-control" id="email" name="email"
								placeholder="Email">
						</div>
					</div>
					<div class="form-group">
						<label for="conf_phone" class="col-lg-4 control-label">Your Phone
							Number*</label>
						<div class="col-xs-5">
							<!-- <input type="password" class="form-control" id="conf_password" name="conf_password" placeholder="e.g. +254722000000"> -->
							<input type="text" class="form-control bfh-phone" data-format="+254 (dd) dddddd" name="conf_phone" id="conf_phone" placeholder="e.g. +254722000000" >

						</div>
					</div>

					<div class="form-group">
						<label for=" " class="col-lg-4 control-label"></label>
						<div class="col-lg-8">
							<p>
								<a class="btn btn-primary next">next</a>
							</p>

						</div>
					</div>

				</fieldset>


				<!-- Step 2 -->
				<fieldset id="company_information" class="">
					<legend>Your Personal accident Cover </legend>

					<!-- <div class="form-group">
						<label for="company" class="col-lg-4 control-label">Company</label>
						<div class="col-lg-8">
							<input type="text" class="form-control" id="company" name="company" placeholder="Company">
						</div>
					</div> -->

					<div class="form-group">
						<label for="coverOption" class="col-lg-4 control-label">Your cover
							Option</label>
						<div class="col-lg-8">
							<select class="form-control" id="coverOption_pa_stdnt" name="coverOption_pa_stdnt" onchange="paStudentPaView()">
								<option selected>Choose One...</option>
								<option value="Personal Accident Cover">Personal Accident Cover</option>
								<option value="Student Accident Cover">Student Accident Cover</option>
							</select>
						</div>
					</div>

					<!--  <div class="form-group">
						<label for="url" class="col-lg-4 control-label">Website url</label>
						<div class="col-lg-8">
							<input type="text" class="form-control" id="url" name="url" placeholder="Website url">
						</div>
					</div>-->

					<div class="form-group">
						<label for="url" class="col-lg-4 control-label">Select preferred
							Option</label>
						<div class="col-xs-8">

							<!-- table -->

			<div class="pa-cover-table" id="pa-cover-table">
							<table class="table table-bordered">
								<thead class="thead-default">
									<tr>
										<th class="th-titles" align="center">Premium</th>
										<th class="th-titles" align="center">Option A <br>KES 2,800</th>
										<th class="th-titles" align="center">Option B <br>KES 4,000</th>
										<th class="th-titles" align="center">Option C <br>KES 6,800</th>
										<th class="th-titles" align="center">Option D <br>KES 9,900</th>
										<th class="th-titles" align="center">Option E <br>KES 14,600</th>
										<th class="th-titles" align="center">Option F <br>KES 20,200</th>
										<th class="th-titles" align="center">Option G <br>KES 26,300</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td width="420%" scope="row">Accidental Death</td>
										<td align="right" class="align-right">&nbsp;&nbsp;&nbsp;&nbsp;750,000</td>
										<td align="right" class="align-right">1,000,000</td>
										<td align="right" class="align-right">2,000,000</td>
										<td align="right" class="align-right">3,000,000</td>
										<td align="right" class="align-right">&nbsp;&nbsp;&nbsp;5,000,000</td>
										<td align="right" class="align-right">&nbsp;&nbsp;&nbsp;7,500,000</td>
										<td align="right" class="align-right">&nbsp;&nbsp;10,000,000</td>
									</tr>
									<tr>
										<td width="40%">Accidental Permanent Total Disablement
											(Continental Scale Benefts)</td>
										<td align="right" class="align-right">750,000</td>
										<td align="right" class="align-right">1,000,000</td>
										<td align="right" class="align-right">2,000,000</td>
										<td align="right" class="align-right">3,000,000</td>
										<td align="right" class="align-right">5,000,000</td>
										<td align="right" class="align-right">7,500,000</td>
										<td align="right" class="align-right">10,000,000</td>
									</tr>
									<tr>
										<td width="40%">Hospital Cash</td>
										<td align="right" class="align-right">2,000</td>
										<td align="right" class="align-right">2,500</td>
										<td align="right" class="align-right">5,000</td>
										<td align="right" class="align-right">7,500</td>
										<td align="right" class="align-right">8,500</td>
										<td align="right" class="align-right">10,000</td>
										<td align="right" class="align-right">20,000</td>
									</tr>
									<tr>
										<td width="40%">Accidental Temporary , Total Disablement,
											(Loss of Income) per week maximum 104 weeks</td>
										<td align="right" class="align-right">3,500</td>
										<td align="right" class="align-right">5,000</td>
										<td align="right" class="align-right">10,000</td>
										<td align="right" class="align-right">15,000</td>
										<td align="right" class="align-right">20,000</td>
										<td align="right" class="align-right">25,000</td>
										<td align="right" class="align-right">30,000</td>
									</tr>
									<tr>
										<td width="40%">Accidental Medical Expense</td>
										<td align="right" class="align-right">75,000</td>
										<td align="right" class="align-right">100,000</td>
										<td align="right" class="align-right">200,000</td>
										<td align="right" class="align-right">250,000</td>
										<td align="right" class="align-right">300,000</td>
										<td align="right" class="align-right">400,000</td>
										<td align="right" class="align-right">500,000</td>
									</tr>
									<tr>
										<td width="40%">6. Artifcial Appliance (Accidental Loss)</td>
										<td align="right" class="align-right">10,000</td>
										<td align="right" class="align-right">20,000</td>
										<td align="right" class="align-right">25,000</td>
										<td align="right" class="align-right">30,000</td>
										<td align="right" class="align-right">35,000</td>
										<td align="right" class="align-right">40,000</td>
										<td align="right" class="align-right">50,000</td>
									</tr>
									<tr>
										<td width="40%">7. Last Expense (Accidental Death)</td>
										<td align="right" class="align-right">10,000</td>
										<td align="right" class="align-right">15,000</td>
										<td align="right" class="align-right">25,000</td>
										<td align="right" class="align-right">35,000</td>
										<td align="right" class="align-right">50,000</td>
										<td align="right" class="align-right">50,000</td>
										<td align="right" class="align-right">75,000</td>
									</tr>
									<tr>
										<td height="30px" align="center"></td>
										<td height="30px" align="center"><input id="A" type="radio"
											name="coverOption" value="A"><label for="A"><span><span></span></span>
										</label></td>
										<td height="30px" align="center"><input id="B" type="radio"
											name="coverOption" value="B"><label for="B"><span><span></span></span>
										</label></td>
										<td height="30px" align="center"><input id="C" type="radio"
											name="coverOption" value="C"><label for="C"><span><span></span></span>
										</label></td>
										<td height="30px" align="center"><input id="D" type="radio"
											name="coverOption" value="D"><label for="D"><span><span></span></span>
										</label></td>
										<td height="30px" align="center"><input id="E" type="radio"
											name="coverOption" value="E"><label for="E"><span><span></span></span>
										</label></td>
										<td height="30px" align="center"><input id="F" type="radio"
											name="coverOption" value="F"><label for="F"><span><span></span></span>
										</label></td>
										<td height="30px" align="center"><input id="G" type="radio"
											name="coverOption" value="G"><label for="G"><span><span></span></span>
										</label></td>
									</tr>
								</tbody>
							</table>
			</div>
							<!-- personal accident table end -->
							
					<div class="student-internship-cover-table" id="student-internship-cover-table">
					
					<!-- <div class="form-group">
						<label for="" class="col-lg-4 control-label">Annual or Semi Annual?</label> 
						<div class="col-lg-5">-->
						
						<!-- <input id="annual" type="radio" name="annualSemiaAnnual" value="annual"><label for="annual"><span><span>Annual</span></span></label><br>
								<input id="semiannual" type="radio" name="annualSemiaAnnual" value="semiannual"><label for="semiannual"><span><span>Semi Annual</span></span></label> -->
							<div class="col-lg-8">
							<select class="form-control" id=annualSemiaAnnual name="annualSemiaAnnual">
								<option selected>Choose One...</option>
								<option value="Annual">Annual Cover</option>
								<option value="Semi Annual">Semi Annual Cover</option>
							</select> 
						 </div>
						 <p>&nbsp;</p>
					<!-- </div> -->
					
					
						<table class="table table-bordered">
								<thead class="thead-default">
									<tr>
										<th class="th-titles" align="center">Options</th>
										<th class="th-titles" align="center">Plan A</th>
										<th class="th-titles" align="center">Plan B</th>
										<th class="th-titles" align="center">Plan C</th>
										<th class="th-titles" align="center">Plan D</th>										
									</tr>
								</thead>
								<tbody>
									<tr>
										<td width="40%" scope="row">Accidental Death</td>
										<td align="right" class="align-right">200,000</td>
										<td align="right" class="align-right">250,000</td>
										<td align="right" class="align-right">300,000</td>
										<td align="right" class="align-right">400,000</td>										
									</tr>
									<tr>
										<td width="40%" scope="row">Accidental disablement</td>
										<td align="right" class="align-right">200,000</td>
										<td align="right" class="align-right">250,000</td>
										<td align="right" class="align-right">300,000</td>
										<td align="right" class="align-right">400,000</td>										
									</tr>
									<tr>
										<td width="40%" scope="row">Accidental medical reimbursement</td>
										<td align="right" class="align-right">20,000</td>
										<td align="right" class="align-right">25,000</td>
										<td align="right" class="align-right">30,000</td>
										<td align="right" class="align-right">40,000</td>										
									</tr>
									<tr>
										<td height="30px" align="center"></td>
										<td height="30px" align="center"><input id="s_A" type="radio"
											name="s_coverOption" value="A"><label for="s_A"><span><span></span></span>
										</label></td>
										<td height="30px" align="center"><input id="s_B" type="radio"
											name="s_coverOption" value="B"><label for="s_B"><span><span></span></span>
										</label></td>
										<td height="30px" align="center"><input id="s_C" type="radio"
											name="s_coverOption" value="C"><label for="s_C"><span><span></span></span>
										</label></td>
										<td height="30px" align="center"><input id="s_D" type="radio"
											name="s_coverOption" value="D"><label for="s_D"><span><span></span></span>
										</label></td>
										</tr>
									</tbody>
									</table>					
					</div>

						</div>
					</div>

					<!-- Dates -->
					<div id="cover-start-end-dates">
					<div class="form-group">
						<label for="url" class="col-lg-4 control-label">Cover Start date</label>
						<div class="col-lg-4">
							<div class="form-group">
							
								<div class="input-group input-append date" id="datetimepicker6">
									<input type='text' class="form-control" name="startdate" id="startdate" onchange="setCoverEndDate()" /> <span
										class="input-group-addon add-on"> <span
										class="glyphicon glyphicon-calendar"></span>
									</span>
								</div>
								
							</div>
						</div>
						</div>
						
						<div class="form-group">
						<label for="url" class="col-lg-4 control-label">Cover End Date</label>
						<div class="col-lg-4">
							<div class="form-group">
								<div class='input-group date' id='datetimepicker7'>
									<input type='text' class="form-control" name="enddate" id="enddate"/> <span
										class="input-group-addon"> <span
										class="glyphicon glyphicon-calendar"></span>
									</span>
								</div>
							</div>
						</div>
					</div>
					</div>
					
					<div class="form-group">
						<label for=" " class="col-lg-4 control-label"></label>
						<div class="col-lg-8">
							<p>
								<a class="btn btn-info" id="stage2">Previous</a> <button type="button" class="btn btn-primary" id="preview-quote" data-toggle="modal" data-target="#myModal">Preview Quote</button> <a class="btn btn-success next">next</a>
							</p>

						</div>
					</div>
					
					<!-- <p>
						<a class="btn btn-primary next">next</a>
					</p> -->
					
					
				</fieldset>


				<!-- Step 3 -->
				<fieldset id="personal_information" class="">
					<legend>Please lets Know you better</legend>
					<div class="form-group">
						<label for="fname2" class="col-lg-4 control-label">First Name*</label>
						<div class="col-lg-8">
							<input type="text" class="form-control" id="fname2" name="fname2"
								placeholder="First Name">
						</div>
					</div>
					
					<!-- Second Name -->
					<div class="form-group">
						<label for="sname" class="col-lg-4 control-label">Second Name</label>
						<div class="col-xs-4">
							<input type="text" class="form-control" id="sname" name="sname"
								placeholder="Second name">
						</div>
					</div>
					
					<!-- Last Name -->
					<div class="form-group">
						<label for="lname" class="col-lg-4 control-label">Last Name*</label>
						<div class="col-xs-4">
							<input type="text" class="form-control" id="lname" name="lname"
								placeholder="Last Name">
						</div>
					</div>
					
					<!-- ID Numnber -->
					<div class="form-group">
						<label for="conf_idNo" class="col-lg-4 control-label">ID/Passport Number*</label>
						<div class="col-xs-4">							
							<input type="text" class="form-control" name="idpass" id="idpass" placeholder="ID / Passport Number">
						</div>
					</div>
					
					<!-- Phone Number -->
					<div class="form-group">
						<label for="conf_phone" class="col-lg-4 control-label">Your Phone Number*</label>
						<div class="col-lg-4">
							
							<input type="text" class="form-control bfh-phone"
								name="conf_phone"
								placeholder="e.g. +254722000000">

						</div>
					</div>				
					
					<!-- Email address -->
					<div class="form-group">
						<label for="email2" class="col-lg-4 control-label">Email*</label>
						<div class="col-lg-5">
							<input type="email" class="form-control" id="email2" name="email2"
								placeholder="Email">
						</div>
					</div>
					
					<!-- KRA PIN -->
					<div class="form-group">
						<label for="krapin" class="col-lg-4 control-label">KRA PIN*</label>
						<div class="col-lg-4">
							<input type="text" class="form-control" id="krapin" name="krapin"
								placeholder="KRA PIN">
						</div>
					</div>

					<!-- Date of Birth -->
					<div class="form-group">
					
					
						<label for="dob" class="col-lg-4 control-label">Date of Birth*</label>
						<div class="col-lg-4">
						<div class='input-group input-append date' id='dob'>
							<input type='text' class="form-control" name="custdob"  /> 
							<span class="input-group-addon add-on"> <span	class="glyphicon glyphicon-calendar"></span></span>							
						</div>
						
						</div>
					</div>
					
					<!-- Postal Address -->
					<div class="form-group">
						<label for="postaladdress" class="col-lg-4 control-label">P.O. Box</label>
						<div class='col-lg-5'>
							<input type='text' class="form-control" name="postaladdress" id="postaladdress" placeholder="Postal Address"/>
						</div>
					</div>
					
					<!-- postal code -->
					<div class="form-group">
						<label for="postalcode" class="col-lg-4 control-label">Postal Code*</label>
						<div class='col-lg-3'>
							<input type='text' class="form-control" name="postalcode" id="postalcode" placeholder="Postal Code"/>
						</div>
					</div>
					
					<!-- Next of KIN full Name -->
					<div class="form-group">
						<label for="nok" class="col-lg-4 control-label">Next of kin Full names*</label>
						<div class='col-lg-8'>
							<input type='text' class="form-control" name="nok" id="nok" placeholder="e.g. James Odhiambo Kamau"/>
						</div>
					</div>


					<!-- Relationship with next of KIN -->
					<div class="form-group">
						<label for="nokrelationship" class="col-lg-4 control-label">Relationship with next of kin*</label>
						<div class="col-lg-4">
							<select class="form-control" id="nokrelationship" name="nokrelationship">
								<option selected>Choose One...</option>
								<option value="Father">Father</option>
								<option value="Mother">Mother</option>
								<option value="Spouse">Spouse</option>
								<option value="Brother">Brother</option>
								<option value="Sister">Sister</option>
								<option value="Daughter">Daughter</option>
								<option value="Son">Son</option>
								<option value="Friend">Friend</option>
								<option value="Other">Other</option>
							</select>
						</div>
					</div>

				<!-- Next of KIN Phone Number -->
					<div class="form-group">
						<label for="conf_nokphone" class="col-lg-4 control-label">Next of Kin Phone Number*</label>
						<div class="col-lg-8">							
							<input type="text" class="form-control" name="conf_nokphone" id="conf_nokphone" placeholder="e.g. +254722000000">
						</div>
					</div>	
					
					<!-- Next of KIN emiail address -->
					<div class="form-group">
						<label for="conf_nokemail" class="col-lg-4 control-label">Next of Kin Email address*</label>
						<div class="col-lg-8">							
							<input type="text" class="form-control" name="conf_nokemail" id="conf_nokemail" placeholder="joe@example.com">
						</div>
					</div>	
					
					<!-- Buttons -->
					<div class="form-group">
						<label for=" " class="col-lg-4 control-label"></label>
						<div class="col-lg-8">
							<p>
								<a class="btn btn-info" id="previous">Previous</a>					
								<input class="btn btn-success next" type="button" value="A few Questions About you" id="to-declarations">
							</p>

						</div>
					</div>
				</fieldset>

			
			

				<!-- Step 4 -->
				<?php include 'views/declarations.php';?>
				
			</form>	
			<!-- Print and Email -->
			<!-- Step 5 -->
			<fieldset id="print-email-quote" class="">
					<legend>Hurray, You quote is ready.</legend>
					
					
					<div class="form-group">
						<!-- <label  class="col-lg-4 control-label"></label> -->
						<div class="col-lg-12">
						
						<!-- Generate a Quote preview -->
						
						
						<!-- End quote -->
						
							<p>
								<!-- <a class="btn btn-success">Print and Email my quote</a>  --><a class="btn btn-primary next" href="./PDFQuote.php">Print my Quote</a> <a class="btn btn-info">Email My Quote</a>
							</p>

						</div>
					</div>

				</fieldset>
				

			<!-- Modal -->
			<!-- Modal -->
			<div class="modal fade" id="myModal" tabindex="-1" role="dialog"
				aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">

					<!-- Modal content-->
					<div class="modal-content">
						<div class="modal-header w3-teal">
							<h5 class="modal-title" id="exampleModalLabel">Personal Accident Cover Details</h5>
							<button type="button" class="close" data-dismiss="modal"
								aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>

						</div>
						<div class="modal-body">
							<table class="table table-striped">
								<thead>
									<tr>
										<th>Premium Amount</th><th><div id="premium-amount"></div> </th>									
									</tr>
								</thead>
								<tbody>
									
									<tr>
										<td>Cover Start Date</td><td><div id="Start-date"></div></td>
									</tr>
									<tr>
										<td>Cover Stop Date</td><td><div id=end-date></div></td>
									</tr>
									
								</tbody>
							</table>
							
							<!-- <p>
								<table>
									<thead>
										<tr>
											<th>Accidental Death</th>
											<th>Accidental Permanent Total Disablement (Continental Scale Benefts)</th>
											<th>Hospital Cash</th>
											<th>Accidental Temporary , Total Disablement, (Loss of Income) per week maximum 104 weeks</th>
											<th>Accidental Medical Expense</th>
											<th>Artifcial Appliance (Accidental Loss)</th>
											<th> Last Expense (Accidental Death)</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>1000</td>
											<td>1000</td>
											<td>1000</td>
											<td>1000</td>
											<td>1000</td>
											<td>1000</td>
											<td>1000</td>
										</tr>
									</tbody>
								</table>
							</p> -->
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-danger" data-dismiss="modal">Modify Quote</button>
							 <button type="button" class="btn btn-primary" id="ok-quote" data-dismiss="modal">Ok Proceed</button> <!--  <a class="btn btn-primary" id="ok-quote">Ok Proceed</a> -->
						</div>
					</div>

				</div>
			</div>
			<!-- end Modal -->


		</div>
	</div>

	<!-- <script type="text/javascript">
		
	</script> -->

<div class="footer"> &copy; <?php echo date("Y")?> UAP Old Mutual.All rights resrved</div>	
</body>
</html>