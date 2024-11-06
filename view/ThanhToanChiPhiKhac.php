<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>VKU Dormitory Management System</title>
  <link rel="stylesheet" href="/Quanliktx/assets/css/thanhtoantiendien.css">
 
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
        <div class="header1">
            <div>
                <h1>$ Thanh toán chi phí khác</h1>
                <p>Thanh toán theo từng sinh viên nội trú</p>
            </div>
            <div class="breadcrumb">
                <a href="#"><i class="fas fa-home"></i></a>
                <span>/</span>
                <a href="#">Biểu Mẫu</a>
                <span>/</span>
                <a href="#">Thanh Toán chi phí khác</a>
            </div>
        </div>
        <div class="search-box">
            <div>
                <label for="room">Mã Sinh Viên</label>
                <input type="text" id="room" placeholder="Mã sinh viên">
            </div>
            <div>
                <button type="button"><i class="fas fa-search"></i> Tìm kiếm</button>
            </div>
        </div>
    </div>
    
  </div>

  <script>
        // JavaScript để điều khiển menu
        const menuToggle = document.getElementById('menu-toggle');
        const submenu = document.querySelector('.submenu');

        menuToggle.addEventListener('click', () => {
            submenu.style.display = (submenu.style.display === 'none' || submenu.style.display === '') ? 'block' : 'none';
        });
    </script>
</body>
</html>
