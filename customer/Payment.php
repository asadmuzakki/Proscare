<?php 
require "../loginProscare/koneksi.php";
if(!isset($_SESSION['customer'])){
    header("Location: ../loginProscare/index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Form</title>
    <link rel="stylesheet" href="css/payForm.css">
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
</head>

<body>

    <!-- Navbar -->
    <div class="header">
        <img src="Assets\Proscare Logo.png" alt="logo">
        <ul class="nav">
            <li><a href="#"> Home </a></li>
            <li><a href="#"> Menu </a></li>
            <li><a href="#"> Profile </a></li>
        </ul>
    </div>

    <!-- Form -->
    <header>Order Form</header>
    <div class="container">
        <form action="order.php" class="form" method="post">
            <div class="input-data">
                <div class="name-box">
                    <label for="">Full Name</label>
                    <input type="text" placeholder="Enter full name" name="fullname">
                </div>
                <div class="name-box">
                    <label for="">Short Name</label>
                    <input type="text" placeholder="Enter short name" name="shortname">
                </div>
            </div>
            <div class="number-box">
                <label for="">Phone Number</label>
                <input type="text" placeholder="Enter phone number" name="phone">
            </div>
            <div class="number-box">
                <label for="">Birth Date</label>
                <input type="date" name="date">
            </div>
            <div class="gender">
                <p>Gender</p>
                <div class="gender-contain">
                    <div class="gender-box">
                        <input type="radio" id="chek1" name="cheked" value="male">
                        <label for="chek">Male</label>
                    </div>
                    <div class="gender-box">
                        <input type="radio" id="chek2" name="cheked" value="female">
                        <label for="chek">Female</label>
                    </div>
                </div>
            </div>
            <div class="address-box">
                <label for="">Address</label>
                <input type="text" placeholder="Enter address" name="address">
            </div>
            <div class="riwayat">
                <label for="">Riwayat</label>
                <input type="text" name="riwayat">
            </div>
            <div class="info">
                <label for="">Informasi Tambahan</label>
                <input type="text" name="fyi">
            </div>
            <!-- <label for="">Select Contract Time</label> -->
            <div class="contract">
                <div class="date-contract">
                    <div class="boxContract">
                        <label for="">Start Contract</label>
                        <input type="date" placeholder="enter date" name="start">
                    </div>
                    <div class="boxContract">
                        <label for="">End Contract</label>
                        <input type="date" placeholder="enter date" name="end">
                    </div>
                </div>
        
                <label for="">Select Treatment</label>
                <div class="contract-box">
                    <select name="treat">
                        <option hidden value="">Select treatmen</option>
                        <option value="small">Small Treatment</option>
                        <option value="medium">Medium Treatment</option>
                        <option value="full">Full Treatment</option>
                    </select>
                </div>
            </div>
            <div class="order">
                <button type="submit" name="order">Order</button>
            </div>
    </div>
    </form>

    <!-- Footer -->
    <footer>
        <div class="footer">
            <h3>Proscare</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem nostrum soluta vel laboriosam cum
                inventore tempore? Dolores, optio. Architecto adipisci nemo reprehenderit voluptates dolorem earum
                tenetur numquam dolore quia sint.</p>
            <ul class="social">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-google"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
            </ul>
        </div>
        <div class="bottom">
            <p>copyright &copy;2023 ProsCare</p>
        </div>
    </footer>
</body>

</html>