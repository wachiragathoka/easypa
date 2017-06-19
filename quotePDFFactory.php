<?php
class PDFQuoteFactory {
	var $customer;
	
	function __construct() {
		$this->customer = new Customer ();
		$this->coverDetails = new CoverDetail ();
	}
	function getCustomername() {
		return $this->customer->getFirstCustomerName () . " " . $this->customer->getSecondCustName () . " " . $this->customer->getCustLastName ();
	}
	function getCustomerIDNO() {
		return $this->customer->getCustomerID ();
	}
	function getCutsomerDOB() {
		return $this->customer->getCustomerDOB ();
	}
	function getCoverBenefits($paramChosenCover) {
		$benefits=$this->coverDetails->getCoverBenefits($paramChosenCover);
	}
	
	function getDeclarationnResponse(){
		$headerText=array(
				"Declaration",
				"Response"
		);
		
		
		$declarationQuestions=array(
				"Declaration",
				"Have you previously held Personal Accident cover ?",
				"If yes , name the insurer:",
				"Are you free from any physical disability or mental illness to the best of your knowledge ?",
				"If No above, give details:",
				"Give details of all accidents you have sustained in the last five (5) years :",
				"Are you engaged in any of the excluded activities / occupations",
				"If Yes, would you like an extension of cover to these activities<br>(Extra 25% of the basic premium )"
		);
		
		$declarationsResponses=array(
				"Response",
				"Yes",
				"UAP",
				"No",
				"Example of disability is listed here",
				"Accident 1. Give details here, Accident 2. Give details here, Accident 3. Give details here",
				"Yes: Football, horse racing",
				"Yes, I would like. additional cover"
				
		);
	}
}