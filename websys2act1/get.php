
<?php
require 'connection.php';
$id=$_GET['id'];
$stmt="select * from products where id=$id";
$result=$conn->query($stmt);

while($row=$result->fetch_assoc()){
  
?>
Update
<input type="hidden" value="<?php echo $row["id"] ?>" id="id"> <br>
<input type="text" value="<?php echo $row["pro_code"] ?>" id="pc"> <br>
<input type="text" value="<?php echo $row["description"] ?>" id="desc"> <br>
<input type="text" value="<?php echo $row["price"] ?>" id="prc"><br>
<input type="text" value="<?php echo $row["quantity"] ?>" id="quanti"> <br>

<button type="button" onclick="updateProduct();">Update</button>

<?php
}
?>

