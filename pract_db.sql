-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Мар 07 2020 г., 05:37
-- Версия сервера: 10.4.6-MariaDB
-- Версия PHP: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `pract_db`
--

-- --------------------------------------------------------

--
-- Структура таблицы `auth`
--

CREATE TABLE `auth` (
  `id` int(11) NOT NULL,
  `login` varchar(40) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `auth`
--

INSERT INTO `auth` (`id`, `login`, `password`) VALUES
(1, 'user', 'pass'),
(15, '111', '111'),
(17, 'newlogin', '123');

-- --------------------------------------------------------

--
-- Структура таблицы `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `author` varchar(50) NOT NULL,
  `text` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `comment`
--

INSERT INTO `comment` (`id`, `author`, `text`) VALUES
(12, 'admin', 'ddd'),
(23, 'admin', 'Dassss'),
(27, 'newlogin', 'ÐšÑ€ÑƒÑ‚Ð¾! Ð‘ÑƒÑÐ½Ð¾Ð² Ð¼Ð¾Ð»Ð¾Ð´ÐµÑ†!'),
(28, 'admin', '@newlogin, Ð¡Ð¿Ð°ÑÐ¸Ð±Ð¾ Ð·Ð° Ð¿Ð¾Ð´Ð´ÐµÑ€Ð¶ÐºÑƒ, Ð²Ð°Ñˆ ÐÐ¸ÐºÐ¸Ñ‚Ð°!');

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `title`, `text`) VALUES
(1, 'ÐŸÐ°Ñ‚Ñ‡ 0.12.3.6047', 'Ð Ð°Ð´Ñ‹ ÑÐ¾Ð¾Ð±Ñ‰Ð¸Ñ‚ÑŒ Ð’Ð°Ð¼ Ð¾ Ð²Ñ‹Ñ…Ð¾Ð´Ðµ Ð¾Ð±Ð½Ð¾Ð²Ð»ÐµÐ½Ð¸Ñ 0.12.3.6047 Ð·Ð°ÐºÑ€Ñ‹Ñ‚Ð¾Ð¹ Ð±ÐµÑ‚Ð° Ð²ÐµÑ€ÑÐ¸Ð¸ Ð¼Ð½Ð¾Ð³Ð¾Ð¿Ð¾Ð»ÑŒÐ·Ð¾Ð²Ð°Ñ‚ÐµÐ»ÑŒÑÐºÐ¾Ð³Ð¾ Ð¾Ð½Ð»Ð°Ð¹Ð½-FPS Escape from Tarkov.'),
(2, 'news 2', 'some text 2'),
(3, 'news122', 'hnj'),
(4, 'Terra', 'Group'),
(5, 'Terra', 'Grouppdasss');

-- --------------------------------------------------------

--
-- Структура таблицы `news_comment`
--

CREATE TABLE `news_comment` (
  `news_id` int(11) NOT NULL,
  `comm_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `news_comment`
--

INSERT INTO `news_comment` (`news_id`, `comm_id`) VALUES
(1, 27),
(1, 28),
(2, 23);

-- --------------------------------------------------------

--
-- Структура таблицы `portfolio`
--

CREATE TABLE `portfolio` (
  `id` int(11) NOT NULL,
  `Year` year(4) NOT NULL,
  `Site` varchar(100) NOT NULL,
  `Description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `portfolio`
--

INSERT INTO `portfolio` (`id`, `Year`, `Site`, `Description`) VALUES
(13, 2018, 'ÐŸÑ€ÐµÐ¿Ð°Ñ€Ð°Ñ‚ SJI TGlabs', 'Ð‘Ð¾ÐµÐ²Ð¾Ð¹ ÑÑ‚Ð¸Ð¼ÑƒÐ»ÑÑ‚Ð¾Ñ€. Ð˜ÑÐ¿Ð¾Ð»ÑŒÐ·ÑƒÐµÑ‚ÑÑ Ð´Ð»Ñ ÑƒÐ²ÐµÐ»Ð¸Ñ‡ÐµÐ½Ð¸Ñ ÑÐ¸Ð»Ñ‹ Ð¸ Ð²Ñ‹Ð½Ð¾ÑÐ»Ð¸Ð²Ð¾ÑÑ‚Ð¸ Ð¿ÐµÑ€ÐµÐ´ Ð±Ð¾ÐµÐ¼. Ð£Ð¼ÐµÐ½ÑŒÑˆÐ°ÐµÑ‚ Ð¾Ñ‰ÑƒÑ‰ÐµÐ½Ð¸Ðµ Ð±Ð¾Ð»Ð¸. Ð Ð°Ð·Ñ€ÐµÑˆÐµÐ½ Ðº Ð¿Ñ€Ð¸Ð¼ÐµÐ½ÐµÐ½Ð¸ÑŽ Ð±Ð¾Ð¹Ñ†Ð°Ð¼Ð¸ ÑÐ¿ÐµÑ†Ð¿Ð¾Ð´Ñ€Ð°Ð·Ð´ÐµÐ»ÐµÐ½Ð¸Ð¹. Ð Ð°Ð·Ñ€Ð°Ð±Ð¾Ñ‚Ð°Ð½ Terra Group Labs, Ñ Ð¼Ð°Ñ€ÐºÐ¸Ñ€Ð¾Ð²ÐºÐ¾Ð¹ SJ1.'),
(14, 2020, 'Ð ÐµÐ³ÐµÐ½ÐµÑ€Ð°Ñ‚Ð¸Ð²Ð½Ñ‹Ð¹ ÑÑ‚Ð¸Ð¼ÑƒÐ»ÑÑ‚Ð¾Ñ€ eTG-change', 'ÐœÐ¾Ñ‰Ð½Ñ‹Ð¹ ÑÑ‚Ð¸Ð¼ÑƒÐ»ÑÑ‚Ð¾Ñ€ Ð¿Ñ€Ð¾Ñ†ÐµÑÑÐ¾Ð² Ñ€ÐµÐ³ÐµÐ½ÐµÑ€Ð°Ñ†Ð¸Ð¸. ÐŸÑ€Ð¸Ð¼ÐµÐ½ÑÐµÑ‚ÑÑ Ð´Ð»Ñ Ð±Ñ‹ÑÑ‚Ñ€Ð¾Ð³Ð¾ Ð²Ð¾ÑÑÑ‚Ð°Ð½Ð¾Ð²Ð»ÐµÐ½Ð¸Ñ Ð±Ð¾Ð¹Ñ†Ð° Ð¿Ð¾ÑÐ»Ðµ Ñ€Ð°Ð½ÐµÐ½Ð¸Ñ, Ð»Ð¸Ð±Ð¾ Ð²Ð¾ Ð²Ñ€ÐµÐ¼Ñ Ñ‚Ñ€Ð°Ð½ÑÐ¿Ð¾Ñ€Ñ‚Ð¸Ñ€Ð¾Ð²ÐºÐ¸ Ñ‚ÑÐ¶ÐµÐ»Ð¾ Ñ€Ð°Ð½ÐµÐ½Ð½Ñ‹Ñ…. Ð Ð°Ð·Ñ€ÐµÑˆÐµÐ½Ð¾ Ð¸ÑÐ¿Ð¾Ð»ÑŒÐ·Ð¾Ð²Ð°Ñ‚ÑŒ Ñ‚Ð¾Ð»ÑŒÐºÐ¾ Ð²Ð¾ÐµÐ½Ð½Ñ‹Ð¼ Ð²Ñ€Ð°Ñ‡Ð°Ð¼ Ð¸ Ñ„ÐµÐ»ÑŒÐ´ÑˆÐµÑ€Ð°Ð¼. Ð˜Ð¼ÐµÐµÑ‚ ÑÐ¸Ð»ÑŒÐ½Ñ‹Ðµ Ð¿Ð¾Ð±Ð¾Ñ‡Ð½Ñ‹Ðµ ÑÑ„Ñ„ÐµÐºÑ‚Ñ‹'),
(15, 2015, 'Ð²Ð¾Ñ‚ Ñ‚Ð°ÐºÐ¾Ð¹', 'Ð½Ñƒ Ð´Ð°s'),
(17, 2015, 'TerraGroup', 'Maintenance');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `auth`
--
ALTER TABLE `auth`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `news_comment`
--
ALTER TABLE `news_comment`
  ADD UNIQUE KEY `news_id` (`news_id`,`comm_id`),
  ADD KEY `comm_id` (`comm_id`);

--
-- Индексы таблицы `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `auth`
--
ALTER TABLE `auth`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT для таблицы `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `news_comment`
--
ALTER TABLE `news_comment`
  ADD CONSTRAINT `news_comment_ibfk_1` FOREIGN KEY (`news_id`) REFERENCES `news` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `news_comment_ibfk_2` FOREIGN KEY (`comm_id`) REFERENCES `comment` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
