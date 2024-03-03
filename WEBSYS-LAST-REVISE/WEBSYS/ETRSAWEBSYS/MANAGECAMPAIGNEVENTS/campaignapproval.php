<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Campaign Approval</title>
  <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
  <style>
    main {
      background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(img/psu.jpg);
      background-size: contain;
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
            <h6 class="collapse-header">Donation Status</h6>
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
              $conn->close();
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
          <div class="container">
            <?php
            if (isset($_GET['id'])) {
              include 'conn.php';

              $id = $_GET['id'];

              // Use prepared statement to prevent SQL injection
              $sql = "SELECT * FROM thumbnails WHERE id = ?";
              $stmt = mysqli_prepare($conn, $sql);
              mysqli_stmt_bind_param($stmt, 'i', $id);
              mysqli_stmt_execute($stmt);

              $result = mysqli_stmt_get_result($stmt);

              if ($result && $row = mysqli_fetch_assoc($result)) {
                $imagePath = htmlspecialchars($row['image_path']);
            ?>
                <div class='p-2 mb-4 bg-body-tertiary rounded-3'>
                  <div class='container py-5'>
                    <h1 class='display-6 fw-bold mb-4'><b>Thumbnail Details</b></h1>
                    <div class='row'>
                      <div class='col-md-6'>
                        <img class='p-5 img-fluid' src='<?php echo $imagePath ?>' alt='Thumbnail Image' height='500' width='500' />
                      </div>
                      <div class='col-md-6'>
                        <p class='fs-5'><b>Title:</b> <?php echo htmlspecialchars($row['thumbname']); ?></p>
                        <p class='fs-5'><b>Campus:</b> <?php echo htmlspecialchars($row['campus']); ?></p>
                        <p class='fs-5'><b>Description:</b> <?php echo htmlspecialchars($row['description']); ?></p>
                        <p class='fs-5'><b>Created At:</b> <?php echo htmlspecialchars($row['created_at']); ?></p>
                        <p class='fs-5'><b>Expiration Date:</b> <?php echo htmlspecialchars($row['expiration']); ?></p>
                        <form action='update.php' method='post'>
                          <input type='hidden' name='id' value='<?php echo $id; ?>'>
                          <button class='btn btn-success btn-lg mt-3 ms-2' type='submit' name='approved'>
                            <i class='fas fa-check'></i> Approve
                          </button>
                        </form>
                        <form action='remove_thumbnail.php' method='post' style='display:inline;' id='removeForm'>
                          <input type='hidden' name='image_path' value='<?php echo $imagePath; ?>'>
                          <input type='hidden' name='thumbname' value='<?php echo htmlspecialchars($row['thumbname']); ?>'>
                          <input type='hidden' name='description' value='<?php echo htmlspecialchars($row['description']); ?>'>
                          <input type='hidden' name='created_at' value='<?php echo htmlspecialchars($row['created_at']); ?>'>
                          <input type='hidden' name='expiration' value='<?php echo htmlspecialchars($row['expiration']); ?>'>
                          <button class='btn btn-danger btn-lg mt-3 ms-2' type='button' data-toggle='modal' data-target='#removeModal'>
                            <i class='fas fa-trash'></i> Remove
                          </button>
                        </form>
                        <br>
                        <!-- Add this HTML code to your page -->
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editModalLabel">Edit Expiration Date and Time</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!-- Your form for editing date and time goes here -->
        <form action='edit.php' method='post'>
          <!-- Include the hidden inputs for necessary data -->
          <input type='hidden' name='image_path' value='<?php echo $imagePath; ?>'>
          <input type='hidden' name='thumbname' value='<?php echo htmlspecialchars($row['thumbname']); ?>'>
          <input type='hidden' name='description' value='<?php echo htmlspecialchars($row['description']); ?>'>
          <input type='hidden' name='created_at' value='<?php echo htmlspecialchars($row['created_at']); ?>'>
          <input type='hidden' name='expiration' value='<?php echo htmlspecialchars($row['expiration']); ?>'>
          
          <!-- Add input fields for editing expiration date and time -->
          <div class="mb-3">
            <label for="newExpiration" class="form-label">New Expiration Date and Time</label>
            <input type="datetime-local" class="form-control" id="newExpiration" name="newExpiration" required>
          </div>

          <button type='submit' class='btn btn-primary'>Save Changes</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Your existing button for opening the modal -->
<form action='edit.php' method='post' style='display:inline;' id='editForm'>
  <input type='hidden' name='image_path' value='<?php echo $imagePath; ?>'>
  <input type='hidden' name='thumbname' value='<?php echo htmlspecialchars($row['thumbname']); ?>'>
  <input type='hidden' name='description' value='<?php echo htmlspecialchars($row['description']); ?>'>
  <input type='hidden' name='created_at' value='<?php echo htmlspecialchars($row['created_at']); ?>'>
  <input type='hidden' name='expiration' value='<?php echo htmlspecialchars($row['expiration']); ?>'>
  <button class='btn btn-dark btn-lg mt-3 ms-2' type='button' data-bs-toggle='modal' data-bs-target='#editModal'>
    <i class='fas fa-edit'></i> Edit expiration time and date
  </button>
</form>

                      </div>
                    </div>
                  </div>
                </div>
            <?php
              } else {
                echo "<center><p>Invalid request. Thumbnail details not found.</p></center>";
              }

              // Close the prepared statement
              mysqli_stmt_close($stmt);
              // Close the database connection
              mysqli_close($conn);
            }
            ?>
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

      <div class="modal fade" id="removeModal" tabindex="-1" role="dialog" aria-labelledby="removeModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="removeModalLabel">Reason for Removal</h5>
              <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body">
              <p>Please select a reason for removing this Campaign:</p>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="removalReason" id="reachedDonationBar" value="reachedDonationBar">
                <label class="form-check-label" for="reachedDonationBar">Reached the end of donation date</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="removalReason" id="rejectCampaign" value="rejectCampaign">
                <label class="form-check-label" for="rejectCampaign">Reject Campaign</label>
              </div>
            </div>
            <div class="modal-footer">
              <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
              <button class="btn btn-danger" type="submit">Confirm Removal</button>
            </div>
          </div>
        </div>
      </div>

      <script>
        $(document).ready(function() {
          $('#confirmRemove').click(function() {
            // Get the selected reason
            var removalReason = $('input[name="removalReason"]:checked').val();

            // Append the reason to the form and submit it
            $('#removeForm').append('<input type="hidden" name="removalReason" value="' + removalReason + '">');
            $('#removeForm').submit();
          });
        });
      </script>

</body>

</html>