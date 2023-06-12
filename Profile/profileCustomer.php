<?php 
require "../loginProscare/koneksi.php";
$id = $_SESSION['idCustomer'];
$data = query("SELECT * FROM customer WHERE id = '$id'")[0];
if($data['no_telp'] === ""){
    $temp = "-";
}else{
    $temp = $data['no_telp'];
}
if($data['photo'] === ""){
    $photo = "nophoto.png";
}else{
    $photo = $data['photo'];
}
?>
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
            <li><a href="../loginProscare/logout.php">Logout</a></li>
        </ul>

    </div>
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
                    <p style="font-weight: bold;">No Telpon</p>
                    <p><?= $temp ?></p>
                    <p style="font-weight: bold;">Email</p>
                    <p><?= $data['email'] ?></p>
                </div>
            </div>
            <button type="submit" class="button"><a href="editProfile.php">Edit</a></button>
        </div>
    </div>
    
</body>
</html>