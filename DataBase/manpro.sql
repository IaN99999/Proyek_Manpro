-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2023 at 03:48 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `manpro`
--

-- --------------------------------------------------------

--
-- Table structure for table `absen`
--

CREATE TABLE `absen` (
  `Id_Absen` int(11) NOT NULL,
  `Id_Siswa` int(11) NOT NULL,
  `Id_Jadwal` int(11) NOT NULL,
  `Tanggal_Absen` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `Id_Class` int(11) NOT NULL,
  `Id_Guru` int(11) NOT NULL,
  `Id_Siswa` int(11) NOT NULL,
  `Nama_Class` varchar(100) NOT NULL,
  `Periode` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`Id_Class`, `Id_Guru`, `Id_Siswa`, `Nama_Class`, `Periode`) VALUES
(1, 1, 1, 'Beginner', ''),
(2, 1, 1, 'EXPERT', '');

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `Id_Guru` int(11) NOT NULL,
  `Nama_Guru` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Id_Class` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `harga`
--

CREATE TABLE `harga` (
  `Id_Harga` int(11) NOT NULL,
  `Id_Class` int(11) NOT NULL,
  `session` int(11) NOT NULL,
  `Price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `harga`
--

INSERT INTO `harga` (`Id_Harga`, `Id_Class`, `session`, `Price`) VALUES
(0, 1, 15, 12310),
(0, 2, 15, 2139);

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `Id_Jadwal` int(11) NOT NULL,
  `Id_Class` int(11) NOT NULL,
  `Tanggal_Jadwal` date NOT NULL,
  `Id_Absen` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE `nilai` (
  `Id_Nilai` int(11) NOT NULL,
  `Id_Siswa` int(11) NOT NULL,
  `Nilai` varchar(11) NOT NULL,
  `Tipe` varchar(100) NOT NULL,
  `Keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `Id_Payment` int(11) NOT NULL,
  `Id_Siswa` int(11) NOT NULL,
  `Id_Class` int(11) NOT NULL,
  `Tanggal_Payment` int(11) NOT NULL,
  `Bukti_Payment` blob NOT NULL,
  `Approve_Payment` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `Id_Siswa` int(11) NOT NULL,
  `Nama_Siswa` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Id_Class` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`Id_Siswa`, `Nama_Siswa`, `Email`, `Password`, `Id_Class`) VALUES
(1, 'wadawdaw', 'dawdsefe', 'dqdwdwd', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Id_User` int(11) NOT NULL,
  `Nama_User` varchar(100) NOT NULL,
  `Jenis_User` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Id_Class` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Id_User`, `Nama_User`, `Jenis_User`, `Email`, `Password`, `Id_Class`) VALUES
(1, 'andre', '2', 'leocristian581@gmail.com', '123456', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Id_User`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
