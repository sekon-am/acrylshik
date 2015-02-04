-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Фев 02 2015 г., 20:34
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
  `posted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `short` text,
  `related` varchar(1500) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `category_id` (`category_id`),
  KEY `img` (`img`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Дамп данных таблицы `articles`
--

INSERT INTO `articles` (`id`, `category_id`, `title`, `txt`, `img`, `posted`, `short`, `related`) VALUES
(1, 9, 'материал для изготовления рекламных вывесок', '<h1>Листовой акрил (оргстекло)</h1>\n\n\n<DIV><SPAN style="FONT-WEIGHT: bold"><SPAN class=Apple-tab-span style="WHITE-SPACE: pre"></SPAN>Акрил - </SPAN>идеальный материал для изготовления рекламных вывесок, элементов мебели. Широко применяется в наружной рекламе благодаря возможности формовки. Материал предоставляет собой очень прочный и, в то же время, легкий пластик. Если сравнивать со стеклом, акрил в два раза легче и в пять раз прочней стекла аналогичного размера и толщины. <SPAN style="FONT-WEIGHT: bold">Листовой акрил</SPAN> может быть как прозрачным так и цветным, палитра из множества цветов позволяет использовать его в разработке проектов любого цвета и оттенка. Толщина листа варьируется от полутора миллиметров до двадцати пяти. Светопропускаемость прозрачного акрила 92%.&nbsp;</DIV><SPAN style="FONT-WEIGHT: bold">\n<DIV style="TEXT-ALIGN: center" align=center><BR>&nbsp;&nbsp;&nbsp;&nbsp; Таблица стоимости листового акрила TM Palglas(производство Palram, Израиль)<BR></DIV></SPAN>\n<P align=left><IMG border=0 alt="" align=middle src="/ufiles/Image/2222.png"></P>\n<DIV style="TEXT-ALIGN: left" align=center><SPAN style="FONT-WEIGHT: bold; TEXT-ALIGN: center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Таблица стоимости листового акрила TM Plexiglas, Германия</SPAN></DIV>\n<P align=left><IMG border=0 alt="" src="/ufiles/Image/33334.png"></P>\n<P align=center> <SPAN style="FONT-WEIGHT: bold">Таблица стоимости&nbsp;зеркального листового акрила TM Plexiglas, Германия<BR></P>\n<P align=left><IMG border=0 alt="" align=middle src="/ufiles/Image/4545.png"></SPAN></P>\n<DIV><BR></DIV>\n<DIV><SPAN style="FONT-WEIGHT: bold">Цвета в ассортименте: белый, голубой, желтый, зеленый, лимонный, малиновый, опал, оранжевый, салатовый, синий, черный, красный.</SPAN></DIV>\n<DIV>Наличие цветов и толщин обязательно уточняйте по телефонам указанным в <A href="http://polikarbonatvs.com.ua/contacts/"><SPAN style="FONT-WEIGHT: bold">контактной информации</SPAN></A>.&nbsp;</DIV>\n<DIV>Есть <SPAN style="FONT-WEIGHT: bold">два метода изготовления</SPAN> листового акрила:</DIV>\n<DIV>\n<OL>\n<LI><SPAN style="LINE-HEIGHT: 18px"><SPAN style="FONT-WEIGHT: bold">Экструзия </SPAN>- выталкивание. Непрерывная масса полимера проходит через щелевую головку, после этого охлаждается и&nbsp;режется&nbsp;на стандартные листы. Акрил, полученный этим способом обладает меньшей ударной прочностью и меньшей химической стойкостью, но у него лучшая способность к склеиванию. Есть возможность производства более длинных листов.</SPAN> \n<LI><SPAN style="LINE-HEIGHT: 18px"><SPAN style="FONT-WEIGHT: bold">Литье</SPAN> - метод, в котором мономер ММА заливают между двумя&nbsp;параллельными плоскостями с дальнейшим твердением. По сравнению с акрилом изготовленным по методу экструзии, литой акрил обладает следующими преимуществами: более термостойкий, повышенная устойчивость к механическим нагрузкам, лучше при формовке, что позволяет использовать его в сложных конструкциях.</SPAN></LI></OL></DIV>\n<DIV>Преимущества акрила:</DIV>\n<DIV>\n<UL>\n<LI><SPAN style="LINE-HEIGHT: 18px">Низкий вес, по сравнению со стеклом, в два раза легче;</SPAN> \n<LI><SPAN style="LINE-HEIGHT: 18px">Высокая ударопрочность,&nbsp;</SPAN><SPAN style="LINE-HEIGHT: 18px">по сравнению со стеклом, в пять раз крепче;</SPAN> \n<LI><SPAN style="LINE-HEIGHT: 18px">Отличная светопропускаемость, 92% в прозрачном акриле;</SPAN> \n<LI><SPAN style="LINE-HEIGHT: 18px">Способность к формовке, изделия из акрила выполняются в различных формах;</SPAN> \n<LI><SPAN style="LINE-HEIGHT: 18px">Высокая устойчивость к внешней среде и ультрафиолетовому излучению.<BR></SPAN><SPAN style="LINE-HEIGHT: 18px"><BR>Акрил используют в различных сферах:</SPAN></LI></UL>\n<DIV>\n<OL>\n<LI><SPAN style="LINE-HEIGHT: 18px"><SPAN style="FONT-WEIGHT: bold">Декоративный глянцевый</SPAN> - непрозрачные, окрашенные листы созданы для использования в домашней мебели, офисных перегородках, дверях и т.д. С помощью этого вида акрила можно создать уникальный стиль для любого помещения. Акриловые вставки подчеркнут индивидуальность и красоту каждой детали интерьера или рабочего пространства.</SPAN> \n<LI><SPAN style="LINE-HEIGHT: 18px"><SPAN style="FONT-WEIGHT: bold">Декоративный матовый</SPAN> - полупрозрачное стекло, имеет матовую поверхность, которая не царапается и не оставляет отпечатков пальцев. Также используется в различных интерьерах домов, квартир и офисов. Благодаря светорассеиванию, широко применяется в конструкциях, которые подсвечиваются изнутри.</SPAN> \n<LI><SPAN style="LINE-HEIGHT: 18px"><SPAN style="FONT-WEIGHT: bold">Зеркальный акрил - </SPAN>заменяет стекло в проектах, где нельзя использовать обычное стекло. Причиной этому может быть безопасность, сложность конструкции. Зеркальный акриловый лист намного прочнее и легче, он отлично формуется.</SPAN></LI></OL>\n<DIV>У нас Вы можете <SPAN style="FONT-WEIGHT: bold">купить акрил в Киеве по хорошей цене</SPAN>. Мы осуществляем резку листа под Ваши размеры. Только качественные материалы ведущих производителей. Возможна доставка по Киеву и области. С условиями доставки можете ознакомиться <SPAN style="FONT-WEIGHT: bold"><A href="http://polikarbonatvs.com.ua/dostavka-i-oplata/">ТУТ</A>.</SPAN></DIV></DIV></DIV>\n<DIV><SPAN style="FONT-WEIGHT: bold"><BR></SPAN></DIV>\n<DIV><SPAN style="FONT-WEIGHT: bold"><BR></SPAN></DIV>', 'thomb1.jpg', '2015-01-28 12:46:45', '<SPAN style="FONT-WEIGHT: bold"><SPAN class=Apple-tab-span style="WHITE-SPACE: pre"></SPAN>Акрил - </SPAN>идеальный материал для изготовления рекламных вывесок, элементов мебели. Широко применяется в наружной рекламе благодаря возможности формовки. Материал предоставляет собой очень прочный и, в то же время, легкий пластик. Если сравнивать со стеклом, акрил в два раза легче и в пять раз прочней стекла аналогичного размера и толщины. <SPAN style="FONT-WEIGHT: bold">Листовой акрил</SPAN> может быть как прозрачным так и цветным, палитра из множества цветов позволяет использовать его в разработке проектов любого цвета и оттенка. Толщина листа варьируется от полутора миллиметров до двадцати пяти.', ''),
(4, 15, 'Акриловые ванны', '<p>Наряду с традиционными чугунными и стальными ваннами значительную долю рынка этих сантехнических приборов составляют ванны акриловые. Достоинства и недостатки акриловых ванн уже неоднократно описаны, и все же единого мнения на их счет не существует.</p>\n<p>Одни считают, что акриловые ванны являются лучшим вариантом из всех возможных, другие – что устанавливать акриловую ванну можно, только если никакая другая не подходит. <span id="more-6091"></span></p>\n<p>Истина, как известно, находится примерно посередине. И все же, чтобы обеспечить максимально объективный выбор, в данной статье мы не будем останавливаться на достоинствах, а проанализируем имеющиеся у акриловых ванн недостатки. Может, не все так плохо как утверждают скептики?</p>\n<p>Но для начала &#8212; что же представляют собой <a href="http://eto-vannaya.ru/wanna/vybor-vanny/akrilovye-vanny-287">акриловые ванны</a>?</p>\n<h2><span id="i">Акриловые ванны: общая информация</span></h2>\n<p>Акриловые ванны (как это следует из их названия) производят из специального полимерного вещества &#8212; акрила.</p>\n<p><span class="underl">Существует две технологии производства акриловых ванн, и соответственно, все акриловые ванны разделяют на:</span></p>\n<ul>\n<li>Экструдированные</li>\n<li>Литые</li>\n</ul>\n<p>Пластичность акрила позволяет производить из него ванны самой разной формы и размера, вот почему его используют для изготовления дизайнерских моделей ванн.</p>\n<p><strong>Для прочности акриловые ванны снаружи покрывают эпоксидными смолами и устанавливают на специальный металлический каркас</strong>.</p>\n<p>Недостатки и преимущества акриловых ванн широко описаны в интернете, и мы постараемся максимально беспристрастно проанализировать все эти факты.</p>\n<h2><span id="i-2">Акриловые ванны: критический анализ</span></h2>\n<h3><span id="i-3">Недостатки ванн из акрила</span></h3>\n<p>Итак, необходимый минимум информации о том, что представляют собой акриловые ванны, нами получен. Пора анализировать, чем, собственно, плоха ванна акриловая: недостатки ли это на самом деле, или особенности, с которыми при определенных условиях можно мириться.</p>', 'thomb1.jpg', '2015-01-29 09:44:02', '<p>Наряду с традиционными чугунными и стальными ваннами значительную долю рынка этих сантехнических приборов составляют ванны акриловые. Достоинства и недостатки акриловых ванн уже неоднократно описаны, и все же единого мнения на их счет не существует.</p>\n<p>Одни считают, что акриловые ванны являются лучшим вариантом из всех возможных, другие – что устанавливать акриловую ванну можно, только если никакая другая не подходит. <span id="more-6091"></span></p>', ',1,7,8,4,'),
(5, 22, 'Акриловые ванны и ванны из каменной массы (кварил, марбекс) - недостатки и преимущества.', '<h1>Акриловые ванны и ванны из каменной массы (кварил, марбекс) - недостатки и преимущества.</h1>\r\n\r\n<p>Ванны различных видов, форм и размеров сегодня изготавливают из самых различных материалов.\r\nЭто акрил, ванны из каменной массы, кварил, старилан, марбекс, композитные материалы минерального литья (называемые также поликерамикой), сталь, чугун, дерево, стекло, медь. <br>Один из самых популярных на сегодня форматов – ванна размером 180x80 см и глубиной 45 см. Однако надо иметь в виду, что внешние размеры ванны не всегда соответствуют ее реально используемой площади. Так, например, у ванн класса люкс из коллекции Edition 1 от Hoesch (Германия) работы дизайнера Pyilipe Starck внешние размеры – 190x90 см, а внутренние – 150x60 см. Дело в том, что элементом дизайна этих ванн являются элегантные края шириной 15 см, на которых удобно разместить, допустим, бокал шампанского.</p>\r\n\r\n<h2>Акриловые ванны - плюсы и минусы.</h2>\r\n\r\n<p><br></p><a href="http://kafel-santehnika.com/akrilovie_vanni.html" title="Акриловые ванны">Акриловые ванны</a> предназначены в основном для встраивания, но иногда могут изготавливаться вместе с панелями. <br><p>\r\nВ зависимости от ценовой категории (эконом, комфорт или люкс), толщины стенок ванны из акрила, дизайна и технического оборудования, акриловые ванны могут стоить от 50 до 2 500 долларов. Такой широкий диапазон обусловлен огромным предложением акриловых ванн на рынке.</p>\r\n\r\n<h3>Преимущества акриловых ванн</h3>\r\n<p>Теперь поговорим о некоторых преимуществах акриловых ванн - <u>плюсы акриловых ванн</u>.<br> В первую очередь нужно сказать о том что, акриловые ванны лёгкие, они весят не больше 20-ти 40-ка килограммов. Акрил не подвержен выцветанию, поэтому акриловые ванны не меняют своего цвета и практически не желтеют. Поверхность акриловых ванн приятна на ощупь и хорошо держит тепло. В пустой ванне из акрила сохраняется та же температура, что и в помещении где она стоит, поэтому вам будет комфортно плюхнуться в ванну не дожидаясь когда <a href="http://kafel-santehnika.com/vanni.html" title="ванна">ванна</a> наполнится водой. Благодаря эластичности акрила, производители могут изготавливать ванны самых замысловатых форм и геометрии – с углублениями для плеч, с возвышением под голову и т.д. Небольшие повреждения акриловой ванны можно легко устранить с помощью недорогой полировки.</p>\r\n\r\n<h3>Недостатки акриловых ванн</h3>\r\n\r\n<p>Конечно же есть и определённые недостатки акриловых ванн - <u>минусы акриловых ванн</u>.<br>\r\nПод действием достаточно большой нагрузки акриловая ванна может деформироваться. Во избежание таких проблем, часто, акриловые ванны укрепляют стальным каркасом.<br><br></p><div style="text-align: center;"><text><em>Акриловая ванна Naos, от Teuco</em><text><br><text><img alt="Акриловая ванна Naos, Teuco" title="Акриловая ванна Naos, Teuco" src="http://kafel-santehnika.com/images/articles/large/akrilovaja-vanna-naos-teuco.jpg" align="middle" border="2" height="226" hspace="8" vspace="8" width="471"></text><br></text></text></div>\r\nСамым лучшим выходом в данной ситуации является консультация проверенного специалиста из нашего интернет магазина, также вы всегда можете задать вопрос о необходимости укрепления акриловой ванны стальным каркасом на нашем форуме.<p></p>\r\n\r\n\r\n<h2>Ванны из каменной массы (или ванны из минерального литья)</h2>\r\n\r\n<p>Минеральное литье (или ванны из каменной массы) – следующий по популярности материал, из которого производят (в основном) ванны классов комфорт и люкс. Уже само название материала указывает\r\nна суть технологического процесса – это вливание каменной массы состоящей из различных композитных материалов в специальную форму.<br>\r\n<strong>Ванны из каменной массы</strong> изготавливаются из композитных материалов, которые представляют собой соединение различных минералов и других ингредиентов, чьи пропорции, как и технология «выпечки», определяются спецификой каждого производителя. Кроме того, минеральное литье может состоять из материалов на основе акрила.<br> Например, <b>кварил</b> тверже, чем акрил, так как в его состав входит кварцевый песок. В свою очередь <span style="font-weight: bold;">метакрилат</span> - то же каменная масса для изготовления ванн, метакрилат отличают высокие показатели сопротивления скольжению.</p><p style="text-align: center;"><text>Ванна из коллекции HappyD и техническое оснащение Pillar, Duravit</text><br><text><img alt="Ванна из коллекции HappyD и техническое оснащение Pillar, Duravit" title="Ванна из коллекции HappyD и техническое оснащение Pillar, Duravit" src="http://kafel-santehnika.com/images/articles/large/vanna-iz-kamennoj-massy-happyd-duravit.jpg" align="middle" border="2" height="380" hspace="8" vspace="8" width="472"></text><br></p>\r\n\r\n<p><strong>Кварил</strong> – это акрил смешанный с основанием из кварцевого песка. Кварцевый песок значительно улучшает прочность акрила, решая таким образом главный недостаток акриловых ванн, оставляя только их преимущества и снимая вопрос необходимости укрепления стальным каркасом. \r\n<br>\r\nИнтересна также микроструктура кварила - каждая песчинка кварцевого песка, заключена в круглую акриловую капсулу, и пространство между этими акриловыми капсулами также заполнено акрилом.\r\nБлагодаря этому кварил позволяет сохранить все преимущества акриловых ванн, добавляя к ним прочность, долговечность и безупречность строгих геометрических линий, так как квариловые ванны делают методом отливки в специально подготовленную форму.<br>\r\nПовредить ванну из кварила абсолютно невозможно: даже тяжёлый предмет случайно упавший в ванну не оставит на этом превосходном материале и царапины.\r\n\r\n</p>\r\n', 'thomb1.jpg', '2015-01-29 09:44:02', 'Ванны различных видов, форм и размеров сегодня изготавливают из самых различных материалов.\r\nЭто акрил, ванны из каменной массы, кварил, старилан, марбекс, композитные материалы минерального литья (называемые также поликерамикой), сталь, чугун, дерево, стекло, медь. <br>Один из самых популярных на сегодня форматов – ванна размером 180x80 см и глубиной 45 см. ', ''),
(6, 15, 'Акриловые ванны', '<p>Наряду с традиционными чугунными и стальными ваннами значительную долю рынка этих сантехнических приборов составляют ванны акриловые. Достоинства и недостатки акриловых ванн уже неоднократно описаны, и все же единого мнения на их счет не существует.</p>\r\n<p>Одни считают, что акриловые ванны являются лучшим вариантом из всех возможных, другие – что устанавливать акриловую ванну можно, только если никакая другая не подходит. <span id="more-6091"></span></p>\r\n<p>Истина, как известно, находится примерно посередине. И все же, чтобы обеспечить максимально объективный выбор, в данной статье мы не будем останавливаться на достоинствах, а проанализируем имеющиеся у акриловых ванн недостатки. Может, не все так плохо как утверждают скептики?</p>\r\n<p>Но для начала &#8212; что же представляют собой <a href="http://eto-vannaya.ru/wanna/vybor-vanny/akrilovye-vanny-287">акриловые ванны</a>?</p>\r\n<h2><span id="i">Акриловые ванны: общая информация</span></h2>\r\n<p>Акриловые ванны (как это следует из их названия) производят из специального полимерного вещества &#8212; акрила.</p>\r\n<p><span class="underl">Существует две технологии производства акриловых ванн, и соответственно, все акриловые ванны разделяют на:</span></p>\r\n<ul>\r\n<li>Экструдированные</li>\r\n<li>Литые</li>\r\n</ul>\r\n<p>Пластичность акрила позволяет производить из него ванны самой разной формы и размера, вот почему его используют для изготовления дизайнерских моделей ванн.</p>\r\n<p><strong>Для прочности акриловые ванны снаружи покрывают эпоксидными смолами и устанавливают на специальный металлический каркас</strong>.</p>\r\n<p>Недостатки и преимущества акриловых ванн широко описаны в интернете, и мы постараемся максимально беспристрастно проанализировать все эти факты.</p>\r\n<h2><span id="i-2">Акриловые ванны: критический анализ</span></h2>\r\n<h3><span id="i-3">Недостатки ванн из акрила</span></h3>\r\n<p>Итак, необходимый минимум информации о том, что представляют собой акриловые ванны, нами получен. Пора анализировать, чем, собственно, плоха ванна акриловая: недостатки ли это на самом деле, или особенности, с которыми при определенных условиях можно мириться.</p>', 'thomb1.jpg', '2015-01-29 09:44:02', '<p>Наряду с традиционными чугунными и стальными ваннами значительную долю рынка этих сантехнических приборов составляют ванны акриловые. Достоинства и недостатки акриловых ванн уже неоднократно описаны, и все же единого мнения на их счет не существует.</p>\r\n<p>Одни считают, что акриловые ванны являются лучшим вариантом из всех возможных, другие – что устанавливать акриловую ванну можно, только если никакая другая не подходит. <span id="more-6091"></span></p>', ''),
(7, 9, 'материал для изготовления рекламных вывесок', '<h1>Листовой акрил (оргстекло)</h1>\r\n\r\n\r\n<DIV><SPAN style="FONT-WEIGHT: bold"><SPAN class=Apple-tab-span style="WHITE-SPACE: pre"></SPAN>Акрил - </SPAN>идеальный материал для изготовления рекламных вывесок, элементов мебели. Широко применяется в наружной рекламе благодаря возможности формовки. Материал предоставляет собой очень прочный и, в то же время, легкий пластик. Если сравнивать со стеклом, акрил в два раза легче и в пять раз прочней стекла аналогичного размера и толщины. <SPAN style="FONT-WEIGHT: bold">Листовой акрил</SPAN> может быть как прозрачным так и цветным, палитра из множества цветов позволяет использовать его в разработке проектов любого цвета и оттенка. Толщина листа варьируется от полутора миллиметров до двадцати пяти. Светопропускаемость прозрачного акрила 92%.&nbsp;</DIV><SPAN style="FONT-WEIGHT: bold">\r\n<DIV style="TEXT-ALIGN: center" align=center><BR>&nbsp;&nbsp;&nbsp;&nbsp; Таблица стоимости листового акрила TM Palglas(производство Palram, Израиль)<BR></DIV></SPAN>\r\n<P align=left><IMG border=0 alt="" align=middle src="/ufiles/Image/2222.png"></P>\r\n<DIV style="TEXT-ALIGN: left" align=center><SPAN style="FONT-WEIGHT: bold; TEXT-ALIGN: center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Таблица стоимости листового акрила TM Plexiglas, Германия</SPAN></DIV>\r\n<P align=left><IMG border=0 alt="" src="/ufiles/Image/33334.png"></P>\r\n<P align=center> <SPAN style="FONT-WEIGHT: bold">Таблица стоимости&nbsp;зеркального листового акрила TM Plexiglas, Германия<BR></P>\r\n<P align=left><IMG border=0 alt="" align=middle src="/ufiles/Image/4545.png"></SPAN></P>\r\n<DIV><BR></DIV>\r\n<DIV><SPAN style="FONT-WEIGHT: bold">Цвета в ассортименте: белый, голубой, желтый, зеленый, лимонный, малиновый, опал, оранжевый, салатовый, синий, черный, красный.</SPAN></DIV>\r\n<DIV>Наличие цветов и толщин обязательно уточняйте по телефонам указанным в <A href="http://polikarbonatvs.com.ua/contacts/"><SPAN style="FONT-WEIGHT: bold">контактной информации</SPAN></A>.&nbsp;</DIV>\r\n<DIV>Есть <SPAN style="FONT-WEIGHT: bold">два метода изготовления</SPAN> листового акрила:</DIV>\r\n<DIV>\r\n<OL>\r\n<LI><SPAN style="LINE-HEIGHT: 18px"><SPAN style="FONT-WEIGHT: bold">Экструзия </SPAN>- выталкивание. Непрерывная масса полимера проходит через щелевую головку, после этого охлаждается и&nbsp;режется&nbsp;на стандартные листы. Акрил, полученный этим способом обладает меньшей ударной прочностью и меньшей химической стойкостью, но у него лучшая способность к склеиванию. Есть возможность производства более длинных листов.</SPAN> \r\n<LI><SPAN style="LINE-HEIGHT: 18px"><SPAN style="FONT-WEIGHT: bold">Литье</SPAN> - метод, в котором мономер ММА заливают между двумя&nbsp;параллельными плоскостями с дальнейшим твердением. По сравнению с акрилом изготовленным по методу экструзии, литой акрил обладает следующими преимуществами: более термостойкий, повышенная устойчивость к механическим нагрузкам, лучше при формовке, что позволяет использовать его в сложных конструкциях.</SPAN></LI></OL></DIV>\r\n<DIV>Преимущества акрила:</DIV>\r\n<DIV>\r\n<UL>\r\n<LI><SPAN style="LINE-HEIGHT: 18px">Низкий вес, по сравнению со стеклом, в два раза легче;</SPAN> \r\n<LI><SPAN style="LINE-HEIGHT: 18px">Высокая ударопрочность,&nbsp;</SPAN><SPAN style="LINE-HEIGHT: 18px">по сравнению со стеклом, в пять раз крепче;</SPAN> \r\n<LI><SPAN style="LINE-HEIGHT: 18px">Отличная светопропускаемость, 92% в прозрачном акриле;</SPAN> \r\n<LI><SPAN style="LINE-HEIGHT: 18px">Способность к формовке, изделия из акрила выполняются в различных формах;</SPAN> \r\n<LI><SPAN style="LINE-HEIGHT: 18px">Высокая устойчивость к внешней среде и ультрафиолетовому излучению.<BR></SPAN><SPAN style="LINE-HEIGHT: 18px"><BR>Акрил используют в различных сферах:</SPAN></LI></UL>\r\n<DIV>\r\n<OL>\r\n<LI><SPAN style="LINE-HEIGHT: 18px"><SPAN style="FONT-WEIGHT: bold">Декоративный глянцевый</SPAN> - непрозрачные, окрашенные листы созданы для использования в домашней мебели, офисных перегородках, дверях и т.д. С помощью этого вида акрила можно создать уникальный стиль для любого помещения. Акриловые вставки подчеркнут индивидуальность и красоту каждой детали интерьера или рабочего пространства.</SPAN> \r\n<LI><SPAN style="LINE-HEIGHT: 18px"><SPAN style="FONT-WEIGHT: bold">Декоративный матовый</SPAN> - полупрозрачное стекло, имеет матовую поверхность, которая не царапается и не оставляет отпечатков пальцев. Также используется в различных интерьерах домов, квартир и офисов. Благодаря светорассеиванию, широко применяется в конструкциях, которые подсвечиваются изнутри.</SPAN> \r\n<LI><SPAN style="LINE-HEIGHT: 18px"><SPAN style="FONT-WEIGHT: bold">Зеркальный акрил - </SPAN>заменяет стекло в проектах, где нельзя использовать обычное стекло. Причиной этому может быть безопасность, сложность конструкции. Зеркальный акриловый лист намного прочнее и легче, он отлично формуется.</SPAN></LI></OL>\r\n<DIV>У нас Вы можете <SPAN style="FONT-WEIGHT: bold">купить акрил в Киеве по хорошей цене</SPAN>. Мы осуществляем резку листа под Ваши размеры. Только качественные материалы ведущих производителей. Возможна доставка по Киеву и области. С условиями доставки можете ознакомиться <SPAN style="FONT-WEIGHT: bold"><A href="http://polikarbonatvs.com.ua/dostavka-i-oplata/">ТУТ</A>.</SPAN></DIV></DIV></DIV>\r\n<DIV><SPAN style="FONT-WEIGHT: bold"><BR></SPAN></DIV>\r\n<DIV><SPAN style="FONT-WEIGHT: bold"><BR></SPAN></DIV>', 'thomb1.jpg', '2015-01-28 12:46:45', '<SPAN style="FONT-WEIGHT: bold"><SPAN class=Apple-tab-span style="WHITE-SPACE: pre"></SPAN>Акрил - </SPAN>идеальный материал для изготовления рекламных вывесок, элементов мебели. Широко применяется в наружной рекламе благодаря возможности формовки. Материал предоставляет собой очень прочный и, в то же время, легкий пластик. Если сравнивать со стеклом, акрил в два раза легче и в пять раз прочней стекла аналогичного размера и толщины. <SPAN style="FONT-WEIGHT: bold">Листовой акрил</SPAN> может быть как прозрачным так и цветным, палитра из множества цветов позволяет использовать его в разработке проектов любого цвета и оттенка. Толщина листа варьируется от полутора миллиметров до двадцати пяти.', ''),
(8, 9, 'материал для изготовления рекламных вывесок', '<h1>Листовой акрил (оргстекло)</h1>\r\n\r\n\r\n<DIV><SPAN style="FONT-WEIGHT: bold"><SPAN class=Apple-tab-span style="WHITE-SPACE: pre"></SPAN>Акрил - </SPAN>идеальный материал для изготовления рекламных вывесок, элементов мебели. Широко применяется в наружной рекламе благодаря возможности формовки. Материал предоставляет собой очень прочный и, в то же время, легкий пластик. Если сравнивать со стеклом, акрил в два раза легче и в пять раз прочней стекла аналогичного размера и толщины. <SPAN style="FONT-WEIGHT: bold">Листовой акрил</SPAN> может быть как прозрачным так и цветным, палитра из множества цветов позволяет использовать его в разработке проектов любого цвета и оттенка. Толщина листа варьируется от полутора миллиметров до двадцати пяти. Светопропускаемость прозрачного акрила 92%.&nbsp;</DIV><SPAN style="FONT-WEIGHT: bold">\r\n<DIV style="TEXT-ALIGN: center" align=center><BR>&nbsp;&nbsp;&nbsp;&nbsp; Таблица стоимости листового акрила TM Palglas(производство Palram, Израиль)<BR></DIV></SPAN>\r\n<P align=left><IMG border=0 alt="" align=middle src="/ufiles/Image/2222.png"></P>\r\n<DIV style="TEXT-ALIGN: left" align=center><SPAN style="FONT-WEIGHT: bold; TEXT-ALIGN: center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Таблица стоимости листового акрила TM Plexiglas, Германия</SPAN></DIV>\r\n<P align=left><IMG border=0 alt="" src="/ufiles/Image/33334.png"></P>\r\n<P align=center> <SPAN style="FONT-WEIGHT: bold">Таблица стоимости&nbsp;зеркального листового акрила TM Plexiglas, Германия<BR></P>\r\n<P align=left><IMG border=0 alt="" align=middle src="/ufiles/Image/4545.png"></SPAN></P>\r\n<DIV><BR></DIV>\r\n<DIV><SPAN style="FONT-WEIGHT: bold">Цвета в ассортименте: белый, голубой, желтый, зеленый, лимонный, малиновый, опал, оранжевый, салатовый, синий, черный, красный.</SPAN></DIV>\r\n<DIV>Наличие цветов и толщин обязательно уточняйте по телефонам указанным в <A href="http://polikarbonatvs.com.ua/contacts/"><SPAN style="FONT-WEIGHT: bold">контактной информации</SPAN></A>.&nbsp;</DIV>\r\n<DIV>Есть <SPAN style="FONT-WEIGHT: bold">два метода изготовления</SPAN> листового акрила:</DIV>\r\n<DIV>\r\n<OL>\r\n<LI><SPAN style="LINE-HEIGHT: 18px"><SPAN style="FONT-WEIGHT: bold">Экструзия </SPAN>- выталкивание. Непрерывная масса полимера проходит через щелевую головку, после этого охлаждается и&nbsp;режется&nbsp;на стандартные листы. Акрил, полученный этим способом обладает меньшей ударной прочностью и меньшей химической стойкостью, но у него лучшая способность к склеиванию. Есть возможность производства более длинных листов.</SPAN> \r\n<LI><SPAN style="LINE-HEIGHT: 18px"><SPAN style="FONT-WEIGHT: bold">Литье</SPAN> - метод, в котором мономер ММА заливают между двумя&nbsp;параллельными плоскостями с дальнейшим твердением. По сравнению с акрилом изготовленным по методу экструзии, литой акрил обладает следующими преимуществами: более термостойкий, повышенная устойчивость к механическим нагрузкам, лучше при формовке, что позволяет использовать его в сложных конструкциях.</SPAN></LI></OL></DIV>\r\n<DIV>Преимущества акрила:</DIV>\r\n<DIV>\r\n<UL>\r\n<LI><SPAN style="LINE-HEIGHT: 18px">Низкий вес, по сравнению со стеклом, в два раза легче;</SPAN> \r\n<LI><SPAN style="LINE-HEIGHT: 18px">Высокая ударопрочность,&nbsp;</SPAN><SPAN style="LINE-HEIGHT: 18px">по сравнению со стеклом, в пять раз крепче;</SPAN> \r\n<LI><SPAN style="LINE-HEIGHT: 18px">Отличная светопропускаемость, 92% в прозрачном акриле;</SPAN> \r\n<LI><SPAN style="LINE-HEIGHT: 18px">Способность к формовке, изделия из акрила выполняются в различных формах;</SPAN> \r\n<LI><SPAN style="LINE-HEIGHT: 18px">Высокая устойчивость к внешней среде и ультрафиолетовому излучению.<BR></SPAN><SPAN style="LINE-HEIGHT: 18px"><BR>Акрил используют в различных сферах:</SPAN></LI></UL>\r\n<DIV>\r\n<OL>\r\n<LI><SPAN style="LINE-HEIGHT: 18px"><SPAN style="FONT-WEIGHT: bold">Декоративный глянцевый</SPAN> - непрозрачные, окрашенные листы созданы для использования в домашней мебели, офисных перегородках, дверях и т.д. С помощью этого вида акрила можно создать уникальный стиль для любого помещения. Акриловые вставки подчеркнут индивидуальность и красоту каждой детали интерьера или рабочего пространства.</SPAN> \r\n<LI><SPAN style="LINE-HEIGHT: 18px"><SPAN style="FONT-WEIGHT: bold">Декоративный матовый</SPAN> - полупрозрачное стекло, имеет матовую поверхность, которая не царапается и не оставляет отпечатков пальцев. Также используется в различных интерьерах домов, квартир и офисов. Благодаря светорассеиванию, широко применяется в конструкциях, которые подсвечиваются изнутри.</SPAN> \r\n<LI><SPAN style="LINE-HEIGHT: 18px"><SPAN style="FONT-WEIGHT: bold">Зеркальный акрил - </SPAN>заменяет стекло в проектах, где нельзя использовать обычное стекло. Причиной этому может быть безопасность, сложность конструкции. Зеркальный акриловый лист намного прочнее и легче, он отлично формуется.</SPAN></LI></OL>\r\n<DIV>У нас Вы можете <SPAN style="FONT-WEIGHT: bold">купить акрил в Киеве по хорошей цене</SPAN>. Мы осуществляем резку листа под Ваши размеры. Только качественные материалы ведущих производителей. Возможна доставка по Киеву и области. С условиями доставки можете ознакомиться <SPAN style="FONT-WEIGHT: bold"><A href="http://polikarbonatvs.com.ua/dostavka-i-oplata/">ТУТ</A>.</SPAN></DIV></DIV></DIV>\r\n<DIV><SPAN style="FONT-WEIGHT: bold"><BR></SPAN></DIV>\r\n<DIV><SPAN style="FONT-WEIGHT: bold"><BR></SPAN></DIV>', 'thomb1.jpg', '2015-01-28 12:46:45', '<SPAN style="FONT-WEIGHT: bold"><SPAN class=Apple-tab-span style="WHITE-SPACE: pre"></SPAN>Акрил - </SPAN>идеальный материал для изготовления рекламных вывесок, элементов мебели. Широко применяется в наружной рекламе благодаря возможности формовки. Материал предоставляет собой очень прочный и, в то же время, легкий пластик. Если сравнивать со стеклом, акрил в два раза легче и в пять раз прочней стекла аналогичного размера и толщины. <SPAN style="FONT-WEIGHT: bold">Листовой акрил</SPAN> может быть как прозрачным так и цветным, палитра из множества цветов позволяет использовать его в разработке проектов любого цвета и оттенка. Толщина листа варьируется от полутора миллиметров до двадцати пяти.', '');
INSERT INTO `articles` (`id`, `category_id`, `title`, `txt`, `img`, `posted`, `short`, `related`) VALUES
(9, 9, 'материал для изготовления рекламных вывесок', '<h1>Листовой акрил (оргстекло)</h1>\r\n\r\n\r\n<DIV><SPAN style="FONT-WEIGHT: bold"><SPAN class=Apple-tab-span style="WHITE-SPACE: pre"></SPAN>Акрил - </SPAN>идеальный материал для изготовления рекламных вывесок, элементов мебели. Широко применяется в наружной рекламе благодаря возможности формовки. Материал предоставляет собой очень прочный и, в то же время, легкий пластик. Если сравнивать со стеклом, акрил в два раза легче и в пять раз прочней стекла аналогичного размера и толщины. <SPAN style="FONT-WEIGHT: bold">Листовой акрил</SPAN> может быть как прозрачным так и цветным, палитра из множества цветов позволяет использовать его в разработке проектов любого цвета и оттенка. Толщина листа варьируется от полутора миллиметров до двадцати пяти. Светопропускаемость прозрачного акрила 92%.&nbsp;</DIV><SPAN style="FONT-WEIGHT: bold">\r\n<DIV style="TEXT-ALIGN: center" align=center><BR>&nbsp;&nbsp;&nbsp;&nbsp; Таблица стоимости листового акрила TM Palglas(производство Palram, Израиль)<BR></DIV></SPAN>\r\n<P align=left><IMG border=0 alt="" align=middle src="/ufiles/Image/2222.png"></P>\r\n<DIV style="TEXT-ALIGN: left" align=center><SPAN style="FONT-WEIGHT: bold; TEXT-ALIGN: center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Таблица стоимости листового акрила TM Plexiglas, Германия</SPAN></DIV>\r\n<P align=left><IMG border=0 alt="" src="/ufiles/Image/33334.png"></P>\r\n<P align=center> <SPAN style="FONT-WEIGHT: bold">Таблица стоимости&nbsp;зеркального листового акрила TM Plexiglas, Германия<BR></P>\r\n<P align=left><IMG border=0 alt="" align=middle src="/ufiles/Image/4545.png"></SPAN></P>\r\n<DIV><BR></DIV>\r\n<DIV><SPAN style="FONT-WEIGHT: bold">Цвета в ассортименте: белый, голубой, желтый, зеленый, лимонный, малиновый, опал, оранжевый, салатовый, синий, черный, красный.</SPAN></DIV>\r\n<DIV>Наличие цветов и толщин обязательно уточняйте по телефонам указанным в <A href="http://polikarbonatvs.com.ua/contacts/"><SPAN style="FONT-WEIGHT: bold">контактной информации</SPAN></A>.&nbsp;</DIV>\r\n<DIV>Есть <SPAN style="FONT-WEIGHT: bold">два метода изготовления</SPAN> листового акрила:</DIV>\r\n<DIV>\r\n<OL>\r\n<LI><SPAN style="LINE-HEIGHT: 18px"><SPAN style="FONT-WEIGHT: bold">Экструзия </SPAN>- выталкивание. Непрерывная масса полимера проходит через щелевую головку, после этого охлаждается и&nbsp;режется&nbsp;на стандартные листы. Акрил, полученный этим способом обладает меньшей ударной прочностью и меньшей химической стойкостью, но у него лучшая способность к склеиванию. Есть возможность производства более длинных листов.</SPAN> \r\n<LI><SPAN style="LINE-HEIGHT: 18px"><SPAN style="FONT-WEIGHT: bold">Литье</SPAN> - метод, в котором мономер ММА заливают между двумя&nbsp;параллельными плоскостями с дальнейшим твердением. По сравнению с акрилом изготовленным по методу экструзии, литой акрил обладает следующими преимуществами: более термостойкий, повышенная устойчивость к механическим нагрузкам, лучше при формовке, что позволяет использовать его в сложных конструкциях.</SPAN></LI></OL></DIV>\r\n<DIV>Преимущества акрила:</DIV>\r\n<DIV>\r\n<UL>\r\n<LI><SPAN style="LINE-HEIGHT: 18px">Низкий вес, по сравнению со стеклом, в два раза легче;</SPAN> \r\n<LI><SPAN style="LINE-HEIGHT: 18px">Высокая ударопрочность,&nbsp;</SPAN><SPAN style="LINE-HEIGHT: 18px">по сравнению со стеклом, в пять раз крепче;</SPAN> \r\n<LI><SPAN style="LINE-HEIGHT: 18px">Отличная светопропускаемость, 92% в прозрачном акриле;</SPAN> \r\n<LI><SPAN style="LINE-HEIGHT: 18px">Способность к формовке, изделия из акрила выполняются в различных формах;</SPAN> \r\n<LI><SPAN style="LINE-HEIGHT: 18px">Высокая устойчивость к внешней среде и ультрафиолетовому излучению.<BR></SPAN><SPAN style="LINE-HEIGHT: 18px"><BR>Акрил используют в различных сферах:</SPAN></LI></UL>\r\n<DIV>\r\n<OL>\r\n<LI><SPAN style="LINE-HEIGHT: 18px"><SPAN style="FONT-WEIGHT: bold">Декоративный глянцевый</SPAN> - непрозрачные, окрашенные листы созданы для использования в домашней мебели, офисных перегородках, дверях и т.д. С помощью этого вида акрила можно создать уникальный стиль для любого помещения. Акриловые вставки подчеркнут индивидуальность и красоту каждой детали интерьера или рабочего пространства.</SPAN> \r\n<LI><SPAN style="LINE-HEIGHT: 18px"><SPAN style="FONT-WEIGHT: bold">Декоративный матовый</SPAN> - полупрозрачное стекло, имеет матовую поверхность, которая не царапается и не оставляет отпечатков пальцев. Также используется в различных интерьерах домов, квартир и офисов. Благодаря светорассеиванию, широко применяется в конструкциях, которые подсвечиваются изнутри.</SPAN> \r\n<LI><SPAN style="LINE-HEIGHT: 18px"><SPAN style="FONT-WEIGHT: bold">Зеркальный акрил - </SPAN>заменяет стекло в проектах, где нельзя использовать обычное стекло. Причиной этому может быть безопасность, сложность конструкции. Зеркальный акриловый лист намного прочнее и легче, он отлично формуется.</SPAN></LI></OL>\r\n<DIV>У нас Вы можете <SPAN style="FONT-WEIGHT: bold">купить акрил в Киеве по хорошей цене</SPAN>. Мы осуществляем резку листа под Ваши размеры. Только качественные материалы ведущих производителей. Возможна доставка по Киеву и области. С условиями доставки можете ознакомиться <SPAN style="FONT-WEIGHT: bold"><A href="http://polikarbonatvs.com.ua/dostavka-i-oplata/">ТУТ</A>.</SPAN></DIV></DIV></DIV>\r\n<DIV><SPAN style="FONT-WEIGHT: bold"><BR></SPAN></DIV>\r\n<DIV><SPAN style="FONT-WEIGHT: bold"><BR></SPAN></DIV>', 'thomb1.jpg', '2015-01-28 12:46:45', '<SPAN style="FONT-WEIGHT: bold"><SPAN class=Apple-tab-span style="WHITE-SPACE: pre"></SPAN>Акрил - </SPAN>идеальный материал для изготовления рекламных вывесок, элементов мебели. Широко применяется в наружной рекламе благодаря возможности формовки. Материал предоставляет собой очень прочный и, в то же время, легкий пластик. Если сравнивать со стеклом, акрил в два раза легче и в пять раз прочней стекла аналогичного размера и толщины. <SPAN style="FONT-WEIGHT: bold">Листовой акрил</SPAN> может быть как прозрачным так и цветным, палитра из множества цветов позволяет использовать его в разработке проектов любого цвета и оттенка. Толщина листа варьируется от полутора миллиметров до двадцати пяти.', '');

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `articles_ibfk_2` FOREIGN KEY (`img`) REFERENCES `images` (`filename`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;