<?php
require 'connection.php'; // Include your database connection file

// Assume you have variables like $_POST['userId'], $_POST['productId'], $_POST['quantity'], and $_POST['price'] set from your JavaScript

// Generate an invoice number (you can customize the logic as needed)
$invoiceNumber = 'INV' . date('YmdHis');

// Retrieve values from POST request
$userId = $_POST['userId'];
$productId = $_POST['productId'];
$quantity = $_POST['quantity'];
$price = $_POST['price'];

// Compute total price
$totalPrice = $quantity * $price;

// Start a database transaction
$conn->begin_transaction();

try {
    // Insert into transaction table
    $insertTransactionQuery = "INSERT INTO transaction (invoice_no, user_id, pro_id, quantity, price, date_created) VALUES (?, ?, ?, ?, ?, NOW())";
    $insertTransactionStmt = $conn->prepare($insertTransactionQuery);
    $insertTransactionStmt->bind_param("siids", $invoiceNumber, $userId, $productId, $quantity, $totalPrice);
    $insertTransactionStmt->execute();

    // Update product quantity in the products table
    $updateProductQuery = "UPDATE products SET quantity = quantity - ? WHERE id = ?";
    $updateProductStmt = $conn->prepare($updateProductQuery);
    $updateProductStmt->bind_param("ii", $quantity, $productId);
    $updateProductStmt->execute();

    // Commit the transaction
    $conn->commit();

    echo "Successful. Invoice Number: $invoiceNumber";
 
} catch (Exception $e) {
    $conn->rollback();
    echo "Transaction failed: " . $e->getMessage();
}

// Close the prepared statements
$insertTransactionStmt->close();
$updateProductStmt->close();

// Close the database connection
$conn->close();
?>
