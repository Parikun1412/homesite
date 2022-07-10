<?php
$path = dirname(__FILE__);
require_once $path . '/../class/product.php';
?>

<?php
if (isset($_POST['filterCategory']) && isset($_POST['id_category'])) {
    $id_category = $_POST['id_category'];
    $productModel = new Product();
    $filterProductByCategoryFilter = $productModel->filterProductByCategoryFilter($id_category);
    if ($filterProductByCategoryFilter) {
        while ($row = $filterProductByCategoryFilter->fetch_assoc()) {
?>
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up" data-aos-delay="200">
                <!-- Single Prodect -->
                <div class="product">
                    <div class="thumb">
                        <a href="product.php?id_product=<?php echo $row['id_product'] ?>" class="image">
                            <img src="<?php echo $row['image'] ?>" height="150px" alt="Product" />
                            <img class="hover-image" src="<?php echo $row['image'] ?>" height="100%" alt="Product" />
                        </a>

                        <button title="Add To Cart" class=" add-to-cart">Thêm vào giỏ hàng</button>
                    </div>
                    <div class="content">

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
<?php
}
?>

<?php
if (isset($_GET['filterProductByKeyword']) && isset($_GET['search'])) {
    $keyword = $_GET['search'];
    $productModel = new Product();
    $filterProductByKeyword = $productModel->filterProductByKeyword($keyword);
    if ($filterProductByKeyword) {
        while ($row = $filterProductByKeyword->fetch_assoc()) {
?>
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up" data-aos-delay="200">
                <!-- Single Prodect -->
                <div class="product">
                    <div class="thumb">
                        <a href="product.php?id_product=<?php echo $row['id_product'] ?>" class="image">
                            <img src="<?php echo $row['image'] ?>" height="150px" alt="Product" />
                            <img class="hover-image" src="<?php echo $row['image'] ?>" height="100%" alt="Product" />
                        </a>

                        <button title="Add To Cart" class=" add-to-cart">Thêm vào giỏ hàng</button>
                    </div>
                    <div class="content">

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
}
?>