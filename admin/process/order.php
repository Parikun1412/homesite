<?php
$path = dirname(__FILE__);
require_once $path . '/../../class/order.php';
$path = dirname(__FILE__);
require_once $path . '/../../class/orderItem.php';
$path = dirname(__FILE__);
require_once $path . '/../../class/customer.php';
$path = dirname(__FILE__);
require_once $path . '/../../class/product.php';
?>

<?php
if (isset($_POST['viewToProcess']) && isset($_POST['id_order'])) {
    $id_order = $_POST['id_order'];
    $orderModel = new Order();
    $orderItemModel = new OrderItem();
    $productModel = new Product();
    $orderByID = $orderModel->getOrderByID($id_order)->fetch_assoc();
?>
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content ">
            <div class="card">
                <div class="card-body">
                    <h6 class="mb-0">Thông tin hóa đơn</h6>
                    <div class="p-4 border rounded">
                        <form class="row g-3 needs-validation" method="POST" onsubmit="process()">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="validationOrderID" class="form-label">Mã hóa đơn</label>
                                        <input type="text" class="form-control" id="validationOrderID" name="orderID" value="<?php echo $orderByID['id_order'] ?>" readonly>
                                        <div id="txtOrderID" class="invalid-feedback">Nhập mã HĐ</div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="validationDate" class="form-label">Ngày đặt hàng</label>
                                        <input type="text" class="form-control" id="validationCustomerID" value="<?php echo $orderByID['date'] ?>" name="date">
                                        <div id="txtDate" class="invalid-feedback">Nhập ngày đặt hàng</div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="validationCustomerID" class="form-label">Mã khách hàng</label>
                                        <input type="text" class="form-control" id="validationCustomerID" value="<?php echo $orderByID['id_customer'] ?>" name="customerID">
                                        <div id="txtCustomerID" class="invalid-feedback">Nhập mã khách hàng</div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="validationCustomerName" class="form-label">Tên khách hàng</label>
                                        <input type="text" class="form-control" id="validationCustomerName" value="<?php echo $orderByID['fullname'] ?>" name="customerName">
                                        <div id="txtCustomerName" class="invalid-feedback">Nhập tên khách hàng</div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="validationCustomerPhone" class="form-label">Số điện thoại</label>
                                        <input type="text" class="form-control" id="validationCustomerPhone" value="<?php echo $orderByID['phone'] ?>" name="customerPhone">
                                        <div id="txtCustomerPhone" class="invalid-feedback">Nhập số điện thoại</div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="validationCustomerEmail" class="form-label">Email</label>
                                        <input type="text" class="form-control" id="validationCustomerEmail" value="<?php echo $orderByID['email'] ?>" name="customerMail">
                                        <div id="txtCustomerMail" class="invalid-feedback">Nhập email</div>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="validationCustomerAdress" class="form-label">Địa chỉ</label>
                                        <input type="text" class="form-control" id="validationCustomerAdress" value="<?php echo $orderByID['address'] ?>" name="customerAddress">
                                        <div id="txtCustomerAddress" class="invalid-feedback">Nhập địa chỉ</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="card">
                                        <div class="card-body">
                                            <label for="validationCustom01" class="form-label">Danh sách sản phẩm trong hóa đơn</label>
                                            <div class="p-4 border rounded">
                                                <table class="table align-middle mb-0 table-hover">
                                                    <thead class="table-light">
                                                        <tr>
                                                            <th>Mã sản phẩm</th>
                                                            <th>Tên sản phẩm</th>
                                                            <th>Thao tác</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                        $orderItemByID = $orderItemModel->getOrderItemById($id_order);
                                                        if ($orderItemByID) {
                                                            while ($rowOrderItem = $orderItemByID->fetch_assoc()) {
                                                        ?>
                                                                <tr onclick="getDetailOrderItem('<?php print $rowOrderItem['id_product'] ?>')">
                                                                    <td><?php echo $rowOrderItem['id_product'] ?></td>
                                                                    <?php
                                                                    $productByID = $productModel->getProductByID($rowOrderItem['id_product'])->fetch_assoc();
                                                                    ?>
                                                                    <td><?php echo $productByID['name'] ?></td>
                                                                    <td>
                                                                        <div class="d-flex align-items-center gap-3 fs-6">
                                                                            <a href="javascript:;" class="text-dark">
                                                                                <ion-icon name="trash-sharp"></ion-icon>
                                                                            </a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                        <?php
                                                            }
                                                        }
                                                        ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-body">
                                            <h6 class="mb-0">Chi tiết hóa đơn</h6>
                                            <div class="p-4 border rounded" id="viewOrderItem">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-1">
                                <button class="btn btn-primary" type="submit">Xử lý</button>
                            </div>
                            <div class="col-md-2"></div>
                            <div class="col-md-8">
                                <label for="validationProductTotalPrice" class="form-label">Lý do hủy</label>
                                <input type="text" class="form-control" id="validationProducTotaltPrice" name="ProductTotalPrice" value="">
                                <div id="txtProductTotalPrice" class="invalid-feedback">Nhập Tổng tiền</div>
                            </div>
                            <div class="col-md-1">
                                <br>
                                <button style="margin-top:10%;" class="btn btn-primary" type="submit">Hủy</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
}
?>

<?php
if (isset($_POST['viewOrderItem']) && isset($_POST['id_product'])) {
    $id_product = $_POST['id_product'];
    $orderModel = new Order();
    $orderItemModel = new OrderItem();
    $productModel = new Product();
    $productByID = $productModel->getProductByID($id_product)->fetch_assoc();

?>
    <div class="row">
        <div class="col-md-6">
            <label for="validationProductID" class="form-label">Mã sản phẩm</label>
            <input type="text" class="form-control" id="validationProductID" name="ProductID" value="<?php echo $productByID['id_product'] ?>" readonly>
            <div id="txtProductID" class="invalid-feedback">Nhập mã SP</div>
        </div>
        <div class="col-md-6">
            <label for="validationProductName" class="form-label">Tên sản phẩm</label>
            <input type="text" class="form-control" id="validationProductName" name="ProductName" value="<?php echo $productByID['name'] ?>" readonly>
            <div id="txtProductName" class="invalid-feedback">Nhập tên SP</div>
        </div>
        <div class="col-md-6">
            <label for="validationProductQty" class="form-label">Số lượng</label>
            <input type="text" class="form-control" id="validationProductQty" name="ProductQty" value="">
            <div id="txtProductQty" class="invalid-feedback">Nhập số lượng</div>
        </div>
        <div class="col-md-6">
            <label for="validationProductPrice" class="form-label">Giá</label>
            <input type="text" class="form-control" id="validationProductPrice" name="ProductPrice" value="">
            <div id="txtProductPrice" class="invalid-feedback">Nhập giá</div>
        </div>
        <div class="col-md-12">
            <label for="validationProductTotalPrice" class="form-label">Tổng cộng</label>
            <input type="text" class="form-control" id="validationProducTotaltPrice" name="ProductTotalPrice" value="">
            <div id="txtProductTotalPrice" class="invalid-feedback">Nhập Tổng tiền</div>
        </div>
        <div class="col-md-12">
            <label for="validationProductImage" class="form-label">Hình ảnh</label>
            <br>
            <img src="<?php echo '.' . $productByID['image'] ?>" width="50%" alt="">
        </div>
    </div>
<?php
}
?>