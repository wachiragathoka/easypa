<?php 
include 'controller/preview_c.php';

//customer date
$cust_dataSource=new Preview_C();
$customerData=$cust_dataSource->getCustomerdata($_SESSION ['quote_Id']);

$policy_dataSource= new Preview_C();
$policyData=$policy_dataSource->getPolicyDetails($_SESSION ['quote_Id']);

//var_dump($customerData);
//var_dump($policyData);
//var_dump($_SESSION ['quote_Id']);

?>
	<!-- <div class="row">
		<div class="col-lg-12 ">
			<h3>Personal Accident Cover</h3>
		</div>
	</div> -->
	
	<!-- row -->
	<div class="row">
		<div class="col-lg-12 quote-element-header">CLIENT DETAILS</div>
	</div>

	<!-- Row -->
	<div class="row">
		<div class="col-lg-3 data-cell side-header">Name</div>
		<div class="col-lg-3 data-cell"><?php echo $customerData['0']?></div>
		<div class="col-lg-3 data-cell side-header">Date of Birth</div>
		<div class="col-lg-3 data-cell"><?php echo $customerData['1']?></div>
	</div>
	
	<!-- Row -->
	<div class="row">
		<div class="col-lg-3 data-cell side-header">ID No</div>
		<div class="col-lg-3 data-cell"><?php echo $customerData['2']?></div>
		<div class="col-lg-3 data-cell side-header">KRA PIN</div>
		<div class="col-lg-3 data-cell"><?php echo $customerData['3']?></div>
	</div>
	
	<!-- Row -->
	<div class="row">
		<div class="col-lg-3 data-cell side-header">P.O Box</div>
		<div class="col-lg-3 data-cell"><?php echo $customerData['4']?></div>
		<div class="col-lg-3 data-cell side-header">Postal Code</div>
		<div class="col-lg-3 data-cell"><?php echo $customerData['5']?></div>
	</div>
	
	<!-- Row -->
	<div class="row">
		<div class="col-lg-3 data-cell side-header">Phone Number</div>
		<div class="col-lg-3 data-cell"><?php echo $customerData['6']?></div>
		<div class="col-lg-3 data-cell side-header">Email</div>
		<div class="col-lg-3 data-cell"><?php echo $customerData['7']?></div>
	</div>
	
	<!-- Row -->
	<div class="row">
		<div class="col-lg-3 data-cell side-header">Next of kin</div>
		<div class="col-lg-3 data-cell"><?php echo $customerData['8']?></div>
		<div class="col-lg-3 data-cell side-header">Relationship</div>
		<div class="col-lg-3 data-cell"><?php echo $customerData['9']?></div>
	</div>
	
	<!-- Row -->
	<div class="row">
		<div class="col-lg-3 data-cell side-header">Next of kin Phone Number</div>
		<div class="col-lg-3 data-cell"><?php echo $customerData['10']?></div>
		<div class="col-lg-3 data-cell side-header">Next of kin email</div>
		<div class="col-lg-3 data-cell"><?php echo $customerData['11']?></div>
	</div>
	
	<!-- row -->
	<div class="row">
		<div class="col-lg-12 quote-element-header">COVER DETAILS</div>
	</div>
	
	<!-- Row -->
	<div class="row">
		<div class="col-lg-3 data-cell side-header">Cover Amounts</div>
		<div class="col-lg-3 data-cell"><?php echo number_format($policyData['0'],2); ?></div>
		<div class="col-lg-3 data-cell side-header">Cover Option</div>
		<div class="col-lg-3 data-cell"><?php echo $policyData['1']?></div>
	</div>
	
	<!-- Row -->
	<div class="row">
		<div class="col-lg-3 data-cell side-header">Cover Start date</div>
		<div class="col-lg-3 data-cell"><?php echo $policyData['2']?></div>
		<div class="col-lg-3 data-cell side-header">Cover end Date</div>
		<div class="col-lg-3 data-cell"><?php echo $policyData['3']?></div>
	</div>	