-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: localhost:3307
-- Час створення: Чрв 26 2024 р., 11:46
-- Версія сервера: 8.0.37
-- Версія PHP: 8.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База даних: `mypracti`
--

-- --------------------------------------------------------

--
-- Структура таблиці `campain`
--

CREATE TABLE `campain` (
  `Id` int UNSIGNED NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `title` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `date` datetime NOT NULL,
  `price` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `goal` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `info` varchar(900) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `people_count` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп даних таблиці `campain`
--

INSERT INTO `campain` (`Id`, `icon`, `title`, `date`, `price`, `goal`, `info`, `people_count`) VALUES
(1, 'https://everybodycan.com.ua/assets/thumbs/555x645/photo2023-10-04-162206.jpeg', '«Superhero box» для маленьких супер-героїв Центру дитячої кардіології та кардіохірургії', '2024-06-21 21:20:42', '26100 грн', '∞', 'А ви знаєте, як стають супер-героями?\r\n\r\nБути героєм - це разом з мамою проходити випробування в стінах Центру дитячої кардіології та кардіохірургії.\r\n\r\nВ кожної маленької дитини є страх перед забором крові, перевʼязками та іншими неприємними процедурами, які потрібно робити кожного дня. І тому їх супер-героїчні досягнення чекають на супер-героїчні винагороди!\r\n\r\nМаніпуляційний кабінет Центру дитячої кардіології та кардіохірургії потребує закупівлі саме таких маленьких заохочувальних подаруночків. «SUPERHERO BOX» - це те, що розрадить кожного маленького супер-героя після неприємної процедури.\r\n\r\nЦі бокси з маленькими сюрпризами повинні бути для різних вікових груп від +0 до 18 років. \r\n\r\nТож давайте разом зробимо маленький світ супер-героїв яскравішим та чарівнішим!', 7);

-- --------------------------------------------------------

--
-- Структура таблиці `donatesphero`
--

CREATE TABLE `donatesphero` (
  `id` int NOT NULL,
  `sum` varchar(30) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `altsum` varchar(30) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `name` varchar(30) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `email` varchar(30) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп даних таблиці `donatesphero`
--

INSERT INTO `donatesphero` (`id`, `sum`, `altsum`, `name`, `email`, `date`) VALUES
(1, '500', NULL, 'Благодійний діяч', 'foxyplayy6@gmail.com', '2024-06-22 19:58:09'),
(2, '300', NULL, 'Благодійний діяч', 'imskyfoxy6@gmail.com', '2024-06-22 20:39:21'),
(3, NULL, '1800', 'Благодійний діяч', 'idkthename89@gmail.com', '2024-06-22 20:39:55'),
(4, NULL, '8000', 'Дмитро', 'Goldi_Rich258@gmail.com', '2024-06-22 20:40:43'),
(5, '500', NULL, 'Артур', 'arturpriv279@gmail.com', '2024-06-22 20:41:43'),
(6, NULL, '15000', 'Артур', 'boyguestgod6@gmail.com', '2024-06-22 20:42:16'),
(7, '500', NULL, 'Ярослав', 'Itisnickname89@gmail.com', '2024-06-22 20:42:53');

-- --------------------------------------------------------

--
-- Структура таблиці `overalldonate`
--

CREATE TABLE `overalldonate` (
  `id` int NOT NULL,
  `campaign_name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `sum` varchar(30) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `altsum` varchar(30) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `name` varchar(30) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `email` varchar(30) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп даних таблиці `overalldonate`
--

INSERT INTO `overalldonate` (`id`, `campaign_name`, `sum`, `altsum`, `name`, `email`, `date`) VALUES
(1, '«Superhero box» для маленьких супер-героїв Центру дитячої кардіології та кардіохірургії', '500', NULL, 'Благодійний діяч', 'foxyplayy6@gmail.com', '2024-06-22 19:58:09'),
(2, '«Superhero box» для маленьких супер-героїв Центру дитячої кардіології та кардіохірургії', '300', NULL, 'Благодійний діяч', 'imskyfoxy6@gmail.com', '2024-06-22 20:39:21'),
(3, '«Superhero box» для маленьких супер-героїв Центру дитячої кардіології та кардіохірургії', NULL, '1800', 'Благодійний діяч', 'idkthename89@gmail.com', '2024-06-22 20:39:55'),
(4, '«Superhero box» для маленьких супер-героїв Центру дитячої кардіології та кардіохірургії', NULL, '8000', 'Дмитро', 'Goldi_Rich258@gmail.com', '2024-06-22 20:40:43'),
(5, '«Superhero box» для маленьких супер-героїв Центру дитячої кардіології та кардіохірургії', '500', NULL, 'Артур', 'arturpriv279@gmail.com', '2024-06-22 20:41:43'),
(6, '«Superhero box» для маленьких супер-героїв Центру дитячої кардіології та кардіохірургії', NULL, '15000', 'Артур', 'boyguestgod6@gmail.com', '2024-06-22 20:42:16'),
(7, '«Superhero box» для маленьких супер-героїв Центру дитячої кардіології та кардіохірургії', '500', NULL, 'Ярослав', 'Itisnickname89@gmail.com', '2024-06-22 20:42:53');

-- --------------------------------------------------------

--
-- Структура таблиці `register`
--

CREATE TABLE `register` (
  `Id` int UNSIGNED NOT NULL,
  `Name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Surname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Login` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп даних таблиці `register`
--

INSERT INTO `register` (`Id`, `Name`, `Surname`, `Login`, `Email`, `Password`, `Date`) VALUES
(1, 'Артур', 'Приваленко', 'Admin', 'imskyfoxy6@gmail.com', '$2y$10$uLeAh5RZTWEo3lhL5NSMmepEyguS05gGtcJIVcE0gjHJtX6erBhh2', '2024-06-20');

--
-- Індекси збережених таблиць
--

--
-- Індекси таблиці `campain`
--
ALTER TABLE `campain`
  ADD PRIMARY KEY (`Id`);

--
-- Індекси таблиці `donatesphero`
--
ALTER TABLE `donatesphero`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `overalldonate`
--
ALTER TABLE `overalldonate`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- AUTO_INCREMENT для збережених таблиць
--

--
-- AUTO_INCREMENT для таблиці `campain`
--
ALTER TABLE `campain`
  MODIFY `Id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблиці `donatesphero`
--
ALTER TABLE `donatesphero`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблиці `overalldonate`
--
ALTER TABLE `overalldonate`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблиці `register`
--
ALTER TABLE `register`
  MODIFY `Id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
