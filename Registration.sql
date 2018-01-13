-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Янв 13 2018 г., 23:55
-- Версия сервера: 5.6.38
-- Версия PHP: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `Registration form`
--

-- --------------------------------------------------------

--
-- Структура таблицы `Registration`
--

CREATE TABLE `Registration` (
  `id` int(11) NOT NULL,
  `Name` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `Surname` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `Age` int(11) NOT NULL,
  `Gender` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `Hobbies` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `Username` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `Password` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `Date of birth` date NOT NULL,
  `Card number` int(19) NOT NULL,
  `About` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `Category` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Дамп данных таблицы `Registration`
--

INSERT INTO `Registration` (`id`, `Name`, `Surname`, `Age`, `Gender`, `Hobbies`, `Username`, `Password`, `Date of birth`, `Card number`, `About`, `Category`) VALUES
(1, 'Arina', 'Maslova', 27, '', 'Volleyball', 'maslovaarina3@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '1990-07-22', 1234, 'smile', 'Art'),
(2, 'fb', 'fdb', 0, '', '', 'gdnv', '7bccfde7714a1ebadf06c5f4cea752c1', '0000-00-00', 1236, 'ef', 'Art'),
(3, 'ergf', 'fh', 0, '', '', 'fh', '6df3e638de7fefb6a88eef6d6b84c35d', '0000-00-00', 1236, 'fvnv', 'Art'),
(4, 'Samanta', 'Brown', 36, '', 'Football', 'dfdfd', '934b535800b1cba8f96a5d72f72f1611', '2018-01-10', 2222, 'asffv', 'Art');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `Registration`
--
ALTER TABLE `Registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `Registration`
--
ALTER TABLE `Registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
