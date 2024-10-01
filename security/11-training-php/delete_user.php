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
                $_SESSION['message'] = "Xóa người dùng thành công!";
            } else {
                $_SESSION['message'] = "Xóa người dùng thất bại.";
            }
        } else {
            $_SESSION['message'] = "CSRF Token không hợp lệ.";
        }
    } else {
        $_SESSION['message'] = "Yêu cầu không hợp lệ.";
    }
} else {
    $_SESSION['message'] = "Yêu cầu không hợp lệ.";
}

header('location: list_users.php');
exit();
?>
