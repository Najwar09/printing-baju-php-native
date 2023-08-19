-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Agu 2023 pada 16.34
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lepu`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `id_login` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`id_login`, `username`, `password`, `level`) VALUES
(18, 'admin', '$2y$10$nbie.t2c0Nc4GcF7jm/kNuKrCDKKY7Q9g41v7LY3gFaedWVVHCoxm', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `portofolio`
--

CREATE TABLE `portofolio` (
  `id_portofolio` int(11) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `portofolio`
--

INSERT INTO `portofolio` (`id_portofolio`, `gambar`) VALUES
(1, '1692448545.jpg'),
(2, '1692448566.png'),
(5, '1692449220.jpeg'),
(6, '1692453114.png'),
(7, '1692453128.png'),
(8, '1692453144.jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel1`
--

CREATE TABLE `tabel1` (
  `id_tabel1` int(11) NOT NULL,
  `jumlah` varchar(100) NOT NULL,
  `harga` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tabel1`
--

INSERT INTO `tabel1` (`id_tabel1`, `jumlah`, `harga`) VALUES
(6, '1-11 Pcs', '80000'),
(8, '12-24 Pcs', '68000'),
(9, '25-100 Pcs', '65000'),
(10, '100-200 Pcs', '63000'),
(11, '>200 Pcs', '58000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel2`
--

CREATE TABLE `tabel2` (
  `id_tabel2` int(11) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `harga` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tabel2`
--

INSERT INTO `tabel2` (`id_tabel2`, `kategori`, `harga`) VALUES
(3, 'lengan pendek', '75000'),
(4, '3/4', '80000'),
(7, 'lengan panjang', '85000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel3`
--

CREATE TABLE `tabel3` (
  `id_tabel3` int(11) NOT NULL,
  `jumlah` varchar(100) NOT NULL,
  `harga` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tabel3`
--

INSERT INTO `tabel3` (`id_tabel3`, `jumlah`, `harga`) VALUES
(1, '1-11 Pcs', '40000'),
(4, '12-24 Pcs', '38000'),
(5, '25-100 Pcs', '35000'),
(6, '100-200 Pcs', '33000'),
(7, '>200 Pcs', '30000');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_login`);

--
-- Indeks untuk tabel `portofolio`
--
ALTER TABLE `portofolio`
  ADD PRIMARY KEY (`id_portofolio`);

--
-- Indeks untuk tabel `tabel1`
--
ALTER TABLE `tabel1`
  ADD PRIMARY KEY (`id_tabel1`);

--
-- Indeks untuk tabel `tabel2`
--
ALTER TABLE `tabel2`
  ADD PRIMARY KEY (`id_tabel2`);

--
-- Indeks untuk tabel `tabel3`
--
ALTER TABLE `tabel3`
  ADD PRIMARY KEY (`id_tabel3`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `login`
--
ALTER TABLE `login`
  MODIFY `id_login` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `portofolio`
--
ALTER TABLE `portofolio`
  MODIFY `id_portofolio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tabel1`
--
ALTER TABLE `tabel1`
  MODIFY `id_tabel1` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `tabel2`
--
ALTER TABLE `tabel2`
  MODIFY `id_tabel2` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tabel3`
--
ALTER TABLE `tabel3`
  MODIFY `id_tabel3` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
