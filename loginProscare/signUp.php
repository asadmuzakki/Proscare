<?php
require "koneksi.php";
if (isset($_POST["signUp"])) {
   if (registrasi($_POST) > 0) {
      echo "<script>
                alert('user baru berhasil ditambahkan!');
                document.location.href = 'index.php';
              </script>";
   } else {
      echo mysqli_error($koneksi);
      header("Location: index.php");
      exit;
   }
}
?>