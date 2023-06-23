<?php
require "../../loginProscare/koneksi.php";
$id = $_GET['id'];

if(validasi($id) > 0){
   echo "<script>
            alert('data berhasil diupdate');
            document.location.href = 'transaksi.php';
         </script>";
}
?>