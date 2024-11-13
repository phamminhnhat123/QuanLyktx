<?php
require __DIR__.'/../model/connect.php';

// Kiểm tra xem người dùng có gửi thông tin hay không
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $captcha_input = $_POST['captcha-input'];

    // Kiểm tra CAPTCHA
    if ($captcha_input == "EQ9ZA") {
        // Kiểm tra xem email có phải là một email hợp lệ hay không
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            // Truy vấn cơ sở dữ liệu tìm kiếm bằng email
            $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
        } else {
            // Truy vấn cơ sở dữ liệu tìm kiếm bằng CCCD
            $sql = "SELECT * FROM users WHERE cccd = '$email' AND password = '$password'";
        }

        // Thực hiện truy vấn
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Đăng nhập thành công
            echo "Đăng nhập thành công!";
        } else {
            // Đăng nhập thất bại
            echo "CCCD/Email hoặc mật khẩu không đúng!";
        }
    } else {
        // CAPTCHA không đúng
        echo "Mã CAPTCHA không đúng!";
    }
}
?>