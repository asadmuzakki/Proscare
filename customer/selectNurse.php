<?php
require "../loginProscare/koneksi.php";
// require "order.php";
if (isset($_POST['nurse'])) {
   $fullname = $_SESSION['data'][0];
   $shortname = $_SESSION['data'][1];
   $phone = $_SESSION['data'][2];
   $date = $_SESSION['data'][3];
   $gender = $_SESSION['data'][4];
   $address = $_SESSION['data'][5];
   $riwayat = $_SESSION['data'][6];
   $information = $_SESSION['data'][7];
   $startContract = $_SESSION['data'][8];
   $endContract = $_SESSION['data'][9];
   $treat = $_SESSION['data'][10];
   $idPerawat = $_POST['cek'];
   $idCustomer = $_SESSION['idCustomer'];

   $sql = "INSERT INTO pasien VALUE('', '$fullname', '$date', '$gender', '$startContract', '$endContract', '$riwayat', '$information', '$address', '$treat', '$idCustomer', '$idPerawat')";
   $result = mysqli_query($koneksi, $sql);
   $idPasien = mysqli_insert_id($koneksi);
   if ($result) {
      echo "<script>
               alert('Silahkan Lanjutkan pembayaran');
               document.location.href = 'Invoice.php?id=$idPasien';
            </script>";
      // header("Location: payValidation.php");
      // exit;
   } else {
      header("Location: payValidation.php");
      exit;
   }
}
// echo $_SESSION['data'][4];
// echo $fullname;
?>