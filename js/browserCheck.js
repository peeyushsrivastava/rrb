(function(){
var val = navigator.userAgent.toLowerCase();
if ((val.indexOf("chrome") > -1) || (val.indexOf("msie") > -1) || val.indexOf("mozilla") > -1)
        {}
    else
    {
    alert("Please Use IE 7 or above and Google Chrome To register,You wont be able to Submit the form in other Browsers");
        document.location.href = "browser.htm";
        }
       // window.history.forward();
})();