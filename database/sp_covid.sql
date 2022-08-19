-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 19 Agu 2022 pada 01.05
-- Versi server: 5.7.33
-- Versi PHP: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sp_covid`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `akun`
--

CREATE TABLE `akun` (
  `username` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `hak` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `akun`
--

INSERT INTO `akun` (`username`, `password`, `nama`, `hak`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', 'admin'),
('dokter', 'd22af4180eee4bd95072eb90f94930e5', 'Doktor', 'dokter'),
('wulan', 'aae79912250d18756900f742270de7e1', 'wulan', 'dokter');

-- --------------------------------------------------------

--
-- Struktur dari tabel `aturan_pakar`
--

CREATE TABLE `aturan_pakar` (
  `id_aturan_pakar` int(11) NOT NULL,
  `kode_virus` varchar(20) NOT NULL,
  `kode_gejala` varchar(20) NOT NULL,
  `bobot` float NOT NULL,
  `tampung` float NOT NULL,
  `tampung_ada` float NOT NULL,
  `tampung_tidak_ada` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `aturan_pakar`
--

INSERT INTO `aturan_pakar` (`id_aturan_pakar`, `kode_virus`, `kode_gejala`, `bobot`, `tampung`, `tampung_ada`, `tampung_tidak_ada`) VALUES
(8, 'B.1.1.529', 'BB', 0, 1, 0, 0),
(10, 'B.1.1.529', 'D', 0, 1, 0, 0),
(13, 'B.1.1.7', 'BB', 0, 1, 0, 0),
(14, 'B.1.1.7', 'D', 0, 1, 0, 0),
(16, 'B.1.427', 'BB', 0, 1, 0, 0),
(17, 'B.1.427', 'D', 0, 1, 0, 0),
(31, 'B.1.621', 'BB', 0, 1, 0, 0),
(32, 'B.1.621', 'D', 1, 1, 0, 0),
(37, 'BA.2', 'BB', 0, 1, 0, 0),
(38, 'BA.2', 'D', 0, 1, 0, 0),
(40, 'BA.3', 'BB', 0, 1, 0, 0),
(41, 'BA.3', 'D', 0, 1, 0, 0),
(43, 'BA.4', 'BB', 1, 1, 0, 0),
(44, 'BA.4', 'D', 0, 1, 0, 0),
(46, 'BA.5', 'BB', 1, 1, 0, 0),
(47, 'BA.5', 'D', 0, 1, 0, 0),
(49, 'C.37', 'BB', 0, 1, 0, 0),
(50, 'C.37', 'D', 0, 1, 0, 0),
(58, 'P.3', 'BB', 0, 1, 0, 0),
(59, 'P.3', 'D', 0, 1, 0, 0),
(60, 'B.1.1.529', 'DE', 0, 1, 0, 0),
(61, 'B.1.1.7', 'DE', 0, 1, 0, 0),
(63, 'B.1.427', 'DE', 0, 1, 0, 0),
(68, 'B.1.621', 'DE', 0, 1, 0, 0),
(70, 'BA.2', 'DE', 0, 1, 0, 0),
(71, 'BA.3', 'DE', 0, 1, 0, 0),
(72, 'BA.4', 'DE', 0, 1, 0, 0),
(73, 'BA.5', 'DE', 0, 1, 0, 0),
(74, 'C.37', 'DE', 0, 1, 0, 0),
(77, 'P.3', 'DE', 0, 1, 0, 0),
(78, 'B.1.1.529', 'HIPP', 1, 1, 0, 0),
(79, 'B.1.1.7', 'HIPP', 1, 1, 0, 0),
(81, 'B.1.427', 'HIPP', 0, 1, 0, 0),
(86, 'B.1.621', 'HIPP', 1, 1, 0, 0),
(88, 'BA.2', 'HIPP', 0, 1, 0, 0),
(89, 'BA.3', 'HIPP', 0, 1, 0, 0),
(90, 'BA.4', 'HIPP', 0, 1, 0, 0),
(91, 'BA.5', 'HIPP', 0, 1, 0, 0),
(92, 'C.37', 'HIPP', 0, 1, 0, 0),
(95, 'P.3', 'HIPP', 0, 1, 0, 0),
(96, 'B.1.1.529', 'K', 1, 1.26562, 0.125, 0.125),
(97, 'B.1.1.7', 'K', 0, 1, 0, 0),
(99, 'B.1.427', 'K', 0, 1, 0, 0),
(104, 'B.1.621', 'K', 0, 1, 0, 0),
(106, 'BA.2', 'K', 0, 1, 0, 0),
(107, 'BA.3', 'K', 0, 1, 0, 0),
(108, 'BA.4', 'K', 0, 1, 0, 0),
(109, 'BA.5', 'K', 0, 1, 0, 0),
(110, 'C.37', 'K', 0, 1, 0, 0),
(113, 'P.3', 'K', 0, 1, 0, 0),
(114, 'B.1.1.529', 'KRHP', 0, 1, 0, 0),
(115, 'B.1.1.7', 'KRHP', 0, 1, 0, 0),
(117, 'B.1.427', 'KRHP', 0, 1, 0, 0),
(122, 'B.1.621', 'KRHP', 0, 1, 0, 0),
(124, 'BA.2', 'KRHP', 0, 1, 0, 0),
(125, 'BA.3', 'KRHP', 0, 1, 0, 0),
(126, 'BA.4', 'KRHP', 1, 1, 0, 0),
(127, 'BA.5', 'KRHP', 1, 1, 0, 0),
(128, 'C.37', 'KRHP', 0, 1, 0, 0),
(131, 'P.3', 'KRHP', 0, 1, 0, 0),
(132, 'B.1.1.529', 'MM', 0, 1, 0, 0),
(133, 'B.1.1.7', 'MM', 0, 1, 0, 0),
(135, 'B.1.427', 'MM', 0, 1, 0, 0),
(140, 'B.1.621', 'MM', 0, 1, 0, 0),
(142, 'BA.2', 'MM', 0, 1, 0, 0),
(143, 'BA.3', 'MM', 0, 1, 0, 0),
(144, 'BA.4', 'MM', 0, 1, 0, 0),
(145, 'BA.5', 'MM', 0, 1, 0, 0),
(146, 'C.37', 'MM', 0, 1, 0, 0),
(149, 'P.3', 'MM', 0, 1, 0, 0),
(150, 'B.1.1.529', 'ND', 1, 1, 0, 0),
(151, 'B.1.1.7', 'ND', 1, 1, 0, 0),
(153, 'B.1.427', 'ND', 0, 1, 0, 0),
(158, 'B.1.621', 'ND', 0, 1, 0, 0),
(160, 'BA.2', 'ND', 0, 1, 0, 0),
(161, 'BA.3', 'ND', 0, 1, 0, 0),
(162, 'BA.4', 'ND', 0, 1, 0, 0),
(163, 'BA.5', 'ND', 0, 1, 0, 0),
(164, 'C.37', 'ND', 0, 1, 0, 0),
(167, 'P.3', 'ND', 0, 1, 0, 0),
(168, 'B.1.1.529', 'P', 1, 1, 0, 0),
(169, 'B.1.1.7', 'P', 0, 1, 0, 0),
(171, 'B.1.427', 'P', 1, 1, 0, 0),
(176, 'B.1.621', 'P', 0, 1, 0, 0),
(178, 'BA.2', 'P', 1, 1, 0, 0),
(179, 'BA.3', 'P', 0, 1, 0, 0),
(180, 'BA.4', 'P', 1, 1, 0, 0),
(181, 'BA.5', 'P', 1, 1, 0, 0),
(182, 'C.37', 'P', 0, 1, 0, 0),
(185, 'P.3', 'P', 0, 1, 0, 0),
(186, 'B.1.1.529', 'SK', 1, 1, 0, 0),
(187, 'B.1.1.7', 'SK', 0, 1, 0, 0),
(189, 'B.1.427', 'SK', 1, 1, 0, 0),
(194, 'B.1.621', 'SK', 0, 1, 0, 0),
(196, 'BA.2', 'SK', 0, 1, 0, 0),
(197, 'BA.3', 'SK', 0, 1, 0, 0),
(198, 'BA.4', 'SK', 1, 1, 0, 0),
(199, 'BA.5', 'SK', 1, 1, 0, 0),
(200, 'C.37', 'SK', 0, 1, 0, 0),
(203, 'P.3', 'SK', 0, 1, 0, 0),
(204, 'B.1.1.529', 'SN', 1, 1, 0, 0),
(205, 'B.1.1.7', 'SN', 1, 1, 0, 0),
(207, 'B.1.427', 'SN', 1, 1, 0, 0),
(212, 'B.1.621', 'SN', 0, 1, 0, 0),
(214, 'BA.2', 'SN', 0, 1, 0, 0),
(215, 'BA.3', 'SN', 0, 1, 0, 0),
(216, 'BA.4', 'SN', 0, 1, 0, 0),
(217, 'BA.5', 'SN', 0, 1, 0, 0),
(218, 'C.37', 'SN', 0, 1, 0, 0),
(221, 'P.3', 'SN', 0, 1, 0, 0),
(222, 'B.1.1.529', 'ST', 1, 1, 0, 0),
(223, 'B.1.1.7', 'ST', 0, 1, 0, 0),
(225, 'B.1.427', 'ST', 1, 1, 0, 0),
(230, 'B.1.621', 'ST', 0, 1, 0, 0),
(232, 'BA.2', 'ST', 1, 1, 0, 0),
(233, 'BA.3', 'ST', 0, 1, 0, 0),
(234, 'BA.4', 'ST', 1, 1, 0, 0),
(235, 'BA.5', 'ST', 1, 1, 0, 0),
(236, 'C.37', 'ST', 0, 1, 0, 0),
(239, 'P.3', 'ST', 0, 1, 0, 0),
(240, 'B.1.1.529', 'F', 0, 1, 0, 0),
(241, 'B.1.1.7', 'F', 0, 1, 0, 0),
(243, 'B.1.427', 'F', 0, 1, 0, 0),
(248, 'B.1.621', 'F', 0, 1, 0, 0),
(250, 'BA.2', 'F', 1, 1.30909, 0.2, 0.0909091),
(251, 'BA.3', 'F', 0, 1, 0, 0),
(252, 'BA.4', 'F', 0, 1, 0, 0),
(253, 'BA.5', 'F', 0, 1, 0, 0),
(254, 'C.37', 'F', 0, 1, 0, 0),
(257, 'P.3', 'F', 0, 1, 0, 0),
(258, 'B.1.1.529', 'BPP', 0, 1, 0, 0),
(259, 'B.1.1.7', 'BPP', 0, 1, 0, 0),
(261, 'B.1.427', 'BPP', 0, 1, 0, 0),
(266, 'B.1.621', 'BPP', 0, 1, 0, 0),
(268, 'BA.2', 'BPP', 1, 1, 0, 0),
(269, 'BA.3', 'BPP', 0, 1, 0, 0),
(270, 'BA.4', 'BPP', 0, 1, 0, 0),
(271, 'BA.5', 'BPP', 0, 1, 0, 0),
(272, 'C.37', 'BPP', 0, 1, 0, 0),
(275, 'P.3', 'BPP', 0, 1, 0, 0),
(295, 'B.1.617.2', 'BB', 0, 1, 0, 0),
(296, 'B.1.617.2', 'BPP', 0, 1, 0, 0),
(297, 'B.1.617.2', 'D', 0, 1, 0, 0),
(298, 'B.1.617.2', 'DE', 0, 1, 0, 0),
(299, 'B.1.617.2', 'F', 0, 1, 0, 0),
(300, 'B.1.617.2', 'HIPP', 1, 1, 0, 0),
(301, 'B.1.617.2', 'K', 1, 1.26984, 0.142857, 0.111111),
(302, 'B.1.617.2', 'KRHP', 0, 1, 0, 0),
(303, 'B.1.617.2', 'MM', 0, 1, 0, 0),
(304, 'B.1.617.2', 'ND', 0, 1, 0, 0),
(305, 'B.1.617.2', 'P', 1, 1, 0, 0),
(306, 'B.1.617.2', 'SK', 1, 1, 0, 0),
(307, 'B.1.617.2', 'SN', 1, 1, 0, 0),
(308, 'B.1.617.2', 'ST', 1, 1, 0, 0),
(310, 'B. 1.351', 'BB', 0, 1, 0, 0),
(311, 'B. 1.351', 'BPP', 0, 1, 0, 0),
(312, 'B. 1.351', 'D', 0, 1, 0, 0),
(313, 'B. 1.351', 'DE', 0, 1, 0, 0),
(314, 'B. 1.351', 'F', 0, 1, 0, 0),
(315, 'B. 1.351', 'HIPP', 1, 1, 0, 0),
(316, 'B. 1.351', 'K', 0, 1, 0, 0),
(317, 'B. 1.351', 'KRHP', 0, 1, 0, 0),
(318, 'B. 1.351', 'MM', 0, 1, 0, 0),
(319, 'B. 1.351', 'ND', 1, 1, 0, 0),
(320, 'B. 1.351', 'P', 0, 1, 0, 0),
(321, 'B. 1.351', 'SK', 0, 1, 0, 0),
(322, 'B. 1.351', 'SN', 1, 1, 0, 0),
(323, 'B. 1.351', 'ST', 0, 1, 0, 0),
(324, 'B. 1.351', 'JJ', 0, 1, 0, 0),
(325, 'B.1.1.529', 'JJ', 0, 1, 0, 0),
(326, 'B.1.1.7', 'JJ', 0, 1, 0, 0),
(327, 'B.1.427', 'JJ', 0, 1, 0, 0),
(329, 'B.1.617.2', 'JJ', 0, 1, 0, 0),
(330, 'B.1.621', 'JJ', 0, 1, 0, 0),
(331, 'BA.2', 'JJ', 0, 1, 0, 0),
(332, 'BA.3', 'JJ', 0, 1, 0, 0),
(333, 'BA.4', 'JJ', 0, 1, 0, 0),
(334, 'BA.5', 'JJ', 0, 1, 0, 0),
(335, 'C.37', 'JJ', 0, 1, 0, 0),
(336, 'P.3', 'JJ', 0, 1, 0, 0),
(351, 'JJ', 'BB', 0, 1, 0, 0),
(352, 'JJ', 'BPP', 0, 1, 0, 0),
(353, 'JJ', 'D', 0, 1, 0, 0),
(354, 'JJ', 'DE', 0, 1, 0, 0),
(355, 'JJ', 'F', 0, 1, 0, 0),
(356, 'JJ', 'HIPP', 0, 1, 0, 0),
(357, 'JJ', 'JJ', 1, 2.13333, 1, 0.0666667),
(358, 'JJ', 'K', 0, 1, 0, 0),
(359, 'JJ', 'KRHP', 0, 1, 0, 0),
(360, 'JJ', 'MM', 0, 1, 0, 0),
(361, 'JJ', 'ND', 0, 1, 0, 0),
(362, 'JJ', 'P', 0, 1, 0, 0),
(363, 'JJ', 'SK', 0, 1, 0, 0),
(364, 'JJ', 'SN', 0, 1, 0, 0),
(365, 'JJ', 'ST', 0, 1, 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `gejala`
--

CREATE TABLE `gejala` (
  `kode_gejala` varchar(20) NOT NULL,
  `nama_gejala` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `gejala`
--

INSERT INTO `gejala` (`kode_gejala`, `nama_gejala`) VALUES
('BB', 'Bersin - Bersin'),
('BPP', 'Badan Pegal - Pegal'),
('D', 'Demam'),
('DE', 'Diare'),
('F', 'Flu'),
('HIPP', 'Hilang Indra Perasa dan Penciuaman'),
('JJ', 'JJ Denam'),
('K', 'Kelelahan'),
('KRHP', 'Kelelahan Ringan Hingga Parah'),
('MM', 'Mual Muntah'),
('ND', 'Nyeri Dada'),
('P', 'Pilek'),
('SK', 'Sakit Kepala'),
('SN', 'Sesak Napas'),
('ST', 'Sakit Tenggorokan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kasus`
--

CREATE TABLE `kasus` (
  `id_kasus` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(15) DEFAULT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_telepon` varchar(20) NOT NULL,
  `kode_virus` varchar(255) NOT NULL,
  `umur` int(11) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kasus`
--

INSERT INTO `kasus` (`id_kasus`, `nama`, `jenis_kelamin`, `alamat`, `no_telepon`, `kode_virus`, `umur`, `tanggal`) VALUES
(22, 'adam', 'Laki Laki', 'cijambi', '089998878890', 'BA.2', 23, '2022-07-22'),
(27, 'Tantra Sanjaya', 'Laki Laki', 'jl. Cipedes Tengah No. 187 Rt. 04 Rw. 03 Kel. Sukagalih Kec. Sukajadi Kota Bandung Provinsi Jawa Barat', '086874628326', 'B.1.621', 23, '2022-07-22'),
(30, 'JJ', 'Perempuan', 'cibinong', '089978876', 'JJ', 22, '2022-07-30'),
(31, 'sd', NULL, '123', '123', 'JJ', 123, '2022-08-10');

-- --------------------------------------------------------

--
-- Struktur dari tabel `riwayat_delete`
--

CREATE TABLE `riwayat_delete` (
  `id` int(11) NOT NULL,
  `kode_virus` varchar(255) NOT NULL,
  `nama_virus` varchar(255) NOT NULL,
  `solusi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `riwayat_delete`
--

INSERT INTO `riwayat_delete` (`id`, `kode_virus`, `nama_virus`, `solusi`) VALUES
(1, 'B.1.526', 'Varian Iota', '1. Minum obat yang dijual bebas untuk mengurangi rasa sakit, demam, dan batuk. Namun, jangan berikan aspirin pada anak-anak. Selain itu, jangan berikan obat batuk pada anak di bawah empat tahun. 2. Gunakan pelembap ruangan atau mandi air panas untuk membantu meredakan sakit tenggorokan dan batuk. 3. Perbanyak istirahat. 4. Perbanyak asupan cairan tubuh.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `virus`
--

CREATE TABLE `virus` (
  `kode_virus` varchar(20) NOT NULL,
  `nama_virus` varchar(255) NOT NULL,
  `solusi` text NOT NULL,
  `tampung` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `virus`
--

INSERT INTO `virus` (`kode_virus`, `nama_virus`, `solusi`, `tampung`) VALUES
('B. 1.351', 'Varian Beta', 'diam dirumah\r\n', 0),
('B.1.1.529', 'Varian Omicron', '1. Minum obat yang dijual bebas untuk mengurangi rasa sakit, demam, dan batuk. Namun, jangan berikan aspirin pada anak-anak. Selain itu, jangan berikan obat batuk pada anak di bawah empat tahun. 2. Gunakan pelembap ruangan atau mandi air panas untuk membantu meredakan sakit tenggorokan dan batuk. 3. Perbanyak istirahat. 4. Perbanyak asupan cairan tubuh.\r\n', 0),
('B.1.1.7', 'Varian Alfa', '1. Minum obat yang dijual bebas untuk mengurangi rasa sakit, demam, dan batuk. Namun, jangan berikan aspirin pada anak-anak. Selain itu, jangan berikan obat batuk pada anak di bawah empat tahun. 2. Gunakan pelembap ruangan atau mandi air panas untuk membantu meredakan sakit tenggorokan dan batuk. 3. Perbanyak istirahat. 4. Perbanyak asupan cairan tubuh.\r\n', 0),
('B.1.427', 'Varian Epsilon', '1. Minum obat yang dijual bebas untuk mengurangi rasa sakit, demam, dan batuk. Namun, jangan berikan aspirin pada anak-anak. Selain itu, jangan berikan obat batuk pada anak di bawah empat tahun. 2. Gunakan pelembap ruangan atau mandi air panas untuk membantu meredakan sakit tenggorokan dan batuk. 3. Perbanyak istirahat. 4. Perbanyak asupan cairan tubuh.\r\n', 0),
('B.1.617.2', 'Varian Delta', 'Istirahat yang cukup', 0),
('B.1.621', 'Varian Mu', '1. Minum obat yang dijual bebas untuk mengurangi rasa sakit, demam, dan batuk. Namun, jangan berikan aspirin pada anak-anak. Selain itu, jangan berikan obat batuk pada anak di bawah empat tahun. 2. Gunakan pelembap ruangan atau mandi air panas untuk membantu meredakan sakit tenggorokan dan batuk. 3. Perbanyak istirahat. 4. Perbanyak asupan cairan tubuh.\r\n', 0),
('BA.2', 'Subvarian Omicorn BA.2', '1. Minum obat yang dijual bebas untuk mengurangi rasa sakit, demam, dan batuk. Namun, jangan berikan aspirin pada anak-anak. Selain itu, jangan berikan obat batuk pada anak di bawah empat tahun. 2. Gunakan pelembap ruangan atau mandi air panas untuk membantu meredakan sakit tenggorokan dan batuk. 3. Perbanyak istirahat. 4. Perbanyak asupan cairan tubuh.\r\n', 0),
('BA.3', 'Subvarian Omicorn BA.3', '1. Minum obat yang dijual bebas untuk mengurangi rasa sakit, demam, dan batuk. Namun, jangan berikan aspirin pada anak-anak. Selain itu, jangan berikan obat batuk pada anak di bawah empat tahun. 2. Gunakan pelembap ruangan atau mandi air panas untuk membantu meredakan sakit tenggorokan dan batuk. 3. Perbanyak istirahat. 4. Perbanyak asupan cairan tubuh.\r\n', 0),
('BA.4', 'Subvarian Omicorn BA.4', '1. Minum obat yang dijual bebas untuk mengurangi rasa sakit, demam, dan batuk. Namun, jangan berikan aspirin pada anak-anak. Selain itu, jangan berikan obat batuk pada anak di bawah empat tahun. 2. Gunakan pelembap ruangan atau mandi air panas untuk membantu meredakan sakit tenggorokan dan batuk. 3. Perbanyak istirahat. 4. Perbanyak asupan cairan tubuh.\r\n', 0),
('BA.5', 'Subvarian Omicorn BA.5', '1. Minum obat yang dijual bebas untuk mengurangi rasa sakit, demam, dan batuk. Namun, jangan berikan aspirin pada anak-anak. Selain itu, jangan berikan obat batuk pada anak di bawah empat tahun. 2. Gunakan pelembap ruangan atau mandi air panas untuk membantu meredakan sakit tenggorokan dan batuk. 3. Perbanyak istirahat. 4. Perbanyak asupan cairan tubuh.\r\n', 0),
('C.37', 'Varian Lambda', '1. Minum obat yang dijual bebas untuk mengurangi rasa sakit, demam, dan batuk. Namun, jangan berikan aspirin pada anak-anak. Selain itu, jangan berikan obat batuk pada anak di bawah empat tahun. 2. Gunakan pelembap ruangan atau mandi air panas untuk membantu meredakan sakit tenggorokan dan batuk. 3. Perbanyak istirahat. 4. Perbanyak asupan cairan tubuh.\r\n', 0),
('JJ', 'JJ Virus', 'Jauhi JJ', 0),
('P.3', 'Varian Theta', '1. Minum obat yang dijual bebas untuk mengurangi rasa sakit, demam, dan batuk. Namun, jangan berikan aspirin pada anak-anak. Selain itu, jangan berikan obat batuk pada anak di bawah empat tahun. 2. Gunakan pelembap ruangan atau mandi air panas untuk membantu meredakan sakit tenggorokan dan batuk. 3. Perbanyak istirahat. 4. Perbanyak asupan cairan tubuh.\r\n', 0);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`username`);

--
-- Indeks untuk tabel `aturan_pakar`
--
ALTER TABLE `aturan_pakar`
  ADD PRIMARY KEY (`id_aturan_pakar`),
  ADD KEY `kode_virus` (`kode_virus`),
  ADD KEY `kode_gejala` (`kode_gejala`);

--
-- Indeks untuk tabel `gejala`
--
ALTER TABLE `gejala`
  ADD PRIMARY KEY (`kode_gejala`);

--
-- Indeks untuk tabel `kasus`
--
ALTER TABLE `kasus`
  ADD PRIMARY KEY (`id_kasus`),
  ADD KEY `kode_virus` (`kode_virus`);

--
-- Indeks untuk tabel `riwayat_delete`
--
ALTER TABLE `riwayat_delete`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `virus`
--
ALTER TABLE `virus`
  ADD PRIMARY KEY (`kode_virus`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `aturan_pakar`
--
ALTER TABLE `aturan_pakar`
  MODIFY `id_aturan_pakar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=366;

--
-- AUTO_INCREMENT untuk tabel `kasus`
--
ALTER TABLE `kasus`
  MODIFY `id_kasus` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT untuk tabel `riwayat_delete`
--
ALTER TABLE `riwayat_delete`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `aturan_pakar`
--
ALTER TABLE `aturan_pakar`
  ADD CONSTRAINT `aturan_pakar_ibfk_1` FOREIGN KEY (`kode_gejala`) REFERENCES `gejala` (`kode_gejala`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `aturan_pakar_ibfk_2` FOREIGN KEY (`kode_virus`) REFERENCES `virus` (`kode_virus`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `kasus`
--
ALTER TABLE `kasus`
  ADD CONSTRAINT `kasus_ibfk_1` FOREIGN KEY (`kode_virus`) REFERENCES `virus` (`kode_virus`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
