<?php
$path = dirname(__FILE__);
require_once $path . '/../class/support.php';
?>

<?php
if (isset($_POST['postSupport']) && isset($_POST['fullname'])) {
    $id_support = "HT" . time();
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $supportModel = new Support();

    $messageSupport = $supportModel->insert($id_support, $fullname, $email, $message);
    if ($messageSupport) {
        echo 1;
    } else {
        echo 0;
    }
}
?>