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
    <title>Jesco - Fashoin eCommerce HTML Template</title>
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
                    <h2 class="breadcrumb-title">Chính sách bảo mật</h2>
                    <!-- breadcrumb-list start -->
                    <ul class="breadcrumb-list">
                        <li class="breadcrumb-item"><a href="index.php">Trang chủ</a></li>
                        <li class="breadcrumb-item active">Chính sách bảo mật</li>
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
                        <h5 class="title" style="font-size: 30px;"><b>Chính sách bảo mật tại Vu Kiet Food</b></h5>
                        <p>Tại Vu Kiet Food, sự riêng tư của khách hàng là điều vô cùng quan trọng. Vì thế, Vu Kiet Food sẽ chỉ thu thập những thông tin cần thiết và có liên quan đến giao dịch giữa quý khách hàng và Vu Kiet Food. Những thông tin này gồm có tên, số điện thoại và một số thông tin khác của quý khách hàng theo cách được đề ra trong "Chính Sách Bảo Mật" này.</p>
                        <p>Quý khách có thể ghé thăm trang web vukietfood.com mà không cần phải cung cấp bất kỳ thông tin cá nhân nào. Khi truy cập trang web, quý khách sẽ luôn ở trong tình trạng vô danh trừ khi quý khách đăng ký tài khoản trên web và đăng nhập vào tài khoản đó.</p>
                    </div>
                    <br>
                    <div class="about-intro-content">
                        <h4 class="title" style="font-size: 21px;"><b><i>Quy định Bảo mật của Vu Kiet Food hoàn toàn tuân theo theo Quy định của Pháp luật về Bảo mật thông tin cá nhân.</i></b></h4>
                        <p>vukietfood.com không bán, chia sẻ hay trao đổi thông tin cá nhân của khách hàng thu thập trên website cho một bên thứ ba nào khác.
                        </p>
                        <p>Thông tin cá nhân của quý khách hàng sẽ chỉ được sử dụng trong nội bộ công ty.</p>
                        <p>Những thông tin trên sẽ được sử dụng cho một hoặc tất cả các mục đích sau đây:</p>
                        <ul>
                            <li>- Giao hàng quý khách đã mua tại vukietfood.com</li>
                            <li>- Thông báo về việc giao hàng và hỗ trợ khách hàng.</li>
                            <li>- Cung cấp thông tin liên quan đến sản phẩm.</li>
                            <li>- Xử lý đơn đặt hàng và cung cấp dịch vụ và thông tin qua trang web của chúng tôi theo yêu cầu của quý khách.</li>
                        </ul>
                        <p>Chúng tôi có thể chia sẻ tên và địa chỉ của quý khách cho dịch vụ chuyển phát nhanh hoặc nhà cung cấp của chúng tôi để có thể giao hàng cho quý khách.</p>
                    </div>
                    <br>
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