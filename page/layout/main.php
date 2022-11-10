<?php
$data_page = [
  'masuk' => [
    '' => 'kas_masuk/masuk.php',
    'hapus' => 'kas_masuk/hapus.php',
  ],
  'keluar' => [
    '' => 'kas_keluar/keluar.php',
    'hapus' => 'kas_keluar/hapus.php',
  ],
  'rekap' => [
    '' => 'rekap/rekap.php',
  ],
  'user' => [
    '' => 'user/user.php',
  ],
  '' => [
    '' => 'dashboard.php',
  ],
  'katalog' => [
    '' => 'katalog.php',
  ],
  'buku' => [
    '' => 'buku.php',
  ],
  'buku_tambah' => [
    '' => 'buku_tambah.php',
  ],
  'buku_simpan' => [
    '' => 'buku_simpan.php',
  ],
  'buku_hapus' => [
    '' => 'buku_hapus.php',
  ],
  'kategori' => [
    '' => 'kategori.php',
  ],
  'kategori_tambah' => [
    '' => 'kategori_tambah.php',
  ],
  'kategori_simpan' => [
    '' => 'kategori_simpan.php',
  ],
  'kategori_hapus' => [
    '' => 'kategori_hapus.php',
  ],
  'rak' => [
    '' => 'rak.php',
  ],
  'rak_tambah' => [
    '' => 'rak_tambah.php',
  ],
  'rak_simpan' => [
    '' => 'rak_simpan.php',
  ],
  'rak_hapus' => [
    '' => 'rak_hapus.php',
  ],
  'data_peminjam' => [
    '' => 'peminjam.php',
  ],
  'peminjam_tambah' => [
    '' => 'peminjam_tambah.php',
  ],
  'peminjam_simpan' => [
    '' => 'peminjam_simpan.php',
  ],
  'peminjam_hapus' => [
    '' => 'peminjam_hapus.php',
  ],
  'peminjaman' => [
    '' => 'peminjaman.php',
  ],
  'peminjaman_tambah' => [
    '' => 'peminjaman_tambah.php',
  ],
  'peminjaman_simpan' => [
    '' => 'peminjaman_simpan.php',
  ],
  'peminjaman_hapus' => [
    '' => 'peminjaman_hapus.php',
  ],
  'pengembalian' => [
    '' => 'pengembalian.php',
  ],
  'pengembalian_tambah' => [
    '' => 'pengembalian_tambah.php',
  ],
  'pengembalian_simpan' => [
    '' => 'pengembalian_simpan.php',
  ],
  'pengembalian_hapus' => [
    '' => 'pengembalian_hapus.php',
  ],
]; ?>


<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Perpustakaan Bersama</title>
        <?php require 'header.php'; ?>
    </head>
    <body>
        <div>
            <?php require 'navbar.php'; ?>
        </div>
        <div class="container md:ml-64 lg:ml-72 w-3/4 p-5">
            <?php
            $page = $_GET['page'] ? $_GET['page'] : '';
            $aksi = $_GET['aksi'] ? $_GET['aksi'] : '';
            include $data_page[$page][$aksi];
            ?>
        </div>
        <div class="md:ml-24 fixed bottom-0 text-center w-full py-2">
            <!-- Copyright © 2022 All rights r  eserved. Developed By <a href="#"><b>Nida Juliana Maulida</b></a> -->
        </div>
        <?php require 'footer.php'; ?>
    </body>
</html>