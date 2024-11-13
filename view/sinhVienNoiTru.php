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
         <div class="p-4 border-b cursor-pointer" onclick="window.location.href='/Quanliktx/view/Admin.php'">
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

        <div class="container mx-auto p-4">
        <div class="text-center text-red-600 text-2xl font-bold mb-4">Sinh Viên Ở Nội Trú Ký Túc Xá VKU</div>
        <div class="flex justify-center mb-4">
            <div class="flex items-center space-x-2">
                <button class="bg-yellow-400 text-black font-bold py-2 px-4 rounded flex items-center">
                    <i class="fas fa-search mr-2"></i> Tìm Kiếm
                </button>
                <input type="text" class="border border-gray-400 p-2" placeholder="Nhập mã SV">
            </div>
            <div class="flex items-center space-x-2 ml-8">
                <button class="bg-yellow-400 text-black font-bold py-2 px-4 rounded flex items-center">
                    <i class="fas fa-search mr-2"></i> Tìm Kiếm
                </button>
                <input type="text" class="border border-gray-400 p-2" placeholder="Nhập số Phòng">
            </div>
        </div>


        <div class="overflow-x-auto mb-4">
    <table id="studentTable" class="min-w-full bg-white border border-gray-400">
        <thead>
            <tr>
                <th class="border border-gray-400 px-4 py-2">ID</th>
                <th class="border border-gray-400 px-4 py-2">Mã sinh viên</th>
                <th class="border border-gray-400 px-4 py-2">Tên</th>
                <th class="border border-gray-400 px-4 py-2">Lớp</th>
                <th class="border border-gray-400 px-4 py-2">Phòng</th>
                <th class="border border-gray-400 px-4 py-2">Khu</th>
            </tr>
        </thead>
        <tbody id="tableBody">
            <!-- Dữ liệu từ fetchData sẽ được chèn vào đây -->
        </tbody>
    </table>
</div>

<script>
function fetchData() {
    // Thông báo xác nhận trước khi hiển thị toàn bộ danh sách
    const userConfirm = confirm("Bạn muốn hiển thị toàn bộ danh sách?");
    if (userConfirm) {
        fetch('/../Quanliktx/controller/sinhVienNoiTru.php')
            .then(response => response.json())
            .then(data => {
                let tableBody = document.getElementById('tableBody');
                tableBody.innerHTML = ""; // Xóa nội dung cũ

                data.forEach(row => {
                    let tr = document.createElement('tr');
                    tr.innerHTML = `
                        <td class="border border-gray-400 px-4 py-2">${row.id}</td>
                        <td class="border border-gray-400 px-4 py-2">${row.masv}</td>
                        <td class="border border-gray-400 px-4 py-2">${row.ten}</td>
                        <td class="border border-gray-400 px-4 py-2">${row.lop}</td>
                        <td class="border border-gray-400 px-4 py-2">${row.sophong}</td>
                        <td class="border border-gray-400 px-4 py-2">${row.khu}</td>
                    `;
                    tableBody.appendChild(tr);
                });
            })
            .catch(error => console.error('Error:', error)); 
    }
}
</script>


        <div class="bg-gray-300 p-4 mb-4">
    <div class="grid grid-cols-2 gap-4 mb-4">
        <div>
            <label class="block text-blue-600 font-bold mb-2">Mã SV:</label>
            <input type="text" class="border border-gray-400 p-2 w-full" placeholder="Nhập mã SV" >
        </div>
        <div>
            <label class="block text-blue-600 font-bold mb-2">Lớp:</label>
            <input type="text" class="border border-gray-400 p-2 w-full" placeholder="Nhập lớp">
        </div>
        <div>
            <label class="block text-blue-600 font-bold mb-2">Tên:</label>
            <input type="text" class="border border-gray-400 p-2 w-full" placeholder="Họ và tên">
        </div>
        <div>
            <label class="block text-blue-600 font-bold mb-2">Phòng:</label>
            <input type="text" class="border border-gray-400 p-2 w-full" placeholder="Nhập số Phòng">
        </div>
        <div>
            <label class="block text-blue-600 font-bold mb-2">Khu:</label>
            <input type="text" class="border border-gray-400 p-2 w-full" placeholder="Nhập số khu">
        </div>
        <div>
            <label class="block text-blue-600 font-bold mb-2">Số điện thoại:</label>
            <input type="text" class="border border-gray-400 p-2 w-full" placeholder="Nhập số điện thoại">
        </div>
    </div>
</div>

        <div class="flex justify-center space-x-6 mb-4">
            <button class="bg-yellow-400 text-black font-bold py-2 px-4 rounded flex items-center">
                <i class="fas fa-plus mr-2"></i> Thêm
            </button>
            <button class="bg-yellow-400 text-black font-bold py-2 px-4 rounded flex items-center">
                <i class="fas fa-trash mr-2"></i> Xóa
            </button>
            <button class="bg-yellow-400 text-black font-bold py-2 px-4 rounded flex items-center">
                <i class="fas fa-edit mr-2"></i> Cập Nhật
            </button>
            <button onclick="fetchData()" class="bg-yellow-400 text-black font-bold py-2 px-4 rounded flex items-center">
                <i class="fas fa-eye mr-2"></i> Hiển thị
            </button>
            <button class="bg-yellow-400 text-black font-bold py-2 px-4 rounded flex items-center">
                <i class="fas fa-save mr-2"></i> Lưu 
            </button>
        </div>
    </div>


     </div>
 </body>
</html>