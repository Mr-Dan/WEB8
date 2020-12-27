-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Дек 23 2020 г., 22:04
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

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `person`
--
ALTER TABLE `person`
  ADD PRIMARY KEY (`Person_id`),
  ADD UNIQUE KEY `Person_email` (`email`),
  ADD UNIQUE KEY `person_vk_id` (`person_vk_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `person`
--
ALTER TABLE `person`
  MODIFY `Person_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
