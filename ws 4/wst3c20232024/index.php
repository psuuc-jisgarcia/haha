<!DOCTYPE html>
<html>

<head>
    <script src="js/jquery-3.3.1.js"></script>
    <script src="js/main.js"></script>
    <script>
        function get1() {
            $("#loadproducts");
            $.get("loadproducts1.php", function(data, status) {
                $("#loadproducts").html(data);
            });
        }     

        $(document).ready(function() {
            $("button").click(function() {
                var productCode = $("#product").val();
                var description = $("#description").val();
                var price = $("#price").val();
                var quantity = $("#quantity").val();
                $.post("add_product.php", {
                    productCode: productCode,
                    description: description,
                    price: price,
                    quantity: quantity
                }, function(data, status) {
                    alert("Data: " + data + "\nStatus: " + status);
                });
            });
        });
        $(document).ready(function() {
            $("button").click(function() {
                var firstName = $("#firstname").val();
                var lastname = $("#lastname").val();
                var gender = $("#gender").val();
                var bank = $("#bank").val();
                var bank_number = $("#bank_number").val();
                $.post("add_user.php", {
                    firstName: firstname,
                    lastname: lastname,
                    gender: gender,
                    bank: bank,
                    bank_number: bank_number
                }, function(data, status) {
                    alert("Data: " + data + "\nStatus: " + status);
                });
            });
        });
    </script>
</head>

<body>
    <form action="" method="get">
	<h1>Products</h1>
        <input type="text" name="productCode" id="product" placeholder="Product Code">
        <input type="text" name="description" id="description" placeholder="Description">
        <input type="text" name="price" id="price" placeholder="Price">
        <input type="text" name="quantity" id="quantity" placeholder="Quantity">
        <button type="button">Add</button>
    </form>
    <br>
	<h3>Search</h3>
    <form action="loadproducts1.php" method="get">
    <input type="text" placeholder="product code" id="productcode" onfocusout="searchProducts();" onkeyup="searchProducts();"><span id="errorf" style="color:red"></span>
    <input type="text" placeholder="description" id="desc" onfocusout="searchProducts();" onkeyup="searchProducts();"><span id="errorf" style="color:red"></span>
	<input type="text" placeholder="price" id="pricecode" onfocusout="searchProducts();" onkeyup="searchProducts();"><span id="errorf" style="color:red"></span>
	<input type="text" placeholder="quantity" id="quantitycode" onfocusout="searchProducts();" onkeyup="searchProducts();"><span id="errorf" style="color:red"></span><br><br>

    </form>
	

    <div onclick="get1();" style="cursor:pointer;border:1px solid green; background-color: green;color:white; width:200px; padding:10px;">
    Show Table
    </div>
    <div id="getProducts"></div>
    <div id="loadproducts"></div>

    <form action="" method="get">
	<h1>Users</h1>
        <input type="text" name="firstName" id="firstname" placeholder="First Name">
        <input type="text" name="lastname" id="lastname" placeholder="Last Name">
        <input type="text" name="gender" id="gender" placeholder="Gender">
        <input type="text" name="bank" id="bank" placeholder="Bank">
        <input type="text" name="bank_number" id="bank_number" placeholder="Bank Number">
        <button type="button">Add</button>
        
    </form>
</body>

</html>
