<?php
$path = dirname(__FILE__);
require_once $path . '/../config/connection.php';

class OrderItem{
    private $conn;
    public function __construct(){
        $this->conn = getConnection();
    }

    public function getOrderItems(){
        $sql = "SELECT * FROM tbl_order_item";
        $result = $this->conn->query($sql);
        if ($result->num_rows > 0) {
            return $result;
        } else {
            return false;
        }
    }

    public function getOrderItemById($id_order){
        $id_order = $this->conn->real_escape_string($id_order);
        $sql = "SELECT * FROM tbl_order_item WHERE `id_order` = '$id_order'";
        $result = $this->conn->query($sql) ;
        if ($result->num_rows > 0) {
            return $result;
        } else {
            return false;
        }
    }

    public function getOrderItemByProductId($id_product){
        $id_product = $this->conn->real_escape_string($id_product);
        $sql = "SELECT * FROM tbl_order_item WHERE `id_product` = '$id_product'";
        $result = $this->conn->query($sql);
        if ($result->num_rows > 0) {
            return $result;
        } else {
            return false;
        }
    }

    public function insert($id_order, $id_product, $quantity, $price){
        $id_order = $this->conn->real_escape_string($id_order);
        $id_product = $this->conn->real_escape_string($id_product);
        $quantity = $this->conn->real_escape_string($quantity);
        $price = $this->conn->real_escape_string($price);
        $sql = "INSERT INTO tbl_order_item(`id_order`, `id_product`, `quantity`, `price`) VALUES('$id_order', '$id_product', '$quantity', '$price')";
        $result = $this->conn->query($sql) or die($this->conn->error);
        if ($result) {
            return $result;
        } else {
            return false;
        }
    }

    public function update($id_order, $id_product, $quantity, $price){
        $id_order = $this->conn->real_escape_string($id_order);
        $id_product = $this->conn->real_escape_string($id_product);
        $quantity = $this->conn->real_escape_string($quantity);
        $price = $this->conn->real_escape_string($price);
        $sql = "UPDATE tbl_order_item SET `id_product` = '$id_product', `quantity` = '$quantity', `price` = '$price' WHERE `id_order` = '$id_order'";
        $result = $this->conn->query($sql);
        if ($result) {
            return $result;
        } else {
            return false;
        }
    }

    public function delete($id_order){
        $id_order = $this->conn->real_escape_string($id_order);
        $sql = "DELETE FROM tbl_order_item WHERE `id_order` = '$id_order'";
        $result = $this->conn->query($sql);
        if ($result) {
            return $result;
        } else {
            return false;
        }
    }
}

?>