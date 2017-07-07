<?php
include 'admin/model/admin_model.php';

class Admin_C{
	var $datasource="";
	function __construct(){
		$this->datasource=new Admin_model();
	}
	
	function getAllPolicies(){
		$this->datasource->getAllPolicies();
	}
}