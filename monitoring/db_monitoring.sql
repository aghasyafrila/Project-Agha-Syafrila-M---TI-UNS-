-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Bulan Mei 2022 pada 03.53
-- Versi server: 10.4.20-MariaDB
-- Versi PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_monitoring`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `level`
--

CREATE TABLE `level` (
  `level_id` int(11) NOT NULL,
  `nama_level` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `level`
--

INSERT INTO `level` (`level_id`, `nama_level`) VALUES
(1, 'superadmin'),
(2, 'ketua'),
(3, 'anggota');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_gardu`
--

CREATE TABLE `tb_gardu` (
  `id_gardu` int(11) NOT NULL,
  `nama_gardu` varchar(255) NOT NULL,
  `gambar_gardu` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_gardu`
--

INSERT INTO `tb_gardu` (`id_gardu`, `nama_gardu`, `gambar_gardu`) VALUES
(4, 'gardu A', '1.png'),
(5, 'Gardu B', '_Logo_GARDU_(5).png'),
(6, 'Gardu C', '2.png'),
(7, 'Gardu D', '3.png'),
(8, 'Gardu E', '4.png'),
(9, 'Gardu F', '5.png'),
(10, 'Gardu G', '6.png'),
(11, 'Gardu H', '7.png'),
(12, 'Gardu I', '8.png'),
(13, 'Gardu J', '9.png'),
(14, 'Gardu KK', 'bg2.png'),
(20, 'Gardu KL', 'contohgardu.jpg'),
(21, 'Gardu Y', 'ketua2.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pantauanharian`
--

CREATE TABLE `tb_pantauanharian` (
  `id_pantauan` int(11) NOT NULL,
  `id_gardu` int(11) NOT NULL,
  `id_tim` int(11) NOT NULL,
  `suhu` varchar(255) NOT NULL,
  `arus` varchar(255) NOT NULL,
  `cosphi` varchar(255) NOT NULL,
  `tgl_pantauan` date NOT NULL,
  `tegangan` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `lokasi_pantauan` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_pantauanharian`
--

INSERT INTO `tb_pantauanharian` (`id_pantauan`, `id_gardu`, `id_tim`, `suhu`, `arus`, `cosphi`, `tgl_pantauan`, `tegangan`, `status`, `lokasi_pantauan`, `username`, `gambar`) VALUES
(1, 4, 1, '12', '12', '12', '2022-05-05', '12', '1', '-6.2910082,106.7588609', 'aghasyaf', 'Picture113.png'),
(6, 6, 0, '12', '12', '12', '2022-05-05', '12', '0', '-6.2910082,106.7588609', 'superadmin', 'Picture118.png'),
(7, 6, 2, '12', '23', '54', '2022-05-04', '33', '0', '-6.2910082,106.7588609', 'arindwip', 'download15.jpg'),
(9, 8, 0, '12', '12', '12', '2022-05-07', '12', '0', '-6.2944722,106.7619964', 'superadmin', 'download16.jpg'),
(10, 9, 1, '12', '12', '22', '2022-05-08', '33', '2', '-6.2910082,106.7588609', 'aghasyaf', '4.jpg'),
(11, 10, 2, '88', '55', '22', '2022-05-08', '33', '0', '-6.2910082,106.7588609', 'arindwip', '6.jpg'),
(12, 10, 2, '33', '77', '22', '2022-05-05', '33', '0', '-6.2910082,106.7588609', 'superadmin', '91.png'),
(13, 14, 1, '77', '77', '55', '2022-05-09', '55', '1', '-6.2226432,106.8040192', 'aghasyaf', '10.jpg'),
(14, 6, 1, '55', '77', '77', '2022-05-09', '55', '1', '-6.2226432,106.8040192', 'ruditabuti123', '61.jpg'),
(15, 12, 2, '55', '98', '66', '2022-05-10', '66', '0', '-6.2910082,106.7588609', 'arindwip', '92.png'),
(16, 9, 1, '90', '44', '65', '2022-05-20', '55', '1', '-7.2574719,112.7520883', 'aghasyaf', 'contohgardu1.jpg'),
(17, 21, 1, '89', '56', '55', '2022-05-20', '88', '2', '-7.2574719,112.7520883', 'aghasyaf', 'contohgardu2.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tim`
--

CREATE TABLE `tim` (
  `id_tim` int(11) NOT NULL,
  `nama_tim` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tim`
--

INSERT INTO `tim` (`id_tim`, `nama_tim`) VALUES
(1, 'Bima Panca Satya'),
(2, 'Cita Sandya'),
(3, 'Nusantara Merdeka'),
(4, 'Nusantara Bersatu'),
(5, 'Three Star'),
(10, 'Tim Musyawarah 1'),
(11, 'Semangat Tinggi 1'),
(12, 'Semangat Juang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `id_tim` int(11) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `level_id` int(11) NOT NULL,
  `gambar_user` varchar(255) NOT NULL,
  `created_at` varchar(255) NOT NULL,
  `is_active` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`user_id`, `full_name`, `username`, `password`, `email`, `id_tim`, `phone`, `level_id`, `gambar_user`, `created_at`, `is_active`) VALUES
(4, 'kreshna putra adi wicaksana', 'superadmin', '$2y$10$EQuhjTRa8.jIwIBT44jCseBYVQEapjLWLhNhmJT5sDLRn3ASQ8Ace', 'kreshnaputraadi31@student.uns.ac.id', 0, '081287560665', 1, 'admin.png', '1650900711', '1'),
(9, 'Agnar Briantama Ridhwanullahh', 'agnarbriantama', '$2y$10$w/xF3dAKOpaYpYFOrm5o0exW8bh9/iMlbIVf/LjIRgViKLkHFtqpy', 'agnarbriantama25@student.uns.ac.id', 1, '085235905122', 2, 'userimg.png', '1653007890', '1'),
(10, 'Agha Syafrila Myzanina', 'aghasyaf', '$2y$10$YQ5DA/vkq6xjaIfyRwlnPu7j7Srkk01OGek4ofYlI/glfbb8IBp6W', 'aghasyafrilam@student.uns.ac.id', 1, '082324511375', 3, 'anggota1.png', '1653007880', '1'),
(11, ' Hildanniar Fauzi', 'hildanniar', '$2y$10$TbQJTm30N/pbIEPrdd9dVOLF1.wwniZAfdyKKIoBpsCDLhIb3vpza', 'hildanniarfauzi6@student.uns.ac.id', 2, '089685015606', 2, 'ketua2.jpg', '1651369870', '1'),
(12, 'Arin Dwi Padmasari', 'arindwip', '$2y$10$bSd2nTDMYmQ9SS1lbLqXCuaqqLRatRhhB4woXeqM5xTbqMj4mvNti', 'arindwipadmasari_1@student.uns.ac.id', 2, '085748502961', 3, 'anggota2.jpg', '1651369952', '1'),
(18, 'Rudi Tabuti', 'ruditabuti123', '$2y$10$/pNrJ7FZ7RHFxyZDCEDcVuhu0Q/4ZdYAfy9ESW9NlaAKLS/labtZi', 'khususkuliahuns@gmail.com', 1, '081287560665', 3, '9.png', '1652070647', '1');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`level_id`);

--
-- Indeks untuk tabel `tb_gardu`
--
ALTER TABLE `tb_gardu`
  ADD PRIMARY KEY (`id_gardu`);

--
-- Indeks untuk tabel `tb_pantauanharian`
--
ALTER TABLE `tb_pantauanharian`
  ADD PRIMARY KEY (`id_pantauan`),
  ADD KEY `id_gardu` (`id_gardu`);

--
-- Indeks untuk tabel `tim`
--
ALTER TABLE `tim`
  ADD PRIMARY KEY (`id_tim`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `level`
--
ALTER TABLE `level`
  MODIFY `level_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_gardu`
--
ALTER TABLE `tb_gardu`
  MODIFY `id_gardu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `tb_pantauanharian`
--
ALTER TABLE `tb_pantauanharian`
  MODIFY `id_pantauan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `tim`
--
ALTER TABLE `tim`
  MODIFY `id_tim` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_pantauanharian`
--
ALTER TABLE `tb_pantauanharian`
  ADD CONSTRAINT `id_gardu` FOREIGN KEY (`id_gardu`) REFERENCES `tb_gardu` (`id_gardu`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
