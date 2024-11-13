<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>VKU Dormitory Management System</title>
  <link rel="stylesheet" href="/Quanliktx/assets/css/thanhtoantiendien.css">
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


    <!-- Form container -->
    <!-- Form container -->
<div class="container">
  <form action="/../Quanliktx/controller/thanhToanTienDien.php" method="POST">
    <div class="form-container">
      <div class="search-box">
        <div class="header1">
          <h1>$ Thanh toán tiền điện</h1>
          <p>Thanh toán theo từng phòng</p>
          <div class="breadcrumb">
            <a href="#"><i class="fas fa-home"></i></a>
            <span>/</span>
            <a href="#">Biểu Mẫu</a>
            <span>/</span>
            <a href="#">Thanh Toán Tiền Điện</a>
          </div>
        </div>
        <div>
          <label for="dormitory">Ký túc xá</label>
          <select id="dormitory" name="dormitory">
            <option>1</option>
            <option>2</option>
            <option>3</option>
          </select>
        </div>
        <div>
          <label for="room">Phòng</label>
          <input type="text" id="room" name="room" placeholder="Phòng">
        </div>
        <div>
          <button type="submit"><i class="fas fa-search"></i> Tìm kiếm</button>
        </div>
      </div>
  </form>

        <div style="height: 320px;" class="qr-code">
            <p>TRUONG DAI HOC CNTT VA TT VIET HAN</p>
            <p>KY TUC XA VKU</p>
            <img src="/../Quanliktx/assets/img/qr.jpg" alt="QR Code">
            <p>VietQR</p>
            <p>napas 247</p>
        </div>
      </div>

     <!-- Hiển thị bảng kết quả tìm kiếm nếu có kết quả và phương thức là POST -->
  <?php if ($_SERVER['REQUEST_METHOD'] === 'POST'): ?>
    <?php if (count($payments) > 0): ?>
      <div class="table-container">
        <table>
          <thead>
            <tr>
              <th>Phòng</th>
              <th>Ký túc xá</th>
              <th>Tháng</th>
              <th>Sử dụng vượt mức (kWh)</th>
              <th>Thành tiền (VND)</th>
              <th>Trạng thái</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($payments as $payment): ?>
              <tr>
                <td><?php echo htmlspecialchars($payment['room']); ?></td>
                <td><?php echo htmlspecialchars($payment['dormitory']); ?></td>
                <td><?php echo htmlspecialchars($payment['month']); ?></td>
                <td><?php echo htmlspecialchars($payment['usage']); ?></td>
                <td><?php echo number_format($payment['amount']); ?></td>
                <td><button class="status-button unpaid">Thanh toán</button></td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    <?php else: ?>
      <p>Không tìm thấy kết quả phù hợp.</p>
    <?php endif; ?>
  <?php endif; ?>
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
