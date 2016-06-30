<?php
include("Database_Connection.php");

$data = json_decode(file_get_contents("php://input"));
$name = mysqli_real_escape_string($conn,$data->Shopaholic_Image_Name1);

$sql="SELECT * from Shopaholic where Shopaholic_Image_Name='".$name."';";

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
			'Shopaholic_Id'=>$row['Shopaholic_Id'],
			'Shopaholic_Image_Name'=>$row['Shopaholic_Image_Name'],
			'Shopaholic_Image_Url1'=>$row['Shopaholic_Image_Url1'],
			'Shopaholic_Image_Url2'=>$row['Shopaholic_Image_Url2'],
			'Shopaholic_Image_Url3'=>$row['Shopaholic_Image_Url3'],
			'Shopaholic_Description'=>$row['Shopaholic_Description'],
			'Shopaholic_Nearest_Metro_Station'=>$row['Shopaholic_Nearest_Metro_Station'],
			'Shopaholic_Destination_To'=>$row['Shopaholic_Destination_To'],
			'Shopaholic_Opening_Time'=>$row['Shopaholic_Opening_Time'],
			'Shopaholic_Closing_Time'=>$row['Shopaholic_Closing_Time'],
			'Shopaholic_Cost'=>$row['Shopaholic_Cost'],
			'Shopaholic_Days_Closed'=>$row['Shopaholic_Days_Closed']
			);
	}
}

header('Content-type:application/json');
	echo json_encode($data);
?>
