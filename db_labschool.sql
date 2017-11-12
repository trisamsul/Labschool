-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2017 at 02:44 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_labschool`

--

CREATE DATABASE db_labschool;
USE db_labschool;

-- --------------------------------------------------------

--
-- Table structure for table `tb_akun`
--

CREATE TABLE `tb_akun` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_akun`
--

INSERT INTO `tb_akun` (`id`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `tb_berita`
--

CREATE TABLE `tb_berita` (
  `berita_id` int(11) NOT NULL,
  `berita_judul` text NOT NULL,
  `berita_tanggal` date NOT NULL,
  `berita_teks` text NOT NULL,
  `berita_foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_berita`
--

INSERT INTO `tb_berita` (`berita_id`, `berita_judul`, `berita_tanggal`, `berita_teks`, `berita_foto`) VALUES
(1, 'Duta Departemen Pendidikan Ilmu Komputer Memenangkan Lomba UX Gemastik 10', '2017-11-10', 'Bounce Team, selaku duta Departemen Pendidikan Ilmu Komputer berhasil menjuarai Lomba User Experience (UX) pada Pagelaran Mahasiswa Nasional Bidang TIK ke-10 (GEMASTIK 10) yang diadakan di Universitas Indonesia pada tanggal 4 November 2017.', 'Berita_00001.jpg'),
(2, 'Dummy', '2017-11-11', '<p>afkjansolkfmsklamfoklasnmofnmasoilmfsoal</p>', 'Berita_1510425238.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_riset`
--

CREATE TABLE `tb_riset` (
  `riset_id` int(11) NOT NULL,
  `riset_judul` text NOT NULL,
  `riset_bidang` text NOT NULL,
  `riset_penulis` text NOT NULL,
  `riset_tahun` text NOT NULL,
  `riset_file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_akun`
--
ALTER TABLE `tb_akun`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_berita`
--
ALTER TABLE `tb_berita`
  ADD PRIMARY KEY (`berita_id`);

--
-- Indexes for table `tb_riset`
--
ALTER TABLE `tb_riset`
  ADD PRIMARY KEY (`riset_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_akun`
--
ALTER TABLE `tb_akun`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_berita`
--
ALTER TABLE `tb_berita`
  MODIFY `berita_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_riset`
--
ALTER TABLE `tb_riset`
  MODIFY `riset_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
