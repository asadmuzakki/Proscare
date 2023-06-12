<?php 
require "../loginProscare/koneksi.php";
$id = $_SESSION['idPerawat'];
$data = query("SELECT * FROM perawat INNER JOIN status_ketidaktersediaan ON perawat.id = $id AND status_ketidaktersediaan.id_perawat = $id")[0];
if($data['photo'] === null){
    $photo = "nophoto.png";
}else{
    $photo = $data['photo'];
}
if($data['cv'] === null){
    $cv = "no cv.pdf";
}else{
    $cv = $data['cv'];
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
    <title>Profile</title>
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
    <form action="controller/editPerawat.php" method="post" enctype="multipart/form-data">
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
                        <p style="font-weight: bold;">No Telp : </p>
                        <input type="text" value="<?= $data['no_telp'] ?>" name="phone">
                        <p style="font-weight: bold;">Uploud CV : </p>
                        <input type="hidden" name="cvLama", value="<?= $cv ?>">
                        <input type="file" name="cv">
                        <p style="font-weight: bold;">Ubah Status Ketersediaan : </p>
                        <div class="stat">
                            <input type="radio" id="t" name="cek" value="tersedia">
                            <label for="t">Tersedia</label>
                            <input type="radio" id="f" name="cek" value="tidak tersedia">
                            <label for="f">Tidak Tersedia</label>
                        </div>
                    </div>
                </div>
                <button type="submit" class="button" name="submit">Save</button>
            </div>
        </div>
    </form>

</body>

</html>