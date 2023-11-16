-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Nov 2023 pada 16.29
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
-- Database: `users`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesan`
--

CREATE TABLE `pesan` (
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pesan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pesan`
--

INSERT INTO `pesan` (`nama`, `email`, `pesan`) VALUES
('', '', ''),
('ijam', 'dvdb', 'rvghehgioewbipwejblsibvrisbjirsnbikjivkeriobnoernvlnslknvlkrdnbl nerfbnreberedbmrebdmbdmb;dfm'),
('vsjdvhsj', 'dvnlskdnv', 'lvniewi'),
('paler', 'ijamnixam', 'selamat datang diwelcome\r\n'),
('Nizam', 'ikam', 'kamu jelek'),
('paler', 'kami', 'kaakakakkaak'),
('kaki', 'lala', 'dsknkn'),
('iajmmm', 'sakvjksniosn', 'kami dari C11'),
('casvnjv', 'sjvka', 'lvniewi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` enum('user','admin') DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`username`, `password`, `role`) VALUES
('Muhammad Nizam', '$2y$10$t.kzFuDxqz5z/Y/nWz.Z1utddo.H5qdW.afDsg51PUbXPmFHzMG0q', 'user'),
('ijam', '$2y$10$vXraOXfRChNgMf8S7Plxr.VavC1SjD7cdkamCIcIvxV/HvVEdyzWu', 'user'),
('rangga', '$2y$10$qlRKS.dTzHLxweBZzu/YMeHa6h9vjBL1L3di2DTK7N/YGJ9DIEndG', 'user'),
('padli', '$2y$10$moXuYQL5lmlLxyU9x77IMu9a7YWRc3C0mUkyeFagIiOhFf6dUl/Zq', 'user'),
('jusman', '$2y$10$T3bKcU/cTBBZVwyGvaweYuWLhG97FV47ykvqNVon.r/M0wONOkmpm', 'user'),
('mansur', '$2y$10$CJhxl3x8H1PqBRExP41FnuaZyMokXVKmz53gy5yu3xr0CgRNEH/PS', 'user'),
('rangga', '$2y$10$SS6QzAcKl/rvmWolCBwwZOmZLE0G7JKo27CeZ6P/FWdRxV3W2/IpS', 'user'),
('ikaa', '$2y$10$ZunEIer7nNjq5POgH62n/u/Gx4jipcb0RXVeTkVHHGAGYjvH3Nohm', 'user'),
('nijam', '$2y$10$HxwcbUHXTHUMNh4/liMrD.v20X3LgQfzJjsqpW7JilyQ9EmiAWCUq', 'user'),
('fatur', '$2y$10$pz1N8w2ds.K7yOqehTGiY.3NSqYScPdXeHR6AstmBnKa0rlDt8DGG', 'user'),
('1', '$2y$10$3OuyerrMfGFwWrD1Pc.IBeuF3AbPcOgTknrEJ/3Cl5BP9KdHqhaqq', 'user'),
('nizam', '$2y$10$p5iK1NpRPEWBmgYMcYPvzuXz/0UnpUiuT/98sSo57c08UhBhtmL2S', 'user'),
('enal', '$2y$10$88AqA7C5Y7p9VzdJXvXOjubdhEmitqGS5VFcneax95UCkCVqNfVDi', 'user'),
('admin', 'hashed_password', 'admin'),
('admin', '$2y$10$y1umFF8aFnSsNqEb3ShU6OQfqXN9P3jQriOgKsW8EvQR/oqrOu.o6', 'user'),
('admin', '$2y$10$sn3l.1/KKIpNV/JoMJZobekTDcTp9l5NFgzja2IfEdgHvSA28Fuau', 'user'),
('admin', '123', 'admin'),
('ijam', '1234', 'admin'),
('admin', '$2y$10$cPjXdutqlo4cUBloPnCviOD9KeUFwq6MOSVynESS2cVYCexEG6aFS', 'user'),
('ijam', '$2y$10$cYYZ6ylCBsHWnj94ctpxXOU5gNqdB2q4FrCsXAniYIav834OC4TmS', 'admin'),
('juned', '$2y$10$qgFJVezSDXj5t8Efpj691.8fjcgFKpTIse3g8E9CZf9xVS5RRjWsC', 'admin'),
('rangga', '$2y$10$QDvm/PHLt6nSPcRmJFa2wOOFj6qqjoHQkQfxf5cs4nsekGFgDvRRW', 'user'),
('ucup', '$2y$10$/Y6re6CpOOjeaEYaGkodF.5XDlE7ibBZwRKxGU.KyATzbmFxzjibq', 'user'),
('udin', '$2y$10$Ymvs77EaAt./ywhaoeqog.IAMnXystCvKo7Wtfi/EAsgE23LNVG4m', 'user'),
('amir', '$2y$10$BoLE6dso638KaBd.V022GOA9xkHGo/N8npgWjheRa.kRQSNReiakq', 'user'),
('ijamm', '$2y$10$BIyJeZr3.jdmLAgtORQj3Oa9v/cdpUbmGir5Y6k66Qq7MopwHa4S6', 'user'),
('minyak', '$2y$10$Mm7.eZpHJNnt4McEmYsjGuj4xUtdBCTMY5psiMByFYJAW7FDhk6SS', 'admin'),
('ijam', '$2y$10$psEmNYCD1xFO/3OPDt/3nOSUw2Ci4aYao.MNroipJA21hGmBlAEay', 'user'),
('ijam', '$2y$10$iUhbEDLuJVpCxLn/V3gz5eA/NrIh7P3l1.OJ2WhzC5iIElUt0rzd2', 'user'),
('ijam', '$2y$10$JFXli4B1xbP22zn8Sz0.y.8sk7wgUJcwddOE5Uopqb3c36vfZ6CxK', 'user'),
('Muhammad Nizam', '$2y$10$7CYuK84qSZWE53hc0Y7Gl.iKoKjTSgG8MXhJdUZ1RAs9VsY0wV7km', 'admin'),
('hakim', '$2y$10$hGb0p.F9NNqOQBCaXYzOou3/7nGofCIogmN/GV4nePdwe9nhSG.UC', 'user'),
('kiki', '$2y$10$9rx9Msjy6IBAaJiLuoKlce/Ey7IJI5bIM15NWzyQSYLQ.hDF6jJiW', 'admin'),
('juned', '$2y$10$9q4w3T27iuwD7nLSG/mO..h2BvYxS5iSaLZKHKH.kRpZ29G4bLEVC', 'user'),
('juned1', '$2y$10$8mDXFczh9hNzQ8clcGLyRONHyey0yoDvISQ0x2leOc5mlKaca7ypi', 'user'),
('juned', '$2y$10$yyNhIhbZXd4ZnkKRX50keOchn2hyEl6wM/ji6VQ9VXwX7UU/lBPk.', 'user'),
('juned', '$2y$10$ekowtGeyNnBtXuz2OxGSu.lp6ayM7.dE9oO0s4gt0UFbzRfhaFZEW', 'user');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
