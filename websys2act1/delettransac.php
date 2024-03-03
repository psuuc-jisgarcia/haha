<?php

require 'connection.php';

$id=$_GET['id'];

$stmt="delete from transaction where id=$id";

$container=$conn->query($stmt);

echo 'DELETED';

?>