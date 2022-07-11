<?php
$path = dirname(__FILE__);
require_once $path . '/../../class/support.php';
?>

<?php
if (isset($_POST['view']) && isset($_POST['id_support'])) {
    $id_support = $_POST['id_support'];
    $supportModel = new Support();
    $supportByID = $supportModel->getSupportById($id_support)->fetch_assoc();
?>
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content ">
            <div class="card">
                <div class="card-body">
                    <h6 class="mb-0">Thông tin tin nhắn hỗ trợ</h6>
                    <div class="p-4 border rounded">
                        <form class="row g-3 needs-validation">
                            <div class="col-md-6">
                                <label for="validationSupportID" class="form-label">Mã hỗ trợ</label>
                                <input type="text" class="form-control" id="validationSupportID" name="supportID" value="<?php echo $supportByID['id_support'] ?>" readonly>
                                <div id="txtSupportID" class="invalid-feedback">Nhập mã HT</div>
                            </div>
                            <div class="col-md-6">
                                <label for="validationCustomerName" class="form-label">Tên khách hàng</label>
                                <input type="text" class="form-control" id="validationCustomerName" value="<?php echo $supportByID['fullname'] ?>" name="supportName">
                                <div id="txtCustomerName" class="invalid-feedback">Nhập tên KH</div>
                            </div>
                            <div class="col-md-12">
                                <label for="validationCustomerEmail" class="form-label">Địa chỉ Email</label>
                                <input type="text" class="form-control" id="validationCustomerEmail" value="<?php echo $supportByID['email'] ?>" name="supportEmail">
                                <div id="txtCustomerEmail" class="invalid-feedback">Nhập Email</div>
                            </div>
                            <div class="col-md-12">
                                <label for="validationMessage" class="form-label">Tin nhắn hỗ trợ</label>
                                <textarea name="message" id="validationMessage" class="form-control" cols="20" rows="5"><?php echo $supportByID['message'] ?></textarea>
                                <div id="txtMessage" class="invalid-feedback">Nhập tin nhắn</div>
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