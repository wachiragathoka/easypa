<?php 

class Model{
	private $conn;
	
	function __construct(){
		$dataSourceServer="localhost";
		$dataSourceUsername="root";
		$dataSourcePassword="";
		try {
			$this->conn = new PDO("mysql:host=$dataSourceServer;dbname=pa", $dataSourceUsername, $dataSourcePassword);
			// set the PDO error mode to exception
			$this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			//echo "Connected successfully";
			return $this->conn;
		}
		catch(PDOException $e){
			echo "Connection failed: " . $e->getMessage();
		}
	}
	
	function disconnectDB(){
		$this->conn = null;		//echo "Disconnected";
	}
	
	/**
	 * This method is called firts to Insert customerdata in DB
	 *
	 */
	function insertPolicydata($param_cust_firstname,
			$param_cust_second_name,
			$param_cust_last_name,
			$param_cust_email,
			$param_cust_id_no,
			$param_cust_kra_pin,
			$param_cust_phone_no,
			$param_cust_dob,
			$param_cust_postaladdress,
			$param_cust_postalCode,
			$param_nok_name,
			$param_nok_relationship,
			$param_nok_phone_no,
			$param_nok_email,
			$param_cover_option_pa_std,
			$param_cover_option,
			$param_cover_startdate,
			$param_cover_enddate){
				
				//connect to DB
				//$conn->connectDB();
					
				
				// prepare sql and bind parameters
				$clientstmt = $this->conn->prepare(
						"INSERT INTO easy_pa (user_id,cust_firstname, cust_second_name, cust_last_name,	cust_email, cust_id_no, cust_kra_pin,cust_phone_no, cust_dob, cust_postaladdress,
		cust_postalCode, nok_name, nok_relationship, nok_phone_no,nok_email,cover_option_pa_std,cover_option,cover_startdate,cover_enddate)
    VALUES (:user_id, :cust_firstname, :cust_second_name, :cust_last_name, :cust_email, :cust_id_no, :cust_kra_pin, :cust_phone_no, :cust_dob, :cust_postaladdress, :cust_postalCode, :nok_name, :nok_relationship, :nok_phone_no, :nok_email, :cover_option_pa_std, :cover_option, :cover_startdate, :cover_enddate)");
				
				

				$clientstmt->bindParam(':user_id', $user_id);
				$clientstmt->bindParam(':cust_firstname', $cust_firstname);
				$clientstmt->bindParam(':cust_second_name', $cust_second_name);
				$clientstmt->bindParam(':cust_last_name', $cust_last_name);
				$clientstmt->bindParam(':cust_email', $cust_email);
				$clientstmt->bindParam(':cust_id_no', $cust_id_no);
				$clientstmt->bindParam(':cust_kra_pin', $cust_kra_pin);
				$clientstmt->bindParam(':cust_phone_no', $cust_phone_no);
				$clientstmt->bindParam(':cust_dob', $cust_dob);
				$clientstmt->bindParam(':cust_postaladdress', $cust_postaladdress);
				$clientstmt->bindParam(':cust_postalCode', $cust_postalCode);
				$clientstmt->bindParam(':nok_name', $nok_name);
				$clientstmt->bindParam(':nok_relationship', $nok_relationship);
				$clientstmt->bindParam(':nok_phone_no', $nok_phone_no);
				$clientstmt->bindParam(':nok_email', $nok_email);
				$clientstmt->bindParam(':cover_option_pa_std', $cover_option_pa_std);
				$clientstmt->bindParam(':cover_option', $cover_option);
				$clientstmt->bindParam(':cover_startdate', $cover_startdate);
				$clientstmt->bindParam(':cover_enddate', $cover_enddate);
				
				$user_id="Mathew";
				$cust_firstname=$param_cust_firstname;
				$cust_second_name=$param_cust_second_name;
				$cust_last_name=$param_cust_last_name;
				$cust_email=$param_cust_email;
				$cust_id_no=$param_cust_id_no;
				$cust_kra_pin=$param_cust_kra_pin;
				$cust_phone_no=$param_cust_phone_no;
				$cust_dob=$param_cust_dob;
				$cust_postaladdress=$param_cust_postaladdress;
				$cust_postalCode=$param_cust_postalCode;
				$nok_name=$param_nok_name;
				$nok_relationship=$param_nok_relationship;
				$nok_phone_no=$param_nok_phone_no;
				$nok_email=$param_nok_email;
				$cover_option_pa_std=$param_cover_option_pa_std;
				$cover_option=$param_cover_option;
				$cover_startdate=$param_cover_startdate;
				$cover_enddate=$param_cover_enddate;
				
				//Insert
				$clientstmt->execute();
				
				//get inserterdID
				
				$this->disconnectDB();
				
	}
}