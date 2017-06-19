<?php
include '../data/model.php';
$model = new Model ();

if (isset ( $_POST ['Submit'] ) && $_POST ['Submit'] == "Get Quote") {
	$cust_firstname = filter_var ( $_POST ['fname'], FILTER_SANITIZE_STRING );
	$cust_second_name = filter_var ( $_POST ['sname'], FILTER_SANITIZE_STRING );
	$cust_last_name = filter_var ( $_POST ['lname'], FILTER_SANITIZE_STRING );
	$cust_email = filter_var ( $_POST ['email'], FILTER_SANITIZE_EMAIL );
	$cust_email2 = filter_var ( $_POST ['email2'], FILTER_SANITIZE_EMAIL );
	$cust_id_no = filter_var ( $_POST ['idpass'], FILTER_SANITIZE_STRING );
	$cust_kra_pin = filter_var ( $_POST ['krapin'], FILTER_SANITIZE_STRING );
	$cust_phone_no = filter_var ( $_POST ['conf_phone'], FILTER_SANITIZE_STRING );
	$cust_dob = filter_var ( $_POST ['custdob'], FILTER_SANITIZE_STRING );
	$cust_postaladdress = filter_var ( $_POST ['postaladdress'], FILTER_SANITIZE_STRING );
	$cust_postalCode = filter_var ( $_POST ['postalcode'], FILTER_SANITIZE_STRING );
	$nok_name = filter_var ( $_POST ['nok'], FILTER_SANITIZE_STRING );
	$nok_relationship = filter_var ( $_POST ['nokrelationship'], FILTER_SANITIZE_STRING );
	$nok_phone_no = filter_var ( $_POST ['conf_nokphone'], FILTER_SANITIZE_STRING );
	$nok_email = filter_var ( $_POST ['conf_nokemail'], FILTER_SANITIZE_EMAIL );	
	$cover_option_pa_std = $_POST ['coverOption_pa_stdnt']; // select
	$cover_option = $_POST ['coverOption']; // radio
	$cover_startdate = $_POST ['startdate'];
	$cover_enddate = $_POST ['enddate'];
	
	$model->insertPolicydata ( $cust_firstname, $cust_second_name, $cust_last_name, $cust_email, $cust_id_no, $cust_kra_pin, $cust_phone_no, $cust_dob, $cust_postaladdress, $cust_postalCode, $nok_name, $nok_relationship, $nok_phone_no, $nok_email, $cover_option_pa_std, $cover_option, $cover_startdate, $cover_enddate );
echo "success";
}else{
	
	echo "failed";
}