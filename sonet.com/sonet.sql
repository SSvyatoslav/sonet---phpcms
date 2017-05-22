-- phpMyAdmin SQL Dump
-- version 4.4.15.5
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 22 2016 г., 01:10
-- Версия сервера: 5.7.11
-- Версия PHP: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `sonet`
--

-- --------------------------------------------------------

--
-- Структура таблицы `callback`
--

CREATE TABLE IF NOT EXISTS `callback` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL DEFAULT '',
  `phone` int(150) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `usercomment` varchar(250) DEFAULT NULL,
  `pubdate` varchar(250) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `callback`
--

INSERT INTO `callback` (`id`, `name`, `phone`, `email`, `usercomment`, `pubdate`) VALUES
(1, '111', 111, '111', '111', '17-12-2016 . 17:34:12'),
(2, 'Компания', 48525565, 'test@mail.ru', 'comment', '17-12-2016 . 17:34:55');

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL DEFAULT '',
  `content` text,
  `author` varchar(50) NOT NULL DEFAULT '',
  `date` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=72 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `name`, `content`, `author`, `date`) VALUES
(57, 'Новость №1', 'Текст новости 				', 'thisadmin', '14-12-2016 . 01:40:16'),
(69, 'Вимикаємо світло в усатове і тепличному', 'сьогодні з 13:00 і до 22:00 не світить вибачте будь ласка) дякую пожайу', 'thisadmin', '14-12-2016 . 20:29:01'),
(70, 'Увага! Нова акція! НАРОДНИЙ ПРОФІ!', 'Для нових клієнтів стартувала Акція! Підберемо індивідуальну пропозицію для кожного! Наявність пропозиції для Вас уточнюйте за тел .: 8 (048) 777-77-77', 'thisadmin', '15-12-2016 . 19:23:33'),
(71, 'Встигни підключитися на', 'Продовжено термін підключення і переходу на тарифний план «Народний» * до 30.11.2016 року. Діючі клієнти можуть перейти на тариф в Особистому Кабінеті, вартість переходу 150 грн. * Скористатися пропозицією можна одноразово.', 'thisadmin', '15-12-2016 . 19:23:46');

-- --------------------------------------------------------

--
-- Структура таблицы `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL DEFAULT '',
  `content` text,
  `author` varchar(50) NOT NULL DEFAULT '',
  `pubdate` timestamp NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `pages`
--

INSERT INTO `pages` (`id`, `name`, `content`, `author`, `pubdate`) VALUES
(1, '', '<P> Всі тарифні плани дійсні для багатоквартирних будинків при наявності технічної можливості. </P>\r\n<P> Для підключення в приватному секторі м.Одеса уточнюйте технічну можливість та тарифні плани по тел. 8 (048) 22-999-87 </p>\r\n<P> <sup> 1 </sup> - Нічний безліміт - швидкість до 100 Мбіт / с. з 21:00 до 7:00 годин </p>\r\n<P> <sup> 2 </sup> - TV Free\r\n- Можливість перегляду безкоштовного online телебачення за допомогою\r\nвисокошвидкісного інтернету на всіх тарифних планах </p>\r\n<P> (кількість і якість каналів залежить від обраного Абонентом ресурсу в глобальній мережі інтернет) </p>\r\n<P> <sup> 3 </sup> - По закінченню 180 днів користування вартість тарифу складе 200 грн. / Місяць. </P>\r\n<P> Для збереження\r\nвартості 100 грн. необхідно самостійно в особистому кабінеті змінити\r\nтарифний план на "Популярний", зміна безкоштовна. </p>\r\n<P>\r\nТермін дії тарифу Народний (Акція) уточнюйте в розділі НОВИНИ. </P>\r\n<P>\r\nТарифний план доступний для підключення як новим, так і існуючим абонентам, одноразово. </P>\r\n<P> Увага: накопичувальна знижка по платежах скасовується на весь період дії знижки за тарифом. </P>', 'thisadmin', '2016-12-21 22:00:14'),
(2, 'СОФОРУМ - РІШЕННЯ ДЛЯ БІЗНЕСУ', '<P> Інтернет від компанії «СОфорум» - це ефективний інструмент для\r\n  ведення Вашого бізнесу. Підключення здійснюється по виділеній лінії,\r\nсинхронного каналу, з використанням оптико - волоконних технологій,\r\nщо забезпечує високу швидкість і безперебійність наданих\r\nпослуг. </p>\r\n<P> Індивідуальний підхід і персональний сервіс наших фахівців створюють максимальний комфорт при користуванні нашими послугами. </P>\r\n<P class = "textblockgrey"> Швидше, надійніше або дешевше? Вам не доведеться вибирати одне з трьох! </P>', '', '2016-12-21 22:00:57'),
(3, '<h3>ШВИДКИЙ ІНТЕРНЕТ СО ШВИДКІСТЮ ДОСТУПУ ДО 100 Мбіт / с І ВИЩЕ!</h3>', '<P> Для малого та середнього бізнесу ми пропонуємо безлімітні високошвидкісні тарифи на Інтернет, широка лінійка тарифів дозволяє оптимізувати витрати на связь.Прі цьому Ви отримуєте безперебійний доступ в Мережу і персональне обслуговування. Для великого бізнесу і клієнтів з бізнес-центрів існує своя індивідуальна тарифна сітка. </P>\r\n<P class = "textblockwhite"> Перед підключенням наші професійні менеджери запропонують тарифи в залежності від Ваших бажань і потреб. </P>', '', '2016-12-21 22:01:56'),
(4, 'МЫ - ООО ', '<P> Інтернет-провайдер "СОНЕТ" - це передові технології, конкурентно-здатні ціни, чітке і швидке виконання замовлень,\r\nа також якісний і високопрофесійний рівень підтримки і сервісного обслуговування своїх клієнтів. </p>\r\n<P> Наша компанія досить досвідчена і стабільна, щоб забезпечувати високу якість послуг,\r\nвпроваджувати сучасні технічні рішення, використовувати надійне обладнання і своєчасно його модернізувати.\r\nМи приділяємо максимум уваги обслуговування кожного клієнта - будь то велика компанія або домашній абонент.\r\nКожен клієнт важливий для нас і може розраховувати на кваліфікований сервіс і уважне ставлення до своїх запитах. </P>\r\n<P> Наша задача - донести до людей краще зі світу нових технологій, надати чесний і якісний сервіс.\r\nТворячи, ми робимо наше суспільство краще! </P>', '', '2016-12-21 22:02:22'),
(5, 'Написати в техпідтримку', '<P> Ви можете бути впевнені - фахівці "СОНЕТ" дадуть відповідь на Ваш\r\nдзвінок і нададуть кваліфіковану допомогу. Служба технічної підтримки працює\r\nцілодобово, без вихідних. </p>\r\n<P>\r\nТакож ви можете замовити зворотний дзвінок або зателефонувати за цілодобовим номером - <a href=""> 8 (048) 777-77-77 </a>\r\n</P>\r\n<P> Ви можете описати свою проблему за допомогою форми, розташованої\r\nнижче. Наші фахівці дадуть відповідь на ваші запитання, надіславши лист на\r\nвказану адресу ел. пошти. </p>', '', '2016-12-21 22:03:02');

-- --------------------------------------------------------

--
-- Структура таблицы `questions`
--

CREATE TABLE IF NOT EXISTS `questions` (
  `id` int(11) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `question` varchar(5000) DEFAULT NULL,
  `answer` varchar(250) DEFAULT NULL,
  `pubdate` varchar(250) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `questions`
--

INSERT INTO `questions` (`id`, `email`, `question`, `answer`, `pubdate`) VALUES
(1, 'test@mail.ru', 'Чи підключений мій будинок? Як залишити заявку на підключення?', '- Звернувшись до цілодобової служби технічної підтримки клієнтів по телефону- 8 (048) 777-77-77\r\n<br> Заявку на підключення можна лишити в такий спосіб: на сайті в розділі підключитися.', '17-12-2016 . 19:02:54'),
(2, 'test2@mail.ru', 'Чи можна підключитися в приватному секторі?', '- Підключення в приватному секторі можливо в м.Одеса та області\r\nУточнити технічну можливість і залишити заявку на підключення в приватному секторі можна за тел - 8 (048) 777-77-77 цілодобово.\r\nОдноразова вартість підключення 2 000 грн.', '17-12-2016 . 19:03:27'),
(3, 'test@mail.ru', 'В які терміни здійснюється підключення в багатоквартирному будинку після створення заявки?', '- Якщо будинок підключений до мережі СОНЕТ, наші фахівці зв''яжуться з Вами протягом 3-х робочих днів з моменту створення заявки і призначать дату підключення.\r\nСтандартно підключення триває приблизно 30-40 хвилин.', '17-12-2016 . 19:37:46');

-- --------------------------------------------------------

--
-- Структура таблицы `rates`
--

CREATE TABLE IF NOT EXISTS `rates` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `speed` int(11) NOT NULL,
  `textrates` varchar(500) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `rates`
--

INSERT INTO `rates` (`id`, `name`, `speed`, `textrates`, `price`) VALUES
(2, 'Популярний', 30, 'Для тих, хто цінує час і гроші! Ідеально підходить для серфінгу в інтернеті і перегляду фільмів на одному комп''ютері.', 100),
(4, 'Оптимальний', 50, '<B> + Нічний безліміт1 <br>\r\n+ TV Free2 <br>\r\n</ B>\r\nДля тих, хто дійсно любить інтернет! Цей тариф для сучасної сім''ї, що дозволяє підключити пристрої всіх членів сім''ї через Wi-Fi і скористатися нічним безлімітом на швидкості 100 Мбіт / с. При цьому ніхто не буде обділений швидкістю.', 250),
(5, 'Народний (Акція)', 100, '<B> + TV Free </b> <br>\r\nДля тих, хто готовий до нових можливостей, наша відповідь санкцій: знижка 50% на 6 місяців. З нами санкції дарма, 100 Мбіт / с в кожен дім!', 250);

-- --------------------------------------------------------

--
-- Структура таблицы `ratesplus`
--

CREATE TABLE IF NOT EXISTS `ratesplus` (
  `id` int(11) NOT NULL,
  `ratesplusnumber` int(10) NOT NULL,
  `name` varchar(250) NOT NULL,
  `price` int(11) NOT NULL,
  `comment` varchar(1000) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `ratesplus`
--

INSERT INTO `ratesplus` (`id`, `ratesplusnumber`, `name`, `price`, `comment`) VALUES
(6, 1, 'Підключення до мережі Інтернет', 0, 'При наявності присутності мережі в будівлі клієнта!'),
(7, 2, 'виїзд фахівця', 0, 'У разі виявлення проблеми на стороні Оператора'),
(8, 2, 'Выезд специалиста', 0, 'В случае выявления проблемы на стороне Оператора'),
(9, 3, 'Виїзд фахівця / консультація з виїздом до Абонента / помилковий виклик', 100, 'Консультації по використанню роутерів, антивірусних програм, налаштувань мережевих підключень. Діагностика проблем з підключенням до мережі.'),
(10, 4, 'Налаштування мережевої карти / мережевого підключення - заміна / установка мережевої карти', 150, 'Тільки ОС Windows, при наявності обладнання Абонента'),
(11, 5, 'Налаштування роутера / робочих місць Абонента', 100, 'У вартість входить настройка роутера і одного раб. місця, настройка додаткових місць + 50 грн. / місце. Чи не надається, якщо стоїть прошивка "open source" типу "openWrt" та ін.'),
(12, 6, 'Обтиск коннектора RJ-45 в квартирі Абонента', 100, 'Включена вартість матеріалів'),
(13, 7, 'Підключення розетки RJ-45', 150, 'При наявності матеріалів Абонента'),
(14, 8, 'Заміна пошкодженого кабелю', 0, 'За винятком ремонту кабелю в квартирі Абонента'),
(15, 9, 'Ремонт / заміна / подовження кабелю в квартирі Абонента', 100, '100 грн. + 1 грн. / Метр (вартість кабелю)'),
(16, 10, 'Свердління буром прохідних отворів діаметром <20 мм. в бетонних і цегляних стінах квартири Абонента', 100, '100 грн. + 30 грн. за кожні 10 см. товщини стіни.');

-- --------------------------------------------------------

--
-- Структура таблицы `TiketAddUser`
--

CREATE TABLE IF NOT EXISTS `TiketAddUser` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL DEFAULT '',
  `phone` int(50) DEFAULT NULL,
  `email` varchar(250) NOT NULL DEFAULT '',
  `street` varchar(250) NOT NULL DEFAULT '',
  `house` int(10) DEFAULT NULL,
  `housing` int(10) DEFAULT NULL,
  `apartment` int(10) DEFAULT NULL,
  `access` int(10) DEFAULT NULL,
  `floor` int(5) DEFAULT NULL,
  `tariffplan` varchar(50) DEFAULT NULL,
  `pubdate` varchar(250) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `TiketAddUser`
--

INSERT INTO `TiketAddUser` (`id`, `name`, `phone`, `email`, `street`, `house`, `housing`, `apartment`, `access`, `floor`, `tariffplan`, `pubdate`) VALUES
(4, 'Свят', 485555, 'mail@mail.ru', 'преображенская', 17, 2, 17, 2, 2, 'Популярный', '17-12-2016 . 17:15:58');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL DEFAULT '',
  `password` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL DEFAULT '',
  `access` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `address`, `access`) VALUES
(1, 'admin', 'admin', '', 1);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `callback`
--
ALTER TABLE `callback`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `rates`
--
ALTER TABLE `rates`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `ratesplus`
--
ALTER TABLE `ratesplus`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `TiketAddUser`
--
ALTER TABLE `TiketAddUser`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `callback`
--
ALTER TABLE `callback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=72;
--
-- AUTO_INCREMENT для таблицы `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT для таблицы `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `rates`
--
ALTER TABLE `rates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT для таблицы `ratesplus`
--
ALTER TABLE `ratesplus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT для таблицы `TiketAddUser`
--
ALTER TABLE `TiketAddUser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
