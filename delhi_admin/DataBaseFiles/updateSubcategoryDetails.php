<?php
require_once '../database_connection.php';
$data = json_decode(file_get_contents("php://input"));
// Escaping special characters from submitting data & storing in new variables.
$tablename = mysqli_real_escape_string($conn,$data->subcategoryName);
//$tablename="Heritage_Seeker";
$id=mysqli_real_escape_string($conn,$data->id);
$name= mysqli_real_escape_string($conn,$data->name);
$url= mysqli_real_escape_string($conn,$data->url);
$desc= mysqli_real_escape_string($conn,$data->desc);
$metro= mysqli_real_escape_string($conn,$data->metro);
$destination_to= mysqli_real_escape_string($conn,$data->destination_To);
$openingTime= mysqli_real_escape_string($conn,$data->opening_time);
$closingTime= mysqli_real_escape_string($conn,$data->closing_time);
$cost= mysqli_real_escape_string($conn,$data->cost);
$daysClosed= mysqli_real_escape_string($conn,$data->daysClosed);
// //$name="historical";
//$sql="INSERT into `$tablename` (".$tablename."_Image_Name) VALUES('".$name."');";

 // $sql="INSERT into `$tablename` (".$tablename."_Image_Url,".$tablename."_Image_Name,".$tablename."_Description,".$tablename."_Nearest_Metro_Station,".$tablename."_Destination_To,".$tablename."_Opening_Time,".$tablename."_Closing_Time,".$tablename."_Cost,".$tablename."_Days_Closed) VALUES ('".$url."','".$name."','".$desc."','".$metro."','".$destination_to."','".$openingTime."','".$closingTime."','".$cost."','".$daysClosed."')";

$sql="UPDATE `$tablename` SET ".$tablename."_Image_Url='".$url."',".$tablename."_Image_Name='".$name."', ".$tablename."_Description='".$desc."',".$tablename."_Nearest_Metro_Station='".$metro."',".$tablename."_Destination_To='".$destination_to."',".$tablename."_Opening_Time='".$openingTime."',".$tablename."_Closing_Time='".$closingTime."',".$tablename."_Cost='".$cost."',".$tablename."_Days_Closed='".$daysClosed."' where ".$tablename."_Id=$id";
 if (!mysqli_query($conn,$sql)) {
  die('Error: ' . mysqli_error($conn));
  }

?>