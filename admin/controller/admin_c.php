<?php
//include '../model/admin_model.php';

class Admin_C{
	var $datasource="";
	function __construct(){
		$this->datasource=new Admin_model();
	}
	
	function getAllPolicies(){
		return $this->datasource->getAllPolicies();
	}
	
	function getPolicy($quote_ID){
		return $this->datasource->getPolicy($quote_ID);
	}
}