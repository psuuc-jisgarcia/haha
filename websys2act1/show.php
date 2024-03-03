<script> 
function GetProd(value){
                   
               
             $.get("get.php?id="+value,function(data,status){
              $("#edit").html(data);
            //   alert(value);
             })
            }
            function shows(){
                var ids = $(".input").val();
                var minPrice = $("#minPrice").val();
                var maxPrice = $("#maxPrice").val();
                var startDate = $("#startDate").val();
                var endDate = $("#endDate").val();

                $("#div1").load("show.php?desc=" + ids + "&code=" + ids + "&price=" + ids + "&qty=" + ids + "&minPrice=" + minPrice + "&maxPrice=" + maxPrice + "&startDate=" + startDate + "&endDate=" + endDate);
            }
       // Function for editing a product
function editProduct(id) {
    $.get("get.php?id=" + id, function(data, status) {
        $("#edit").html(data);
    });
}

// Function for updating a product
function updateProduct() {
    var id = $("#id").val();
    var pc = $("#pc").val();
    var desc = $("#desc").val();
    var price = $("#prc").val();
    var qty = $("#quanti").val();

    $.post("edit.php", {
        ids: id,
        pc: pc,
        desc: desc,
        price: price,
        qty: qty
    }, function(response) {
        alert(response);
        console.log(response);
        shows(); // Assuming shows() is a function that reloads or updates your data
    });
}


function Delete(value){
                   
               
                   $.get("delete.php?id="+value,function(response){
                    alert(response);
                  //   alert(value);
                  shows();
                   })
                  }
          
            </script>
        
<table style="width: 100%;" border="1">
<tr>
<th>code</th>
        <th>code</th>
        <th>desc</th>
        <th>price</th>
        <th>qty</th>
        <th>date</th>
        <th>Action</th>
    </tr>

    

    <?php
require 'connection.php';

$filter = "";
$desc = $_GET['desc'];
$code = $_GET['code'];
$price = $_GET['price'];
$minPrice = isset($_GET['minPrice1']) ? $_GET['minPrice1'] : '';
$maxPrice = isset($_GET['maxPrice1']) ? $_GET['maxPrice1'] : '';
$qty = $_GET['qty'];
$startDate = isset($_GET['startDate']) ? $_GET['startDate'] : '';
$endDate = isset($_GET['endDate']) ? $_GET['endDate'] : '';

// with search
$filter .= " AND (description LIKE '%$desc%' OR pro_code LIKE '%$code%' OR price LIKE '%$price%' OR quantity LIKE '%$qty%')";

// Add price range filter if both minPrice and maxPrice are set
if ($minPrice !== '' && $maxPrice !== '') {
    $filter .= " AND price BETWEEN $minPrice AND $maxPrice";
}

// Add date range filter if both startDate and endDate are set
if (!empty($startDate) && !empty($endDate)) {
    $filter .= " AND date_created BETWEEN '$startDate' AND '$endDate'";
}

$stmt = "SELECT * FROM products WHERE 1=1 $filter";
$result = $conn->query($stmt);

while ($row = $result->fetch_assoc()) {
    ?>
    <tr>
    <td><?php echo $row["id"] ?></td>
        <td><?php echo $row["pro_code"] ?></td>
        <td><?php echo $row["description"] ?></td>
        <td><?php echo $row["price"] ?></td>
        <td><?php echo $row["quantity"] ?></td>
        <td><?php echo $row["date_created"] ?></td>
        <td><a href="#" onclick="GetProd(<?php echo $row['id'] ?>);">view</a> <a href="#" onclick="Delete(<?php echo $row['id'] ?>);">Delete</a></td>
    </tr>
    <?php
}

$conn->close();
?>

</table>