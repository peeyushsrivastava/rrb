<!DOCTYPE html>
<html>
<head>
<?php
include('head.php');
?>
</head>
<body>

<div class="container">
<?php 
include("header.php");
include("errors/javaerror.php");
?>

<div class="row bs-wizard" style="border-bottom:0;">
    <div class="col-xs-3 bs-wizard-step active">
      <div class="text-center bs-wizard-stepnum">Step 1</div>
      <div class="progress">
        <div class="progress-bar"></div>
      </div>
      <a href="#" class="bs-wizard-dot"></a> </div>
    <div class="col-xs-2 bs-wizard-step disabled"><!-- complete -->
      <div class="text-center bs-wizard-stepnum">Step 2</div>
      <div class="progress">
        <div class="progress-bar"></div>
      </div>
      <a href="#" class="bs-wizard-dot"></a> </div>
    <div class="col-xs-2 bs-wizard-step disabled"><!-- complete -->
      <div class="text-center bs-wizard-stepnum">Step 3</div>
      <div class="progress">
        <div class="progress-bar"></div>
      </div>
      <a href="#" class="bs-wizard-dot"></a> </div>
    <div class="col-xs-2 bs-wizard-step disabled"><!-- active -->
      <div class="text-center bs-wizard-stepnum">Step 4</div>
      <div class="progress">
        <div class="progress-bar"></div>
      </div>
      <a href="#" class="bs-wizard-dot"></a> </div>
    <div class="col-xs-3 bs-wizard-step disabled"><!-- active -->
      <div class="text-center bs-wizard-stepnum">Step 5</div>
      <div class="progress">
        <div class="progress-bar"></div>
      </div>
      <a href="#" class="bs-wizard-dot"></a> </div>
  </div>
<fieldset>
<h2 class="text-center">Important Instructions</h2>

<ol type="1" style="font-family: 'Oxygen', sans-serif;" >
	<li >Read all the INTRUCTIONS mentioned in notification No. RRB 02/2013 dated 21-09-2013.</li>
	<li>Wrong information lead to Debarment of candidate from appearing for any RRB exam. for two year.</li>
	<li>Candidate can submit only one application on-line.</li>
	<li>Exam. FEE has to be remitted (other than the Exempted candidate), either in the post office or through bank.</li>
	<li>After completing the application take Print out and send to RRB.</li>
	<li>Photo should not be with sun glass or cap.</li>
</ol>



<h2 align="center">Pre-requistes to fill on-line form.</h2>

<ol style="font-family: 'Oxygen', sans-serif;">
    <li>Please make sure that you have below mentioned details are ready.</li>
    <li>Email (Mandatory - an email will be sent to your registered email address). If you do not have email address, please create an email address and than only fill the Appliction Form.</li>
    <li>Your Personal details.</li>
    <li>Education details.</li>
    <li>Scaned Photograph and Signature.</li>
    <li>Your mobile Number.</li>
  </ol>
<div class="text-center">
<a href="index.htm" class="btn btn-danger">Quit</a>
<a href="new-app.php" class="btn btn-primary">Go To Step 2</a>
</div>

</fieldset>

<?php 
include("footer.php");
?>
</div><!--end of container-->
</body>
</html>
