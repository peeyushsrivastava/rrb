

<?php
include('scripts/conn.php');
if (mysqli_connect_errno()) {
echo "failed to connect to mysql:". mysqli_connect_error();
}

include('scripts/session.php');

$rowregno = $row['regno'];
$path = "uploads/";

	$valid_formats = array("jpg", "jpeg");
	if(isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST")
		{
			$name = $_FILES['photoimg']['name'];
			$size = $_FILES['photoimg']['size'];
			
			if(strlen($name))
				{
					list($txt, $ext) = explode(".", $name);
					if(in_array($ext,$valid_formats))
					{
						if($size<(1024*100))
							{
								$actual_image_name = $rowregno."P.".$ext;
								$tmp = $_FILES['photoimg']['tmp_name'];
								if(move_uploaded_file($tmp, $path.$actual_image_name))
									{
									
									$type = pathinfo($path.$actual_image_name, PATHINFO_EXTENSION);
									$data = file_get_contents($path.$actual_image_name);
									$dataUri = 'data:image/' . $type . ';base64,' . base64_encode($data);

										include('scripts/conn.php');
										if (mysqli_connect_errno()) 
										{
											echo "failed to connect to mysql:". mysqli_connect_error();
										}
											//mysqli_query($con, "UPDATE cen0114 SET fnp='$actual_image_name' WHERE regno='$rowregno'");
											$result= mysqli_query($con, "UPDATE picsig SET fnp='$dataUri' WHERE regno='$rowregno'");
											$result= mysqli_query($con, "select * from picsig where regno='$rowregno'");
											$Pic= mysqli_fetch_array($result);
											
											echo '<img src="'.trim($Pic['fnp']).'"  class="photopreview">';
									}
									else 
									{
										echo "failed";
									}
							}
								else 
							{
								echo "<div align='center' style='font-weight:bold; font-size:16px; background-color:white; width:106px;
height:116px; border:2px solid; border-color:red;  '><br><br>Maximum file size 100 kb</div>"; 
							}
					}
						else 
							{
								echo "<div align='center' style='font-weight:bold; font-size:16px; background-color:white; width:106px;
height:116px; border:2px solid; border-color:red;  '><br><br>Invalid file format..</div>";
							}
				}
				
					else 
				{
					echo "<div align='center' style='font-weight:bold; font-size:16px; background-color:white; width:106px;
height:116px; border:2px solid; border-color:red;  '><br><br>Please select image..!</div>";
				}
				
			exit;
		}
?>