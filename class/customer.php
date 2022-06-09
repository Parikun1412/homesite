<?php
$path = dirname(__FILE__);
require_once $path . '/../config/connection.php';

class Customer{
    private $conn;
    public function __construct(){
        $this->conn = getConnection();
    }

    public function getCustomers(){
        $sql = "SELECT * FROM tbl_customer";
        $result = $this->conn->query($sql);
        if ($result->num_rows > 0) {
            return $result;
        } else {
            return false;
        }
    }

    public function getCustomerById($id_customer){
        $id_customer = $this->conn->real_escape_string($id_customer);
        $sql = "SELECT * FROM tbl_customer WHERE `id_customer` = $id_customer";
        $result = $this->conn->query($sql);
        if ($result->num_rows > 0) {
            return $result;
        } else {
            return false;
        }
    }

    public function insert($id_customer, $fullname, $createdate, $phone, $point, $status){
        $id_customer = $this->conn->real_escape_string($id_customer);
        $fullname = $this->conn->real_escape_string($fullname);
        $createdate = $this->conn->real_escape_string($createdate);
        $phone = $this->conn->real_escape_string($phone);
        $point = $this->conn->real_escape_string($point);
        $status = $this->conn->real_escape_string($status);
        $sql = "INSERT INTO tbl_customer(`id_customer`, `fullname`, `createdate`, `phone`, `point`, `status`) VALUES('$id_customer', '$fullname', '$createdate', '$phone', '$point', '$status')";
        $result = $this->conn->query($sql);
        if ($result) {
            return $result;
        } else {
            return false;
        }
    }

    public function update($id_customer, $fullname, $createdate, $phone, $email, $address, $point, $status){
        $id_customer = $this->conn->real_escape_string($id_customer);
        $fullname = $this->conn->real_escape_string($fullname);
        $createdate = $this->conn->real_escape_string($createdate);
        $phone = $this->conn->real_escape_string($phone);
        $email = $this->conn->real_escape_string($email);
        $address = $this->conn->real_escape_string($address);
        $point = $this->conn->real_escape_string($point);
        $status = $this->conn->real_escape_string($status);
        $sql = "UPDATE tbl_customer SET `fullname` = '$fullname', `createdate` = '$createdate', `phone` = '$phone', `email` = '$email', `address` = '$address', `point` = '$point', `status` = '$status' WHERE `id_customer` = '$id_customer'";
        $result = $this->conn->query($sql);
        if ($result) {
            return $result;
        } else {
            return false;
        }
    }
}

?>
