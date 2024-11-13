<html>
<head>
    <title>Tham Quan Online</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body, html {
            height: 100%;
            margin: 0;
            font-family: 'Arial', sans-serif;
        }
        .bg {
            background-image: url('/../Quanliktx/assets/img/amthucvku.jpg');
            height: 100%;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            position: relative;
        }
        .content {
            position: absolute;
            top: 50%;
            left: 10%;
            transform: translateY(-50%);
            color: white;
        }
        #scroll-text {
            display: inline-block;
            opacity: 1; /* Hiển thị ban đầu */
            transition: opacity 0.5s; /* Hiệu ứng mờ dần */
        }
        .greeting {
            margin-right: 10px; /* Khoảng cách giữa các từ */
        }
        .btn-container {
            position: relative; /* Đặt lại vị trí cho nút */
            z-index: 1; /* Đảm bảo nút ở trên cùng */
            margin-top: 20px; /* Khoảng cách từ dòng chữ trên */
        }
        .btn-custom {
            background-color: white;
            color: #007bff;
            font-weight: bold;
            padding: 10px 20px;
            border-radius: 25px;
            display: inline-block;
        }
        .btn-custom i {
            margin-left: 10px;
        }
        .sidebar {
            position: absolute;
            top: 20%;
            right: 5%;
            background-color: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 10px;
            width: 250px;
        }
        .sidebar h3 {
            font-size: 1.2rem;
            font-weight: bold;
            margin-bottom: 20px;
        }
        .sidebar .nav-item {
            margin-bottom: 15px;
        }
        .sidebar .nav-item a {
            color: #007bff;
            text-decoration: none;
            font-size: 1rem;
        }
        .sidebar .nav-item a i {
            margin-right: 10px;
        }
    </style>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const textElement = document.getElementById('scroll-text');
            const fullText = textElement.innerText;
            let index = 0;

            function showText() {
                textElement.innerText = ''; // Xóa nội dung trước khi bắt đầu
                index = 0; // Đặt lại chỉ số
                textElement.style.opacity = 1; // Đảm bảo hiển thị

                function addCharacter() {
                    if (index < fullText.length) {
                        textElement.innerText += fullText[index];
                        index++;
                        setTimeout(addCharacter, 200); // Thời gian giữa các chữ
                    } else {
                        setTimeout(hideText, 1000); // Thời gian hiển thị đầy đủ trước khi ẩn
                    }
                }

                addCharacter(); // Bắt đầu thêm ký tự
            }

            function hideText() {
                textElement.style.opacity = 0; // Mờ đi
                setTimeout(showText, 1000); // Thời gian chờ trước khi bắt đầu lại
            }

            showText(); // Bắt đầu hoạt ảnh
        });
    </script>
</head>
<body>
    <div class="bg">
        <div class="content">
            <h1 id="scroll-text">
                <span class="greeting" style="margin-right: 10px;">Xin</span> 
                <span class="greeting" style="margin-right: 10px;">chào</span> 
                <br> 
                PHẠM MINH NHẬT
            </h1>
            <div class="btn-container">
                <a href="#" class="btn-custom">Bắt Đầu xem thông tin <i class="fas fa-chevron-right"></i><i class="fas fa-chevron-right"></i></a>
            </div>
        </div>
        <div class="sidebar">
            <h3>Thông tin của bạn</h3>
            <div class="nav-item">
                <a href="#"><i class="fas fa-home"></i> Tổng quan khu KTX</a>
            </div>
            <div class="nav-item">
                <a href="#"><i class="fas fa-globe"></i> Chọn khu KTX</a>
            </div>
            <div class="nav-item">
                <a href="#"><i class="fas fa-map-marker-alt"></i> Trở về cảnh quan trước</a>
            </div>
            <div class="nav-item">
                <a href="#"><i class="fas fa-video"></i> Thư viện Media</a>
            </div>
            <div class="nav-item">
                <a href="#"><i class="fas fa-door-open"></i> Tham quan phòng SV</a>
            </div>
            <div class="nav-item">
                <a href="#"><i class="fas fa-eye-slash"></i> Ẩn nút chức năng</a>
            </div>
        </div>
    </div>
</body>
</html>
