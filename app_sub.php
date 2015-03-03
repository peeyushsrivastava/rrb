    <?php 
include('scripts/session.php');
include('scripts/conn.php');
?> 
<!DOCTYPE html>
<head>
<?php
include("head.php");
?>
</head>
<body> 
<div class="container">  
<?php 
include('header.php');
include("errors/javaerror.php");
?>


<h1 class="text-center">Acknowledgement</h1>

<table class="table table-responsive table-bordered">
<tr>
<td colspan="4"  bgcolor="#FFFFCC"><strong>Personal Details</strong></td>
</tr>
<tr>
<td colspan="2" ><strong>Candidate's Name :</strong></td>
<td colspan="2" ><?php echo $row['cname']; ?></td>
</tr>
<tr>
<td colspan="2" ><strong>Father's Name :</strong></td>
<td colspan="2" ><?php echo $row['fname']; ?></td>
</tr>
<tr>
<td colspan="2" ><strong>Date Of Birth :</strong></td>
<td colspan="2" ><?php echo $row['dob']; ?></td>
</tr>
<tr>
<td colspan="2" ><strong>Gender :</strong></td>
<td colspan="2" ><?php echo $row['gender']; ?></td>
</tr>
<tr>
<td colspan="2" ><strong>Community :</strong> <?php echo $row['community']; ?></td>
<td colspan="2" ><strong>Minority Community : </strong> <?php echo $row['minoritycomm']; ?></td>
</tr>
<tr>
<td colspan="2" ><strong>Age Relaxtion : </strong><?php echo $row['ageRelx']; ?></td>
<td colspan="2" ><strong>Reason For Age Relaxation : </strong><?php echo $row['ageReason']; ?></td>
</tr>
<tr>
<td colspan="2" ><strong>Fee Exemption : </strong><?php echo $row['fees']; ?></td>
<td colspan="2" ><strong>Reason For Fee exemption : </strong><?php echo $row['feeReason']; ?></td>
</tr>
<tr>
<td colspan="2" ><strong>Email :</strong></td>
<td colspan="2" ><?php echo $row['email']; ?></td>
</tr>
<tr>
<td colspan="2" ><strong>Mobile No :</strong></td>
<td colspan="2" ><?php echo $row['phno']; ?></td>
</tr>
<tr>
<td colspan="2" ><strong>Prirority 1 : </strong><?php echo $row['cat_01']; ?></td>
<td colspan="2" ><strong>Prirority 2 :</strong><?php echo $row['cat_02']; ?></td>
</tr>
<tr>
<td colspan="2" ><strong>Prirority 3 :</strong><?php echo $row['cat_03']; ?></td>
<td colspan="2" ><strong>Prirority 4 :</strong><?php echo $row['cat_04']; ?></td>
</tr>
<tr>
<td colspan="2" ><strong>Prirority 5 :</strong><?php echo $row['cat_05']; ?></td>
<td colspan="2" ><strong>Prirority 6 :</strong><?php echo $row['cat_06']; ?></td>
</tr>
<tr>
<td colspan="2" ><strong>Prirority 7 :</strong><?php echo $row['cat_07']; ?></td>
<td colspan="2" ><strong>Prirority 8 :</strong><?php echo $row['cat_08']; ?></td>
</tr>
<tr>
<td colspan="2" ><strong>Prirority 9 :</strong><?php echo $row['cat_09']; ?></td>
<td colspan="2" ><strong>Prirority 10 :</strong><?php echo $row['cat_10']; ?></td>
</tr>
<tr>
<td colspan="2" ><strong>Choice of Railway Unit First :</strong><?php echo $row['choice1']; ?></td>
<td colspan="2" ><strong>Choice of Railway Unit Second :</strong><?php echo $row['choice2']; ?></td>
</tr>
<tr>
<td colspan="2" ><strong>Government Employee :</strong></td>
<td colspan="2" ><strong>Ex-Servicemen :</strong></td>
</tr>
<tr>
<td >
<div><strong>Designation</strong></div>
</td>
<td colspan="-1" >
<div><strong>Date From</strong></div>
</td>
<td >
<div><strong>Date To</strong></div></td>
<td >
<div><strong>Name &amp; Address of Employer</strong></div></td>
</tr>
<tr>
<td ></td>
<td colspan="-1" ></td>
<td ></td>
<td ></td>
</tr>
<tr>
<td >
<div><strong>Date of Enrolment</strong></div></td>
<td colspan="-1" >
<div><strong>Date of Attestation</strong></div>
</td>
<td >
<div><strong>Date of Discharge</strong></div></td>
<td >
<div><strong>Length of Service</strong></div></td>
</tr>
<tr>
<td ></td>
<td colspan="-1" ></td>
<td ></td>
<td ></td>
</tr>
<tr>
<td colspan="2" ><strong>Person with Disabilities :&nbsp;&nbsp;&nbsp;<?php echo $row['ph']; ?></strong></td>
<td colspan="2" ><strong>Type of Disablity : &nbsp;&nbsp;&nbsp;<?php echo $row['ph_yes']; ?></strong></td>
</tr>

</table>
<table class="table table-responsive table-bordered">
<tr>
<td colspan="6" ><strong>Education Details:</strong></td>
</tr>
<tr>
<td width="137"><strong>Academic</strong></td>
<td width="180">
<diV><strong>Qualification</strong></div>
</td>
<td width="195">
<div><strong>University / Board</strong></div>
</td>
<td width="137">
<div><strong>Year of Passing</strong></div>
</td>
<td width="150">
<div><strong>Subject</strong></div>
</td>
<td width="97">
<div><strong>Marks</strong></div>
</td>
</tr>
<tr>
<td>SSC / X / Matric</td>
<td><?php echo $row['a1']; ?></td>
<td><?php echo $row['a2']; ?></td>
<td><?php echo $row['a3']; ?></td>
<td><?php echo $row['a4']; ?></td>
<td><?php echo $row['a5']; ?></td>
</tr>
<tr>
<td>Hr. Sec. / XII / ITI</td>
<td><?php echo $row['b1']; ?></td>
<td><?php echo $row['b2']; ?></td>
<td><?php echo $row['b3']; ?></td>
<td><?php echo $row['b4']; ?></td>
<td><?php echo $row['b5']; ?></td>
</tr>
<tr>
<td>Graduation</td>
<td><?php echo $row['c1']; ?></td>
<td><?php echo $row['c2']; ?></td>
<td><?php echo $row['c3']; ?></td>
<td><?php echo $row['c4']; ?></td>
<td><?php echo $row['c5']; ?></td>
</tr>
<tr>
<td>Post Graduation</td>
<td><?php echo $row['d1']; ?></td>
<td><?php echo $row['d2']; ?></td>
<td><?php echo $row['d3']; ?></td>
<td><?php echo $row['d4']; ?></td>
<td><?php echo $row['d5']; ?></td>
</tr>
<tr>
<td>Others</td>
<td><?php echo $row['e1']; ?></td>
<td><?php echo $row['e2']; ?></td>
<td><?php echo $row['e3']; ?></td>
<td><?php echo $row['e4']; ?></td>
<td><?php echo $row['e5']; ?></td>
</tr>
</table>
<h3 class="text-center"><a class="notice" href="reports/print.php">Print Acknowledgement</a></h3>
<div class="text-center">
<input type="button" name="" value="Quit" class="btn btn-danger" onclick="window.location.href='logout_rrb.php'" />
</div>
<?php 
include("footer.php");
?>
</div><!--end of container-->

</body>
</html>
