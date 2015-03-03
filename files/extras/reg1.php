<?php


if ($_SERVER["REQUEST_METHOD"] == "POST")
{
$id = date_create();
$regno = date_timestamp_get($id);
$fnp = $regno.'P.jpg';
$fns = $regno.'S.jpg';

$cname = $fname = $mname  = $bdd = $bmm = $byy = $fees = $feeReason ="";

	$cname = strtoupper($_POST['cname']);
	$fname = strtoupper($_POST['fname']);
	$mname = strtoupper($_POST['mname']);
	$bdd = $_POST['bdd'];
	$bmm = $_POST['bmm'];
	$byy = $_POST['byy'];
	if(isset($_POST['fees'])){$fees = $_POST['fees'];}
	$feeReason = $_POST['feeReason'];
	$fnp = $regno.'P.jpg';
	$fns = $regno.'S.jpg';
}

include('conn.php');

$result=mysql_query("INSERT INTO new(regno, cname, fname, mname, bdd, bmm, byy, fees, feeReason, fnp, fns)
VALUES
('$regno','$cname','$fname','$mname','$bdd','$bmm','$byy','$fees','$feeReason','$fnp','$fns')") or die (mysql_error());


$result=mysql_query("select * from new where regno='$regno'")or die (mysql_error());
		
$count=mysql_num_rows($result);

$row=mysql_fetch_array($result);

if ($count === 1){
		session_start();
		$_SESSION['regno']=$row['regno'];
		header('location:after_reg.php');
		}else{
		header('location:login_rrb.php');
		}
mysql_close($link);
?>



