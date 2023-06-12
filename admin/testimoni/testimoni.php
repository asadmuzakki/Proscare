<?php 
require "../../loginProscare/koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="testimoni.css">
    <title>Testimoni</title>
</head>
<body>
    
    <div class="navbar">
        <a href="../home/home.html"><img src="../assets/Menu/logo.png" alt="" style="height: 60px;"></a>

        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Menu</a></li>
            <li><a href="#">Profile</a></li>
        </ul>

    </div>

    <div class="content">

        <div class="container">
            
            <h1 class="actor">Testimoni</h1>
    
            <table>
                <thead>
                    <tr>
                        <th style="text-align: center;">No</th>
                        <th>Feedback</th>
                        <th>Rating</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
            
                <tbody>
                    <tr>
                        <td style="text-align: center;">1</td>
                        <td>Saya suka</td>
                        <td>Bintang 5</td>
                        <td style="text-align: center;">
                            <a href="../testimoni/detail_testimoni.php"><button class="detail-button">Detail</button></a>
                            <a href=""><button class="delete-button">Hapus</button></a>
                        </td>
                    </tr>
                    <tr>
                        <td style="text-align: center;">2</td>
                        <td>Saya suka</td>
                        <td>Bintang 5</td>
                        <td style="text-align: center;">
                            <a href=""><button class="detail-button">Detail</button></a>
                            <a href=""><button class="delete-button">Hapus</button></a>
                        </td>
                    </tr>
                    <tr>
                        <td style="text-align: center;">3</td>
                        <td>Saya suka</td>
                        <td>Bintang 5</td>
                        <td style="text-align: center;">
                            <a href=""><button class="detail-button">Detail</button></a>
                            <a href=""><button class="delete-button">Hapus</button></a>
                        </td>
                    </tr>
                
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>