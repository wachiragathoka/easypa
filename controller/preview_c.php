<?php
include 'data/model.php';
 class Preview_C{
 	var $model="";
 	
 	function __construct() {
 		$this->model = new Model ();
 	} 	
 	
 	function getCustomerdata($quote_Id){
 		return $this->model->getCustomerdata($quote_Id);
 	}
 	
 	function getPolicyDetails( $quote_Id){//$_SESSION ['quote_Id']
 		return $this->model->getPolicyDetails($quote_Id);
 	}
 	
 }
 
 ?>