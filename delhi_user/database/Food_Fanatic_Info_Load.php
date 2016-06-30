<?php
include("Database_Connection.php");

$data = json_decode(file_get_contents("php://input"));
$name = mysqli_real_escape_string($conn,$data->Food_Fanatic_Image_Name1);

$sql="SELECT * from Food_Fanatic where Food_Fanatic_Image_Name='".$name."';";

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
			'Food_Fanatic_Id'=>$row['Food_Fanatic_Id'],
			'Food_Fanatic_Image_Name'=>$row['Food_Fanatic_Image_Name'],
			'Food_Fanatic_Image_Url1'=>$row['Food_Fanatic_Image_Url1'],
			'Food_Fanatic_Image_Url2'=>$row['Food_Fanatic_Image_Url2'],
			'Food_Fanatic_Image_Url3'=>$row['Food_Fanatic_Image_Url3'],
			'Food_Fanatic_Description'=>$row['Food_Fanatic_Description'],
			'Food_Fanatic_Nearest_Metro_Station'=>$row['Food_Fanatic_Nearest_Metro_Station'],
			'Food_Fanatic_Destination_To'=>$row['Food_Fanatic_Destination_To'],
			'Food_Fanatic_Opening_Time'=>$row['Food_Fanatic_Opening_Time'],
			'Food_Fanatic_Closing_Time'=>$row['Food_Fanatic_Closing_Time'],
			'Food_Fanatic_Cost'=>$row['Food_Fanatic_Cost'],
			'Food_Fanatic_Days_Closed'=>$row['Food_Fanatic_Days_Closed']
			);
	}
}

header('Content-type:application/json');
	echo json_encode($data);
?>
