<?php
$path = dirname(__FILE__);
require_once $path . '/../config/connection.php';

class Product{
    private $conn;
    public function __construct(){
        $this->conn = getConnection();
    }

    public function getProducts(){
        $sql = "SELECT * FROM tbl_product";
        $result = $this->conn->query($sql);
        if ($result->num_rows > 0) {
            return $result;
        } else {
            return false;
        }
    }

    public function getProductById($id_product){
        $id_product = $this->conn->real_escape_string($id_product);
        $sql = "SELECT * FROM tbl_product WHERE `id_product` = '$id_product'";
        $result = $this->conn->query($sql);
        if ($result->num_rows > 0) {
            return $result;
        } else {
            return false;
        }
    }

    public function insert($id_product, $id_category, $name, $price, $image, $status, $description){
        $id_product = $this->conn->real_escape_string($id_product);
        $id_category = $this->conn->real_escape_string($id_category);
        $name = $this->conn->real_escape_string($name);
        $price = $this->conn->real_escape_string($price);
        $image = $this->conn->real_escape_string($image);
        $status = $this->conn->real_escape_string($status);
        $description = $this->conn->real_escape_string($description);
        $sql = "INSERT INTO tbl_product(`id_product`, `id_category`, `name`, `price`, `image`, `status`, `description`) VALUES('$id_product', '$id_category', '$name', '$price', '$image', '$status', '$description')";
        $result = $this->conn->query($sql) or die($this->conn->error);
        if ($result) {
            return $result;
        } else {
            return false;
        }
    }

    public function update($id_product, $id_category, $name, $price, $image, $status, $description){
        $id_product = $this->conn->real_escape_string($id_product);
        $id_category = $this->conn->real_escape_string($id_category);
        $name = $this->conn->real_escape_string($name);
        $price = $this->conn->real_escape_string($price);
        $image = $this->conn->real_escape_string($image);
        $status = $this->conn->real_escape_string($status);
        $description = $this->conn->real_escape_string($description);
        $sql = "UPDATE tbl_product SET `id_category` = '$id_category', `name` = '$name', `price` = '$price', `image` = '$image', `status` = '$status', `description` = '$description' WHERE `id_product` = '$id_product'";
        $result = $this->conn->query($sql);
        if ($result) {
            return $result;
        } else {
            return false;
        }
    }

    public function delete($id_product){
        $id_product = $this->conn->real_escape_string($id_product);
        $sql = "DELETE FROM tbl_product WHERE `id_product` = '$id_product'";
        $result = $this->conn->query($sql);
        if ($result) {
            return $result;
        } else {
            return false;
        }
    }
}

?>