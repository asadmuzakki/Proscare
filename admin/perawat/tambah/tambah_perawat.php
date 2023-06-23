<?php 
require "../../../loginProscare/koneksi.php";
if(!isset($_SESSION['admin'])){
    header("Location: ../../../loginProscare/index.php");
    exit;
 }
if (isset($_POST["submit"])) {
    if (tambah_perawat($_POST) > 0) {
       echo "<script>
                 alert('user baru berhasil ditambahkan!');
               </script>";
       header("Location: ../../perawat/data_perawat.php");
       exit;
    } else {
       echo mysqli_error($koneksi);
       header("Location: tambah_perawat.php");
       exit;
    }
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="tambah.css">
    <title>Tambah Perawat</title>
</head>
<body>
    
    <div class="navbar">
        <a href="../../home/home.html"><img src="../../assets/Menu/logo.png" alt="" style="height: 60px;"></a>

        <ul>
            <li><a href="../../../customer/Homepage.php">Home</a></li>
            <li><a href="../../../admin/home/menuadmin.php">Menu</a></li>
            <li><a href="../../../profile/profileAdmin.php">Profile</a></li>
            <li><a href="../../../loginProscare/logout.php"> Logout </a></li>
        </ul>

    </div>

    <div class="content">
        <h1>Tambah Data Perawat</h1>
        <div class="card">
            <form action="" method="post">
                <label for="nama">Nama</label>
                <input type="text" name="nama">

                <label for="email">Email</label>
                <input type="text" name="email">
    
                <label for="username">Username</label>
                <input type="text" name="username">
    
                <label for="password">Password</label>
                <input type="password" name="password">
    
                <input type="submit" value="Submit" class="btn-submit" name="submit">
            </form>
        </div>   
    </div>


</body>
</html>