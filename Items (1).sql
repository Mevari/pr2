-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 30 2018 г., 23:34
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
-- База данных: `shop`
--

-- --------------------------------------------------------

--
-- Структура таблицы `Items`
--

CREATE TABLE `Items` (
  `id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Description` varchar(120) NOT NULL,
  `Img` varchar(50) NOT NULL,
  `Count` int(11) NOT NULL,
  `Price` double NOT NULL,
  `popular` int(11) NOT NULL DEFAULT '0',
  `id_Category` int(11) NOT NULL,
  `Date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `Items`
--

INSERT INTO `Items` (`id`, `Name`, `Description`, `Img`, `Count`, `Price`, `popular`, `id_Category`, `Date`) VALUES
(1, 'Giant ATX 2 27.5', 'идеальный вариант', 'web/img/giant.jpg', 3, 688, 1, 2, '2018-05-29 22:23:36'),
(2, 'Днепр MT-9', 'твой дед на нем ездил', 'web/img/dnepr.jpg', 20, 1300, 1, 7, '2018-05-29 22:26:25'),
(3, 'bmw', '460 кубиков', 'web/img/moto_turist.jpg', 14, 14000, 1, 4, '2018-05-29 22:32:03'),
(4, 'ЭлБЭТ Чистюля', 'для личика', 'web/img/dusch_dacha.jpg', 2, 1214, 1, 9, '2018-05-30 23:29:40'),
(5, 'Днепр для ромы', 'права не нужны', 'web/img/dnepr2.jpg', 20, 1300, 1, 7, '2018-05-29 22:26:25'),
(6, 'ЭлБЭТ Чистюля про', 'для личика', 'web/img/dusch_dacha.jpg', 2, 1500, 0, 9, '2018-05-30 23:29:40');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `Items`
--
ALTER TABLE `Items`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `Items`
--
ALTER TABLE `Items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
