<?php
$path = dirname(__FILE__);
require_once $path . '/../class/product.php';
$path = dirname(__FILE__);
require_once $path . '/../class/category.php';
?>

<?php
if (!isset($_SESSION)) {
    session_start();
}

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}
?>

<?php
if (isset($_POST['addToCart']) && isset($_POST['id_product'])) {
    $id_product = $_POST['id_product'];

    $productModel = new Product();
    $productByID = $productModel->getProductById($id_product)->fetch_assoc();
    if (!isset($_SESSION['cart'][$id_product])) {
        $items = [
            'id_product' => $productByID['id_product'],
            'name' => $productByID['name'],
            'price' => $productByID['price'],
            'image' => $productByID['image'],
        ];
        $_SESSION['cart'][$id_product] = $items;
    } else {
        echo '<script>alert("Sản phẩm đã được thêm vào giỏ hàng")</script>';
    }
}
?>

<?php
if (count($_SESSION['cart']) > 0) {
    foreach ($_SESSION['cart'] as $key => $value) {
?>
        <li>
            <a href="product.php?id_product=<?php echo $value['id_product'] ?>" class="image"><img src="<?php echo $value['image'] ?>" alt="Cart product Image"></a>
            <div class="content">
                <a href="product.php?id_product=<?php echo $value['id_product'] ?>" class="title"><?php echo $value['name'] ?></a>
                <span class="quantity-price"><span class="amount"><?php echo $value['price'] ?> đ</span></span>
                <a href="#" onclick=" confirm('Bạn có muốn xóa không') ? removeItem('<?php print $value['id_product'] ?>') : event.preventDefault()" class="remove">×</a>
            </div>
        </li>
<?php
    }
}
?>

<?php 
    if(isset($_POST['removeItem']) && isset($_POST['id_product'])){
        $id_product = $_POST['id_product'];

        unset($_SESSION['cart'][$id_product]);
    }
?>