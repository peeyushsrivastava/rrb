<html>
<head>
<title>New application</title>
<link href="styles/style1.css" rel="stylesheet" type="text/css" />

<?php
if (isset($_POST['submit']))
{
$cname = $fname = $dd = $mm = $yy = "";
$cname == $_POST["cname"];
$fname == $_POST["fname"];
$dd == $_POST["dd"];
$mm == $_POST["mm"];
$yy == $_POST["yy"];


echo $cname.$fname.$dd.$mm.$yy;
}

?>



</head>


<body>


<div id="header">

</div>
<div id="wrapper">
<br>
<div align="center">
<h3>Application For Cen 01/2014 (ALP &amp; technicians)</h3>
</div>
<form name="gen-details" id="gen-details" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" >
<fieldset>
<legend>General Details</legend>
<table border="0" cellpadding="10" cellspacing="0" align="center" width="80%" >
<tr>
<td width="200"><span class="imp">* </span>NAME OF CANDIDATE :</td>
<td><input type="text" maxlength="35" size="25" name="cname" id="cname" placeholder="Candidate's Name" required /> </td>
</tr>
<tr>
<td><span class="imp">* </span>FATHER'S NAME :</td>
<td><input type="text" maxlength="35" size="25" name="fname" id="fname" placeholder="Father's Name" required/></td>
</tr>
<tr>
<td><span class="imp">* </span>DATE OF BIRTH :</td>
<td><select id="bdd" name="bdd" required>
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
        <select name="bmm" id="bmm" required>
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
          <option value="10">Otc</option>
          <option value="11">Nov</option>
          <option value="12">Dec</option>
        </select>
        <select id="byy" name="byy" required>
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
          <option value="1998">1998</option>
          <option value="1999">1999</option>
          <option value="2000">2000</option>
          <option value="2001">2001</option>
          <option value="2002">2002</option>
          <option value="2003">2003</option>
          <option value="2004">2004</option>
          <option value="2005">2005</option>
          <option value="2006">2006</option>
          <option value="2007">2007</option>
          <option value="2008">2008</option>
          <option value="2009">2009</option>
          <option value="2010">2010</option>
      </select></td>
</tr>
<tr>
<td><span class="imp">* </span>COMMUNITY :</td>
<td><input title="UR" name="comm" id="comm" type="radio" value="UR" onClick="document.getElementById('ob').style.display='none'" />
UR
  <input title="SC" name="comm" id="comm" type="radio" value="SC"  onclick="document.getElementById('ob').style.display='none'" />
SC
<input title="ST" name="comm" id="comm" type="radio" value="ST" onClick="document.getElementById('ob').style.display='none'" />
ST
<input title="OBC" name="comm" id="comm" type="radio" value="OBC" onClick="document.getElementById('ob').style.display='block'"/>
OBC </td>
</tr>
<tr>
<td></td>
<td>
<div id="ob" style="display:none;" >
<div id="comunity" style="display:block;" ><span class="notice">* Please state whether belonging to Minority Community :</span>
        <label>
        <input title="" type="radio" name="minority" value="Y" onClick="document.getElementById('mincomm').style.display=''"/>
Yes</label>
        <label>
        <input title="" type="radio" name="minority" value="N" onClick="document.getElementById('mincomm').style.display='none'"/>
No</label></div><br />
      <div id="mincomm" style="display:none;" >
      <span class="notice">* Indicate community :</span> 
        <select name="minoritycomm" id="minoritycomm">
          <option value="0">Select</option>
          <option value="01">Muslim</option>
          <option value="02">Christian</option>
          <option value="03">Sikh</option>
          <option value="04">Parsi</option>
        </select></div> 
		</div>
</td>	
<tr>
<td>
<span class="imp">* </span>Are you Seeking fee Exemption
</td>
<td>
<input title="" type="radio" name="fees" value="Y" onClick="document.getElementById('exemption').style.display=''" required/>
      Yes</label>
        <label>
        <input title="" type="radio" name="fees" value="N" onClick="document.getElementById('exemption').style.display='none'" required/>
          No</label> 
</td>
</tr>
</table>
<table align="center" width="80%" id="exemption" style="display:none;" cellpadding="10" cellspacing="0" >
<tr>
<td width="200"><div align="center"><span class="notice"> ( If Yes, Please Select ) :</span></div></td>
 <td ><div align="center"  >
	<select name="feeReason" id="feeReason">
            <option value="">--Select--</option>
            <option value="01">Economically backward class candidate</option>
            <option value="02">Minority Candidate</option>
            <option value="03">Female Candidate</option>
            <option value="04">SC/ST Candidate</option>
            <option value="05">Ex-Serviceman</option>
            <option value="06">Physically Handicapped</option>
          </select>
    </div></td>
</tr>
</table>
</fieldset>
<fieldset>
<legend>Details</legend>
<label><span class="imp">* </span>CATEGORY NUMBER - Indicate your options in order of preference in Numeric Form</label>
<br>
<br>
<table border="0"  cellspacing="0" cellpadding="5" width="20%" align="center" style="margin-left:50px;" > 
<tr align="center" >
<td width="5%" >I </td> <td ><select name="pri1" id="pri1" class="texta1">
<option name="00" value="Select">select</option>
<option name="01" value="01">A</option>
<option name="02" value="02">B</option>
<option name="03" value="03">C</option>
<option name="04" value="04">D</option>
<option name="05" value="05">E</option>
<option name="06" value="06">F</option>
<option name="07" value="07">G</option>
<option name="08" value="08">H</option>
<option name="09" value="09">I</option>
<option name="10" value="10">J</option>
</select>
</td>
</tr><tr align="center" >
<td  width="5%" >II </td> <td><select name="pri2" id="pri2" class="texta1">
<option name="00" value="Select">select</option>
<option name="01" value="01">A</option>
<option name="02" value="02">B</option>
<option name="03" value="03">C</option>
<option name="04" value="04">D</option>
<option name="05" value="05">E</option>
<option name="06" value="06">F</option>
<option name="07" value="07">G</option>
<option name="08" value="08">H</option>
<option name="09" value="09">I</option>
<option name="10" value="10">J</option>
</select>
</td></tr>
<tr align="center" >
<td align="center" >III</td> <td><select name="pri3" id="pri3" class="texta1">
<option name="00" value="Select">select</option>
<option name="01" value="01">A</option>
<option name="02" value="02">B</option>
<option name="03" value="03">C</option>
<option name="04" value="04">D</option>
<option name="05" value="05">E</option>
<option name="06" value="06">F</option>
<option name="07" value="07">G</option>
<option name="08" value="08">H</option>
<option name="09" value="09">I</option>
<option name="10" value="10">J</option>
</select>
</td>
</tr><tr align="center" >
<td >IV </td> <td><select name="pri4" id="pri4" class="texta1">
<option name="00" value="Select">select</option>
<option name="01" value="01">A</option>
<option name="02" value="02">B</option>
<option name="03" value="03">C</option>
<option name="04" value="04">D</option>
<option name="05" value="05">E</option>
<option name="06" value="06">F</option>
<option name="07" value="07">G</option>
<option name="08" value="08">H</option>
<option name="09" value="09">I</option>
<option name="10" value="10">J</option>
</select>
</td></tr>
<tr align="center" >
<td >V</td> <td><select name="pri5" id="pri5" class="texta1">
<option name="00" value="Select">select</option>
<option name="01" value="01">A</option>
<option name="02" value="02">B</option>
<option name="03" value="03">C</option>
<option name="04" value="04">D</option>
<option name="05" value="05">E</option>
<option name="06" value="06">F</option>
<option name="07" value="07">G</option>
<option name="08" value="08">H</option>
<option name="09" value="09">I</option>
<option name="10" value="10">J</option>
</select>
</td>
</tr><tr align="center" >
<td >VI</td> <td><select name="pri6" id="pri6" class="texta1">
<option name="00" value="Select">select</option>
<option name="01" value="01">A</option>
<option name="02" value="02">B</option>
<option name="03" value="03">C</option>
<option name="04" value="04">D</option>
<option name="05" value="05">E</option>
<option name="06" value="06">F</option>
<option name="07" value="07">G</option>
<option name="08" value="08">H</option>
<option name="09" value="09">I</option>
<option name="10" value="10">J</option>
</select>
</td></tr>
<tr align="center" >
<td>VII </td> <td><select name="pri7" id="pri7" class="texta1">
<option name="00" value="Select">select</option>
<option name="01" value="01">A</option>
<option name="02" value="02">B</option>
<option name="03" value="03">C</option>
<option name="04" value="04">D</option>
<option name="05" value="05">E</option>
<option name="06" value="06">F</option>
<option name="07" value="07">G</option>
<option name="08" value="08">H</option>
<option name="09" value="09">I</option>
<option name="10" value="10">J</option>
</select>
</td>
</tr><tr align="center" >
<td >VIII </td> <td><select name="pri8" id="pri8" class="texta1">
<option name="00" value="Select">select</option>
<option name="01" value="01">A</option>
<option name="02" value="02">B</option>
<option name="03" value="03">C</option>
<option name="04" value="04">D</option>
<option name="05" value="05">E</option>
<option name="06" value="06">F</option>
<option name="07" value="07">G</option>
<option name="08" value="08">H</option>
<option name="09" value="09">I</option>
<option name="10" value="10">J</option>
</select>
</td></tr>
<tr align="center" >
<td >IX </td> <td><select name="pri9" id="pri9" class="texta1">
<option name="00" value="Select">select</option>
<option name="01" value="01">A</option>
<option name="02" value="02">B</option>
<option name="03" value="03">C</option>
<option name="04" value="04">D</option>
<option name="05" value="05">E</option>
<option name="06" value="06">F</option>
<option name="07" value="07">G</option>
<option name="08" value="08">H</option>
<option name="09" value="09">I</option>
<option name="10" value="10">J</option>
</select>
</td>
</tr><tr align="center" >
<td >X </td> <td><select name="pri10" id="pri10" class="texta1">
<option name="00" value="Select">select</option>
<option name="01" value="01">A</option>
<option name="02" value="02">B</option>
<option name="03" value="03">C</option>
<option name="04" value="04">D</option>
<option name="05" value="05">E</option>
<option name="06" value="06">F</option>
<option name="07" value="07">G</option>
<option name="08" value="08">H</option>
<option name="09" value="09">I</option>
<option name="10" value="10">J</option>
</select>
</td></tr>
</table>
<br>

<label><span class="imp">* </span>CHOICE OF RAILWAY / UNIT (Wherever applicable)</label>
<table border="0" align="center" cellspacing="0" cellpadding="5" width="90%" >
   <tr>
      <td >1st</td>
      <td ><input type="text" id="choice1"> </td>
      <td >2nd</td>
      <td ><input type="text" id="choice2"></td>
	  <td >3rd</td>
      <td ><input type="text" id="choice3"></td>
      <td >4th</td>
      <td ><input type="text" id="choice4"></td>

    </tr>
 

</table>
<br>
<table align="center" border="0" width="90%" >

<tr>
    <td>Are you : </td>
    <td colspan="2"><label>
      <input name="gtexsm" type="checkbox" id="gtexsm" value="GT" onclick="gtemp();"/>
        Govt. Employee</label>
      <label>
        <input type="checkbox" name="gtexsm" id="gtexsm" value="EX" onclick="exsm();"/>
        Ex Servicemen</label>      </td>
  </tr>
      <tr>
      <td colspan="3"><div align="center" id="gtemp">
	  <span class="notice"> Present employment (to be filled by Railway/Centeral/State/PSU employees)</span>
        <table width="90%" border="1" cellspacing="5" cellpadding="5">
        <tr>
          <th width="27%">Designation and Grade </th>
		  <th width="13%">Date from </th>
		  <th width="14%">Date to </th>
		  <th width="46%">Name &amp; Address of Employer </th>
          </tr>
        <tr>
          <td><div align="center">
            <input name="gtemp1" type="text" id="gtemp1" size="35" />
          </div></td>
          <td><div align="center">
            <input name="gtemp2" type="text" id="gtemp2" size="15" maxlength="10" />
          </div></td>
          <td><div align="center">
            <input name="gtemp3" type="text" id="gtemp3" size="15" maxlength="10" />
          </div></td>
          <td><div align="center">
            <input name="gtemp4" type="text" id="gtemp4" size="50" />
          </div></td>
        </tr>
      </table></div></td>
    </tr>
    <tr>
      <td colspan="3"><div align="center" id="exsm">
	  <span class="notice"> Ex-Serviceman (EX-SM) </span>
        <table width="90%" border="1" cellspacing="5" cellpadding="5">
        <tr>
          <th width="27%">Date of enrolment </th>
          <th width="24%">Date of attestation </th>
          <th width="26%">Date of Discharge </th>
          <th width="23%">Length of Service </th>
        </tr>
        <tr>
          <td><div align="center">
            <input name="exsm1" type="text" id="exsm1" size="35" />
          </div></td>
          <td><div align="center">
            <input name="exsm2" type="text" id="exsm2" size="15" maxlength="10" />
          </div></td>
          <td><div align="center">
              <input name="exsm3" type="text" id="exsm3" size="15" maxlength="10" />
          </div></td>
          <td><div align="center">
              <input name="exsm4" type="text" id="exsm4" size="15" />
          </div></td>
        </tr>
      </table></div></td>
    </tr>
	<tr>
    <td width="30%"><span class="imp">* </span>Are you Person with Disabilities  </td>
    <td ><p>
      <label>
      <input type="radio" id="ph"  name="ph" value="Y" onclick="document.getElementById('phtype').style.display=''" />
        Yes</label>
      <label>
        <input type="radio" id="ph" name="ph" value="N" onclick="document.getElementById('phtype').style.display='none'"/>
        No</label></p></td>
		<td><div id="phtype" > <label> <span class="notice">( If Yes, Please Select ) :</span> 
          <select name="ph_yes" id="ph_yes">
          <option value="0">Select</option>
          <option value="VH">VH</option>
          <option value="OH">OH</option>
          <option value="HH">HH</option>
        </select></label>
        </div>
		</td>
      </tr>
 <tr>
    <td><span class="imp">* </span>Are you seeking Age relaxation :- </td>
    <td><label>
      <input name="ageRelx" type="radio" value="Y" onclick="document.getElementById('relx').style.display=''"/>
Yes</label>
      <label>
      <input type="radio" name="ageRelx" value="N" onclick="document.getElementById('relx').style.display='none'"/>
No</label></td>
    <td><div id="relx" align="center">
	<span class="notice"> ( If Yes, Please Select ) :</span>
	   <select name="ageReason" id="ageReason">
      <option value="0">--Select--</option>
      <option value="01">SC / ST</option>
      <option value="02">OBC</option>
      <option value="03">Ex-SM</option>
      <option value="04">PWD</option>
      <option value="05">Railway Employee</option>
      <option value="06">Judicially Seprated</option>
      <option value="07">Divorced Woman</option>
      <option value="08">Widow</option>
      <option value="09">J &amp; K resident</option>
      <option value="10">Course Completed Act Appremtice</option>
    </select></div></td>
  </tr>
</table>
</fieldset>

<fieldset>
<legend>Other details</legend>
<fieldset>
<legend><span class="imp">* </span>Educational Qualification :</legend>

  <table width="100%" border="1" cellspacing="2" cellpadding="5">
    <tr>
      <td width="22%"><div align="center"><strong>Academic</strong></div></td>
      <td width="18%"><div align="center"><strong>Qualification</strong></div></td>
      <td width="23%"><div align="center"><strong>Univ/Board</strong></div></td>
      <td width="10%"><div align="center" class="style1">Year of Passing </div></td>
      <td width="17%"><div align="center"><strong>Subject</strong></div></td>
      <td width="10%"><div align="center"><strong>Marks (%) </strong></div></td>
    </tr>
    <tr>
      <td><div align="center"><strong>SSC / X / Matric</strong></div></td>
      <td>          <div align="center">
          <input type="text" id="a1" name="a1" />        
      </div></td>
      <td>          <div align="center">
          <input name="a2" type="text" id="a2" size="35" />        
      </div></td>
      <td>          <div align="center">
          <input name="a3" type="text" id="a3" size="5" maxlength="4" />        
      </div></td>
      <td>          <div align="center">
          <input type="text" id="a4" name="a4" />        
      </div></td>
      <td>          <div align="center">
          <input name="a5" type="text" id="a5" size="5" maxlength="5" />        
      </div></td>
    </tr>
    <tr>
      <td><div align="center"><strong>Hr. Sec./ XII / Inter </strong></div></td>
      <td><div align="center">
        <input type="text" id="b1" name="b1" />
      </div></td>
      <td><div align="center">
        <input name="b2" type="text" id="b2" size="35" />
      </div></td>
      <td>
        <div align="center">
          <input name="b3" type="text" id="b3" size="5" maxlength="4" />
        </div></td>
      <td>
        <div align="center">
          <input type="text" id="b4" name="b4" />
        </div></td>
      <td>
        <div align="center">
          <input name="b5" type="text" id="b5" size="5" maxlength="5" />
        </div></td>
    </tr>
    <tr>
      <td><div align="center"><strong>Graduation</strong></div></td>
      <td><div align="center">
        <input type="text" id="c1" name="c1" />
      </div></td>
      <td><div align="center">
        <input name="c2" type="text" id="c2" size="35" />
      </div></td>
      <td>
        <div align="center">
          <input name="c3" type="text" id="c3" size="5" maxlength="4" />
        </div></td>
      <td>
        <div align="center">
          <input type="text" id="c4" name="c4" />
        </div></td>
      <td>
        <div align="center">
          <input name="c5" type="text" id="c5" size="5" maxlength="5" />
        </div></td>
    </tr>
    <tr>
      <td><div align="center"><strong>Post Graduation </strong></div></td>
      <td><div align="center">
        <input type="text" id="d1" name="d1" />
      </div></td>
      <td><div align="center">
        <input name="d2" type="text" id="d2" size="35" />
      </div></td>
      <td>
        <div align="center">
          <input name="d3" type="text" id="d3" size="5" maxlength="4" />
        </div></td>
      <td>
        <div align="center">
          <input type="text" id="d4" name="d4" />
        </div></td>
      <td>
        <div align="center">
          <input name="d5" type="text" id="d5" size="5" maxlength="5" />
        </div></td>
    </tr>
    <tr>
      <td><div align="center"><strong>Others</strong></div></td>
      <td><div align="center">
        <input type="text" name="e1" />
      </div></td>
      <td><div align="center">
        <input name="e2" type="text" size="35" />
      </div></td>
      <td><div align="center">
        <input name="e3" type="text" size="5" maxlength="4" />
      </div></td>
      <td>
        <div align="center">
          <input type="text" name="e4" />
        </div></td>
      <td>
        <div align="center">
          <input name="e5" type="text" size="5" />
        </div></td>
    </tr>
  </table>
</fieldset>

    <table width="100%" border="1" cellspacing="2" cellpadding="5">
	<tr>
    <td><span class="imp">* </span>Correspondance Address</td>
	<td><div id="caddress">Address:<br />
        <textarea name="cadd" cols="50" rows="2" id="cadd"></textarea>
      
        <p> City:-
        <input name="ccity" type="text" id="ccity" size="15" />
        Pin Code :-
  <input name="cpin" type="text" id="cpin" size="15" />
      </p>
      <p>Dist :-
        <input name="cdist" type="text" id="cdist" size="15" />
      State :- 
      <select name="cstate" id="cstate" >
        <option value="--Select--">--Select--</option>
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
      </p></div>     </td></tr>
<tr>
	<td><span class="imp">* </span>Nearest Railway Station :- </td>
	<td>
    <input name="nrly" type="text" id="nrly" size="35" maxlength="35" /> 
    <span class="notice">( For Issuing free Railway Pass to SC/ST candidates)</span>
  <td>
</tr>
	</table>

</fieldset>


</form> <!-- main form -->

</div> <!-- end of wrapper -->

</body>
</html>