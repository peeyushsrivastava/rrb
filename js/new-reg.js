// Java Document
/*function noBack() 
{
window.history.forward();
}*/



// After form loads focus will go to User id field.
function firstfocus()
{
window.history.forward();
var uid = document.theForm.cname.focus();
if (document.theForm.fees[0].checked == true)
{document.getElementById('exemption').style.display = '';
return false;}
else {document.getElementById('exemption').style.display = 'none';
return false;}
return true;
}





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
// to validate day of date of birth                   }
if (theForm.bdd.selectedIndex==0)
   {
    alert("Please Enter Correct Date of Birth");
    theForm.bdd.focus();
    return (false);
  }
  else {
  var varbdd = theForm.bdd.value;
  }
// to validate month of date of birth
if (theForm.bmm.selectedIndex==0)
   {
    alert("Please Enter Correct Date of Birth");
    theForm.bmm.focus();
    return (false);
  }
  else {
  var varbmm = theForm.bmm.value;
  }
// to validate year of date of birth
if (theForm.byy.selectedIndex==0)
   {
    alert("Please Enter Correct Date of Birth");
    theForm.byy.focus();
    return (false);
  }
  else {
  var varbyy = theForm.byy.value;
  }
//to validate fee exemption
if (( document.theForm.fees[0].checked == false ) && ( document.theForm.fees[1].checked == false ))
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
  }
 
//to validate age relaxation 
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
  
  
return (true);
}

