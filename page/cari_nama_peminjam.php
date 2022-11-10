<?php
include "koneksi.php";

$result = mysqli_query(
  $koneksi,
  "SELECT * FROM peminjamtbl where kode_peminjam ='$_POST[kode]'"
);
$found = mysqli_num_rows($result);

if ($found > 0) {
  while ($row = mysqli_fetch_array($result)) {
    echo $row['nama_peminjam'];
  }
} else {
  echo "";
}
?>
