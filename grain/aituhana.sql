-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Янв 02 2022 г., 20:24
-- Версия сервера: 10.4.21-MariaDB
-- Версия PHP: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `aituhana`
--

-- --------------------------------------------------------

--
-- Структура таблицы `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `user` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `text_message` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `message`
--

INSERT INTO `message` (`id`, `user`, `email`, `text_message`) VALUES
(1, 'hello', 'abairazakov09@gmail.com', 'asdfghjkl'),
(2, 'hello', 'dfghj@gmail.com', 'dfghjk'),
(3, 'hasdp', 'ausdi@fhas', 'hasgdas'),
(4, 'Abay', 'abai@gmail.com', 'Text message'),
(5, 'fgbh', 'fgh@asjd', 'sdffds');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `UserID` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(70) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`UserID`, `username`, `email`, `password`, `created_at`) VALUES
(23, 'Sense1', 'abairazakov09@gmail.com', 'cbhzhlvfs', '2020-11-30 10:28:39'),
(24, 'ABAY221', 'ganirazakov09@gmail.com', '$2y$10$H4bwQ6ITKF3BTJC4/fxjpuCxMvYKlTFQW2k4.7J.V1g2wSxUT1Woe', '2020-12-01 15:14:23'),
(25, 'testasap', 'testing1212@gmail.com', '$2y$10$kC0C/ucvcEw9Msy649qB0./bPw4mY2p6abZp9KHMPd/VuZHaxoYdm', '2020-12-03 11:13:59'),
(34, 'Razakov A', 'test@gmail.com', '$2y$10$QDcEwKR9GUB2oxL3Rka5NO76A27c41OIErhXLGIpAj5z6BgeO9lWa', '2021-12-30 09:53:22'),
(35, 'razakovabay', 'as@fa', '$2y$10$R/9q3LQu6OUP/yFbvlosdev/DkABnF0Y2raPgEY5/nx6ZvjsjN80W', '2021-12-30 10:58:29'),
(36, 'Abay', 'ashd@jfa', '$2y$10$ccZczdjMEJ9PG81v/wgUT.yNP.KKEjtqlIzC4c.XJj8bwE1vohpD6', '2022-01-02 21:51:14'),
(37, 'test', 'jasd@gaj', '$2y$10$xyIzWu1npTDPjmB2.WGSc.3mtRDVR41io6I8VTlViC9gy51n99eF6', '2022-01-02 21:52:11');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UserID`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `username` (`username`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
