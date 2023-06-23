<?php 
require "../../loginProscare/koneksi.php";
if(!isset($_SESSION['admin'])){
    header("Location: ../../loginProscare/index.php");
    exit;
 }
$id = $_GET['id'];
$testimoni = query("SELECT * FROM testimoni JOIN customer ON testimoni.id_customer = customer.id WHERE testimoni.no = $id")[0];
$perawat = query("SELECT * FROM testimoni JOIN perawat ON testimoni.id_perawat = perawat.id WHERE testimoni.no = $id")[0];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="detail.css">
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>

    <title>Detail Testimoni</title>
</head>
<body>
    
    <div class="navbar">
        <a href="home.html"><img src="../assets/Menu/logo.png" alt="" style="height: 60px;"></a>

        <ul class="nav">
            <li><a href="../../customer/Homepage.php"> Home </a></li>
            <li><a href="../../admin/home/menuadmin.php"> Menu </a></li>
            <li><a href="../../Profile/profileAdmin.php"> Profile </a></li>
            <li><a href="../../loginProscare/logout.php"> Logout </a></li>
        </ul>

    </div>

    <div class="content">

        <div class="card">
            <h1>Detail Testimoni</h1>
            <div class="container">
                <div class="details">
                    <p style="font-weight: bold;">No Testimoni</p>
                    <p><?= $testimoni['no'] ?></p>
                    <p style="font-weight: bold;">Nama Customer</p>
                    <p><?= $testimoni['nama'] ?></p>
                    <p style="font-weight: bold;">Nama Perawat</p>
                    <p><?= $perawat['nama'] ?></p>
                    <p style="font-weight: bold;">Feedback</p>
                    <p><?= $testimoni['feedback'] ?></p>
                    <p style="font-weight: bold;">Rating</p>
                    <p><?= $testimoni['rating'] ?></p>
                </div>
            </div>
        </div>
        
    </div>

</body>
</html>