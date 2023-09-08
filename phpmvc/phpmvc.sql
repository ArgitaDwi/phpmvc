-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 08, 2023 at 08:05 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpmvc`
--

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `id` int(10) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `jenis_kelamin` varchar(225) NOT NULL,
  `alamat` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`id`, `nama`, `jenis_kelamin`, `alamat`) VALUES
(4, 'fikrotu', 'laki-laki', 'tugu'),
(7, 'Wahyu Tri Wulan', 'perempuan', 'kedungsigit'),
(8, 'Ervi Rahmawati ', 'perempuan', 'Tulungagung'),
(9, 'ivan Zuwanta', 'laki-laki', 'sumbergedong'),
(10, 'Estri Handayani', 'perempuan', 'tugu'),
(11, 'Novi Dyah Puspitasari', 'perempuan', 'sumbergedong'),
(12, 'Labib fayumi', 'laki-laki', ''),
(13, 'Safira maya Shovie', 'laki-laki', '');

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE `jurusan` (
  `id` int(10) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`id`, `nama`) VALUES
(2, 'Rekayasa Perangkat Lunak'),
(5, 'Desain Permodelan dan Informasi bangunan'),
(7, 'Kuliner'),
(8, 'Akuntansi'),
(9, 'Teknik pemanasan,tata udara,dan pendinginan'),
(10, 'Teknik pengelasan'),
(11, 'Teknik kontruksi dan perumahan');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id` int(10) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `jenis_kelamin` varchar(225) NOT NULL,
  `alamat` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id`, `nama`, `jenis_kelamin`, `alamat`) VALUES
(3, 'argita', 'p', 'karangan'),
(12, 'Detra Rosiana', 'perempuan', 'tugu'),
(13, 'Dela Ayu', 'perempuan', 'jati prahu'),
(14, 'Devi saputri', 'perempuan', 'pule'),
(15, 'Ardiya Nazilia Renta', 'perempuan', 'karangan'),
(16, 'Abela Nidia Eka ', 'perempuan', 'pule'),
(17, 'Alysa Febiya M', 'perempuan', 'pule'),
(18, 'Dinda Ejelina A', 'perempuan', 'tugu'),
(19, 'Alvin top Ahmad', 'laki-laki', 'sumbergedong'),
(20, 'Arkan Arya Reza', 'laki-laki', 'Suruh'),
(21, 'Eka Nanda S', 'laki-laki', 'pule'),
(22, 'Aditiya Fajar N', 'laki-laki', 'Mlinjon'),
(23, 'Aditya Dwi P', 'laki-laki', 'pule'),
(24, 'Cello Javan A', 'laki-laki', 'Sumberingin'),
(25, 'Diaz Ibanes Kaka A', 'laki-laki', 'pule');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `guru`
--
ALTER TABLE `guru`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
