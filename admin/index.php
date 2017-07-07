<?php include 'header.php'; 
include 'admin/controller/admin_c.php';

$saleslist=new Admin_C();
$saleslist->getAllPolicies();
?>
<div class="quote-element-header">
<div class="row">
		<div class="col-lg-1 data-cell">No</div>
		<div class="col-lg-3 data-cell">Name</div>
		<div class="col-lg-2 data-cell">Policy</div>
		<div class="col-lg-2 data-cell">Premium</div>
		<div class="col-lg-1 data-cell">Start date</div>
		<div class="col-lg-1 data-cell">End date</div>
		<div class="col-lg-1 data-cell">Paid</div>
		<div class="col-lg-1 data-cell">&nbsp;</div>			
		</div>	
	</div>	
	
	<div class="row">
		<div class="col-lg-1 data-cell">1</div>
		<div class="col-lg-3 data-cell">Matthew Wachira Gathoka</div>
		<div class="col-lg-2 data-cell">Student PA</div>
		<div class="col-lg-2 data-cell">1000</div>
		<div class="col-lg-1 data-cell ">12/12/2017</div>
		<div class="col-lg-1 data-cell">11/12/2018</div>
		<div class="col-lg-1 data-cell">Paid</div>
		<div class="col-lg-1 data-cell"><a href="policy_view.php?p_id=<?php ?>" class="btn btn-primary">View Customer</a></div>	
	</div>	
	<div class="row">
		<div class="col-lg-1 data-cell">1</div>
		<div class="col-lg-3 data-cell">Matthew Wachira Gathoka</div>
		<div class="col-lg-2 data-cell">Student PA</div>
		<div class="col-lg-2 data-cell">1000</div>
		<div class="col-lg-1 data-cell ">12/12/2017</div>
		<div class="col-lg-1 data-cell">11/12/2018</div>
		<div class="col-lg-1 data-cell">Paid</div>
		<div class="col-lg-1 data-cell"><a class="btn btn-primary">View Customer</a></div>	
	</div>	
	<div class="row">
		<div class="col-lg-1 data-cell">1</div>
		<div class="col-lg-3 data-cell">Matthew Wachira Gathoka</div>
		<div class="col-lg-2 data-cell">Student PA</div>
		<div class="col-lg-2 data-cell">1000</div>
		<div class="col-lg-1 data-cell ">12/12/2017</div>
		<div class="col-lg-1 data-cell">11/12/2018</div>
		<div class="col-lg-1 data-cell">Paid</div>
		<div class="col-lg-1 data-cell"><a class="btn btn-primary">View Customer</a></div>	
	</div>	
<?php include 'footer.php';?>