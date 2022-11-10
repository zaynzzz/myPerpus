<?php
$sql = "INSERT INTO raktbl(kode_rak,nama_rak,posisi) VALUES ('$_POST[kdraktxt]','$_POST[nmraktxt]','$_POST[posraktxt]')";
$proses = mysqli_query($koneksi, $sql);
if ($proses) {
  echo "<meta http-equiv='refresh' content='0;?page=rak'>";
} else {
  echo "Data belum dapat di simpan!!";
}
?>
