
<?php
require 'connection.php';
$id=$_GET['id'];
$stmt="select * from users where id=$id";
$result=$conn->query($stmt);

while($row=$result->fetch_assoc()){
  
?>
Update
<input type="hidden" value="<?php echo $row["id"] ?>" id="id"> <br>

<input type="text" value="<?php echo $row["firstname"] ?>" id="fname"> <br>
<input type="text" value="<?php echo $row["lastname"] ?>" id="lname"> <br>
<input type="text" value="<?php echo $row["gender"] ?>" id="gender"><br>
<input type="text" value="<?php echo $row["bank"] ?>" id="bank"><br>
<input type="text" value="<?php echo $row["bank_number"] ?>" id="bank_number"><br>
<input type="text" value="<?php echo $row["date_created"] ?>" id="date_created"><br>

<button type="button" onclick="editUser();">Update</button>
<?php
}
?>



