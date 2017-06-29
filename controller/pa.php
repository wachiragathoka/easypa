<?php
include_once '../config/config.php';
include '../data/model.php';
$model = new Model ();


if (isset ( $_POST ['Submit'] ) && $_POST ['Submit'] == "Get My Quote") {
	
	$_SESSION['quote_Id']= md5(time().rand(10,100));
	
	if(isset($_POST['coverOption_pa_stdnt']) && $_POST['coverOption_pa_stdnt']=="Student Accident Cover"){
		$s_annualSemiaAnnual=filter_var ($_POST['annualSemiaAnnual'], FILTER_SANITIZE_STRING); //return annual and semiannual
		$cover_option=filter_var ($_POST ['s_coverOption'], FILTER_SANITIZE_STRING); // radio
		
	
	}else {
		$cover_option = $_POST ['coverOption']; // radio
		$s_annualSemiaAnnual="NA";
	}
	
	
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
	//$cover_option = $_POST ['coverOption']; // radio
	
	//Declarations
	$previus_cover=$_POST['previus_cover'];
	$previus_cover_name=filter_var ($_POST['previus_cover_name'], FILTER_SANITIZE_STRING );
	$physical_disability=$_POST['physical_disability'];
	$physical_disability_names=filter_var($_POST['physical_disability_names'],FILTER_SANITIZE_STRING);
	$accidents_in_five_years=filter_var($_POST['accidents_in_five_years'], FILTER_SANITIZE_STRING);
	$excluded_activities=filter_var($_POST['excluded_activities'], FILTER_SANITIZE_STRING);
	$excluded_activities_extension=filter_var($_POST['excluded_activities_extension'], FILTER_SANITIZE_STRING);
	$final_declarations=$_POST['final_declarations'];
	
	//cover Amounts
	$cover_premium=filter_var ( $_POST['premiumamount'],FILTER_SANITIZE_STRING );
	
	//cover dates
	$cover_startdate = filter_var ( $_POST ['startdate'],FILTER_SANITIZE_STRING );
	$cover_enddate = filter_var ( $_POST ['enddate'],FILTER_SANITIZE_STRING );
	
	$model->insertPolicydata ( 
			$_SESSION['quote_Id'],
			$cust_firstname, 
			$cust_second_name, 
			$cust_last_name, 
			$cust_email, 
			$cust_id_no, 
			$cust_kra_pin, 
			$cust_phone_no, 
			$cust_dob, 
			$cust_postaladdress, 
			$cust_postalCode, 
			$nok_name, 
			$nok_relationship, 
			$nok_phone_no, 
			$nok_email, 
			$cover_option_pa_std, 
			$cover_option, 
			$previus_cover,
			$previus_cover_name,
			$physical_disability,
			$physical_disability_names,
			$accidents_in_five_years,
			$excluded_activities,
			$excluded_activities_extension,
			$final_declarations,			
			$cover_premium, 
			$s_annualSemiaAnnual,
			$cover_startdate, 
			$cover_enddate 
		);
echo "success";
//header('location:..');
}else{
	
	echo "Not Submit";
}