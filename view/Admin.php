<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['role'] !== 'admin') {
    header("Location: accessdenied.php");
    exit();
}

echo "Session ID: " . session_id() . "<br>";
echo "Session Data: " . print_r($_SESSION, true);
?>

<html>
<head>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"></link>
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
            <div class="p-4 border-b"  onclick="window.location.href='/../Quanliktx/view/Admin.php'">
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
        
        <!-- Main Content -->
        <div class="flex-1 p-6">
            <div class="flex items-center mb-4">
                <span class="text-gray-600">Home</span>
                <i class="fas fa-chevron-right mx-2 text-gray-600"></i>
                <span class="text-gray-600">Dashboard</span>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-lg font-semibold mb-4">Thống kê nhà phòng</h2>
                <div class="grid grid-cols-2 gap-4">
                    <div class="flex items-center p-4 bg-blue-100 rounded-lg">
                        <i class="fas fa-home text-blue-500 text-2xl"></i>
                        <div class="ml-4">
                            <p class="text-2xl font-semibold">3</p>
                            <p>Nhà</p>
                        </div>
                    </div>
                    <div class="flex items-center p-4 bg-green-100 rounded-lg">
                        <i class="fas fa-door-open text-green-500 text-2xl"></i>
                        <div class="ml-4">
                            <p class="text-2xl font-semibold">420</p>
                            <p>Phòng</p>
                        </div>
                    </div>
                    <div class="flex items-center p-4 bg-red-100 rounded-lg">
                        <i class="fas fa-bed text-red-500 text-2xl"></i>
                        <div class="ml-4">
                            <p class="text-2xl font-semibold">160</p>
                            <p>Chỗ trống</p>
                        </div>
                    </div>
                    <div class="flex items-center p-4 bg-yellow-100 rounded-lg">
                        <i class="fas fa-user-check text-yellow-500 text-2xl"></i>
                        <div class="ml-4">
                            <p class="text-2xl font-semibold">2.163</p>
                            <p>Sinh viên đang ở</p>
                        </div>
                    </div>
                    <div class="flex items-center p-4 bg-red-100 rounded-lg">
                        <i class="fas fa-sign-out-alt text-red-500 text-2xl"></i>
                        <div class="ml-4">
                            <p class="text-2xl font-semibold">125</p>
                            <p>Sinh viên trả phòng</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 </body>
</html>