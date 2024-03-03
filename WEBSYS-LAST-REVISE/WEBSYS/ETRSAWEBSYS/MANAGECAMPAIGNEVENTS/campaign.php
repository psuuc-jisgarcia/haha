<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Campaign Management</title>
    <style>
        main {
            background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(img/psu.jpg);
            background-size: cover;
            border-radius: 10px;
            background-repeat: no-repeat;
            height: 100%;
        }

        .wrap {
            margin: 2%;
        }

        span.text {
            color: white;
        }

        .hi {
            padding: 2%;
            color: rgb(78, 78, 78);
        }

        .cent {
            text-align: center;
        }
    </style>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script defer src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script defer src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script defer src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
    <script defer src="account.js"></script>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand mr-auto d-flex align-items-center justify-content-center" href="/WEBSYS-LAST-REVISE/WEBSYS/ETRSAWEBSYS/DASHBOARD/adminDash.php">
                <div class="sidebar-brand-text mx-3">FundMe</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="/WEBSYS-LAST-REVISE/WEBSYS/ETRSAWEBSYS/DASHBOARD/adminDash.php">
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
            <li class="nav-item active">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Actions</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Actions:</h6>
                        <a class="collapse-item" href="/WEBSYS-LAST-REVISE/WEBSYS/ETRSAWEBSYS/ACCOUNTMANAGEMENT/account.php">Account Management</a>
                        <a class="collapse-item" href="/WEBSYS-LAST-REVISE/WEBSYS/ETRSAWEBSYS/MANAGECAMPAIGNEVENTS/campaign.php"><b>Manage Campaign Events</b></a>
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
                    <div class="sidebar-brand-icon px-3">
                        <img src="img/logo.png" alt="" srcset="" height="50" width="50">
                    </div>
                    <h1 class="hi"><span>Campaign Management</span></h1>

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
                                            <button class="btn btn-primary" type="button">
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
                            <?php
                            require 'conn.php';
                            $query = "SELECT * FROM admins WHERE adminID = 1"; // Assuming the user's ID is 1 for this example
                            $result = $conn->query($query);

                            if ($result->num_rows > 0) {
                                $row = $result->fetch_assoc();
                                $username = $row['adminName'];
                            } else {
                                $username = "Default User";
                            }

                            // Close the database connection
                            ?>

                            <!-- HTML code with dynamic username -->
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $username; ?></span>
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
                <div class="wrap">
                    <main>

                        <section class="py-5 text-center container">
                            <div class="row py-lg-5">
                                <div class="col-lg-6 col-md-8 mx-auto">

                                </div>
                            </div>
                        </section>

                        <div class="album py-5 bg-body-tertiary">
                            <div class="container">
                                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

                                    <?php
                                    require 'conn.php';

                                    $sql = "SELECT * FROM thumbnails";
                                    $result = $conn->query($sql);

                                    if ($result === false) {
                                        echo "Error in SQL query: " . $conn->error;
                                    } else {
                                        if ($result->num_rows > 0) {
                                            while ($row = $result->fetch_assoc()) {
                                                if (!empty($row["image_path"])) {
                                                    $imagePath = htmlspecialchars($row["image_path"]);

                                                    $absoluteImagePath = $_SERVER['DOCUMENT_ROOT'] . '/' . $imagePath;

                                                    if (file_exists($absoluteImagePath)) {
                                                        $imageData = file_get_contents($absoluteImagePath);
                                                        $base64Image = base64_encode($imageData);
                                                        $imageMimeType = mime_content_type($absoluteImagePath);

                                                        echo "<div class='col'>
    <div class='card shadow-sm'>
        <img src='data:{$imageMimeType};base64,{$base64Image}' class='bd-placeholder-img card-img-top' width='100%' height='225' role='img' alt='Thumbnail'>
        <div class='card-body'>
            <p class='card-text'><b>Title:</b> " . htmlspecialchars($row["thumbname"]) . "</p>
            <p class='card-text'><small><b>Campus:</b> " . htmlspecialchars($row["campus"]) . "</small></p>
            <p class='card-text'>" . htmlspecialchars($row["description"]) . "</p>
            <div class='d-flex justify-content-between align-items-start'>
                <div class='btn-group'>
                    <a href='campaignapproval.php?id=" . $row["id"] . "' class='btn btn-sm btn-outline-secondary'>View</a>
                </div>
                <div class='text-body-secondary'>
                    <p class='mb-0'><b>Created at:</b> <small>" . htmlspecialchars($row["created_at"]) . "</small></p>
                    <p class='mb-0'><b>Expiration:</b> <small>" . htmlspecialchars($row["expiration"]) . "</small></p>
                </div>
            </div>
        </div>
    </div>
</div>";


                                                    } else {
                                                        echo "<p class='cent'>Image not found: {$absoluteImagePath}</p>";
                                                    }
                                                } else {
                                                    echo "<p class='cent'>Empty image path for ID: {$row["id"]}</p>";
                                                }
                                            }
                                        } else {
                                            echo "<p class='cent'>No thumbnails found.</p>";
                                        }
                                    }

                                    $conn->close();
                                    ?>






                                </div>
                            </div>
                        </div>
                    </main>
                </div>
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

</body>

</html>