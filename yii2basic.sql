-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Апр 27 2018 г., 14:22
-- Версия сервера: 10.1.30-MariaDB
-- Версия PHP: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `yii2basic`
--

-- --------------------------------------------------------

--
-- Структура таблицы `categorytable`
--

CREATE TABLE `categorytable` (
  `id` int(11) NOT NULL,
  `id_block` int(11) NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `categorytable`
--

INSERT INTO `categorytable` (`id`, `id_block`, `name`) VALUES
(1, 0, 'Блоки'),
(2, 0, 'Двери'),
(3, 0, 'Электрика'),
(4, 0, 'Услуги'),
(5, 0, 'Окна пластиковые'),
(6, 0, 'Окна деревянные');

-- --------------------------------------------------------

--
-- Структура таблицы `itemtable`
--

CREATE TABLE `itemtable` (
  `id` int(11) NOT NULL,
  `id_block` int(11) NOT NULL,
  `name` text NOT NULL,
  `desc` text NOT NULL,
  `ed` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `itemtable`
--

INSERT INTO `itemtable` (`id`, `id_block`, `name`, `desc`, `ed`) VALUES
(1, 1, 'Дверь металл. утеплённая 0.8*2.0м., замок врезной.', 'Дверь металл. утеплённая 0.8*2.0м., замок врезной.', 'шт.'),
(2, 2, 'Дверь металл. утеплённая 0.8*2.0м., замок врезной.', 'Дверь металл. утеплённая 0.8*2.0м., замок врезной.', 'шт.'),
(3, 5, 'Окно 100*100 пластиковое двойной стеклопакет', 'Окно 100*100 пластиковое двойной стеклопакет', 'шт'),
(4, 5, 'Окно 200*200 пластиковое двойной стеклопакет', 'Окно 200*200 пластиковое двойной стеклопакет', 'шт'),
(5, 3, 'Розетка внешняя одинарная', 'Розетка внешняя одинарная', 'шт'),
(6, 3, 'Светильник пластиковый белый', 'Светильник пластиковый белый', 'шт');

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `user_name` text NOT NULL,
  `auth_key` text NOT NULL,
  `password_hash` text NOT NULL,
  `password_reset_token` text NOT NULL,
  `email` text NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `categorytable`
--
ALTER TABLE `categorytable`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `itemtable`
--
ALTER TABLE `itemtable`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `categorytable`
--
ALTER TABLE `categorytable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `itemtable`
--
ALTER TABLE `itemtable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
