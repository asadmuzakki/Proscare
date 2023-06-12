<?php
   require "../loginProscare/koneksi.php";
   if(isset($_POST['order'])){
      $array = array($_POST['fullname'], $_POST['shortname'], $_POST['phone'], $_POST['date'], $_POST['cheked'], $_POST['address'], $_POST['riwayat'], $_POST['fyi'], $_POST['start'], $_POST['end'], $_POST['treat']);
      
      // $array = array($fullname, $shortname, $phone, $date, $gender, $address, $riwayat, $information, $startContract, $endContract, $treat);
      $_SESSION['data'] = $array;


      header("Location: nurseTable.php");
      exit;
   }
?>