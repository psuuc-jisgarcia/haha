<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Management</title>
</head>
<body>
    <h2>Add Product</h2>
    <form id="addProductForm">
        <input type="hidden" name="action" value="add">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name"><br>
        <label for="description">Description:</label><br>
        <textarea id="description" name="description"></textarea><br>
        <label for="price">Price:</label><br>
        <input type="text" id="price" name="price"><br>
        <label for="quantity">Quantity:</label><br>
        <input type="text" id="quantity" name="quantity"><br>
        <button type="submit">Add Product</button>
    </form>

    <h2>Products</h2>
    <div id="productList">
        <!-- Product list will be displayed here -->
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
    $(document).ready(function() {
        // Load products on page load
        loadProducts();

        // Add product
        $('#addProductForm').on('submit', function(event) {
            event.preventDefault();
            $.ajax({
                type: 'POST',
                url: 'process.php',
                data: $(this).serialize(),
                success: function(response) {
                    alert(response);
                    loadProducts();
                }
            });
        });

        // Function to load products
        function loadProducts() {
            $.ajax({
                type: 'GET',
                url: 'process.php',
                data: { action: 'list' },
                success: function(response) {
                    $('#productList').html(response);
                }
            });
        }
    });
</script>

</body>
</html>

<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ass1";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle CRUD operations
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $action = $_POST['action'];

    // Add product
    if ($action == "add") {
        $name = $_POST['name'];
        $description = $_POST['description'];
        $price = $_POST['price'];
        $quantity = $_POST['quantity'];

        $sql = "INSERT INTO Products (name, description, price, quantity) VALUES ('$name', '$description', $price, $quantity)";
        if ($conn->query($sql) === TRUE) {
            echo "Product added successfully";
        } else {
            echo "Error adding product: " . $conn->error;
        }
    }
}

// List products
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['action']) && $_GET['action'] == 'list') {
    $sql = "SELECT * FROM Products";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "ID: " . $row["id"]. " - Name: " . $row["name"]. " - Price: " . $row["price"]. "<br>";
        }
    } else {
        echo "0 results";
    }
}

// Close database connection
$conn->close();
?>
