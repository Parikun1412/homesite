<?php
$path = dirname(__FILE__);
require_once $path . '/class/product.php';

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

    <!-- Hero/Intro Slider Start -->
    <div class="section ">
        <div class="hero-slider swiper-container slider-nav-style-1 slider-dot-style-1">
            <!-- Hero slider Active -->
            <div class="swiper-wrapper">
                <!-- Single slider item -->
                <div class="hero-slide-item slider-height swiper-slide d-flex bg-color1">
                    <div class="container align-self-center">
                        <div class="row">
                            <div class="col-xl-5 col-lg-5 col-md-5 col-sm-5 align-self-center sm-center-view">
                                <div class="hero-slide-content slider-animated-1">
                                    <span class="category">Offer 2022</span>
                                    <h2 class="title-1">Gà ta</h2>
                                    <!-- <h2 class="title-2"><span>50%</span> Off</h2> -->
                                    <a href="shop-left-sidebar.html" class="btn btn-lg btn-primary btn-hover-dark">Mua
                                        ngay<i class="fa fa-shopping-basket ml-15px" aria-hidden="true"></i></a>
                                </div>
                            </div>
                            <div class="col-xl-7 col-lg-7 col-md-7 col-sm-7 d-flex justify-content-center position-relative">
                                <div class="show-case">
                                    <div class="hero-slide-image">
                                        <img src="./assets/images/slider-image/gata.jpg" alt="" />
                                    </div>
                                    <!-- <div class="display-wrapper">
                                        <div class="content-side">
                                            <h4 class="title">Full Dress</h4>
                                            <span class="price">$21.00</span>
                                            <a href="shop-left-sidebar.html" class="shop-link">Shop Now</a>
                                        </div>
                                        <div class="image-side">
                                            <img src="assets/images/slider-image/display-image.png" alt="">
                                        </div>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single slider item -->
                <div class="hero-slide-item slider-height swiper-slide d-flex bg-color2">
                    <div class="container align-self-center">
                        <div class="row">
                            <div class="col-xl-5 col-lg-5 col-md-5 col-sm-5 align-self-center sm-center-view">
                                <div class="hero-slide-content slider-animated-1">
                                    <span class="category">Offer 2022</span>
                                    <h2 class="title-1">Heo sữa</h2>
                                    <!-- <h2 class="title-2"><span>50%</span> Off</h2> -->
                                    <a href="shop-left-sidebar.html" class="btn btn-lg btn-primary btn-hover-dark">Mua
                                        ngay<i class="fa fa-shopping-basket ml-15px" aria-hidden="true"></i></a>
                                </div>
                            </div>
                            <div class="col-xl-7 col-lg-7 col-md-7 col-sm-7 d-flex justify-content-center position-relative">
                                <div class="show-case">
                                    <div class="hero-slide-image">
                                        <img src="assets/images/slider-image/heosua.jpg" alt="" />
                                    </div>
                                    <!-- <div class="display-wrapper">
                                        <div class="content-side">
                                            <h4 class="title">Full Dress</h4>
                                            <span class="price">$21.00</span>
                                            <a href="shop-left-sidebar.html" class="shop-link">Shop Now</a>
                                        </div>
                                        <div class="image-side">
                                            <img src="assets/images/slider-image/display-image.png" alt="">
                                        </div>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination swiper-pagination-white"></div>
            <!-- Add Arrows -->
            <div class="swiper-buttons">
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </div>

    <!-- Hero/Intro Slider End -->
    <br><br><br>



    <!-- Product Area Start -->
    <div class="product-area">
        <div class="container">
            <!-- Section Title & Tab Start -->
            <div class="row">
                <!-- Section Title Start -->
                <div class="col-lg col-md col-12">
                    <div class="section-title mb-0 text-center">
                        <h2 class="title">#thực phẩm tươi</h2>
                    </div>
                </div>
                <!-- Section Title End -->

                <!-- Tab Start -->
                <!-- <div class="col-lg-auto col-md-auto col-12">
                    <ul class="product-tab-nav nav">
                        <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab"
                                href="#tab-product-all">All</a></li>
                        <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#tab-product-new">New</a>
                        </li>
                        <li class="nav-item"><a class="nav-link" data-bs-toggle="tab"
                                href="#tab-product-bestsellers">Bestsellers</a></li>
                        <li class="nav-item"><a class="nav-link" data-bs-toggle="tab"
                                href="#tab-product-itemssale">Items
                                Sale</a></li>
                    </ul>
                </div> -->
                <!-- Tab End -->
            </div>
            <!-- Section Title & Tab End -->

            <div class="row">
                <div class="col">
                    <div class="tab-content top-borber">
                        <!-- 1st tab start -->
                        <div class="tab-pane fade show active">
                            <div class="row">
                                <?php
                                $productModel = new Product();
                                $products = $productModel->getProducts();
                                if ($products) {
                                    while ($row = $products->fetch_assoc()) {
                                        if ($row['status'] != 1)
                                            continue;
                                ?>
                                        <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up" data-aos-delay="200">
                                            <!-- Single Prodect -->
                                            <div class="product">
                                                <div class="thumb">
                                                    <a href="product.php?id_product=<?php echo $row['id_product'] ?>" class="image">
                                                        <img src="<?php echo $row['image'] ?>" height="150px" alt="Product" />
                                                        <img class="hover-image" src="<?php echo $row['image'] ?>" alt="Product" />
                                                    </a>
                                                    <!-- <span class="badges">
                                                        <span class="new">New</span>
                                                    </span> -->
                                                    <button title="Add To Cart" class=" add-to-cart">Thêm vào giỏ hàng</button>
                                                </div>
                                                <div class="content">
                                                    <!-- <span class="ratings">
                                                        <span class="rating-wrap">
                                                            <span class="star" style="width: 100%"></span>
                                                        </span>
                                                        <span class="rating-num">( 5 Review )</span>
                                                    </span> -->
                                                    <h5 class="title"><a href="product.php?id_product=<?php echo $row['id_product'] ?>"><?php echo $row['name'] ?></a>
                                                    </h5>
                                                    <span class="price">
                                                        <?php
                                                        if (substr($row['name'], 0, 3) == 'Heo') {
                                                        ?>
                                                            <span class="new"><?php echo number_format($row['price']) ?> đ <span>/ 1 con </span></span>
                                                        <?php
                                                        } else {
                                                        ?>
                                                            <span class="new"><?php echo number_format($row['price']) ?> đ <span>/ 1 kg </span></span>
                                                        <?php
                                                        }
                                                        ?>

                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                <?php
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <!-- 1st tab end -->
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Product Area End -->

    <!-- Deal Area Start -->
    <!-- <div class="deal-area pb-100px pt-100px">
        <div class="container ">
            <div class="row">
                <div class="col-12">
                    <div class="deal-inner deal-bg position-relative pt-100px pb-100px"
                        data-bg-image="assets/images/deal-img/deal-bg.jpg">
                        <div class="deal-wrapper">
                            <span class="category">#FASHION SHOP</span>
                            <h3 class="title">Deal Of The Day</h3>
                            <div class="deal-timing">
                                <div data-countdown="2021/05/15"></div>
                            </div>
                            <a href="single-product-variable.html" class="btn btn-lg btn-primary btn-hover-dark m-auto">
                                Shop
                                Now <i class="fa fa-shopping-basket ml-15px" aria-hidden="true"></i></a>
                        </div>
                        <div class="deal-image">
                            <img class="img-fluid" src="assets/images/deal-img/woman.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Deal Area End -->
    <br><br>
    <hr>
    <br><br>
    <!-- Feature Area Srart -->
    <?php
    $path = dirname(__FILE__);
    require_once $path . '/includes/featureArea.php';
    ?>
    <!-- Feature Area End -->

    <div class="feature-area pb-100px">
        <div class="container">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4"> <img src="./assets/images/logo/logo.png" width="100%" alt=""></div>
                <div class="col-md-4"></div>
            </div>
        </div>
    </div>

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
    <!-- Modal end -->

    <!-- Global Vendor, plugins JS -->

    <!-- Vendor JS -->
    <?php
    $path = dirname(__FILE__);
    require_once $path . '/includes/scripts.php';
    ?>
</body>

</html>