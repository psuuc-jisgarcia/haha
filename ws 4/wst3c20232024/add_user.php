<?php
include('config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $firstName = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $gender = $_POST['gender'];
    $bank = $_POST['bank'];
    $bank_number = $_POST['bank_number'];

    // Insert into database
    $sql = "INSERT INTO users (firstname, lastname, gender, bank, bank_number) VALUES ('$productCode', '$description', '$price', '$quantity', NOW())";

    if (mysqli_query($conn, $sql)) {
        echo "Product added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>
