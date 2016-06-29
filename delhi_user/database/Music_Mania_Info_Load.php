<?php
include("Database_Connection.php");

$data = json_decode(file_get_contents("php://input"));
$name = mysqli_real_escape_string($conn,$data->Music_Mania_Image_Name1);

$sql="SELECT * from Music_Mania where Music_Mania_Image_Name='".$name."';";

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
			'Music_Mania_Id'=>$row['Music_Mania_Id'],
			'Music_Mania_Image_Name'=>$row['Music_Mania_Image_Name'],
			'Music_Mania_Image_Url'=>$row['Music_Mania_Image_Url'],
			'Music_Mania_Description'=>$row['Music_Mania_Description'],
			'Music_Mania_Nearest_Metro_Station'=>$row['Music_Mania_Nearest_Metro_Station'],
			'Music_Mania_Destination_To'=>$row['Music_Mania_Destination_To'],
			'Music_Mania_Opening_Time'=>$row['Music_Mania_Opening_Time'],
			'Music_Mania_Closing_Time'=>$row['Music_Mania_Closing_Time'],
			'Music_Mania_Cost'=>$row['Music_Mania_Cost'],
			'Music_Mania_Days_Closed'=>$row['Music_Mania_Days_Closed']
			);
	}
}

header('Content-type:application/json');
	echo json_encode($data);
?>
