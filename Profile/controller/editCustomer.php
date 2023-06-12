<?php 
require "../../loginProscare/koneksi.php";
if (isset($_POST["submit"])) {
   if (edit_customer($_POST) > 0) {
      echo "<script>
                alert('data berhasil diubah');
                document.location.href = '../profileCustomer.php';
              </script>";
   } else {
      echo mysqli_error($koneksi);
      header("Location: ../profileCustomer.php");
      exit;
   }
}
?>