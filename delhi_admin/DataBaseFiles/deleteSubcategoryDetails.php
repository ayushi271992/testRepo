<?php

// Including database connections
include("../database_connection.php");

// Fetching and decoding the inserted data
$data = json_decode(file_get_contents("php://input"));
// Escaping special characters from submitting data & storing in new variables.
$tablename = mysqli_real_escape_string($conn,$data->subcategoryName);
$id=mysqli_real_escape_string($conn,$data->id);
//$name = mysqli_real_escape_string($conn,$data->category_name);

//   mysql_query("ALTER table categories_table AUTO_INCREMENT='".$row[0]."'");
//}
$sql="DELETE from `$tablename` where ".$tablename."_Id=$id;";

if (!mysqli_query($conn,$sql)) {
  die('Error: ' . mysqli_error($conn));
}

echo true;
?>