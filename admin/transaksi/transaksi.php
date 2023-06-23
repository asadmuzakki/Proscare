<?php 
require "../../loginProscare/koneksi.php";
if(!isset($_SESSION['admin'])){
    header("Location: ../../loginProscare/index.php");
    exit;
 }
$data = query("SELECT * FROM transaksi");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="transaksi.css">
    <title>Transaksi</title>
</head>
<body>
    
    <div class="navbar">
        <a href="../home/home.html"><img src="../assets/Menu/logo.png" alt="" style="height: 60px;"></a>

        <ul class="nav">
            <li><a href="../../customer/Homepage.php"> Home </a></li>
            <li><a href="../../admin/home/menuadmin.php"> Menu </a></li>
            <li><a href="../../Profile/profileAdmin.php"> Profile </a></li>
        </ul>

    </div>

    <div class="content">
        <div class="container">

            <h1 class="actor">Transaksi</h1>
            <table>
                <thead>
                    <tr>
                        <th style="text-align: center;">No</th>
                        <th>Id Transaksi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i=1; ?>
                    <?php foreach ($data as $row) : ?>
                    <tr>
                        <td style="text-align: center;"><?= $i ?></td>
                        <td><?= $row['no'] ?></td>
                        <td style="text-align: center;">
                            <a href="detail_transaksi.php?id=<?= $row['no'] ?>"><button class="detail-button">Detail</button></a>
                            <a href="validasi.php?id=<?= $row['no'] ?>"><button class="validate-button">Validasi</button></a>
                        </td>
                    </tr>
                    <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>