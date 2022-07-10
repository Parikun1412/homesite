<?php
$path = dirname(__FILE__);
require_once $path . '/../config/connection.php';

class Support
{
    private $conn;
    public function __construct()
    {
        $this->conn = getConnection();
    }

    public function getSupports(){
        $sql = "SELECT * FROM tbl_support";
        $result = $this->conn->query($sql);
        if($result->num_rows > 0){
            return $result;
        }
        else{
            return false;
        }
    }

    public function getSupportById($id_support){
        $id_support = $this->conn->real_escape_string($id_support);
        $sql = "SELECT * FROM tbl_support WHERE id_support = '$id_support'";
        $result = $this->conn->query($sql);
        if($result->num_rows > 0){
            return $result;
        }
        else{
            return false;
        }
    }

    public function insert($id_support, $fullname, $email, $message){
        $id_support = $this->conn->real_escape_string($id_support);
            
    }

    public function delete($id_support){
        $id_support = $this->conn->real_escape_string($id_support);
        $sql = "DELETE FROM tbl_support WHERE id_support = '$id_support'";
        $result = $this->conn->query($sql);
        if($result->num_rows > 0){
            return $result;
        }
        else{
            return false;
        }
    }
}
