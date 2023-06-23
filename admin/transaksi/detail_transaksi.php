<?php 
require "../../loginProscare/koneksi.php";
if(!isset($_SESSION['admin'])){
    header("Location: ../../loginProscare/index.php");
    exit;
 }
$id = $_GET['id'];
$data = query("SELECT * FROM transaksi JOIN customer ON transaksi.id_customer = customer.id WHERE transaksi.no = $id")[0];
// var_dump($data); die;
$price = $data['nominal'];
$formattedHarga = 'Rp. ' . number_format($price, 2, ',', '.');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="detail.css">
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>

    <title>Detail Transaksi</title>
</head>
<body>
    
    <div class="navbar">
        <a href="home.html"><img src="../assets/Menu/logo.png" alt="" style="height: 60px;"></a>

        <ul class="nav">
            <li><a href="../../customer/Homepage.php"> Home </a></li>
            <li><a href="../../admin/home/menuadmin.php"> Menu </a></li>
            <li><a href="../../Profile/profileAdmin.php"> Profile </a></li>
        </ul>

    </div>

    <div class="content">
        <div class="card">
            <h1>Detail Transaksi</h1>
            <div class="container">
                <div class="details">
                    <p style="font-weight: bold;">No Transaksi</p>
                    <p><?= $data['no'] ?></p>
                    <p style="font-weight: bold;">Nama Customer</p>
                    <p><?= $data['nama'] ?></p>
                    <p style="font-weight: bold;">Tanggal Bayar</p>
                    <p><?= $data['tgl_bayar'] ?></p>
                    <p style="font-weight: bold;">Bukti Bayar</p>
                    <a href="../../Asset/image/<?= $data['bukti_bayar'] ?>">Bukti Bayar</a>
                    <p style="font-weight: bold;">Nominal</p>
                    <p><?= $formattedHarga ?></p>
                </div>
            </div>
        </div>
    </div>

</body>
</html>