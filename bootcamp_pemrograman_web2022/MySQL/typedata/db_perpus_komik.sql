-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 19, 2022 at 04:36 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_perpus_komik`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `id_hilang` int(11) NOT NULL,
  `id_member` int(11) NOT NULL,
  `id_tambah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `hilang`
--

CREATE TABLE `hilang` (
  `id_hilang` int(11) NOT NULL,
  `judul` varchar(128) NOT NULL,
  `tahun` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `komik`
--

CREATE TABLE `komik` (
  `id_komik` int(11) NOT NULL,
  `judul` varchar(128) NOT NULL,
  `genre` varchar(128) NOT NULL,
  `tahun` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `komik`
--

INSERT INTO `komik` (`id_komik`, `judul`, `genre`, `tahun`) VALUES
(1, 'Shingeki No Kyojin season 1', 'Laga, Fantasi Gelap, Drama, Fiksi Pascaapokaliptik', 2009),
(2, 'Shingeki No Kyojin season 2', 'Laga, Fantasi Gelap, Drama, Fiksi Pascaapokaliptik', 2013),
(3, 'Shingeki No Kyojin season 3', 'Laga, Fantasi Gelap, Drama, Fiksi Pascaapokaliptik', 2017),
(4, 'Shingeki No Kyojin season 4', 'Laga, Fantasi Gelap, Drama, Fiksi Pascaapokaliptik', 2021),
(5, 'Boku No Hero Academia season 1', 'Komedi, Fantasi Ilmiah, Fiksi Pahlawan Super, Fiksi Petualangan', 2019),
(6, 'Jujutsu Kaisen season 1', 'Petualangan, Fantasi Gelap, Supranatural', 2017);

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `tgl_lahir` varchar(128) NOT NULL,
  `id_komik` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `nama`, `tgl_lahir`, `id_komik`) VALUES
(1, 'Riki Widiantoro', '15 November 1998', 6);

-- --------------------------------------------------------

--
-- Table structure for table `pinjam`
--

CREATE TABLE `pinjam` (
  `id` int(11) NOT NULL,
  `judul` varchar(128) NOT NULL,
  `nama_peminjam` varchar(128) NOT NULL,
  `id_komik` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pinjam`
--

INSERT INTO `pinjam` (`id`, `judul`, `nama_peminjam`, `id_komik`) VALUES
(1, 'Jujutsu Kaisen season 1', 'Riki Widiantoro', 6),
(2, 'Toros', '32 Desember 2020', 4);

-- --------------------------------------------------------

--
-- Table structure for table `tambah`
--

CREATE TABLE `tambah` (
  `id_tambah` int(11) NOT NULL,
  `judul` varchar(128) NOT NULL,
  `genre` varchar(128) NOT NULL,
  `tahun` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `id_komik` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`),
  ADD KEY `fk_hilang` (`id_hilang`),
  ADD KEY `fk_member` (`id_member`),
  ADD KEY `fk_tambah` (`id_tambah`);

--
-- Indexes for table `hilang`
--
ALTER TABLE `hilang`
  ADD PRIMARY KEY (`id_hilang`);

--
-- Indexes for table `komik`
--
ALTER TABLE `komik`
  ADD PRIMARY KEY (`id_komik`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_komikk` (`id_komik`);

--
-- Indexes for table `pinjam`
--
ALTER TABLE `pinjam`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_komikkk` (`id_komik`);

--
-- Indexes for table `tambah`
--
ALTER TABLE `tambah`
  ADD PRIMARY KEY (`id_tambah`),
  ADD KEY `fk_komik` (`id_komik`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hilang`
--
ALTER TABLE `hilang`
  MODIFY `id_hilang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `komik`
--
ALTER TABLE `komik`
  MODIFY `id_komik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pinjam`
--
ALTER TABLE `pinjam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tambah`
--
ALTER TABLE `tambah`
  MODIFY `id_tambah` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `fk_hilang` FOREIGN KEY (`id_hilang`) REFERENCES `hilang` (`id_hilang`),
  ADD CONSTRAINT `fk_member` FOREIGN KEY (`id_member`) REFERENCES `member` (`id`),
  ADD CONSTRAINT `fk_tambah` FOREIGN KEY (`id_tambah`) REFERENCES `tambah` (`id_tambah`);

--
-- Constraints for table `member`
--
ALTER TABLE `member`
  ADD CONSTRAINT `fk_komikk` FOREIGN KEY (`id_komik`) REFERENCES `komik` (`id_komik`),
  ADD CONSTRAINT `fk_pinjam` FOREIGN KEY (`id`) REFERENCES `pinjam` (`id`);

--
-- Constraints for table `pinjam`
--
ALTER TABLE `pinjam`
  ADD CONSTRAINT `fk_komikkk` FOREIGN KEY (`id_komik`) REFERENCES `komik` (`id_komik`);

--
-- Constraints for table `tambah`
--
ALTER TABLE `tambah`
  ADD CONSTRAINT `fk_komik` FOREIGN KEY (`id_komik`) REFERENCES `komik` (`id_komik`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
