<?php

if (!isset($_SESSION)) session_start();

function checkLogin() {

    if (!isset($_SESSION['login']) && !isset($_SESSION['id_account'])) {
        header('Location: ./login.php');
    }
}
