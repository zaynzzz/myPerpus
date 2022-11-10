<style type="text/css">
.main {
	margin-top: 5px;
	margin-left: 10px;
	margin-right: 10px;
	margin-bottom: 10px;
}
.gambar {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	color: #990000;
	font-weight: bold;
		width:110px;
}
</style>
<?php
include "koneksi.php";
$query =
  "select * from bukutbl inner join kategoritbl on bukutbl.kode_kategori = kategoritbl.kode_kategori inner join raktbl on bukutbl.kode_rak = raktbl.kode_rak order by bukutbl.id desc LIMIT 0,12";
$hasil = mysqli_query($koneksi, $query);
$numrows = mysqli_num_rows($hasil);
?>

<div class="main">
	<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
    	<tr>
          <th colspan="5" class="text-white" align="left" scope="col">KATALOG BUKU</th>
        </tr>
		<tr>
		  <td colspan="5" align="center" valign="top"><hr /></td>
	  </tr>
		<tr>
			<?php
   $kolom = 5;
   $x = 0;
   if ($numrows > 0) {
     while ($data = mysqli_fetch_array($hasil)) {

       if ($x >= $kolom) {
         echo "</tr><tr>";
         $x = 0;
       }
       $x++;
       ?>
          <td align="center" width="20%" valign="top"> <br />
        </td>
        <tr>
          <td>
            <div class ="gambar">
                <img width='100px' height='145px' valign='top' border='1,5' src="../images/<?php echo $data[
                  'gambar'
                ]; ?>"><br>
                
            </div>		 
          </td>
            <td><p class="text-white"><?php echo $data['judul_buku']; ?></p>
                <br>
                <p class="text-small text-white"> <font size="1px"><?php echo $data[
                  'pengarang'
                ]; ?></font></p></td>
          </tr>
			<?php
     }
   }
   ?>
        </tr>
      </table>
</div>
