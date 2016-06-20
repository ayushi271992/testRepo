<?php
// Including database connections
require_once 'database_connection.php';
// Fetching and decoding the inserted data
$data = json_decode(file_get_contents("php://input"));
// Escaping special characters from submitting data & storing in new variables.
$name = mysql_real_escape_string($data->category_name);
//$email = mysqli_real_escape_string($con, $data->email);
//$gender = mysqli_real_escape_string($con, $data->gender);
//$address = mysqli_real_escape_string($con, $data->address);

// mysqli insert query
//$result=mysql_query("SELECT MAX(Category_id) FROM categories_table;");
//mysql_query("ALTER table categories_table AUTO_INCREMENT='".$result."'");
//while ($row = mysql_fetch_array($result, MYSQL_NUM)) {
//   mysql_query("ALTER table categories_table AUTO_INCREMENT='".$row[0]."'");
//}
mysql_query("INSERT into categories_table (Category_name) VALUES ('".$name."')");
echo true;
?>