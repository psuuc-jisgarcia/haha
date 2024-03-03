<?php
require 'conn.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve data from the POST request
    $thumbname = $_POST['thumbname'];
    $imagePath = $_POST['image_path'];
    $description = $_POST['description'];
    $newExpiration = $_POST['newExpiration']; // Make sure this matches the form field name

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // SQL query to update the expiration date and time using prepared statement
    $sql = "UPDATE thumbnails SET expiration = ? WHERE image_path = ? AND thumbname = ? AND description = ?";
    $stmt = $conn->prepare($sql);

    // Bind parameters
    $stmt->bind_param("ssss", $newExpiration, $imagePath, $thumbname, $description);

    // Execute the statement
    if ($stmt->execute() === TRUE) {
        // Update successful
        header("Location: campaign.php");
        exit();
    } else {
        // Error in update
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close statement and connection
    $stmt->close();
    $conn->close();
}
?>
