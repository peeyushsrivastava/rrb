function clickIE4(){
if (event.button==2){

return false;
}
}

function clickNS4(e){
if (document.layers||document.getElementById&&!document.all){
if (e.which==2||e.which==3){

return false;
}
}
}

if (document.layers){
document.captureEvents(Event.MOUSEDOWN);
document.onmousedown=clickNS4;
}
else if (document.all&&!document.getElementById){
document.onmousedown=clickIE4;
}

document.oncontextmenu=new Function(" return false");
// Disable Mouse Click .......................
		
document.onkeydown = function()
{

if(window.event && window.event.keyCode == 116)
        { // Capture and remap F5
    		window.event.keyCode = 505;
	    }

if(window.event && window.event.keyCode == 505)
        { // New action for F5
		    return false;
        // Must return false or the browser will refresh anyway
	    }

}