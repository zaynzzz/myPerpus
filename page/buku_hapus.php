<?php
$sql = "DELETE from bukutbl where kode_buku ='$_GET[id]'";
$proses = mysqli_query($koneksi, $sql);
if ($proses) {
  echo "<meta http-equiv='refresh' content='0;?page=buku'>";
} else {
  echo "Data belum dapat di hapus!!";
}
?>
