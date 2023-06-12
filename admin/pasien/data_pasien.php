<?php 
require "../../loginProscare/koneksi.php";
$data = query("SELECT * FROM pasien");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="pasien.css">
    <title>Data Pasien</title>
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

        <div class="container">

            <h1 class="actor">Pasien</h1>
            <table>
                <thead>
                    <tr>
                        <th style="text-align: center;">No</th>
                        <th>Nama</th>
                        <th>Tanggal Awal</th>
                        <th>Tanggal Akhir</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
            
                <tbody>
                    <?php $i=1; ?>
                    <?php foreach ($data as $row) : ?>
                    <tr>
                        <td style="text-align: center;"><?= $i; ?></td>
                        <td><?= $row['nama'] ?></td>
                        <td><?= $row['tgl_awal_sewa'] ?></td>
                        <td><?= $row['tgl_akhir_sewa'] ?></td>
                        <td style="text-align: center;"><a href="detail_pasien.php?id=<?= $row['id'] ?>"><button class="detail-button">Detail</button></a></td>
                    </tr>
                    <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>