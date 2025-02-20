<?php
session_start();

if (isset($_SESSION["a"])) {
  include "db.php";
  $uemail = $_SESSION["a"]["username"];
  $query = "SELECT * FROM `admin` WHERE `username` = ?";
  $params = [$uemail];
  $types = "s";
  $u_detail = Databases::Search($query, $params, $types);
  if ($u_detail->num_rows == 1) {
?>

    <!doctype html>
    <html lang="en">

    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>replace_title_admin</title>
      <link rel="shortcut icon" href="assets/img/logo-icon.ico" type="image/x-icon">
      <link rel="stylesheet" href="assets-admin/css/style.css" />
      <link rel="stylesheet" href="assets-admin/css/styles.min.css" />
    </head>

    <body class="loading_body">
      <!--  Body Wrapper -->
      <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        <?php

        require "side.php";

        ?>
        <!--  Main wrapper -->
        <div class="body-wrapper">

          <?php
          require "nav.php";
          ?>

          <div class="container-fluid">

            <div class="row d-flex justify-content-center">
              <div class="col-12 text-center mb-3">
                <div class="mb-1">
                  <span class="h4 mb-9 fw-semibold">Add new Batch&nbsp;&nbsp;<i class="fa fa-shopping-basket" aria-hidden="true"></i></span>
                </div>
                <div>
                  <span class="mb-9 text-dark-emphasis">You can add new batches here</span>
                </div>
              </div>

              <div class="col-12 col-lg-10 border shadow mt-5">
                <div class="row m-3">

                  <div class="col-12">
                    <div class="row d-flex justify-content-end">
                      <div class="col-12 col-md-8 col-lg-6 mt-4">
                        <div class="input-group">
                          <div class="form-floating is-invalid">
                            <input type="text" class="form-control rounded-0" placeholder="Enter Amount" required>
                            <label>Search Products By Name</label>
                          </div>
                          <span class="input-group-text rounded-0 btn d-flex justify-content-center align-items-center border border-gray-900"><i class="fa fa-search" aria-hidden="true"></i></span>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-12 mt-2">
                    <div class="form-floating">
                      <select class="form-select rounded-0" aria-label="Floating label select example">
                        <option selected>Select Product</option>
                      </select>
                      <label>Select your product here</label>
                    </div>
                  </div>

                  <hr class="mt-4 text-dark">

                  <div class="col-12 mt-3">
                    <div class="form-floating">
                      <input type="text" class="form-control rounded-0" placeholder="Batch ID">
                      <label>Batch Id</label>
                    </div>
                  </div>

                  <div class="col-6 mt-4">
                    <div class="form-floating">
                      <input type="text" class="form-control rounded-0" placeholder="Vendor Name">
                      <label>Vendor Name</label>
                    </div>
                  </div>

                  <div class="col-6 mt-4">
                    <div class="form-floating">
                      <input type="number" class="form-control rounded-0" placeholder="Product Qty">
                      <label>Batch Qty</label>
                    </div>
                  </div>

                  <div class="col-6 mt-4">
                    <div class="input-group">
                      <span class="input-group-text rounded-0">LKR</span>
                      <div class="form-floating is-invalid">
                        <input type="text" class="form-control" placeholder="Enter Amount" required>
                        <label>Batch Price</label>
                      </div>
                      <span class="input-group-text rounded-0">.00</span>
                    </div>
                  </div>

                  <div class="col-6 mt-4">
                    <div class="input-group">
                      <span class="input-group-text rounded-0">LKR</span>
                      <div class="form-floating is-invalid">
                        <input type="text" class="form-control" placeholder="Enter Amount" required>
                        <label>Selling Price</label>
                      </div>
                      <span class="input-group-text rounded-0">.00</span>
                    </div>
                  </div>

                  <div class="col-12 text-end mt-4">
                    <button class="btn rounded-1 fw-bold x col-md-2"><i class="fa fa-plus-circle" aria-hidden="true"></i> ADD</button>
                  </div>
                </div>
              </div>

            </div>

          </div>
        </div>
      </div>

      <script src="https://cdn.tiny.cloud/1/v6ya2mxbd70fn22v774qp5fw78t114ccnejem2vy8oriyj04/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

      <script>
        // Wait for the document to be ready
        document.addEventListener("DOMContentLoaded", function() {
          // Initialize TinyMCE with API key
          tinymce.init({
            selector: 'textarea',
            apiKey: 'v6ya2mxbd70fn22v774qp5fw78t114ccnejem2vy8oriyj04', // Replace 'YOUR_API_KEY_HERE' with your actual API key
            plugins: 'autosave autolink lists link',
            toolbar: 'undo redo | formatselect | bold italic | alignleft aligncenter alignright | bullist numlist | link',
            menubar: false,
          });
        });
      </script>

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
      <script src="assets-admin/libs/jquery/dist/jquery.min.js"></script>
      <script src="assets-admin/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
      <script src="assets-admin/js/sidebarmenu.js"></script>
      <script src="assets-admin/js/app.min.js"></script>
      <script src="assets-admin/libs/apexcharts/dist/apexcharts.min.js"></script>
      <script src="assets-admin/libs/simplebar/dist/simplebar.js"></script>
      <script src="assets-admin/js/dashboard.js"></script>

      <!-- overlay -->
      <div class="blueOverlay d-none">
        <div class="d-flex justify-content-center align-items-center h-100">
          <div class="text-center text-white">
            <div class="spinner-border text-light" role="status">
              <span class="visually-hidden">Loading...</span>
            </div>
            <p class="mt-3">Please wait...</p>
          </div>
        </div>
      </div>


    </body>

    </html>

<?php
  } else {
    session_destroy();
    header("Location: ../index.php");
    exit();
  }
} else {
  session_destroy();
  header("Location: ../index.php");
  exit();
}
?>