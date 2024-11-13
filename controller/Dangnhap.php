<?php
session_start();

// Thông tin kết nối cơ sở dữ liệu
$servername = "localhost:3307";
$username = "root";
$password = "";
$dbname = "qlktx";

// Tạo kết nối
$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}

// Xử lý đăng nhập
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $loginInput = isset($_POST['cccd_or_email']) ? $_POST['cccd_or_email'] : '';
    $password = $_POST['matkhau'];
    $captcha_input = $_POST['captcha_input'];

    // Kiểm tra mã Captcha
    if ($captcha_input != $_SESSION['captcha']) {
        echo "<script>alert('Captcha không đúng!');</script>";
    } else {
        // Xác định xem người dùng nhập CCCD hay email
        if (filter_var($loginInput, FILTER_VALIDATE_EMAIL)) {
            // Nếu nhập email
            $stmt = $conn->prepare("SELECT matkhau FROM dangky WHERE email = ?");
        } else {
            // Nếu nhập CCCD
            $stmt = $conn->prepare("SELECT matkhau FROM dangky WHERE cccd = ?");
        }
        $stmt->bind_param("s", $loginInput);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows > 0) {
            $stmt->bind_result($hashed_password);
            $stmt->fetch();

            // Kiểm tra mật khẩu
            if (password_verify($password, $hashed_password)) {
                // Chuyển hướng đến trang Tham Sinh Vien1
                header("Location: SinhVien1.php");
                exit(); // Dừng script sau khi chuyển hướng
            } else {
                echo "<script>alert('Sai mật khẩu!');</script>";
            }
        } else {
            echo "<script>alert('Tài khoản không tồn tại!');</script>";
        }
        $stmt->close();
    }
}

// Hàm tạo mã captcha ngẫu nhiên
function generateCaptcha() {
    $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
    $captcha = '';
    for ($i = 0; $i < 5; $i++) {
        $captcha .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $captcha;
}

// Khởi tạo captcha mới mỗi khi tải trang
$_SESSION['captcha'] = generateCaptcha();
$conn->close();
?>