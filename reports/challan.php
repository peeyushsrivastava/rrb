<?php 
include("../scripts/conn.php");
include("../scripts/session.php");
?>

<?php
require("../fpdf/fpdf.php"); // path to fpdf.php

class MyPDF extends FPDF
{
function Footer()
{
    // Go to 1.5 cm from bottom
    $this->SetY(-20);
    // Select Arial italic 8
    $this->setFont("Arial", 'I', 8);
	$this->cell(50);
    // Print centered page number
    $this->cell(80, 5, "(Note : Fee recieving branch is advised to write the Deposit Journal No. and Branch Code No. above invariably)", 0, 1, 'C');
	$this->setFont("Arial", '', 6);
	$this->ln(-2);
	$this->cell(150, 5, "=============  CUT HERE   ===============================================  CUT HERE  ==========================================  CUT HERE  ===================", 0, 1, 'L');
}
}


$img = "../images/sbi.jpg";

$pdf = new MyPDF('P', 'mm', 'A4');
$pdf->addPage();



// Insert a logo in the top-left corner 
$pdf->Image($img,10,9,60);


$pdf->setFont("Arial", 'B', 12);
$pdf->cell(110);
$pdf->cell(80, 5, "Railway Recruitment Board - Ajmer", 0, 1, 'R');
$pdf->ln(0);

$pdf->setFont("Arial", '', 12);
$pdf->cell(80);
$pdf->cell(30, 6, "Bank Challan", 1, 0,'C');
$pdf->cell(80, 7,"Application Fee", 0, 1,'R');

$pdf->cell(45);
$pdf->ln(0);

$pdf->setFont("Arial", '', 14);
$pdf->cell(50);
$pdf->cell(90,5, "R R B - Ajmer, SBI A/c No.: 1234566789", 0, 1,'C');

$pdf->ln(1);
$pdf->setFont("Arial", '', 10);
$pdf->cell(25, 5, "Application No:", 0, 0, 'L');

$pdf->setFont("Arial", 'B', 12);
$pdf->cell(30, 5, $row['app'], 0, 0, 'L');

$pdf->setFont("Arial", '', 10);
$pdf->cell(80,5, "(Applicant's Copy)", 0, 0,'C');
$pdf->cell(20);
$pdf->cell(35,5,"Date :       /        / 2014",0,1,'R');

$pdf->ln(1);
$pdf->cell(25, 10, "Branch Name", 1, 0, 'L');
$pdf->cell(80, 10, " ", 1, 0, 'L'); 
$pdf->cell(32, 10, "Applicant's Name", 1, 0, 'L');
$pdf->cell(55, 10, $row['cname'], 1, 1, 'L'); 

$pdf->cell(30, 7, "Branch Code No. ", 1, 0, 'L');
$pdf->cell(75, 7, " ", 1, 0, 'L');
$pdf->cell(32, 7, "Date of Birth", 1, 0, 'L');
$pdf->cell(30, 7, $row['dob'], 1, 1, 'C');

$pdf->cell(30, 7, "Branch City", 1, 0, 'L');
$pdf->cell(75, 7, " ", 1, 0, 'L'); 
$pdf->cell(32, 7, "Registration ID", 1, 0, 'L');
$pdf->cell(30, 7, $row['regno'], 1, 1, 'C'); 


$pdf->cell(30, 6, "Journal No. ", 1, 0, 'L');
$pdf->cell(75, 6, " ", 1, 0, 'L'); 
$pdf->cell(32, 6, "CEN No. ", 1, 0, 'L');
$pdf->cell(30, 6, "01/2014", 1, 1, 'C');

$pdf->cell(32, 5, "Application Fee :", 0, 0, 'R');
$pdf->cell(30, 5, "Rs.   60=00", 0, 1, 'L'); 

$pdf->cell(32, 5, "Bank charges :", 0, 0, 'R');
$pdf->cell(30, 5, "Rs.   40=00", 0, 1, 'L'); 

$pdf->cell(32, 5, "Total Fee :", 0, 0, 'R');
$pdf->cell(68, 5, "Rs. 100=00 (One Hundred Rupees only)", 0, 1, 'L');

$pdf->ln(8);
$pdf->cell(37, 5, "Candidate's Signature", 0, 0, 'L');
$pdf->cell(150, 5, "Authorized Signatory of Bank", 0, 1, 'R'); 

$pdf->ln(0);
$pdf->setFont("Arial", 'I', 8);
$pdf->cell(50);
$pdf->cell(80, 5, "(Note : Fee recieving branch is advised to write the Deposit Journal No. and Branch Code No. above invariably)", 0, 1, 'C');

$pdf->ln(-2);
$pdf->setFont("Arial", '', 6);
$pdf->cell(150, 5, "=============  CUT HERE   ===============================================  CUT HERE  ==========================================  CUT HERE  ===================", 0, 1, 'L');

// RRB's copy 

$pdf->ln(2);
// Insert a logo in the top-left corner 
$pdf->Image($img,10,101,60);


$pdf->setFont("Arial", 'B', 12);
$pdf->cell(110);
$pdf->cell(80, 5, "Railway Recruitment Board - Ajmer", 0, 1, 'R');
$pdf->ln(0);

$pdf->setFont("Arial", '', 12);
$pdf->cell(80);
$pdf->cell(30, 6, "Bank Challan", 1, 0,'C');
$pdf->cell(80, 7,"Application Fee", 0, 1,'R');

$pdf->cell(45);
$pdf->ln(0);

$pdf->setFont("Arial", '', 14);
$pdf->cell(50);
$pdf->cell(90,5, "R R B - Ajmer, SBI A/c No.: 1234566789", 0, 1,'C');

$pdf->ln(1);
$pdf->setFont("Arial", '', 10);
$pdf->cell(25, 5, "Application No:", 0, 0, 'L');

$pdf->setFont("Arial", 'B', 12);
$pdf->cell(30, 5, $row['app'], 0, 0, 'L');

$pdf->setFont("Arial", '', 10);
$pdf->cell(80,5, "( R R B's Copy )", 0, 0,'C');
$pdf->cell(20);
$pdf->cell(35,5,"Date :       /        / 2014",0,1,'R');

$pdf->ln(1);
$pdf->cell(25, 10, "Branch Name", 1, 0, 'L');
$pdf->cell(80, 10, " ", 1, 0, 'L'); 
$pdf->cell(32, 10, "Applicant's Name", 1, 0, 'L');
$pdf->cell(55, 10, $row['cname'], 1, 1, 'L'); 

$pdf->cell(30, 7, "Branch Code No. ", 1, 0, 'L');
$pdf->cell(75, 7, " ", 1, 0, 'L');
$pdf->cell(32, 7, "Date of Birth", 1, 0, 'L');
$pdf->cell(30, 7, $row['dob'], 1, 1, 'C');

$pdf->cell(30, 7, "Branch City", 1, 0, 'L');
$pdf->cell(75, 7, " ", 1, 0, 'L'); 
$pdf->cell(32, 7, "Registration ID", 1, 0, 'L');
$pdf->cell(30, 7, $row['regno'], 1, 1, 'C'); 


$pdf->cell(30, 6, "Journal No. ", 1, 0, 'L');
$pdf->cell(75, 6, " ", 1, 0, 'L'); 
$pdf->cell(32, 6, "CEN No. ", 1, 0, 'L');
$pdf->cell(30, 6, "01/2014", 1, 1, 'C');

$pdf->cell(32, 5, "Application Fee :", 0, 0, 'R');
$pdf->cell(30, 5, "Rs.   60=00", 0, 1, 'L'); 

$pdf->cell(32, 5, "Bank charges :", 0, 0, 'R');
$pdf->cell(30, 5, "Rs.   40=00", 0, 1, 'L'); 

$pdf->cell(32, 5, "Total Fee :", 0, 0, 'R');
$pdf->cell(68, 5, "Rs. 100=00 (One Hundred Rupees only)", 0, 1, 'L');

$pdf->ln(8);
$pdf->cell(37, 5, "Candidate's Signature", 0, 0, 'L');
$pdf->cell(150, 5, "Authorized Signatory of Bank", 0, 1, 'R'); 

$pdf->ln(0);
$pdf->setFont("Arial", 'I', 8);
$pdf->cell(50);
$pdf->cell(80, 5, "(Note : Fee recieving branch is advised to write the Deposit Journal No. and Branch Code No. above invariably)", 0, 1, 'C');

$pdf->ln(-2);
$pdf->setFont("Arial", '', 6);
$pdf->cell(150, 5, "=============  CUT HERE   ===============================================  CUT HERE  ==========================================  CUT HERE  ===================", 0, 1, 'L');

// Bank's Copy

$pdf->ln(2);
// Insert a logo in the top-left corner 
$pdf->Image($img,10,194,60);


$pdf->setFont("Arial", 'B', 12);
$pdf->cell(110);
$pdf->cell(80, 5, "Railway Recruitment Board - Ajmer", 0, 1, 'R');
$pdf->ln(0);

$pdf->setFont("Arial", '', 12);
$pdf->cell(80);
$pdf->cell(30, 6, "Bank Challan", 1, 0,'C');
$pdf->cell(80, 7,"Application Fee", 0, 1,'R');

$pdf->cell(45);
$pdf->ln(0);

$pdf->setFont("Arial", '', 14);
$pdf->cell(50);
$pdf->cell(90,5, "R R B - Ajmer, SBI A/c No.: 1234566789", 0, 1,'C');

$pdf->ln(1);
$pdf->setFont("Arial", '', 10);
$pdf->cell(25, 5, "Application No:", 0, 0, 'L');

$pdf->setFont("Arial", 'B', 12);
$pdf->cell(30, 5, $row['app'], 0, 0, 'L');

$pdf->setFont("Arial", '', 10);
$pdf->cell(80,5, "(Copy of Issuing Branch)", 0, 0,'C');
$pdf->cell(20);
$pdf->cell(35,5,"Date :       /        / 2014",0,1,'R');

$pdf->ln(1);
$pdf->cell(25, 10, "Branch Name", 1, 0, 'L');
$pdf->cell(80, 10, " ", 1, 0, 'L'); 
$pdf->cell(32, 10, "Applicant's Name", 1, 0, 'L');
$pdf->cell(55, 10, $row['cname'], 1, 1, 'L'); 

$pdf->cell(30, 7, "Branch Code No. ", 1, 0, 'L');
$pdf->cell(75, 7, " ", 1, 0, 'L');
$pdf->cell(32, 7, "Date of Birth", 1, 0, 'L');
$pdf->cell(30, 7, $row['dob'], 1, 1, 'C');

$pdf->cell(30, 7, "Branch City", 1, 0, 'L');
$pdf->cell(75, 7, " ", 1, 0, 'L'); 
$pdf->cell(32, 7, "Registration ID", 1, 0, 'L');
$pdf->cell(30, 7, $row['regno'], 1, 1, 'C'); 


$pdf->cell(30, 6, "Journal No. ", 1, 0, 'L');
$pdf->cell(75, 6, " ", 1, 0, 'L'); 
$pdf->cell(32, 6, "CEN No. ", 1, 0, 'L');
$pdf->cell(30, 6, "01/2014", 1, 1, 'C');

$pdf->cell(32, 5, "Application Fee :", 0, 0, 'R');
$pdf->cell(30, 5, "Rs.   60=00", 0, 1, 'L'); 

$pdf->cell(32, 5, "Bank charges :", 0, 0, 'R');
$pdf->cell(30, 5, "Rs.   40=00", 0, 1, 'L'); 

$pdf->cell(32, 5, "Total Fee :", 0, 0, 'R');
$pdf->cell(68, 5, "Rs. 100=00 (One Hundred Rupees only)", 0, 1, 'L');

$pdf->ln(8);
$pdf->cell(37, 5, "Candidate's Signature", 0, 0, 'L');
$pdf->cell(150, 5, "Authorized Signatory of Bank", 0, 1, 'R'); 

$pdf->output();
?>