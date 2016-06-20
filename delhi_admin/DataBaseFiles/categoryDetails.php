<?php
require_once 'database_connection.php';
$sql=mysql_query("Select * from categories_table");
if(mysql_num_rows($sql))
{

	$data=array();
	while($row=mysql_fetch_array($sql))
	{
		$data[]=array(
			'category_id'=>$row['Category_id'],
			'category_name'=>$row['Category_name']
		);
	
	}

header('Content-type:application/json');
	echo json_encode($data);
}
?>
