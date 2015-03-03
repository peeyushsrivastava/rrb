<?php
// Fill up array with names
$bcom = array('ABST', 'FADM', 'BANKING');
$ba = array('POLITICS', 'SOCIOLOGY', 'GEOGRAPHY');
$bsc = array('PHYSICS', 'CHEMISTRY', 'MATHS');


//get the q parameter from URL
$q=$_GET["q"];
echo '<select name="c4" class="form-control" id="c4"><option value="0">--select--</option>';
if ($q=="BCOM")
{
foreach ($bcom as $value)
  {
echo "<option value='".$value."'>".$value."</option>";
  }
}
else if ($q=="BA")
{
foreach ($ba as $value)
  {
echo "<option value='".$value."'>".$value."</option>";
  }
}
else if ($q=="BSC")
{
foreach ($bsc as $value)
  {
echo "<option value='".$value."'>".$value."</option>";
  }
}

echo "</select>";




?>
