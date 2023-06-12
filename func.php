<?php
$conn = mysqli_connect("localhost", "root", "", "test");

function add($data)
{
   global $conn;

   $nama = $data['nama'];
   $date = date("Y-m-d");

   // insert table user
   $sql = "INSERT INTO user VALUE('', '$nama')";
   mysqli_query($conn, $sql);
   $userId = mysqli_insert_id($conn);

   $sql = "INSERT INTO tes VALUE('', '$date', '$userId')";
   mysqli_query($conn, $sql);

   return mysqli_affected_rows($conn);
}
function date_diff_in_days($date1, $date2) {
   $datetime1 = new DateTime($date1);
   $datetime2 = new DateTime($date2);
   $interval = $datetime1->diff($datetime2);
   return $interval->days;
}

?>