<?php
// Kết nối tới cơ sở dữ liệu
$servername = "localhost:3306"; 
$username = "root";
$password = "";
$dbname = "qlktx";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}

$masv = isset($_POST['masv']) ? $_POST['masv'] : '';
$cccd = isset($_POST['cccd']) ? $_POST['cccd'] : '';

// Kiểm tra xem mã sinh viên hoặc CCCD đã tồn tại trong bảng hay chưa
$checkQuery = "SELECT * FROM dangkynoitru WHERE masv = ? OR cccd = ?";
$stmtCheck = $conn->prepare($checkQuery);
$stmtCheck->bind_param("ss", $masv, $cccd);
$stmtCheck->execute();
$result = $stmtCheck->get_result();

if ($result->num_rows > 0) {
    // Nếu tồn tại bản ghi trùng, hiển thị thông báo
    echo "<script>alert('Mã sinh viên hoặc CCCD đã tồn tại! Vui lòng nhập lại.');</script>";
    echo "<script>window.location.href = '/../Quanliktx/view/DangKyNoiTru.php';</script>";
} else {
    // Chuẩn bị câu lệnh SQL với Prepared Statement
    $stmt = $conn->prepare("INSERT INTO dangkynoitru (masv, ten, ngaysinh, gioitinh, dienthoai, noisinh, emailcanhan, emailvku, khoa, khoa1, nganh, lop, cccd, ngaycap, dantoc, tongiao, tinh, huyen, xa, sonha, ngaybatdau, ngayketthuc, sophong, khu, hotennguoithan, quanhe, dienthoainguoithan, diachithuongtru) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

    // Gán giá trị từ form vào các biến
    $ten = isset($_POST['ten']) ? $_POST['ten'] : '';
    $ngaysinh = isset($_POST['ngaysinh']) ? $_POST['ngaysinh'] : '';
    $gioitinh = isset($_POST['gioitinh']) ? $_POST['gioitinh'] : '';
    $dienthoai = isset($_POST['dienthoai']) ? $_POST['dienthoai'] : '';
    $noisinh = isset($_POST['noisinh']) ? $_POST['noisinh'] : '';
    $emailcanhan = isset($_POST['emailcanhan']) ? $_POST['emailcanhan'] : '';
    $emailvku = isset($_POST['emailvku']) ? $_POST['emailvku'] : '';
    $khoa = isset($_POST['khoa']) ? $_POST['khoa'] : '';
    $khoa1 = isset($_POST['khoa1']) ? $_POST['khoa1'] : '';
    $nganh = isset($_POST['nganh']) ? $_POST['nganh'] : '';
    $lop = isset($_POST['lop']) ? $_POST['lop'] : '';
    $ngaycap = isset($_POST['ngaycap']) ? $_POST['ngaycap'] : '';
    $dantoc = isset($_POST['dantoc']) ? $_POST['dantoc'] : '';
    $tongiao = isset($_POST['tongiao']) ? $_POST['tongiao'] : '';
    $tinh = isset($_POST['tinh']) ? $_POST['tinh'] : '';
    $huyen = isset($_POST['huyen']) ? $_POST['huyen'] : '';
    $xa = isset($_POST['xa']) ? $_POST['xa'] : '';
    $sonha = isset($_POST['sonha']) ? $_POST['sonha'] : '';
    $ngaybatdau = isset($_POST['ngaybatdau']) ? $_POST['ngaybatdau'] : '';
    $ngayketthuc = isset($_POST['ngayketthuc']) ? $_POST['ngayketthuc'] : '';
    $sophong = isset($_POST['sophong']) ? $_POST['sophong'] : '';
    $khu = isset($_POST['khu']) ? $_POST['khu'] : '';
    $hotennguoithan = isset($_POST['hotennguoithan']) ? $_POST['hotennguoithan'] : '';
    $quanhe = isset($_POST['quanhe']) ? $_POST['quanhe'] : '';
    $dienthoainguoithan = isset($_POST['dienthoainguoithan']) ? $_POST['dienthoainguoithan'] : '';
    $diachithuongtru = isset($_POST['diachithuongtru']) ? $_POST['diachithuongtru'] : '';

    $stmt->bind_param("ssssssssssssssssssssssssssss", $masv, $ten, $ngaysinh, $gioitinh, $dienthoai, $noisinh, $emailcanhan, $emailvku, $khoa, $khoa1, $nganh, $lop, $cccd, $ngaycap, $dantoc, $tongiao, $tinh, $huyen, $xa, $sonha, $ngaybatdau, $ngayketthuc, $sophong, $khu, $hotennguoithan, $quanhe, $dienthoainguoithan, $diachithuongtru);

    if ($stmt->execute()) {
        echo "<script>alert('Đăng ký thành công!');</script>";
        
        // Chuyển hướng sau khi đăng ký thành công để tránh thông báo khi tải lại
        echo "<script>window.location.href = '/../Quanliktx/view/DangKyNoiTru.php';</script>";
    } else {
        echo "Lỗi: " . $stmt->error;
    }
    $stmt->close();
}

$stmtCheck->close();
$conn->close();
?>

