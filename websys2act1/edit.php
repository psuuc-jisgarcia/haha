<?php
require 'connection.php';

$id = $_POST['ids'];
$code = $_POST['pc'];
$desc = $_POST['desc'];
$price = $_POST['price'];
$qty = $_POST['qty'];

$stmt = $conn->prepare("UPDATE products SET pro_code=?, description=?, price=?, quantity=? WHERE id=?");

$stmt->bind_param("ssdii", $code, $desc, $price, $qty, $id);

if ($stmt->execute()) {
    echo 'Updated successfully';
} else {
    echo 'Error: ' . $stmt->error;
}

$stmt->close();
$conn->close();
?>
