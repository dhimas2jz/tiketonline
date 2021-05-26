-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2019 at 10:03 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 5.6.39

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_tiket`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_lupapassword`
--

CREATE TABLE `tb_lupapassword` (
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_lupapassword`
--

INSERT INTO `tb_lupapassword` (`email`) VALUES
('yuliadharyani@gmail.com'),
('anjay@ymail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pemesanan`
--

CREATE TABLE `tb_pemesanan` (
  `id_pemesanan` varchar(50) NOT NULL,
  `kode_pemesanan` varchar(20) NOT NULL,
  `tanggal_pemesanan` date NOT NULL,
  `id_pelanggan` varchar(50) NOT NULL,
  `kode_kursi` varchar(50) NOT NULL,
  `id_rute` varchar(50) NOT NULL,
  `tanggal_berangkat` date NOT NULL,
  `jam_berangkat` time NOT NULL,
  `total_bayar` varchar(15) NOT NULL,
  `verifikasi` enum('Sudah Bayar','Belum Bayar') NOT NULL,
  `id_pengurus` varchar(50) NOT NULL,
  `bukti_pembayaran` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pemesanan`
--

INSERT INTO `tb_pemesanan` (`id_pemesanan`, `kode_pemesanan`, `tanggal_pemesanan`, `id_pelanggan`, `kode_kursi`, `id_rute`, `tanggal_berangkat`, `jam_berangkat`, `total_bayar`, `verifikasi`, `id_pengurus`, `bukti_pembayaran`) VALUES
('2dabea12-7a6d-47e7-829d-8454dcea4cd2', 'PSW08042019002', '2019-04-08', '03a32de1-9dec-4b38-9909-00287553c756', 'PSTKK20190408002', '3b01d5c4-0806-4949-b5c8-7065190490d2', '2019-04-10', '21:09:00', '300000', 'Sudah Bayar', '', 'IMG_0882.JPG'),
('7e2c8f3d-0d87-4db0-9206-c4eae8c474ac', 'PSW11042019004', '2019-04-11', '4e68346f-1818-44c0-b7e3-af11b69a5ef4', 'PSTKK20190411004', '1fade36e-0a3b-417b-a22a-6bff9b2927d2', '2019-04-09', '22:00:00', '1250000', 'Belum Bayar', '', 'bukti_transfer1-1.jpeg'),
('a97540c9-4533-4a62-b346-1cfbbb63ee7f', 'PSW08042019003', '2019-04-08', '4e68346f-1818-44c0-b7e3-af11b69a5ef4', 'PSTKK20190408003', '1fade36e-0a3b-417b-a22a-6bff9b2927d2', '2019-04-09', '22:00:00', '1250000', 'Sudah Bayar', '', '1130817_12bb07c5-eb1b-4e0a-9836-ffba6a72a300.jpg'),
('daf640ad-cbc8-4d12-836a-fe8ba17aa826', 'PSW08042019002', '2019-04-08', '03a32de1-9dec-4b38-9909-00287553c756', 'PSTKK20190408002', '3b01d5c4-0806-4949-b5c8-7065190490d2', '2019-04-09', '22:00:00', '300000', 'Sudah Bayar', '', '1130817_12bb07c5-eb1b-4e0a-9836-ffba6a72a300.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengurus`
--

CREATE TABLE `tb_pengurus` (
  `id_pengurus` varchar(50) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama_pengurus` varchar(60) NOT NULL,
  `level` enum('admin','petugas') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pengurus`
--

INSERT INTO `tb_pengurus` (`id_pengurus`, `username`, `password`, `nama_pengurus`, `level`) VALUES
('304001b1-25ce-11e9-963d-ac220b6f42c9', 'petugas', '670489f94b6997a870b148f74744ee5676304925', 'Elvine Bariel', 'petugas'),
('c55f597c-2236-11e9-963d-ac220b6f42c9', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'Dhimas Marwahyu', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tb_penumpang`
--

CREATE TABLE `tb_penumpang` (
  `id_penumpang` varchar(50) NOT NULL,
  `email` varchar(20) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `nama_penumpang` varchar(50) NOT NULL,
  `alamat_penumpang` varchar(100) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` enum('Laki-Laki','Perempuan') NOT NULL,
  `telephone` varchar(17) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_penumpang`
--

INSERT INTO `tb_penumpang` (`id_penumpang`, `email`, `username`, `password`, `nama_penumpang`, `alamat_penumpang`, `tanggal_lahir`, `jenis_kelamin`, `telephone`) VALUES
('2d9893a0-e3f3-4afe-9350-1978a0bc9b98', 'shanju48@yahoo.co.id', 'shania', 'shania123', 'Shania Junianatha', 'Jalan Sudirman Said, No.32 ,IKEA selatan UI 03/07 Jakarta', '1998-05-09', 'Perempuan', '081212218978'),
('4e68346f-1818-44c0-b7e3-af11b69a5ef4', 'pamungkasih@gmail.co', 'pamungkas', 'pamungkas123', 'Pamungkas Dwi Prasetya', 'Jalan Kedoya Barat No.12A , Jakarta Selatan.', '2001-04-10', 'Laki-Laki', '0812157388812'),
('805bc64b-7694-4daf-8fb3-6628610e02cd', 'nadiadev@gmail.com', 'nadia', 'nadia123', 'Nadia Deviana', 'Jalan Laladon Indah, No.74 RT06/07 Bogor', '2001-04-11', 'Perempuan', '0895167962215');

-- --------------------------------------------------------

--
-- Table structure for table `tb_rute`
--

CREATE TABLE `tb_rute` (
  `id_rute` varchar(50) NOT NULL,
  `tujuan` varchar(60) NOT NULL,
  `rute_awal` varchar(60) NOT NULL,
  `rute_akhir` varchar(60) NOT NULL,
  `harga` varchar(20) NOT NULL,
  `id_transportasi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_rute`
--

INSERT INTO `tb_rute` (`id_rute`, `tujuan`, `rute_awal`, `rute_akhir`, `harga`, `id_transportasi`) VALUES
('1fade36e-0a3b-417b-a22a-6bff9b2927d2', 'Bali', 'Jakarta', 'Bali', '1250000', '332bf932-462f-4e9c-9280-7c9a7e2a5f51'),
('3824ce48-f41b-4f47-a498-25d7cfd5c400', 'Solo', 'Bogor', 'Solo', '300000', '963d8bd6-fcfa-47cf-8ead-fd73e2653f06'),
('3b01d5c4-0806-4949-b5c8-7065190490d2', 'Malang', 'Jakarta', 'Malang', '300000', '332bf932-462f-4e9c-9280-7c9a7e2a5f51'),
('4a5fa783-05d2-4f22-a589-e32a7ef6baa8', 'Depok', 'Bogor', 'Depok', '20000', '963d8bd6-fcfa-47cf-8ead-fd73e2653f06'),
('531021ab-3153-4bda-92ad-4fd918d72fcf', 'Jogjakarta', 'Bogor', 'Jogjakarta', '200000', '963d8bd6-fcfa-47cf-8ead-fd73e2653f06'),
('632033c6-51e0-4729-b8c4-dc23fa95519e', 'Surabaya', 'Jakarta', 'Surabaya', '800000', '332bf932-462f-4e9c-9280-7c9a7e2a5f51');

-- --------------------------------------------------------

--
-- Table structure for table `tb_subsemail`
--

CREATE TABLE `tb_subsemail` (
  `subsemail` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_subsemail`
--

INSERT INTO `tb_subsemail` (`subsemail`) VALUES
(''),
(''),
(''),
('');

-- --------------------------------------------------------

--
-- Table structure for table `tb_transportasi`
--

CREATE TABLE `tb_transportasi` (
  `id_transportasi` varchar(50) NOT NULL,
  `kode` varchar(50) NOT NULL,
  `jumlah_kursi` varchar(50) NOT NULL,
  `keterangan` varchar(60) NOT NULL,
  `nama_transportasi` enum('KAI','Garuda Indonesia','Citilink','Air Asia','Lion Air','Batik Air','Wings Air','Sriwijaya Air','NAM','Kalstar','Trigana Air','Xpress Air','Trans Nusa','Silk Air','Singapore Airlines','Tiger Air','Jet Star','Qatar Airways','Fly Emirates','Ethiad Air','Qantas','Cathay Pacific','ANA','Korean Air') NOT NULL,
  `id_type_transportasi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_transportasi`
--

INSERT INTO `tb_transportasi` (`id_transportasi`, `kode`, `jumlah_kursi`, `keterangan`, `nama_transportasi`, `id_type_transportasi`) VALUES
('332bf932-462f-4e9c-9280-7c9a7e2a5f51', 'PSW', '50', 'kosong', 'Garuda Indonesia', 'c4954544-cfbd-41f6-891f-d051e5823848'),
('963d8bd6-fcfa-47cf-8ead-fd73e2653f06', 'KRT', '100', 'kosong', 'KAI', '5755bea2-5367-4751-b33f-8dca89af79e0');

-- --------------------------------------------------------

--
-- Table structure for table `tb_type_transportasi`
--

CREATE TABLE `tb_type_transportasi` (
  `id_type_transportasi` varchar(50) NOT NULL,
  `nama_type` varchar(50) NOT NULL,
  `keterangan` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_type_transportasi`
--

INSERT INTO `tb_type_transportasi` (`id_type_transportasi`, `nama_type`, `keterangan`) VALUES
('5755bea2-5367-4751-b33f-8dca89af79e0', 'Kereta Api', 'kosong'),
('c4954544-cfbd-41f6-891f-d051e5823848', 'Pesawat', 'kosong');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_pemesanan`
--
ALTER TABLE `tb_pemesanan`
  ADD PRIMARY KEY (`id_pemesanan`);

--
-- Indexes for table `tb_pengurus`
--
ALTER TABLE `tb_pengurus`
  ADD PRIMARY KEY (`id_pengurus`);

--
-- Indexes for table `tb_penumpang`
--
ALTER TABLE `tb_penumpang`
  ADD PRIMARY KEY (`id_penumpang`);

--
-- Indexes for table `tb_rute`
--
ALTER TABLE `tb_rute`
  ADD PRIMARY KEY (`id_rute`);

--
-- Indexes for table `tb_transportasi`
--
ALTER TABLE `tb_transportasi`
  ADD PRIMARY KEY (`id_transportasi`);

--
-- Indexes for table `tb_type_transportasi`
--
ALTER TABLE `tb_type_transportasi`
  ADD PRIMARY KEY (`id_type_transportasi`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
