<?php
require "koneksi.php";
if (isset($_SESSION["customer"])) {
   header("Location: ../customer/menu.php");
   exit;
}
if (isset($_SESSION["admin"])) {
   header("Location: ../admin/home/menuadmin.php");
   exit;
}
if (isset($_SESSION["perawat"])) {
   header("Location: ../perawat/menu.php");
   exit;
}
if (isset($_POST["login"])) {
   $username = $_POST["user"];
   $password = $_POST["pass"];

   // login customer
   $result = mysqli_query($koneksi, "SELECT * FROM customer WHERE username = '$username'");

   // cek username
   if (mysqli_num_rows($result) === 1) {
      // cek password
      $row = mysqli_fetch_assoc($result);
      if ($password === $row['password']) {
         // set session
         $_SESSION["customer"] = true;
         $_SESSION['idCustomer'] = $row['id'];
         header("Location: ../customer/menu.php");
         exit;
      }
   }

   // login admin
   $result2 = mysqli_query($koneksi, "SELECT * FROM admin WHERE username = '$username'");
   // cek username
   if (mysqli_num_rows($result2) === 1) {
      // cek password
      $row2 = mysqli_fetch_assoc($result2);
      if ($password === $row2['password']) {
         // set session
         $_SESSION["admin"] = true;
         $_SESSION['idAdmin'] = $row2['id'];
         header("Location: ../admin/home/menuadmin.php");
         exit;
      }
   }

   // login perawat
   $result3 = mysqli_query($koneksi, "SELECT * FROM perawat WHERE username = '$username'");
   // cek username
   if (mysqli_num_rows($result3) === 1) {
      // cek password
      $row3 = mysqli_fetch_assoc($result3);
      if ($password === $row3['password']) {
         // set session
         $_SESSION["perawat"] = true;
         $_SESSION['idPerawat'] = $row3['id'];
         header("Location: ../perawat/menu.php");
         exit;
      }
   }

   // jika user ataupun pass salah
   $error = true;
   if(isset($error)){
      header("Location: index.php");
      exit;
   }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
  <link rel="stylesheet" href="style.css" />
  <title>Sign in & Sign up Form</title>
</head>

<body>
  <div class="container">
    <div class="forms-container">
      <div class="signin-signup">
        <form action="" method="POST" class="sign-in-form">
          <img class="image-logo" src="img/logo web.png" alt="">
          <h2 class="title">Sign in</h2>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Username" name="user" />
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Password" name="pass" />
          </div>
          <input type="submit" value="Login" class="btn solid" name="login" />
          <p class="social-text">Or Sign in with social platforms</p>
          <div class="social-media">
            <a href="#" class="social-icon">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-google"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-linkedin-in"></i>
            </a>
          </div>
        </form>
        <form action="signUp.php" method="POST" class="sign-up-form">
          <img class="image-logo" src="img/logo web.png" alt="">
          <h2 class="title">Sign up</h2>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Name" name="name" />
          </div>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Username" name="username" />
          </div>
          <div class="input-field">
            <i class="fas fa-envelope"></i>
            <input type="email" placeholder="Email" name="email" />
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Password" name="password" />
          </div>
          <input type="submit" class="btn" value="Sign up" name="signUp" />
          <p class="social-text">Or Sign up with social platforms</p>
          <div class="social-media">
            <a href="#" class="social-icon">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-google"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-linkedin-in"></i>
            </a>
          </div>
        </form>
      </div>
    </div>

    <div class="panels-container">
      <div class="panel left-panel">
        <div class="content">
          <h3>New here ?</h3>
          <p>
            Click button below to create a new account
          </p>
          <button class="btn transparent" id="sign-up-btn">
            Sign up
          </button>
        </div>
        <img src="img/login3.png" class="image" alt="" />
      </div>
      <div class="panel right-panel">
        <div class="content">
          <h3>One of us ?</h3>
          <p>
            Click button below to login
          </p>
          <button class="btn transparent" id="sign-in-btn">
            Sign in
          </button>
        </div>
        <img src="img/login.png" class="image" alt="" />
      </div>
    </div>
  </div>
  <script>
    feather.replace()
  </script>
  <script src="app.js"></script>
</body>

</html>