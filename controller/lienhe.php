<?php
 session_start(); // Bắt đầu session
 require __DIR__.'/../model/connect.php';

 if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Lấy dữ liệu từ form
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $department = $_POST['department'];
    $message = $_POST['message'];

    // Kiểm tra nếu có thông tin bắt buộc trống
    if (empty($name) || empty($email) || empty($message)) {
        echo "<script>alert('Vui lòng điền đầy đủ các thông tin bắt buộc!');
         window.location.href = '/../Quanliktx/view/lienhe.php'; 
        </script>";
    } else {
        // Thực hiện insert dữ liệu vào cơ sở dữ liệu
        $sql = "INSERT INTO lienhe (name, email, phone, department, message) 
                VALUES ('$name', '$email', '$phone', '$department', '$message')";

        if ($conn->query($sql) === TRUE) {
            echo "<script>
                    alert('Cảm ơn bạn đã liên hệ với chúng tôi!');
                    window.location.href = '/../Quanliktx/view/lienhe.php'; // Thay đổi đường dẫn trang liên hệ của bạn tại đây
                  </script>";
        } else {
            echo "Lỗi: " . $sql . "<br>" . $conn->error;
        }
    }
}
$conn->close();
?>
