-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Feb 2024 pada 13.58
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_masjid`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_imam`
--

CREATE TABLE `tbl_imam` (
  `id_imam` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `foto` text NOT NULL,
  `link1` text NOT NULL,
  `link2` text NOT NULL,
  `link3` text NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pimpinan`
--

CREATE TABLE `tbl_pimpinan` (
  `id_pimpinan` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `foto` text NOT NULL,
  `link1` text NOT NULL,
  `link2` text NOT NULL,
  `link3` text NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_pimpinan`
--

INSERT INTO `tbl_pimpinan` (`id_pimpinan`, `nama`, `jabatan`, `foto`, `link1`, `link2`, `link3`, `tanggal`) VALUES
(1, 'Vieri Satria Ardiansyah S.Kom', 'Ketua Bidang IT', '1.jpg', '-', '-', '-', '2024-02-12 12:31:55');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` varchar(100) NOT NULL,
  `foto` text NOT NULL,
  `no_hp` varchar(14) NOT NULL,
  `created_update` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `nama`, `username`, `password`, `level`, `foto`, `no_hp`, `created_update`) VALUES
(1, 'Admin', 'admin', 'f865b53623b121fd34ee5426c792e5c33af8c227', 'Administrator', 'default.jpg', '085711067008', '2024-02-12 12:13:52');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_visimisi`
--

CREATE TABLE `tbl_visimisi` (
  `id_visi` int(11) NOT NULL,
  `visi` text NOT NULL,
  `misi` text NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_visimisi`
--

INSERT INTO `tbl_visimisi` (`id_visi`, `visi`, `misi`, `tanggal`) VALUES
(1, '“Terwujudnya Masjid Nurul Ilmi sebagai Lembaga Pemberdayaan Umat”', '<p>1. Memelihara dan meningkatkan kualitas Pelayanan Ibadah<br>2. Meningkatkan kualitas Sumber Daya Umat melalui Pendidikan dan Pelatihan yang berbasis Keislaman, Keindonesiaan dan Global<br>3. Menerapkan Pengelolaan Masjid yang Modern dan berwawasan Lingkungan<br>4. Memberdayakan Masyarakat melalui pengembangan Ekonomi Umat, menumbuhkan Kepedulian Sosial dan menjaga Harmoni Umat Beragama<br>5. Menyelenggarakan Manajemen Masjid yang Modern, Amanah, Akuntabel dan Profesional<br>6. Membangun Kerjasama dengan Lembaga Lain di Dalam dan Luar Negeri</p>', '2024-02-11 16:41:27');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_imam`
--
ALTER TABLE `tbl_imam`
  ADD PRIMARY KEY (`id_imam`);

--
-- Indeks untuk tabel `tbl_pimpinan`
--
ALTER TABLE `tbl_pimpinan`
  ADD PRIMARY KEY (`id_pimpinan`);

--
-- Indeks untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `tbl_visimisi`
--
ALTER TABLE `tbl_visimisi`
  ADD PRIMARY KEY (`id_visi`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_imam`
--
ALTER TABLE `tbl_imam`
  MODIFY `id_imam` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_pimpinan`
--
ALTER TABLE `tbl_pimpinan`
  MODIFY `id_pimpinan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_visimisi`
--
ALTER TABLE `tbl_visimisi`
  MODIFY `id_visi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
