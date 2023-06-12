<?php 
require "../../loginProscare/koneksi.php";
$id =  $_GET['id'];
$data = query("SELECT * FROM pasien WHERE id = '$id'")[0];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="detail.css">
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>

    <title>Detail Pasien</title>
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
            <h1>Detail Pasien</h1>
            <div class="container">
                <div class="details">
                    <p style="font-weight: bold;">Nama</p>
                    <p><?= $data['nama'] ?></p>
                    <p style="font-weight: bold;">Tanggal Lahir</p>
                    <p><?= $data['tgl_akhir'] ?></p>
                    <p style="font-weight: bold;">Nama Perawat</p>
                    <p>Nama Perawat</p>
                    <p style="font-weight: bold;">Keterangan</p>
                    <p><?= $data['keterangan'] ?></p>
                    <p style="font-weight: bold;">Riwayat</p>
                    <p><?= $data['riwayat'] ?></p>
                    <p style="font-weight: bold;">Gender</p>
                    <p><?= $data['gender'] ?></p>
                    <p style="font-weight: bold;">Alamat</p>
                    <p><?= $data['alamat'] ?></p>
                    <p style="font-weight: bold;">Tanggal Awal</p>
                    <p><?= $data['tgl_awal_sewa'] ?></p>
                    <p style="font-weight: bold;">Tanggal Akhir</p>
                    <p><?= $data['tgl_akhir_sewa'] ?></p>
                </div>
            </div>
        </div>
        
    </div>

</body>
</html>