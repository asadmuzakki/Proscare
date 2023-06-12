<?php 
require "../loginProscare/koneksi.php";
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
          <li><a href="#"> Home </a></li>
          <li><a href="#"> Menu </a></li>
          <li><a href="#"> Profile </a></li>
      </ul>
   </div>
   
   <h1>Testimoni Customer</h1>
    <table class="content-table">
        <thead>
          <tr>
            <th>No.</th>
            <th>Nama Customer</th>
            <th>Feedback</th>
            <th>Rating (n/10)</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <!-- <td><input type="radio" name="cek"></td> -->
            <td>1</td>
            <td>Rita Nasution</td>
            <td>Ramah dan rajin</td>
            <td>8</td>
            <!-- <td><button type="button" class="cv"><a href="#">cv</a></button></td> -->
          </tr>
          <tr class="active-row">
            <!-- <td><input type="radio" name="cek"></td> -->
            <td>2</td>
            <td>Ani Wijaya</td>
            <td>Baik,,, ramah sekali</td>
            <td>9</td>
            <!-- <td><button type="button" class="cv"><a href="#">cv</a></button></td> -->
          </tr>
          <tr>
            <!-- <td><input type="radio" name="cek"></td> -->
            <td>3</td>
            <td>Stephanie Yudhoyono</td>
            <td>Rajin, selalu datang tepat waktu</td>
            <td>9</td>
            <!-- <td><button type="button" class="cv"><a href="#">cv</a></button></td> -->
          </tr>
        </tbody>
    </table>
    <h1>Rating Saat Ini: 8.6</h1>

   
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