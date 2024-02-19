-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Feb 2024 pada 10.39
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

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
-- Struktur dari tabel `tbl_agenda`
--

CREATE TABLE `tbl_agenda` (
  `id_agenda` int(11) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `tgl_awal` date NOT NULL,
  `tgl_akhir` date NOT NULL,
  `jam_awal` time NOT NULL,
  `jam_akhir` time NOT NULL,
  `lokasi` text NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` text NOT NULL,
  `user` varchar(100) NOT NULL,
  `status` int(11) NOT NULL,
  `slug` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_agenda`
--

INSERT INTO `tbl_agenda` (`id_agenda`, `judul`, `tgl_awal`, `tgl_akhir`, `jam_awal`, `jam_akhir`, `lokasi`, `deskripsi`, `gambar`, `user`, `status`, `slug`) VALUES
(1, 'KAJIAN DHUHA (Kitab Tauhid Tijan Addarori)', '2024-02-17', '2024-02-17', '04:50:00', '05:30:00', 'Masjid Nurul Ilmi', '<p>Ba\'da Subuh....&nbsp;<br>Kajian Dhuha bersama Ust. M. Bisri</p><p>Bab : Hari Kiamat</p><p>Terjadinya kiamat besar ditandai dengan tiupan terompet atau sangkakala oleh Malaikat Isrofil. Tiupan terompet atau sangkakala oleh Malaikat Isrofil yang pertama akan membuat kematian pada seluruh makhluk hidup kecuali mereka yang dikehendaki Allah SWT.</p><p>Hal ini ditegaskan dalam firmanNya surah Az Zumar ayat 68,</p><p>وَنُفِخَ فِى الصُّوْرِ فَصَعِقَ مَنْ فِى السَّمٰوٰتِ وَمَنْ فِى الْاَرْضِ اِلَّا مَنْ شَاۤءَ اللّٰهُ ۗ ثُمَّ نُفِخَ فِيْهِ اُخْرٰى فَاِذَا هُمْ قِيَامٌ يَّنْظُرُوْنَ</p><p>Artinya: \"Sangkakala pun ditiup sehingga matilah semua (makhluk) yang (ada) di langit dan di bumi, kecuali mereka yang dikehendaki Allah. Kemudian, ia ditiup sekali lagi. Seketika itu, mereka bangun (dari kuburnya dan) menunggu (keputusan Allah).\"</p><p>#IbdakMNI</p>', 'kajian1.jpeg', 'Admin', 1, 'KAJIAN-DHUHA-(Kitab-tauhid-tijan-addarori)'),
(2, 'test agenda', '2024-02-19', '2024-02-20', '10:23:00', '11:23:00', 'Masjid Nurul Ilmi', '<p>testing</p>', 'kajian1.jpg', 'Admin', 0, '');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_imam`
--

INSERT INTO `tbl_imam` (`id_imam`, `nama`, `jabatan`, `foto`, `link1`, `link2`, `link3`, `tanggal`) VALUES
(1, 'Vieri Satria Ardiansyah S.Kom 2', 'Ketua Bidang IT', '1.jpg', '', '', '', '2024-02-13 03:44:27'),
(3, 'Aldo Alfayyad S.Pd', 'Imam Masjid', '5.jpg', '-', '-', '-', '2024-02-13 04:01:59'),
(4, 'test', 'IT', '', '-', '-', '-', '2024-02-13 04:05:59');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_jadwal`
--

CREATE TABLE `tbl_jadwal` (
  `id_jadwal` int(11) NOT NULL,
  `waktu_ashar` time NOT NULL,
  `waktu_dzuhur` time NOT NULL,
  `waktu_maghrib` time NOT NULL,
  `waktu_isya` time NOT NULL,
  `waktu_subuh` time NOT NULL,
  `waktu_imsak` time NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_jadwal`
--

INSERT INTO `tbl_jadwal` (`id_jadwal`, `waktu_ashar`, `waktu_dzuhur`, `waktu_maghrib`, `waktu_isya`, `waktu_subuh`, `waktu_imsak`, `status`) VALUES
(1, '15:30:00', '12:10:00', '18:25:00', '19:30:00', '04:40:00', '04:20:00', 0);

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_pimpinan`
--

INSERT INTO `tbl_pimpinan` (`id_pimpinan`, `nama`, `jabatan`, `foto`, `link1`, `link2`, `link3`, `tanggal`) VALUES
(1, 'Gahry Rafi 1', 'Mahasiswa', '4.jpg', 'https://facebook.com/', '-', '-', '2024-02-13 03:50:42'),
(3, 'test', 'Ketua Bidang IT 2', '', '-', '-', '-', '2024-02-13 04:12:45');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_setting`
--

CREATE TABLE `tbl_setting` (
  `id_setting` int(11) NOT NULL,
  `nama_masjid` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` varchar(14) NOT NULL,
  `banner1` text NOT NULL,
  `banner2` text NOT NULL,
  `banner3` text NOT NULL,
  `judul1` varchar(100) NOT NULL,
  `judul2` varchar(100) NOT NULL,
  `judul3` varchar(100) NOT NULL,
  `sosmed1` text NOT NULL,
  `sosmed2` text NOT NULL,
  `sosmed3` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `nama`, `username`, `password`, `level`, `foto`, `no_hp`, `created_update`) VALUES
(1, 'Admin', 'admin', 'f865b53623b121fd34ee5426c792e5c33af8c227', 'Administrator', '1.jpg', '085711067008', '2024-02-12 12:13:52'),
(2, 'Aldo', 'aldo', '9e7700bc021f4c124e9ab35258f13795c20af96d', 'Pengurus', '2.jpg', '081232718945', '2024-02-16 01:49:28');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_visimisi`
--

CREATE TABLE `tbl_visimisi` (
  `id_visi` int(11) NOT NULL,
  `visi` text NOT NULL,
  `misi` text NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_visimisi`
--

INSERT INTO `tbl_visimisi` (`id_visi`, `visi`, `misi`, `tanggal`) VALUES
(1, '“Terwujudnya Masjid Nurul Ilmi sebagai Lembaga Pemberdayaan Umat”', '<p>1. Memelihara dan meningkatkan kualitas Pelayanan Ibadah<br>2. Meningkatkan kualitas Sumber Daya Umat melalui Pendidikan dan Pelatihan yang berbasis Keislaman, Keindonesiaan dan Global<br>3. Menerapkan Pengelolaan Masjid yang Modern dan berwawasan Lingkungan<br>4. Memberdayakan Masyarakat melalui pengembangan Ekonomi Umat, menumbuhkan Kepedulian Sosial dan menjaga Harmoni Umat Beragama<br>5. Menyelenggarakan Manajemen Masjid yang Modern, Amanah, Akuntabel dan Profesional<br>6. Membangun Kerjasama dengan Lembaga Lain di Dalam dan Luar Negeri</p>', '2024-02-11 16:41:27');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_agenda`
--
ALTER TABLE `tbl_agenda`
  ADD PRIMARY KEY (`id_agenda`);

--
-- Indeks untuk tabel `tbl_imam`
--
ALTER TABLE `tbl_imam`
  ADD PRIMARY KEY (`id_imam`);

--
-- Indeks untuk tabel `tbl_jadwal`
--
ALTER TABLE `tbl_jadwal`
  ADD PRIMARY KEY (`id_jadwal`);

--
-- Indeks untuk tabel `tbl_pimpinan`
--
ALTER TABLE `tbl_pimpinan`
  ADD PRIMARY KEY (`id_pimpinan`);

--
-- Indeks untuk tabel `tbl_setting`
--
ALTER TABLE `tbl_setting`
  ADD PRIMARY KEY (`id_setting`);

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
-- AUTO_INCREMENT untuk tabel `tbl_agenda`
--
ALTER TABLE `tbl_agenda`
  MODIFY `id_agenda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tbl_imam`
--
ALTER TABLE `tbl_imam`
  MODIFY `id_imam` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tbl_jadwal`
--
ALTER TABLE `tbl_jadwal`
  MODIFY `id_jadwal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_pimpinan`
--
ALTER TABLE `tbl_pimpinan`
  MODIFY `id_pimpinan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tbl_setting`
--
ALTER TABLE `tbl_setting`
  MODIFY `id_setting` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tbl_visimisi`
--
ALTER TABLE `tbl_visimisi`
  MODIFY `id_visi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
