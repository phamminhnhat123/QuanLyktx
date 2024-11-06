<?php
// Kiểm tra xem form đã gửi dữ liệu hay chưa
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "<pre>";
    print_r($_POST); // Hoặc dùng var_dump($_POST);
    echo "</pre>";
} else {
    echo "Chưa có dữ liệu từ form.";
}
?>


<?php
// Hiển thị lỗi để dễ dàng kiểm tra trong quá trình phát triển
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Kết nối cơ sở dữ liệu
require "/../xam/htdocs/Quanliktx/model/connect.php";

// Kiểm tra phương thức POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Lấy dữ liệu từ biểu mẫu
    $masv = $_POST['masv'];
    $ten = $_POST['ten'];
    $ngaysinh = $_POST['ngaysinh'];
    $gioitinh = $_POST['gioitinh'];
    $dienthoai = $_POST['dienthoai'];
    $noisinh = $_POST['noisinh'];
    $emailcanhan = $_POST['emailcanhan'];
    $emailvku = $_POST['emailvku'];
    $khoa = $_POST['khoa'];
    $khoa1 = $_POST['khoa1'];
    $nganh = $_POST['nganh'];
    $lop = $_POST['lop'];
    $cccd = $_POST['cccd'];
    $ngaycap = $_POST['ngaycap'];
    $dantoc = $_POST['dantoc'];
    $tongiao = $_POST['tongiao'];
    $tinh = $_POST['tinh'];
    $huyen = $_POST['huyen'];
    $xa = $_POST['xa'];
    $sonha = $_POST['sonha'];
    $hotennguoithan = $_POST['hotennguoithan'];
    $quanhe = $_POST['quanhe'];
    $dienthoainguoithan = $_POST['dienthoainguoithan'];
    $diachithuongtru = $_POST['diachithuongtru'];
    $chonktx = $_POST['chonktx'];

    // Chuẩn bị và thực thi câu lệnh SQL
    try {
        // Chuẩn bị câu lệnh SQL
        $stmt = $conn->prepare("INSERT INTO dangkynoitru (masv, ten, ngaysinh, gioitinh, dienthoai, noisinh, emailcanhan, emailvku, khoa, khoa1, nganh, lop, cccd, ngaycap, dantoc, tongiao, tinh, huyen, xa, sonha, hotennguoithan, quanhe, dienthoainguoithan, diachithuongtru, chonktx) 
                                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        
        if ($stmt === false) {
            throw new Exception("Chuẩn bị câu lệnh thất bại: " . $conn->error);
        }
    
        // Gán các giá trị cho câu lệnh
        $stmt->bind_param(
            "sssssssssssssssssssssssss",
            $masv,
            $ten,
            $ngaysinh,
            $gioitinh,
            $dienthoai,
            $noisinh,
            $emailcanhan,
            $emailvku,
            $khoa,
            $khoa1,
            $nganh,
            $lop,
            $cccd,
            $ngaycap,
            $dantoc,
            $tongiao,
            $tinh,
            $huyen,
            $xa,
            $sonha,
            $hotennguoithan,
            $quanhe,
            $dienthoainguoithan,
            $diachithuongtru,
            $chonktx
        );
    
        // Thực thi câu lệnh
        if ($stmt->execute()) {
            echo "Thông tin sinh viên đã được thêm thành công!";
        } else {
            throw new Exception("Lỗi khi thực thi: " . $stmt->error);
        }
    
        // Đóng câu lệnh
        $stmt->close();
    
    } catch (Exception $e) {
        echo "Có lỗi xảy ra: " . $e->getMessage();
    }
    
    // Đóng kết nối
    $conn->close();
}
?>

<?php
// Thông tin kết nối
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
else{
    echo "ketnoithanhcong";
}

// Nhận dữ liệu từ form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Lấy dữ liệu từ biểu mẫu
    $masv = $_POST['masv'];
    $ten = $_POST['ten'];
    $ngaysinh = $_POST['ngaysinh'];
    $gioitinh = $_POST['gioitinh'];
    $dienthoai = $_POST['dienthoai'];
    $noisinh = $_POST['noisinh'];
    $emailcanhan = $_POST['emailcanhan'];
    $emailvku = $_POST['emailvku'];
    $khoa = $_POST['khoa'];
    $khoa1 = $_POST['khoa1'];
    $nganh = $_POST['nganh'];
    $lop = $_POST['lop'];
    $cccd = $_POST['cccd'];
    $ngaycap = $_POST['ngaycap'];
    $dantoc = $_POST['dantoc'];
    $tongiao = $_POST['tongiao'];
    $tinh = $_POST['tinh'];
    $huyen = $_POST['huyen'];
    $xa = $_POST['xa'];
    $sonha = $_POST['sonha'];
    $hotennguoithan = $_POST['hotennguoithan'];
    $quanhe = $_POST['quanhe'];
    $dienthoainguoithan = $_POST['dienthoainguoithan'];
    $diachithuongtru = $_POST['diachithuongtru'];
    $chonktx = $_POST['chonktx'];

    // Kiểm tra xem mã sinh viên hoặc CCCD đã tồn tại trong cơ sở dữ liệu chưa
    $check_query = "SELECT * FROM dangkynoitru WHERE masv = ? OR cccd = ? OR emailvku = ?";
    $stmt_check = $conn->prepare($check_query);
    $stmt_check->bind_param("ss", $masv, $cccd, $emailvku);
    $stmt_check->execute();
    $result = $stmt_check->get_result();

    if ($result->num_rows > 0) {
        // Nếu đã tồn tại, hiển thị thông báo lỗi
        echo "<script>alert('Mã sinh viên hoặc CCCD đã tồn tại!'); window.history.back();</script>";
    } else {
        // Nếu chưa tồn tại, tiến hành chèn dữ liệu vào cơ sở dữ liệu
        $insert_query = "INSERT INTO dangkynoitru (masv, ten, ngaysinh, gioitinh, dienthoai, noisinh, emailcanhan, emailvku, khoa, khoa1, nganh, lop, cccd, ngaycap, dantoc, tongiao, tinh, huyen, xa, sonha, hotennguoithan, quanhe, dienthoainguoithan, diachithuongtru, chonktx) 
                                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt_insert = $conn->prepare($insert_query);
        $stmt_insert->bind_param( "sssssssssssssssssssssssss",
        $masv,
        $ten,
        $ngaysinh,
        $gioitinh,
        $dienthoai,
        $noisinh,
        $emailcanhan,
        $emailvku,
        $khoa,
        $khoa1,
        $nganh,
        $lop,
        $cccd,
        $ngaycap,
        $dantoc,
        $tongiao,
        $tinh,
        $huyen,
        $xa,
        $sonha,
        $hotennguoithan,
        $quanhe,
        $dienthoainguoithan,
        $diachithuongtru,
        $chonktx);

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

