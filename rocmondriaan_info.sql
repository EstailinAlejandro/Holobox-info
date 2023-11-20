-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 09 nov 2023 om 13:10
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
-- Database: `rocmondriaan_info`
--
CREATE DATABASE IF NOT EXISTS `rocmondriaan_info` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `rocmondriaan_info`;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `branche`
--

DROP TABLE IF EXISTS `branche`;
CREATE TABLE `branche` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `branche`
--

INSERT INTO `branche` (`id`, `name`) VALUES
(1, 'Beauty & Hair'),
(2, 'Business'),
(3, 'Dutch Academy of Performing Arts'),
(4, 'Evenementen'),
(5, 'Facility'),
(6, 'Fashion'),
(7, 'Horeca'),
(8, 'ICT'),
(9, 'Logistics'),
(10, 'Onderwijs'),
(11, 'Retail'),
(12, 'Sport en Bewegen'),
(13, 'Taal+ school'),
(14, 'Techniek'),
(15, 'Toerisme en Recreatie'),
(16, 'Veiligheid'),
(17, 'Welzijn'),
(18, 'Zorg');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `course`
--

DROP TABLE IF EXISTS `course`;
CREATE TABLE `course` (
  `id` int(11) NOT NULL,
  `branche_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `duration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `learningpath` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `crebonumber` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `course`
--

INSERT INTO `course` (`id`, `branche_id`, `name`, `description`, `level`, `duration`, `start`, `learningpath`, `crebonumber`) VALUES
(1, 1, 'Kapper', 'Als kapper ontvang je de klant, je knipt, (ont)kleurt en föhnt het haar. Met jouw specialisme laat je de klant op zijn mooist zijn!\r\n\r\nAls kapper werk je in een kapsalon aan de verzorging en vormgeving van het haar van klanten. Het is een creatief beroep, waarin je veel invloed hebt op het uiterlijk van mensen. Je maakt afspraken, ontvangt klanten, adviseert over de verzorging van het haar en informeert naar de behandelingswensen. Je taken bestaan onder andere uit wassen, hoofdmassage, kleuren, knippen en föhnen. Bij de opleiding Kapper leer je in twee jaar ook allerlei kniptechnieken.\r\n\r\nTijdens de praktijklessen en salontrainingen bij ons op school oefen je alle competenties die vereist zijn voor Kapper. Je werkt regelmatig met modellen/klanten, die je zelf meebrengt. De benodigde theorie hiervoor wordt aangeboden in de praktijk- of theorielessen en via diverse (digitale) leermiddelen. Naast het omgaan met klanten, werk je nauw samen met collega’s en leidinggevenden.\r\n\r\nSociale vaardigheden zijn daarom erg belangrijk in dit beroep. Een deel van de opleiding bestaat uit beroepspraktijkvorming, zodat je de geleerde vaardigheden en theoretische kennis in de praktijk kunt oefenen. Je loopt dan ook, afhankelijk van het leerjaar, een of twee dagen stage.\r\n\r\nJe krijgt praktijklessen, waarbij je haarverzorging en haar wassen, kniptechnieken, haar kleuren, model föhnen leert. Tijdens de theorie besteden we aandacht aan hygiëne, arbeidsomstandigheden en omgaan met klanten (communicatieve en sociale vaardigheden).\r\n\r\nKeuzedelen:\r\n\r\nTijdens je opleiding maak je de keuze waar je je extra in gaat verdiepen, bijvoorbeeld imagestyling, nagelstyling en barbier.', 'Niveau 4', '1,5 tot 2 jaar', 'aug, febr', 'bbl & bol', '25641');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `course_location`
--

DROP TABLE IF EXISTS `course_location`;
CREATE TABLE `course_location` (
  `course_id` int(11) NOT NULL,
  `location_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `course_location`
--

INSERT INTO `course_location` (`course_id`, `location_id`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `doctrine_migration_versions`
--

DROP TABLE IF EXISTS `doctrine_migration_versions`;
CREATE TABLE `doctrine_migration_versions` (
  `version` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `doctrine_migration_versions`
--

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
('DoctrineMigrations\\Version20231109100452', '2023-11-09 11:05:09', 326),
('DoctrineMigrations\\Version20231109101327', '2023-11-09 11:13:32', 251);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `location`
--

DROP TABLE IF EXISTS `location`;
CREATE TABLE `location` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `duration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `learningpath` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `location`
--

INSERT INTO `location` (`id`, `name`, `level`, `duration`, `start`, `learningpath`) VALUES
(1, 'Beauty, Hair & Fashion Leeghwaterplein 72', 'Niveau 2', '1,5 tot 2 jaar', 'aug, febr', 'bbl & bol');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `messenger_messages`
--

DROP TABLE IF EXISTS `messenger_messages`;
CREATE TABLE `messenger_messages` (
  `id` bigint(20) NOT NULL,
  `body` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `headers` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue_name` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `available_at` datetime NOT NULL,
  `delivered_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `branche`
--
ALTER TABLE `branche`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_169E6FB99DDF9A9E` (`branche_id`);

--
-- Indexen voor tabel `course_location`
--
ALTER TABLE `course_location`
  ADD PRIMARY KEY (`course_id`,`location_id`),
  ADD KEY `IDX_F72AE49D591CC992` (`course_id`),
  ADD KEY `IDX_F72AE49D64D218E` (`location_id`);

--
-- Indexen voor tabel `doctrine_migration_versions`
--
ALTER TABLE `doctrine_migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- Indexen voor tabel `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `messenger_messages`
--
ALTER TABLE `messenger_messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_75EA56E0FB7336F0` (`queue_name`),
  ADD KEY `IDX_75EA56E0E3BD61CE` (`available_at`),
  ADD KEY `IDX_75EA56E016BA31DB` (`delivered_at`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `branche`
--
ALTER TABLE `branche`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT voor een tabel `course`
--
ALTER TABLE `course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT voor een tabel `location`
--
ALTER TABLE `location`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT voor een tabel `messenger_messages`
--
ALTER TABLE `messenger_messages`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- Beperkingen voor geëxporteerde tabellen
--

--
-- Beperkingen voor tabel `course`
--
ALTER TABLE `course`
  ADD CONSTRAINT `FK_169E6FB99DDF9A9E` FOREIGN KEY (`branche_id`) REFERENCES `branche` (`id`);

--
-- Beperkingen voor tabel `course_location`
--
ALTER TABLE `course_location`
  ADD CONSTRAINT `FK_F72AE49D591CC992` FOREIGN KEY (`course_id`) REFERENCES `course` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_F72AE49D64D218E` FOREIGN KEY (`location_id`) REFERENCES `location` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
