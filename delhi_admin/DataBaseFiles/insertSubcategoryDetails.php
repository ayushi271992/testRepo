<?php
require_once '../database_connection.php';
$data = json_decode(file_get_contents("php://input"));
// Escaping special characters from submitting data & storing in new variables.
$tablename = mysqli_real_escape_string($conn,$data->subcategoryName);
//$tablename="Heritage_Seeker";
$name= mysqli_real_escape_string($conn,$data->name);
$url1= mysqli_real_escape_string($conn,$data->url1);
$url2= mysqli_real_escape_string($conn,$data->url2);
$url3= mysqli_real_escape_string($conn,$data->url3);
$desc= mysqli_real_escape_string($conn,$data->desc);
$metro= mysqli_real_escape_string($conn,$data->metro);
$destination_to= mysqli_real_escape_string($conn,$data->destination_To);
$openingTime= mysqli_real_escape_string($conn,$data->opening_time);
$closingTime= mysqli_real_escape_string($conn,$data->closing_time);
$cost= mysqli_real_escape_string($conn,$data->cost);
$daysClosed= mysqli_real_escape_string($conn,$data->daysClosed);
// //$name="historical";
//$sql="INSERT into `$tablename` (".$tablename."_Image_Name) VALUES('".$name."');";

 $sql="INSERT into `$tablename` (".$tablename."_Image_Url1,".$tablename."_Image_Url2,".$tablename."_Image_Url3,".$tablename."_Image_Name,".$tablename."_Description,".$tablename."_Nearest_Metro_Station,".$tablename."_Destination_To,".$tablename."_Opening_Time,".$tablename."_Closing_Time,".$tablename."_Cost,".$tablename."_Days_Closed) VALUES ('".$url1."','".$url2."','".$url3."','".$name."','".$desc."','".$metro."','".$destination_to."','".$openingTime."','".$closingTime."','".$cost."','".$daysClosed."')";
 if (!mysqli_query($conn,$sql)) {
  die('Error: ' . mysqli_error($conn));
  }

?>