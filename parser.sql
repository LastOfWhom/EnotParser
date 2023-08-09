-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Авг 09 2023 г., 19:59
-- Версия сервера: 5.7.39
-- Версия PHP: 8.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `parser`
--

-- --------------------------------------------------------

--
-- Структура таблицы `curse`
--

CREATE TABLE `curse` (
  `ID` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NumCode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CharCode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Nominal` int(11) NOT NULL,
  `Name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Value` float NOT NULL,
  `Previous` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `curse`
--

INSERT INTO `curse` (`ID`, `NumCode`, `CharCode`, `Nominal`, `Name`, `Value`, `Previous`) VALUES
('R01010', '036', 'AUD', 1, 'Австралийский доллар', 63.8554, 62.7469),
('R01020A', '944', 'AZN', 1, 'Азербайджанский манат', 57.2941, 56.515),
('R01035', '826', 'GBP', 1, 'Фунт стерлингов Соединенного королевства', 123.912, 122.708),
('R01060', '051', 'AMD', 100, 'Армянских драмов', 25.2286, 24.8604),
('R01090B', '933', 'BYN', 1, 'Белорусский рубль', 30.6405, 30.4876),
('R01100', '975', 'BGN', 1, 'Болгарский лев', 54.5017, 53.9568),
('R01115', '986', 'BRL', 1, 'Бразильский реал', 19.7911, 19.6044),
('R01135', '348', 'HUF', 100, 'Венгерских форинтов', 27.5616, 27.3066),
('R01150', '704', 'VND', 10000, 'Вьетнамских донгов', 40.8711, 40.3645),
('R01200', '344', 'HKD', 1, 'Гонконгский доллар', 12.4776, 12.3205),
('R01210', '981', 'GEL', 1, 'Грузинский лари', 37.2666, 36.8021),
('R01215', '208', 'DKK', 1, 'Датская крона', 14.305, 14.1621),
('R01230', '784', 'AED', 1, 'Дирхам ОАЭ', 26.5178, 26.1572),
('R01235', '840', 'USD', 1, 'Доллар США', 97.3999, 96.0755),
('R01239', '978', 'EUR', 1, 'Евро', 106.89, 105.435),
('R01240', '818', 'EGP', 10, 'Египетских фунтов', 31.5258, 31.0972),
('R01270', '356', 'INR', 10, 'Индийских рупий', 11.8011, 11.6762),
('R01280', '360', 'IDR', 10000, 'Индонезийских рупий', 63.9569, 63.2992),
('R01335', '398', 'KZT', 100, 'Казахстанских тенге', 21.8444, 21.5242),
('R01350', '124', 'CAD', 1, 'Канадский доллар', 72.384, 71.9397),
('R01355', '634', 'QAR', 1, 'Катарский риал', 26.7582, 26.3944),
('R01370', '417', 'KGS', 10, 'Киргизских сомов', 11.0845, 10.9338),
('R01375', '156', 'CNY', 1, 'Китайский юань', 13.4741, 13.277),
('R01500', '498', 'MDL', 10, 'Молдавских леев', 55.1148, 54.4569),
('R01530', '554', 'NZD', 1, 'Новозеландский доллар', 58.9854, 58.3755),
('R01535', '578', 'NOK', 10, 'Норвежских крон', 95.2017, 93.009),
('R01565', '985', 'PLN', 1, 'Польский злотый', 23.8719, 23.6122),
('R01585F', '946', 'RON', 1, 'Румынский лей', 21.6209, 21.2971),
('R01589', '960', 'XDR', 1, 'СДР (специальные права заимствования)', 130.15, 128.587),
('R01625', '702', 'SGD', 1, 'Сингапурский доллар', 72.4594, 71.4741),
('R01670', '972', 'TJS', 10, 'Таджикских сомони', 89.053, 87.8742),
('R01675', '764', 'THB', 10, 'Таиландских батов', 27.8781, 27.5169),
('R01700J', '949', 'TRY', 10, 'Турецких лир', 36.0656, 35.5975),
('R01710A', '934', 'TMT', 1, 'Новый туркменский манат', 27.8285, 27.4501),
('R01717', '860', 'UZS', 10000, 'Узбекских сумов', 83.4986, 82.2916),
('R01720', '980', 'UAH', 10, 'Украинских гривен', 26.361, 26.019),
('R01760', '203', 'CZK', 10, 'Чешских крон', 43.9649, 43.5243),
('R01770', '752', 'SEK', 10, 'Шведских крон', 91.2104, 90.3025),
('R01775', '756', 'CHF', 1, 'Швейцарский франк', 111.34, 109.964),
('R01805F', '941', 'RSD', 100, 'Сербских динаров', 91.2504, 90.0985),
('R01810', '710', 'ZAR', 10, 'Южноафриканских рэндов', 51.8305, 51.1257),
('R01815', '410', 'KRW', 1000, 'Вон Республики Корея', 74.029, 73.0223),
('R01820', '392', 'JPY', 100, 'Японских иен', 67.955, 67.1763),
('R00001', '001', 'RUR', 1, 'Российский рубль', 1, 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- --------------------------------------------------------


--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `login` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `password`) VALUES
(2, 'qwerty', '$2y$10$TSd3S9nYbgzrsIeuo7yPq.GOVbQQ/43xh25p25Uur.d6K.YJquqoO'),
(7, 'ksusha', '$2y$10$.M5id28kbpsL5WZT/eYv6eTf9hL0ow8esqxj9hgM7Zo.cdMW7HYai');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
