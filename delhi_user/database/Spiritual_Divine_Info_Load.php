<?php
include("Database_Connection.php");

$data = json_decode(file_get_contents("php://input"));
$name = mysqli_real_escape_string($conn,$data->Spiritual_Divine_Image_Name1);

$sql="SELECT * from Spiritual_Divine where Spiritual_Divine_Image_Name='".$name."';";

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
			'Spiritual_Divine_Id'=>$row['Spiritual_Divine_Id'],
			'Spiritual_Divine_Image_Name'=>$row['Spiritual_Divine_Image_Name'],
			'Spiritual_Divine_Image_Url'=>$row['Spiritual_Divine_Image_Url'],
			'Spiritual_Divine_Description'=>$row['Spiritual_Divine_Description'],
			'Spiritual_Divine_Nearest_Metro_Station'=>$row['Spiritual_Divine_Nearest_Metro_Station'],
			'Spiritual_Divine_Destination_To'=>$row['Spiritual_Divine_Destination_To'],
			'Spiritual_Divine_Opening_Time'=>$row['Spiritual_Divine_Opening_Time'],
			'Spiritual_Divine_Closing_Time'=>$row['Spiritual_Divine_Closing_Time'],
			'Spiritual_Divine_Cost'=>$row['Spiritual_Divine_Cost'],
			'Spiritual_Divine_Days_Closed'=>$row['Spiritual_Divine_Days_Closed']
			);
	}
}

header('Content-type:application/json');
	echo json_encode($data);
?>
