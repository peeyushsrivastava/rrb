// detect browser
var val = navigator.userAgent.toLowerCase();
if ((val.indexOf("chrome") > -1) || (val.indexOf("msie") > -1) || val.indexOf("mozilla") > -1)
        {}
		else
		{
		alert("Please Use IE 7 or above and Google Chrome To register,You wont be able to Submit the form in other Browsers");
        document.location.href = "browser.htm";
        }
// for government employee
function gtemp()
{if (document.theForm.gtexsm[0].checked == true)
	{
	document.getElementById('gtemp').style.display = '';
	}
else
	{
	document.getElementById('gtemp').style.display = 'none';
	}
}
// for ex-service man
function exsm()
{if (document.theForm.gtexsm[1].checked == true)
	{
	document.getElementById('exsm').style.display = '';
	}
else
	{
	document.getElementById('exsm').style.display = 'none';
	}
}
// After form loads focus will go to User id field.
function firstfocus()
{
window.history.forward();
var uid = document.theForm.comm[0].focus();
document.getElementById('gtemp').style.display = 'none';
document.getElementById('exsm').style.display = 'none';
document.getElementById('comunity').style.display = 'none';
document.getElementById('mincomm').style.display = 'none';
document.getElementById('phtype').style.display = 'none';
document.getElementById('caddress').style.display = 'none';
document.getElementById('relx').style.display = 'none';
return true;
}

// function to validate form data

function validateform(theForm)
{
if(document.getElementById("cname").value.length < 3)
                   {                                  
                       alert("Please enter Correct Name.");
                       document.getElementById("cname").focus();
                       return false;
                   }
                  if(document.getElementById("cname").value !="" && document.getElementById("cname").value.search("[^A-Za-z ]")>-1)
                   {
                       alert("Please enter only [A-Z], [a-z] and [space] for Name.");
                       document.getElementById("cname").focus();
                       return false;
                   }
                  if(document.getElementById("cname").value.substring(0,1).search("[^a-zA-Z]") > -1)
                   { 
                       alert("First chracter should be an alphabet for Name.");
                       document.getElementById("cname").focus();
                       return false;                       
                   }
// to validate father name
if(document.getElementById("fname").value.length < 3)
                   {                                  
                       alert("Please enter Correct Father's Name.");
                       document.getElementById("fname").focus();
                       return false;
                   }
                  if(document.getElementById("fname").value !="" && document.getElementById("fname").value.search("[^A-Za-z ]")>-1)
                   {
                       alert("Please enter only [A-Z], [a-z] and [space] for Father's Name.");
                       document.getElementById("fname").focus();
                       return false;
                   }
                  if(document.getElementById("fname").value.substring(0,1).search("[^a-zA-Z]") > -1)
                   { 
                       alert("First chracter should be an alphabet for Father's Name.");
                       document.getElementById("fname").focus();
                       return false;                       
                   }
// to validate mother's name
if(document.getElementById("mname").value.length < 3)
                   {                                  
                       alert("Please enter Correct Mother's Name.");
                       document.getElementById("mname").focus();
                       return false;
                   }
                  if(document.getElementById("mname").value !="" && document.getElementById("mname").value.search("[^A-Za-z ]")>-1)
                   {
                       alert("Please enter only [A-Z], [a-z] and [space] for Mother's Name.");
                       document.getElementById("mname").focus();
                       return false;
                   }
                  if(document.getElementById("mname").value.substring(0,1).search("[^a-zA-Z]") > -1)
                   { 
                       alert("First chracter should be an alphabet for Mother's Name.");
                       document.getElementById("mname").focus();
                       return false;                       
                   }
//  to validate community
if ((document.theForm.comm[0].checked == false ) && ( document.theForm.comm[1].checked == false ) && ( document.theForm.comm[2].checked == false ) && (document.theForm.comm[3].checked == false ))
   {
    alert ( "Please choose Community!" );
    document.theForm.comm[0].focus();
    return (false);
   }
if ((document.theForm.comm[3].checked == true) && ( document.theForm.minority[0].checked == false ) && (document.theForm.minority[1].checked == false ))
   {
    alert ( "Please Indicate Weather you belong to Minority community!" );
    document.theForm.minority[0].focus();
    return (false);
   }
if ((document.theForm.comm[3].checked == true) && ( document.theForm.minority[0].checked == true ) && (theForm.minoritycomm.selectedIndex==0))
   {
    alert("Please Select Minority Community");
    theForm.minoritycomm.focus();
    return (false);
	}
// to validate gender
if ( ( document.theForm.gender[0].checked == false ) && ( document.theForm.gender[1].checked == false ) )
   {
    alert ( "Please choose Gender!" );
    document.theForm.gender[0].focus();
    return (false);
   }
/*
// to validate day of date of birth                   }
if (theForm.bdd.selectedIndex==0)
   {
    alert("Please Enter Correct Date of Birth");
    theForm.bdd.focus();
    return (false);
  }
// to validate month of date of birth
if (theForm.bmm.selectedIndex==0)
   {
    alert("Please Enter Correct Date of Birth");
    theForm.bmm.focus();
    return (false);
  }
// to validate year of date of birth
if (theForm.byy.selectedIndex==0)
   {
    alert("Please Enter Correct Date of Birth");
    theForm.byy.focus();
    return (false);
  }*/
// to validate religion
if (( document.theForm.reli[0].checked == false ) && ( document.theForm.reli[1].checked == false ) && ( document.theForm.reli[2].checked == false ) && ( document.theForm.reli[3].checked == false ) && ( document.theForm.reli[4].checked == false ) && ( document.theForm.reli[5].checked == false ) && ( document.theForm.reli[6].checked == false ))
   {
    alert ( "Please choose Religion!" );
    document.theForm.reli[0].focus();
    return (false);
   }
// to validate government employee and railway employee
if (( document.theForm.gtexsm[0].checked == true ) && ( document.theForm.gtexsm[1].checked == true ))
   {
    alert ( "Please choose Only one!" );
    document.theForm.gtexsm[0].focus();
    return (false);
   }
// physically handicapped
if (( document.theForm.ph[0].checked == false ) && ( document.theForm.ph[1].checked == false ))
   {
    alert ( "Please Select Person with Disabilities!" );
    document.theForm.ph[0].focus();
    return (false);
   }
   else if (( document.theForm.ph[0].checked == true ) && (theForm.ph_yes.selectedIndex==0))
   {
    alert("Please Select Type of Disability");
    theForm.ph_yes.focus();
    return (false);
	}
//identification Mark on body
if(document.getElementById("id_mark").value.length < 3)
                   {                                  
                       alert("Please enter Correct Idendification Mark! If no such Mark write 'Nil'.");
                       document.getElementById("id_mark").focus();
                       return false;
                   }
                  if(document.getElementById("id_mark").value !="" && document.getElementById("id_mark").value.search("[^A-Za-z ]")>-1)
                   {
                       alert("Please enter only [A-Z], [a-z] and [space] for Identification Mark.");
                       document.getElementById("id_mark").focus();
                       return false;
                   }
                  if(document.getElementById("id_mark").value.substring(0,1).search("[^a-zA-Z]") > -1)
                   { 
                       alert("First chracter should be an alphabet for Identification Mark.");
                       document.getElementById("id_mark").focus();
                       return false;                       
                   }
// education text boxes
// for sslc/x/matric
if((document.getElementById("a1").value.length < 1) || (document.getElementById("a2").value.length < 2) || (document.getElementById("a3").value.length < 2) || (document.getElementById("a4").value.length < 2) || (document.getElementById("a5").value.length < 2))
                   {                                  
                       alert("Please Fill all fields of 'SSC / X/ Matric'.");
                       document.getElementById("a1").focus();
                       return false;
                   }
//for Higher secondary & inter
if((document.getElementById("b1").value.length < 2) || (document.getElementById("b2").value.length < 2) || (document.getElementById("b3").value.length < 2) || (document.getElementById("b4").value.length < 2) || (document.getElementById("b5").value.length < 2))
                   {                                  
                       alert("Please Fill all fields of 'Higher Secondary / Inter'.");
                       document.getElementById("b1").focus();
                       return false;
                   }
//for Graduation 
if((document.getElementById("c1").value.length < 2) || (document.getElementById("c2").value.length < 2) || (document.getElementById("c3").value.length < 2) || (document.getElementById("c4").value.length < 2) || (document.getElementById("c5").value.length < 2))
                   {                                  
                       alert("Please Fill all fields of 'Graduation'.");
                       document.getElementById("c1").focus();
                       return false;
                   } 
// to validate permanent address
if(document.getElementById("padd").value.length < 3)
                   {                                  
                       alert("Please enter Correct Permanent Address.");
                       document.getElementById("padd").focus();
                       return false;
                   }       
//to validate permanent city
if(document.getElementById("pcity").value.length < 3)
                   {                                  
                       alert("Please enter Correct Permanent city.");
                       document.getElementById("pcity").focus();
                       return false;
                   }
                  if(document.getElementById("pcity").value !="" && document.getElementById("pcity").value.search("[^A-Za-z ]")>-1)
                   {
                       alert("Please enter only [A-Z], [a-z] and [space] for permanent city.");
                       document.getElementById("pcity").focus();
                       return false;
                   }
                  if(document.getElementById("pcity").value.substring(0,1).search("[^a-zA-Z]") > -1)
                   { 
                       alert("First chracter should be an alphabet for permanent city.");
                       document.getElementById("pcity").focus();
                       return false;                       
                   }
if(document.getElementById("ppin").value.length < 6)
                   {                                  
                       alert("Please enter Correct PinCode.");
                       document.getElementById("ppin").focus();
                       return false;
                   }
                  if(document.getElementById("ppin").value !="" && document.getElementById("ppin").value.search("[^0-9]")>-1)
                   {
                       alert("Please enter only Numbers for pincode.");
                       document.getElementById("ppin").focus();
                       return false;
                   }
//to validate permanent dist
if(document.getElementById("pdist").value.length < 3)
                   {                                  
                       alert("Please enter Correct Permanent Dist.");
                       document.getElementById("pdist").focus();
                       return false;
                   }
                  if(document.getElementById("pdist").value !="" && document.getElementById("pdist").value.search("[^A-Za-z ]")>-1)
                   {
                       alert("Please enter only [A-Z], [a-z] and [space] for permanent Dist.");
                       document.getElementById("pdist").focus();
                       return false;
                   }
                  if(document.getElementById("pdist").value.substring(0,1).search("[^a-zA-Z]") > -1)
                   { 
                       alert("First chracter should be an alphabet for permanent Dist.");
                       document.getElementById("pdist").focus();
                       return false;                       
                   }
// to validate permanent state
if (theForm.pstate.selectedIndex==0)
   {
    alert("Please Select Permanent State");
    theForm.pstate.focus();
    return (false);
  }
//to validate nearest railway Station
if(document.getElementById("nrly").value.length < 3)
                   {                                  
                       alert("Please enter Correct Nearest Railway Station.");
                       document.getElementById("nrly").focus();
                       return false;
                   }
                  if(document.getElementById("nrly").value !="" && document.getElementById("nrly").value.search("[^A-Za-z ]")>-1)
                   {
                       alert("Please enter only [A-Z], [a-z] and [space] for Nearest Railway Station.");
                       document.getElementById("nrly").focus();
                       return false;
                   }
                  if(document.getElementById("nrly").value.substring(0,1).search("[^a-zA-Z]") > -1)
                   { 
                       alert("First chracter should be an alphabet for Nearest Railway Station.");
                       document.getElementById("nrly").focus();
                       return false;                       
                   }
// to validate Weather permanent address and correspondance address is same or not
if ( ( document.theForm.sameadd[0].checked == false ) && ( document.theForm.sameadd[1].checked == false ) )
   {
    alert ( "Please Select Weather Permanent and Correspondance address is same or not!" );
    document.theForm.sameadd[0].focus();
    return (false);
   }
// to validate correspondance address
if(( document.theForm.sameadd[1].checked == true ) && (document.getElementById("cadd").value.length < 3))
                   {                                  
                       alert("Please enter Correct Correspondance Address.");
                       document.getElementById("cadd").focus();
                       return false;
                   }       
//to validate correspondance city
if(( document.theForm.sameadd[1].checked == true ) && (document.getElementById("ccity").value.length < 3))
                   {                                  
                       alert("Please enter Correct Correspondance city.");
                       document.getElementById("ccity").focus();
                       return false;
                   }
                  if(( document.theForm.sameadd[1].checked == true ) && (document.getElementById("ccity").value !="" && document.getElementById("ccity").value.search("[^A-Za-z ]")>-1))
                   {
                       alert("Please enter only [A-Z], [a-z] and [space] for Correspondance city.");
                       document.getElementById("ccity").focus();
                       return false;
                   }
                  if(( document.theForm.sameadd[1].checked == true ) && (document.getElementById("ccity").value.substring(0,1).search("[^a-zA-Z]") > -1))
                   { 
                       alert("First chracter should be an alphabet for Correspondance city.");
                       document.getElementById("ccity").focus();
                       return false;                       
                   }
//to validate pin code for correspondance address
if(( document.theForm.sameadd[1].checked == true ) && (document.getElementById("cpin").value.length < 6))
                   {                                  
                       alert("Please enter Correct PinCode.");
                       document.getElementById("cpin").focus();
                       return false;
                   }
                  if(( document.theForm.sameadd[1].checked == true ) && (document.getElementById("cpin").value !="" && document.getElementById("cpin").value.search("[^0-9]")>-1))
                   {
                       alert("Please enter only Numbers for pincode.");
                       document.getElementById("cpin").focus();
                       return false;
                   }
//to validate correspondance dist
if(( document.theForm.sameadd[1].checked == true ) && (document.getElementById("cdist").value.length < 3))
                   {                                  
                       alert("Please enter Correct Correspondance Dist.");
                       document.getElementById("cdist").focus();
                       return false;
                   }
                  if(( document.theForm.sameadd[1].checked == true ) && (document.getElementById("cdist").value !="" && document.getElementById("cdist").value.search("[^A-Za-z ]")>-1))
                   {
                       alert("Please enter only [A-Z], [a-z] and [space] for Correspondance Dist.");
                       document.getElementById("cdist").focus();
                       return false;
                   }
                  if(( document.theForm.sameadd[1].checked == true ) && (document.getElementById("cdist").value.substring(0,1).search("[^a-zA-Z]") > -1))
                   { 
                       alert("First chracter should be an alphabet for Correspondance Dist.");
                       document.getElementById("cdist").focus();
                       return false;                       
                   }
// to validate correspondance state
if(( document.theForm.sameadd[1].checked == true ) && (theForm.cstate.selectedIndex==0))
   {
    alert("Please Select Correspondance State");
    theForm.cstate.focus();
    return (false);
  }
//to validate maritial status
if ( ( document.theForm.married[0].checked == false ) && ( document.theForm.married[1].checked == false ) )
   {
    alert ( "Please Select Maritial Status!" );
    document.theForm.married[0].focus();
    return (false);
   }
// to validate medium of examination
if (theForm.medium.selectedIndex==0)
   {
    alert("Please Select Medium of Examination");
    theForm.medium.focus();
    return (false);
	}
//to validate fee exemption
/*if ( ( document.theForm.fees[0].checked == false ) && ( document.theForm.fees[1].checked == false ) )
   {
    alert ( "Please Select Fee exemption" );
    document.theForm.fees[0].focus();
    return (false);
	}
   else if (( document.theForm.fees[0].checked == true ) && (theForm.feeReason.selectedIndex==0))
   {
    alert("Please Select Reason for Fees exemption");
    theForm.feeReason.focus();
    return (false);
  } */
//to validate age relexation
// to validate nationality
if ( ( document.theForm.nationality[0].checked == false ) && ( document.theForm.nationality[1].checked == false ) )
   {
    alert ( "Please choose Nationality!" );
    document.theForm.nationality[0].focus();
    return (false);
   }
if (( document.theForm.ageRelx[0].checked == false ) && ( document.theForm.ageRelx[1].checked == false ))
   {
    alert ( "Please Select Age Relaxation!" );
    document.theForm.ageRelx[0].focus();
    return (false);
   }
   else if (( document.theForm.ageRelx[0].checked == true ) && (theForm.ageReason.selectedIndex==0))
   {
    alert("Please Select Reason for age Relaxation");
    theForm.ageReason.focus();
    return (false);
  }
//to validate branch name
if(document.getElementById("br_name").value.length < 3)
                   {                                  
                       alert("Please enter Correct Branch Name.");
                       document.getElementById("br_name").focus();
                       return false;
                   }
                  if(document.getElementById("br_name").value !="" && document.getElementById("br_name").value.search("[^A-Za-z ]")>-1)
                   {
                       alert("Please enter only [A-Z], [a-z] and [space] for Branch Name.");
                       document.getElementById("br_name").focus();
                       return false;
                   }
                  if(document.getElementById("br_name").value.substring(0,1).search("[^a-zA-Z]") > -1)
                   { 
                       alert("First chracter should be an alphabet for Branch Name.");
                       document.getElementById("br_name").focus();
                       return false;                       
                   }
//to validate branch city
if(document.getElementById("br_city").value.length < 3)
                   {                                  
                       alert("Please enter Correct Branch City.");
                       document.getElementById("br_city").focus();
                       return false;
                   }
                  if(document.getElementById("br_city").value !="" && document.getElementById("br_city").value.search("[^A-Za-z ]")>-1)
                   {
                       alert("Please enter only [A-Z], [a-z] and [space] for Branch City.");
                       document.getElementById("br_city").focus();
                       return false;
                   }
                  if(document.getElementById("br_city").value.substring(0,1).search("[^a-zA-Z]") > -1)
                   { 
                       alert("First chracter should be an alphabet for Branch City.");
                       document.getElementById("br_city").focus();
                       return false;                       
                   }
//to validate branch code
if(document.getElementById("br_code").value.length < 3)
                   {                                  
                       alert("Please enter Correct Branch Code.");
                       document.getElementById("br_code").focus();
                       return false;
                   }
//to validate date of deposit of challan
if(document.getElementById("dep_date").value.length < 3)
                   {                                  
                       alert("Please enter Date of Deposit.");
                       document.getElementById("dep_date").focus();
                       return false;
                   }
//to validate journal no
if(document.getElementById("jr_no").value.length < 3)
                   {                                  
                       alert("Please enter Correct Journal No.");
                       document.getElementById("jr_no").focus();
                       return false;
                   }
                  if(document.getElementById("jr_no").value !="" && document.getElementById("jr_no").value.search("[^0-9]")>-1)
                   {
                       alert("Please enter only Numbers for Journal No.");
                       document.getElementById("jr_no").focus();
                       return false;
                   }
return (true);
}
