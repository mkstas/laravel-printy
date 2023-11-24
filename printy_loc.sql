-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 27, 2022 at 11:23 PM
-- Server version: 10.5.15-MariaDB
-- PHP Version: 8.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `printy.loc`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Лазерный принтер', '2022-06-03 19:07:25', '2022-06-03 19:07:25'),
(2, 'Струйный принтер', '2022-06-03 19:07:25', '2022-06-03 19:07:25'),
(3, 'Термопринтер', '2022-06-03 19:09:29', '2022-06-03 19:09:29');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(9, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(10, '2022_06_03_183434_create_products_table', 1),
(11, '2022_06_03_184734_create_categories_table', 1),
(14, '2022_06_24_191713_create_orders_table', 2),
(15, '2022_06_25_105348_create_order_product_table', 3),
(17, '2022_06_26_133305_update_order_product_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `status`, `name`, `phone`, `email`, `created_at`, `updated_at`) VALUES
(3, 1, 'Lorem', '89048729834', 'asdf@km.com', '2022-06-26 14:03:39', '2022-06-26 14:53:12'),
(4, 1, 'Lorem', '89048729834', 'asdf@km.com', '2022-06-26 14:55:52', '2022-06-26 14:56:33'),
(5, 1, 'Никита', '80040030000', NULL, '2022-06-26 15:05:00', '2022-06-26 15:05:21'),
(6, 1, 'Lorem', '80040030000', 'admin@mail.com', '2022-06-26 15:05:54', '2022-06-26 15:17:07'),
(7, 1, 'Влад', '80313456245', NULL, '2022-06-27 05:00:38', '2022-06-27 05:00:56'),
(8, 1, 'Lorem', '80313456245', NULL, '2022-06-27 11:41:00', '2022-06-27 11:47:36');

-- --------------------------------------------------------

--
-- Table structure for table `order_product`
--

CREATE TABLE `order_product` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `count` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_product`
--

INSERT INTO `order_product` (`id`, `order_id`, `product_id`, `count`, `created_at`, `updated_at`) VALUES
(4, 3, 8, 1, '2022-06-26 14:08:39', '2022-06-26 14:08:39'),
(5, 4, 7, 2, '2022-06-26 14:55:52', '2022-06-26 14:55:55'),
(6, 4, 5, 1, '2022-06-26 14:56:24', '2022-06-26 14:56:24'),
(7, 5, 6, 1, '2022-06-26 15:05:00', '2022-06-26 15:05:00'),
(9, 7, 8, 2, '2022-06-27 05:00:38', '2022-06-27 05:00:42'),
(10, 8, 7, 2, '2022-06-27 11:41:00', '2022-06-27 11:41:03'),
(11, 8, 1, 1, '2022-06-27 11:41:08', '2022-06-27 11:41:08');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `year_of_production` int(4) NOT NULL,
  `price` double NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `name`, `image`, `model`, `description`, `year_of_production`, `price`, `created_at`, `updated_at`) VALUES
(1, 1, 'Canon', 'canon_i_sensys_lbp6030b.webp', 'i-SENSEYS LBP6030B', 'Принтер Canon i-SENSYS LBP6030B поставляется в черном цвете. Прибор легко помещается на вашем столе и идеально подходит для домашнего использования. Устройство i-SENSYS LBP6030B включается в работу в нужный момент и быстро выходит из спящего режима. Время печати первого листа составляет всего 7.8 секунды, а скорость профессионального лазерного принтера – 18 страниц в минуту. Высокое разрешение до 2400x600 точек на дюйм и функция автоматической фильтрации изображений позволяют создавать документы с четким текстом и подробной графикой. Благодаря механизму Canon принтер i-SENSYS LBP6030B не производит шума в режиме ожидания, а работает исключительно тихо.', 2020, 16999, '2022-06-03 19:13:24', '2022-06-03 19:13:24'),
(2, 1, 'Brother', 'brother_hl_1202r.webp', 'HL-1202R', 'Принтер лазерный Brother HL-1202R с черным корпусом осуществляет ч/б печать со скоростью 20 стр/мин и используется для оснащения офиса. Первый оттиск с разрешением 2400x600 dpi выходит через 10 секунд. Принтер может работать при максимальном формате печати A4. Оборудование совместимо с системами Linux и MAC OS. Уровень шума при работе равен 51 дБ, а мощность составляет 380 Вт.\nМодель Brother HL-1202R совместима с картриджами Brother TN-1095, обладающих рабочим ресурсом 1500 страниц, чего достаточно для месячной работы в офисе. Допускается печать на обычной и бумаге из вторсырья с плотностью 65-105 г/м2. Принтер оснащен выходным лотком на 50 листов и емкостью подачи на 150 листов. Предусматривается наличие USB-интерфейса и драйвера для OS Windows. Оборудование весит 4.5 кг и обладает габаритами 23.8x34x18.9 см.', 2019, 14999, '2022-06-03 19:31:47', '2022-06-03 19:31:47'),
(3, 1, 'Pantum', 'pantum_p2516.webp', 'P2516', 'Принтер лазерный Pantum P2516 – функциональное домашнее оборудование с лазерной технологией черно-белой печати. Прибор действует со скоростью 22 стр/мин, создавая четкий оттиск на листах A4. Для работы используется фирменный картридж, объема которого хватит на 1600 страниц.\r\nМодель Pantum P2516 оснащена выходным лотком на 100 страниц и емкостью для подачи 150 страниц. Оборудование способно печатать на обычной, толстой и тонкой бумаге, карточках, этикетках и пленке. Принтер совместим с тремя ОС, дополнен стандартным интерфейсом USB 2.0.', 2022, 8599, '2022-06-03 19:31:47', '2022-06-03 19:31:47'),
(4, 2, 'Canon', 'canon_pixma_ts304.webp', 'PIXMA TS304', 'Принтер струйный Canon PIXMA TS304 предназначен для черно-белой и цветной печати. Устройство обладает достойной производительностью: скорость черно-белой печати составляет 7.7, а цветной – 4 стр./мин. Максимальное разрешение для обоих видов составляет 4800x1200 dpi. Также устройство может печатать фотографии, скорость для образца размером 10х15 см составляет 65 с. Принтер позволяет также сканировать и печатать со смартфона и других устройств с использованием Wi-Fi.\r\nCanon PIXMA TS304 поддерживает технологии мобильной печати и имеет интерфейсы Hi-Speed USB (порт B), Bluetooth, Wi-Fi. Емкость подачи принтера составляет 60 стр.', 2019, 11899, '2022-06-03 19:43:31', '2022-06-03 19:43:31'),
(5, 2, 'HP', 'hp_officejet_pro_6230.webp', 'OfficeJet Pro 6230', 'Принтер HP Officejet Pro 6230 - оптимальный выбор для ценителей качественной печати документов. Гармонично впишется в Ваш дом или офис. Максимальная производительность принтера составляет 15 000 страниц в месяц, а картриджа - до 825 цветных и 200 черно-белых страниц. 4-х цветная печать позволяет воспроизводить не только текстовые документы, но и замечательные фотографии, этикетки, конверты профессионального качества.\r\nВозможно использование матовой и глянцевой бумаги. Максимальное разрешение для цветной печати составляет 600x1200 dpi, что весьма солидно. Вы сможете существенно сэкономить бумагу и время, благодаря функции автоматической двусторонней печати. Подключайте HP Officejet Pro 6230 посредством Wi-Fi, Ethernet и приступайте к работе без использования ПК. ЖК-панель сообщит Вам необходимые данные о работе устройства и облегчит управление.', 2021, 12999, '2022-06-03 19:43:31', '2022-06-03 19:43:31'),
(6, 2, 'Canon', 'canon_pixma_gm2040.webp', 'PIXMA GM2040', 'Принтер струйный Canon PIXMA GM2040 имеет компактный корпус черного цвета, что делает его подходящим для настольного размещения. По своим техническим параметрам принтер удобен для домашнего использования. Скорость печати составляет 13 стр/мин, а максимальное разрешение - 600x1200 dpi. В принтере используются черные чернила, что обеспечивает черно-белую печать. Причем система непрерывной подачи чернил предусматривает возможность установки больших емкостей, за счет чего принтер становится более экономичным.\r\nДля печати в принтере струйном Canon PIXMA GM2040 используется бумага формата А4, плотностью 64-105 г/м2. Чтобы быстро печатать объемные документы, в принтере предусмотрена функция автоматической двусторонней печати. Принтер совместим с большинством операционных систем, что позволяет легко подключать его к компьютеру или ноутбуку. Для этого могут использоваться интерфейсы Ethernet (RJ45), USB, Wi-Fi. В комплекте с принтером имеются 3 емкости с чернилами, диск с ПО и кабель питания.', 2022, 18299, '2022-06-03 19:47:06', '2022-06-03 19:47:06'),
(7, 3, 'SPACE', 'space_x_22dt_kingkong_4.jpg', 'X-22DT KingKong', 'SPACE X-22DT KingKong – это компактный и производительный термопринтер этикеток с уникальным дизайном, который подойдет для маркировки и печати ценников. Принтер предназначен для применения в розничной торговле и гостинично-ресторанном бизнесе (HoReCa).', 2019, 6650, NULL, NULL),
(8, 3, 'Атол', 'atol_bp21.jpg', 'BP21', 'Принтер этикеток Атол BP21 – это самый бюджетный аппарат начального класса в ассортименте компании производителя. Модель применяется для маркировки продукции в розничной торговле, для печати бирок на одежду в бутиках, а также для маркировки ТМЦ в офисе, на складе или лаборатории.', 2020, 7030, NULL, NULL),
(9, 3, 'Атол', 'atol_bp41.jpeg', 'BP41', 'АТОЛ BP41 – термопринтер этикеток для применения в магазинах одежды и обуви, небольших супермаркетах, курьерских службах и на складах. Модель также используется интернет-магазинами для маркировки отправлений в службы доставки и упрощает инвентаризацию товаров на складе и в торговом зале.\r\n\r\nАТОЛ ВР41 – термопринтер по доступной цене. Для печати на принтере используются самые простые термоэтикетки, которые всегда есть в продаже. Принтер печатает одну большую этикетку 10 х 30 см всего за 2,5 секунды и экономит деньги и время.', 2022, 7670, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_product`
--
ALTER TABLE `order_product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `order_product`
--
ALTER TABLE `order_product`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `order_product`
--
ALTER TABLE `order_product`
  ADD CONSTRAINT `order_product_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`),
  ADD CONSTRAINT `order_product_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
