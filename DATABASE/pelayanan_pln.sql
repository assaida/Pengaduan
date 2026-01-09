-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2022 at 08:47 AM
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
-- Database: `pelayanan_pln`
--

-- --------------------------------------------------------

--
-- Table structure for table `abdul`
--

CREATE TABLE `abdul` (
  `id` int(10) NOT NULL,
  `username` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `abdul`
--

INSERT INTO `abdul` (`id`, `username`) VALUES
(2, 'ywwweet4yyryr'),
(5, 'fhhhtyryyy');

-- --------------------------------------------------------

--
-- Table structure for table `migrasi`
--

CREATE TABLE `migrasi` (
  `id` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `provinsi` varchar(50) NOT NULL,
  `kabupaten` varchar(50) NOT NULL,
  `kecamatan` varchar(50) NOT NULL,
  `desa` varchar(50) NOT NULL,
  `alamat` varchar(250) NOT NULL,
  `email` varchar(20) NOT NULL,
  `whatsapp` varchar(10) NOT NULL,
  `telepon` varchar(10) NOT NULL,
  `daya_sebelum` varchar(20) NOT NULL,
  `daya_migrasi` varchar(20) NOT NULL,
  `status_bayar` varchar(50) NOT NULL,
  `bukti_bayar` varchar(100) NOT NULL,
  `status` varchar(50) NOT NULL,
  `teknisi` varchar(50) NOT NULL,
  `bukti_selesai` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `migrasi`
--

INSERT INTO `migrasi` (`id`, `nama`, `provinsi`, `kabupaten`, `kecamatan`, `desa`, `alamat`, `email`, `whatsapp`, `telepon`, `daya_sebelum`, `daya_migrasi`, `status_bayar`, `bukti_bayar`, `status`, `teknisi`, `bukti_selesai`) VALUES
(8, 'pelanggan', 'Sumatera Utara', 'Kota Medan', 'Medan Timur', 'Rejo', 'jl. medan nomor 889', 'budi@budi.com', '08999999', '0898988923', 'daya 1.300 VA', 'daya 2.200 VA', 'LUNAS', 'download (1).jpg', 'FINISHED', 'teknisi', 'download.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pengaduan`
--

CREATE TABLE `pengaduan` (
  `id` int(10) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `whatsapp` varchar(10) NOT NULL,
  `pengaduan` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengaduan`
--

INSERT INTO `pengaduan` (`id`, `nama`, `whatsapp`, `pengaduan`) VALUES
(2, 'pelanggan', '089979797', 'test pengaduan ? test test pengaduan...!');

-- --------------------------------------------------------

--
-- Table structure for table `penyambungan`
--

CREATE TABLE `penyambungan` (
  `id` int(10) NOT NULL,
  `nama` varchar(10) NOT NULL,
  `provinsi` varchar(50) NOT NULL,
  `kabupaten` varchar(50) NOT NULL,
  `kecamatan` varchar(50) NOT NULL,
  `desa` varchar(50) NOT NULL,
  `alamat` varchar(500) NOT NULL,
  `email` varchar(20) NOT NULL,
  `whatsapp` varchar(10) NOT NULL,
  `telepon` varchar(10) NOT NULL,
  `menu_harga` varchar(100) NOT NULL,
  `bukti_bayar` varchar(200) NOT NULL,
  `status_bayar` varchar(50) NOT NULL,
  `status` varchar(200) NOT NULL,
  `teknisi` varchar(50) NOT NULL,
  `bukti_selesai` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penyambungan`
--

INSERT INTO `penyambungan` (`id`, `nama`, `provinsi`, `kabupaten`, `kecamatan`, `desa`, `alamat`, `email`, `whatsapp`, `telepon`, `menu_harga`, `bukti_bayar`, `status_bayar`, `status`, `teknisi`, `bukti_selesai`) VALUES
(19, 'pelanggan', 'Sumatera Utara', 'Kota Medan', 'Medan Timur', 'Saentis', 'jl medan no.009', 'budi@budi.com', '08999999', '08777777', 'Biaya pasang listrik baru daya 1.300 VA: Rp.1.238.000', 'download (1).jpg', 'LUNAS', 'FINISHED', 'teknisi', '033248700_1660742599-WhatsApp_Image_2022-08-17_at_17.49.42.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `tabel karyawan`
--

CREATE TABLE `tabel karyawan` (
  `id` varchar(50) NOT NULL,
  `username` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `nik` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `level` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nik`, `nama`, `email`, `username`, `password`, `level`) VALUES
(1, '1232342131', 'admin', 'adminpln@gmail.com', 'admin', 'admin', 'ADMIN'),
(3, '312312321312', 'Budi Pelanggan', 'budi@budi.com', 'pelanggan', 'pelanggan', 'PELANGGAN'),
(5, '123123123123123', 'Andi Teknisi', 'andi@gmail.com', 'teknisi', 'teknisi', 'TEKNISI'),
(9, '453634534536', 'Agus Pimpinan', 'agus@agus.com', 'pimpinan', 'pimpinan', 'PIMPINAN');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abdul`
--
ALTER TABLE `abdul`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrasi`
--
ALTER TABLE `migrasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengaduan`
--
ALTER TABLE `pengaduan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penyambungan`
--
ALTER TABLE `penyambungan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tabel karyawan`
--
ALTER TABLE `tabel karyawan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abdul`
--
ALTER TABLE `abdul`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrasi`
--
ALTER TABLE `migrasi`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pengaduan`
--
ALTER TABLE `pengaduan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `penyambungan`
--
ALTER TABLE `penyambungan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
