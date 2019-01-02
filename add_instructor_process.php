<?php

$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';

$conn = @mysqli_connect($db_host, $db_user, '', 'utshab_training_center');

$name=$_POST['name'];


$query="insert into instructor(name) value('$name')";
$query_run=mysqli_query($conn,$query);
?>