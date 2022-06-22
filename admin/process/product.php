<?php
$path = dirname(__FILE__);
require_once $path . '/../../class/product.php';
$path = dirname(__FILE__);
require_once $path . '/../../class/category.php';
?>

<?php
if (isset($_POST['viewToAdd'])) {
?>
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content ">
            <div class="card">
                <div class="card-body">
                    <h6 class="mb-0">Thông tin sản phẩm</h6>
                    <div class="p-4 border rounded">
                        <form class="row g-3 needs-validation" id="updateForm" method="POST" enctype="multipart/form-data" onsubmit="add()">
                            <div class="col-md-6">
                                <label for="productName" class="form-label">Mã sản phẩm</label>
                                <input type="text" class="form-control" id="productID" name="productID" value="SP<?php echo (int) (microtime(true) * 1000) ?>" name="voucherId" readonly>
                                <div id="txtProductId" class="invalid-feedback">Nhập mã SP</div>
                            </div>
                            <div class="col-md-6">
                                <label for="productName" class="form-label">Tên sản phẩm</label>
                                <input type="text" class="form-control" id="productName" value="" name="productName">
                                <div id="txtProductName" class="invalid-feedback">Nhập tên SP</div>
                            </div>
                            <div class="col-md-6">
                                <label for="category" class="form-label">Danh mục</label>
                                <select name="category" id="category" class="form-select">
                                    <option value="">Chọn danh mục</option>
                                    <?php
                                    $categoryModel = new Category();
                                    $listCategory = $categoryModel->getCategories();
                                    if ($listCategory) {
                                        while ($row = $listCategory->fetch_assoc()) {
                                            echo '<option value="' . $row['id_category'] . '">' . $row['name'] . '</option>';
                                        }
                                    }
                                    ?>
                                </select>
                                <div id="slCateogory" class="invalid-feedback">Chọn Danh mục</div>
                            </div>
                            <div class="col-md-6">
                                <label for="validationPrice" class="form-label">Giá bán</label>
                                <input type="text" class="form-control datepicker" name="productPrice" id="validationPrice" />
                                <div id="txtPrice" class="invalid-feedback">Nhập giá bán</div>
                            </div>
                            <div class="col-md-12">
                                <label for="validationDescription" class="form-label">Mô tả sản phẩm</label>
                                <textarea name="productDescription" name="productDescription" id="validationDescription" class="form-control" cols="20" rows="5"></textarea>
                                <div id="txtDescription" class="invalid-feedback">Nhập mô tả</div>
                            </div>
                            <div class="col-md-12">
                                <label class="form-label">Chọn hình ảnh upload</label>
                                <div class="input-group mb-3">
                                    <label class="input-group-text" for="fileToUpload">Upload</label>
                                    <input type="file" class="form-control" name="image" id="file">
                                </div>
                                <div id="txtEnddate" class="invalid-feedback">Hãy chọn hình ảnh</div>
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
    $productModel = new Product();

    $id_product = $_POST['id_product'];
    $name = $_POST['name'];
    $id_category = $_POST['id_category'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $status = 0;
    //Xử lý ảnh
    if (!isset($_FILES["image"]))  // kiểm tra ảnh có tồn tại
    {
        echo "Không có ảnh";
        die;
    }

    //Thư mục upload
    $target_dir    = "../uploads/";
    $target_file   = $target_dir . basename($_FILES["image"]["name"]);
    $allowUpload   = true;
    //Lấy phần mở rộng của file (jpg, png, ...)
    $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
    // Cỡ lớn nhất được upload (bytes)
    $maxfilesize   = 2097152;
    //Những loại file được phép upload
    $allowtypes    = array('jpg', 'png');
    // Kiểm tra kích thước file upload cho vượt quá giới hạn cho phép
    if ($_FILES["image"]["size"] > $maxfilesize) {
        echo "Không được upload ảnh lớn hơn 2mb.";
        $allowUpload = false;
    }
    // Kiểm tra kiểu file
    if (!in_array($imageFileType, $allowtypes)) {
        echo "Chỉ được upload các định dạng JPG, PNG";
        $allowUpload = false;
    }
    if ($allowUpload == true) {
        move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
        $addproduct = $productModel->insert($id_product, $id_category, $name, $price, $target_file, $status, $description);
        if($addproduct){
            echo '1';
        }
        else{
            echo '<script>alert("Thêm thất bại")</script>';
        }
    }
}
?>