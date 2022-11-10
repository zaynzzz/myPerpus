<?php
include "koneksi.php";
$kode = $_POST["kode"];

$result = mysqli_query(
  $koneksi,
  "SELECT * FROM bukutbl where kode_buku ='$kode'"
);
$found = mysqli_num_rows($result);

if ($found > 0) {
  $row = mysqli_fetch_array($result);
  echo $row['judul_buku'];
} else {
  echo "";
}
?>
