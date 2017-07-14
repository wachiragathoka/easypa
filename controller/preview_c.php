<?php
include 'data/model.php';
 class Preview_C{
 	var $model="";
 	
 	function __construct() {
 		$this->model = new Model ();
 	} 	
 	
 	function getCustomerdata($quote_Id){
 		//var_dump($quote_Id);
 		//var_dump($this->model);
 		
 		//
 		//var_dump($this->model->getCustomerdata($quote_Id));
 		return $this->model->getCustomerdataPreview($quote_Id);
 	}
 	
 	function getPolicyDetails( $quote_Id){//$_SESSION ['quote_Id']
 		return $this->model->getPolicyDetails($quote_Id);
 	}
 	
 }
 
 ?>