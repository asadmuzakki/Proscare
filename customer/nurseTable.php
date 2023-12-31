<?php 
  require "../loginProscare/koneksi.php";
  if(!isset($_SESSION['customer'])){
    header("Location: ../loginProscare/index.php");
    exit;
  }
  $data = query("SELECT * FROM perawat INNER JOIN status_ketidaktersediaan ON perawat.id = status_ketidaktersediaan.id_perawat");

  // var_dump($data); die;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nurse</title>
    <link rel="stylesheet" href="css/nurseTable.css">
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
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
    <form action="selectNurse.php" method="post">

      <table class="content-table">
        <thead>
          <tr>
            <th>Select</th>
            <!-- <th>No.</th> -->
            <th>Rating</th>
            <th>Nurse</th>
            <th>CV</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($data as $row) : ?>
            <?php  
            $idPerawat = $row['id_perawat'];
            $rating = query("SELECT * FROM testimoni WHERE id_perawat = $idPerawat"); 
            // var_dump($rating); die;
            $array = array();
            if(!empty($rating)){
            foreach ($rating as $rate){
              $array[] = $rate['rating'];
            }
            $sum = array_sum($array);
            $count = count($array);
            $avg = $sum/$count;
          }else{
            $avg = 0;
          }
            ?>
            <?php if($row['status'] === "tersedia") : ?>
          <tr>
            <td><input type="radio" name="cek" value="<?= $row['id'] ?>"></td>
            <td><?= $avg ?></td>
            <td><?= $row['nama']?></td>
            <td><button type="button" class="cv"><a href="../Asset/cv/<?= $row['cv'] ?>">cv</a></button></td>
          </tr>
            <?php endif; ?>
          <?php endforeach; ?>
        </tbody>
    </table>
    <button type="submit" name="nurse">Select Nurse</button>
  </form>

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