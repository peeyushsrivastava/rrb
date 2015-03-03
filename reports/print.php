<?php 
include("../scripts/conn.php");
include("../scripts/session.php");


$govt = "NO";
$exsm = "NO";

if ($row['gtexsm']== "GT")
	{
	$govt = "YES";
	}
else if ($row['gtexsm'] == "EX")
	{
	$exsm = "YES";
	}



?>
<?php
//require("fpdf.php"); // path to fpdf.php
require('../fpdf/ean13.php');


//$pdf = new FPDF('P', 'mm', 'A4');
$pdf=new PDF_EAN13();
$pdf->addPage();

$pho = '../uploads/'.$row['regno'].'P.jpg';
$sig = '../uploads/'.$row['regno'].'S.jpg';
$pdf->Image($pho,170,55,25,25);
$pdf->Image($sig,170,82,25,10);

//$pdf->EAN13(155,78,'123456789012',4,.35);


$pdf->rect(5,5,200,285); // for page border
$pdf->rect(150,25,50,15);  // for control no
$pdf->rect(5,50,200,73); // for Personal details
$pdf->rect(5,123,200,45); // For educational qualification
$pdf->rect(10,175,95,25);  // for correspondance address
$pdf->rect(110,175,90,25);  // for fee details
//$pdf->rect(10,195,190,20);  // for fee details
$pdf->rect(80,255,45,20);  // for thumb impress
$pdf->rect(145,255,45,20);  // for signature


$pdf->setFont("Arial", 'B', 14);
$pdf->cell(200, 5, "Railway Recruitment Board - Ajmer", 0, 1, 'C');
$pdf->setFont("Arial", 'B', 12);
$pdf->cell(200, 5, "APPLICATION FOR CENTRALISED EMPLOYMENT NOTICE NO. 01/2014 ", 0, 1, 'C');
$pdf->ln();
$pdf->setFont("Arial", '', 10);
$pdf->cell(140, 5, "RAILWAY RECRUITMENT BOARD", 0, 0, 'l');
$pdf->cell(50, 5, "Control No.", 0, 1, 'C');
$pdf->cell(140, 5, "2010, Nehru Marg, Near Ambedkar circle,", 0, 0, 'l');
$pdf->cell(50, 5, "(For official use only)", 0, 1, 'C');
$pdf->cell(200, 5, "AJMER - 305028", 0, 1, 'l');
$pdf->ln(5);
//$pdf->cell(200, 5, "APPLICATION FOR CENTRALISED EMPLOYMENT NOTICE NO. 01/2014 ", 0, 1, 'l');
$pdf->cell(200, 5, "Common Application for ASST. LOCO PILOT & TECHNICIANS", 0, 1, 'L');

$pdf->setFont("Arial", '', 10);
$pdf->cell(35,5,"Application No.  ",0,0);
$pdf->setFont("Arial", 'B', 10);
$pdf->cell(45,5,$row['app'],0,1);
$pdf->setFont("Arial", '', 10);
$pdf->cell(35,5,"Registration No. ",0,0);
$pdf->setFont("Arial", 'B', 10);
$pdf->cell(45,5,$row['regno'],0,1);

$pdf->setFont("Arial", '', 10);
$pdf->cell(35,5,"Candidate's Name ",0,0);
$pdf->setFont("Arial", 'B', 10);
$pdf->cell(45,5,$row['cname'],0,1);

$pdf->setFont("Arial", '', 10);
$pdf->cell(35,5,"Father's Name ",0,0);
$pdf->setFont("Arial", 'B', 10);

$pdf->cell(45,5,$row['fname'],0,1);
$pdf->setFont("Arial", '', 10);

$pdf->ln(2);
$pdf->cell(50,5, "CHOICE OF RAILWAY UNIT", 0, 0, 'L');
$pdf->setFont("Arial", '', 10);
$pdf->cell(35,5,"1. ".$row['choice1'],0,0);
$pdf->cell(35,5,"2. ".$row['choice2'],0,1);

$pdf->ln(2);
$pdf->cell(100,5, "CATEGORY NUMBER (Prirority wise)", 0, 1, 'L');
$pdf->setFont("Arial", '', 10);

$pdf->cell(45,5,"1. ".$row['cat_01'],1,0);
$pdf->cell(45,5,"2. ".$row['cat_02'],1,0);
$pdf->cell(45,5,"3. ".$row['cat_03'],1,1);
$pdf->cell(45,5,"4. ".$row['cat_04'],1,0);
$pdf->cell(45,5,"5. ".$row['cat_05'],1,0);
$pdf->cell(45,5,"6. ".$row['cat_06'],1,1);
$pdf->ln(3);


$pdf->cell(28,5,"Community        : ",0,0);
$pdf->setFont("Arial", 'B', 10);
$pdf->cell(55,5,$row['community'],0,0);
$pdf->setFont("Arial", '', 10);

$pdf->cell(25,5,"Minority      : ",0,0);
$pdf->setFont("Arial", 'B', 10);
$pdf->cell(30,5,$row['minority'],0,1);

if ($row['minority'] == "YES")
{
$pdf->setXY(128,97);
$pdf->cell(50,5," (".$row['minoritycomm'].")",0,1);
}
$pdf->setFont("Arial", '', 10);

$pdf->cell(28,5,"Date of Birth      : ",0,0);
$pdf->setFont("Arial", 'B', 10);
$pdf->cell(55,5,$row['dob'],0,0);
$pdf->setFont("Arial", '', 10);
$pdf->cell(25,5,"Gender       :" ,0,0);
$pdf->setFont("Arial", 'B', 10);
$pdf->cell(30,5,$row['gender'],0,0);
$pdf->setFont("Arial", '', 10);

$pdf->cell(30,5,"Disabled Person :" ,0,0);
$pdf->setFont("Arial", 'B', 10);
$pdf->cell(30,5,$row['ph'],0,1);

if ($row['ph'] == "YES")
{
$pdf->setXY(185,102);
$pdf->cell(50,5," ( ".$row['ph_yes']." )",0,1);
}


$pdf->setFont("Arial", '', 10);
$pdf->cell(28,5,"Age Relexation  :",0,0);
$pdf->setFont("Arial", 'B', 10);
$pdf->cell(55,5,$row['ageRelx'],0,1);

if ($row['ageRelx'] == "YES")
{
$pdf->setXY(45,107);
$pdf->cell(50,5," (".$row['ageReason'].")",0,1);
}
$pdf->setFont("Arial", '', 10);
$pdf->cell(28,5,"Fee exemption   :",0,0);
$pdf->setFont("Arial", 'B', 10);
$pdf->cell(55,5,$row['fees'],0,1);

if ($row['fees'] == "YES")
{
$pdf->setXY(45,112);
$pdf->cell(50,5," (".$row['feeReason'].")",0,1);
}
$pdf->setFont("Arial", '', 10);
$pdf->cell(28,5,"Govt. Employee : ",0,0);
$pdf->setFont("Arial", 'B', 10);
$pdf->cell(60,5,$govt ,0,0);
if ($govt == "YES")
{
$pdf->setXY(45,117);
$pdf->cell(50,5," ( " . $row['gtemp2'] . "  To  " . $row['gtemp3'] . " ) ",0,0);
}



$pdf->setFont("Arial", '', 10);
$pdf->cell(27,5,"Ex-Servicemen : ",0,0);
$pdf->setFont("Arial", 'B', 10);
$pdf->cell(30,5,$exsm ,0,0);
if ($exsm == "YES")
{
$pdf->setXY(132,117);
$pdf->cell(50,5,"  ( " . $row['exsm2'] . "  To  " . $row['exsm3'] . " )  ",0,0);
}



$pdf->setFont("Arial", '', 10);
//$pdf->cell(55,5,"Exsm : ".,0,0);




$pdf->ln(7);
$pdf->setFont("Arial", 'B', 8);
$pdf->cell(35,5,"Educational Details :-",0,1);
$pdf->cell(35,10,"Academic",1,0,'C');
$pdf->cell(30,10,"Qualification",1,0,'C');
$pdf->cell(60,10,"University / Board",1,0,'C');
$pdf->cell(20,10,"Year",1,0,'C');

$pdf->cell(30,10,"Subject",1,0,'C');
$pdf->cell(15,10,"Marks ",1,1,'C');


$pdf->cell(35,5,"SSC / X/ Matrix",1,0,'C');
$pdf->setFont("Arial", '', 8);
$pdf->cell(30,5,$row['a1'],1,0,'C');
$pdf->cell(60,5,$row['a2'],1,0,'C');
$pdf->cell(20,5,$row['a3'],1,0,'C');
$pdf->cell(30,5,$row['a4'],1,0,'C');
$pdf->cell(15,5,$row['a5'],1,1,'C');

$pdf->setFont("Arial", 'B', 8);
$pdf->cell(35,5,"Hr. Sec. / XII / Inter",1,0,'C');
$pdf->setFont("Arial", '', 8);
$pdf->cell(30,5,$row['b1'],1,0,'C');
$pdf->cell(60,5,$row['b2'],1,0,'C');
$pdf->cell(20,5,$row['b3'],1,0,'C');
$pdf->cell(30,5,$row['b4'],1,0,'C');
$pdf->cell(15,5,$row['b5'],1,1,'C');

$pdf->setFont("Arial", 'B', 8);
$pdf->cell(35,5,"Graduation",1,0,'C');
$pdf->setFont("Arial", '', 8);
$pdf->cell(30,5,$row['c1'],1,0,'C');
$pdf->cell(60,5,$row['c2'],1,0,'C');
$pdf->cell(20,5,$row['c3'],1,0,'C');
$pdf->cell(30,5,$row['c4'],1,0,'C');
$pdf->cell(15,5,$row['c5'],1,1,'C');

$pdf->setFont("Arial", 'B', 8);
$pdf->cell(35,5,"Post Graduation",1,0,'C');
$pdf->setFont("Arial", '', 8);
$pdf->cell(30,5,$row['d1'],1,0,'C');
$pdf->cell(60,5,$row['d2'],1,0,'C');
$pdf->cell(20,5,$row['d3'],1,0,'C');
$pdf->cell(30,5,$row['d4'],1,0,'C');
$pdf->cell(15,5,$row['d5'],1,1,'C');

$pdf->setFont("Arial", 'B', 8);
$pdf->cell(35,5,"Others",1,0,'C');
$pdf->setFont("Arial", '', 8);
$pdf->cell(30,5,$row['e1'],1,0,'C');
$pdf->cell(60,5,$row['e2'],1,0,'C');
$pdf->cell(20,5,$row['e3'],1,0,'C');
$pdf->cell(30,5,$row['e4'],1,0,'C');
$pdf->cell(15,5,$row['e5'],1,1,'C');

$pdf->ln(6);
$pdf->setFont("Arial", '', 8);
$pdf->cell(55,5,"Correspondance Address :",0,1,'L');
$pdf->setFont("Arial", 'B', 8);
$pdf->MultiCell(95,5,$row['cadd']);


$pdf->setFont("Arial", '', 10);
$pdf->SetXY(110,170);
$pdf->cell(35,5,"Fee Details :",0,1,'L');
$pdf->SetXY(110,175);
$pdf->cell(25,5,"Branch Name :",0,0,'L');
$pdf->setFont("Arial", 'B', 10);
$pdf->cell(65,5,$row['br_name'],0,0,'L');
$pdf->setFont("Arial", '', 10);

$pdf->SetXY(110,180);
$pdf->cell(25,5,"Branch Code :",0,0,'L');
$pdf->setFont("Arial", 'B', 10);
$pdf->cell(65,5,$row['br_code'],0,0,'L');
$pdf->setFont("Arial", '', 10);

$pdf->SetXY(110,185);
$pdf->cell(25,5,"Branch City :",0,0,'L');
$pdf->setFont("Arial", 'B', 10);
$pdf->cell(65,5,$row['br_city'],0,0,'L');
$pdf->setFont("Arial", '', 10);

$pdf->SetXY(110,190);
$pdf->cell(25,5,"Deposit Date :",0,0,'L');
$pdf->setFont("Arial", 'B', 10);
$pdf->cell(25,5,$row['dep_date'],0,0,'L');
$pdf->setFont("Arial", '', 10);

$pdf->cell(20,5,"Amount Rs.:",0,0,'L');
$pdf->setFont("Arial", 'B', 10);
$pdf->cell(45,5,"100/- ",0,0,'L');
$pdf->setFont("Arial", '', 10);


$pdf->SetXY(110,195);
$pdf->cell(25,5,"Journal No :",0,0,'L');
$pdf->setFont("Arial", 'B', 10);
$pdf->cell(65,5,$row['jr_no'],0,0,'L');
$pdf->setFont("Arial", '', 10);

$pdf->MultiCell(95,5,"");


$pdf->SetY(185);
//$pdf->ln(18);
$pdf->setFont("Arial", '', 10);
$pdf->cell(12,4,"City   :  ",0,0,'L');
$pdf->setFont("Arial", 'B', 10);
$pdf->cell(35,4,$row['ccity'],0,1,'L');
$pdf->setFont("Arial", '', 10);

$pdf->cell(12,4,"Dist.  :  ",0,0,'L');
$pdf->setFont("Arial", 'B', 10);
$pdf->cell(35,4,$row['cdist'],0,1,'L');
$pdf->setFont("Arial", '', 10);


$pdf->cell(12,4,"State :  ",0,0,'L');
$pdf->setFont("Arial", 'B', 10);
$pdf->cell(35,4,$row['cstate'],0,0,'L');
$pdf->setFont("Arial", '', 10);

$pdf->cell(30,4,"          Pin Code :",0,0,'L');
$pdf->setFont("Arial", 'B', 10);
$pdf->cell(15,4,$row['cpin'],0,0,'L');
$pdf->setFont("Arial", '', 10);

$pdf->cell(190,5,"",0,1);
$pdf->ln(15);
$pdf->SetY(205);
//$pdf->ln(18);
$pdf->setFont("Arial", '', 10);
$pdf->cell(40,5,"Nearest Railway Station : ",0,0,'L');
$pdf->setFont("Arial", 'B', 10);
$pdf->cell(45,5,$row['nrly'],0,1,'L');
$pdf->setFont("Arial", '', 10);
$pdf->cell(190,5,"",0,1);
$pdf->ln(-3);

$pdf->setFont("Arial", 'B', 8);
$pdf->cell(45,5,"Please copy the following declaration in your own handwriting in running hand (NOT in Capital) in the space provided below :",0,1,'L');



$pdf->setFont("Arial", '', 8);

$pdf->MultiCell(190,3,'"I hereby declare that all the statements made by me in the application are true and complete to the best of my knowledge and belief and nothing has been concealed or suppressed. I also understand that in case, any of my statements is found untrue during any stage of recruitment or thereafter shall disqualify me for the post applied for and I shall also be liable for any other action under the extant rules." (* Not filling up the above passage will disqualify you) ');

$pdf->MultiCell(190,6,"............................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................",0);

$pdf->ln(5);
$pdf->setFont("Arial", '', 10);
$pdf->cell(40,5,"Place : ____________",0,1);
$pdf->cell(40,5,"Date  : ____________",0,1);

$pdf->setFont("Arial", '', 8);
$pdf->SetXY(87,270);
$pdf->cell(20,5,"Left thumb impression",0,1);

$pdf->setFont("Arial", '', 8);
$pdf->SetXY(147,270);
$pdf->cell(40,5,"Signature of Candidate",0,1,'C');

$pdf->SetAutoPageBreak(1);
$pdf->SetY(-17);
$pdf->setFont("Arial", 'B', 8);
$pdf->MultiCell(180,5,"NOTE : - Please write the deceleration in your own handwriting, then post this application along with necessary documents to                            Railway Recruitment Board, 2010, Nehru Marg, Ambedkar Circle, Ajmer- 305028.",0);
//$pdf->cell(40,5,"(NOT in Capital)");




$abc = $row['regno'];
$pdf->output($abc.'.pdf','D');  // to download pdf
//$pdf->output();

?>