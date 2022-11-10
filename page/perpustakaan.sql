-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2014 at 08:11 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `perpustakaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `bukutbl`
--

CREATE TABLE IF NOT EXISTS `bukutbl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kode_buku` varchar(5) NOT NULL,
  `isbn` varchar(15) NOT NULL,
  `judul_buku` varchar(100) NOT NULL,
  `pengarang` varchar(35) NOT NULL,
  `halaman` varchar(15) NOT NULL,
  `kode_kategori` varchar(5) NOT NULL,
  `kode_rak` varchar(5) NOT NULL,
  `gambar` text NOT NULL,
  `status` varchar(7) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `bukutbl`
--

INSERT INTO `bukutbl` (`id`, `kode_buku`, `isbn`, `judul_buku`, `pengarang`, `halaman`, `kode_kategori`, `kode_rak`, `gambar`, `status`) VALUES
(2, 'B-2', '97845156429', 'Juz"ama', 'Ilham Buchori', '79', 'K-1', 'R-1', 'No IMage.jpg', 'Ada'),
(3, 'B-3', '978-602-7680-28', 'Aplikasi Penjualan dengan Visual Basic 2010', 'Muhammad Sadeli', '194+VI', 'K-2', 'R-2', 'B-3.gif', 'Ada');

-- --------------------------------------------------------

--
-- Table structure for table `kategoritbl`
--

CREATE TABLE IF NOT EXISTS `kategoritbl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kode_kategori` varchar(5) NOT NULL,
  `nama_kategori` varchar(35) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `kategoritbl`
--

INSERT INTO `kategoritbl` (`id`, `kode_kategori`, `nama_kategori`) VALUES
(1, 'K-1', 'Agama'),
(2, 'K-2', 'Komputer'),
(3, 'K-3', 'Kesenian');

-- --------------------------------------------------------

--
-- Table structure for table `peminjamantbl`
--

CREATE TABLE IF NOT EXISTS `peminjamantbl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kode_peminjaman` varchar(5) NOT NULL,
  `kode_peminjam` varchar(5) NOT NULL,
  `kode_buku` varchar(5) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `tgl_kembali` date NOT NULL,
  `catatan` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `peminjamantbl`
--

INSERT INTO `peminjamantbl` (`id`, `kode_peminjaman`, `kode_peminjam`, `kode_buku`, `tgl_pinjam`, `tgl_kembali`, `catatan`) VALUES
(1, 'TP-1', 'P-1', 'B-1', '2014-02-20', '2014-02-27', 'Peminjaman Buku');

-- --------------------------------------------------------

--
-- Table structure for table `peminjamtbl`
--

CREATE TABLE IF NOT EXISTS `peminjamtbl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kode_peminjam` varchar(5) NOT NULL,
  `nama_peminjam` varchar(35) NOT NULL,
  `alamat` text NOT NULL,
  `telepon` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `peminjamtbl`
--

INSERT INTO `peminjamtbl` (`id`, `kode_peminjam`, `nama_peminjam`, `alamat`, `telepon`) VALUES
(1, 'P-1', 'Muhammad Sadeli', 'Palembang', '0711-010101');

-- --------------------------------------------------------

--
-- Table structure for table `pengembaliantbl`
--

CREATE TABLE IF NOT EXISTS `pengembaliantbl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kode_pengembalian` varchar(5) NOT NULL,
  `kode_peminjam` varchar(5) NOT NULL,
  `kode_buku` varchar(5) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `tgl_kembali` date NOT NULL,
  `catatan` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `pengembaliantbl`
--

INSERT INTO `pengembaliantbl` (`id`, `kode_pengembalian`, `kode_peminjam`, `kode_buku`, `tgl_pinjam`, `tgl_kembali`, `catatan`) VALUES
(1, 'TK-1', 'P-1', 'B-1', '2014-02-20', '2014-02-21', 'Pengembalian Buku');

-- --------------------------------------------------------

--
-- Table structure for table `raktbl`
--

CREATE TABLE IF NOT EXISTS `raktbl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kode_rak` varchar(5) NOT NULL,
  `nama_rak` varchar(35) NOT NULL,
  `posisi` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `raktbl`
--

INSERT INTO `raktbl` (`id`, `kode_rak`, `nama_rak`, `posisi`) VALUES
(1, 'R-1', 'R-Agama', 'Depan'),
(2, 'R-2', 'R-Komputer', 'Tengah');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
