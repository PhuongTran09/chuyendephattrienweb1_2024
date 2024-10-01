<?php
session_start();
require_once 'models/UserModel.php';
$userModel = new UserModel();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Lấy ID và CSRF Token từ dữ liệu POST
    if (!empty($_POST['id']) && !empty($_POST['csrf_token'])) {
        // Kiểm tra CSRF Token hợp lệ
        if ($_POST['csrf_token'] === $_SESSION['csrf_token']) {
            $id = $_POST['id'];

            // Thực hiện xóa người dùng
            if ($userModel->deleteUserById($id)) {
                $_SESSION['message'] = "Delete user success!";
            } else {
                $_SESSION['message'] = "Delete user faild.";
            }
        } else {
            $_SESSION['message'] = "CSRF Token not valid.";
        }
    } else {
        $_SESSION['message'] = "Request not valid.";
    }
} else {
    $_SESSION['message'] = "Request not valid.";
}

header('location: list_users.php');
exit();
?>
