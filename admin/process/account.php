<?php
$path = dirname(__FILE__);
require_once $path . '/../../class/account.php';
?>

<?php
if (isset($_POST['viewToAdd'])) {
?>
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content ">
            <div class="card">
                <div class="card-body">
                    <h6 class="mb-0">Thông tin tài khoản</h6>
                    <div class="p-4 border rounded">
                        <form class="row g-3 needs-validation" method="POST" onsubmit="add()">
                            <div class="col-md-6">
                                <label for="validationAccountID" class="form-label">Mã tài khoản</label>
                                <input type="text" class="form-control" id="validationAccountID" name="accountID" value="TK<?php echo (int) (microtime(true) * 1000) ?>" readonly>
                                <div id="txtProductId" class="invalid-feedback">Nhập mã TK</div>
                            </div>
                            <div class="col-md-6"></div>
                            <div class="col-md-6">
                                <label for="validationUsername" class="form-label">Tên tài khoản</label>
                                <input type="text" class="form-control" id="validationUsername" value="" name="username">
                                <div id="txtUsername" class="invalid-feedback">Nhập tên DM</div>
                            </div>
                            <div class="col-md-6">
                                <label for="validationPassword" class="form-label">Mật khẩu</label>
                                <input type="password" class="form-control" id="validationPassword" value="" name="password">
                                <div id="txtPassword" class="invalid-feedback">Nhập tên DM</div>
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

<?php
if (isset($_POST['add']) && isset($_POST['id_account'])  && isset($_POST['username']) && isset($_POST['password'])) {
    $id_account = $_POST['id_account'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $accountModel = new Account();
    $insertAccount = $accountModel->insert($id_account, $username, $password);
    if ($insertAccount) {
        echo 1;
    } else {
        echo 0;
    }
}
?>

<?php
if (isset($_POST['view']) && isset($_POST['id_account'])) {
    $id_account = $_POST['id_account'];
    $accountModel = new Account();
    $accountByID = $accountModel->getAccountById($id_account)->fetch_assoc();
?>
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content ">
            <div class="card">
                <div class="card-body">
                    <h6 class="mb-0">Thông tin tài khoản</h6>
                    <div class="p-4 border rounded">
                        <form class="row g-3 needs-validation" method="POST" onsubmit="update()">
                            <div class="col-md-6">
                                <label for="validationAccountID" class="form-label">Mã tài khoản</label>
                                <input type="text" class="form-control" id="validationAccountID" name="accountID" value="<?php echo $accountByID['id_account'] ?>" readonly>
                                <div id="txtProductId" class="invalid-feedback">Nhập mã TK</div>
                            </div>
                            <div class="col-md-6"></div>
                            <div class="col-md-6">
                                <label for="validationUsername" class="form-label">Tên tài khoản</label>
                                <input type="text" class="form-control" id="validationUsername" value="<?php echo $accountByID['username'] ?>" name="username" readonly>
                                <div id="txtUsername" class="invalid-feedback">Nhập tên DM</div>
                            </div>
                            <div class="col-md-6">
                                <label for="validationPassword" class="form-label">Mật khẩu</label>
                                <input type="password" class="form-control" id="validationPassword" value="<?php echo $accountByID['password'] ?>" name="password" readonly>
                                <div id="txtPassword" class="invalid-feedback">Nhập tên DM</div>
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
if (isset($_POST['viewToUpdate']) && isset($_POST['id_account'])) {
    $id_account = $_POST['id_account'];
    $accountModel = new Account();
    $accountByID = $accountModel->getAccountById($id_account)->fetch_assoc();
?>
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content ">
            <div class="card">
                <div class="card-body">
                    <h6 class="mb-0">Thông tin tài khoản</h6>
                    <div class="p-4 border rounded">
                        <form class="row g-3 needs-validation" method="POST" onsubmit="update()">
                            <div class="col-md-6">
                                <label for="validationAccountID" class="form-label">Mã tài khoản</label>
                                <input type="text" class="form-control" id="validationAccountID" name="accountID" value="<?php echo $accountByID['id_account'] ?>" readonly>
                                <div id="txtProductId" class="invalid-feedback">Nhập mã TK</div>
                            </div>
                            <div class="col-md-6">
                                <label for="validationCustom04" class="form-label">Trạng thái</label>
                                <?php
                                if ($accountByID['status'] == 1) {
                                ?>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" id="flexRadioDefault1" name="status" value="1" checked>
                                        <label class="form-check-label" for="flexRadioDefault1">Hoạt động</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" id="flexRadioDefault2" name="status" value="2">
                                        <label class="form-check-label" for="flexRadioDefault2">Khóa</label>
                                    </div>
                                <?php
                                } else if ($accountByID['status'] == 2) {
                                ?>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" id="flexRadioDefault1" name="status" value="1">
                                        <label class="form-check-label" for="flexRadioDefault1">Hoạt động</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" id="flexRadioDefault2" name="status" value="2" checked>
                                        <label class="form-check-label" for="flexRadioDefault2">Khóa</label>
                                    </div>
                                <?php
                                }
                                ?>
                            </div>
                            <div class="col-md-6">
                                <label for="validationUsername" class="form-label">Tên tài khoản</label>
                                <input type="text" class="form-control" id="validationUsername" value="<?php echo $accountByID['username'] ?>" name="username">
                                <div id="txtUsername" class="invalid-feedback">Nhập tên DM</div>
                            </div>
                            <div class="col-md-6">
                                <label for="validationPassword" class="form-label">Mật khẩu</label>
                                <input type="password" class="form-control" id="validationPassword" value="<?php echo $accountByID['password'] ?>" name="password">
                                <div id="txtPassword" class="invalid-feedback">Nhập tên DM</div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary" type="submit">Sửa</button>
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
if (isset($_POST['update']) && isset($_POST['id_account'])  && isset($_POST['username']) && isset($_POST['password'])) {
    $id_account = $_POST['id_account'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $status = $_POST['status'];

    $accountModel = new Account();
    $accountByID = $accountModel->getAccountById($id_account)->fetch_assoc();
    if ($password == $accountByID['password']) {
        $updateAccountWithoutPassword = $accountModel->updateWithoutPassword($id_account, $username, $status);
        if ($updateAccountWithoutPassword) {
            echo 1;
        } else {
            echo 0;
        }
    } else {
        $updateAccount = $accountModel->update($id_account, $username, $password, $status);
        if ($updateAccount) {
            echo 1;
        } else {
            echo 0;
        }
    }
}
?>