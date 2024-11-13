<?php
   
  $localhost = "localhost:3306";
  $user = "root";
  $pass = "";
  $database = "qlktx";

  $conn = new mysqli($localhost, $user, $pass, $database);
  if(!$conn){
    echo "kết nối thất bại :". mysqli_connect_errno();
  }
  echo "";
?>