<?php
$sql = "DELETE from peminjamantbl where kode_peminjaman ='$_GET[id]'";
$proses = mysqli_query($koneksi, $sql);
if ($proses) {
  echo "<meta http-equiv='refresh' content='0;?page=peminjaman'>";
} else {
  echo "Data belum dapat di hapus!!";
}
?>
