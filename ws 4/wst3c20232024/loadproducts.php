<?php
include('config.php');
?>
<table>
    <tr style="background-color: green; color:white">
        <th style="padding:10px;">Code</th>
        <th style="padding:10px;">Description</th>
        <th style="padding:10px;">Price</th>
        <th style="padding:10px;">Quantity</th>
        <th style="padding:10px;">Date</th>
    </tr>
    <tbody>
        <?php
        $filter = "";
        if (isset($_GET['pr'])) {
            $pr = $_GET['pr'];
            $filter .= " AND pro_code like '%$pr%'";
        }

        if (isset($_GET['desc'])) {
            $desc = $_GET['desc'];
            $filter .= " AND description like '%$desc%'";
        }

        if (isset($_GET['quantity'])) {
            $quan = $_GET['quantity'];
            $filter .= " AND quantity like '%$quan%'";
        }

        if (isset($_GET['price'])) {
            $prc = $_GET['price'];
            $filter .= " AND price like '%$prc%'";
        }
        $sql_ini = "SELECT * from products as a  where 1=1  $filter order by date_created desc  ";



        $result_ini = mysqli_query($conn, $sql_ini) or die("SQL User Fetch error" . mysqli_error($conn));
        $rowcount_ini = mysqli_num_rows($result_ini);

        if ($rowcount_ini >= 1) {
            while ($result_iniprod = mysqli_fetch_assoc($result_ini)) {
        ?>
                <tr>
                    <td style='text-align: center;'><strong><?= $result_iniprod['pro_code'] ?></strong></td>
                    <td style='text-align: center;'><strong><?= $result_iniprod['description'] ?></strong></td>              
                    <td style='text-align: center;'><strong><?= $result_iniprod['price'] ?></strong></td>
                    <td style='text-align: center;'><strong><?= $result_iniprod['quantity'] ?></strong></td>
                    <td style='text-align: center;'><strong><?= $result_iniprod['date_created'] ?></strong></td>

                </tr>
            <?php }
        } else { ?>
            <tr>
                <td colspan="8" align="center"><strong style="color:red"> No Record List</strong></td>
            </tr>
        <?php } ?>
    </tbody>