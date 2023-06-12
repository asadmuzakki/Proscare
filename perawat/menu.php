<?php 
require "../loginProscare/koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Menu</title>
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
          <li><a href="../Profile/profilePerawat.php"> Profile </a></li>
          <li><a href="../loginProscare/logout.php"> Logout </a></li>
      </ul>
   </div>
   
   <div class="content">
      <div class="content-item">
         <div class="card">
            <a href="jadwal.php">
               <img src="img/Schedule.png" alt="">
               <p class="card-text">JADWAL</p>
            </a>
         </div>
         <div class="card">
            <a href="gaji.php">
               <img src="img/Salary.png" alt="">
               <p class="card-text">GAJI</p>
            </a>
         </div>
         <div class="card">
            <a href="testimoni.php">
               <img src="img/Feedback.png" alt="">
               <p class="card-text">TESTIMONI</p>
            </a>
         </div>
      </div>
   </div>  
    
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