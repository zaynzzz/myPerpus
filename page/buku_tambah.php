<style type="text/css">
.main {
	margin-top: 5px;
	margin-left: 10px;
	margin-right: 10px;
	margin-bottom: 10px;
}
</style>

<?php
$sql = "select * from bukutbl order by id desc";
$proses = mysqli_query($koneksi, $sql);
$record = mysqli_fetch_array($proses);
?>
<div class="main">


<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
	<tr>
		<th align="left" scope="col" class="text-white my-6"> TAMBAH DATA BUKU </th>
  </tr>
	<tr>
	  <td><hr /></td>
  </tr>
	<tr>
	<td>
  <form enctype="multipart/form-data" class="w-full max-w-lg my-6" id="form1" name="form1" method="POST" action="?page=buku_simpan">
  <div class="flex flex-wrap -mx-3 mb-6">
    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
      <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2" for="grid-first-name">
      Kode Buku
      </label>
      <input required class="appearance-none block bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-1 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" name="kdbukutxt" id="kdbukutxt" size="5" maxlength="5" value="<?php
      echo "B-";
      echo $record['id'] + 1;
      ?>" readonly="readonly">
      <!-- <p class="text-red-500 text-xs italic">Please fill out this field.</p> -->
    </div>
    <div class="md:w-1/2 px-3 mb-6 md:mb-0">
      <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2" for="grid-first-name">
      ISBN
      </label>
      <input required class="appearance-none block bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-1 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" input name="isbntxt" type="text" id="isbntxt" maxlength="15">
      <!-- <p class="text-red-500 text-xs italic">Please fill out this field.</p> -->
    </div>
    <div class="md:w-1/2 px-3 mb-6 md:mb-0">
      <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2" for="grid-first-name">
      Judul Buku
      </label>
      <input required class="appearance-none block bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-1 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" input name="judultxt" type="text" id="judultxt" maxlength="50">
      <!-- <p class="text-red-500 text-xs italic">Please fill out this field.</p> -->
    </div>
    <div class="w-full"></div>
    <div class=" md:w-1/2 px-3 mb-6 md:mb-0">
      <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2" for="grid-first-name">
      Pengarang
      </label>
      <input required class="appearance-none block bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-1 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" input name="pengarangtxt" type="text" id="pengarangtxt" maxlength="35">
      <!-- <p class="text-red-500 text-xs italic">Please fill out this field.</p> -->
    </div>
      <div class="md:w-1/2 px-3 mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2" for="grid-first-name">
        Halaman
        </label>
        <input required class="appearance-none block bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-1 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" input name="haltxt" type="text" id="haltxt" maxlength="10">
        <!-- <p class="text-red-500 text-xs italic">Please fill out this field.</p> -->
      </div>
    <div class="w-full"></div>
      <div class=" md:w-1/2 px-3 mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2" for="grid-first-name">
          Kategori
        </label>
        <select required name="kategorilist" class="block appearance-none bg-white border border-gray-400 hover:border-gray-500 py-3 px-1 mb-3 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
          <option value="">--- Pilih Kategori ---</option>
          <?php
          $sql = "select * from kategoritbl order by id asc";
          $proses = mysqli_query($koneksi, $sql);
          while ($record = mysqli_fetch_array($proses)) { ?>
        <option value="<?php echo "$record[kode_kategori]"; ?>"><?php echo "$record[kode_kategori] - $record[nama_kategori]";}
          ?></option>
        </select>
        <!-- <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg> -->
      </div>
      <div class="md:w-1/2 px-3 mb-6 md:mb-0">
          <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2" for="grid-first-name">
            Rak
          </label>
          <select required name="raklist" class="block appearance-none bg-white border border-gray-400 hover:border-gray-500 py-3 px-1 mb-3 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
            <option value="">--- Pilih Rak ---</option>
            <?php
            $sql = "select * from raktbl order by kode_rak asc";
            $proses = mysqli_query($koneksi, $sql);
            while ($record = mysqli_fetch_array($proses)) { ?>
        <option value="<?php echo "$record[kode_rak]"; ?>"><?php echo "$record[kode_rak] - $record[nama_rak]";}
            ?></option>
          </select>
        </div>
    <div class="w-full"></div>
      <div class="md:w-1/2 px-3 mb-6 md:mb-0"> 
        <label class="block mb-2 text-sm font-medium text-white dark:text-white" for="file_input">Upload file</label>
        <input  class="block w-full text-sm px-6 h-10 py-3 text-dark bg-white rounded-lg border border-white cursor-pointer dark:text-dark focus:outline-none dark:bg-white dark:border-white dark:placeholder-dark-600" id="gambar" name="gambar" type="file">
      </div>
      <div class="w-full my-6 text-white md:w-1/2 px-3 mb-6 md:mb-0"> 
          <label>
          <!-- <input type="submit" class="" name="Submit" value="Simpan" /> -->
          <input   class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded" value="Simpan" type="submit" name="Simpan"></input>
        </label>
      </div>
  </div>
</form>
<!-- <form id="form1" class="mt-6" name="form1" method="post" action="index.php?go=Buku_Simpan">
  <table width="450" border="0" align="left">
    <tr>
      <td width="30%" align="left" valign="middle">Kode Buku</td>
      <td width="2%" align="left" valign="middle">:</td>
      <td width="68%" align="left" valign="top"><input name="kdbukutxt" type="text" id="kdbukutxt" size="5" maxlength="5" value="<?php
      echo "B-";
      echo $record['id'] + 1;
      ?>" readonly="readonly" /></td>
    </tr>
    <tr>
      <td align="left" valign="middle">ISBN</td>
      <td align="left" valign="middle">:</td>
      <td align="left" valign="top"><input name="isbntxt" type="text" id="isbntxt" size="15" maxlength="15" /></td>
    </tr>
    <tr>
      <td align="left" valign="top">Judul Buku</td>
      <td align="left" valign="top">:</td>
      <td align="left" valign="top"><input name="judultxt" type="text" id="judultxt" size="50" maxlength="50" /></td>
    </tr>
    <tr>
      <td align="left" valign="top">Pengarang</td>
      <td align="left" valign="top">:</td>
      <td align="left" valign="top"><input name="pengarangtxt" type="text" id="pengarangtxt" size="35" maxlength="35" /></td>
    </tr>
    <tr>
      <td align="left" valign="top">Halaman</td>
      <td align="left" valign="top">:</td>
      <td align="left" valign="top"><input name="haltxt" type="text" id="haltxt" size="10" maxlength="10" /></td>
    </tr>
    <tr>
      <td align="left" valign="top">Kategori</td>
      <td align="left" valign="top">:</td>
      <td align="left" valign="top"><select name="kategorilist" id="kategorilist">
        <option selected="selected"></option>
        <?php
        $sql = "select * from kategoritbl order by id asc";
        $proses = mysqli_query($conn, $sql);
        while ($record = mysqli_fetch_array($proses)) { ?>
        <option value="<?php echo "$record[kode_kategori]"; ?>"><?php echo "$record[kode_kategori] - $record[nama_kategori]";}
        ?></option>
      </select></td>
    </tr>
    <tr>
      <td align="left" valign="top">Rak</td>
      <td align="left" valign="top">:</td>
      <td align="left" valign="top"><select name="raklist" id="raklist">
        <option selected="selected"></option>
        <?php
        $sql = "select * from raktbl order by kode_rak asc";
        $proses = mysqli_query($conn, $sql);
        while ($record = mysqli_fetch_array($proses)) { ?>
        <option value="<?php echo "$record[kode_rak]"; ?>"><?php echo "$record[kode_rak] - $record[nama_rak]";}
        ?></option>
      </select></td>
    </tr>
    <tr>
      <td align="left" valign="top">Gambar</td>
      <td align="left" valign="top">:</td>
      <td align="left" valign="top"><input name="gambar" type="file" id="gambar" size="15" maxlength="15" /></td>
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