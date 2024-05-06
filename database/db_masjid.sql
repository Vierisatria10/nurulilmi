-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Bulan Mei 2024 pada 09.31
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
-- Struktur dari tabel `bidang_baitulmal`
--

CREATE TABLE `bidang_baitulmal` (
  `id_baitul` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `foto` text NOT NULL,
  `alamat` text NOT NULL,
  `tanggal` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `bidang_baitulmal`
--

INSERT INTO `bidang_baitulmal` (`id_baitul`, `nama`, `jabatan`, `foto`, `alamat`, `tanggal`) VALUES
(1, 'SUHAEMI, S.E', 'KABID BAITUL MAL', '4.jpg', 'BLOK F2 NO. 46 RT. 01/RW. 01', '2024-05-03 13:45:04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bidang_dakwah`
--

CREATE TABLE `bidang_dakwah` (
  `id_dakwah` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `foto` text NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `tanggal` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `bidang_dakwah`
--

INSERT INTO `bidang_dakwah` (`id_dakwah`, `nama`, `foto`, `jabatan`, `alamat`, `tanggal`) VALUES
(1, 'H. MAKMUN', '1.jpg', 'KABID IBDAK', 'BLOK A3 NO.21 RT. 07/RW. 01', '2024-05-03 12:34:39'),
(2, 'BAIDURI E.', '3.jpg', 'ANGGOTA', 'BLOK F6 NO. 11 RT. 011/RW. 01', '2024-05-03 12:36:50');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bidang_humas`
--

CREATE TABLE `bidang_humas` (
  `id_humas` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `foto` text NOT NULL,
  `tanggal` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `bidang_kartib`
--

CREATE TABLE `bidang_kartib` (
  `id_kartib` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `foto` text NOT NULL,
  `tanggal` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `bidang_kepemudaan`
--

CREATE TABLE `bidang_kepemudaan` (
  `id_pemuda` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `foto` text NOT NULL,
  `tanggal` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `bidang_kepemudaan`
--

INSERT INTO `bidang_kepemudaan` (`id_pemuda`, `nama`, `jabatan`, `alamat`, `foto`, `tanggal`) VALUES
(1, 'PARYOKO', 'KABID PEMUDA', 'BLOK G9 NO. 22 RT. 01/RW. 03', '5.jpg', '2024-05-03 14:26:52');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bidang_sdm`
--

CREATE TABLE `bidang_sdm` (
  `id_sdm` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `foto` text NOT NULL,
  `tanggal` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `bidang_umum`
--

CREATE TABLE `bidang_umum` (
  `id_umum` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `foto` text NOT NULL,
  `tanggal` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_agenda`
--

INSERT INTO `tbl_agenda` (`id_agenda`, `judul`, `tgl_awal`, `tgl_akhir`, `jam_awal`, `jam_akhir`, `lokasi`, `deskripsi`, `gambar`, `user`, `status`, `slug`) VALUES
(1, 'KAJIAN DHUHA (Kitab Tauhid Tijan Addarori)', '2024-02-17', '2024-02-18', '04:50:00', '05:30:00', 'Masjid Nurul Ilmi', '<p>Ba\'da Subuh....&nbsp;<br>Kajian Dhuha bersama Ust. M. Bisri</p><p>Bab : Hari Kiamat</p><p>Terjadinya kiamat besar ditandai dengan tiupan terompet atau sangkakala oleh Malaikat Isrofil. Tiupan terompet atau sangkakala oleh Malaikat Isrofil yang pertama akan membuat kematian pada seluruh makhluk hidup kecuali mereka yang dikehendaki Allah SWT.</p><p>Hal ini ditegaskan dalam firmanNya surah Az Zumar ayat 68,</p><p>وَنُفِخَ فِى الصُّوْرِ فَصَعِقَ مَنْ فِى السَّمٰوٰتِ وَمَنْ فِى الْاَرْضِ اِلَّا مَنْ شَاۤءَ اللّٰهُ ۗ ثُمَّ نُفِخَ فِيْهِ اُخْرٰى فَاِذَا هُمْ قِيَامٌ يَّنْظُرُوْنَ</p><p>Artinya: \"Sangkakala pun ditiup sehingga matilah semua (makhluk) yang (ada) di langit dan di bumi, kecuali mereka yang dikehendaki Allah. Kemudian, ia ditiup sekali lagi. Seketika itu, mereka bangun (dari kuburnya dan) menunggu (keputusan Allah).\"</p><p>#IbdakMNI</p>', 'kajian1.jpeg', 'Admin', 1, 'KAJIAN-DHUHA-(Kitab-tauhid-tijan-addarori)'),
(2, 'test agenda', '2024-02-19', '2024-02-20', '10:23:00', '11:23:00', 'Masjid Nurul Ilmi', '<p>testing</p>', 'kajian1.jpg', 'Admin', 0, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_artikel`
--

CREATE TABLE `tbl_artikel` (
  `id_artikel` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` text NOT NULL,
  `slug` text NOT NULL,
  `tanggal_dibuat` date NOT NULL,
  `status` int(11) NOT NULL,
  `user` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_artikel`
--

INSERT INTO `tbl_artikel` (`id_artikel`, `id_kategori`, `judul`, `deskripsi`, `gambar`, `slug`, `tanggal_dibuat`, `status`, `user`) VALUES
(1, 2, 'Hikmah: Rajab Bulan Yang Istimewa 2', '<p>“<strong>Allahumma barik lana fi rajaba wa sya\'bana, wa ballighna Ramadlana</strong>”. Ya Allah, berkahilah kami pada bulan Rajab dan bulan Sya\'ban, dan pertemukanlah kami dengan bulan Ramadlan.</p><p>Rajab secara makna artinya keagungan atau mulia. Rajab berasal dari lafaz tarjib yang artinya ‘mengagungkan’ atau ‘memuliakan’ (ta\'zhim). Dalam al-Quran bulan Rajab termasuk sebagai Asyhurul Hurum atau empat dari bulan-bulan yang dihormati.</p><p>Empat bulan tersebut dijelaskan dalam QS. At-Taubah [9] ayat 36 “... di antaranya ada empat (bulan) yang haram (yang disucikan), itulah ketetapan agama yang lurus maka janganlah kamu menganiaya diri kamu dalam bulan yang empat itu”. Juga dalam QS. Al-Baqarah [2] ayat 217, dan hadis Rasulullah mengurai nama-nama bulan dengan jelas “... tiga (bulan) berurutan yaitu Dzulqa’dah, Dzulhijjah dan Muharram. Sedangkan Rajab pertengahan antara Jumada (Tsaniyah) dan Sya’ban” (HR. Bukhari-Muslim).</p><p>Bulan-bulah Haram termasuk Rajab adalah bulan-bulan yang telah dimuliakan oleh Allah dan menjadikannya bulan-bulan yang harus dihormati. Di bulan ini kaum muslimin disarankan untuk meningkatkan amal kebaikan. Karena setiap kebaikan akan diganjar dengan pahala yang dilipatgandakan.</p><p>Tafsir QS. At-Taubah ayat 36, Imam Ibnu Katsir rahimahullah mengatakan bahwa sanksi berbuat dosa di bulan-bulan haram jauh lebih berat dibandingkan bulan-bulan lainnya, selain bulan suci Ramadhan. Sebaliknya, amal shalih di bulan-bulan haram pahalanya lebih besar dibandingkan di bulan lainnya, kecuali Ramadhan.</p><p>Bulan ini juga memiliki banyak penamaan lain diantaranya dinamai dengan ‘al-Ashab’, karena rahmat tercurah pada bulan HIKMAH Rajab Bulan Yang Istimewa Oleh : Alfaqir Ahmad Mulyadi itu yakni bulan kucuran rahmat bagi hamba-hamba Allah yang bertaubat di dalamnya. ‘As-Asham’ karena tidak mendengar bunyi senjata tajam pada bulan itu, karena dilarang menganiaya diri sendiri termasuk diantaranya berperang di bulan-bulan haram.</p><p>Rajab sebagai bulan mustajab. Karena do’a munajat seorang yang beriman di malam awal Rajab dikabulkan oleh Allah subhanahu wata\'ala yang termasuk salah satu dari 5 (lima) malam lainnya yang mustajab. Sebagaimana Imam Syafi’i mengatakan (dalam Al-Um) : “Telah sampai berita pada kami bahwa dulu pernah dikatakan: Sesungguhnya doa dikabulkan pada 5 (lima) malam: malam Jumat, malam Idul Adha, malam Idul Fitri, malam pertama bulan Rajab, dan malam Nisfu Syaban”.</p><p>Bulan ini adalah bulan yang penuh dengan keutamaan, maka Syekh Abdul Qadir Jailani mengatakan (dalam Al-Gunyah/W.561 H): “Telah dikhususkan pada bulan Rajab dengan limpahan ampunan dari Allah, pada bulan Syaban dengan syafaat, pada bulan Ramadhan dengan ganjaran pahala yang berlipat, pada malam lailatul qadar dengan limpahan rahmat yang diturunkan, pada hari ‘Arafah dengan kesempurnaan agama, pada hari Jum’at dengan dikabulkannya do’a para pemohon, pada hari raya (Ied) dengan pembebasan dari api neraka serta pembebasan budak-budak muslim.”</p><p>Dan Imam Abdul Hamid Al-Makki mengatakan (dalam Kanzun Najahi Wa As-Surur): “Rajab adalah bulan ampunan, Sya’ban adalah bulan shalawat kepada Nabi pilihan shallallahu ‘alaihi wasallam, Ramadhan adalah bulannya Al-Qur’an.</p><p>Maka bersungguh-sungguhlah di bulan Rajab yang merupakan bulan waktunya berniaga maka gunakan kesempatan di dalamnya dengan sebaik-baiknya, ia sebagai waktu yang penuh kemakmuran maka selayaknya bagi para peniaga inilah waktu terbaik (meraup keuntungan) waktunya telah masuk, dan bagi orang yang sakit karena beban kedustaan maka inilah bulan yang membawa obatobat penyembuhan.” Wa Allahu A’lamu bis shawab.</p>', 'foto_artikel.jpeg', 'Hikmah-Rajab-Bulan-Yang-Istimewa', '2024-02-25', 1, 'Admin'),
(2, 2, 'Kajian Zuhur Masjid Nurul Ilmi : Mengenal Bughat', '<p>Kajian Zuhur testing</p>', 'IMG_5439.jpeg', 'Kajian-zuhur-Masjid-Nurul-Ilmi:Mengenal-Bughat', '2024-02-28', 1, 'Admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_download`
--

CREATE TABLE `tbl_download` (
  `id_download` int(11) NOT NULL,
  `nama_file` varchar(100) NOT NULL,
  `file` text NOT NULL,
  `tgl_dibuat` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_download`
--

INSERT INTO `tbl_download` (`id_download`, `nama_file`, `file`, `tgl_dibuat`) VALUES
(1, 'Materi Khutbah Jumat', 'Materi_Khutbah_Jumat_(4_Desember_2020).docx', '2024-03-12 09:04:00'),
(2, 'PRESENTASI_BPKH', 'PRESENTASI_BPKH.pdf', '2024-03-12 08:37:25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_galeri`
--

CREATE TABLE `tbl_galeri` (
  `galeri_id` int(11) NOT NULL,
  `galeri_nama` varchar(100) NOT NULL,
  `galeri_foto` text NOT NULL,
  `galeri_user` varchar(100) NOT NULL,
  `token` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_galeri`
--

INSERT INTO `tbl_galeri` (`galeri_id`, `galeri_nama`, `galeri_foto`, `galeri_user`, `token`) VALUES
(1, 'gambar 1', '', 'Admin', '0.8578755820403237');

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
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp(),
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_imam`
--

INSERT INTO `tbl_imam` (`id_imam`, `nama`, `jabatan`, `foto`, `link1`, `link2`, `link3`, `tanggal`, `alamat`) VALUES
(1, 'USTADZ CARMIN', 'IMAM TETAP', 'ust_carmin.jpeg', '', '', '', '2024-02-13 03:44:27', 'BLOK G9 NO. 44 RT. 01/RW. 03>>'),
(2, 'A.SYAUGI, S.Pd,i', 'IMAM 1', 'ust_syaugi.jpeg', '-', '-', '-', '2024-02-13 04:01:59', 'BLOK F6 NO. 29 RT. 011/RW. 01>'),
(3, 'UST. OMAN A.', 'IMAM 2', 'ust_oman.jpeg', '-', '-', '-', '2024-02-13 04:05:59', 'BLOK A6 NO. 11 RT. 07/RW. 01>'),
(5, 'UST. SYABLI HS', 'IMAM 3', 'ust_syabli.jpeg', '-', '-', '-', '2024-05-04 03:54:01', 'BLOK F6 NO. 08 RT. 011/RW. 01>>>'),
(6, 'UST. AHMAD DAELAMI', 'MUADZIN', 'ust_daelani.jpeg', '-', '-', '-', '2024-05-04 03:59:42', '->');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_jadwal`
--

CREATE TABLE `tbl_jadwal` (
  `id_jadwal` int(11) NOT NULL,
  `waktu_shalat` varchar(100) NOT NULL,
  `jam` time NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_jadwal`
--

INSERT INTO `tbl_jadwal` (`id_jadwal`, `waktu_shalat`, `jam`, `status`) VALUES
(1, 'Ashar', '15:15:00', 1),
(2, 'Maghrib', '17:51:00', 1),
(3, 'Isya', '19:24:00', 1),
(4, 'Dzuhur', '23:55:00', 1),
(5, 'Subuh', '04:40:00', 1),
(6, 'Imsak', '04:34:00', 1),
(7, 'Dhuha', '06:24:00', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kategori_artikel`
--

CREATE TABLE `tbl_kategori_artikel` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(100) NOT NULL,
  `slug_kategori` varchar(50) NOT NULL,
  `tanggal` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_kategori_artikel`
--

INSERT INTO `tbl_kategori_artikel` (`id_kategori`, `nama_kategori`, `slug_kategori`, `tanggal`) VALUES
(1, 'Umum', 'umum', '2024-02-25 12:40:04'),
(2, 'Artikel', 'artikel', '2024-02-25 12:40:21'),
(3, 'Berita', 'berita', '2024-02-29 23:17:55'),
(4, 'Tasawuf', 'tasawuf', '2024-02-29 23:18:08'),
(5, 'Khutbah', 'khutbah', '2024-02-29 23:18:45');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kategori_video`
--

CREATE TABLE `tbl_kategori_video` (
  `id_kat_video` int(11) NOT NULL,
  `nama_video` varchar(100) NOT NULL,
  `slug` text NOT NULL,
  `tanggal` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_kategori_video`
--

INSERT INTO `tbl_kategori_video` (`id_kat_video`, `nama_video`, `slug`, `tanggal`) VALUES
(1, 'Kajian Ba\'da Jumat', 'kajian-ba-da-jumat', '2024-02-22 23:06:34'),
(2, 'Webinar', 'webinar', '2024-02-22 23:07:53'),
(4, 'Kajian Ihyan Ulumuddin', 'kajian-ihyan-ulumuddin', '2024-02-23 00:31:39'),
(5, 'Kegiatan Masjid Nurul Ilmi', 'kegiatan-masjid-nurul-ilmi', '2024-02-23 17:14:08'),
(6, 'Kultum Ramadhan', 'kultum-ramadhan', '2024-02-23 17:14:35'),
(7, 'Umum', 'Umum', '2024-05-02 19:07:03');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kontak`
--

CREATE TABLE `tbl_kontak` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `no_hp` varchar(14) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `pesan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_kontak`
--

INSERT INTO `tbl_kontak` (`id`, `nama`, `no_hp`, `subject`, `pesan`) VALUES
(1, 'Renita', '085711067008', 'Website', 'Website yang sangat bagus, dan memiliki banyak fitur dapat digunakan dengan baik');

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
  `alamat` text NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_pimpinan`
--

INSERT INTO `tbl_pimpinan` (`id_pimpinan`, `nama`, `jabatan`, `foto`, `link1`, `link2`, `link3`, `alamat`, `tanggal`) VALUES
(1, 'Waryudi', 'Pengurus DKM', '4.jpg', 'https://facebook.com/', '-', '-', 'BLOK G4 No.29 RT.02/RW.03', '2024-02-13 03:50:42'),
(3, 'test', 'Ketua Bidang IT 2', '', '-', '-', '-', '', '2024-02-13 04:12:45');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_sejarah`
--

CREATE TABLE `tbl_sejarah` (
  `id_sejarah` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` text NOT NULL,
  `user` varchar(100) NOT NULL,
  `tgl_update` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_sejarah`
--

INSERT INTO `tbl_sejarah` (`id_sejarah`, `judul`, `deskripsi`, `gambar`, `user`, `tgl_update`) VALUES
(1, 'SEJARAH BERDIRINYA MASJID NURUL ILMI', '<p>Masjid nurul ilmi dibangun sejak tahun 2005 dengan bangunan yang cukup luas, dan diperuntukan untuk warga perumahan talaga bestari&nbsp;</p>', 'nurulilmi.jpg', 'Admin', '2024-03-05 19:36:46');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_setting`
--

CREATE TABLE `tbl_setting` (
  `id_setting` int(11) NOT NULL,
  `id_jadwal` int(11) NOT NULL,
  `nama_masjid` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` varchar(14) NOT NULL,
  `link_alamat` text NOT NULL,
  `email` text NOT NULL,
  `logo` text NOT NULL,
  `banner1` text NOT NULL,
  `banner2` text NOT NULL,
  `banner3` text NOT NULL,
  `judul1` varchar(100) NOT NULL,
  `judul2` varchar(100) NOT NULL,
  `judul3` varchar(100) NOT NULL,
  `text1` text NOT NULL,
  `text2` text NOT NULL,
  `text3` text NOT NULL,
  `sosmed1` text NOT NULL,
  `sosmed2` text NOT NULL,
  `sosmed3` text NOT NULL,
  `ayat_quran` varchar(100) NOT NULL,
  `artinya` text NOT NULL,
  `surah` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_setting`
--

INSERT INTO `tbl_setting` (`id_setting`, `id_jadwal`, `nama_masjid`, `alamat`, `no_hp`, `link_alamat`, `email`, `logo`, `banner1`, `banner2`, `banner3`, `judul1`, `judul2`, `judul3`, `text1`, `text2`, `text3`, `sosmed1`, `sosmed2`, `sosmed3`, `ayat_quran`, `artinya`, `surah`) VALUES
(1, 3, 'Nurul Ilmi', '<p>Jl. Raya Serang, Talaga, Kec. Cikupa, Kabupaten Tangerang, Banten 15710</p>', '087781581583', '', 'nurulilmi@gmail.com', 'logo.jpeg', 'bg1.jpeg', 'bg2.jpeg', 'bg3.jpeg', 'Judul 1', 'judul 2', 'judul 3', '', '', '', 'https://facebook.com/', 'https://instagram.com/', 'https://youtube.com/', 'وَلَا تَقْرَبُوا الزِّنٰىٓ اِنَّهٗ كَانَ فَاحِشَةًۗ وَسَاۤءَ سَبِيْلًا', 'Janganlah kamu mendekati zina. Sesungguhnya (zina) itu adalah perbuatan keji dan jalan terburuk.', 'Al-Isra\', Ayat 32');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_struktur_organisasi`
--

CREATE TABLE `tbl_struktur_organisasi` (
  `id_struktur` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_struktur_organisasi`
--

INSERT INTO `tbl_struktur_organisasi` (`id_struktur`, `nama`, `foto`) VALUES
(1, 'STRUKTUR ORGANISASI DEWAN KEMAKMURAN MASJID NURUL ILMI', 'struktur.jpg');

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
(1, 'Admin', 'admin', 'f865b53623b121fd34ee5426c792e5c33af8c227', 'Administrator', '1.jpg', '085711067008', '2024-02-12 12:13:52'),
(2, 'Aldo', 'aldo', '9e7700bc021f4c124e9ab35258f13795c20af96d', 'Pengurus', '2.jpg', '081232718945', '2024-02-16 01:49:28');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_video`
--

CREATE TABLE `tbl_video` (
  `id_video` int(11) NOT NULL,
  `id_kat_video` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_video`
--

INSERT INTO `tbl_video` (`id_video`, `id_kat_video`, `judul`, `link`) VALUES
(1, 7, 'Gerakan Masjid Bersih DKM Nurul Ilmi', 'https://www.youtube.com/embed/T13QoQcqtM8?si=6HOC2fRGbz3GzSPa'),
(2, 7, 'PEMBANGUNAN TPQ DKM NURUL ILMI TB', 'https://www.youtube.com/embed/7HvB1uFDaOg?si=SEeXG8a42EzN3AUm'),
(3, 4, 'DOSA-DOSA BESAR', 'https://www.youtube.com/live/-lFCnSNhm1I?si=lja10yB3rh4Zgfcc');

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
-- Indeks untuk tabel `bidang_baitulmal`
--
ALTER TABLE `bidang_baitulmal`
  ADD PRIMARY KEY (`id_baitul`);

--
-- Indeks untuk tabel `bidang_dakwah`
--
ALTER TABLE `bidang_dakwah`
  ADD PRIMARY KEY (`id_dakwah`);

--
-- Indeks untuk tabel `bidang_humas`
--
ALTER TABLE `bidang_humas`
  ADD PRIMARY KEY (`id_humas`);

--
-- Indeks untuk tabel `bidang_kartib`
--
ALTER TABLE `bidang_kartib`
  ADD PRIMARY KEY (`id_kartib`);

--
-- Indeks untuk tabel `bidang_kepemudaan`
--
ALTER TABLE `bidang_kepemudaan`
  ADD PRIMARY KEY (`id_pemuda`);

--
-- Indeks untuk tabel `bidang_sdm`
--
ALTER TABLE `bidang_sdm`
  ADD PRIMARY KEY (`id_sdm`);

--
-- Indeks untuk tabel `bidang_umum`
--
ALTER TABLE `bidang_umum`
  ADD PRIMARY KEY (`id_umum`);

--
-- Indeks untuk tabel `tbl_agenda`
--
ALTER TABLE `tbl_agenda`
  ADD PRIMARY KEY (`id_agenda`);

--
-- Indeks untuk tabel `tbl_artikel`
--
ALTER TABLE `tbl_artikel`
  ADD PRIMARY KEY (`id_artikel`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indeks untuk tabel `tbl_download`
--
ALTER TABLE `tbl_download`
  ADD PRIMARY KEY (`id_download`);

--
-- Indeks untuk tabel `tbl_galeri`
--
ALTER TABLE `tbl_galeri`
  ADD PRIMARY KEY (`galeri_id`);

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
-- Indeks untuk tabel `tbl_kategori_artikel`
--
ALTER TABLE `tbl_kategori_artikel`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `tbl_kategori_video`
--
ALTER TABLE `tbl_kategori_video`
  ADD PRIMARY KEY (`id_kat_video`);

--
-- Indeks untuk tabel `tbl_kontak`
--
ALTER TABLE `tbl_kontak`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_pimpinan`
--
ALTER TABLE `tbl_pimpinan`
  ADD PRIMARY KEY (`id_pimpinan`);

--
-- Indeks untuk tabel `tbl_sejarah`
--
ALTER TABLE `tbl_sejarah`
  ADD PRIMARY KEY (`id_sejarah`);

--
-- Indeks untuk tabel `tbl_setting`
--
ALTER TABLE `tbl_setting`
  ADD PRIMARY KEY (`id_setting`),
  ADD KEY `id_jadwal` (`id_jadwal`);

--
-- Indeks untuk tabel `tbl_struktur_organisasi`
--
ALTER TABLE `tbl_struktur_organisasi`
  ADD PRIMARY KEY (`id_struktur`);

--
-- Indeks untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `tbl_video`
--
ALTER TABLE `tbl_video`
  ADD PRIMARY KEY (`id_video`),
  ADD KEY `id_kat_video` (`id_kat_video`);

--
-- Indeks untuk tabel `tbl_visimisi`
--
ALTER TABLE `tbl_visimisi`
  ADD PRIMARY KEY (`id_visi`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `bidang_baitulmal`
--
ALTER TABLE `bidang_baitulmal`
  MODIFY `id_baitul` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `bidang_dakwah`
--
ALTER TABLE `bidang_dakwah`
  MODIFY `id_dakwah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `bidang_humas`
--
ALTER TABLE `bidang_humas`
  MODIFY `id_humas` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `bidang_kartib`
--
ALTER TABLE `bidang_kartib`
  MODIFY `id_kartib` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `bidang_kepemudaan`
--
ALTER TABLE `bidang_kepemudaan`
  MODIFY `id_pemuda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `bidang_sdm`
--
ALTER TABLE `bidang_sdm`
  MODIFY `id_sdm` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `bidang_umum`
--
ALTER TABLE `bidang_umum`
  MODIFY `id_umum` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_agenda`
--
ALTER TABLE `tbl_agenda`
  MODIFY `id_agenda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tbl_artikel`
--
ALTER TABLE `tbl_artikel`
  MODIFY `id_artikel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tbl_download`
--
ALTER TABLE `tbl_download`
  MODIFY `id_download` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tbl_galeri`
--
ALTER TABLE `tbl_galeri`
  MODIFY `galeri_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_imam`
--
ALTER TABLE `tbl_imam`
  MODIFY `id_imam` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tbl_jadwal`
--
ALTER TABLE `tbl_jadwal`
  MODIFY `id_jadwal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tbl_kategori_artikel`
--
ALTER TABLE `tbl_kategori_artikel`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tbl_kategori_video`
--
ALTER TABLE `tbl_kategori_video`
  MODIFY `id_kat_video` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tbl_kontak`
--
ALTER TABLE `tbl_kontak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_pimpinan`
--
ALTER TABLE `tbl_pimpinan`
  MODIFY `id_pimpinan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tbl_sejarah`
--
ALTER TABLE `tbl_sejarah`
  MODIFY `id_sejarah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_setting`
--
ALTER TABLE `tbl_setting`
  MODIFY `id_setting` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tbl_struktur_organisasi`
--
ALTER TABLE `tbl_struktur_organisasi`
  MODIFY `id_struktur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tbl_video`
--
ALTER TABLE `tbl_video`
  MODIFY `id_video` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tbl_visimisi`
--
ALTER TABLE `tbl_visimisi`
  MODIFY `id_visi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
