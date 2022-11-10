<?php
$sql = "DELETE from kategoritbl where id ='$_GET[id]'";
$proses = mysqli_query($koneksi, $sql);
if ($proses) {
  echo "<meta http-equiv='refresh' content='0;?page=kategori'>";
} else {
  echo "Data belum dapat di hapus!!";
}
?>
