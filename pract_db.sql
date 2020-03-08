-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Мар 08 2020 г., 10:07
-- Версия сервера: 10.4.11-MariaDB
-- Версия PHP: 7.4.2

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
(17, 'newlogin', '123'),
(19, 'TAPAKAH', '111');

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
(30, 'admin', 'Есть вопросы? Задавайте!'),
(32, 'TAPAKAH', '<h6>БУЯНОВ!!! МОЛОДЕЦ!!!</h6>'),
(33, 'TAPAKAH', 'НОВЫЙ ГОД, БЛИН!!! ОПЧТЬ СЕРВЕРА СЛОМАБСЯ');

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
(1, 'Патч 0.12.3.6047', '<p>Хотфикс 0.12.3.5961</p>\r\n<strong>Изменения:</strong>\r\n<li>Исправлен критичный баг, когда при входе в убежище от первого лица у персонажа выворачивало руки.\r\n</li>\r\n<li>Исправлен баг невозможности выбора предметов на производство, возникавший при наличии нескольких предметов в рецепте.\r\n</li>\r\n<li>\r\nИсправлен баг производства патронов СП-6 на верстаке убежища, когда в требования указывалось намного больше предметов, чем на самом деле нужно было.\r\n</li>\r\n<li>\r\nИсправлен баг, при котором невозможно было быстро переложить предметы в защищённый контейнер, перенеся предметы на его иконку.\r\n</li>\r\n<li>\r\nРазличные небольшие исправления ошибок.\r\n</li>'),
(2, 'C Новым Годом и Рождеством', '<p>Этот год был невероятным благодаря вам!\r\nПусть 2020 будет еще лучше!\r\nДа здравствует хардкор!</p>\r\n<p>С наилучшими пожеланиями в Новом Году,\r\n<br>\r\nКоманда разработчиков EFT.\r\n</p>\r\n'),
(3, 'Крупнейшее обновление 0.12 в Escape from Tarkov: Убежище, новая карта Резерв, боссы и Unity 2018.4', '<p>Battlestate Games сообщает о выходе крупнейшего за время разработки обновления 0.12 бета версии многопользовательского онлайн-FPS Escape from Tarkov. Разработчики добавили новые крупные фичи, Убежище, новую локацию База Росрезерва, провели графические улучшения и различные оптимизации, исправили массу багов и недочетов, добавили большое количество нового оружейного контента и других предметов и многое другое. С полным списком изменений можно ознакомиться на официальном сайте и форуме проекта, а также в социальных сетях. Разработчики просят обратить внимание, что в первые часы после обновления сервера могут быть перегружены, что может вызывать увеличение времени матчинга, вероятности возникновения сетевых задержек и очередей.</p>');

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
(1, 30),
(2, 33),
(3, 32);

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
(19, 2015, 'Препарат \"Пропитал\"', '<p>Военный препарат. <li>Стимулирует процессы регенерации, за счет усиления биосинтеза пуриновых и пиримидиновых оснований, РНК, функциональных и ферментативных клеточных элементов. \r\n</li>\r\n<li>\r\nПовышает метаболизм, здоровье и жизнеспособность. \r\n</li>Имеет длительные побочные эффекты. <li>Разрешено использовать только военным врачам и фельдшерам.\r\n</li>\r\n\r\n'),
(20, 2016, 'Регенеративный стимулятор eTG-change ', '<p>Мощный стимулятор процессов регенерации. Применяется для быстрого восстановления бойца после ранения, либо во время транспортировки тяжело раненных. <li>Разрешено использовать только военным врачам и фельдшерам. \r\n</li><li>Имеет сильные побочные эффекты\r\n</li>\r\n</p>\r\n'),
(21, 2020, 'Боевой стимулятор SJ1 TGLabs', '<p>Боевой стимулятор. Используется для увеличения силы и выносливости перед боем. <li>Уменьшает ощущение боли.</li><li>Разрешен к применению бойцами спецподразделений.\r\n</li><li>Разработан Terra Group Labs, с маркировкой SJ1. </li><li>Имеет побочные эффекты.\r\n</li>\r\n</p>');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT для таблицы `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

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
