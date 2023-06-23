<?php 
require "../loginProscare/koneksi.php";
if(!isset($_SESSION['perawat'])){
   header("Location: ../loginProscare/index.php");
   exit;
}
$id = $_SESSION['idPerawat'];
$data = query("SELECT * FROM testimoni JOIN customer ON testimoni.id_customer = customer.id WHERE testimoni.id_perawat = $id");
$rating = query("SELECT rating FROM testimoni WHERE id_perawat = $id");
$array = array();
foreach($rating as $row){
  $array[] = $row['rating'];
}
$sum = array_sum($array);
$count = count($array);
$avg = $sum/$count;
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Testimoni</title>
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
   
   <h1>Testimoni Customer</h1>
    <table class="content-table">
        <thead>
          <tr>
            <th>No.</th>
            <th>Nama Customer</th>
            <th>Feedback</th>
            <th>Rating (n/5)</th>
          </tr>
        </thead>
        <tbody>
          <?php $i=1 ?>
          <?php foreach ($data as $row):?>
          <tr>
            <td><?= $i ?></td>
            <td><?= $row['nama'] ?></td>
            <td><?= $row['feedback'] ?></td>
            <td><?= $row['rating'] ?></td>
          </tr>
          <?php $i++ ?>
          <?php endforeach; ?>
        </tbody>
    </table>
    <h1>Rating Saat Ini: <?= $avg ?></h1>

   
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