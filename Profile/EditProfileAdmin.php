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

    <link rel="stylesheet" href="css/editProfilePerawat.css">
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <title>Edit Profile Admin</title>
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
    <form action="controller/editAdmin.php" method="post" enctype="multipart/form-data">
        <div class="content">
            <div class="card">
                <h1>Profile</h1>
                <div class="container">
                    <div class="area">
                        <img src="../Asset/image/<?= $photo ?>" alt="profile-photo" style="width: auto; height: 180px;">
                        <input type="file" name="gambar" id="">
                    </div>
                    <div class="details">
                        <input type="hidden" name="gambarLama", value="<?= $photo ?>">
                        <input type="hidden" name="id", value="<?= $data['id'] ?>">
                        <p style="font-weight: bold;">Nama : </p>
                        <input type="text" value="<?= $data['nama'] ?>" name="nama">
                        <p style="font-weight: bold;">Username : </p>
                        <input type="text" value="<?= $data['username'] ?>" name="username">
                        <p style="font-weight: bold;">Email : </p>
                        <input type="text" value="<?= $data['email'] ?>" name="email">
                        <p style="font-weight: bold;">Password : </p>
                        <input type="text" value="<?= $data['password'] ?>" name="password">
                    </div>
                </div>
                <button type="submit" class="button" name="submit">Save</button>
            </div>
        </div>
    </form>

</body>

</html>