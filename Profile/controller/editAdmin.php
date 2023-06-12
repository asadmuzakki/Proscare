<?php 
require "../../loginProscare/koneksi.php";
if (isset($_POST["submit"])) {
   if (edit_admin($_POST) > 0) {
      echo "<script>
                alert('data berhasil diubah');
                document.location.href = '../profileAdmin.php';
              </script>";
   } else {
      echo mysqli_error($koneksi);
      header("Location: ../profileAdmin.php");
      exit;
   }
}
?>