<style type="text/css">
.main {
	margin-top: 5px;
	margin-left: 10px;
	margin-right: 10px;
	margin-bottom: 10px;
}
</style>
<div class="main" style="margin-top: 5%;">
<table class="w-full" border="0" align="center" cellpadding="0" cellspacing="0">
	<tr>
		<th align="left" scope="col" class="text-white"> RAK BUKU </th>
		</tr>
	<tr>
	  <td><hr /></td>
    </tr>
	<tr>
	<td>
		<table class="w-full" border="0" align="center" cellpadding="4" cellspacing="1">
  			<tr>
    			<td colspan="5" align="right" valign="middle" scope="col"> <b><a href="?page=rak_tambah">Tambah</a></b> </td>
   		  </tr>
          	<tr>
                <th width="7%" align="center" scope="col" bgcolor="#66B2A8"><font face="Tahoma, Geneva, sans-serif" size="2">No</font></th>
                <th width="15%" align="left" scope="col" bgcolor="#66B2A8"><font face="Tahoma, Geneva, sans-serif" size="2">Kode Rak</font></th>
              <th width="28%" align="left" scope="col" bgcolor="#66B2A8"><font face="Tahoma, Geneva, sans-serif" size="2">Nama Rak</font></th>
              <th width="40%" align="left" scope="col" bgcolor="#66B2A8"><font face="Tahoma, Geneva, sans-serif" size="2">Posisi Rak</font></th>    
              <th width="10%" align="Center" scope="col" bgcolor="#66B2A8"><font color="#FFFFFF">Aksi</font></th>
		  </tr>

<?php
$no = 1;
$sql = "select * from raktbl order by id asc";
$proses = mysqli_query($koneksi, $sql);
$totrecord = mysqli_num_rows($proses);
while ($record = mysqli_fetch_array($proses)) { ?>
  <tr>
    <td align="center" scope="col" bgcolor="#CCCCCC"><font face="Tahoma, Geneva, sans-serif" size="2"><?php echo $no; ?></font></td>
    <td align="left" scope="col" bgcolor="#CCCCCC"><font face="Tahoma, Geneva, sans-serif" size="2"><?php echo $record[
      'kode_rak'
    ]; ?></font></td>
    <td align="left" scope="col" bgcolor="#CCCCCC"><font face="Tahoma, Geneva, sans-serif" size="2"><?php echo $record[
      'nama_rak'
    ]; ?></font></td>
    <td align="left" scope="col" bgcolor="#CCCCCC"><font face="Tahoma, Geneva, sans-serif" size="2"><?php echo $record[
      'posisi'
    ]; ?></font></td>
    <th align="Center" scope="col" bgcolor="#CCCCCC"><a href="?page=rak_hapus&amp;id=<?php echo $record[
      'id'
    ]; ?>"><i class="fa fa-trash text-red-600" style="color:red"></i></th>
  </tr>
  <?php $no++;}
?>
  
</table>
</td>
</tr>
</table>
</div>