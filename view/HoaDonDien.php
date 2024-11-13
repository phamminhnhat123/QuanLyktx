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
        <div class="flex-1 p-6">
            <h1 class="text-2xl font-semibold mb-4">Hóa đơn điện</h1>
            <table class="min-w-full bg-white">
                <thead>
                    <tr>
                        <th class="py-2 px-4 border-b">ID</th>
                        <th class="py-2 px-4 border-b">Phòng</th>
                        <th class="py-2 px-4 border-b">Khu</th>
                        <th class="py-2 px-4 border-b">Chữ số điện cũ</th>
                        <th class="py-2 px-4 border-b">Chữ số điện mới</th>
                        <th class="py-2 px-4 border-b">Thành tiền</th>
                        <th class="py-2 px-4 border-b">Hành động</th>
                    </tr>
                </thead>
                <tbody id="billTable">
                    <tr>
                        <td class="py-2 px-4 border-b">1</td>
                        <td class="py-2 px-4 border-b">101</td>
                        <td class="py-2 px-4 border-b">A</td>
                        <td class="py-2 px-4 border-b">1000</td>
                        <td class="py-2 px-4 border-b">1050</td>
                        <td class="py-2 px-4 border-b" id="totalAmount-1"></td>
                        <td class="py-2 px-4 border-b">
                            <button class="bg-blue-500 text-white px-2 py-1 rounded hover:bg-blue-600">Sửa</button>
                            <button class="bg-red-500 text-white px-2 py-1 rounded hover:bg-red-600">Xóa</button>
                            <button class="bg-green-500 text-white px-2 py-1 rounded hover:bg-green-600">Cập nhật</button>
                        </td>
                    </tr>
                    <!-- More rows as needed -->
                </tbody>
            </table>
        </div>

        <script>
            document.addEventListener('DOMContentLoaded', (event) => {
                const rows = document.querySelectorAll('#billTable tr');
                rows.forEach((row, index) => {
                    const oldReading = parseInt(row.children[3].textContent);
const newReading = parseInt(row.children[4].textContent);
                    const totalAmountCell = row.children[5];

                    if (!isNaN(oldReading) && !isNaN(newReading)) {
                        const totalAmount = (newReading - oldReading) * 3000;
                        totalAmountCell.textContent = totalAmount.toLocaleString('vi-VN') + ' VND';
                    }
                });
            });

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