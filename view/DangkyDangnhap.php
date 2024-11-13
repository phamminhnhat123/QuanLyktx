<html>
 <head>
  <title>
   Trang Thông Tin Sinh Viên Ở Ký Túc Xá VKU
  </title>
  <link crossorigin="anonymous" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" rel="stylesheet"/>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style>
   body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }
        .header {
            background-color: #4a90e2;
            padding: 10px 0;
            text-align: center;
        }
        .header img {
            height: 50px;
        }
        .header h1 {
            display: inline-block;
            color: #fff;
            font-size: 24px;
            margin: 0;
            padding-left: 10px;
            font-weight: bold;
        }
        .header .container {
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: left;
        }
        .main-content {
            position: relative;
            text-align: center;
            color: white;
        }
        .main-content img {
            width: 100%;
            height: auto;
        }
        /* Sử dụng flexbox cho overlay container */
        .overlay-container {
            display: flex;
            justify-content: space-between;
            align-items: stretch;
            position: absolute;
            top: 50%;
            left: 50%;
            width: 100%;
            transform: translate(-50%, -50%);
            padding: 0 10%;
        }
        .overlay {
            flex: 1;
            background-color: rgba(74, 144, 226, 0.7);
            padding: 40px;
            margin: 0 30px;
            border-radius: 10px;
            text-align: center;
        }
        .overlay h2 {
            font-size: 28px;
            margin-bottom: 15px;
        }
        .overlay a {
            display: inline-block;
            padding: 15px 30px;
            font-size: 20px;
            color: white;
            border: 2px solid white;
            text-decoration: none;
            border-radius: 5px;
        }
  </style>
 </head>
 <body>
  <div class="header">
   <div class="container">
    <img alt="Logo of KTX" height="50" src="/../Quanliktx/assets/img/vku.png" width="50"/>
    <h1>
     TRANG THÔNG TIN SINH VIÊN Ở KÝ TÚC XÁ VKU
    </h1>
   </div>
  </div>
  <div class="main-content">
   <img alt="Aerial view of university dormitory buildings" style="height: 700px;" src="https://sp-ao.shortpixel.ai/client/to_webp,q_glossy,ret_img/https://vku.udn.vn//wp-content/uploads/2023/10/Kytucxa-scaled.jpg" />
   <div class="overlay-container">
    <div class="overlay">
     <h2>
      Dành cho sinh viên chưa ở <br> KTX
     </h2>
     <a href="/../Quanliktx/view/Dangky.php">
     <span class="glyphicon glyphicon-user"></span> Đăng ký
     </a>
    </div>
    <div class="overlay">
     <h2>
      Dành cho sinh viên đang ở <br> KTX
     </h2>
     <a href="/../Quanliktx/view/Dangnhap.php">
     <span class="glyphicon glyphicon-log-in"></span> Đăng nhập
     </a>
    </div>
   </div>
  </div>
 </body>
</html>
