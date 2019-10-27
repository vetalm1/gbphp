-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3307
-- Время создания: Авг 30 2019 г., 14:46
-- Версия сервера: 5.6.43
-- Версия PHP: 7.1.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `test`
--

-- --------------------------------------------------------

--
-- Структура таблицы `basket`
--

CREATE TABLE `basket` (
  `id_basket` int(11) NOT NULL,
  `user_name` text NOT NULL,
  `id_good` int(11) NOT NULL,
  `good_name` text NOT NULL,
  `price` int(11) NOT NULL,
  `order_id` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `basket`
--

INSERT INTO `basket` (`id_basket`, `user_name`, `id_good`, `good_name`, `price`, `order_id`) VALUES
(32, 'Vetal', 3, 'Cтул белый', 1200, '69'),
(35, 'Vetal', 1, 'Чаша-толкушка', 500, '69'),
(36, 'Vetal', 2, 'Светильник серый', 1000, '69'),
(39, 'Alena', 4, 'Cветильник черный', 1400, ''),
(40, 'Alena', 1, 'Чаша-толкушка', 500, ''),
(41, 'Elena', 3, 'Cтул белый', 1200, ''),
(42, 'Elena', 6, 'Увлажнитель интерьерный', 2700, ''),
(43, 'Alena', 3, 'Cтул белый', 1200, ''),
(49, 'admin', 5, 'Cветильник черный (ал.)', 700, '66'),
(57, 'admin', 6, 'Увлажнитель интерьерный', 2700, '66'),
(58, 'admin', 6, 'Увлажнитель интерьерный', 2700, '67'),
(61, 'admin', 1, 'Чаша-толкушка', 500, '67'),
(63, 'admin', 4, 'Cветильник черный', 1400, '67'),
(64, 'admin', 3, 'Cтул белый', 1200, '68'),
(65, 'admin', 4, 'Cветильник черный', 1400, '68'),
(66, 'Vetal', 4, 'Cветильник черный', 1400, '69');

-- --------------------------------------------------------

--
-- Структура таблицы `comments`
--

CREATE TABLE `comments` (
  `key1` int(7) NOT NULL,
  `id` int(7) NOT NULL,
  `name` text NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `comments`
--

INSERT INTO `comments` (`key1`, `id`, `name`, `text`) VALUES
(1, 2, 'Виталий', 'Класный товар'),
(2, 3, 'Виталий', 'Хумноj'),
(3, 4, 'Сергей', 'Круто'),
(4, 4, 'Vetal', 'фенкс'),
(5, 5, 'Ivan', 'В топку'),
(6, 3, 'Fred', 'bad comment'),
(7, 6, 'Slava', 'Прекрасный товар'),
(8, 4, 'Vetal-m', 'Прекрасный товар'),
(9, 4, 'Vetal-m', 'Прекрасный товар'),
(10, 4, 'Vetal-m', 'Прекрасный товар'),
(11, 1, 'Vetal', 'Бери не пожалеешь'),
(12, 1, 'Slava', 'Все взяли и я взял'),
(13, 6, 'Юрий', 'Вот это дааа!'),
(14, 1, 'Андрей', 'Прекрасный товар'),
(15, 1, 'Евгений', 'Круто, я тоже прикупил'),
(16, 2, 'Артем', 'Мне не понравилось'),
(17, 5, 'John', 'Very best !!!'),
(18, 5, 'Татьяна', 'Очень приличный');

-- --------------------------------------------------------

--
-- Структура таблицы `feedback`
--

CREATE TABLE `feedback` (
  `id_feedback` int(11) NOT NULL,
  `feedback_body` text NOT NULL,
  `feedback_user` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `path` text NOT NULL,
  `size` int(11) NOT NULL,
  `name` text NOT NULL,
  `views` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `gallery`
--

INSERT INTO `gallery` (`id`, `path`, `size`, `name`, `views`) VALUES
(1, 'img', 10, 'img1.jpg', 5),
(2, 'img', 5, 'img2.jpg', 6),
(3, 'img', 8, 'img3.jpg', 13),
(4, 'img', 10, 'img4.jpg', 2),
(5, 'img', 6, 'img5.jpg', 18),
(6, 'img', 5, 'img6.jpg', 2);

-- --------------------------------------------------------

--
-- Структура таблицы `goods`
--

CREATE TABLE `goods` (
  `id` int(11) NOT NULL,
  `good_name` varchar(255) NOT NULL,
  `good_description` text NOT NULL,
  `good_price` int(11) NOT NULL,
  `is_active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `goods`
--

INSERT INTO `goods` (`id`, `good_name`, `good_description`, `good_price`, `is_active`) VALUES
(1, 'Чаша-толкушка', 'Материал - черный гранит, емкость 1л., толкушка в комплекте', 500, 1),
(2, 'Светильник серый', 'Светодиодный источник, материал - пластик, страна производитель - Германия', 1000, 1),
(3, 'Cтул белый', 'материал- пластик + дерево, размер стандартный', 1200, 1),
(4, 'Cветильник черный', 'материал- пластик, страна производитель - Итлаия', 1400, 1),
(5, 'Cветильник черный (ал.)', 'материал- алюминий, страна производитель - Итлаия', 700, 1),
(6, 'Увлажнитель интерьерный', 'материал- слоновая кость, страна производитель - Итлаия', 2700, 1),
(10, 'Камень декоративный', 'гранит', 1200, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `logins`
--

CREATE TABLE `logins` (
  `id` int(7) NOT NULL,
  `login` text NOT NULL,
  `pass` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `logins`
--

INSERT INTO `logins` (`id`, `login`, `pass`) VALUES
(1, 'Vetal', '$2y$12$gN/InRIawQp8CLwk91vRbeYykL5WjdI5CB5j/d5N0hlM34j1NgJlK'),
(2, 'admin', '$2y$12$gN/InRIawQp8CLwk91vRbeYykL5WjdI5CB5j/d5N0hlM34j1NgJlK'),
(5, 'Alena', '$2y$10$1Z.ztZ2rt2hlwX15e6lKS.y2USww9Hnxaufwz/iFYSAFm9JYE5CDW'),
(6, 'Elena', '$2y$10$OML4eoDopKZNtSlNfvoSdeFpH1WARfyURy3Gbsmpmnc4AQ9/PyuTi'),
(7, 'mixer-03', '$2y$10$SbCqzLIs0xr9XLxN4aWmje2ubnLeRzYUDcMHdod7qVsdWuPmT2VMy');

-- --------------------------------------------------------

--
-- Структура таблицы `orders1`
--

CREATE TABLE `orders1` (
  `id_order` int(7) NOT NULL,
  `user_name` text NOT NULL,
  `summ` int(11) NOT NULL,
  `datetime_create` text NOT NULL,
  `order_status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `orders1`
--

INSERT INTO `orders1` (`id_order`, `user_name`, `summ`, `datetime_create`, `order_status`) VALUES
(1, 'admin', 2200, '2019-08-29 16:53:44', 'Выполнен'),
(2, 'admin', 2200, '2019-08-29 16:54:02', 'Выполнен'),
(66, 'admin', 4900, '2019-08-30 10:00:33', ''),
(67, 'admin', 4600, '2019-08-30 10:08:35', 'Выполнен'),
(68, 'admin', 2600, '2019-08-30 10:10:22', 'Выполнен'),
(69, 'Vetal', 4100, '2019-08-30 12:02:44', '');

-- --------------------------------------------------------

--
-- Структура таблицы `order_status`
--

CREATE TABLE `order_status` (
  `id_order_status` int(11) NOT NULL,
  `order_status_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `order_status`
--

INSERT INTO `order_status` (`id_order_status`, `order_status_name`) VALUES
(1, 'Новый'),
(2, 'Принят'),
(3, 'Выполнен'),
(4, 'Отменён');

-- --------------------------------------------------------

--
-- Структура таблицы `role`
--

CREATE TABLE `role` (
  `id_role` int(11) NOT NULL,
  `role_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `role`
--

INSERT INTO `role` (`id_role`, `role_name`) VALUES
(1, 'Админ'),
(2, 'Пользователь');

-- --------------------------------------------------------

--
-- Структура таблицы `test1`
--

CREATE TABLE `test1` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `age` int(11) NOT NULL,
  `leng` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `test1`
--

INSERT INTO `test1` (`id`, `name`, `age`, `leng`) VALUES
(1, 'Виталий', 36, 'php'),
(2, 'Виталий', 36, 'php'),
(3, 'Виталий', 36, 'php'),
(4, 'Сергей', 27, 'c++'),
(5, 'Сергей', 27, 'c++'),
(6, 'Vetal', 37, 'JS'),
(7, 'Vetal', 37, 'JS'),
(8, 'Vetal-m', 38, 'node.js'),
(9, 'Виталий---', 35, 'Java'),
(10, 'vvv', 30, 'JS'),
(11, 'vvv', 30, 'JS');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `basket`
--
ALTER TABLE `basket`
  ADD PRIMARY KEY (`id_basket`);

--
-- Индексы таблицы `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`key1`);

--
-- Индексы таблицы `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id_feedback`);

--
-- Индексы таблицы `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `goods`
--
ALTER TABLE `goods`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `logins`
--
ALTER TABLE `logins`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `orders1`
--
ALTER TABLE `orders1`
  ADD PRIMARY KEY (`id_order`);

--
-- Индексы таблицы `order_status`
--
ALTER TABLE `order_status`
  ADD PRIMARY KEY (`id_order_status`);

--
-- Индексы таблицы `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id_role`);

--
-- Индексы таблицы `test1`
--
ALTER TABLE `test1`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `basket`
--
ALTER TABLE `basket`
  MODIFY `id_basket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT для таблицы `comments`
--
ALTER TABLE `comments`
  MODIFY `key1` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT для таблицы `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id_feedback` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `goods`
--
ALTER TABLE `goods`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `logins`
--
ALTER TABLE `logins`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `orders1`
--
ALTER TABLE `orders1`
  MODIFY `id_order` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT для таблицы `order_status`
--
ALTER TABLE `order_status`
  MODIFY `id_order_status` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `role`
--
ALTER TABLE `role`
  MODIFY `id_role` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `test1`
--
ALTER TABLE `test1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
