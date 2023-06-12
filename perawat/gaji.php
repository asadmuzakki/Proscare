<?php 
require "../loginProscare/koneksi.php";
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
          <li><a href="#"> Home </a></li>
          <li><a href="#"> Menu </a></li>
          <li><a href="#"> Profile </a></li>
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
          <tr>
            <!-- <td><input type="radio" name="cek"></td> -->
            <td>1</td>
            <td>08/19/2022</td>
            <td>Rp750.000</td>
            <!-- <td><button type="button" class="cv"><a href="#">cv</a></button></td> -->
         </tr>
          <tr class="active-row">
            <!-- <td><input type="radio" name="cek"></td> -->
            <td>2</td>
            <td>11/06/2022</td>
            <td>Rp1.000.000</td>
            <!-- <td><button type="button" class="cv"><a href="#">cv</a></button></td> -->
         </tr>
         <tr>
            <!-- <td><input type="radio" name="cek"></td> -->
            <td>3</td>
            <td>05/25/2023</td>
            <td>Rp1.500.000</td>
            <!-- <td><button type="button" class="cv"><a href="#">cv</a></button></td> -->
          </tr>
        </tbody>
    </table>
    <h1>Total Gaji Saat Ini: Rp3.250.000</h1>

   
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