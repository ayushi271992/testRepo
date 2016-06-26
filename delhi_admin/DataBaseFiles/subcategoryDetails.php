<?php
require_once '../database_connection.php';
$data = json_decode(file_get_contents("php://input"));
// Escaping special characters from submitting data & storing in new variables.
$name = mysqli_real_escape_string($conn,$data->SubCategoryName);
//$name="historical";
$cmd="SELECT * from `$name`;";
if(!mysqli_query($conn,$cmd))
{
	die(mysqli_error($conn));
}

if($result=mysqli_query($conn,$cmd))
{
	$rowcount=mysqli_num_rows($result);
}

$tablename="Historical";

$data=array();
if($rowcount>0)
{
while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
{
	//echo $row['Historical_Id'] ." ". $row['Historical_Image_Name'];
			$data[]=array(
			'historical_id'=>$row[$tablename.'_Id'],
			'historical_Image_Url'=>$row[$tablename.'_Image_Url'],
			'historical_Image_Name'=>$row[$tablename.'_Image_Name'],
			'historical_Desc'=>$row[$tablename.'_Description'],
			'historical_Metro'=>$row[$tablename.'_Nearest_Metro_Station'],
			'historical_to'=>$row[$tablename.'_Destination_To'],
			'historical_OpeningTime'=>$row[$tablename.'_Opening_Time'],
			'historical_ClosingTime'=>$row[$tablename.'_Closing_Time'],
			'historical_IndianFee'=>$row[$tablename.'_Indian_Entry_Fee'],
			'historical_ForeignerFee'=>$row[$tablename.'_Foreigner_Entry_Fee'],
			'historical_DaysClosed'=>$row[$tablename.'_Days_Closed'],
			'historical_Photography'=>$row[$tablename.'_Photography']

			//'category_name'=>$row['Category_name']
		);
}
}

header('Content-type:application/json');
	echo json_encode($data);

?>
