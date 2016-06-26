
<?php
include("../database_connection.php");

$cmd="select * from categories_table;";
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
			'category_id'=>$row['Category_id'],
			'category_name'=>$row['Category_name']
		);
}
}

header('Content-type:application/json');
	echo json_encode($data);
?>