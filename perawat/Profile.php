<?php 
require "../loginProscare/koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="../perawat/Profile.css">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
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

    <div class="container">
        <div class="contentProf">
            <div class="propic">
                <div class="all">
                    <input type="file" id="file" accept="image/*" hidden>
                    <div class="img-area" data-img="">
                        <i class='bx bxs-cloud-upload icon'></i>
                        <h3>Upload Image</h3>
                        <p>Image size must be less than <span>2MB</span></p>
                    </div>
                    <button class="select-image">Select Image</button>
                </div>
            </div>
            
            <div class="profData">
                <form action="" method="POST">
                    <div class="inputan">
                        <div class="name">
                            <label for="nama">Username :</label>
                        </div>
                        <div class="input">
                            <input type="text" id="nama">
                        </div>
                    </div>
                    <div class="inputan">
                        <div class="name">
                            <label for="nama">Display Name :</label>
                        </div>
                        <div class="input">
                            <input type="text" id="nama">
                        </div>
                    </div>
                    <div class="inputan">
                        <div class="name">
                            <label for="nama">Email :</label>
                        </div>
                        <div class="input">
                            <input type="text" id="nama">
                        </div>
                    </div>
                    <div class="inputan">
                        <div class="name">
                            <label for="nama">Phone Number :</label>
                        </div>
                        <div class="input">
                            <input type="text" id="nama">
                        </div>
                        <div class="status">
                            <label for="">Unavailable Status : </label>
                            <div class="inputStat">
                                <input type="date" id="nama">
                                <input type="date" id="nama">
                            </div>
                        </div>
                    </div>
                    <div class="inputan">
                        <button class="submit">save</button>
                    </div>
                </form>

            </div>
        </div>

        <script src="js/script.js"></script>
</body>

</html>