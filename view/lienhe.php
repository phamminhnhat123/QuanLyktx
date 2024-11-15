<html lang="en">
 <head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
  <title>
   Liên Hệ
  </title>
  <script src="https://cdn.tailwindcss.com">
  </script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <style>
     body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
        }
        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
        }
        
        h1 {
            font-size: 2em;
            margin-bottom: 10px;
        }
        p {
            font-size: 1.2em;
            margin-bottom: 20px;
        }
        form {
            display: flex;
            flex-wrap: wrap;
        }
        form div {
            width: 48%;
            margin-bottom: 20px;
        }
        form div.full-width {
            width: 100%;
        }
        input, select, textarea {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 1em;
        }
        button {
            background-color: #28a745;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-size: 1em;
            cursor: pointer;
        }
        button:hover {
            background-color: #218838;
        }
        .emergency-contact {
            margin-top: 40px;
        }
        .emergency-contact h2 {
            font-size: 1.5em;
            color: #d9534f;
            margin-bottom: 10px;
        }
        .emergency-contact .section-title {
            background-color: #f0ad4e;
            padding: 10px;
            font-size: 1.2em;
            font-weight: bold;
            margin-bottom: 10px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
  </style>

 </head>
 <body class="bg-gray-100">
 <header class="bg-white shadow">
   <div class="container mx-auto flex justify-between items-center py-4 px-6">
    <div class="flex items-center">
     <img alt="Logo" class="h-10" height="100" src="/../Quanliktx/assets/img/logotruong.png" width="100"/>
    </div>

    <nav class="space-x-5 text-blue-700 font-semibold"> <!-- Giảm khoảng cách -->
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
    <a href="/../Quanliktx/view/AdminDangNhap.php">
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


  <div class="relative pt-[56.25%]"> 
  <iframe
    src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3835.7713019116463!2d108.24998940997149!3d15.973315141936027!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1svi!2s!4v1729512686101!5m2!1svi!2s"
    class="absolute top-0 left-0 w-full h-full border-0"
    allowfullscreen=""
    loading="lazy"
    referrerpolicy="no-referrer-when-downgrade">
  </iframe>
</div>

  
    <div class="container">
        <h1>Liên hệ</h1>
        <p>Hãy nhập form dưới đây để liên hệ với chúng tôi!</p>
        <form action="/../Quanliktx/controller/lienhe.php" method="POST">
    <div>
        <label for="name">Họ và tên *</label>
        <input type="text" id="name" name="name">
    </div>
    <div>
        <label for="email">Email *</label>
        <input type="email" id="email" name="email">
    </div>
    <div class="full-width">
        <label for="phone">Số điện thoại</label>
        <input type="text" id="phone" name="phone">
    </div>
    <div class="full-width">
        <label for="department">Phòng ban</label>
        <select id="department" name="department">
            <option value="phong-quan-ly">Phòng quản lý</option>
        </select>
    </div>
    <div class="full-width">
        <label for="message">Nội dung liên hệ *</label>
        <textarea id="message" name="message" rows="5"></textarea>
    </div>
    <div class="full-width">
        <button type="submit">GỬI LIÊN HỆ</button>
    </div>
</form>
        <div class="emergency-contact">
            <h2>TỔNG ĐÀI KÝ TÚC XÁ: 	0236.3.962.965<br>DANH BẠ TRUNG TÂM QUẢN LÝ KÝ TÚC XÁ ĐHCNTT-TTVH VKU</h2>
            <div class="section-title">Các số điện thoại khẩn cấp</div>
            <table>
                <tr>
                    <th>Stt</th>
                    <th>Tên đơn vị</th>
                    <th>Số nội bộ</th>
                    <th>Khu</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Bảo vệ công chính</td>
                    <td>107</td>
                    <td>Khu K</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Bảo vệ công phụ</td>
                    <td>108</td>
                    <td>Khu K</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Bảo vệ công chính</td>
                    <td>109</td>
                    <td>Khu V</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Công an phường Hòa Quý</td>
                    <td>(0274) 3750872</td>
                    <td>Hòa Quý</td>
                </tr>
            </table>
            <div class="section-title">Ký túc xá - Khu K</div>
            <table>
                <tr>
                    <th>Stt</th>
                    <th>Tên Cán Bộ Viên Chức</th>
                    <th>Số nội bộ</th>
                    <th>Khu</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Nguyễn Văn Hưng</td>
                    <td>0236.3.962.965</td>
                    <td>Khu K</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Ngô Đức Lâm</td>
                    <td>0236.3.962.965</td>
                    <td>Khu K</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Nguyễn Thị Minh</td>
                    <td>ntminh@vku.udn.vn</td>
                    <td>Khu K</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Phan Thị Diễm Phúc</td>
                    <td>ptdphuc@vku.udn.vn</td>
                    <td>Khu K</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Trần Thị Tahnh Thúy</td>
                    <td>tttthuy@vku.udn.vn</td>
                    <td>Khu K</td>
                </tr>
            </table>
           

        </div>
    </div>
<?php
require __DIR__.'/../footer.php';
?>

 </body>
</html>