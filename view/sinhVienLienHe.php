<html>
 <head>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"></link>
 </head>
 <body class="bg-gray-100">
  <!-- <div class="bg-blue-500 h-8">
  </div> -->
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
                <li class="flex items-center p-4 hover:bg-gray-200 cursor-pointer" onclick="window.location.href='/../Quanliktx/view/sinhVienLienHe.php'">
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
                <li class="flex items-center p-4 hover:bg-gray-200 cursor-pointer">
                    <i class="fas fa-bolt text-gray-600"></i>
                    <span class="ml-2">Hóa đơn-Điện nước</span>
                </li>
                <li class="flex items-center p-4 hover:bg-gray-200 cursor-pointer">
                    <i class="fas fa-plug text-gray-600"></i>
                    <span class="ml-2">Hóa đơn điện tử</span>
                </li> 
                <li class="flex items-center p-4 hover:bg-gray-200 cursor-pointer">
                   <i class="fas fa-sign-out-alt text-gray-600"></i>
                   <span class="ml-2">Đăng xuất</span>
                </li> 
            </ul>
        </div>
         

        <div class="container mx-auto p-5">
    <h2 class="text-2xl font-bold text-center text-gray-800 mb-5">Quản lý Liên hệ của Sinh viên</h2>

    <div class="overflow-x-auto">
        <table class="min-w-full bg-white border border-gray-200">
            <thead>
                <tr>
                    <th class="py-3 px-5 border-b border-gray-200 bg-green-600 text-white text-left text-sm uppercase font-semibold">ID</th>
                    <th class="py-3 px-5 border-b border-gray-200 bg-green-600 text-white text-left text-sm uppercase font-semibold">Tên</th>
                    <th class="py-3 px-5 border-b border-gray-200 bg-green-600 text-white text-left text-sm uppercase font-semibold">Email</th>
                    <th class="py-3 px-5 border-b border-gray-200 bg-green-600 text-white text-left text-sm uppercase font-semibold">Điện thoại</th>
                    <th class="py-3 px-5 border-b border-gray-200 bg-green-600 text-white text-left text-sm uppercase font-semibold">Phòng liên hệ</th>
                    <th class="py-3 px-5 border-b border-gray-200 bg-green-600 text-white text-left text-sm uppercase font-semibold">Nội dung</th>
                    <th class="py-3 px-5 border-b border-gray-200 bg-green-600 text-white text-center text-sm uppercase font-semibold">Xóa</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Kết nối đến CSDL
                $conn = new mysqli("localhost:3307", "root", "", "qlktx");

                // Kiểm tra kết nối
                if ($conn->connect_error) {
                    die("Kết nối thất bại: " . $conn->connect_error);
                }

                // Lấy dữ liệu từ bảng lienhe
                $sql = "SELECT * FROM lienhe ORDER BY id DESC";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // Lặp qua từng bản ghi và hiển thị trên bảng
                    while($row = $result->fetch_assoc()) {
                        echo "<tr class='hover:bg-gray-100'>
                                <td class='py-3 px-5 border-b border-gray-200'>".$row["id"]."</td>
                                <td class='py-3 px-5 border-b border-gray-200'>".$row["name"]."</td>
                                <td class='py-3 px-5 border-b border-gray-200'>".$row["email"]."</td>
                                <td class='py-3 px-5 border-b border-gray-200'>".$row["phone"]."</td>
                                <td class='py-3 px-5 border-b border-gray-200'>".$row["department"]."</td>
                                <td class='py-3 px-5 border-b border-gray-200'>".$row["message"]."</td>
                                <td class='py-3 px-5 border-b border-gray-200 text-center'>
                                    <form action='/../Quanliktx/controller/xoaLienHe.php' method='POST' onsubmit='return confirm(\"Bạn có chắc chắn muốn xóa không?\");'>
                                        <input type='hidden' name='id' value='".$row["id"]."'>
                                        <button type='submit' class='bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600'>Xóa</button>
                                    </form>
                                </td>
                            </tr>";
                    }
                } else {
                    echo "<tr><td colspan='7' class='text-center py-3 px-5'>Chưa có liên hệ nào</td></tr>";
                }

                // Đóng kết nối
                $conn->close();
                ?>
            </tbody>
        </table>
    </div>
</div>

     </div>
 </body>
</html>