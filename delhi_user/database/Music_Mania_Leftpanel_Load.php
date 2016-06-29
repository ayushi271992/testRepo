<?php
include("Database_Connection.php");

$sql="SELECT * from Music_Mania ;";

if (!mysqli_query($conn,$sql)) {
  die('Error: ' . mysqli_error($conn));
}


if($result=mysqli_query($conn,$sql))
{
	$rowcount=mysqli_num_rows($result);
}

$data=array();
if($rowcount>0)
{
while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
{
			$data[]=array(
			'url'=>$row['Music_Mania_Image_Url'],
			'name'=>$row['Music_Mania_Image_Name'],
			'alt'=>$row['Music_Mania_Image_Name']
		);
}
}

header('Content-type:application/json');
	echo json_encode($data);
?>
