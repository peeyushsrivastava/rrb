<?php

function gtd($t1,$t2)
{
	

if (($t1 = strtotime($t1)) === false) die ("Input string 1 unrecognized");
if (($t2 = strtotime($t2)) === false) die ("Input string 2 unrecognized");

if($t1 < $t2) 
	{
	$d1 = getdate($t2);
	$d2 = getdate($t1); 
	}
else
	{
	$d1 = getdate($t1);
	$d2 = getdate($t2);
	}
        
foreach ($d1 as $k => $v) 
	{
	$d1[$k]-=  $d2[$k] ;		
 	}


if ($d1['seconds'] < 0 ) 
	{
	$d1['seconds'] +=60 ;
	$d1['minutes'] -=1;
	}

if ($d1['minutes'] < 0 ) 
	{
	$d1['minutes'] +=60 ;
	$d1['hours'] -=1;
	}

if ($d1['hours'] < 0 ) 
	{
	$d1['hours'] +=24 ;
	$d1['yday'] -=1;
	}

if ($d1['yday'] < 0 ) 
	{
	$d1['yday'] +=365 ;
	$d1['year'] -=1;
	}



return ($d1);
}


?>


