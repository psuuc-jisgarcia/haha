<?php
$host = 'localhost';
$user = 'root'; 
$password = ''; 
$database = '3binv';
$conn = mysqli_connect($host,$user,$password,$database)  or die('db error connecting:'.mysqli_connect_error());
$conn->set_charset('utf8');

if(!isset($_SESSION)) 
{ 
    session_start(); 
} 
?>