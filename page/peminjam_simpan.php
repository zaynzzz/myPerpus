<?php
$sql = "INSERT INTO peminjamtbl(kode_peminjam,nama_peminjam,alamat,telepon) VALUES ('$_POST[kdpeminjamtxt]','$_POST[nmpeminjamtxt]','$_POST[almtxt]','$_POST[tlptxt]')";
$proses = mysqli_query($koneksi, $sql);
if ($proses) {
  echo "<meta http-equiv='refresh' content='0;?page=data_peminjam'>";
} else {
  echo "Data belum dapat di simpan!!";
}
?>
