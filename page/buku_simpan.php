<?php
require "koneksi.php";
if ($_FILES["gambar"]['type'] != "") {
  $direktori = "../images/";
  $file_name = $_FILES['gambar']['name'];
  move_uploaded_file($_FILES['gambar']['tmp_name'], $direktori . $file_name);
  $sql = "INSERT INTO bukutbl(kode_buku,isbn,judul_buku,pengarang,halaman,kode_kategori,kode_rak,gambar,status) VALUES ('$_POST[kdbukutxt]','$_POST[isbntxt]','$_POST[judultxt]','$_POST[pengarangtxt]','$_POST[haltxt]','$_POST[kategorilist]','$_POST[raklist]','$file_name','Ada')";
  $proses = mysqli_query($koneksi, $sql);
  if ($check !== false) {
    $uploadOk = 1;
    if ($proses) {
      echo "<meta http-equiv='refresh' content='0;?page=buku'>";
    } else {
      echo "Data belum dapat di hapus!!";
    }
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
  //   }
} elseif ($_FILES["gambar"]['type'] == "") {
  $sql = "INSERT INTO bukutbl(kode_buku,isbn,judul_buku,pengarang,halaman,kode_kategori,kode_rak,gambar,status) VALUES ('$_POST[kdbukutxt]','$_POST[isbntxt]','$_POST[judultxt]','$_POST[pengarangtxt]','$_POST[haltxt]','$_POST[kategorilist]','$_POST[raklist]','$_POST[gambar]','Ada')";
  $proses = mysqli_query($koneksi, $sql);
  if ($proses == true) {
    //   echo "Data sukses di simpan";
    echo "<meta http-equiv='refresh' content='0;?page=buku'>";
    exit();
  } else {
    echo "Data belum dapat di simpan!!";
  }
}
?>
