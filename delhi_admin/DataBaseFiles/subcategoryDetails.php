<?php
require_once '../database_connection.php';
$data = json_decode(file_get_contents("php://input"));
// Escaping special characters from submitting data & storing in new variables.
$tablename = mysqli_real_escape_string($conn,$data->SubCategoryName);
//$tablename="Heritage_Seeker";
$cmd="SELECT * from `$tablename`;";
if(!mysqli_query($conn,$cmd))
{
	die(mysqli_error($conn));
}

if($result=mysqli_query($conn,$cmd))
{
	$rowcount=mysqli_num_rows($result);
}

$data=array();
if($rowcount>0)
{
while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
{
	//echo $row['Historical_Id'] ." ". $row['Historical_Image_Name'];
			$data[]=array(
			'id'=>$row[$tablename.'_Id'],
			'Image_Url'=>$row[$tablename.'_Image_Url'],
			'Image_Name'=>$row[$tablename.'_Image_Name'],
			'Desc'=>$row[$tablename.'_Description'],
			'Metro'=>$row[$tablename.'_Nearest_Metro_Station'],
			'Destination_to'=>$row[$tablename.'_Destination_To'],
			'OpeningTime'=>$row[$tablename.'_Opening_Time'],
			'ClosingTime'=>$row[$tablename.'_Closing_Time'],
			'Cost'=>$row[$tablename.'_Cost'],
			'DaysClosed'=>$row[$tablename.'_Days_Closed']
			//'category_name'=>$row['Category_name']
		);
}
}

header('Content-type:application/json');
	echo json_encode($data);

?>
