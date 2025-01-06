-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2025 at 04:21 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kesiswaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `absen`
--

CREATE TABLE `absen` (
  `nis` varchar(30) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jurusan` varchar(30) NOT NULL,
  `absen` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `absen`
--

INSERT INTO `absen` (`nis`, `nama`, `jurusan`, `absen`) VALUES
('3312411066', 'Arwan Pradpita', 'apa aja', 'Hadir'),
('33124111', 'Fajar Pradpita', 'Tata Boga', 'SAKIT'),
('3312411099', 'Nayla', 'Tata Boga', 'Sakit');

-- --------------------------------------------------------

--
-- Table structure for table `datasiswa`
--

CREATE TABLE `datasiswa` (
  `nis` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `kelamin` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `datasiswa`
--

INSERT INTO `datasiswa` (`nis`, `nama`, `jurusan`, `kelamin`) VALUES
('3312411069', 'Arwan Pradpita', 'ips', 'Laki - Laki'),
('3312411063', 'Ramadhani Akbar', 'Teknik Informatika', 'Laki - Laki');

-- --------------------------------------------------------

--
-- Table structure for table `data_siswa`
--

CREATE TABLE `data_siswa` (
  `nis` varchar(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jurusan` varchar(150) NOT NULL,
  `jk` varchar(30) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_siswa`
--

INSERT INTO `data_siswa` (`nis`, `nama`, `jurusan`, `jk`, `foto`) VALUES
('3312411066', 'Arwan Pradpita', 'TKJ', 'Laki-laki', 'arwan.jpg'),
('3312411063', 'Muhammad Fajar', 'Teknik Mesin', 'Laki-laki', 'fajar.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `point`
--

CREATE TABLE `point` (
  `nis` varchar(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jurusan` varchar(30) NOT NULL,
  `total_point` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `point`
--

INSERT INTO `point` (`nis`, `nama`, `jurusan`, `total_point`) VALUES
('3312411063', 'Ramadhani ', 'TKJ', '255'),
('3312411066', 'Gilly GG', 'TKJ', '1111'),
('3312411063', 'Ramadhani ', 'TKJ', '255');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` varchar(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `role`) VALUES
('001', 'fajar', '$2y$10$B9Ho26pJ4i9fOBoMqfywLeEk7B8qHWyiCPlDkZUYLglzf0JWjCDRO', 'staff'),
('1', 'dani', '$2y$10$cK5XOA9B6FdLa7CDJ1FypuiFyJ4h9O4g7DVRw9iucCmHJwO2xhi22', 'mahasiswa'),
('002', 'gilly', '$2y$10$Ji2xubi7KBfafGDji0MUk.HrYuZBvE5FTgpMAV10I7ZZGmwbSfhtK', 'staff'),
('003', 'nayla', '$2y$10$Dx7ejDogrzbrj6ku94MD3eiyTwWLE84ZEskSk9Z6pbZ0XQGc/pd.C', 'staff'),
('0001', 'Gilly', '$2y$10$4Nuj3.bg99KpZetJHnaF5.R7U33RjR1Xrp/Wcu9aUXs9xwzjdTwdm', 'staff'),
('004', 'Arwan Pradipta', '$2y$10$9U6I2hM2CfTxaNTGhtW3vuTeRoIV8VKoT6oH0FToD5eWTVd.s5hHO', 'siswa'),
('010', 'Gilly', '$2y$10$J1wLdGwp1I05Dk79hrjluuzKlbgXmQa38HScdKfOtz4/6J4mjV2Dm', 'staff'),
('007', 'Fajar', '$2y$10$KVlHnmbUeVFg5a2WVMmn8.EMw6tpjRj88wQ9N.4iKxBOPdmDl7QUm', 'siswab'),
('008', 'Muhammad Fajar', '$2y$10$4VtBBLxeMMZPyIQq5nxyJOV5avmO1x3lxho9Hy7STxxTYKwt4aAF.', 'siswab');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
