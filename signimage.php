

<?php
include('scripts/conn.php');
if (mysqli_connect_errno()) {
echo "failed to connect to mysql:". mysqli_connect_error();
}

include('scripts/session.php');

$rowregno = $row['regno'];
$path = "uploads/";

	$valid_formats = array("jpg");
	if(isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST")
		{
			$name = $_FILES['signimg']['name'];
			$size = $_FILES['signimg']['size'];
			
			if(strlen($name))
				{
					list($txt, $ext) = explode(".", $name);
					if(in_array($ext,$valid_formats))
					{
						if($size<(1024*50))
							{
								$actual_image_name = $rowregno."S.".$ext;
								$tmp = $_FILES['signimg']['tmp_name'];
								if(move_uploaded_file($tmp, $path.$actual_image_name))
									{
									echo "<img src=\"uploads/{$rowregno}S.{$ext}\"  class=\"signpreview\">";
									}
									else 
									{
										echo "<div align=\"center\" style=\"font-weight:bold; font-size:16px; background-color:white; width:146px;
height:66px; border:2px solid; border-color:red; \"><br>failed</div>";
									}
							}
								else 
							{
								echo "<div align=\"center\" style=\"font-weight:bold; font-size:16px; background-color:white; width:146px;
height:66px; border:2px solid; border-color:red;\"><br>Maximum file size 50 kb</div>"; 
							}
					}
						else 
							{
								echo "<div align=\"center\" style=\"font-weight:bold; font-size:16px; background-color:white; width:146px;
height:66px; border:2px solid; border-color:red;\"><br>Invalid file format..</div>";
							}
				}
				
					else 
				{
					echo "<div align=\"center\" style=\"font-weight:bold; font-size:16px; background-color:white; width:146px;
height:66px; border:2px solid; border-color:red;\"><br>Please select image..!</div>";
				}
			exit;
		}
 
                
/*
//enable this code to upload and preview image to database
include('scripts/conn.php');
if (mysqli_connect_errno()) {
echo "failed to connect to mysql:". mysqli_connect_error();
}

include('scripts/session.php');

$rowregno = $row['regno'];
$path = "uploads/";

	$valid_formats = array("jpg");
	if(isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST")
		{
			$name = $_FILES['signimg']['name'];
			$size = $_FILES['signimg']['size'];
			
			if(strlen($name))
				{
					list($txt, $ext) = explode(".", $name);
					if(in_array($ext,$valid_formats))
					{
						if($size<(1024*50))
							{
								$actual_image_name = $rowregno."S.".$ext;
								$tmp = $_FILES['signimg']['tmp_name'];
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
											$result= mysqli_query($con, "UPDATE picsig SET fns='$dataUri' WHERE regno='$rowregno'");
											$result= mysqli_query($con, "select * from picsig where regno='$rowregno'");
											$Pic= mysqli_fetch_array($result);
											
											echo '<img src="'.trim($Pic['fns']).'"  class="signpreview">';
									}
									else 
									{
										echo "<div align='center' style='font-weight:bold; font-size:16px; background-color:white; width:146px;
height:66px; border:2px solid; border-color:red;  '><br>failed</div>";
									}
							}
								else 
							{
								echo "<div align='center' style='font-weight:bold; font-size:16px; background-color:white; width:146px;
height:66px; border:2px solid; border-color:red;  '><br>Maximum file size 50 kb</div>"; 
							}
					}
						else 
							{
								echo "<div align='center' style='font-weight:bold; font-size:16px; background-color:white; width:146px;
height:66px; border:2px solid; border-color:red;  '><br>Invalid file format..</div>";
							}
				}
				
					else 
				{
					echo "<div align='center' style='font-weight:bold; font-size:16px; background-color:white; width:146px;
height:66px; border:2px solid; border-color:red;  '><br>Please select image..!</div>";
				}
			exit;
		}
 
 */
?>