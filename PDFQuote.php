<?php
include 'config/config.php';
//include_once '../../library/quotePDFFactory.php';
require 'lib/fpdf/fpdf.php';
require 'lib/fpdf/gradients.php';
include_once 'data/model.php';
class PDF extends FPDF
{
	// Load data
	function LoadData($file)
	{
		
	}
	
	function gradienttop(){
		//set colors for gradients (r,g,b) or (grey 0-255)
		
		//http://www.fpdf.org/en/script/script72.php
		$red=array(255,0,0);
		$blue=array(0,0,200);
		$yellow=array(255,255,0);
		$green=array(0,255,0);
		$white=array(255);
		$black=array(0);
		
		//set the coordinates x1,y1,x2,y2 of the gradient (see linear_gradient_coords.jpg)
		$coords=array(0,0,1,0);
		
		$this->SetXY(1, 1);
		$gradientPDF=new PDF_Gradients();
		//paint a linear gradient
		$gradientPDF->LinearGradient(20,25,80,80,$red,$blue,$coords);
	}
	
	function Header()
	{
		// Page header
		global $title;
		$this->Image('assets/images/easy-direct-logo.png',160,10,40);
		$this->SetFont('Arial','B',15);
	}
	

	// Colored table
	function customerDataTable($header, $data)
	{
		// Colors, line width and bold font
		$this->SetFillColor(255,0,0);
		$this->SetTextColor(255);
		$this->SetDrawColor(128,0,0);
		$this->SetLineWidth(.3);
		$this->SetFont('','B');
		// Header
		$w = array(40, 35, 40, 45);
		for($i=0;$i<count($header);$i++)
			$this->Cell($w[$i],7,$header[$i],1,0,'C',true);
			$this->Ln();
			// Color and font restoration
			$this->SetFillColor(224,235,255);
			$this->SetTextColor(0);
			$this->SetFont('');
			// Data
			$fill = false;
			foreach($data as $row)
			{
				$this->Cell($w[0],6,$row[0],'LR',0,'L',$fill);
				$this->Cell($w[1],6,$row[1],'LR',0,'L',$fill);
				$this->Cell($w[2],6,number_format($row[2]),'LR',0,'R',$fill);
				$this->Cell($w[3],6,number_format($row[3]),'LR',0,'R',$fill);
				$this->Ln();
				$fill = !$fill;
			}
			// Closing line
			$this->Cell(array_sum($w),0,'','T');
	}
	
	function premiumAndDates($paramString){
		$this->Cell(0,10,htmlentities($paramString));
	}
	
	function horizontalLine($x1,$y1,$x2,$y2){
		//$this->Line(float x1, float y1, float x2, float y2)
		//x1 -	Abscissa of first point.
		//y1 - Ordinate of first point.
		//x2 - Abscissa of second point.
		//y2 - Ordinate of second point.
		
		$this->Line($x1, $y1, $x2, $y2);
	}
	
	function headingCells($data){
		//$this->SetFillColor(255);
		$this->SetTextColor(0);
		$this->SetFont('','B',14);
		$this->SetXY(70, 30.1);
		$this->Cell(280,7,$data,0);		
	}
	
	function subHeadingCell($data,$x,$y){
		$this->SetFillColor(224,235,255);
		$this->SetTextColor(0);
		$this->SetFont('','B',10);
		$this->SetXY($x, $y);//X,Y
		$this->SetDrawColor(224,235,255);
		//$this->SetLineWidth(.1);		
		$this->Cell(190,7,$data,"TB",0,'L',true);	
	}
	
	
	function tableData($subHeader, $data,$x,$y){
		// Colors, line width and bold font
		//$this->SetFillColor(128,0,0);
		//$this->SetTextColor(0);
		//$this->SetDrawColor(0);
		//$this->SetLineWidth(0);
		
		$this->SetXY($x,$y);

		//$w = array(40,50);
		//$datacell="odd";
		for($i=0;$i<count($subHeader);$i++){//
			
				//if($datacell=="odd"){
					$this->SetFont('','B',10);
					$this->Cell(35,7,$subHeader[$i],1,0,'L');
					//$datacell="even";
				//}else{
					$this->SetFont('','',10);
					$this->Cell(60,7,$data[$i],1,0,'L');
					//$datacell="odd";
				//}
				
					if($i==1||$i==3||$i==5||$i==7||$i==9||$i==11){
					$this->Ln();
				}
		}
	}
	
	
	function benefistTableData($subHeader, $data,$x,$y){
		$this->SetXY($x,$y);
		
		for($i=0;$i<count($subHeader);$i++){//

			
			$this->SetFont('','',10);
			$this->Cell(80,8,$subHeader[$i],1,0,'L');
			//$this->MultiCell(80,8,$subHeader[$i],1,'L',true);
			
			$this->SetFont('','B',10);
			$this->Cell(30,8,$data[$i],1,0,'L');
			
			$this->Ln();			
		}
		
		
	}
	
	function dataCell($data,$x,$y){
		//$this->SetFillColor(224,235,255);
		$this->SetTextColor(0);
		$this->SetFont('','',10);
		$this->SetXY($x, $y);//X,Y
		$this->SetDrawColor(224,235,255);
		//$this->SetLineWidth(.1);
		//$this->Cell(190,7,$data,"TB",0,'L',true);	
		$this->MultiCell(150,7,$data);
		$this->Ln();
	}
	
	
	function multiCelldata($data,$x,$y){
		$this->SetFillColor(245,245,245);
		$this->SetTextColor(0);
		$this->SetFont('','',10);
		$this->SetXY($x, $y);//X,Y
		$this->SetDrawColor(245,245,245);
		//$this->SetLineWidth(.1);
		//$this->Cell(190,7,$data,"TB",0,'L',true);
		$this->MultiCell(130,5,$data,1,'L',true);
		$this->Ln();  
	}
	
	function exclusions($data1,$data2,$x,$y){		
		
		$this->SetXY($x,$y);
		
		for($i=0;$i<count($data1);$i++){//			
			
			$this->SetFont('','',10);
			$this->Cell(80,7,$data1[$i],1,0,'L');			
			
			$this->SetFont('','',10);
			$this->Cell(80,7,$data2[$i],1,0,'L');
			
			$this->Ln();
		}		
	}
	
	function declarationsTable($declarartionHeader, $data,$x,$y){
		$this->SetXY($x,$y);
		
		for($i=0;$i<count($declarartionHeader);$i++){//
			if($i<1){
				$this->SetFont('','B',10);
				$this->Cell(110,7,$declarartionHeader[$i],1,0,'L');
				
				$this->SetFont('','B',10);
				$this->Cell(80,7,$data[$i],1,0,'L');
			}else {				
				//$y=$y+7;
					//$this->SetXY($x,$y);
					$this->SetFont('','',10);
					$this->Cell(110,7,$declarartionHeader[$i],1,0,'L');
					//$this->MultiCell(100,7,$declarartionHeader[$i],1,'L');
					//$this->MultiCell(130,5,$data,1,'L',true);
					
					//$this->SetXY($x,$y);
					$this->SetFont('','',10);
					$this->Cell(80,7,$data[$i],1,0,'L');
					//$this->MultiCell(60,7,$data[$i],1,'L');
					
							}
			$this->Ln();
		}
	}	
	
	
	function payMentOption($mpesadetails,$bankDetails,$x,$y){
		$this->SetXY($x,$y);
		
		//set headers
		if(count($mpesadetails)<count($bankDetails)){//check the bigger array
			$difference=count($bankDetails)-count($mpesadetails);
			
			for($d=0;$d<=$difference;$d++){//push nulls for the remeinder
				array_push($mpesadetails, " ");
			}
		}
		
		for($i=0;$i<count($bankDetails);$i++){
			//if()
			$this->SetFont('','',10);
			$this->Cell(80,8,$mpesadetails[$i],1,0,'L');
			
			
			$this->SetFont('','',10);
			$this->Cell(100,8,$bankDetails[$i],1,0,'L');
			
			//$this->SetFont('','B',10);
			//$this->Cell(40,8,$bankDetails[$i],1,0,'L');
			
			
			//$this->SetFont('','',10);
			//$this->Cell(30,7,$bankDetails[$i],1,0,'L');		
			
			$this->Ln();
		}
		
	}
	
	function QuoteGenerationDate($subheaders,$SystemDetails,$x,$y){
		$this->SetXY($x,$y);
		
		for($i=0;$i<count($subheaders);$i++){//
			//if($i<1){
				$this->SetFont('','B',10);
				$this->Cell(30,7,$subheaders[$i],0,0,'L');
				
				$this->SetFont('','',10);
				$this->Cell(60,7,$SystemDetails[$i],0,0,'L');		
			$this->Ln();
		}
	}
}

//$pdffactory=new PDFQuoteFactory();
//$modalFactory=new ModalFactory();
$pdf = new PDF();

$pdf->AddPage();
$pdf->SetFont('Arial','',14);
//$pdf->Cell(0,5,'Page 1',0,1,'C');
//$pdf->Ln();

//$pdf->gradienttop();

//$pdf->customerDataTable($header,$data);
$pdf->horizontalLine(10, 30, 200, 30);
$pdf->headingCells("PERSONAL ACCIDENT COVER");
$pdf->horizontalLine(10, 37, 200, 37);

$pdf->subHeadingCell("CLIENT DETAILS",10,39);

//Customer Data
$datasource=new Model();
$customerData=$datasource->getCustomerdata($_SESSION['sessionID']);
$customerDatasubheading=array("Name","Date Of Birth","ID Number", "KRA PIN","P.O. Box","Postal Code","Phone Number","Email","Next of Kin","Relationship","Phone Number","Email");
$pdf->tableData($customerDatasubheading,$customerData,10,48);

$pdf->subHeadingCell("COVER DETAILS",10,92);

//Cover Details

$CoverSubheading=array("Cover Amount (KES)","Cover Option:","Cover Start on:", "Cover ends on:");
$coverdetails=$datasource->getPolicyDetails($_SESSION['sessionID']);
$pdf->tableData($CoverSubheading,$coverdetails,10,99);

//Cover Plan benefits
$selectedCoverbenefitsTitles=array(
				"BENEFIT",
				"Accidental death",
				"Accidental Permanent Total Disablement",
				"Hospital cash",
				"Accidental temprary, total disablement",
				"Accidental medical Expense",
				"Artificial Appliance",
				"Last Expense(Accidental Death)");

$selectedCoverbenefits=$datasource->getSelectedCoverBenefits($_SESSION['sessionID']);
//$selectedCoverbenefits=$pdffactory->getCoverBenefits("A");
$pdf->benefistTableData($selectedCoverbenefitsTitles,$selectedCoverbenefits,10,120);


//time Excess
$pdf->subHeadingCell("TIME EXCESS",10,185);
$timeExcessdata="Temporary Total Disablement (Excluding the first seven (7) days)\nHospital Cash (Excluding the first three (3) days)";
$pdf->dataCell($timeExcessdata,13,193);


//Declarations

$declarationQuestions=array(
		"Declaration",
		"Have you previously held Personal Accident cover ?",
		"If yes , name the insurer:",
		"Are you free from any physical disability or mental illness to the best of your knowledge ?",
		"If No above, give details:",
		"Give details of all accidents you have sustained in the last five (5) years :",
		"Are you engaged in any of the excluded activities or occupations",
		"If Yes, would you like an extension of cover to these activities(Extra 25% of the basic premium )"
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
$pdf->subHeadingCell("DECLARARTIONS",10,210);
$pdf->declarationsTable($declarationQuestions,$declarationsResponses,10,217);

$pdf->AddPage();
//$pdf->SetAutoPageBreak(true);
//AcceptanceDeclaration
$acceptanceDeclaration="I warrant that the above statements made by me or on my behalf are true and complete to the best of my knowledge and belief and I agree that this proposal shall bethe basis of the contract between me and the company. I also declare that no insurer has ever declined, refused to renew , terminated my insurance , increased my insurance premium or imposed special terms";
$pdf->multiCelldata($acceptanceDeclaration,10,10);

//Excluded activities
$pdf->subHeadingCell("Exclusions",10,37);
$exclusions=array(
		"1. Manufacture of fireworks or explosives",
		"2. Sinking of air, water or gas wells",
		"3. Construction and maintenance of coffer dam",
		"4. Airline crew & ship or boat crew",
		"5. Racing, Rallies and speed testing",
		"6. Naval, military, police or Air force operations",
		"7. Professional sports",
		"8. Diving",
		"9. Mining"
);

if(count($exclusions)%2!=0){
	array_push($exclusions, " ");
}

$firsthalf=array_slice($exclusions, 0, ceil(count($exclusions)/2));
$secondhalf=array_slice($exclusions, floor(count($exclusions)/2));
$pdf->exclusions($firsthalf,$secondhalf,10,44);


//payment Options
$pdf->subHeadingCell("PAYMENT OPTIONS",10,82);
$MpesaPayment=array(
		"Paybill Number: 260260",
		"Account Number : Your Policy Number"
	);

$bankDetails=array(
		"Bank Name : Kenya Commercial Bank",
		"Account Name : UAP INSURANCE COMPANY LIMITED",
		"Account number : 1107154170",
		"Branch : Moi Avenue",
		"Please indicate your policy number"
		
);

$pdf->payMentOption($MpesaPayment,$bankDetails,10,90);



//generatedBy
date_default_timezone_set('Africa/Nairobi');
$subheaders=array("Generated By:","Date:");
$SystemDetails= array("EasyDIRECT SelfService Portal","".date('F j, Y, g:i a'));


$pdf->QuoteGenerationDate($subheaders,$SystemDetails,10,150);

$pdf->Output('D','Personal Accident Quote.pdf');
?>