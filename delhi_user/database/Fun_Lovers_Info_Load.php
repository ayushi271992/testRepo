<?php
include("Database_Connection.php");

$data = json_decode(file_get_contents("php://input"));
$name = mysqli_real_escape_string($conn,$data->Fun_Lovers_Image_Name1);

$sql="SELECT * from Fun_Lovers where Fun_Lovers_Image_Name='".$name."';";

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
			'Fun_Lovers_Id'=>$row['Fun_Lovers_Id'],
			'Fun_Lovers_Image_Name'=>$row['Fun_Lovers_Image_Name'],
			'Fun_Lovers_Image_Url1'=>$row['Fun_Lovers_Image_Url1'],
			'Fun_Lovers_Image_Url2'=>$row['Fun_Lovers_Image_Url2'],
			'Fun_Lovers_Image_Url3'=>$row['Fun_Lovers_Image_Url3'],
			'Fun_Lovers_Description'=>$row['Fun_Lovers_Description'],
			'Fun_Lovers_Nearest_Metro_Station'=>$row['Fun_Lovers_Nearest_Metro_Station'],
			'Fun_Lovers_Destination_To'=>$row['Fun_Lovers_Destination_To'],
			'Fun_Lovers_Opening_Time'=>$row['Fun_Lovers_Opening_Time'],
			'Fun_Lovers_Closing_Time'=>$row['Fun_Lovers_Closing_Time'],
			'Fun_Lovers_Cost'=>$row['Fun_Lovers_Cost'],
			'Fun_Lovers_Days_Closed'=>$row['Fun_Lovers_Days_Closed']
			);
	}
}

header('Content-type:application/json');
	echo json_encode($data);
?>
