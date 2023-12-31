<?php 
require "../../loginProscare/koneksi.php";
// session_start();
if(!isset($_SESSION['admin'])){
    header("Location: ../../loginProscare/index.php");
    exit;
}
$perawat = query("SELECT * FROM perawat");
foreach($perawat as $row){
    if($row['cv'] === ""){
        $cv = "no cv.pdf";
    }else{
        $cv = $row['cv'];
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="perawat.css">
    <title>Data Perawat</title>
</head>
<body>
    
    <div class="navbar">
        <a href="#"><img src="../assets/Menu/logo.png" alt="" style="height: 60px;"></a>

        <ul class="nav">
            <li><a href="../../customer/Homepage.php"> Home </a></li>
            <li><a href="../../admin/home/menuadmin.php"> Menu </a></li>
            <li><a href="../../Profile/profileAdmin.php"> Profile </a></li>
            <li><a href="../../loginProscare/logout.php"> Logout </a></li>
        </ul>

    </div>

    <div class="content">

        <div class="container">

            <h1 class="actor">Perawat</h1>
    
            <button onclick="window.location.href='tambah/tambah_perawat.php'" class="add-button">Tambah</button>
            <table>
                <thead>
                    <tr>
                        <th style="text-align: center;">No</th>
                        <th>Nama</th>
                        <th>CV</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
            
                <tbody>
                    <?php $i=1; ?>
                    <?php foreach ($perawat as $row) : ?>
                    <tr>
                        <td style="text-align: center;"><?= $i ?></td>
                        <td><?= $row['nama'] ?></td>
                        <td><a href="../../Asset/cv/<?= $cv ?>">CV</a></td>
                        <td style="text-align: center;">
                            <a href="../perawat/detail_perawat.php?id=<?= $row['id'] ?>"><button class="detail-button">Detail</button></a>
                            <a href="../perawat/edit_perawat.php?id=<?= $row['id'] ?>"><button class="edit-button">Edit</button></a>
                            <a href="../../loginProscare/hapus.php?id=<?= $row['id']?>"><button class="delete-button">Hapus</button></a>
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