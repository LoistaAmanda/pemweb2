-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Bulan Mei 2024 pada 04.38
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_puskesmas`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelurahan`
--

CREATE TABLE `kelurahan` (
  `id_kelurahan` int(11) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `kecamatan` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kelurahan`
--

INSERT INTO `kelurahan` (`id_kelurahan`, `nama`, `kecamatan`) VALUES
(1, 'Beji', 'Beji'),
(2, 'Bojongsari Lama', 'Bojongsari'),
(3, 'Cilodong', 'Cilodong'),
(4, 'Cisalak Pasar', 'Cimanggis'),
(5, 'Cinere', 'Cinere');

-- --------------------------------------------------------

--
-- Struktur dari tabel `paramedik`
--

CREATE TABLE `paramedik` (
  `id` int(11) NOT NULL,
  `nama` varchar(45) DEFAULT NULL,
  `gender` char(1) DEFAULT NULL,
  `tmp_lahir` varchar(30) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `kategori` enum('Umum','Spesialis','Bidan','Dokter Gigi','Anastesi','Bedah','Ginekolog') DEFAULT NULL,
  `telpon` varchar(20) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `unit_kerja_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `paramedik`
--

INSERT INTO `paramedik` (`id`, `nama`, `gender`, `tmp_lahir`, `tgl_lahir`, `kategori`, `telpon`, `alamat`, `unit_kerja_id`) VALUES
(1, 'Dr. Karim ', 'L', 'Jakarta', '1984-05-07', 'Umum', '082113141516', 'Jl. Minahasa', 1),
(2, 'Dr. Nabilah Hana', 'P', 'Depok', '1990-12-25', 'Bidan', '0814253647', 'Jl. Edelweis', 2),
(3, 'Dr. Freya', 'P', 'Jakarta', '1995-02-13', 'Spesialis', '088112324567', 'Jl. Sudirman', 3),
(4, 'Dr. Ary Wijaya', 'L', 'Semarang', '2023-12-19', 'Bedah', '089736352671', 'Jl. Pinus', 4),
(5, 'Dr. Shani Natio', 'P', 'Yogyakarta', '2024-10-05', 'Anastesi', '08765432123', 'Jl. Rapsodi', 5),
(6, 'Dr. Joko Suryo', 'L', 'Magelang', '2024-06-13', 'Spesialis', '08987656776', 'Jl. Harapan', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pasien`
--

CREATE TABLE `pasien` (
  `id_pasien` int(11) NOT NULL,
  `kode` varchar(10) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `tmp_lahir` varchar(30) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `gender` char(1) NOT NULL,
  `email` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `kelurahan_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pasien`
--

INSERT INTO `pasien` (`id_pasien`, `kode`, `nama`, `tmp_lahir`, `tgl_lahir`, `gender`, `email`, `alamat`, `kelurahan_id`) VALUES
(1, 'P001', 'Loista Amanda Noviar', 'Depok', '2004-02-11', 'P', 'loyi@gmail.com', 'Jl. Melati', 3),
(2, 'P002', 'Zalfa ', 'Depok', '2004-10-27', 'P', 'julpa@gmail.com', 'Jl. Merapi', 4),
(3, 'P003', 'Aprilia', 'Bekasi', '1999-02-10', 'P', 'aprilia@gmail.com', 'Jl. Arnoldi', 1),
(4, 'P004', 'Nuril', 'Tangerang', '2009-05-15', 'P', 'nuril@gmail.com', 'Jl. Apel', 5),
(5, 'P005', 'Farid Jermias', 'Manado', '2023-11-11', 'L', 'farid@gmail.com', 'Jl. Juanda', 1),
(6, 'P006', 'Syarif ', 'Gorontalo', '2003-06-05', 'L', 'ulip@gmail.com', 'Jl. Telaga Biru', 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `periksa`
--

CREATE TABLE `periksa` (
  `id` int(11) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `berat` double DEFAULT NULL,
  `tinggi` double DEFAULT NULL,
  `tensi` varchar(20) DEFAULT NULL,
  `keterangan` varchar(100) DEFAULT NULL,
  `pasien_id` int(11) DEFAULT NULL,
  `dokter_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `periksa`
--

INSERT INTO `periksa` (`id`, `tanggal`, `berat`, `tinggi`, `tensi`, `keterangan`, `pasien_id`, `dokter_id`) VALUES
(1, '2024-05-08', 55, 178, '120/80', 'Normal', 1, 1),
(2, '2024-05-08', 40, 169, '130/85', 'Perlu tindakan lebih lanjut', 2, 2),
(3, '2024-05-08', 65, 165, '120/80', 'Perlu tindakan medis', 3, 1),
(4, '2024-05-08', 77, 177, '140/90', 'perlu tindakan medis lebih lajut', 4, 3),
(5, '2024-05-09', 88, 150, '120/40', 'Normal', 5, 1),
(6, '2024-05-09', 55, 160, '135/88', 'Pasien memerlukan tindakan medis lebih lanjut', 6, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `unit_kerja`
--

CREATE TABLE `unit_kerja` (
  `id` int(11) NOT NULL,
  `nama` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `unit_kerja`
--

INSERT INTO `unit_kerja` (`id`, `nama`) VALUES
(1, 'Puskesmas Adem'),
(2, 'Puskesmas Tentram'),
(3, 'Puskesmas Sriasih'),
(4, 'Puskesmas Wijaya'),
(5, 'Puskesmas Ciloy');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `name`) VALUES
(1, 'loistamnd', '12345678910', 'Loista Amanda Noviar');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kelurahan`
--
ALTER TABLE `kelurahan`
  ADD PRIMARY KEY (`id_kelurahan`);

--
-- Indeks untuk tabel `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id_pasien`),
  ADD KEY `kelurahan_id` (`kelurahan_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kelurahan`
--
ALTER TABLE `kelurahan`
  MODIFY `id_kelurahan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id_pasien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `pasien`
--
ALTER TABLE `pasien`
  ADD CONSTRAINT `pasien_ibfk_1` FOREIGN KEY (`kelurahan_id`) REFERENCES `kelurahan` (`id_kelurahan`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
