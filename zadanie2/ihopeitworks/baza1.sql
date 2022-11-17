-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 14 Lis 2022, 13:42
-- Wersja serwera: 10.4.24-MariaDB
-- Wersja PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `baza1`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `uzytkownik`
--

CREATE TABLE `uzytkownik` (
  `id` int(5) NOT NULL,
  `ulogin` varchar(30) NOT NULL,
  `uhaslo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `uzytkownik`
--

INSERT INTO `uzytkownik` (`id`, `ulogin`, `uhaslo`) VALUES
(1, 'Adolf McOven', 'GlassOfGas'),
(2, 'test', 'test');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `yn`
--

CREATE TABLE `yn` (
  `ynid` int(5) NOT NULL,
  `id` int(5) NOT NULL,
  `yn` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `yn`
--

INSERT INTO `yn` (`ynid`, `id`, `yn`) VALUES
(1, 1, 'y'),
(2, 1, 'y'),
(3, 1, 'y'),
(4, 1, 'n'),
(5, 1, 'n'),
(6, 2, 'n'),
(7, 2, 'n'),
(8, 2, 'n'),
(9, 2, 'y'),
(10, 2, 'n'),
(11, 2, 'n'),
(12, 2, 'n'),
(13, 2, 'n'),
(14, 2, 'n'),
(15, 2, 'n'),
(16, 2, 'n'),
(17, 2, 'n'),
(18, 2, 'n'),
(19, 2, 'n'),
(20, 2, 'n'),
(21, 2, 'n'),
(22, 2, 'n'),
(23, 2, 'n');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `uzytkownik`
--
ALTER TABLE `uzytkownik`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `yn`
--
ALTER TABLE `yn`
  ADD PRIMARY KEY (`ynid`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `uzytkownik`
--
ALTER TABLE `uzytkownik`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT dla tabeli `yn`
--
ALTER TABLE `yn`
  MODIFY `ynid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
