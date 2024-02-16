-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2024 at 03:11 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_waditra`
--

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `id` int(11) NOT NULL,
  `deskripsi` varchar(250) NOT NULL,
  `jawaban` varchar(250) NOT NULL,
  `tgl_input` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `tgl_diubah` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`id`, `deskripsi`, `jawaban`, `tgl_input`, `tgl_diubah`) VALUES
(30, 'Apa situs resmi PT Waditra Reka Cipta Bandung?', 'Situs resmi PT Waditra Reka Cipta Bandung adalah waditra.com', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(31, 'Berapa banyak karyawan yang bekerja di PT Waditra Reka Cipta Bandung?', '20 - 49 karyawan yang bekerja di PT Waditra Reka Cipta Bandung', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(32, 'PT Waditra Reka Cipta Bandung berada di industri apa?', 'PT Waditra Reka Cipta Bandung bergerak dalam industri Teknologi Informasi', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(33, 'Apa itu tech stack PT Waditra Reka Cipta?', 'Teknologi unggulan yang digunakan oleh PT Waditra Reka Cipta Bandung adalah:- Hibernate , PHP, dan jQuery', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(34, 'Dimanakah kantor pusat PT Waditra Reka Cipta Bandung?', 'Kantor pusat PT Waditra Reka Cipta Bandung berada di Bandung, Jawa Barat, Indonesia.', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `klien`
--

CREATE TABLE `klien` (
  `id` int(11) NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `deskripsi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `tgl_input` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `tgl_diubah` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `klien`
--

INSERT INTO `klien` (`id`, `image`, `nama`, `deskripsi`, `tgl_input`, `tgl_diubah`) VALUES
(4, '', 'Microsoft', '', '2024-01-22 06:51:44', '2024-01-22 06:51:04'),
(5, '', 'Google', '', '2024-01-22 06:51:15', '2024-01-22 06:51:15'),
(6, '', 'Facebook', '', '2024-01-22 06:51:24', '2024-01-22 06:51:24'),
(7, 'bnn.png', 'IBM', '', '2024-01-25 06:25:07', '2024-01-22 06:51:36');

-- --------------------------------------------------------

--
-- Table structure for table `konten_statis`
--

CREATE TABLE `konten_statis` (
  `id` int(11) NOT NULL,
  `deskripsi` varchar(500) NOT NULL,
  `visi_dan_misi` varchar(250) DEFAULT NULL,
  `lainnya` varchar(250) DEFAULT NULL,
  `tgl_input` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `tgl_diubah` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `konten_statis`
--

INSERT INTO `konten_statis` (`id`, `deskripsi`, `visi_dan_misi`, `lainnya`, `tgl_input`, `tgl_diubah`) VALUES
(50, 'profil', 'PT Waditra Reka Cipta Bandung adalah Konsultan IT yang berkedudukan di Bandung yang menyediakan layanan solusi IT bagi beragam kebutuhan pelanggan di berbagai industri dan jasa. Komitmen kami adalah menjadi mitra terpercaya bagi pelanggan ', NULL, '2024-01-23 06:54:27', '0000-00-00 00:00:00'),
(51, 'misi', 'Menyejahterakan semua pemegang saham, karyawan dan keluarganya Memuaskan pelanggan dengan hasil pekerjaan yang berkualitas dan termanfaatkan sebagai bisnis, Menjalankan manifestasi ibadah Memperbaharui kompetensi sumber daya manusia', NULL, '2024-01-23 06:55:19', '0000-00-00 00:00:00'),
(52, 'visi', 'Delivering IT Solutions, Globally.', NULL, '2024-01-23 06:55:40', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `manajemen_user`
--

CREATE TABLE `manajemen_user` (
  `id` int(11) NOT NULL,
  `nama` varchar(64) NOT NULL,
  `no_hp` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(64) NOT NULL,
  `hak_pengguna` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `manajemen_user`
--

INSERT INTO `manajemen_user` (`id`, `nama`, `no_hp`, `email`, `password`, `hak_pengguna`) VALUES
(37, 'admin', '08121212131', 'admin@admin.com', 'admin', 'admin'),
(53, 'fajrul', '0895377322233', 'fajrul@gmail.com', 'fajrul', 'admin'),
(54, 'nesta', '0895377322223', 'nesta@gmail.com', 'nesta', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `mesage`
--

CREATE TABLE `mesage` (
  `id` int(11) NOT NULL,
  `nama` text NOT NULL,
  `email` varchar(54) NOT NULL,
  `no_handphone` varchar(150) NOT NULL,
  `pesan` varchar(125) NOT NULL,
  `status` varchar(56) NOT NULL,
  `tgl_input` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `tgl_diubah` timestamp NOT NULL DEFAULT current_timestamp(),
  `tanggapan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mesage`
--

INSERT INTO `mesage` (`id`, `nama`, `email`, `no_handphone`, `pesan`, `status`, `tgl_input`, `tgl_diubah`, `tanggapan`) VALUES
(1516, 'fajrul', 'fajrul@gmail.com', '2147483647', 'halo', 'Telah diverifikasi', '2024-01-18 02:06:28', '2024-01-17 06:49:05', ''),
(1519, 'nesta', 'nesta@gmail.com', '2147483647', 'halo', 'Telah dibalas', '2024-01-23 05:10:32', '2024-01-17 06:53:32', ''),
(1526, 'Nesta Aditya Salam', 'adityanesta3@gmail.com', '0988765421', 'halo dunia', 'Telah dibalas', '2024-01-23 05:10:27', '2024-01-22 02:13:37', '');

-- --------------------------------------------------------

--
-- Table structure for table `portofolio`
--

CREATE TABLE `portofolio` (
  `id` int(11) NOT NULL,
  `deskripsi` varchar(250) NOT NULL,
  `instansi` varchar(250) NOT NULL,
  `tahun` int(11) NOT NULL,
  `tgl_input` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `tgl_diubah` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `portofolio`
--

INSERT INTO `portofolio` (`id`, `deskripsi`, `instansi`, `tahun`, `tgl_input`, `tgl_diubah`) VALUES
(44, 'Layanan desa', '', 0, '0000-00-00 00:00:00', '2024-01-22 13:46:55'),
(45, 'Website desa', '', 0, '0000-00-00 00:00:00', '2024-01-22 13:47:22'),
(46, 'Dasawisma', '', 0, '0000-00-00 00:00:00', '2024-01-22 13:47:34'),
(47, 'Bank sampah', '', 0, '0000-00-00 00:00:00', '2024-01-22 13:47:50'),
(48, 'Dashboard executive', '', 0, '0000-00-00 00:00:00', '2024-01-22 13:48:09'),
(49, 'API Gateaway', '', 0, '0000-00-00 00:00:00', '2024-01-22 13:48:24'),
(50, 'Pengadaan Perangkat Lunak Data Web Service', 'Kementerian Sekretariat Negara', 2023, '0000-00-00 00:00:00', '2024-01-26 13:47:24'),
(51, 'Pengembangan Jaringan dan Program SIM	', 'RSUD Kab Tabanan', 2023, '0000-00-00 00:00:00', '2024-01-26 13:48:02'),
(52, 'Kegiatan Dukungan Informasi Terpadu Penyelenggaraan Transformasi Digital di Instansi Pemerintah	', 'Kegiatan Dukungan Informasi Terpadu Penyelenggaraan Transformasi Digital di Instansi Pemerintah', 2023, '0000-00-00 00:00:00', '2024-01-26 13:48:37'),
(53, 'Pemanfaatan Data dan Informasi Melalui Artificial Intelligence Dalam Proyeksi Pengurangan Ketimpangan Berbasis Kewilayahan	', 'Kementerian Perencanaan Pembangunan Nasional/Badan Perencanaan Pembangunan Nasional (Bappenas)', 2023, '0000-00-00 00:00:00', '2024-01-26 13:49:33'),
(54, 'Pengembangan Sistem Penerbitan Persetujuan Teknis Andalalin (SI ANDALAN) Secara Nasional	', '	Kementerian Perhubungan', 2023, '0000-00-00 00:00:00', '2024-01-26 13:50:06'),
(55, 'BPKP Integrated IT Supervisory System Roadmap Implementation Preparation Consultant Services', '	Badan Pengawasan Keuangan dan Pembangunan (BPKP)', 2023, '0000-00-00 00:00:00', '2024-01-26 13:50:25'),
(56, 'Pemeliharaan SIMRS (Pengembangan Modul Sistem Informasi Pengelolaan BMN Terintegrasi)	', 'Rumah Sakit Pusat Otak Nasional – DKI Jakarta', 2023, '0000-00-00 00:00:00', '2024-01-26 13:50:47'),
(57, 'Pengembangan Elektronifikasi Transaksi Pemerintah Daerah	', 'Kementerian Dalam Negeri Republik Indonesia', 2023, '0000-00-00 00:00:00', '2024-01-26 13:51:14'),
(58, 'Jasa Konsultan Implementasi IP Adress dan DNS Pemerintah pada Jaringan Intra Pemerintah	', 'Kementerian Komunikasi Dan Informatika Republik Indonesia', 2023, '0000-00-00 00:00:00', '2024-01-26 13:51:32'),
(59, 'Penyusunan Manajemen Risiko Tahun 2023	', 'Arsip Nasional Republik Indonesia', 2023, '0000-00-00 00:00:00', '2024-01-26 13:51:49');

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `id` int(11) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `deskripsi` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`id`, `kategori`, `deskripsi`) VALUES
(1, 'instagram', '@PTWaditrarekacipta'),
(2, 'facebook', 'waditrarekacipta'),
(3, 'twitter', 'waditrarekacipta'),
(4, 'whatsapp', '02287774440'),
(5, 'linkedin', 'waditrarekacipta');

-- --------------------------------------------------------

--
-- Table structure for table `slideshow`
--

CREATE TABLE `slideshow` (
  `id` int(11) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `slideshow`
--

INSERT INTO `slideshow` (`id`, `foto`) VALUES
(4, '');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `id` int(11) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `email` varchar(64) NOT NULL,
  `no_handphone` varchar(255) NOT NULL,
  `jabatan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id`, `nama`, `email`, `no_handphone`, `jabatan`) VALUES
(12, 'admin', 'admin@gmail.com', '2147483647', 'Komisaris'),
(26, 'fajrul', 'fajrul@gmail.com', '0895377322233', 'Administrasi'),
(27, 'nesta', 'nestad@admin.com', '0895377322232', 'Manajer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `klien`
--
ALTER TABLE `klien`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `konten_statis`
--
ALTER TABLE `konten_statis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manajemen_user`
--
ALTER TABLE `manajemen_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mesage`
--
ALTER TABLE `mesage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portofolio`
--
ALTER TABLE `portofolio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slideshow`
--
ALTER TABLE `slideshow`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `klien`
--
ALTER TABLE `klien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `konten_statis`
--
ALTER TABLE `konten_statis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `manajemen_user`
--
ALTER TABLE `manajemen_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `mesage`
--
ALTER TABLE `mesage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1548;

--
-- AUTO_INCREMENT for table `portofolio`
--
ALTER TABLE `portofolio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `slideshow`
--
ALTER TABLE `slideshow`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
