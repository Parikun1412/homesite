<?php
if (!isset($_SESSION)) {
    session_start();
}
$path = dirname(__FILE__);
require_once $path . '/../../class/account.php';


if (isset($_POST['login']) && isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $accountModel = new Account();
    $login = $accountModel->login($username, md5($password));
    if ($login) {
        $id_account = $login->fetch_assoc()['id_account'];
        $_SESSION['login'] = true;
        $_SESSION['id_account'] = $id_account;
        echo 1;
    }
} else {
    echo 0;
}
