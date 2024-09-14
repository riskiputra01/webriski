-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 03, 2024 at 08:46 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `serqual`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `id` int NOT NULL,
  `direktorat` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `divisi` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `jenis_kelamin` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `usia` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `masa_kerja` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `level_jabatan` varchar(100) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`id`, `direktorat`, `divisi`, `jenis_kelamin`, `usia`, `masa_kerja`, `level_jabatan`) VALUES
(1, 'Direktorat Utama', 'Sub Direktorat PU', 'Perempuan', '31-40 Tahun', '6-10 Tahun', '>Teknisi/Analis/Kepala Regu/Staff Analis'),
(2, 'Direktorat Pengembangan Usaha & Komersial', 'Sekretaris Perusahaan', 'Laki-Laki', '31-40 Tahun', '0-5 Tahun', 'Vice President'),
(3, 'Direktorat Produksi', 'Divisi Komersial', 'Laki-Laki', '31-40 Tahun', '6-10 Tahun', 'Kepala Dinas/Ahli Madya'),
(4, 'Direktorat Keuangan dan SDM', 'Divisi Pengembangan Usaha', 'Laki-Laki', '41-50 Tahun', '11-20 Tahun', 'Kepala Dinas/Ahli Madya'),
(5, 'Direktorat Produksi', 'Divisi Distribusi & Perc Teknik', 'Laki-Laki', '31-40 Tahun', '6-10 Tahun', '>Teknisi/Analis/Kepala Regu/Staff Analis'),
(6, 'Direktorat Produksi', 'Divisi Sistem Informasi & Manajemen Kinerja', 'Perempuan', '41-50 Tahun', '6-10 Tahun', 'Kepala Divisi/Ahli Utama'),
(7, 'Direktorat Produksi', 'Divisi Sistem Informasi & Manajemen Kinerja', 'Laki-Laki', '31-40 Tahun', '11-20 Tahun', 'Kepala Dinas/Ahli Madya'),
(8, 'Direktorat Pengembangan Usaha & Komersial', 'Divisi Sistem Informasi & Manajemen Kinerja', 'Perempuan', '20-30 Tahun', '11-20 Tahun', 'Kepala Divisi/Ahli Utama'),
(9, 'Direktorat Produksi', 'Divisi Sistem Informasi & Manajemen Kinerja', 'Perempuan', '41-50 Tahun', '6-10 Tahun', 'Kepala Dinas/Ahli Madya'),
(10, 'Direktorat Keuangan dan SDM', 'Divisi Sistem Informasi & Manajemen Kinerja', 'Laki-Laki', '20-30 Tahun', '>20 Tahun', 'Kepala Dinas/Ahli Madya'),
(11, 'Direktorat Produksi', 'Satuan Pengawasan Intern', 'Perempuan', '20-30 Tahun', '0-5 Tahun', 'Kepala Dinas/Ahli Madya'),
(12, 'Direktorat Pengembangan Usaha & Komersial', 'Sekretaris Perusahaan', 'Perempuan', '31-40 Tahun', '11-20 Tahun', 'Kepala Divisi/Ahli Utama'),
(13, 'Direktorat Pengembangan Usaha & Komersial', 'Sekretaris Perusahaan', 'Perempuan', '31-40 Tahun', '11-20 Tahun', 'Kepala Divisi/Ahli Utama'),
(14, 'Direktorat Utama', 'Sekretaris Perusahaan', 'Perempuan', '41-50 Tahun', '6-10 Tahun', 'Vice President'),
(15, 'Direktorat Produksi', 'Divisi Human Capital & Umum', 'Perempuan', '31-40 Tahun', '6-10 Tahun', 'Vice President'),
(16, 'Direktorat Produksi', 'Divisi Keuangan', 'Perempuan', '31-40 Tahun', '6-10 Tahun', 'Vice President'),
(17, 'Direktorat Produksi', 'Divisi Perencanaan Korporat', 'Perempuan', '31-40 Tahun', '6-10 Tahun', 'Vice President'),
(18, 'Direktorat Produksi', 'Divisi Produksi', 'Perempuan', '31-40 Tahun', '6-10 Tahun', 'Vice President'),
(19, 'Direktorat Pengembangan Usaha & Komersial', 'Divisi Human Capital & Umum', 'Laki-Laki', '31-40 Tahun', '6-10 Tahun', 'Vice President'),
(20, 'Direktorat Utama', 'Divisi Keuangan', 'Laki-Laki', '31-40 Tahun', '6-10 Tahun', 'Kepala Divisi/Ahli Utama'),
(21, 'Direktorat Pengembangan Usaha & Komersial', 'Divisi Komersial', 'Laki-Laki', '41-50 Tahun', '>20 Tahun', 'Vice President'),
(22, 'Direktorat Pengembangan Usaha & Komersial', 'Divisi Komersial', 'Laki-Laki', '41-50 Tahun', '>20 Tahun', 'Vice President'),
(23, 'Direktorat Pengembangan Usaha & Komersial', 'Divisi Komersial', 'Laki-Laki', '41-50 Tahun', '>20 Tahun', 'Vice President'),
(24, 'Direktorat Produksi', 'Divisi Komersial', 'Perempuan', '>50 Tahun', '0-5 Tahun', 'Kepala Divisi/Ahli Utama'),
(25, 'Direktorat Produksi', 'Divisi Komersial', 'Perempuan', '>50 Tahun', '0-5 Tahun', 'Kepala Divisi/Ahli Utama'),
(26, 'Direktorat Produksi', 'Sub Direktorat PU', 'Perempuan', '>50 Tahun', '0-5 Tahun', 'Kepala Divisi/Ahli Utama'),
(27, 'Direktorat Produksi', 'Sekretaris Perusahaan', 'Perempuan', '>50 Tahun', '0-5 Tahun', 'Kepala Divisi/Ahli Utama'),
(28, 'Direktorat Produksi', 'Sub Direktorat PU', 'Perempuan', '>50 Tahun', '0-5 Tahun', 'Kepala Divisi/Ahli Utama'),
(29, 'Direktorat Produksi', 'Divisi Keuangan', 'Perempuan', '>50 Tahun', '0-5 Tahun', 'Kepala Divisi/Ahli Utama'),
(30, 'Direktorat Produksi', 'Sub Direktorat PU', 'Perempuan', '>50 Tahun', '0-5 Tahun', 'Kepala Divisi/Ahli Utama'),
(31, 'Direktorat Utama', 'Sub Direktorat PU', 'Laki-Laki', '31-40 Tahun', '0-5 Tahun', 'Vice President'),
(32, 'Direktorat Utama', 'Sub Direktorat PU', 'Laki-Laki', '31-40 Tahun', '0-5 Tahun', 'Vice President'),
(33, 'Direktorat Utama', 'Sekretaris Perusahaan', 'Laki-Laki', '31-40 Tahun', '0-5 Tahun', 'Vice President');

-- --------------------------------------------------------

--
-- Table structure for table `keluhan`
--

CREATE TABLE `keluhan` (
  `id` int NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pesan` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `keluhan`
--

INSERT INTO `keluhan` (`id`, `name`, `email`, `pesan`) VALUES
(1, 'Riski Adiguna Putra', 'riskiadigunaputra05@gmail.com', 'asasasa'),
(2, 'Riski Adiguna Putra', 'riskiadigunaputra05@gmail.com', 'asasasa'),
(3, 'Riski Adiguna Putra', 'riskiadigunaputra05@gmail.com', 'asasasa'),
(4, 'Riski Adiguna Putra', 'riskiadigunaputra05@gmail.com', 'asasasa'),
(5, 'Riski Adiguna Putra', 'riskiadigunaputra05@gmail.com', 'asasasa'),
(6, 'Riski Adiguna Putra', 'riskiadigunaputra05@gmail.com', 'asasasa'),
(7, 'riskiputra', 'riskiadigunaputra491@gmail.com', 'aasas'),
(8, 'aji', 'aji@gmail.com', 'asasasa');

-- --------------------------------------------------------

--
-- Table structure for table `layanan`
--

CREATE TABLE `layanan` (
  `id` int NOT NULL,
  `layanan_apk` varchar(225) NOT NULL,
  `layanan_solusi_bisnis` varchar(225) NOT NULL,
  `layanan_and_user_perangkat_lunak` varchar(225) NOT NULL,
  `layanan_and_user_perangkat_keras` varchar(225) NOT NULL,
  `layanan_jaringan_komunikasi` varchar(225) NOT NULL,
  `layanan_dukungan_pengguna` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `layanan`
--

INSERT INTO `layanan` (`id`, `layanan_apk`, `layanan_solusi_bisnis`, `layanan_and_user_perangkat_lunak`, `layanan_and_user_perangkat_keras`, `layanan_jaringan_komunikasi`, `layanan_dukungan_pengguna`) VALUES
(1, 'Layanan SAP', 'Layanan Solusi Aplikasi dan Infrastruktur', 'SW001 - Layanan Microsoft Office', 'HW001 - Layanan Personal Computer (PC)', 'Layanan VPN', 'HD001 - Akun/Akses Aplikasi'),
(2, 'Layanan Employee Self Service (ESS)', 'Layanan Modifikasi Aplikasi', 'SW002 - Layanan Operating System (OS)', 'HW002 - Layanan Laptop', 'Layanan WAN', 'HD002 - Install Aplikasi Desktop Perusahaan'),
(3, 'Layanan SAP, Layanan Integrated Management System (Prosedur Online), Layanan Risk Management', 'Layanan Modifikasi Aplikasi', 'SW003 - Layanan Antivirus', 'HW003 - Layanan Mobile Device / Tablet / Hand Held Terminal (HHT)', 'Layanan WiFi, IF007 - Layanan Closed Circuit Television (CCTV)', 'HD002 - Install Aplikasi Desktop Perusahaan'),
(4, 'Layanan SAP, Layanan Customer Information System', 'Layanan Modifikasi Aplikasi, Layanan Penyediaan Data', 'SW002 - Layanan Operating System (OS), SW004 - Layanan Aplikasi Drawing', 'HW003 - Layanan Mobile Device / Tablet / Hand Held Terminal (HHT), HW004 - Layanan Printer', 'Layanan MPLS,  IF006 - Layanan Cloud Storage', 'HD001 - Akun/Akses Aplikasi, HD002 - Install Aplikasi Desktop Perusahaan'),
(5, 'Layanan Employee Self Service (ESS), Layanan Integrated Management System (Prosedur Online), Layanan Presensi Online', 'Layanan Penyediaan Data', 'SW003 - Layanan Antivirus, SW004 - Layanan Aplikasi Drawing', 'HW002 - Layanan Laptop, HW005 - Layanan Scanner', 'Layanan LAN, IF007 - Layanan Closed Circuit Television (CCTV)', 'HD001 - Akun/Akses Aplikasi'),
(6, 'Layanan Mobile Meter Reading (MMR), Layanan Presensi Online', 'Layanan Modifikasi Aplikasi, Layanan Penyediaan Data', 'SW003 - Layanan Antivirus, SW004 - Layanan Aplikasi Drawing', 'HW002 - Layanan Laptop, HW004 - Layanan Printer', 'Layanan LAN,  IF006 - Layanan Cloud Storage', 'HD001 - Akun/Akses Aplikasi'),
(7, 'Layanan Integrated Management System (Prosedur Online), Layanan Presensi Online', 'Layanan Modifikasi Aplikasi, Layanan Penyediaan Data', 'SW001 - Layanan Microsoft Office, SW003 - Layanan Antivirus', 'HW003 - Layanan Mobile Device / Tablet / Hand Held Terminal (HHT), HW004 - Layanan Printer', 'Layanan WAN, Layanan LAN', 'HD002 - Install Aplikasi Desktop Perusahaan'),
(8, 'Layanan Employee Self Service (ESS), Layanan Risk Management', 'Layanan Penyediaan Data, Layanan Pendampingan Implementasi', 'SW003 - Layanan Antivirus, SW004 - Layanan Aplikasi Drawing', 'HW004 - Layanan Printer, HW006 - Layanan Komponen Perangkat Komputer', ' IF006 - Layanan Cloud Storage, IF008 - Layanan Komunikasi Telemetri', 'HD001 - Akun/Akses Aplikasi'),
(9, 'Layanan Mobile Meter Reading (MMR), Layanan Correspondence Application (CORLA)', 'Layanan Penyediaan Data, Layanan Pendampingan Implementasi', 'SW002 - Layanan Operating System (OS), SW003 - Layanan Antivirus', 'HW001 - Layanan Personal Computer (PC), HW002 - Layanan Laptop', 'Layanan WiFi, Layanan MPLS', 'HD002 - Install Aplikasi Desktop Perusahaan'),
(10, 'Layanan Website, Layanan Customer Information System, Layanan Correspondence Application (CORLA)', 'Layanan Penyediaan Data', 'SW001 - Layanan Microsoft Office, SW004 - Layanan Aplikasi Drawing', 'HW002 - Layanan Laptop, HW003 - Layanan Mobile Device / Tablet / Hand Held Terminal (HHT)', 'Layanan WAN, Layanan LAN', 'HD001 - Akun/Akses Aplikasi, HD002 - Install Aplikasi Desktop Perusahaan'),
(11, 'Layanan SAP', 'Layanan Solusi Aplikasi dan Infrastruktur', 'SW002 - Layanan Operating System (OS)', 'HW001 - Layanan Personal Computer (PC)', 'Layanan WiFi', 'HD001 - Akun/Akses Aplikasi'),
(12, 'Layanan Procurement Information System', 'Layanan Solusi Aplikasi dan Infrastruktur, Layanan Pelatihan Teknologi Informasi', 'SW003 - Layanan Antivirus, SW004 - Layanan Aplikasi Drawing', 'HW004 - Layanan Printer, HW005 - Layanan Scanner', 'Layanan MPLS,  IF006 - Layanan Cloud Storage', 'HD001 - Akun/Akses Aplikasi, HD002 - Install Aplikasi Desktop Perusahaan'),
(13, 'Layanan SAP, Layanan Integrated Management System (Prosedur Online)', 'Layanan Penyediaan Data', 'SW004 - Layanan Aplikasi Drawing', 'HW003 - Layanan Mobile Device / Tablet / Hand Held Terminal (HHT)', 'Layanan WAN, IF008 - Layanan Komunikasi Telemetri', 'HD001 - Akun/Akses Aplikasi'),
(14, 'Layanan Employee Self Service (ESS), Layanan Customer Information System, Layanan Risk Management', 'Layanan Solusi Aplikasi dan Infrastruktur, Layanan Modifikasi Aplikasi, Layanan Penyediaan Data, Layanan Pendampingan Implementasi', 'SW002 - Layanan Operating System (OS), SW003 - Layanan Antivirus', 'HW003 - Layanan Mobile Device / Tablet / Hand Held Terminal (HHT), HW004 - Layanan Printer', 'Layanan VPN, Layanan WAN, Layanan WiFi', 'HD002 - Install Aplikasi Desktop Perusahaan'),
(15, 'Layanan SAP, Layanan Employee Self Service (ESS)', 'Layanan Solusi Aplikasi dan Infrastruktur, Layanan Modifikasi Aplikasi', 'SW002 - Layanan Operating System (OS), SW003 - Layanan Antivirus', 'HW002 - Layanan Laptop, HW003 - Layanan Mobile Device / Tablet / Hand Held Terminal (HHT)', 'Layanan LAN, Layanan WiFi', 'HD001 - Akun/Akses Aplikasi, HD002 - Install Aplikasi Desktop Perusahaan'),
(16, 'Layanan SAP, Layanan Employee Self Service (ESS)', 'Layanan Solusi Aplikasi dan Infrastruktur, Layanan Modifikasi Aplikasi', 'SW002 - Layanan Operating System (OS), SW003 - Layanan Antivirus', 'HW003 - Layanan Mobile Device / Tablet / Hand Held Terminal (HHT), HW004 - Layanan Printer', 'Layanan MPLS,  IF006 - Layanan Cloud Storage', 'HD001 - Akun/Akses Aplikasi');

-- --------------------------------------------------------

--
-- Table structure for table `survey`
--

CREATE TABLE `survey` (
  `id` int NOT NULL,
  `layanan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `kuisioner` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `harapan` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `fakta` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `survey`
--

INSERT INTO `survey` (`id`, `layanan`, `kuisioner`, `harapan`, `fakta`, `created_at`) VALUES
(1, 'Direktorat', 'Layanan SI/TI dapat diandalkan', '1', '2', '2024-09-02 11:41:10'),
(2, 'Direktorat', 'Layanan SI/TI tersedia sesuai dengan waktu yang dijanjikan', '2', '3', '2024-09-02 11:41:10'),
(3, 'Direktorat', 'Seluruh layanan SI/TI sudah diinformasikan kepada Anda', '3', '4', '2024-09-02 11:41:10'),
(4, 'Direktorat', 'Staff di Group OLTI selalu memberikan bantuan kepada Anda', '3', '4', '2024-09-02 11:41:10'),
(5, 'Direktorat', 'Layanan SI/TI disediakan perusahaan ditempat kerja anda', '3', '4', '2024-09-02 11:41:10'),
(6, 'Layanan EUD', 'Fasilitas EUD (PC, Laptop, Printer dll) dilakukan update', '1', '1', '2024-09-02 11:41:10'),
(7, 'Layanan EUD', 'Fasilitas EUD (PC, Laptop, Printer, dll) selalu dirawat sesuai jadwal', '2', '2', '2024-09-02 11:41:10'),
(8, 'Layanan EUD', 'Fasilitas EUD (PC, Laptop, Printer, dll) dapat digunakan dengan baik', '7', '7', '2024-09-02 11:41:10'),
(9, 'Layanan EUD', 'Jadwal Preventive Maintenance EUD (PC, Laptop, Printer, dll) selalu diinformasikan sebelum pelaksanaan kegiatan', '7', '7', '2024-09-02 11:41:10'),
(10, 'Layanan EUD', 'Adanya kepastian dalam mendapatkan perangkat EUD Desktop, Laptop, Printer, dll) sesuai dengan uraian pekerjaan (jobdesc)', '7', '7', '2024-09-02 11:41:10'),
(11, 'Layanan Internet', 'Akses internet mudah ditemukan di area Plant KTI', '6', '6', '2024-09-02 11:41:10'),
(12, 'Layanan Internet', 'Group OLTI mudah dihubungi jika terjadi error pada jaringan internet', '6', '5', '2024-09-02 11:41:10'),
(13, 'Layanan Internet', 'Anda merasa aman dalam menggunakan akses internet', '6', '6', '2024-09-02 11:41:10'),
(14, 'Layanan Internet', 'Anda memahami cara menggunakan internet yang aman', '6', '6', '2024-09-02 11:41:10'),
(15, 'Layanan Internet', 'Akses internet selalu ada disetiap ruang kerja', '7', '7', '2024-09-02 11:41:10'),
(16, 'Layanan CCTV', 'CCTV dapat diakses kapanpun', '1', '2', '2024-09-02 11:41:10'),
(17, 'Layanan CCTV', 'Tersedia kontak/media untuk melaporkan keluhan dengan respon perbaikan yang cepat', '3', '4', '2024-09-02 11:41:10'),
(18, 'Layanan CCTV', 'CCTV tersedia selama 24 Jam', '4', '4', '2024-09-02 11:41:10'),
(19, 'Layanan CCTV', 'Preventive Maintenance diinformasikan sebelum pelaksanaan kegiatan', '4', '4', '2024-09-02 11:41:10'),
(20, 'Layanan CCTV', 'CCTV sudah mengcover / mencakup area yang dibutuhkan', '4', '4', '2024-09-02 11:41:10'),
(21, 'Layanan SAP', 'Menu yang terdapat pada aplikasi dapat berfungsi', '1', '2', '2024-09-02 11:41:10'),
(22, 'Layanan SAP', 'Tersedia kontak/media untuk melaporkan keluhan dengan respon perbaikan yang cepat', '2', '2', '2024-09-02 11:41:10'),
(23, 'Layanan SAP', 'Aplikasi tersedia untuk digunakan selama jam kerja dan diluar jam kerja', '3', '3', '2024-09-02 11:41:10'),
(24, 'Layanan SAP', 'Aplikasi memiliki fitur yang berguna dan sesuai dengan yang saya butuhkan', '5', '5', '2024-09-02 11:41:10'),
(25, 'Layanan SAP', 'Aplikasi memiliki tampilan (User Interface) yang menarik dan mudah digunakan (User Friendly)', '5', '5', '2024-09-02 11:41:10'),
(26, 'Layanan Aplikasi', 'Menu yang terdapat pada aplikasi dapat berfungsi', '2', '3', '2024-09-02 11:41:10'),
(27, 'Layanan Aplikasi', 'Tersedia kontak/media untuk melaporkan keluhan dengan respon perbaikan yang cepat', '3', '3', '2024-09-02 11:41:10'),
(28, 'Layanan Aplikasi', 'Aplikasi tersedia untuk digunakan selama jam kerja dan diluar jam kerja', '3', '3', '2024-09-02 11:41:10'),
(29, 'Layanan Aplikasi', 'Aplikasi memiliki fitur yang berguna dan sesuai dengan yang saya butuhkan', '7', '7', '2024-09-02 11:41:10'),
(30, 'Layanan Aplikasi', 'Aplikasi memiliki tampilan (User Interface) yang menarik dan mudah digunakan (User Friendly)', '7', '7', '2024-09-02 11:41:10'),
(31, 'Layanan Solusi Bisnis', 'Kebutuhan (spesifikasi) solusi aplikasi/teknologi yang disampaikan sudah sesuai dan kami pahami dengan baik', '7', '7', '2024-09-02 11:41:10'),
(32, 'Layanan Solusi Bisnis', 'Pengembangan aplikasi/teknologi dilaksanakan sesuai dengan waktu kesepakatan', '6', '7', '2024-09-02 11:41:10'),
(33, 'Layanan Solusi Bisnis', 'Solusi Pengembangan Aplikasi/Teknologi untuk kebutuhan bisnis yang diberikan dengan kualitas baik sesuai dengan spesifikasi yang dibutuhkan', '6', '7', '2024-09-02 11:41:10'),
(34, 'Layanan Solusi Bisnis', 'Ketika terdapat permasalahan bisnis, terdapat minat untuk menyelesaikannya dengan sistem informasi/teknologi informasi', '6', '7', '2024-09-02 11:41:10'),
(35, 'Layanan Solusi Bisnis', 'Solusi Pengembangan Aplikasi/Teknologi untuk kebutuhan bisnis sudah terdapat petunjuk untuk penggunaannya', '6', '5', '2024-09-02 11:41:10'),
(36, 'Direktorat', 'Layanan SI/TI dapat diandalkan', '7', '7', '2024-09-02 11:41:10'),
(37, 'Direktorat', 'Layanan SI/TI tersedia sesuai dengan waktu yang dijanjikan', '7', '7', '2024-09-02 11:41:10'),
(38, 'Direktorat', 'Seluruh layanan SI/TI sudah diinformasikan kepada Anda', '7', '7', '2024-09-02 11:41:10'),
(39, 'Direktorat', 'Staff di Group OLTI selalu memberikan bantuan kepada Anda', '7', '7', '2024-09-02 11:41:10'),
(40, 'Direktorat', 'Layanan SI/TI disediakan perusahaan ditempat kerja anda', '7', '7', '2024-09-02 11:41:10'),
(41, 'Layanan EUD', 'Fasilitas EUD (PC, Laptop, Printer dll) dilakukan update', '1', '1', '2024-09-02 11:41:10'),
(42, 'Layanan EUD', 'Fasilitas EUD (PC, Laptop, Printer, dll) selalu dirawat sesuai jadwal', '1', '6', '2024-09-02 11:41:10'),
(43, 'Layanan EUD', 'Fasilitas EUD (PC, Laptop, Printer, dll) dapat digunakan dengan baik', '6', '6', '2024-09-02 11:41:10'),
(44, 'Layanan EUD', 'Jadwal Preventive Maintenance EUD (PC, Laptop, Printer, dll) selalu diinformasikan sebelum pelaksanaan kegiatan', '6', '6', '2024-09-02 11:41:10'),
(45, 'Layanan EUD', 'Adanya kepastian dalam mendapatkan perangkat EUD Desktop, Laptop, Printer, dll) sesuai dengan uraian pekerjaan (jobdesc)', '6', '6', '2024-09-02 11:41:10'),
(46, 'Layanan Internet', 'Akses internet mudah ditemukan di area Plant KTI', '5', '7', '2024-09-02 11:41:10'),
(47, 'Layanan Internet', 'Group OLTI mudah dihubungi jika terjadi error pada jaringan internet', '6', '7', '2024-09-02 11:41:10'),
(48, 'Layanan Internet', 'Anda merasa aman dalam menggunakan akses internet', '6', '7', '2024-09-02 11:41:10'),
(49, 'Layanan Internet', 'Anda memahami cara menggunakan internet yang aman', '6', '7', '2024-09-02 11:41:10'),
(50, 'Layanan Internet', 'Akses internet selalu ada disetiap ruang kerja', '7', '7', '2024-09-02 11:41:10'),
(51, 'Layanan SAP', 'Menu yang terdapat pada aplikasi dapat berfungsi', '1', '2', '2024-09-02 11:41:10'),
(52, 'Layanan SAP', 'Tersedia kontak/media untuk melaporkan keluhan dengan respon perbaikan yang cepat', '2', '3', '2024-09-02 11:41:10'),
(53, 'Layanan SAP', 'Aplikasi tersedia untuk digunakan selama jam kerja dan diluar jam kerja', '3', '1', '2024-09-02 11:41:10'),
(54, 'Layanan SAP', 'Aplikasi memiliki fitur yang berguna dan sesuai dengan yang saya butuhkan', '3', '3', '2024-09-02 11:41:10'),
(55, 'Layanan SAP', 'Aplikasi memiliki tampilan (User Interface) yang menarik dan mudah digunakan (User Friendly)', '3', '3', '2024-09-02 11:41:10'),
(56, 'Layanan Aplikasi', 'Menu yang terdapat pada aplikasi dapat berfungsi', '4', '4', '2024-09-02 11:41:10'),
(57, 'Layanan Aplikasi', 'Tersedia kontak/media untuk melaporkan keluhan dengan respon perbaikan yang cepat', '4', '4', '2024-09-02 11:41:10'),
(58, 'Layanan Aplikasi', 'Aplikasi tersedia untuk digunakan selama jam kerja dan diluar jam kerja', '4', '4', '2024-09-02 11:41:10'),
(59, 'Layanan Aplikasi', 'Aplikasi memiliki fitur yang berguna dan sesuai dengan yang saya butuhkan', '4', '4', '2024-09-02 11:41:10'),
(60, 'Layanan Aplikasi', 'Aplikasi memiliki tampilan (User Interface) yang menarik dan mudah digunakan (User Friendly)', '6', '6', '2024-09-02 11:41:10'),
(61, 'Layanan Solusi Bisnis', 'Kebutuhan (spesifikasi) solusi aplikasi/teknologi yang disampaikan sudah sesuai dan kami pahami dengan baik', '7', '7', '2024-09-02 11:41:10'),
(62, 'Layanan Solusi Bisnis', 'Pengembangan aplikasi/teknologi dilaksanakan sesuai dengan waktu kesepakatan', '7', '7', '2024-09-02 11:41:10'),
(63, 'Layanan Solusi Bisnis', 'Solusi Pengembangan Aplikasi/Teknologi untuk kebutuhan bisnis yang diberikan dengan kualitas baik sesuai dengan spesifikasi yang dibutuhkan', '7', '4', '2024-09-02 11:41:10'),
(64, 'Layanan Solusi Bisnis', 'Ketika terdapat permasalahan bisnis, terdapat minat untuk menyelesaikannya dengan sistem informasi/teknologi informasi', '7', '3', '2024-09-02 11:41:10'),
(65, 'Layanan Solusi Bisnis', 'Solusi Pengembangan Aplikasi/Teknologi untuk kebutuhan bisnis sudah terdapat petunjuk untuk penggunaannya', '4', '5', '2024-09-02 11:41:10'),
(66, 'Direktorat', 'Layanan SI/TI dapat diandalkan', '1', '2', '2024-09-02 11:41:10'),
(67, 'Direktorat', 'Layanan SI/TI tersedia sesuai dengan waktu yang dijanjikan', '4', '5', '2024-09-02 11:41:10'),
(68, 'Direktorat', 'Seluruh layanan SI/TI sudah diinformasikan kepada Anda', '4', '5', '2024-09-02 11:41:10'),
(69, 'Direktorat', 'Staff di Group OLTI selalu memberikan bantuan kepada Anda', '5', '3', '2024-09-02 11:41:10'),
(70, 'Direktorat', 'Layanan SI/TI disediakan perusahaan ditempat kerja anda', '2', '3', '2024-09-02 11:41:10'),
(71, 'Layanan EUD', 'Fasilitas EUD (PC, Laptop, Printer dll) dilakukan update', '1', '3', '2024-09-02 11:41:10'),
(72, 'Layanan EUD', 'Fasilitas EUD (PC, Laptop, Printer, dll) selalu dirawat sesuai jadwal', '4', '2', '2024-09-02 11:41:10'),
(73, 'Layanan EUD', 'Fasilitas EUD (PC, Laptop, Printer, dll) dapat digunakan dengan baik', '3', '2', '2024-09-02 11:41:10'),
(74, 'Layanan EUD', 'Jadwal Preventive Maintenance EUD (PC, Laptop, Printer, dll) selalu diinformasikan sebelum pelaksanaan kegiatan', '3', '4', '2024-09-02 11:41:10'),
(75, 'Layanan EUD', 'Adanya kepastian dalam mendapatkan perangkat EUD Desktop, Laptop, Printer, dll) sesuai dengan uraian pekerjaan (jobdesc)', '4', '5', '2024-09-02 11:41:10'),
(76, 'Layanan Internet', 'Akses internet mudah ditemukan di area Plant KTI', '2', '2', '2024-09-02 11:41:10'),
(77, 'Layanan Internet', 'Group OLTI mudah dihubungi jika terjadi error pada jaringan internet', '3', '5', '2024-09-02 11:41:10'),
(78, 'Layanan Internet', 'Anda merasa aman dalam menggunakan akses internet', '4', '3', '2024-09-02 11:41:10'),
(79, 'Layanan Internet', 'Anda memahami cara menggunakan internet yang aman', '3', '5', '2024-09-02 11:41:10'),
(80, 'Layanan Internet', 'Akses internet selalu ada disetiap ruang kerja', '5', '7', '2024-09-02 11:41:10'),
(81, 'Layanan Aplikasi', 'Menu yang terdapat pada aplikasi dapat berfungsi', '4', '2', '2024-09-02 11:41:10'),
(82, 'Layanan Aplikasi', 'Menu yang terdapat pada aplikasi dapat berfungsi', '1', '2', '2024-09-02 11:41:10'),
(83, 'Layanan Aplikasi', 'Tersedia kontak/media untuk melaporkan keluhan dengan respon perbaikan yang cepat', '3', '4', '2024-09-02 11:41:10'),
(84, 'Layanan Aplikasi', 'Aplikasi tersedia untuk digunakan selama jam kerja dan diluar jam kerja', '4', '3', '2024-09-02 11:41:10'),
(85, 'Layanan Aplikasi', 'Aplikasi memiliki fitur yang berguna dan sesuai dengan yang saya butuhkan', '3', '2', '2024-09-02 11:41:10'),
(86, 'Layanan Aplikasi', 'Aplikasi memiliki tampilan (User Interface) yang menarik dan mudah digunakan (User Friendly)', '2', '2', '2024-09-02 11:41:10'),
(87, 'Layanan Solusi Bisnis', 'Kebutuhan (spesifikasi) solusi aplikasi/teknologi yang disampaikan sudah sesuai dan kami pahami dengan baik', '2', '4', '2024-09-02 11:41:10'),
(88, 'Layanan Solusi Bisnis', 'Pengembangan aplikasi/teknologi dilaksanakan sesuai dengan waktu kesepakatan', '3', '6', '2024-09-02 11:41:10'),
(89, 'Layanan Solusi Bisnis', 'Solusi Pengembangan Aplikasi/Teknologi untuk kebutuhan bisnis yang diberikan dengan kualitas baik sesuai dengan spesifikasi yang dibutuhkan', '2', '5', '2024-09-02 11:41:10'),
(90, 'Layanan Solusi Bisnis', 'Ketika terdapat permasalahan bisnis, terdapat minat untuk menyelesaikannya dengan sistem informasi/teknologi informasi', '1', '4', '2024-09-02 11:41:10'),
(91, 'Layanan Solusi Bisnis', 'Solusi Pengembangan Aplikasi/Teknologi untuk kebutuhan bisnis sudah terdapat petunjuk untuk penggunaannya', '3', '6', '2024-09-02 11:41:10'),
(92, 'Direktorat', 'Layanan SI/TI dapat diandalkan', '1', '3', '2024-09-02 11:41:10'),
(93, 'Direktorat', 'Layanan SI/TI tersedia sesuai dengan waktu yang dijanjikan', '2', '4', '2024-09-02 11:41:10'),
(94, 'Direktorat', 'Seluruh layanan SI/TI sudah diinformasikan kepada Anda', '3', '2', '2024-09-02 11:41:10'),
(95, 'Direktorat', 'Staff di Group OLTI selalu memberikan bantuan kepada Anda', '5', '6', '2024-09-02 11:41:10'),
(96, 'Direktorat', 'Layanan SI/TI disediakan perusahaan ditempat kerja anda', '7', '5', '2024-09-02 11:41:10'),
(97, 'Layanan EUD', 'Fasilitas EUD (PC, Laptop, Printer dll) dilakukan update', '2', '4', '2024-09-02 11:41:10'),
(98, 'Layanan EUD', 'Fasilitas EUD (PC, Laptop, Printer, dll) selalu dirawat sesuai jadwal', '5', '6', '2024-09-02 11:41:10'),
(99, 'Layanan EUD', 'Fasilitas EUD (PC, Laptop, Printer, dll) dapat digunakan dengan baik', '3', '4', '2024-09-02 11:41:10'),
(100, 'Layanan EUD', 'Jadwal Preventive Maintenance EUD (PC, Laptop, Printer, dll) selalu diinformasikan sebelum pelaksanaan kegiatan', '2', '3', '2024-09-02 11:41:10'),
(101, 'Layanan EUD', 'Adanya kepastian dalam mendapatkan perangkat EUD Desktop, Laptop, Printer, dll) sesuai dengan uraian pekerjaan (jobdesc)', '4', '4', '2024-09-02 11:41:10'),
(102, 'Layanan Internet', 'Akses internet mudah ditemukan di area Plant KTI', '2', '3', '2024-09-02 11:41:10'),
(103, 'Layanan Internet', 'Group OLTI mudah dihubungi jika terjadi error pada jaringan internet', '5', '6', '2024-09-02 11:41:10'),
(104, 'Layanan Internet', 'Anda merasa aman dalam menggunakan akses internet', '5', '4', '2024-09-02 11:41:10'),
(105, 'Layanan Internet', 'Anda memahami cara menggunakan internet yang aman', '4', '5', '2024-09-02 11:41:10'),
(106, 'Layanan Internet', 'Akses internet selalu ada disetiap ruang kerja', '5', '6', '2024-09-02 11:41:10'),
(107, 'Layanan Aplikasi', 'Menu yang terdapat pada aplikasi dapat berfungsi', '1', '2', '2024-09-02 11:41:10'),
(108, 'Layanan Aplikasi', 'Tersedia kontak/media untuk melaporkan keluhan dengan respon perbaikan yang cepat', '4', '4', '2024-09-02 11:41:10'),
(109, 'Layanan Aplikasi', 'Aplikasi tersedia untuk digunakan selama jam kerja dan diluar jam kerja', '4', '5', '2024-09-02 11:41:10'),
(110, 'Layanan Aplikasi', 'Aplikasi memiliki fitur yang berguna dan sesuai dengan yang saya butuhkan', '6', '7', '2024-09-02 11:41:10'),
(111, 'Layanan Aplikasi', 'Aplikasi memiliki tampilan (User Interface) yang menarik dan mudah digunakan (User Friendly)', '7', '7', '2024-09-02 11:41:10'),
(112, 'Layanan Solusi Bisnis', 'Kebutuhan (spesifikasi) solusi aplikasi/teknologi yang disampaikan sudah sesuai dan kami pahami dengan baik', '2', '3', '2024-09-02 11:41:10'),
(113, 'Layanan Solusi Bisnis', 'Pengembangan aplikasi/teknologi dilaksanakan sesuai dengan waktu kesepakatan', '4', '5', '2024-09-02 11:41:10'),
(114, 'Layanan Solusi Bisnis', 'Solusi Pengembangan Aplikasi/Teknologi untuk kebutuhan bisnis yang diberikan dengan kualitas baik sesuai dengan spesifikasi yang dibutuhkan', '6', '5', '2024-09-02 11:41:10'),
(115, 'Layanan Solusi Bisnis', 'Ketika terdapat permasalahan bisnis, terdapat minat untuk menyelesaikannya dengan sistem informasi/teknologi informasi', '4', '6', '2024-09-02 11:41:10'),
(116, 'Layanan Solusi Bisnis', 'Solusi Pengembangan Aplikasi/Teknologi untuk kebutuhan bisnis sudah terdapat petunjuk untuk penggunaannya', '5', '7', '2024-09-02 11:41:10'),
(117, 'Direktorat', 'Layanan SI/TI dapat diandalkan', '2', '3', '2024-09-02 11:41:10'),
(118, 'Direktorat', 'Layanan SI/TI tersedia sesuai dengan waktu yang dijanjikan', '1', '2', '2024-09-02 11:41:10'),
(119, 'Direktorat', 'Seluruh layanan SI/TI sudah diinformasikan kepada Anda', '6', '6', '2024-09-02 11:41:10'),
(120, 'Direktorat', 'Staff di Group OLTI selalu memberikan bantuan kepada Anda', '4', '5', '2024-09-02 11:41:10'),
(121, 'Direktorat', 'Layanan SI/TI disediakan perusahaan ditempat kerja anda', '3', '4', '2024-09-02 11:41:10'),
(122, 'Layanan EUD', 'Fasilitas EUD (PC, Laptop, Printer dll) dilakukan update', '2', '2', '2024-09-02 11:41:10'),
(123, 'Layanan EUD', 'Fasilitas EUD (PC, Laptop, Printer, dll) selalu dirawat sesuai jadwal', '3', '4', '2024-09-02 11:41:10'),
(124, 'Layanan EUD', 'Fasilitas EUD (PC, Laptop, Printer, dll) dapat digunakan dengan baik', '4', '4', '2024-09-02 11:41:10'),
(125, 'Layanan EUD', 'Jadwal Preventive Maintenance EUD (PC, Laptop, Printer, dll) selalu diinformasikan sebelum pelaksanaan kegiatan', '4', '5', '2024-09-02 11:41:10'),
(126, 'Layanan EUD', 'Adanya kepastian dalam mendapatkan perangkat EUD Desktop, Laptop, Printer, dll) sesuai dengan uraian pekerjaan (jobdesc)', '4', '3', '2024-09-02 11:41:10'),
(127, 'Layanan Internet', 'Akses internet mudah ditemukan di area Plant KTI', '2', '6', '2024-09-02 11:41:10'),
(128, 'Layanan Internet', 'Group OLTI mudah dihubungi jika terjadi error pada jaringan internet', '5', '4', '2024-09-02 11:41:10'),
(129, 'Layanan Internet', 'Anda merasa aman dalam menggunakan akses internet', '3', '5', '2024-09-02 11:41:10'),
(130, 'Layanan Internet', 'Anda memahami cara menggunakan internet yang aman', '4', '4', '2024-09-02 11:41:10'),
(131, 'Layanan Internet', 'Akses internet selalu ada disetiap ruang kerja', '5', '6', '2024-09-02 11:41:10'),
(132, 'Layanan SAP', 'Menu yang terdapat pada aplikasi dapat berfungsi', '1', '3', '2024-09-02 11:41:10'),
(133, 'Layanan SAP', 'Tersedia kontak/media untuk melaporkan keluhan dengan respon perbaikan yang cepat', '3', '2', '2024-09-02 11:41:10'),
(134, 'Layanan SAP', 'Aplikasi tersedia untuk digunakan selama jam kerja dan diluar jam kerja', '2', '7', '2024-09-02 11:41:10'),
(135, 'Layanan SAP', 'Aplikasi memiliki fitur yang berguna dan sesuai dengan yang saya butuhkan', '6', '5', '2024-09-02 11:41:10'),
(136, 'Layanan SAP', 'Aplikasi memiliki tampilan (User Interface) yang menarik dan mudah digunakan (User Friendly)', '4', '7', '2024-09-02 11:41:10'),
(137, 'Layanan Aplikasi', 'Menu yang terdapat pada aplikasi dapat berfungsi', '3', '4', '2024-09-02 11:41:10'),
(138, 'Layanan Aplikasi', 'Tersedia kontak/media untuk melaporkan keluhan dengan respon perbaikan yang cepat', '5', '4', '2024-09-02 11:41:10'),
(139, 'Layanan Aplikasi', 'Aplikasi tersedia untuk digunakan selama jam kerja dan diluar jam kerja', '3', '3', '2024-09-02 11:41:10'),
(140, 'Layanan Aplikasi', 'Aplikasi memiliki fitur yang berguna dan sesuai dengan yang saya butuhkan', '4', '4', '2024-09-02 11:41:10'),
(141, 'Layanan Aplikasi', 'Aplikasi memiliki tampilan (User Interface) yang menarik dan mudah digunakan (User Friendly)', '3', '2', '2024-09-02 11:41:10'),
(142, 'Layanan Solusi Bisnis', 'Kebutuhan (spesifikasi) solusi aplikasi/teknologi yang disampaikan sudah sesuai dan kami pahami dengan baik', '2', '1', '2024-09-02 11:41:10'),
(143, 'Layanan Solusi Bisnis', 'Pengembangan aplikasi/teknologi dilaksanakan sesuai dengan waktu kesepakatan', '1', '2', '2024-09-02 11:41:10'),
(144, 'Layanan Solusi Bisnis', 'Solusi Pengembangan Aplikasi/Teknologi untuk kebutuhan bisnis yang diberikan dengan kualitas baik sesuai dengan spesifikasi yang dibutuhkan', '2', '3', '2024-09-02 11:41:10'),
(145, 'Layanan Solusi Bisnis', 'Ketika terdapat permasalahan bisnis, terdapat minat untuk menyelesaikannya dengan sistem informasi/teknologi informasi', '3', '4', '2024-09-02 11:41:10'),
(146, 'Layanan Solusi Bisnis', 'Solusi Pengembangan Aplikasi/Teknologi untuk kebutuhan bisnis sudah terdapat petunjuk untuk penggunaannya', '4', '4', '2024-09-02 11:41:10'),
(147, 'Direktorat', 'Layanan SI/TI dapat diandalkan', '5', '6', '2024-09-02 11:41:10'),
(148, 'Direktorat', 'Layanan SI/TI tersedia sesuai dengan waktu yang dijanjikan', '6', '7', '2024-09-02 11:41:10'),
(149, 'Direktorat', 'Seluruh layanan SI/TI sudah diinformasikan kepada Anda', '5', '6', '2024-09-02 11:41:10'),
(150, 'Direktorat', 'Staff di Group OLTI selalu memberikan bantuan kepada Anda', '4', '5', '2024-09-02 11:41:10'),
(151, 'Direktorat', 'Layanan SI/TI disediakan perusahaan ditempat kerja anda', '3', '1', '2024-09-02 11:41:10'),
(152, 'Layanan EUD', 'Fasilitas EUD (PC, Laptop, Printer dll) dilakukan update', '2', '3', '2024-09-02 11:41:10'),
(153, 'Layanan EUD', 'Fasilitas EUD (PC, Laptop, Printer, dll) selalu dirawat sesuai jadwal', '5', '7', '2024-09-02 11:41:10'),
(154, 'Layanan EUD', 'Fasilitas EUD (PC, Laptop, Printer, dll) dapat digunakan dengan baik', '6', '4', '2024-09-02 11:41:10'),
(155, 'Layanan EUD', 'Jadwal Preventive Maintenance EUD (PC, Laptop, Printer, dll) selalu diinformasikan sebelum pelaksanaan kegiatan', '4', '5', '2024-09-02 11:41:10'),
(156, 'Layanan EUD', 'Adanya kepastian dalam mendapatkan perangkat EUD Desktop, Laptop, Printer, dll) sesuai dengan uraian pekerjaan (jobdesc)', '2', '3', '2024-09-02 11:41:10'),
(157, 'Layanan Internet', 'Akses internet mudah ditemukan di area Plant KTI', '1', '4', '2024-09-02 11:41:10'),
(158, 'Layanan Internet', 'Group OLTI mudah dihubungi jika terjadi error pada jaringan internet', '2', '4', '2024-09-02 11:41:10'),
(159, 'Layanan Internet', 'Anda merasa aman dalam menggunakan akses internet', '5', '6', '2024-09-02 11:41:10'),
(160, 'Layanan Internet', 'Anda memahami cara menggunakan internet yang aman', '5', '2', '2024-09-02 11:41:10'),
(161, 'Layanan Internet', 'Akses internet selalu ada disetiap ruang kerja', '2', '4', '2024-09-02 11:41:10'),
(162, 'Layanan Aplikasi', 'Menu yang terdapat pada aplikasi dapat berfungsi', '3', '2', '2024-09-02 11:41:10'),
(163, 'Layanan Aplikasi', 'Tersedia kontak/media untuk melaporkan keluhan dengan respon perbaikan yang cepat', '3', '4', '2024-09-02 11:41:10'),
(164, 'Layanan Aplikasi', 'Aplikasi tersedia untuk digunakan selama jam kerja dan diluar jam kerja', '2', '3', '2024-09-02 11:41:10'),
(165, 'Layanan Aplikasi', 'Aplikasi memiliki fitur yang berguna dan sesuai dengan yang saya butuhkan', '3', '4', '2024-09-02 11:41:10'),
(166, 'Layanan Aplikasi', 'Aplikasi memiliki tampilan (User Interface) yang menarik dan mudah digunakan (User Friendly)', '3', '2', '2024-09-02 11:41:10'),
(167, 'Layanan Solusi Bisnis', 'Kebutuhan (spesifikasi) solusi aplikasi/teknologi yang disampaikan sudah sesuai dan kami pahami dengan baik', '1', '7', '2024-09-02 11:41:10'),
(168, 'Layanan Solusi Bisnis', 'Pengembangan aplikasi/teknologi dilaksanakan sesuai dengan waktu kesepakatan', '2', '6', '2024-09-02 11:41:10'),
(169, 'Layanan Solusi Bisnis', 'Solusi Pengembangan Aplikasi/Teknologi untuk kebutuhan bisnis yang diberikan dengan kualitas baik sesuai dengan spesifikasi yang dibutuhkan', '4', '5', '2024-09-02 11:41:10'),
(170, 'Layanan Solusi Bisnis', 'Ketika terdapat permasalahan bisnis, terdapat minat untuk menyelesaikannya dengan sistem informasi/teknologi informasi', '6', '7', '2024-09-02 11:41:10'),
(171, 'Layanan Solusi Bisnis', 'Solusi Pengembangan Aplikasi/Teknologi untuk kebutuhan bisnis sudah terdapat petunjuk untuk penggunaannya', '2', '7', '2024-09-02 11:41:10'),
(172, 'Direktorat', 'Layanan SI/TI dapat diandalkan', '1', '2', '2024-09-02 11:41:10'),
(173, 'Direktorat', 'Layanan SI/TI tersedia sesuai dengan waktu yang dijanjikan', '3', '2', '2024-09-02 11:41:10'),
(174, 'Direktorat', 'Seluruh layanan SI/TI sudah diinformasikan kepada Anda', '1', '2', '2024-09-02 11:41:10'),
(175, 'Direktorat', 'Staff di Group OLTI selalu memberikan bantuan kepada Anda', '2', '5', '2024-09-02 11:41:10'),
(176, 'Direktorat', 'Layanan SI/TI disediakan perusahaan ditempat kerja anda', '5', '6', '2024-09-02 11:41:10'),
(177, 'Layanan EUD', 'Fasilitas EUD (PC, Laptop, Printer dll) dilakukan update', '1', '3', '2024-09-02 11:41:10'),
(178, 'Layanan EUD', 'Fasilitas EUD (PC, Laptop, Printer, dll) selalu dirawat sesuai jadwal', '4', '5', '2024-09-02 11:41:10'),
(179, 'Layanan EUD', 'Fasilitas EUD (PC, Laptop, Printer, dll) dapat digunakan dengan baik', '3', '4', '2024-09-02 11:41:10'),
(180, 'Layanan EUD', 'Jadwal Preventive Maintenance EUD (PC, Laptop, Printer, dll) selalu diinformasikan sebelum pelaksanaan kegiatan', '5', '6', '2024-09-02 11:41:10'),
(181, 'Layanan EUD', 'Adanya kepastian dalam mendapatkan perangkat EUD Desktop, Laptop, Printer, dll) sesuai dengan uraian pekerjaan (jobdesc)', '3', '2', '2024-09-02 11:41:10'),
(182, 'Layanan Internet', 'Akses internet mudah ditemukan di area Plant KTI', '2', '4', '2024-09-02 11:41:10'),
(183, 'Layanan Internet', 'Group OLTI mudah dihubungi jika terjadi error pada jaringan internet', '5', '6', '2024-09-02 11:41:10'),
(184, 'Layanan Internet', 'Anda merasa aman dalam menggunakan akses internet', '4', '3', '2024-09-02 11:41:10'),
(185, 'Layanan Internet', 'Anda memahami cara menggunakan internet yang aman', '4', '5', '2024-09-02 11:41:10'),
(186, 'Layanan Internet', 'Akses internet selalu ada disetiap ruang kerja', '4', '6', '2024-09-02 11:41:10'),
(187, 'Layanan Aplikasi', 'Menu yang terdapat pada aplikasi dapat berfungsi', '2', '1', '2024-09-02 11:41:10'),
(188, 'Layanan Aplikasi', 'Tersedia kontak/media untuk melaporkan keluhan dengan respon perbaikan yang cepat', '5', '6', '2024-09-02 11:41:10'),
(189, 'Layanan Aplikasi', 'Aplikasi tersedia untuk digunakan selama jam kerja dan diluar jam kerja', '5', '6', '2024-09-02 11:41:10'),
(190, 'Layanan Aplikasi', 'Aplikasi memiliki fitur yang berguna dan sesuai dengan yang saya butuhkan', '4', '3', '2024-09-02 11:41:10'),
(191, 'Layanan Aplikasi', 'Aplikasi memiliki tampilan (User Interface) yang menarik dan mudah digunakan (User Friendly)', '4', '5', '2024-09-02 11:41:10'),
(192, 'Layanan Solusi Bisnis', 'Kebutuhan (spesifikasi) solusi aplikasi/teknologi yang disampaikan sudah sesuai dan kami pahami dengan baik', '4', '3', '2024-09-02 11:41:10'),
(193, 'Layanan Solusi Bisnis', 'Pengembangan aplikasi/teknologi dilaksanakan sesuai dengan waktu kesepakatan', '5', '4', '2024-09-02 11:41:10'),
(194, 'Layanan Solusi Bisnis', 'Solusi Pengembangan Aplikasi/Teknologi untuk kebutuhan bisnis yang diberikan dengan kualitas baik sesuai dengan spesifikasi yang dibutuhkan', '4', '5', '2024-09-02 11:41:10'),
(195, 'Layanan Solusi Bisnis', 'Ketika terdapat permasalahan bisnis, terdapat minat untuk menyelesaikannya dengan sistem informasi/teknologi informasi', '6', '7', '2024-09-02 11:41:10'),
(196, 'Layanan Solusi Bisnis', 'Solusi Pengembangan Aplikasi/Teknologi untuk kebutuhan bisnis sudah terdapat petunjuk untuk penggunaannya', '6', '7', '2024-09-02 11:41:10'),
(197, 'Direktorat', 'Layanan SI/TI dapat diandalkan', '1', '2', '2024-09-02 11:41:10'),
(198, 'Direktorat', 'Layanan SI/TI tersedia sesuai dengan waktu yang dijanjikan', '4', '5', '2024-09-02 11:41:10'),
(199, 'Direktorat', 'Seluruh layanan SI/TI sudah diinformasikan kepada Anda', '3', '2', '2024-09-02 11:41:10'),
(200, 'Direktorat', 'Staff di Group OLTI selalu memberikan bantuan kepada Anda', '2', '5', '2024-09-02 11:41:10'),
(201, 'Direktorat', 'Layanan SI/TI disediakan perusahaan ditempat kerja anda', '5', '6', '2024-09-02 11:41:10'),
(202, 'Layanan EUD', 'Fasilitas EUD (PC, Laptop, Printer dll) dilakukan update', '1', '6', '2024-09-02 11:41:10'),
(203, 'Layanan EUD', 'Fasilitas EUD (PC, Laptop, Printer, dll) selalu dirawat sesuai jadwal', '5', '7', '2024-09-02 11:41:10'),
(204, 'Layanan EUD', 'Fasilitas EUD (PC, Laptop, Printer, dll) dapat digunakan dengan baik', '6', '2', '2024-09-02 11:41:10'),
(205, 'Layanan EUD', 'Jadwal Preventive Maintenance EUD (PC, Laptop, Printer, dll) selalu diinformasikan sebelum pelaksanaan kegiatan', '1', '3', '2024-09-02 11:41:10'),
(206, 'Layanan EUD', 'Adanya kepastian dalam mendapatkan perangkat EUD Desktop, Laptop, Printer, dll) sesuai dengan uraian pekerjaan (jobdesc)', '2', '4', '2024-09-02 11:41:10'),
(207, 'Layanan Internet', 'Akses internet mudah ditemukan di area Plant KTI', '1', '3', '2024-09-02 11:41:10'),
(208, 'Layanan Internet', 'Group OLTI mudah dihubungi jika terjadi error pada jaringan internet', '3', '5', '2024-09-02 11:41:10'),
(209, 'Layanan Internet', 'Anda merasa aman dalam menggunakan akses internet', '6', '4', '2024-09-02 11:41:10'),
(210, 'Layanan Internet', 'Anda memahami cara menggunakan internet yang aman', '6', '5', '2024-09-02 11:41:10'),
(211, 'Layanan Internet', 'Akses internet selalu ada disetiap ruang kerja', '3', '7', '2024-09-02 11:41:10'),
(212, 'Layanan Aplikasi', 'Menu yang terdapat pada aplikasi dapat berfungsi', '7', '6', '2024-09-02 11:41:10'),
(213, 'Layanan Aplikasi', 'Tersedia kontak/media untuk melaporkan keluhan dengan respon perbaikan yang cepat', '5', '6', '2024-09-02 11:41:10'),
(214, 'Layanan Aplikasi', 'Aplikasi tersedia untuk digunakan selama jam kerja dan diluar jam kerja', '6', '5', '2024-09-02 11:41:10'),
(215, 'Layanan Aplikasi', 'Aplikasi memiliki fitur yang berguna dan sesuai dengan yang saya butuhkan', '4', '4', '2024-09-02 11:41:10'),
(216, 'Layanan Aplikasi', 'Aplikasi memiliki tampilan (User Interface) yang menarik dan mudah digunakan (User Friendly)', '4', '5', '2024-09-02 11:41:10'),
(217, 'Layanan Solusi Bisnis', 'Kebutuhan (spesifikasi) solusi aplikasi/teknologi yang disampaikan sudah sesuai dan kami pahami dengan baik', '1', '5', '2024-09-02 11:41:10'),
(218, 'Layanan Solusi Bisnis', 'Pengembangan aplikasi/teknologi dilaksanakan sesuai dengan waktu kesepakatan', '4', '6', '2024-09-02 11:41:10'),
(219, 'Layanan Solusi Bisnis', 'Solusi Pengembangan Aplikasi/Teknologi untuk kebutuhan bisnis yang diberikan dengan kualitas baik sesuai dengan spesifikasi yang dibutuhkan', '5', '7', '2024-09-02 11:41:10'),
(220, 'Layanan Solusi Bisnis', 'Ketika terdapat permasalahan bisnis, terdapat minat untuk menyelesaikannya dengan sistem informasi/teknologi informasi', '6', '5', '2024-09-02 11:41:10'),
(221, 'Layanan Solusi Bisnis', 'Solusi Pengembangan Aplikasi/Teknologi untuk kebutuhan bisnis sudah terdapat petunjuk untuk penggunaannya', '4', '5', '2024-09-02 11:41:10'),
(222, 'Direktorat', 'Layanan SI/TI dapat diandalkan', '3', '1', '2024-09-02 11:41:10'),
(223, 'Direktorat', 'Layanan SI/TI tersedia sesuai dengan waktu yang dijanjikan', '3', '4', '2024-09-02 11:41:10'),
(224, 'Direktorat', 'Seluruh layanan SI/TI sudah diinformasikan kepada Anda', '5', '6', '2024-09-02 11:41:10'),
(225, 'Direktorat', 'Staff di Group OLTI selalu memberikan bantuan kepada Anda', '4', '2', '2024-09-02 11:41:10'),
(226, 'Direktorat', 'Layanan SI/TI disediakan perusahaan ditempat kerja anda', '3', '4', '2024-09-02 11:41:10'),
(227, 'Layanan EUD', 'Fasilitas EUD (PC, Laptop, Printer dll) dilakukan update', '5', '4', '2024-09-02 11:41:10'),
(228, 'Layanan EUD', 'Fasilitas EUD (PC, Laptop, Printer, dll) selalu dirawat sesuai jadwal', '3', '6', '2024-09-02 11:41:10'),
(229, 'Layanan EUD', 'Fasilitas EUD (PC, Laptop, Printer, dll) dapat digunakan dengan baik', '6', '7', '2024-09-02 11:41:10'),
(230, 'Layanan EUD', 'Jadwal Preventive Maintenance EUD (PC, Laptop, Printer, dll) selalu diinformasikan sebelum pelaksanaan kegiatan', '6', '4', '2024-09-02 11:41:10'),
(231, 'Layanan EUD', 'Adanya kepastian dalam mendapatkan perangkat EUD Desktop, Laptop, Printer, dll) sesuai dengan uraian pekerjaan (jobdesc)', '4', '6', '2024-09-02 11:41:10'),
(232, 'Layanan Internet', 'Akses internet mudah ditemukan di area Plant KTI', '4', '2', '2024-09-02 11:41:10'),
(233, 'Layanan Internet', 'Group OLTI mudah dihubungi jika terjadi error pada jaringan internet', '2', '1', '2024-09-02 11:41:10'),
(234, 'Layanan Internet', 'Anda merasa aman dalam menggunakan akses internet', '2', '3', '2024-09-02 11:41:10'),
(235, 'Layanan Internet', 'Anda memahami cara menggunakan internet yang aman', '3', '4', '2024-09-02 11:41:10'),
(236, 'Layanan Internet', 'Akses internet selalu ada disetiap ruang kerja', '4', '5', '2024-09-02 11:41:10'),
(237, 'Layanan Aplikasi', 'Menu yang terdapat pada aplikasi dapat berfungsi', '3', '2', '2024-09-02 11:41:10'),
(238, 'Layanan Aplikasi', 'Tersedia kontak/media untuk melaporkan keluhan dengan respon perbaikan yang cepat', '4', '5', '2024-09-02 11:41:10'),
(239, 'Layanan Aplikasi', 'Aplikasi tersedia untuk digunakan selama jam kerja dan diluar jam kerja', '5', '6', '2024-09-02 11:41:10'),
(240, 'Layanan Aplikasi', 'Aplikasi memiliki fitur yang berguna dan sesuai dengan yang saya butuhkan', '4', '3', '2024-09-02 11:41:10'),
(241, 'Layanan Aplikasi', 'Aplikasi memiliki tampilan (User Interface) yang menarik dan mudah digunakan (User Friendly)', '2', '1', '2024-09-02 11:41:10'),
(242, 'Layanan Solusi Bisnis', 'Kebutuhan (spesifikasi) solusi aplikasi/teknologi yang disampaikan sudah sesuai dan kami pahami dengan baik', '1', '2', '2024-09-02 11:41:10'),
(243, 'Layanan Solusi Bisnis', 'Pengembangan aplikasi/teknologi dilaksanakan sesuai dengan waktu kesepakatan', '4', '5', '2024-09-02 11:41:10'),
(244, 'Layanan Solusi Bisnis', 'Solusi Pengembangan Aplikasi/Teknologi untuk kebutuhan bisnis yang diberikan dengan kualitas baik sesuai dengan spesifikasi yang dibutuhkan', '3', '3', '2024-09-02 11:41:10'),
(245, 'Layanan Solusi Bisnis', 'Ketika terdapat permasalahan bisnis, terdapat minat untuk menyelesaikannya dengan sistem informasi/teknologi informasi', '3', '2', '2024-09-02 11:41:10'),
(246, 'Layanan Solusi Bisnis', 'Solusi Pengembangan Aplikasi/Teknologi untuk kebutuhan bisnis sudah terdapat petunjuk untuk penggunaannya', '2', '3', '2024-09-02 11:41:10'),
(247, 'Direktorat', 'Layanan SI/TI dapat diandalkan', '2', '1', '2024-09-02 11:41:10'),
(248, 'Direktorat', 'Layanan SI/TI tersedia sesuai dengan waktu yang dijanjikan', '2', '1', '2024-09-02 11:41:10'),
(249, 'Direktorat', 'Seluruh layanan SI/TI sudah diinformasikan kepada Anda', '2', '3', '2024-09-02 11:41:10'),
(250, 'Direktorat', 'Staff di Group OLTI selalu memberikan bantuan kepada Anda', '4', '5', '2024-09-02 11:41:10'),
(251, 'Direktorat', 'Layanan SI/TI disediakan perusahaan ditempat kerja anda', '5', '4', '2024-09-02 11:41:10'),
(252, 'Layanan EUD', 'Fasilitas EUD (PC, Laptop, Printer dll) dilakukan update', '2', '3', '2024-09-02 11:41:10'),
(253, 'Layanan EUD', 'Fasilitas EUD (PC, Laptop, Printer, dll) selalu dirawat sesuai jadwal', '4', '3', '2024-09-02 11:41:10'),
(254, 'Layanan EUD', 'Fasilitas EUD (PC, Laptop, Printer, dll) dapat digunakan dengan baik', '2', '3', '2024-09-02 11:41:10'),
(255, 'Layanan EUD', 'Jadwal Preventive Maintenance EUD (PC, Laptop, Printer, dll) selalu diinformasikan sebelum pelaksanaan kegiatan', '2', '1', '2024-09-02 11:41:10'),
(256, 'Layanan EUD', 'Adanya kepastian dalam mendapatkan perangkat EUD Desktop, Laptop, Printer, dll) sesuai dengan uraian pekerjaan (jobdesc)', '1', '2', '2024-09-02 11:41:10'),
(257, 'Layanan Internet', 'Akses internet mudah ditemukan di area Plant KTI', '2', '4', '2024-09-02 11:41:10'),
(258, 'Layanan Internet', 'Group OLTI mudah dihubungi jika terjadi error pada jaringan internet', '5', '4', '2024-09-02 11:41:10'),
(259, 'Layanan Internet', 'Anda merasa aman dalam menggunakan akses internet', '5', '6', '2024-09-02 11:41:10'),
(260, 'Layanan Internet', 'Anda memahami cara menggunakan internet yang aman', '6', '5', '2024-09-02 11:41:10'),
(261, 'Layanan Internet', 'Akses internet selalu ada disetiap ruang kerja', '5', '6', '2024-09-02 11:41:10'),
(262, 'Layanan SAP', 'Menu yang terdapat pada aplikasi dapat berfungsi', '1', '2', '2024-09-02 11:41:10'),
(263, 'Layanan SAP', 'Tersedia kontak/media untuk melaporkan keluhan dengan respon perbaikan yang cepat', '2', '1', '2024-09-02 11:41:10'),
(264, 'Layanan SAP', 'Aplikasi tersedia untuk digunakan selama jam kerja dan diluar jam kerja', '1', '2', '2024-09-02 11:41:10'),
(265, 'Layanan SAP', 'Aplikasi memiliki fitur yang berguna dan sesuai dengan yang saya butuhkan', '3', '4', '2024-09-02 11:41:10'),
(266, 'Layanan SAP', 'Aplikasi memiliki tampilan (User Interface) yang menarik dan mudah digunakan (User Friendly)', '4', '5', '2024-09-02 11:41:10'),
(267, 'Layanan Aplikasi', 'Menu yang terdapat pada aplikasi dapat berfungsi', '3', '2', '2024-09-02 11:41:10'),
(268, 'Layanan Aplikasi', 'Tersedia kontak/media untuk melaporkan keluhan dengan respon perbaikan yang cepat', '3', '2', '2024-09-02 11:41:10'),
(269, 'Layanan Aplikasi', 'Aplikasi tersedia untuk digunakan selama jam kerja dan diluar jam kerja', '2', '1', '2024-09-02 11:41:10'),
(270, 'Layanan Aplikasi', 'Aplikasi memiliki fitur yang berguna dan sesuai dengan yang saya butuhkan', '2', '4', '2024-09-02 11:41:10'),
(271, 'Layanan Aplikasi', 'Aplikasi memiliki tampilan (User Interface) yang menarik dan mudah digunakan (User Friendly)', '4', '3', '2024-09-02 11:41:10'),
(272, 'Layanan Solusi Bisnis', 'Kebutuhan (spesifikasi) solusi aplikasi/teknologi yang disampaikan sudah sesuai dan kami pahami dengan baik', '1', '2', '2024-09-02 11:41:10'),
(273, 'Layanan Solusi Bisnis', 'Pengembangan aplikasi/teknologi dilaksanakan sesuai dengan waktu kesepakatan', '5', '4', '2024-09-02 11:41:10'),
(274, 'Layanan Solusi Bisnis', 'Solusi Pengembangan Aplikasi/Teknologi untuk kebutuhan bisnis yang diberikan dengan kualitas baik sesuai dengan spesifikasi yang dibutuhkan', '4', '3', '2024-09-02 11:41:10'),
(275, 'Layanan Solusi Bisnis', 'Ketika terdapat permasalahan bisnis, terdapat minat untuk menyelesaikannya dengan sistem informasi/teknologi informasi', '3', '2', '2024-09-02 11:41:10'),
(276, 'Layanan Solusi Bisnis', 'Solusi Pengembangan Aplikasi/Teknologi untuk kebutuhan bisnis sudah terdapat petunjuk untuk penggunaannya', '2', '3', '2024-09-02 11:41:10'),
(277, 'Direktorat', 'Layanan SI/TI dapat diandalkan', '1', '2', '2024-09-02 11:41:10'),
(278, 'Direktorat', 'Layanan SI/TI tersedia sesuai dengan waktu yang dijanjikan', '3', '2', '2024-09-02 11:41:10'),
(279, 'Direktorat', 'Seluruh layanan SI/TI sudah diinformasikan kepada Anda', '2', '3', '2024-09-02 11:41:10'),
(280, 'Direktorat', 'Staff di Group OLTI selalu memberikan bantuan kepada Anda', '4', '4', '2024-09-02 11:41:10'),
(281, 'Direktorat', 'Layanan SI/TI disediakan perusahaan ditempat kerja anda', '3', '1', '2024-09-02 11:41:10'),
(282, 'Direktorat', 'Layanan SI/TI dapat diandalkan', '4', '5', '2024-09-02 11:41:10'),
(283, 'Direktorat', 'Layanan SI/TI tersedia sesuai dengan waktu yang dijanjikan', '4', '5', '2024-09-02 11:41:10'),
(284, 'Direktorat', 'Seluruh layanan SI/TI sudah diinformasikan kepada Anda', '4', '5', '2024-09-02 11:41:10'),
(285, 'Direktorat', 'Staff di Group OLTI selalu memberikan bantuan kepada Anda', '4', '5', '2024-09-02 11:41:10'),
(286, 'Direktorat', 'Layanan SI/TI disediakan perusahaan ditempat kerja anda', '4', '5', '2024-09-02 11:41:10'),
(287, 'Direktorat', 'Layanan SI/TI dapat diandalkan', '4', '5', '2024-09-02 11:41:10'),
(288, 'Direktorat', 'Layanan SI/TI tersedia sesuai dengan waktu yang dijanjikan', '4', '5', '2024-09-02 11:41:10'),
(289, 'Direktorat', 'Seluruh layanan SI/TI sudah diinformasikan kepada Anda', '4', '5', '2024-09-02 11:41:10'),
(290, 'Direktorat', 'Staff di Group OLTI selalu memberikan bantuan kepada Anda', '4', '5', '2024-09-02 11:41:10'),
(291, 'Direktorat', 'Layanan SI/TI disediakan perusahaan ditempat kerja anda', '4', '5', '2024-09-02 11:41:10'),
(292, 'Direktorat', 'Layanan SI/TI dapat diandalkan', '7', '7', '2024-09-02 11:41:10'),
(293, 'Direktorat', 'Layanan SI/TI tersedia sesuai dengan waktu yang dijanjikan', '6', '6', '2024-09-02 11:41:10'),
(294, 'Direktorat', 'Seluruh layanan SI/TI sudah diinformasikan kepada Anda', '5', '6', '2024-09-02 11:41:10'),
(295, 'Direktorat', 'Staff di Group OLTI selalu memberikan bantuan kepada Anda', '6', '7', '2024-09-02 11:41:10'),
(296, 'Direktorat', 'Layanan SI/TI disediakan perusahaan ditempat kerja anda', '7', '6', '2024-09-02 11:41:10'),
(297, 'Direktorat', 'Layanan SI/TI dapat diandalkan', '7', '7', '2024-09-02 11:41:10'),
(298, 'Direktorat', 'Layanan SI/TI tersedia sesuai dengan waktu yang dijanjikan', '7', '7', '2024-09-02 11:41:10'),
(299, 'Direktorat', 'Seluruh layanan SI/TI sudah diinformasikan kepada Anda', '7', '7', '2024-09-02 11:41:10'),
(300, 'Direktorat', 'Staff di Group OLTI selalu memberikan bantuan kepada Anda', '6', '6', '2024-09-02 11:41:10'),
(301, 'Direktorat', 'Layanan SI/TI disediakan perusahaan ditempat kerja anda', '6', '7', '2024-09-02 11:41:10'),
(302, 'Direktorat', 'Layanan SI/TI dapat diandalkan', '4', '7', '2024-09-02 11:41:10'),
(303, 'Direktorat', 'Layanan SI/TI tersedia sesuai dengan waktu yang dijanjikan', '4', '7', '2024-09-02 11:41:10'),
(304, 'Direktorat', 'Seluruh layanan SI/TI sudah diinformasikan kepada Anda', '4', '7', '2024-09-02 11:41:10'),
(305, 'Direktorat', 'Staff di Group OLTI selalu memberikan bantuan kepada Anda', '3', '6', '2024-09-02 11:41:10'),
(306, 'Direktorat', 'Layanan SI/TI disediakan perusahaan ditempat kerja anda', '3', '7', '2024-09-02 11:41:10'),
(307, 'Layanan Aplikasi', 'Menu yang terdapat pada aplikasi dapat berfungsi', '6', '7', '2024-09-02 11:41:10'),
(308, 'Layanan Aplikasi', 'Tersedia kontak/media untuk melaporkan keluhan dengan respon perbaikan yang cepat', '6', '7', '2024-09-02 11:41:10'),
(309, 'Layanan Aplikasi', 'Aplikasi tersedia untuk digunakan selama jam kerja dan diluar jam kerja', '6', '5', '2024-09-02 11:41:10'),
(310, 'Layanan Aplikasi', 'Aplikasi memiliki fitur yang berguna dan sesuai dengan yang saya butuhkan', '4', '3', '2024-09-02 11:41:10'),
(311, 'Layanan Aplikasi', 'Aplikasi memiliki tampilan (User Interface) yang menarik dan mudah digunakan (User Friendly)', '5', '5', '2024-09-02 11:41:10'),
(312, 'Layanan Aplikasi', 'Menu yang terdapat pada aplikasi dapat berfungsi', '1', '6', '2024-09-02 11:41:10'),
(313, 'Layanan Aplikasi', 'Tersedia kontak/media untuk melaporkan keluhan dengan respon perbaikan yang cepat', '1', '1', '2024-09-02 11:41:10'),
(314, 'Layanan Aplikasi', 'Aplikasi tersedia untuk digunakan selama jam kerja dan diluar jam kerja', '4', '3', '2024-09-02 11:41:10'),
(315, 'Layanan Aplikasi', 'Aplikasi memiliki fitur yang berguna dan sesuai dengan yang saya butuhkan', '3', '2', '2024-09-02 11:41:10'),
(316, 'Layanan Aplikasi', 'Aplikasi memiliki tampilan (User Interface) yang menarik dan mudah digunakan (User Friendly)', '2', '3', '2024-09-02 11:41:10'),
(317, 'Direktorat', 'Layanan SI/TI dapat diandalkan', '6', '7', '2024-09-02 11:41:10'),
(318, 'Direktorat', 'Layanan SI/TI tersedia sesuai dengan waktu yang dijanjikan', '6', '5', '2024-09-02 11:41:10'),
(319, 'Direktorat', 'Seluruh layanan SI/TI sudah diinformasikan kepada Anda', '6', '7', '2024-09-02 11:41:10'),
(320, 'Direktorat', 'Staff di Group OLTI selalu memberikan bantuan kepada Anda', '3', '4', '2024-09-02 11:41:10'),
(321, 'Direktorat', 'Layanan SI/TI disediakan perusahaan ditempat kerja anda', '4', '5', '2024-09-02 11:41:10'),
(322, 'Layanan EUD', 'Fasilitas EUD (PC, Laptop, Printer dll) dilakukan update', '2', '3', '2024-09-02 11:41:10'),
(323, 'Layanan EUD', 'Fasilitas EUD (PC, Laptop, Printer, dll) selalu dirawat sesuai jadwal', '5', '6', '2024-09-02 11:41:10'),
(324, 'Layanan EUD', 'Fasilitas EUD (PC, Laptop, Printer, dll) dapat digunakan dengan baik', '4', '3', '2024-09-02 11:41:10'),
(325, 'Layanan EUD', 'Jadwal Preventive Maintenance EUD (PC, Laptop, Printer, dll) selalu diinformasikan sebelum pelaksanaan kegiatan', '3', '2', '2024-09-02 11:41:10'),
(326, 'Layanan EUD', 'Adanya kepastian dalam mendapatkan perangkat EUD Desktop, Laptop, Printer, dll) sesuai dengan uraian pekerjaan (jobdesc)', '3', '4', '2024-09-02 11:41:10'),
(327, 'Layanan Internet', 'Akses internet mudah ditemukan di area Plant KTI', '7', '7', '2024-09-02 11:41:10'),
(328, 'Layanan Internet', 'Group OLTI mudah dihubungi jika terjadi error pada jaringan internet', '7', '7', '2024-09-02 11:41:10'),
(329, 'Layanan Internet', 'Anda merasa aman dalam menggunakan akses internet', '7', '7', '2024-09-02 11:41:10'),
(330, 'Layanan Internet', 'Anda memahami cara menggunakan internet yang aman', '7', '7', '2024-09-02 11:41:10'),
(331, 'Layanan Internet', 'Akses internet selalu ada disetiap ruang kerja', '7', '7', '2024-09-02 11:41:10'),
(332, 'Layanan CCTV', 'CCTV dapat diakses kapanpun', '7', '7', '2024-09-02 11:41:10'),
(333, 'Layanan CCTV', 'Tersedia kontak/media untuk melaporkan keluhan dengan respon perbaikan yang cepat', '7', '7', '2024-09-02 11:41:10'),
(334, 'Layanan CCTV', 'CCTV tersedia selama 24 Jam', '7', '7', '2024-09-02 11:41:10'),
(335, 'Layanan CCTV', 'Preventive Maintenance diinformasikan sebelum pelaksanaan kegiatan', '7', '7', '2024-09-02 11:41:10'),
(336, 'Layanan CCTV', 'CCTV sudah mengcover / mencakup area yang dibutuhkan', '7', '7', '2024-09-02 11:41:10'),
(337, 'Layanan Aplikasi', 'Menu yang terdapat pada aplikasi dapat berfungsi', '6', '7', '2024-09-02 11:41:10'),
(338, 'Layanan Aplikasi', 'Tersedia kontak/media untuk melaporkan keluhan dengan respon perbaikan yang cepat', '6', '5', '2024-09-02 11:41:10'),
(339, 'Layanan Aplikasi', 'Aplikasi tersedia untuk digunakan selama jam kerja dan diluar jam kerja', '6', '7', '2024-09-02 11:41:10'),
(340, 'Layanan Aplikasi', 'Aplikasi memiliki fitur yang berguna dan sesuai dengan yang saya butuhkan', '6', '6', '2024-09-02 11:41:10'),
(341, 'Layanan Aplikasi', 'Aplikasi memiliki tampilan (User Interface) yang menarik dan mudah digunakan (User Friendly)', '6', '5', '2024-09-02 11:41:10'),
(342, 'Layanan Solusi Bisnis', 'Kebutuhan (spesifikasi) solusi aplikasi/teknologi yang disampaikan sudah sesuai dan kami pahami dengan baik', '5', '7', '2024-09-02 11:41:10'),
(343, 'Layanan Solusi Bisnis', 'Pengembangan aplikasi/teknologi dilaksanakan sesuai dengan waktu kesepakatan', '6', '7', '2024-09-02 11:41:10'),
(344, 'Layanan Solusi Bisnis', 'Solusi Pengembangan Aplikasi/Teknologi untuk kebutuhan bisnis yang diberikan dengan kualitas baik sesuai dengan spesifikasi yang dibutuhkan', '6', '5', '2024-09-02 11:41:10'),
(345, 'Layanan Solusi Bisnis', 'Ketika terdapat permasalahan bisnis, terdapat minat untuk menyelesaikannya dengan sistem informasi/teknologi informasi', '5', '7', '2024-09-02 11:41:10'),
(346, 'Layanan Solusi Bisnis', 'Solusi Pengembangan Aplikasi/Teknologi untuk kebutuhan bisnis sudah terdapat petunjuk untuk penggunaannya', '7', '6', '2024-09-02 11:41:10'),
(347, 'Direktorat', 'Layanan SI/TI dapat diandalkan', '1', '2', '2024-09-02 11:41:10'),
(348, 'Direktorat', 'Layanan SI/TI tersedia sesuai dengan waktu yang dijanjikan', '6', '5', '2024-09-02 11:41:10'),
(349, 'Direktorat', 'Seluruh layanan SI/TI sudah diinformasikan kepada Anda', '4', '5', '2024-09-02 11:41:10'),
(350, 'Direktorat', 'Staff di Group OLTI selalu memberikan bantuan kepada Anda', '5', '6', '2024-09-02 11:41:10'),
(351, 'Direktorat', 'Layanan SI/TI disediakan perusahaan ditempat kerja anda', '5', '6', '2024-09-02 11:41:10'),
(352, 'Layanan Aplikasi', 'Menu yang terdapat pada aplikasi dapat berfungsi', '3', '7', '2024-09-02 11:41:10'),
(353, 'Layanan Aplikasi', 'Tersedia kontak/media untuk melaporkan keluhan dengan respon perbaikan yang cepat', '2', '7', '2024-09-02 11:41:10'),
(354, 'Layanan Aplikasi', 'Aplikasi tersedia untuk digunakan selama jam kerja dan diluar jam kerja', '2', '7', '2024-09-02 11:41:10'),
(355, 'Layanan Aplikasi', 'Aplikasi memiliki fitur yang berguna dan sesuai dengan yang saya butuhkan', '3', '7', '2024-09-02 11:41:10'),
(356, 'Layanan Aplikasi', 'Aplikasi memiliki tampilan (User Interface) yang menarik dan mudah digunakan (User Friendly)', '4', '7', '2024-09-02 11:41:10'),
(357, 'Layanan Aplikasi', 'Menu yang terdapat pada aplikasi dapat berfungsi', '1', '1', '2024-09-02 11:41:10'),
(358, 'Layanan Aplikasi', 'Tersedia kontak/media untuk melaporkan keluhan dengan respon perbaikan yang cepat', '1', '1', '2024-09-02 11:41:10'),
(359, 'Layanan Aplikasi', 'Aplikasi tersedia untuk digunakan selama jam kerja dan diluar jam kerja', '5', '6', '2024-09-02 11:41:10'),
(360, 'Layanan Aplikasi', 'Aplikasi memiliki fitur yang berguna dan sesuai dengan yang saya butuhkan', '2', '2', '2024-09-02 11:41:10'),
(361, 'Layanan Aplikasi', 'Aplikasi memiliki tampilan (User Interface) yang menarik dan mudah digunakan (User Friendly)', '4', '7', '2024-09-02 11:41:10'),
(362, 'Layanan Aplikasi', 'Menu yang terdapat pada aplikasi dapat berfungsi', '1', '1', '2024-09-02 11:41:10'),
(363, 'Layanan Aplikasi', 'Tersedia kontak/media untuk melaporkan keluhan dengan respon perbaikan yang cepat', '1', '1', '2024-09-02 11:41:10'),
(364, 'Layanan Aplikasi', 'Aplikasi tersedia untuk digunakan selama jam kerja dan diluar jam kerja', '2', '6', '2024-09-02 11:41:10'),
(365, 'Layanan Aplikasi', 'Aplikasi memiliki fitur yang berguna dan sesuai dengan yang saya butuhkan', '2', '2', '2024-09-02 11:41:10'),
(366, 'Layanan Aplikasi', 'Aplikasi memiliki tampilan (User Interface) yang menarik dan mudah digunakan (User Friendly)', '4', '7', '2024-09-02 11:41:10'),
(367, 'Layanan Aplikasi', 'Menu yang terdapat pada aplikasi dapat berfungsi', '1', '1', '2024-09-02 11:41:10'),
(368, 'Layanan Aplikasi', 'Tersedia kontak/media untuk melaporkan keluhan dengan respon perbaikan yang cepat', '1', '1', '2024-09-02 11:41:10'),
(369, 'Layanan Aplikasi', 'Aplikasi tersedia untuk digunakan selama jam kerja dan diluar jam kerja', '1', '6', '2024-09-02 11:41:10'),
(370, 'Layanan Aplikasi', 'Aplikasi memiliki fitur yang berguna dan sesuai dengan yang saya butuhkan', '2', '2', '2024-09-02 11:41:10'),
(371, 'Layanan Aplikasi', 'Aplikasi memiliki tampilan (User Interface) yang menarik dan mudah digunakan (User Friendly)', '4', '7', '2024-09-02 11:41:10'),
(372, 'Layanan Aplikasi', 'Menu yang terdapat pada aplikasi dapat berfungsi', '1', '1', '2024-09-02 11:41:10'),
(373, 'Layanan Aplikasi', 'Tersedia kontak/media untuk melaporkan keluhan dengan respon perbaikan yang cepat', '1', '1', '2024-09-02 11:41:10'),
(374, 'Layanan Aplikasi', 'Aplikasi tersedia untuk digunakan selama jam kerja dan diluar jam kerja', '1', '7', '2024-09-02 11:41:10'),
(375, 'Layanan Aplikasi', 'Aplikasi memiliki fitur yang berguna dan sesuai dengan yang saya butuhkan', '2', '2', '2024-09-02 11:41:10'),
(376, 'Layanan Aplikasi', 'Aplikasi memiliki tampilan (User Interface) yang menarik dan mudah digunakan (User Friendly)', '4', '7', '2024-09-02 11:41:10'),
(377, 'Layanan Aplikasi', 'Menu yang terdapat pada aplikasi dapat berfungsi', '1', '1', '2024-09-02 11:41:10'),
(378, 'Layanan Aplikasi', 'Tersedia kontak/media untuk melaporkan keluhan dengan respon perbaikan yang cepat', '1', '1', '2024-09-02 11:41:10'),
(379, 'Layanan Aplikasi', 'Aplikasi tersedia untuk digunakan selama jam kerja dan diluar jam kerja', '2', '6', '2024-09-02 11:41:10'),
(380, 'Layanan Aplikasi', 'Aplikasi memiliki fitur yang berguna dan sesuai dengan yang saya butuhkan', '2', '2', '2024-09-02 11:41:10'),
(381, 'Layanan Aplikasi', 'Aplikasi memiliki tampilan (User Interface) yang menarik dan mudah digunakan (User Friendly)', '4', '7', '2024-09-02 11:41:10');
INSERT INTO `survey` (`id`, `layanan`, `kuisioner`, `harapan`, `fakta`, `created_at`) VALUES
(382, 'Layanan Aplikasi', 'Menu yang terdapat pada aplikasi dapat berfungsi', '1', '7', '2024-09-02 11:41:10'),
(383, 'Layanan Aplikasi', 'Tersedia kontak/media untuk melaporkan keluhan dengan respon perbaikan yang cepat', '2', '7', '2024-09-02 11:41:10'),
(384, 'Layanan Aplikasi', 'Aplikasi tersedia untuk digunakan selama jam kerja dan diluar jam kerja', '4', '7', '2024-09-02 11:41:10'),
(385, 'Layanan Aplikasi', 'Aplikasi memiliki fitur yang berguna dan sesuai dengan yang saya butuhkan', '4', '7', '2024-09-02 11:41:10'),
(386, 'Layanan Aplikasi', 'Aplikasi memiliki tampilan (User Interface) yang menarik dan mudah digunakan (User Friendly)', '2', '7', '2024-09-02 11:41:10'),
(387, 'Layanan Internet', 'Akses internet mudah ditemukan di area Plant KTI', '3', '5', '2024-09-02 11:41:10'),
(388, 'Layanan Internet', 'Group OLTI mudah dihubungi jika terjadi error pada jaringan internet', '4', '7', '2024-09-02 11:41:10'),
(389, 'Layanan Internet', 'Anda merasa aman dalam menggunakan akses internet', '5', '7', '2024-09-02 11:41:10'),
(390, 'Layanan Internet', 'Anda memahami cara menggunakan internet yang aman', '4', '7', '2024-09-02 11:41:10'),
(391, 'Layanan Internet', 'Akses internet selalu ada disetiap ruang kerja', '4', '7', '2024-09-02 11:41:10'),
(392, 'Direktorat', 'Layanan SI/TI dapat diandalkan', '1', '5', '2024-09-02 11:41:10'),
(393, 'Direktorat', 'Layanan SI/TI tersedia sesuai dengan waktu yang dijanjikan', '4', '6', '2024-09-02 11:41:10'),
(394, 'Direktorat', 'Seluruh layanan SI/TI sudah diinformasikan kepada Anda', '4', '7', '2024-09-02 11:41:10'),
(395, 'Direktorat', 'Staff di Group OLTI selalu memberikan bantuan kepada Anda', '4', '7', '2024-09-02 11:41:10'),
(396, 'Direktorat', 'Layanan SI/TI disediakan perusahaan ditempat kerja anda', '4', '7', '2024-09-02 11:41:10'),
(397, 'Layanan EUD', 'Fasilitas EUD (PC, Laptop, Printer dll) dilakukan update', '1', '5', '2024-09-02 11:41:10'),
(398, 'Layanan EUD', 'Fasilitas EUD (PC, Laptop, Printer, dll) selalu dirawat sesuai jadwal', '3', '7', '2024-09-02 11:41:10'),
(399, 'Layanan EUD', 'Fasilitas EUD (PC, Laptop, Printer, dll) dapat digunakan dengan baik', '3', '5', '2024-09-02 11:41:10'),
(400, 'Layanan EUD', 'Jadwal Preventive Maintenance EUD (PC, Laptop, Printer, dll) selalu diinformasikan sebelum pelaksanaan kegiatan', '4', '6', '2024-09-02 11:41:10'),
(401, 'Layanan EUD', 'Adanya kepastian dalam mendapatkan perangkat EUD Desktop, Laptop, Printer, dll) sesuai dengan uraian pekerjaan (jobdesc)', '4', '2', '2024-09-02 11:41:10'),
(402, 'Layanan Internet', 'Akses internet mudah ditemukan di area Plant KTI', '3', '5', '2024-09-02 11:41:10'),
(403, 'Layanan Internet', 'Group OLTI mudah dihubungi jika terjadi error pada jaringan internet', '5', '7', '2024-09-02 11:41:10'),
(404, 'Layanan Internet', 'Anda merasa aman dalam menggunakan akses internet', '4', '7', '2024-09-02 11:41:10'),
(405, 'Layanan Internet', 'Anda memahami cara menggunakan internet yang aman', '4', '7', '2024-09-02 11:41:10'),
(406, 'Layanan Internet', 'Akses internet selalu ada disetiap ruang kerja', '4', '7', '2024-09-02 11:41:10'),
(407, 'Layanan Aplikasi', 'Menu yang terdapat pada aplikasi dapat berfungsi', '1', '4', '2024-09-02 11:41:10'),
(408, 'Layanan Aplikasi', 'Tersedia kontak/media untuk melaporkan keluhan dengan respon perbaikan yang cepat', '3', '7', '2024-09-02 11:41:10'),
(409, 'Layanan Aplikasi', 'Aplikasi tersedia untuk digunakan selama jam kerja dan diluar jam kerja', '4', '7', '2024-09-02 11:41:10'),
(410, 'Layanan Aplikasi', 'Aplikasi memiliki fitur yang berguna dan sesuai dengan yang saya butuhkan', '3', '6', '2024-09-02 11:41:10'),
(411, 'Layanan Aplikasi', 'Aplikasi memiliki tampilan (User Interface) yang menarik dan mudah digunakan (User Friendly)', '3', '7', '2024-09-02 11:41:10'),
(412, 'Layanan Solusi Bisnis', 'Kebutuhan (spesifikasi) solusi aplikasi/teknologi yang disampaikan sudah sesuai dan kami pahami dengan baik', '2', '7', '2024-09-02 11:41:10'),
(413, 'Layanan Solusi Bisnis', 'Pengembangan aplikasi/teknologi dilaksanakan sesuai dengan waktu kesepakatan', '3', '7', '2024-09-02 11:41:10'),
(414, 'Layanan Solusi Bisnis', 'Solusi Pengembangan Aplikasi/Teknologi untuk kebutuhan bisnis yang diberikan dengan kualitas baik sesuai dengan spesifikasi yang dibutuhkan', '3', '5', '2024-09-02 11:41:10'),
(415, 'Layanan Solusi Bisnis', 'Ketika terdapat permasalahan bisnis, terdapat minat untuk menyelesaikannya dengan sistem informasi/teknologi informasi', '4', '6', '2024-09-02 11:41:10'),
(416, 'Layanan Solusi Bisnis', 'Solusi Pengembangan Aplikasi/Teknologi untuk kebutuhan bisnis sudah terdapat petunjuk untuk penggunaannya', '4', '6', '2024-09-02 11:41:10'),
(417, 'Direktorat', 'Layanan SI/TI dapat diandalkan', '1', '4', '2024-09-02 11:41:10'),
(418, 'Direktorat', 'Layanan SI/TI tersedia sesuai dengan waktu yang dijanjikan', '3', '4', '2024-09-02 11:41:10'),
(419, 'Direktorat', 'Seluruh layanan SI/TI sudah diinformasikan kepada Anda', '3', '4', '2024-09-02 11:41:10'),
(420, 'Direktorat', 'Staff di Group OLTI selalu memberikan bantuan kepada Anda', '3', '5', '2024-09-02 11:41:10'),
(421, 'Direktorat', 'Layanan SI/TI disediakan perusahaan ditempat kerja anda', '1', '7', '2024-09-02 11:41:10'),
(422, 'Layanan EUD', 'Fasilitas EUD (PC, Laptop, Printer dll) dilakukan update', '1', '4', '2024-09-02 11:41:10'),
(423, 'Layanan EUD', 'Fasilitas EUD (PC, Laptop, Printer, dll) selalu dirawat sesuai jadwal', '3', '6', '2024-09-02 11:41:10'),
(424, 'Layanan EUD', 'Fasilitas EUD (PC, Laptop, Printer, dll) dapat digunakan dengan baik', '2', '5', '2024-09-02 11:41:10'),
(425, 'Layanan EUD', 'Jadwal Preventive Maintenance EUD (PC, Laptop, Printer, dll) selalu diinformasikan sebelum pelaksanaan kegiatan', '2', '5', '2024-09-02 11:41:10'),
(426, 'Layanan EUD', 'Adanya kepastian dalam mendapatkan perangkat EUD Desktop, Laptop, Printer, dll) sesuai dengan uraian pekerjaan (jobdesc)', '2', '7', '2024-09-02 11:41:10'),
(427, 'Layanan Internet', 'Akses internet mudah ditemukan di area Plant KTI', '1', '3', '2024-09-02 11:41:10'),
(428, 'Layanan Internet', 'Group OLTI mudah dihubungi jika terjadi error pada jaringan internet', '2', '4', '2024-09-02 11:41:10'),
(429, 'Layanan Internet', 'Anda merasa aman dalam menggunakan akses internet', '2', '4', '2024-09-02 11:41:10'),
(430, 'Layanan Internet', 'Anda memahami cara menggunakan internet yang aman', '2', '6', '2024-09-02 11:41:10'),
(431, 'Layanan Internet', 'Akses internet selalu ada disetiap ruang kerja', '2', '6', '2024-09-02 11:41:10'),
(432, 'Layanan Aplikasi', 'Menu yang terdapat pada aplikasi dapat berfungsi', '1', '4', '2024-09-02 11:41:10'),
(433, 'Layanan Aplikasi', 'Tersedia kontak/media untuk melaporkan keluhan dengan respon perbaikan yang cepat', '3', '5', '2024-09-02 11:41:10'),
(434, 'Layanan Aplikasi', 'Aplikasi tersedia untuk digunakan selama jam kerja dan diluar jam kerja', '4', '2', '2024-09-02 11:41:10'),
(435, 'Layanan Aplikasi', 'Aplikasi memiliki fitur yang berguna dan sesuai dengan yang saya butuhkan', '3', '5', '2024-09-02 11:41:10'),
(436, 'Layanan Aplikasi', 'Aplikasi memiliki tampilan (User Interface) yang menarik dan mudah digunakan (User Friendly)', '3', '5', '2024-09-02 11:41:10'),
(437, 'Layanan Solusi Bisnis', 'Kebutuhan (spesifikasi) solusi aplikasi/teknologi yang disampaikan sudah sesuai dan kami pahami dengan baik', '1', '2', '2024-09-02 11:41:10'),
(438, 'Layanan Solusi Bisnis', 'Pengembangan aplikasi/teknologi dilaksanakan sesuai dengan waktu kesepakatan', '3', '4', '2024-09-02 11:41:10'),
(439, 'Layanan Solusi Bisnis', 'Solusi Pengembangan Aplikasi/Teknologi untuk kebutuhan bisnis yang diberikan dengan kualitas baik sesuai dengan spesifikasi yang dibutuhkan', '3', '6', '2024-09-02 11:41:10'),
(440, 'Layanan Solusi Bisnis', 'Ketika terdapat permasalahan bisnis, terdapat minat untuk menyelesaikannya dengan sistem informasi/teknologi informasi', '2', '6', '2024-09-02 11:41:10'),
(441, 'Layanan Solusi Bisnis', 'Solusi Pengembangan Aplikasi/Teknologi untuk kebutuhan bisnis sudah terdapat petunjuk untuk penggunaannya', '3', '6', '2024-09-02 11:41:10');

-- --------------------------------------------------------

--
-- Table structure for table `tanggapan`
--

CREATE TABLE `tanggapan` (
  `id` int NOT NULL,
  `kritik` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `harapan` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tanggapan`
--

INSERT INTO `tanggapan` (`id`, `kritik`, `harapan`) VALUES
(1, 'Semangat', 'Semangat'),
(2, 'semangat1', 'semangat1'),
(3, 'Semangat2', 'semangat2'),
(4, 'Semangat3', 'semangat3'),
(5, 'semangat4', 'semangat4\r\n'),
(6, 'semangat5', 'semangat5'),
(7, 'semangat6', 'semangat7\r\n'),
(8, 'semangat7', 'semangat7'),
(9, 'semngat', 'semangat'),
(10, 'semangat', 'semangat'),
(11, 'mohon pelayanan sistem cctv harus di perbaharui lagi karena mengingat keamanan sangat penting bagi perusahaan ', 'Semoga Semua layanan yang dikembangkan oleh SIMK bisa membantu para karyawan dalam bekerja');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `keluhan`
--
ALTER TABLE `keluhan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `layanan`
--
ALTER TABLE `layanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `survey`
--
ALTER TABLE `survey`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tanggapan`
--
ALTER TABLE `tanggapan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `keluhan`
--
ALTER TABLE `keluhan`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `layanan`
--
ALTER TABLE `layanan`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `survey`
--
ALTER TABLE `survey`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=442;

--
-- AUTO_INCREMENT for table `tanggapan`
--
ALTER TABLE `tanggapan`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
