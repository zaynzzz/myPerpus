<style type="text/css">
.main {
	margin-top: 5px;
	margin-left: 10px;
	margin-right: 10px;
	margin-bottom: 10px;
}

div.ui-datepicker{
 font-size:12px;
}
</style> 

<link href="../assets/js/jquery-ui.min.css" rel="stylesheet">

<script src="../assets/js/jquery-3.6.1.min.js"></script>
<script src="../assets/js/jquery-ui.js"></script>
<script src="../assets/js/jquery-ui.min.js"></script>
<script src="../assets/js/custom.js"></script>

<script type="text/javascript">
	$(document).ready(function(){
				
	$("#tglpinjam").datepicker({
      showOn: "both", buttonImage: "images/calendar.png", buttonImageOnly: true, changeMonth: true, changeYear: true, dateFormat: "dd-mm-yy"});
	  
	$("#tglkembali").datepicker({
	showOn: "both", buttonImage: "images/calendar.png", buttonImageOnly: true, changeMonth: true, changeYear: true, dateFormat: "dd-mm-yy"}); 
	  			  
	function cari_peminjam(){
		var kode=$("#kdpeminjamtxt").val();
		if(kode!=""){
			$.ajax({
				type:"post",
				url:"cari_nama_peminjam.php",
				data:"kode="+kode,
				success:function(data){
					$("#nmpeminjamtxt").val(data)
				}
			});
		}                                   
	}  			
			
	function cari_buku(){
		var kode=$("#kdbukutxt").val();
		if(kode!=""){
			$.ajax({
				type:"post",
				url:"cari_judul_buku.php",
				data:"kode="+kode,
				success:function(data){
					$("#judulbukutxt").val(data)
				}
			});
		}                                   
	}  
				  
	$('#kdpeminjamtxt').change(function() {
		cari_peminjam();
		$('#kdbukutxt').focus()
    });				    
			                           
	$('#kdbukutxt').change(function() {
		cari_buku();
		$('#jmltxt').focus()
    });	
			  			  	
	});	
		
	function isNumberKey(evt)
		//Membuat validasi hanya untuk input angka menggunakan kode javascript
		{
		var charCode = (evt.which) ? evt.which : event.keyCode
		if (charCode > 31 && (charCode < 48 || charCode > 57))
		return false;
		return true;
	}

</script>

<?php
$sql = "select * from peminjamantbl order by id desc";
$proses = mysqli_query($koneksi, $sql);
$record = mysqli_fetch_array($proses);
?>

<div class="main" style="margin-top: 5%;">
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
	<tr>
		<th align="left" scope="col" class="text-white"> TRANSAKSI PEMINJAMAN </th>
  </tr>
	<tr>
	  <td><hr /></td>
  </tr>
	<tr>
	<td>
  <form  id="form1" name="form1" method="post" class="row" action="?page=peminjaman_simpan">
<div class="md:w-1/2 px-3 my-6 md:mb-0">
      <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2" for="grid-first-name">
      Kode Peminjaman
      </label>
      <input required class="appearance-none block bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-1 mb-3 leading-tight focus:outline-none focus:bg-white" name="kdpeminjamantxt" type="text" id="kdpeminjamantxt" maxlength="5" value="<?php
      echo "TP-";
      echo $record['id'] + 1;
      ?>" readonly="readonly">
      <!-- <p class="text-red-500 text-xs italic">Please fill out this field.</p> -->
    </div>
<div class="md:w-1/2 px-3 my-6 md:mb-0">
      <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2" for="grid-first-name">
      Kode Peminjam
      </label>
      <input class="bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-1 mb-3 leading-tight focus:outline-none focus:bg-white" name="kdpeminjamtxt" type="text" id="kdpeminjamtxt" size="5" maxlength="5" />
      <!-- <p class="text-red-500 text-xs italic">Please fill out this field.</p> -->
    </div>
<div class="md:w-1/2 px-3 my-6 md:mb-0">
      <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2" for="grid-first-name">
      Nama Peminjam
      </label>
      <input class="bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-1 mb-3 leading-tight focus:outline-none focus:bg-white" name="nmpeminjamtxt" type="text" id="nmpeminjamtxt" size="35" maxlength="35" readonly="readonly" />
      <!-- <p class="text-red-500 text-xs italic">Please fill out this field.</p> -->
    </div>
<div class="md:w-1/2 px-3 my-6 md:mb-0">
      <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2" for="grid-first-name">
      Kode Buku
      </label>
      <input required class="appearance-none block bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-1 mb-3 leading-tight focus:outline-none focus:bg-white" name="kdbukutxt" type="text" id="kdbukutxt" maxlength="5">
      <!-- <p class="text-red-500 text-xs italic">Please fill out this field.</p> -->
    </div>
<div class="md:w-1/2 px-3 my-6 md:mb-0">
      <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2" for="grid-first-name">
      Judul Buku
      </label>
      <input required class="appearance-none block bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-1 mb-3 leading-tight focus:outline-none focus:bg-white" name="judulbukutxt" type="text" id="judulbukutxt"size="25" maxlength="35" readonly="readonly">
    </div>
<div class="md:w-1/2 px-3 my-6 md:mb-0">
      <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2" for="grid-first-name">
      Jumlah
      </label>
      <input required class="appearance-none block bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-1 mb-3 leading-tight focus:outline-none focus:bg-white" name="jmltxt" type="text" id="jmltxt" onkeypress="return isNumberKey(event)"size="25" maxlength="10" >
    </div>
<div class="md:w-1/2 px-3 my-6 md:mb-0">
      <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2" for="grid-first-name">
      Tgl Pinjam
      </label>
      <input name="tglpinjam" class="appearance-none block bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-1 mb-3 leading-tight focus:outline-none focus:bg-white" type="text" id="tglpinjam" value="<?php echo date(
        'd-m-Y'
      ); ?>"size="25" maxlength="10" readonly="readonly" />
    </div>
<div class="md:w-1/2 px-3 my-6 md:mb-0">
      <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2" for="grid-first-name">
      Tgl Kembali
      </label>
      <input name="tglkembali" class="appearance-none block bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-1 mb-3 leading-tight focus:outline-none focus:bg-white" type="text" id="tglkembali" value="<?php echo date(
        'd-m-Y'
      ); ?>"size="25" maxlength="10" readonly="readonly" />
    </div>
<div class="md:w-1/2 px-3 my-6 md:mb-0">
      <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2" for="grid-first-name">
      Catatan
      </label>
      <textarea class="appearance-none block bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-1 mb-3 leading-tight focus:outline-none focus:bg-white"  name="cattxt" cols="30" rows="3" id="cattxt"></textarea>
    </div>
    <div class="md:w-1/2 px-3 my-6 md:mb-0">
      <label>
        <input class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded" value="Simpan" type="submit" name="Simpan"></input>
      </label>
    </div>
</form>

<!-- <form id="form1" name="form1" method="post" action="index.php?go=Peminjaman_Simpan">
  <table width="400" border="0" align="left">
    <tr>
      <td width="30%" align="left" valign="middle">Kode  Peminjaman</td>
      <td width="2%" align="left" valign="middle">:</td>
      <td width="68%" align="left" valign="top"><input name="kdpeminjamantxt" type="text" id="kdpeminjamantxt" size="5" maxlength="5" value="<?php
      echo "TP-";
      echo $record['id'] + 1;
      ?>" readonly="readonly" /></td>
    </tr>
    <tr>
      <td align="left" valign="middle">&nbsp;</td>
      <td align="left" valign="middle">&nbsp;</td>
      <td align="left" valign="top"><hr /></td>
    </tr>
    <tr>
      <td align="left" valign="middle">Kode Peminjam</td>
      <td align="left" valign="middle">:</td>
      <td align="left" valign="top"><input name="kdpeminjamtxt" type="text" id="kdpeminjamtxt" size="5" maxlength="5" /></td>
    </tr>
    <tr>
      <td align="left" valign="middle">Nama Peminjam</td>
      <td align="left" valign="middle">:</td>
      <td align="left" valign="top"><input name="nmpeminjamtxt" type="text" id="nmpeminjamtxt" size="35" maxlength="35" readonly="readonly" /></td>
    </tr>
    <tr>
      <td align="left" valign="top">&nbsp;</td>
      <td align="left" valign="top">&nbsp;</td>
      <td align="left" valign="top"><hr /></td>
    </tr>
    <tr>
      <td align="left" valign="top">Kode Buku</td>
      <td align="left" valign="top">:</td>
      <td align="left" valign="top"><input name="kdbukutxt" type="text" id="kdbukutxt" size="5" maxlength="5" /></td>
    </tr>
    <tr>
      <td align="left" valign="top">Judul Buku</td>
      <td align="left" valign="top">:</td>
      <td align="left" valign="top"><input name="judulbukutxt" type="text" id="judulbukutxt" size="35" maxlength="35" readonly="readonly" /></td>
    </tr>
    <tr>
      <td align="left" valign="top">&nbsp;</td>
      <td align="left" valign="top">&nbsp;</td>
      <td align="left" valign="top"><hr /></td>
    </tr>
    <tr>
      <td align="left" valign="top">Jumlah</td>
      <td align="left" valign="top">:</td>
      <td align="left" valign="top"><input name="jmltxt" type="text" id="jmltxt" onkeypress="return isNumberKey(event)" size="6" maxlength="10" /></td>
    </tr>
    <tr>
      <td align="left" valign="top">Tgl Pinjam</td>
      <td align="left" valign="top">:</td>
      <td align="left" valign="middle">
        <input name="tglpinjam" type="text" id="tglpinjam" value="<?php echo date(
          'd-m-Y'
        ); ?>" size="6" maxlength="10" readonly="readonly" />
        </td>
    </tr>
    <tr>
      <td align="left" valign="top">Tgl Kembali</td>
      <td align="left" valign="top">:</td>
      <td align="left" valign="middle">
        <input name="tglkembali" type="text" id="tglkembali" value="<?php echo date(
          'd-m-Y'
        ); ?>" size="6" maxlength="10" readonly="readonly" />
      </td>
    </tr>
    <tr>
      <td align="left" valign="top">Catatan</td>
      <td align="left" valign="top">:</td>
      <td align="left" valign="top"><label for="cattxt"></label>
        <textarea name="cattxt" cols="30" rows="3" id="cattxt"></textarea></td>
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