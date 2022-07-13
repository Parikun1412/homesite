<?php
$path = dirname(__FILE__);
require_once $path . '/class/category.php';
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
    <title>Danh mục</title>
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

    <!-- breadcrumb-area end -->

    <!-- Shop Page Start  -->
    <div class="shop-category-area pt-100px pb-100px">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 order-lg-last col-md-12 order-md-first">
                    <!-- Shop Top Area Start -->
                    <div class="shop-top-bar d-flex justify-content-center">
                        <!-- Left Side start -->
                        <!-- <p> Đã tìm thấy <span>12 </span> trong <span>30</span></p> -->
                        <!-- Left Side End -->
                        <div class="shop-tab nav">
                            <a class="active" href="#shop-grid" data-bs-toggle="tab">
                                <i class="fa fa-th" aria-hidden="true"></i>
                            </a>
                            <a href="#shop-list" data-bs-toggle="tab">
                                <i class="fa fa-list" aria-hidden="true"></i>
                            </a>
                        </div>
                        <!-- Right Side Start -->
                        <!-- <div class="select-shoing-wrap d-flex align-items-center">
                            <div class="shot-product">
                                <p>Sort By:</p>
                            </div>
                            <div class="shop-select">
                                <select class="form-select" class="shop-sort">
                                    <option data-display="Relevance">Relevance</option>
                                    <option value="1"> Tên, A to Z</option>
                                    <option value="2"> Name, Z to A</option>
                                    <option value="3"> Price, low to high</option>
                                    <option value="4"> Price, high to low</option>
                                </select>

                            </div>
                        </div> -->
                        <!-- Right Side End -->
                    </div>
                    <!-- Shop Top Area End -->

                    <!-- Shop Bottom Area Start -->
                    <div class="shop-bottom-area">

                        <!-- Tab Content Area Start -->
                        <div class="row">
                            <div class="col">
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="shop-grid">
                                        <div class="row mb-n-30px" id="grid_product">
                                            <?php
                                            $productModel = new Product();
                                            $products = $productModel->getProducts();
                                            if ($products) {
                                                while ($row  = $products->fetch_assoc()) {
                                                    if ($row['status'] != 1)
                                                        continue;
                                            ?>
                                                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up" data-aos-delay="200">
                                                        <!-- Single Prodect -->
                                                        <div class="product">
                                                            <div class="thumb">
                                                                <a href="product.php?id_product=<?php echo $row['id_product'] ?>" class="image">
                                                                    <img src="<?php echo $row['image'] ?>" height="150px" alt="Product" />
                                                                    <img class="hover-image" src="<?php echo $row['image'] ?>" height="100%" alt="Product" />
                                                                </a>
                                                                <!-- <span class="badges">
                                                                    <span class="new">New</span>
                                                                </span> -->
                                                                <!-- <div class="actions">
                                                                    <a href="wishlist.html" class="action wishlist" title="Wishlist"><i class="pe-7s-like"></i></a>
                                                                    <a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-search"></i></a>
                                                                    <a href="compare.html" class="action compare" title="Compare"><i class="pe-7s-refresh-2"></i></a>
                                                                </div> -->
                                                                <button title="Add To Cart" onclick="addToCart('<?php print $row['id_product'] ?>')" class=" add-to-cart">Thêm vào giỏ hàng</button>
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
                                                                    <span class="new"><?php echo number_format($row['price']) ?> đ</span>
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
                            </div>
                        </div>
                        <!-- Tab Content Area End -->

                        <!--  Pagination Area Start -->
                        <!-- <div class="load-more-items text-center mb-md-60px mb-lm-60px mt-30px0px" data-aos="fade-up">
                            <a href="#" class="btn btn-lg btn-primary btn-hover-dark m-auto"> Load More <i class="fa fa-refresh ml-15px" aria-hidden="true"></i></a>
                        </div> -->
                        <!--  Pagination Area End -->
                    </div>
                    <!-- Shop Bottom Area End -->
                </div>
                <!-- Sidebar Area Start -->
                <div class="col-lg-3 order-lg-first col-md-12 order-md-last mb-md-60px mb-lm-60px">
                    <div class="shop-sidebar-wrap">
                        <!-- Sidebar single item -->
                        <div class="sidebar-widget-search">
                            <form id="widgets-searchbox" onsubmit="filterProductByKeyword()">
                                <input class="input-field" type="text" value="" name="search" placeholder="Tìm kiếm">
                                <button class="widgets-searchbox-btn" type="submit">
                                    <i class="fa fa-search"></i>
                                </button>
                            </form>
                        </div>
                        <div class="sidebar-widget">
                            <h4 class="sidebar-title">Danh mục</h4>
                            <div class="sidebar-widget-category">
                                <ul>
                                    <?php
                                    $categoryModel = new Category();
                                    $categories = $categoryModel->getCategories();
                                    if ($categories) {
                                        while ($rowCate = $categories->fetch_assoc()) {
                                    ?>
                                            <li><a href="#" class="selected m-0" onclick="filterCategory('<?php echo $rowCate['id_category'] ?>')"><?php echo $rowCate['name'] ?> </a></li>
                                    <?php
                                        }
                                    }
                                    ?>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Shop Page End  -->
    <br><br><br><br><br><br><br><br>
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
    <!-- Modal end -->

    <!-- Global Vendor, plugins JS -->

    <?php
    $path = dirname(__FILE__);
    require_once $path . '/includes/scripts.php';
    ?>
    <script src="./assets/js/process-ajax/category.js"></script>
    <script src="./assets/js/process-ajax/product.js"></script>
</body>

</html>