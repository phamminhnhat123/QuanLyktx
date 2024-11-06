<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Ký</title>
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
    </style>
    <script>
        // Hàm kiểm tra mật khẩu
        function validateForm(event) {
    const password = document.getElementById('password').value;
    const confirmPassword = document.getElementById('confirm-password').value;

    if (password !== confirmPassword) {
        event.preventDefault(); // Ngăn tải lại trang nếu mật khẩu không khớp
        alert('Mật khẩu không khớp!'); // Thông báo nếu mật khẩu không khớp
    }
    // Nếu mật khẩu khớp, không ngăn submit và form sẽ gửi đi
}

    </script>
</head>
<body>
    <div class="header">
        <div class="container">
            <img src="/../Quanliktx/assets/img/vku.png" alt="Logo of KTX" width="50" height="50">
            <h1>TRANG THÔNG TIN SINH VIÊN Ở KÝ TÚC XÁ VKU</h1>
        </div>
    </div>
    <div class="login-container">
        <h2>ĐĂNG KÝ</h2>
        <form action="/../Quanliktx/controller/register.php" method="POST" onsubmit="validateForm(event);">
    <div class="input-group mb-3">
        <input type="text" class="form-control" name="masv" placeholder="Mã sinh viên" required>
        <span class="input-group-text"><i class="fas fa-id-card"></i></span>
    </div>
    <div class="input-group mb-3">
        <input type="text" class="form-control" name="cccd" placeholder="CMND/CCCD" required>
        <span class="input-group-text"><i class="fas fa-user"></i></span>
    </div>
    <div class="input-group mb-3">
        <input type="email" class="form-control" name="email" placeholder="Email" required>
        <span class="input-group-text"><i class="fas fa-envelope"></i></span>
    </div>
    <div class="input-group mb-3">
        <input type="tel" class="form-control" name="sdt" placeholder="Số điện thoại" required>
        <span class="input-group-text"><i class="fas fa-phone"></i></span>
    </div>
    <div class="input-group mb-3">
        <input type="password" id="password" name="matkhau" class="form-control" placeholder="Mật khẩu" required>
        <span class="input-group-text"><i class="fas fa-lock"></i></span>
    </div>
    <div class="input-group mb-3">
        <input type="password" id="confirm-password" class="form-control" placeholder="Nhập lại mật khẩu" required>
        <span class="input-group-text"><i class="fas fa-lock"></i></span>
    </div>
    <button type="submit" class="btn btn-primary"><i class="fas fa-user-plus"></i> Đăng ký</button>
</form>

    </div>
</body>
</html>

