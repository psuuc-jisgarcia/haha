<?php
$mysqli = new mysqli("localhost", "root", "", "lab_activity_5");
if($mysqli->connect_error) {
  exit('Could not connect');
}

$sql = "SELECT id, thumbname, campus, expiration FROM thumbnails WHERE id = ?";

$stmt = $mysqli->prepare($sql);
$stmt->bind_param("s", $_GET['q']);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($id, $thumbname, $campus, $expiration);
$stmt->fetch();
$stmt->close();

echo "<div class='container mt-5'>";
echo "<table class='table table-bordered'>";
echo "<thead class='thead-dark'>";
echo "<tr>";
echo "<th>Event</th>";
echo "<td>" . $thumbname . "</td>";
echo "<th>Campus</th>";
echo "<td>" . $campus . "</td>";
echo "<th>Expiration</th>";
echo "<td>" . $expiration . "</td>";
echo "</tr>";
echo "</thead>";
echo "</table>";
echo "</div>";
?>