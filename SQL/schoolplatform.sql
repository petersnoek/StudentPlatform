-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Machine: 127.0.0.1
-- Gegenereerd op: 21 sep 2017 om 14:33
-- Serverversie: 5.6.17
-- PHP-versie: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databank: `schoolplatform`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `forums`
--

CREATE TABLE IF NOT EXISTS `forums` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(150) NOT NULL,
  `description` text NOT NULL,
  `creator` varchar(50) NOT NULL,
  `create_date_time` datetime(6) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Gegevens worden geëxporteerd voor tabel `forums`
--

INSERT INTO `forums` (`id`, `title`, `description`, `creator`, `create_date_time`) VALUES
(1, 'bla', 'bla', 'Romy96', '2017-09-08 13:54:00.000000');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `forum_reactions`
--

CREATE TABLE IF NOT EXISTS `forum_reactions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `forum_id` int(11) NOT NULL,
  `description` text NOT NULL,
  `username` varchar(50) NOT NULL,
  `date_time_reaction` datetime(6) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Gegevens worden geëxporteerd voor tabel `forum_reactions`
--

INSERT INTO `forum_reactions` (`id`, `forum_id`, `description`, `username`, `date_time_reaction`) VALUES
(1, 1, 'Laat ook maar!', 'Romy96', '2009-11-17 00:00:00.000000');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(256) DEFAULT NULL,
  `password` varchar(256) DEFAULT NULL,
  `email` varchar(256) DEFAULT NULL,
  `leerling_nr` varchar(256) DEFAULT NULL,
  `klas` varchar(256) DEFAULT NULL,
  `geslacht` varchar(256) DEFAULT NULL,
  `geboortedatum` date DEFAULT NULL,
  `avatar` varbinary(8000) DEFAULT NULL,
  `hobby` varchar(254) NOT NULL,
  `motto` varchar(254) NOT NULL,
  `role_id` int(1) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Gegevens worden geëxporteerd voor tabel `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `email`, `leerling_nr`, `klas`, `geslacht`, `geboortedatum`, `avatar`, `hobby`, `motto`, `role_id`) VALUES
(1, 'test', '25d55ad283aa400af464c76d713c07ad', '99022270@mydavinci.nl', '99022270', 'MBIAO15A0', 'man', '1996-11-04', NULL, '', '', 0),
(2, '12', '25d55ad283aa400af464c76d713c07ad', '99022270@mydavinci.nl', '99022270', 'MBIAO15A0', 'man', '0000-00-00', NULL, '', '', 0),
(3, 'vuurigebowey', '25d55ad283aa400af464c76d713c07ad', '99022270@mydavinci.nl', '99022270', 'MBIAO15A0', 'man', '1996-11-04', NULL, 'mountainbiken', 'test', 0),
(4, 'Romy96', '27fa9d3a680e68b32cfe2cd22bbdba28', 'romybijkerk1996@gmail.com', '99028323', '15A0', 'vrouw', '1996-05-03', NULL, '', '', 0),
(5, 'PeterSnoek', 'f19a86bcd60e668b1d8a2b8530f8b9f4', 'snp@davinci.nl', '99074362', '15A0', 'man', '1975-05-25', '1.png', '', '', 4);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
