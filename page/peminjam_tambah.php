<style type="text/css">
.main {
	margin-top: 5px;
	margin-left: 10px;
	margin-right: 10px;
	margin-bottom: 10px;
}
</style>

<?php
$sql = "select * from peminjamtbl order by id desc";
$proses = mysqli_query($koneksi, $sql);
$record = mysqli_fetch_array($proses);
?>
<div class="main" style="margin-top: 5%;">
<table class="" border="0" cellpadding="0" cellspacing="0">
	<tr>
		<th align="left" scope="col" class="text-white"> TAMBAH DATA PEMINJAM </th>
  </tr>
	<tr>
	  <td><hr /></td>
  </tr>
	<tr>
	<td>
  <form  id="form1" name="form1" method="post" action="?page=peminjam_simpan">
<div class="md:w-1/2 px-3 my-6 md:mb-0">
      <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2" for="grid-first-name">
      Kode Rak
      </label>
      <input required class="appearance-none block bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-1 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" name="kdpeminjamtxt" type="text" id="kdpeminjamtxt" size="5" maxlength="5" value="<?php
      echo "P-";
      echo $record['id'] + 1;
      ?>" readonly="readonly"  >
    </div>
    <div class="md:w-1/2 px-3 my-6 md:mb-0">
      <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2" for="grid-first-name">
      Nama Peminjam
      </label>
      <input required class="appearance-none block bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-1 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" name="nmpeminjamtxt" type="text" id="nmpeminjamtxt" maxlength="35">
    </div>
    <div class="md:w-1/2 px-3 my-6 md:mb-0">
      <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2" for="grid-first-name">
      Alamat
      </label>
      <input required class="appearance-none block bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-1 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" name="almtxt" type="text" id="almtxt" maxlength="35">
    </div>
    <div class="md:w-1/2 px-3 my-6 md:mb-0">
      <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2" for="grid-first-name">
      Telepon
      </label>
      <input required class="appearance-none block bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-1 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" name="tlptxt" type="text" id="tlptxt" maxlength="35">
    </div>
    <div class="md:w-1/2 px-3 my-6 md:mb-0">
      <label>
        <input class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded" value="Simpan" type="submit" name="Simpan"></input>
      </label>
    </div>
</form>
<!-- <form id="form1" name="form1" method="post" action="index.php?go=Peminjam_Simpan">
  <table width="400" border="0" align="left">
    <tr>
      <td width="30%" align="left" valign="middle">Kode Peminjam</td>
      <td width="2%" align="left" valign="middle">:</td>
      <td width="68%" align="left" valign="top"><input name="kdpeminjamtxt" type="text" id="kdpeminjamtxt" size="5" maxlength="5" value="<?php
      echo "P-";
      echo $record['id'] + 1;
      ?>" readonly="readonly" /></td>
    </tr>
    <tr>
      <td align="left" valign="middle">Nama Peminjam</td>
      <td align="left" valign="middle">:</td>
      <td align="left" valign="top"><input name="nmpeminjamtxt" type="text" id="nmpeminjamtxt" size="35" maxlength="35" /></td>
    </tr>
    <tr>
      <td align="left" valign="top">Alamat</td>
      <td align="left" valign="top">:</td>
      <td align="left" valign="top"><input name="almtxt" type="text" id="almtxt" size="35" maxlength="35" /></td>
    </tr>
    <tr>
      <td align="left" valign="top">Telepon</td>
      <td align="left" valign="top">:</td>
      <td align="left" valign="top"><input name="tlptxt" type="text" id="tlptxt" size="35" maxlength="35" /></td>
    </tr>
    <tr>
      <td align="left" valign="top">&nbsp;</td>
      <td align="left" valign="top">&nbsp;</td>
      <td align="left" valign="top">&nbsp;</td>
    </tr>
    <tr>
      <td align="left" valign="top">&nbsp;</td>
      <td align="left" valign="top">&nbsp;</td>
      <td align="left" valign="top"><label>
        <input type="submit" name="Submit" value="Simpan" />
        </label>
        </span></td>
    </tr>
  </table>
</form> -->
</td>
</tr>
</table>