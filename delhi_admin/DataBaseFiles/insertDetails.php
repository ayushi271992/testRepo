<?php
// Including database connections
require_once 'database_connection.php';
// Fetching and decoding the inserted data
$data = json_decode(file_get_contents("php://input"));
// Escaping special characters from submitting data & storing in new variables.
$name = mysql_real_escape_string($data->category_name);

//   mysql_query("ALTER table categories_table AUTO_INCREMENT='".$row[0]."'");
//}
mysql_query("INSERT into categories_table (Category_name) VALUES ('".$name."')");
echo true;
?>