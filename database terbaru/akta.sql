-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Jan 2022 pada 03.12
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
-- Struktur dari tabel `data_keabsahan`
--

CREATE TABLE `data_keabsahan` (
  `id_keabsahan` int(11) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `nama_ayah` varchar(50) NOT NULL,
  `nama_ibu` varchar(50) NOT NULL,
  `nama_dukcapil` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_keabsahan`
--

INSERT INTO `data_keabsahan` (`id_keabsahan`, `nama_lengkap`, `tanggal_lahir`, `nama_ayah`, `nama_ibu`, `nama_dukcapil`, `status`) VALUES
(1, 'AMI RIWAYANTI', '1997-01-26', 'PURNO WIJAYA', 'VIVI YULI', 'DKI JAKARTA', 'DIBALAS'),
(2, 'ANGNOLEMA BUNGA', '2019-01-12', 'LOREAN', 'JESSICA J', 'KAB. BANJAR', 'DIBALAS'),
(3, 'SANTI', '1988-01-26', 'BAYU WIJAYA', 'FATIMAH', 'KAB. BLITAR', 'SUDAH DIBALAS'),
(4, 'SULAMI', '1965-08-13', 'KATIRIN', 'JALIMAH', 'KAB. BANDUNG', 'DIBALAS'),
(5, 'VINTA TAN', '2002-01-05', 'SAMUEL SUBAR', 'TANTI SUBAR', 'KAB . TABALONG', 'BELUM DIBALAS');

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
(9, 'ANDINA PUSPASARI, SST', '198304302001122001', 'PEREMPUAN', 'BIDANG PIAK', 'KABID PIAK');

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
(1, '3206-LU-0014', 'VENITA NORAS', 'AKTA KELAHIRAN DICORET'),
(2, '63.71/IS/1003', 'BENI KARTO', 'AKTA KELAHIRAN BURAM'),
(3, '63.LT.03.1005', 'FEME RADITA', 'BUKU NIKAH COVER'),
(4, '6372-IS-8765', 'SINTA', 'AKTA PALSU'),
(5, 'KJ2/2014', 'RYAN MARCO', 'AKTA KELAHIRAN BURAM');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_persidangan`
--

CREATE TABLE `data_persidangan` (
  `id_persidangan` int(11) NOT NULL,
  `no_akta` varchar(30) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `nama_ayah` varchar(50) NOT NULL,
  `nama_ibu` varchar(50) NOT NULL,
  `urutan_anak` varchar(11) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `perubahan_nm_menjadi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_persidangan`
--

INSERT INTO `data_persidangan` (`id_persidangan`, `no_akta`, `nama`, `tanggal_lahir`, `nama_ayah`, `nama_ibu`, `urutan_anak`, `jenis_kelamin`, `perubahan_nm_menjadi`) VALUES
(1, '', 'VELVET', '2021-06-15', 'LULU', 'BUNGA', 'TIGA', 'PEREMPUAN', 'VELVET AGNO'),
(2, '', 'MERRI JINY', '2008-01-14', 'VALDO JEMI', 'LIAN JEMI', 'SATU', 'PEREMPUAN', 'MERY JEMI'),
(3, '', 'KITAN  N', '2003-09-02', 'RISSAN SAM', 'LYDIA SEOBJO TAN', 'SATU', 'PEREMPUAN', 'KITAN SARWEN LABO'),
(4, '', 'ANJAS EGI', '1991-01-26', 'M RASYAD', 'MUTIA FITRI', 'DUA', 'LAKI-LAKI', 'EGI RASYID'),
(5, '', 'ANA', '1999-12-31', 'S. HALIM', 'K. TIMI', 'SATU', 'PEREMPUAN', 'IRA ANA');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_request_akta`
--

CREATE TABLE `data_request_akta` (
  `id_request_akta` int(11) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `tanggal_request` timestamp NOT NULL DEFAULT current_timestamp(),
  `scan_akta` text NOT NULL,
  `scan_bukunikah` text NOT NULL,
  `scan_ijazah` text NOT NULL,
  `scan_ktp` text NOT NULL,
  `scan_kk` text NOT NULL,
  `scan_keabsahan` text NOT NULL,
  `scan_pengadilan` text NOT NULL,
  `keperluan` varchar(100) NOT NULL,
  `salah` varchar(50) NOT NULL,
  `benar` varchar(50) NOT NULL,
  `no_akta` varchar(30) NOT NULL,
  `tempat` varchar(30) NOT NULL,
  `tanggal` text NOT NULL,
  `bulan` varchar(30) NOT NULL,
  `tahun` varchar(30) NOT NULL,
  `nama_lkp` varchar(50) NOT NULL,
  `urutan_anak` varchar(11) NOT NULL,
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

INSERT INTO `data_request_akta` (`id_request_akta`, `nik`, `tanggal_request`, `scan_akta`, `scan_bukunikah`, `scan_ijazah`, `scan_ktp`, `scan_kk`, `scan_keabsahan`, `scan_pengadilan`, `keperluan`, `salah`, `benar`, `no_akta`, `tempat`, `tanggal`, `bulan`, `tahun`, `nama_lkp`, `urutan_anak`, `jenis_kelamin`, `nama_ayah`, `nama_ibu`, `keterangan`, `status`, `acc`) VALUES
(82, '6372040398765567', '2022-01-22 13:53:02', '_.jpg', '_.jpg', '_.jpg', '6372040398765567_.jpg', '6372040398765567_.jpg', '_.jpg', '_.jpg', 'PERUBAHAN NAMA', 'IRA DESY', 'IRA DESI', '6372-IS-LT-9900', 'BLITAR', 'TIGA PULUH', 'DESEMBER', 'SERIBU SEMBILAN RATUS SEMBILAN', 'IRA DESI', 'SATU', 'PEREMPUAN', 'SOEBIRIN H', 'CATIMA', 'Surat dicetak, bisa diambil!', 3, '2022-01-22'),
(84, '3171234567890123', '2022-01-26 02:29:11', '_.jpg', '_.jpg', '_.jpg', '3171234567890123_.jpg', '3171234567890123_.jpg', '_.jpg', '_.jpg', 'PERUBAHAN NAMA ANAK', 'M ARKA', 'MUHAMMAD ARKA', '6372-IS-2002', 'BANJARBARU', 'DUA PULUH', 'FEBRUARI', 'DUA RIBU DUA', 'MUHAMMAD ARKA', 'SATU', 'LAKI-LAKI', 'BUDI SETIADI', 'BUNGA', 'Surat dicetak, bisa diambil!', 3, '2022-01-26'),
(87, '9987654342316789', '2022-01-30 01:25:08', '_.jpg', '_.jpg', '_.jpg', '9987654342316789_.jpg', '9987654342316789_.jpg', '_.jpg', '_.jpg', 'PERUBAHAN TANGGAL LAHIR', '31 JANUARI 2016', '30 FEBRUARI 2016', '6372-IS-2016', 'SURABAYA', 'TIGA PULUH', 'FEBRUARI', 'DUA RIBU ENAM BELAS', 'SEPTHIAN JANUAR', 'LIMA', 'LAKI-LAKI', 'BAYU WIJAYA', 'PAULA AGUSTINA', 'Surat dicetak, bisa diambil!', 3, '2022-01-30'),
(88, '7896985643340001', '2022-01-30 01:55:19', '_.jpg', '_.jpg', '_.jpg', '7896985643340001_.jpg', '7896985643340001_.jpg', '_.jpg', '_.jpg', 'PERUBAHAN NAMA IBU', 'LELI ZUBAIDAH', 'LELY ZUBAIDAH', '0920-2002', 'JEMBER', 'SEMBILAN', 'SEPTEMBER', 'DUA RIBU DUA', 'SITI AMINAH', 'DUA', 'PEREMPUAN', 'MUHAMMAD ZAKI', 'LELY ZUBAIDAH', 'Surat dicetak, bisa diambil!', 3, '2022-01-30'),
(89, '7656334576890786', '2022-01-30 02:00:29', '_.jpg', '_.jpg', '_.jpg', '7656334576890786_.jpg', '7656334576890786_.jpg', '_.jpg', '_.jpg', 'PERUBAHAN NAMA AYAH', 'MALYK AKBAR SEPTI', 'MALIK AKBAR', '675-IST', 'BANJARBARU', 'DUA PULUH EMPAT', 'NOVEMBER', 'DUA RIBU', 'ARDI MAULU', 'SATU', 'LAKI-LAKI', 'MALIK AKBAR', 'JUTIAN', 'Surat dicetak, bisa diambil!', 3, '2022-01-31');

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
('3005981573910008', '1', 'Pemohon', 'MICHAEL SEOPUTRA', '2001-09-10', 'BEKASI', 'LAKI-LAKI', '', '', '', ''),
('3171234567890123', '1234', 'Pemohon', 'BUDI SETIADI', '1999-01-26', 'BANJARMASIN', 'LAKI-LAKI', '', '', '', ''),
('6372040398765567', '12345', 'Pemohon', 'IRA DESI', '1999-03-12', 'BLITAR', 'PEREMPUAN', '', '', '', ''),
('7656334576890786', '1', 'Pemohon', 'ARDI MAULU', '2000-11-24', 'BANJARBARU', 'LAKI-LAKI', '', '', '', ''),
('7896985643340001', '2', 'Pemohon', 'SITI AMINAH', '2002-09-09', 'JEMBER', 'PEREMPUAN', '', '', '', ''),
('7898', '1234', 'Pemohon', 'Bunga B', '2020-01-06', 'bjb', 'Perempuan', '', 'perintis', '', 'Sekolah'),
('9987654342316789', '123', 'Pemohon', 'KINAN', '0000-00-00', 'm', 'Perempuan', 'Islam', '  la', '', '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_keabsahan`
--
ALTER TABLE `data_keabsahan`
  ADD PRIMARY KEY (`id_keabsahan`);

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
-- Indeks untuk tabel `data_persidangan`
--
ALTER TABLE `data_persidangan`
  ADD PRIMARY KEY (`id_persidangan`);

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
-- AUTO_INCREMENT untuk tabel `data_keabsahan`
--
ALTER TABLE `data_keabsahan`
  MODIFY `id_keabsahan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `data_pegawai`
--
ALTER TABLE `data_pegawai`
  MODIFY `id_pegawai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `data_pending`
--
ALTER TABLE `data_pending`
  MODIFY `id_pending` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `data_persidangan`
--
ALTER TABLE `data_persidangan`
  MODIFY `id_persidangan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `data_request_akta`
--
ALTER TABLE `data_request_akta`
  MODIFY `id_request_akta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `data_request_akta`
--
ALTER TABLE `data_request_akta`
  ADD CONSTRAINT `data_request_akta_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `data_user` (`nik`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
