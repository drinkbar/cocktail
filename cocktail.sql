-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Erstellungszeit: 22. Sep 2016 um 08:36
-- Server-Version: 5.6.25
-- PHP-Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `cocktail`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `cocktail`
--

CREATE TABLE IF NOT EXISTS `cocktail` (
  `ID` int(11) NOT NULL,
  `Cocktailname` varchar(100) NOT NULL,
  `Rezept` text NOT NULL,
  `Bemerkung` text NOT NULL,
  `Bild` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `cocktail`
--

INSERT INTO `cocktail` (`ID`, `Cocktailname`, `Rezept`, `Bemerkung`, `Bild`) VALUES
(1, 'Caipirinha', '1. Schneide die Limette von beiden Seiten an und teile sie in drei Teile.\r\n2. Gebe die LimettenstÃ¼cke in ein Glas.\r\n3. FÃ¼ge den braunen Zucker hinzu.\r\n4. ZerstoÃŸe die Limette zusammen mit dem braunen Zucker.\r\n5. AnschlieÃŸend CachaÃ§a hinzugeben.\r\n6. Gebe das gecrushte Eis hinzu.\r\n7. VerrÃ¼hre den Glasinhalt gut.', 'Wer im Cocktail mixen noch keine groÃŸen Erfahrungen hat, fÃ¼r den ist Caipirinha ein perfekter Drink. Denn der Caipi gelingt mÃ¼helos, da er nur aus vier Zutaten besteht: Limetten, braunem Rohrzucker, zerstoÃŸenem Eis und CachaÃ§a. \r\nLetztere ist eine brasilianische Spirituose aus vergorenem und anschlieÃŸend gebranntem Zuckerrohrsaft. In Brasilien wird Ã¼brigens feiner, weiÃŸer Rohrzucker statt, wie in Deutschland oft Ã¼blich, brauner Rohrzucker zugefÃ¼gt. \r\n\r\nDamit der Drink nicht bitter wird, entferne die weiÃŸe Haut groÃŸzÃ¼gig von den Limetten. SÃ¤uerlicher wird der Drink, wenn noch ein wenig Lime Juice (Limettensaft) dazu gegeben wird. \r\nAm besten schmeckt Caipirinha, wenn Du ihn vor dem Trinken mit dem Strohhalm oder einem langen LÃ¶ffel nochmals durchmixt. Und: UnterschÃ¤tze seine Wirkung nicht! Der Alkoholgehalt von CachaÃ§a liegt je nach Sorte zwischen 38 und 48 Prozent. ', 'images/cocktails/Caipirinha.jpg'),
(2, 'Hugo', 'Alles nach der Reihe in ein Glas fÃ¼llen. \r\nFÃ¼r die 2. Variante (Virgin Hugo) den Sekt durch Sprite ersetzen, den kÃ¶nnen dann auch Kinder trinken. \r\nWer will, kann auch noch EiswÃ¼rfel dazugeben.', '', 'images/cocktails/hugo.jpg'),
(3, 'Sex on the Beach', 'Zutaten mit Eis shaken und in das vorgekÃ¼hlte GÃ¤steglas abseihen. Dekoration am Glasrand.', '', 'images/cocktails/sotb.jpg'),
(4, 'Strawberry Flames', 'Je nach Geschmack die Menge von Zitronensaft & Grenadine anpassen.\r\nJe nach GrÃ¶ÃŸe des Glases Crushed Ice oder normale EiswÃ¼rfel verwenden.\r\nAls Abrundung der Dekoration den Rand des Glases anfeuchten und einzuckern.', '', 'images/cocktails/sf.jpg'),
(6, 'Mojito', 'Minze, Limettensaft und Zucker in ein Glas geben und mit StÃ¶ÃŸel leicht andrÃ¼cken. Glas mit EiswÃ¼rfeln auffÃ¼llen und Rum zugeben. Das Ganze gut verrÃ¼hren und mit Soda auffÃ¼llen.', '', 'images/cocktails/mojito.jpg'),
(7, 'Cinderella', 'Alle Zutaten, auÃŸer Grenadine \r\nmit Eis im Mixer mischen. AnschlieÃŸend in ein Glas geben und zum Abschluss die Grenadine darÃ¼ber geben.', '', 'images/cocktails/cinderella.jpg');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `cocktail_zutat`
--

CREATE TABLE IF NOT EXISTS `cocktail_zutat` (
  `ID` int(11) NOT NULL,
  `Cocktail_ID` int(11) NOT NULL,
  `Zutat_ID` int(11) NOT NULL,
  `Menge` varchar(100) NOT NULL,
  `Einheit` varchar(30) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=101 DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `cocktail_zutat`
--

INSERT INTO `cocktail_zutat` (`ID`, `Cocktail_ID`, `Zutat_ID`, `Menge`, `Einheit`) VALUES
(42, 5, 23, '8', 'cl'),
(43, 5, 16, '6', 'cl'),
(44, 5, 24, '3', 'cl'),
(45, 5, 25, '3 ', 'cl'),
(46, 5, 11, 'Prise', 'Prise'),
(47, 5, 3, '1', 'Scheibe'),
(64, 1, 11, '2', 'TL'),
(65, 1, 9, '6', 'cl'),
(66, 1, 8, 'n.B.', ''),
(67, 1, 10, '0.5', ''),
(73, 3, 17, '4', 'cl'),
(74, 3, 18, '1', 'Scheibe'),
(75, 3, 16, '4', 'cl'),
(76, 3, 15, '2', 'cl'),
(77, 3, 2, '4', 'cl'),
(78, 7, 28, '10 ', 'ml'),
(79, 7, 22, '2', 'cl'),
(80, 7, 29, '2', 'cl'),
(81, 7, 16, '10', 'ml'),
(82, 7, 30, '2', 'cl'),
(87, 6, 24, '2', 'EL'),
(88, 6, 26, '2', 'cl'),
(89, 6, 13, '2 ', 'Zweige'),
(90, 6, 27, 'n.B.', ''),
(91, 4, 19, '6', 'cl'),
(92, 4, 21, '2', 'cl'),
(93, 4, 22, '1', 'cl'),
(94, 4, 20, '4', 'cl'),
(95, 4, 2, '5', 'cl'),
(96, 4, 1, '2', 'cl'),
(97, 2, 8, 'n.B.', ''),
(98, 2, 13, '3', 'BlÃ¤tter'),
(99, 2, 14, '1', 'dl'),
(100, 2, 12, '2', 'ml');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `nutzer`
--

CREATE TABLE IF NOT EXISTS `nutzer` (
  `ID` int(11) NOT NULL,
  `Login` varchar(10) NOT NULL,
  `Passwort` text NOT NULL,
  `Email` varchar(255) NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `nutzer`
--

INSERT INTO `nutzer` (`ID`, `Login`, `Passwort`, `Email`, `role`) VALUES
(1, 'Jessica', 'jessica', 'lena-ulrich@web.de', ''),
(4, 'admin', 'POBRUm/eDHMr.', 'admin@drinkbar.de', 'admin');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `nutzer_cocktail`
--

CREATE TABLE IF NOT EXISTS `nutzer_cocktail` (
  `ID` int(11) NOT NULL,
  `Cocktail_ID` int(11) NOT NULL,
  `Nutzer_ID` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `nutzer_cocktail`
--

INSERT INTO `nutzer_cocktail` (`ID`, `Cocktail_ID`, `Nutzer_ID`) VALUES
(1, 1, 4);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `nutzer_zutat`
--

CREATE TABLE IF NOT EXISTS `nutzer_zutat` (
  `ID` int(11) NOT NULL,
  `Nutzer_ID` int(11) NOT NULL,
  `Zutat_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `zutat`
--

CREATE TABLE IF NOT EXISTS `zutat` (
  `ID` int(11) NOT NULL,
  `Bezeichnung` varchar(100) NOT NULL,
  `Alk` char(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `zutat`
--

INSERT INTO `zutat` (`ID`, `Bezeichnung`, `Alk`) VALUES
(1, 'Zitronensaft', '0'),
(2, 'Wodka', '1'),
(3, 'Zitrone', '0'),
(4, 'Salz', '0'),
(5, 'Pfeffer', '0'),
(6, 'Tabasco', '0'),
(7, 'Worcestersauce', '0'),
(8, 'Eis', '0'),
(9, 'Cachaca', '1'),
(10, 'Limette(n)', '0'),
(11, 'brauner Zucker', '0'),
(12, 'Sirup(Holunderbl.)', '0'),
(13, 'Minze', '0'),
(14, 'Sekt', '1'),
(15, 'Pfirsichlikör', '0'),
(16, 'Orangensaft', '0'),
(17, 'Cranberrysaft', '0'),
(18, 'Orange', '0'),
(19, 'Erdbeersaft', '0'),
(20, 'Mangonektar', '0'),
(21, 'Erdbeersirup', '0'),
(22, 'Grenadine', '0'),
(23, 'Cola', '0'),
(24, 'brauner Rum', '1'),
(25, 'Amaretto', '1'),
(26, 'Limettensaft', '0'),
(27, 'Soda', '0'),
(28, 'Ananassaft', '0'),
(29, 'Kokossirup', '0'),
(30, 'Sahne', '0'),
(31, 'Tomatensaft', '0');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `cocktail`
--
ALTER TABLE `cocktail`
  ADD PRIMARY KEY (`ID`);

--
-- Indizes für die Tabelle `cocktail_zutat`
--
ALTER TABLE `cocktail_zutat`
  ADD PRIMARY KEY (`ID`);

--
-- Indizes für die Tabelle `nutzer`
--
ALTER TABLE `nutzer`
  ADD PRIMARY KEY (`ID`);

--
-- Indizes für die Tabelle `nutzer_cocktail`
--
ALTER TABLE `nutzer_cocktail`
  ADD PRIMARY KEY (`ID`);

--
-- Indizes für die Tabelle `nutzer_zutat`
--
ALTER TABLE `nutzer_zutat`
  ADD PRIMARY KEY (`ID`);

--
-- Indizes für die Tabelle `zutat`
--
ALTER TABLE `zutat`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `cocktail`
--
ALTER TABLE `cocktail`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT für Tabelle `cocktail_zutat`
--
ALTER TABLE `cocktail_zutat`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=101;
--
-- AUTO_INCREMENT für Tabelle `nutzer`
--
ALTER TABLE `nutzer`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT für Tabelle `nutzer_cocktail`
--
ALTER TABLE `nutzer_cocktail`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT für Tabelle `nutzer_zutat`
--
ALTER TABLE `nutzer_zutat`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT für Tabelle `zutat`
--
ALTER TABLE `zutat`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=32;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
