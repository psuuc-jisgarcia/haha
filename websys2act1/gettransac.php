
<?php
require 'connection.php';
$id=$_GET['id'];
$stmt="select * from transaction where id=$id";
$result=$conn->query($stmt);

while($row=$result->fetch_assoc()){

?>
Update
<input type="hidden" value="<?php echo $row["id"] ?>" id="id"> <br>

<input type="text" value="<?php echo $row["invoice_no"] ?>" id="iv"> <br>
<input type="text" value="<?php echo $row["user_id"] ?>" id="ui"> <br>
<input type="text" value="<?php echo $row["pro_id"] ?>" id="pi"><br>
<input type="text" value="<?php echo $row["quantity"] ?>" id="qty"><br>
<input type="text" value="<?php echo $row["price"] ?>" id="price"><br>
<input type="text" value="<?php echo $row["date_created"] ?>" id="date_created"><br>

<button type="button" onclick="editUser();">Update</button>
<?php
}
?>



