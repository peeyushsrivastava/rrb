<?php 
include_once('scripts/conn.php');
include_once('scripts/session.php');
$rowregno=$row['regno']; 

// check if photo and sign already uploaded, if uploaded applicant will be redirected to app-2 page
if ((file_exists("uploads/{$rowregno}P.jpg")) && (file_exists("uploads/{$rowregno}S.jpg")) && (file_exists("uploads/{$rowregno}A.jpg")))
{
                header('location:app-2.php');
}
?>
<!DOCTYPE html>
<head>
<?php
include("head.php");
?>

<script type="text/javascript">
//<![CDATA[

 $(document).ready(function() { 
                
 $('#photoimg').on('change', function(){ 
       $("#photopreview").html('');
       $("#photopreview").html('<img src="images/loader.gif" width="100px" alt="Uploading...."/>');
       $("#photoform").ajaxForm({target: '#photopreview'}).submit();
        });
        }); 
//]]>
</script>
<script type="text/javascript">
//<![CDATA[
 $(document).ready(function() { 
                
            $('#signimg').on('change', function()                     { 
                                   $("#signpreview").html('');
                            $("#signpreview").html('<img src="images/loader.gif" width="100px" alt="Uploading...."/>');
                        $("#signform").ajaxForm({
                                                target: '#signpreview'
                }).submit();
                
                        });
        }); 
//]]>
</script>
<script type="text/javascript">
//<![CDATA[
 $(document).ready(function() { 
                
            $('#paraimg').on('change', function()                     { 
                                   $("#parapreview").html('');
                            $("#parapreview").html('<img src="images/loader.gif" width="100px" alt="Uploading...."/>');
                        $("#paraform").ajaxForm({
                                                target: '#parapreview'
                }).submit();
                
                        });
        }); 
//]]>
</script>

<style type="text/css">
body
{
font-family:arial;
}
.photopreview
{
width:110px;
height:120px;
border: 1px solid;
border-color:#000000;
background-image:none;
background-color:#FFFFFF;
}
.signpreview
{
width:150px;
height:70px;
border: 1px solid;
border-color:#000000;
background-image:none;
background-color:#FFFFFF;
}

.parapreview
{
width:550px;
height:250px;
border: 1px solid;
border-color:#000000;
background-image:none;
background-color:#FFFFFF;
}
#photopreview
{
color:#cc0000;
font-size:12px;
width:110px;
height:120px;
border: 1px solid;
border-color:#000000;
margin:auto;
<?php 
//this function is because there is no <img> tag in html code therefor i m previewing
//previously uploaded image using css
if (file_exists("uploads/{$rowregno}P.jpg"))
{
/*
 * // enable this code to preview image from database
 * include_once('scripts/conn.php');
$result= mysqli_query($con, "select * from picsig where regno='$rowregno'");
$Pic= mysqli_fetch_array($result);
mysqli_close($con);
echo "background-image:url(".$Pic['fnp'].")";

 */
echo "background-image:url(uploads/{$rowregno}P.jpg);";
}
else 
{
 echo "background-image:url(images/upload-pho.jpg);"; 
}
?>
background-size:110px 120px;
}
#signpreview
{
color:#cc0000;
font-size:12px;
width:150px;
height:70px;
border: 1px solid;
border-color:#000000;
margin:auto;
margin-bottom:70px; /*to match the height of both pannels*/
<?php 
//this function is because there is no <img> tag in html code therefor i m previewing
//previously uploaded image using css

if (file_exists("uploads/{$rowregno}S.jpg"))
{
/*
 * //enable this section to preview images from database
 * include_once('scripts/conn.php');
$result= mysqli_query($con, "select * from picsig where regno='$rowregno'");
$Pic= mysqli_fetch_array($result);
mysqli_close($con);
echo "background-image:url(".$Pic['fns'].")";
 */
    echo "background-image:url(uploads/{$rowregno}S.jpg);";
}
else 
{
 echo "background-image:url(images/upload-sig.jpg);"; 
}
?>
background-size:150px 70px;
}


#parapreview
{
color:#cc0000;
font-size:12px;
width:550px;
height:250px;
border: 1px solid;
border-color:#000000;
margin:auto;
margin-bottom:70px; /*to match the height of both pannels*/
<?php 
//this function is because there is no <img> tag in html code therefor i m previewing
//previously uploaded image using css
if (file_exists("uploads/{$rowregno}A.jpg"))
{
/*
 * //enable this section to preview image from database
 * include_once('scripts/conn.php');
$result= mysqli_query($con, "select * from picsig where regno='$rowregno'");
$Pic= mysqli_fetch_array($result);
mysqli_close($con);
echo "background-image:url(".$Pic['fna'].")";
  
 */
    echo "background-image:url(uploads/{$rowregno}A.jpg);";
}
else 
{
 echo "background-image:url(images/upload-para.jpg);"; 
}
?>
background-size:550px 250px;
background-repeat:no-repeat;
}
</style>

</head>
<body onload="window.history.forward();">

<?php
include("header.php");
include("errors/javaerror.php");
?>
<div class="container">
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
    <div class="col-xs-2 bs-wizard-step active"><!-- active -->
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
<fieldset><legend>Photographs Uploading</legend>
<table style="font-size:12px;">
<tr>
<td colspan="2">
<h4 class="text-center">GUIDELINES FOR SCANNING THE PHOTOGRAPH, SIGNATURE &amp; PASSAGE</h4>
</td>
</tr>
<tr>
<td colspan="2" class="text-justify" ><strong>NOTE:Before applying online a candidate will be required to have a scanned (digital) image of his/her photograph and signature as per the specifications given below .</strong></td>
</tr>
<tr>
<td colspan="2" class="text-justify" >
<ol>
<li><strong>PHOTOGRAPH IMAGE :</strong>
<ol>
<li>Photograph must be a recent passport style colour picture.The picture should be in colour, against a light-coloured, preferably white, background. Look straight at the camera with a relaxed face.</li>
<li>If the picture is taken on a sunny day, have the sun behind you, or place yourself in the shade, so that you are not squinting and there are no harsh shadows.If you have to use flash, ensure there is no "red-eye".If you wear glasses make sure that there are no reflections and your eyes can be clearly seen.</li>
<li>Caps, hats and dark glasses are not acceptable. Religious headwear is allowed but it must not cover your face. <strong>image file should be in JPG format only.</strong></li>
<li>Keep size of photograph minimum as maximum size limit is <strong>100 KB.</strong></li>
</ol>
</li>
<li><strong>SIGNATURE IMAGE:</strong>
<ol>
<li>The applicant has to sign on white paper with Black Ink pen. The signature must be signed only by the applicant and not by any other person. The signature will be used to put on the Hall Ticket and wherever necessary.</li>
<li>If the Applicant's signature on the answer sheet, at the time of the examination, does not match the signature on the Hall Ticket, the applicant will be disqualified.</li>
<li><strong>Keep size of Signature minimum as maximum size limit is 50 KB and The image file should be in JPG format only.</strong></li>
</ol>
</li>

<li><strong>PASSAGE IMAGE:</strong>
<ol>
<li>The applicant has to fill the passage on the given format with Black Ink pen. The passage must be filled only by the applicant and not by any other person. </li>
<li>If the Applicant's handwriting on the answer sheet, at the time of the examination, does not match the passage uploaded, the applicant will be disqualified.</li>
<li><strong>Keep size of Passage minimum as maximum size limit is 100 KB and The image file should be in JPG format only.</strong></li>
</ol>
</li>

</ol>
</td>
</tr>
</table>
</fieldset>
<fieldset><legend><strong>Candidate's Photograph and Signature</strong></legend>
<div class="row">
  <div class="col-md-6"><div class="panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title"><strong>UPLOAD PHOTO HERE</strong></h3>
        </div><!--end of panel heading -->
        <div class="panel-body">
        
	<div id='photopreview'>      
    </div>
<br />
<form id="photoform" method="post" enctype="multipart/form-data" action='photoimage.php' name="photoform">
<div class="form-group">
    <label>Upload your Photo :</label>
	 <input class="form-control" type="file" name="photoimg" id="photoimg" />
    <p class="help-block">Only "jpg" is allowed.</p>
  </div>
</form>
</div><!--end of panel body -->
    </div><!-- end of panel info -->
</div><!-- end of col-md-6-->

 <div class="col-md-6"><div class="panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title"><strong>UPLOAD SIGNATURE HERE</strong></h3>
        </div><!--end of panel heading -->
        <div class="panel-body">
        <div id='signpreview'>
		</div>
<form id="signform" method="post" enctype="multipart/form-data" action='signimage.php' name="signform">
<div class="form-group">
    <label >Upload your Signature : </label>
	<input type="file" name="signimg" id="signimg" class="form-control" />
    <p class="help-block">Only "jpg" is allowed.</p>
  </div>


</form>

</div><!--end of panel body -->
    </div><!-- end of panel info -->
</div><!-- end of col-md-6-->
</div><!--end of row-->

<div class="panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title"><strong>UPLOAD PASSAGE HERE</strong></h3>
        </div><!--end of panel heading -->
        <div class="panel-body">
        <div id='parapreview'>
		</div>
<form id="paraform" method="post" enctype="multipart/form-data" action='paraimage.php' name="paraform">
<div class="form-group">
    <label>Upload your Passage : </label>
	<input type="file" name="paraimg" id="paraimg" class="form-control" />
    <p class="help-block">Only "jpg" is allowed.</p>
</div>


</form>

</div><!--end of panel body -->
    </div><!-- end of panel info -->

</fieldset>
<div align="center">
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" >
<input type="button" value="Quit"  class="btn btn-danger" onclick="window.location.href='logout_rrb.php'"/><input type="submit" name="a" value="Go To Step 5" id="b" class="btn btn-primary" />
      </form>
</div><?php 
include("footer.php");
?>
</div><!--end of container-->
</body>
</html>
