<?php
include 'koneksi.php';
if ($_POST['Simpan']) {
  $direktori = "../images/";
  $file_name = $_FILES['gambar']['name'];
  move_uploaded_file($_FILES['gambar']['tmp_name'], $direktori . $file_name);

  mysqli_query($koneksi, "INSERT INTO bukutbl (gambar) VALUES ('$file_name')");
  echo "File berhasil di upload";
}
?>
