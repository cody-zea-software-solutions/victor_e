<!DOCTYPE html>
<html lang="en" class="color-two font-exo">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title -->
    <title>replace_title</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/logo/favicon.png">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- select 2 -->
    <link rel="stylesheet" href="assets/css/select2.min.css">
    <!-- Slick -->
    <link rel="stylesheet" href="assets/css/slick.css">
    <!-- Jquery Ui -->
    <link rel="stylesheet" href="assets/css/jquery-ui.css">
    <!-- animate -->
    <link rel="stylesheet" href="assets/css/animate.css">
    <!-- AOS Animation -->
    <link rel="stylesheet" href="assets/css/aos.css">
    <!-- Main css -->
    <link rel="stylesheet" href="assets/css/main.css">
</head>

<body>

    <!--==================== Preloader Start ====================-->
    <div class="preloader">
        <img src="assets/images/icon/preloader.gif" alt="">
    </div>
    <!--==================== Preloader End ====================-->

    <?php require_once "basic_header.php"; ?>

    <!-- ========================= Breadcrumb Start =============================== -->
    <div class="breadcrumb mb-0 py-26 bg-main-two-50">
        <div class="container container-lg">
            <div class="breadcrumb-wrapper flex-between flex-wrap gap-16">
                <h6 class="mb-0">User Details</h6>
                <ul class="flex-align gap-8 flex-wrap">
                    <li class="text-sm">
                        <a href="index.php" class="text-gray-900 flex-align gap-8 hover-text-main-600">
                            <i class="ph ph-house"></i>
                            Home
                        </a>
                    </li>
                    <li class="flex-align">
                        <i class="ph ph-caret-right"></i>
                    </li>
                    <li class="text-sm text-main-600"> User Details </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- ========================= Breadcrumb End =============================== -->

    <!-- ============================== Vendor Two Details Start =============================== -->
    <section class="vendor-two-details py-80">
        <div class="container container-lg">
            <div class="vendor-two-details-wrapper d-flex flex-wrap align-items-start gap-24">

                <!-- Shop Sidebar Start -->
                <div class="shop-sidebar">
                    <button type="button" class="shop-sidebar__close d-lg-none d-flex w-32 h-32 flex-center border border-gray-100 rounded-circle hover-bg-main-600 bg-main-600 position-absolute inset-inline-end-0 me-10 mt-8 text-white border-main-600">
                        <i class="ph ph-x"></i>
                    </button>
                    <div class="d-flex flex-column gap-12 px-lg-0 px-3 py-lg-0 py-4">
                        <div class="bg-neutral-600 rounded-8 p-24">
                            <div class="d-flex align-items-center justify-content-between">
                                <span class="w-80 h-80 flex-center bg-white rounded-8 flex-shrink-0">
                                    <img src="assets/images/thumbs/vendors-two-icon1.png" alt="">
                                </span>
                                <div class="d-flex flex-column gap-24">
                                    <button type="button" class="text-uppercase group border border-white px-16 py-8 rounded-pill text-white text-sm hover-bg-main-two-600 hover-text-white hover-border-main-two-600 transition-2 flex-center gap-8 w-100">
                                        Home
                                        <span class="text-xl d-flex text-main-two-600 group-item-white transition-2"> <i class="ph ph-storefront"></i></span>
                                    </button>
                                    <button type="button" class="text-uppercase group border border-white px-16 py-8 rounded-pill text-white text-sm hover-bg-main-two-600 hover-text-white hover-border-main-two-600 transition-2 flex-center gap-8 w-100">
                                        Sign Out
                                        <span class="text-xl d-flex text-main-two-600 group-item-white transition-2"> <i class="ph ph-storefront"></i></span>
                                    </button>
                                </div>
                            </div>
                            <div class="mt-32">
                                <h6 class="text-white fw-semibold mb-12">
                                    <a href="vendor-two-details.html" class="">Wilson Jay</a>
                                </h6>
                                <span class="text-xs text-white mb-12">Joined on 2024.12.13</span>
                                <div class="flex-align gap-6">
                                    <span class="text-xs fw-medium text-white">5 total orders</span>
                                </div>
                            </div>
                            <div class="mt-32 d-flex flex-column gap-8">
                                <a href="javascript:void(0)" class="px-16 py-12 border text-white border-neutral-500 w-100 rounded-4 hover-bg-main-600 hover-border-main-600">My Orders</a>
                                <a href="javascript:void(0)" class="px-16 py-12 border text-white border-neutral-500 w-100 rounded-4 hover-bg-main-600 hover-border-main-600">Details</a>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- Shop Sidebar End -->

                <div class="vendor-two-details__contents">

                </div>
            </div>
        </div>
    </section>
    <!-- ============================== Vendor Two Details End =============================== -->

    <?php require_once "footer.php"; ?>



    <!-- Jquery js -->
    <script src="assets/js/jquery-3.7.1.min.js"></script>
    <!-- Bootstrap Bundle Js -->
    <script src="assets/js/boostrap.bundle.min.js"></script>
    <!-- Bootstrap Bundle Js -->
    <script src="assets/js/phosphor-icon.js"></script>
    <!-- Select 2 -->
    <script src="assets/js/select2.min.js"></script>
    <!-- Slick js -->
    <script src="assets/js/slick.min.js"></script>
    <!-- Slick js -->
    <script src="assets/js/count-down.js"></script>
    <!-- jquery UI js -->
    <script src="assets/js/jquery-ui.js"></script>
    <!-- wow js -->
    <script src="assets/js/wow.min.js"></script>
    <!-- AOS Animation -->
    <script src="assets/js/aos.js"></script>
    <!-- marque -->
    <script src="assets/js/marque.min.js"></script>
    <!-- marque -->
    <script src="assets/js/vanilla-tilt.min.js"></script>
    <!-- Counter -->
    <script src="assets/js/counter.min.js"></script>
    <!-- main js -->
    <script src="assets/js/main.js"></script>



</body>

</html>