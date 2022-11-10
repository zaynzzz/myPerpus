<?php
$sql = "DELETE from peminjamtbl where id ='$_GET[id]'";
$proses = mysqli_query($koneksi, $sql);
if ($proses) {
  echo "<meta http-equiv='refresh' content='0;?page=data_peminjam'>";
} else {
  echo "Data belum dapat di hapus!!";
}
?>
