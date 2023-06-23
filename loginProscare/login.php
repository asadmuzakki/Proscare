<?php

require "koneksi.php";
if (isset($_SESSION["customer"])) {
   header("Location: ../customer/menu.html");
   exit;
}
if (isset($_SESSION["admin"])) {
   header("Location: ../admin/home/homeadmin.php");
   exit;
}
if (isset($_SESSION["perawat"])) {
   header("Location: ../perawat/menu.html");
   exit;
}

// login customer
if (isset($_POST["login"])) {
   $username = $_POST["user"];
   $password = $_POST["pass"];

   // login customer
   $result = mysqli_query($koneksi, "SELECT * FROM customer WHERE username = '$username'");

   // cek username
   if (mysqli_num_rows($result) === 1) {
      // cek password
      $row = mysqli_fetch_assoc($result);
      if ($password === $row['password']) {
         // set session
         $_SESSION["customer"] = true;
         header("Location: ../customer/menu.html");
         exit;
      }
   }

   // login admin
   $result2 = mysqli_query($koneksi, "SELECT * FROM admin WHERE username = '$username'");
   // cek username
   if (mysqli_num_rows($result2) === 1) {
      // cek password
      $row2 = mysqli_fetch_assoc($result2);
      if ($password === $row2['password']) {
         // set session
         $_SESSION["admin"] = true;
         header("Location: ../admin/home/menuadmin.php");
         exit;
      }
   }

   // login perawat
   $result3 = mysqli_query($koneksi, "SELECT * FROM perawat WHERE username = '$username'");
   // cek username
   if (mysqli_num_rows($result3) === 1) {
      // cek password
      $row3 = mysqli_fetch_assoc($result3);
      if ($password === $row3['password']) {
         // set session
         $_SESSION["perawat"] = true;
         header("Location: ../perawat/menu.html");
         exit;
      }
   }

   // jika user ataupun pass salah
   $error = true;
   if(isset($error)){
      header("Location: index.php");
      exit;
   }
}
?>