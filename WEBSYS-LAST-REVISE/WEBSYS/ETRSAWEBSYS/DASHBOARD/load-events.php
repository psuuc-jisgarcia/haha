<?php
require 'conn.php';
$newCount = $_POST['newCount'];

$showsql = "SELECT * FROM thumbnails WHERE status = 'Approved' LIMIT $newCount";
$resultshow = mysqli_query($conn, $showsql);

if (mysqli_num_rows($resultshow) > 0) {
    echo "<div style='text-align: center;'>";
    echo "<table border='1' style='margin: auto;'>";
    echo "<tr><th>Event</th><th>Description</th><th>Campus</th><th>Expiration</th></tr>";

    while ($row = mysqli_fetch_assoc($resultshow)) {
        echo "<tr>";
        echo "<td>" . $row['thumbname'] . "</td>";
        echo "<td>" . $row['description'] . "</td>";
        echo "<td>" . $row['campus'] . "</td>";
        echo "<td>" . $row['expiration'] . "</td>";
        echo "</tr>";
    }

    echo "</table>";
    echo "</div>";
} else {
    echo "There are no Approved Events!";
}
?>
