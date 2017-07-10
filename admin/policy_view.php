<?php
$policy_id=$_GET['p_id'];
include '../data/connection.php';
include './model/admin_model.php';
include './controller/admin_c.php';

$policy_datasource=new Admin_C();
$policy_data=$policy_datasource->getPolicy($policy_id);

include 'header.php'; ?>

<?php var_dump($policy_data);?>

<div class="quote-element-header">
<div class="row">
	<div  class="col-lg-1">CLIENT DETAILS</div>
</div>

		<div class="col-lg-1 data-cell">No</div>
		<div class="col-lg-3 data-cell">Name</div>
		<div class="col-lg-1 data-cell">Date of Birth</div>
		<div class="col-lg-1 data-cell">Policy</div>
		<div class="col-lg-1 data-cell">Premium</div>
		<div class="col-lg-1 data-cell">Start date</div>
		<div class="col-lg-1 data-cell">End date</div>
		<div class="col-lg-1 data-cell">Paid</div>
		<div class="col-lg-1 data-cell">&nbsp;</div>			
		</div>	
	</div>	


<?php include 'footer.php';?>