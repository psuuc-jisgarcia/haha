<?php

require 'connection.php';

$id=$_GET['id'];

$stmt="delete from products where id=$id";

$container=$conn->query($stmt);

echo 'DELETED';

?>