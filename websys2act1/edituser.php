<?php
require 'connection.php';
$id=$_POST['ids'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$gender=$_POST['gender'];
$bnumber=$_POST['bnumber'];
$bank=$_POST['bank'];

$stmt ="UPDATE users SET firstname='$fname', lastname='$lname', gender='$gender', bank=$bank,bank_number=$bnumber WHERE id=$id";
$container=$conn->query($stmt);
echo 'updated';
?>

