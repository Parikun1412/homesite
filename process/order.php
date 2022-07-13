<?php
$path = dirname(__FILE__);
require_once $path . '/../class/order.php';
$path = dirname(__FILE__);
require_once $path . '/../class/orderItem.php';

if (!isset($_SESSION)) {
    session_start();
}
?>

<?php
$orderModel = new Order();
$orderItemModel = new OrderItem();

if (isset($_POST['order']) && isset($_POST['name']) && isset($_POST['phone'])) {
    $fullname = $_POST['name'];
    $phone = $_POST['phone'];
    $id_order = 'HĐ' . time();
    $id_customer = 'KH' . time() * 14;
    $totalprice = 0;
    $status = 0;
    $date = date('Y-m-d');
    $addOrder = $orderModel->insert($id_order, $id_customer, $fullname, $phone, $totalprice, $date, $status);
    if ($addOrder) {
        if ($_SESSION['cart'] > 0) {
            foreach ($_SESSION['cart'] as $key => $value) {
                $quantity = 0;
                $id_product = $key;
                $price = $value['price'];
                $addOrderItem = $orderItemModel->insert($id_order, $id_product, $quantity, $price);
            }
            if ($addOrderItem) {
                echo '<script>alert("Đặt hàng thành công - chúng tôi sẽ liên hệ cho bạn sớm nhất")</script>';
                session_destroy();
            } else {
                echo '<script>alert("Hệ thống bị lỗi - vui lòng liên hệ trực tiếp số điện thoại")</script>';
            }
        }
    } else {
        echo '<script>alert("Hệ thống bị lỗi - vui lòng liên hệ trực tiếp số điện thoại")</script>';
    }
}
?>