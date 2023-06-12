<?php 
require "../loginProscare/koneksi.php";
$id = $_SESSION['idPerawat'];
// SELECT * FROM perawat INNER JOIN status_ketidaktersediaan ON perawat.id = 1 AND status_ketidaktersediaan.id_perawat = 1;
$data = query("SELECT * FROM perawat INNER JOIN status_ketidaktersediaan ON perawat.id = $id AND status_ketidaktersediaan.id_perawat = $id")[0];
// var_dump($data); die;
if($data['no_telp'] === null){
    $temp = "-";
}else{
    $temp = $data['no_telp'];
}
if($data['photo'] === null){
    $photo = "nophoto.png";
}else{
    $photo = $data['photo'];
}
if($data['status'] === ""){
    $status = "-";
}else{
    $status = $data['status'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/detail.css">
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <title>Detail Customer</title>
</head>
<body>
    
    <div class="navbar">
        <a href="#"><img src="../loginProscare/img/logo web.png" alt="" style="height: 60px;"></a>

        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Menu</a></li>
            <li><a href="#">Profile</a></li>
        </ul>

    </div>
<form action="editProfilePerawat.php" method="post">
    <div class="content">
        <div class="card">
            <h1>Profile</h1>
            <div class="container">
                <div class="area">
                    <img src="../Asset/image/<?= $photo ?>" alt="profile-photo" style="width: auto; height: 180px;">
                </div>
                <div class="details">
                    <p style="font-weight: bold;">Nama</p>
                    <p><?= $data['nama'] ?></p>
                    <p style="font-weight: bold;">Username</p>
                    <p><?= $data['username'] ?></p>
                    <p style="font-weight: bold;">No Telp</p>
                    <p><?= $temp ?></p>
                    <p style="font-weight: bold;">Email</p>
                    <p><?= $data['email'] ?></p>
                    <p style="font-weight: bold;">Status Ketersediaan</p>
                    <p><?= $status ?></p>
                </div>
            </div>
            <button type="submit" class="button">Edit</button>
        </div>
    </div>
</form>
    
</body>
</html>