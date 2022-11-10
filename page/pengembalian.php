<style type="text/css">
.main {
	margin-top: 5px;
	margin-left: 10px;
	margin-right: 10px;
	margin-bottom: 10px;
}
</style>
<div class="main" style="margin-top: 5%;">
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
	<tr>
		<th align="left" scope="col" class="text-white"> DATA TRANSAKSI PENGEMBALIAN </th>
		</tr>
	<tr>
	  <td><hr /></td>
    </tr>
	<tr>
	<td>
		<table class="w-full" border="0" align="center" cellpadding="4" cellspacing="1">
  			<tr>
    			<td colspan="7" align="right" valign="middle" scope="col"> <b><a href="?page=pengembalian_tambah">Tambah</a></b></td>
   		  </tr>
          	<tr>
                <th width="4%" align="center" scope="col" bgcolor="#66B2A8"><font face="Tahoma, Geneva, sans-serif" size="2">No</font></th>
                <th width="8%" align="left" scope="col" bgcolor="#66B2A8"><font face="Tahoma, Geneva, sans-serif" size="2">Kode</font></th>
              <th width="28%" align="left" scope="col" bgcolor="#66B2A8"><font face="Tahoma, Geneva, sans-serif" size="2">Nama Peminjam</font></th>
              <th width="17%" align="left" scope="col" bgcolor="#66B2A8"><font face="Tahoma, Geneva, sans-serif" size="2">Kode Buku</font></th>
              <th width="16%" align="Center" scope="col" bgcolor="#66B2A8"><font face="Tahoma, Geneva, sans-serif" size="2">Tgl Pinjam</font></th>    
              <th width="17%" align="Center" scope="col" bgcolor="#66B2A8"><font face="Tahoma, Geneva, sans-serif" size="2">Tgl Kembali</font></th>                  
              <th width="10%" align="Center" scope="col" bgcolor="#66B2A8"><font color="#FFFFFF">Aksi</font></th>
		  </tr>

<?php
$no = 1;
$sql =
  "SELECT * FROM pengembaliantbl inner join peminjamtbl on pengembaliantbl.kode_peminjam = peminjamtbl.kode_peminjam ORDER BY pengembaliantbl.id DESC";
$proses = mysqli_query($koneksi, $sql);
$totrecord = mysqli_num_rows($proses);
while ($record = mysqli_fetch_array($proses)) { ?>
  <tr>
    <td align="center" scope="col" bgcolor="#CCCCCC"><font face="Tahoma, Geneva, sans-serif" size="2"><?php echo $no; ?></font></td>
    <td align="left" scope="col" bgcolor="#CCCCCC"><font face="Tahoma, Geneva, sans-serif" size="2"><?php echo $record[
      'kode_pengembalian'
    ]; ?></font></td>
    <td align="left" scope="col" bgcolor="#CCCCCC"><font face="Tahoma, Geneva, sans-serif" size="2"><?php echo $record[
      'nama_peminjam'
    ]; ?></font></td>
    <td align="left" scope="col" bgcolor="#CCCCCC"><font face="Tahoma, Geneva, sans-serif" size="2"><?php echo $record[
      'kode_buku'
    ]; ?></font></td>
    <th align="Center" scope="col" bgcolor="#CCCCCC"><font face="Tahoma, Geneva, sans-serif" size="2"><?php echo $record[
      'tgl_pinjam'
    ]; ?></font></th>
    <th align="Center" scope="col" bgcolor="#CCCCCC"><font face="Tahoma, Geneva, sans-serif" size="2"><?php echo $record[
      'tgl_kembali'
    ]; ?></font></th>    
    <th align="Center" scope="col" bgcolor="#CCCCCC"><a href="?page=pengembalian_hapus&amp;id=<?php echo $record[
      'kode_pengembalian'
    ]; ?>"><i class="fa fa-trash text-red-600" style="color:red"></i></a></th>
  </tr>
  <?php $no++;}
?>
  
</table>
</td>
</tr>
</table>
</div>