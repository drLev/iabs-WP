-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Сен 12 2017 г., 20:38
-- Версия сервера: 5.7.19-0ubuntu0.16.04.1
-- Версия PHP: 7.0.22-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `dog`
--

-- --------------------------------------------------------

--
-- Структура таблицы `dog`
--

CREATE TABLE `dog` (
  `id` int(11) NOT NULL,
  `breed` varchar(150) NOT NULL,
  `discription` text NOT NULL,
  `photo` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `dog`
--

INSERT INTO `dog` (`id`, `breed`, `discription`, `photo`) VALUES
(1, 'Немецкая овчарка', 'Немецкая овчарка — порода собак, изначально использовалась в качестве пастушьей и служебно-розыскной собаки. Немецкая овчарка была получена в результате селекции и скрещивания некоторых разновидностей гуртовых собак Центральной и Южной Германии. Википедия\r\nПродолжительность жизни: 9–13 лет\r\nПроисхождение: Германия\r\nОкрас: Чёрный, Чёрный с рыжими подпалинами, Чёрный с серебром, Чёрно-рыжий, Соболиный, Серый\r\nХарактер: Послушный, Умный, Бдительный, Смелый, Преданный, Любопытный, Уверенный в себе\r\nМасса: самец: 30–40 кг, Самка: 22–32 кг\r\nРост: самец: 60–65 см, Самка: 55–60 см', 'uploads/7.jpg'),
(2, 'Ротвейлер', 'Ротве́йлер — служебная порода собак группы молоссов. Выведена в городе Ротвайль в середине XVIII века. Крупная, с крепким костяком собака, обладающая устойчивым сильным характером. Википедия\r\nПродолжительность жизни: 8–10 лет\r\nПроисхождение: Германия\r\nХарактер: Послушный, Преданный, Бесстрашный, Смелый, ЕЩЁ\r\nМасса: Самка: 35–48 кг, самец: 50–60 кг\r\nРост: Самка: 56–63 см, самец: 61–69 см\r\nОкрас: Чёрный, рыжевато-коричневый, Махагон', 'uploads/06.jpg'),
(3, 'Сибирский хаски', 'Сибирский хаски — заводская специализированная порода собак, зарегистрированная американскими кинологами ... Википедия\r\nПродолжительность жизни: 12–15 лет\r\nПроисхождение: Сибирь\r\nОкрас: Белый, Чёрный, Агути, Пиболд, ЕЩЁ\r\nХарактер: Отзывчивый, Умный, Бдительный, Нежный, Дружелюбный\r\nМасса: Самка: 16–23 кг, самец: 20–27 кг\r\nРост: Самка: 50–56 см, самец: 54–60 см\r\n', 'uploads/b62d0b.jpg');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `dog`
--
ALTER TABLE `dog`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `dog`
--
ALTER TABLE `dog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
