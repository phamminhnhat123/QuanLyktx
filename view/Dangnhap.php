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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Nhập</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        /* Định dạng giao diện chính */
        body {
            margin: 0;
            padding: 0;
            background: url('https://sp-ao.shortpixel.ai/client/to_webp,q_glossy,ret_img/https://vku.udn.vn//wp-content/uploads/2023/10/Kytucxa-scaled.jpg') no-repeat center center fixed;
            background-size: cover;
            font-family: Arial, sans-serif;
        }
        .header {
            background-color: #4a90e2;
            padding: 10px 0;
            text-align: center;
            color: #fff;
        }
        .header img {
            height: 50px;
        }
        .header h1 {
            display: inline-block;
            font-size: 24px;
            margin: 0;
            padding-left: 10px;
            font-weight: bold;
        }
        .login-container {
            max-width: 400px;
            margin: 50px auto;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.9);
            border-radius: 5px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        .login-container h2 {
            color: #007bff;
            text-align: center;
            margin-bottom: 20px;
            font-weight: bold;
        }
        .login-container .btn {
            width: 100%;
            margin-top: 10px;
        }
        .captcha-container {
            text-align: center; /* Căn giữa nội dung */
        }
    </style>
</head>
<body>
    <div class="header">
        <div class="container">
            <img src="/../Quanliktx/assets/img/vku.png" alt="Logo of KTX" width="50" height="50">
            <h1>TRANG THÔNG TIN SINH VIÊN Ở KÝ TÚC XÁ VKU</h1>
        </div>
    </div>
    <div class="login-container">
        <h2>ĐĂNG NHẬP</h2>  
        <form method="POST">
             <div class="input-group mb-3">
                <input type="text" class="form-control" name="cccd_or_email" placeholder="CCCD hoặc Email" aria-label="CCCD hoặc Email" required>
                <span class="input-group-text"><i class="fas fa-user"></i></span>
            </div>

            <div class="input-group mb-3">
                <input type="password" class="form-control" name="matkhau" placeholder="Mật khẩu" aria-label="Mật khẩu" required>
                <span class="input-group-text"><i class="fas fa-lock"></i></span>
            </div>
            <div class="input-group mb-3 captcha-container">
                <input type="text" id="captcha" class="form-control text-center" value="<?php echo $_SESSION['captcha']; ?>" readonly>
            </div>
            <div class="input-group mb-3">
                <input type="text" class="form-control" name="captcha_input" placeholder="Nhập mã captcha" required>
                <span class="input-group-text"><i class="fas fa-sync-alt"></i></span>
            </div>
            <button type="submit" class="btn btn-primary"><i class="fas fa-sign-in-alt"></i> Đăng nhập</button>
            <button type="button" class="btn btn-secondary" onclick="alert('Chức năng này chưa được triển khai.');">Quên mật khẩu</button>
        </form>
    </div>
</body>
</html>
