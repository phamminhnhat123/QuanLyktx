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
        <label for="ngaycap">Ngày Cấp</label>
        <input type="text" id="ngaycap" name="ngaycap" placeholder="DD/MM/YYYY" required>
    </div>
    <div class="form-group">
        <label for="dantoc">Dân Tộc</label>
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
        <label for="tongiao">Tôn Giáo</label>
        <select id="tongiao" name="tongiao">
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
    <input type="text" id="sonha" name="sonha" placeholder="Số nhà, Tên đường " required> 
</div>

            <div class="form-group">
        <label for="ngaybatdau">Ngày Bắt Đầu</label>
        <input type="date" id="ngaybatdau" name="ngaybatdau" placeholder="Ngày bắt đầu" required>
    </div>
    <div class="form-group">
        <label for="ngayketthuc">Ngày Kết Thúc</label>
        <input type="date" id="ngayketthuc" name="ngayketthuc" placeholder="Ngày kết thúc" required>
    </div>
    <div class="form-group">
        <label for="sophong">Số Phòng</label>
        <input type="text" id="sophong" name="sophong" placeholder="Số Phòng" required>
    </div>
        </div>
    </form>

    <h2>Thông tin người thân</h2>
    <div class="form-group">
    <label for="hotennguoithan">Họ tên</label>
    <input type="text" id="hotennguoithan" name="hotennguoithan" placeholder="Họ Tên" required>
</div>
<div class="form-group">
    <label for="quanhe">Quan hệ</label>
    <select id="quanhe" name="quanhe" required>
        <option>Chọn quan hệ người thân...</option>
        <option>Cha</option>
        <option>Mẹ</option>
        <option>Anh/Chị/Em</option>
        <option>Ông/Bà</option>
    </select>
</div>
<div class="form-group">
    <label for="dienthoainguoithan">Điện thoại</label>
    <input type="text" id="dienthoainguoithan" name="dienthoainguoithan" placeholder="Điện thoại" required>
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

    <h2>Đối Tượng Ưu Tiên</h2>
    <ul class="priority-list">
        <li><input type="radio" name="chonktx" id="priority1"><label for="priority1">Ưu tiên 1: Bản thân sinh viên là: Anh hùng lực lượng vũ trang, anh hùng lao động, thương binh, bệnh binh, người hưởng chính sách như thương binh, sinh viên khuyết tật.</label></li>
        <li><input type="radio" name="chonktx" id="priority2"><label for="priority2">Ưu tiên 2: Con liệt sĩ, con thương binh, con bệnh binh, con của người hưởng chính sách như thương binh, con của người có công.</label></li>
        <li><input type="radio" name="chonktx" id="priority3"><label for="priority3">Ưu tiên 3: Sinh viên là người dân tộc thiểu số.</label></li>
        <li><input type="radio" name="chonktx" id="priority4"><label for="priority4">Ưu tiên 4: Sinh viên mồ côi cả cha và mẹ.</label></li>
        <li><input type="radio" name="chonktx" id="priority5"><label for="priority5">Ưu tiên 5: Con hộ nghèo, hộ cận nghèo theo quy định của Nhà nước.</label></li>
        <li><input type="radio" name="chonktx" id="priority6"><label for="priority6">Ưu tiên 6: Hộ khẩu thường trú tại vùng cao, vùng khó khăn.</label></li>
        <li><input type="radio" name="chonktx" id="priority7"><label for="priority7">Ưu tiên 7: Có thành tích cá nhân nổi bật trong học tập; hoạt động Đảng – Đoàn thể chính trị, xã hội; phong trào văn nghệ, thể thao (được khen thưởng từ cấp Tỉnh thành trở lên).</label></li>
        <li><input type="radio" name="chonktx" id="priority8"><label for="priority8">Ưu tiên 8: Các trường hợp còn lại.</label></li>
    </ul>
    
    <h2>Đăng ký Ký túc xá</h2>
    <div class="form-group">
        <label for="dormitory">Chọn Ký túc xá</label>
        <select id="dormitory" name="chonktx" required>
            <option>1</option>
            <option>2</option>
            <option>3</option>
        </select>
    </div>
    <div class="form-actions">
        <button type="submit" class="btn-register"><i class="fas fa-check"></i> Đăng ký</button>
        <button type="reset" class="btn-cancel"><i class="fas fa-times"></i> Hủy</button>
    </div>
</div>
<div style="color:#2f3b46;  text-align: center; margin: 0" class="footer-bottom">
        <p>© Copyright <?php echo date('Y'); ?>. Đại Học Công Nghệ Thông Tin Và Truyền Thông Việt Hàn - Đại Học Đà Nẵng</p>
    </div>

    </div>
    
</form>
<script>
document.getElementById('registrationForm').onsubmit = function(event) {
    // Kiểm tra nếu form chưa đủ thông tin
    let isValid = true;
    const inputs = this.querySelectorAll('input[required], select[required]');
    inputs.forEach(input => {
        if (!input.value) {
            isValid = false; // Nếu có trường chưa được điền
        }
    });

    if (!isValid) {
        alert("Bạn phải nhập đầy đủ thông tin trước khi đăng ký!");
        event.preventDefault(); // Ngăn gửi form
    } else {
        alert("Đăng ký thành công!");
        // Nếu muốn có thể gửi form sau khi hiển thị thông báo
        // this.submit();
    }
};
</script>


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
