-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2024 at 04:33 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kampus`
--

-- --------------------------------------------------------

--
-- Table structure for table `datamahasiswa`
--

CREATE TABLE `datamahasiswa` (
  `id_mahasiswa` int(10) NOT NULL,
  `nim` bigint(20) DEFAULT NULL,
  `nama` varchar(100) NOT NULL,
  `tempat_tanggal_lahir` varchar(100) NOT NULL,
  `fakultas` varchar(100) NOT NULL,
  `prodi` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `datamahasiswa`
--

INSERT INTO `datamahasiswa` (`id_mahasiswa`, `nim`, `nama`, `tempat_tanggal_lahir`, `fakultas`, `prodi`, `alamat`, `email`) VALUES
(101, 220651101, 'Moh. Reza Alfi Ali', 'Jember, 1 Januari 2001', 'Teknik', 'Teknik Informatika', 'Jember', 'arif.budiman@gmail.com'),
(102, 220651102, 'Budi Wijaya', 'Jember, 2 Februari 2001', 'Teknik', 'Teknik Industri', 'Jember', 'budi.wijaya@gmail.com'),
(103, 220651103, 'Cici Andini', 'Jember, 3 Maret 2001', 'Teknik', 'Sistem Informasi', 'Jember', 'cici.andini@gmail.com'),
(104, 220651104, 'Doni Setiawan', 'Jember, 4 April 2001', 'Teknik', 'Teknik Mesin', 'Jember', 'doni.setiawan@gmail.com'),
(105, 220651105, 'Eka Putri', 'Jember, 5 Mei 2001', 'Teknik', 'Teknik Elektro', 'Jember', 'eka.putri@gmail.com'),
(106, 220651106, 'Fajar Prasetyo', 'Jember, 6 Juni 2001', 'Teknik', 'Teknik Kimia', 'Jember', 'fajar.prasetyo@gmail.com'),
(107, 220651107, 'Gita Anggraini', 'Jember, 7 Juli 2001', 'Teknik', 'Arsitektur', 'Jember', 'gita.anggraini@gmail.com'),
(108, 220651108, 'Hadi Wibowo', 'Jember, 8 Agustus 2001', 'Teknik', 'Teknik Sipil', 'Jember', 'hadi.wibowo@gmail.com'),
(109, 220651109, 'Indah Permata', 'Jember, 9 September 2001', 'Teknik', 'Teknik Lingkungan', 'Jember', 'indah.permata@gmail.com'),
(110, 220651110, 'Joko Susanto', 'Jember, 10 Oktober 2001', 'Teknik', 'Teknik Perkapalan', 'Jember', 'joko.susanto@gmail.com'),
(111, 220651111, 'Kiki Andriana', 'Jember, 11 November 2001', 'Teknik', 'Teknik Geologi', 'Jember', 'kiki.andriana@gmail.com'),
(112, 220651112, 'Lia Pertiwi', 'Jember, 12 Desember 2001', 'Teknik', 'Teknik Pertambangan', 'Jember', 'lia.pertiwi@gmail.com'),
(113, 220651113, 'Maya Sari', 'Jember, 13 Januari 2002', 'Teknik', 'Teknik Nuklir', 'Jember', 'maya.sari@gmail.com'),
(114, 220651114, 'Nina Kusuma', 'Jember, 14 Februari 2002', 'Teknik', 'Teknik Informatika', 'Jember', 'nina.kusuma@gmail.com'),
(115, 220651115, 'Oni Setiawan', 'Jember, 15 Maret 2002', 'Teknik', 'Teknik Industri', 'Jember', 'oni.setiawan@gmail.com'),
(116, 220651116, 'Prita Ayu', 'Jember, 16 April 2002', 'Teknik', 'Sistem Informasi', 'Jember', 'prita.ayu@gmail.com'),
(117, 220651117, 'Rina Hartati', 'Jember, 17 Mei 2002', 'Teknik', 'Teknik Mesin', 'Jember', 'rina.hartati@gmail.com'),
(118, 220651118, 'Siti Nurhaliza', 'Jember, 18 Juni 2002', 'Teknik', 'Teknik Elektro', 'Jember', 'siti.nurhaliza@gmail.com'),
(119, 220651119, 'Taufik Hidayat', 'Jember, 19 Juli 2002', 'Teknik', 'Teknik Kimia', 'Jember', 'taufik.hidayat@gmail.com'),
(120, 220651120, 'Usman Wijaya', 'Jember, 20 Agustus 2002', 'Teknik', 'Arsitektur', 'Jember', 'usman.wijaya@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `matakuliah`
--

CREATE TABLE `matakuliah` (
  `id_matakuliah` int(10) NOT NULL,
  `kode_matakuliah` varchar(20) NOT NULL,
  `nama_matakuliah` varchar(100) NOT NULL,
  `sks` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `matakuliah`
--

INSERT INTO `matakuliah` (`id_matakuliah`, `kode_matakuliah`, `nama_matakuliah`, `sks`) VALUES
(1, 'MKK00', 'Pemrograman Web Dasar', 4),
(2, 'MK001', 'Matematika Dasar', 3),
(3, 'MK002', 'Fisika Dasar', 3),
(4, 'MK003', 'Kimia Dasar', 3),
(5, 'MK004', 'Biologi Dasar', 3),
(6, 'MK005', 'Bahasa Inggris', 2),
(7, 'MK006', 'Pemrograman Dasar', 3),
(8, 'MK007', 'Algoritma dan Struktur Data', 3),
(9, 'MK008', 'Basis Data', 3),
(11, 'MK010', 'Rekayasa Perangkat Lunak', 3),
(12, 'MK011', 'Jaringan Komputer', 3),
(13, 'MK012', 'Sistem Operasi', 3),
(14, 'MK013', 'Manajemen Proyek', 3),
(16, 'MK015', 'Kalkulus', 3),
(18, 'MK017', 'Logika Informatika', 3);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`) VALUES
(10, 'admin', 'adm', 'mohrezaalfiali123@gmail.com'),
(11, 'reza', '123', 'mohrezaalfiali1234@gmail.com'),
(12, 'sultan', '12345', 'mohrezaalfiali122@gmail.com'),
(13, 'jamal', 'jamal', 'jamal@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `datamahasiswa`
--
ALTER TABLE `datamahasiswa`
  ADD PRIMARY KEY (`id_mahasiswa`);

--
-- Indexes for table `matakuliah`
--
ALTER TABLE `matakuliah`
  ADD PRIMARY KEY (`id_matakuliah`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `datamahasiswa`
--
ALTER TABLE `datamahasiswa`
  MODIFY `id_mahasiswa` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;

--
-- AUTO_INCREMENT for table `matakuliah`
--
ALTER TABLE `matakuliah`
  MODIFY `id_matakuliah` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
