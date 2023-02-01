<?php
session_start();
include('include/dbController.php');
$db_handle = new DBController();
?>
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
                         src="assets/images/logo/NGT-logo.png"/>
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
                <?php
                $data = $db_handle->runQuery("SELECT * FROM user where id={$_SESSION['userid']}");
                ?>
                <div class="collapse navbar-collapse container" id="main_nav">
                    <ul class="navbar-nav ms-auto" style="margin-right: 65px">
                        <li class="nav-item"><a class="nav-link text-white" href="home#about"> About NGT </a></li>
                        <li class="nav-item"><a class="nav-link text-white" href="home#service"> Service </a></li>
                        <li class="nav-item"><a class="nav-link text-white" href="home#start"> Start </a></li>
                        <li class="nav-item"><a class="nav-link text-white" href="home#start"> Cert & Audit </a></li>
                        <li class="nav-item"><a class="nav-link text-white" href="home#ngtPass"> NGT Pass </a></li>
                        <li class="nav-item"><a class="nav-link text-white" href="home#press"> Press </a></li>
                        <li class="nav-item"><a class="nav-link text-white" href="logout.php" style="text-shadow: #fff 0px 0px 5px, #fff 0px 0px 10px, #004303 0px 0px 15px, #004703 0px 0px 20px, #068e0c 0px 0px 30px, #000601 0px 0px 40px, #213422 0px 0px 50px, #000000 0px 0px 75px;"> Sign Out </a></li>
                        <li class="nav-item"><a class="nav-link text-white" href="#">
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
        <section class="text-white pt-md-3 pb-md-5 pt-3 pb-5">
            <div class="container h-100 pb-md-5 mb-5 pb-5">
                <div class="row d-flex justify-content-center align-items-center h-100 mb-5">
                    <div class="col-lg-7 col-xl-8">
                        <div class="text-white" style="border-radius: 25px;border: 2px solid white;margin: 5px">
                            <div class="card-body p-md-5">
                                <div class="row justify-content-center">
                                    <input type="hidden" name="profile_id" id="profile_id" value="<?php echo $data[0]['id']; ?>"/>
                                    <div class="col-12 text-right">
                                        <div class="d-flex align-items-end justify-content-end">
                                            <h4><a href="edit_profile.php?id=<?php echo $data[0]['id']; ?>" class="text-white text-decoration-none"><i
                                                            class="fa-solid fa-pen-to-square"></i> Edit</a></h4>
                                        </div>
                                    </div>
                                    <div class="col-md-12 order-lg-1">
                                        <div class="d-flex flex-row align-items-center mx-auto text-center justify-content-center">
                                            <img src="<?php echo $data[0]['image']; ?>"
                                                 style="height: 250px;width: 250px;border-radius: 50%;border:2px solid white">
                                        </div>

                                        <div class="d-flex flex-row align-items-center justify-content-center">
                                            <p class="text-center h1 fw-bold mx-1 mx-md-4 mt-4 video-title"
                                               style="font-family: 'video-header' !important;font-weight: 400 !important;text-shadow: #fff 0px 0px 5px, #fff 0px 0px 10px, #004303 0px 0px 15px, #004703 0px 0px 20px, #068e0c 0px 0px 30px, #000601 0px 0px 40px, #213422 0px 0px 50px, #000000 0px 0px 75px;">
                                                <?php echo $data[0]['name']; ?>
                                            </p>
                                        </div>
                                        <div class="d-flex flex-row align-items-center mb-4 justify-content-center">
                                            <h4 class="content-title">
                                                Point: <?php
                                                $data_point = $db_handle->runQuery("SELECT sum(coin) as coin_data FROM usercoin where user_id={$_SESSION['userid']}");

                                                if(!is_null($data_point[0]['coin_data']))
                                                    echo $data_point[0]['coin_data'];
                                                else
                                                    echo 0;
                                                ?>
                                            </h4>
                                        </div>
                                        <div class="d-flex flex-row align-items-center mb-4 justify-content-center">
                                            <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                                <form action="collect_coin.php" method="post">
                                                    <button type="submit" name="claimCoin" class="btn btn-light btn-lg" id="coin-claim"
                                                            style="font-size: 25px;font-family: 'title-header';border-radius: 25px;padding-right: 50px;padding-left: 50px;padding-top: 12px;" disabled>
                                                        CLAIM NGT POINT
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                        <div class=" mb-4 text-center">
                                            Claim NGT Points.
                                        </div>
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
                                    Enjoy your stay in NGT City.
                                </p>
                            </div>
                            <div class="col-lg-6 footer-line">
                                <p>
                                    business@ngttech.io | COPYRIGHT © 2022 NGT All Rights Reserved
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

<script>
    function LoadCoin()
    {
        let profile_id=document.getElementById('profile_id').value;
        $.ajax({
            type: 'get',
            url: 'coin_data.php',
            success: function(data) {
                console.log(data);
                if(data==='CLAIM NGT POINT'){
                    document.getElementById("coin-claim").innerHTML = data;
                    document.querySelector('#coin-claim').disabled = false;
                }else{
                    document.getElementById("coin-claim").innerHTML = data;
                    document.querySelector('#coin-claim').disabled = true;
                }
            }
        });
    }

    setInterval(LoadCoin, 3000);
</script>
</body>
</html>
