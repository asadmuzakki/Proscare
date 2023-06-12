<?php
require "func.php";
// require "loginProscare/koneksi.php";
// "SELECT DATEDIFF(year, '2017/08/25', '2011/08/25')";
// $data = mysqli_query($koneksi, "SELECT DATEDIFF(year, '2017/08/25', '2011/08/25')");
// var_dump($data);
$date1 = "2021-01-01";
$date2 = "2021-01-05";
$diff = date_diff_in_days($date1, $date2);
echo "The difference between $date1 and $date2 is $diff days.";

?>