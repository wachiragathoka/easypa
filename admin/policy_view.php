<?php
$policy_id=$_GET['p_id'];
include '../data/connection.php';
include './model/admin_model.php';
include './controller/admin_c.php';

$policy_datasource=new Admin_C();
$policy_data=$policy_datasource->getPolicy($policy_id);

include 'header.php'; ?>

<?php //var_dump($policy_data);?>
<br />

<div class="row">
		<div class="col-lg-12 quote-element-header">CLIENT DETAILS</div>
	</div>

	<!-- Row -->
	<div class="row">
		<div class="col-lg-3 data-cell side-header">Name</div>
		<div class="col-lg-3 data-cell"><?php echo $policy_data[0]['cust_firstname']." ".$policy_data[0]['cust_second_name']." ".$policy_data[0]['cust_last_name']?></div>
		<div class="col-lg-3 data-cell side-header">Date of Birth</div>
		<div class="col-lg-3 data-cell"><?php echo $policy_data[0]['cust_dob'];?></div>
	</div>
	
	<!-- Row -->
	<div class="row">
		<div class="col-lg-3 data-cell side-header">ID No</div>
		<div class="col-lg-3 data-cell"><?php echo $policy_data[0]['cust_id_no']?></div>
		<div class="col-lg-3 data-cell side-header">KRA PIN</div>
		<div class="col-lg-3 data-cell"><?php echo $policy_data[0]['cust_kra_pin']; ?></div>
	</div>
	
	<!-- Row -->
	<div class="row">
		<div class="col-lg-3 data-cell side-header">P.O Box</div>
		<div class="col-lg-3 data-cell"><?php echo $policy_data[0]['cust_postaladdress']?></div>
		<div class="col-lg-3 data-cell side-header">Postal Code</div>
		<div class="col-lg-3 data-cell"><?php echo $policy_data[0]['cust_postalCode']?></div>
	</div>
	
	<!-- Row -->
	<div class="row">
		<div class="col-lg-3 data-cell side-header">Phone Number</div>
		<div class="col-lg-3 data-cell"><?php echo $policy_data[0]['cust_phone_no']?></div>
		<div class="col-lg-3 data-cell side-header">Email</div>
		<div class="col-lg-3 data-cell"><?php echo $policy_data[0]['cust_email']?></div>
	</div>
	
	<!-- Row -->
	<div class="row">
		<div class="col-lg-3 data-cell side-header">Next of kin</div>
		<div class="col-lg-3 data-cell"><?php echo $policy_data[0]['nok_name']?></div>
		<div class="col-lg-3 data-cell side-header">Relationship</div>
		<div class="col-lg-3 data-cell"><?php echo $policy_data[0]['nok_relationship']?></div>
	</div>
	
	<!-- Row -->
	<div class="row">
		<div class="col-lg-3 data-cell side-header">Next of kin Phone Number</div>
		<div class="col-lg-3 data-cell"><?php echo $policy_data[0]['nok_phone_no']?></div>
		<div class="col-lg-3 data-cell side-header">Next of kin email</div>
		<div class="col-lg-3 data-cell"><?php echo $policy_data[0]['nok_email']?></div>
	</div>
	
	<!-- row -->
	<div class="row">
		<div class="col-lg-12 quote-element-header">COVER DETAILS</div>
	</div>
	
	<!-- Row -->
	<div class="row">
		<div class="col-lg-3 data-cell side-header">Cover Amounts</div>
		<div class="col-lg-3 data-cell"><?php echo number_format($policy_data[0]['cover_premium'],2); ?></div>
		<div class="col-lg-3 data-cell side-header">Cover Option</div>
		<div class="col-lg-3 data-cell"><?php echo $policy_data[0]['cover_option_pa_std']." ".$policy_data[0]['cover_option'] ;?></div>
	</div>
	
	<!-- Row -->
	<div class="row">
		<div class="col-lg-3 data-cell side-header">Cover Start date</div>
		<div class="col-lg-3 data-cell"><?php echo $policy_data[0]['cover_startdate']?></div>
		<div class="col-lg-3 data-cell side-header">Cover end Date</div>
		<div class="col-lg-3 data-cell"><?php echo $policy_data[0]['cover_enddate']?></div>
	</div>	

	<!-- Row -->
	<div class="row">
		<div class="col-lg-3 data-cell"></div>
		<div class="col-lg-3 data-cell"><!-- <button class="btn btn-primary">&nbsp;&nbsp;&nbsp;Ok&nbsp;&nbsp;&nbsp;</button> --> </div>
		<div class="col-lg-3 data-cell"><a href="PDFQuote.php?policy_id=<?php echo $policy_id;?>"><button class="btn btn-success">&nbsp;&nbsp;&nbsp;Print&nbsp;&nbsp;&nbsp;</button></a></div>
		<div class="col-lg-3 data-cell"></div>
	</div>	<br><br><br>
<?php include 'footer.php';?>