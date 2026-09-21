-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 02 sep 2019 om 21:52
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
-- Tabelstructuur voor tabel `presidents`
--

CREATE TABLE `presidents` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `party` varchar(100) NOT NULL,
  `startYear` int(4) NOT NULL DEFAULT '1900',
  `endYear` int(4) NOT NULL DEFAULT '1900',
  `daysInOffice` int(4) NOT NULL,
  `approvalRate` int(2) NOT NULL,
  `imageUrl` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `presidents`
--

INSERT INTO `presidents` (`id`, `name`, `party`, `startYear`, `endYear`, `daysInOffice`, `approvalRate`, `imageUrl`) VALUES
(1, 'Theodore Roosevelt', 'Republican', 1901, 1909, 2728, 81, '1-theodore-roosevelt.jpg'),
(2, 'William Howard Taft', 'Republican', 1909, 1913, 1461, 52, '2-william-howard-taft.jpg'),
(3, 'Woodrow Wilson', 'Democratic', 1913, 1921, 2922, 67, '3-woodrow-wilson.jpg'),
(4, 'Warren G. Harding', 'Republican', 1921, 1923, 881, 25, '4-warren-g-harding.jpg'),
(5, 'Calvin Coolidge', 'Republican', 1923, 1929, 2041, 42, '5-calvin-coolidge.jpg'),
(6, 'Herbert Hoover', 'Republican', 1929, 1933, 1461, 33, '6-herbert-hoover.jpg'),
(7, 'Franklin D. Roosevelt', 'Democratic', 1933, 1945, 4422, 89, '7-franklin-d-roosevelt.jpg'),
(8, 'Harry S. Truman', 'Democratic', 1945, 1953, 2840, 75, '8-harry-s-truman.jpg'),
(9, 'Dwight D. Eisenhower', 'Republican', 1953, 1961, 2922, 74, '9-dwight-d-eisenhower.jpg'),
(10, 'John F. Kennedy', 'Democratic', 1961, 1963, 1036, 62, '10-john-f-kennedy.jpg'),
(11, 'Lyndon B. Johnson', 'Democratic', 1963, 1969, 1886, 69, '11-lyndon-b-johnson.jpg'),
(12, 'Richard Nixon', 'Republican', 1969, 1974, 2027, 37, '12-richard-nixon.jpg'),
(13, 'Gerard Ford', 'Republican', 1974, 1977, 895, 47, '13-gerald-ford.jpg'),
(14, 'Jimmy Carter', 'Democratic', 1977, 1981, 1461, 45, '14-jimmy-carter.jpg'),
(15, 'Ronald Reagan', 'Republican', 1981, 1989, 2922, 69, '15-ronald-reagan.jpg'),
(16, 'George H.W. Bush', 'Republican', 1989, 1993, 1461, 61, '16-george-h-w-bush.jpg'),
(17, 'Bill Clinton', 'Democratic', 1993, 2001, 2922, 64, '17-bill-clinton.jpg'),
(18, 'George W. Bush', 'Republican', 2001, 2009, 2922, 40, '18-george-w-bush.jpg'),
(19, 'Barack Obama', 'Democratic', 2009, 2017, 2922, 71, '19-barack-obama.jpg'),
(20, 'Donald Trump', 'Republican', 2017, 2021, 1461, 12, '20-donald-trump.jpg');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `presidents`
--
ALTER TABLE `presidents`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `presidents`
--
ALTER TABLE `presidents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
