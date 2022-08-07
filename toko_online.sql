-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 07, 2022 at 10:32 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toko_online`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_barang`
--

CREATE TABLE `tb_barang` (
  `id_brg` int(11) NOT NULL,
  `nama_brg` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(4) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_barang`
--

INSERT INTO `tb_barang` (`id_brg`, `nama_brg`, `keterangan`, `kategori`, `harga`, `stok`, `gambar`) VALUES
(1, 'NIKE', 'Sepatu merek nike dengan bahan terbaik', 'Pakaian Pria', 115000, 10, 'SP-885.png'),
(2, 'ADIDAS', 'Ini sepatu adidas', 'Pakaian Pria', 99000, 10, 'SP-095.png'),
(3, 'Xiaomi Redmi Note 8', 'Ini adalah hp terbaru dari xiaomi.', 'Elektronik', 2300000, 10, 'note8.jpg'),
(4, 'Kamera Canon', 'Ini adalah kamera conan terbaru', 'Elektronik', 4000000, 9, 'Canon8.png'),
(5, 'Laptop Asus Tuf Gaming', 'Ini adalah laptop asus tuf gaming terbaru dari asus', 'Elektronik', 15000000, 10, 'asustuf.jpg'),
(12, 'Sandal Wanita SP-814', 'Ini adalah produk sandal wanita yang masuk ke kategori Pakaian Wanita', 'Pakaian Wanita', 99000, 50, 'Salinan_dari_Salinan_dari_Templete6.png'),
(13, 'Sandal Wanita SP-833', 'Ini adalah produk sandal wanita yang masuk ke kategori Pakaian Wanita', 'Pakaian Wanita', 1000000, 50, 'Salinan_dari_Salinan_dari_Templete7.png'),
(14, 'Sepatu Anak 01', 'Ini adalah produk sandal wanita yang masuk ke kategori Pakaian anak', 'Pakaian Anak-anak', 99000, 6, 'Rekomendasi-perlengkapan-bayi-Instagram-1024x682.jpg'),
(15, 'Pakaian anak 02', 'Ini adalah pakaian anak', 'Pakaian Anak-anak', 99000, 69, '6b424701ea4976cceb029398652ff461.jpg'),
(17, 'Raket Badminton', 'Ini adalah raket badminton ', 'Peralatan Olahraga', 99000, 69, 'e3335d9d7b0631d9c54d52d49a4b85b3.jpg'),
(18, 'Barbel Olahraga ', 'Barbar', 'Peralatan Olahraga', 150000, 6, '061a960730d93628b680d6ac9c410b42_tn.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_invoice`
--

CREATE TABLE `tb_invoice` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `tgl_pesan` datetime NOT NULL,
  `batas_bayar` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_invoice`
--

INSERT INTO `tb_invoice` (`id`, `nama`, `alamat`, `tgl_pesan`, `batas_bayar`) VALUES
(12, 'Daniel Renato Marlenxxxsssss', 'Balai sebut, dusun perintis. JL. Macan Luar, w', '2022-08-06 17:49:47', '2022-08-07 17:49:47'),
(13, 'Daniel Renato Marlenxxxsssss', 'Balai sebut, dusun perintis. JL. Macan Luar, w', '2022-08-06 17:50:27', '2022-08-07 17:50:27'),
(14, 'd', 'r', '2022-08-07 00:16:01', '2022-08-08 00:16:01');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pesanan`
--

CREATE TABLE `tb_pesanan` (
  `id` int(11) NOT NULL,
  `id_invoice` int(11) NOT NULL,
  `id_brg` int(11) NOT NULL,
  `nama_brg` varchar(255) NOT NULL,
  `jumlah` int(3) NOT NULL,
  `harga` int(10) NOT NULL,
  `pilihan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pesanan`
--

INSERT INTO `tb_pesanan` (`id`, `id_invoice`, `id_brg`, `nama_brg`, `jumlah`, `harga`, `pilihan`) VALUES
(12, 13, 3, 'Xiaomi Redmi Note 8', 1, 2300000, ''),
(13, 13, 5, 'Laptop Asus Tuf Gaming', 1, 15000000, ''),
(14, 14, 4, 'Kamera Canon', 1, 4000000, '');

--
-- Triggers `tb_pesanan`
--
DELIMITER $$
CREATE TRIGGER `pesanan_penjualan` AFTER INSERT ON `tb_pesanan` FOR EACH ROW BEGIN
	UPDATE tb_barang SET stok = stok-NEW.jumlah
    WHERE id_brg = NEW.id_brg;
    
 END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role_id` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `nama`, `username`, `password`, `role_id`) VALUES
(1, 'admin', 'admin', '123', 1),
(2, 'user', 'user', '123', 2),
(3, 'Daniel Renato Marlen', 'renato21', '12345', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`id_brg`);

--
-- Indexes for table `tb_invoice`
--
ALTER TABLE `tb_invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_barang`
--
ALTER TABLE `tb_barang`
  MODIFY `id_brg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tb_invoice`
--
ALTER TABLE `tb_invoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
