<?php
$path = dirname(__FILE__);
require_once $path . '/../config/connection.php';

class Account
{
    private $conn;
    public function __construct()
    {
        $this->conn = getConnection();
    }

    public function getAccounts(){
        $sql = "SELECT * FROM tbl_account";
        $result = $this->conn->query($sql);
        if ($result->num_rows > 0) {
            return $result;
        } else {
            return false;
        }
    }

    public function getAccountById($id_account)
    {
        $id_account = $this->conn->real_escape_string($id_account);
        $sql = "SELECT * FROM tbl_account WHERE `id_account` = '$id_account'";
        $result = $this->conn->query($sql);
        if ($result->num_rows > 0) {
            return $result;
        } else {
            return false;
        }
    }
    public function insert($id_account, $username, $password)
    {
        $id_account = $this->conn->real_escape_string($id_account);
        $username = $this->conn->real_escape_string($username);
        $password = $this->conn->real_escape_string($password);
        $sql = "INSERT INTO tbl_account(`id_account`, `username`, `password`) VALUES('$id_account', '$username', '".md5($password)."')";
        $result = $this->conn->query($sql);
        if ($result) {
            return $result;
        } else {
            return false;
        }
    }

    public function update($id_account, $username, $password, $status)
    {
        $id_account = $this->conn->real_escape_string($id_account);
        $username = $this->conn->real_escape_string($username);
        $password = $this->conn->real_escape_string($password);
        $status = $this->conn->real_escape_string($status);
        $sql = "UPDATE tbl_account SET `username` = '$username', `password` = '".md5($password)."', `status` = '$status' WHERE `id_account` = '$id_account'";
        $result = $this->conn->query($sql);
        if ($result) {
            return $result;
        } else {
            return false;
        }
    }

    public function updateWithoutPassword($id_account, $username, $status)
    {
        $id_account = $this->conn->real_escape_string($id_account);
        $username = $this->conn->real_escape_string($username);
        $status = $this->conn->real_escape_string($status);
        $sql = "UPDATE tbl_account SET `username` = '$username', `status` = '$status' WHERE `id_account` = '$id_account'";
        $result = $this->conn->query($sql);
        if ($result) {
            return $result;
        } else {
            return false;
        }
    }

    public function delete($id_account)
    {
        $id_account = $this->conn->real_escape_string($id_account);
        $sql = "DELETE FROM tbl_account WHERE `id_account` = '$id_account'";
        $result = $this->conn->query($sql);
        if ($result) {
            return $result;
        } else {
            return false;
        }
    }

    public function login($username, $password) {
        $username = $this->conn->real_escape_string($username);
        $password = $this->conn->real_escape_string($password);
        $sql = "SELECT * FROM tbl_account WHERE `username` = '$username' AND `password` = '$password'";
        $result = $this->conn->query($sql);
        if ($result->num_rows >0) {
            return $result;
        }else return false;
    }
}
