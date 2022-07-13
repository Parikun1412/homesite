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
    <title>Giỏ hàng</title>
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


    <!-- Cart Area Start -->
    <div class="cart-main-area pt-100px pb-100px">
        <div class="container">
            <h3 class="cart-page-title">Giỏ hàng</h3>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <form action="#">
                        <div class="table-content table-responsive cart-table-content">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Hình ảnh</th>
                                        <th>Tên sản phẩm</th>
                                        <th>Giá</th>
                                        <th>Thao tác</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    if (count($_SESSION['cart']) > 0) {
                                        foreach ($_SESSION['cart'] as $key => $value) {
                                    ?>
                                            <tr>
                                                <td class="product-thumbnail">
                                                    <a href="product.php?id_product=<?php echo $value['id_product'] ?>"><img class="img-responsive ml-15px" src="<?php echo $value['image'] ?>" alt="" /></a>
                                                </td>
                                                <td class="product-name"><a href="product.php?id_product=<?php echo $value['id_product'] ?>"><?php echo $value['name'] ?></a></td>
                                                <td class="product-price-cart"><span class="amount"><?php echo number_format($value['price']) ?> đ</span></td>
                                                <td class="product-remove">
                                                    <a href="#" onclick=" confirm('Bạn có muốn xóa không') ? removeItem('<?php print $value['id_product'] ?>') : event.preventDefault()"><i class="fa fa-times"></i></a>
                                                </td>
                                            </tr>
                                    <?php
                                        }
                                    }
                                    ?>

                                </tbody>
                            </table>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="cart-shiping-update-wrapper">
                                    <div class="cart-shiping-update">
                                        <a href="category.php">Tiếp tục lựa hàng</a>
                                    </div>
                                    <div class="cart-clear">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#orderActive">Đặt hàng</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Cart Area End -->
    <br><br><br><br><br><br><br><br>
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
    <script src="./assets/js/process-ajax/product.js"></script>
</body>

</html>