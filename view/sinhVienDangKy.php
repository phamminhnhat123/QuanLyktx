<html>
<head>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"></link>
</head>
<body class="bg-gray-100">
    <div class="flex">
        <!-- Sidebar -->
        <div class="w-64 bg-white h-screen shadow-md">
            <div class="p-4 border-b " onclick="window.location.href='/../Quanliktx/view/Admin.php'">
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
                <li class="flex items-center p-4 hover:bg-gray-200 cursor-pointer">
                    <i class="fas fa-envelope text-gray-600"></i>
                    <span class="ml-2">Yêu cầu từ sinh viên</span>
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
                <li class="flex items-center p-4 hover:bg-gray-200 cursor-pointer">
                    <i class="fas fa-bolt text-gray-600"></i>
                    <span class="ml-2">Hóa đơn-Điện nước</span>
                </li>
                <li class="flex items-center p-4 hover:bg-gray-200 cursor-pointer">
                    <i class="fas fa-plug text-gray-600"></i>
                    <span class="ml-2">Hóa đơn điện tử</span>
                </li>  
            </ul>
        </div>
        
         <div class="bg-blue-500 h-8"> </div>
        <!-- Content Area -->
        <div class="flex-1 p-8 bg-green-200 flex flex-col items-center justify-center">
            <h1 class="text-2xl font-bold text-red-600 mb-4">Danh Sách Sinh Viên Đăng Ký Ở Nội Trú</h1>
            
            <!-- Image Container -->
            <div class="overflow-x-auto w-full max-w-4xl">
        <table  id="studentTable" class="min-w-full bg-white border border-gray-300">
            <thead>
                 <tr>
                    <th class="px-4 py-2 border border-gray-300">ID</th>
                    <th class="px-4 py-2 border border-gray-300">Mã sinh viên</th>
                    <th class="px-4 py-2 border border-gray-300">Họ tên</th>
                    <th class="px-4 py-2 border border-gray-300">lớp</th>
                    <th class="px-4 py-2 border border-gray-300">Địa chỉ</th>
                    <th class="px-4 py-2 border border-gray-300">giới tính</th>
                    <th class="px-4 py-2 border border-gray-300">Ngày sinh</th>
                    <th class="px-4 py-2 border border-gray-300">Khóa</th>
                    <th class="px-4 py-2 border border-gray-300">Ngày bắt đầu</th>
                    <th class="px-4 py-2 border border-gray-300">Ngày kết thúc</th>
                </tr>
            </thead>
            <tbody id="tableBody">
          
            </tbody>
        </table>
    </div>

    <script>
function fetchData() {
    // Thông báo xác nhận trước khi hiển thị toàn bộ danh sách
    const userConfirm = confirm("Bạn muốn hiển thị toàn bộ danh sách?");
    if (userConfirm) {
        fetch('/../Quanliktx/controller/sinhVienDangKy.php')
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
                        <td class="border border-gray-400 px-4 py-2">${row.tinh}</td>
                        <td class="border border-gray-400 px-4 py-2">${row.gioitinh}</td>
                        <td class="border border-gray-400 px-4 py-2">${row.ngaysinh}</td>
                        <td class="border border-gray-400 px-4 py-2">${row.khoa1}</td>
                        <td class="border border-gray-400 px-4 py-2">${row.ngaybatdau}</td>
                        <td class="border border-gray-400 px-4 py-2">${row.ngayketthuc}</td>
                        
                    `;
                    tableBody.appendChild(tr);
                });
            })
            .catch(error => console.error('Error:', error)); 
    }
}
</script>
            
            <!-- Buttons -->
            <div class="flex space-x-4 mt-4">
                <button class="bg-red-500 text-white font-bold py-2 px-4 rounded hover:bg-red-600 flex items-center">
                    <i class="fas fa-trash-alt mr-2"></i> Delete
                </button>
                <button class="bg-green-500 text-white font-bold py-2 px-4 rounded hover:bg-green-600 flex items-center">
                    <i class="fas fa-arrow-left mr-2"></i> Back
                </button>
                <button class="bg-blue-500 text-white font-bold py-2 px-4 rounded hover:bg-blue-600 flex items-center">
                    <i class="fas fa-plus mr-2"></i> Add
                </button>
                <button onclick="fetchData()" class="bg-yellow-400 text-black font-bold py-2 px-4 rounded flex items-center">
                <i class="fas fa-eye mr-2"></i> Hiển thị
            </button>
            </div>
        </div>
    </div>
</body>
</html>
