-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Дек 12 2014 г., 20:51
-- Версия сервера: 5.5.25
-- Версия PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `ci`
--

-- --------------------------------------------------------

--
-- Структура таблицы `articles`
--

CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `title` varchar(500) DEFAULT NULL,
  `txt` text,
  `img` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `category_id` (`category_id`),
  KEY `img` (`img`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) DEFAULT NULL,
  `name` varchar(100) NOT NULL,
  `title` varchar(250) DEFAULT 'Удачный короткий слоган',
  `descr` varchar(1000) DEFAULT 'Краткое описание товара: преимущества в двух словах',
  `img` varchar(255) DEFAULT 'default_icon.png',
  PRIMARY KEY (`id`),
  KEY `parent_id` (`parent_id`),
  KEY `img` (`img`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=22 ;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `parent_id`, `name`, `title`, `descr`, `img`) VALUES
(8, NULL, 'Рекламная продукция', 'Акриловая рекламная продукция', 'Лучшие изделия для рекламы из акрила', 'default_icon.png'),
(9, 8, 'Томбстоуны', 'Удачный короткий слоган', 'Краткое описание товара: преимущества в двух словах', 'default_icon.png'),
(10, 8, 'Световые короба', 'Удачный короткий слоган', 'Краткое описание товара: преимущества в двух словах', 'default_icon.png'),
(11, 8, 'Макеты рекламные', 'Удачный короткий слоган', 'Краткое описание товара: преимущества в двух словах', 'default_icon.png'),
(12, 8, 'Полки для товаров', 'Удачный короткий слоган', 'Краткое описание товара: преимущества в двух словах', 'default_icon.png'),
(13, NULL, 'Акриловые изделия', 'Удачный короткий слоган', 'Краткое описание товара: преимущества в двух словах', 'default_icon.png'),
(14, NULL, 'Мебель из акрила', 'Удачный короткий слоган', 'Краткое описание товара: преимущества в двух словах', 'default_icon.png'),
(15, NULL, 'Акрил в архитектуре', 'Удачный короткий слоган', 'Краткое описание товара: преимущества в двух словах', 'default_icon.png'),
(16, 13, 'Сувенирная продукция', 'Удачный короткий слоган', 'Краткое описание товара: преимущества в двух словах', 'default_icon.png'),
(17, 13, 'Фурнитура', 'Удачный короткий слоган', 'Краткое описание товара: преимущества в двух словах', 'default_icon.png'),
(18, 14, 'Столы', 'Удачный короткий слоган', 'Краткое описание товара: преимущества в двух словах', 'default_icon.png'),
(19, 14, 'Кровати', 'Удачный короткий слоган', 'Краткое описание товара: преимущества в двух словах', 'default_icon.png'),
(20, 15, 'Перегородки', 'Удачный короткий слоган', 'Краткое описание товара: преимущества в двух словах', 'default_icon.png'),
(21, 15, 'Дорожные ограждения', 'Удачный короткий слоган', 'Краткое описание товара: преимущества в двух словах', 'default_icon.png');

-- --------------------------------------------------------

--
-- Структура таблицы `images`
--

CREATE TABLE IF NOT EXISTS `images` (
  `filename` varchar(100) NOT NULL,
  PRIMARY KEY (`filename`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `images`
--

INSERT INTO `images` (`filename`) VALUES
('default_icon.png'),
('korob1.jpg'),
('korob2.jpg'),
('korob3.jpg'),
('stol1.jpg'),
('stol2.jpg'),
('stol3.jpg'),
('thomb1.jpg'),
('thomb2.jpg'),
('thomb3.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `txt` text,
  PRIMARY KEY (`id`),
  KEY `category_id` (`category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `category_id`, `title`, `txt`) VALUES
(1, 10, 'Световой короб №1', 'Световой короб - основная рекламная конструкция. Лицевая панель светового короба может быть из сотового поликарбоната, баннера (виниловой ткани), акрилового стекла (оргстекла), дибонда. Каждый вид лайтбокса предназначен конкретных условий эксплуатации. Когда опытные рекламщики осматривают место предполагаемого размещения светового короба, они точно могут сказать какого вида лайтбокс можно предложить заказчику исходя из условий эксплуатации.\r\nСтоимость изготовления простого светового короба с лицом из поликарбоната составляет 6500руб. за м2.'),
(2, 18, 'Стол Акриловый №1', '<p>Используйте в интерьере современный материал акрил – специальный вид многофункционального пластика (оргстекла) с отличительными светорассеивающими свойствами.\r\n\r\nОсновные виды акрила:\r\n<UL>\r\n<li>Прозрачный – поставки до 25 мм толщины.\r\n<li>Молочный (светорассеивающий) – поставки до 8 мм толщины.\r\n<li>Цветной – поставки в 3 мм толщине.</ul></p>\r\n\r\n <div align="center"><B>Использование акрила в мебели:</B></div>\r\n\r\n<p>Некоторые виды акрила можно использовать в производстве светящейся мебели.\r\nСветорассеивающие качества таких видов акрила позволяют добиться равномерной засветки светящихся зон. \r\nДля освещения мебели, мы используем светодиодную технологию, которая  имеет ряд преимуществ:</p>\r\n\r\n<UL>\r\n<li>Срок эксплуатации.\r\n<li>Энергосбережение.\r\n<li>Многоцветность свечения. \r\n<li>Динамика свечения.</ul>\r\n \r\n<p>Акрил поддается термообработке, что позволяет производить монолитную гнутую мебель.<br>\r\nАкрил поддается фрезеровке сложных кривых линий и трехмерной гравировке поверхности.</p>\r\n\r\n<p>Для получения заготовки   необходимой формы, лист акрила обрабатывают на специальном оборудовании: \r\nфрезерно – гравировальном станке или лазерном станке. \r\nКомпьютерная программа с высокой точностью воспроизводит контуры заданные в цифровой матрице (макете).\r\nФормы могут быть - от простых геометрических фигур - до самых сложных кривых линий.\r\nТакое оборудование, можно использовать для создания рельефных трехмерных изображений, способом гравировки поверхности материала.</p>\r\n\r\n<p>При производстве сложных стационарных конструкций (например, барной стойки), акрил комбинируется с другими материалами. \r\nНапример, каркас барной стойки произведенный из МДФ материала можно облицовывать акрилом. \r\nКаркас из МДФ придает прочность такой конструкции, а участки облицованные акрилом обладают светорассеивающими свойствами. </p>'),
(3, 9, 'Томбстоун №1', 'Томбстоуны это сувениры представляющие собой две склеенные пластины акрила, с помещенным между ними плоским предметом, как правило бумажным буклетом, металлической монетой и др. После полировки, клеевой шов становится практически не заметен. С недавнего времени наша компания освоила технологию изготовления томбстоунов с нанесением внутри изображением прямо на акрил, без использования пленок и других непрозрачных подложек.');

-- --------------------------------------------------------

--
-- Структура таблицы `product_images`
--

CREATE TABLE IF NOT EXISTS `product_images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `product_id` (`product_id`),
  KEY `img` (`img`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Дамп данных таблицы `product_images`
--

INSERT INTO `product_images` (`id`, `product_id`, `img`) VALUES
(1, 2, 'stol1.jpg'),
(2, 2, 'stol2.jpg'),
(3, 2, 'stol3.jpg'),
(4, 1, 'korob1.jpg'),
(5, 1, 'korob2.jpg'),
(6, 1, 'korob3.jpg'),
(7, 3, 'thomb1.jpg'),
(8, 3, 'thomb2.jpg'),
(9, 3, 'thomb3.jpg');

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `articles_ibfk_2` FOREIGN KEY (`img`) REFERENCES `images` (`filename`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_ibfk_2` FOREIGN KEY (`img`) REFERENCES `images` (`filename`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `categories_ibfk_1` FOREIGN KEY (`parent_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `product_images`
--
ALTER TABLE `product_images`
  ADD CONSTRAINT `product_images_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `product_images_ibfk_2` FOREIGN KEY (`img`) REFERENCES `images` (`filename`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
