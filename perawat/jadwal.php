<?php 
require "../loginProscare/koneksi.php";
if(!isset($_SESSION['perawat'])){
   header("Location: ../loginProscare/index.php");
   exit;
}
$id = $_SESSION['idPerawat'];
$data = query("SELECT * FROM customer JOIN pasien ON customer.id = pasien.id_customer WHERE pasien.id_perawat = $id");
$transaksi = query("SELECT transaksi.nominal, transaksi.status_pembayaran FROM transaksi WHERE transaksi.id_customer IN (SELECT customer.id FROM customer WHERE customer.id IN (SELECT pasien.id_customer FROM pasien WHERE pasien.id_perawat = $id))");
// var_dump($data); die;
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Jadwal</title>
   <link rel="stylesheet" href="style.css">
   <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
</head>
<body>
   <!-- Navbar -->
   <div class="header">
      <img src="img/logo.png" alt="logo">
      <ul class="nav">
            <li><a href="../customer/Homepage.php"> Home </a></li>
            <li><a href="../perawat/menu.php"> Menu </a></li>
            <li><a href="../Profile/profilePerawat.php"> Profile </a></li>
            <li><a href="../loginProscare/logout.php"> Logout </a></li>
      </ul>
   </div>
   
   <h1>Riwayat Anda</h1>
      <table class="content-table">
         <thead>
            <tr>
               <th>No.</th>
               <th>Detail Customer</th>
               <th>Biodata Pasien</th>
               <th>Detail Treatment</th>
               <th>Keterangan</th>
            </tr>
         </thead>
         <tbody>
            <?php $i = 1 ?>
            <?php foreach($data as $row) : ?>
               <?php foreach($transaksi as $transaks) ?>
            <tr>
               <td><?= $i ?></td>
               <td>
                  Nama Customer: <?= $row['nama'] ?><br>
                  Kontak: <?= $row['no_telp'] ?><br><br>
               </td>
               <td>
                  Nama Pasien: <?= $row['nama_pasien'] ?><br>
                  Tanggal Lahir: <?= $row['tgl_akhir'] ?><br>
                  Jenis Kelamin: <?= $row['gender'] ?><br>
                  Riwayat: <?= $row['riwayat'] ?><br>
                  Keterangan: <?= $row['keterangan'] ?><br>
                  Alamat Pasien: <?= $row['alamat'] ?><br><br>
               </td>
               <td>
                  Jenis Treatment: <?= $row['jenis_treatment'] ?> Treatment<br>
                  Tanggal Awal: <?= $row['tgl_awal_sewa'] ?><br>
                  Tanggal Akhir: <?= $row['tgl_akhir_sewa'] ?><br><br>
               </td>
               <td><?= $transaks['status_pembayaran'] ?></td>
            </tr>
            <?php $i++ ?>
            <?php endforeach ?>
         </tbody>
      </table>
    
   <!-- Footer -->
   <footer>
      <div class="footer">
         <h3>Proscare</h3>
         <p>Lorem ipsum dolor sit amet consectetur adipisicin elit. Quidem nostrum soluta vel laboriosam cum inventore tempore? Dolores, optio. Architecto adipisci nemo reprehenderit voluptates dolorem earum tenetur numquam dolore quia sint.</p>
         <ul class="social">
           <li><a href="#"><i class="fa fa-facebook"></i></a></li>
           <li><a href="#"><i class="fa fa-twitter"></i></a></li>
           <li><a href="#"><i class="fa fa-google"></i></a></li>
           <li><a href="#"><i class="fa fa-instagram"></i></a></li>
         </ul>
      </div>
      <div class="bottom">
         <p>copyright &copy;2023 ProsCare</p>
      </div>
   </footer>
</body>
</html>