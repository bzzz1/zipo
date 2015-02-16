-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Фев 16 2015 г., 16:01
-- Версия сервера: 5.6.15-log
-- Версия PHP: 5.5.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `zipo`
--

-- --------------------------------------------------------

--
-- Структура таблицы `articles`
--

CREATE TABLE IF NOT EXISTS `articles` (
  `article_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(256) NOT NULL,
  `body` text NOT NULL,
  `weight` int(11) NOT NULL DEFAULT '10',
  `time` date NOT NULL,
  `photo` varchar(64) NOT NULL DEFAULT 'no_photo.png',
  PRIMARY KEY (`article_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Дамп данных таблицы `articles`
--

INSERT INTO `articles` (`article_id`, `title`, `body`, `weight`, `time`, `photo`) VALUES
(1, 'Финляндия - страна озер, лесов и отличных мясорубок', 'Приветствуем Вас!  Ранее мы сообщали о том, что у нас в ассортименте есть отечественные мясорубки отличного качества! Также для тех, кто привык пользоваться зарубежной техникой, мы рады представить оборудование и запчасти финской компании KT! Компания с 70-ти летней историей и отличными традициями придется по душе даже самому искушенному заказчику!  С полным списком продукции вы можете ознакомится ниже! Нож двухсторонний KT LM82 Нож двухсторонний KT LM82 Решетка 13 мм KT LM82 Решетка 3 мм KT LM82 Решетка Подрезная KT LM82 Решетка 3 мм KT LM98 Решетка 13 мм KT LM98 Решетка Подрезная KT LM98 Нож двухсторонний KT LM98 Нож двухсторонний KT LM130 Решетка подрезная KT LM130 Решетка 2 мм KT LM130 Решетка 2 мм KT LM98 Решетка 2 мм KT LM82 Решетка 4-4,5 мм KT LM82 Решетка 4-4,5 мм KT LM98 Решетка 4-4,5 мм KT LM130 Решетка 5 мм KT LM98 Решетка 5 мм KT LM82 Решетка 7,8 мм KT LM98 Решетка 7,8 мм KT LM130 Решетка 10 мм KT LM130 Решетка 10 мм KT LM98 Решетка 10 мм KT LM82 Решетка 16 мм KT LM130 Решетка 18 мм KT LM130 Решетка 20 мм KT LM130 Решетка 18 мм KT LM98 Решетка 3 мм, 4,5 мм KT LM5 Решетка 6, 8, 10, 12, 20, 30 KT LM5 Нож KT LM5 Нож KT LM10 Решетка 3 мм, 4,5 мм KT LM22 Нож KT LM32 Решетка 6, 8, 10, 12, 20, 30 KT LM32 Решетка 3 мм, 4,5 мм KT LM32 Решетка 3 мм, 4,5 мм KT LM42 Решетка 6, 8, 10, 12, 20, 30 KT LM42 Нож KT LM42 Уплотнительное кольцо 13 мм KT LM82 Уплотнительное кольцо 13 мм KT LM98 Уплотнительное кольцо 13 мм KT LM130 Уплотнительное кольцо 28 мм KT LM130 Уплотнительное кольцо 55 мм KT LM130', 1, '2015-02-06', 'no_photo.png'),
(2, 'Изготовление тэнов на заказ', 'Дорогие друзья!  Спешим сообщить, что теперь у Вас есть возможность изготовить под заказ нагревательные элементы, ТЭНы различных конфигураций и электрических параметров по чертежам и образцам. Налажено сотрудничество напрямую с заводом-производителем, поэтому возможно будет сделать любые позиции в короткие сроки и по приемлемым ценам, минуя торговые организации.', 10, '2015-02-03', 'no_photo.png'),
(3, 'Отечественные конфорки и тэны', 'В данном разделе вы сможете воспользоваться полезной информацией по конфоркам и тэнам. Не секрет, что часто не очень легко разобраться к какой конфорке подходят тэны или же какие конфорки идут на Вашу плиту. Данная памятка будет хорошим подспорьем для Вас в вопросе выбора необходимого оборудования и запасных частей.    1. Электроконфорка КЭ-0,09, 300*300*60 мм, 2,5 кВт/220-380 В Мощность 2,5 кВт  Номинальное напряжение – 220-380 В  Площадь рабочей поверхности –  0,09 м2; (300 мм х300 мм) ± 3мм Температура рабочей поверхности – не менее 400 ºС Рабочие режимы нагрева: «слабый», «средний», «сильный» Вес :11 кг  Подходят для кухонных плит:  - «Чувашторгтехника» Чебоксары;: ЭП-2Ж( 2 конф.) ;ЭП-48П( 4 конф.); ЭПК-47ЖШ ( 6 конф.); ЭП-48 ЖШ ( 4 конф.) - «Тулаторгтехника» : ПП «RADA “ПЭ-704ШК» - «Тверьторгтехника»: ПЭМ-0,3;ПЭМ –0,6;ПЭМ-0,9 Сухаревка - « RADA» ПЭС 714 Ш ( 4конф.); ПЭС 724 ШК ( 4 конф ); ПЭС 726 ШК ( 6 конф.) ; ПЭС- 722 ДН ( 2 конф.); ПЭС -2 ( 1 конф.) « Гомельторгмаш-:ПЭМ-020,ПЭМ-4 -010;ПЭМ-4 -011(4 конфорки);ПЭМ—2—030;-ПЭМ -2-020( 2 конфорки).  2. Электроконфорка, КЭТ -0,09/2, 300*300*60 мм, 2,5 кВт/220-380 В Мощность 2,5кВт  Номинальное напряжение -220-380 В Площадь рабочей поверхности-0,09 м2; Температура рабочей поверхности - не менее 400 С; Режим работы нагрева : «слабый, «средний», «сильный» Вес :10 кг.  Подходят для кухонных плит:  «Чувашторгтехника» Чебоксары;: ЭП-2Ж( 2 конф.) ; ЭПК-48ЖШ  « RADA» ПЭ 722ДН ( 2 конф.); ПЭ -9020 ( 2 конф ); ПЭ- 722 0 ( 2 конф.);  ПЭ-8040 ( 4 конф);ПЭ-8060 ( 6 конф);ПЭ-724 (4 конф);ПЭ-7260 ( 6 конф)  3. Электроконфорка, КЭТ -0,09/3, 300*300*40 мм, 2,8 кВт/220-380 В Мощность 2,8кВт  Номинальное напряжение -220-380 В Площадь рабочей поверхности-0,09 м2; Температура рабочей поверхности - не менее 400 С; Режим работы нагрева : «слабый, «средний», «сильный» Вес не более10 кг.  Подходят для кухонных плит:  Чувашторгтехника» Чебоксары;: ЭП-2( 2 конф.) ; ЭПК-48ЖШ   4. Электроконфорка, КЭ-0.12, 415*295*40 мм , 3 кВт/220-380 В Мощность 3,0 кВт  Номинальное напряжение –  220-380 В  Площадь рабочей поверхности – 0,12 м2; (415 мм х295 мм) ± 3мм Температура рабочей поверхности – не менее 400 ºС Рабочие режимы нагрева: «слабый», «средний», «сильный»  Вес :не более 15 кг  Подходят для кухонных плит:  - «Тулаторгтехника» ПЭ-0,24 ( 2 конф.); ПЭ-0,48 ( 4 конф.); ПЭ-0,72 ( 6 конф.) - «Тулатехмаш»: ПЭЖШ  - «Чувашторгтехника» Чебоксары: ЭП-6ЖШ ( 6 конф.); ЭП-4ЖШ (4 конф.); ЭП-6П ( 6 конф. ) ТО « Прогрессторгтехника» Екатеринбург- ПЭ-0,24 2 конф),ПЭ -0,48 ( 4 конф),ПЭ-0,72 -6ш.  Сухаревка-« RADA» ПЭ- 812 Ш ( 2конф.); ПЭС -4 Ш—и ПЭ -814 Ш( 4 конф ); ПЭ-810 Н ( 4 конф.) ; ПЭ-806 Ш (6 конф). - «Тверьторгтехника»-ПЭСМ-4 - «Гомельторгмаш»-ПЭМ-4-010; ПЭМ-2-020;ЭПК-48; ПЭЖШ - « Пищевые технологии» ПЭП -0,24 М ( конф); ПЭП-0,48М ( 4 конф ); ПЭП- 0,72 ( 6 конф.) - «Проммаш»( Саратов) ПЭ-0,24 ( 2 конф.); ПЭ-0,48 ( 4 конф.) «ATESY»- ЭПЧШ -9-6-16(9-2-6) - 2 конфр.;ЭПЧШ 9-4-23(9-4-12) 4 конф; ЭПЧШ 9-6-23(9-6-17) 6 конфорок. Серия 900 .  5. Электроконфорка, КЭТ-0.12, 415*295*40 мм, 3 кВт/220-380 В Мощность 3,0 кВт  Номинальное напряжение –  220-380 В  Площадь рабочей поверхности – 0,12 м2; (415 мм х295 мм) ± 3мм Температура рабочей поверхности – не менее 400 ºС  .Комплектуется 2 двумя Тэнами : 1.8 кВт и 1.2 кВт Рабочие режимы нагрева: «слабый», «средний», «сильный Вес : 11 кг  Подходят для кухонных плит:  «Чувашторгтехника» Чебоксары-ЭП 6-ЖШ ( 6 конф.Тэн) ,ЭП-6 П ( 6 конф Тэн); ЭП -4 ЖШ ( 4 конф. Тэн) . Плиты серии 900 «Гриль-мастер» Смоленск -Ф2 ЖТЛПД ( 2 конф), Ф4ЖТЛПЭ (4 конф),Ф6 ЖТЛПЭ(6 конф)  RADA» ПЭ- 804( 4конф.);ПЭ-7240 (4 конф);ПЭ-7260 (6 конф)  6. Электроконфорка, КЭС-0.13( круглые углы), 415*295*40 мм, 2.5 кВт/220-380 В Мощность 2.5 кВт  Номинальное напряжение –  220-380 В  Площадь рабочей поверхности – 0,11 м2; (415 мм х295 мм) ± 3мм Температура рабочей поверхности – не менее 400 ºС Рабочие режимы нагрева: «слабый», «средний», «сильный» Вес не более 15 кг  Подходят для кухонных плит:  «Сухаревка» , «RADA» ПЭС-2 (ш),серия 800   7. Электроконфорка КЭ-0.15, 405*370*50 мм, 3,5 кВт/220 В Мощность 3,5 кВт  Номинальное напряжение –  220 В  Площадь рабочей поверхности – 0,15 м2; (405 мм х370 мм) ± 3мм Температура рабочей поверхности – не менее 400 ºС Рабочие режимы нагрева: «слабый», «средний», «сильный» Вес 18 кг.  Для кухонных плит: - ЭП-2; ЭП-7; ЭП-8  8. Электроконфорка, КЭ-0.17, 565*320*40, 4,0 кВт/220-380 В, Мощность 4,0 кВт  Номинальное напряжение –  220 – 380 В  Площадь рабочей поверхности –  0,17 м2; (565 мм х 320 мм ) ± 3мм Температура рабочей поверхности – не менее 400 ºС Рабочие режимы нагрева: «слабый», «средний», «сильный» Вес не более 27 кг  Для кухонных плит: - «Пищевые технологии»:ПЭП-0,17( 1 конф.); ПЭП-0,34 ( 2 конф); ПЭП-0,51( 3 конф) - «Проммаш»: ПЭ-0,17 ( 1 конф ); ПЭ-0,34 ( 2 конф); ПЭ-0,51(3 конф.);  9. ТЭН-152 220 В ; 1,4 кВт; вес-0.37 кг Для Тэновых к онфорок КЭТ-0,12 ,« Чувашторгтехника»; «Гриль-мастер» «Пищ.технологии»; «Тулаторгтехника», « Rada»  10. ТЭН 181	220 В ; 1,6 кВт ;вес -0,45 кг. Для Тэновых конфорок КЭТ-0,12 ,Чувашторгтехника»;«Пищ.технологии»; «Тулаторгтехника»; « RADA»; «Гриль-мастер»  11. ТЭН-107 220 В ; 0,8 кВт; d-10; вес-0,37 кг. Для Тэновых к онфорок КЭТ-0,12 ,« Чувашторгтехника»; «Гриль-мастер» «Пищ.технологии»; «Тулаторгтехника», «Rada»  12. ТЭН-136 220 В ; 1,7 кВт;d-10; вес-0,47 кг.	 Для Тэновых к онфорок КЭТ-0,12 ,« Чувашторгтехника»; «Гриль-мастер» «Пищ.технологии»; «Тулаторгтехника», RADA»  13. ТЭН-108	220 В ; 0,7 кВт;d-8,5; вес-0,27 кг. Для Тэновых к онфорок КЭТ-0,09/3,« Чувашторгтехника»;   14. ТЭН-127 220 В ; 0,9 кВт; d-8,5;вес-0,31 кг. Для Тэновых к онфорок КЭТ-0,09/3,« Чувашторгтехника»;   15. ТЭН-144	220 В ; 1,2 кВт;d-8,5; вес-0,36 кг. Для Тэновых к онфорок КЭТ-0,09/3,« Чувашторгтехника»;   16. Спираль для элктросвороды	Спираль из нихрома – Х20Н80Н ( GS-40), tº эксплуатации – 1200ºС;  Для сковороды электрической типа СЭП; СЭЧ ; СЭСМ ;СЭС и т. д. и т.п.  17. Спираль КЭ-0,09 ГОСТ 12766.1-90 К электроконфоркам КЭ-0,09  18. Спираль КЭ-0.12 ;КЭС-0,13, ГОСТ 12766.1-90 К электроконфоркам КЭ-0,12  19. Спираль КЭ-0.15, ГОСТ 12766.1-90 К электроконфоркам КЭ-0,15  20, Спираль КЭ-0.17, ГОСТ 12766.1-90 К электроконфоркам КЭ-0,17  21. Спиральс бусами изоляционными КЭ-0,09	Номинальное напряжение – 500 В БФ-1-8/10 ;GS-40; вес -0.38 кг К электроконфоркам КЭ-0,09  22. Спиральс бусами изоляционными КЭ-0,12; КЭС-0,13 Номинальное напряжение – 500 В БФ-1-8/10 ;GS-40; вес -0,54 кг К электроконфоркам КЭ-0,12; КЭС-0,013  23. Спиральс бусами изоляционными КЭ-,015 Номинальное напряжение – 500 В БФ-1-8/10 ;GS-40 ;вес -0,72 кг К электроконфоркам КЭ-0,15  24. Спираль с бусами изоляционными КЭ-0,17	Номинальное напряжение – 500 В БФ-1-8/10 ;GS-40; вес 0,56 К электроконфоркам КЭ-0,17  25. Спираль с бусами изоляционными Номинальное напряжение – 500 В БФ-1-8/10 ; GS-40; вес -).48 кг Для сковороды электрической типа СЭП; СЭЧ; СЭСМ и т. д. и т.п.  26. Буса изоляционная – 100 шт.	Номинальное напряжение – 500 В, БФ-1-8/10 ГОСТ 13.871-78  27. Бусы чешуйчатые (керамика),100 тш.   28. Буса изоляционная – 100 шт	Номинальное напряжение – 500 В БФ-1-6/8 ГОСТ 13.871-78   29. Бусы чешуйчатые (керамика),100 тш.  30. Колодка изоляционная, Номинальное напряжение – 500 В, ГОСТ 13.871-78  31. Колодка керамическая для КЭ-0,09; КЭ-0,12 ;КЭ-0,15  32. Колодка изоляционная, Номинальное напряжение – 500 В, ГОСТ 13.871-78  33. Колодка керамическая для КЭ-0,17  34. Термостат Т-32 М	Датчик -реле температуры от 50 до 300 С Все электроплиты, жарочные и пекарные шкафы, мармиты. сковороды отечественного производства   35. ТПКП -25	Пакетный контактный переключатель -4 –х позиционный Все электроплиты, мармиты , жарочные и пекарные шкафы отечественного производства', 10, '2015-01-21', 'no_photo.png'),
(4, 'Запчасти и оборудование марки SIKOM (Сиком)', 'В нашем офисе вы можете заказать запасные части для оборудования марки sikom (СИКОМ)  Стекло 4174 Привод крыльчатки 4596 Привод дозатора 4595 Привод 4602 Блок ТЭН 4594 Блок управления 1038 Вентилятор 1891 Вентилятор промышленный радиальный 1432 Вертел 4603 Вертел 4604 Барабан 3094 Барабан 4606 Барабан 4625 Барабан 4626 Барабан 4624 Винт Д4М 00.0.03 Винт ПРФ-11 08.0.08 Втулка дозатора Д-4М (плунжерная пара диаметр 30) 4597 Втулка дозатора Д-4М (плунжерная пара диаметр 36) 4598 Клавишный переключатель с подсветкой 1220 Датчик температуры -75 ... 540 С, +/-0.1 С, 1000 Ом 2846 Дверь 4166 Стекло 4151 Стекло 4153 Стекло 4144 Стекло 4169 Стекло 4170 Стекло 4172 Стекло 4173 Стекло 4281 Стекло 4155 Стекло 4160 Стекло 4158 Стекло 4167 Стекло 4168 Стекло 4165 Мотор-редуктор 1781 Диск МК-2.2ЭМ 00.0.03 Защелка магнитная 321 Бункер дозатора 429 Кронштейн ЛМ12-ПРФ Крыльчатка горячего воздуха 1576 Крыльчатка мотор-редуктора 9940 Крыльчатка ПРФ-11.41.1.00 Люлька 4628 Люлька 4629 Люлька МК-1.44 Люлька 4608 Люлька 4627 Микровыключатель 325 Мотор-редуктор 6072 Мотор-редуктор 6001 Мотор-редуктор 6030 Мотор-редуктор 6040 Муфта МК-8 4975 Нож РК-2.1 1664 Опора 1133 Опора подшипника 1810 Опора 1134 Переключатель 3130 Электронная плата 4589 Электронная плата 2905 Платформа Л-11 ПРФ Плунжер (плунжерная пара диаметр 30) 545 Плунжер (плунжерная пара диаметр 36) 546 Поддон 4605 Поддон 4607 Поддон МК-7 Поддон 4621 Поддон 4620 Поддон 4622 Подшипник 2656 Шток дозатора с клапаном в сборе 4600 Привод 4623 Пружина барьерной пластины ПРФ 1826 Резистор ППБ-16Г 33 кОм 1690 Резистор ППБ-16Г 47 кОм 479 Решетка ЭФ-6Н 05.0.01 Ручка двери МК 6012 Ручка 3131 Рычаг ПРФ-11 40.1.00 Светильник 1725 Стекло 4283 Стекло 4152 Стекло 4154 Стекло 4161 Стекло 4157 Стекло 4176 Стекло 4156 Стекло 4147 Стекло 4145 Стекло 4282 Стойка ПРФ-11 46.0.01 Счетчик импульсов 1656 Таймер 3139 Таймер 1654 Датчик-реле температуры 120 С 4827 Датчик-реле температуры 203 С 1026 Датчик-реле температуры 200 С 4823 Датчик-реле температуры 250 С 4828 Датчик-реле температуры 300 С 4825 Датчик-реле температуры 84 С 4824 Датчик-реле температуры 225 С 1027 ТЭН 1169 ТЭН 2804 ТЭН 103/0,8 ( дымогенератора) 4974 ТЭН 586/1 ТЭН 586/2 ТЭН 586/3 ТЭН 1171 ТЭН 1170 ТЭН 589/1 ТЭН 589/2 ТЭН 589/3 ТЭН 1780 ТЭН 2949 ТЭН 598 ТЭН 590 ТЭН 3102 ТЭН 596 ТЭН 2037 ТЭН 596/1 ТЭН 3092 ТЭН 1911 ТЭН 1156 ТЭН 1912 ТЭН 1447 ТЭН 1448 ТЭН 1446 ТЭН 1449 Уплотнитель "Домик" (L=1250 мм) 3573 Фиксатор шампура 4610 Фильтр сетевой ПРФ Фильтр 4601 Шампур 4611 Шестерня РК-2.1 08.1.00 Юла (лев) 4618 Юла (прав) 4617', 2, '2015-01-20', 'no_photo.png');

-- --------------------------------------------------------

--
-- Структура таблицы `creds`
--

CREATE TABLE IF NOT EXISTS `creds` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `discount` varchar(5) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Дамп данных таблицы `creds`
--

INSERT INTO `creds` (`admin_id`, `login`, `password`, `discount`) VALUES
(1, 'administrator', '$2y$10$JZiaLL1.bmp1Kf0SQhJ.auwFax1dcb2wOUA/yTGUqhNQ5KX85RZSa', '3');

-- --------------------------------------------------------

--
-- Структура таблицы `items`
--

CREATE TABLE IF NOT EXISTS `items` (
  `item_id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(32) NOT NULL,
  `title` varchar(128) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `currency` varchar(10) NOT NULL,
  `photo` varchar(64) NOT NULL DEFAULT 'no_photo.png',
  `hit` tinyint(1) NOT NULL,
  `special` tinyint(1) NOT NULL,
  `subcat_id` int(11) NOT NULL,
  `producer_id` int(11) NOT NULL,
  `procurement` tinyint(1) NOT NULL,
  PRIMARY KEY (`item_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Дамп данных таблицы `items`
--

INSERT INTO `items` (`item_id`, `code`, `title`, `description`, `price`, `currency`, `photo`, `hit`, `special`, `subcat_id`, `producer_id`, `procurement`) VALUES
(1, '000.689', 'Конфорка КЭТ-006/2,5(3) Aбат \r\n', 'Редкая 3-х тэновая конфорка, до 2005 года использовалась в мармитах первых блюд ОАО «Чувашторгтехника» (Абат), а также плитах ЭПК-27Ш, ЭПК-47, ЭПК-47ЖШ. Заменена производителем на круглую чугунную конфорку диаметром 220см. На данный момент в серийном производстве не используется. Коммутируется 7-позиционным переключателем Gottak 7LA 870618 или ЕGO  43.27232.000\r\n', '3726.00', 'РУБ', 'no_photo.png', 1, 0, 1, 1, 1),
(2, '000.300', 'Конфорка КЭТ-0,09/2,5(2) Абат \r\n', 'Новая 2-х тэновая конфорка, используется ОАО «Чувашторгтехника» (Абат) с 2009 года, как более дешевая замена 3-х тэновой конфорки, в основном в тендерных плитах 700 серии. Тэны не взаимозаменяемы с 3-х тэновой конфоркой. Коммутируется 4-позиционным переключателем ТПКП-25 или Gottak 7LA 840502 или его аналогом 7LA 840511K.\r\n', '3623.00', 'РУБ', 'no_photo.png', 0, 1, 1, 2, 1),
(3, '000.333', 'Конфорка КЭТ-0,09/2,8(3) Абат\r\n', 'Классическая 3-х тэновая конфорка, используется ОАО «Чувашторгтехника» (Абат) с 2001 года в плитах 700 серии ЭП-2-ЖШ, ЭПК-48. Тэны не взаимозаменяемы с 2-х тэновой конфоркой. Коммутируется 7-позиционным переключателем Gottak 7LA 870618 или ЕGO  43.27232.000\r\n', '3880.00', 'РУБ', 'no_photo.png', 0, 1, 1, 2, 1),
(4, ' 001.635', 'Конфорка КЭС-0,12/2,5 Тула с кронштейном опрокидования\r\n', 'Спиральная конфорка ОАО "Тулаторгтехника", отличается меньшей мощностью чем у классической. Без шпилек. С кронштейном опрокидования. Коммутируется 4-позиционным переключателем ТПКП-25 или Gottak 7LA 840502 или его аналогом 7LA 840511K\r\n', '3726.00', 'РУБ', 'no_photo.png', 0, 0, 2, 3, 1),
(5, '2909041d', 'ПОДДОН ИСПАРИТЕЛЯ (СБ)  СМ110-S, CM114-S, DM110-S, DM114-S (квадр белая решетка), шт\r\n', '', '1013.00', 'РУБ', 'no_photo.png', 0, 1, 4, 3, 1),
(6, '2556019d', 'ПОЛКА БОЛЬШАЯ  650*530  ШХ-0,7   (ПЭП бел.), шт', '', '745.00', 'РУБ', 'no_photo.png', 0, 0, 5, 5, 0),
(7, '2556299d', 'ПОЛКА РЕШЕТ. с огран.CB105-S (ШН-0,5) ( 595*460) (ПЭП бел.), шт\r\n', '', '933.00', 'РУБ', 'no_photo.png', 0, 0, 5, 3, 1),
(8, '2586772d', 'ПОЛКА СТОЛА  325*580 (ПЭПбел), шт', '', '1280.00', 'РУБ', 'no_photo.png', 0, 0, 5, 3, 1),
(9, '001.762', 'Конфорка КЭС-0,12/3,0 Пищевые технологии', 'Спиральная конфорка КЭС-0.12 применяется в плитах «Пищевые технологии».  Имеет дополнительные винты для крепления конфорки в плите. Коммутируется 4-позиционным переключателем ТПКП-25 или Gottak 7LA 840502 или его аналогом 7LA 840511K\r\n', '3105.00', 'РУБ', 'no_photo.png', 0, 0, 2, 4, 1),
(10, '2931001d', 'ТЭН БАТАРЕИ ИСП.  Р=500 ВТ ШН-1,4  (Lпров.=1500, 2штыр нак с колп), шт', '', '1333.00', 'РУБ', 'no_photo.png', 0, 0, 3, 1, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `producers`
--

CREATE TABLE IF NOT EXISTS `producers` (
  `producer_id` int(11) NOT NULL AUTO_INCREMENT,
  `producer` varchar(64) NOT NULL,
  `import` tinyint(1) NOT NULL,
  PRIMARY KEY (`producer_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Дамп данных таблицы `producers`
--

INSERT INTO `producers` (`producer_id`, `producer`, `import`) VALUES
(1, 'ЧУВАШТОРГТЕХНИКА', 0),
(2, 'ПОЛАИР', 1),
(3, 'GASTROMIX', 1),
(4, 'HACKMAN METOS', 1),
(5, 'KOVINASTROJ', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `recents`
--

CREATE TABLE IF NOT EXISTS `recents` (
  `recent_id` int(11) NOT NULL,
  `time` datetime NOT NULL,
  `user_id` varchar(64) NOT NULL,
  `first` varchar(32) NOT NULL,
  `second` varchar(32) NOT NULL,
  `third` varchar(32) NOT NULL,
  `fourth` varchar(32) NOT NULL,
  PRIMARY KEY (`recent_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `recents`
--

INSERT INTO `recents` (`recent_id`, `time`, `user_id`, `first`, `second`, `third`, `fourth`) VALUES
(1, '2015-02-09 00:00:00', '454hyjk566ghjg536', '5', '2', '1', ''),
(2, '2015-02-08 00:00:00', 'jl65fg45hgjh75', '5', '1', '2', ''),
(3, '2015-02-08 00:00:00', 'adsefdsf', '5', '3', '3', '3');

-- --------------------------------------------------------

--
-- Структура таблицы `subcats`
--

CREATE TABLE IF NOT EXISTS `subcats` (
  `subcat_id` int(11) NOT NULL AUTO_INCREMENT,
  `subcat` varchar(64) NOT NULL,
  `category` varchar(32) NOT NULL,
  PRIMARY KEY (`subcat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Дамп данных таблицы `subcats`
--

INSERT INTO `subcats` (`subcat_id`, `subcat`, `category`) VALUES
(1, 'Плиты', 'Механическое_ru'),
(2, 'Плиты', 'Тепловое_ru'),
(3, 'Батареи', 'Холодильное_ru'),
(4, 'Испарители', 'Посудомоечное_ru'),
(5, 'Полки', 'Механическое_en');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(64) NOT NULL,
  `company` varchar(64) NOT NULL,
  `email` varchar(64) NOT NULL,
  `phone` varchar(32) NOT NULL,
  `activity` varchar(32) NOT NULL,
  `password` varchar(128) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
