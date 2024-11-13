<?php
 $localhost = "localhost:3307";
 $user = "root";
 $pass = "";
 $database = "qlktx";

 $conn = new mysqli($localhost, $user, $pass, $database);
 if(!$conn){
   echo "kết nối thất bại :". mysqli_connect_errno();
 }
 echo "";
 
// Khởi tạo mảng $payments để lưu kết quả tìm kiếm
$payments = [];

// Chỉ thực hiện tìm kiếm khi phương thức là POST và các trường bắt buộc đã được gửi
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Lấy dữ liệu từ biểu mẫu
    $dormitory = isset($_POST['dormitory']) ? $_POST['dormitory'] : null;
    $room = isset($_POST['room']) ? $_POST['room'] : null;

    if ($dormitory && $room) {
        // Chuẩn bị câu lệnh SQL
        $stmt = $conn->prepare("SELECT * FROM tiendien WHERE dormitory = ? AND room = ?");
        $stmt->bind_param("ii", $dormitory, $room);

        // Thực thi và lấy kết quả
        $stmt->execute();
        $result = $stmt->get_result();

        // Đưa dữ liệu vào mảng $payments
        while ($row = $result->fetch_assoc()) {
            $payments[] = $row;
        }

        // Giải phóng tài nguyên
        $stmt->close();
    }
}
 

// Đóng kết nối
$conn->close();
?>