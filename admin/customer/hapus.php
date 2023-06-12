<?php
require "../../loginProscare/koneksi.php";
$id = $_GET['id'];

if(hapus_customer($id) > 0){
   echo "<script>
            alert('data berhasil dihapus');
            document.location.href = 'data_customer.php';
         </script>";
}
?>