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
    <div class="container-fluid">
        <div class="row bg-main-two-50">
            <div class="col-12 text-center" style="margin-bottom: 50px; margin-top: 50px;">
                <img src="assets/images/logo/logo-two-black.png" alt="" class="mb-4">
            </div>
        </div>
        <div class="row" style="margin-top: 20px;">
            <div class="col-12 text-center h3 fw-semibold text-dark">
                Welcome to Vicstore
            </div>
        </div>
    </div>

    <!-- =============================== Account Section Start =========================== -->
    <section class="account py-80">
        <div class="container container-lg">
            <form action="#">
                <div class="row gy-4">

                    <!-- Login Card Start -->
                    <div class="col-xl-6 pe-xl-5">
                        <div class="border border-gray-100 hover-border-main-600 transition-1 rounded-16 px-24 py-40 h-100">
                            <h6 class="text-center text-main">Already have an account ?</h6>
                            <h6 class="text-xl mb-32">Login</h6>
                            <div class="mb-24">
                                <label for="username" class="text-neutral-900 text-lg mb-8 fw-medium">Username or email address <span class="text-danger">*</span> </label>
                                <input type="text" class="common-input" id="username" placeholder="First Name">
                            </div>
                            <div class="mb-24">
                                <label for="password" class="text-neutral-900 text-lg mb-8 fw-medium">Password</label>
                                <div class="position-relative">
                                    <input type="password" class="common-input" id="password" placeholder="Enter Password" value="password">
                                    <span class="toggle-password position-absolute top-50 inset-inline-end-0 me-16 translate-middle-y cursor-pointer ph ph-eye-slash" id="#password"></span>
                                </div>
                            </div>
                            <div class="mb-24 mt-48">
                                <div class="flex-align gap-48 flex-wrap">
                                    <button type="submit" class="btn btn-main py-18 px-40">Log in</button>
                                    <div class="form-check common-check">
                                        <input class="form-check-input" type="checkbox" value="" id="remember">
                                        <label class="form-check-label flex-grow-1" for="remember">Remember me</label>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-48">
                                <a href="#" class="text-danger-600 text-sm fw-semibold hover-text-decoration-underline">Forgot your password?</a>
                            </div>
                        </div>
                    </div>
                    <!-- Login Card End -->

                    <!-- Register Card Start -->
                    <div class="col-xl-6">
                        <div class="border border-gray-100 hover-border-main-600 transition-1 rounded-16 px-24 py-40">
                            <h6 class="text-center text-main">New to Vicstore ?</h6>
                            <h6 class="text-xl mb-32">Register</h6>
                            <div class="mb-24">
                                <label for="usernameTwo" class="text-neutral-900 text-lg mb-8 fw-medium">Username <span class="text-danger">*</span> </label>
                                <input type="text" class="common-input" id="usernameTwo" placeholder="Write a username">
                            </div>
                            <div class="mb-24">
                                <label for="emailTwo" class="text-neutral-900 text-lg mb-8 fw-medium">Email address <span class="text-danger">*</span> </label>
                                <input type="email" class="common-input" id="emailTwo" placeholder="Enter Email Address">
                            </div>
                            <div class="mb-24">
                                <label for="enter-password" class="text-neutral-900 text-lg mb-8 fw-medium">Password <span class="text-danger">*</span></label>
                                <div class="position-relative">
                                    <input type="password" class="common-input" id="enter-password" placeholder="Enter Password" value="password">
                                    <span class="toggle-password position-absolute top-50 inset-inline-end-0 me-16 translate-middle-y cursor-pointer ph ph-eye-slash" id="#enter-password"></span>
                                </div>
                            </div>
                            <div class="my-48">
                                <p class="text-gray-500">Your personal data will be used to process your order, support your experience throughout this website, and for other purposes described in our
                                    .
                                </p>
                            </div>
                            <div class="mt-48">
                                <button type="submit" class="btn btn-main py-18 px-40">Register</button>
                            </div>
                        </div>
                    </div>
                    <!-- Register Card End -->

                </div>
            </form>
        </div>
    </section>
    <!-- =============================== Account Section End =========================== -->




    <?php require "footer.php"; ?>



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