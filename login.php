<?php
session_start();
require_once("include/dbController.php");
$db_handle = new DBController();
if (isset($_SESSION['userid'])) {
    header("Location: profile.php");
}?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <link href="assets/images/logo/ngt_logo_word.png" rel="icon">
    <title>NGT | AI & WEB3 TECH</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet"/>

    <link href='assets/vendors/css/swiper.min.css' rel='stylesheet'>

    <link href="assets/css/style.css" rel="stylesheet"/>

    <link href="assets/vendors/font-awesome/css/all.min.css" rel="stylesheet"/>

    <link href="assets/vendors/css/normalize.min.css" rel="stylesheet">

    <link href='assets/vendors/css/animate.min.css' rel='stylesheet'>
</head>
<body id="main-body">
<div id="loader-body">

    <header>
        <nav class="navbar navbar-expand-lg" id="navbar_top"
             style="background: rgba(0,0,0,0.9);font-family: 'DrukWide-Medium-Web'">
            <div class="container-fluid">
                <a class="navbar-brand" href="index">
                    <img alt="" class="img-fluid logo"
                         src="assets/images/logo/NEXT-logo.png"/>
                </a>

                <div class="collapse-social-icons" style="position: inherit;margin-right: -45%;">
                    <a class="navbar-brand" href="https://www.instagram.com/techs.hk"
                       style="text-decoration: none;color: white;font-size: 26px"><i class="fa-brands fa-instagram"></i></a>
          <a class="navbar-brand" href="https://www.facebook.com/ngttechio"
                       style="text-decoration: none;color: white;font-size: 26px"><i class="fa-brands fa-facebook"></i></a>
                </div>

                <button class="navbar-toggler" data-bs-target="#main_nav" data-bs-toggle="collapse"
                        style="text-decoration: none;color: white;font-size: 25px"
                        type="button">
                    <i class="fa-solid fa-bars text-white"></i>
                </button>
                <div class="collapse navbar-collapse container" id="main_nav">
                    <ul class="navbar-nav ms-auto" style="margin-right: 65px">
                        <li class="nav-item"><a class="nav-link text-white" href="home#about"> About NGT </a></li>
                        <li class="nav-item"><a class="nav-link text-white" href="home#service"> Service </a></li>
                        <li class="nav-item"><a class="nav-link text-white" href="home#start"> Start </a></li>
                        <li class="nav-item"><a class="nav-link text-white" href="home#start"> Cert & Audit </a></li>
                        <li class="nav-item"><a class="nav-link text-white" href="home#ngtPass"> NGT Pass </a></li>
                        <li class="nav-item"><a class="nav-link text-white" href="home#press"> Press </a></li>
                        <li class="nav-item"><a class="nav-link text-white" href="login" style="text-shadow: #fff 0px 0px 5px, #fff 0px 0px 10px, #004303 0px 0px 15px, #004703 0px 0px 20px, #068e0c 0px 0px 30px, #000601 0px 0px 40px, #213422 0px 0px 50px, #000000 0px 0px 75px;"> Early Access </a></li>
                        <li class="nav-item"><a class="nav-link text-white" href="signin">
                                中文 </a></li>
                        <li class="nav-item collapse-social-icons-dropdown">
                            <span class="me-4">
                                <a href="https://www.instagram.com/techs.hk"
                                   style="text-decoration: none;color: white;font-size: 26px">
                                    <i class="fa-brands fa-instagram"></i>
                                </a>
                            </span>
                            <span class="me-2">
                                <a href="https://www.facebook.com/ngttechio"
                                   style="text-decoration: none;color: white;font-size: 25px">
                                    <i class="fa-brands fa-facebook"></i>
                                </a>
                            </span>
                        </li>
                    </ul>
                </div>
            </div> <!-- container-fluid.// -->

        </nav>
        <coingecko-coin-price-marquee-widget
                background-color="#000"
                coin-ids="bitcoin,ethereum,solana,matic-network,tether,binancecoin,litecoin" currency="usd"
                font-color="#ffffff"
                locale="en"></coingecko-coin-price-marquee-widget>
    </header>

    <section>
        <img src="assets/images/background.jpeg" class="img-fluid" style="position: fixed;z-index: -20;right: 0;bottom: 0;min-width: 100%;min-height: 100%;object-fit: cover;" alt=""/>
    </section>

    <section id="body">
        <section class="text-white pt-md-5 pb-md-5 pt-3 pb-5">
            <div class="container h-100 pt-md-5 pb-md-5 mb-5 pb-5" style="padding-bottom:10rem !important;">
                <div class="row d-flex justify-content-center align-items-center h-100 mb-5">
                    <div class="col-lg-7 col-xl-8">
                        <div class="text-white" style="border-radius: 25px;border: 2px solid white;margin: 5px">
                            <div class="card-body p-md-5">
                                <div class="row justify-content-center">
                                    <div class="col-md-12 order-lg-1">
                                        <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4 video-title"
                                           style="font-family: 'video-header' !important;font-weight: 400 !important;text-shadow: #fff 0px 0px 5px, #fff 0px 0px 10px, #004303 0px 0px 15px, #004703 0px 0px 20px, #068e0c 0px 0px 30px, #000601 0px 0px 40px, #213422 0px 0px 50px, #000000 0px 0px 75px;">
                                            SIGN IN</p>
                                        <form action="" class="mx-1 mx-md-4" method="post">

                                            <div class="d-flex flex-row align-items-center mb-4">
                                                <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                                                <div class="form-outline flex-fill mb-0 me-4">
                                                    <input class="form-control" id="form3Example3c" name="email"
                                                           required type="email"/>
                                                    <label class="form-label content-paragraph" for="form3Example3c">EMAIL</label>
                                                </div>
                                            </div>

                                            <div class="d-flex flex-row align-items-center mb-4">
                                                <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                                                <div class="form-outline flex-fill mb-0 me-4">
                                                    <input class="form-control" id="form3Example1c" name="password"
                                                           required type="password"/>
                                                    <label class="form-label content-paragraph" for="form3Example1c">PASSWORD</label>
                                                </div>
                                            </div>

                                            <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                                <button class="btn btn-light btn-lg" name="sub_log"
                                                        style="font-size: 25px;font-family: 'title-header';border-radius: 25px;padding-right: 50px;padding-left: 50px;padding-top: 12px;"
                                                        type="submit">
                                                    ENTER
                                                </button>
                                            </div>

                                            <div class=" mb-4 text-center">
                                                Don't have an account?&nbsp;<a class="text-white fw-bold"
                                                                               href="signup">Sign up</a>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="container body-margin footer-top mt-md-0 mt-5 mb-md-0 mb-5 pt-md-0 pt-5">
        </section>

        <section>
            <div class="footer">
                <div style="background: rgba(7,7,7,0.85);padding-top: 20px;margin-top: 5px;">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-6">
                                <p>
                                    Enjoy your stay in NEX City
                                </p>
                            </div>
                            <div class="col-lg-6 footer-line">
                                <p>
                                    business@nextinfotechs.com | COPYRIGHT © 2022 NEXT INFO TECHS All Rights Reserved
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </section>
    </section>

</div>

<script src="assets/js/bootstrap.bundle.min.js"></script>

<script src='assets/vendors/js/jquery.min.js'></script>

<script src='assets/vendors/js/wow.min.js'></script>

<script src='assets/vendors/js/swiper.min.js'></script>

<script src="assets/vendors/js/modernizr.min.js"></script>

<script src="assets/vendors/js/coingecko-coin-price-marquee-widget.js"></script>

<script src="assets/js/main.js"></script>

<?php
if (isset($_POST['sub_log'])) {
    $email = $db_handle->checkValue($_POST['email']);
    $password = $db_handle->checkValue($_POST['password']);

    $login = $db_handle->numRows("SELECT * FROM user WHERE email='$email' and password='$password'");

    $login_data = $db_handle->runQuery("SELECT * FROM user WHERE email='$email' and password='$password'");

    if ($login == 1) {
        $_SESSION['userid'] = $login_data[0]["id"];
        $_SESSION['name'] = $login_data[0]["name"];

        ?>
        <script>
            window.location.href = "profile.php";
        </script>
    <?php
    }else{
    ?>
        <script>
            alert('email address and password wrong!');
        </script>
        <?php
    }
}
?>
</body>
</html>
