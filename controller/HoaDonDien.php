<?php
// Kết nối cơ sở dữ liệu
$servername = "localhost:3307";
$username = "root";  // Thay bằng tên người dùng của bạn
$password = "";  // Thay bằng mật khẩu của bạn
$dbname = "qlktx";  // Thay bằng tên cơ sở dữ liệu của bạn

// Tạo kết nối
$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Kiểm tra nếu dữ liệu được gửi qua POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Lấy dữ liệu từ form (mảng)
    $phong = $_POST['phong'];  // mảng các phòng
    $khu = $_POST['khu'];      // mảng các khu
    $chisodiencu = $_POST['chisodiencu'];  // mảng các chữ số điện cũ
    $chisodienmoi = $_POST['chisodienmoi'];  // mảng các chữ số điện mới

    // Kiểm tra nếu các mảng này không rỗng
    if (empty($phong) || empty($khu) || empty($chisodiencu) || empty($chisodienmoi)) {
        die("Lỗi: Thiếu dữ liệu cần thiết.");
    }

    // Lặp qua các mảng và xử lý từng giá trị
    foreach ($phong as $index => $phong_value) {
        $khu_value = $khu[$index];
        $chisodiencu_value = (int)$chisodiencu[$index];
        $chisodienmoi_value = (int)$chisodienmoi[$index];

        // Kiểm tra giá trị số
        if (!is_numeric($chisodiencu_value) || !is_numeric($chisodienmoi_value)) {
            die("Lỗi: Chữ số điện phải là giá trị số hợp lệ.");
        }

        // Tính thành tiền (giả sử giá tiền mỗi kWh là 3000 VND)
        $thanhtien = ($chisodienmoi_value - $chisodiencu_value) * 3000;

        // Chuẩn bị câu lệnh SQL để chèn dữ liệu vào bảng
        $stmt = $conn->prepare("INSERT INTO tiendien (phong, khu, chisodiencu, chisodienmoi, thanhtien) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("ssiii", $phong_value, $khu_value, $chisodiencu_value, $chisodienmoi_value, $thanhtien);

        // Thực thi câu lệnh SQL
        if ($stmt->execute()) {
            echo "Hóa đơn đã được lưu thành công!<br>";
        } else {
            echo "Lỗi: " . $stmt->error . "<br>";
        }
    }

    // Đóng kết nối
    $stmt->close();
    $conn->close();
}
?>
