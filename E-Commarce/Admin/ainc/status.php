<?php
include 'database.php';

$id = $_GET['id'];
$status = $_GET['status'];
$header_location = $_GET['location'];
$table_name= $_GET['table_name'];

$obj = new database;

$obj->update_status($id,$status,$table_name);

header('location:'.$header_location);



?>