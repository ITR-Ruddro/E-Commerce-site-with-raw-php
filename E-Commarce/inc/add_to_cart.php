<?php 
 include 'ainc/database.php';
 $table_name = 'cart_details';

 $obj = new database();
 $result = $obj->show($table_name);



?>