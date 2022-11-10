<style type="text/css">
.main {
	margin-top: 5px;
	margin-left: 10px;
	margin-right: 10px;
	margin-bottom: 10px;
}
</style>

<?php
$sql = "select * from kategoritbl order by id desc";
$proses = mysqli_query($koneksi, $sql);
$record = mysqli_fetch_array($proses);
?>
<div class="main" style="margin-top: 5%;">
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
	<tr>
		<th align="left" scope="col" class="text-white"> TAMBAH DATA KATEGORI </th>
  </tr>
	<tr>
	  <td><hr /></td>
  </tr>
	<tr>
	<td>

<form  id="form1" name="form1" method="post" action="?page=kategori_simpan">
<div class="md:w-1/2 px-3 my-6 md:mb-0">
      <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2" for="grid-first-name">
      Kode Kategori
      </label>
      <input required class="appearance-none block bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-1 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" name="kdkategoritxt" type="text" id="kdkategoritxt"  maxlength="5" value="<?php
      echo "K-";
      echo $record['id'] + 1;
      ?>" readonly="readonly">
      <!-- <p class="text-red-500 text-xs italic">Please fill out this field.</p> -->
    </div>
<div class="md:w-1/2 px-3 my-6 md:mb-0">
      <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2" for="grid-first-name">
      Nama Kategori
      </label>
      <input required class="appearance-none block bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-1 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" name="nmkategoritxt" type="text" id="nmkategoritxt" size="50px" maxlength="50">
      <!-- <p class="text-red-500 text-xs italic">Please fill out this field.</p> -->
    </div>
    <div class="md:w-1/2 px-3 my-6 md:mb-0">
      <label>
        <input class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded" value="Simpan" type="submit" name="Simpan"></input>
      </label>
    </div>
</form>

<!-- <form id="form1" name="form1" method="post" action="index.php?go=Kategori_Simpan">
  <table width="400" border="0" align="left">
    <tr>
      <td width="30%" align="left" valign="middle">Kode Kategori</td>
      <td width="2%" align="left" valign="middle">:</td>
      <td width="68%" align="left" valign="top"><input name="kdkategoritxt" type="text" id="kdkategoritxt" size="5" maxlength="5" value="<?php
      echo "K-";
      echo $record['id'] + 1;
      ?>" readonly="readonly" /></td>
    </tr>
    <tr>
      <td align="left" valign="middle">Nama Kategori</td>
      <td align="left" valign="middle">:</td>
      <td align="left" valign="top"><input name="nmkategoritxt" type="text" id="nmkategoritxt" size="35" maxlength="50" /></td>
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