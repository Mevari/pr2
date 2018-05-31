-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 31 2018 г., 22:59
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
-- Структура таблицы `Category`
--

CREATE TABLE `Category` (
  `id` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `Category`
--

INSERT INTO `Category` (`id`, `parent_id`, `Name`, `image`) VALUES
(1, 0, 'Велосипеды', 'web/img/velik.jpg'),
(2, 1, 'спортивные', 'webimg/sport_velik.jpg'),
(3, 0, 'Мотоциклы', 'web/img/moto_cat.jpg'),
(4, 3, 'туристические', 'web/img/moto_cat.jpg'),
(6, 1, 'детские', 'web/img/kinder_bike.jpg'),
(7, 3, 'для души', 'web/img/nice_moto.jpg'),
(8, 0, 'Умывальники', 'web/img/moika_cat'),
(9, 8, 'для Дачи', 'web/img/dusch_dacha.jpg');

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

-- --------------------------------------------------------

--
-- Структура таблицы `Order_Items`
--

CREATE TABLE `Order_Items` (
  `id` int(11) NOT NULL,
  `id_order` int(11) NOT NULL,
  `id_good` int(11) NOT NULL,
  `Price` double NOT NULL,
  `Count` int(11) NOT NULL,
  `Summa` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `Order_Items`
--

INSERT INTO `Order_Items` (`id`, `id_order`, `id_good`, `Price`, `Count`, `Summa`) VALUES
(1, 1, 2, 1300, 2, 2600);

-- --------------------------------------------------------

--
-- Структура таблицы `Order_shop`
--

CREATE TABLE `Order_shop` (
  `id` int(11) NOT NULL,
  `Date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Client_name` varchar(30) NOT NULL,
  `Phone` int(11) NOT NULL,
  `Adress` varchar(30) NOT NULL,
  `Email` varchar(20) DEFAULT NULL,
  `Comment` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `Order_shop`
--

INSERT INTO `Order_shop` (`id`, `Date`, `Client_name`, `Phone`, `Adress`, `Email`, `Comment`) VALUES
(1, '2018-05-29 22:28:34', 'Юрий', 336912997, 'Могилев', 'petrovec@yandex.by', 'хочу зеленый');

-- --------------------------------------------------------

--
-- Структура таблицы `Sale`
--

CREATE TABLE `Sale` (
  `id` int(11) NOT NULL,
  `id_good` int(11) NOT NULL,
  `Description` varchar(250) NOT NULL,
  `New_price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `Sale`
--

INSERT INTO `Sale` (`id`, `id_good`, `Description`, `New_price`) VALUES
(1, 1, 'только в июне', 599);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `Category`
--
ALTER TABLE `Category`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `Items`
--
ALTER TABLE `Items`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `Order_Items`
--
ALTER TABLE `Order_Items`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `Order_shop`
--
ALTER TABLE `Order_shop`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `Sale`
--
ALTER TABLE `Sale`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `Category`
--
ALTER TABLE `Category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `Items`
--
ALTER TABLE `Items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `Order_Items`
--
ALTER TABLE `Order_Items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `Order_shop`
--
ALTER TABLE `Order_shop`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `Sale`
--
ALTER TABLE `Sale`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
