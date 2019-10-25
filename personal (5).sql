-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2019 at 06:12 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `personal`
--

-- --------------------------------------------------------

--
-- Table structure for table `biodata`
--

CREATE TABLE `biodata` (
  `id_biodata` char(10) NOT NULL,
  `profesi` varchar(100) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jk` varchar(50) NOT NULL,
  `ttl` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `agama` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `foto` varchar(1000) NOT NULL,
  `resume` text NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `biodata`
--

INSERT INTO `biodata` (`id_biodata`, `profesi`, `nama`, `jk`, `ttl`, `alamat`, `agama`, `status`, `foto`, `resume`, `keterangan`) VALUES
('B001', 'Web Developer, Web Designer, Graphic Designer', 'Alinsyah Mardi Putri', 'Perempuan', 'Malang, 25 Juli 2002', 'Jl. West Blue No.12', 'Islam', 'Wanita Sholehah', 'B001.jpg', 'Hai... Nama saya Alin, saya Masih Sekolah. Saya ahli dalam Web Development, Web Desain dan Desain Grafis. Umur saya 17 Tahun, Saya tinggal di Blimbing, Malang, Jawa Timur.', '\"Malu Bertanya Sesat Dijalan!!!\"');

-- --------------------------------------------------------

--
-- Table structure for table `pendidikan`
--

CREATE TABLE `pendidikan` (
  `id_pendidikan` char(10) NOT NULL,
  `sekolah_asal` varchar(50) NOT NULL,
  `tahun_ajaran` varchar(50) NOT NULL,
  `foto` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pendidikan`
--

INSERT INTO `pendidikan` (`id_pendidikan`, `sekolah_asal`, `tahun_ajaran`, `foto`) VALUES
('PD001', 'TK - Al - Amin 2', 'Tahun 2005 - 2006', 'PD001.jpg'),
('PD002', 'SDN Blimbing 4 Malang', 'Tahun 2007 - 2012', 'PD002.jpg'),
('PD003', 'SMPN 14 Malang', 'Tahun 2013 - 2016', 'PD003.jpg'),
('PD004', 'SMKN 5 Malang', 'Tahun 2017 - 2019', 'PD004.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pengalaman`
--

CREATE TABLE `pengalaman` (
  `id_pengalaman` char(10) NOT NULL,
  `keterangan` text NOT NULL,
  `foto` varchar(1000) NOT NULL,
  `nama_perusahaan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengalaman`
--

INSERT INTO `pengalaman` (`id_pengalaman`, `keterangan`, `foto`, `nama_perusahaan`) VALUES
('PG001', 'Saya Pernah menjadi Pengembang Web di EraBisnis.co.id.Percaya bahwa kehadiran online yang baik adalah kunci kesuksesan di dunia digital ini. Terlepas dari produk atau layanan Anda, itu harus memiliki tata letak dan konten desain yang baik untuk mendapatkan perhatian pengguna potensial. Kami hadir untuk membantu Anda mewujudkan situs web kelas dunia.', 'PG001.jpg', 'erabisnis.co.id');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

CREATE TABLE `portfolio` (
  `id_portfolio` char(10) NOT NULL,
  `foto` varchar(1000) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`id_portfolio`, `foto`, `keterangan`) VALUES
('PT001', 'PT001.jpg', 'My Wordpress'),
('PT002', 'perpus.jpg', 'Perpustakaan Login'),
('PT003', 'PT003.jpg', 'Websiteku');

-- --------------------------------------------------------

--
-- Table structure for table `skill`
--

CREATE TABLE `skill` (
  `id_skill` int(10) NOT NULL,
  `nama_skill` varchar(500) NOT NULL,
  `persentase` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skill`
--

INSERT INTO `skill` (`id_skill`, `nama_skill`, `persentase`) VALUES
(2, 'HTML5/CSS', 90),
(3, 'WordPress', 90),
(4, 'PHP', 97),
(5, 'Java', 80),
(6, 'Design', 90),
(7, 'Ruby', 50),
(8, 'Python', 95),
(9, 'jQuery', 80);

-- --------------------------------------------------------

--
-- Table structure for table `sosmed`
--

CREATE TABLE `sosmed` (
  `id_sosmed` char(10) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `username` varchar(225) NOT NULL,
  `keterangan` text NOT NULL,
  `foto` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sosmed`
--

INSERT INTO `sosmed` (`id_sosmed`, `nama`, `username`, `keterangan`, `foto`) VALUES
('S001', 'Alinsyah Mardi Putri', 'alinsyhmrdptr_', 'Uvuweve Uvwe Ossass', 'S001.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` char(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `level`) VALUES
('ace', '360e2ece07507675dced80ba867d6dcd', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `biodata`
--
ALTER TABLE `biodata`
  ADD PRIMARY KEY (`id_biodata`);

--
-- Indexes for table `pendidikan`
--
ALTER TABLE `pendidikan`
  ADD PRIMARY KEY (`id_pendidikan`);

--
-- Indexes for table `pengalaman`
--
ALTER TABLE `pengalaman`
  ADD PRIMARY KEY (`id_pengalaman`);

--
-- Indexes for table `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id_portfolio`);

--
-- Indexes for table `skill`
--
ALTER TABLE `skill`
  ADD PRIMARY KEY (`id_skill`);

--
-- Indexes for table `sosmed`
--
ALTER TABLE `sosmed`
  ADD PRIMARY KEY (`id_sosmed`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `skill`
--
ALTER TABLE `skill`
  MODIFY `id_skill` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
