<?php
$path = dirname(__FILE__);
require_once $path . '/config/connection.php';

class Category{
    private $conn;
    public function __construct(){
        $this->conn = getConnection();
    }

    public function getCategories(){
        $sql = "SELECT * FROM tbl_category";
        $result = $this->conn->query($sql);
        if ($result->num_rows > 0) {
            return $result;
        } else {
            return false;
        }
    }

    public function getCategoryById($id_category){
        $id_category = $this->conn->real_escape_string($id_category);
        $sql = "SELECT * FROM tbl_category WHERE `id_category` = $id_category";
        $result = $this->conn->query($sql);
        if ($result->num_rows > 0) {
            return $result;
        } else {
            return false;
        }
    }

    public function insert($id_category, $name){
        $id_category = $this->conn->real_escape_string($id_category);
        $name = $this->conn->real_escape_string($name);
        $sql = "INSERT INTO tbl_category(`id_category`, `name`) VALUES('$id_category', '$name')";
        $result = $this->conn->query($sql);
        if ($result) {
            return $result;
        } else {
            return false;
        }
    }

    public function update($id_category, $name){
        $id_category = $this->conn->real_escape_string($id_category);
        $name = $this->conn->real_escape_string($name);
        $sql = "UPDATE tbl_category SET `name` = '$name' WHERE `id_category` = '$id_category'";
        $result = $this->conn->query($sql);
        if ($result) {
            return $result;
        } else {
            return false;
        }
    }

    public function delete($id_category){
        $id_category = $this->conn->real_escape_string($id_category);
        $sql = "DELETE FROM tbl_category WHERE `id_category` = '$id_category'";
        $result = $this->conn->query($sql);
        if ($result) {
            return $result;
        } else {
            return false;
        }
    }
}

?>