<?php
include('conn.php');
session_start();
if (!isset($_SESSION['regno'])){
header('location:index.htm');
}
$regno=$_SESSION['regno'];

$result=mysqli_query($con, "select * from cen0114 where regno='$regno'");
$row=mysqli_fetch_array($result);
mysqli_close($con);
?>
