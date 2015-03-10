<?php
$regnoErr = "";
include('scripts/conn.php');

if (isset($_POST['submit'])) {

$regno= filter_var($_POST['regno'], FILTER_SANITIZE_STRING);
$dob = filter_var($_POST['bdd'], FILTER_SANITIZE_NUMBER_INT) . "/" . filter_var($_POST['bmm'], FILTER_SANITIZE_NUMBER_INT) . "/" . filter_var($_POST['byy'], FILTER_SANITIZE_NUMBER_INT); //date of birth


$result=mysqli_query($con, "select * from cen0114 where regno='$regno' and dob='$dob'");
if(mysqli_error($con))                
{
	echo mysqli_error($con);
	}
$count=mysqli_num_rows($result);
$row=mysqli_fetch_array($result);
                
                if ($count > 0){
                session_start();
                $_SESSION['regno']=$row['regno'];
                header('location:after_reg.php');
                }else{
                $regnoErr = '<div class="alert alert-danger">
    <a href="#" class="close" data-dismiss="alert">&times;</a>
    <strong> Invalid Registration No. or Date of Birth.</strong>
</div><!--end of alert-danger-->';
                }
}
?>
<!DOCTYPE html>
<html>
<head>
<?php
include("head.php");
?>
</head>
<body>
<div class="container">
<?php 
include("header.php");
include("errors/javaerror.php");
?>
  <div class="row" >
   <div class="col-md-6">
      <h1 class="text-center">Steps to Fill Application</h1>
      <img src="images/steps.jpg" style="height:300px;" alt="Steps" class=""/> </div>
    <!-- end of col-md-8-->
 <div class="col-md-5 ">
      <a href="instructions.php" class="btn btn-primary btn-lg btn-block">Click here for NEW APPLICATION</a>
      <h1 class="text-center">Or</h1>
      <h3 class="text-center text-info">Login for your Application</h3>
      <fieldset>
        <?php echo $regnoErr;?>
        <form class="form-horizontal" method="post" name="theForm" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" onsubmit="javascript: return validateform(theForm);" id="theForm">
          <div class="form-group">
            <label for="regno">Registration No.</label>
            <input type="text" class="form-control" id="regno" name="regno" placeholder="Enter Registration No" maxlength="10" onkeypress="return only_numeric(this,event)">
          </div>
         <div class="form-group">
            <label>Date of Birth</label>
            <br>
            <div class="col-md-4" style="padding-right:4px; padding-left:4px;" >
              <select class="form-control " name="bdd" id="bdd" >
                <option value="">Day</option>
                <option value="01">1</option>
                <option value="02">2</option>
                <option value="03">3</option>
                <option value="04">4</option>
                <option value="05">5</option>
                <option value="06">6</option>
                <option value="07">7</option>
                <option value="08">8</option>
                <option value="09">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
                <option value="16">16</option>
                <option value="17">17</option>
                <option value="18">18</option>
                <option value="19">19</option>
                <option value="20">20</option>
                <option value="21">21</option>
                <option value="22">22</option>
                <option value="23">23</option>
                <option value="24">24</option>
                <option value="25">25</option>
                <option value="26">26</option>
                <option value="27">27</option>
                <option value="28">28</option>
                <option value="29">29</option>
                <option value="30">30</option>
                <option value="31">31</option>
              </select>
            </div>
            <div class="col-md-4"  style="padding-right:1px; padding-left:4px;">
              <select class="form-control" name="bmm" id="bmm">
                <option value="">Month</option>
                <option value="01">Jan</option>
                <option value="02">Feb</option>
                <option value="03">Mar</option>
                <option value="04">Apr</option>
                <option value="05">May</option>
                <option value="06">Jun</option>
                <option value="07">Jul</option>
                <option value="08">Aug</option>
                <option value="09">Sep</option>
                <option value="10">Oct</option>
                <option value="11">Nov</option>
                <option value="12">Dec</option>
              </select>
            </div>
            <div class="col-md-4"  style="padding-right:4px; padding-left:4px;">
              <select class="form-control" id="byy" name="byy" >
                <option selected="selected" value="">Year</option>
                <option value="1980">1980</option>
                <option value="1981">1981</option>
                <option value="1982">1982</option>
                <option value="1983">1983</option>
                <option value="1984">1984</option>
                <option value="1985">1985</option>
                <option value="1986">1986</option>
                <option value="1987">1987</option>
                <option value="1988">1988</option>
                <option value="1989">1989</option>
                <option value="1990">1990</option>
                <option value="1991">1991</option>
                <option value="1992">1992</option>
                <option value="1993">1993</option>
                <option value="1994">1994</option>
                <option value="1995">1995</option>
                <option value="1996">1996</option>
                <option value="1997">1997</option>
              </select>
            </div>
          </div>
          <!--end of form-group-->
           <div class="form-group">
            <input type="submit" name="submit" value="Login" class="btn btn-info btn-block" />
          </div>
        </form>
      </fieldset>
    </div>
    <!-- end of col-md-4--> 
   
    </div>
  <!--end of row-->
    
   <br>


<?php 
include("footer.php");
?>

</div>
<!--end of container-->

</body>
</html>
