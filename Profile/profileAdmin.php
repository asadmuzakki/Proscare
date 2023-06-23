<?php 
require "../loginProscare/koneksi.php";
if(!isset($_SESSION['admin'])){
    header("Location: ../loginProscare/index.php");
    exit;
 }
$id = $_SESSION['idAdmin'];
$data = query("SELECT * FROM admin WHERE id = '$id'")[0];
if($data['photo'] === null){
    $photo = "nophoto.png";
}else{
    $photo = $data['photo'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/profileAdmin.css">
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <title>Profile Admin</title>
</head>
<body>
    
    <div class="navbar">
        <a href="#"><img src="../loginProscare/img/logo web.png" alt="" style="height: 60px;"></a>

        <ul class="nav">
            <li><a href="../customer/Homepage.php"> Home </a></li>
            <li><a href="../admin/home/menuadmin.php"> Menu </a></li>
            <li><a href="../Profile/profileAdmin.php"> Profile </a></li>
            <li><a href="../loginProscare/logout.php"> Logout </a></li>
        </ul>

    </div>
    <form action="EditProfileAdmin.php">
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
                    <p style="font-weight: bold;">Email</p>
                    <p><?= $data['email'] ?></p>
                </div>
            </div>
            <button type="submit" class="button">Edit</button>
        </div>
    </div>
    </form>
    
</body>
</html>