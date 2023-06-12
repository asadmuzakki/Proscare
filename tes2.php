<?php 
require "func.php";
if(isset($_POST['submit'])){
   if(add($_POST) > 0){
      echo "<script>
               alert('berhasil');
            </script>";
   }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>tes nyimpen real date</title>
</head>
<body>
   <form action="" method="post">
      <input type="text" name="nama" placeholder="nama">
      <input type="submit" name="submit" placeholder="Submit">
   </form>
</body>
</html>