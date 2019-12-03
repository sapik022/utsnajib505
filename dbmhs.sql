-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 03 Des 2019 pada 15.14
-- Versi Server: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbmhs`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `loh_update`
--

CREATE TABLE `loh_update` (
  `id_log` int(15) NOT NULL,
  `nim` varchar(30) NOT NULL,
  `no_lama` varchar(15) NOT NULL,
  `no_baru` varchar(15) NOT NULL,
  `waktu_perubahan` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `loh_update`
--

INSERT INTO `loh_update` (`id_log`, `nim`, `no_lama`, `no_baru`, `waktu_perubahan`) VALUES
(8, '161240000515', '45684758475', '0896646546', '2019-11-06 11:50:52'),
(9, '161240000705', '085343487438', '085343487438', '2019-11-12 08:31:08');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `idmhs` int(11) NOT NULL,
  `nim` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `telp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`idmhs`, `nim`, `nama`, `jenis_kelamin`, `alamat`, `telp`) VALUES
(1, '161240000505', 'muhammad safiun najib', 'Laki-Laki', 'guyangan rt 01/05', '6575757656495'),
(2, '161240000515', 'muhammad sakti ababil', 'Laki-Laki', 'panggang rt 01/05', '0896646546'),
(3, '161240000504', 'azhar salim', 'laki laki', 'kauman rt 02/04', '089723238273'),
(4, '161240000345', 'arkiy', 'laki laki', 'tahunan rt 05/12', '082345787548'),
(5, '161240000705', 'cahya setyowati', 'Laki-Laki', 'tahunan rt 01/06', '085343487438'),
(6, '161232749', 'bambang', 'Laki-Laki', 'jepara', '0897784756'),
(7, '134566767', 'kiswatul', 'Perempuan', 'bangsri', '08973834376'),
(8, '1245578798', 'sapikung', 'Laki-Laki', 'demak', '0897675657'),
(9, '12455787955', 'jujur', 'Laki-Laki', 'gunung', '12689899'),
(10, '1245578745', 'sasa', 'Perempuan', 'desa', '99897987'),
(11, '1246778776', 'sadert', 'Laki-Laki', 'kudus', '0894745674'),
(12, '10833434', 'dede', 'Laki-Laki', 'jepara', '08974837483');

--
-- Trigger `mahasiswa`
--
DELIMITER $$
CREATE TRIGGER `before_update` BEFORE UPDATE ON `mahasiswa` FOR EACH ROW BEGIN
INSERT INTO loh_update
set nim = OLD.nim,
no_baru=new.telp,
no_lama=old.telp,
waktu_perubahan = NOW(); 
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Stand-in structure for view `tampil`
--
CREATE TABLE `tampil` (
`idmhs` int(11)
,`nim` varchar(20)
,`nama` varchar(50)
,`jenis_kelamin` varchar(10)
,`alamat` varchar(100)
,`telp` varchar(20)
);

-- --------------------------------------------------------

--
-- Struktur untuk view `tampil`
--
DROP TABLE IF EXISTS `tampil`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `tampil`  AS  (select `mahasiswa`.`idmhs` AS `idmhs`,`mahasiswa`.`nim` AS `nim`,`mahasiswa`.`nama` AS `nama`,`mahasiswa`.`jenis_kelamin` AS `jenis_kelamin`,`mahasiswa`.`alamat` AS `alamat`,`mahasiswa`.`telp` AS `telp` from `mahasiswa`) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `loh_update`
--
ALTER TABLE `loh_update`
  ADD PRIMARY KEY (`id_log`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`idmhs`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `loh_update`
--
ALTER TABLE `loh_update`
  MODIFY `id_log` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `idmhs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
