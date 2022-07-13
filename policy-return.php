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
    <title>Chính sách đổi trả</title>
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


    <!-- breadcrumb-area start -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-12 text-center">
                    <h2 class="breadcrumb-title">Điều khoản dịch vụ</h2>
                    <!-- breadcrumb-list start -->
                    <ul class="breadcrumb-list">
                        <li class="breadcrumb-item"><a href="index.php">Trang chủ</a></li>
                        <li class="breadcrumb-item active">Điều khoản dịch vụ</li>
                    </ul>
                    <!-- breadcrumb-list end -->
                </div>
            </div>
        </div>
    </div>

    <!-- breadcrumb-area end -->
    <br><br>
    <!-- About Intro Area start-->
    <div class="service-area">
        <div class="container position-relative h-100 d-flex align-items-center">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="about-intro-content">
                        <p>Chính sách đổi hàng của Vu Kiet Food ra đời với mong muốn mang đến cho khách hàng những trải nghiệm mua sắm tốt nhất, các mặt hàng của Vu Kiet Food khi gửi đến khách hàng luôn được đảm bảo là hàng nguyên mới, chất lượng, đúng với thông tin mô tả và hình ảnh trên website.</p>
                    </div>
                    <br>
                    <div class="about-intro-content">
                        <h4 class="title" style="font-size: 30px;">1. Khách hàng được đổi trả trong trường hợp nào</h4>
                        <p>Khách hàng được đổi hàng khác khi nhận được hàng không đúng với mô tả trên website, hàng bị lỗi.
                        </p>
                    </div>
                    <br>
                    <div class="about-intro-content">
                        <h4 class="title" style="font-size: 30px;">2. Làm thế nào để đổi trả hàng</h4>
                        <p>Gọi trực tiếp số điện thoại: <b>0938 835 402</b></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- About Intro Area End-->


    <br><br>
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
    <div id="processRespone"></div>
    <!-- Global Vendor, plugins JS -->
    <?php
    $path = dirname(__FILE__);
    require_once $path . '/includes/scripts.php';
    ?>
    <script src="./assets/js/process-ajax/order.js"></script>
</body>

</html>