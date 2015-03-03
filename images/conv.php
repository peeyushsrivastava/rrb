<!DOCTYPE html>
<html>
<head>

</head>
<body>
<h1 align="center">convert data to image</h1>
<?php 

$image = "rrb_spacer.gif";
$type = pathinfo($image, PATHINFO_EXTENSION);
$data = file_get_contents($image);
$dataUri = 'data:image/' . $type . ';base64,' . base64_encode($data);
 echo '<textarea name="cadd" cols="100" rows="10"  >'.$dataUri.'</textarea>';
echo "<br />";
 
echo '<img src="'.$dataUri.'">';

?>


