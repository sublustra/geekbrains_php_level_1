-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Окт 18 2020 г., 18:32
-- Версия сервера: 5.5.62
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `db_gallery`
--

-- --------------------------------------------------------

--
-- Структура таблицы `gallery_img_2`
--

CREATE TABLE `gallery_img_2` (
  `id` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `adress-sm` varchar(256) NOT NULL,
  `adress-big` varchar(256) NOT NULL,
  `count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `gallery_img_2`
--

INSERT INTO `gallery_img_2` (`id`, `name`, `adress-sm`, `adress-big`, `count`) VALUES
(1, 'первая картинка', 'gallery_img/img-small/1.jpg', 'gallery_img/img-big/1.jpg', 0),
(3, 'вторая картинка', 'gallery_img/img-small/2.jpg', 'gallery_img/img-big/2.jpg', 0),
(4, 'третья картинка', 'gallery_img/img-small/3.jpg', 'gallery_img/img-big/3.jpg', 0);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `gallery_img_2`
--
ALTER TABLE `gallery_img_2`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `gallery_img_2`
--
ALTER TABLE `gallery_img_2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
