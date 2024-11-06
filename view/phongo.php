<html>
<head>
    <title>Phòng ở</title>
    <script src="https://unpkg.com/react/umd/react.development.js"></script>
    <script src="https://unpkg.com/react-dom/umd/react-dom.development.js"></script>
    <script src="https://unpkg.com/@babel/standalone/babel.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"></link>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url('https://scontent.fdad1-4.fna.fbcdn.net/v/t39.30808-6/455895737_930670519104264_6905203495730164404_n.jpg?stp=cp6_dst-jpg&_nc_cat=100&ccb=1-7&_nc_sid=127cfc&_nc_eui2=AeHD2wyjt0-mc6_8OlIUpMfixXrHHNAQAR7Fescc0BABHpTkFIgUWrjKsT57becC-OaeqpLbc1N04TpBscZZgTs2&_nc_ohc=cO6SK3-y9kEQ7kNvgG23jai&_nc_zt=23&_nc_ht=scontent.fdad1-4.fna&_nc_gid=AuYLoBQLvAU2rlCxYhvJOJo&oh=00_AYBY9bpL4uF_OoCJU_4HAO5sReF_am2pFQks7ydGGsglHw&oe=672C231A');
            background-size: cover;
            background-position: center;
        }
    </style>
</head>
<body>
<header class="bg-white shadow">
   <div class="container mx-auto flex justify-between items-center py-4 px-6">
    <div class="flex items-center">
     <img alt="Logo" class="h-10" height="100" src="/../Quanliktx/assets/img/logotruong.png" width="100"/>
    </div>
    <nav class="space-x-4 text-blue-700 font-semibold">
     <a class="hover:text-blue-900" href="/../Quanliktx/index.php">
      Trang chủ
     </a>
     <a class="hover:text-blue-900" href="/../Quanliktx/view/gioithieu.php">
      Giới thiệu
     </a>
     <a class="hover:text-blue-900" href="/../Quanliktx/view/sinhvien.php">
      Sinh viên
     </a>
     <a class="hover:text-blue-900" href="/../Quanliktx/view/tintuc.php">
      Tin tức
     </a>
     <a class="hover:text-blue-900" href="/../Quanliktx/view/phongo.php">
      Phòng ở
     </a>
     <a class="hover:text-blue-900" href="/../Quanliktx/view/thongbao.php">
      Thông báo
     </a>
     <a class="hover:text-blue-900" href="/../Quanliktx/view/thanhtra_phapche.php">
      Thanh tra - Pháp chế
     </a>
     <a class="hover:text-blue-900" href="/../Quanliktx/view/doanthe.php">
      Đoàn thể
     </a>
     <a class="hover:text-blue-900" href="/../Quanliktx/view/lienhe.php">
      Liên hệ
     </a>
     <a class="hover:text-blue-900" href="/../Quanliktx/view/bieumau.php">
      Biểu mẫu
     </a>
    </nav>
    <div>
     <i class="fas fa-search text-blue-700">
     </i>
    </div>
   </div>
  </header>
    <div id="root"></div>
    <script type="text/babel">
        function App() {
            return (
                <div className="flex flex-col items-center justify-center h-screen bg-opacity-50 bg-gray-800">
                    <h1 className="text-4xl font-bold text-white mb-4">Phòng ở</h1>
                    <h2 className="text-2xl font-bold text-blue-700 mb-4">TÌM KIẾM THÔNG TIN PHÒNG Ở</h2>
                    <div className="flex">
                        <input 
                            type="text" 
                            placeholder="Phòng 4 máy lạnh, phòng 6,..." 
                            className="p-3 rounded-l-lg w-96"
                        />
                        <button className="bg-blue-500 text-white p-3 rounded-r-lg">
                            <i className="fas fa-search"></i> Tìm kiếm
                        </button>
                    </div>
                </div>
            );
        }

        ReactDOM.render(<App />, document.getElementById('root'));
    </script>
</body>
</html>