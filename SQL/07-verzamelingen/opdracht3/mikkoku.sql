-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 09 jan 2023 om 02:10
-- Serverversie: 10.4.24-MariaDB
-- PHP-versie: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mikkoku`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `characters`
--

CREATE TABLE `characters` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `race` varchar(255) NOT NULL,
  `age` int(3) NOT NULL,
  `origins` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `characters`
--

INSERT INTO `characters` (`id`, `name`, `class`, `race`, `age`, `origins`) VALUES
(1, 'Mark', 'Wizard', 'Human', 18, 33),
(2, 'Tom', 'Knight', 'Human', 19, 33),
(3, 'Richard', 'Summoner', 'Human', 19, NULL),
(4, 'Arne', 'Samurai', 'Human', 18, 3),
(5, 'Lianne', 'Dancer', 'Human', 19, 2),
(6, 'Jun-Jie', 'Hunter', 'Human', 21, 37),
(7, 'Quist', 'Monk', 'Human', 29, NULL),
(8, 'James', 'Thief', 'Human', 16, 22),
(9, 'Ralph', 'Archer', 'Human', 20, 36),
(10, 'Max', 'Healer', 'Human', 24, 13),
(11, 'Wim', 'Pirate', 'Human', 44, 31),
(12, 'Delium', 'Professor', 'Human', 78, 16),
(13, 'Aerendyll', 'Geomancer', 'Wood Elf', 21, 42),
(14, 'Ares', 'Brute', 'Human', 27, 16),
(15, 'Clyde', 'Frog Knight', 'Frog', 12, NULL),
(16, 'Andrew', 'Lancer', 'Human', 29, 6),
(17, 'Chibi', 'Warrior', 'Flamizard', 1, NULL),
(18, 'Criss', 'Falconer', 'Human', 17, NULL),
(19, 'Si-Ying', 'Kendoka', 'Human', 16, 37),
(20, 'Ruwan', 'Alchemist', 'Human', 15, 17),
(21, 'Tristan', 'Engineer', 'Human', 26, 31),
(22, 'Rhiannon', 'Necromancer', 'Human', 20, NULL),
(23, 'Cake', 'Gambler', 'Human', 28, 26),
(24, 'Donny', 'Knight', 'Human', 27, 6),
(25, 'Eleanor', 'Healer', 'Human', 26, 6),
(26, 'Vincent', 'Wizard', 'Human', 29, 6),
(27, 'Ignat', 'Monk', 'Human', 26, 6),
(28, 'Neal', 'Ninja', 'Human', 24, 6),
(29, 'Harm', 'Synergist', 'Human', 16, 20),
(30, 'Shelly', 'Psychic', 'Human', 22, 7),
(31, 'Kage', 'Ninja', 'Human', 44, NULL),
(32, 'Bonafide', 'General', 'Human', 34, 9),
(33, 'Belzur', 'Smasher', 'Dwarf', 17, 45),
(34, 'Hans', 'Caster', 'Human', 20, 15),
(35, 'Astrid', 'Stalker', 'Human', 17, 9),
(36, 'Luc', 'Cosmicus', 'Human', 16, 26),
(37, 'Andreas', 'Dragoon', 'Human', 32, 36),
(38, 'Kaijin', 'Paladin', 'Human', 25, 34),
(39, 'Ramalae', 'Ranger', 'Wood Elf', 14, 42),
(40, 'Troy', 'Retainer', 'Human', 134, 19),
(41, 'Jordan', 'Rogue', 'Human', 17, 20),
(42, 'Leen', 'Wizard', 'Human', 17, 20),
(43, 'Dil-Doh', 'Healer', 'Human', 70, 20),
(44, 'Qruin', 'Spellblade', 'Human', 58, 50),
(45, 'Rick', 'Bard', 'Half Elf', 29, 38),
(46, 'Taurus', 'Nightwatcher', 'Night Elf', 26, 43),
(47, 'Martiny', 'Blue Slime', 'Zoobio', 212, NULL),
(48, 'Niklas', 'Shanologist', 'Human', 22, 15),
(49, 'Thodal', 'Machinist', 'Dwarf', 39, 44),
(50, 'Yarno', 'Berserker', 'Human', 40, NULL),
(51, 'Elmer', 'Swordmaster', 'Human', 20, NULL),
(52, 'Mystina', 'Torturer', 'Deminai', 30, NULL),
(53, 'Venom', 'Shanologist', 'Human', 18, 35),
(54, 'Jericho', 'Brigand', 'Human', 17, 33),
(55, 'Shirly', 'Nun', 'Human', 56, 14),
(56, 'Alberto', 'Pianist', 'Human', 25, 17),
(57, 'Ruben', 'Librarian', 'Human', 61, 1),
(58, 'Nubia', 'Shopkeeper', 'Human', 19, 12),
(59, 'Derek', 'Shopkeeper', 'Human', 52, 18),
(60, 'Nayim', 'Informer', 'Human', 22, 8),
(61, 'Jun-Da', 'Shopkeeper', 'Human', 17, 37),
(62, 'Dayanne', 'Breeder', 'Human', 15, NULL),
(63, 'Dean', 'Strategist', 'Human', 35, 25),
(64, 'Harvey', 'Admiral', 'Human', 28, 19),
(65, 'Yasco', 'Shopkeeper', 'Dwarf', 47, 46),
(66, 'Kasimir', 'Magic Instructor', 'Human', 34, 24),
(67, 'Lisa', 'Painter', 'Human', 23, 28),
(68, 'Kolya', 'Cook', 'Human', 40, 21),
(69, 'Helena', 'Playwright', 'Human', 36, 31),
(70, 'Clint', 'Cartographer', 'Human', 25, 29),
(71, 'Giacomo', 'Shopkeeper', 'Kobold', 29, 41),
(72, 'Louiqeu', 'Puppeteer', 'Human', 24, 35),
(73, 'Onithor', 'Shaman', 'Deminai', 33, NULL),
(74, 'Sarah', 'Pirate', 'Human', 22, 31);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `locations`
--

CREATE TABLE `locations` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `locations`
--

INSERT INTO `locations` (`id`, `name`) VALUES
(1, 'Port Chop'),
(2, 'Elour'),
(3, 'Jih-viuh'),
(4, 'Kar-viuh'),
(5, 'Frost City'),
(6, 'Snowdust'),
(7, 'Cape Avalanche'),
(8, 'Firebrand'),
(9, 'Woei'),
(10, 'Desuora'),
(11, 'Ynroh'),
(12, 'Laro'),
(13, 'Gaknuxu'),
(14, 'Meomyre'),
(15, 'Dizorae'),
(16, 'Primus'),
(17, 'Gao'),
(18, 'Jarnare'),
(19, 'Vultura'),
(20, 'Pelargir'),
(21, 'Dany'),
(22, 'Ikotaira'),
(23, 'Kyouchou'),
(24, 'Tortan'),
(25, 'Zana'),
(26, 'Plaza Del Dinero'),
(27, 'Pounding'),
(28, 'Franco'),
(29, 'Markus'),
(30, 'North Cerpo'),
(31, 'Alekrypol'),
(32, 'Theon'),
(33, 'Pikao'),
(34, 'Paladyne'),
(35, 'Xanadamn'),
(36, 'Horbrok'),
(37, 'Wu'),
(38, 'Settho'),
(39, 'Jujilibes'),
(40, 'Elnemi'),
(41, 'Num-Fatiga'),
(42, 'Frayna'),
(43, 'Aether'),
(44, 'Hreidmar'),
(45, 'Fafnir'),
(46, 'Dvalin'),
(47, 'Brokkr'),
(48, 'Homittle'),
(49, 'Kauka\'la'),
(50, 'Scarantia');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `characters`
--
ALTER TABLE `characters`
  ADD PRIMARY KEY (`id`),
  ADD KEY `origins` (`origins`);

--
-- Indexen voor tabel `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `characters`
--
ALTER TABLE `characters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT voor een tabel `locations`
--
ALTER TABLE `locations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- Beperkingen voor geëxporteerde tabellen
--

--
-- Beperkingen voor tabel `characters`
--
ALTER TABLE `characters`
  ADD CONSTRAINT `origins` FOREIGN KEY (`origins`) REFERENCES `locations` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
