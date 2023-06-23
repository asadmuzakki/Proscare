-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2023 at 04:41 PM
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
-- Database: `db_proscare`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(255) NOT NULL,
  `nama` varchar(360) DEFAULT NULL,
  `username` varchar(360) NOT NULL,
  `password` varchar(15) NOT NULL,
  `email` varchar(360) NOT NULL,
  `photo` varchar(360) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `nama`, `username`, `password`, `email`, `photo`) VALUES
(1, 'Muhammad Yuan Sastro Dimianta', 'admin', 'admin123', 'yuandimianta@gmail.com', '647f60e76b9a5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(255) NOT NULL,
  `nama` varchar(360) DEFAULT NULL,
  `username` varchar(360) NOT NULL,
  `password` varchar(15) NOT NULL,
  `email` varchar(360) NOT NULL,
  `no_telp` varchar(20) DEFAULT NULL,
  `photo` varchar(360) DEFAULT NULL,
  `id_admin` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `nama`, `username`, `password`, `email`, `no_telp`, `photo`, `id_admin`) VALUES
(1, 'Fauzan Azima', 'ajik', 'ajik123', 'ajik@gmail.com', '087846242312', '647f590aaa766.jpg', 1),
(3, 'Asad Muzakki', 'asad', 'asad123', 'asad@gmail.com', '084532764567', 'nophoto.png', 1),
(4, 'Nindy Azkiya', 'nindy', 'nindy0206', 'nindyazkiya02@gmail.com', '085312456321', 'nophoto.png', 1),
(5, 'Iqbaal Ramadhan', 'iqbaalramadhan', 'iqba2l', 'iqbaalramadhan07@gmail.com', '', '', 1),
(6, 'Aldi Farizky', 'aldirizky', 'aldi650', 'aldifarizky650@gmail.com', '', '', 1),
(7, 'tanaka kou', 'tanaka', 'futaba', 'tanaka@gmail.com', '085792263308', '6488699554411.png', 1),
(8, 'Nimas Sekararum Kinanthi', 'kinannnn', 'kinan123', 'arumkinanthi06@gmail.com', '', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `gaji`
--

CREATE TABLE `gaji` (
  `no` int(255) NOT NULL,
  `tgl_terima` date NOT NULL,
  `nominal` bigint(255) NOT NULL,
  `id_perawat` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `id` int(255) NOT NULL,
  `nama_pasien` varchar(360) DEFAULT NULL,
  `tgl_akhir` date NOT NULL,
  `gender` enum('Male','Female') NOT NULL,
  `tgl_awal_sewa` date NOT NULL,
  `tgl_akhir_sewa` date NOT NULL,
  `riwayat` text NOT NULL,
  `keterangan` text DEFAULT NULL,
  `alamat` text NOT NULL,
  `jenis_treatment` enum('Small','Medium','Full') NOT NULL,
  `id_customer` int(255) NOT NULL,
  `id_perawat` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`id`, `nama_pasien`, `tgl_akhir`, `gender`, `tgl_awal_sewa`, `tgl_akhir_sewa`, `riwayat`, `keterangan`, `alamat`, `jenis_treatment`, `id_customer`, `id_perawat`) VALUES
(10, 'asad muzakki', '2003-07-07', 'Male', '2023-06-25', '2023-06-30', 'Asma', 'Suka makan', 'Sesela', 'Medium', 1, 2),
(11, 'ahmad arif', '1965-07-17', 'Male', '2023-06-16', '2023-06-17', 'Diabetes', 'Susah Makan', 'Kekait', 'Small', 3, 5),
(12, 'eren yeager', '1970-07-06', 'Male', '2023-07-13', '2023-07-30', 'pernah hampir dipenggal sama ayang', '', 'Dasan Cermen', 'Full', 7, 1),
(13, 'Hilman Zulqarami', '1950-06-16', 'Male', '2023-06-25', '2023-06-30', 'Cancer', '', 'isekai', 'Small', 6, 1),
(14, 'nurul insani', '1970-06-05', 'Female', '2023-07-16', '2023-07-18', 'Cancer', 'Sedang dalam tahap pemulihan setelah kemo', 'Dasan Agung', 'Medium', 4, 2);

-- --------------------------------------------------------

--
-- Table structure for table `perawat`
--

CREATE TABLE `perawat` (
  `id` int(255) NOT NULL,
  `nama` varchar(360) DEFAULT NULL,
  `username` varchar(360) NOT NULL,
  `password` varchar(15) NOT NULL,
  `email` varchar(360) NOT NULL,
  `no_telp` varchar(360) DEFAULT NULL,
  `photo` varchar(360) DEFAULT NULL,
  `cv` varchar(360) DEFAULT NULL,
  `id_admin` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `perawat`
--

INSERT INTO `perawat` (`id`, `nama`, `username`, `password`, `email`, `no_telp`, `photo`, `cv`, `id_admin`) VALUES
(1, 'dr. Tirtayasa', 'tirta', 'tirta123', 'tirta@gmail.com', '087658282832', '6480879b98a26.jpg', '6480879b97acd.pdf', 1),
(2, 'Anya Dwi Kartika, S. Kep. Ners', 'anyadwi', 'anya12', 'anyadwikartika@gmail.com', '', 'nophoto.png', 'no cv.pdf', 1),
(3, 'dr. Yuma Haryanto', 'yuharyanto', 'yanto90', 'yumaharyanto@gmail.com', '', 'nophoto.png', 'no cv.pdf', 1),
(4, 'dr. Maria Josephine', 'mariajo', 'maria70', 'mariajosephine@gmail.com', '', 'nophoto.png', 'no cv.pdf', 1),
(5, 'Sutrisno, S. Kep. Ners', 'sutrisnoo', 'sutris20', 'sutrisno@gmail.com', '', 'nophoto.png', 'no cv.pdf', 1),
(10, 'Nimas Sekararum Kinanthi ,S. Kep., Ners', 'arumkinanthi', 'kinan123', 'arumkinanthi06@gmail.com', '', '', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `status_ketidaktersediaan`
--

CREATE TABLE `status_ketidaktersediaan` (
  `no` int(255) NOT NULL,
  `status` enum('tersedia','tidak tersedia') NOT NULL,
  `id_perawat` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `status_ketidaktersediaan`
--

INSERT INTO `status_ketidaktersediaan` (`no`, `status`, `id_perawat`) VALUES
(1, 'tersedia', 1),
(2, 'tersedia', 2),
(3, 'tersedia', 3),
(4, 'tersedia', 4),
(5, 'tersedia', 5),
(8, 'tersedia', 10);

-- --------------------------------------------------------

--
-- Table structure for table `testimoni`
--

CREATE TABLE `testimoni` (
  `no` int(255) NOT NULL,
  `rating` int(255) NOT NULL,
  `feedback` text DEFAULT NULL,
  `id_perawat` int(255) NOT NULL,
  `id_customer` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `testimoni`
--

INSERT INTO `testimoni` (`no`, `rating`, `feedback`, `id_perawat`, `id_customer`) VALUES
(1, 4, 'Semangat pakk', 5, 3);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `no` int(255) NOT NULL,
  `tgl_bayar` date NOT NULL,
  `nominal` bigint(255) NOT NULL,
  `bukti_bayar` varchar(360) DEFAULT NULL,
  `status_pembayaran` varchar(360) DEFAULT NULL,
  `id_admin` int(255) NOT NULL,
  `id_customer` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`no`, `tgl_bayar`, `nominal`, `bukti_bayar`, `status_pembayaran`, `id_admin`, `id_customer`) VALUES
(2, '2023-06-12', 500000, '6487434314cab.jpg', 'Valid', 1, 1),
(3, '2023-06-12', 50000, '648745173c936.jpg', 'Valid', 1, 3),
(4, '2023-06-13', 2550000, '6488688ea3baf.jpg', 'Valid', 1, 7),
(5, '2023-06-13', 250000, '64888342621a3.jpg', 'Valid', 1, 6),
(6, '2023-06-15', 200000, '648aa85b7e721.jpg', 'Belum Valid', 1, 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_admin` (`id_admin`);

--
-- Indexes for table `gaji`
--
ALTER TABLE `gaji`
  ADD PRIMARY KEY (`no`),
  ADD KEY `index_perawat` (`id_perawat`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_customer` (`id_customer`),
  ADD KEY `fk_perawat` (`id_perawat`);

--
-- Indexes for table `perawat`
--
ALTER TABLE `perawat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `foreign_admin` (`id_admin`);

--
-- Indexes for table `status_ketidaktersediaan`
--
ALTER TABLE `status_ketidaktersediaan`
  ADD PRIMARY KEY (`no`),
  ADD KEY `fkey_perawat` (`id_perawat`) USING BTREE;

--
-- Indexes for table `testimoni`
--
ALTER TABLE `testimoni`
  ADD PRIMARY KEY (`no`),
  ADD KEY `indeks_perawat` (`id_perawat`),
  ADD KEY `indeks_customer` (`id_customer`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`no`),
  ADD KEY `ind_admin` (`id_admin`),
  ADD KEY `ind_customer` (`id_customer`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `gaji`
--
ALTER TABLE `gaji`
  MODIFY `no` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `perawat`
--
ALTER TABLE `perawat`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `status_ketidaktersediaan`
--
ALTER TABLE `status_ketidaktersediaan`
  MODIFY `no` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `testimoni`
--
ALTER TABLE `testimoni`
  MODIFY `no` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `no` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `customer`
--
ALTER TABLE `customer`
  ADD CONSTRAINT `fk_admin` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `gaji`
--
ALTER TABLE `gaji`
  ADD CONSTRAINT `index_perawat` FOREIGN KEY (`id_perawat`) REFERENCES `perawat` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pasien`
--
ALTER TABLE `pasien`
  ADD CONSTRAINT `fk_customer` FOREIGN KEY (`id_customer`) REFERENCES `customer` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_perawat` FOREIGN KEY (`id_perawat`) REFERENCES `perawat` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `status_ketidaktersediaan`
--
ALTER TABLE `status_ketidaktersediaan`
  ADD CONSTRAINT `fkey_perawat` FOREIGN KEY (`id_perawat`) REFERENCES `perawat` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `testimoni`
--
ALTER TABLE `testimoni`
  ADD CONSTRAINT `indeks_customer` FOREIGN KEY (`id_customer`) REFERENCES `customer` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `indeks_perawat` FOREIGN KEY (`id_perawat`) REFERENCES `perawat` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `ind_admin` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ind_customer` FOREIGN KEY (`id_customer`) REFERENCES `customer` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
