<?php

include 'timefunction.php';
//get the q parameter from URL
$dob=$_GET["dob"];

$date1 =$dob;
$date2 ="01-06-2014";
$result = gtd($date1 , $date2) ;


echo   ($result['year']).' years &amp; ';
echo ($result['yday']).' days';
if (($result['year']<18) && ($result['yday']>0 ))
{
echo '<input type="hidden" id="u_age" value="18" />';
}
else 
{
echo '<input type="hidden" id="u_age" value="" />';
}

?>
