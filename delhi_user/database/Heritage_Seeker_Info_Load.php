<?php
include("Database_Connection.php");

$data = json_decode(file_get_contents("php://input"));
$name = mysqli_real_escape_string($conn,$data->Heritage_Seeker_Image_Name1);

$sql="SELECT * from Heritage_Seeker where Heritage_Seeker_Image_Name='".$name."';";

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
			'Heritage_Seeker_Id'=>$row['Heritage_Seeker_Id'],
			'Heritage_Seeker_Image_Name'=>$row['Heritage_Seeker_Image_Name'],
			'Heritage_Seeker_Image_Url1'=>$row['Heritage_Seeker_Image_Url1'],
			'Heritage_Seeker_Image_Url2'=>$row['Heritage_Seeker_Image_Url2'],
			'Heritage_Seeker_Image_Url3'=>$row['Heritage_Seeker_Image_Url3'],
			'Heritage_Seeker_Description'=>$row['Heritage_Seeker_Description'],
			'Heritage_Seeker_Nearest_Metro_Station'=>$row['Heritage_Seeker_Nearest_Metro_Station'],
			'Heritage_Seeker_Destination_To'=>$row['Heritage_Seeker_Destination_To'],
			'Heritage_Seeker_Opening_Time'=>$row['Heritage_Seeker_Opening_Time'],
			'Heritage_Seeker_Closing_Time'=>$row['Heritage_Seeker_Closing_Time'],
			'Heritage_Seeker_Cost'=>$row['Heritage_Seeker_Cost'],
			'Heritage_Seeker_Days_Closed'=>$row['Heritage_Seeker_Days_Closed']
			);
	}
}

header('Content-type:application/json');
	echo json_encode($data);
?>
