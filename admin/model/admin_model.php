<?php
// include '/connection.php';
class Admin_model {
	var $datasource = "";
	
	// function __construct(){
	// $this->datasource= new Connection();
	// }
	function __construct() {
		$dataSourceServer = "localhost";
		$dataSourceUsername = "root";
		$dataSourcePassword = "";
		try {
			$this->datasource = new PDO ( "mysql:host=$dataSourceServer;dbname=pa", $dataSourceUsername, $dataSourcePassword );
			// set the PDO error mode to exception
			$this->datasource->setAttribute ( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
			// echo "Connected successfully";
			return $this->datasource;
		} catch ( PDOException $e ) {
			echo "Connection failed: " . $e->getMessage ();
		}
	}
	function getAllPolicies() {
		// $this->datasource= new Connection();
		$policiesList = array ();
		
		$policies_querySTMT = $this->datasource->prepare ( "SELECT
					quote_id,
					cust_firstname,
					cust_second_name,
					cust_last_name,
					cust_dob,
					cover_option,
					cover_premium,
					cover_startdate,
					cover_enddate
				FROM easy_pa" ); // .$sessionID;
		
		$policies_querySTMT->execute ();
		
		if ($policies_querySTMT->rowCount () > 0) {
			
			$policyListdataAssoc = $policies_querySTMT->fetchAll ( PDO::FETCH_ASSOC );
		}
		
		// $this ->disconnectDB();
		return $policyListdataAssoc;
	}
	
	/*
	 * 
	 */
	function getPolicy($quote_ID) {
		$policyinfo = array ();
		
		$policy_querySQL = "
			SELECT *
			FROM easy_pa
			WHERE quote_id=:quote_Id";
		
		$policy_querySTMT=$this->datasource->prepare($policy_querySQL);
		$policy_querySTMT->bindParam( ':quote_Id', $quote_ID);
		
		$policy_querySTMT->execute ();
		
		if ($policy_querySTMT->rowCount () > 0) {
			$policy_ASSOC = $policy_querySTMT->fetchAll ( PDO::FETCH_ASSOC );			
			
			/* $cust_firstname = $policy_ASSOC[0] ['cust_firstname'];
			$cust_second_name = $policy_ASSOC [0] ['cust_second_name'];
			$cust_last_name = $policy_ASSOC [0] ['cust_last_name'];
			$cust_email = $policy_ASSOC [0] ['cust_email'];
			$cust_id_no = $policy_ASSOC [0] ['cust_id_no'];
			$cust_kra_pin = $policy_ASSOC [0] ['cust_kra_pin'];
			$cust_phone_no = $policy_ASSOC [0] ['cust_phone_no'];
			$cust_dob = $policy_ASSOC [0] ['cust_dob'];
			$cust_postaladdress = $policy_ASSOC [0] ['cust_postaladdress'];
			$cust_postalCode = $policy_ASSOC [0] ['cust_postalCode'];
			$nok_name =$policy_ASSOC [0] ['nok_name'];
			$nok_relationship = $policy_ASSOC [0] ['nok_relationship'];
			$nok_phone_no = $policy_ASSOC [0] ['nok_phone_no'];
			$nok_email = $policy_ASSOC [0] ['nok_email'];			
			$cover_option_pa_std=$policy_ASSOC[0]['cover_option_pa_std'];
			$cover_option=$policy_ASSOC[0]['cover_option'];
			$cover_premium=$policy_ASSOC[0]['cover_premium'];
			$s_annualSemiaAnnual=$policy_ASSOC[0]['s_annualSemiaAnnual'];
			$cover_startdate=$policy_ASSOC[0]['cover_startdate'];
			$cover_enddate=$policy_ASSOC[0]['cover_enddate']; */
			
			//var_dump($policy_ASSOC);
			return $policy_ASSOC;
		}
	}
}
