<?php
if (isset($_POST['view']) && isset($_POST['id_order'])) {
    $id_order = $_POST['id_order'];
?>
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content ">
            <div class="card">
                <div class="card-body">
                    <h6 class="mb-0">Thông tin danh mục</h6>
                    <div class="p-4 border rounded">
                        <form class="row g-3 needs-validation" method="POST" onsubmit="process()">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="validationOrderID" class="form-label">Mã hóa đơn</label>
                                        <input type="text" class="form-control" id="validationOrderID" name="orderID" value="" readonly>
                                        <div id="txtOrderID" class="invalid-feedback">Nhập mã HĐ</div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="validationDate" class="form-label">Ngày đặt hàng</label>
                                        <input type="text" class="form-control" id="validationCustomerID" value="" name="date">
                                        <div id="txtDate" class="invalid-feedback">Nhập ngày đặt hàng</div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="validationCustomerID" class="form-label">Mã khách hàng</label>
                                        <input type="text" class="form-control" id="validationCustomerID" value="" name="customerID">
                                        <div id="txtCustomerID" class="invalid-feedback">Nhập mã khách hàng</div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="validationCustomerName" class="form-label">Tên khách hàng</label>
                                        <input type="text" class="form-control" id="validationCustomerName" value="" name="customerName">
                                        <div id="txtCustomerName" class="invalid-feedback">Nhập tên khách hàng</div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="validationCustomerPhone" class="form-label">Số điện thoại</label>
                                        <input type="text" class="form-control" id="validationCustomerPhone" value="" name="customerPhone">
                                        <div id="txtCustomerPhone" class="invalid-feedback">Nhập số điện thoại</div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="validationCustomerAdress" class="form-label">Địa chỉ</label>
                                        <input type="text" class="form-control" id="validationCustomerAdress" value="" name="customerAddress">
                                        <div id="txtCustomerAddress" class="invalid-feedback">Nhập địa chỉ</div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="validationCustomerEmail" class="form-label">Email</label>
                                        <input type="text" class="form-control" id="validationCustomerEmail" value="" name="customerMail">
                                        <div id="txtCustomerMail" class="invalid-feedback">Nhập email</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="validationProductID" class="form-label">Mã sản phẩm</label>
                                        <input type="text" class="form-control" id="validationProductID" name="ProductID" value="" readonly>
                                        <div id="txtProductID" class="invalid-feedback">Nhập mã SP</div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="validationProductName" class="form-label">Tên sản phẩm</label>
                                        <input type="text" class="form-control" id="validationProductName" name="ProductName" value="" readonly>
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
                                    <div class="col-md-6">
                                        <label for="validationProductTotalPrice" class="form-label">Tổng cộng</label>
                                        <input type="text" class="form-control" id="validationProducTotaltPrice" name="ProductTotalPrice" value="">
                                        <div id="txtProductTotalPrice" class="invalid-feedback">Nhập Tổng tiền</div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <button class="btn btn-primary" type="submit">Thêm</button>
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