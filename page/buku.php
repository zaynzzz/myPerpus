<style type="text/css">
.main {
	margin-top: 5px;
	margin-left: 10px;
	margin-right: 10px;
	margin-bottom: 10px;
}
</style>

<br>
<?php require "koneksi.php"; ?>
<div class="" style="margin-top: 5%;">
  <div class="col-md-12 mt-6">
    <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <th align="left" scope="col" class="text-white"> DATA BUKU </th>
        </tr>
      <tr>
        <td><hr /></td>
        </tr>
      <tr>
      <td>
  </div>
<table class="w-full" border="0" align="center" cellpadding="4" cellspacing="1">
  	<tr>
    	<td colspan="9" align="right" valign="middle" scope="col"><b><a href="?page=buku_tambah" >Tambah</a></b> </td>
   	</tr>
<?php
$jml = 0;
$sql =
  "SELECT * FROM  kategoritbl INNER JOIN bukutbl ON bukutbl.kode_kategori = kategoritbl.kode_kategori ORDER BY kategoritbl.id ASC";
$proses = mysqli_query($koneksi, $sql);
if ($proses->num_rows == 0) {
  echo "<h2 class='text-white mt-6'>Buku tidak ditemukan<h2>";
}
while ($record = mysqli_fetch_array($proses)) { ?>
 	         
     <tr>
       <th width="7%" align="center" scope="col" bgcolor="#66B2A8"><font face="Tahoma, Geneva, sans-serif" size="2">No</font></th>
       <th width="6%" align="left" scope="col" bgcolor="#66B2A8"><font face="Tahoma, Geneva, sans-serif" size="2">Kode</font></th>
       <th width="17%" align="left" scope="col" bgcolor="#66B2A8"><font face="Tahoma, Geneva, sans-serif" size="2">ISBN</font></th>
       <th width="39%" align="left" scope="col" bgcolor="#66B2A8"><font face="Tahoma, Geneva, sans-serif" size="2">Judul Buku</font></th>
       <th width="17%" align="left" scope="col" bgcolor="#66B2A8"><font face="Tahoma, Geneva, sans-serif" size="2">Pengarang</font></th>
       <th width="9%" align="left" scope="col" bgcolor="#66B2A8"><font face="Tahoma, Geneva, sans-serif" size="2">Halaman</font></th>  
       <th width="9%" align="left" scope="col" bgcolor="#66B2A8"><font face="Tahoma, Geneva, sans-serif" size="2">Status</font></th>               
       <th width="5%" align="Center" scope="col" bgcolor="#66B2A8"><font face="Tahoma, Geneva, sans-serif" size="2" color="#FFFFFF">Aksi</font></th>
		  </tr>

<?php
$no = 1;
$sql =
  "select * from bukutbl inner join raktbl on raktbl.kode_rak = bukutbl.kode_rak order by bukutbl.id asc";
$proses = mysqli_query($koneksi, $sql);
while ($record = mysqli_fetch_array($proses)) { ?>
  <tr>
    <td align="center" scope="col" bgcolor="#CCCCCC"><font face="Tahoma, Geneva, sans-serif" size="2"><?php echo $no; ?></font></td>
    <td align="center" scope="col" bgcolor="#CCCCCC"><font face="Tahoma, Geneva, sans-serif" size="2"><?php echo $record[
      'kode_buku'
    ]; ?></font></td>
    <td align="left" scope="col" bgcolor="#CCCCCC"><font face="Tahoma, Geneva, sans-serif" size="2"><?php echo $record[
      'isbn'
    ]; ?></font></td>
    <td align="left" scope="col" bgcolor="#CCCCCC"><font face="Tahoma, Geneva, sans-serif" size="2"><?php echo $record[
      'judul_buku'
    ]; ?></font></td>
    <td align="left" scope="col" bgcolor="#CCCCCC"><font face="Tahoma, Geneva, sans-serif" size="2"><?php echo $record[
      'pengarang'
    ]; ?></font></td>
    <td align="center" scope="col" bgcolor="#CCCCCC"><font face="Tahoma, Geneva, sans-serif" size="2"><?php echo $record[
      'halaman'
    ]; ?></font></td>
    <td align="center" scope="col" bgcolor="#CCCCCC"><font face="Tahoma, Geneva, sans-serif" size="2"><?php echo $record[
      'status'
    ]; ?></font></td>    
    <th align="Center" scope="col" bgcolor="#CCCCCC"><a class="text-red-600" href="?page=buku_hapus&amp;id=<?php echo $record[
      'kode_buku'
    ]; ?>"><i class="fa fa-trash" style="color:red"></i></a></th>
  </tr>
  <?php $no++;}
?>
  
  
    
  <?php $jml++;}
?>  
</table>
<br />
</td>
</tr>
</table>
</div>