-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2022 at 07:02 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uaswf`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id_contact` int(225) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `subjek` varchar(225) NOT NULL,
  `pesan` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id_contact`, `nama`, `email`, `subjek`, `pesan`) VALUES
(1, 'a', 'a@gmail.com', 'A', 'aaaaaaaa'),
(2, 'a', 'a@gmail.com', 'a', 'aseh');

-- --------------------------------------------------------

--
-- Table structure for table `fasilitas`
--

CREATE TABLE `fasilitas` (
  `id` int(11) NOT NULL,
  `ruangan` enum('rpl','mulmed','tkj','') NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `jumlah` int(100) NOT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fasilitas`
--

INSERT INTO `fasilitas` (`id`, `ruangan`, `nama_barang`, `gambar`, `jumlah`, `created_at`, `updated_at`) VALUES
(1, 'rpl', 'PC', 'language-lab-g82c7e3969_1920.jpg', 25, '2022-06-22', '2022-06-22 03:54:28'),
(2, 'rpl', 'Keyboard', 'keyboard.jpg', 25, '2022-06-22', '2022-06-22 04:19:36'),
(3, 'tkj', 'PC All in One', 'computer-gfab393b3a_1920.jpg', 25, '2022-06-22', '2022-06-22 06:52:06'),
(4, 'mulmed', 'Green Screen', 'screen green foto studio.jpg', 1, '2022-06-22', '2022-06-22 06:52:06'),
(5, 'rpl', 'Mouse', 'Mouse.png', 22, '2022-06-22', '2022-06-22 06:52:06'),
(6, 'rpl', 'CPU', 'cpu.jpg', 28, '2022-06-22', '2022-06-22 06:52:06'),
(7, 'rpl', 'Kursi', 'kursi.png', 46, '2022-06-22', '2022-06-22 06:52:06'),
(8, 'rpl', 'Lampu', 'lampu.png', 16, '2022-06-22', '2022-06-22 06:52:06'),
(9, 'rpl', 'LCD', 'lcd.png', 1, '2022-06-22', '2022-06-22 06:52:06'),
(10, 'rpl', 'Router', 'router.png', 7, '2022-06-22', '2022-06-22 06:52:06'),
(11, 'rpl', 'Printer', 'printer.png', 2, '2022-06-22', '2022-06-22 06:55:59'),
(12, 'rpl', 'Papan Tulis', 'papantulis.png', 1, '2022-06-22', '2022-06-22 06:55:59'),
(13, 'rpl', 'VGA', 'vga.png', 5, '2022-06-22', '2022-06-22 06:58:18'),
(14, 'rpl', 'Access Point', 'wifi.png', 7, '2022-06-22', '2022-06-22 06:58:18'),
(15, 'rpl', 'Spidol', 'spidol.jpg', 7, '2022-06-22', '2022-06-22 07:00:12'),
(16, 'tkj', 'Routerboard', 'routerboard.jpg', 8, '2022-06-22', '2022-06-22 07:02:16'),
(17, 'tkj', 'Switch', 'switch.jpg', 9, '2022-06-22', '2022-06-22 07:05:02'),
(18, 'tkj', 'LAN Tester', 'lantester.jpg', 6, '2022-06-22', '2022-06-22 07:05:02'),
(19, 'tkj', 'Acccess Point', 'accesspoint.jpg', 8, '2022-06-22', '2022-06-22 07:08:17'),
(20, 'tkj', 'Tang Crimping', 'tangcrimping.jpg', 8, '2022-06-22', '2022-06-22 07:08:17'),
(21, 'tkj', 'POE Adapter', 'poeadaptor.jpg', 3, '2022-06-22', '2022-06-22 07:10:47'),
(22, 'tkj', 'Router', 'router.jpeg', 7, '2022-06-22', '2022-06-22 07:10:47'),
(23, 'tkj', 'Solder', 'solder.jpg', 2, '2022-06-22', '2022-06-22 07:12:03'),
(24, 'mulmed', 'Kain Hitam', 'hitam.png', 1, '2022-06-22', '2022-06-22 07:15:14'),
(25, 'mulmed', 'Kain Biru', 'blue.jpg', 1, '2022-06-22', '2022-06-22 07:15:14'),
(26, 'mulmed', 'Penyangga', 'penyangga.jpg', 2, '2022-06-22', '2022-06-22 07:19:02'),
(27, 'mulmed', 'Light Stand', 'lightstand.png', 2, '2022-06-22', '2022-06-22 07:23:19'),
(28, 'mulmed', 'Lampu Penerang Payung', 'lampupenerang.png', 2, '2022-06-22', '2022-06-22 07:25:59'),
(29, 'mulmed', 'Pen Tablet', 'pentablet.png', 1, '2022-06-22', '2022-06-22 07:25:59'),
(30, 'mulmed', 'VR Box', 'vrbox.jpg', 1, '2022-06-22', '2022-06-22 07:30:41'),
(31, 'mulmed', 'Router', 'router.jpeg', 2, '2022-06-22', '2022-06-22 07:30:41'),
(32, 'rpl', 'Test', 'default.jpg', 2, '0000-00-00', '2022-06-26 15:44:35'),
(33, 'rpl', 'Test', 'default.jpg', 2, '0000-00-00', '2022-06-26 15:44:53'),
(34, 'rpl', '22', '', 22, '0000-00-00', '2022-06-26 16:53:53'),
(35, 'rpl', '22', '', 22, '0000-00-00', '2022-06-26 16:55:26'),
(36, 'rpl', '22', '', 22, '0000-00-00', '2022-06-26 17:00:01'),
(37, 'rpl', 'Test', '', 2, '0000-00-00', '2022-06-26 17:13:22'),
(39, 'mulmed', '22', '1656263814_a0824523c003dadb8c22.png', 44, '0000-00-00', '2022-06-26 17:16:54'),
(40, 'tkj', '2', '1656264067_76728c6b45d4bb7b4055.png', 221, '0000-00-00', '2022-06-26 17:21:07');

-- --------------------------------------------------------

--
-- Table structure for table `lab`
--

CREATE TABLE `lab` (
  `id` int(11) NOT NULL,
  `id_lab` int(11) NOT NULL,
  `isi` text NOT NULL,
  `foto` varchar(255) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  `status` enum('1','0') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lab`
--

INSERT INTO `lab` (`id`, `id_lab`, `isi`, `foto`, `created_at`, `updated_at`, `status`) VALUES
(1, 1, 'Laboratorium Rekayasa Perangkat Lunak merupakan salah satu laboratorium yang ada di Program Studi Pendidikan Teknik Informatika dan Komputer. Laboratorium Rekayasa Perangkat Lunak mengakomodasi kegiatan-kegiatan yang menyangkut perancangan dan rekayasa software (perangkat lunak) di bidang Teknologi Informasi. Untuk kegiatan internal, laboratorium ini rutin digunakan untuk kegiatan praktikum mata kuliah yang berkaitan dengan perangkat lunak. \\r\\n\\r\\nSelain itu, mahasiswa bisa memanfaatkan laboratorium ini untuk menunjang berbagai pengerjaan tugas besar, praktek kerja lapangan, proyek kelompok, tugas akhir mahasiswa. Untuk dosen, Laboratorium Rekayasa Perangkat Lunak dapat memfasilitasi berbagai kegiatan yang berkaitan dengan penelitian dan pengabdian kepada masyarakat.', 'coding-g8e1443f78_1920.jpg', '0000-00-00', '0000-00-00', '0'),
(2, 3, 'Laboratorium Multimedia merupakan salah satu laboratorium yang ada di Program Studi Pendidikan teknik Informatika dan Komputer. Laboratorium Multimedia mengakomodasi kegiatan-kegiatan yang menyangkut desain dan pengembagan media pembelajaran. Untuk kegiatan internal, laboratorium ini rutin digunakan untuk kegiatan praktikum mata kuliah yang berkaitan dengan Multimedia. \n\nSelain itu, mahasiswa bisa memanfaatkan laboratorium ini untuk menunjang berbagai pengerjaan tugas besar, praktek kerja lapangan, proyek kelompok, tugas akhir mahasiswa. Untuk dosen, Laboratorium Multimedia dapat memfasilitasi berbagai kegiatan yang berkaitan dengan penelitian dan pengabdian kepada masyarakat.', 'computer-gfab393b3a_1920.jpg', '0000-00-00', '0000-00-00', '0'),
(3, 2, 'Laboratorium Jairngan merupakan salah satu laboratorium yang ada di Program Studi Pendidikan Teknik Informatika dan Komputer. Laboratorium Jaringan mengakomodasi kegiatan-kegiatan yang menyangkut rancang bangun jaringan di bidang Teknologi Informasi. Untuk kegiatan internal, laboratorium ini rutin digunakan untuk kegiatan praktikum mata kuliah yang berkaitan dengan perangkat lunak. Selain itu, mahasiswa bisa memanfaatkan laboratorium ini untuk menunjang berbagai pengerjaan tugas besar, praktek kerja lapangan, proyek kelompok, tugas akhir mahasiswa. Untuk dosen, Laboratorium Jaringan dapat memfasilitasi berbagai kegiatan yang berkaitan dengan penelitian dan pengabdian kepada masyarakat.', 'Network engineering.jpg', '0000-00-00', '0000-00-00', '1');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `reservasi`
--

CREATE TABLE `reservasi` (
  `id` int(11) NOT NULL,
  `kode_reservasi` varchar(255) NOT NULL,
  `peminjam` varchar(255) NOT NULL,
  `id_lab` enum('1','2','3') NOT NULL,
  `tanggal_pinjam` datetime NOT NULL,
  `tanggal_berakhir` datetime NOT NULL,
  `status` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reservasi`
--

INSERT INTO `reservasi` (`id`, `kode_reservasi`, `peminjam`, `id_lab`, `tanggal_pinjam`, `tanggal_berakhir`, `status`) VALUES
(1, 'LAB-48574', 'Hasan Basri', '1', '2022-06-27 22:06:59', '2022-06-29 22:05:33', '1'),
(2, 'LAB-76824', 'Muhamad Nuruzzaki', '3', '2022-06-27 22:18:53', '2022-06-27 17:07:23', '1'),
(3, 'LAB-84990', 'Agung Ardiansyah', '2', '2022-06-27 22:38:34', '2022-06-27 17:07:23', '1'),
(4, 'LAB-87239', 'Kusnadi', '2', '2022-06-29 13:52:03', '2022-06-27 17:07:23', '0'),
(5, 'LAB-87320', 'Ardian Rahardiansyah', '1', '2022-06-29 13:51:58', '2022-06-27 17:07:23', '0'),
(6, 'LAB-62bd1b7c24461', 'Krisna', '1', '2022-06-30 08:41:00', '2022-07-01 08:45:00', '0'),
(7, 'LAB-62bd1b83d5f5c', 'Krisna', '1', '2022-06-30 08:41:00', '2022-07-01 08:45:00', '0'),
(8, 'LAB-62bd1bb4c0ae9', 'Krisna', '1', '2022-06-30 08:41:00', '2022-07-01 08:45:00', '0'),
(9, 'LAB-62bd3398daa05', 'as', '1', '2022-06-02 12:24:00', '2022-06-18 12:24:00', '0'),
(10, 'LAB-62bdd1a085c40', 'samuel', '', '2022-07-01 11:11:00', '2022-07-03 02:32:00', '1'),
(11, 'LAB-62bdd2044183f', 'samuel', '1', '2022-07-01 01:02:00', '2022-07-04 02:03:00', '1'),
(12, 'LAB-62bdd5f1252b1', ' Saya', '2', '2022-07-06 01:01:00', '2022-07-09 01:01:00', '0'),
(13, 'LAB-62bdd6251b7a5', ' Anelka', '1', '2022-07-02 01:01:00', '2022-07-07 01:01:00', '0');

-- --------------------------------------------------------

--
-- Table structure for table `ruangans`
--

CREATE TABLE `ruangans` (
  `id` int(11) NOT NULL,
  `nama_ruangan` enum('Laboratoruim Rekayasa Perangkat Lunak','Laboratoruim Jaringan','Laboratoruim Multimedia','') NOT NULL,
  `nama_peminjam` varchar(255) NOT NULL,
  `status` enum('1','2','3') NOT NULL,
  `tgl_pakai` date NOT NULL,
  `waktu_a` time NOT NULL,
  `waktu_b` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ruangans`
--

INSERT INTO `ruangans` (`id`, `nama_ruangan`, `nama_peminjam`, `status`, `tgl_pakai`, `waktu_a`, `waktu_b`) VALUES
(1, 'Laboratoruim Rekayasa Perangkat Lunak', 'John Doe', '1', '2022-06-24', '08:00:00', '12:00:00'),
(2, 'Laboratoruim Jaringan', 'Emil', '2', '2022-06-25', '08:00:00', '12:00:00'),
(3, 'Laboratoruim Multimedia', 'Toriq', '3', '2022-06-27', '08:00:00', '10:00:00'),
(4, 'Laboratoruim Rekayasa Perangkat Lunak', 'Anena', '1', '2022-06-24', '13:00:00', '14:00:00'),
(5, 'Laboratoruim Jaringan', 'Azelan', '1', '2022-06-24', '13:00:00', '14:00:00'),
(6, 'Laboratoruim Multimedia', 'Jatmiko', '1', '2022-06-25', '12:00:00', '14:00:00'),
(7, 'Laboratoruim Rekayasa Perangkat Lunak', 'Ana', '2', '2022-06-24', '08:00:00', '10:00:00'),
(8, 'Laboratoruim Jaringan', 'Haris', '2', '2022-06-28', '12:00:00', '14:00:00'),
(9, 'Laboratoruim Multimedia', 'Johari', '2', '2022-06-30', '10:00:00', '12:00:00'),
(10, 'Laboratoruim Rekayasa Perangkat Lunak', 'Zainuri', '3', '2022-06-24', '08:00:00', '12:00:00'),
(11, 'Laboratoruim Jaringan', 'Kurisu', '3', '2022-06-24', '07:00:00', '09:00:00'),
(12, 'Laboratoruim Multimedia', 'Haryono', '3', '2022-06-27', '13:00:00', '15:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `alamat` varchar(225) NOT NULL,
  `username` varchar(225) NOT NULL,
  `level` enum('0','1') NOT NULL,
  `status` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `email`, `password`, `nama`, `alamat`, `username`, `level`, `status`) VALUES
(1, 'anelka@student.uns.ac.id', '$2y$10$qDo048LFBp4BYkkymNO8JeKw4G.L98kssu6WFsZgpO7J8EVsuazkO', 'Christian Anelka', 'Kulon Bonoloyo', 'anelka', '1', '1'),
(2, 'krisna@student.uns.ac.id', 'anjaymabar', 'Krisna Mukti', 'Pabelan', 'krisna', '0', '1'),
(3, 'auliya@student.uns.ac.id', 'anjaymabar', 'Auliya Nurul', 'Pabelan', 'aul', '0', '0'),
(4, 'user1@gmail.com', 'anjaymabar', 'User', 'Solo', 'user1', '', '0'),
(5, 'anelka@student.uns.ac.id', 'anjaymabar', 'Christian Anelka', 'Kulon Bonoloyo', 'anelka', '0', '0'),
(6, 'krisna@student.uns.ac.id', 'anjaymabar', 'Krisna Mukti', 'Pabelan', 'krisna', '0', '0'),
(7, 'auliya@student.uns.ac.id', 'anjaymabar', 'Auliya Nurul', 'Pabelan', 'aul', '0', '0'),
(10, 'samuel11@gmail.com', '$2y$10$qDo048LFBp4BYkkymNO8JeKw4G.L98kssu6WFsZgpO7J8EVsuazkO', 'Samuel', 'Solo', 'samuel', '0', '1'),
(11, 'a@gmail.com', '$2y$10$Yd6zbIVQ.Ec5f9GfFiWHGuAfAuJ4HVpZ4Y3Tlvvx5ow4r4kDhatvq', '', 'Pati', '', '0', '0'),
(12, 'b@gmail.com', '$2y$10$Qg2.uvIFVSTqCTd3vKdEZO84U8.atqhbtlt3TI/DS8aE.zoyv.sES', '', 'Klaten', '', '0', '0'),
(13, 'c@gmail.com', '$2y$10$GS2Z2ponEVOhSiGu2czuSOWBtEQqS4lzwwWUnjQwoIw9wtBCcMXIG', 'Salik Mana', 'Jepara', 'Salik', '0', '0'),
(14, 'jexipyzem@vomoto.com', '$2y$10$qDo048LFBp4BYkkymNO8JeKw4G.L98kssu6WFsZgpO7J8EVsuazkO', 'alta', 'Jl. Sriwijaya Tengah 3 no.4 Prawit Nusukan', 'admin', '0', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id_contact`);

--
-- Indexes for table `fasilitas`
--
ALTER TABLE `fasilitas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lab`
--
ALTER TABLE `lab`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservasi`
--
ALTER TABLE `reservasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ruangans`
--
ALTER TABLE `ruangans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id_contact` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `fasilitas`
--
ALTER TABLE `fasilitas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reservasi`
--
ALTER TABLE `reservasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `ruangans`
--
ALTER TABLE `ruangans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
