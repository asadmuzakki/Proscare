<?php 
require "../loginProscare/koneksi.php";
if(!isset($_SESSION['perawat'])){
   header("Location: ../loginProscare/index.php");
   exit;
}
$id = $_SESSION['idPerawat'];
$data = query("SELECT transaksi.tgl_bayar, transaksi.nominal, transaksi.status_pembayaran FROM transaksi WHERE transaksi.id_customer IN (SELECT pasien.id_customer FROM pasien WHERE pasien.id_perawat=$id)");
// var_dump($data); die;

?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Gaji</title>
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
   
   <h1>Tabel Gaji</h1>
    <table class="content-table">
        <thead>
          <tr>
            <!-- <th>No.</th> -->
            <th>No.</th>
            <th>Tanggal Terima</th>
            <th>Nominal</th>
          </tr>
        </thead>
        <tbody>
          <?php $i = 1 ?>
          <?php $sum = 0 ?>
          <?php foreach($data as $row) : ?>
            <?php if($row['status_pembayaran'] === 'Valid') : ?>
            <?php 
               $price = $row['nominal'];
               $price = $price * 0.8;
               $formattedHarga = 'Rp. ' . number_format($price, 2, ',', '.');
            ?>
          <tr>
            <td><?= $i ?></td>
            <td><?= $row['tgl_bayar'] ?></td>
            <td><?= $formattedHarga ?></td>
         </tr>
         <?php $sum += $price ?>
          <?php $i++ ?>
          <?php endif ?>
          <?php endforeach; ?>
        </tbody>
    </table>
    <?php $formattedHarga = 'Rp. ' . number_format($sum, 2, ',', '.'); ?>
    <h1>Total Gaji Saat Ini: <?= $formattedHarga ?></h1>

   
   <!-- <div class="timeline">
      <h1>RIWAYAT TRANSAKSI ANDA</h1>
      <div class="timeline-items">
         
      </div>
   </div> -->
   
   
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