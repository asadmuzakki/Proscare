<?php
require "koneksi.php";
$id = $_GET['id'];

if(hapus_perawat($id) > 0){
   echo "<script>
            alert('data berhasil dihapus');
            document.location.href = '../admin/perawat/data_perawat.php';
         </script>";
}
?>