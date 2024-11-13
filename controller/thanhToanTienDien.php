<?php
// Kết nối cơ sở dữ liệu
require __DIR__.'/../model/connect.php';


// Lấy dữ liệu từ form nếu người dùng nhấn "Tìm kiếm"
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $dormitory = $_POST['dormitory'];
    $room = $_POST['room'];

    // Truy vấn cơ sở dữ liệu
    $sql = "SELECT * FROM tiendien WHERE dormitory LIKE ? AND room LIKE ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $dormitory, $room);
    $stmt->execute();
    $result = $stmt->get_result();

    $payments = [];
    while ($row = $result->fetch_assoc()) {
        $payments[] = $row;
    }
}
?>
