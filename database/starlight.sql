-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Jan 2023 pada 13.36
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `starlight`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_barang`
--

CREATE TABLE `tb_barang` (
  `id_barang` int(11) NOT NULL,
  `nama_brg` varchar(120) NOT NULL,
  `keterangan` varchar(225) NOT NULL,
  `kategori` varchar(60) NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(4) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_barang`
--

INSERT INTO `tb_barang` (`id_barang`, `nama_brg`, `keterangan`, `kategori`, `harga`, `stok`, `gambar`) VALUES
(1, 'Keripik Pisang Chips', 'Pisang diiris tipis kemudian digoreng dan dibumbui', 'Makanan', 25000, 13, 'keripikpisangchip.jpg'),
(2, 'Dodol Duren', 'Lempok yang dibuat dengan bahan durian', 'Makanan', 18000, 10, 'dodolduren.jpg'),
(3, 'Tokyo Banana', 'Kue yang di dalamnya diisi dengan krim pisang', 'Makanan', 11000, 8, 'tokyobanana.jpg'),
(4, 'Pie Pisang Besar', 'Pie yang dicetak berbentuk pisang', 'Makanan', 50000, 6, 'piepisangbesar.jpg'),
(6, 'Basreng', 'Keripik yang terbuat dari olahan bakso ikan yang diiris tipis', 'Makanan', 29500, 14, 'basreng.jpg'),
(7, 'Coklat Lampung', 'Bubuk minuman coklat khas lampung', 'Minuman', 23000, 10, 'coklat.jpg'),
(8, 'Hazelnut', 'Minuman yang terbuat dari bubuk kacang hazelnut', 'Minuman', 15000, 8, 'hazelnut.jpg'),
(9, 'Kopi Lada Hitam', 'Bubuk kopi yang dicampur dengan lada', 'Minuman', 35000, 7, 'kopilada.jpg'),
(10, 'Kopi Luwak Liar', 'Bubuk kopi beras tanpa kulit ari yang umumnya warna agak kecoklatan', 'Minuman', 130000, 5, 'kopiluwak.jpg'),
(11, 'Kopi Robusta Rumah', 'Bubuk kopi yang varietas kopi yang paling terkenal ', 'Minuman', 40000, 10, 'kopirobusta.jpg'),
(12, 'Pancake Durian', 'Makanan ringan berupa puree daging durian dan vla atau krim kocok yang dibalut dengan kulit krepes', 'Makanan', 104000, 5, 'pancakedurian.jpg'),
(13, 'Stick Coklat', 'Makanan ringan stick yang dibalut dengan coklat', 'Makanan', 66000, 10, 'stickcoklat.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_invoice`
--

CREATE TABLE `tb_invoice` (
  `id` int(11) NOT NULL,
  `nama` varchar(56) NOT NULL,
  `alamat` varchar(225) NOT NULL,
  `tgl_pesan` datetime NOT NULL,
  `batas_bayar` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_invoice`
--

INSERT INTO `tb_invoice` (`id`, `nama`, `alamat`, `tgl_pesan`, `batas_bayar`) VALUES
(4, 'LAILATUN NI\'MAH', 'Dsn.Sindangrasa', '2023-01-07 12:50:26', '2023-01-08 12:50:26'),
(5, 'Ahmad Azrul', 'jl.kesunean', '2023-01-09 21:44:56', '2023-01-10 21:44:56'),
(6, 'Budi Tabudi', 'jl. kelagian', '2023-01-09 21:47:00', '2023-01-10 21:47:00'),
(7, 'andi', 'jl. baru', '2023-01-10 12:26:30', '2023-01-11 12:26:30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pesanan`
--

CREATE TABLE `tb_pesanan` (
  `id` int(11) NOT NULL,
  `id_invoice` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `nama_brg` varchar(50) NOT NULL,
  `jumlah` int(3) NOT NULL,
  `harga` int(10) NOT NULL,
  `pilihan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_pesanan`
--

INSERT INTO `tb_pesanan` (`id`, `id_invoice`, `id_barang`, `nama_brg`, `jumlah`, `harga`, `pilihan`) VALUES
(2, 4, 4, 'Pie Pisang Besar', 1, 50000, ''),
(3, 5, 1, 'Keripik Pisang Chips', 1, 25000, ''),
(4, 6, 2, 'Dodol Duren', 2, 18000, ''),
(5, 7, 1, 'Keripik Pisang Chips', 1, 25000, ''),
(6, 8, 1, 'Keripik Pisang Chips', 2, 25000, '');

--
-- Trigger `tb_pesanan`
--
DELIMITER $$
CREATE TRIGGER `pesanan_penjualan` AFTER INSERT ON `tb_pesanan` FOR EACH ROW BEGIN
	UPDATE tb_barang SET stok = stok-NEW.jumlah
    WHERE id_barang = NEW.id_barang;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role_id` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id`, `nama`, `username`, `password`, `role_id`) VALUES
(1, 'admin', 'admin', '123', 1),
(2, 'user', 'user', '123', 2),
(4, 'andi', 'andi setiabudi', '123', 2),
(6, 'Ahmad Azrul', 'azrul', '12345678', 2),
(19, 'coba', 'coba', '123', 2),
(24, 'aku', 'sayang', 'kamu', 2);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indeks untuk tabel `tb_invoice`
--
ALTER TABLE `tb_invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_barang`
--
ALTER TABLE `tb_barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `tb_invoice`
--
ALTER TABLE `tb_invoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
