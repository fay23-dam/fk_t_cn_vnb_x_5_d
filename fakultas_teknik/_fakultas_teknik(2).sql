-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Feb 2023 pada 09.18
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: ` fakultas_teknik`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `chat`
--

CREATE TABLE `chat` (
  `id` int(11) NOT NULL,
  `pertanyaan` varchar(300) NOT NULL,
  `jawaban` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `chat`
--

INSERT INTO `chat` (`id`, `pertanyaan`, `jawaban`) VALUES
(1, 'Hallo', 'oh, hai kawan'),
(2, 'siapa kamu?', 'Saya hanya bot, anda bisa memanggil saya \"bot\"'),
(3, 'Terima Kasih', 'Sama-sama kawan'),
(4, 'sampai Jumpa lagi', 'Baiklah, Sampai Jumpa :)'),
(5, 'saya butuh bantuan', 'Tanyakan saja aku akan membantumu');

-- --------------------------------------------------------

--
-- Struktur dari tabel `semester1`
--

CREATE TABLE `semester1` (
  `no` int(11) NOT NULL,
  `matakuliah` varchar(30) NOT NULL,
  `sks` int(20) NOT NULL,
  `kode` varchar(20) NOT NULL,
  `prasyarat` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `semester1`
--

INSERT INTO `semester1` (`no`, `matakuliah`, `sks`, `kode`, `prasyarat`) VALUES
(3, 'Al Islam Kemuhammadiyahan I ', 2, '21WU99101', '-'),
(4, 'pancasila ', 2, '21WU99105', '-'),
(5, 'bahasa inggris ', 2, '21WI99101', '-'),
(6, 'Ilmu Sosial Budaya Dasar', 2, '21WI99104', '-'),
(7, 'Aljabar Vektor dan matriks ', 3, '21WP53101', '-'),
(8, 'algoritma dan pemrograman I*', 3, '21WP53102', '-'),
(9, 'Pengantar Teknik informatika', 2, '21WP53103', '-'),
(10, 'Kalkulus I', 3, '21WF05101', '-'),
(11, 'Total SKS', 19, '-', '-');

-- --------------------------------------------------------

--
-- Struktur dari tabel `semester2`
--

CREATE TABLE `semester2` (
  `no` int(11) NOT NULL,
  `matakuliah` varchar(30) NOT NULL,
  `sks` int(20) NOT NULL,
  `kode` varchar(20) NOT NULL,
  `prasyarat` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `semester2`
--

INSERT INTO `semester2` (`no`, `matakuliah`, `sks`, `kode`, `prasyarat`) VALUES
(1, 'Al Islam Kemuhammadiyahan II', 2, '21WU99202', 'Al Islam Kemuhammadiyahan I'),
(2, 'Kewarganegaraan ', 2, '21WU99206', 'Pancasila'),
(3, 'algoritma dan pemrograman II*', 3, '21WP53201', 'algoritma dan pemrograman I*'),
(4, 'Struktur data*', 3, '21WP53202', '-'),
(5, 'sistem operasi ', 2, '21WP53204', 'pengantar teknik informatika'),
(6, 'logika diskrit', 3, '21WP53206', '-'),
(7, 'kalkulus II', 3, '21WF05201', 'Kalkulus I'),
(8, 'Total SKS', 18, '-', '-');

-- --------------------------------------------------------

--
-- Struktur dari tabel `semester3`
--

CREATE TABLE `semester3` (
  `no` int(11) NOT NULL,
  `matakuliah` varchar(30) NOT NULL,
  `sks` int(20) NOT NULL,
  `kode` varchar(20) NOT NULL,
  `prasyarat` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `semester3`
--

INSERT INTO `semester3` (`no`, `matakuliah`, `sks`, `kode`, `prasyarat`) VALUES
(1, 'Basis Data I *', 3, ' 21WP53301', ' Struktur Data'),
(2, 'Pemrograman Berorientasi Objek', 3, '21WP53302', 'Algoritma dan Pemrograman II'),
(3, 'Teori Bahasa dan Otomata', 3, '21WP53303', 'Logika Diskrit'),
(4, 'Komunikasi Data', 2, '21WP53304', '-'),
(5, 'Rekayasa Perangkat Lunak', 2, '21WP53305', '-'),
(6, 'Sistem Digital', 2, '21WP53306', '-'),
(7, 'Al Islam Kemuhammadiyahan III', 2, '21WU99303', ' Al Islam Kemuhammadiyahan II'),
(8, 'Bahasa Indonseia', 2, '21WU99307', '-'),
(9, 'TOTAL SKS', 18, '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `semester4`
--

CREATE TABLE `semester4` (
  `no` int(11) NOT NULL,
  `matakuliah` varchar(30) NOT NULL,
  `sks` int(20) NOT NULL,
  `kode` varchar(20) NOT NULL,
  `prasyarat` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `semester4`
--

INSERT INTO `semester4` (`no`, `matakuliah`, `sks`, `kode`, `prasyarat`) VALUES
(1, 'Basis Data II *', 3, ' 21WP53401', 'Basis Data I'),
(2, 'Manajemen Proyek', 2, ' 21WP53402', ' Rekayasa Perangkat Lunak'),
(3, 'Jaringan Komputer *', 3, ' 21WP53403', 'Komunikasi Data'),
(4, 'Kecerdasan Buatan', 3, ' 21WP53404', '-'),
(5, 'Grafika Komputer', 3, ' 21WP53405', ' Algoritma dan Pemrograman II'),
(6, 'Pemrograman Web dan Mobile I *', 3, ' 21WP53406', 'Pemrograman Berorientasi Objek'),
(7, 'Statistika', 2, ' 21WF05403', '-'),
(8, 'Total SKS', 20, '-', '-');

-- --------------------------------------------------------

--
-- Struktur dari tabel `semester5`
--

CREATE TABLE `semester5` (
  `no` int(11) NOT NULL,
  `matakuliah` varchar(30) NOT NULL,
  `sks` int(25) NOT NULL,
  `kode` varchar(25) NOT NULL,
  `prasyarat` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `semester5`
--

INSERT INTO `semester5` (`no`, `matakuliah`, `sks`, `kode`, `prasyarat`) VALUES
(1, 'Etika Profesi', 2, '21WP53501', '> 60 sks'),
(2, 'Kewirausahaan', 2, '21WI99102', '-'),
(3, 'Jaringan Syaraf Tiruan', 2, '21WP53504', 'Kecerdasan Buatan'),
(4, 'Multimedia *', 3, '21WP53505', '-'),
(5, 'Implementasi dan Pengujian Per', 3, '-', '-'),
(6, 'Sistem Pakar (Pilihan 2)', 3, '-', '-'),
(7, 'Keamanan Jaringan (Pilihan 3)', 3, '-', '-'),
(8, 'Total SKS', 20, '-', '-');

-- --------------------------------------------------------

--
-- Struktur dari tabel `semester6`
--

CREATE TABLE `semester6` (
  `no` int(11) NOT NULL,
  `matakuliah` varchar(30) NOT NULL,
  `sks` int(25) NOT NULL,
  `kode` varchar(25) NOT NULL,
  `prasyarat` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `semester6`
--

INSERT INTO `semester6` (`no`, `matakuliah`, `sks`, `kode`, `prasyarat`) VALUES
(1, 'Pengantar Algoritma Deep Learn', 3, ' 21WP53601', ' Jaringan Syaraf Tiruan'),
(2, 'Analisis dan Pemodelan Spasial', 3, ' 21WP53602', 'Grafika Komputer'),
(3, 'Data Mining', 3, ' 21WP53604', 'Basis Data II'),
(4, 'Metodologi Penelitian', 2, ' 21WF05605', '> 90 sks'),
(5, 'Interaksi Manusia dan Komputer', 2, ' 21WP53605', 'Sistem Digital'),
(6, 'Etnografi Papua Berbasis Tekno', 2, '21WF05606', 'Ilmu Sosial Budaya Dasar'),
(7, 'Pilihan 4', 3, '-', '-'),
(8, 'Pilihan 5', 3, '-', '-'),
(9, 'Total SKS', 19, '-', '-');

-- --------------------------------------------------------

--
-- Struktur dari tabel `semester7`
--

CREATE TABLE `semester7` (
  `no` int(11) NOT NULL,
  `matakuliah` varchar(30) NOT NULL,
  `sks` int(25) NOT NULL,
  `kode` varchar(25) NOT NULL,
  `prasyarat` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `semester7`
--

INSERT INTO `semester7` (`no`, `matakuliah`, `sks`, `kode`, `prasyarat`) VALUES
(1, ' Al Islam Kemuhammadiyahan IV', 2, ' 21WU99704', 'Al Islam Kemuhammadiyahan III'),
(2, 'Pilihan 6', 3, '-', '-'),
(3, 'Pilihan 7', 3, '-', '-'),
(4, 'Pilihan 8', 3, '-', '-'),
(5, 'Pilihan 9', 3, '-', '-'),
(6, 'Kerja Praktek *', 2, ' 21WF05707', '-'),
(7, 'Bahasa Inggris Lanjutan', 2, ' 21WI99702', 'Bahasa Inggris'),
(8, 'Total SKS', 20, '-', '-');

-- --------------------------------------------------------

--
-- Struktur dari tabel `semester8`
--

CREATE TABLE `semester8` (
  `no` int(11) NOT NULL,
  `matakuliah` varchar(30) NOT NULL,
  `sks` int(25) NOT NULL,
  `kode` varchar(25) NOT NULL,
  `prasyarat` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `semester8`
--

INSERT INTO `semester8` (`no`, `matakuliah`, `sks`, `kode`, `prasyarat`) VALUES
(3, ' Kuliah Kerja Nyata', 4, ' 21WI99803', '> 110 SKS'),
(4, 'Tugas Akhir', 6, ' 21WI99806', 'Metodologi Penelitian');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` int(11) NOT NULL,
  `nama_admin` varchar(65) NOT NULL,
  `username` varchar(65) NOT NULL,
  `password` varchar(128) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `code` mediumint(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `nama_admin`, `username`, `password`, `foto`, `code`) VALUES
(1, 'Saddam Satria', 'admin@gmail.com', '8c4cfa1c2ee5992a76f8c105f379368d', 'anya.png', 258785),
(2, 'saddam', 'saddamsword23@gmail.com', '8c4cfa1c2ee5992a76f8c105f379368d', 'anya.png', 328277);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_akademik`
--

CREATE TABLE `tb_akademik` (
  `id` int(11) NOT NULL,
  `judul` varchar(30) NOT NULL,
  `isi` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_akademik`
--

INSERT INTO `tb_akademik` (`id`, `judul`, `isi`) VALUES
(1, 'CUTI KULIAH', '<p>DHDJAKFHDAKJFJSAHDJ</p>\r\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_berita`
--

CREATE TABLE `tb_berita` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `tanggal` varchar(100) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `keterangan` longtext NOT NULL,
  `submenu` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_berita`
--

INSERT INTO `tb_berita` (`id`, `judul`, `tanggal`, `gambar`, `keterangan`, `submenu`) VALUES
(1, 'Siapkan Diri untuk Karir Cemerlang: PMB Universitas Muhammadiyah Sorong Menawarkan 7 Fakultas', '2023-01-31', 'cx.jpg', '<h2>Waktu Pendaftaran</h2>\r\n\r\n<p>Mulai dari tanggal 09 Januari 2023 hingga 31 Juni 2023, PMB Universitas Muhammadiyah Sorong dibuka untuk kalian yang ingin memulai perjalanan karir yang menyenangkan dan menantang. Kalian dapat mengunjungi kantor sekretariat PMB yang terletak di Gedung Perpustakaan lantai 1, berlokasi di kampus 1 Universitas Muhammadiyah Sorong, jl. Pendidikan No. 27 Kelurahan Klabulu, Distrik Malaimsimsa, Kota Sorong.</p>\r\n\r\n<h2>Fakultas dan Prodi</h2>\r\n\r\n<p>Universitas Muhammadiyah Sorong menawarkan 7 fakultas yang berbeda dengan beragam program studi yang ditawarkan.<br />\r\nBaca Juga : <a href=\"https://www.um-sorong.ac.id/berita/detail/jangan-salah-pilih-19-program-studi-di-universitas-muhammadiyah-sorong-telah-terakreditasi\">Jangan Salah Pilih! 19 Program Studi Di Universitas Muhammadiyah Sorong Telah Terakreditasi</a></p>\r\n\r\n<h3>Fisip</h3>\r\n\r\n<p>Fakultas Ilmu Sosial dan Ilmu Politik (FISIP) di Universitas Muhammadiyah Sorong menawarkan program studi Ilmu Administrasi Negara, Ilmu Pemerintahan, dan Sosiologi yang memberikan prospek kerja yang cemerlang bagi para mahasiswanya. Ilmu Administrasi Negara dan Ilmu Pemerintahan menyediakan kesempatan kerja di bidang pemerintahan, organisasi non-profit, dan industri swasta. Program studi Sosiologi akan menyediakan kesempatan kerja di bidang riset, konsultasi, dan advokasi sosial</p>\r\n\r\n<p>Fakultas Ilmu Sosial dan Ilmu Politik (FISIP) di Universitas Muhammadiyah Sorong adalah tempat yang tepat bagi kamu yang ingin menjadi pemimpin masa depan yang berkualitas. Dengan mengambil program studi Ilmu Administrasi Negara, Ilmu Pemerintahan, atau Sosiologi, kamu akan mempelajari berbagai aspek pemerintahan, perencanaan pembangunan, dan masalah sosial yang ada di masyarakat.</p>\r\n\r\n<h3>Fakultas Teknik</h3>\r\n\r\n<p>Fakultas Teknik di Universitas Muhammadiyah Sorong menawarkan program studi Teknik Sipil, Teknik Industri, Teknik Informatika, Teknik Lingkungan, dan Perencanaan Wilayah dan Kota yang memberikan prospek kerja yang menjanjikan bagi para mahasiswanya. Program studi Teknik Sipil menyediakan kesempatan kerja di bidang konstruksi, perencanaan, dan pengelolaan proyek. Program studi Teknik Industri menyediakan kesempatan kerja di bidang manajemen produksi, manajemen operasi, dan rekayasa sistem. Program studi Teknik Informatika menyediakan kesempatan kerja di bidang teknologi informasi, pengembangan perangkat lunak, dan pemeliharaan sistem. Program studi Teknik Lingkungan menyediakan kesempatan kerja di bidang konsultasi lingkungan, manajemen lingkungan, dan pengelolaan sumber daya alam. Program studi Perencanaan Wilayah dan Kota menyediakan kesempatan kerja di bidang perencanaan wilayah dan kota, manajemen lingkungan, dan pengelolaan sumber daya alam.</p>\r\n\r\n<p>Fakultas Teknik di Universitas Muhammadiyah Sorong adalah tempat yang tepat bagi kamu yang ingin mengejar cita-cita menjadi insinyur masa depan. Dengan mengambil program studi Teknik Sipil, Teknik Industri, Teknik Informatika, Teknik Lingkungan, atau Perencanaan Wilayah dan Kota, kamu akan mempelajari berbagai aspek dalam perencanaan, konstruksi, dan pengelolaan proyek-proyek yang ada di dunia nyata.</p>\r\n\r\n<h3>Fakultas Hukum</h3>\r\n\r\n<p>Fakultas Hukum di Universitas Muhammadiyah Sorong menawarkan program studi Ilmu Hukum yang memberikan prospek kerja yang menjanjikan bagi para mahasiswanya. Program studi Ilmu Hukum menyediakan kesempatan kerja di bidang hukum, yang mencakup bidang peradilan, konsultasi hukum, dan pemerintah. Selain itu, lulusan Ilmu Hukum juga dapat menjadi pengacara, hakim, jaksa, atau pejabat pemerintah di bidang hukum.</p>\r\n\r\n<p>Fakultas Hukum di Universitas Muhammadiyah Sorong adalah tempat yang tepat bagi kamu yang ingin menjadi pembela hak asasi manusia dan pemimpin di bidang hukum. Dengan mengambil program studi Ilmu Hukum, kamu akan mempelajari berbagai aspek hukum, mulai dari hukum acara, hukum perdata, hukum pidana, hukum internasional, hukum bisnis, dan lain sebagainya.</p>\r\n\r\n<h3>Fakultas Perikanan</h3>\r\n\r\n<p>Fakultas Perikanan di Universitas Muhammadiyah Sorong merupakan salah satu fakultas yang ditawarkan, yang menawarkan program studi Manajemen dan Sumber Daya Perairan, serta Pengolahan Hasil Perikanan. Fakultas ini merupakan tempat yang tepat bagi mereka yang ingin mengejar karir dalam bidang perikanan dan lingkungan. Program studi Manajemen dan Sumber Daya Perairan akan memberikan mahasiswa pengetahuan tentang manajemen sumber daya perairan dan lingkungan perairan, serta pengelolaan dan pengembangan sumber daya perikanan. Program studi Pengolahan Hasil Perikanan akan memberikan mahasiswa pengetahuan tentang teknologi pengolahan hasil perikanan, pemasaran hasil perikanan, serta pengelolaan usaha perikanan.</p>\r\n\r\n<p>Dengan mengambil program studi Manajemen dan Sumber Daya Perikanan, atau Pengolahan Hasil Perikanan, kamu akan mempelajari berbagai aspek pengelolaan dan pengembangan sumber daya perikanan yang berkualitas dan berkelanjutan, serta mengetahui cara-cara pengolahan hasil perikanan yang baik dan aman.</p>\r\n\r\n<h3>Fakultas Pertanian</h3>\r\n\r\n<p>Fakultas Pertanian di Universitas Muhammadiyah Sorong merupakan salah satu fakultas yang ditawarkan, yang menawarkan program studi Agroteknologi dan Kehutanan. Fakultas ini merupakan tempat yang tepat bagi mereka yang ingin mengejar karir dalam bidang pertanian dan lingkungan. Program studi Agroteknologi akan memberikan mahasiswa pengetahuan tentang teknologi pertanian, pengelolaan tanah, dan pengelolaan sumber daya alam untuk meningkatkan produktivitas pertanian. Program studi Kehutanan akan memberikan mahasiswa pengetahuan tentang manajemen hutan, konservasi, dan pengelolaan sumber daya alam.</p>\r\n\r\n<h3>FKIP</h3>\r\n\r\n<p>Fakultas Keguruan dan Ilmu Pendidikan (FKIP) di Universitas Muhammadiyah Sorong merupakan salah satu fakultas yang ditawarkan, yang menawarkan program studi Pendidikan Bahasa Inggris, Pendidikan Matematika, dan Pendidikan Guru Sekolah Dasar. Fakultas ini merupakan tempat yang tepat bagi mereka yang ingin mengejar karir dalam bidang pendidikan. Program studi Pendidikan Bahasa Inggris akan memberikan mahasiswa pengetahuan tentang metodologi pengajaran bahasa Inggris, kurikulum, dan evaluasi pembelajaran. Program studi Pendidikan Matematika akan memberikan mahasiswa pengetahuan tentang metodologi pengajaran matematika, kurikulum, dan evaluasi pembelajaran. Program studi Pendidikan Guru Sekolah Dasar akan memberikan mahasiswa pengetahuan tentang metodologi pengajaran, kurikulum, dan evaluasi pembelajaran untuk menjadi seorang guru di sekolah dasar.</p>\r\n\r\n<p>Baca Juga : <a href=\"https://www.um-sorong.ac.id/berita/detail/ikuti-perkuliahan-di-italy-naina-mahasiswa-unamin-presentasikan-budaya-asli-papua\">Ikuti Perkuliahan di Italy, Naina Mahasiswa UNAMIN Presentasikan Budaya Asli Papua</a></p>\r\n\r\n<h3>Fakultas Ekonomi</h3>\r\n\r\n<p>Fakultas Ekonomi di Universitas Muhammadiyah Sorong merupakan salah satu fakultas yang ditawarkan, yang menawarkan program studi Manajemen dan Akuntansi. Fakultas ini merupakan tempat yang tepat bagi mereka yang ingin mengejar karir dalam bidang manajemen dan akuntansi. Program studi Manajemen akan memberikan mahasiswa pengetahuan tentang manajemen operasional, manajemen strategi, manajemen sumber daya manusia, dan manajemen pemasaran. Program studi Akuntansi akan memberikan mahasiswa pengetahuan tentang akuntansi keuangan, akuntansi manajemen, pajak, dan perpajakan.</p>\r\n\r\n<h2>Pascasarjana</h2>\r\n\r\n<p>Selain itu, Universitas Muhammadiyah Sorong juga menawarkan program Pascasarjana S2 Ilmu Hukum bagi para mahasiswa yang ingin melanjutkan studi ke tingkat yang lebih tinggi. Program ini sangat cocok bagi para profesional yang ingin melanjutkan studi di bidang hukum.</p>\r\n\r\n<h2>Mari Bergabung Bersama Kami</h2>\r\n\r\n<p>Dengan beragam pilihan program studi yang ditawarkan, Universitas Muhammadiyah Sorong menjamin bahwa setiap calon mahasiswa akan mendapatkan kesempatan yang sesuai dengan minat dan bakatnya.</p>\r\n', 'UNAMIN - Kabar gembira bagi para calon mahasiswa baru! Universitas Muhammadiyah Sorong membuka pintu lebar-lebar untuk kalian yang ingin mengejar cita-cita di dunia pendidikan.'),
(2, 'Rektor Lantik Ketua Program Studi Baru dan Kepala Laboratorium Dasar Masa Jabatan 2023/2024 ', '2023-01-31', 'PELANTIKAN.png', '<p>Sorong, UNAMIN - Senin, 9 Januari 2023, telah terselenggara acara pelantikan Kepala Program Studi baru dan Kepala Laboratorium Dasar di Universitas Muhammadiyah Sorong. Acara ini dilaksanakan di Aula Rektorat lt.3 Universitas Muhammadiyah Sorong dan dihadiri oleh Rektor, para Wakil Rektor, ketua Lembaga, dan Kepala Biro.</p>\r\n\r\n<p>Kepala Program Studi Baru yang dilantik antara lain, Kepala Program Studi Pendidikan Bahasa Inggris dijabat oleh Hasanuddin, S.Pd., M.Pd., Program Studi Ilmu Pemerintahan dijabat oleh Wahyudin Haliq, S.Ip., M.Si., dan Kepala Laboratorium Dasar dijabat oleh Ponisri, S.Hut. M.P. dengan masa jabatan 2023/2024.</p>\r\n\r\n<p>Rektor Universitas Muhammadiyah Sorong, Dr. H. Muhammad Ali, MM., MH. menyampaikan harapannya agar kepala program studi baru dan kepala laboratorium dasar tersebut dapat memberikan kontribusi yang positif bagi perkembangan universitas dan dapat membawa perubahan yang lebih baik bagi mahasiswa dan stakeholder lainnya.</p>\r\n\r\n<p>Selain itu, Rektor juga berharap agar kepala program studi baru tersebut dapat menjalin kerjasama internal dan eksternal dengan baik dalam pengembangan program studi masing-masing, serta yang paling penting adalah agar senantiasa menjunjung nilai-nilai islam yang maju dan mencerahkan sesuai dengan&nbsp; Manhaj Tarjih Muhammadiyah dalam menjalankan tugas sebagai kepala program studi atau kepala laboratorium dasar. Rektor berharap agar kepala program studi baru dan kepala laboratorium dasar tersebut dapat menjadi teladan bagi mahasiswa dalam mengabdi kepada almamater serta dapat menjadi pemimpin yang bijaksana dalam mengembangkan program studi masing-masing.</p>\r\n\r\n<p>Semoga pelantikan kepala program studi baru dan kepala laboratorium dasar tersebut menjadi awal yang baik bagi perkembangan Universitas Muhammadiyah Sorong di masa yang akan datang. [humas]</p>\r\n', 'Sorong, UNAMIN - Senin, 9 Januari 2023, telah terselenggara acara pelantikan Kepala Program Studi baru dan Kepala Laboratorium Dasar di Universitas Muhammadiyah Sorong. Acara ini dilaksanakan di Aula Rektorat lt.3 Universitas Muhammadiyah Sorong dan dihadiri oleh Rektor, para Wakil Rektor, ketua Lembaga, dan Kepala Biro'),
(3, 'COKLAT', '2023-01-31', 'cx.jpg', '<p>WOEEEEEEEEEEEEEFJA DLKFJDFNEJKFNSKFJ KALAJFAJKFAK</p>\r\n', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_fasilitas`
--

CREATE TABLE `tb_fasilitas` (
  `id_fasilitas` int(11) NOT NULL,
  `nama_fasilitas` varchar(255) NOT NULL,
  `keterangan_fasilitas` longtext NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_fasilitas`
--

INSERT INTO `tb_fasilitas` (`id_fasilitas`, `nama_fasilitas`, `keterangan_fasilitas`, `gambar`) VALUES
(2, 'GEDUNG TEKNIK', '<p>TINGKAT 3</p>\r\n', 'IMG-20221017-WA0106.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_ijin`
--

CREATE TABLE `tb_ijin` (
  `id` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `judul` longtext NOT NULL,
  `isi` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_ijin`
--

INSERT INTO `tb_ijin` (`id`, `gambar`, `judul`, `isi`) VALUES
(1, '626763.jpg', '<p>Bang Gif Alok Bang</p>\r\n', '<p>COKLAT</p>\r\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_industri`
--

CREATE TABLE `tb_industri` (
  `no` int(11) NOT NULL,
  `matakuliah` varchar(30) NOT NULL,
  `kode` varchar(25) NOT NULL,
  `sks` int(20) NOT NULL,
  `semester` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tb_industri`
--

INSERT INTO `tb_industri` (`no`, `matakuliah`, `kode`, `sks`, `semester`) VALUES
(85, 'Al Islam dan Kemuhammadiyahan ', '21WU99101', 2, 1),
(86, 'Pancasila', '21WU99105', 2, 1),
(87, 'Bahasa Inggris', '21WI99101', 2, 1),
(88, 'Ilmu Sosial Budaya Dasar', '21WI99104', 2, 1),
(89, 'Kalkulus I', '21WP52101 ', 2, 1),
(90, 'Fisika Teknik I', '21WP52102', 2, 1),
(91, 'Kimia Teknik', '21WP52103', 2, 1),
(92, 'Statistika Industri', '21WP52104', 2, 1),
(93, 'Pengantar Teknik Industri', '21WP52105', 2, 1),
(94, 'Al Islam dan Kemuhammadiyahan ', '21WU99202', 2, 2),
(95, 'Kewarganegaraan', '21WU99206', 2, 2),
(96, 'Kalkulus II', '21WP52201 ', 2, 2),
(97, 'Fisika Teknik II', '21WP52202', 2, 2),
(98, 'Praktikum Fisika Teknik', '21WP52203', 1, 2),
(99, 'Anatomi dan Fisiologi Manusia', '21WP52204', 2, 2),
(100, 'Material Teknik', '21WP52205', 2, 2),
(101, 'Menggambar Teknik', '21WP52206', 3, 2),
(102, 'Pengantar Ekonomika', '21WP52306', 2, 2),
(103, 'Al Islam dan Kemuhammadiyahan ', '21WU99103', 2, 3),
(104, 'Bahasa Indonesia', '21WU99307', 2, 3),
(105, 'Aljabar Linier', '21WP52301', 2, 3),
(106, 'Pemrograman Komputer', '21WP52302', 2, 3),
(107, 'Praktikum Pemrograman Komputer', '21WP52303', 1, 3),
(108, 'Ergonomika', '21WP52304', 2, 3),
(109, 'Praktikum Ergonomika', '21WP52305', 1, 3),
(110, 'Analisa Biaya', '21WP52402', 2, 3),
(111, 'Mekanika Teknik', '21WP52307', 2, 3),
(112, 'Proses Manufaktur', '21WP52308', 3, 3),
(113, 'Matematika Optimisasi', '21WP52401', 2, 4),
(114, 'Perancangan Sistem Kerja', '21WP52403', 2, 4),
(115, 'Praktikum Perancangan Sistem K', '21WP52404', 1, 4),
(116, 'Riset Operasi I', '21WP52405', 3, 4),
(117, 'Manajemen Proyek Industri', '21WP52406', 2, 4),
(118, 'Psikologi Industri', '21WP52407', 2, 4),
(119, 'Statistik Lanjutan', '21WP52207', 2, 4),
(120, 'Praktikum Statistik Industri', '21WP52208', 1, 4),
(121, 'Perancangan dan Pengembangan P', '21WP52408', 2, 4),
(122, 'Simulasi Komputer', '21WP52409', 3, 4),
(123, 'Kewirausahaan', '21WI99502', 2, 5),
(124, 'Analisa dan Perancangan Sistem', '21WP52501', 3, 5),
(125, 'Sistem Produksi I', '21WP52502', 2, 5),
(126, 'Riset Operasi II', '21WP52503', 3, 5),
(127, 'Pengukuran Sistem Kerja', '21WP52504', 2, 5),
(128, 'Praktikum Pengukuran Sistem Ke', '21WP52505', 1, 5),
(129, 'Perencanaan dan Pengendalian P', '21WP52506', 3, 5),
(130, 'Sistem Rantai Pasok', '21WP52507', 2, 5),
(131, 'Pemodelan Sistem', '21WP52508', 2, 5),
(132, 'Organisasi dan Manajemen Perus', '21WP52509', 2, 5),
(133, 'Sistem Produksi II', '21WP52601', 2, 6),
(134, 'Perancangan Tata Letak Fasilit', '21WP52602', 3, 6),
(135, 'Ekonomi Teknik', '21WP52603', 2, 6),
(136, 'Pengendalian dan Penjaminan Mu', '21WP52604', 3, 6),
(137, 'Keselamatan, Kesehatan dan Lin', '21WP52605', 2, 6),
(138, 'Praktikum Terintegrasi', '21WP52606', 2, 6),
(139, 'Pilihan I', '5260', 3, 6),
(140, 'Pilihan II', '5260', 3, 6),
(141, 'Al Islam dan Kemuhammadiyahan ', '21WU99704', 2, 7),
(142, 'Analisa Keputusan', '21WP52701', 2, 7),
(143, 'Sistem Lingkungan Industri', '21WP52702', 2, 7),
(144, 'Analisis dan Perancangan Perus', '21WP52703', 2, 7),
(145, 'Praktikum Analisis dan Peranca', '21WP52704', 1, 7),
(146, 'Metodologi Penelitian', '21WP52705', 2, 7),
(147, 'Kerja Praktek', '21WP52706', 2, 7),
(148, 'Bahasa Inggris Lanjutan', '21WF05701', 2, 7),
(149, 'KKN', '21WI99803', 4, 8),
(150, 'Skripsi', '21WI99806', 6, 8),
(151, 'Manajemen Risiko', '21PP52601', 3, 8),
(152, 'Human Capital Management (MSDM', '21PP52602', 3, 8),
(153, 'Manajemen Aset', '21PP52603', 3, 8),
(154, 'Pemasaran Industri', '21PP52701', 3, 8),
(155, 'Manajemen Strategi', '21PP52702', 3, 8),
(156, 'Manajemen Kualitas Jasa', '21PP52703', 3, 8),
(157, 'Teknologi Penanganan dan Trans', '21PP52604', 3, 8),
(158, 'Manajemen Logistik', '21PP52605', 3, 8),
(159, 'Export Import', '21PP52606', 3, 8),
(160, 'Supply Chain Strategy, Desain,', '21PP52704', 3, 8),
(161, 'Teknologi Distribusi Hasil Hut', '21PP52705', 3, 8),
(162, 'Customer Relationship Manageme', '21PP52604', 3, 8),
(163, 'Ergonomi Makro', '21PP52607', 3, 8),
(164, 'Lean Manufacturing', '21PP52608', 3, 8),
(165, 'Manajemen Perawatan', '21PP52609', 3, 8),
(166, 'Ergonomi Kognitif', '21PP52707', 3, 8),
(167, 'Ergonomi Mikro', '21PP52708', 3, 8),
(168, 'Desain Eksperimen', '21PP52709', 3, 8);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_industri_pilihan`
--

CREATE TABLE `tb_industri_pilihan` (
  `no` int(11) NOT NULL,
  `matakuliah` varchar(30) NOT NULL,
  `kode` varchar(30) NOT NULL,
  `sks` int(20) NOT NULL,
  `semester` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_industri_pilihan`
--

INSERT INTO `tb_industri_pilihan` (`no`, `matakuliah`, `kode`, `sks`, `semester`) VALUES
(1, 'Manajemen Risiko', '21PP52601', 3, 8),
(2, 'Human Capital Management (MSDM', '21PP52602', 3, 8),
(3, 'Manajemen Aset', '21PP52603', 3, 8),
(4, 'Pemasaran Industri', '21PP52701', 3, 8),
(5, 'Manajemen Strategi', '21PP52702', 3, 8),
(6, 'Manajemen Kualitas Jasa', '21PP52703', 3, 8),
(7, 'Teknologi Penanganan dan Trans', '21PP52604', 3, 8),
(8, 'Manajemen Logistik', '21PP52605', 3, 8),
(9, 'Export Import', '21PP52606', 3, 8),
(10, 'Supply Chain Strategy, Desain,', '21PP52704', 3, 8),
(11, 'Teknologi Distribusi Hasil Hut', '21PP52705', 3, 8),
(12, 'Customer Relationship Manageme', '21PP52604', 3, 8),
(13, 'Ergonomi Makro', '21PP52607', 3, 8),
(14, 'Lean Manufacturing', '21PP52608', 3, 8),
(15, 'Manajemen Perawatan', '21PP52609', 3, 8),
(16, 'Ergonomi Kognitif', '21PP52707', 3, 8),
(17, 'Ergonomi Mikro', '21PP52708', 3, 8),
(18, 'Desain Eksperimen', '21PP52709', 3, 8);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_it_pilihan`
--

CREATE TABLE `tb_it_pilihan` (
  `no` int(11) NOT NULL,
  `bidangilmu` varchar(50) NOT NULL,
  `matakuliah` varchar(50) NOT NULL,
  `kode` varchar(50) NOT NULL,
  `prasyarat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tb_it_pilihan`
--

INSERT INTO `tb_it_pilihan` (`no`, `bidangilmu`, `matakuliah`, `kode`, `prasyarat`) VALUES
(4, 'Rekayasa Perangkat Lunak', 'Implementasi dan Pengujian Perangkat Lunak', '21PP53717', 'Algoritma dan Pemrograman II'),
(5, 'Rekayasa Perangkat Lunak', 'Penjaminan Mutu Perangkat Lunak', '21PP53701', 'Manajemen Proyek'),
(6, 'Rekayasa Perangkat Lunak', 'Requirement Engineering', '21PP53702', 'Rekayasa Perangkat Lunak'),
(7, 'Rekayasa Perangkat Lunak', 'Administrasi Basis Data', '21PP53703', 'Basis Data II'),
(8, 'Rekayasa Perangkat Lunak', 'Perancangan User Experience', '21PP53704', 'Interaksi Manusia dan Komputer'),
(9, 'Rekayasa Perangkat Lunak', 'Metode Numerik', '21PP53718', 'Aljabar Vektor dan Matriks'),
(10, 'Rekayasa Perangkat Lunak', 'Pemrograman Web dan Mobile Lanjutan', '21PP53705', 'Pemrograman Web & Mobile I'),
(11, 'Rekayasa Perangkat Lunak', 'Technopreneurship', '21PP53724', 'Manajemen Proyek'),
(12, 'Komputasi Cerdas', 'Sistem Pakar', '21PP53719', 'Kecerdasan Buatan'),
(13, 'Komputasi Cerdas', 'Penalaran Komputer', '21PP53709', 'Kecerdasan Buatan '),
(14, 'Komputasi Cerdas', 'Pengolahan Citra Digital', '21PP53720', 'Pengolahan Citra Digital'),
(15, 'Komputasi Cerdas', 'Sistem Cerdas', '21PP53707', 'Kecerdasan Buatan'),
(16, 'Komputasi Cerdas', 'Sistem Berbasis Pengetahuan', '21PP53708', 'Kecerdasan Buatan'),
(17, 'Komputasi Cerdas', 'Pengenalan Pola', '21PP53709', 'Kecerdasan Buatan'),
(18, 'Komputasi Cerdas', 'Algoritma Genetik', '21PP53710', 'Kecerdasan Buatan'),
(19, 'Komputasi Cerdas', 'Kecerdasan Komputasional', '21PP53723', 'Kecerdasan Buatan'),
(20, 'Komputasi Jaringan', 'Pemrograman Jaringan Kluster', '21PP53711', 'Jaringan Komputer'),
(21, 'Komputasi Jaringan', 'Wireless/Mobile Computing', '21PP53712', 'Jaringan Komputer'),
(22, 'Komputasi Jaringan', 'Sistem Paralel & Terdistribusi', '21PP53713', 'Komunikasi Data'),
(23, 'Komputasi Jaringan', 'Pemodelan Komunikasi Data dan Jaringan', '21PP53714', 'Jaringan Komputer'),
(24, 'Komputasi Jaringan', 'Pemrograman Jaringan Komputer', '21PP53715', 'Jaringan Komputer'),
(25, 'Komputasi Jaringan', 'Komputasi Cloud', '21PP53716', 'Data Mining'),
(26, 'Komputasi Jaringan', 'Keamanan Jaringan', '21PP53721', 'Jaringan Komputer'),
(27, 'Komputasi Jaringan', 'Kriptografi', '21PP53722', 'Data Mining');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kerjasama_dalam_negeri`
--

CREATE TABLE `tb_kerjasama_dalam_negeri` (
  `id_kerja_sama` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `nama` varchar(65) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_kerjasama_dalam_negeri`
--

INSERT INTO `tb_kerjasama_dalam_negeri` (`id_kerja_sama`, `gambar`, `nama`, `link`) VALUES
(1, 'anya.png', 'UNIVERSITAS ANIME', 'https://www.uduymacal.com/2017/09/cara-mudah-membuat-data-statistik.html'),
(2, 'th.jpg', 'UNIVERSITAS WALKER', 'https://developer.mozilla.org/en-US/docs/Web/HTML/Element/video');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kerjasama_luar_negeri`
--

CREATE TABLE `tb_kerjasama_luar_negeri` (
  `id_kerja_sama` int(11) NOT NULL,
  `nama` varchar(80) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_kerjasama_luar_negeri`
--

INSERT INTO `tb_kerjasama_luar_negeri` (`id_kerja_sama`, `nama`, `gambar`, `link`) VALUES
(1, 'UNIVERSITAS ATEIS', 'original.jpg', 'https://youtube.com/');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_ketua`
--

CREATE TABLE `tb_ketua` (
  `nip` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `gelar` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_ketua`
--

INSERT INTO `tb_ketua` (`nip`, `nama`, `gelar`, `jabatan`, `gambar`) VALUES
(2000, 'voidq', 'DEWA KODING', 'KETUA INFORMATIKA', 'original.jpg'),
(2001, 'ZAN', 'CIK', 'KETUA SIPIL', 'original.jpg'),
(2002, 'TANG', 'VER', 'KETUA INDUSTRI', 'original.jpg'),
(2003, 'PEAK', 'KING', 'KETUA LINGKUNGAN', 'original.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_mahasiswa`
--

CREATE TABLE `tb_mahasiswa` (
  `nim` int(12) NOT NULL,
  `nama` varchar(65) NOT NULL,
  `jk` varchar(65) NOT NULL,
  `jurusan` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_mahasiswa`
--

INSERT INTO `tb_mahasiswa` (`nim`, `nama`, `jk`, `jurusan`) VALUES
(666, 'ZUL', 'LK', 'TEKNIK INFORMATIKA'),
(2021, 'Saddam', 'LK', 'TEKNIK INFORMATIKA'),
(2022, 'Saza', 'LK', 'TEKNIK INDUSTRI'),
(2023, 'Fay', 'P', 'TEKNIK SIPIL'),
(2024, 'Ipan', 'P', 'TEKNIK LINGKUNGAN');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pdf_book`
--

CREATE TABLE `tb_pdf_book` (
  `id` int(11) NOT NULL,
  `nama_file_pdf` varchar(100) NOT NULL,
  `judul_file_pdf` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tb_pdf_book`
--

INSERT INTO `tb_pdf_book` (`id`, `nama_file_pdf`, `judul_file_pdf`) VALUES
(1, 'tgs2_basisdata3_ilham s_202155202055.pdf', 'Belajar Css Untuk Pemula'),
(5, 'Website dengan PHP.pdf', 'Website dengan PHP'),
(6, 'Buat tabel.pdf', 'CXV'),
(7, 'tgs3_basisdata1_ilham s_202155202055.pdf', 'xcvf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pengumuman`
--

CREATE TABLE `tb_pengumuman` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `tanggal` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `keterangan` longtext NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pimpinan`
--

CREATE TABLE `tb_pimpinan` (
  `nip` int(16) NOT NULL,
  `nama` varchar(65) NOT NULL,
  `gelar` varchar(65) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_pimpinan`
--

INSERT INTO `tb_pimpinan` (`nip`, `nama`, `gelar`, `jabatan`, `gambar`) VALUES
(809, 'Better', 'CONQU', 'BENDAHARA', 'original.jpg'),
(2021, 'Faisal', 'ACE QONQU MYTIC ', 'DEKAN', 'anya.png'),
(2022, 'Rifki', 'RAJA ALEX', 'WAKIL DEKAN', 'original.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pinjam`
--

CREATE TABLE `tb_pinjam` (
  `id` int(11) NOT NULL,
  `gambar` varchar(250) NOT NULL,
  `judul` longtext NOT NULL,
  `isi` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pmb`
--

CREATE TABLE `tb_pmb` (
  `id` int(11) NOT NULL,
  `judul` varchar(500) NOT NULL,
  `deskripsi` longtext NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_pmb`
--

INSERT INTO `tb_pmb` (`id`, `judul`, `deskripsi`, `gambar`, `link`) VALUES
(1, 'BELAJAR CEPAT SEPERTI DEWA', '<p>Dengan belajar di Teknik Unamin Kita dapa menjadi manusia handal layaknya hero ML</p>\r\n\r\n<p>kita dapat terbiasa bergadang mata panda dan sehat walafiat insyaallah</p>\r\n', 'unamin.jpg', 'http://siakad.um-sorong.ac.id/pmb.php/login/periode');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_produk_riset`
--

CREATE TABLE `tb_produk_riset` (
  `id` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_produk_riset`
--

INSERT INTO `tb_produk_riset` (`id`, `judul`, `isi`) VALUES
(9, 'Produk', '<p>About Riset Cuy</p>\r\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pusat_studi`
--

CREATE TABLE `tb_pusat_studi` (
  `id` int(11) NOT NULL,
  `isi_pusat_studi` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_pusat_studi`
--

INSERT INTO `tb_pusat_studi` (`id`, `isi_pusat_studi`) VALUES
(1, ''),
(2, '<p>dandandan</p>\r\n'),
(3, '<p>haiii</p>\r\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_ras`
--

CREATE TABLE `tb_ras` (
  `id` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `isi` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_ras`
--

INSERT INTO `tb_ras` (`id`, `judul`, `isi`) VALUES
(1, 'Kenapa Dunia Selalu Kotor', '<p>Karena Takdir</p>\r\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_sambutan_dekan`
--

CREATE TABLE `tb_sambutan_dekan` (
  `id_sambutan` int(11) NOT NULL,
  `nama` varchar(65) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `kata_dekan` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_sambutan_dekan`
--

INSERT INTO `tb_sambutan_dekan` (`id_sambutan`, `nama`, `gambar`, `kata_dekan`) VALUES
(1, 'Faisal', '2.jpg', '<p>FAISAL COOL KULKAS</p>\r\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_sejarah`
--

CREATE TABLE `tb_sejarah` (
  `id_sejarah` int(11) NOT NULL,
  `periode` varchar(65) NOT NULL,
  `nama` varchar(65) NOT NULL,
  `fakultas` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_sejarah`
--

INSERT INTO `tb_sejarah` (`id_sejarah`, `periode`, `nama`, `fakultas`) VALUES
(1, '1945-2000', 'Faisal', 'TEKNIK INFORMATIKA'),
(2, '2000-2005', 'Rifki', 'TEKNIK INFORMATIKA');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_semester_1`
--

CREATE TABLE `tb_semester_1` (
  `no` int(11) NOT NULL,
  `matakuliah` varchar(30) NOT NULL,
  `sks` int(20) NOT NULL,
  `kode` varchar(20) NOT NULL,
  `prasyarat` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tb_semester_1`
--

INSERT INTO `tb_semester_1` (`no`, `matakuliah`, `sks`, `kode`, `prasyarat`) VALUES
(3, 'Al Islam Kemuhammadiyahan I ', 2, '21WU99101', '-'),
(4, 'pancasila ', 2, '21WU99105', '-'),
(5, 'bahasa inggris ', 2, '21WI99101', '-'),
(6, 'Ilmu Sosial Budaya Dasar', 2, '21WI99104', '-'),
(7, 'Aljabar Vektor dan matriks ', 3, '21WP53101', '-'),
(8, 'algoritma dan pemrograman I*', 3, '21WP53102', '-'),
(9, 'Pengantar Teknik informatika', 2, '21WP53103', '-'),
(10, 'Kalkulus I', 3, '21WF05101', '-'),
(11, 'Total SKS', 19, '-', '-'),
(12, 'Mata Kuliah', 0, 'Kode', 'Prasyarat'),
(13, ' Kuliah Kerja Nyata', 4, ' 21WI99803', '> 110 SKS'),
(14, 'Tugas Akhir', 6, ' 21WI99806', 'Metodologi Penelitian');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_semester_2`
--

CREATE TABLE `tb_semester_2` (
  `no` int(11) NOT NULL,
  `matakuliah` varchar(30) NOT NULL,
  `sks` int(20) NOT NULL,
  `kode` varchar(20) NOT NULL,
  `prasyarat` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tb_semester_2`
--

INSERT INTO `tb_semester_2` (`no`, `matakuliah`, `sks`, `kode`, `prasyarat`) VALUES
(1, 'Al Islam Kemuhammadiyahan II', 2, '21WU99202', 'Al Islam Kemuhammadiyahan I'),
(2, 'Kewarganegaraan ', 2, '21WU99206', 'Pancasila'),
(3, 'algoritma dan pemrograman II*', 3, '21WP53201', 'algoritma dan pemrograman I*'),
(4, 'Struktur data*', 3, '21WP53202', '-'),
(5, 'sistem operasi ', 2, '21WP53204', 'pengantar teknik informatika'),
(6, 'logika diskrit', 3, '21WP53206', '-'),
(7, 'kalkulus II', 3, '21WF05201', 'Kalkulus I'),
(8, 'Total SKS', 18, '-', '-');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_semester_3`
--

CREATE TABLE `tb_semester_3` (
  `no` int(11) NOT NULL,
  `matakuliah` varchar(30) NOT NULL,
  `sks` int(20) NOT NULL,
  `kode` varchar(20) NOT NULL,
  `prasyarat` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tb_semester_3`
--

INSERT INTO `tb_semester_3` (`no`, `matakuliah`, `sks`, `kode`, `prasyarat`) VALUES
(1, 'Basis Data I *', 3, ' 21WP53301', ' Struktur Data'),
(2, 'Pemrograman Berorientasi Objek', 3, '21WP53302', 'Algoritma dan Pemrograman II'),
(3, 'Teori Bahasa dan Otomata', 3, '21WP53303', 'Logika Diskrit'),
(4, 'Komunikasi Data', 2, '21WP53304', '-'),
(5, 'Rekayasa Perangkat Lunak', 2, '21WP53305', '-'),
(6, 'Sistem Digital', 2, '21WP53306', '-'),
(7, 'Al Islam Kemuhammadiyahan III', 2, '21WU99303', ' Al Islam Kemuhammadiyahan II'),
(8, 'Bahasa Indonseia', 2, '21WU99307', '-'),
(9, 'TOTAL SKS', 18, '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_semester_4`
--

CREATE TABLE `tb_semester_4` (
  `no` int(11) NOT NULL,
  `matakuliah` varchar(30) NOT NULL,
  `sks` int(20) NOT NULL,
  `kode` varchar(20) NOT NULL,
  `prasyarat` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tb_semester_4`
--

INSERT INTO `tb_semester_4` (`no`, `matakuliah`, `sks`, `kode`, `prasyarat`) VALUES
(1, 'Basis Data II *', 3, ' 21WP53401', 'Basis Data I'),
(2, 'Manajemen Proyek', 2, ' 21WP53402', ' Rekayasa Perangkat Lunak'),
(3, 'Jaringan Komputer *', 3, ' 21WP53403', 'Komunikasi Data'),
(4, 'Kecerdasan Buatan', 3, ' 21WP53404', '-'),
(5, 'Grafika Komputer', 3, ' 21WP53405', ' Algoritma dan Pemrograman II'),
(6, 'Pemrograman Web dan Mobile I *', 3, ' 21WP53406', 'Pemrograman Berorientasi Objek'),
(7, 'Statistika', 2, ' 21WF05403', '-'),
(8, 'Total SKS', 20, '-', '-');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_semester_5`
--

CREATE TABLE `tb_semester_5` (
  `no` int(11) NOT NULL,
  `matakuliah` varchar(30) NOT NULL,
  `sks` int(25) NOT NULL,
  `kode` varchar(25) NOT NULL,
  `prasyarat` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tb_semester_5`
--

INSERT INTO `tb_semester_5` (`no`, `matakuliah`, `sks`, `kode`, `prasyarat`) VALUES
(1, 'Etika Profesi', 2, '21WP53501', '> 60 sks'),
(2, 'Kewirausahaan', 2, '21WI99102', '-'),
(3, 'Jaringan Syaraf Tiruan', 2, '21WP53504', 'Kecerdasan Buatan'),
(4, 'Multimedia *', 3, '21WP53505', '-'),
(5, 'Implementasi dan Pengujian Per', 3, '-', '-'),
(6, 'Sistem Pakar (Pilihan 2)', 3, '-', '-'),
(7, 'Keamanan Jaringan (Pilihan 3)', 3, '-', '-'),
(8, 'Total SKS', 20, '-', '-');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_semester_6`
--

CREATE TABLE `tb_semester_6` (
  `no` int(11) NOT NULL,
  `matakuliah` varchar(30) NOT NULL,
  `sks` int(25) NOT NULL,
  `kode` varchar(25) NOT NULL,
  `prasyarat` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tb_semester_6`
--

INSERT INTO `tb_semester_6` (`no`, `matakuliah`, `sks`, `kode`, `prasyarat`) VALUES
(1, 'Pengantar Algoritma Deep Learn', 3, ' 21WP53601', ' Jaringan Syaraf Tiruan'),
(2, 'Analisis dan Pemodelan Spasial', 3, ' 21WP53602', 'Grafika Komputer'),
(3, 'Data Mining', 3, ' 21WP53604', 'Basis Data II'),
(4, 'Metodologi Penelitian', 2, ' 21WF05605', '> 90 sks'),
(5, 'Interaksi Manusia dan Komputer', 2, ' 21WP53605', 'Sistem Digital'),
(6, 'Etnografi Papua Berbasis Tekno', 2, '21WF05606', 'Ilmu Sosial Budaya Dasar'),
(7, 'Pilihan 4', 3, '-', '-'),
(8, 'Pilihan 5', 3, '-', '-'),
(9, 'Total SKS', 19, '-', '-');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_semester_7`
--

CREATE TABLE `tb_semester_7` (
  `no` int(11) NOT NULL,
  `matakuliah` varchar(30) NOT NULL,
  `sks` int(25) NOT NULL,
  `kode` varchar(25) NOT NULL,
  `prasyarat` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tb_semester_7`
--

INSERT INTO `tb_semester_7` (`no`, `matakuliah`, `sks`, `kode`, `prasyarat`) VALUES
(1, ' Al Islam Kemuhammadiyahan IV', 2, ' 21WU99704', 'Al Islam Kemuhammadiyahan III'),
(2, 'Pilihan 6', 3, '-', '-'),
(3, 'Pilihan 7', 3, '-', '-'),
(4, 'Pilihan 8', 3, '-', '-'),
(5, 'Pilihan 9', 3, '-', '-'),
(6, 'Kerja Praktek *', 2, ' 21WF05707', '-'),
(7, 'Bahasa Inggris Lanjutan', 2, ' 21WI99702', 'Bahasa Inggris'),
(8, 'Total SKS', 20, '-', '-');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_semester_8`
--

CREATE TABLE `tb_semester_8` (
  `no` int(11) NOT NULL,
  `matakuliah` varchar(30) NOT NULL,
  `sks` int(25) NOT NULL,
  `kode` varchar(25) NOT NULL,
  `prasyarat` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tb_semester_8`
--

INSERT INTO `tb_semester_8` (`no`, `matakuliah`, `sks`, `kode`, `prasyarat`) VALUES
(1, 'Mata Kuliah', 0, 'Kode', 'Prasyarat'),
(2, ' Kuliah Kerja Nyata', 4, ' 21WI99803', '> 110 SKS'),
(3, 'Tugas Akhir', 6, ' 21WI99806', 'Metodologi Penelitian');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_sipil`
--

CREATE TABLE `tb_sipil` (
  `no` int(11) NOT NULL,
  `matakuliah` varchar(30) NOT NULL,
  `kode` varchar(30) NOT NULL,
  `semester` int(11) NOT NULL,
  `sks` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tb_sipil`
--

INSERT INTO `tb_sipil` (`no`, `matakuliah`, `kode`, `semester`, `sks`) VALUES
(1, 'Bahasa Inggris', '21WI99101', 1, 2),
(2, 'Ilmu Sosial Budaya Dasar', '21WI99104', 1, 2),
(3, 'Fisika Teknik', '21WP51101', 1, 2),
(4, 'Matematika Teknik 1', '21WP51102', 1, 2),
(5, 'Gambar Teknik Konstruksi', '21WP51103', 1, 2),
(6, 'Analisa Struktur Statis Terten', '21WP51104', 1, 3),
(7, 'Bahan Konstruksi Teknik', '21WP51105', 1, 2),
(8, 'Al Islam & Kemuhammadiyahan I', '21WU99101', 1, 2),
(9, 'Pancasila', '21WU99105', 1, 2),
(10, 'Pemrograman Komputer', '21WP51201', 2, 2),
(11, 'Matematika Teknik 2', '21WP51202', 2, 2),
(12, 'Pengantar Geologi Teknik', '21WP51203', 2, 2),
(13, 'Mekanika Bahan', '21WP51204', 2, 2),
(14, 'Praktikum Mekanika Bahan', '21WP51205', 2, 1),
(15, 'Ilmu Ukur Tanah', '21WP51206', 2, 2),
(16, 'Praktikum Ilmu Ukur Tanah', '21WP51207', 2, 1),
(17, 'Konstruksi Bangunan Gedung', '21WP51208', 2, 2),
(18, 'Al Islam & Kemuhammadiyahan II', '21WU99202', 2, 2),
(19, 'Kewarganegaraan', '21WU99206', 2, 2),
(20, 'Metode Numerik', '21WP51301', 3, 2),
(21, 'Statistik Dan Probabilitas', '21WP51302', 3, 2),
(22, 'Analisa Struktur Statis Tak Te', '21WP51303', 3, 3),
(23, 'Mekanika Tanah 1', '21WP51304', 3, 2),
(24, 'Praktikum Mekanika Tanah 1', '21WP51305', 3, 1),
(25, 'Teknologi Beton', '21WP51306', 3, 2),
(26, 'Praktikum Teknologi Beton', '21WP51307', 3, 1),
(27, 'Struktur Beton 1', '21WP51308', 3, 2),
(28, 'Struktur Baja 1', '21WP51309', 3, 2),
(29, 'Al- Islam & Kemuhammadiyahan I', '21WU99303', 3, 2),
(30, 'Bahasa Indonesia', '21WU99307', 3, 2),
(31, 'Hidrolika', '21WP51401', 4, 2),
(32, 'Praktikum Hidrolika', '21WP51402', 4, 1),
(33, 'Hidrologi', '21WP51403', 4, 2),
(34, 'Praktikum Hidrologi', '21WP51404', 4, 1),
(35, 'Mekanika Tanah 2', '21WP51405', 4, 2),
(36, 'Praktikum Mekanika Tanah 2', '21WP51406', 4, 1),
(37, 'Struktur Beton 2', '21WP51407', 4, 2),
(38, 'Struktur Baja 2', '21WP51408', 4, 2),
(39, 'Struktur Kayu', '21WP51409', 4, 2),
(40, 'Pemindahan Tanah Mekanis', '21WP51410', 4, 2),
(41, 'Jalan Raya 1', '21WP51411', 4, 2),
(42, 'Perbaikan Tanah', '21PP51501', 5, 2),
(43, 'Sistem Jaringan Pipa Air Bersi', '21PP51502', 5, 2),
(44, 'Stabilitas Lereng', '21PP51503', 5, 2),
(45, 'Pengelolaan Kualitas Air', '21PP51504', 5, 2),
(46, 'Struktur Beton Lanjut', '21PP51505', 5, 2),
(47, 'Struktur Baja Lanjut', '21PP51506', 5, 2),
(48, 'Bahan Konstruksi Jalan', '21PP51507', 5, 2),
(49, 'Manajemen Angkutan Umum', '21PP51508', 5, 2),
(50, 'Teknik Sungai 1', '21PP51509', 5, 2),
(51, 'Analisa Matriks', '21PP51510', 5, 2),
(52, 'Kewirausahaan', '21WI99502', 5, 2),
(53, 'Jalan Raya 2', '21WP51501', 5, 2),
(54, 'Praktikum Jalan Raya', '21WP51502', 5, 1),
(55, 'Drainase Perkotaan', '21WP51503', 5, 2),
(56, 'Teknik Irigasi', '21WP51504', 5, 2),
(57, 'Teknik Pondasi', '21WP51505', 5, 3),
(58, 'Sistem Transportasi', '21WP51506', 5, 2),
(59, 'Analisa Spasial & Penginderaan', '21WP51507', 5, 2),
(60, 'Teknik Pondasi Khusus', '21PP51601', 6, 2),
(61, 'Dinding Penahan Tanah', '21PP51602', 6, 2),
(62, 'Sistem Transportasi Lanjutan', '21PP51603', 6, 2),
(63, 'Perencanaan. Bangunan Air', '21PP51604', 6, 2),
(64, 'Manajemen Kebencanaan', '21PP51605', 6, 2),
(65, 'Pemeliharaan & Penilaian Perke', '21PP51606', 6, 2),
(66, 'Aspek Hukum Dalam Pembangunan', '21PP51607', 6, 2),
(67, 'Teknik Sungai 2', '21PP51608', 6, 2),
(68, 'Teknik Gempa', '21WP51601', 6, 2),
(69, 'Teknik Lingkungan', '21WP51602', 6, 3),
(70, 'Teknik Pantai 1', '21WP51603', 6, 2),
(71, 'Kontruksi Jembatan', '21WP51604', 6, 2),
(72, 'Manajemen Lalu Lintas', '21WP51605', 6, 2),
(73, 'Lapangan Terbang', '21WP51606', 6, 2),
(74, 'Ekonomi Teknik', '21WP51607', 6, 2),
(75, 'Jalan Raya Lanjutan', '21PP51701', 7, 2),
(76, 'Evaluasi Infrastruktur Pasca B', '21PP51702', 7, 2),
(77, 'Manajemen Sumber Daya Konstruk', '21PP51703', 7, 2),
(78, 'Angkutan Sedimen', '21PP51704', 7, 2),
(79, 'Dinamika Tanah', '21PP51705', 7, 2),
(80, 'Sistem Rangka Dan Komposit', '21PP51706', 7, 2),
(81, 'Teknologi Konstruksi', '21PP51707', 7, 2),
(82, 'Pengendalian Proyek', '21PP51708', 7, 2),
(83, 'Manajemen Mutu', '21PP51709', 7, 2),
(84, 'Metode Perenc & Pelaksanaan Je', '21PP51710', 7, 2),
(85, 'Bahasa Inggris Lanjut', '21WF51701', 7, 2),
(86, 'Teknik Penulisan Dan Penelitia', '21WP51701', 7, 2),
(87, 'Teknik Pantai 2', '21WP51702', 7, 2),
(88, 'Manajemen Proyek', '21WP51703', 7, 2),
(89, 'Pengembangan Sumber Daya Air', '21WP51704', 7, 2),
(90, 'Pelabuhan', '21WP51705', 7, 2),
(91, 'Perancangan Bangunan Teknik Si', '21WP51706', 7, 2),
(92, 'Al Islam & Kemuhammadiyahan IV', '21WU99701', 7, 2),
(93, 'Kuliah Kerja Nyata', '21WI99803', 8, 4),
(94, 'Skripsi', '21WI99806', 8, 6),
(95, 'Kerja Praktek', '21WP51707', 8, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_sipil_pilihan`
--

CREATE TABLE `tb_sipil_pilihan` (
  `no` int(11) NOT NULL,
  `matakuliah` varchar(100) NOT NULL,
  `kode` varchar(30) NOT NULL,
  `sks` int(11) NOT NULL,
  `semester` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_sipil_pilihan`
--

INSERT INTO `tb_sipil_pilihan` (`no`, `matakuliah`, `kode`, `sks`, `semester`) VALUES
(1, 'Perbaikan Tanah', '21PP51501', 5, 2),
(2, 'Sistem Jaringan Pipa Air Bersih', '21PP51502', 5, 2),
(3, 'Stabilitas Lereng', '21PP51503', 5, 2),
(4, 'Pengelolaan Kualitas Air', '21PP51504', 5, 2),
(5, 'Struktur Beton Lanjut', '21PP51505', 5, 2),
(6, 'Struktur Baja Lanjut', '21PP51506', 5, 2),
(7, 'Bahan Konstruksi Jalan', '21PP51507', 5, 2),
(8, 'Manajemen Angkutan Umum', '21PP51508', 5, 2),
(9, 'Teknik Sungai 1', '21PP51509', 5, 2),
(10, 'Analisa Matriks', '21PP51510', 5, 2),
(11, 'Teknik Pondasi Khusus', '21PP51601', 6, 2),
(12, 'Dinding Penahan Tanah', '21PP51602', 6, 2),
(13, 'Sistem Transportasi Lanjutan', '21PP51603', 6, 2),
(14, 'Perencanaan. Bangunan Air', '21PP51604', 6, 2),
(15, 'Manajemen Kebencanaan', '21PP51605', 6, 2),
(16, 'Pemeliharaan & Penilaian Perkerasan Jalan', '21PP51606', 6, 2),
(17, 'Aspek Hukum Dalam Pembangunan', '21PP51607', 6, 2),
(18, 'Teknik Sungai 2', '21PP51608', 6, 2),
(19, 'Jalan Raya Lanjutan', '21PP51701', 7, 2),
(20, 'Evaluasi Infrastruktur Pasca Bencana', '21PP51702', 7, 2),
(21, 'Manajemen Sumber Daya Konstruksi', '21PP51703', 7, 2),
(22, 'Angkutan Sedimen', '21PP51704', 7, 2),
(23, 'Dinamika Tanah', '21PP51705', 7, 2),
(24, 'Sistem Rangka Dan Komposit', '21PP51706', 7, 2),
(25, 'Teknologi Konstruksi', '21PP51707', 7, 2),
(26, 'Pengendalian Proyek', '21PP51708', 7, 2),
(27, 'Manajemen Mutu', '21PP51709', 7, 2),
(28, 'Metode Perenc & Pelaksanaan Jembatan', '21PP51710', 7, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_sks`
--

CREATE TABLE `tb_sks` (
  `id` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `isi` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_sks`
--

INSERT INTO `tb_sks` (`id`, `judul`, `isi`) VALUES
(1, 'DONAT GULA', '<p>DONAT ADALAH SALAH SATU MASAKAN BERBENTUK KOTAK</p>\r\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_slide`
--

CREATE TABLE `tb_slide` (
  `id` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_slide`
--

INSERT INTO `tb_slide` (`id`, `gambar`) VALUES
(2, 'unamin.jpg'),
(4, 'cx.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_struktur_organisasi`
--

CREATE TABLE `tb_struktur_organisasi` (
  `keterangan_struktur` longtext NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `id_struktur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_struktur_organisasi`
--

INSERT INTO `tb_struktur_organisasi` (`keterangan_struktur`, `gambar`, `id_struktur`) VALUES
('<p>ARTINYA APA BANG MESSI</p>\r\n', 'unamin.jpg', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_testi`
--

CREATE TABLE `tb_testi` (
  `id` int(11) NOT NULL,
  `nama` varchar(70) NOT NULL,
  `tahun` varchar(20) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `keterangan` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_testi`
--

INSERT INTO `tb_testi` (`id`, `nama`, `tahun`, `foto`, `keterangan`) VALUES
(1, 'ical', '2017', 'anya.png', '<p>MASUK UNAMIN SAMA DENGAN MASUK ESPORT</p>\r\n'),
(2, 'RIFKY', '2018', 'original.jpg', '<p>UNAMIN JAYA</p>\r\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_video`
--

CREATE TABLE `tb_video` (
  `id` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `video` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `keterangan` longtext NOT NULL,
  `link` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_video`
--

INSERT INTO `tb_video` (`id`, `judul`, `video`, `gambar`, `tanggal`, `keterangan`, `link`) VALUES
(1, 'video 1', '', 'cx.jpg', '2023-02-03', '<p>hfdfjafsjafjjhfajdfsha</p>\r\n', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/fepiIdx3haA\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>'),
(2, 'video 2', '', 'cx.jpg', '2023-02-03', '<p>cncnncncncncncn</p>\r\n', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/fCSk0ilLJYk\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>'),
(3, 'video rahasia', 'WhatsApp Video 2023-01-31 at 15.34.34.mp4', 'damdam.png', '2023-02-04', '<p>ckckckck kawan</p>\r\n', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_visit`
--

CREATE TABLE `tb_visit` (
  `id` int(100) NOT NULL,
  `ip` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `hits` int(100) NOT NULL,
  `online` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_visit`
--

INSERT INTO `tb_visit` (`id`, `ip`, `tanggal`, `hits`, `online`) VALUES
(1, 'LAPTOP-47OH1CHT', '2023-01-19', 4, '1674150823'),
(2, 'LAPTOP-47OH1CHT', '2023-01-21', 6, '1674323478'),
(3, 'LAPTOP-47OH1CHT', '2023-01-22', 13, '1674422445'),
(4, 'LAPTOP-47OH1CHT', '2023-01-23', 6, '1674449163'),
(5, 'LAPTOP-47OH1CHT', '2023-01-24', 3, '1674565305'),
(6, 'LAPTOP-47OH1CHT', '2023-01-25', 34, '1674634301'),
(7, 'LAPTOP-47OH1CHT', '2023-01-27', 134, '1674844501'),
(8, 'LAPTOP-47OH1CHT', '2023-01-28', 3, '1674881095'),
(9, 'LAPTOP-47OH1CHT', '2023-01-29', 5, '1675012437'),
(10, 'LAPTOP-47OH1CHT', '2023-01-30', 86, '1675101358'),
(11, 'LAPTOP-47OH1CHT', '2023-01-31', 13, '1675185638'),
(12, 'LAPTOP-47OH1CHT', '2023-02-01', 45, '1675277259'),
(13, 'LAPTOP-47OH1CHT', '2023-02-02', 154, '1675359671'),
(14, 'LAPTOP-47OH1CHT', '2023-02-03', 17, '1675451046'),
(15, 'ZORA-IDEALE', '2023-02-03', 578, '1675420540'),
(16, 'ZORA-IDEALE', '2023-02-04', 105, '1675521652'),
(17, 'ZORA-IDEALE', '2023-02-05', 25, '1675567805'),
(18, 'LAPTOP-47OH1CHT', '2023-02-06', 69, '1675653588'),
(19, 'LAPTOP-47OH1CHT', '2023-02-07', 174, '1675784730'),
(20, 'LAPTOP-47OH1CHT', '2023-02-08', 21, '1675828761'),
(21, 'LAPTOP-47OH1CHT', '2023-02-09', 1115, '1675966697'),
(22, 'LAPTOP-47OH1CHT', '2023-02-10', 134, '1676009703'),
(23, 'LAPTOP-47OH1CHT', '2023-02-11', 280, '1676103127');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_visi_misi`
--

CREATE TABLE `tb_visi_misi` (
  `id_visi_misi` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `visi` longtext NOT NULL,
  `misi` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_visi_misi`
--

INSERT INTO `tb_visi_misi` (`id_visi_misi`, `gambar`, `visi`, `misi`) VALUES
(1, 'unamin.jpg', '<p>VISI</p>\r\n\r\n<p>1.donat meses</p>\r\n\r\n<p>2. donat gulas</p>\r\n\r\n<p>3. donat raimbow</p>\r\n\r\n<p>3. donat blueberry</p>\r\n', '<p>MISI</p>\r\n\r\n<p>1.alpha</p>\r\n');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `semester1`
--
ALTER TABLE `semester1`
  ADD PRIMARY KEY (`no`);

--
-- Indeks untuk tabel `semester2`
--
ALTER TABLE `semester2`
  ADD PRIMARY KEY (`no`);

--
-- Indeks untuk tabel `semester3`
--
ALTER TABLE `semester3`
  ADD PRIMARY KEY (`no`);

--
-- Indeks untuk tabel `semester4`
--
ALTER TABLE `semester4`
  ADD PRIMARY KEY (`no`);

--
-- Indeks untuk tabel `semester5`
--
ALTER TABLE `semester5`
  ADD PRIMARY KEY (`no`);

--
-- Indeks untuk tabel `semester6`
--
ALTER TABLE `semester6`
  ADD PRIMARY KEY (`no`);

--
-- Indeks untuk tabel `semester7`
--
ALTER TABLE `semester7`
  ADD PRIMARY KEY (`no`);

--
-- Indeks untuk tabel `semester8`
--
ALTER TABLE `semester8`
  ADD PRIMARY KEY (`no`);

--
-- Indeks untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `tb_akademik`
--
ALTER TABLE `tb_akademik`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_berita`
--
ALTER TABLE `tb_berita`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_fasilitas`
--
ALTER TABLE `tb_fasilitas`
  ADD PRIMARY KEY (`id_fasilitas`);

--
-- Indeks untuk tabel `tb_ijin`
--
ALTER TABLE `tb_ijin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_industri`
--
ALTER TABLE `tb_industri`
  ADD PRIMARY KEY (`no`);

--
-- Indeks untuk tabel `tb_industri_pilihan`
--
ALTER TABLE `tb_industri_pilihan`
  ADD PRIMARY KEY (`no`);

--
-- Indeks untuk tabel `tb_it_pilihan`
--
ALTER TABLE `tb_it_pilihan`
  ADD PRIMARY KEY (`no`);

--
-- Indeks untuk tabel `tb_kerjasama_dalam_negeri`
--
ALTER TABLE `tb_kerjasama_dalam_negeri`
  ADD PRIMARY KEY (`id_kerja_sama`);

--
-- Indeks untuk tabel `tb_kerjasama_luar_negeri`
--
ALTER TABLE `tb_kerjasama_luar_negeri`
  ADD PRIMARY KEY (`id_kerja_sama`);

--
-- Indeks untuk tabel `tb_ketua`
--
ALTER TABLE `tb_ketua`
  ADD PRIMARY KEY (`nip`);

--
-- Indeks untuk tabel `tb_mahasiswa`
--
ALTER TABLE `tb_mahasiswa`
  ADD PRIMARY KEY (`nim`);

--
-- Indeks untuk tabel `tb_pdf_book`
--
ALTER TABLE `tb_pdf_book`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_pengumuman`
--
ALTER TABLE `tb_pengumuman`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_pimpinan`
--
ALTER TABLE `tb_pimpinan`
  ADD PRIMARY KEY (`nip`);

--
-- Indeks untuk tabel `tb_pinjam`
--
ALTER TABLE `tb_pinjam`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_pmb`
--
ALTER TABLE `tb_pmb`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_produk_riset`
--
ALTER TABLE `tb_produk_riset`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_pusat_studi`
--
ALTER TABLE `tb_pusat_studi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_ras`
--
ALTER TABLE `tb_ras`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_sambutan_dekan`
--
ALTER TABLE `tb_sambutan_dekan`
  ADD PRIMARY KEY (`id_sambutan`);

--
-- Indeks untuk tabel `tb_sejarah`
--
ALTER TABLE `tb_sejarah`
  ADD PRIMARY KEY (`id_sejarah`);

--
-- Indeks untuk tabel `tb_semester_1`
--
ALTER TABLE `tb_semester_1`
  ADD PRIMARY KEY (`no`);

--
-- Indeks untuk tabel `tb_semester_2`
--
ALTER TABLE `tb_semester_2`
  ADD PRIMARY KEY (`no`);

--
-- Indeks untuk tabel `tb_semester_3`
--
ALTER TABLE `tb_semester_3`
  ADD PRIMARY KEY (`no`);

--
-- Indeks untuk tabel `tb_semester_4`
--
ALTER TABLE `tb_semester_4`
  ADD PRIMARY KEY (`no`);

--
-- Indeks untuk tabel `tb_semester_5`
--
ALTER TABLE `tb_semester_5`
  ADD PRIMARY KEY (`no`);

--
-- Indeks untuk tabel `tb_semester_6`
--
ALTER TABLE `tb_semester_6`
  ADD PRIMARY KEY (`no`);

--
-- Indeks untuk tabel `tb_semester_7`
--
ALTER TABLE `tb_semester_7`
  ADD PRIMARY KEY (`no`);

--
-- Indeks untuk tabel `tb_semester_8`
--
ALTER TABLE `tb_semester_8`
  ADD PRIMARY KEY (`no`);

--
-- Indeks untuk tabel `tb_sipil`
--
ALTER TABLE `tb_sipil`
  ADD PRIMARY KEY (`no`);

--
-- Indeks untuk tabel `tb_sipil_pilihan`
--
ALTER TABLE `tb_sipil_pilihan`
  ADD PRIMARY KEY (`no`);

--
-- Indeks untuk tabel `tb_sks`
--
ALTER TABLE `tb_sks`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_slide`
--
ALTER TABLE `tb_slide`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_struktur_organisasi`
--
ALTER TABLE `tb_struktur_organisasi`
  ADD PRIMARY KEY (`id_struktur`);

--
-- Indeks untuk tabel `tb_testi`
--
ALTER TABLE `tb_testi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_video`
--
ALTER TABLE `tb_video`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_visit`
--
ALTER TABLE `tb_visit`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_visi_misi`
--
ALTER TABLE `tb_visi_misi`
  ADD PRIMARY KEY (`id_visi_misi`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `chat`
--
ALTER TABLE `chat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `semester1`
--
ALTER TABLE `semester1`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `semester2`
--
ALTER TABLE `semester2`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `semester3`
--
ALTER TABLE `semester3`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `semester4`
--
ALTER TABLE `semester4`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `semester5`
--
ALTER TABLE `semester5`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `semester6`
--
ALTER TABLE `semester6`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `semester7`
--
ALTER TABLE `semester7`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `semester8`
--
ALTER TABLE `semester8`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_akademik`
--
ALTER TABLE `tb_akademik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_berita`
--
ALTER TABLE `tb_berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_fasilitas`
--
ALTER TABLE `tb_fasilitas`
  MODIFY `id_fasilitas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tb_ijin`
--
ALTER TABLE `tb_ijin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_industri`
--
ALTER TABLE `tb_industri`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=169;

--
-- AUTO_INCREMENT untuk tabel `tb_industri_pilihan`
--
ALTER TABLE `tb_industri_pilihan`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `tb_it_pilihan`
--
ALTER TABLE `tb_it_pilihan`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT untuk tabel `tb_kerjasama_dalam_negeri`
--
ALTER TABLE `tb_kerjasama_dalam_negeri`
  MODIFY `id_kerja_sama` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_kerjasama_luar_negeri`
--
ALTER TABLE `tb_kerjasama_luar_negeri`
  MODIFY `id_kerja_sama` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_pdf_book`
--
ALTER TABLE `tb_pdf_book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tb_pengumuman`
--
ALTER TABLE `tb_pengumuman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_pinjam`
--
ALTER TABLE `tb_pinjam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_pmb`
--
ALTER TABLE `tb_pmb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_produk_riset`
--
ALTER TABLE `tb_produk_riset`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `tb_pusat_studi`
--
ALTER TABLE `tb_pusat_studi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_ras`
--
ALTER TABLE `tb_ras`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_sambutan_dekan`
--
ALTER TABLE `tb_sambutan_dekan`
  MODIFY `id_sambutan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2022;

--
-- AUTO_INCREMENT untuk tabel `tb_sejarah`
--
ALTER TABLE `tb_sejarah`
  MODIFY `id_sejarah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_semester_1`
--
ALTER TABLE `tb_semester_1`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `tb_semester_2`
--
ALTER TABLE `tb_semester_2`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tb_semester_3`
--
ALTER TABLE `tb_semester_3`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `tb_semester_4`
--
ALTER TABLE `tb_semester_4`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tb_semester_5`
--
ALTER TABLE `tb_semester_5`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tb_semester_6`
--
ALTER TABLE `tb_semester_6`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `tb_semester_7`
--
ALTER TABLE `tb_semester_7`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tb_semester_8`
--
ALTER TABLE `tb_semester_8`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_sipil`
--
ALTER TABLE `tb_sipil`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT untuk tabel `tb_sipil_pilihan`
--
ALTER TABLE `tb_sipil_pilihan`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT untuk tabel `tb_sks`
--
ALTER TABLE `tb_sks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_slide`
--
ALTER TABLE `tb_slide`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tb_struktur_organisasi`
--
ALTER TABLE `tb_struktur_organisasi`
  MODIFY `id_struktur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_testi`
--
ALTER TABLE `tb_testi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_video`
--
ALTER TABLE `tb_video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_visit`
--
ALTER TABLE `tb_visit`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `tb_visi_misi`
--
ALTER TABLE `tb_visi_misi`
  MODIFY `id_visi_misi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
