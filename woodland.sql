-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Дек 28 2020 г., 08:20
-- Версия сервера: 10.1.38-MariaDB
-- Версия PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `woodland`
--

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `order_id` int(255) NOT NULL,
  `order_email` text COLLATE utf8_unicode_ci NOT NULL,
  `order_name` text COLLATE utf8_unicode_ci,
  `order_adress` text COLLATE utf8_unicode_ci,
  `order_total_id` int(255) NOT NULL,
  `order_total_price` int(100) DEFAULT NULL,
  `Time_order` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`order_id`, `order_email`, `order_name`, `order_adress`, `order_total_id`, `order_total_price`, `Time_order`) VALUES
(1, 'lopji368@gmail.com', 'Дан', ' ВОЛГОГРАД 89044541473 lopji368@gmail.com  ДОМ 357 КВАРТИРА 397 \\n\\n-\\n\\n Предоплата\\n', 1, 250, '12.28.20,00:43:04'),
(5, 'lopji368@gmail.com', 'Данк', ' ВОЛГОГРАД 89044541473 lopji368@gmail.com  ДОМ 357 КВАРТИРА 397 \\n\\n-\\n\\n Предоплата\\n', 5, 550, '12.28.20,00:43:20'),
(6, '2', '2', '2', 2, 2, '2');

-- --------------------------------------------------------

--
-- Структура таблицы `person`
--

CREATE TABLE `person` (
  `Person_id` int(11) NOT NULL,
  `person_vk_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Person_name` longtext COLLATE utf8_unicode_ci,
  `email` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Person_permission` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `person`
--

INSERT INTO `person` (`Person_id`, `person_vk_id`, `Person_name`, `email`, `password`, `Person_permission`) VALUES
(1, NULL, 'Дан', 'lopji368@gmail.com', 'e2a1f5c0be0a2016f28232e10c9225df', 'admin'),
(2, NULL, 'Волк', 'lupus@gmail.ru', 'a4c99d2089551659c228ebfc6300b285', ''),
(3, NULL, 'Собака', 'we@gmail.yes', 'fd3cf15d628ab74ac15ed9a2a3eaf09e', ''),
(4, NULL, 'Имя Фамилия', 'lop@gmail.com', 'db85e54adb90d89245e2b0c19766b05d', ''),
(5, 'ad3c58424d856ecc96955b0f1ac3eb92', 'Дан Курко', NULL, NULL, NULL),
(6, NULL, 'Дан Курко', 'lolik@gmail.com', '7d96baa1bbe81c2d74cd2171b5fb2d4d', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `product_shop`
--

CREATE TABLE `product_shop` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `product_cost` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `product_search_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `product_search_id` varchar(110) COLLATE utf8_unicode_ci DEFAULT NULL,
  `product_search_base` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `product_img` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `product_shop`
--

INSERT INTO `product_shop` (`product_id`, `product_name`, `product_cost`, `product_search_name`, `product_search_id`, `product_search_base`, `product_img`) VALUES
(1, 'Доска обрезная 25-100 м', '250', 'Доска обрезная 25-100 м', '040', 'base', 'ShopMaterials/materials/doska-obreznaya/doska-obreznaya-25-100m.jpg'),
(2, 'Доска обрезная 25x150 м', '350', 'Доска обрезная 25x150 м', '041', 'no', 'ShopMaterials/materials/doska-obreznaya/doska-obreznaya-25-150m.jpg'),
(3, 'Доска обрезная 40x100 м', '450', 'Доска обрезная 40x100 м', '042', 'no', 'ShopMaterials/materials/doska-obreznaya/doska-obreznaya-40-100m.jpg'),
(4, 'Доска обрезная 40x150 м', '550', 'Доска обрезная 40x150 м', '043', 'base', 'ShopMaterials/materials/doska-obreznaya/doska-obreznaya-40-150m.jpg'),
(5, 'Доска строганная 25-100 м', '250', 'Доска строганная 25-100 м', '030', 'no', 'ShopMaterials/materials/doska-strogannaya/doska-strogannaya-25-100m.jpg'),
(6, 'Доска строганная 40-150 м', '350', 'Доска строганная 40-150 м', '031', 'base', 'ShopMaterials/materials/doska-strogannaya/doska-strogannaya-40-150m.jpg'),
(7, 'Доска строганная 40-200 м', '450', 'Доска строганная 40-200 м', '032', 'base', 'ShopMaterials/materials/doska-strogannaya/doska-strogannaya-40-200m.jpg'),
(8, 'Доска строганная 50x150 м', '550', 'Доска строганная 50x150 м', '033', 'no', 'ShopMaterials/materials/doska-strogannaya/doska-strogannaya-50-150m.jpg'),
(9, 'test', NULL, 'no', '24', 'no', '');

-- --------------------------------------------------------

--
-- Структура таблицы `total_order`
--

CREATE TABLE `total_order` (
  `total_order_id` int(11) NOT NULL,
  `order_number` int(100) NOT NULL,
  `total_order_email` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `total_order_time` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `total_order_product` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `total_order`
--

INSERT INTO `total_order` (`total_order_id`, `order_number`, `total_order_email`, `total_order_time`, `total_order_product`) VALUES
(2, 2, 'lopji368@gmail.com', '12.28.20,00:43:08', 'ID043  													Доска обрезная  40x150   													550 руб.  													 													 													1 													  													550 руб.'),
(5, 5, 'lopji368@gmail.com', '12.28.20,00:43:20', 'ID043  													Доска обрезная  40x150   													550 руб.  													 													 													1 													  													550 руб.'),
(6, 0, 'доп', 'доп', 'доп');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Индексы таблицы `person`
--
ALTER TABLE `person`
  ADD PRIMARY KEY (`Person_id`),
  ADD UNIQUE KEY `Person_email` (`email`),
  ADD UNIQUE KEY `person_vk_id` (`person_vk_id`);

--
-- Индексы таблицы `product_shop`
--
ALTER TABLE `product_shop`
  ADD PRIMARY KEY (`product_id`);

--
-- Индексы таблицы `total_order`
--
ALTER TABLE `total_order`
  ADD PRIMARY KEY (`total_order_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `person`
--
ALTER TABLE `person`
  MODIFY `Person_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `product_shop`
--
ALTER TABLE `product_shop`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `total_order`
--
ALTER TABLE `total_order`
  MODIFY `total_order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
