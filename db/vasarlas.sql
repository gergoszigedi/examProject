-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2022. Máj 03. 12:18
-- Kiszolgáló verziója: 10.4.24-MariaDB
-- PHP verzió: 7.3.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `vasarlas`
--
CREATE DATABASE IF NOT EXISTS `vasarlas` DEFAULT 
CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `vasarlas`;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `bolt`
--

CREATE TABLE `bolt` (
  `boltId` varchar(255) NOT NULL,
  `telepulesId` varchar(255) NOT NULL,
  `btId` varchar(255) NOT NULL,
  `cím` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- A tábla adatainak kiíratása `bolt`
--

INSERT INTO `bolt` (`boltId`, `telepulesId`, `btId`, `cím`) VALUES
('B1', 'V2', 'C1', 'Piac tér 2'),
('B2', 'V1', 'C2', 'Kóvári út 8'),
('B3', 'V1', 'C3', 'Kóvári út 12'),
('B4', 'V3', 'C3', 'Sas út 3'),
('B5', 'V2', 'C6', 'Rákóczi út 24'),
('B6', 'V1', 'C4', 'Mikszáth Kálmán út 14'),
('B7', 'V3', 'C4', 'Rákóczi út 112'),
('B8', 'V1', 'C5', 'Mikszáth Kálmán út 56'),
('B9', 'V3', 'C1', 'Rákóczi út 92');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `bolt-termék`
--

CREATE TABLE `bolt-termék` (
  `bolt_termekId` varchar(255) NOT NULL,
  `boltId` varchar(255) NOT NULL,
  `termekId` varchar(255) NOT NULL,
  `ar` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- A tábla adatainak kiíratása `bolt-termék`
--

INSERT INTO `bolt-termék` (`bolt_termekId`, `boltId`, `termekId`, `ar`) VALUES
('BT1', 'B1', 'T1', 300),
('BT10', 'B7', 'T4', 480),
('BT11', 'B8', 'T4', 420),
('BT12', 'B6', 'T5', 430),
('BT13', 'B7', 'T5', 430),
('BT14', 'B8', 'T5', 440),
('BT15', 'B2', 'T5', 400),
('BT16', 'B1', 'T6', 200),
('BT17', 'B9', 'T6', 200),
('BT18', 'B3', 'T6', 240),
('BT19', 'B4', 'T6', 240),
('BT2', 'B2', 'T1', 320),
('BT20', 'B1', 'T2', 480),
('BT21', 'B1', 'T4', 500),
('BT23', 'B1', 'T9', 2700),
('BT26', 'B1', 'T7', 300),
('BT27', 'B1', 'T9', 2700),
('BT28', 'B2', 'T10', 1000),
('BT29', 'B3', 'T10', 1100),
('BT3', 'B3', 'T1', 310),
('BT30', 'B4', 'T10', 1300),
('BT31', 'B5', 'T10', 950),
('BT32', 'B6', 'T8', 250),
('BT33', 'B7', 'T8', 230),
('BT34', 'B8', 'T8', 200),
('BT35', 'B9', 'T8', 300),
('BT36', 'B9', 'T9', 3000),
('BT37', 'B2', 'T9', 2950),
('BT38', 'B3', 'T7', 350),
('BT39', 'B4', 'T7', 290),
('BT4', 'B2', 'T2', 500),
('BT40', 'B5', 'T7', 300),
('BT5', 'B5', 'T2', 510),
('BT6', 'B4', 'T2', 500),
('BT7', 'B3', 'T3', 900),
('BT8', 'B4', 'T3', 900),
('BT9', 'B6', 'T4', 460);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `bolt_cég`
--

CREATE TABLE `bolt_cég` (
  `btId` varchar(255) NOT NULL,
  `boltNev` varchar(255) NOT NULL,
  `cegNev` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- A tábla adatainak kiíratása `bolt_cég`
--

INSERT INTO `bolt_cég` (`btId`, `boltNev`, `cegNev`) VALUES
('C1', 'Coop', 'Co-op Hungary Zrt.'),
('C2', 'Lidl', 'Lidl Magyarország Kereskedelmi Bt.'),
('C3', 'Penny', 'Penny Market Kft.'),
('C4', 'Spar', 'SPAR Magyarország Kereskedelmi Kft.'),
('C5', 'Tesco', 'TESCO-GLOBAL Áruházak Zártkörűen Működő Részvénytársaság'),
('C6', 'Real élelmiszer', 'Reál Hungária Élelmiszer Kft.');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `település`
--

CREATE TABLE `település` (
  `telepulesId` varchar(255) NOT NULL,
  `telepulesNev` varchar(255) NOT NULL,
  `iSzam` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- A tábla adatainak kiíratása `település`
--

INSERT INTO `település` (`telepulesId`, `telepulesNev`, `iSzam`) VALUES
('V1', 'Balassagyarmat', 2660),
('V2', 'Rétság', 2651),
('V3', 'Szécsény', 3170);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `termék`
--

CREATE TABLE `termék` (
  `termekId` varchar(255) NOT NULL,
  `termekNev` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- A tábla adatainak kiíratása `termék`
--

INSERT INTO `termék` (`termekId`, `termekNev`) VALUES
('T1', 'UHT Tej 1 l'),
('T10', 'Raffaello desszert 150g'),
('T2', 'Rozs kenyér 0,5 kg'),
('T3', 'Egri Bikavér 0,75 l'),
('T4', 'Erős Pista 100 g'),
('T5', 'Monster'),
('T6', 'Hell 0,25 l'),
('T7', 'Cheetos Chips 85g'),
('T8', 'Győri édes 180g'),
('T9', 'Merci desszert 400g');

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `bolt`
--
ALTER TABLE `bolt`
  ADD PRIMARY KEY (`boltId`),
  ADD KEY `btId` (`btId`),
  ADD KEY `telepulesId` (`telepulesId`);

--
-- A tábla indexei `bolt-termék`
--
ALTER TABLE `bolt-termék`
  ADD PRIMARY KEY (`bolt_termekId`),
  ADD KEY `boltId` (`boltId`),
  ADD KEY `boltId_2` (`boltId`),
  ADD KEY `termekId` (`termekId`);

--
-- A tábla indexei `bolt_cég`
--
ALTER TABLE `bolt_cég`
  ADD PRIMARY KEY (`btId`);

--
-- A tábla indexei `település`
--
ALTER TABLE `település`
  ADD PRIMARY KEY (`telepulesId`);

--
-- A tábla indexei `termék`
--
ALTER TABLE `termék`
  ADD PRIMARY KEY (`termekId`);

--
-- Megkötések a kiírt táblákhoz
--

--
-- Megkötések a táblához `bolt`
--
ALTER TABLE `bolt`
  ADD CONSTRAINT `bolt_ibfk_1` FOREIGN KEY (`btId`) REFERENCES `bolt_cég` (`btId`),
  ADD CONSTRAINT `bolt_ibfk_2` FOREIGN KEY (`telepulesId`) REFERENCES `település` (`telepulesId`);

--
-- Megkötések a táblához `bolt-termék`
--
ALTER TABLE `bolt-termék`
  ADD CONSTRAINT `bolt-termék_ibfk_1` FOREIGN KEY (`termekId`) REFERENCES `termék` (`termekId`),
  ADD CONSTRAINT `bolt-termék_ibfk_2` FOREIGN KEY (`boltId`) REFERENCES `bolt` (`boltId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
