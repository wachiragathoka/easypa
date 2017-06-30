<?php
class Connection{
	
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
}