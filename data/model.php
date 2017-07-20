<?php 
//if(!isset($_SESSION['sessionID'])){
	//session_start();
//}
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
	function insertPolicydata(
			$param_quote_Id,
			$param_cust_firstname,
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
			$param_Previus_cover,
			$param_Previus_cover_name,
			$param_physical_disability,
			$param_physical_disability_names,
			$param_accidents_in_five_years,
			$param_excluded_activities,
			$param_excluded_activities_extension,
			$param_final_declarations,			
			$param_cover_premium,
			$param_excludedActivityExtensionAmount,
			$param_s_annualSemiaAnnual,
			$param_cover_startdate,
			$param_cover_enddate){
				
				//connect to DB
				//$conn->connectDB();
					
				
				// prepare sql and bind parameters
				$clientstmt = $this->conn->prepare(
						"INSERT INTO easy_pa (
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
										nok_email,
										cover_option_pa_std,
										cover_option,
										previus_cover,
										previus_cover_name,
										physical_disability,
										physical_disability_names,
										accidents_in_five_years,
										excluded_activities,
										excluded_activities_extension,
										final_declarations,
										cover_premium,
										excludedActivityExtensionAmount,
										s_annualSemiaAnnual,
										cover_startdate,
										cover_enddate
									)
   	 						VALUES (
								:quote_id, 
								:cust_firstname, 
								:cust_second_name, 
								:cust_last_name, 
								:cust_email, 
								:cust_id_no, 
								:cust_kra_pin, 
								:cust_phone_no, 
								:cust_dob, 
								:cust_postaladdress, 
								:cust_postalCode, 
								:nok_name, 
								:nok_relationship, 
								:nok_phone_no, 
								:nok_email, 
								:cover_option_pa_std, 
								:cover_option,
								:previus_cover,
								:previus_cover_name,
								:physical_disability,
								:physical_disability_names,
								:accidents_in_five_years,
								:excluded_activities,
								:excluded_activities_extension,
								:final_declarations,
								:cover_premium,
								:excludedActivityExtensionAmount,
								:s_annualSemiaAnnual, 
								:cover_startdate, 
								:cover_enddate)"
						);				

				$clientstmt->bindParam(':quote_id', $quote_id);
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
				
				$clientstmt->bindParam(':previus_cover', $previus_cover);
				$clientstmt->bindParam(':previus_cover_name', $previus_cover_name);
				$clientstmt->bindParam(':physical_disability', $physical_disability);
				$clientstmt->bindParam(':physical_disability_names', $physical_disability_names);
				$clientstmt->bindParam(':accidents_in_five_years', $accidents_in_five_years);
				$clientstmt->bindParam(':excluded_activities', $excluded_activities);
				$clientstmt->bindParam(':excluded_activities_extension', $excluded_activities_extension);
				$clientstmt->bindParam(':final_declarations', $final_declarations);
				
				$clientstmt->bindParam(':cover_premium', $cover_premium);
				$clientstmt->bindParam(':excludedActivityExtensionAmount', $excludedActivityExtensionAmount);
				$clientstmt->bindParam(':s_annualSemiaAnnual', $s_annualSemiaAnnual);
				$clientstmt->bindParam(':cover_startdate', $cover_startdate);
				$clientstmt->bindParam(':cover_enddate', $cover_enddate);
				
				
				$quote_id=$param_quote_Id;
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
				
				$previus_cover=$param_Previus_cover;
				$previus_cover_name=$param_Previus_cover_name;
				$physical_disability=$param_physical_disability;
				$physical_disability_names=$param_physical_disability_names;
				$accidents_in_five_years=$param_accidents_in_five_years;
				$excluded_activities=$param_excluded_activities;
				$excluded_activities_extension=$param_excluded_activities_extension;
				$final_declarations=$param_final_declarations;
				
				$cover_premium=$param_cover_premium;
				$excludedActivityExtensionAmount=$param_excludedActivityExtensionAmount;
				$s_annualSemiaAnnual=$param_s_annualSemiaAnnual;
				$cover_startdate=$param_cover_startdate;
				$cover_enddate=$param_cover_enddate;
				
				//Insert
				if($clientstmt->execute()){
					return true;
				}else{
						return false;
					}
				
				//get inserterdID				
				//$this->disconnectDB();
				
	}
	
	function getCustomerdataPreview($param_Quote_Id){
		
		//var_dump($quote_Id);
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
				WHERE quote_id=:quote_id"); //.$sessionID;
		
		
		$cust_querySTMT->bindParam(':quote_id', $param_Quote_Id);//constant("sessionID")
		$cust_querySTMT->execute();
		
		//var_dump($param_Quote_Id);
		//var_dump($cust_querySTMT->rowCount());
		
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
		
		//$this ->disconnectDB();
		return $customerdata;
		//array("Mathew Gathoka Wachira","19/01/1980","24003658","A57949667P","5300","00100","0722896425","mgathoka@uap-group.com","Peter Gathoka","Father","07229876654","PMburu@gmail.com");
	}
	
	
	
	function getCustomerdata($param_Quote_Id){
		
		//var_dump($quote_Id);
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
				WHERE quote_id=:c_quote_Id"); //.$sessionID;
		
				
		$cust_querySTMT->bindParam(':c_quote_Id', $param_Quote_Id);//constant("sessionID")
		$cust_querySTMT->execute();
		
		//var_dump($param_Quote_Id);
		//var_dump($cust_querySTMT->rowCount());
		
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
	
	function getPolicyDetails($quote_Id){
		$policyDetail=array();
		
		$PolicyDetail_SQL="SELECT 
					cover_option_pa_std,
					cover_option,
				 	cover_premium,
					excludedActivityExtensionAmount,
					s_annualSemiaAnnual,
					cover_startdate,
					cover_enddate
				FROM easy_pa 
				WHERE quote_id=:quote_Id";
		
		$PolicyDetail_STMT=$this->conn->prepare($PolicyDetail_SQL);
		
		$PolicyDetail_STMT->bindParam(':quote_Id', $quote_Id);//constant("sessionID")
		$PolicyDetail_STMT->execute();
		
		
		
		if ($PolicyDetail_STMT->rowCount() > 0){
			$PolicyDetail_ASSOC=$PolicyDetail_STMT->fetchAll(PDO::FETCH_ASSOC);
			
			
			
			$cover_option_pa_std=$PolicyDetail_ASSOC[0]['cover_option_pa_std'];
			$cover_option=$PolicyDetail_ASSOC[0]['cover_option'];
			$cover_premium=($PolicyDetail_ASSOC[0]['cover_premium']+$PolicyDetail_ASSOC[0]['excludedActivityExtensionAmount']);
			$s_annualSemiaAnnual=$PolicyDetail_ASSOC[0]['s_annualSemiaAnnual'];
			$cover_startdate=$PolicyDetail_ASSOC[0]['cover_startdate'];
			$cover_enddate=$PolicyDetail_ASSOC[0]['cover_enddate'];
			
			//var_dump($cover_premium);
			array_push($policyDetail, number_format(trim($cover_premium),2));
			array_push($policyDetail, $s_annualSemiaAnnual." ".$cover_option_pa_std." Plan: ".$cover_option);
			array_push($policyDetail, $cover_startdate);
			array_push($policyDetail, $cover_enddate);
		}
		
		return $policyDetail;
		//return array("3000","PLAN E","6-July-2017","5-July-2017");
	}
	
	
	/**
	 * 
	 * @param unknown $quote_Id
	 * @return string[]|number[]
	 */
	
	function getSelectedCoverBenefits($quote_Id){
		//select the selected cover (PA or Student cover, then the option)
		$selectedCover_SQL="SELECT
					cover_option_pa_std,
					cover_option
			FROM easy_pa
			WHERE quote_id=:quote_Id";
		
		$selectedCover_STMT=$this->conn->prepare($selectedCover_SQL);
		
		$selectedCover_STMT->bindParam(':quote_Id', $quote_Id);
		$selectedCover_STMT->execute();
		
		if ($selectedCover_STMT->rowCount() > 0){
			$selectedCover_ASSOC=$selectedCover_STMT->fetchAll(PDO::FETCH_ASSOC);
			
			$cover_option_pa_std=$selectedCover_ASSOC['0']['cover_option_pa_std'];
			$cover_option=$selectedCover_ASSOC['0']['cover_option'];
			
			if($cover_option_pa_std=="Personal Accident Cover"){
				//Handle PA
				switch ($cover_option) {
					case 'A':
					
						return array("Amounts(KES)",750000	,750000, 2000, 3500, 75000, 10000, 10000);
					break;
					
					case 'B':
						
						return array("Amounts(KES)", 1000000, 1000000, 2500, 5000, 100000, 20000, 15000);
						break;
					
					case 'C':
						
						return array("Amounts(KES)", 2000000, 2000000, 5000, 10000, 200000, 25000, 25000);
						break;
						
					case 'D':
						
						return array("Amounts(KES)", 3000000, 3000000, 7500, 15000, 250000, 30000, 35000);
						break;
						
					case 'E':
						
						return array("Amounts(KES)", 5000000, 5000000, 8500, 20000, 300000, 35000, 50000);
						break;
						
					case 'F':
						
						return array("Amounts(KES)", 7500000, 7500000, 10000, 25000, 400000, 40000, 50000);
						break;
						
					case 'G':
						
						return array("Amounts(KES)", 10000000, 10000000, 20000, 30000, 500000, 50000, 75000);
						break;
						
					default:
						;
					break;
				}
				
			}else if($cover_option_pa_std=="Student Accident Cover"){
				//handle students
				switch ($cover_option) {
					case 'A':
						return array("Amounts(KES)", 0, 0, 0, 0, 0, 0, 0);
						break;
						
					case 'B':
						return array("Amounts(KES)", 0, 0, 0, 0, 0, 0, 0);
						break;
						
					case 'C':
						return array("Amounts(KES)", 0, 0, 0, 0, 0, 0, 0);
						break;
						
					case 'D':
						return array("Amounts(KES)", 0, 0, 0, 0, 0, 0, 0);
						break;						
						
					case 'E':
						return array("Amounts(KES)", 0, 0, 0, 0, 0, 0, 0);
						break;
						
					default:
						;
					break;
				}
				
				
			}else{
				//Do nothing
			}
			
		}else{
			return array("error", 0, 0, 0, 0, 0, 0, 0);
		}		
		//
	}
	
	/**
	 * 
	 * @param unknown $paramQuote_ID
	 * @return string[]
	 */
	function  getdeclarationQuestions($quote_Id){
		return array(
				"Declaration",
				"Previously held Personal Accident cover ?",
				"If yes , name the insurer:",
				"Physical disability or Mental illness?",
				"If No above, give details:",
				"Details of accidents sustained in the last five (5) years :",
				"Engagement in any of the excluded activities or occupations",
				"Extension of cover for excluded activities(Extra 25% of the basic premium )"
		);
	}
	
	
	/**
	 * 
	 * @param unknown $quote_Id
	 * @return array
	 */
	function getDeclarationsResponses($quote_Id){
		$declarationsResponses=array();
		$declarationsResponses_SQL="
					SELECT
						previus_cover,
						previus_cover_name,
						physical_disability,
						physical_disability_names,
						accidents_in_five_years,
						excluded_activities,
						excluded_activities_extension
					FROM easy_pa 
					WHERE quote_id=:quote_Id";
				
		
		$declarationsResponses_STMT=$this->conn->prepare($declarationsResponses_SQL);
		
		$declarationsResponses_STMT->bindParam(':quote_Id', $quote_Id);
		$declarationsResponses_STMT->execute();
		
		if ($declarationsResponses_STMT->rowCount() > 0){
			$declarationsResponses_ASSOC=$declarationsResponses_STMT->fetchAll(PDO::FETCH_ASSOC);
			
			$previus_cover=$declarationsResponses_ASSOC['0']['previus_cover'];
			$previus_cover_name=$declarationsResponses_ASSOC['0']['previus_cover_name'];
			$physical_disability=$declarationsResponses_ASSOC['0']['physical_disability'];
			$physical_disability_names=$declarationsResponses_ASSOC['0']['physical_disability_names'];
			$accidents_in_five_years=$declarationsResponses_ASSOC['0']['accidents_in_five_years'];
			$excluded_activities=$declarationsResponses_ASSOC['0']['excluded_activities'];
			$excluded_activities_extension=$declarationsResponses_ASSOC['0']['excluded_activities_extension'];
			
			
			array_push($declarationsResponses, "Your Response");
			array_push($declarationsResponses, $previus_cover);
			array_push($declarationsResponses, $previus_cover_name);
			array_push($declarationsResponses, $physical_disability);
			array_push($declarationsResponses, $physical_disability_names);
			array_push($declarationsResponses, $accidents_in_five_years);
			array_push($declarationsResponses, $excluded_activities);
			array_push($declarationsResponses, $excluded_activities_extension);
			
			
			return $declarationsResponses;
/* 			array(
					"Response",
					"Yes",
					"UAP",
					"No",
					"Example of disability is listed here",
					"Accident 1. Give details here, Accident 2. Give details here, Accident 3. Give details here",
					"Yes: Football, horse racing",
					"Yes, I would like. additional cover"
			); */
		}
	}
	
	
	
	
	function fetchExtraBenefits(){
		$myDataSource=$this->dbconn->connectDB();
		
		$fetchExtraBenefitsstmnt = $myDataSource->prepare(
				"SELECT benefitname,benefitamount,tag
									 FROM standard_benefits_uapom_q
									 JOIN standard_benefit_chosen
									 ON standard_benefits_uapom_q.tag=standard_benefit_chosen.standard_benefit_tag
									 WHERE standard_benefit_chosen.unique_key = :unique_key");
		
		$fetchExtraBenefitsstmnt->bindParam(':unique_key', $_SESSION['unique_key']);
		
		$fetchExtraBenefitsstmnt->execute();
		
		if ($fetchExtraBenefitsstmnt->rowCount() > 0){
			
			return $fetchExtraBenefitsstmnt->fetchAll(PDO::FETCH_ASSOC);
			
		}
		
		$this ->dbconn->disconnectDB();
	}
	
	
	/**
	 * 
	 * @return string
	 */
	function declationsInfo(){
		$declarationDetails="";
		$declarationQuestions=array(
				"1(a) Have you previously held Personal Accident cover ?",
				"1(b) If yes above , name the insurer:",
				"2(a) Are you free from any physical disability or mental illness to the best of your knowledge ?",
				"2(b) If No above, give details:",
				"3 Give details of all accidents you have sustained in the last five (5) years :",
				"4(a) Are you engaged in any of the  excluded activities / occupations ? *",
				"5(b) If Yes, would you like an extension of cover to these activities ?*",
		);
		
		$paramOptions=array(
				"Yes",
				"No"
		);
		
		$selectCoverBefore=new SelectField("", "CoverBefore","CoverBefore","CoverBefore",$paramOptions);
		$nameofInsurer=new FormField("nameofinsurer","nameofinsurer", " ", "nameofinsurer");
		$diabilityKnowledge=new SelectField("", "diabilityKnowledge","diabilityKnowledge","diabilityKnowledge",$paramOptions);
		$diabilityDetails=new FormField("diabilityDetails","diabilityDetails", " ", "diabilityDetails");
		$allAccidentsIn5years= new FormField("allAccidentsIn5years","allAccidentsIn5years", " ", "allAccidentsIn5years");
		$excludedActivities=new SelectField("", "excludedActivities","excludedActivities","excludedActivities",$paramOptions);
		$activitiesExtenstionOfCover=new FormField("activitiesExtenstionOfCover","activitiesExtenstionOfCover", " ", "activitiesExtenstionOfCover");
		
		
		$declarationAnswers=array(
				$selectCoverBefore->getSelectField(),
				$nameofInsurer->getField(),
				$diabilityKnowledge->getSelectField(),
				$diabilityDetails->getField(),
				$allAccidentsIn5years->getField(),
				$excludedActivities->getSelectField(),
				$activitiesExtenstionOfCover->getField()
		);
		
		for($i=0;$i<count($declarationQuestions);$i++){
			$declarationDetails=$declarationDetails.
			$this->container->getTR ().//start row
			$this->container->getTD1($declarationQuestions[$i]).
			$this->container->getTD1($declarationAnswers[$i]).
			$this->container->getTrEnd ();//end row
		}
		
		return $declarationDetails;
	}
}