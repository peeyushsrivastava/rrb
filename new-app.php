<?php 
//session_start();
$ranStr = md5(microtime());
$ranStr = substr($ranStr, 0, 6);
//$ranStr;
?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
$id = date_create();
$regno = strrev(date_timestamp_get($id));
$fnp = $regno.'P.jpg';
$fns = $regno.'S.jpg';

                             
        $cname = filter_var(strtoupper($_POST['cname']), FILTER_SANITIZE_STRING);      //cname
        $fname = filter_var(strtoupper($_POST['fname']), FILTER_SANITIZE_STRING);      //fname
        $dob = filter_var($_POST['bdd'], FILTER_SANITIZE_NUMBER_INT) . "/" . filter_var($_POST['bmm'], FILTER_SANITIZE_NUMBER_INT) . "/" . filter_var($_POST['byy'], FILTER_SANITIZE_NUMBER_INT); //date of birth
        if(isset($_POST['gender'])){$gender = filter_var($_POST['gender'], FILTER_SANITIZE_STRING);}   // gender
        $community = filter_var($_POST['comm'], FILTER_SANITIZE_STRING);     // community
        if(isset($_POST['minority'])){$minority = filter_var($_POST['minority'], FILTER_SANITIZE_STRING);} // minority
        $minoritycomm = filter_var($_POST['minoritycomm'], FILTER_SANITIZE_STRING);   // minority community
        if(isset($_POST['fees'])){filter_var($fees = $_POST['fees'], FILTER_SANITIZE_STRING);}  // fee exemption
        $feeReason = filter_var($_POST['feeReason'], FILTER_SANITIZE_STRING); //reason for fee exemption
        if(isset($_POST['ageRelx'])){$ageRelx = filter_var($_POST['ageRelx'], FILTER_SANITIZE_STRING);}  // age relexation 
        $ageReason = filter_var($_POST['ageReason'], FILTER_SANITIZE_STRING);// reason for age relexation
        $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL); // email
        $phno = filter_var($_POST['phno'], FILTER_SANITIZE_NUMBER_INT);  // mobileno 
include('scripts/conn.php');
if (mysqli_connect_errno()) {
echo "failed to connect to mysql:". mysqli_connect_error();
}

$result = mysqli_query($con, "INSERT INTO cen0114(regno, cname, fname, dob, gender, community,
                                        minority, minoritycomm, fees, feeReason, ageRelx, ageReason, email, phno)
VALUES
('$regno', '$cname', '$fname', '$dob', '$gender', '$community',
                                        '$minority', '$minoritycomm', '$fees', '$feeReason', '$ageRelx', '$ageReason', '$email', '$phno')");

include('scripts/conn.php');
if (mysqli_connect_errno()) {
echo "failed to connect to mysql:". mysqli_connect_error();
}
$secresult = mysqli_query($con, "INSERT INTO picsig(regno, cname)
VALUES
('$regno', '$cname')");

$result=mysqli_query($con, "select * from cen0114 where regno='$regno'"); 
                
$count=mysqli_num_rows($result);

$row=mysqli_fetch_array($result);

if ($count === 1){
                session_start();
                $_SESSION['regno']=$row['regno'];
                header('location:after_reg.php');
                }else{
                header('location:login_rrb.php');
                }
        
mysqli_close($con);
}
?>
<!DOCTYPE html>
<html>
<head>
<?php
include("head.php");
?>

<script src="js/new-app.js" type="text/javascript"></script>
</head>

<body onload="firstfocus();">
<div class="container">
  <?php

include("header.php");
include("errors/javaerror.php");
?>
  <div class="row bs-wizard" style="border-bottom:0;">
    <div class="col-xs-3 bs-wizard-step complete">
      <div class="text-center bs-wizard-stepnum">Step 1</div>
      <div class="progress">
        <div class="progress-bar"></div>
      </div>
      <a href="#" class="bs-wizard-dot"></a> </div>
    <div class="col-xs-2 bs-wizard-step active"><!-- complete -->
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
    <legend>General Details</legend>
    <form name="theForm" onsubmit="javaScript:return validateform(theForm);" id="theForm" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
      <div class="form-group row">
        <label class="control-label col-md-4 col-xs-offset-1">Candidate Name</label>
        <div class="col-md-4">
          <input type="text" name="cname" maxlength="35" size="25" class="form-control" id="cname" onkeypress="return only_alpha(this,event)" placeholder=" ">
          <span class="help-block"></span>
        </div>
      </div>
      <!--end of form group-->
      
      <div class="form-group row">
        <label class="control-label col-md-4 col-xs-offset-1">Father's Name</label>
        <div class="col-md-4">
          <input type="text" maxlength="35" size="25" name="fname" id="fname" onkeypress="return only_alpha(this,event)" class="form-control" />
        </div>
      </div>
      <!--end of form group-->
      
      <div class="form-group row ">
        <label class="control-label col-md-4 col-xs-offset-1">Date of Birth </label>
        <div class="col-md-4">
          <!--<input type="date" name="dob" id="dob" onkeypress="return only_alpha(this,event)" onchange="checkAge();" class="form-control" />-->
        <div class="col-md-4" style="padding-right:4px; padding-left:4px;" ><select class="form-control " name="bdd" id="bdd" onchange="checkAge();">
<option value="">Day</option><option value="01">1</option><option value="02">2</option><option value="03">3</option><option value="04">4</option><option value="05">5</option><option value="06">6</option><option value="07">7</option><option value="08">8</option><option value="09">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option>
</select> </div>
<div class="col-md-4"  style="padding-right:1px; padding-left:4px;"><select class="form-control" name="bmm" id="bmm" onchange="checkAge();"><option value="">Month</option><option value="01">Jan</option><option value="02">Feb</option><option value="03">Mar</option><option value="04">Apr</option><option value="05">May</option><option value="06">Jun</option><option value="07">Jul</option><option value="08">Aug</option><option value="09">Sep</option><option value="10">Oct</option><option value="11">Nov</option><option value="12">Dec</option>
</select>
</div>
<div class="col-md-4"  style="padding-right:4px; padding-left:4px;">
<select class="form-control" id="byy" name="byy" onchange="checkAge();">
<option selected="selected" value="">Year</option><option value="1980">1980</option><option value="1981">1981</option><option value="1982">1982</option><option value="1983">1983</option><option value="1984">1984</option><option value="1985">1985</option><option value="1986">1986</option><option value="1987">1987</option><option value="1988">1988</option><option value="1989">1989</option><option value="1990">1990</option><option value="1991">1991</option><option value="1992">1992</option><option value="1993">1993</option><option value="1994">1994</option><option value="1995">1995</option><option value="1996">1996</option><option value="1997">1997</option>
</select>

</div>
        </div>
      </div>
      <!--end of form group-->
      <div class="form-group row">
        <label class="control-label col-md-4 col-xs-offset-1">Age as on 01-06-2014</label>
        <div class="col-md-4">
        
       <div class="text-danger lead" id="ageMessage" ></div>
 </div>
 
      </div>
      <!--end of form group-->
      <div class="form-group row" >
        <label class="control-label col-md-4 col-xs-offset-1">Gender</label>
        <div class="col-md-4">
        <div class="form-control">
          <label class="radio-inline">
            <input type="radio" name="gender" value="MALE">
            <strong>Male</strong></label>
          <label class="radio-inline">
            <input type="radio" name="gender" value="FEMALE">
            <strong>Female</strong></label>
            </div><!--end of form control-->
        </div>
      </div>
      <!--end of form group-->
      <div class="form-group row ">
        <label class="control-label col-md-4 col-xs-offset-1">Community</label>
        <div class="col-md-4">
          <select class="form-control" name="comm" id="comm" onchange="docast();">
            <option value="">--Select--&nbsp;&nbsp;&nbsp;</option>
            <option value="UR">UR (General)</option>
            <option value="SC">SC (Scheduled Caste)</option>
            <option value="ST">ST (Scheduled Tribe)</option>
            <option value="OBC">OBC (Other backword Classes)</option>
          </select>
        </div>
      </div>
      <!--end of form group-->
      <div class="form-group row">
        <label class="control-label col-md-4 col-xs-offset-1">Are you seeking FEE exemption </label>
        <div class="col-md-4">
        	<div class="form-control">
          <label class="radio-inline">
            <input type="radio"  name="fees" value="YES" onclick="document.getElementById('exemption').style.display=''" />
            <strong>Yes</strong></label>
          <label class="radio-inline">
            <input type="radio" name="fees" value="NO" checked="checked" onclick="document.getElementById('exemption').style.display='none'" />
            <strong>No</strong></label>
            </div><!--end of form control-->
        </div>
      </div>
      <!--end of form group-->
      <div class="form-group row" id="exemption" style="display:none;">
        <label class="control-label col-md-4 col-xs-offset-1 text-danger">Indicate Reason For Fee exemption</label>
        <div class="col-md-4">
          <select class="form-control" name="feeReason" id="feeReason">
            <option value="NO">--Select--</option>
            <option value="Economically backward class">Economically backward class</option>
            <option value="Minority Candidate">Minority Candidate</option>
            <option value="Female Candidate">Female Candidate</option>
            <option value="SC/ST Candidate">SC/ST Candidate</option>
            <option value="Ex-Serviceman">Ex-Serviceman</option>
            <option value="Physically Handicapped">Physically Handicapped</option>
          </select>
        </div>
      </div>
      <!--end of form group-->
      
      <div class="form-group row">
        <label class="control-label col-md-4 col-xs-offset-1">Do You belong to Minority Community</label>
        <div class="col-md-4">
        	<div class="form-control">
          <label class="radio-inline">
            <input type="radio" name="minority" value="YES" onClick="document.getElementById('mincomm').style.display=''"/>
            <strong>Yes</strong></label>
          <label class="radio-inline">
            <input title="" type="radio" name="minority" value="NO" checked="checked" onClick="document.getElementById('mincomm').style.display='none'"/>
            <strong>No</strong></label>
            </div><!--end of form control-->
        </div>
      </div>
      <!--end of form group-->
      <div class="form-group row" id="mincomm" style="display:none;">
        <label class="control-label col-md-4 col-xs-offset-1 text-danger">Indicate Minority Community</label>
        <div class="col-md-4">
          <select class="form-control" name="minoritycomm" id="minoritycomm">
            <option value="NO">Select</option>
            <option value="MUSLIM">Muslim</option>
            <option value="CHRISTIAN">Christian</option>
            <option value="SIKH">Sikh</option>
            <option value="PARSI">Parsi</option>
            <option value="JAIN">Jain</option>
          </select>
        </div>
      </div>
      <!--end of form group-->
      <div class="form-group row">
        <label class="control-label col-md-4 col-xs-offset-1">Are you seeking Age relexation</label>
        <div class="col-md-4">
        	<div class="form-control">
          <label class="radio-inline">
            <input name="ageRelx" type="radio" value="YES" onclick="document.getElementById('relx').style.display=''" />
            <strong>Yes</strong></label>
          <label class="radio-inline">
            <input type="radio" name="ageRelx" value="NO" checked="checked" onclick="document.getElementById('relx').style.display='none'" />
            <strong>No</strong></label>
            </div><!--end of form control-->
        </div>
      </div>
      <!--end of form group-->
      <div class="form-group row" id="relx" style="display:none">
        <label class="control-label col-md-4 col-xs-offset-1 text-danger">Indicate reason for Age Relexation</label>
        <div class="col-md-4">
          <select class="form-control" name="ageReason" id="ageReason">
            <option value="NO">--Select--</option>
            <option value="SC / ST">SC / ST</option>
            <option value="OBC">OBC</option>
            <option value="Ex-SM">Ex-SM</option>
            <option value="PWD">PWD</option>
            <option value="Railway Employee">Railway Employee</option>
            <option value="Judicially Seprated">Judicially Seprated</option>
            <option value="Divorced Woman">Divorced Woman</option>
            <option value="Widow">Widow</option>
            <option value="J &amp; K resident">J &amp; K resident</option>
            <option value="Course Completed Act Appremtice">Course Completed Act Appremtice</option>
          </select>
        </div>
      </div>
      <!--end of form group-->
      <div class="form-group row">
        <label class="control-label col-md-4 col-xs-offset-1">E-mail Address</label>
        <div class="col-md-4">
          <input class="form-control" name="email" type="email" id="email" onkeypress="return alphanumeric_specialchars(this,event)"/>
        </div>
      </div>
      <!--end of form group-->
      <div class="form-group row">
        <label class="control-label col-md-4 col-xs-offset-1">Mobile Number</label>
        <div class="col-md-4">
          <input name="phno" class="form-control" type="text" id="phno" onkeypress="return only_numeric(this,event)"  maxlength="10" />
        </div>
      </div>
      <!--end of form group-->
      <div class="form-group row">
        <label class="control-label col-md-4 col-xs-offset-1">Type the characters you see in the picture</label>
        <div class="col-md-4 text-center">
          <input class="form-control" type="text" name="captcha" id="captcha" maxlength="6" size="20" />
        </div>
        <div class="col-md-2 text-center"> <img src="scripts/captcha.php?df='<?php echo $ranStr; ?>'" alt="captcha" width="102" height="53" />
          <input type="hidden" value="<?php echo $ranStr; ?>" name="cap" id="cap" />
        </div>
      </div>
      <!--end of form group-->
      
      <div class="text-center">
      <input type="button" class="btn btn-danger" value="Quit" onclick="window.location.href='logout_rrb.php'" />
      <input class="btn btn-primary" name="submit" type="submit" value="Submit" />
      </div>
    </form>
  </fieldset>
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