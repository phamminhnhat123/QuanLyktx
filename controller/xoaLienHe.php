<?php
// Kết nối đến CSDL
$conn = new mysqli("localhost:3307", "root", "", "qlktx");

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}

// Kiểm tra nếu có dữ liệu POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];

    // Xóa liên hệ khỏi bảng lienhe
    $sql = "DELETE FROM lienhe WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        echo "Xóa liên hệ thành công!";
    } else {
        echo "Lỗi khi xóa liên hệ: " . $conn->error;
    }

    $stmt->close();
}

// Đóng kết nối và chuyển hướng về trang quản lý liên hệ
$conn->close();
header("Location: /../Quanliktx/view/sinhVienLienHe.php");
exit();
?>