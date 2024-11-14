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
<body class="bg-gray-100 font-sans leading-normal tracking-normal">

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

    <!-- Main Content for Water Bill Interface -->
    <div class="flex-1 p-8 overflow-auto bg-gray-50">

    <h2 class="text-3xl font-semibold mb-6 text-gray-800 text-center font-bold">Hóa đơn nước</h2>

        <div class="overflow-x-auto shadow-lg rounded-lg">
            <table class="min-w-full table-auto bg-white">
                <thead class="bg-gray-200">
                    <tr>
                        <th class="py-2 px-4 border-b">ID</th>
                        <th class="py-2 px-4 border-b">Phòng</th>
                        <th class="py-2 px-4 border-b">Khu</th>
                        <th class="py-2 px-4 border-b">Số nước đã dùng (m³)</th>
                        <th class="py-2 px-4 border-b">Thành tiền (VNĐ)</th>
                        <th class="py-2 px-4 border-b">Hành động</th>
                    </tr>
                </thead>
                <tbody id="water-bill-table">
                </tbody>
            </table>
        </div>

    </div>

</div>

<script>
function calculateWaterBill(waterUsage) {
        const costPerCubicMeter = 4000; // 1m³ = 4000 đồng
        return waterUsage * costPerCubicMeter;
    }

    function addWaterBillRow(id, room, area, waterUsage) {
        const table = document.getElementById("water-bill-table");
        const row = document.createElement("tr");
        row.classList.add("border-t", "hover:bg-gray-50");

        const totalAmount = calculateWaterBill(waterUsage);

        row.innerHTML = `
            <td class="px-6 py-4 text-center">${id}</td>
            <td class="px-6 py-4 text-center">${room}</td>
            <td class="px-6 py-4 text-center">${area}</td>
            <td class="px-6 py-4 text-center">${waterUsage}</td>
            <td class="px-6 py-4 text-center">${totalAmount.toLocaleString('vi-VN')}</td>
            <td class="px-6 py-4 text-center">
                <button class="px-3 py-1 bg-blue-500 text-white rounded-md hover:bg-blue-600 focus:outline-none transition-all duration-200" onclick="editRow(this)">Sửa</button>
                <button class="px-3 py-1 ml-2 bg-red-500 text-white rounded-md hover:bg-red-600 focus:outline-none transition-all duration-200" onclick="deleteRow(this)">Xóa</button>
            </td>
        `;
        table.appendChild(row);
    }

    function editRow(button) {
        const row = button.closest('tr');
        const cells = row.getElementsByTagName('td');
        const waterUsage = cells[3].innerText;

        const newWaterUsage = prompt("Nhập lại số nước đã dùng (m³):", waterUsage);
        if (newWaterUsage) {
            cells[3].innerText = newWaterUsage;
            cells[4].innerText = calculateWaterBill(newWaterUsage).toLocaleString('vi-VN');
        }
    }

    function deleteRow(button) {
        const row = button.closest('tr');
        if (confirm("Bạn có chắc chắn muốn xóa hóa đơn này?")) {
            row.remove();
        }
    }

    // Example data entry
    addWaterBillRow("002", "B202", "Khu B", 25);
    addWaterBillRow("003", "C303", "Khu C", 15);
</script>

</body>
</html>