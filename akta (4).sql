-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Jun 2022 pada 19.24
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `akta`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_akta_kelahiran`
--

CREATE TABLE `data_akta_kelahiran` (
  `id_akta_kelahiran` int(12) NOT NULL,
  `no_akta` varchar(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `nama_ayah` varchar(100) NOT NULL,
  `nama_ibu` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_akta_kelahiran`
--

INSERT INTO `data_akta_kelahiran` (`id_akta_kelahiran`, `no_akta`, `nama`, `tanggal_lahir`, `nama_ayah`, `nama_ibu`) VALUES
(1, 'LT', '', '2021-07-14', 'MARK', 'MERLIAN'),
(2, '', 'l', '0000-00-00', '', ''),
(3, 'LT', '', '2021-07-14', 'MARK', 'MERLIAN'),
(4, '3206-LU-0015', '', '0000-00-00', '', ''),
(5, '7272-LT', 'JOLIES', '0000-00-00', '', ''),
(6, '3206-LU-00151', '', '0000-00-00', '', ''),
(7, '6372-LL', 'LEMA J', '2022-05-11', 'LOREAN D', 'ZULIE Z'),
(8, '7272-LCU', '', '2022-06-09', 'MASYEL', 'LEMA');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_akta_perceraian`
--

CREATE TABLE `data_akta_perceraian` (
  `id_akta_perceraian` int(14) NOT NULL,
  `no_akta_cerai` int(11) NOT NULL,
  `namasuami` varchar(100) NOT NULL,
  `namaistri` varchar(100) NOT NULL,
  `tanggal_perkawinan` date NOT NULL,
  `tanggal_cerai` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_k2_aktaperceraian`
--

CREATE TABLE `data_k2_aktaperceraian` (
  `id_akta_perceraiank2` int(11) NOT NULL,
  `id_akta_perceraian` int(14) NOT NULL,
  `kesalahan_data` varchar(100) NOT NULL,
  `pembetulan_data` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_k2_aktaperkawinan`
--

CREATE TABLE `data_k2_aktaperkawinan` (
  `id_k2_aktaperkawinan` int(11) NOT NULL,
  `id_request_akta` int(12) NOT NULL,
  `data_benar` varchar(100) NOT NULL,
  `data_salah` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_k2_aktaperkawinan`
--

INSERT INTO `data_k2_aktaperkawinan` (`id_k2_aktaperkawinan`, `id_request_akta`, `data_benar`, `data_salah`) VALUES
(19, 94, 'LEMA J', 'LEMA');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_pegawai`
--

CREATE TABLE `data_pegawai` (
  `id_pegawai` int(11) NOT NULL,
  `nama_pegawai` varchar(128) NOT NULL,
  `nip` varchar(18) NOT NULL,
  `jenis_kelamin` varchar(128) NOT NULL,
  `unit_kerja` varchar(128) NOT NULL,
  `jabatan` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_pegawai`
--

INSERT INTO `data_pegawai` (`id_pegawai`, `nama_pegawai`, `nip`, `jenis_kelamin`, `unit_kerja`, `jabatan`) VALUES
(5, 'Dra. Hj. SRI FATMA KARMAILITA, MM', '196405121985032010', 'PEREMPUAN', 'KEPENDUDUKAN DAN PENCATATAN SIPIL', 'KEPALA DINAS'),
(6, 'Ir. MUHDIANNOR, MM', '196403151991031002', 'LAKI-LAKI', 'PENCATATAN SIPIL', 'KABID PENCATATAN SIPIL'),
(7, 'GREGORIUS R KOTEN, S.Pd., MM', '198212132006042002', 'LAKI-LAKI', 'PENCATATAN SIPIL', 'KABID PENCATATAN SIPIL'),
(8, 'BAMBANG PANCA SETIYONO, S.Sos', '196405161985031008', 'LAKI-LAKI', 'SEKRETARIAT', 'SEKRETARIS'),
(9, 'ANDINA PUSPASARI, SST', '198304302001122001', 'LAKI-LAKI', 'BIDANG PIAK', 'KABID PIAK');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_pending`
--

CREATE TABLE `data_pending` (
  `id_pending` int(11) NOT NULL,
  `no_akta` varchar(30) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alasan_pending` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_pending`
--

INSERT INTO `data_pending` (`id_pending`, `no_akta`, `nama`, `alasan_pending`) VALUES
(2, '63.71/IS/1003', 'BENI KARTO', 'AKTA KELAHIRAN BURAM'),
(3, '63.LT.03.1005', 'FEME RADITA', 'BUKU NIKAH COVER'),
(4, '6372-IS-8765', 'SINTA', 'AKTA PALSU'),
(5, 'KJ2/2014', 'RYAN MARCO', 'AKTA KELAHIRAN BURAM'),
(10, '7272', 'VENITA NORA', 'AKTA KELAHIRAN BURAM');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_pengesahan_anak`
--

CREATE TABLE `data_pengesahan_anak` (
  `id_pengesahan_anak` int(11) NOT NULL,
  `id_akta_kelahiran` int(12) NOT NULL,
  `tanggal_pemberkatan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_pengesahan_anak`
--

INSERT INTO `data_pengesahan_anak` (`id_pengesahan_anak`, `id_akta_kelahiran`, `tanggal_pemberkatan`) VALUES
(1, 7, '2022-06-29');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_request_akta`
--

CREATE TABLE `data_request_akta` (
  `id_request_akta` int(12) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `tanggal_request` timestamp NOT NULL DEFAULT current_timestamp(),
  `scan_akta` text NOT NULL,
  `scan_bukunikah` text NOT NULL,
  `scan_ijazah` text NOT NULL,
  `scan_ktp` text NOT NULL,
  `scan_kk` text NOT NULL,
  `scan_keabsahan` text NOT NULL,
  `scan_pengadilan` text NOT NULL,
  `niksuami` varchar(100) NOT NULL,
  `nikistri` varchar(50) NOT NULL,
  `namasuami` varchar(50) NOT NULL,
  `namaistri` varchar(50) NOT NULL,
  `tempat` varchar(30) NOT NULL,
  `tanggal` text NOT NULL,
  `bulan` varchar(30) NOT NULL,
  `tahun` varchar(30) NOT NULL,
  `nama_pemuka_agama` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `nama_ayah` varchar(50) NOT NULL,
  `nama_ibu` varchar(50) NOT NULL,
  `keterangan` varchar(50) NOT NULL DEFAULT 'Data sedang diperiksa oleh Staf',
  `status` int(11) NOT NULL DEFAULT 0,
  `acc` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_request_akta`
--

INSERT INTO `data_request_akta` (`id_request_akta`, `nik`, `tanggal_request`, `scan_akta`, `scan_bukunikah`, `scan_ijazah`, `scan_ktp`, `scan_kk`, `scan_keabsahan`, `scan_pengadilan`, `niksuami`, `nikistri`, `namasuami`, `namaistri`, `tempat`, `tanggal`, `bulan`, `tahun`, `nama_pemuka_agama`, `jenis_kelamin`, `nama_ayah`, `nama_ibu`, `keterangan`, `status`, `acc`) VALUES
(90, '7656334576890786', '2022-06-22 07:14:17', '_.jpg', '_.jpg', '_.jpg', '7656334576890786_.jpg', '7656334576890786_.jpg', '_.jpg', '_.jpg', '3005981573910008', '6372981573910009', 'HEN', 'YUA', 'BANJARBARU', 'J', 'JANUARI', 'K', 'ADIPRAMM', '', '', '', 'Data sedang diperiksa oleh Staf', 0, '0000-00-00'),
(91, '7656334576890786', '2022-06-22 13:08:35', '_.jpg', '_.jpg', '_.jpg', '7656334576890786_.jpg', '7656334576890786_.jpg', '_.jpg', '_.jpg', 'K', 'K', 'K', 'K', 'K', 'K', 'JANUARI', 'DUA RIBU DUA', 'ADIPRAMM', '', '', '', 'Data sedang diperiksa oleh Staf', 0, '0000-00-00'),
(92, '7656334576890786', '2022-06-22 13:26:28', '_.jpg', '_.jpg', '_.jpg', '7656334576890786_.jpg', '7656334576890786_.jpg', '_.jpg', '_.jpg', '3005981573910008', '6372981573910009', 'HEN', 'YUA', 'BANJARBARU', 'TIGA PULUH', 'JANUARI', 'DUA RIBU', 'ADIPRAMM', '', '', '', 'Data sedang diperiksa oleh Staf', 0, '0000-00-00'),
(93, '7656334576890786', '2022-06-22 13:29:20', '_.jpg', '_.jpg', '_.jpg', '7656334576890786_.jpg', '7656334576890786_.jpg', '_.jpg', '_.jpg', '6372040398765590', '6372981573910009', 'KOC', 'BETTY ROAN', 'SURABAYA', 'TIGA PULUH', 'JANUARI', 'DUA RIBU DUA', 'PDT', '', '', '', 'Data sedang diperiksa oleh Staf', 0, '0000-00-00'),
(94, '3005981573910008', '2022-06-23 07:40:11', '_.jpg', '_.jpg', '_.jpg', '3005981573910008_.jpg', '3005981573910008_.jpg', '_.jpg', '_.jpg', '3005981573910090', '6372040398765580', 'HEN', 'LEMA', 'BLITAR', 'TIGA PULUH', 'JULI', 'DUA RIBU', 'PDT A', '', '', '', 'Data sedang diperiksa oleh Staf', 1, '0000-00-00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_user`
--

CREATE TABLE `data_user` (
  `nik` varchar(16) NOT NULL,
  `password` varchar(30) NOT NULL,
  `hak_akses` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `jekel` varchar(11) NOT NULL,
  `agama` varchar(30) NOT NULL,
  `alamat` text NOT NULL,
  `telepon` varchar(14) NOT NULL,
  `status_warga` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_user`
--

INSERT INTO `data_user` (`nik`, `password`, `hak_akses`, `nama`, `tanggal_lahir`, `tempat_lahir`, `jekel`, `agama`, `alamat`, `telepon`, `status_warga`) VALUES
('1', '1', 'Kasi', 'coba', '2021-10-20', 'coba', 'Laki-Laki', '', 'coba', '', 'Kerja'),
('2', '2', 'Staf', 'coba', '2021-10-20', 'coba', 'Perempuan', '', 'coba', '', 'Kerja'),
('3005981573910008', '1', 'Pemohon', 'MICHAEL SEOPUTRA', '2001-09-10', 'BEKASI', 'LAKI-LAKI', 'Kristen', '', '', ''),
('3171234567890123', '1234', 'Pemohon', 'BUDI SETIADI', '1999-01-26', 'BANJARMASIN', 'LAKI-LAKI', '', '', '', ''),
('6372040398765567', '12345', 'Pemohon', 'IRA DESI', '1999-03-12', 'BLITAR', 'PEREMPUAN', '', '', '', ''),
('7656334576890786', '1', 'Pemohon', 'ARDI MAULU', '2000-11-24', 'BANJARBARU', 'LAKI-LAKI', 'HINDU', '', '', ''),
('7896985643340001', '2', 'Pemohon', 'SITI AMINAH', '2002-09-09', 'JEMBER', 'PEREMPUAN', '', '', '', ''),
('7898', '1234', 'Pemohon', 'Bunga B', '2020-01-06', 'bjb', 'Perempuan', '', 'perintis', '', 'Sekolah'),
('9987654342316789', '123', 'Pemohon', 'KINAN', '0000-00-00', 'm', 'Perempuan', 'Islam', '  la', '', '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_akta_kelahiran`
--
ALTER TABLE `data_akta_kelahiran`
  ADD PRIMARY KEY (`id_akta_kelahiran`);

--
-- Indeks untuk tabel `data_akta_perceraian`
--
ALTER TABLE `data_akta_perceraian`
  ADD PRIMARY KEY (`id_akta_perceraian`);

--
-- Indeks untuk tabel `data_k2_aktaperceraian`
--
ALTER TABLE `data_k2_aktaperceraian`
  ADD PRIMARY KEY (`id_akta_perceraiank2`),
  ADD KEY `id_akta_perceraian` (`id_akta_perceraian`);

--
-- Indeks untuk tabel `data_k2_aktaperkawinan`
--
ALTER TABLE `data_k2_aktaperkawinan`
  ADD PRIMARY KEY (`id_k2_aktaperkawinan`),
  ADD KEY `id_request_akta` (`id_request_akta`);

--
-- Indeks untuk tabel `data_pegawai`
--
ALTER TABLE `data_pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indeks untuk tabel `data_pending`
--
ALTER TABLE `data_pending`
  ADD PRIMARY KEY (`id_pending`);

--
-- Indeks untuk tabel `data_pengesahan_anak`
--
ALTER TABLE `data_pengesahan_anak`
  ADD PRIMARY KEY (`id_pengesahan_anak`),
  ADD KEY `id_akta_kelahiran` (`id_akta_kelahiran`);

--
-- Indeks untuk tabel `data_request_akta`
--
ALTER TABLE `data_request_akta`
  ADD PRIMARY KEY (`id_request_akta`),
  ADD KEY `id_pemohon` (`nik`);

--
-- Indeks untuk tabel `data_user`
--
ALTER TABLE `data_user`
  ADD PRIMARY KEY (`nik`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_akta_kelahiran`
--
ALTER TABLE `data_akta_kelahiran`
  MODIFY `id_akta_kelahiran` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `data_akta_perceraian`
--
ALTER TABLE `data_akta_perceraian`
  MODIFY `id_akta_perceraian` int(14) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `data_k2_aktaperceraian`
--
ALTER TABLE `data_k2_aktaperceraian`
  MODIFY `id_akta_perceraiank2` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `data_k2_aktaperkawinan`
--
ALTER TABLE `data_k2_aktaperkawinan`
  MODIFY `id_k2_aktaperkawinan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `data_pegawai`
--
ALTER TABLE `data_pegawai`
  MODIFY `id_pegawai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `data_pending`
--
ALTER TABLE `data_pending`
  MODIFY `id_pending` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `data_pengesahan_anak`
--
ALTER TABLE `data_pengesahan_anak`
  MODIFY `id_pengesahan_anak` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `data_request_akta`
--
ALTER TABLE `data_request_akta`
  MODIFY `id_request_akta` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `data_k2_aktaperceraian`
--
ALTER TABLE `data_k2_aktaperceraian`
  ADD CONSTRAINT `data_k2_aktaperceraian_ibfk_1` FOREIGN KEY (`id_akta_perceraian`) REFERENCES `data_akta_perceraian` (`id_akta_perceraian`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `data_k2_aktaperkawinan`
--
ALTER TABLE `data_k2_aktaperkawinan`
  ADD CONSTRAINT `data_k2_aktaperkawinan_ibfk_1` FOREIGN KEY (`id_request_akta`) REFERENCES `data_request_akta` (`id_request_akta`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `data_pengesahan_anak`
--
ALTER TABLE `data_pengesahan_anak`
  ADD CONSTRAINT `data_pengesahan_anak_ibfk_1` FOREIGN KEY (`id_akta_kelahiran`) REFERENCES `data_akta_kelahiran` (`id_akta_kelahiran`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `data_request_akta`
--
ALTER TABLE `data_request_akta`
  ADD CONSTRAINT `data_request_akta_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `data_user` (`nik`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
