$("document").ready(
function()
{
$("#cname").blur(function()
	{
	if($(this).val()==="")
        {
            $(this).css("border","1px solid red");
			$(this).next().html("Please Enter a Name");
        }
        else 
        {
            $(this).css("border","1px solid #0000CC");
        }
	}
);
$("#fname").blur(function()
	{
	if($(this).val()==="")
        {
            $(this).css("border","1px solid red");
        }
        else 
        {
            $(this).css("border","1px solid #0000CC");
        }
	}
);
$("#bdd").blur(function()
	{
	if($(this).val()==="")
        {
            $(this).css("border","1px solid red");
        }
        else 
        {
            $(this).css("border","1px solid #0000CC");
        }
	}
);
$("#bmm").blur(function()
	{
	if($(this).val()==="")
        {
            $(this).css("border","1px solid red");
        }
        else 
        {
            $(this).css("border","1px solid #0000CC");
        }
	}
);
$("#byy").blur(function()
	{
	if($(this).val()==="")
        {
            $(this).css("border","1px solid red");
        }
        else 
        {
            $(this).css("border","1px solid #0000CC");
        }
	}
);$("#gend").blur(function()
	{
	if($(this).val()==="")
        {
            $(this).css("border","1px solid red");
        }
        else 
        {
            $(this).css("border","1px solid #0000CC");
        }
	}
);$("#comm").blur(function()
	{
	if($(this).val()==="")
        {
            $(this).css("border","1px solid red");
        }
        else 
        {
            $(this).css("border","1px solid #0000CC");
        }
	}
);
$("#email").blur(function()
	{
	if($(this).val()==="")
        {
            $(this).css("border","1px solid red");
        }
        else 
        {
            $(this).css("border","1px solid #0000CC");
        }
	}
);
$("#phno").blur(function()
	{
	if($(this).val()==="")
        {
            $(this).css("border","1px solid red");
        }
        else 
        {
            $(this).css("border","1px solid #0000CC");
        }
	}
);
$("#captcha").blur(function()
	{
	if($(this).val()==="")
        {
            $(this).css("border","1px solid red");
        }
        else 
        {
            $(this).css("border","1px solid #0000CC");
        }
	}
);
}
        
);


function checkAge()
{
if ((theForm.bdd.selectedIndex !==0) && (theForm.bmm.selectedIndex !==0) && (theForm.byy.selectedIndex !==0))
                {
                var dbirth = theForm.bdd.value + "-" + theForm.bmm.value + "-" + theForm.byy.value;
                countAge(dbirth);               
                }

}
function countAge(str)
{
if (str.length==0)
  { 
  document.getElementById("ageMessage").innerHTML="";
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
    document.getElementById("ageMessage").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","getage.php?dob="+str,true);
xmlhttp.send();
}

function firstfocus()
{
window.history.forward();
var uid = document.theForm.cname.focus();

document.getElementById('relx').style.display = 'none';
document.getElementById('exemption').style.display = 'none';

if (document.theForm.fees[0].checked == true)
{document.getElementById('exemption').style.display = '';
return false;}
else {document.getElementById('exemption').style.display = 'none';
return false;}
return true;
}

function docast()
{
document.getElementById("ob").style.display = "none";
document.getElementById("if_sc").style.display = "none";
var cc = document.getElementById("comm").value;
if (cc =='OBC')
{document.getElementById("ob").style.display = "block";
return false;
}
else if (cc =='SC')
{document.getElementById("if_sc").style.display = "block";
return false;
}
else if (cc =='ST')
{document.getElementById("if_sc").style.display = "block";
return false;}
}

function validateform(theForm)
{
var Errors = "";
if (document.getElementById("cname").value.length < 3)
                   {                                  
                       //alert("Please enter Correct Name.");
                       //document.getElementById("cname").focus();
                       //return false;
					   var Errors = Errors + "* Please enter Correct Name." + '<br />';
					   document.getElementById('cname').style.borderColor="red";
					   }
                  if(document.getElementById("cname").value !="" && document.getElementById("cname").value.search("[^A-Za-z ]")>-1)
                   {
                       //alert("Please enter only [A-Z], [a-z] and [space] for Name.");
                       //document.getElementById("cname").focus();
                       //return false;
					   var Errors= Errors + "* Please enter only [A-Z], [a-z] and [space] for Name." + '<br />';
   					   document.getElementById('cname').style.borderColor="red";
                   }
                  if(document.getElementById("cname").value.substring(0,1).search("[^a-zA-Z]") > -1)
                   { 
                       //alert("First chracter should be an alphabet for Name.");
                       //document.getElementById("cname").focus();
                       //return false;                       
					 var Errors = Errors + "* First chracter should be an alphabet for Name." + '<br />';														   						document.getElementById('cname').style.borderColor="red";  
	                }
// to validate father name
if(document.getElementById("fname").value.length < 3)
                   {                                  
                       //alert("Please enter Correct Father's Name.");
                       //document.getElementById("fname").focus();
                       //return false;
					   var Errors = Errors + "* Please enter Correct Father's Name." + '<br />';
   					   document.getElementById('fname').style.borderColor="red";}
                  if(document.getElementById("fname").value !="" && document.getElementById("fname").value.search("[^A-Za-z ]")>-1)
                   {
                       //alert("Please enter only [A-Z], [a-z] and [space] for Father's Name.");
                       //document.getElementById("fname").focus();
                       //return false;
					   var Errors = Errors + "* Please enter only [A-Z], [a-z] and [space] for Father's Name." + '<br />';
					   document.getElementById('fname').style.borderColor="red";
                   }
                  if(document.getElementById("fname").value.substring(0,1).search("[^a-zA-Z]") > -1)
                   { 
                       //alert("First chracter should be an alphabet for Father's Name.");
                       //document.getElementById("fname").focus();
                       //return false;                       
					 var Errors = Errors + "* First chracter should be an alphabet for Father's Name." + '<br />';
					 document.getElementById('fname').style.borderColor="red";
                   }

// to validate date of birth                   }
if ((theForm.bdd.selectedIndex==0) || (theForm.bmm.selectedIndex==0) || (theForm.byy.selectedIndex==0))
   {
    var Errors= Errors + "* Please Enter Correct Date of Birth" + '<br />';
	document.getElementById('bdd').style.borderColor="red";
	document.getElementById('bmm').style.borderColor="red";
	document.getElementById('byy').style.borderColor="red";
}


// to validate gender
if (( document.theForm.gender[0].checked == false ) && ( document.theForm.gender[1].checked == false ) )
   {
    //alert ( "Please choose Gender!" );
    //document.theForm.gender[0].focus();
    //return (false);
	var Errors = Errors + "* Please choose Gender!" + '<br />';
   }
  
//to validate community
//  to validate community
if (document.getElementById("comm").selectedIndex==0)
{
	var Errors= Errors + "* Please choose Community!"+ '<br />'
	document.getElementById('comm').style.borderColor="red";
}
if ((document.getElementById("comm").selectedIndex==3) && (document.theForm.minority[0].checked == false ) && (document.theForm.minority[1].checked == false ))
   {
    //alert ( "Please Indicate Weather you belong to Minority community!" );
    //document.theForm.minority[0].focus();
    //return (false);
	var Errors = Errors + "* Please Indicate Weather you belong to Minority community!" + '<br />';
   }
if ((document.getElementById("comm").selectedIndex==3) && ( document.theForm.minority[0].checked == true ) && (theForm.minoritycomm.selectedIndex==0))
   {
//    alert("Please Select Minority Community");
//   theForm.minoritycomm.focus();
//    return (false);
	var Errors = Errors + "* Please Select Minority Community" + '<br />';
	document.getElementById('minoritycomm').style.borderColor="red";
	}
  
//to validate fee exemption
if (( document.theForm.fees[0].checked == false ) && ( document.theForm.fees[1].checked == false ))
   {
    //alert ( "Please Select Fee exemption" );
    //document.theForm.fees[0].focus();
    //return (false);
	var Errors = Errors + "* Please Select Fee Exemption " + '<br />';
    }
   else if (( document.theForm.fees[0].checked == true ) && (theForm.feeReason.selectedIndex==0))
   {
    //alert("Please Select Reason for Fees exemption");
    //theForm.feeReason.focus();
    //return (false);
	var Errors = Errors + "* Please Select Reason for Fees Exemption" + '<br />';
	document.getElementById('feeReason').style.borderColor="red";
  }
 
//to validate age relaxation 
if (( document.theForm.ageRelx[0].checked == false ) && ( document.theForm.ageRelx[1].checked == false ))
   {
    //alert ( "Please Select Age Relaxation!" );
    //document.theForm.ageRelx[0].focus();
    //return (false);
	var Errors = Errors + "* Please Select Age Relexation" + '<br />';
   }
   else if (( document.theForm.ageRelx[0].checked == true ) && (theForm.ageReason.selectedIndex==0))
   {
    //alert("Please Select Reason for age Relaxation");
    //theForm.ageReason.focus();
    //return (false);
	var Errors = Errors + "* Please Select Reason For age Relexation" + '<br />';
	document.getElementById('ageReason').style.borderColor="red";
  }

//var email = document.theForm.Email;
if (document.theForm.email.value == "")
{
//window.alert("Please enter a valid e-mail address.");
//document.theForm.email.focus();
//return false;
var Errors = Errors + "* Please enter e-mail address." + '<br />';
document.getElementById('email').style.borderColor="red";
} else if (document.theForm.email.value.indexOf("@", 0) < 0)
{
//window.alert("Please enter a valid e-mail address.");
//document.theForm.email.focus();
//return false;
var Errors = Errors + "* Please enter a Valid e-mail address." + '<br />';
document.getElementById('email').style.borderColor="red";
} else if (document.theForm.email.value.indexOf(".", 0) < 0)
{
//window.alert("Please enter a valid e-mail address.");
//document.theForm.email.focus();
//return false;
var Errors = Errors + "* Please enter a valid e-mail address." + '<br />';
document.getElementById('email').style.borderColor="red";
}
//to validate phno
if((document.getElementById("phno").value.length < 10))
                   {                                  
                      // alert("Please enter Correct mobile number");
                       //document.getElementById("phno").focus();
                       //return false;
					   var Errors = Errors + "* Please enter Correct mobile number" + '<br />';
					   document.getElementById('phno').style.borderColor="red";
                   }
                  if((document.getElementById("phno").value !="" && document.getElementById("phno").value.search("[^0-9]")>-1))
                   {
                       //alert("Please enter only Numbers for mobile number.");
                       //document.getElementById("phno").focus();
                       //return false;
					   var Errors = Errors + "* Please enter only Numbers for mobile number." + '<br />';
					   document.getElementById('phno').style.borderColor="red";
                   }
// to validate captcha
if ((document.getElementById("captcha").value != document.getElementById("cap").value))
                   {               
                       //alert("Please enter Correct captcha code.");
                       //document.getElementById("captcha").focus();
                       //return false;
					   var Errors = Errors + "* Please enter Correct Captcha code." + '<br />';
					   document.getElementById('captcha').style.borderColor="red";
                   }


if ((theForm.bdd.selectedIndex!==0) || (theForm.bmm.selectedIndex!==0) || (theForm.byy.selectedIndex!==0) )
{
	if (document.getElementById("u_age").value==="18")
	{
	var Errors = "* You are below 18 Years. You are not eligible to fill application form.";
	document.getElementById("theForm").reset();
	}
}


if (Errors)
{  
//document.getElementById('pgErr').style.display='block';
//document.getElementById('pgErr').innerHTML=Errors;
//alert(Errors);
document.getElementById("Errors").innerHTML=Errors;
$('#detailsModal').modal();
return false;
}
                                 
return (true);
}

if (document.getElementById("u_age").value=="18")
{
var Errors = "You are below 18 Years. You are not eligible to fill application form.";
document.getElementById("theForm").reset();
}
else {

}// end of underage condition
