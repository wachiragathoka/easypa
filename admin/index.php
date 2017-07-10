<?php include 'header.php'; 
include '../data/connection.php';
include './model/admin_model.php';
include './controller/admin_c.php';

$policy_datasources=new Admin_C();
$saleslist=$policy_datasources->getAllPolicies();
?>
<div class="quote-element-header">
<div class="row">
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
	
	<?php 
	for ($i=0;$i<count($saleslist); $i++){
		echo "
		<div class=row>
			<div class=col-lg-1 data-cell>".($i+1)."</div>
			<div class=col-lg-3 data-cell>".$saleslist[$i]['cust_firstname']." ".$saleslist[$i]['cust_second_name']." ".$saleslist[$i]['cust_last_name']."</div>
			<div class=col-lg-1 data-cell>" .$saleslist[$i]['cust_dob']. " </div>
			<div class=col-lg-1 data-cell>".$saleslist[$i]['cover_option']."</div>
			<div class=col-lg-1 data-cell>".$saleslist[$i]['cover_premium']."</div>
			<div class=col-lg-1 data-cell>".$saleslist[$i]['cover_startdate']."</div>
			<div class=col-lg-1 data-cell>".$saleslist[$i]['cover_startdate']."</div>
			<div class=col-lg-1 data-cell>Not Paid</div>
			<div class=col-lg-1 data-cell><a target=_blank href=policy_view.php?p_id=".$saleslist[$i]['quote_id']." class=btn btn-primary>View</a></div>
		</div>";	
	}
	
	?>
	<!-- <div class="row">
		<div class="col-lg-1 data-cell">1</div>
		<div class="col-lg-3 data-cell">Matthew Wachira Gathoka</div>
		<div class="col-lg-2 data-cell">Student PA</div>
		<div class="col-lg-2 data-cell">1000</div>
		<div class="col-lg-1 data-cell ">12/12/2017</div>
		<div class="col-lg-1 data-cell">11/12/2018</div>
		<div class="col-lg-1 data-cell">Paid</div>
		<div class="col-lg-1 data-cell"><a href="policy_view.php?p_id=" class="btn btn-primary">View Customer</a></div>	
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
	</div>	 -->
<?php include 'footer.php';?>