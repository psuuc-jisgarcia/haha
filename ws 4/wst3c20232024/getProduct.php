<?php
include('config.php');

$filter = "";
if (isset($_GET['id'])){
    $id = $_GET['id'];
}

$sql_ini = "SELECT * from products as a  where id=$id";    
$result_ini = mysqli_query($conn,$sql_ini) or die("SQL User Fetch error".mysqli_error($conn)); 
$rowcount_ini = mysqli_num_rows($result_ini);
if ($rowcount_ini>=1){                                        
    while($result_iniprod = mysqli_fetch_assoc($result_ini)){
        $result = (object) $result_iniprod;        
        $pc = $result->pro_code;
        //print_r($result_iniprod);
    }
}
?>
Product Code
<input type="hidden" name="id" id ="ipc" value="<?=$id?>"><br>
<input type="text" name="pcode"  id ="pc" value="<?=$pc?>"><br><br>
<input type="button" value="Update" onclick="updateRecord();">