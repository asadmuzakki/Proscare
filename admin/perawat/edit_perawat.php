<?php 
require "../../loginProscare/koneksi.php";
// mengambil id di url
$id = $_GET["id"];

$data = query("SELECT * FROM perawat WHERE id = $id")[0];

if (isset($_POST["submit"])) {
    if (edit_perawat($_POST) > 0) {
       echo "<script>
                 alert('data berhasil diubah');
                 document.location.href = 'data_perawat.php';
               </script>";
    } else {
       echo mysqli_error($koneksi);
       header("Location: data_perawat.php");
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

    <link rel="stylesheet" href="edit.css">
    <title>Edit Perawat</title>
</head>
<body>
    
    <div class="navbar">
        <a href="../home/home.html"><img src="../assets/Menu/logo.png" alt="" style="height: 60px;"></a>

        <ul>
            <li><a href="../../home/home.html">Home</a></li>
            <li><a href="#">Menu</a></li>
            <li><a href="#">Profile</a></li>
        </ul>

    </div>

    <div class="content">
        <h1>Edit Data Perawat</h1>
        <div class="card">
            <form action="" method="post">
                <input type="hidden" name="id", value="<?= $data['id']?>">

                <label for="nama">Nama</label>
                <input type="text" name="nama", value="<?= $data['nama']?>">
    
                <label for="username">Username</label>
                <input type="text" name="username" value="<?= $data['username']?>">
    
                <label for="password">Password</label>
                <input type="password" name="password">
    
                <input type="submit" value="Submit" class="btn-submit" name="submit">
            </form>
        </div>   
    </div>


</body>
</html>