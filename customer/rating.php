<?php 
require "../loginProscare/koneksi.php";
if(!isset($_SESSION['customer'])){
    header("Location: ../loginProscare/index.php");
    exit;
 }
$id = $_SESSION['idCustomer'];
$data = query("SELECT * FROM pasien JOIN perawat ON pasien.id_perawat = perawat.id WHERE pasien.id_customer = $id");
$transaksi = query("SELECT transaksi.status_pembayaran, transaksi.id_customer FROM transaksi WHERE transaksi.id_customer IN (SELECT pasien.id_customer FROM pasien WHERE pasien.id_perawat IN (SELECT perawat.id FROM perawat WHERE perawat.id IN (SELECT pasien.id_perawat FROM pasien WHERE pasien.id_customer = $id)))");
$perawat = query("SELECT perawat.id, perawat.nama, pasien.id_customer FROM perawat JOIN pasien ON perawat.id = pasien.id_perawat WHERE pasien.id_customer = $id");
// var_dump($perawat); die;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rating</title>
    <link rel="stylesheet" href="css/Rating.css">
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css"
        integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous">
</head>

<body>
    <!-- Navbar -->
    <div class="header">
        <img src="Assets\Proscare Logo.png" alt="logo">
        <ul class="nav">
            <li><a href="Homepage.php"> Home </a></li>
            <li><a href="menu.php"> Menu </a></li>
            <li><a href="riwayat customer.php"> Riwayat </a></li>
            <li><a href="../Profile/profileCustomer.php"> Profile </a></li>
            <li><a href="../loginProscare/logout.php"> Logout </a></li>
        </ul>
    </div>
    <form action="giveRating.php" method="post">
        <div class="container">
            <div class="title">
                <p>Rating</p>
            </div>

            <div class="va">
                <label>Pilih Perawat</label>
                <div class="contract-box">
                    <select name="perawat">
                        <option hidden>Pilih Perawat</option>

                            <?php foreach($transaksi as $transaks): ?>
                                
                                    <?php foreach($perawat as $p): ?>
                                        <?php if($transaks['status_pembayaran'] === 'Valid' && $p['id_customer'] === $transaks['id_customer']) :?>
                                        <option value="<?= $p['id'] ?>"><?= $p['nama'] ?></option>
                                            <?php endif;?>
                                    <?php endforeach ?>
                            <?php endforeach; ?>

                    </select>
                </div>
            </div>

            <div class="star">
                <div class="rating-wrap">
                    <div class="label">
                        <label>Rating</label>
                    </div>
                    <div class="center">
                        <div class="rating">
                            <input type="radio" id="star5" name="rating" value="5" /><label for="star5" class="full"
                                title="Awesome"></label>
                            <input type="radio" id="star4" name="rating" value="4" /><label for="star4"
                                class="full"></label>
                            <input type="radio" id="star3" name="rating" value="3" /><label for="star3"
                                class="full"></label>
                            <input type="radio" id="star2" name="rating" value="2" /><label for="star2"
                                class="full"></label>
                            <input type="radio" id="star1" name="rating" value="1" /><label for="star1"
                                class="full"></label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="verif">
                <label for="">Feedback: </label>
                <textarea name="feedback"></textarea>
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