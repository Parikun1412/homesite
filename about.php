<?php
if (!isset($_SESSION)) {
    session_start();
}

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="robots" content="index, follow" />
    <title>Giới thiệu</title>
    <meta name="description" content="Jesco - Fashoin eCommerce HTML Template" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <?php
    $path = dirname(__FILE__);
    require_once $path . '/includes/linkCss.php';
    ?>

</head>

<body>
    <!-- Header Area Start -->
    <?php
    $path = dirname(__FILE__);
    require_once $path . '/includes/header.php';
    ?>
    <!-- Header Area End -->
    <div class="offcanvas-overlay"></div>

    <!-- OffCanvas Wishlist Start -->
    <?php
    $path = dirname(__FILE__);
    require_once $path . '/includes/offcanvasWishlist.php';
    ?>
    <!-- OffCanvas Wishlist End -->
    <!-- OffCanvas Cart Start -->
    <?php
    $path = dirname(__FILE__);
    require_once $path . '/includes/offcanvasCart.php';
    ?>
    <!-- OffCanvas Cart End -->

    <!-- OffCanvas Menu Start -->
    <?php
    $path = dirname(__FILE__);
    require_once $path . '/includes/offcanvasMobileMenu.php';
    ?>
    <!-- OffCanvas Menu End -->

    <!-- About Intro Area start-->
    <div class="about-intro-area">
        <div class="container position-relative h-100 d-flex align-items-center">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="about-intro-content">
                        <h2 class="title">Giới Thiệu</h2>
                        <p>Công ty TNHH MTV Thực Phẩm Vũ Kiệt hiện được đặt tại TP. Hồ Chí Minh
                            chuyên giao thực phẩm tươi về các mặt hàng gà và heo. Giao hàng chuẩn,
                            tươi ngon phù hợp với người tiêu dùng. Đặt hàng là có ngay tại TP. Hồ Chí Minh. </p>
                    </div>
                </div>
            </div>
            <div class="intro-right">
                <img src="assets/images/about-image/house.png" alt="" width="72%" class="intro-right-image">
            </div>
        </div>
    </div>

    <!-- About Intro Area End-->

    <!-- Service Area Start -->

    <div class="service-area">
        <div class="container">
            <div class="row">
                <div class="col-md-6 d-flex">
                    <div class="service-left align-self-center align-items-center">
                        <img src="./assets/images/about-image/ATTP.jpg" width="70%" alt="" class="service-left-image">
                    </div>
                </div>
                <div class="col-md-6 d-flex justify-content-center">
                    <div class="service-right-content align-self-center align-items-center">
                        <!-- <span class="sami-title">100% Guaranteed Pure Cotton</span> -->
                        <h2 class="title">Giấy chứng nhận cơ sở đủ điều kiện An toàn thực phẩm</h2>
                        <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eius modjior tem incididunt
                            ut labore et dolore magna aliqua.</p>
                        <a href="shop-left-sidebar.html" class="btn btn-primary service-btn"> Shop Now <i class="fa fa-shopping-basket ml-10px" aria-hidden="true"></i></a> -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Service Area End -->
    <br><br><br>
    <!-- Feature Area Srart -->
    <?php
    $path = dirname(__FILE__);
    require_once $path . '/includes/featureArea.php';
    ?>
    <!-- Feature Area End -->


    <!-- Footer Area Start -->
    <?php
    $path = dirname(__FILE__);
    require_once $path . '/includes/footer.php';
    ?>
    <!-- Footer Area End -->

    <!-- Search Modal Start -->
    <?php
    $path = dirname(__FILE__);
    require_once $path . '/includes/modals.php';
    ?>
    <!-- Login Modal End -->

    <!-- Global Vendor, plugins JS -->
    <?php
    $path = dirname(__FILE__);
    require_once $path . '/includes/scripts.php';
    ?>
</body>

</html>