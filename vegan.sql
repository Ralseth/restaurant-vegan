-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Май 07 2024 г., 22:36
-- Версия сервера: 10.4.28-MariaDB
-- Версия PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `vegan`
--

-- --------------------------------------------------------

--
-- Структура таблицы `catalog`
--

CREATE TABLE `catalog` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(10) NOT NULL,
  `type` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `gram` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `catalog`
--

INSERT INTO `catalog` (`id`, `name`, `price`, `type`, `description`, `gram`) VALUES
(13, 'Хрустящий оливье с бататом', 125, 'salads', '(свежие огурцы, батат, зеленый горошек, укроп, соус)', 220),
(14, 'Греческий салат', 110, 'salads', '(помидор, огурец, сыр фета, оливки, салат)', 200),
(15, 'Салат из свежих овощей', 90, 'salads', '(брокколи, лук, перец, салат, зеленый горошек, кукуруза)', 180),
(16, 'Салат с творожным сыром и пшеницей', 135, 'salads', '(шпинат, салатные листья, яблоко, перец, пшеница ростки, творожный сыр, грецкий орех)', 180),
(17, 'Запеченый картофель с овощами', 130, 'main', '(картофель, шпинат, грибы, сыры)', 230),
(18, 'Гречневая лапша с овощами', 160, 'main', '(гречка, морковь, лук, грибы шинтаке)', 220),
(19, 'Рулетики из цукини', 75, 'main', '(цукини, итальянский сыр, перец)', 190),
(20, 'Манная каша', 75, 'porridge', '(добавки: мед, варенье в ассортименте)', 200),
(21, 'Овсяная каша', 75, 'porridge', '(добавки: мед, варенье в ассортименте)', 200),
(22, 'Черный чай', 125, 'drinks', '(цейлонский, саусеп, с бергамотом)', 400),
(23, 'Зеленый чай', 125, 'drinks', '(гандпаудер, молочный улун)', 400),
(24, 'Имбирный чай', 125, 'drinks', '(имбирь, лимон, мята, корица)', 250),
(25, 'Свежие соки', 50, 'drinks', '(яблочный, вишневый, апельсиновый)', 500),
(26, 'Грибной крем-суп', 150, 'soups', '(грибы, гренки, зеленый горошек, масло лесного орешка)', 300),
(27, 'Свекольный крем-суп', 140, 'soups', '(свекла, творожный сыр, кедровые орешки, сельдерей)', 300),
(28, 'Кокосовый пирог', 75, 'desserts', '', 150),
(29, 'Яблочный пирог', 60, 'desserts', '', 150),
(30, 'Тыквенный пирог', 50, 'desserts', '', 150),
(31, 'Имбирное печенье', 35, 'desserts', '', 100);

-- --------------------------------------------------------

--
-- Структура таблицы `reviews`
--

CREATE TABLE `reviews` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `reviews`
--

INSERT INTO `reviews` (`id`, `name`, `description`) VALUES
(16, 'Первый отзыв', 'тут какой-то текст'),
(17, 'Второй отзыв', 'тоже какой-то текст'),
(18, 'Третий отзыв', 'и так далее');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `catalog`
--
ALTER TABLE `catalog`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `catalog`
--
ALTER TABLE `catalog`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT для таблицы `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
