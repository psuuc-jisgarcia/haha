<?php
require 'conn.php';
$newCount2 = $_POST['newCount2'];

$showsql = "SELECT * FROM transactions LIMIT $newCount2";
$resultshow = mysqli_query($conn, $showsql);

if (mysqli_num_rows($resultshow) > 0) {
    echo "<ul style='list-style-type: none; padding: 0; text-align: center;'>";

    while ($row = mysqli_fetch_assoc($resultshow)) {
        echo "<li style='margin-bottom: 15px;'>";
        echo "<strong>Name:</strong> " . $row['firstname'] . " " . $row['lastname'] . "<br>";
        echo "<strong>Amount:</strong> " . $row['amount'] . "<br>";
        echo "<strong>Event:</strong> " . $row['thumbname'];
        echo "</li>";
        echo "<hr>";
    }

    echo "</ul>";
} else {
    echo "There are no Approved Events!";
}
?>
