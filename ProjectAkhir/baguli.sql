-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Nov 2022 pada 19.28
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `baguli`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` int(11) NOT NULL,
  `password` varchar(30) NOT NULL,
  `nama` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `nama`) VALUES
(2, 123210189, '123210189', 'frederick'),
(3, 123210181, '123210181', 'Komang'),
(4, 123210089, '123210089', 'Belski');

-- --------------------------------------------------------

--
-- Struktur dari tabel `delivery`
--

CREATE TABLE `delivery` (
  `id_delivery` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `pesanan` int(11) NOT NULL,
  `banyak_pesanan` int(11) NOT NULL,
  `alamat` varchar(150) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `catatan` varchar(150) NOT NULL,
  `pembayaran` varchar(10) NOT NULL,
  `bukti_tf` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `delivery`
--

INSERT INTO `delivery` (`id_delivery`, `nama`, `pesanan`, `banyak_pesanan`, `alamat`, `no_hp`, `catatan`, `pembayaran`, `bukti_tf`) VALUES
(1, 'Elia F. Girsang', 3, 1, 'Jl. Tambak Bayan 4 No. 20B', '0895612386492', 'Kasi pedes dan pahatop', 'transfer', 'https://drive.google.com/file/d/1_iXjp8WFi45ce5BlvlhcvP16sg017MBG/view?usp=sharing');

-- --------------------------------------------------------

--
-- Struktur dari tabel `menu`
--

CREATE TABLE `menu` (
  `id_menu` int(11) NOT NULL,
  `menu` varchar(20) NOT NULL,
  `deskripsi` varchar(150) NOT NULL,
  `harga` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `menu`
--

INSERT INTO `menu` (`id_menu`, `menu`, `deskripsi`, `harga`) VALUES
(3, 'Babi guling 90kg   ', 'Babi yang beratnya 90kg dan diguling selama 3 jam nonstop dengan rempah dan bumbu rajang khas bali', 5000000),
(10, 'Babi guling 80kg', 'Babi yang beratnya 80kg dan diguling selama 3 jam nonstop dengan rempah dan bumbu rajang khas bali', 3000000),
(13, 'Babi guling 70kg', 'Babi yang beratnya 70kg dan diguling selama 3 jam nonstop dengan rempah dan bumbu rajang khas bali', 2000000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `takeaway`
--

CREATE TABLE `takeaway` (
  `id_takeaway` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `pesanan` int(11) NOT NULL,
  `banyak_pesanan` int(11) NOT NULL,
  `jam` time NOT NULL,
  `catatan` varchar(150) NOT NULL,
  `pembayaran` varchar(10) NOT NULL,
  `bukti_tf` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `takeaway`
--

INSERT INTO `takeaway` (`id_takeaway`, `nama`, `pesanan`, `banyak_pesanan`, `jam`, `catatan`, `pembayaran`, `bukti_tf`) VALUES
(7, 'Kayisa Barikina Yulistiawan Al', 3, 2, '19:00:00', 'kasi pedes banget mbok', 'transfer', 'https://drive.google.com/file/d/1Xq-KVyq1NRUcxcQ_Uxq7/view'),
(14, 'Ai', 3, 1, '04:04:00', 'sadadsx', 'cash', 'saxcasx');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `nama`, `email`) VALUES
(4, '123210081', '123210081', 'syaikul azhar', 'syaikul.azhar@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `delivery`
--
ALTER TABLE `delivery`
  ADD PRIMARY KEY (`id_delivery`),
  ADD KEY `idMenu` (`pesanan`);

--
-- Indeks untuk tabel `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indeks untuk tabel `takeaway`
--
ALTER TABLE `takeaway`
  ADD PRIMARY KEY (`id_takeaway`),
  ADD KEY `idMenu2` (`pesanan`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `delivery`
--
ALTER TABLE `delivery`
  MODIFY `id_delivery` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `menu`
--
ALTER TABLE `menu`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `takeaway`
--
ALTER TABLE `takeaway`
  MODIFY `id_takeaway` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `delivery`
--
ALTER TABLE `delivery`
  ADD CONSTRAINT `idMenu` FOREIGN KEY (`pesanan`) REFERENCES `menu` (`id_menu`);

--
-- Ketidakleluasaan untuk tabel `takeaway`
--
ALTER TABLE `takeaway`
  ADD CONSTRAINT `idMenu2` FOREIGN KEY (`pesanan`) REFERENCES `menu` (`id_menu`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
