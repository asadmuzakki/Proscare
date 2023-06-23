<?php 
require "../loginProscare/koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/payValidation.css">
    <script src="https://unpkg.com/feather-icons"></script>
</head>
<body>
     <!-- Navbar -->
     <div class="header">
        <img src="Assets\Proscare Logo.png" alt="logo">
        <ul class="nav">
            <li><a href="Homepage.php"> Home </a></li>
            <li><a href="Menu.php"> Menu </a></li>
            <li><a href="../Profile/profileCustomer.php"> Profile </a></li>
            <li><a href="../loginProscare/logout.php"> Logout </a></li>
        </ul>
    </div>

    <!-- Table Perawat -->
    <h1>Available Nurse</h1>
    <table class="content-table">
        <thead>
          <tr>
              <th>No.</th>
              <!-- <th>Select</th> -->
            <th>Nama Customer</th>
            <th>Bukti Pembayaran</th>
            <th>Validasi</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>yanto</td>
            <td><button type="button" class="cv"><a href="Image.html">Bukti</a></button></td>
            <td><button type="button" class="cv"><a href="#">cv</a></button></td>
          </tr>
          <tr class="active-row">
            <td>2</td>
            <td>Rizal</td>
            <td><button type="button" class="cv"><a href="Image.html">Bukti</a></button></td>
            <td><button type="button" class="cv"><a href="#">cv</a></button></td>
          </tr>
          <tr>
            <td>3</td>
            <td>Endang</td>
            <td><button type="button" class="cv"><a href="Image.html">Bukti</a></button></td>
            <td><button type="button" class="cv"><a href="#">cv</a></button></td>
          </tr>
          <tr>
            <td>4</td>
            <td>Guna</td>
            <td><button type="button" class="cv"><a href="Image.html">Bukti</a></button></td>
            <td><button type="button" class="cv"><a href="#">cv</a></button></td>
          </tr>
          <tr>
            <td>5</td>
            <td>Nugraha</td>
            <td><button type="button" class="cv"><a href="Image.html">Bukti</a></button></td>
            <td><button type="button" class="cv"><a href="#">cv</a></button></td>
          </tr>
          <tr>
            <td>6</td>
            <td>Bimo</td>
            <td><button type="button" class="cv"><a href="Image.html">Bukti</a></button></td>
            <td><button type="button" class="cv"><a href="#">cv</a></button></td>
          </tr>
          <tr>
            <td>7</td>
            <td>lalu</td>
            <td><button type="button" class="cv"><a href="Image.html">Bukti</a></button></td>
            <td><button type="button" class="cv"><a href="#">cv</a></button></td>
          </tr>
          <tr>
            <td>8</td>
            <td>aldi</td>
            <td><button type="button" class="cv"><a href="Image.html">Bukti</a></button></td>
            <td><button type="button" class="cv"><a href="#">cv</a></button></td>
          </tr>
          <tr>
            <td>9</td>
            <td>bang rudi</td>
            <td><button type="button" class="cv"><a href="Image.html">Bukti</a></button></td>
            <td><button type="button" class="cv"><a href="#">cv</a></button></td>
          </tr>
        </tbody>
    </table>


       <!-- Footer -->
    <footer>
        <div class="footer">
            <h3>Proscare</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem nostrum soluta vel laboriosam cum
                inventore tempore? Dolores, optio. Architecto adipisci nemo reprehenderit voluptates dolorem earum
                tenetur numquam dolore quia sint.</p>
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