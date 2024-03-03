<?php
include('config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $productCode = $_POST['productCode'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];

    // Insert into database
    $sql = "INSERT INTO products (pro_code, description, price, quantity, date_created) VALUES ('$productCode', '$description', '$price', '$quantity', NOW())";

    if (mysqli_query($conn, $sql)) {
        echo "Product added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>
