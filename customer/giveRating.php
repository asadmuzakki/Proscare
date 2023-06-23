<?php
require "../loginProscare/koneksi.php";
$id = $_SESSION['idCustomer'];
if(isset($_POST['submit'])){
   $perawat = $_POST['perawat'];
   $rating = $_POST['rating'];
   $feedback = $_POST['feedback'];
   $sql = "INSERT INTO testimoni VALUE('', '$rating', '$feedback', '$perawat', '$id')";
   mysqli_query($koneksi, $sql);
   echo "<script>
            alert('Terimakasih Atas Feedback Anda!');
            document.location.href = 'menu.php';
         </script>";
}
?>