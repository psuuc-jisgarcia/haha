<script> 
function GetUser(value){
                   
               
             $.get("getuser.php?id="+value,function(data,status){
              $("#edit1").html(data);
            //   alert(value);
             })
            }
            function showUser(){
                var ids=$(".input1").val();
               // using get
            //   $.get("show.php?desc="+ids+"&code="+ids,function(data,status){
            //     $("#div1").html(data);
            //   });
              //using load
              //with search
            //   $("#div1").load("show.php?desc="+ids+"&code="+ids);
              $("#div2").load("showuser.php?fname="+ids);
            }
            

function editUser(){
    var id=$("#id").val();
    var fname=$("#fname").val();
    var lname=$("#lname").val();
    var gender=$("#gender").val();
    var bank=$("#bank").val();
    var bnumber=$("#bank_number").val();
   
    $.post("edituser.php",{
 ids:id,
fname:fname,
lname:lname,
 gender:gender,
 bank:bank,
 bnumber,bnumber
    },function(response){
alert(response);
showUser();
    });
}
function DeleteUser(value){
                   
               
                   $.get("deleteuser.php?id="+value,function(response){
                    alert(response);
                  //   alert(value);
                  showUser();
                   })
                  }
          
            </script>
        
<table style="width: 100%;" border="1">
<tr><th>id</th>
        <th>firstname</th>
        <th>lastname</th>
        <th>gender</th>
        <th>bank</th>
        <th>bank_number</th>
        <th>date_created</th>
        <th>Action</th>
    </tr>

    <?php 
require 'connection.php';

$filter = "";
$fname = isset($_GET['fname']) ? $_GET['fname'] : '';
$lname = isset($_GET['lname']) ? $_GET['lname'] : '';
$gender = isset($_GET['gender']) ? $_GET['gender'] : '';
$bank = isset($_GET['bank']) ? $_GET['bank'] : '';
$bnumber = isset($_GET['bnumber']) ? $_GET['bnumber'] : '';
$startDate = isset($_GET['startDate1']) ? $_GET['startDate1'] : '';
$endDate = isset($_GET['endDate1']) ? $_GET['endDate1'] : '';

// with search
$filter .= " AND (firstname LIKE '%$fname%' OR lastname LIKE '%$lname%' OR gender LIKE '%$gender%' OR bank LIKE '%$bank%' OR bank_number LIKE '%$bnumber%')";

// Add date range filter if both startDate and endDate are set
if (!empty($startDate) && !empty($endDate)) {
    $startDate = date('Y-m-d H:i:s', strtotime($startDate));  // Convert start date to YYYY-MM-DD HH:MM:SS format
    $endDate = date('Y-m-d H:i:s', strtotime($endDate));  // Convert end date to YYYY-MM-DD HH:MM:SS format
    $filter .= " AND date_created BETWEEN '$startDate' AND '$endDate'";
}

$stmt = "SELECT * FROM users WHERE 1=1 $filter";
$result = $conn->query($stmt);

while ($row = $result->fetch_assoc()) {
    ?>
    <tr>
    <td><?php echo $row["id"] ?></td>
        <td><?php echo $row["firstname"] ?></td>
        <td><?php echo $row["lastname"] ?></td>
        <td><?php echo $row["gender"] ?></td>
        <td><?php echo $row["bank"] ?></td>
        <td><?php echo $row["bank_number"] ?></td>
        <td><?php echo $row["date_created"] ?></td>
        <td><a href="#" onclick="GetUser(<?php echo $row['id'] ?>);">view</a> <a href="#" onclick="DeleteUser(<?php echo $row['id'] ?>);">Delete</a></td>
    </tr>
<?php
}

$conn->close();
?>


</table>


