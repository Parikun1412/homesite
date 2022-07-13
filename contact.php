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
    <title>Liên hệ</title>
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


    <!-- Contact Area Start -->
    <div class="contact-area pt-100px pb-100px">
        <div class="container">
            <div class="contact-wrapper">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="contact-info">
                            <div class="single-contact">
                                <div class="icon-box">
                                    <img src="assets/images/icons/4.png" alt="">
                                </div>
                                <div class="info-box">
                                    <h5 class="title">Số điện thoại:</h5>
                                    <p><a href="tel:0123456789">0938 835 402</a></p>
                                </div>
                            </div>
                            <div class="single-contact">
                                <div class="icon-box">
                                    <img src="assets/images/icons/5.png" alt="">
                                </div>
                                <div class="info-box">
                                    <h5 class="title">Email:</h5>
                                    <p><a href="mailto:demo@example.com">demo@example.com</a></p>
                                </div>
                            </div>
                            <div class="single-contact">
                                <div class="icon-box">
                                    <img src="assets/images/icons/6.png" alt="">
                                </div>
                                <div class="info-box">
                                    <h5 class="title">Địa chỉ:</h5>
                                    <p>135B Tây Lân, P. Bình Trị Đông A, Q. Bình Tân, TP. Hồ Chí Minh</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="contact-form">
                            <div class="contact-title mb-30">
                                <h2 class="title" data-aos="fade-up" data-aos-delay="200">Tin nhắn hỗ trợ</h2>
                                <p>Mọi thắc mắc bạn có thể gửi tin nhắn chúng tôi sẽ phản hồi sớm nhất</p>
                            </div>
                            <form class="contact-form-style" id="contact-form" method="POST" onsubmit="postSupport()">
                                <div class="row">
                                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                                        <input name="name" placeholder="Tên của bạn*" value=""  type="text" />
                                    </div>
                                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                                        <input name="email" placeholder="Email*" value="" type="email" />
                                    </div>
                                    <div class="col-lg-12" data-aos="fade-up" data-aos-delay="200">
                                        <textarea name="message" placeholder="Tin nhắn của bạn*" ></textarea>
                                        <button class="btn btn-primary mt-4" data-aos="fade-up" data-aos-delay="200" type="submit">Gửi hỗ trợ <i class="fa fa-arrow-right"></i></button>
                                    </div>
                                </div>
                            </form>
                            <p class="form-messege"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Area End -->

    <!-- map Area Start -->

    <!-- <div class="contact-map">
        <div id="mapid">
            <div class="mapouter">
                <div class="gmap_canvas">
                    <iframe id="gmap_canvas" src="https://maps.google.com/maps?q=121%20King%20St%2C%20Melbourne%20VIC%203000%2C%20Australia&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                    <a href="https://sites.google.com/view/maps-api-v2/mapv2"></a>
                </div>
            </div>
        </div>
    </div> -->
    <!-- map Area End -->

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
    <script src="./assets/js/process-ajax/contact.js"></script>
</body>

</html>