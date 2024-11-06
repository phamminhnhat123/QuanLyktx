<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>VKU Dormitory Management System</title>
  <link rel="stylesheet" href="/Quanliktx/assets/css/thanhtoantiendien.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <style>
    .qr-code {
        text-align: center;
        margin-top: 20px;
        border: 1px solid #ddd;
        padding: 10px;
        background-color: #f9f9f9;
        border-radius: 5px;
    }
    .qr-code img {
        width: 300px;
        height: 300px;
    }
    .qr-code p {
        margin: 5px 0;
        font-size: 14px;
        color: #6c757d;
    }
    .container {
        display: flex;
        justify-content: space-between;
    }
    .search-box {
        flex: 1;
        padding: 20px;
        background-color: #fff;
        border: 1px solid #ddd;
        border-radius: 5px;
        margin-right: 20px;
    }
    .search-box label {
        display: block;
        font-weight: bold;
        margin-top: 10px;
    }
    .search-box input,
    .search-box select,
    .search-box button {
        width: 100%;
        box-sizing: border-box; /* Giúp tính toán kích thước bao gồm cả padding và border */
        padding: 10px;
        margin-top: 5px;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 16px; /* Đảm bảo font-size đồng nhất */
    }
    .search-box button {
        background-color: #28a745;
        color: #fff;
        font-weight: bold;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-top: 20px;
    }
    .breadcrumb {
        margin-top: 10px;
        font-size: 14px;
        color: #6c757d;
    }
  </style>
</head>
<body>
  <div class="header">
    <img src="/../Quanliktx/assets/img/logehethong.png" alt="logohethong">
  </div>

  <div class="nav">
    <a href="/../Quanliktx/model/trangchu.php">Trang chủ</a>
    <a href="/../Quanliktx/view/gioithieu.php">Giới thiệu</a>
    <a href="/../Quanliktx/view/sinhvien.php">Sinh viên</a>
    <a href="/../Quanliktx/view/tintuc.php">Tin tức</a>
    <a href="/../Quanliktx/view/phongo.php">Phòng ở</a>
    <a href="/../Quanliktx/view/thongbao.php">Thông báo</a>
    <a href="/../Quanliktx/view/bieumau.php">Biểu mẫu</a>
    <a href="/../Quanliktx/view/thanhtra_phapche.php">Thanh tra-Pháp chế</a>
    <a href="/../Quanliktx/view/doanthe.php">Đoàn thể</a>
    <a href="/../Quanliktx/view/lienhe.php">Liên hệ</a>
  </div>

  <div class="main">
    <div class="sidebar">
      <div class="menu-item" id="menu-toggle">
        <i class="fas fa-edit"></i>
        <span>Biểu mẫu</span>
        <i class="fas fa-chevron-down" style="margin-left:auto;"></i>
      </div>
      
      <div class="submenu">
        <div class="submenu-item">
          <i class="fas fa-arrow-right"></i>
          <span><a href="/../Quanliktx/view/DangKyNoiTru.php">Đăng ký nội trú KTX</a></span>
        </div>
        <div class="submenu-item">
          <i class="fas fa-arrow-right"></i>
          <span><a href="/../Quanliktx/view/thanhtoantienphong.php">Thanh toán tiền phòng</a></span>
        </div>
        <div class="submenu-item">
          <i class="fas fa-arrow-right"></i>
          <span><a href="/../Quanliktx/view/thanhtoantiendien.php">Thanh toán tiền điện</a></span>
        </div>
        <div class="submenu-item active">
          <i class="fas fa-arrow-right"></i>
          <span><a href="/../Quanliktx/view/thanhtoantiennuoc.php">Thanh toán tiền nước</a></span>
        </div>
        <div class="submenu-item">
          <i class="fas fa-arrow-right"></i>
          <span><a href="/../Quanliktx/view/ThanhToanChiPhiKhac.php">Thanh toán chi phí khác</a></span>
        </div>
        <div class="submenu-item">
          <i class="fas fa-arrow-right"></i>
          <span><a href="/../Quanliktx/view/ThanhToanTienCocNoiTru.php">Thanh toán tiền cọc nội trú</a></span>
        </div>
      </div>
      <div class="menu-item">
        <i class="fas fa-file-alt"></i>
        <span>Hướng dẫn</span>
      </div>
    </div>
    <div class="container">
      <div class="search-box">
        <div class="header1">
          <div>
            <h1>$ Thanh toán tiền nước</h1>
            <p>Thanh toán theo từng phòng</p>
          </div>
          <div class="breadcrumb">
            <a href="#"><i class="fas fa-home"></i></a>
            <span>/</span>
            <a href="#">Biểu Mẫu</a>
            <span>/</span>
            <a href="#">Thanh Toán Tiền Nước</a>
          </div>
        </div>
        <div>
          <label for="dormitory">Ký túc xá</label>
          <select id="dormitory">
            <option>1</option>
            <option>2</option>
            <option>3</option>
          </select>
        </div>
        <div>
          <label for="room">Phòng</label>
          <input type="text" id="room" placeholder="Phòng">
        </div>
        <div>
          <button type="button"><i class="fas fa-search"></i> Tìm kiếm</button>
        </div>
      </div>
      <div class="qr-code">
        <p>TRUONG DAI HOC CNTT VA TT VIET HAN</p>
        <p>KY TUC XA VKU</p>
        <img src="/../Quanliktx/assets/img/qr.jpg" alt="QR Code">
        <p>VietQR</p>
        <p>napas 247</p>
      </div>
    </div>
  </div>

  <script>
    const menuToggle = document.getElementById('menu-toggle');
    const submenu = document.querySelector('.submenu');

    menuToggle.addEventListener('click', () => {
      submenu.style.display = (submenu.style.display === 'none' || submenu.style.display === '') ? 'block' : 'none';
    });
  </script>
</body>
</html>
