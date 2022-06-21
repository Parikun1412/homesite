<?php
$path = dirname(__FILE__);
require_once $path . '/../../class/category.php';

$categoryModel = new Category();
?>

<?php
if (isset($_POST['viewToAdd'])) {
?>
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content ">
            <div class="card">
                <div class="card-body">
                    <h6 class="mb-0">Thông tin danh mục</h6>
                    <div class="p-4 border rounded">
                        <form class="row g-3 needs-validation" method="POST" onsubmit="add()">
                            <div class="col-md-6">
                                <label for="validationCategoryID" class="form-label">Mã danh mục</label>
                                <input type="text" class="form-control" id="validationCategoryID" name="categoryID" value="DM<?php echo (int) (microtime(true) * 1000) ?>" name="voucherId" readonly>
                                <div id="txtProductId" class="invalid-feedback">Nhập mã DM</div>
                            </div>
                            <div class="col-md-6">
                                <label for="validationCategoryName" class="form-label">Tên danh mục</label>
                                <input type="text" class="form-control" id="validationCategoryName" value="" name="categoryName">
                                <div id="txtCategoryName" class="invalid-feedback">Nhập tên DM</div>
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
if (isset($_POST['add'])) {
    $id_category = $_POST['id_category'];
    $name = $_POST['name'];

    $getCategories = $categoryModel->getCategories();
    $check = true;
    if ($getCategories) {
        foreach ($getCategories as $category) {
            if ($category['name'] == $name) {
                $check = false;
            } else {
                $check = true;
            }
        }
    }
    if ($check) {
        $categoryModel->insert($id_category, $name);
        echo 1;
    } else {
        echo '<script>alert("Tên danh mục đã tồn tại")</script>';
    }
}
?>

<?php
if (isset($_POST['viewDetails']) && isset($_POST['id_category'])) {
    $id_category = $_POST['id_category'];
    $getCategoryByID = $categoryModel->getCategoryById($id_category)->fetch_assoc();
?>
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content ">
            <div class="card">
                <div class="card-body">
                    <h6 class="mb-0">Thông tin danh mục</h6>
                    <div class="p-4 border rounded">
                        <form class="row g-3 needs-validation">
                            <div class="col-md-6">
                                <label for="validationCategoryID" class="form-label">Mã danh mục</label>
                                <input type="text" class="form-control" id="validationCategoryID" name="categoryID" value="<?php echo $getCategoryByID['id_category'] ?>" name="voucherId" readonly>
                            </div>
                            <div class="col-md-6">
                                <label for="validationCategoryName" class="form-label">Tên danh mục</label>
                                <input type="text" class="form-control" id="validationCategoryName" value="<?php echo $getCategoryByID['name'] ?>" name="categoryName" readonly>
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
if (isset($_POST['viewToUpdate']) && isset($_POST['id_category'])) {
    $id_category = $_POST['id_category'];
    $getCategoryByID = $categoryModel->getCategoryById($id_category)->fetch_assoc();
?>
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content ">
            <div class="card">
                <div class="card-body">
                    <h6 class="mb-0">Thông tin danh mục</h6>
                    <div class="p-4 border rounded">
                        <form class="row g-3 needs-validation" method="POST" onsubmit="update()">
                            <div class="col-md-6">
                                <label for="validationCategoryID" class="form-label">Mã danh mục</label>
                                <input type="text" class="form-control" id="validationCategoryID" name="categoryID" value="<?php echo $getCategoryByID['id_category'] ?>" name="voucherId" readonly>
                            </div>
                            <div class="col-md-6">
                                <label for="validationCategoryName" class="form-label">Tên danh mục</label>
                                <input type="text" class="form-control" id="validationCategoryName" value="<?php echo $getCategoryByID['name'] ?>" name="categoryName">
                            </div>
                            <div class="col-md-12">
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
if (isset($_POST['update']) && isset($_POST['id_category'])) {
    $id_category = $_POST['id_category'];
    $name = $_POST['name'];

    $getCategories = $categoryModel->getCategories();
    $check = true;
    foreach ($getCategories as $category) {
        if ($category['name'] == $name) {
            $check = false;
        } else {
            $check = true;
        }
    }
    if ($check) {
        $categoryModel->update($id_category, $name);
        echo 1;
    } else {
        echo '<script>alert("Tên danh mục đã tồn tại")</script>';
    }
}
?>

<?php
if (isset($_POST['delete']) && isset($_POST['id_category'])) {
    $id_category = $_POST['id_category'];
    $categoryModel->delete($id_category);
    if ($categoryModel->delete($id_category)) {
        echo 1;
    } else {
        echo '<script>alert("Xóa thất bại")</script>';
    }
}
?>