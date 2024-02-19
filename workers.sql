-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Фев 14 2024 г., 13:08
-- Версия сервера: 8.0.30
-- Версия PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `AutoPark`
--

-- --------------------------------------------------------

--
-- Структура таблицы `catalog`
--

CREATE TABLE `catalog` (
  `id` int NOT NULL,
  `available for rent` tinyint(1) NOT NULL,
  `name` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL,
  `catagery` set('Внедорожник','Бизнес','Спорткар','Премиум','Комфорт') NOT NULL,
  `full name` varchar(30) NOT NULL,
  `engine's type` set('Бензин','Дизель','Электро') NOT NULL,
  `engine capacity` double NOT NULL,
  `engine power` int NOT NULL,
  `maximum price` int NOT NULL,
  `average price` int NOT NULL,
  `minimum price` int NOT NULL,
  `full description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `catalog`
--

INSERT INTO `catalog` (`id`, `available for rent`, `name`, `city`, `catagery`, `full name`, `engine's type`, `engine capacity`, `engine power`, `maximum price`, `average price`, `minimum price`, `full description`) VALUES
(1, 1, 'BMW', 'Ногинск', 'Внедорожник', 'BMW X2, 2021', 'Бензин', 2, 190, 4470000, 3950000, 3220000, 'Среднеразмерный кроссовер от немецкого автопроизводителя BMW. Автомобиль был представлен в 2016 году в Париже. Серийно автомобиль производится с октября 2017 года. На рынки автомобиль поставляется с марта 2018 года. '),
(2, 1, 'Kia', 'Ногинск', 'Внедорожник', 'Kia Sportage, 2022', 'Бензин', 2.5, 190, 4040000, 3900000, 3650000, 'Новое поколение было представлено в 2015 году на Франкфуртском автосалоне. На момент старта продаж Kia Sportage будет предлагаться с 3 бензиновыми и 3 дизельными моторами.'),
(3, 1, 'Lexus', 'Ногинск', 'Бизнес', 'Lexus IS, 2018', 'Бензин', 3.5, 260, 4000000, 3800000, 3600000, 'Спортивный автомобиль среднего класса, продаваемый брендом Lexus. Ранее IS выпускался в Японии под названием Toyota Altezza. Первое поколение Altezza появилось в Японии в октябре 1998 года, в то время как Lexus IS дебютировал в Европе в 1999 году и в Северной Америке в 2000 году.'),
(4, 1, 'Jaguar', 'Дубай', 'Комфорт', 'Jaguar XF, 2012', 'Бензин', 3, 340, 3935000, 3700000, 3470000, 'Люксовый седан бизнес-класса/ спортивный седан, выпускаемый британской автомобилестроительной компанией Jaguar с 2008 года. Является преемником Jaguar S-type. XF был впервые представлен в 2007 на Франкфуртском автосалоне. XF был разработан дизайнерском и конструкторском отделении Jaguar в Уитли и производится на заводе в Касл Бромвич. Первые поставки покупателям начались в марте 2008 года.'),
(5, 1, 'Toyota', 'Дубай', 'Внедорожник', 'Toyota RAV4, 2017', 'Бензин', 2, 146, 2180000, 1870000, 1600000, 'Компактный кроссовер, запущенный в производство в Японии в 1994 году. Первое поколение позиционировалось компанией Toyota как молодёжный автомобиль для активного отдыха, отсюда и происхождение названия, цифра «4» указывает на постоянный полный привод.'),
(6, 1, 'Mazda', 'Ногинск', 'Комфорт', 'Mazda 6, 2021', 'Бензин', 2.5, 231, 3830000, 3570000, 3210000, 'Mazda 6 — среднеразмерный автомобиль японской компании Mazda. Предшественником модели считается Mazda 626, также известная как Mazda Capella. Mazda 6 первого поколения стала первым представителем нового модельного ряда Mazda. За ней последовали Mazda 2 в декабре 2002 года, RX-8 в августе 2003 года, Mazda 3 в январе 2004 года, Mazda 5 летом 2005 года.');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `catalog`
--
ALTER TABLE `catalog`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `catalog`
--
ALTER TABLE `catalog`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
