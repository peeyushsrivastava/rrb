<?php 
include('scripts/conn.php');
include('scripts/session.php');
if (($row['cat_01'] != "") && ($row['cat_02'] != "")) {header('location:app_sub.php');}
?>
<?php 
$gtexsm = $a1 = $a2 = $a3 = $a4 = $a5 = $b1 = $b2 = $b3 = $b4 = $b5 = $c1 = $c2 = $c3 = $c4 = $c5 = $d1 = $d2 = $d3 = $d4 = $d5 = $e1 = $e2 = $e3 = $e4 = $e5 = $nrly = $cadd = $ccity = $cpin = $cdist = $gtemp1 = $gtemp2 = $gtemp3 = $gtemp4 = $exsm1 = $exsm2 = $exsm3 = $exsm4 = $br_name = $br_code = $br_city = $dep_date = $jr_no = "";
                                        
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
        $cat_01 = filter_var($_POST['pri1'], FILTER_SANITIZE_STRING);
        $cat_02 = filter_var($_POST['pri2'], FILTER_SANITIZE_STRING);
        $cat_03 = filter_var($_POST['pri3'], FILTER_SANITIZE_STRING);
        $cat_04 = filter_var($_POST['pri4'], FILTER_SANITIZE_STRING);
        $cat_05 = filter_var($_POST['pri5'], FILTER_SANITIZE_STRING);
        $cat_06 = filter_var($_POST['pri6'], FILTER_SANITIZE_STRING);
        $cat_07 = filter_var($_POST['pri7'], FILTER_SANITIZE_STRING);
        $cat_08 = filter_var($_POST['pri8'], FILTER_SANITIZE_STRING);
        $cat_09 = filter_var($_POST['pri9'], FILTER_SANITIZE_STRING);
        $cat_10 = filter_var($_POST['pri10'], FILTER_SANITIZE_STRING);
        
        $choice1 = filter_var($_POST['choice1'], FILTER_SANITIZE_STRING);
        $choice2 = filter_var($_POST['choice2'], FILTER_SANITIZE_STRING);
        
        if(isset($_POST['gtemp']))
		{
			$gtemp = filter_var($_POST['gtemp'], FILTER_SANITIZE_STRING);
		}
        if(isset($_POST['exsm']))
		{
			$exsm = filter_var($_POST['exsm'], FILTER_SANITIZE_STRING);
		}
        $gtemp1 = filter_var(strtoupper($_POST['gtemp1']), FILTER_SANITIZE_STRING);
        $gtemp2 = filter_var($_POST['gtemp2'], FILTER_SANITIZE_STRING);
        $gtemp3 = filter_var($_POST['gtemp3'], FILTER_SANITIZE_STRING);
        $gtemp4 = filter_var(strtoupper($_POST['gtemp4']), FILTER_SANITIZE_STRING);
        
        $exsm1 = filter_var($_POST['exsm1'], FILTER_SANITIZE_STRING);
        $exsm2 = filter_var($_POST['exsm2'], FILTER_SANITIZE_STRING);
        $exsm3 = filter_var($_POST['exsm3'], FILTER_SANITIZE_STRING);
        $exsm4 = filter_var($_POST['exsm4'], FILTER_SANITIZE_STRING);
        
        if(isset($_POST['ph']))
		{
			$ph = filter_var($_POST['ph'], FILTER_SANITIZE_STRING);
		}
        $ph_yes = filter_var($_POST['ph_yes'], FILTER_SANITIZE_STRING);
        
        $a1 = filter_var(strtoupper($_POST['a1']), FILTER_SANITIZE_STRING);
        $a2 = filter_var(strtoupper($_POST['a2']), FILTER_SANITIZE_STRING);
        $a3 = filter_var(strtoupper($_POST['a3']), FILTER_SANITIZE_STRING);
        $a4 = filter_var(strtoupper($_POST['a4']), FILTER_SANITIZE_STRING);
        $a5 = filter_var(strtoupper($_POST['a5']), FILTER_SANITIZE_STRING);
        $b1 = filter_var(strtoupper($_POST['b1']), FILTER_SANITIZE_STRING);
        $b2 = filter_var(strtoupper($_POST['b2']), FILTER_SANITIZE_STRING);
        $b3 = filter_var(strtoupper($_POST['b3']), FILTER_SANITIZE_STRING);
        $b4 = filter_var(strtoupper($_POST['b4']), FILTER_SANITIZE_STRING);
        $b5 = filter_var(strtoupper($_POST['b5']), FILTER_SANITIZE_STRING);
        $c1 = filter_var(strtoupper($_POST['c1']), FILTER_SANITIZE_STRING);
        $c2 = filter_var(strtoupper($_POST['c2']), FILTER_SANITIZE_STRING);
        $c3 = filter_var(strtoupper($_POST['c3']), FILTER_SANITIZE_STRING);
        $c4 = filter_var(strtoupper($_POST['c4']), FILTER_SANITIZE_STRING);
        $c5 = filter_var(strtoupper($_POST['c5']), FILTER_SANITIZE_STRING);
        $d1 = filter_var(strtoupper($_POST['d1']), FILTER_SANITIZE_STRING);
        $d2 = filter_var(strtoupper($_POST['d2']), FILTER_SANITIZE_STRING);
        $d3 = filter_var(strtoupper($_POST['d3']), FILTER_SANITIZE_STRING);
        $d4 = filter_var(strtoupper($_POST['d4']), FILTER_SANITIZE_STRING);
        $d5 = filter_var(strtoupper($_POST['d5']), FILTER_SANITIZE_STRING);
        $e1 = filter_var(strtoupper($_POST['e1']), FILTER_SANITIZE_STRING);
        $e2 = filter_var(strtoupper($_POST['e2']), FILTER_SANITIZE_STRING);
        $e3 = filter_var(strtoupper($_POST['e3']), FILTER_SANITIZE_STRING);
        $e4 = filter_var(strtoupper($_POST['e4']), FILTER_SANITIZE_STRING);
        $e5 = filter_var(strtoupper($_POST['e5']), FILTER_SANITIZE_STRING);
        
        
        
        
        $cadd = filter_var(strtoupper($_POST['cadd']), FILTER_SANITIZE_STRING);
        $ccity = filter_var(strtoupper($_POST['ccity']), FILTER_SANITIZE_STRING);
        $cpin = filter_var(strtoupper($_POST['cpin']), FILTER_SANITIZE_STRING);
        $cdist = filter_var(strtoupper($_POST['cdist']), FILTER_SANITIZE_STRING);
        $cstate = filter_var(strtoupper($_POST['cstate']), FILTER_SANITIZE_STRING);
        $nrly = filter_var(strtoupper($_POST['nrly']), FILTER_SANITIZE_STRING);
        
        
        if(isset($_POST['br_name'])){$br_name = strtoupper($_POST['br_name']);}
        if(isset($_POST['br_code'])){$br_code = $_POST['br_code'];}
        if(isset($_POST['br_city'])){$br_city =strtoupper($_POST['br_city']);}
        if(isset($_POST['dep_date'])){$dep_date = $_POST['dep_date'];}
        if(isset($_POST['jr_no'])){$jr_no = $_POST['jr_no'];}
        
include('scripts/conn.php');
if (mysqli_connect_errno()) {
echo "failed to connect to mysql:". mysqli_connect_error();
}

$result=mysqli_query($con, "UPDATE cen0114 SET  
	cat_01='$cat_01', 
	cat_02='$cat_02', 
	cat_03='$cat_03', 
	cat_04='$cat_04', 
	cat_05='$cat_05', 
	cat_06='$cat_06', 
	cat_07='$cat_07', 
	cat_08='$cat_08', 
	cat_09='$cat_09', 
	cat_10='$cat_10', 
	choice1='$choice1', 
	choice2='$choice2',  
	gtemp='$gtemp', 
	exsm='$exsm', 
	ph='$ph', 
	ph_yes='$ph_yes', 
	a1='$a1', a2='$a2', a3='$a3', a4='$a4', a5='$a5', 
	b1='$b1', b2='$b2', b3='$b3', b4='$b4', b5='$b5', 
	c1='$c1', c2='$c2', c3='$c3', c4='$c4', c5='$c5', 
	d1='$d1', d2='$d2', d3='$d3', d4='$d4', d5='$d5', 
	e1='$e1', e2='$e2', e3='$e3', e4='$e4', e5='$e5', 
	nrly='$nrly', 
	cadd='$cadd', 
	ccity='$ccity', 
	cpin='$cpin', 
	cdist='$cdist', 
	cstate='$cstate', 
	gtemp1='$gtemp1', gtemp2='$gtemp2', gtemp3='$gtemp3', gtemp4='$gtemp4', 
	exsm1='$exsm1', exsm2='$exsm2', exsm3='$exsm3', exsm4='$exsm4', 
	br_name='$br_name', 
	br_code='$br_code', 
	br_city='$br_city', 
	dep_date='$dep_date', 
	jr_no='$jr_no'  
WHERE regno='$regno'");
echo mysqli_error($con);
mysqli_close($con);
header('location:app_sub.php');
}// end of main function
?>
<!DOCTYPE html>
<html>
<head>
<?php
include("head.php");
?>
<script src="js/app-2.js" type="text/javascript"></script>
<script type="text/javascript">

function showClass(str)
{
if (str.length===0)
  { 
  document.getElementById("txtHint").innerHTML="<select class='form-control'><option>--select--</option></select>";
  return;
  }
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","gethint.php?q="+str,true);
xmlhttp.send();
}
</script>



<body onload="firstfocus();">
<div class="container">
<?php
include('header.php');
include("errors/javaerror.php");
?>
  <div class="row bs-wizard" style="border-bottom:0;">
    <div class="col-xs-3 bs-wizard-step complete">
      <div class="text-center bs-wizard-stepnum">Step 1</div>
      <div class="progress">
        <div class="progress-bar"></div>
      </div>
      <a href="#" class="bs-wizard-dot"></a> </div>
    <div class="col-xs-2 bs-wizard-step complete"><!-- complete -->
      <div class="text-center bs-wizard-stepnum">Step 2</div>
      <div class="progress">
        <div class="progress-bar"></div>
      </div>
      <a href="#" class="bs-wizard-dot"></a> </div>
    <div class="col-xs-2 bs-wizard-step complete"><!-- complete -->
      <div class="text-center bs-wizard-stepnum">Step 3</div>
      <div class="progress">
        <div class="progress-bar"></div>
      </div>
      <a href="#" class="bs-wizard-dot"></a> </div>
    <div class="col-xs-2 bs-wizard-step complete"><!-- active -->
      <div class="text-center bs-wizard-stepnum">Step 4</div>
      <div class="progress">
        <div class="progress-bar"></div>
      </div>
      <a href="#" class="bs-wizard-dot"></a> </div>
    <div class="col-xs-3 bs-wizard-step active"><!-- active -->
      <div class="text-center bs-wizard-stepnum">Step 5</div>
      <div class="progress">
        <div class="progress-bar"></div>
      </div>
      <a href="#" class="bs-wizard-dot"></a> </div>
  </div>
  <!--end of bs-wizard -->
  
  <fieldset>
    <legend>General Details</legend>
    <div class="form-group row">
      <label class="control-label col-md-4 col-xs-offset-1"><strong>Application No </strong></label>
      <div class="col-md-4">
        <input type="text" class="form-control" value="<?php echo $row['app']; ?>" disabled >
        <span class="help-block"></span> </div>
    </div>
    <!--end of form group-->
    <div class="form-group row">
      <label class="control-label col-md-4 col-xs-offset-1"><strong>Registration Id </strong></label>
      <div class="col-md-4">
        <input type="text" class="form-control" value="<?php echo $row['regno']; ?>" disabled>
        <span class="help-block"></span> </div>
    </div>
    <!--end of form group-->
    <div class="form-group row">
      <label class="control-label col-md-4 col-xs-offset-1"><strong>Candidate's Name </strong></label>
      <div class="col-md-4">
        <input type="text" class="form-control" value="<?php echo $row['cname']; ?>" disabled >
        <span class="help-block"></span> </div>
    </div>
    <!--end of form group-->
    <div class="form-group row">
      <label class="control-label col-md-4 col-xs-offset-1"><strong>Father's Name </strong></label>
      <div class="col-md-4">
        <input type="text" class="form-control" value="<?php echo $row['fname']; ?>" disabled >
        <span class="help-block"></span> </div>
    </div>
    <!--end of form group-->
    <div class="form-group row">
      <label class="control-label col-md-4 col-xs-offset-1"><strong>Date Of Birth</strong></label>
      <div class="col-md-4">
        <input type="text" class="form-control" value="<?php echo $row['dob']; ?>" disabled >
        <span class="help-block"></span> </div>
    </div>
    <!--end of form group-->
    <div class="form-group row">
      <label class="control-label col-md-4 col-xs-offset-1"><strong>Gender </strong></label>
      <div class="col-md-4">
        <input type="text" class="form-control" value="<?php echo $row['gender']; ?>" disabled >
        <span class="help-block"></span> </div>
    </div>
    <!--end of form group-->
  </fieldset>
  
<h4>Fields marked with <span class=" glyphicon glyphicon-star-empty text-danger"></span> are Mandatory</h4>
  <form id="theForm" onsubmit="javaScript:return validateform(theForm);" name="theForm" method="post" action="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>" >
    <?php
/*if ($row['fees'] == 'NO')
{
echo '
<fieldset>
<legend>Bank Challan Details  </legend>

<table width="85%" border="0" cellspacing="0" cellpadding="5">
<th colspan="2"><span class="notice">(For those who had deposited Fee)</span></th>
  <tr>
    <td width="17%" height="37"><span class="notice">*</span> Branch Name : </td>
    <td colspan="3"><input name="br_name" type="text" maxlength="30" id="br_name" size="80" oncut="return false" oncopy="return false" onpaste="return false" 
                onKeyPress="return only_alpha(this,event)" /></td>
    </tr>
  <tr>
    <td><span class="notice">*</span> Branch City : </td>
    <td width="23%"><input name="br_city" type="text" id="br_city" maxlength="30" oncut="return false" oncopy="return false" onpaste="return false" 
                onKeyPress="return only_alpha(this,event)" /></td>
    <td width="16%"><span class="notice">*</span> Branch Code : </td>
    <td width="44%"><input name="br_code" type="text" id="br_code" maxlength="10" oncut="return false" oncopy="return false" onpaste="return false" 
                onKeyPress="return alphanumeric_specialchars(this,event)" /></td>
  </tr>
  <tr>
    <td> <span class="notice">*</span> Date of Deposit <br /></td>
    <td><input name="dep_date" type="text" id="dep_date" maxlength="10" oncut="return false" oncopy="return false" onpaste="return false" 
                onKeyPress="return alphanumeric_specialchars(this,event)" /></td>
    <td><span class="notice">*</span> Journal No :</td>
    <td><input name="jr_no" type="text" id="jr_no" maxlength="10" oncut="return false" oncopy="return false" onpaste="return false" 
                onKeyPress="return only_numeric(this,event)" /></td>
  </tr>
</table>

</fieldset>
'; }*/
?>
<fieldset>
      <legend>Other Details</legend>
      <label><span class=" glyphicon glyphicon-star-empty text-danger"></span> CATEGORY NUMBER - Indicate your options in order of preference in Numeric Form</label>
      <br />
      <br />
      <table border="1" cellspacing="0" cellpadding="5" width="40%" align="center" >
        <tr align="center">
          <td width="5%">I</td>
          <td><select name="pri1" id="pri1" class="texta1 form-control">
              <option value="p1">--select-- &nbsp;&nbsp;&nbsp;</option>
              <option value="01">POST 1</option>
              <option value="02">POST 2</option>
              <option value="03">POST 3</option>
              <option value="04">POST 4</option>
              <option value="05">POST 5</option>
              <option value="06">POST 6</option>
              <option value="07">POST 7</option>
              <option value="08">POST 8</option>
              <option value="09">POST 9</option>
              <option value="10">POST 10</option>
            </select></td>
          <td width="5%">II</td>
          <td><select name="pri2" id="pri2" class="texta1 form-control">
              <option value="p2">--select-- &nbsp;&nbsp;&nbsp;</option>
              <option value="01">POST 1</option>
              <option value="02">POST 2</option>
              <option value="03">POST 3</option>
              <option value="04">POST 4</option>
              <option value="05">POST 5</option>
              <option value="06">POST 6</option>
              <option value="07">POST 7</option>
              <option value="08">POST 8</option>
              <option value="09">POST 9</option>
              <option value="10">POST 10</option>
            </select></td>
        </tr>
        <tr align="center">
          <td align="center">III</td>
          <td><select name="pri3" id="pri3" class="texta1 form-control">
              <option value="p3">--select-- &nbsp;&nbsp;&nbsp;</option>
              <option value="01">POST 1</option>
              <option value="02">POST 2</option>
              <option value="03">POST 3</option>
              <option value="04">POST 4</option>
              <option value="05">POST 5</option>
              <option value="06">POST 6</option>
              <option value="07">POST 7</option>
              <option value="08">POST 8</option>
              <option value="09">POST 9</option>
              <option value="10">POST 10</option>
            </select></td>
          <td>IV</td>
          <td><select name="pri4" id="pri4" class="texta1 form-control">
              <option value="p4">--select-- &nbsp;&nbsp;&nbsp;</option>
              <option value="01">POST 1</option>
              <option value="02">POST 2</option>
              <option value="03">POST 3</option>
              <option value="04">POST 4</option>
              <option value="05">POST 5</option>
              <option value="06">POST 6</option>
              <option value="07">POST 7</option>
              <option value="08">POST 8</option>
              <option value="09">POST 9</option>
              <option value="10">POST 10</option>
            </select></td>
        </tr>
        <tr align="center">
          <td>V</td>
          <td><select name="pri5" id="pri5" class="texta1 form-control">
              <option value="p5">--select-- &nbsp;&nbsp;&nbsp;</option>
              <option value="01">POST 1</option>
              <option value="02">POST 2</option>
              <option value="03">POST 3</option>
              <option value="04">POST 4</option>
              <option value="05">POST 5</option>
              <option value="06">POST 6</option>
              <option value="07">POST 7</option>
              <option value="08">POST 8</option>
              <option value="09">POST 9</option>
              <option value="10">POST 10</option>
            </select></td>
          <td>VI</td>
          <td><select name="pri6" id="pri6" class="texta1 form-control">
              <option value="p6">--select-- &nbsp;&nbsp;&nbsp;</option>
              <option value="01">POST 1</option>
              <option value="02">POST 2</option>
              <option value="03">POST 3</option>
              <option value="04">POST 4</option>
              <option value="05">POST 5</option>
              <option value="06">POST 6</option>
              <option value="07">POST 7</option>
              <option value="08">POST 8</option>
              <option value="09">POST 9</option>
              <option value="10">POST 10</option>
            </select></td>
        </tr>
        <tr align="center">
          <td>VII</td>
          <td><select name="pri7" id="pri7" class="texta1 form-control">
              <option value="p7">--select-- &nbsp;&nbsp;&nbsp;</option>
              <option value="01">POST 1</option>
              <option value="02">POST 2</option>
              <option value="03">POST 3</option>
              <option value="04">POST 4</option>
              <option value="05">POST 5</option>
              <option value="06">POST 6</option>
              <option value="07">POST 7</option>
              <option value="08">POST 8</option>
              <option value="09">POST 9</option>
              <option value="10">POST 10</option>
            </select></td>
          <td>VIII</td>
          <td><select name="pri8" id="pri8" class="texta1 form-control">
              <option value="p8">--select-- &nbsp;&nbsp;&nbsp;</option>
              <option value="01">POST 1</option>
              <option value="02">POST 2</option>
              <option value="03">POST 3</option>
              <option value="04">POST 4</option>
              <option value="05">POST 5</option>
              <option value="06">POST 6</option>
              <option value="07">POST 7</option>
              <option value="08">POST 8</option>
              <option value="09">POST 9</option>
              <option value="10">POST 10</option>
            </select></td>
        </tr>
        <tr align="center">
          <td>IX</td>
          <td><select name="pri9" id="pri9" class="texta1 form-control">
              <option value="p9">--select-- &nbsp;&nbsp;&nbsp;</option>
              <option value="01">POST 1</option>
              <option value="02">POST 2</option>
              <option value="03">POST 3</option>
              <option value="04">POST 4</option>
              <option value="05">POST 5</option>
              <option value="06">POST 6</option>
              <option value="07">POST 7</option>
              <option value="08">POST 8</option>
              <option value="09">POST 9</option>
              <option value="10">POST 10</option>
            </select></td>
          <td>X</td>
          <td><select name="pri10" id="pri10" class="texta1 form-control">
              <option value="p10">--select-- &nbsp;&nbsp;&nbsp;</option>
              <option value="01">POST 1</option>
              <option value="02">POST 2</option>
              <option value="03">POST 3</option>
              <option value="04">POST 4</option>
              <option value="05">POST 5</option>
              <option value="06">POST 6</option>
              <option value="07">POST 7</option>
              <option value="08">POST 8</option>
              <option value="09">POST 9</option>
              <option value="10">POST 10</option>
            </select></td>
        </tr>
      </table>
      <br />
      <label><span class=" glyphicon glyphicon-star-empty text-danger"></span> CHOICE OF RAILWAY / UNIT (Wherever applicable)</label>

<div class="form-group row">
      <label class="control-label col-md-3 col-xs-offset-2"><strong>1st</strong></label>
      <div class="col-md-4">
        <select name="choice1" id="choice1" class="texta1  form-control">
              <option value="">--select-- &nbsp;&nbsp;&nbsp;</option>
              <option value="NWR">NWR</option>
              <option value="WCR">WCR</option>
            </select>
        <span class="help-block"></span> </div>
    </div>
    <!--end of form group-->
<div class="form-group row">
      <label class="control-label col-md-3 col-xs-offset-2"><strong>2nd</strong></label>
      <div class="col-md-4">
        <select name="choice2" id="choice2" class="texta1  form-control">
              <option value="">--select-- &nbsp;&nbsp;&nbsp;</option>
              <option value="NWR">NWR</option>
              <option value="WCR">WCR</option>
            </select>
        <span class="help-block"></span> </div>
    </div>
    <!--end of form group-->
     
     <div class="form-group row">
      <label class="control-label col-md-4 col-xs-offset-1"><strong>Government Employee</strong></label>
      <div class="col-md-4">
      		<div class="form-control">
        <label class="radio-inline">
        <input type="radio" name="gtemp" value="YES" onclick="document.getElementById('gtemp').style.display='';" />
       <strong>Yes</strong></label>
        <label class="radio-inline">
        <input type="radio" name="gtemp" value="NO" onclick="document.getElementById('gtemp').style.display='none';"  checked="checked" />
             <strong>No</strong></label>
             </div>
        <span class="help-block"></span> </div>
        
    </div>
    <!--end of form group-->
     <table border="0" style="width:500px;" align="center" id="gtemp">
        <tr>
          <td colspan="3"><div><span class="notice">Present employment (to be filled by Railway/Centeral/State/PSU employees)</span>
              <table width="90%" border="1" cellspacing="0" cellpadding="5">
                <tr>
                  <th width="27%">Designation and Grade</th>
                  <th width="13%">Date from</th>
                  <th width="14%">Date to</th>
                  <th width="46%">Name &amp; Address of Employer</th>
                </tr>
                <tr>
                  <td><div>
                      <input name="gtemp1" type="text" id="gtemp1" size="25" onkeypress="return only_alpha(this,event)" class="form-control" />
                    </div></td>
                  <td><div>
                      <input name="gtemp2" type="text" id="gtemp2" size="10" maxlength="10" onkeypress="return alphanumeric_specialchars(this,event)" class="form-control" />
                    </div></td>
                  <td><div>
                      <input name="gtemp3" type="text" id="gtemp3" size="10" maxlength="10" onkeypress="return alphanumeric_specialchars(this,event)" class="form-control" />
                    </div></td>
                  <td><div>
                      <input name="gtemp4" type="text" id="gtemp4" size="30" onkeypress="return alphanumeric_specialchars(this,event)" class="form-control"/>
                    </div></td>
                </tr>
              </table>
            </div></td>
        </tr>
      </table>
      
    <div class="form-group row">
      <label class="control-label col-md-4 col-xs-offset-1"><strong>Ex-Servicemen</strong></label>
      <div class="col-md-4">
      <div class="form-control">
        <label class="radio-inline">
              <input type="radio" name="exsm" value="YES" onclick="document.getElementById('exsm').style.display='';" />
              <strong>Yes</strong></label>
            <label class="radio-inline">
              <input type="radio" name="exsm" value="NO" onclick="document.getElementById('exsm').style.display='none';"  checked="checked"/>
              <strong>No</strong></label>
              </div>
        <span class="help-block"></span> </div>
    </div>
    <!--end of form group-->
     <table border="0" style="width:500px;" align="center" id="exsm">
        <tr>
          <td colspan="3"><div><span class="notice">Ex-Serviceman (EX-SM)</span>
              <table width="90%" border="1" cellspacing="0" cellpadding="5">
                <tr>
                  <th width="27%">Date of enrolment</th>
                  <th width="24%">Date of attestation</th>
                  <th width="26%">Date of Discharge</th>
                  <th width="23%">Length of Service</th>
                </tr>
                <tr>
                  <td><div align="center">
                      <input name="exsm1" type="text" id="exsm1" size="25" onkeypress="return alphanumeric_specialchars(this,event)" class="form-control"/>
                    </div></td>
                  <td><div align="center">
                      <input name="exsm2" type="text" id="exsm2" size="15" maxlength="10" onkeypress="return alphanumeric_specialchars(this,event)" class="form-control"/>
                    </div></td>
                  <td><div align="center">
                      <input name="exsm3" type="text" id="exsm3" size="10" maxlength="10" onkeypress="return alphanumeric_specialchars(this,event)" class="form-control"/>
                    </div></td>
                  <td><div align="center">
                      <input name="exsm4" type="text" id="exsm4" size="10" onkeypress="return alphanumeric_specialchars(this,event)" class="form-control"/>
                    </div></td>
                </tr>
              </table>
            </div></td>
        </tr>
      </table>
      <div class="form-group row">
      <label class="control-label col-md-4 col-xs-offset-1"><span class=" glyphicon glyphicon-star-empty text-danger"></span> <strong>Are you Person with Disabilities</strong></label>
      <div class="col-md-4">
      <div class="form-control">
        <label class="radio-inline">
              <input type="radio" id="ph" name="ph" value="YES" onclick="document.getElementById('phtype').style.display=''" />
              <strong>Yes</strong></label>
            <label class="radio-inline">
              <input type="radio" id="ph" name="ph" value="NO" checked="checked" onclick="document.getElementById('phtype').style.display='none'" />
              <strong>No</strong></label>
              </div>
        <span class="help-block"></span> </div>
    </div>
    <!--end of form group-->
     
      <div class="form-group row" id="phtype">
      <label class="control-label col-md-4 col-xs-offset-1 text-danger"	><strong>Select Type of Disability</strong></label>
      <div class="col-md-4">
         <select name="ph_yes" id="ph_yes" class="form-control">
                  <option value="NO">--select-- &nbsp;&nbsp;&nbsp;</option>
                  <option value="VH">VH</option>
                  <option value="OH">OH</option>
                  <option value="HH">HH</option>
                </select>
        <span class="help-block"></span> </div>
    </div>
    <!--end of form group-->
    </fieldset>
    <br />
    <fieldset>
      <legend>Educational Qualification</legend>
      <table width="100%" border="1" cellspacing="0" cellpadding="5">
        <tr>
          <td width="22%"><div align="center"> <strong>Academic</strong></div></td>
          <td width="18%"><div align="center"><strong>Qualification</strong></div></td>
          <td width="23%"><div align="center"><strong>Univ/Board</strong></div></td>
          <td width="10%"><div align="center"><strong>Year of Passing</strong></div></td>
          <td width="17%"><div align="center"><strong>Subject</strong></div></td>
          <td width="10%"><div align="center"><strong>Marks (%)</strong></div></td>
        </tr>
        <tr>
          <td><div align="center"><strong><span class=" glyphicon glyphicon-star-empty text-danger"></span> SSC / X / Matric</strong></div></td>
          <td><div>
              <input type="text" id="a1" name="a1" class="form-control" />
            </div></td>
          <td><div>
              <input name="a2" type="text" id="a2" size="35" class="form-control"/>
            </div></td>
          <td><div>
              <input name="a3" type="text" id="a3" size="5" maxlength="4" class="form-control"/>
            </div></td>
          <td><div>
              <input type="text" id="a4" name="a4" class="form-control"/>
            </div></td>
          <td><div>
              <input name="a5" type="text" id="a5" size="5" maxlength="5" class="form-control"/>
            </div></td>
        </tr>
        <tr>
          <td><div align="center"><strong><span class=" glyphicon glyphicon-star-empty text-danger"></span>Hr. Sec./ XII / Inter</strong></div></td>
          <td><div>
              <input type="text" id="b1" name="b1" class="form-control"/>
            </div></td>
          <td><div>
              <input name="b2" type="text" id="b2" size="35" class="form-control"/>
            </div></td>
          <td><div>
              <input name="b3" type="text" id="b3" size="5" maxlength="4" class="form-control"/>
            </div></td>
          <td><div>
              <input type="text" id="b4" name="b4" class="form-control"/>
            </div></td>
          <td><div>
              <input name="b5" type="text" id="b5" size="5" maxlength="5" class="form-control"/>
            </div></td>
        </tr>
        <tr>
          <td><div align="center"><strong><span class=" glyphicon glyphicon-star-empty text-danger"></span>Graduation</strong></div></td>
          <td><div align="center">
              <select id="c1" name="c1" onchange="showClass(this.value)" class="form-control" >
                <option value="">--select-- </option>
                <option value="BCOM">B.Com</option>
                <option value="BA">B.A.</option>
                <option value="BSC">B. Sc</option>
              </select>
            </div></td>
          <td><input type="text" id="c2" name="c2" size="35" class="form-control"/>
            <div></div></td>
          <td><div>
              <input name="c3" type="text" id="c3" size="5" maxlength="4" class="form-control"/>
            </div></td>
          <td><div align="center"><span id="txtHint">
              <select id="c4" class="form-control">
                <option value="">--select--</option>
              </select>
              </span></div></td>
          <td><div>
              <input name="c5" type="text" id="c5" size="5" maxlength="5" class="form-control" />
            </div></td>
        </tr>
        <tr>
          <td><div align="center"><strong>Post Graduation</strong></div></td>
          <td><div>
              <input type="text" id="d1" name="d1" class="form-control"/>
            </div></td>
          <td><div>
              <input name="d2" type="text" id="d2" size="35" class="form-control"/>
            </div></td>
          <td><div>
              <input name="d3" type="text" id="d3" size="5" maxlength="4" class="form-control"/>
            </div></td>
          <td><div>
              <input type="text" id="d4" name="d4" class="form-control"/>
            </div></td>
          <td><div>
              <input name="d5" type="text" id="d5" size="5" maxlength="5" class="form-control"/>
            </div></td>
        </tr>
        <tr>
          <td><div align="center"><strong>Others</strong></div></td>
          <td><div>
              <input type="text" name="e1" class="form-control"/>
            </div></td>
          <td><div>
              <input name="e2" type="text" size="35" class="form-control"/>
            </div></td>
          <td><div>
              <input name="e3" type="text" size="5" maxlength="4" class="form-control"/>
            </div></td>
          <td><div>
              <input type="text" name="e4" class="form-control"/>
            </div></td>
          <td><div>
              <input name="e5" type="text" size="5" class="form-control"/>
            </div></td>
        </tr>
      </table>
    </fieldset>
    <fieldset>
      <legend>Address</legend>
      
      
      <div class="form-group row">
      <label class="control-label col-md-4 col-xs-offset-1"><span class=" glyphicon glyphicon-star-empty text-danger"></span> House No/ Street / Village</label>
      <div class="col-md-4">
<input type="text" name="cadd" id="cadd" maxlength="75" size="70" onkeypress="return alphanumeric_specialchars(this,event)" class="form-control"/>
        <span class="help-block"></span> </div>
    </div>
    <!--end of form group-->
      <div class="form-group row">
      <label class="control-label col-md-4 col-xs-offset-1"><span class=" glyphicon glyphicon-star-empty text-danger"></span> City</label>
      <div class="col-md-4">
<input name="ccity" type="text" id="ccity" size="15" onkeypress="return only_alpha(this,event)" class="form-control"/>
        <span class="help-block"></span> </div>
    </div>
    <!--end of form group-->
    <div class="form-group row">
      <label class="control-label col-md-4 col-xs-offset-1"><span class=" glyphicon glyphicon-star-empty text-danger"></span> Pincode</label>
      <div class="col-md-4">
                <input name="cpin" maxlength="6" type="text" id="cpin" size="15" onkeypress="return only_numeric(this,event)" class="form-control"/>

        <span class="help-block"></span> </div>
    </div>
    <!--end of form group-->
    <div class="form-group row">
      <label class="control-label col-md-4 col-xs-offset-1"><span class=" glyphicon glyphicon-star-empty text-danger"></span> District</label>
      <div class="col-md-4">
<input name="cdist" type="text" id="cdist" size="15" onkeypress="return only_alpha(this,event)" class="form-control"/>
        <span class="help-block"></span> </div>
    </div>
    <!--end of form group-->
    <div class="form-group row">
      <label class="control-label col-md-4 col-xs-offset-1"><span class=" glyphicon glyphicon-star-empty text-danger"></span> State</label>
      <div class="col-md-4">
<select name="cstate" id="cstate" class="form-control">
                  <option value="">--select-- &nbsp;&nbsp;&nbsp;</option>
                  <option value="Andhra Pradesh">Andhra Pradesh</option>
                  <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                  <option value="Assam">Assam</option>
                  <option value="Bihar">Bihar</option>
                  <option value="Chhattisgarh">Chhattisgarh</option>
                  <option value="Delhi">Delhi</option>
                  <option value="Gujarat">Gujarat</option>
                  <option value="Goa">Goa</option>
                  <option value="Haryana">Haryana</option>
                  <option value="Himachal Pradesh">Himachal Pradesh</option>
                  <option value="Jammu &amp; Kashmir">Jammu &amp; Kashmir</option>
                  <option value="Jharkhand">Jharkhand</option>
                  <option value="Karnataka">Karnataka</option>
                  <option value="Kerala">Kerala</option>
                  <option value="Madhya Pradesh">Madhya Pradesh</option>
                  <option value="Maharashtra">Maharashtra</option>
                  <option value="Manipur">Manipur</option>
                  <option value="Meghalaya">Meghalaya</option>
                  <option value="Mizoram">Mizoram</option>
                  <option value="Nagaland">Nagaland</option>
                  <option value="Orissa">Orissa</option>
                  <option value="Punjab">Punjab</option>
                  <option value="Rajasthan">Rajasthan</option>
                  <option value="Sikkim">Sikkim</option>
                  <option value="Tamil Nadu">Tamil Nadu</option>
                  <option value="Tripura">Tripura</option>
                  <option value="Uttar Pradesh">Uttar Pradesh</option>
                  <option value="Uttarakhand">Uttarakhand</option>
                  <option value="West Bengal">West Bengal</option>
                  <option value="Andaman &amp; Nicobar">Andaman &amp; Nicobar</option>
                  <option value="Chandigarh">Chandigarh</option>
                  <option value="Dadra &amp; Nagar Haveli">Dadra &amp; Nagar Haveli</option>
                  <option value="Daman &amp; Diu">Daman &amp; Diu</option>
                  <option value="Lakshadweep">Lakshadweep</option>
                  <option value="Puducherry">Puducherry</option>
                  <option value="OTHER - not from India">OTHER - not from India</option>
                </select>
        <span class="help-block"></span> </div>
    </div>
    <!--end of form group-->
    <div class="form-group row">
      <label class="control-label col-md-4 col-xs-offset-1"><span class=" glyphicon glyphicon-star-empty text-danger"></span>Nearest Railway Station</label>
      <div class="col-md-4">
<input name="nrly" type="text" id="nrly" size="35" maxlength="35" onkeypress="return only_alpha(this,event)" class="form-control"/>
            
        <span class="help-block ">For Issuing free Railway Pass to SC/ST candidates</span> </div>
    </div>
   <!--end of form group-->
   </fieldset>
    <div>
      <div class="text-center" >
      <input type="button" value="Quit" class="btn btn-danger" onclick="window.location.href='logout_rrb.php'" />
<input type="submit" name="submit" id="submit" class="btn btn-primary" value="Submit"/>
      </div>
    </div>
  </form>
<!--modal -->
	<div id="detailsModal" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title">There Are Errors in Details provided by you</h4>
                </div>
                <div class="modal-body">
                    <p id="Errors"></p>
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Ok</button>
                    
                </div>
            </div>
        </div>
    </div> 
<?php 
include("footer.php");
?>
</div>
<!--end of container--> 
</body>
</html>