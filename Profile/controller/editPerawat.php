<?php 
require "../../loginProscare/koneksi.php";
if (isset($_POST["submit"])) {
   if (edit_profilePerawat($_POST) > 0) {
      echo "<script>
                alert('data berhasil diubah');
                document.location.href = '../profilePerawat.php';
              </script>";
   } else {
      echo mysqli_error($koneksi);
      header("Location: ../profilePerawat.php");
      exit;
   }
}
?>