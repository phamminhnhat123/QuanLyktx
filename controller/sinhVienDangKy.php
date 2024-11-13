<?php
header('Content-Type: application/json');

// Kết nối đến cơ sở dữ liệu
$conn = new mysqli("localhost:3306", "root", "", "qlktx");

// Kiểm tra kết nối
if ($conn->connect_error) {
    echo json_encode(['error' => 'Kết nối thất bại: ' . $conn->connect_error]);
    exit();
}

// Lấy dữ liệu từ bảng dangkynoitru
$sql = "SELECT id, masv, ten, lop, tinh, gioitinh, ngaysinh, khoa1, ngaybatdau, ngayketthuc FROM dangkynoitru";
$result = $conn->query($sql);

$data = [];
if ($result && $result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
}

// Trả về dữ liệu dạng JSON
echo json_encode($data);

// Đóng kết nối
$conn->close();
?>
