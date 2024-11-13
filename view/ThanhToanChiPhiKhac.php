<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>VKU Dormitory Management System</title>
  <link rel="stylesheet" href="/Quanliktx/assets/css/thanhToanTienNuoc.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>

</head>
<body>
  <div class="header">
    <img src="/../Quanliktx/assets/img/logehethong.png" alt="logohethong">
  </div>

  <div class="nav">
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
  <!-- Icon Admin (User Shield) -->
  <i class="fas fa-user-shield"></i> <!-- Font Awesome icon for Admin -->
  <span>Admin</span>
</a>
  </div>

  <div class="main">
    <div class="sidebar">
        <!-- Biểu mẫu -->
        <div class="menu-item" id="menu-toggle">
            <i class="fas fa-edit"></i>
            <span>Biểu mẫu</span>
            <i class="fas fa-chevron-down" style="margin-left:auto;"></i>
        </div>
        
        <div class="submenu">
            <div class="submenu-item">
                <i class="icon fa fa-chevron-circle-right" style="margin-right: 10px;"></i>
                <span><a href="/../Quanliktx/view/DangKyNoiTru.php">Đăng ký nội trú KTX</a></span>
            </div>
            <div class="submenu-item">
                <i class="icon fa fa-chevron-circle-right" style="margin-right: 10px;"></i>
                <span><a href="/../Quanliktx/view/thanhtoantienphong.php">Thanh toán tiền phòng</a></span>
            </div>
            <div class="submenu-item">
                <i class="icon fa fa-chevron-circle-right" style="margin-right: 10px;"></i>
                <span><a href="/../Quanliktx/view/thanhtoantiendien.php">Thanh toán tiền điện</a></span>
            </div>
            <div class="submenu-item active">
                <i class="icon fa fa-chevron-circle-right" style="margin-right: 10px;"></i>
                <span><a href="/../Quanliktx/view/thanhtoantiennuoc.php">Thanh toán tiền nước</a></span>
            </div>
            <div class="submenu-item">
                <i class="icon fa fa-chevron-circle-right" style="margin-right: 10px;"></i>
                <span><a href="/../Quanliktx/view/ThanhToanChiPhiKhac.php">Thanh toán chi phí khác</a></span>
            </div>
            <div class="submenu-item">
                <i class="icon fa fa-chevron-circle-right" style="margin-right: 10px;"></i>
                <span><a href="/../Quanliktx/view/ThanhToanTienCocNoiTru.php">Thanh toán tiền cọc nội trú</a></span>
            </div>
        </div>
       
        <!-- Hướng dẫn -->
        <div class="menu-item" id="menu-toggle1">
            <i class="fas fa-file-alt"></i>
            <span>Hướng dẫn</span>
            <i class="fas fa-chevron-down" style="margin-left:auto;"></i>
        </div>
        
    <div class="submenu">
         <div class="submenu-item">
             <i class="icon fa fa-chevron-circle-right" style="margin-right: 10px;"></i>
             <span><a href="https://kytucxa.vku.udn.vn/docs/2022-2023/Mau%2001A%20-%20Don%20dang%20ky%20o%20noi%20tru.pdf" download="Don dang ky o noi tru.pdf">Đơn đăng ký nội trú </a></span>
          </div>
          <div class="submenu-item">
             <i class="icon fa fa-chevron-circle-right" style="margin-right: 10px;"></i>
             <span><a href="https://kytucxa.vku.udn.vn/docs/2022-2023/Mau%2002A%20-%20Hop%20dong%20noi%20tru.pdf" download="Hop dong o noi tru.pdf">Hợp đồng ở nội trú</a></span>
          </div>
          <div class="submenu-item">
             <i class="icon fa fa-chevron-circle-right" style="margin-right: 10px;"></i>
             <span><a href="https://kytucxa.vku.udn.vn/docs/2022-2023/Mau%2002C%20-%20Hop%20dong%20noi%20tru%20-%20Khu%20dich%20vu.pdf" download="Hop dong o noi tru khu dich vu.pdf">Hợp đồng ở nội trú - khu dịch vụ</a></span>
          </div>
          <div class="submenu-item">
             <i class="icon fa fa-chevron-circle-right" style="margin-right: 10px;"></i>
             <span><a href="https://kytucxa.vku.udn.vn/docs/2022-2023/1.%20912%20QD%20ban%20hanh%20quy%20dinh%20cong%20tac%20sinh%20vien%20noi%20tru%20VKU_0001.pdf" download="Quy dinh cong tac o noi tru.pdf">Quy định công tác ở nội trú</a></span>
          </div>

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
    // JavaScript để điều khiển menu "Biểu mẫu"
    const menuToggle = document.getElementById('menu-toggle');
    const submenu = menuToggle.nextElementSibling;  // Lấy phần tử .submenu ngay sau menu-toggle

    menuToggle.addEventListener('click', () => {
        submenu.style.display = (submenu.style.display === 'none' || submenu.style.display === '') ? 'block' : 'none';
    });

    // JavaScript để điều khiển menu "Hướng dẫn"
    const menuToggle1 = document.getElementById('menu-toggle1');
    const submenu1 = menuToggle1.nextElementSibling; // Lấy phần tử .submenu ngay sau menu-toggle1

    menuToggle1.addEventListener('click', () => {
        submenu1.style.display = (submenu1.style.display === 'none' || submenu1.style.display === '') ? 'block' : 'none';
    });
</script>

</body>
</html>
