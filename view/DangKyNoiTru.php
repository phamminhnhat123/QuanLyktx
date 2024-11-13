<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>VKU Dormitory Management System</title>
  <link rel="stylesheet" href="/Quanliktx/assets/css/dangkynoitru.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <script>
        function validateForm() {
            const form = document.getElementById('registrationForm');
            const inputs = form.querySelectorAll('input[required], select[required]');
            let isValid = true;
            let missingFields = [];

            inputs.forEach(input => {
                if (!input.value) {
                    isValid = false;
                    missingFields.push(input.previousElementSibling.innerText); // Thêm tên trường vào danh sách
                }
            });

            if (!isValid) {
                alert('Vui lòng nhập đầy đủ thông tin:\n- ' + missingFields.join('\n- '));
                return false; // Ngăn không cho gửi biểu mẫu
            }
            return true; // Cho phép gửi biểu mẫu
        }
    </script>
   
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


    <div class="content">
    <div class="header1">
        <i class="fas fa-edit"></i>
        <div>
            <h1>Đăng ký nội trú</h1>
            <p>Đơn đăng ký nội trú dành cho sinh viên</p>
        </div>
    </div>
    <div class="breadcrumb">
        <a href="#"><i class="fas fa-home"></i></a> / <a href="#">Biểu Mẫu</a> / <a href="#">Đăng Ký Nội Trú</a>
    </div>
    <div class="content">
        <div class="notification">
            <i class="fas fa-exclamation-circle"></i>
            <div>
                <h2>Chưa tới đợt đăng ký KTX mới</h2>
                <p>Vui lòng truy cập để biết thêm thông tin:</p>
                <ul>
                    <li>Website: <a href="https://kytucxa.vku.udn.vn/">https://kytucxa.vku.udn.vn/</a></li>
                    <li>Fanpage: <a href="https://www.facebook.com/KTXVKU">https://www.facebook.com/KTXVKU</a></li>
                </ul>
            </div>
        </div>
        
    </div>
    <div class="container">
    <h1>Biểu mẫu đăng ký nội trú</h1>
    <h2>Thông tin sinh viên</h2>
    <form id="registrationForm" action="/../Quanliktx/controller/DangKyNoiTru.php" method="POST" onsubmit="return validateForm();">
    <div class="two-column">
        <div class="form-group">
            <label for="masv">Mã số sinh viên</label>
            <input type="text" id="masv" name="masv" placeholder="Mã số sinh viên" required>
        </div>
        <div class="form-group">
            <label for="ten">Họ Tên</label>
            <input type="text" id="ten" name="ten" placeholder="Họ và tên" required>
        </div>
        <div class="form-group">
            <label for="dob">Ngày sinh</label>
            <input type="date" id="ngaysinh" name="ngaysinh" placeholder="Ngày sinh" required>
        </div>
        <div class="form-group">
            <label>Giới tính</label>
            <div class="radio-group">
                <input type="radio" id="male" name="gioitinh" value="male" required>
                <label for="male">Nam</label>
                <input type="radio" id="female" name="gioitinh" value="female" required>
                <label for="female">Nữ</label>
            </div>
        </div>
        <div class="form-group">
            <label for="dienthoai">Điện Thoại</label>
            <input type="text" id="dienthoai" name="dienthoai" placeholder="Điện thoại" required>
        </div>
        <div class="form-group">
            <label for="noisinh">Nơi sinh</label>
            <input type="text" id="noisinh" name="noisinh" placeholder="Nơi sinh" required>
        </div>
        <div class="form-group">
            <label for="emailcanhan">Email Cá nhân</label>
            <input type="email" id="emailcanhan" name="emailcanhan" placeholder="Email cá nhân" required>
        </div>
        <div class="form-group">
            <label for="emailvku">Email VKU</label>
            <input type="email" id="emailvku" name="emailvku" placeholder="Email VKU" required>
        </div>
        <div class="form-group">
            <label for="khoa">Khóa</label>
            <input type="text" id="khoa" name="khoa" placeholder="Khóa" required>
        </div>
        <div class="form-group">
            <label for="khoa1">Khoa</label>
            <input type="text" id="khoa1" name="khoa1" placeholder="Khoa" required>
        </div>
        <div class="form-group">
            <label for="nganh">Ngành</label>
            <input type="text" id="nganh" name="nganh" placeholder="Ngành" required>
        </div>
        <div class="form-group">
            <label for="lop">Lớp</label>
            <input type="text" id="lop" name="lop" placeholder="Lớp" required>
        </div>
        <div class="form-group">
            <label for="cccd">CMND/CCCD</label>
            <input type="text" id="cccd" name="cccd" placeholder="CMND/CCCD" required>
        </div>
        <div class="form-group">
            <label for="ngaycap">Ngày cấp</label>
            <input type="date" id="ngaycap" name="ngaycap" placeholder="Ngày cấp" required>
        </div>
        <div class="form-group">
            <label for="dantoc">Dân tộc</label>
            <select id="dantoc" name="dantoc" required>
            <option value="">Chọn Dân tộc</option>
            <option value="kinh">Kinh</option>
            <option value="tay">Tày</option>
            <option value="thai">Thái</option>
            <option value="muong">Mường</option>
            <option value="hoa">Hoa</option>
            <option value="khmer">Khơ-me</option>
            <option value="mong">Mông</option>
            <option value="nung">Nùng</option>
            <option value="dao">Dao</option>
            <option value="gia-rai">Gia Rai</option>
            <option value="ede">Ê Đê</option>
            <option value="ba-na">Ba Na</option>
            <option value="xo-dang">Xơ Đăng</option>
            <option value="san-chay">Sán Chay</option>
            <option value="cham">Chăm</option>
            <option value="co-ho">Cơ Ho</option>
            <option value="churu">Chu Ru</option>
            <option value="h-re">Hrê</option>
            <option value="ra-glai">Ra Glai</option>
            <option value="tho">Thổ</option>
            <option value="xinh-mun">Xinh Mun</option>
            <option value="ha-nhi">Hà Nhì</option>
            <option value="phu-la">Phù Lá</option>
            <option value="la-hu">La Hủ</option>
            <option value="lao">Lào</option>
            <option value="khong-du">Kháng</option>
            <option value="lu">Lự</option>
            <option value="tay-nung">Ngái</option>
            <option value="brau">Brâu</option>
            <option value="tay-brau">Ơ Đu</option>
            <option value="phong">Gié Triêng</option>
            <option value="san-diu">Sán Dìu</option>
            <option value="xo">Xơ Đăng</option>
            <option value="ro-mam">Rơ Măm</option>
            <option value="tho">Thổ</option>
            </select>
        </div>
        <div class="form-group">
            <label for="tongiao">Tôn giáo</label>
            <select id="tongiao" name="tongiao">
            <option value="phat-giao">Không</option>
            <option value="phat-giao">Phật giáo</option>
            <option value="cong-giao">Công giáo</option>
            <option value="tin-lanh">Tin Lành</option>
            <option value="cao-dai">Cao Đài</option>
            <option value="hoi-giao">Hồi giáo</option>
            <option value="phat-giao-hoa-hao">Phật giáo Hòa Hảo</option>
            <option value="bahai">Bahá'í</option>
            <option value="minh-ly-dao">Minh Lý Đạo</option>
            <option value="than-linh-dao">Thần Linh Đạo</option>
            </select>
        </div>
        <div class="form-group">
            <label for="tinh">TP/Tỉnh</label>
            <select id="tinh" name="tinh" required>
                <option value="">Chọn TP/Tỉnh</option>
                <option value="An Giang">An Giang</option>
            <option value="Bà Rịa - Vũng Tàu">Bà Rịa - Vũng Tàu</option>
            <option value="Bắc Giang">Bắc Giang</option>
            <option value="Bắc Kạn">Bắc Kạn</option>
            <option value="Bạc Liêu">Bạc Liêu</option>
            <option value="Bắc Ninh">Bắc Ninh</option>
            <option value="Bến Tre">Bến Tre</option>
            <option value="Bình Định">Bình Định</option>
            <option value="Bình Dương">Bình Dương</option>
            <option value="Bình Phước">Bình Phước</option>
            <option value="Bình Thuận">Bình Thuận</option>
            <option value="Cà Mau">Cà Mau</option>
            <option value="Cần Thơ">Cần Thơ</option>
            <option value="Cao Bằng">Cao Bằng</option>
            <option value="Đà Nẵng">Đà Nẵng</option>
            <option value="Đắk Lắk">Đắk Lắk</option>
            <option value="Đắk Nông">Đắk Nông</option>
            <option value="Điện Biên">Điện Biên</option>
            <option value="Đồng Nai">Đồng Nai</option>
            <option value="Đồng Tháp">Đồng Tháp</option>
            <option value="Gia Lai">Gia Lai</option>
            <option value="Hà Giang">Hà Giang</option>
            <option value="Hà Nam">Hà Nam</option>
            <option value="Hà Nội">Hà Nội</option>
            <option value="Hà Tĩnh">Hà Tĩnh</option>
            <option value="Hải Dương">Hải Dương</option>
            <option value="Hải Phòng">Hải Phòng</option>
            <option value="Hậu Giang">Hậu Giang</option>
            <option value="Hồ Chí Minh">Hồ Chí Minh</option>
            <option value="Hòa Bình">Hòa Bình</option>
            <option value="Hưng Yên">Hưng Yên</option>
            <option value="Khánh Hòa">Khánh Hòa</option>
            <option value="Kiên Giang">Kiên Giang</option>
            <option value="Kon Tum">Kon Tum</option>
            <option value="Lai Châu">Lai Châu</option>
            <option value="Lạng Sơn">Lạng Sơn</option>
            <option value="Lào Cai">Lào Cai</option>
            <option value="Long An">Long An</option>
            <option value="Nam Định">Nam Định</option>
            <option value="Nghệ An">Nghệ An</option>
            <option value="Ninh Bình">Ninh Bình</option>
            <option value="Ninh Thuận">Ninh Thuận</option>
            <option value="Phát Diệm">Phát Diệm</option>
            <option value="Phú Thọ">Phú Thọ</option>
            <option value="Phú Yên">Phú Yên</option>
            <option value="Quảng Bình">Quảng Bình</option>
            <option value="Quảng Nam">Quảng Nam</option>
            <option value="Quảng Ngãi">Quảng Ngãi</option>
            <option value="Quảng Ninh">Quảng Ninh</option>
            <option value="Quảng Trị">Quảng Trị</option>
            <option value="Sóc Trăng">Sóc Trăng</option>
            <option value="Sơn La">Sơn La</option>
            <option value="Tây Ninh">Tây Ninh</option>
            <option value="Thái Bình">Thái Bình</option>
            <option value="Thái Nguyên">Thái Nguyên</option>
            <option value="Thanh Hóa">Thanh Hóa</option>
            <option value="Thừa Thiên Huế">Thừa Thiên Huế</option>
            <option value="Tiền Giang">Tiền Giang</option>
            <option value="Vĩnh Long">Vĩnh Long</option>
            <option value="Vĩnh Phúc">Vĩnh Phúc</option>
            <option value="Yên Bái">Yên Bái</option>
            </select>
        </div>
        <div class="form-group">
            <label for="huyen">Quận/Huyện/Thị trấn</label>
            <input type="text" id="huyen" name="huyen" placeholder="Quận/Huyện/Thị trấn" required>
        </div>
        <div class="form-group">
            <label for="xa">Phường/Xã/Ấp</label>
            <input type="text" id="xa" name="xa" placeholder="Phường/Xã/Ấp" required>
        </div>
        <div class="form-group">
            <label for="sonha">Số nhà/Tên đường</label>
            <input type="text" id="sonha" name="sonha" placeholder="Số nhà, Tên đường" required>
        </div>
        <div class="form-group">
            <label for="ngaybatdau">Ngày bắt đầu</label>
            <input type="date" id="ngaybatdau" name="ngaybatdau" placeholder="Ngày bắt đầu" required>
        </div>
        <div class="form-group">
            <label for="ngayketthuc">Ngày kết thúc</label>
            <input type="date" id="ngayketthuc" name="ngayketthuc" placeholder="Ngày kết thúc" required>
        </div>
        <div class="form-group">
            <label for="sophong">Số phòng</label>
            <input type="text" id="sophong" name="sophong" placeholder="Số phòng" required>
        </div>
        <div class="form-group">
            <label for="khu">khu</label>
            <input type="text" id="khu" name="khu" placeholder="khu" required>
        </div>
    </div>

    <!-- Thông tin người thân -->
    <h2>Thông tin người thân</h2>
    <div class="two-column">
    <div class="form-group">
        <label for="hotennguoithan">Họ tên người thân</label>
        <input type="text" id="hotennguoithan" name="hotennguoithan" placeholder="Họ tên người thân" required>
    </div>
    <div class="form-group">
        <label for="quanhe">Quan hệ</label>
        <select id="quanhe" name="quanhe" required>
            <option value="">Chọn quan hệ</option>
            <option value="cha">Cha</option>
            <option value="me">Mẹ</option>
            <option value="anh-chi-em">Anh/Chị/Em</option>
            <option value="ong-ba">Ông/Bà</option>
        </select>
    </div>
    <div class="form-group">
        <label for="dienthoainguoithan">Điện thoại người thân</label>
        <input type="text" id="dienthoainguoithan" name="dienthoainguoithan" placeholder="Điện thoại người thân" required>
    </div>
    <div class="form-group">
        <label>Địa chỉ thường trú</label>
        <div class="radio-group">
            <input type="radio" id="diaChi1" name="diachithuongtru" value="nhuThongTinSinhVien" required>
            <label for="diaChi1">Như thông tin sinh viên</label>
            <input type="radio" id="diaChi2" name="diachithuongtru" value="khac" required>
            <label for="diaChi2">Khác</label>
        </div>
    </div>
    </div>
    <div class="two-column">
    <div class="form-group">
    <button type="submit" name="dangky" class="btn-register"><i class="fas fa-check"></i> Đăng ký</button>
    <button type="reset" name="huy" class="btn-cancel"><i class="fas fa-times"></i> Hủy</button>
    </div>
    </div>
</form>

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
