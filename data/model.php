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
			$param_Previus_cover,
			$param_Previus_cover_name,
			$param_physical_disability,
			$param_physical_disability_names,
			$param_accidents_in_five_years,
			$param_excluded_activities,
			$param_excluded_activities_extension,
			$param_final_declarations,			
			$param_cover_premium,
			$param_s_annualSemiaAnnual,
			$param_cover_startdate,
			$param_cover_enddate){
				
				//connect to DB
				//$conn->connectDB();
					
				
				// prepare sql and bind parameters
				$clientstmt = $this->conn->prepare(
						"INSERT INTO easy_pa (
										user_id,
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
										s_annualSemiaAnnual,
										cover_startdate,
										cover_enddate
									)
   	 						VALUES (
								:user_id, 
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
								:s_annualSemiaAnnual, 
								:cover_startdate, 
								:cover_enddate)"
						);
				
				

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
				
				$clientstmt->bindParam(':previus_cover', $previus_cover);
				$clientstmt->bindParam(':previus_cover_name', $previus_cover_name);
				$clientstmt->bindParam(':physical_disability', $physical_disability);
				$clientstmt->bindParam(':physical_disability_names', $physical_disability_names);
				$clientstmt->bindParam(':accidents_in_five_years', $accidents_in_five_years);
				$clientstmt->bindParam(':excluded_activities', $excluded_activities);
				$clientstmt->bindParam(':excluded_activities_extension', $excluded_activities_extension);
				$clientstmt->bindParam(':final_declarations', $final_declarations);
				
				$clientstmt->bindParam(':cover_premium', $cover_premium);
				$clientstmt->bindParam(':s_annualSemiaAnnual', $s_annualSemiaAnnual);
				$clientstmt->bindParam(':cover_startdate', $cover_startdate);
				$clientstmt->bindParam(':cover_enddate', $cover_enddate);
				
				
				$user_id="Matthew";
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
				$s_annualSemiaAnnual=$param_s_annualSemiaAnnual;
				$cover_startdate=$param_cover_startdate;
				$cover_enddate=$param_cover_enddate;
				
				//Insert
				$clientstmt->execute();
				
				//get inserterdID				
				$this->disconnectDB();
				
	}
	
	function getCustomerdata($sessionID){
		$customerdata="";
		
		$cust_querySTMT="SELECT 
							'id', 
							'user_id', 
							'cust_firstname', 
							'cust_second_name', 
							'cust_last_name', 
							'cust_email',
							'cust_id_no', 
							'cust_kra_pin', 
							'cust_phone_no', 
							'cust_dob', 
							'cust_postaladdress', 
							'cust_postalCode',
							'nok_name', 
							'nok_relationship', 
							'nok_phone_no', 
							'nok_email'
						FROM 'easy_pa' 
						WHERE user_id=".$sessionID;
		
		return array("Mathew Gathoka Wachira","19/01/1980","24003658","A57949667P","5300","00100","0722896425","mgathoka@uap-group.com","Peter Gathoka","Father","07229876654","PMburu@gmail.com");
	}
	
	function getPolicyDetails($sessionID){
		
		$PolicyDetailsSTMT="SELECT 
				 	'cover_premium',
					'cover_option',
					's_annualSemiaAnnual',
					'cover_startdate',
					'cover_enddate'
";
		
		
		return array("3000","PLAN E","6-July-2017","5-July-2017");
	}
	
	function getSelectedCoverBenefits($sessionID){
		return array("Amounts(KES)",100000,20000,10000,30000,2000,50000,200);
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