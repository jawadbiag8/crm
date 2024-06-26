<?php
ob_start();

if (!isset($_SESSION)) {

    session_start();
}
?>

<!DOCTYPE html>

<html lang="eng">

    <?php
    include("common/lib/conn.php");
    ?>

    <head>

        <meta charset="UTF-8">

        <meta name="description" content="KonJaie Business to Business Solutions">

        <meta name="keywords" content="ZoneElectronics business,brands,online shopping">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">

        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="facebook-domain-verification" content="vm43wqywqwbgcvelkq7ozjvlckyw3q" />
        <title>ZoneElectronics | Trust-Empower-Future</title>

        <meta property="og:title" content="ZoneElectronics social media sharing"/>
        <meta property="og:image" content="URL OF IMAGE ONLY"/>
        <meta property="og:url" content="https://ZoneElectronics.com"/>
        <meta property="og:description" content="ZoneElectronics social media sharing"/>

        <!-- Google Font -->




        <!-- Css Styles -->




        <style>
            #button_share img {
                width: 36px;
                box-shadow: 0;
                padding: 6px;
                display: inline;
                border: 0;
            }
            #button_share a i{
                color: #ffffff;
                border-radius: 50%;
                background: #efa31d;
                padding: 8px;
            }
            .action_bag{

                background: #e7ab3c;

                color: #ffffff;

                border:0px;

                height:100%;

                padding: 16px 12px 12px 11px;

            }

            .paginations{

                padding: 20px;

                background-color: #e7ab3c;

                color: #FFF;

                float: left;

                margin-left: 5px;

            }

            .active_page{

                background-color: #CCC;

                color: #333;

                pointer-events: none;

            }

        </style>


        <link media="print" onload="this.onload = null;this.removeAttribute('media');" href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">

        <link rel="stylesheet"media="print" onload="this.onload = null;this.removeAttribute('media');" href="css/bootstrap.min.css" type="text/css">

        <link rel="stylesheet" media="print" onload="this.onload = null;this.removeAttribute('media');" href="css/font-awesome.min.css" type="text/css">

        <link rel="stylesheet" media="print" onload="this.onload = null;this.removeAttribute('media');" href="css/themify-icons.css" type="text/css">

        <link rel="stylesheet" media="print" onload="this.onload = null;this.removeAttribute('media');" href="css/elegant-icons.css" type="text/css">

        <link rel="stylesheet" media="print" onload="this.onload = null;this.removeAttribute('media');" href="css/owl.carousel.min.css" type="text/css">

        <link rel="stylesheet" media="print" onload="this.onload = null;this.removeAttribute('media');" href="css/nice-select.css" type="text/css">

        <link rel="stylesheet" media="print" onload="this.onload = null;this.removeAttribute('media');" href="css/jquery-ui.min.css" type="text/css">

        <link rel="stylesheet"media="print" onload="this.onload = null;this.removeAttribute('media');" href="css/slicknav.min.css" type="text/css">

        <link rel="stylesheet" media="print" onload="this.onload = null;this.removeAttribute('media');" href="css/style.css" type="text/css">

        <link rel="stylesheet" media="print" onload="this.onload = null;this.removeAttribute('media');" href="common/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">

        <link rel="stylesheet" media="print" onload="this.onload = null;this.removeAttribute('media');" href="common/plugins/toastr/toastr.min.css">

        <link rel="icon" href="img/favicon.ico" type="image/gif" sizes="16x16">

        <script src="cart_js/jquery.min.js"></script>

        <script src="cart_js/bootstrap.min.js"></script>

        <!--  -->
        <!-- Meta Pixel Code -->
        <script>
            !function (f, b, e, v, n, t, s)
            {
                if (f.fbq)
                    return;
                n = f.fbq = function () {
                    n.callMethod ?
                            n.callMethod.apply(n, arguments) : n.queue.push(arguments)
                };
                if (!f._fbq)
                    f._fbq = n;
                n.push = n;
                n.loaded = !0;
                n.version = '2.0';
                n.queue = [];
                t = b.createElement(e);
                t.async = !0;
                t.src = v;
                s = b.getElementsByTagName(e)[0];
                s.parentNode.insertBefore(t, s)
            }(window, document, 'script',
                    'https://connect.facebook.net/en_US/fbevents.js');
            fbq('init', '1309990066167132');
            fbq('track', 'PageView');
        </script>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-218221055-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());

            gtag('config', 'UA-218221055-1');
        </script>
        <noscript>
    <img height="1" width="1" style="display:none"
         src="https://www.facebook.com/tr?id=1309990066167132&ev=PageView&noscript=1"
         /></noscript>
    <!-- End Meta Pixel Code -->
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

    <!-- Custom Theme files -->

    <link href="css/style1.css" media="print" onload="this.onload = null;this.removeAttribute('media');" rel="stylesheet" type="text/css" media="all" />

    <!-- //Custom Theme files -->

    <!-- web font

    <link media="print" onload="this.onload=null;this.removeAttribute('media');" href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
    -->

</head>



<body>


    <!-- Header Section Begin -->

    <header class="header-section">

        <div class="header-top">

            <div class="container">

                <div class="ht-left">

                    <div class="mail-service">

                        <i class=" fa fa-envelope"></i>

                        <a href="mailto:#" style="color: #000;">

                            info@zoneelectonics.com

                        </a>   



                    </div>

                    <!-- <div class="phone-service">

                        <i class=" fa fa-phone"></i>

                        +92 51 12345

                    </div> -->

                </div>

                <div class="ht-right">

                    <!-- <a href="become-partner.php" class="login-panel"><i class="fa fa-user"></i>Become Partner</a> -->

                    <!-- <a href="vendor/" class="login-panel"><i class="fa fa-user"></i>Partner Login</a> -->



                    <div class="top-social">

                        <a href="https://www.facebook.com/ZoneElectronicsPlatform" target="_blank"><i class="ti-facebook"></i></a>

                        <a href="https://www.linkedin.com/in/kon-jae-846b50220/" target="_blank"><i class="ti-linkedin"></i></a>

                        <a href="https://twitter.com/ZoneElectronicsplatform" target="_blank"><i class="ti-twitter-alt"></i></a>

                        <a href="https://www.instagram.com/ZoneElectronicsplatform/" target="_blank"><i class="ti-instagram"></i></a>

                        <!-- <a href="https://co.pinterest.com/ZoneElectronicss" target="_blank"><i class="ti-pinterest"></i></a> -->

                    </div>

                    <!-- <a href="request-a-qoute.php" class="login-panel"><i class="fa fa-paper-plane"></i>Request a Quote</a> -->



                </div>



            </div>

        </div>

        <div class="container">

            <div class="inner-header">

                <div class="row">

                    <div class="col-lg-2 col-md-2">

                        <div class="logo">

                            <a href="index.php">

                                <img src="img/logo.png" alt="zone electronics">

                            </a>

                        </div>

                    </div>

                    <div class="col-lg-7 col-md-7">

                        <form method="GET" action="shop.php">

                            <div class="advanced-search">

                                <input type="hidden" name="searched_product" id="">

                                <!-- <button type="button" class="category-btn">All Cities</button> -->

                                <select name="cities_name">

                                    <option value="all">All Cities</option>

                                    <?php
                                    $userdata = $conn->query("SELECT * FROM `tbl_cities`");

                                    while ($row = $userdata->fetch_assoc()):
                                        ?>

                                        <option value="<?= $row['cities_id']; ?>"><?= $row['cities_name']; ?></option>

                                        <?php
                                    endwhile;
                                    ?>

                                </select>

                                <div class="input-group">

                                    <input type="text" placeholder="What do you need?" name="search_name" >

                                    <button type="submit"><i class="ti-search"></i></button>

                                </div>



                            </div>

                        </form>

                    </div>

                    <div class="col-lg-3 text-right col-md-3">

                        <ul class="nav-right">



                            <li class="cart-icon">

                                <a href="#" id="cart-popover">

                                    <i class="icon_bag_alt"></i>

                                    <span class="badge" style="right:-18px; width:20px; height:20px; ">0</span>

                                    <span style="position: absolute; top:-17px; width:50px; height:15px; left: 00px; background-color:#FFFFFF; color:#CCCCCC;" class="total_price">$ 0.00</span>

                                </a>



                                <?php if (basename($_SERVER['PHP_SELF']) != 'shopping-cart.php') { ?>

                                    <div id="popover_content_wrapper">

                                        <div class="cart-hover" id="cart_details">



                                        </div>

                                    </div>

                                <?php } ?>







                            </li>

                            <?php if (isset($_SESSION['merchant'])) { ?>

                                <li class="cart-price"><a href="merchant/index.php">Dashboard</a></li>

                            <?php } elseif (isset($_SESSION['vendor'])) {
                                ?>

                                <li class="cart-price"><a href="vendor/index.php">Dashboard</a></li>

                            <?php } else {
                                ?>

                                <li class="cart-price"><a href="login.php">Login</a> / <a href="signup.php">Register</a></li>

                            <?php } ?>

                        </ul>

                    </div>

                </div>

            </div> 

        </div>



        <?php

        function getCat($cat_id, $conn) {

            $userdata = $conn->query("SELECT `cat_name` FROM `tbl_categories` WHERE cat_id = '$cat_id'");

            while ($row = $userdata->fetch_assoc()):



                echo $row['cat_name'];

            endwhile;
        }

        function get_vendor_name($vendor_id, $conn) {

            $userdata = $conn->query("SELECT `vend_business_name` FROM `tbl_vendors` WHERE vendor_id = '$vendor_id'");

            while ($row = $userdata->fetch_assoc()):



                echo $row['vend_business_name'];

            endwhile;
        }

        function has_sub_cat($cat_id, $conn) {

            $get_sb_cat = $conn->query("SELECT * FROM `tbl_sub_categories` WHERE cat_id='$cat_id'");

            if (mysqli_num_rows($get_sb_cat) > 0) {

                return true;
            } else {

                return false;
            }
        }

        function get_product_qty($conn, $product_id) {

            $total_qty = $conn->query("SELECT product_quantity FROM `tbl_products` WHERE product_id='$product_id'")->fetch_assoc();

            return $total_qty['product_quantity'];
        }

        function update_product_qty($conn, $product_id, $current_qty, $sold_out) {

            $total_qty = $current_qty - $sold_out;

            $conn->query("UPDATE `tbl_products` SET `product_quantity`='$total_qty' WHERE `product_id`='$product_id'");
        }
        ?>
