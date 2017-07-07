<?php
include 'data/connection.php';

class Admin_model{
var $datasource="";

function __construct(){
	$this->datasource= new Connection();	
}

function getAllPolicies(){

	
	$customerdata=array();
	
	$cust_querySTMT=$this->conn->prepare(
			"SELECT
					id,
					quote_id,
					cust_firstname,
					cust_second_name,
					cust_last_name,
					cust_email,
					cust_id_no,
					cust_kra_pin,
					cust_phone_no,
					cust_dob,
					cust_postaladdress,
					cust_postalCode,
					nok_name,
					nok_relationship,
					nok_phone_no,
					nok_email
				FROM easy_pa
				WHERE quote_id=:quote_Id"); //.$sessionID;
	
	$cust_querySTMT->bindParam(':quote_Id', $quote_Id);//constant("sessionID")
	$cust_querySTMT->execute();
	
	//v//ar_dump($quote_Id);
	//print_r($cust_querySTMT->rowCount());
	
	if ($cust_querySTMT->rowCount() > 0){
		
		
		
		$customerdataAssoc=$cust_querySTMT->fetchAll(PDO::FETCH_ASSOC);
		
		//var_dump($customerdataAssoc);
		
		$cust_firstname=$customerdataAssoc[0]['cust_firstname'];
		$cust_second_name=$customerdataAssoc[0]['cust_second_name'];
		$cust_last_name=$customerdataAssoc[0]['cust_last_name'];
		$cust_email=$customerdataAssoc[0]['cust_email'];
		$cust_id_no=$customerdataAssoc[0]['cust_id_no'];
		$cust_kra_pin=$customerdataAssoc[0]['cust_kra_pin'];
		$cust_phone_no=$customerdataAssoc[0]['cust_phone_no'];
		$cust_dob=$customerdataAssoc[0]['cust_dob'];
		$cust_postaladdress=$customerdataAssoc[0]['cust_postaladdress'];
		$cust_postalCode=$customerdataAssoc[0]['cust_postalCode'];
		$nok_name=$customerdataAssoc[0]['nok_name'];
		$nok_relationship=$customerdataAssoc[0]['nok_relationship'];
		$nok_phone_no=$customerdataAssoc[0]['nok_phone_no'];
		$nok_email=$customerdataAssoc[0]['nok_email'];
		
		//for($i==0;$i< count($cust_querySTMT->fetchAll(PDO::FETCH_ASSOC));$i++){
		//array_push($customerdata, ());
		//}
		
		
		//create array
		
		array_push($customerdata, $cust_firstname." ".$cust_second_name." ".$cust_last_name);//name
		array_push($customerdata, $cust_dob);
		array_push($customerdata, $cust_id_no);
		array_push($customerdata, $cust_kra_pin);
		array_push($customerdata, $cust_postaladdress);
		array_push($customerdata, $cust_postalCode);
		array_push($customerdata, $cust_phone_no);
		array_push($customerdata, $cust_email);
		array_push($customerdata, $nok_name);
		array_push($customerdata, $nok_relationship);
		array_push($customerdata, $nok_phone_no);
		array_push($customerdata, $nok_email);
	}
	
	$this ->disconnectDB();
	return $customerdata;
	//array("Mathew Gathoka Wachira","19/01/1980","24003658","A57949667P","5300","00100","0722896425","mgathoka@uap-group.com","Peter Gathoka","Father","07229876654","PMburu@gmail.com");
}
}
