<?php 
require "../loginProscare/koneksi.php";
if(!isset($_SESSION['customer'])){
    header("Location: ../loginProscare/index.php");
    exit;
 }
$idCustomer = $_SESSION['idCustomer'];
$id = $_GET["id"];
$data = query("SELECT * FROM pasien WHERE id = '$id' AND id_customer = '$idCustomer'")[0];
if($data['jenis_treatment'] === 'Small'){
    $price = 50000;
}elseif ($data['jenis_treatment'] === 'Medium') {
    $price = 100000;
}elseif($data['jenis_treatment'] === 'Full'){
    $price = 150000;
}
$jumHari = dateDiff($data['tgl_awal_sewa'], $data['tgl_akhir_sewa']);
$totalPrice = $jumHari * $price;
$formattedHarga = 'Rp. ' . number_format($totalPrice, 2, ',', '.');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice</title>
    <link rel="stylesheet" href="css/Invoice.css">
</head>

<body>
    <!-- Navbar -->
    <div class="header">
        <img src="Assets\Proscare Logo.png" alt="logo">
        <ul class="nav">
            <li><a href="Homepage.php"> Home </a></li>
            <li><a href="menu.php"> Menu </a></li>
            <li><a href="#"> Pembayaran </a></li>
            <li><a href="#"> Profile </a></li>
            <li><a href="../loginProscare/logout.php"> Logout </a></li>
        </ul>
    </div>
<form action="pembayaran.php" method="post" enctype="multipart/form-data">
    <div class="container">
        <div class="title">
            <p>Pembayaran via Virtual Account</p>
            <img src="Assets/BNI.png" alt="BNI">
        </div>
        
        <div class="va">
            <label>Nomor Virtual Account : </label>
            <h2>171102050301</h2>
        </div>
        
        <div class="va">
            <label for="">Status Pembayaran : </label>
            <h2>Belum di Bayar</h2>
            <input type="hidden" name="status", value="Belum Valid">
        </div>
        
        <div class="va">
            <label for="">Total Pembayaran : </label>
            <h2><?= $formattedHarga ?></h2>
            <input type="hidden" name="price", value="<?= $totalPrice ?>">
        </div>
        
        <div class="verif">
            <label for="">Upload Bukti Bayar : </label>
            <div class="border">
                <input type="file" name="gambar">
            </div>
        </div>
        <button type="submit" class="button" name="submit">Submit</button>
    </div>
</form>
    
    <!-- Footer -->
    <div class="bottom">
        <p>copyright &copy;2023 ProsCare</p>
    </div>
</body>

</html>