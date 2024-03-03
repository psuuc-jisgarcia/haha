<?php

require 'connection.php';

$id=$_GET['id'];

$stmt="delete from users where id=$id";

$container=$conn->query($stmt);

echo 'DELETED';

?>