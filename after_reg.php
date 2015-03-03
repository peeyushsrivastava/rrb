<?PHP 
include('scripts/conn.php');
include('scripts/session.php');
?>
<!DOCTYPE html>
<head>
<?php
include("head.php");
?>
</head>
<body>
<div align="center">
<?php
include('header.php');
include("errors/javaerror.php");
?>
</div>
<div class="container">
<fieldset><legend>Provisional Registration Details</legend>

<div class="text-center">
<h3>
Your Application No. is : <strong><span style="font-size:22px;" ><?php echo $row['app']; ?></span></strong></h3>

<h3>
Your Registration Id is : <strong><span  style="font-size:22px;"><?php echo $row['regno']; ?></span></strong></h3>
</div>
<h5 class="text-center"><span class="notice">IMPORTANT - Please NOTE your Application No. and Registration Id before you proceed further, otherwise the data entered earlier will not be accessible.</span></h5>
<div class="text-center">
  <?php
echo "<br>";
echo "<br>";


if ($row['fees'] =='NO') {echo '<div align="center" style="border:double;width:80%; margin:auto; padding:10px; border-radius:10px;">
 <h3> Print your bank challan from the link below, submit your application fees and then login again to fill your application form.</h3>
  <h2><a href="reports/challan.php" style="color: #F70D1A" >Click to Print Challan</a></h2> 
   <h3> Please use Application No. and your Date of Birth to <strong>login</strong></h3>
  </div>
';}
?>
  <br />

  <input type="button" name="a" value="Quit" class="btn btn-danger"  onclick="window.location.href='logout_rrb.php'" />

  <input type="button" class="btn btn-primary" value="Go To Step 3" onclick="window.location='pho-sig.php'" />
</div>

</fieldset>


  <?php 
include("footer.php");
?>
</div><!--end of container-->


</body>
</html>
