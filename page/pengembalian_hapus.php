<?php
$sql = "DELETE from pengembaliantbl where kode_pengembalian ='$_GET[id]'";
$proses = mysqli_query($koneksi, $sql);
if ($proses) {
  echo "<meta http-equiv='refresh' content='0;?page=pengembalian'>";
} else {
  echo "Data belum dapat di hapus!!";
}
?>
