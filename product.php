<?php
$path = dirname(__FILE__);
require_once $path . '/class/product.php';
$path = dirname(__FILE__);
require_once $path . '/class/category.php';

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
    <title>Sản phẩm</title>
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

    <?php
    if (isset($_GET['id_product'])) {
    ?>
        <!-- Product Details Area Start -->
        <div class="product-details-area pt-100px pb-100px">
            <div class="container">
                <div class="row">
                    <?php
                    $productModel = new Product();
                    $id_product = $_GET["id_product"];
                    $productByID = $productModel->getProductByID($id_product)->fetch_assoc();
                    ?>
                    <div class="col-lg-6 col-sm-12 col-xs-12 mb-lm-30px mb-md-30px mb-sm-30px">
                        <!-- Swiper -->
                        <div class="swiper-container zoom-top">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide zoom-image-hover">
                                    <img class="img-responsive m-auto" src="<?php echo $productByID['image'] ?>" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12 col-xs-12" data-aos="fade-up" data-aos-delay="200">
                        <div class="product-details-content quickview-content">
                            <h2><?php echo $productByID['name'] ?></h2>
                            <div class="pricing-meta">
                                <ul>
                                    <li class="old-price not-cut"><?php echo number_format($productByID['price']) ?> đ</li>
                                </ul>
                            </div>
                            <!-- Sidebar single item -->
                            <div class="pro-details-sku-info pro-details-same-style  d-flex">
                                <span>Trọng lượng: </span>
                                <ul class="d-flex">
                                    <li>
                                        3 - > 6 kg
                                    </li>
                                </ul>
                            </div>
                            <p>
                                Sau khi "Thêm vào Giỏ hàng" và "Đặt hàng" chúng tôi sẽ gọi điện thoại tư vấn cho bạn!!
                            </p>
                            <div class="pro-details-sku-info pro-details-same-style  d-flex">
                                <span>Sản phẩm: </span>
                                <ul class="d-flex">
                                    <li>
                                        <a href="#"><?php echo $productByID['id_product'] ?></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="pro-details-categories-info pro-details-same-style d-flex">
                                <span>Danh mục: </span>
                                <a href="">
                                    <?php
                                    $categoryModel = new Category();
                                    $categoryByID = $categoryModel->getCategoryByID($productByID['id_category'])->fetch_assoc();

                                    ?>
                                    <ul class="d-flex">
                                        <li>
                                            <a href="#"><?php echo $categoryByID['name']; ?></a>
                                        </li>
                                    </ul>
                                    <php ?>
                                </a>
                            </div>
                            <div class="pro-details-quality">
                                <div class="pro-details-cart">
                                    <button onclick="addToCart('<?php echo $productByID['id_product'] ?>')" class="add-cart" href="#">Thêm vào giỏ hàng</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- product details description area start -->
        <div class="description-review-area pb-100px" data-aos="fade-up" data-aos-delay="200">
            <div class="container">
                <div class="description-review-wrapper">
                    <div class="description-review-topbar nav">
                        <!-- <a data-bs-toggle="tab" href="#des-details2">Information</a> -->
                        <a class="active" data-bs-toggle="tab" href="#des-details1">Mô tả</a>
                        <!-- <a data-bs-toggle="tab" href="#des-details3">Reviews (02)</a> -->
                    </div>
                    <div class="tab-content description-review-bottom">
                        <div id="des-details1" class="tab-pane active">
                            <div class="product-description-wrapper">
                                <p>
                                    <?php echo $productByID['description'] ?>

                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- product details description area end -->

    <?php
    }
    ?>

    <!-- Related product Area Start -->
    <div class="related-product-area pb-100px">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title text-center mb-30px0px line-height-1">
                        <h2 class="title m-0">Related Products</h2>
                    </div>
                </div>
            </div>
            <div class="new-product-slider swiper-container slider-nav-style-1 small-nav">
                <div class="new-product-wrapper swiper-wrapper">
                    <?php
                    $productModel = new Product();
                    $products = $productModel->getProducts();
                    if ($products) {
                        while ($row = $products->fetch_assoc()) {
                    ?>
                            <div class="new-product-item swiper-slide">
                                <div class="product">
                                    <div class="thumb">
                                        <a href="product.php?id_product=<?php echo $row['id_product'] ?>" class="image">
                                            <img src="<?php echo $row['image'] ?>" height="150px" alt="Product" />
                                            <img class="hover-image" src="<?php echo $row['image'] ?>" alt="Product" />
                                        </a>
                                        <!-- <span class="badges">
                                            <span class="new">New</span>
                                        </span> -->
                                        <div class="actions">
                                            <!-- <a href="wishlist.html" class="action wishlist" title="Wishlist"><i class="pe-7s-like"></i></a> -->
                                            <!-- <a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-search"></i></a> -->
                                            <!-- <a href="compare.html" class="action compare" title="Compare"><i class="pe-7s-refresh-2"></i></a> -->
                                        </div>
                                        <button title="Add To Cart" onclick="addToCart()" class=" add-to-cart">Add
                                            To Cart</button>
                                    </div>
                                    <div class="content">
                                        <!-- <span class="ratings">
                                            <span class="rating-wrap">
                                                <span class="star" style="width: 100%"></span>
                                            </span>
                                            <span class="rating-num">( 5 Review )</span>
                                        </span> -->
                                        <h5 class="title"><a href="product.php?id_product=<?php echo $row['id_product'] ?>"><?php echo $row['name'] ?>
                                            </a>
                                        </h5>
                                        <span class="price">
                                            <span class="new"><?php echo number_format($row['price']) ?></span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                    <?php
                        }
                    }
                    ?>

                </div>
                <!-- Add Arrows -->
                <div class="swiper-buttons">
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Related product Area End -->

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
    <?php
    $path = dirname(__FILE__);
    require_once $path . '/includes/scripts.php';
    ?>
    <script src="./assets/js/process-ajax/product.js"></script>
</body>

</html>