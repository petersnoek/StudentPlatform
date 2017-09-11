-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 11 sep 2017 om 09:08
-- Serverversie: 5.7.17-log
-- PHP-versie: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spdb`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(256) DEFAULT NULL,
  `password` varchar(256) DEFAULT NULL,
  `email` varchar(256) DEFAULT NULL,
  `leerling_nr` varchar(256) DEFAULT NULL,
  `klas` varchar(256) DEFAULT NULL,
  `geslacht` varchar(256) DEFAULT NULL,
  `geboortedatum` date DEFAULT NULL,
  `avatar` varbinary(8000) DEFAULT NULL,
  `hobby` varchar(254) NOT NULL,
  `motto` varchar(254) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `email`, `leerling_nr`, `klas`, `geslacht`, `geboortedatum`, `avatar`, `hobby`, `motto`) VALUES
(1, 'test', '25d55ad283aa400af464c76d713c07ad', '99022270@mydavinci.nl', '99022270', 'MBIAO15A0', 'man', '1996-11-04', NULL, '', ''),
(2, '12', '25d55ad283aa400af464c76d713c07ad', '99022270@mydavinci.nl', '99022270', 'MBIAO15A0', 'man', '0000-00-00', NULL, '', ''),
(3, 'vuurigebowey', '25d55ad283aa400af464c76d713c07ad', '99022270@mydavinci.nl', '99022270', 'MBIAO15A0', 'man', '1996-11-04', NULL, 'mountainbiken', 'test');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
