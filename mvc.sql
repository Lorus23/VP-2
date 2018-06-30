-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 30 2018 г., 09:47
-- Версия сервера: 5.6.37
-- Версия PHP: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `mvc`
--

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `description` text NOT NULL,
  `login` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `age`, `description`, `login`, `password`, `photo`) VALUES
(19, 'Sayat Bazarkanov', 29, 'My name is Sayat and I\'m learning PHP', 'admin', 'qwer', ''),
(20, 'Jakob Ebert', 75, 'Optio deleniti corporis vitae magni consequatur impedit velit. Asperiores quam sint earum iure qui.', 'hoeger.jerel', 'G5Urz{=P', ''),
(21, 'Prof. Marguerite Breitenberg III', 52, 'Soluta maxime accusamus voluptatem sit et et vitae. Perspiciatis voluptatibus eaque atque numquam nihil iste nobis. Eum pariatur odio qui hic aut.', 'rcrist', '\\+JsPU/Gmeup`]ra_!E', ''),
(22, 'Mr. Antonio Rohan', 31, 'Distinctio tenetur iste voluptatem et maiores. Ipsum vero suscipit perferendis ea. Sequi temporibus est nihil deleniti dolorum ea animi.', 'kareem77', 'hY(c8+bSy}epSD,Te', ''),
(23, 'Reyna Wiegand', 21, 'Beatae ipsa deleniti maxime in delectus ipsum. Assumenda nam esse tempora molestiae excepturi nemo totam. Provident aut unde veniam facilis et.', 'gulgowski.christian', 'Cgcj(Xg', ''),
(24, 'Prof. Kaylah Kassulke', 59, 'Et magni tempora dolore est et provident quod. Repellat culpa velit dolores nam vero unde. Dicta odio laboriosam in molestias repellendus magnam nemo.', 'gutmann.ally', 'Zj:?W\\ha;z.', ''),
(25, 'Krista O\'Conner', 25, 'Fuga dolorem et consequuntur aut dolore et. Impedit qui eligendi rem qui. Soluta nihil quos consequatur amet autem autem. Labore aut et quasi quasi. Dolorem voluptas et sed quis.', 'garnett.hickle', 'CkQ\\fb{<T~mf^)1', ''),
(26, 'Gideon Hettinger IV', 105, 'Dolores qui sunt quia maxime sapiente. Quia occaecati sit sit ut hic ad maxime. Et omnis ut est aut at porro. Dolorem sed consectetur recusandae esse.', 'slangworth', '?3~Aw;$Ad2!jsb&mN', ''),
(27, 'Watson Rutherford', 47, 'Rerum perferendis ut quod cupiditate recusandae possimus. Esse esse dolore temporibus praesentium nam tempora. Labore consequatur suscipit veritatis ea sit inventore.', 'turner.rodrigo', '&AqWodUYC_v9l361F%$R', ''),
(28, 'Rosemarie Corkery', 81, 'Quaerat voluptatem sit voluptatem quis voluptatem. Voluptas rerum repudiandae nam nihil earum. Pariatur impedit numquam rerum reprehenderit quo sit.', 'dusty99', 'z(+iD$/D{-e>3(+|Yp', ''),
(29, 'Ms. Precious Schulist PhD', 78, 'Enim provident ut ipsam doloribus voluptatem. Veniam officia ipsa vero nihil. Totam sit id minima labore. Dolorem qui id voluptatem necessitatibus.', 'spencer.lance', '1WExSm_~\'DobqJ', ''),
(30, 'Dr. Alysson Nader PhD', 101, 'Sit laudantium nam quia cumque. Sapiente consequatur dolor enim ut vero molestias quo. Reiciendis mollitia culpa architecto. Ipsam et vel ut expedita.', 'eddie.padberg', '4f<X$uf', ''),
(31, 'Eunice Kilback', 90, 'Qui ut incidunt repudiandae quidem voluptatem. Qui officiis nobis debitis inventore quo id. Et corrupti voluptatem aliquam in corrupti.', 'metz.brock', '_snx<:6', ''),
(32, 'Verla Schoen', 48, 'Et culpa ex rerum sint repellendus ipsum. Et quibusdam sit a dolores ullam in voluptatum. Quo et culpa libero aspernatur provident voluptas.', 'lucio.pfannerstill', '86#iPm!i`UXrnwWg*wp', ''),
(33, 'Alvena Rogahn', 58, 'Sint blanditiis repudiandae architecto eveniet qui maxime fugiat. Ullam vel vero laudantium aut praesentium nam. Similique quas cumque est explicabo sed molestiae repudiandae.', 'angelina58', '\'!3t<D0-7)', ''),
(34, 'Nathanael Jakubowski', 16, 'Natus et suscipit adipisci est a culpa. Eos dolorem rerum rerum sit laudantium dolore.', 'pgislason', 'Sc,vz5O>)(}Cy[a', ''),
(35, 'Laisha Kihn', 14, 'Culpa eveniet in molestiae repudiandae incidunt ducimus ut. Distinctio veritatis provident facere modi excepturi qui quod. Velit quo fugit esse tempora.', 'ggleichner', '\'~cRQ2QaO\'noH', ''),
(36, 'Darwin Langworth', 74, 'Numquam mollitia enim voluptatem fuga repudiandae impedit. Ut consequatur quasi quam sit. Qui accusantium et autem doloremque et provident.', 'lboyer', '_yn;.;NBKHx{yuv', ''),
(37, 'Tess Haag', 77, 'Aut consequatur illum et est totam nemo neque. Id quidem modi sequi quo in hic. Enim est amet deserunt ullam et totam deserunt qui. Quia cum dolorem quis vitae et quisquam. Neque earum in eligendi.', 'osbaldo.veum', '%)P$;Yd7?fe\'.vrjMI,', ''),
(38, 'Kelley Kuvalis', 13, 'In laboriosam magni nulla qui. Aliquam atque nihil laudantium quo iste consequatur commodi dolore. Harum perspiciatis necessitatibus doloremque dolorum sapiente.', 'laron24', '0YV&iVG.mMe^+\'@r', ''),
(39, 'Ms. Veronica Schowalter PhD', 77, 'Qui magni consequuntur qui pariatur cum dolores. Rerum ducimus sint consequatur. Nesciunt modi laboriosam perferendis libero rerum repellat et omnis.', 'vjast', '8#eF81yO3Z%I*Q+', ''),
(40, 'Winona Huel', 80, 'Ut maiores nobis reiciendis vitae. Unde vero sed harum exercitationem molestias quaerat. Officiis consequatur dolore voluptatum ut.', 'kelvin43', '4W2=q$w)/ai*', ''),
(41, 'Arvilla Schultz', 89, 'Eos corporis repellendus quos sunt maiores. Eum nesciunt illum vel. Qui veritatis tempore officiis non.', 'wayne.rempel', 'P\'$sX\"GI}OpI8', ''),
(42, 'Dr. Isabell Konopelski', 51, 'Ut animi corrupti dolores quasi ut fugit suscipit corrupti. Nemo necessitatibus perferendis explicabo culpa. Ea nobis aliquid consequatur culpa quisquam nulla.', 'dina.jacobs', 'oGFDl]_Om,s', ''),
(43, 'Immanuel Ferry', 41, 'Eligendi ut hic eius iusto alias quidem blanditiis cupiditate. Sequi ipsa repellendus molestiae. Aliquid iste fugiat debitis dignissimos.', 'rutherford.maymie', 'F}z<2%\'DU%]|7eP', ''),
(44, 'Jamil Sipes', 110, 'Inventore corporis ipsa ab ut tempora assumenda ut. Totam molestiae vel quis fuga sapiente. Quisquam quam ducimus excepturi aperiam fuga veritatis est eaque. Nulla asperiores error ipsam fugit.', 'javier12', '%V>ZfLyLbe', ''),
(45, 'Lulu Hintz', 98, 'Voluptatem sit in doloremque veritatis porro dolorem. Consequatur velit facilis sit rerum incidunt voluptatibus. Velit blanditiis distinctio est et fugiat molestiae delectus.', 'streich.fredy', '?2[-M,%', ''),
(46, 'Craig Bechtelar II', 81, 'Quibusdam voluptatum dolores soluta. Nihil quisquam quae iste qui numquam.', 'harmon.pacocha', '2[p5M}1N%Xb>e-\\w', ''),
(47, 'Prof. Maynard Langosh DDS', 58, 'Maiores laboriosam cumque dolores magnam eligendi. Laboriosam dolores est harum. Alias et et non ea commodi. Odio est voluptas et quibusdam ut ab fugit. Nostrum tenetur non numquam omnis eos.', 'konopelski.alexys', 'KGd:V.u`JREE', ''),
(48, 'Dr. Moses Schmeler II', 105, 'Doloremque quibusdam praesentium est et voluptatem. Labore officiis fuga tempore nesciunt in asperiores. Explicabo consequatur temporibus similique pariatur molestiae.', 'cristobal.huel', 'VT&?Q8/', '');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
