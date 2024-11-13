<?php
// Thông tin kết nối
$servername = "localhost:3306";
$username = "root";
$password = "";
$dbname = "qlktx";

// Tạo kết nối
$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}

// Nhận dữ liệu từ form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $masv = $_POST['masv'];
    $cccd = $_POST['cccd'];
    $email = $_POST['email'];
    $sdt = $_POST['sdt'];
    $matkhau = password_hash($_POST['matkhau'], PASSWORD_DEFAULT);

    // Kiểm tra xem mã sinh viên hoặc CCCD đã tồn tại trong cơ sở dữ liệu chưa
    $check_query = "SELECT * FROM dangky WHERE masv = ? OR cccd = ?";
    $stmt_check = $conn->prepare($check_query);
    $stmt_check->bind_param("ss", $masv, $cccd);
    $stmt_check->execute();
    $result = $stmt_check->get_result();

    if ($result->num_rows > 0) {
        // Nếu đã tồn tại, hiển thị thông báo lỗi
        echo "<script>alert('Mã sinh viên hoặc CCCD đã tồn tại!'); window.history.back();</script>";
    } else {
        // Nếu chưa tồn tại, tiến hành chèn dữ liệu vào cơ sở dữ liệu
        $insert_query = "INSERT INTO dangky (masv, cccd, email, sdt, matkhau) VALUES (?, ?, ?, ?, ?)";
        $stmt_insert = $conn->prepare($insert_query);
        $stmt_insert->bind_param("sssss", $masv, $cccd, $email, $sdt, $matkhau);

        if ($stmt_insert->execute()) {
            echo "<script>alert('Đăng ký thành công!'); window.history.back();</script>";
        } else {
            echo "<script>alert('Lỗi khi đăng ký: " . $stmt_insert->error . "'); window.history.back();</script>";
        }
        $stmt_insert->close();
    }
    $stmt_check->close();
}

$conn->close();
?>
