<?php
include 'connection.php';

class ExcludedActivities{
	
	var $conn="";
	function __construct(){
		$this->conn=new Connection();
	}
	
	function getAllExcludedActivities(){
		 
		
		//TODO fetch all excluded activities
	}
	
	function getSelectedActivities($selectedActivities){
		$selected_SQL="SELECT 
							name 
					   FROM excludedActivities
					   WHERE id in []";
		
		$this->conn->prepare($selected_SQL);
		
		//TODO fetch only selected items and display in PDF
	}
	
}