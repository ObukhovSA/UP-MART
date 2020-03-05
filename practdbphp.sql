-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Мар 04 2020 г., 04:56
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
-- База данных: `practdbphp`
--

-- --------------------------------------------------------

--
-- Структура таблицы `portfolio`
--

CREATE TABLE `portfolio` (
  `id` int(5) NOT NULL,
  `Year` text CHARACTER SET utf8 NOT NULL,
  `Project` text CHARACTER SET utf8mb4 NOT NULL,
  `Description` text CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `portfolio`
--

INSERT INTO `portfolio` (`id`, `Year`, `Project`, `Description`) VALUES
(1, '2016', 'Препарат \"Пропитал\"', 'Стимулирует процессы регенерации, за счет усиления биосинтеза пуриновых и пиримидиновых оснований, РНК, функциональных и ферментативных клеточных элементов. Повышает метаболизм, здоровье и жизнеспособность. Имеет длительные побочные эффекты.'),
(4, '2018', 'Стимулятор SJ1 TGLabs ', 'Боевой стимулятор. Используется для увеличения силы и выносливости перед боем. Уменьшает ощущение боли. Разрешен к применению бойцами спецподразделений. Разработан Terra Group Labs, с маркировкой SJ1.'),
(5, '2020', 'Регенеративный стимулятор eTG-change\r\n', 'Мощный стимулятор процессов регенерации. Применяется для быстрого восстановления бойца после ранения, либо во время транспортировки тяжело раненных. Разрешено использовать только военным врачам и фельдшерам. Имеет сильные побочные эффекты\r\n\r\n');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
