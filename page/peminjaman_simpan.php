<?php
$tglpinjam =
  substr($_POST['tglpinjam'], 6, 4) .
  "-" .
  substr($_POST['tglpinjam'], 3, 2) .
  "-" .
  substr($_POST['tglpinjam'], 0, 2);

$tglkembali =
  substr($_POST['tglkembali'], 6, 4) .
  "-" .
  substr($_POST['tglkembali'], 3, 2) .
  "-" .
  substr($_POST['tglkembali'], 0, 2);

$sql = "INSERT INTO peminjamantbl(kode_peminjaman,kode_peminjam,kode_buku,tgl_pinjam,tgl_kembali,catatan) VALUES ('$_POST[kdpeminjamantxt]','$_POST[kdpeminjamtxt]','$_POST[kdbukutxt]','$tglpinjam','$tglkembali','$_POST[cattxt]')";

$proses = mysqli_query($koneksi, $sql);
if ($proses) {
  $sql2 = "UPDATE bukutbl set status='Pinjam' where kode_buku ='$_POST[kdbukutxt]'";
  $proses2 = mysqli_query($koneksi, $sql2);
  echo "<meta http-equiv='refresh' content='0;?page=peminjaman'>";
} else {
  echo "Data belum dapat di simpan!!";
}
?>
