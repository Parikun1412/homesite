<?php
$path = dirname(__FILE__);
require_once $path . '/../config/connection.php';

class Order{
    private $conn;
    public function __construct(){
        $this->conn = getConnection();
    }

    public function getOrders(){
        $sql = "SELECT * FROM tbl_order";
        $result = $this->conn->query($sql);
        if ($result->num_rows > 0) {
            return $result;
        } else {
            return false;
        }
    }

    public function getOrderById($id_order){
        $id_order = $this->conn->real_escape_string($id_order);
        $sql = "SELECT * FROM tbl_order WHERE `id_order` = $id_order";
        $result = $this->conn->query($sql);
        if ($result->num_rows > 0) {
            return $result;
        } else {
            return false;
        }
    }

    public function insert($id_order, $id_customer, $fullname, $phone, $totalprice, $date, $status){
        $id_order = $this->conn->real_escape_string($id_order);
        $id_customer = $this->conn->real_escape_string($id_customer);
        $fullname = $this->conn->real_escape_string($fullname);
        $phone = $this->conn->real_escape_string($phone);
        $totalprice = $this->conn->real_escape_string($totalprice);
        $date = $this->conn->real_escape_string($date);
        $status = $this->conn->real_escape_string($status);
        $sql = "INSERT INTO tbl_order(`id_order`, `id_customer`, `fullname`, `phone`, `totalprice`, `date`, `status`) VALUES('$id_order', '$id_customer', '$fullname', '$phone', '$totalprice', '$date', '$status')";
        $result = $this->conn->query($sql) or die($this->conn->error);
        if ($result) {
            return $result;
        } else {
            return false;
        }
    }

    public function update($id_order, $id_customer, $fullname, $phone, $address, $email, $totalprice, $date, $status, $reason_cancel){
        $id_order = $this->conn->real_escape_string($id_order);
        $id_customer = $this->conn->real_escape_string($id_customer);
        $fullname = $this->conn->real_escape_string($fullname);
        $phone = $this->conn->real_escape_string($phone);
        $address = $this->conn->real_escape_string($address);
        $email = $this->conn->real_escape_string($email);
        $totalprice = $this->conn->real_escape_string($totalprice);
        $date = $this->conn->real_escape_string($date);
        $status = $this->conn->real_escape_string($status);
        $reason_cancel = $this->conn->real_escape_string($reason_cancel);
        $sql = "UPDATE tbl_order SET `id_customer` = '$id_customer', `fullname` = '$fullname', `phone` = '$phone', `address` = '$address', `email` = '$email', `totalprice` = '$totalprice', `date` = '$date', `status` = '$status', `reason_cancel` = '$reason_cancel' WHERE `id_order` = '$id_order'";
        $result = $this->conn->query($sql);
        if ($result) {
            return $result;
        } else {
            return false;
        }
    }
}

?>