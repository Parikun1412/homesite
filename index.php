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
    
?>

</head>

<body>

    <!-- Top Bar -->

    <div class="header-to-bar"> <b>Gọi trực tiếp hoặc liên hệ Zalo số: 0938835402 - Trần Thị Hiên</b> </div>

    <!-- Top Bar -->
    <!-- Header Area Start -->
    <header>
        <div class="header-main sticky-nav ">
            <div class="container position-relative">
                <div class="row">
                    <div class="col-auto align-self-center">
                        <div class="header-logo">
                            <a href="index.html"><img src="assets/images/logo/logo.png" alt="Site Logo" /></a>
                        </div>
                    </div>
                    <div class="col align-self-center d-none d-lg-block">
                        <div class="main-menu">
                            <ul>
                                <li class="dropdown"><a href="#">Trang chủ</a>
                                </li>
                                <li class="dropdown position-static"><a href="#">Sản phẩm</a>

                                </li>
                                <li class="dropdown "><a href="#">Giới thiệu</a>
                                </li>
                                <li><a href="about.html">Liên hệ</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Header Action Start -->
                    <div class="col col-lg-auto align-self-center pl-0">
                        <div class="header-actions">
                            <a href="#" class="header-action-btn" data-bs-toggle="modal" data-bs-target="#searchActive">
                                <i class="pe-7s-search"></i>
                            </a>
                            <!-- Single Wedge End -->
                            <!-- Single Wedge Start -->
                            <a href="#offcanvas-wishlist" class="header-action-btn offcanvas-toggle">
                                <i class="pe-7s-like"></i>
                            </a>
                            <!-- Single Wedge End -->
                            <a href="#offcanvas-cart"
                                class="header-action-btn header-action-btn-cart offcanvas-toggle pr-0">
                                <i class="pe-7s-shopbag"></i>
                                <span class="header-action-num">01</span>
                                <!-- <span class="cart-amount">€30.00</span> -->
                            </a>
                            <a href="#offcanvas-mobile-menu"
                                class="header-action-btn header-action-btn-menu offcanvas-toggle d-lg-none">
                                <i class="pe-7s-menu"></i>
                            </a>
                        </div>
                        <!-- Header Action End -->
                    </div>
                </div>
            </div>
    </header>
    <!-- Header Area End -->
    <div class="offcanvas-overlay"></div>

    <!-- OffCanvas Wishlist Start -->
    <div id="offcanvas-wishlist" class="offcanvas offcanvas-wishlist">
        <div class="inner">
            <div class="head">
                <span class="title">Wishlist</span>
                <button class="offcanvas-close">×</button>
            </div>
            <div class="body customScroll">
                <ul class="minicart-product-list">
                    <li>
                        <a href="single-product.html" class="image"><img src="assets/images/product-image/1.jpg"
                                alt="Cart product Image"></a>
                        <div class="content">
                            <a href="single-product.html" class="title">Women's Elizabeth Coat</a>
                            <span class="quantity-price">1 x <span class="amount">$21.86</span></span>
                            <a href="#" class="remove">×</a>
                        </div>
                    </li>
                    <li>
                        <a href="single-product.html" class="image"><img src="assets/images/product-image/2.jpg"
                                alt="Cart product Image"></a>
                        <div class="content">
                            <a href="single-product.html" class="title">Long sleeve knee length</a>
                            <span class="quantity-price">1 x <span class="amount">$13.28</span></span>
                            <a href="#" class="remove">×</a>
                        </div>
                    </li>
                    <li>
                        <a href="single-product.html" class="image"><img src="assets/images/product-image/3.jpg"
                                alt="Cart product Image"></a>
                        <div class="content">
                            <a href="single-product.html" class="title">Cool Man Wearing Leather</a>
                            <span class="quantity-price">1 x <span class="amount">$17.34</span></span>
                            <a href="#" class="remove">×</a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="foot">
                <div class="buttons">
                    <a href="wishlist.html" class="btn btn-dark btn-hover-primary mt-30px">view wishlist</a>
                </div>
            </div>
        </div>
    </div>
    <!-- OffCanvas Wishlist End -->
    <!-- OffCanvas Cart Start -->
    <div id="offcanvas-cart" class="offcanvas offcanvas-cart">
        <div class="inner">
            <div class="head">
                <span class="title">Cart</span>
                <button class="offcanvas-close">×</button>
            </div>
            <div class="body customScroll">
                <ul class="minicart-product-list">
                    <li>
                        <a href="single-product.html" class="image"><img src="assets/images/product-image/1.jpg"
                                alt="Cart product Image"></a>
                        <div class="content">
                            <a href="single-product.html" class="title">Women's Elizabeth Coat</a>
                            <span class="quantity-price">1 x <span class="amount">$18.86</span></span>
                            <a href="#" class="remove">×</a>
                        </div>
                    </li>
                    <li>
                        <a href="single-product.html" class="image"><img src="assets/images/product-image/2.jpg"
                                alt="Cart product Image"></a>
                        <div class="content">
                            <a href="single-product.html" class="title">Long sleeve knee length</a>
                            <span class="quantity-price">1 x <span class="amount">$43.28</span></span>
                            <a href="#" class="remove">×</a>
                        </div>
                    </li>
                    <li>
                        <a href="single-product.html" class="image"><img src="assets/images/product-image/3.jpg"
                                alt="Cart product Image"></a>
                        <div class="content">
                            <a href="single-product.html" class="title">Cool Man Wearing Leather</a>
                            <span class="quantity-price">1 x <span class="amount">$37.34</span></span>
                            <a href="#" class="remove">×</a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="foot">
                <div class="buttons mt-30px">
                    <a href="cart.html" class="btn btn-dark btn-hover-primary mb-30px">view cart</a>
                    <a href="checkout.html" class="btn btn-outline-dark current-btn">checkout</a>
                </div>
            </div>
        </div>
    </div>
    <!-- OffCanvas Cart End -->

    <!-- OffCanvas Menu Start -->
    <div id="offcanvas-mobile-menu" class="offcanvas offcanvas-mobile-menu">
        <button class="offcanvas-close"></button>

        <div class="inner customScroll">

            <div class="offcanvas-menu mb-4">
                <ul>
                    <li><a href="#"><span class="menu-text">Trang chủ</span></a>
                    </li>
                    <li><a href="#"><span class="menu-text">Sản phẩm</span></a>

                    </li>
                    <li><a href="#"><span class="menu-text">Giới thiệu</span></a>

                    </li>
                    <li><a href="about.html">Liên hệ</a></li>
                </ul>
            </div>
            <!-- OffCanvas Menu End -->
            <div class="offcanvas-social mt-auto">
                <ul>
                    <li>
                        <a href="#"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-google"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-youtube"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
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
                            <div
                                class="col-xl-7 col-lg-7 col-md-7 col-sm-7 d-flex justify-content-center position-relative">
                                <div class="show-case">
                                    <div class="hero-slide-image">
                                        <img src="assets/images/banner/banner_ga.jpg" alt="" />
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
                            <div
                                class="col-xl-7 col-lg-7 col-md-7 col-sm-7 d-flex justify-content-center position-relative">
                                <div class="show-case">
                                    <div class="hero-slide-image">
                                        <img src="assets/images/banner/banner-heo.png" alt="" />
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

    <!-- Feature Area Srart -->
    <div class="feature-area pb-100px">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6  ">
                    <!-- single item -->
                    <div class="single-feature">
                        <div class="feature-icon">
                            <img src="assets/images/icons/1.png" alt="">
                        </div>
                        <div class="feature-content">
                            <h4 class="title">Free Shipping</h4>
                            <span class="sub-title">Capped at $39 per order</span>
                        </div>
                    </div>
                </div>
                <!-- single item -->
                <div class="col-lg-4 col-md-6 mb-md-30px mb-lm-30px mt-lm-30px">
                    <div class="single-feature">
                        <div class="feature-icon">
                            <img src="assets/images/icons/2.png" alt="">
                        </div>
                        <div class="feature-content">
                            <h4 class="title">Card Payments</h4>
                            <span class="sub-title">12 Months Installments</span>
                        </div>
                    </div>
                </div>
                <!-- single item -->
                <div class="col-lg-4 col-md-6 ">
                    <div class="single-feature">
                        <div class="feature-icon">
                            <img src="assets/images/icons/3.png" alt="">
                        </div>
                        <div class="feature-content">
                            <h4 class="title">Easy Returns</h4>
                            <span class="sub-title">Shop With Confidence</span>
                        </div>
                    </div>
                    <!-- single item -->
                </div>
            </div>
        </div>
    </div>
    <!-- Feature Area End -->

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
                                <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up"
                                    data-aos-delay="200">
                                    <!-- Single Prodect -->
                                    <div class="product">
                                        <div class="thumb">
                                            <a href="single-product.html" class="image">
                                                <img src="assets/images/product-image/1.jpg" alt="Product" />
                                                <img class="hover-image" src="assets/images/product-image/2.jpg"
                                                    alt="Product" />
                                            </a>
                                            <span class="badges">
                                                <span class="new">New</span>
                                            </span>
                                            <div class="actions">
                                                <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                                        class="pe-7s-like"></i></a>
                                            </div>
                                            <button title="Add To Cart" class=" add-to-cart">Add
                                                To Cart</button>
                                        </div>
                                        <div class="content">
                                            <span class="ratings">
                                                <span class="rating-wrap">
                                                    <span class="star" style="width: 100%"></span>
                                                </span>
                                                <span class="rating-num">( 5 Review )</span>
                                            </span>
                                            <h5 class="title"><a href="single-product.html">Women's Elizabeth Coat
                                                </a>
                                            </h5>
                                            <span class="price">
                                                <span class="new">$38.50</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
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

    <!-- Testimonial Area Start -->
    <div class="testimonial-area pb-40px">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title text-center mb-0">
                        <h2 class="title line-height-1">#testimonials</h2>
                    </div>
                </div>
            </div>
            <!-- Slider Start -->
            <div class="testimonial-wrapper swiper-container">
                <div class="swiper-wrapper">
                    <!-- Slider Single Item -->
                    <div class="swiper-slide">
                        <div class="testi-inner">
                            <div class="reating-wrap">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </div>
                            <div class="testi-content">
                                <p>Lorem ipsum dolor sit amet, consect adipisici elit, sed do eiusmod tempol incididunt
                                    ut labore et dolore magna aliqua. Ut enim ad minim veniamfhq nostrud exercitation.
                                </p>
                            </div>
                            <div class="testi-author">
                                <div class="author-img">
                                    <img src="assets/images/testimonial-image/1.png" alt="">
                                </div>
                                <div class="author-name">
                                    <h4 class="name">Daisy Morgan</h4>
                                    <span class="title">Happy Customer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Slider Single Item -->
                    <div class="swiper-slide">
                        <div class="testi-inner">
                            <div class="reating-wrap">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </div>
                            <div class="testi-content">
                                <p>Lorem ipsum dolor sit amet, consect adipisici elit, sed do eiusmod tempol incididunt
                                    ut labore et dolore magna aliqua. Ut enim ad minim veniamfhq nostrud exercitation.
                                </p>
                            </div>
                            <div class="testi-author">
                                <div class="author-img">
                                    <img src="assets/images/testimonial-image/2.png" alt="">
                                </div>
                                <div class="author-name">
                                    <h4 class="name">Leah Chatman</h4>
                                    <span class="title">Happy Customer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Slider Single Item -->
                    <div class="swiper-slide">
                        <div class="testi-inner">
                            <div class="reating-wrap">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </div>
                            <div class="testi-content">
                                <p>Lorem ipsum dolor sit amet, consect adipisici elit, sed do eiusmod tempol incididunt
                                    ut labore et dolore magna aliqua. Ut enim ad minim veniamfhq nostrud exercitation.
                                </p>
                            </div>
                            <div class="testi-author">
                                <div class="author-img">
                                    <img src="assets/images/testimonial-image/3.png" alt="">
                                </div>
                                <div class="author-name">
                                    <h4 class="name">Reyna Chung</h4>
                                    <span class="title">Happy Customer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Slider Single Item -->
                    <div class="swiper-slide">
                        <div class="testi-inner">
                            <div class="reating-wrap">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </div>
                            <div class="testi-content">
                                <p>Lorem ipsum dolor sit amet, consect adipisici elit, sed do eiusmod tempol incididunt
                                    ut labore et dolore magna aliqua. Ut enim ad minim veniamfhq nostrud exercitation.
                                </p>
                            </div>
                            <div class="testi-author">
                                <div class="author-img">
                                    <img src="assets/images/testimonial-image/1.png" alt="">
                                </div>
                                <div class="author-name">
                                    <h4 class="name">Daisy Morgan</h4>
                                    <span class="title">Happy Customer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Slider Single Item -->
                    <div class="swiper-slide">
                        <div class="testi-inner">
                            <div class="reating-wrap">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </div>
                            <div class="testi-content">
                                <p>Lorem ipsum dolor sit amet, consect adipisici elit, sed do eiusmod tempol incididunt
                                    ut labore et dolore magna aliqua. Ut enim ad minim veniamfhq nostrud exercitation.
                                </p>
                            </div>
                            <div class="testi-author">
                                <div class="author-img">
                                    <img src="assets/images/testimonial-image/2.png" alt="">
                                </div>
                                <div class="author-name">
                                    <h4 class="name">Reyna Chung</h4>
                                    <span class="title">Happy Customer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Slider Single Item -->
                </div>
            </div>
            <!-- Slider Start -->
        </div>
    </div>
    <!-- Testimonial Area End -->

        <!-- Feature Area Srart -->
        <div class="feature-area pb-100px">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6  ">
                        <!-- single item -->
                        <div class="single-feature">
                            <div class="feature-icon">
                                <img src="assets/images/icons/1.png" alt="">
                            </div>
                            <div class="feature-content">
                                <h4 class="title">Free Shipping</h4>
                                <span class="sub-title">Capped at $39 per order</span>
                            </div>
                        </div>
                    </div>
                    <!-- single item -->
                    <div class="col-lg-4 col-md-6 mb-md-30px mb-lm-30px mt-lm-30px">
                        <div class="single-feature">
                            <div class="feature-icon">
                                <img src="assets/images/icons/2.png" alt="">
                            </div>
                            <div class="feature-content">
                                <h4 class="title">Card Payments</h4>
                                <span class="sub-title">12 Months Installments</span>
                            </div>
                        </div>
                    </div>
                    <!-- single item -->
                    <div class="col-lg-4 col-md-6 ">
                        <div class="single-feature">
                            <div class="feature-icon">
                                <img src="assets/images/icons/3.png" alt="">
                            </div>
                            <div class="feature-content">
                                <h4 class="title">Easy Returns</h4>
                                <span class="sub-title">Shop With Confidence</span>
                            </div>
                        </div>
                        <!-- single item -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Feature Area End -->

    <!-- Footer Area Start -->
    <div class="footer-area">
        <div class="footer-container">
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <!-- Start single blog -->
                        <div class="col-md-6 col-lg-3 mb-md-30px mb-lm-30px">
                            <div class="single-wedge">
                                <div class="footer-logo">
                                    <a href="index.html"><img src="assets/images/logo/logo-white.png" alt=""></a>
                                </div>
                                <p class="about-text">Lorem ipsum dolor sit amet consectet adipisicing elit, sed do
                                    eiusmod templ incididunt ut labore et dolore magnaol aliqua Ut enim ad minim.
                                </p>
                                <ul class="link-follow">
                                    <li>
                                        <a class="m-0" title="Twitter" href="#"><i class="fa fa-twitter"
                                                aria-hidden="true"></i></a>
                                    </li>
                                    <li>
                                        <a title="Tumblr" href="#"><i class="fa fa-tumblr" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a title="Facebook" href="#"><i class="fa fa-facebook" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a title="Instagram" href="#"><i class="fa fa-instagram" aria-hidden="true"></i>
                                            </i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- End single blog -->
                        <!-- Start single blog -->
                        <div class="col-md-3 col-sm-6 col-lg-2 mb-md-30px mb-lm-30px pl-lg-50px">
                            <div class="single-wedge">
                                <h4 class="footer-herading">Quick Links</h4>
                                <div class="footer-links">
                                    <div class="footer-row">
                                        <ul class="align-items-center">
                                            <li class="li"><a class="single-link" href="#">Support
                                                </a></li>
                                            <li class="li"><a class="single-link" href="#">Helpline</a></li>
                                            <li class="li"><a class="single-link" href="#">Courses</a></li>
                                            <li class="li"><a class="single-link" href="about.html">About</a></li>
                                            <li class="li"><a class="single-link" href="#">Event</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End single blog -->
                        <!-- Start single blog -->
                        <div class="col-md-3 col-lg-2 col-sm-6 mb-lm-30px pl-lg-50px">
                            <div class="single-wedge">
                                <h4 class="footer-herading">Other Page</h4>
                                <div class="footer-links">
                                    <div class="footer-row">
                                        <ul class="align-items-center">
                                            <li class="li"><a class="single-link" href="about.html"> About </a>
                                            </li>
                                            <li class="li"><a class="single-link" href="blog-grid.html">Blog</a></li>
                                            <li class="li"><a class="single-link" href="#">Speakers</a></li>
                                            <li class="li"><a class="single-link" href="contact.html">Contact</a></li>
                                            <li class="li"><a class="single-link" href="#">Tricket</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End single blog -->
                        <!-- Start single blog -->
                        <div class="col-md-3 col-lg-2 col-sm-6 mb-lm-30px pl-lg-50px">
                            <div class="single-wedge">
                                <h4 class="footer-herading">Company</h4>
                                <div class="footer-links">
                                    <div class="footer-row">
                                        <ul class="align-items-center">
                                            <li class="li"><a class="single-link" href="index.html">Jesco</a>
                                            </li>
                                            <li class="li"><a class="single-link" href="shop-left-sidebar.html">Shop</a>
                                            </li>
                                            <li class="li"><a class="single-link" href="contact.html">Contact us</a>
                                            </li>
                                            <li class="li"><a class="single-link" href="login.html">Log in</a></li>
                                            <li class="li"><a class="single-link" href="#">Help</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End single blog -->
                        <!-- Start single blog -->
                        <div class="col-md-4 col-lg-3 col-sm-6">
                            <div class="single-wedge">

                                <h4 class="footer-herading">Store Information.</h4>
                                <div class="footer-links">
                                    <!-- News letter area -->
                                    <p class="address">2005 Your Address Goes Here. <br>
                                        896, Address 10010, HGJ</p>
                                    <p class="phone">Phone/Fax:<a href="tel:0123456789">0123456789</a></p>
                                    <p class="mail">Email:<a href="mailto:demo@example.com">demo@example.com</a></p>
                                    <img src="assets/images/icons/payment.png" alt="" class="payment-img img-fulid">

                                    <!-- News letter area  End -->
                                </div>
                            </div>
                        </div>
                        <!-- End single blog -->
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-12 text-center">
                            <p class="copy-text"> © 2021 <strong>Jesco</strong> Made With <i class="fa fa-heart"
                                    aria-hidden="true"></i> By <a class="company-name" href="https://hasthemes.com/">
                                    <strong> HasThemes</strong></a>.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Area End -->

    <!-- Search Modal Start -->
    <div class="modal popup-search-style" id="searchActive">
        <button type="button" class="close-btn" data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
        <div class="modal-overlay">
            <div class="modal-dialog p-0" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <h2>Search Your Product</h2>
                        <form class="navbar-form position-relative" role="search">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Search here...">
                            </div>
                            <button type="submit" class="submit-btn"><i class="pe-7s-search"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Search Modal End -->

    <!-- Login Modal Start -->
    <div class="modal popup-login-style" id="loginActive">
        <button type="button" class="close-btn" data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
        <div class="modal-overlay">
            <div class="modal-dialog p-0" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="login-content">
                            <h2>Log in</h2>
                            <h3>Log in your account</h3>
                            <form action="#">
                                <input type="text" placeholder="Username">
                                <input type="password" placeholder="Password">
                                <div class="remember-forget-wrap">
                                    <div class="remember-wrap">
                                        <input type="checkbox">
                                        <p>Remember</p>
                                        <span class="checkmark"></span>
                                    </div>
                                    <div class="forget-wrap">
                                        <a href="#">Forgot your password?</a>
                                    </div>
                                </div>
                                <button type="button">Log in</button>
                                <div class="member-register">
                                    <p> Not a member? <a href="login.html"> Register now</a></p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Login Modal End -->

    <!-- Modal -->
    <div class="modal modal-2 fade" id="exampleModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-6 col-sm-12 col-xs-12 mb-lm-30px mb-md-30px mb-sm-30px">
                            <!-- Swiper -->
                            <div class="swiper-container zoom-top">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto"
                                            src="assets/images/product-image/zoom-image/1.jpg" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto"
                                            src="assets/images/product-image/zoom-image/2.jpg" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto"
                                            src="assets/images/product-image/zoom-image/3.jpg" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto"
                                            src="assets/images/product-image/zoom-image/4.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-container zoom-thumbs mt-3 mb-3">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto"
                                            src="assets/images/product-image/small-image/1.jpg" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto"
                                            src="assets/images/product-image/small-image/2.jpg" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto"
                                            src="assets/images/product-image/small-image/3.jpg" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto"
                                            src="assets/images/product-image/small-image/4.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12 col-xs-12" data-aos="fade-up" data-aos-delay="200">
                            <div class="product-details-content quickview-content">
                                <h2>Ardene Microfiber Tights</h2>
                                <div class="pricing-meta">
                                    <ul>
                                        <li class="old-price not-cut">$18.90</li>
                                    </ul>
                                </div>
                                <div class="pro-details-rating-wrap">
                                    <div class="rating-product">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <span class="read-review"><a class="reviews" href="#">( 5 Customer Review
                                            )</a></span>
                                </div>
                                <p class="mt-30px mb-0">Lorem ipsum dolor sit amet, consect adipisicing elit, sed do
                                    eiusmod tempor incidi ut labore
                                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercita ullamco
                                    laboris nisi
                                    ut aliquip ex ea commodo </p>
                                <div class="pro-details-quality">
                                    <div class="cart-plus-minus">
                                        <input class="cart-plus-minus-box" type="text" name="qtybutton" value="1" />
                                    </div>
                                    <div class="pro-details-cart">
                                        <button class="add-cart" href="#"> Add To
                                            Cart</button>
                                    </div>
                                    <div class="pro-details-compare-wishlist pro-details-wishlist ">
                                        <a href="wishlist.html"><i class="pe-7s-like"></i></a>
                                    </div>
                                    <div class="pro-details-compare-wishlist pro-details-compare">
                                        <a href="compare.html"><i class="pe-7s-refresh-2"></i></a>
                                    </div>
                                </div>
                                <div class="pro-details-sku-info pro-details-same-style  d-flex">
                                    <span>SKU: </span>
                                    <ul class="d-flex">
                                        <li>
                                            <a href="#">Ch-256xl</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="pro-details-categories-info pro-details-same-style d-flex">
                                    <span>Categories: </span>
                                    <ul class="d-flex">
                                        <li>
                                            <a href="#">Fashion.</a>
                                        </li>
                                        <li>
                                            <a href="#">eCommerce</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="pro-details-social-info pro-details-same-style d-flex">
                                    <span>Share: </span>
                                    <ul class="d-flex">
                                        <li>
                                            <a href="#"><i class="fa fa-facebook"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-twitter"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-google"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-youtube"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-instagram"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal end -->

    <!-- Global Vendor, plugins JS -->

    <!-- Vendor JS -->
    <script src="assets/js/vendor/jquery-3.5.1.min.js"></script>

    <script src="assets/js/vendor/bootstrap.bundle.min.js"></script>
    <script src="assets/js/vendor/jquery-migrate-3.3.0.min.js"></script>
    <script src="assets/js/vendor/modernizr-3.11.2.min.js"></script>

    <!--Plugins JS-->
    <script src="assets/js/plugins/swiper-bundle.min.js"></script>
    <script src="assets/js/plugins/jquery-ui.min.js"></script>
    <script src="assets/js/plugins/jquery.nice-select.min.js"></script>
    <script src="assets/js/plugins/countdown.js"></script>
    <script src="assets/js/plugins/scrollup.js"></script>
    <script src="assets/js/plugins/jquery.zoom.min.js"></script>
    <script src="assets/js/plugins/venobox.min.js"></script>
    <script src="assets/js/plugins/ajax-mail.js"></script>

    <!-- Use the minified version files listed below for better performance and remove the files listed above -->
    <!-- <script src="assets/js/vendor/vendor.min.js"></script>
    <script src="assets/js/plugins/plugins.min.js"></script> -->

    <!-- Main Js -->
    <script src="assets/js/main.js"></script>
</body>

</html>