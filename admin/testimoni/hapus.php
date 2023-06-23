<?php 
require "../../loginProscare/koneksi.php";
$id = $_GET['id'];

if(hapus_testimoni($id) > 0){
   echo "<script>
            alert('data berhasil dihapus');
            document.location.href = 'testimoni.php';
         </script>";
}
?>