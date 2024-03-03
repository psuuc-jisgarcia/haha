<?php
include('config.php');

$id = $_GET['id'];
$sql_ini = "DELETE from products where id=$id";    
$result_ini = mysqli_query($conn,$sql_ini) or die("SQL User Fetch error".mysqli_error($conn)); 

?>
