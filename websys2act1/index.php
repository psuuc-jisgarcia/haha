<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    


    User Id
    <input type="number" id="userid"> <br>
    Prod Id
    <input type="number" id="proid"> <br>
    Quantity
    <input type="number" id="qty"> <br>
    Price
    <input type="number" id="price"> <br>
    <button type="button" id="button">Add</button> <br>
    <div id="edit3"></div>

    <!-- Add input fields for searching, filtering by price range, and selecting date range -->
    <input type="text" id="search1" placeholder="Search ">
    <br>
    Filter Price Range <input type="number" id="minPrice"> - <input type="number" id="maxPrice">
    <button type="button" id="range">Price range</button>
    <br>
    Start Date <input type="date" id="startDate2"> - End Date <input type="date" id="endDate2">
    <br>


    <br>
    <br>
    <div id="div3"></div>
    <br>
    <br>
    <input type="text" placeholder="Search product" id="textInput" class="input"> <br>
    Filter Price Range <input type="number" id="minPrice1"> - <input type="number" id="maxPrice1"> <button type="button" id="ranges">Price range</button>
    <br>
    Start Date <input type="date" id="startDate"> - End Date <input type="date" id="endDate">
    transaction <br>

    Products <br>
    <div id="edit"></div>
    <div id="div1"></div>
    <br>
    <br>
    User
    <input type="text" placeholder="Search user" id="textInput1" class="input1">
    Start Date <input type="date" id="startDate1"> - End Date <input type="date" id="endDate1">
    <div id="edit1"></div>
    <div id="div2"></div>

    <script>
        $(function() {
            $("#textInput").keyup(function() {
                shows();
            });
            $("#startDate, #endDate").on("change", function() {
                shows();
            });
            $("#textInput1").keyup(function() {
                showUser();
            });
            $("#startDate1, #endDate1").on("change", function() {
                showUser();
            });
            $("#ranges").click(function() {
                shows();
            });


            shows();
            showUser();

            function shows() {
                var ids = $(".input").val();
                var minPrice = $("#minPrice1").val();
                var maxPrice = $("#maxPrice1").val();
                var startDate = $("#startDate").val();
                var endDate = $("#endDate").val();

                // Append the minPrice and maxPrice parameters to the URL
                $("#div1").load("show.php?desc=" + ids + "&code=" + ids + "&price=" + ids + "&qty=" + ids + "&minPrice1=" + minPrice + "&maxPrice1=" + maxPrice + "&startDate=" + startDate + "&endDate=" + endDate);
            }



            function showUser() {
                var search = $("#textInput1").val();
                var startDate = $("#startDate1").val();
                var endDate = $("#endDate1").val();

                $("#div2").load("showuser.php?fname=" + search + "&lname=" + search + "&gender=" + search + "&bank=" + search + "&bnumber=" + search + "&startDate1=" + startDate + "&endDate1=" + endDate);
            }
        });
    </script>
    <script>
        $(function() {
            function showtransac() {
                var search = $("#search1").val();
                var minPrice = $("#minPrice").val();
                var maxPrice = $("#maxPrice").val();
                var startDate = $("#startDate2").val();
                var endDate = $("#endDate2").val();

                $("#div3").load("showtransac.php?search=" + search + "&minPrice=" + minPrice + "&maxPrice=" + maxPrice + "&startDate=" + startDate + "&endDate=" + endDate);
            }
            $("#button").click(function() {
                var userId = $("#userid").val();
                var productId = $("#proid").val();
                var quantity = $("#qty").val();
                var price = $("#price").val();


                $.post("addtransaction.php", {
                    userId: userId,
                    productId: productId,
                    quantity: quantity,
                    price: price
                }, function(response) {
                    alert(response);
                    shows();
                    showtransac();
                });

            });
            $(function() {
                // Function to handle keyup events for search inputs
                $("#search1").keyup(function() {
                    showtransac();
                });

                // Function to handle change events for price range inputs
                $("#minPrice, #maxPrice").on("change", function() {
                    showtransac();
                });

                // Function to handle change events for date range inputs
                // $("#startDate2, #endDate2").on("change", function () {
                //     showtransac();
                // });

                // Function to execute the search
                $("#range").click(function() {
                    showtransac();
                });
                showtransac();
                // Function to load transaction data

            });

        });
    </script>

</body>

</html>