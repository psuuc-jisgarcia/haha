<?php
include('conn.php');
session_start();

// * ADMIN DISPLAY

$sql = "SELECT * FROM admins WHERE adminID = '1'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $username = $row['adminName'];
} else {
    $username = "User Not Found";
}


?>
<?php
$shesh = "SELECT amount FROM transactions";
$resulT = $conn->query($shesh);

$data = array();

if ($resulT->num_rows > 0) {
    while ($row = $resulT->fetch_assoc()) {
        $data[] = $row;
    }
}



?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <style>
        .hi {
            padding: 2%;
            color: rgb(78, 78, 78);
        }

        table {
            border: 2px solid;
        }

        table th {
            padding: 1%;
            color: black;
            border: 2px solid;
            background-color: antiquewhite;
        }

        table td {
            padding: 2%;
            color: black;
            border: 2px solid;
        }
    </style>
    <script src="ajaxDB.js"></script>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand mr-auto d-flex align-items-center justify-content-center" href="adminDash.php">
                <div class="sidebar-brand-text mx-3">FundMe</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="adminDash.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Actions</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Actions:</h6>
                        <a class="collapse-item" href="/WEBSYS-LAST-REVISE/WEBSYS/ETRSAWEBSYS/ACCOUNTMANAGEMENT/account.php">Account Management</a>
                        <a class="collapse-item" href="/WEBSYS-LAST-REVISE/WEBSYS/ETRSAWEBSYS/MANAGECAMPAIGNEVENTS/campaign.php">Manage Campaign Events</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Donation Status</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">

                        <a class="collapse-item" href="/WEBSYS-LAST-REVISE/WEBSYS/ETRSAWEBSYS/DONATIONSTATUS/donationstatus.php">Donation Status</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <div class="sidebar-brand-icon px-3">
                        <img src="img/logo.png" alt="" srcset="" height="50" width="50">
                    </div>
                    <h1 class="hi"><span>Dashboard</span></h1>
                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-warning" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>



                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $username ?></span>
                                <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Total Funds Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                <a href="/WEBSYS-LAST-REVISE/WEBSYS/ETRSAWEBSYS/DONATIONSTATUS/donationstatus.php">Total Funds (From all events)</a>
                                            </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800 total-funds-value"> <?php
                                                                                                                    // * Total Funds display
                                                                                                                    echo ' &#x20B1; ';
                                                                                                                    $stmt = $conn->prepare("SELECT SUM(amount) as totalAmount FROM transactions");

                                                                                                                    if (!$stmt) {
                                                                                                                        echo json_encode(array('error' => 'Error in preparing the SQL statement: ' . $conn->error));
                                                                                                                    } else {
                                                                                                                        $stmt->execute();
                                                                                                                        $result = $stmt->get_result();

                                                                                                                        if ($result) {
                                                                                                                            $funds = $result->fetch_assoc();

                                                                                                                            if (isset($funds['totalAmount'])) {
                                                                                                                                echo $funds['totalAmount'];
                                                                                                                            } else {
                                                                                                                                echo '0';
                                                                                                                            }
                                                                                                                        } else {
                                                                                                                            echo json_encode(array('error' => 'Error in executing the SQL statement: ' . $stmt->error));
                                                                                                                        }
                                                                                                                    }
                                                                                                                    ?></div>

                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-money-bill fa-2x text-gray-300"></i>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- People Donated Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1"><a href="/WEBSYS-LAST-REVISE/WEBSYS/ETRSAWEBSYS/DONATIONSTATUS/donationstatus.php">People Donated</a>
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800 people-donated-value"><?php
                                                                                                                                    $sql = "SELECT COUNT(*) as total_donations FROM transactions";
                                                                                                                                    $result = $conn->query($sql);

                                                                                                                                    if ($result->num_rows > 0) {
                                                                                                                                        // Output data of each row
                                                                                                                                        while ($row = $result->fetch_assoc()) {
                                                                                                                                            $totalDonations = $row["total_donations"];
                                                                                                                                            echo $totalDonations;
                                                                                                                                        }
                                                                                                                                    } else {
                                                                                                                                        echo '0';
                                                                                                                                    }
                                                                                                                                    ?></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-user fa-2x text-gray-300"></i>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>

                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                <a href="/WEBSYS-LAST-REVISE/WEBSYS/ETRSAWEBSYS/MANAGECAMPAIGNEVENTS/campaign.php">Pending Requests</a>
                                            </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800 pending-requests-value"><?php
                                                                                                                        $sql = "SELECT COUNT(*) AS pending_requests_count FROM thumbnails WHERE status = 'Unapproved'";
                                                                                                                        $result = $conn->query($sql);

                                                                                                                        if ($result->num_rows > 0) {
                                                                                                                            $row = $result->fetch_assoc();
                                                                                                                            $pendingRequestsCount = $row["pending_requests_count"];
                                                                                                                            echo $pendingRequestsCount;
                                                                                                                        } else {
                                                                                                                            echo "0 results";
                                                                                                                        }

                                                                                                                        ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- Content Row -->

                    <div class="row">
                        <!-- Area Chart -->
                        <div class="col-xl-8 col-lg-5">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Approved Events</h6>
                                </div>
                                <div class="card-body text-center">
                                    <img src="approved.png" alt="" class="img-fluid mx-auto">
                                    <div class="show-content mx-auto">
                                        <?php
                                        $showsql = "SELECT * FROM thumbnails WHERE status = 'Approved' LIMIT 2";
                                        $resultshow = mysqli_query($conn, $showsql);

                                        if (mysqli_num_rows($resultshow) > 0) {
                                            echo "<table border='1' class='mx-auto'>";  
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
                                        } else {
                                            echo "There are no Approved Events!";
                                        }
                                        ?>
                                    </div>
                                    <hr>
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#approvedEventsModal" id="btn">
                                        Show More Approved Events
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Pie Chart -->
                        <div class="col-xl-4 col-lg-6">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">
                                        Unapproved Events
                                    </h6>
                                </div>
                                <form action="">
                                    <select name="events" id="" onchange="showEvent(this.value)">
                                    <option value="">Event info</option>
                                        <?php
                                        $eventstmt = "SELECT id, thumbname FROM thumbnails WHERE status = 'Unapproved'";
                                        $result = $conn->query($eventstmt);
                                        while ($row = $result->fetch_assoc()) {
                                            echo "<option value='" . $row['id'] . "'>" . $row['thumbname'] . "</option>";
                                        }   
                                        ?>
                                    </select>
                                </form>
                                <div id="txtHint">Event info will be listed here...</div>
                                <script>
                                    function showEvent(str) {
                                        var xhttp;
                                        if (str == "") {
                                            document.getElementById("txtHint").innerHTML = "";
                                            return;
                                        }
                                        xhttp = new XMLHttpRequest();
                                        xhttp.onreadystatechange = function() {
                                            if (this.readyState == 4 && this.status == 200) {
                                                document.getElementById("txtHint").innerHTML = this.responseText;
                                            }
                                        };
                                        xhttp.open("GET", "getevents.php?q=" + str, true);
                                        xhttp.send();
                                    }
                                </script>
                                <!-- Card Body -->
                            </div>
                        </div>


                        <div class="col-lg-6 mb-4">

                            <!-- Illustrations -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Donation Details</h6>
                                </div>
                                <div class="card-body">
                                    <div class="show-funds-details">
                                        <?php
                                        $showsql = "SELECT * FROM transactions LIMIT 2";
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
                                    </div>
                                    <br>
                                    <button class="btn btn-primary" id="btnfunds">Show more details</button>
                                </div>
                            </div>

                        </div>
                    </div>
                    


                    <!-- /.container-fluid -->

                </div>
                <!-- End of Main Content -->

                <!-- Footer -->
                <footer class="sticky-footer bg-white">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <span>Copyright &copy; FundMe 2023</span>
                        </div>
                    </div>
                </footer>
                <!-- End of Footer -->

            </div>
            <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-primary" href="logout.php">Logout</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bootstrap core JavaScript-->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="js/sb-admin-2.min.js"></script>

        <!-- Page level plugins -->
        <script src="vendor/chart.js/Chart.min.js"></script>

        <!-- Page level custom scripts -->
        <script src="js/demo/chart-area-demo.js"></script>
        <script src="js/demo/chart-pie-demo.js"></script>
        <?php

        $conn->close();
        ?>

</body>

</html>