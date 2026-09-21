-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 02 sep 2019 om 11:08
-- Serverversie: 10.1.31-MariaDB
-- PHP-versie: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mysql_les1`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `snackbar`
--

CREATE TABLE `snackbar` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `price` decimal(6,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `snackbar`
--

INSERT INTO `snackbar` (`id`, `name`, `price`) VALUES
(1, 'kleine friet', '1.95'),
(2, 'kroket', '1.75'),
(3, 'frikandel', '1.45'),
(4, 'hamburger', '2.25'),
(5, 'mayonaise', '0.50'),
(6, 'curry', '0.50'),
(7, 'schnitzel', '4.95'),
(8, 'viandel', '1.75'),
(9, 'bitterballen', '2.50'),
(10, 'kipnuggets', '2.75'),
(11, 'cheeseburger', '2.50'),
(12, 'kaassouflé', '1.15'),
(13, 'visburger', '2.60'),
(14, 'kipkorn', '1.85'),
(15, 'grote friet', '3.25'),
(16, 'satérol', '2.50'),
(17, 'ketchup', '0.50'),
(18, 'joppiesaus', '0.50'),
(19, 'mexicano', '2.00'),
(20, 'knakworst', '1.25'),
(21, 'berenklauw', '1.95'),
(22, 'friet basje', '4.95'),
(23, 'kapsalon', '5.95'),
(24, 'frikandel speciaal', '1.75'),
(25, 'goulash kroket', '2.45'),
(26, 'knoflooksaus', '0.50'),
(27, 'samuraisaus', '0.60'),
(28, 'rea burger', '4.45'),
(29, 'friet xxl', '4.50'),
(30, 'chef\'s special', '6.66');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `snackbar`
--
ALTER TABLE `snackbar`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `snackbar`
--
ALTER TABLE `snackbar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
