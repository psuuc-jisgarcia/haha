<?php
include('config.php');
?>
<script>
    function getView(value) {
        $("#getProducts").html;
        $.get("getProduct.php?id=" + value, function(data, status) {
            $("#getProducts").html(data);
        });
    }

    function updateRecord() {
        let pc = $("#pc").val();
        var ipc = $("#ipc").val();
        $.post("saveProduct.php", {
            ipc: ipc,
            pc: pc
        }, function(data, status) {
            get1();
        });
    }

    function getDelete(value) {
        $("#getProducts").html("<img src='loader2.gif'>");
        $.get("deleteProduct.php?id=" + value, function(data, status) {
            //alert("Data: " + data + "\nStatus: " + status);
            $("#getProducts").html(data);
            get1();
        });
    }
</script>
<table width="100%">
    <tr style="background-color: green; color:white">
        <th style="padding:10px;">Code</th>
        <th style="padding:10px;">Description</th>
        <th style="padding:10px;">Price</th>
        <th style="padding:10px;">Quantity</th>
        <th style="padding:10px;">Date</th>
        <th style="padding:10px;">Action</th>
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

        if (isset($_GET['pricecode'])) {
            $prc = $_GET['pricecode'];
            $filter .= " AND price like '%$prc%'";
        }

        if (isset($_GET['quantitycode'])) {
            $quan = $_GET['quantitycode'];
            $filter .= " AND quantity like '%$quan%'";
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
                    <td><a href="#" style="text-decoration: none" onclick="getView(<?= $result_iniprod['id'] ?>);">View</a> |
                        <a href="#" style="text-decoration: none" onclick="getDelete(<?= $result_iniprod['id'] ?>);">Delete</a>
                    </td>

                </tr>
            <?php }
        } else { ?>
            <tr>
                <td colspan="8" align="center"><strong style="color:red"> No Record List</strong></td>
            </tr>
        <?php
        }
        ?>
    </tbody>