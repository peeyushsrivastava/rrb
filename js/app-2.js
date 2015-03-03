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
document.getElementById('gtemp').style.display = 'none';
document.getElementById('exsm').style.display = 'none';
document.getElementById('phtype').style.display = 'none';
	
return true;
}

function validateform(theForm)
{
var Errors = "";

if(document.theForm.pri1.selectedIndex==0)
{ 
var Errors = '* Please select Priority'+'<br />';
document.getElementById('pri1').style.borderColor="red";
var p1 = document.theForm.pri1.value;
}
else {var p1 = document.theForm.pri1.value;}

var p2 = document.theForm.pri2.value;
var p3 = document.theForm.pri3.value;
var p4 = document.theForm.pri4.value;
var p5 = document.theForm.pri5.value;
var p6 = document.theForm.pri6.value;
var p7 = document.theForm.pri7.value;
var p8 = document.theForm.pri8.value;
var p9 = document.theForm.pri9.value;
var p10 = document.theForm.pri10.value;

if ( (p1==p2) || (p1==p3) || (p1==p4) || (p1==p5) || (p1==p6) || (p1==p7) || (p1==p8) || (p1==p9) ||(p1==p10) 
  || (p2==p3) || (p2==p4) || (p2==p5) || (p2==p6) || (p2==p7) || (p2==p8) || (p2==p9) || (p2==p10)
  || (p3==p4) || (p3==p5) || (p3==p6) || (p3==p7) || (p3==p8) || (p3==p9) || (p3==p10)
  || (p4==p5) || (p4==p6) || (p4==p7) ||(p4==p8)  || (p4==p9) || (p4==p10)
  || (p5==p6) || (p5==p7) || (p5==p8) || (p5==p9) || (p5==p10)
  || (p6==p7) || (p6==p8) || (p6==p9) || (p6==p10)
  || (p7==p8) || (p7==p9) || (p7==p10)
  || (p8==p9) || (p8==p10)
  || (p9==p10))
{
var Errors = Errors +  '* Your cannot select same option for post priorities'+'<br />';
}

if(document.theForm.choice1.selectedIndex==0)
{ 
var Errors = Errors +  '* Please select first choice of RAILWAY'+'<br />';
document.getElementById('choice1').style.borderColor="red";
}
else { var choice1 = document.theForm.choice1.value;}

if(document.theForm.choice2.selectedIndex==0)
{
var Errors = Errors +  '* Please select second choice of RAILWAY'+'<br />';
document.getElementById('choice2').style.borderColor="red";
}
else { var choice2 = document.theForm.choice2.value;}

if ((document.theForm.choice1.value!="")&&(document.theForm.choice2.value!="")&&(choice2==choice1))
{
var Errors = Errors +  '* You cannot select same choice of RAILWAY'+'<br />';
}

// to validate government employee and railway employee
if (( document.theForm.gtemp[0].checked == true ) && ( document.theForm.exsm[0].checked == true ))
   {
   var Errors = Errors +  '* You cannot select Government employee and Ex-servicemen at same time'+'<br />';
    }
   
   
if (( document.theForm.ph[0].checked == true ) && (theForm.ph_yes.selectedIndex==0))
   {
    var Errors = Errors +  '* Please Select type of disability'+'<br />';
document.getElementById('phtype').style.borderColor="red";
}

	
// education text boxes
// for sslc/x/matric
if((document.getElementById("a1").value.length < 1) || (document.getElementById("a2").value.length < 2) || (document.getElementById("a3").value.length < 2) || (document.getElementById("a4").value.length < 2) || (document.getElementById("a5").value.length < 2))
                   {                                  
var Errors = Errors +  '* Please fill all fields of "SSC / X / Matric"'+'<br />';
}
//for Higher secondary & inter
if((document.getElementById("b1").value.length < 2) || (document.getElementById("b2").value.length < 2) || (document.getElementById("b3").value.length < 2) || (document.getElementById("b4").value.length < 2) || (document.getElementById("b5").value.length < 2))
                   {                                  
var Errors = Errors +  '* Please fill all fields of "Higher Secondary / Inter"'+'<br />';
    }
//for Graduation 
if((document.getElementById("c1").value.length < 2) || (document.getElementById("c2").value.length < 2) || (document.getElementById("c3").value.length < 2) || (document.getElementById("c4").value.length < 2) || (document.getElementById("c5").value.length < 2))
                   {                                  
  var Errors = Errors +  '* Please fill all fields of "Graduation"'+'<br />';
                 } 

// to validate correspondance address
if((document.getElementById("cadd").value.length < 3))
                   {                                  

                       var Errors = '* Please enter Correct Correspondance Address'+'<br />';
			document.getElementById('cadd').style.borderColor="red";
                   }       
//to validate correspondance city
if((document.getElementById("ccity").value.length < 3))
                   {                                  
var Errors = Errors +  '* Please enter Correct City'+'<br />';
document.getElementById('ccity').style.borderColor="red";
                   }
//to validate pin code for correspondance address
if((document.getElementById("cpin").value.length < 6))
                   {                                  
var Errors = Errors +  '* Please enter Correct Pin-Code'+'<br />';
document.getElementById('cpin').style.borderColor="red";
                   }
//to validate correspondance dist
if((document.getElementById("cdist").value.length < 3))
                   {                                  
var Errors = Errors +  '* Please enter Correct District'+'<br />';
document.getElementById('cdist').style.borderColor="red";
}

// to validate correspondance state
if((theForm.cstate.selectedIndex==0))
   {
var Errors = Errors +  '* Please Select State'+'<br />';
document.getElementById('cstate').style.borderColor="red";
  }
//to validate nearest railway Station
if(document.getElementById("nrly").value.length < 3)
                   {                                  
var Errors = Errors +  '* Please enter Nearest Railway Station'+'<br />';
document.getElementById('nrly').style.borderColor="red";
}

if((document.getElementById("br_name")) && (document.getElementById("br_name").value.length < 3))
                   {                                  
var Errors = Errors +  '* Please enter Correct Branch Name'+'<br />';
document.getElementById('br_name').style.borderColor="red";
                   }
				   
//to validate branch city
if((document.getElementById("br_city")) && (document.getElementById("br_city").value.length < 3))
                   {                                  
var Errors = Errors +  '* Please enter Correct Branch City'+'<br />';
document.getElementById('br_city').style.borderColor="red";
                   }
//to validate branch code
if((document.getElementById("br_code")) && (document.getElementById("br_code").value.length < 3))
                   {                                  

var Errors = Errors +  '* Please enter Correct Branch Code'+'<br />';
document.getElementById('br_code').style.borderColor="red";
                   }
//to validate date of deposit of challan
if((document.getElementById("dep_date")) && (document.getElementById("dep_date").value.length < 3))
                   {                                  
var Errors = Errors +  '* Please enter Correct Date of Deposit'+'<br />';
document.getElementById('dep_date').style.borderColor="red";
}
//to validate journal no
if((document.getElementById("jr_no")) && (document.getElementById("jr_no").value.length < 3))
                   {                                  
var Errors = Errors + '* Please enter Correct Journal no'+'<br />';
document.getElementById('jr_no').style.borderColor="red";
                   }                   


                   
if (Errors)
{  
//alert(Errors);
document.getElementById("Errors").innerHTML=Errors;
$('#detailsModal').modal();
return false;
}

return confirm("Please Check the details given by you. Once the application is submitted it can not be edited");
}


$("document").ready(
function()
{
$("#br_name").blur(function()
	{
	if($(this).val()==="")
        {
            $(this).css("border","1px solid red");
        }
        
	}
);
$("#br_city").blur(function()
	{
	if($(this).val()==="")
        {
            $(this).css("border","1px solid red");
        }
        
	}
);
$("#br_code").blur(function()
	{
	if($(this).val()==="")
        {
            $(this).css("border","1px solid red");
        }
        
	}
);
$("#dep_date").blur(function()
	{
	if($(this).val()==="")
        {
            $(this).css("border","1px solid red");
        }
        
	}
);
$("#jr_no").blur(function()
	{
	if($(this).val()==="")
        {
            $(this).css("border","1px solid red");
        }
        
	}
);
$("#pri1").blur(function()
	{
	if($(this).val()==="")
        {
            $(this).css("border","1px solid red");
        }
        
	}
);

$("#choice1").blur(function()
	{
	if($(this).val()==="")
        {
            $(this).css("border","1px solid red");
        }
        
	}
);

$("#choice2").blur(function()
	{
	if($(this).val()==="")
        {
            $(this).css("border","1px solid red");
        }
        
	}
);

$("#gtemp1").blur(function()
	{
	if($(this).val()==="")
        {
            $(this).css("border","1px solid red");
        }
        
	}
);


$("#gtemp2").blur(function()
	{
	if($(this).val()==="")
        {
            $(this).css("border","1px solid red");
        }
        
	}
);

$("#gtemp3").blur(function()
	{
	if($(this).val()==="")
        {
            $(this).css("border","1px solid red");
        }
        
	}
);

$("#gtemp4").blur(function()
	{
	if($(this).val()==="")
        {
            $(this).css("border","1px solid red");
        }
        
	}
);

$("#exsm1").blur(function()
	{
	if($(this).val()==="")
        {
            $(this).css("border","1px solid red");
        }
        
	}
);

$("#exsm2").blur(function()
	{
	if($(this).val()==="")
        {
            $(this).css("border","1px solid red");
        }
        
	}
);

$("#exsm3").blur(function()
	{
	if($(this).val()==="")
        {
            $(this).css("border","1px solid red");
        }
        
	}
);

$("#exsm4").blur(function()
	{
	if($(this).val()==="")
        {
            $(this).css("border","1px solid red");
        }
        
	}
);

$("#phtype").blur(function()
	{
	if($(this).val()==="")
        {
            $(this).css("border","1px solid red");
        }
        
	}
);
$("#a1").blur(function()
	{
	if($(this).val()==="")
        {
            $(this).css("border","1px solid red");
        }
        
	}
);

$("#a2").blur(function()
	{
	if($(this).val()==="")
        {
            $(this).css("border","1px solid red");
        }
        
	}
);

$("#a3").blur(function()
	{
	if($(this).val()==="")
        {
            $(this).css("border","1px solid red");
        }
        
	}
);

$("#a4").blur(function()
	{
	if($(this).val()==="")
        {
            $(this).css("border","1px solid red");
        }
        
	}
);

$("#a5").blur(function()
	{
	if($(this).val()==="")
        {
            $(this).css("border","1px solid red");
        }
        
	}
);

$("#b1").blur(function()
	{
	if($(this).val()==="")
        {
            $(this).css("border","1px solid red");
        }
        
	}
);

$("#b2").blur(function()
	{
	if($(this).val()==="")
        {
            $(this).css("border","1px solid red");
        }
        
	}
);

$("#b3").blur(function()
	{
	if($(this).val()==="")
        {
            $(this).css("border","1px solid red");
        }
        
	}
);

$("#b4").blur(function()
	{
	if($(this).val()==="")
        {
            $(this).css("border","1px solid red");
        }
        
	}
);

$("#b5").blur(function()
	{
	if($(this).val()==="")
        {
            $(this).css("border","1px solid red");
        }
        
	}
);

$("#c1").blur(function()
	{
	if($(this).val()==="")
        {
            $(this).css("border","1px solid red");
        }
        
	}
);

$("#c2").blur(function()
	{
	if($(this).val()==="")
        {
            $(this).css("border","1px solid red");
        }
        
	}
);

$("#c3").blur(function()
	{
	if($(this).val()==="")
        {
            $(this).css("border","1px solid red");
        }
        
	}
);

$("#c4").blur(function()
	{
	if($(this).val()==="")
        {
            $(this).css("border","1px solid red");
        }
        
	}
);

$("#c5").blur(function()
	{
	if($(this).val()==="")
        {
            $(this).css("border","1px solid red");
        }
        
	}
);

$("#cadd").blur(function()
	{
	if($(this).val()==="")
        {
            $(this).css("border","1px solid red");
        }
        
	}
);

$("#cdist").blur(function()
	{
	if($(this).val()==="")
        {
            $(this).css("border","1px solid red");
        }
        
	}
);
$("#ccity").blur(function()
	{
	if($(this).val()==="")
        {
            $(this).css("border","1px solid red");
        }
        
	}
);
$("#cstate").blur(function()
	{
	if($(this).val()==="")
        {
            $(this).css("border","1px solid red");
        }
        
	}
);
$("#cpin").blur(function()
	{
	if($(this).val()==="")
        {
            $(this).css("border","1px solid red");
        }
        
	}
);
$("#nrly").blur(function()
	{
	if($(this).val()==="")
        {
            $(this).css("border","1px solid red");
        }
        
	}
);
});
