-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Värd: localhost
-- Tid vid skapande: 15 apr 2021 kl 15:49
-- Serverversion: 10.5.8-MariaDB
-- PHP-version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databas: `gymnasiearbete`
--

-- --------------------------------------------------------

--
-- Tabellstruktur `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `label` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumpning av Data i tabell `categories`
--

INSERT INTO `categories` (`id`, `label`) VALUES
(3, 'Shiregårdens Merlin'),
(4, 'Tombo Aramis'),
(5, 'Uteritter'),
(6, 'Körning'),
(7, 'Frihetsdressyr'),
(8, 'Övrigt'),
(9, 'Trickträning'),
(10, 'Dressyr');

-- --------------------------------------------------------

--
-- Tabellstruktur `posts`
--

CREATE TABLE `posts` (
  `id` int(20) NOT NULL,
  `category` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `text` text NOT NULL,
  `date` int(20) UNSIGNED NOT NULL,
  `author` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumpning av Data i tabell `posts`
--

INSERT INTO `posts` (`id`, `category`, `subject`, `text`, `date`, `author`) VALUES
(2, 'Merlin', 'Ett ridpass i solen', 'Till min lycka sken solen när jag vaknade upp. Under den senaste perioden har snön vräkt ner, vilket jag inte har något emot men det underlättar alltid att vara i stallet under uppehållen. \r\nDet blir inte lika blött och det är helt enkelt behagligare att göra alla sysslor utan att allt hinner täckas av tjocka lager snö.\r\n\r\nJag beslutade mig för att åka till stallet under förmiddagen, klockan 11.00 för att vara mer specifik. \r\n                    Just för att både jag och hästarna skulle ha god tid på oss att vara i solen utan att behöva oroa oss för att mörkret skulle hinna komma. Jag började med att ta in Merlin och insåg att ännu ett av hans täcken blivit genomblöta eftersom han står på lösdrift och därmed befinner sig ute hela tiden bortsett från när han är i hästarnas ligghall där de har ett bra skydd mot vinden. I vanlig ordning tog jag av honom hans täcke och hängde det på tork i sadelkammaren. Därefter började jag borsta honom och insåg att det verkligen var tur att jag åkt dit tidigt. Förutom svansen som var full i spån bestod hans hovskägg i vanlig ordning mer av is än päls. \r\n\r\nEfter kanske 20 minuters borstande var iallafall hans hovskägg i ett okej skick. Jag beslutade mig sedan för att vi skulle hitta på något i paddocken, troligen både uppsuttet och från marken. Sagt och gjort så gick vi lite senare ut i paddocken och jag hoppade upp. I början var Merlin lite ofokuserad men efter en kort stund gick det mycket bättre. Vi fortsatte träna med fokus på att rida på volten i alla gångarter samt i mindre och större volter. \r\nJag kan väl inte säga annat än att han gjorde ett riktigt bra jobb ifrån sig. Det är verkligen kul att se hur fort han kan utvecklas. Han sänker numera huvudet själv både i skritt och trav och det märks tydligt att han alltid gör sitt bästa ifrån sig och vill lyckas med vad jag ber honom om.\r\nJag valde lite senare att hoppa av och ta av honom tränset och så arbetade vi även lite från marken. Även det gick väldigt bra trots att det var ett tag sen vi arbetade tillsammans från marken. Vi tränade på lite allt möjligt, främst repetition. Övningarna blev ganska simpla, vi gjorde saker som parkering, flytta bogen, inkallningar mm. Efter det stod vi bara kvar i paddocken och han fick lite morot och massor av mys vilket blev uppskattat. Därefter fick han på sig ett torrt täcke och släpptes ut i hagen, jag plockade ihop alla saker och begav mig sedan hemåt, glad över det lyckade passet. ', 1616750345, 'Emilia'),
(3, 'ny kategori', 'Hej hej', 'heionflaiff', 1616751193, 'Emilia');

-- --------------------------------------------------------

--
-- Tabellstruktur `users`
--

CREATE TABLE `users` (
  `id` int(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(70) NOT NULL,
  `password` varchar(255) NOT NULL,
  `kind` tinyint(4) NOT NULL,
  `numComments` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumpning av Data i tabell `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `kind`, `numComments`) VALUES
(1, 'Emilia', 'princesszekrom@gmail.com', '$2y$10$Py.nZB9SvwkiKTZwDYk6PuBzQe0O2Vlef0jVVP8ieXghYJhyGPkXa', 1, 0),
(2, 'Jonathan', 'jc.morgenstern@gmail.com', '$2y$10$WTX483pFEh8S1kVvlyuaSuK9/9n2lY5vWlpQdnVbYQVWIuZGiKu0i', 2, 0),
(3, '', '', '$2y$10$gQ6leikWl02Mzm2B0FGxHO1oA.uGnsB5GDEHCzyL/e1qKRG18r5I6', 2, 0),
(4, '', '', '$2y$10$PV3hGjgfDdIxry72FRu7W.hA3xLRdCLv6V3xUiqFDCwOoAOOeIoqO', 2, 0);

--
-- Index för dumpade tabeller
--

--
-- Index för tabell `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Index för tabell `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Index för tabell `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT för dumpade tabeller
--

--
-- AUTO_INCREMENT för tabell `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT för tabell `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT för tabell `users`
--
ALTER TABLE `users`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
