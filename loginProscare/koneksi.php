<?php
session_start();
// $koneksi = mysqli_connect("localhost", "root", "", "db_proscare");
$koneksi = mysqli_connect("localhost", "root", "", "proscare");

function query($query)
{
   global $koneksi;

   $result = mysqli_query($koneksi, $query);
   $rows = [];
   while ($row = mysqli_fetch_assoc($result)) {
      $rows[] = $row;
   }
   return $rows;
}
// admin hapus
function hapus_perawat($id){
   global $koneksi;
   // mysqli_query($koneksi, "DELETE p, s FROM perawat as p JOIN status_ketidaktersediaan as s WHERE p.id = s.id_perawat AND p.id = $id");
   mysqli_query($koneksi, "DELETE FROM perawat WHERE id = $id");
   return mysqli_affected_rows($koneksi);
}
function hapus_customer($id){
   global $koneksi;
   mysqli_query($koneksi, "DELETE FROM customer WHERE id = $id");
   return mysqli_affected_rows($koneksi);
}
function hapus_testimoni($id){
   global $koneksi;
   mysqli_query($koneksi, "DELETE FROM testimoni WHERE no = $id");
   return mysqli_affected_rows($koneksi);
}

// admin nambah dan edit
function tambah_perawat($data){
   global $koneksi;
   
   $username = strtolower($data['username']);
   $password = mysqli_real_escape_string($koneksi, $data['password']);
   $email = $data['email'];
   $nama = $data['nama'];
   $idAdmin = $_SESSION['idAdmin'];
   $result = query("SELECT username FROM perawat WHERE username = '$username'");
   if($result){
      echo "<script>
               alert('username sudah terdaftar');
            </script>";
      return false;
   }

   mysqli_query($koneksi, "INSERT INTO perawat VALUE('', '$nama', '$username', '$password', '$email', '', '', '', '$idAdmin')");
   $idPerawat = mysqli_insert_id($koneksi);

   mysqli_query($koneksi, "INSERT INTO status_ketidaktersediaan VALUE('', '', '$idPerawat')");
   return mysqli_affected_rows($koneksi);
}

function edit_perawat($data){
   global $koneksi;
   
   $username = strtolower($data['username']);
   $password = mysqli_real_escape_string($koneksi, $data['password']);
   $email = $data['email'];
   $nama = $data['nama'];

   // $idAdmin = $_SESSION['idAdmin'];
   $result = query("SELECT username FROM perawat WHERE username = '$username'");
   $id = $data['id'];
   if($result){
      echo "<script>
               alert('username sudah terdaftar');
            </script>";
      return false;
   }
   $sql = "UPDATE perawat SET nama = '$nama', username = '$username', password = '$password', email = '$email' WHERE id = $id";
   mysqli_query($koneksi, $sql);

   return mysqli_affected_rows($koneksi);
}

// admin validasi
function validasi($id){
   global $koneksi;
   $sql = "UPDATE transaksi SET status_pembayaran = 'Valid' WHERE no = $id";
   mysqli_query($koneksi, $sql);
   return mysqli_affected_rows($koneksi);
}

// edit profile
function edit_customer($data){
   global $koneksi;

   $nama = $data['nama'];
   $username = $data['username'];
   $password = $data['password'];
   $email = $data['email'];
   $phone = $data['phone'];
   $gambarLama = $data['gambarLama'];
   $id = $data['id'];

   // cek pilih gambar baru apa tidak
   if($_FILES['gambar']['error'] === 4) {
      $gambar = $gambarLama;
   }else{
      $gambar = upload();
   }
   $sql = "UPDATE customer SET nama = '$nama', username = '$username', password = '$password', email = '$email', no_telp = '$phone', photo = '$gambar' WHERE id = $id";
   mysqli_query($koneksi, $sql);

   return mysqli_affected_rows($koneksi);
}

function edit_admin($data){
   global $koneksi;

   $nama = $data['nama'];
   $username = $data['username'];
   $password = $data['password'];
   $email = $data['email'];
   $gambarLama = $data['gambarLama'];
   $id = $data['id'];

   // cek pilih gambar baru apa tidak
   if($_FILES['gambar']['error'] === 4) {
      $gambar = $gambarLama;
   }else{
      $gambar = upload();
   }
   $sql = "UPDATE admin SET nama = '$nama', username = '$username', password = '$password', email = '$email', photo = '$gambar' WHERE id = $id";
   mysqli_query($koneksi, $sql);

   return mysqli_affected_rows($koneksi);
}

function edit_profilePerawat($data){
   global $koneksi;

   $nama = $data['nama'];
   $username = $data['username'];
   $password = $data['password'];
   $email = $data['email'];
   $gambarLama = $data['gambarLama'];
   $cvLama = $data['cvLama'];
   $phone = $data['phone'];
   $id = $data['id'];
   $status = $data['cek'];

   // cek pilih gambar baru apa tidak
   if($_FILES['cv']['error'] === 4) {
      $cv = $cvLama;
   }else{
      $cv = upload_cv();
   }
   // cek pilih cv baru apa tidak
   if($_FILES['gambar']['error'] === 4) {
      $gambar = $gambarLama;
   }else{
      $gambar = upload();
   }
   $sql = "UPDATE perawat
   JOIN status_ketidaktersediaan ON perawat.id = status_ketidaktersediaan.id_perawat AND perawat.id = $id
   SET perawat.nama = '$nama',
       perawat.username = '$username',
       perawat.email = '$email',
       perawat.password = '$password',
       perawat.no_telp = '$phone',
       perawat.photo = '$gambar',
       perawat.cv = '$cv',
       status_ketidaktersediaan.status = '$status'
   WHERE perawat.id = '$id'
     AND status_ketidaktersediaan.id_perawat = '$id';
   ";
   mysqli_query($koneksi, $sql);

   return mysqli_affected_rows($koneksi);
}

// registrasi customer
function registrasi($data)
{
   global $koneksi;
   $username = strtolower($data['username']);
   $password = mysqli_real_escape_string($koneksi, $data['password']);
   $email = $data['email'];
   $nama = $data['name'];

   // cek user kembar
   $result = mysqli_query($koneksi, "SELECT username FROM customer WHERE username = '$username'");
   if (mysqli_fetch_assoc($result)) {
      echo "<script>
               alert('username sudah terdaftar');
            </script>";
      return false;
   }

   // encript password
   // $password = password_hash($password, PASSWORD_DEFAULT);

   // tambah user
   mysqli_query($koneksi, "INSERT INTO customer VALUE('', '$nama', '$username', '$password', '$email', '', '', '1')");

   return mysqli_affected_rows($koneksi);
}



function transaksi($data){
   global $koneksi;
   $date = date("Y-m-d");
   $gambar = uploadBukti();
   $status = $_POST["status"];
   $price = $_POST["price"];
   $idCustomer = $_SESSION['idCustomer'];
   // var_dump($gambar); die;
   mysqli_query($koneksi, "INSERT INTO transaksi VALUE('', '$date', '$price', '$gambar', '$status', '1', '$idCustomer')");
   return mysqli_affected_rows($koneksi);
}
function uploadBukti()
{
   $namaFile = $_FILES['gambar']['name'];
   $ukuranFile = $_FILES['gambar']['size'];
   $error = $_FILES['gambar']['error'];
   $tempName = $_FILES['gambar']['tmp_name'];

   // cek apakah tidak ada gambar yang di uploud
   if ($error === 4) {
      echo "<script>
               alert('pilih gambar dahulu');
            </script>";
      return false;
   }
   
   // hanya uploud gambar
   $ekstenGambarValid = ['jpg', 'jpeg', 'png'];
   $ekstenGambar = explode('.', $namaFile);
   $ekstenGambar = strtolower(end($ekstenGambar));
   if(!in_array($ekstenGambar, $ekstenGambarValid)){
      echo "<script>
               alert('yang diupload bukan gambar');
            </script>";
      return false;
   }

   // cek jika ukuran terlalu besar
   if($ukuranFile > 10000000){
      echo "<script>
               alert('ukuran gambar terlalu besar');
            </script>";
      return false;
   }

   // uploud file
   // generate nama file baru
   $namaFileBaru = uniqid();
   $namaFileBaru .= '.';
   $namaFileBaru .= $ekstenGambar;
   move_uploaded_file($tempName, '../Asset/image/'. $namaFileBaru);

   return $namaFileBaru;
}
function upload()
{
   $namaFile = $_FILES['gambar']['name'];
   $ukuranFile = $_FILES['gambar']['size'];
   $error = $_FILES['gambar']['error'];
   $tempName = $_FILES['gambar']['tmp_name'];

   // cek apakah tidak ada gambar yang di uploud
   if ($error === 4) {
      echo "<script>
               alert('pilih gambar dahulu');
            </script>";
      return false;
   }
   
   // hanya uploud gambar
   $ekstenGambarValid = ['jpg', 'jpeg', 'png'];
   $ekstenGambar = explode('.', $namaFile);
   $ekstenGambar = strtolower(end($ekstenGambar));
   if(!in_array($ekstenGambar, $ekstenGambarValid)){
      echo "<script>
               alert('yang diupload bukan gambar');
            </script>";
      return false;
   }

   // cek jika ukuran terlalu besar
   if($ukuranFile > 10000000){
      echo "<script>
               alert('ukuran gambar terlalu besar');
            </script>";
      return false;
   }

   // uploud file
   // generate nama file baru
   $namaFileBaru = uniqid();
   $namaFileBaru .= '.';
   $namaFileBaru .= $ekstenGambar;
   move_uploaded_file($tempName, '../../Asset/image/'. $namaFileBaru);

   return $namaFileBaru;
}
function upload_cv()
{
   $namaFile = $_FILES['cv']['name'];
   $ukuranFile = $_FILES['cv']['size'];
   $error = $_FILES['cv']['error'];
   $tempName = $_FILES['cv']['tmp_name'];

   // cek apakah tidak ada cv yang di uploud
   if ($error === 4) {
      echo "<script>
               alert('pilih cv dahulu');
            </script>";
      return false;
   }
   
   // hanya uploud cv
   $ekstenCvValid = ['pdf'];
   $ekstenCv = explode('.', $namaFile);
   $ekstenCv = strtolower(end($ekstenCv));
   if(!in_array($ekstenCv, $ekstenCvValid)){
      echo "<script>
               alert('yang diuploud bukan pdf');
            </script>";
      return false;
   }

   // cek jika ukuran terlalu besar
   if($ukuranFile > 100000000){
      echo "<script>
               alert('ukuran pdf terlalu besar');
            </script>";
      return false;
   }

   // uploud file
   // generate nama file baru
   $namaFileBaru = uniqid();
   $namaFileBaru .= '.';
   $namaFileBaru .= $ekstenCv;
   move_uploaded_file($tempName, '../../Asset/cv/'. $namaFileBaru);

   return $namaFileBaru;
}

function dateDiff($date1, $date2) {
   $datetime1 = new DateTime($date1);
   $datetime2 = new DateTime($date2);
   $interval = $datetime1->diff($datetime2);
   return $interval->days;
}
?>