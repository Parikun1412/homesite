    <?php
    if (!isset($_SESSION)) {
        session_start();
    }
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }
    ?>

    <!-- Top Bar -->

    <div class="header-to-bar" style="font-size: 20px!important; font-weight:bold; color:white">Gọi trực tiếp hoặc liên hệ Zalo số: 0938 835 402 - Trần Thị Hiên</div>

    <!-- Top Bar -->
    <header>
        <div class="header-main sticky-nav ">
            <div class="container position-relative">
                <div class="row">
                    <div class="col-auto align-self-center">
                        <div class="header-logo">
                            <a href="index.php"><img src="./assets/images/logo/logo.png" width="100%" alt="Site Logo" /></a>
                        </div>
                    </div>
                    <div class="col align-self-center d-none d-lg-block">
                        <div class="main-menu">
                            <ul>
                                <li class="dropdown"><a href="index.php">Trang chủ</a>
                                </li>
                                <li class="dropdown position-static"><a href="category.php">Sản phẩm</a>

                                </li>
                                <li class="dropdown "><a href="about.php">Giới thiệu</a>
                                </li>
                                <li><a href="contact.php">Liên hệ</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Header Action Start -->
                    <div class="col col-lg-auto align-self-center pl-0">
                        <div class="header-actions">
                            <!-- <a href="#" class="header-action-btn login-btn" data-bs-toggle="modal" data-bs-target="#loginActive">Sign In</a> -->
                            <a href="#" class="header-action-btn" data-bs-toggle="modal" data-bs-target="#searchActive">
                                <i class="pe-7s-search"></i>
                            </a>
                            <!-- Single Wedge End -->
                            <!-- Single Wedge Start -->
                            <!-- Single Wedge End -->
                            <a href="#offcanvas-cart" class="header-action-btn header-action-btn-cart offcanvas-toggle pr-0">
                                <i class="pe-7s-shopbag"></i>
                                <span class="header-action-num"><?php echo count($_SESSION['cart']) ?></span>
                                <!-- <span class="cart-amount">€30.00</span> -->
                            </a>
                            <a href="#offcanvas-mobile-menu" class="header-action-btn header-action-btn-menu offcanvas-toggle d-lg-none">
                                <i class="pe-7s-menu"></i>
                            </a>
                        </div>
                        <!-- Header Action End -->
                    </div>
                </div>
            </div>
    </header>