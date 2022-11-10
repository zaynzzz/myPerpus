<?php
$sql = "INSERT INTO kategoritbl(kode_kategori,nama_kategori) VALUES ('$_POST[kdkategoritxt]','$_POST[nmkategoritxt]')";
$proses = mysqli_query($koneksi, $sql);
if ($proses) {
  echo "<meta http-equiv='refresh' content='0;?page=kategori'>";
} else {
  echo "Data belum dapat di simpan!!";
}
?>
