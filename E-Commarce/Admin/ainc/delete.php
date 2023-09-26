<?php
include 'database.php';

$id = $_GET['id'];
$header_location = $_GET['header_location'];
$table_name = $_GET['table_name'];

$obj = new database;



$obj->delete($id,$table_name);

header('location:'.$header_location);


?>