<?php error_reporting(E_ERROR | E_WARNING | E_PARSE); ?>
<?php
	include "koneksi.php";
	
	switch($_GET['go']){
		case 'Katalog': 
			include("katalog.php"); 
		break;				
		
		case 'Buku':
			include("buku.php");
		break;
		
		case 'Buku_Tambah':
			include("buku_tambah.php");
		break;		
		
		case 'Buku_Simpan':
			include("buku_simpan.php");
		break;				
		
		case 'Buku_Hapus':
			include("buku_hapus.php");
		break;																	
			
		case 'Peminjam':
			include("peminjam.php");
		break;	
		
		case 'Peminjam_Tambah':
			include("peminjam_tambah.php");
		break;
		
		case 'Peminjam_Simpan':
			include("peminjam_simpan.php");
		break;		
		
		case 'Peminjam_Hapus':
			include("peminjam_hapus.php");
		break;	
		
		case 'Kategori':
			include("kategori.php");
		break;	
		
		case 'Kategori_Tambah':
			include("kategori_tambah.php");
		break;
		
		case 'Kategori_Simpan':
			include("kategori_simpan.php");
		break;		
		
		case 'Kategori_Hapus':
			include("kategori_hapus.php");
		break;	
				
		case 'Rak':
			include("rak.php");
		break;	
		
		case 'Rak_Tambah':
			include("rak_tambah.php");
		break;
		
		case 'Rak_Simpan':
			include("rak_simpan.php");
		break;		
		
		case 'Rak_Hapus':
			include("rak_hapus.php");
		break;		
		
		case 'Peminjaman':
			include("peminjaman.php");
		break;
		
		case 'Peminjaman':
			include("peminjaman.php");
		break;
		
		case 'Peminjaman_Tambah':
			include("peminjaman_tambah.php");
		break;	
		
		case 'Peminjaman_Simpan':
			include("peminjaman_simpan.php");
		break;						
		
		case 'Peminjaman_Hapus':
			include("peminjaman_hapus.php");
		break;	
				
		case 'Pengembalian':
			include("pengembalian.php");
		break;
		
		case 'Pengembalian_Tambah':
			include("pengembalian_tambah.php");
		break;	
		
		case 'Pengembalian_Simpan':
			include("pengembalian_simpan.php");
		break;						
		
		case 'Pengembalian_Hapus':
			include("pengembalian_hapus.php");
		break;					
		
		case '':
			include("Katalog.php");		
		break;			
						
	};
?>	