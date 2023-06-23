<?php 
require "../loginProscare/koneksi.php";
if(!isset($_SESSION['customer'])){
    header("Location: ../loginProscare/index.php");
    exit;
 }
$id = $_SESSION['idCustomer'];
$data = query("SELECT * FROM customer WHERE id = '$id'")[0];
if($data['photo'] === ""){
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

    <link rel="stylesheet" href="css/editProfile.css">
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <title>Edit Profile</title>
</head>
<body>
    
    <div class="navbar">
        <a href="#"><img src="../loginProscare/img/logo web.png" alt="" style="height: 60px;"></a>

        <ul class="nav">
            <li><a href="../customer/Homepage.php"> Home </a></li>
            <li><a href="../customer/Menu.php"> Menu </a></li>
            <li><a href="../customer/rating.php"> Rating </a></li>
            <li><a href="../Profile/profileCustomer.php"> Profile </a></li>
            <li><a href="../loginProscare/logout.php"> Logout </a></li>
        </ul>

    </div>
<form action="controller/editCustomer.php" method="post" enctype="multipart/form-data">
    <div class="content">
        <div class="card">
            <h1>Detail Customer</h1>
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
                    <p style="font-weight: bold;">Password : </p>
                    <input type="text" value="<?= $data['password'] ?>" name="password">
                    <p style="font-weight: bold;">No Telp : </p>
                    <input type="text" value="<?= $data['no_telp'] ?>" name="phone">
                    <p style="font-weight: bold;">Email : </p>
                    <input type="text" value="<?= $data['email'] ?>" name="email">
                </div>
            </div>
            <button type="submit" class="button" name="submit">Save</button>
        </div>
    </div>
</form>
    
</body>
</html>