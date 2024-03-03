<?php
include('config.php');

$id = $_POST['ipc'];
$pcode = $_POST['pc'];

$sql_ini = "UPDATE products SET pro_code='$pcode' where id=$id";    
$result_ini = mysqli_query($conn,$sql_ini) or die("SQL User Fetch error".mysqli_error($conn)); 

?>
