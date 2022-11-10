<?php
// session_start();
// if (!isset($_SESSION['username'])) {
//   header("Location: login.php");
//   die();
// }
require 'koneksi.php';
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));

require 'layout/main.php';
?>
