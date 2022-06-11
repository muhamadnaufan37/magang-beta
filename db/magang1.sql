-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Bulan Mei 2022 pada 07.42
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `magang`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bidang`
--

CREATE TABLE `bidang` (
  `id` int(11) NOT NULL,
  `kode_bidang` varchar(128) NOT NULL,
  `nama_bidang` varchar(225) NOT NULL,
  `s_bidang` int(1) NOT NULL,
  `deskripsi` varchar(225) NOT NULL,
  `type` varchar(128) NOT NULL,
  `reward` varchar(128) NOT NULL,
  `slot_siswa` int(11) NOT NULL,
  `slot_mhs` int(11) NOT NULL,
  `slot_mhs_penelitian` int(11) NOT NULL,
  `date_created` int(11) NOT NULL,
  `edit` varchar(225) NOT NULL,
  `file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `bidang`
--

INSERT INTO `bidang` (`id`, `kode_bidang`, `nama_bidang`, `s_bidang`, `deskripsi`, `type`, `reward`, `slot_siswa`, `slot_mhs`, `slot_mhs_penelitian`, `date_created`, `edit`, `file`) VALUES
(1, 'DISKOMINFO-01', 'Aplikasi Informatika', 1, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea earum placeat quis incidunt suscipit et fuga iste', '', '', 10, 5, 3, 1649576429, 'Administrator | 3', ''),
(2, 'DISKOMINFO-02', 'Teknologi Informasi Jaringan', 1, 'Lorem ipsum dolor sit amet consectetur adipisicing', '', '', 5, 5, 2, 1649585495, 'Administrator | 3', ''),
(3, 'DISKOMINFO-03', 'Informasi Komunikasi', 1, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea earum placeat quis incidunt suscipit et fuga iste', '', '', 3, 4, 5, 1649663069, 'Administrator | 3', ''),
(4, 'DISKOMINFO-04', 'Persandian dan Statistik', 1, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea earum placeat quis incidunt suscipit et fuga iste', '', '', 5, 5, 5, 1649663307, 'Administrator | 3', ''),
(5, 'DISKOMINFO-05', 'Sekretariat', 1, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea earum placeat quis incidunt suscipit et fuga iste', '', '', 7, 3, 1, 1649663357, 'Administrator | 3', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `email` varchar(128) NOT NULL,
  `v_email` tinyint(1) NOT NULL,
  `telepon` varchar(225) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(2) NOT NULL,
  `image` varchar(128) NOT NULL,
  `ipAddress` varchar(225) NOT NULL,
  `timezone` varchar(225) NOT NULL,
  `isp_name` varchar(225) NOT NULL,
  `online` varchar(225) NOT NULL,
  `date_created` varchar(128) NOT NULL,
  `nisn` int(11) NOT NULL,
  `nim` int(11) NOT NULL,
  `nik` int(16) NOT NULL,
  `tanggal_lahir` varchar(128) NOT NULL,
  `tempat_lahir` varchar(225) NOT NULL,
  `nama_ibu` varchar(128) NOT NULL,
  `telepon_ibu` int(12) NOT NULL,
  `jk` int(2) NOT NULL,
  `agama` int(11) NOT NULL,
  `alamat` varchar(225) NOT NULL,
  `kampus` varchar(128) NOT NULL,
  `nama_sekolah` varchar(225) NOT NULL,
  `kelas` varchar(2) NOT NULL,
  `jurusan` varchar(128) NOT NULL,
  `p_studi` varchar(128) NOT NULL,
  `jenjang` varchar(128) NOT NULL,
  `asal_sklh` varchar(128) NOT NULL,
  `s_instagram` varchar(128) NOT NULL,
  `s_twitter` varchar(128) NOT NULL,
  `s_faceboock` varchar(128) NOT NULL,
  `doc` varchar(128) NOT NULL,
  `s_magang` int(11) NOT NULL,
  `s_sertfikat` int(11) NOT NULL,
  `date_in` varchar(128) NOT NULL,
  `date_out` varchar(128) NOT NULL,
  `edit` varchar(225) NOT NULL,
  `add` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `v_email`, `telepon`, `password`, `role_id`, `is_active`, `image`, `ipAddress`, `timezone`, `isp_name`, `online`, `date_created`, `nisn`, `nim`, `nik`, `tanggal_lahir`, `tempat_lahir`, `nama_ibu`, `telepon_ibu`, `jk`, `agama`, `alamat`, `kampus`, `nama_sekolah`, `kelas`, `jurusan`, `p_studi`, `jenjang`, `asal_sklh`, `s_instagram`, `s_twitter`, `s_faceboock`, `doc`, `s_magang`, `s_sertfikat`, `date_in`, `date_out`, `edit`, `add`) VALUES
(3, 'Administrator', 'admin@admin.com', 1, '', '$2y$10$4pkRprlLp1olUBwBGlSHceQGCGARFVDYxbDOM78eDMgEH3XRNLEUO', 1, 1, 'default.jpg', '', '', '', '', '1647799670', 0, 0, 0, '', '', '', 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, '', '', '0', ''),
(4, 'Purwakartakab', 'petugas@petugas.com', 1, '', '$2y$10$eCgHqijCnpKevuMCPAa2G.AsQScJUed.aJ3fEgqDcbUTmP24Iu4be', 2, 1, 'default.jpg', '', '', '', '', '1647850013', 0, 0, 0, '', '', '', 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, '', '', '0', ''),
(5, 'mahasiswa', 'mahasiswa@mahasiswa.com', 1, '081920485343', '$2y$10$UMQUwgZQQXLZ66J0kA3rweFKmkYaTtgYOo8aT9hA4N0WKclFsKWo6', 5, 1, 'default.jpg', '', '', '', '', '1648530597', 0, 0, 0, '', '', '', 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, '', '', '0', ''),
(6, 'siswa', 'siswa@siswa.com', 1, '09320570297', '$2y$10$j4VT/ygPh//FZ/vOka/Nku/iyTYIh/1xUBLnn0r9BOzOqa4uz7n4S', 6, 1, 'default.jpg', '', '', '', '', '1648530664', 0, 0, 0, '', '', '', 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, '', '', '0', ''),
(7, 'testing', 'test@test.com', 0, '096784', '$2y$10$FC0zANcXyEx7o5W3oKzqKuSfFYooxJdIWqImkrmgyOGyAY7eelnKq', 1, 0, 'admin.png', '', '', '', '', '1650537619', 0, 0, 0, '', '', '', 0, 1, 0, '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, '', '', '', 'Administrator | 3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_token`
--

CREATE TABLE `user_token` (
  `id` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `token` varchar(128) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `web`
--

CREATE TABLE `web` (
  `id` int(11) NOT NULL,
  `author` varchar(225) NOT NULL,
  `desc_web` varchar(225) NOT NULL,
  `keyword_web` varchar(225) NOT NULL,
  `title` varchar(225) NOT NULL,
  `site_web` varchar(225) NOT NULL,
  `url_web` varchar(225) NOT NULL,
  `image_logo` varchar(128) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `web`
--

INSERT INTO `web` (`id`, `author`, `desc_web`, `keyword_web`, `title`, `site_web`, `url_web`, `image_logo`, `date_created`) VALUES
(1, 'Naufan', 'Aplikasi Sistem Informasi Magang', 'MAGANG, APTIKA, DISKOMINFO, PENDAFTARAN MAGANG, APLIKASI', 'Dinas Komunikasi dan Informatika Kabupaten Purwakarta', 'Bidang Aplikasi Informatika', 'magang.purwakartakab.go.id', 'logo1.jpg', 0);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `bidang`
--
ALTER TABLE `bidang`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `web`
--
ALTER TABLE `web`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `bidang`
--
ALTER TABLE `bidang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `web`
--
ALTER TABLE `web`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
