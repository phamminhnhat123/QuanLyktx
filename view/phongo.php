<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phòng ở</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        /* Nền cho toàn bộ trang */
        body {
            font-family: Arial, sans-serif;
            background-image: url('/../Quanliktx/assets/img/phongktx.jpg');
            background-size: cover;
            background-position: center;
            margin: 0;
            padding: 0;
        }

        /* Header */
        header {
            background-color: white;
            box-shadow: 0 4px 2px -2px gray;
        }

        header .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 30px;
        }

        header .container img {
            height: 50px;
        }

        header nav {
            display: flex;
            gap: 20px;
        }

        header nav a {
            margin-right: 20px;
            text-decoration: none;
            color: #1e40af;
            font-weight: bold;
            transition: color 0.3s;
        }

        header nav a:hover {
            color: #1e3a8a;
        }

        header .search-icon {
            font-size: 24px;
            color: #1e40af;
        }

        /* Phần root */
        #root {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            background-color: rgba(31, 41, 55, 0.5); /* Gray background */
        }

        #root h1 {
            font-size: 2.5rem;
            font-weight: bold;
            color: white;
            margin-bottom: 20px;
        }

        #root h2 {
            font-size: 1.5rem;
            font-weight: bold;
            color: red;
            margin-bottom: 20px;
        }

        #root .flex {
               display: flex; /* Đặt các phần tử con trong flex container nằm cùng một hàng */
               gap: 10px; /* Khoảng cách giữa input và button */
         }

         #root input {
                 padding: 15px;
                 border-radius: 10px;
                  width: 300px;
                 border: 1px solid #ccc;
                  font-size: 1rem;
           }

#root button {
    padding: 15px;
    background-color: #1e40af;
    color: white;
    border: none;
    border-radius: 10px;
    font-size: 1rem;
    display: flex;
    align-items: center;
    gap: 10px;
    cursor: pointer; /* Thêm hiệu ứng con trỏ khi hover */
}

#root button i {
    font-size: 18px; /* Kích thước biểu tượng tìm kiếm */
}

        /* Phần app */
        #app {
            padding: 30px;
            background-color: white;
            padding-bottom: 70px;
        }

        #app .breadcrumb {
            margin-bottom: 20px;
        }

        #app .breadcrumb a {
            color: #1e40af;
            text-decoration: none;
        }

        #app .breadcrumb span {
            font-weight: bold;
        }

        .grid-container {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 20px;
        }

        .card {
            position: relative;
            border-radius: 10px;
            overflow: hidden;
        }

        .card img {
            width: 100%;
            height: auto;
        }

        .card .overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background-color: rgba(0, 0, 0, 0.5);
            color: white;
            padding: 15px;
        }

        .card .overlay div {
            margin-bottom: 5px;
        }

        .card .price {
            color: #60a5fa;
        }
    </style>
</head>
<body>
<header class="bg-white shadow">
   <div class="container mx-auto flex justify-between items-center py-4 px-6">
    <div class="flex items-center">
     <img alt="Logo" class="h-10" height="100" src="/../Quanliktx/assets/img/logotruong.png" width="100"/>
    </div>

    <nav class="space-x-3 text-blue-700 font-semibold"> <!-- Chỉnh lại space-x-5 ở đây -->
    <a href="/../Quanliktx/model/trangchu.php">
      <i class="fas fa-home"></i> <!-- Font Awesome home icon -->
      <span>Trang chủ</span>
    </a>
    <a href="/../Quanliktx/view/gioithieu.php">
      <i class="fas fa-info-circle"></i> <!-- Font Awesome info-circle icon -->
      <span>Giới thiệu</span>
    </a>
    <a href="/../Quanliktx/view/phongo.php" >
      <i class="fas fa-bed"></i> <!-- Font Awesome bed icon -->
      <span>Phòng ở</span>
    </a>
    <a href="/../Quanliktx/view/thongbao.php">
      <i class="fas fa-bell"></i> <!-- Font Awesome bell icon -->
      <span>Thông báo</span>
    </a>
    <a href="/../Quanliktx/view/lienhe.php">
      <i class="fas fa-phone-alt"></i> <!-- Font Awesome phone icon -->
      <span>Liên hệ</span>
    </a>
    <a href="/../Quanliktx/view/DangkyDangnhap.php">
      <i class="fas fa-sign-in-alt"></i> <!-- Font Awesome icon for log-in -->
      <span>Đăng nhập</span>
    </a>
    <a href="/../Quanliktx/view/sinhvien.php">
      <i class="fas fa-user-shield"></i> <!-- Font Awesome icon for Admin -->
      <span>Admin</span>
    </a>
    </nav>
    <div>
     <i class="fas fa-search text-blue-700">
     </i>
    </div>
   </div>
</header>

<!-- Phần nội dung chính -->
<div id="root">
    <h1>Phòng ở</h1>
    <h2>TÌM KIẾM THÔNG TIN PHÒNG Ở</h2>
    <div class="flex">
        <input type="text" placeholder="Phòng 4 máy lạnh, phòng 6,...">
        <button>
            <i class="fas fa-search"></i> Tìm kiếm
        </button>
    </div>
</div>

<!-- Phần hiển thị thông tin phòng ở -->
<div id="app">
    <div class="breadcrumb">
        <a href="#">Trang chủ</a> / <span>Phòng ở</span>
    </div>

    <div class="grid-container">
        <div class="card">
            <img src="/../Quanliktx/assets/img/phong1.jpg" alt="Phòng 8 sinh viên">
            <div class="overlay">
                <div>Phòng 8 sinh viên</div>
                <div class="price">100,000Đ / THÁNG</div>
            </div>
        </div>
        <div class="card">
            <img src="/../Quanliktx/assets/img/phong2.jpg" alt="Phòng 6 sinh viên">
            <div class="overlay">
                <div>Phòng 6 sinh viên</div>
                <div class="price">150,000Đ / THÁNG</div>
            </div>
        </div>
        <div class="card">
            <img src="/../Quanliktx/assets/img/phong3.jpg" alt="Phòng dịch vụ 4 sinh viên">
            <div class="overlay">
                <div>Phòng dịch vụ 4 sinh viên</div>
                <div class="price">200,000Đ / THÁNG</div>
            </div>
        </div>
        <div class="card">
            <img src="/../Quanliktx/assets/img/phong4.jpg" alt="Phòng dịch vụ 2 sinh viên">
            <div class="overlay">
                <div>Phòng dịch vụ 2 sinh viên</div>
                <div class="price">500,000Đ / THÁNG</div>
            </div>
        </div>
    </div>
</div>

<?php
require __DIR__.'/../footer.php';
?>
</body>
</html>
