-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Jan 2021 pada 16.46
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `coffeeshop`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `gudang_penyimpanan`
--

CREATE TABLE `gudang_penyimpanan` (
  `kode_gudang` varchar(5) NOT NULL,
  `id_staff` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `gudang_penyimpanan`
--

INSERT INTO `gudang_penyimpanan` (`kode_gudang`, `id_staff`) VALUES
('GD002', 'CSBA1102'),
('GD001', 'CSBA1106'),
('GD003', 'CSBA1106');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kopi`
--

CREATE TABLE `kopi` (
  `id_kopi` varchar(5) NOT NULL,
  `nama_kopi` varchar(100) NOT NULL,
  `stok` int(4) NOT NULL,
  `harga` double NOT NULL,
  `id_supplier` varchar(5) NOT NULL,
  `kode_rak` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kopi`
--

INSERT INTO `kopi` (`id_kopi`, `nama_kopi`, `stok`, `harga`, `id_supplier`, `kode_rak`) VALUES
('KCP01', 'Kopi Arabika Aceh Gayo Natural Process', 10, 340000, 'SP001', 'KP01'),
('KCP02', 'Kopi Arabica Aceh Gayo Honey Process', 8, 425000, 'SP001', 'KP02'),
('KCP03', 'Kopi Robusta Aceh Gayo', 10, 180000, 'SP001', 'KP03'),
('KCP04', 'Arabika Sumatera Gayo Catimor', 7, 365000, 'SP001', 'KP04'),
('KCP05', 'Liberika Kopi Nangka Premium', 5, 152000, 'SP001', 'KP05'),
('KCP06', 'Arabika Gayo Wine Natural', 10, 380000, 'SP002', 'KP06'),
('KCP07', 'Arabika Sweet Gayo Blend', 10, 165000, 'SP002', 'KP07'),
('KCP08', 'Kopi Robusta Gayo Washed', 8, 125000, 'SP002', 'KP08'),
('KCP09', 'Arabika Pulupulu Toraja Grade 1', 10, 665000, 'SP002', 'KP09'),
('KCP11', 'Toraja Arabika Natural', 7, 245000, 'SP003', 'KP11'),
('KCP12', 'Arabika Toraja Premium', 6, 185000, 'SP003', 'KP12'),
('KCP13', 'Kopi Luwak Liar Sumatera', 5, 1560000, 'SP003', 'KP13'),
('KCP14', 'Kopi Gayo Aceh Arabika Full Washed', 8, 180000, 'SP004', 'KP14'),
('KCP15', 'Kopi Gayo Blend Espreso', 5, 170000, 'SP005', 'KP15');

-- --------------------------------------------------------

--
-- Struktur dari tabel `peralatan`
--

CREATE TABLE `peralatan` (
  `id_barang` varchar(5) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `jumlah` int(6) NOT NULL,
  `kode_rak` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `peralatan`
--

INSERT INTO `peralatan` (`id_barang`, `nama_barang`, `jumlah`, `kode_rak`) VALUES
('BR001', 'Cup Kopi', 5000, 'PR01'),
('BR002', 'Tutup cup kopi', 5000, 'PR02'),
('BR003', 'Sedotan', 5000, 'PR03'),
('BR004', 'Blender', 5, 'PR04'),
('BR005', 'Glassware', 50, 'PR05'),
('BR006', 'Silverware', 50, 'PR06');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rak`
--

CREATE TABLE `rak` (
  `kode_rak` varchar(4) NOT NULL,
  `kode_gudang` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `rak`
--

INSERT INTO `rak` (`kode_rak`, `kode_gudang`) VALUES
('KP01', 'GD001'),
('KP02', 'GD001'),
('KP03', 'GD001'),
('KP04', 'GD001'),
('KP05', 'GD001'),
('KP06', 'GD001'),
('KP07', 'GD001'),
('KP08', 'GD001'),
('KP09', 'GD001'),
('KP10', 'GD001'),
('KP11', 'GD001'),
('KP12', 'GD001'),
('KP13', 'GD001'),
('KP14', 'GD001'),
('KP15', 'GD001'),
('KP16', 'GD001'),
('KP17', 'GD001'),
('KP18', 'GD001'),
('KP19', 'GD001'),
('KP20', 'GD001'),
('PR01', 'GD001'),
('PR02', 'GD001'),
('PR03', 'GD001'),
('PR04', 'GD001'),
('PR05', 'GD001'),
('PR06', 'GD001'),
('PR07', 'GD001'),
('PR08', 'GD001'),
('PR09', 'GD001');

-- --------------------------------------------------------

--
-- Struktur dari tabel `staff`
--

CREATE TABLE `staff` (
  `nik` varchar(16) NOT NULL,
  `id_staff` varchar(8) NOT NULL,
  `nama_staff` varchar(40) NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jabatan` varchar(30) NOT NULL,
  `gaji` double NOT NULL,
  `alamat_staff` varchar(30) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `no_hp` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `staff`
--

INSERT INTO `staff` (`nik`, `id_staff`, `nama_staff`, `tempat_lahir`, `tanggal_lahir`, `jabatan`, `gaji`, `alamat_staff`, `username`, `password`, `no_hp`) VALUES
('1832476309854217', 'CSBA1101', 'Sabrina Benita', 'Tanjungbalai', '2000-11-19', 'Manager', 5000000, 'Jl.A Sofyan 22', 'sabsabrina', 'hellosab123', '085261949224'),
('1630928175420917', 'CSBA1102', 'Ilma Sakinah Parinduri', 'Aceh', '2000-01-08', 'Pengatur Gudang', 3000000, 'Jln.Pahlawan No 13', 'ilmasakinah', 'sakinah123', '082183676701'),
('1534019483021986', 'CSBA1103', 'Christin Valencia Saragih', 'Padang', '2000-12-01', 'Pelayan', 2500000, 'Jln.Pembangunan', 'christinsaragih', 'saragih123', '082184729001'),
('1024789301285043', 'CSBA1104', 'Sultiana Sakinah', 'Aceh', '2001-11-07', 'Pelayan', 2500000, 'Jln. RA Kartini No 10', 'sultianasakinah', 'sulti12345', '082178909001'),
('1901038732913875', 'CSBA1105', 'Cornelius Parlindungan Situmorang', 'Siantar', '2000-10-09', 'Security', 2500000, 'Jln.Jamin Ginting No 11', 'corneliusps', 'cornel123', '081394732401'),
('1114920953812095', 'CSBA1106', 'Alexander Julyus Barus', 'Medan', '2001-01-12', 'Pengatur Gudang', 2500000, 'Jln.Pembangunan No 90', 'alexanderbarus', 'alexbarus123', '082289890101'),
('1187390231890101', 'CSBA1107', 'Mutia Ayu Harahap', 'Jakarta', '2001-09-10', 'Pelayan', 2500000, 'Jln. MT Haryono No 89', 'mutiaayuhrp', 'mutia12345', '082189090011'),
('1110900124658901', 'CSBA1108', 'David Bromo', 'Medan', '2000-01-01', 'Bartender', 3500000, 'Jln. Setia Budi No 10', 'davidbromo', 'vid12345', '085278090912'),
('1209012864902345', 'CSBA1109', 'Andrean Putra', 'Padang', '1999-08-14', 'Cleaning Service', 2500000, 'Jln. Suryono No.13', 'andreanputra', 'putra12345', '081278780912'),
('1747569342130985', 'CSBA1110', 'Andrian Perdana', 'Medan', '2000-12-07', 'Kasir', 2500000, 'Jln.Pembangunan', 'andrianperdana', 'perdana123', '081380981243');

-- --------------------------------------------------------

--
-- Struktur dari tabel `supplier`
--

CREATE TABLE `supplier` (
  `id_supplier` varchar(5) NOT NULL,
  `nama_supplier` varchar(100) NOT NULL,
  `alamat_supplier` varchar(100) NOT NULL,
  `no_hp` varchar(12) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `supplier`
--

INSERT INTO `supplier` (`id_supplier`, `nama_supplier`, `alamat_supplier`, `no_hp`, `email`) VALUES
('SP001', 'Aldi Immanuela', 'Jln. Sudirman Km 3 Aceh Barat', '085298987112', 'aldi_imma@gmail.com'),
('SP002', 'Doni Sitorus', 'Jln. Sisingamangaraja No 90 Medan', '085381123090', 'donisitorus@gmail.com'),
('SP003', 'Dimas Anggara', 'Jln. Sudirman No 18 Banda Aceh', '081390084321', 'dimanggara@gmail.com'),
('SP004', 'Adam Sutrisno', 'Kampung Belang Gele Aceh Gayo', '085290128542', 'adamsutrisno@yahoo.co.id'),
('SP005', 'Ahmad Sutarjo', 'Bebesen Aceh Tengah', '082134658901', 'sutarjo@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `gudang_penyimpanan`
--
ALTER TABLE `gudang_penyimpanan`
  ADD PRIMARY KEY (`kode_gudang`),
  ADD KEY `id_staff` (`id_staff`);

--
-- Indeks untuk tabel `kopi`
--
ALTER TABLE `kopi`
  ADD PRIMARY KEY (`id_kopi`),
  ADD KEY `kode_rak` (`kode_rak`),
  ADD KEY `id_supplier` (`id_supplier`);

--
-- Indeks untuk tabel `peralatan`
--
ALTER TABLE `peralatan`
  ADD PRIMARY KEY (`id_barang`),
  ADD KEY `kode_rak` (`kode_rak`);

--
-- Indeks untuk tabel `rak`
--
ALTER TABLE `rak`
  ADD PRIMARY KEY (`kode_rak`),
  ADD KEY `kode_gudang` (`kode_gudang`);

--
-- Indeks untuk tabel `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id_staff`),
  ADD UNIQUE KEY `nik` (`nik`);

--
-- Indeks untuk tabel `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id_supplier`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `gudang_penyimpanan`
--
ALTER TABLE `gudang_penyimpanan`
  ADD CONSTRAINT `gudang_penyimpanan_ibfk_3` FOREIGN KEY (`id_staff`) REFERENCES `staff` (`id_staff`);

--
-- Ketidakleluasaan untuk tabel `kopi`
--
ALTER TABLE `kopi`
  ADD CONSTRAINT `kopi_ibfk_4` FOREIGN KEY (`id_supplier`) REFERENCES `supplier` (`id_supplier`),
  ADD CONSTRAINT `kopi_ibfk_5` FOREIGN KEY (`kode_rak`) REFERENCES `rak` (`kode_rak`);

--
-- Ketidakleluasaan untuk tabel `peralatan`
--
ALTER TABLE `peralatan`
  ADD CONSTRAINT `peralatan_ibfk_1` FOREIGN KEY (`kode_rak`) REFERENCES `rak` (`kode_rak`);

--
-- Ketidakleluasaan untuk tabel `rak`
--
ALTER TABLE `rak`
  ADD CONSTRAINT `rak_ibfk_1` FOREIGN KEY (`kode_gudang`) REFERENCES `gudang_penyimpanan` (`kode_gudang`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
