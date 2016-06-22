<?php
// Including database connections
require_once 'database_connection.php';
// Fetching and decoding the inserted data
$data = json_decode(file_get_contents("php://input"));
// Escaping special characters from submitting data & storing in new variables.
$id=mysql_real_escape_string($data->category_id);
$name = mysql_real_escape_string($data->category_name);


// echo '$name'
mysql_query("UPDATE categories_table set Category_name='".$name."' where Category_id=$id;");
echo true;
?>