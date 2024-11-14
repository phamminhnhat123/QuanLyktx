<html>
 <head>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"></link>
  <style>
        th, td {
            text-align: center; /* Căn giữa nội dung */
            vertical-align: middle; /* Căn giữa theo chiều dọc */
            padding: 8px; /* Khoảng cách nội dung với đường viền */
        }
        table {
            width: 100%; /* Đảm bảo bảng chiếm toàn bộ chiều rộng */
        }
  </style>
</head>
 <body class="bg-gray-100">
      <!-- Kiểm tra và hiển thị thông báo -->
      <?php if (isset($successMessage)): ?>
        <div class="fixed top-0 left-0 w-full bg-green-500 text-white text-center py-2">
            <strong><?php echo $successMessage; ?></strong>
        </div>
    <?php elseif (isset($errorMessage)): ?>
        <div class="fixed top-0 left-0 w-full bg-red-500 text-white text-center py-2">
            <strong><?php echo $errorMessage; ?></strong>
        </div>
    <?php endif; ?>

 <div class="bg-blue-500 h-10  fixed top-0 left-0 w-full z-50">
<div class="w-full flex justify-center mt-0">
 <div class="overflow-hidden whitespace-nowrap w-[400px]">
   <p class="text-2xl text-yellow-500 font-bold inline-block animate-marquee">
     HỆ THỐNG QUẢN LÝ KÍ TÚC XÁ VKU
   </p>
 </div>
</div>
</div>

<style>
 @keyframes marquee {
   0% {
     transform: translateX(100%);
   }
   100% {
     transform: translateX(-100%);
   }
 }

 .animate-marquee {
   animation: marquee 6s linear infinite;
 }
</style>

<div style="margin-top: 35px;" class="flex">
        <!-- Sidebar -->
       <div class="w-64 bg-white h-screen shadow-md">
            <div class="p-4 border-b">
                <i class="fas fa-home text-blue-500"></i>
                <span class="ml-2 font-semibold">Dashboard</span>
            </div>
            <ul class="mt-4">
                <li class="flex items-center p-4 hover:bg-gray-200 cursor-pointer">
                    <i class="fas fa-cogs text-gray-600"></i>
                    <span class="ml-2">Hệ thống</span>
                </li>
                <li class="flex items-center p-4 hover:bg-gray-200 cursor-pointer" onclick="window.location.href='/../Quanliktx/view/sinhVienNoiTru.php'">
                   <i class="fas fa-users text-gray-600"></i>
                   <span class="ml-2">Sinh viên nội trú</span>
               </li>
                <li class="flex items-center p-4 hover:bg-gray-200 cursor-pointer" onclick="window.location.href='/../Quanliktx/view/sinhVienDangKy.php'">
                    <i class="fas fa-user-graduate text-gray-600"></i>
                    <span class="ml-2">Sinh viên đăng kí</span>
                </li>
                <li class="flex items-center p-4 hover:bg-gray-200 cursor-pointer">
                    <i class="fas fa-building text-gray-600"></i>
                    <span class="ml-2">Khu/Nhà/Phòng</span>
                </li>
                <li class="flex items-center p-4 hover:bg-gray-200 cursor-pointer"  onclick="window.location.href='/../Quanliktx/view/sinhVienLienHe.php'">
                    <i class="fas fa-envelope text-gray-600"></i>
                    <span class="ml-2">Liên hệ từ sinh viên</span>
                </li>
                <li class="flex items-center p-4 hover:bg-gray-200 cursor-pointer">
                    <i class="fas fa-door-open text-gray-600"></i>
                    <span class="ml-2">Thuê phòng</span>
                </li>
                <li class="flex items-center p-4 hover:bg-gray-200 cursor-pointer">
                    <i class="fas fa-file-invoice-dollar text-gray-600"></i>
                    <span class="ml-2">Hóa đơn - Lệ phí</span>
                </li>
                <li class="flex items-center p-4 hover:bg-gray-200 cursor-pointer">
                    <i class="fas fa-money-bill-wave text-gray-600"></i>
                    <span class="ml-2">Hoàn trả phí</span>
                </li>
                <li class="flex items-center p-4 hover:bg-gray-200 cursor-pointer" onclick="window.location.href='/../Quanliktx/view/HoaDonDien.php'">
                    <i class="fas fa-bolt text-gray-600"></i>
                    <span class="ml-2">Hóa đơn điện </span>
                </li>
                <li class="flex items-center p-4 hover:bg-gray-200 cursor-pointer" onclick="window.location.href='/../Quanliktx/view/HoaDonNuoc.php'">
                    <i class="fas fa-plug text-gray-600"></i>
                    <span class="ml-2">Hóa đơn nước</span>
                </li>
                <li class="flex items-center p-4 hover:bg-gray-200 cursor-pointer" onclick="confirmLogout()">
                    <i class="fas fa-sign-out-alt text-gray-600"></i>
                    <span class="ml-2">Đăng xuất</span>
                </li>

<script>
function confirmLogout() {
    // Hiển thị hộp thoại xác nhận
    if (confirm("Bạn có muốn đăng xuất không?")) {
        // Nếu nhấn OK, chuyển hướng đến trang sinhvien.php
        window.location.href = "sinhvien.php";
    }
}
</script>
               
            </ul>
        </div>

        <!-- Main content -->
        <div class="flex-1 p-6 bg-gray-100 min-h-screen">
    <h1 class="text-3xl font-bold mb-6 text-center text-blue-600">Hóa đơn điện</h1>
    <div class="overflow-x-auto">
        <table class="min-w-full bg-white rounded-lg shadow-md overflow-hidden">
            <thead class="bg-gray-200">
                <tr>
                    <th class="py-3 px-6 text-left">ID</th>
                    <th class="py-3 px-6 text-left">Phòng</th>
                    <th class="py-3 px-6 text-left">Khu</th>
                    <th class="py-3 px-6 text-left">Chữ số điện cũ</th>
                    <th class="py-3 px-6 text-left">Chữ số điện mới</th>
                    <th class="py-3 px-6 text-left">Thành tiền</th>
                    <th class="py-3 px-6 text-center">Hành động</th>

                </tr>
            </thead>

            <tbody id="billTable" class="text-gray-700">
            <form method="POST" action="/../Quanliktx/controller/HoaDonDien.php">
    <tr class="hover:bg-gray-100">
        <td class="py-3 px-6 border-b" id="id-1">1</td> <!-- Đây là phần hiển thị ID -->
        
        <!-- Các ô nhập liệu khác -->
        <td class="py-3 px-6 border-b">
            <input type="text" class="w-full p-2 border rounded" id="phong-1" name="phong[]" placeholder="Nhập phòng">
        </td>
        
        <td class="py-3 px-6 border-b">
            <input type="text" class="w-full p-2 border rounded" id="khu-1" name="khu[]" placeholder="Nhập khu">
        </td>
        
        <td class="py-3 px-6 border-b">
            <input type="number" class="w-full p-2 border rounded" id="chisodiencu-1" name="chisodiencu[]" value="1000" placeholder="Nhập chữ số điện cũ">
        </td>
        
        <td class="py-3 px-6 border-b">
            <input type="number" class="w-full p-2 border rounded" id="chisodienmoi-1" name="chisodienmoi[]" value="1050" placeholder="Nhập chữ số điện mới">
        </td>

        <td class="py-3 px-6 border-b font-semibold text-green-600" id="thanhtien-1" name="thanhtien"></td>
        
        <td class="py-3 px-6 border-b space-x-2">
           <button class="bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-600 transition">Sửa</button>
           <button class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600 transition">Xóa</button>
           <button type="submit" class="bg-green-500 text-white px-3 py-1 rounded hover:bg-green-600 transition mt-[5px]">Lưu</button>
           <button class="bg-green-500 text-white px-3 py-1 rounded hover:bg-green-600 transition mt-[5px]" onclick="saveBill(1)">Cập nhật</button>
        </td>
    </tr>
    </form>
    <!-- Thêm các hàng khác ở đây -->
</tbody>


        </table>
    </div>
</div>

        <script>
         function calculateAmount(rowId) {
    // Lấy giá trị nhập vào cho số điện cũ và mới
    const oldReading = parseInt(document.getElementById(`chisodiencu-${rowId}`).value);
    const newReading = parseInt(document.getElementById(`chisodienmoi-${rowId}`).value);

    // Kiểm tra nếu giá trị nhập vào hợp lệ
    if (!isNaN(oldReading) && !isNaN(newReading) && oldReading !== "" && newReading !== "") {
        // Tính thành tiền (giả sử giá 1 kWh là 3000 VND)
        const totalAmount = (newReading - oldReading) * 3000;

        // Cập nhật giá trị thành tiền vào ô với ID "thanhtien-{rowId}"
        document.getElementById(`thanhtien-${rowId}`).textContent = totalAmount.toLocaleString('vi-VN') + " VND";
    } else {
        // Nếu dữ liệu không hợp lệ, hiển thị "N/A"
        document.getElementById(`thanhtien-${rowId}`).textContent = "N/A";
    }
}



            function confirmLogout() {
                // Hiển thị hộp thoại xác nhận
                if (confirm("Bạn có muốn đăng xuất không?")) {
                    // Nếu nhấn OK, chuyển hướng đến trang sinhvien.php
                    window.location.href = "sinhvien.php";
                }
            }
        </script>
 </body>
</html>