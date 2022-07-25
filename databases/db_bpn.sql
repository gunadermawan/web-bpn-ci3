-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Jul 2022 pada 18.31
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_bpn`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_asset`
--

CREATE TABLE `tb_asset` (
  `id_asset` int(11) NOT NULL,
  `nama_asset` varchar(50) NOT NULL,
  `model_asset` varchar(50) NOT NULL,
  `merk_asset` varchar(50) NOT NULL,
  `serial_asset` varchar(200) NOT NULL,
  `inventaris_asset` varchar(200) NOT NULL,
  `keterangan_asset` varchar(200) NOT NULL,
  `jml_asset` varchar(200) NOT NULL,
  `date_asset` int(20) NOT NULL,
  `kategori_asset` varchar(50) NOT NULL,
  `gambar_asset` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_asset`
--

INSERT INTO `tb_asset` (`id_asset`, `nama_asset`, `model_asset`, `merk_asset`, `serial_asset`, `inventaris_asset`, `keterangan_asset`, `jml_asset`, `date_asset`, `kategori_asset`, `gambar_asset`) VALUES
(2, 'GUNA DERMAWAN', '3328171003000012', 'IT Programmer', 'Tegal, 10 Maret 2000', '21', 'ISLAM', 'jl. Bulustalan V RT/RW 06/03 No. 658, Kelurahan Bu', 1658759237, 'Pengajuan surat akta tanah', '329ba71be8f55ec590c2a96314b6cd68.png'),
(3, 'ILHAM SYAIFUDIN PRATAMA', '3328171003000012', 'IT Programmer', 'Tegal, 10 Maret 2000', '21', 'ISLAM', 'jl. Bulustalan V RT/RW 06/03 No. 658, Kelurahan Bu', 1658761931, 'Pengajuan surat akta tanah', '0a215720bb532edd3fb21752b0b6e80c.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` varchar(10) NOT NULL,
  `is_active` varchar(10) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(1, 'gunadermawan', 'gunadermawan.official@gmail.com', 'default.png', '$2y$10$8fdBXsn5Yx.0v/LoTy/23efr6D4b5hW/WdkD.FRFxkb3EQ0lAJrzi', '2', '1', 1657974849),
(2, 'ilham', 'ilham@email.com', 'default.png', '$2y$10$sY3w2Vpa8MG8bC6c8kmnLeqe4JaoVJ/b5OvrLx9JjQ/QFupTSx882', '1', '1', 1658057843),
(3, 'admin', 'admin@email.com', 'default.png', '$2y$10$PHyX2kXzuuaTrAhKBJ1amuQ4a1VofsrXJeF.fwtFABThxDTV8.DiK', '1', '1', 1658766536);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'User');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'administrator '),
(2, 'member');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Beranda', 'admin', 'fas fa-fw fa-house-user', 1),
(2, 2, 'Profil', 'user', 'fas fa-fw fa-user', 1),
(3, 2, 'Sunting Profil', 'user/edit', 'fas fa-fw fa-user-edit', 1),
(4, 1, 'Tambah Pengguna', 'admin/user', 'fas fa-fw fa-user-plus', 1),
(5, 2, 'Data Asset', 'user/dataasset', 'fas fa-database', 1),
(6, 1, 'Backup Database', 'admin/backup', 'fas fa-cloud-download-alt', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_asset`
--
ALTER TABLE `tb_asset`
  ADD PRIMARY KEY (`id_asset`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_asset`
--
ALTER TABLE `tb_asset`
  MODIFY `id_asset` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
