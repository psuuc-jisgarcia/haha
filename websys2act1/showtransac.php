<script>
    function GetTransac(value) {
        $.get("gettransac.php?id=" + value, function(data, status) {
            $("#edit3").html(data)
        });
    }

    function Deletetransac(value) {
        $.get("delettransac.php?id=" + value, function(response) {
            alert(response);
            showtransac();
        })
    }

    function showtransac() {
        var search = $("#search1").val();
        var minPrice = $("#minPrice").val();
        var maxPrice = $("#maxPrice").val();
        var startDate = $("#startDate2").val();
        var endDate = $("#endDate2").val();

        $("#div3").load("showtransac.php?search=" + search + "&minPrice=" + minPrice + "&maxPrice=" + maxPrice + "&startDate=" + startDate + "&endDate=" + endDate);
    }
</script>
<?php
require 'connection.php';

// Initialize variables to store filter values
$search = "";
$minPrice = "";
$maxPrice = "";
$startDate = "";
$endDate = "";

// Check if search query is provided
if (isset($_GET['search'])) {
    $search = $_GET['search'];
}

// Check if min and max prices are provided
if (isset($_GET['minPrice']) && isset($_GET['maxPrice'])) {
    $minPrice = $_GET['minPrice'];
    $maxPrice = $_GET['maxPrice'];
}

// Check if start and end dates are provided
if (isset($_GET['startDate']) && isset($_GET['endDate'])) {
    $startDate = $_GET['startDate'];
    $endDate = $_GET['endDate'];
}

// Build the SQL query based on the provided filters
$sql = "SELECT * FROM transaction WHERE 1=1";

// Add search filter to the SQL query
if (!empty($search)) {
    $sql .= " AND (invoice_no LIKE '%$search%' OR user_id LIKE '%$search%' OR pro_id LIKE '%$search%' OR quantity LIKE '%$search%' OR price LIKE '%$search%' OR date_created LIKE '%$search%')";
}

// Add price range filter to the SQL query
if (!empty($minPrice) && !empty($maxPrice)) {
    $sql .= " AND price BETWEEN $minPrice AND $maxPrice";
}

// Add date range filter to the SQL query
if (!empty($startDate) && !empty($endDate)) {
    $sql .= " AND date_created BETWEEN '$startDate' AND '$endDate'";
}

// Execute the SQL query
$result = $conn->query($sql);
?>
<div class="table-responsive">
    <table class="table table-bordered table-striped">
        <thead class="thead-dark">
            <tr>
                <th>Invoice Number</th>
                <th>User ID</th>
                <th>Prod ID</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Date</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = $result->fetch_assoc()) { ?>
                <tr>
                    <td><?php echo $row["invoice_no"] ?></td>
                    <td><?php echo $row["user_id"] ?></td>
                    <td><?php echo $row["pro_id"] ?></td>
                    <td><?php echo $row["quantity"] ?></td>
                    <td><?php echo $row["price"] ?></td>
                    <td><?php echo $row["date_created"] ?></td>
                    <td><button type="button" class="btn btn-danger" onclick="Deletetransac(<?php echo $row['id'] ?>);">Delete</button></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
