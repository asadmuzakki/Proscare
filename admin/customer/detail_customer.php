<?php 
require "../../loginProscare/koneksi.php";
$id = $_GET["id"];
$data = query("SELECT * FROM customer WHERE id = '$id'")[0];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="detail.css">
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>

    <title>Detail Customer</title>
</head>
<body>
    
    <div class="navbar">
        <a href="home.html"><img src="../assets/Menu/logo.png" alt="" style="height: 60px;"></a>

        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Menu</a></li>
            <li><a href="#">Profile</a></li>
        </ul>

    </div>

    <div class="content">
        <div class="card">
            <h1>Detail Customer</h1>
            <div class="container">
                <img src="../assets/5e71ec35a9ef81f90fdb62d90edce7f3.jpg" alt="profile-photo" style="width: 200px; height: 180px;">
                <div class="details">
                    <p style="font-weight: bold;">Nama</p>
                    <p><?= $data['nama'] ?></p>
                    <p style="font-weight: bold;">Username</p>
                    <p><?= $data['username'] ?></p>
                    <p style="font-weight: bold;">No Telp</p>
                    <p><?= $data['no_telp'] ?></p>
                </div>
            </div>
        </div>
    </div>

</body>
</html>