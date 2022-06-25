<?php
$path = dirname(__FILE__);
require_once $path . '/../../class/product.php';
$path = dirname(__FILE__);
require_once $path . '/../../class/category.php';

$productModel = new Product();
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
                                <input type="text" class="form-control datepicker" name="productPrice" value="" id="validationPrice" />
                                <div id="txtPrice" class="invalid-feedback">Nhập giá bán</div>
                            </div>
                            <div class="col-md-12">
                                <label for="validationDescription" class="form-label">Mô tả sản phẩm</label>
                                <textarea name="productDescription" id="validationDescription" class="form-control" cols="20" rows="5"></textarea>
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
    $target_dir    = "../../uploads/";
    $target_file   = $target_dir . basename($_FILES["image"]["name"]);
    $image = "./uploads/" . basename($_FILES["image"]["name"]);
    $allowUpload   = true;
    //Lấy phần mở rộng của file (jpg, png, ...)
    $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
    // Cỡ lớn nhất được upload (bytes)
    $maxfilesize   = 5000000;
    //Những loại file được phép upload
    $allowtypes    = array('jpg', 'png');
    // Kiểm tra kích thước file upload cho vượt quá giới hạn cho phép
    if ($_FILES["image"]["size"] > $maxfilesize) {
        echo "Không được upload ảnh lớn hơn 5mb.";
        $allowUpload = false;
    }
    // Kiểm tra kiểu file
    if (!in_array($imageFileType, $allowtypes)) {
        echo "Chỉ được upload các định dạng JPG, PNG";
        $allowUpload = false;
    }
    if ($allowUpload == true) {
        move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
        $addproduct = $productModel->insert($id_product, $id_category, $name, $price, $image, $status, $description);
        if ($addproduct) {
            echo '1';
        } else {
            echo '<script>alert("Thêm thất bại")</script>';
        }
    }
}
?>

<?php
if (isset($_POST['view']) && isset($_POST['id_product'])) {
    $id_product = $_POST['id_product'];
    $productByID = $productModel->getProductById($id_product)->fetch_assoc();
?>
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content ">
            <div class="card">
                <div class="card-body">
                    <h6 class="mb-0">Thông tin sản phẩm</h6>
                    <div class="p-4 border rounded">
                        <form class="row g-3 needs-validation" id="updateForm" method="POST" enctype="multipart/form-data" onsubmit="active()">
                            <div class="col-md-6">
                                <label for="productName" class="form-label">Mã sản phẩm</label>
                                <input type="text" class="form-control" id="productID" name="productID" value="<?php echo $productByID['id_product'] ?>" name="voucherId" readonly>
                                <div id="txtProductId" class="invalid-feedback">Nhập mã SP</div>
                            </div>
                            <div class="col-md-6">
                                <label for="productName" class="form-label">Tên sản phẩm</label>
                                <input type="text" class="form-control" id="productName" value="<?php echo $productByID['name'] ?>" name="productName" readonly>
                                <div id="txtProductName" class="invalid-feedback">Nhập tên SP</div>
                            </div>
                            <div class="col-md-6">
                                <label for="category" class="form-label">Danh mục</label>
                                <?php
                                $categoryModel = new Category();
                                $id_category = $productByID['id_category'];
                                $categoryByID = $categoryModel->getCategoryById($id_category);

                                ?>
                                <input type="text" class="form-control" id="category" name="category" value="<?php echo $productByID['name'] ?>" readonly>
                                <div id="slCateogory" class="invalid-feedback">Chọn Danh mục</div>
                            </div>
                            <div class="col-md-6">
                                <label for="validationPrice" class="form-label">Giá bán</label>
                                <input type="text" class="form-control datepicker" name="productPrice" value="<?php echo $productByID['price'] ?>" id="validationPrice" readonly />
                                <div id="txtPrice" class="invalid-feedback">Nhập giá bán</div>
                            </div>
                            <div class="col-md-12">
                                <label for="validationDescription" class="form-label">Mô tả sản phẩm</label>
                                <textarea name="productDescription" id="validationDescription" class="form-control" cols="20" rows="5" readonly><?php echo $productByID['description'] ?></textarea>
                                <div id="txtDescription" class="invalid-feedback">Nhập mô tả</div>
                            </div>
                            <div class="col-md-12">
                                <label class="form-label">Hình ảnh</label>
                                <br>
                                <img src="<?php echo $productByID['image'] ?>" width="20%" alt="">
                            </div>
                            <?php
                            if ($productByID['status'] == 0) {
                            ?>
                                <div class="col-md-12">
                                    <button class="btn btn-primary" type="submit">Đăng bán</button>
                                </div>
                            <?php
                            }
                            ?>
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
if (isset($_POST['active'])) {
    $id_product = $_POST['id_product'];
    $active = $productModel->active($id_product);
    if($active){
        echo 1;
    }else{
        echo '<script>alert("Đăng bán thất bại")</script>';
    }
}
?>

<?php
if (isset($_POST['viewToUpdate']) && isset($_POST['id_product'])) {
    $id_product = $_POST['id_product'];
    $productByID = $productModel->getProductById($id_product)->fetch_assoc();
?>
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content ">
            <div class="card">
                <div class="card-body">
                    <h6 class="mb-0">Thông tin sản phẩm</h6>
                    <div class="p-4 border rounded">
                        <form class="row g-3 needs-validation" id="updateForm" method="POST" enctype="multipart/form-data" onsubmit="update()">
                            <div class="col-md-6">
                                <label for="productName" class="form-label">Mã sản phẩm</label>
                                <input type="text" class="form-control" id="productID" name="productID" value="<?php echo $productByID['id_product'] ?>" name="voucherId" readonly>
                                <div id="txtProductId" class="invalid-feedback">Nhập mã SP</div>
                            </div>
                            <div class="col-md-6">
                                <label for="productName" class="form-label">Tên sản phẩm</label>
                                <input type="text" class="form-control" id="productName" value="<?php echo $productByID['name'] ?>" name="productName">
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
                                <input type="text" class="form-control datepicker" name="productPrice" value="<?php echo $productByID['price'] ?>" id="validationPrice" />
                                <div id="txtPrice" class="invalid-feedback">Nhập giá bán</div>
                            </div>
                            <div class="col-md-12">
                                <label for="validationDescription" class="form-label">Mô tả sản phẩm</label>
                                <textarea name="productDescription" id="validationDescription" class="form-control" cols="20" rows="5"><?php echo $productByID['description'] ?></textarea>
                                <div id="txtDescription" class="invalid-feedback">Nhập mô tả</div>
                            </div>
                            <div class="col-md-4">
                                <label for="validationCustom04" class="form-label">Trạng thái</label>
                                <?php
                                if ($productByID['status'] == 1) {
                                ?>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" id="flexRadioDefault1" name="status" value="1" checked>
                                        <label class="form-check-label" for="flexRadioDefault1">Mở bán</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" id="flexRadioDefault2" name="status" value="2">
                                        <label class="form-check-label" for="flexRadioDefault2">Khóa</label>
                                    </div>
                                <?php
                                } else if ($productByID['status'] == 2) {
                                ?>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" id="flexRadioDefault1" name="status" value="1">
                                        <label class="form-check-label" for="flexRadioDefault1">Mở bán</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" id="flexRadioDefault2" name="status" value="2" checked>
                                        <label class="form-check-label" for="flexRadioDefault2">Khóa</label>
                                    </div>
                                <?php
                                }
                                ?>
                            </div>
                            <div class="col-md-12">
                                <label class="form-label">Hình ảnh</label>
                                <br>
                                <div class="input-group mb-3">
                                    <label class="input-group-text" for="fileToUpload">Upload</label>
                                    <input type="file" class="form-control" name="image" id="file">
                                </div>
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
if (isset($_POST['update']) &&  isset($_POST['id_product'])) {
    $id_product = $_POST['id_product'];
    $name = $_POST['name'];
    $id_category = $_POST['id_category'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $status = $_POST['status'];


    if (!isset($_FILES["image"]))  // kiểm tra ảnh có tồn tại
    {
        echo "Không có ảnh";
        die;
    }

    //Thư mục upload
    $target_dir    = "../../uploads/";
    $target_file   = $target_dir . basename($_FILES["image"]["name"]);
    $image = "./uploads/" . basename($_FILES["image"]["name"]);
    $allowUpload   = true;
    //Lấy phần mở rộng của file (jpg, png, ...)
    $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
    // Cỡ lớn nhất được upload (bytes)
    $maxfilesize   = 5000000;
    //Những loại file được phép upload
    $allowtypes    = array('jpg', 'png');
    // Kiểm tra kích thước file upload cho vượt quá giới hạn cho phép
    if ($_FILES["image"]["size"] > $maxfilesize) {
        echo "Không được upload ảnh lớn hơn 5mb.";
        $allowUpload = false;
    }
    // Kiểm tra kiểu file
    if (!in_array($imageFileType, $allowtypes)) {
        echo "Chỉ được upload các định dạng JPG, PNG";
        $allowUpload = false;
    }
    if ($allowUpload == true) {
        move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
        $updateProduct = $productModel->update($id_product, $id_category, $name, $price, $image, $status, $description);
        if ($updateProduct) {
            echo '1';
        } else {
            echo '<script>alert("Sửa thất bại")</script>';
        }
    }
}
?>