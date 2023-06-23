<?php
require "../loginProscare/koneksi.php";
if(isset($_POST["submit"])){
   if (transaksi($_POST) > 0) {
      echo "<script>
                alert('pembayaran berhasil!');
                document.location.href = 'menu.php';
              </script>";
   } else {
      echo mysqli_error($koneksi);
      header("Location: Invoice.php");
      exit;
   }
}
?>