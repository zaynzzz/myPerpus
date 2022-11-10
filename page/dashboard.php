<?php
session_start(); ?>

<?php
require '../page/koneksi.php';
// if (!isset($_SESSION['username'])) {
//   header("Location: login.php");
//   die();
// }
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
$sql = mysqli_query($koneksi, "SELECT * FROM bukutbl");
// var_dump($sql);

while ($data = mysqli_fetch_assoc($sql)) {
  $id = $data['id'];
  $kodebuku = $data['kodebuku'];
  $isbn = $data['isbn'];
  $judulBuku = $data['judulBuku'];
  $pengarang = $data['pengarang'];
  $halaman = $data['halaman'];
  $kodeKtg = $data['kodeKtg'];
  $kodeRak = $data['kodeRak'];
  $gambar = $data['gambar'];
  $status = $data['status'];
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
      rel="stylesheet"
    />

    <title>Perpustakaan Bersama</title>
    <?php require '../page/layout/header.php'; ?>
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper@7/swiper-bundle.min.css"
    />
    <!--

TemplateMo 579 Cyborg Gaming

https://templatemo.com/tm-579-cyborg-gaming

-->
  </head>
  

  <body>
    <!-- ***** Preloader Start ***** -->
    <!-- <div id="js-preloader" class="js-preloader">
      <div class="preloader-inner">
        <span class="dot"></span>
        <div class="dots">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
    </div> -->
    <!-- ***** Preloader End ***** -->

    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="page-content" style="margin-top: 20px;">
            <!-- ***** Banner Start ***** -->
            <div class="main-banner">
              <div class="row">
                <div class="col-lg-7">
                  <div class="header-text">

                    <!-- text welcome here -->

                    <h2 class="text-xl">Selamat Datang, <?= $_SESSION[
                      'username'
                    ] ?></h2>

                    <h4><em>TELUSURI</em> BUKU POPULER KAMI DI SINI </h4>
                    <div class="main-button">
                      <a href="?page=katalog">Jelajahi Sekarang</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- ***** Banner End ***** -->

            <!-- ***** Most Popular Start ***** -->
            <div class="most-popular">
              <div class="row">
                <div class="col-lg-12">
                  <div class="heading-section">
                    <h4><em>Paling Populer</em> Saat Ini</h4>
                  </div>
                  <table id="datatable" class="min-w-full">
                    <thead class="bg-gray border-b">
                        <tr>
                            <th scope="col" class="text-sm font-medium text-white px-6 py-4 text-left">
                                No
                            </th>
                            <th scope="col" class="text-sm font-medium text-white px-6 py-4 text-left">
                                Kode
                            </th>
                            <th scope="col" class="text-sm font-medium text-white px-6 py-4 text-left">
                                Judul
                            </th>
                            <th scope="col" class="text-sm font-medium text-white px-6 py-4 text-left">
                                Pengarang
                            </th>
                            <th scope="col" class="text-sm font-medium text-white px-6 py-4 text-left">
                                Halaman
                            </th>
                            <th scope="col" class="text-sm font-medium text-white px-6 py-4 text-left">
                                Gambar
                            </th>
                        </tr>
                    </thead>
                    <?php
                    $no = 1;
                    $sql = "SELECT * FROM bukutbl ORDER BY id ASC";
                    $proses = mysqli_query($koneksi, $sql);
                    $totrecord = mysqli_num_rows($proses);
                    while ($record = mysqli_fetch_array($proses)) { ?>
  <tr>
    <td scope="col" class="text-sm font-medium text-white px-6 py-4 text-left"><?php echo $no; ?></td>
    <td scope="col" class="text-sm font-medium text-white px-6 py-4 text-left"><?php echo $record[
      'kode_buku'
    ]; ?>
    </td>
    <td scope="col" class="text-sm font-medium text-white px-6 py-4 text-left"><?php echo $record[
      'judul_buku'
    ]; ?>
    </td>
    <td scope="col" class="text-sm font-medium text-white px-6 py-4 text-left"><?php echo $record[
      'pengarang'
    ]; ?>
    </td>
    <td scope="col" class="text-sm font-medium text-white px-6 py-4 text-left"><?php echo $record[
      'halaman'
    ]; ?>
    </td>
    <td scope="col" class="text-sm font-medium text-white px-6 py-4 text-left"><?php echo $record[
      'gambar'
    ]; ?>
    </td>
    <!-- <th scope="col" class="text-sm font-medium text-white px-6 py-4 text-left">
      <a href="?go=Peminjam_Hapus&amp;id=<?php echo $record[
        'id'
      ]; ?>"><i class="fa fa-trash text-red-600" aria-hidden="true"></i></a></th> -->
  </tr>
  <?php $no++;}
                    ?>
                </table>
                </div>
              </div>
            </div>
        
            <!-- ***** Most Popular End ***** -->
            <!-- ***** Gaming Library Start ***** -->
            <!-- <div class="gaming-library">
              <div class="col-lg-12">
                <div class="heading-section">
                  <h4><em>Your Gaming</em> Library</h4>
                </div>
                <div class="item">
                  <ul>
                    <li>
                      <img
                        src="assets/images/game-01.jpg"
                        alt=""
                        class="templatemo-item"
                      />
                    </li>
                    <li>
                      <h4>Dota 2</h4>
                      <span>Sandbox</span>
                    </li>
                    <li>
                      <h4>Date Added</h4>
                      <span>24/08/2036</span>
                    </li>
                    <li>
                      <h4>Hours Played</h4>
                      <span>634 H 22 Mins</span>
                    </li>
                    <li>
                      <h4>Currently</h4>
                      <span>Downloaded</span>
                    </li>
                    <li>
                      <div class="main-border-button border-no-active">
                        <a href="#">Downloaded</a>
                      </div>
                    </li>
                  </ul>
                </div>
                <div class="item">
                  <ul>
                    <li>
                      <img
                        src="assets/images/game-02.jpg"
                        alt=""
                        class="templatemo-item"
                      />
                    </li>
                    <li>
                      <h4>Fortnite</h4>
                      <span>Sandbox</span>
                    </li>
                    <li>
                      <h4>Date Added</h4>
                      <span>22/06/2036</span>
                    </li>
                    <li>
                      <h4>Hours Played</h4>
                      <span>740 H 52 Mins</span>
                    </li>
                    <li>
                      <h4>Currently</h4>
                      <span>Downloaded</span>
                    </li>
                    <li>
                      <div class="main-border-button">
                        <a href="#">Donwload</a>
                      </div>
                    </li>
                  </ul>
                </div>
                <div class="item last-item">
                  <ul>
                    <li>
                      <img
                        src="assets/images/game-03.jpg"
                        alt=""
                        class="templatemo-item"
                      />
                    </li>
                    <li>
                      <h4>CS-GO</h4>
                      <span>Sandbox</span>
                    </li>
                    <li>
                      <h4>Date Added</h4>
                      <span>21/04/2036</span>
                    </li>
                    <li>
                      <h4>Hours Played</h4>
                      <span>892 H 14 Mins</span>
                    </li>
                    <li>
                      <h4>Currently</h4>
                      <span>Downloaded</span>
                    </li>
                    <li>
                      <div class="main-border-button border-no-active">
                        <a href="#">Donwloaded</a>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="main-button">
                  <a href="profile.html">View Your Library</a>
                </div>
              </div>
            </div> -->
            <!-- ***** Gaming Library End ***** -->
          </div>
        </div>
      </div>
    </div>

    <footer>
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <p>
              Copyright © 2022 <a href="#">Antzein</a> Company. All rights
              reserved.

              <!-- <br />Design: -->
              <!-- <a
                href="https://templatemo.com"
                target="_blank"
                title="free CSS templates"
                >TemplateMo</a
              > -->
            </p>
          </div>
        </div>
      </div>
    </footer>

    <!-- Scripts -->
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/isotope.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/tabs.js"></script>
    <script src="assets/js/popup.js"></script>
    <script src="assets/js/custom.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <?php require '../page/layout/footer.php'; ?>    
  </body>
</html>
