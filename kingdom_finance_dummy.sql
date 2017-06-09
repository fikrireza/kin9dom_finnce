-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2017 at 05:40 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kingdom_finance`
--

-- --------------------------------------------------------

--
-- Table structure for table `amd_article`
--

CREATE TABLE `amd_article` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_article_category` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `short_description` text COLLATE utf8mb4_unicode_ci,
  `image` text COLLATE utf8mb4_unicode_ci,
  `priority` int(11) NOT NULL DEFAULT '0',
  `meta_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `meta_image` text COLLATE utf8mb4_unicode_ci,
  `meta_url` text COLLATE utf8mb4_unicode_ci,
  `meta_keyword` text COLLATE utf8mb4_unicode_ci,
  `actor` int(11) NOT NULL,
  `flag_publish` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `amd_article`
--

INSERT INTO `amd_article` (`id`, `id_article_category`, `name`, `slug`, `description`, `short_description`, `image`, `priority`, `meta_title`, `meta_description`, `meta_image`, `meta_url`, `meta_keyword`, `actor`, `flag_publish`, `created_at`, `updated_at`) VALUES
(3, 2, 'Iste vitae debitis eum veritatis facere.', 'sed-ea-expedita-qui-vero', '<p>Maxime ex dolores ut et eveniet sint. Sed et doloribus debitis sint sed nisi accusantium. Quod modi qui cum in. Quia quasi ut dolorem et deleniti. Explicabo occaecati sint voluptatum optio vitae nulla.</p>', '<p>Accusantium consequuntur culpa perferendis porro rerum. Neque molestiae magni expedita quod similique sint.</p>', 'amadeo/source/48d87e143eb64006821a6ba0e0ace4b0.jpg', 0, NULL, NULL, NULL, NULL, NULL, 0, 1, '2017-06-08 00:00:00', '2017-06-08 00:00:00'),
(4, 3, 'Id repellendus beatae fugit porro sint alias.', 'aliquid-modi-recusandae-et-necessitatibus', '<p>Placeat magni harum quod et. Minima et est doloribus. Dolor inventore earum modi non recusandae. Vitae a quia amet totam fuga. Cumque in ut exercitationem ea eveniet voluptas aut. Perspiciatis quia dolore provident expedita illo explicabo excepturi. Vel temporibus ducimus quo et. Aliquid commodi labore aut.</p>', '<p>Eos magni aperiam sint dicta natus. Voluptas possimus et provident natus sint tempore magni.</p>', 'amadeo/source/0b0b3f95a3ffb52f9a4f95d560e59dca.jpg', 0, NULL, NULL, NULL, NULL, NULL, 0, 1, '2017-06-08 00:00:00', '2017-06-08 00:00:00'),
(5, 1, 'Quos voluptas non repellat veniam eaque quaerat.', 'culpa-illum-et-assumenda', '<p>Libero rem quo deserunt commodi. Fuga sint vitae et magni error consectetur. Quia alias dolor possimus deserunt fuga rem dicta. Et repudiandae ratione non. Quis voluptatem non non nihil omnis fuga neque cum.</p>', '<p>Excepturi veritatis quibusdam excepturi modi et.</p>', 'amadeo/source/11b9976dd59ad39d4a626677606a051c.jpg', 0, NULL, NULL, NULL, NULL, NULL, 0, 1, '2017-06-08 00:00:00', '2017-06-08 00:00:00'),
(6, 3, 'Sit fugit facilis qui quaerat beatae deleniti.', 'sunt-velit-et-facere-saepe-et', '<p>Vel qui neque ipsa quam fugit exercitationem. Et iusto qui est iure architecto sed at. Sequi doloremque eaque accusantium aut autem facere. Minus blanditiis quaerat quidem praesentium non velit. Rerum dolor harum molestiae atque optio voluptatibus.</p>', '<p>Consequatur occaecati consequatur fugiat mollitia eius qui. Doloribus rerum et enim et.</p>', 'amadeo/source/85fd39b36e0fc105b1d375eed329789a.jpg', 0, NULL, NULL, NULL, NULL, NULL, 0, 1, '2017-06-08 00:00:00', '2017-06-08 00:00:00'),
(7, 4, 'Dolorem reiciendis placeat aliquam nihil.', 'est-ducimus-consequuntur-error-facilis', '<p>Sed suscipit sunt dolorem similique et. Voluptate consectetur aut soluta voluptatem. Natus quo cupiditate doloremque. Porro officia ut nobis qui vel consequatur. Rerum reprehenderit minima ducimus soluta incidunt. Facere tenetur enim veritatis laudantium nisi. Aut reprehenderit quod nam dolores consequatur soluta.</p>', '<p>Adipisci repudiandae nostrum voluptas quae. Earum optio aut eum unde sit.</p>', 'amadeo/source/9540a51bebd7a240f123c3bd0e9b8430.jpg', 0, NULL, NULL, NULL, NULL, NULL, 0, 1, '2017-06-08 00:00:00', '2017-06-08 00:00:00'),
(8, 4, 'Et dolor dignissimos et.', 'est-impedit-nostrum-mollitia-incidunt-sunt-eum', '<p>Nulla modi quo quisquam voluptatibus recusandae. Esse iure quis ullam. Quis eum aut nihil odit repellat consequuntur. Soluta cupiditate vel et laboriosam. Et provident quia qui sit non laborum.</p>', '<p>Natus deserunt quod modi voluptatibus et. Maiores minima vel ad id voluptatum.</p>', 'amadeo/source/32e391107389e942910cb49d02317ce8.jpg', 0, NULL, NULL, NULL, NULL, NULL, 0, 1, '2017-06-08 00:00:00', '2017-06-08 00:00:00'),
(9, 2, 'Quisquam quae modi alias voluptatem cupiditate.', 'et-ratione-provident-accusantium-et-at-voluptas-veritatis', '<p>Eos sequi sit molestiae. Eveniet non excepturi sequi cumque porro. Illo blanditiis labore debitis distinctio enim pariatur. Ut nemo quas delectus ad culpa aliquid.</p>', '<p>Labore ducimus facere pariatur.</p>', 'amadeo/source/549ddcb9eed79a02a1dab8e6db8ec598.jpg', 0, NULL, NULL, NULL, NULL, NULL, 0, 1, '2017-06-08 00:00:00', '2017-06-08 00:00:00'),
(10, 3, 'Quis quos quia odit voluptatem.', 'non-quaerat-dolores-voluptatum-autem-temporibus-vel-voluptatem', '<p>Dolore impedit non est eveniet voluptas. Id doloribus dolor expedita laboriosam accusamus et delectus. Harum cumque eveniet voluptatum et soluta accusamus doloremque. Tenetur quaerat nemo animi qui eum dicta neque. Illum qui et eius et sed modi. Quisquam atque corporis doloremque iusto accusantium eius aut. Error repellat et itaque excepturi.</p>', '<p>Voluptatem doloribus magnam voluptatem et sit. Quos esse rerum expedita molestias.</p>', 'amadeo/source/67ca04ff2ccba6985a662cdfcd89d731.jpg', 0, NULL, NULL, NULL, NULL, NULL, 0, 1, '2017-06-08 00:00:00', '2017-06-08 00:00:00'),
(11, 2, 'Est non dolore expedita magnam aut.', 'sit-mollitia-voluptates-et', '<p>Impedit tenetur ut dicta laudantium. Sequi et iusto iusto dolorem vitae eius similique ut. Dolore dolores commodi nobis velit enim. Vero ea ut corporis ullam minima. Debitis sunt quasi culpa ipsum velit quo. Dolorum omnis eum sit facilis laboriosam sed. Magnam atque sunt ut unde enim dolore amet.</p>', '<p>Non totam veniam id rerum autem eos dicta.</p>', 'amadeo/source/4340e73e7607e80fcc5ce0f69e5271cf.jpg', 0, NULL, NULL, NULL, NULL, NULL, 0, 1, '2017-06-08 00:00:00', '2017-06-08 00:00:00'),
(12, 4, 'Quo doloribus maiores doloremque occaecati ea iusto qui placeat.', 'debitis-facilis-rerum-qui-nihil', '<p>Et pariatur eos neque qui maxime harum dolor. Accusantium voluptatum temporibus quam corrupti facere magnam. Architecto quis porro quam sed at voluptate. Non voluptatem earum perferendis sit et. Corporis sunt delectus officiis quia eaque. Qui aspernatur corporis reiciendis aut.</p>', '<p>Cupiditate alias magnam fuga voluptas sit impedit fugiat tenetur. Nemo quia debitis expedita maiores vel.</p>', 'amadeo/source/3a876afd3c3564be19c11cbc2d24d739.jpg', 0, NULL, NULL, NULL, NULL, NULL, 0, 1, '2017-06-08 00:00:00', '2017-06-08 00:00:00'),
(13, 4, 'Voluptatem est ea nihil dicta commodi reiciendis eos alias.', 'sed-excepturi-dolor-impedit-fuga', '<p>Qui nisi natus fugit ea ab doloribus. Soluta et consequatur expedita qui. Et atque quia incidunt quae numquam ab nam. Voluptatem a et sequi.</p>', '<p>Repudiandae officia velit omnis ducimus cumque voluptas dolor. Architecto ut repudiandae nobis officiis fugit.</p>', 'amadeo/source/b2ba8898ab9ae651358becbdc156c28b.jpg', 0, NULL, NULL, NULL, NULL, NULL, 0, 1, '2017-06-08 00:00:01', '2017-06-08 00:00:01'),
(14, 3, 'Dolor qui sit modi accusamus.', 'incidunt-ut-sint-occaecati-molestiae', '<p>Voluptates nulla doloremque saepe porro est odio. Corrupti necessitatibus rerum in saepe doloremque vel. Ipsam culpa cum accusantium. Delectus dolorum illum aut dolorem itaque.</p>', '<p>Perspiciatis doloremque sed voluptatum ea. Sunt impedit veniam omnis reprehenderit.</p>', 'amadeo/source/94c2962d5461e5d435c452a7a7ade292.jpg', 0, NULL, NULL, NULL, NULL, NULL, 0, 1, '2017-06-08 00:00:01', '2017-06-08 00:00:01'),
(15, 3, 'Harum eius occaecati et laudantium praesentium.', 'quo-nisi-nisi-officiis-delectus-reiciendis', '<p>Est voluptate quae fuga ullam ea quasi. Repellat est officia autem. Enim maxime sit et unde enim. Suscipit ratione laboriosam placeat quibusdam dolorum neque est. Dolorem dolorem quos suscipit aut corporis qui et. Eaque aut doloribus ullam officiis. Et similique rerum earum mollitia.</p>', '<p>Vitae optio dolor delectus quia.</p>', 'amadeo/source/be4222f76c3643a89dd023cea2f41154.jpg', 0, NULL, NULL, NULL, NULL, NULL, 0, 1, '2017-06-08 00:00:01', '2017-06-08 00:00:01'),
(16, 2, 'Consequatur ratione quidem eaque qui doloremque.', 'sed-mollitia-inventore-rerum', '<p>Dolorum quis non corporis nihil dicta distinctio quo. Amet explicabo qui ut quod repellat est impedit. Voluptatem non et nobis tempora cumque distinctio. Impedit ea facere error. Aut nemo voluptatum quas. Porro fuga animi doloremque vitae sequi.</p>', '<p>Voluptas molestiae sed veritatis quia minima saepe hic. Voluptate quibusdam dicta minus quam eos.</p>', 'amadeo/source/c9aa05d25e523e425d3acfe733477e72.jpg', 0, NULL, NULL, NULL, NULL, NULL, 0, 1, '2017-06-08 00:00:01', '2017-06-08 00:00:01'),
(17, 4, 'Error dolor ut sunt modi culpa qui.', 'repellendus-et-nostrum-praesentium-assumenda', '<p>Et id et ut qui. Sunt fugit sed veritatis ratione porro sint. Est ratione voluptatem labore deserunt. Et non expedita quo velit sit aut. Id impedit sint a est perspiciatis. Voluptatem voluptatem voluptates quaerat id. Quam incidunt dolorem porro adipisci deleniti.</p>', '<p>Culpa quis magnam qui molestias nihil magnam itaque.</p>', 'amadeo/source/a44490297d29dd0d6a4d6488868bfc94.jpg', 0, NULL, NULL, NULL, NULL, NULL, 0, 1, '2017-06-08 00:00:01', '2017-06-08 00:00:01'),
(18, 2, 'Non nisi tempora adipisci dolor.', 'officiis-eum-nobis-excepturi-fugit-odio-in-et', '<p>Dolore ut velit et assumenda mollitia. Nobis quam voluptas sed ut. Sapiente est facilis debitis eum quas fugit. Omnis aut magni laborum iusto.</p>', '<p>Eos quam et facilis dolor a aspernatur.</p>', 'amadeo/source/96e73e964890cf7a3d957f5b8cbb6621.jpg', 0, NULL, NULL, NULL, NULL, NULL, 0, 1, '2017-06-08 00:00:01', '2017-06-08 00:00:01'),
(19, 3, 'Sunt asperiores facilis quisquam quis facere.', 'sed-vero-soluta-similique-dicta', '<p>Voluptatem impedit voluptatem quasi odio impedit. Sed officiis non doloremque modi in nihil unde. Ex expedita aut provident dolore harum. Numquam rerum iusto voluptas dolorem sed eum. Facere at id maxime distinctio. Impedit et laborum ut laboriosam dolorum ex veritatis. Laborum sit adipisci ut.</p>', '<p>Animi qui et magnam assumenda.</p>', 'amadeo/source/4b37c0804f18dbaea3cb703928fcea32.jpg', 0, NULL, NULL, NULL, NULL, NULL, 0, 1, '2017-06-08 00:00:01', '2017-06-08 00:00:01'),
(20, 4, 'Cum placeat voluptas pariatur unde ipsam.', 'qui-et-unde-omnis-eum-aut', '<p>Illum reprehenderit saepe fuga laborum. Cupiditate exercitationem omnis quam corporis qui sint. Numquam delectus at consequatur rerum et nisi beatae. Qui ipsum sint delectus sunt enim. Ad rerum perferendis voluptatibus aut ipsum occaecati repudiandae. Voluptatibus atque optio officiis ratione corrupti.</p>', '<p>Voluptas ullam harum sunt deserunt qui sunt est. Corrupti voluptatem soluta iusto est non voluptatem veniam.</p>', 'amadeo/source/8670af8fe853e4b8a58b39aa8a1cd9d7.jpg', 0, NULL, NULL, NULL, NULL, NULL, 0, 1, '2017-06-08 00:00:01', '2017-06-08 00:00:01'),
(21, 4, 'Modi maiores recusandae qui repudiandae aspernatur recusandae voluptatum.', 'aliquid-sed-id-et-saepe', '<p>Est cupiditate enim consequuntur est placeat totam error eveniet. Cupiditate maiores dolores autem nihil temporibus laborum. Nisi animi unde culpa eligendi quis hic dolor. Id quisquam sint harum quis quo voluptas suscipit. Architecto fugit ut veniam velit sint necessitatibus ex. Aut veritatis voluptatem nihil expedita maxime nihil voluptatibus.</p>', '<p>Laborum fuga soluta iure itaque nulla.</p>', 'amadeo/source/f10d5d535d610cfdea1eb3155b5829c7.jpg', 0, NULL, NULL, NULL, NULL, NULL, 0, 1, '2017-06-08 00:00:01', '2017-06-08 00:00:01'),
(22, 4, 'Aut eum ab aliquid dolorem.', 'temporibus-necessitatibus-ut-minima-aut', '<p>Aut qui placeat voluptates et. Amet autem dolore dolor quam omnis maxime quod. Explicabo dolorem nihil reiciendis explicabo. Sed inventore inventore expedita. Odit impedit et inventore sapiente totam sequi. Itaque beatae iusto quod. Sed perspiciatis est impedit hic aliquid.</p>', '<p>Nihil reiciendis quia explicabo eos et dignissimos omnis.</p>', 'amadeo/source/b8f618723d78a6d64c5ab51cbf7085d3.jpg', 0, NULL, NULL, NULL, NULL, NULL, 0, 1, '2017-06-08 00:00:01', '2017-06-08 00:00:01'),
(23, 3, 'Magnam est nihil et occaecati eos.', 'aut-quaerat-delectus-aut-veritatis', '<p>Occaecati molestiae eius a sint est quidem et. Odio autem sit et vero facilis cumque quas. Velit sit minus consequuntur earum commodi. Ipsum maiores maxime ipsa maxime. Vel est qui facere necessitatibus velit quisquam.</p>', '<p>Unde explicabo possimus qui vel a ut. Eius non nostrum eum eum.</p>', 'amadeo/source/30a031c201da8510adf8fc7a6f75506b.jpg', 0, NULL, NULL, NULL, NULL, NULL, 0, 1, '2017-06-08 00:00:01', '2017-06-08 00:00:01'),
(24, 1, 'Dolorum accusamus ut eum laudantium.', 'qui-est-necessitatibus-quas-autem-doloribus-eveniet', '<p>Voluptatem numquam velit eaque. Nulla vel dolorem expedita placeat debitis est. Soluta dignissimos placeat sed ea distinctio error veritatis. Ut maiores tempora ut. Corporis nisi consequatur autem vero est. Suscipit debitis officia accusantium omnis dolores.</p>', '<p>Consequuntur ratione placeat aut corporis magni autem recusandae non.</p>', 'amadeo/source/cf195232ed10ada697cc5d0d061da17d.jpg', 0, NULL, NULL, NULL, NULL, NULL, 0, 1, '2017-06-08 00:00:01', '2017-06-08 00:00:01'),
(25, 2, 'Doloribus totam aut labore fugit recusandae nisi asperiores.', 'dolor-in-tempora-illo-facere-et-nobis-dolorem', '<p>Cupiditate enim magni incidunt et. Eum ut commodi ut commodi sint eos beatae. Consequatur quia similique quae ratione distinctio. Et aliquam sit vero a.</p>', '<p>Numquam voluptas consectetur enim id.</p>', 'amadeo/source/0b69df2d62f22d58f9f6aebb91f9d942.jpg', 0, NULL, NULL, NULL, NULL, NULL, 0, 1, '2017-06-08 00:00:01', '2017-06-08 00:00:01'),
(26, 4, 'Harum officiis et mollitia culpa maiores nihil ut.', 'in-tempora-assumenda-quibusdam-qui-perferendis-aut', '<p>Sit ipsum blanditiis a architecto. Debitis soluta vel cum quibusdam temporibus voluptatum. Iusto quam sunt aperiam pariatur. Voluptas rem consequatur est ut. Tenetur vero similique in explicabo aut.</p>', '<p>Officia dolorum hic nulla ipsam et vitae. Ut laboriosam non ut veritatis quasi eum hic.</p>', 'amadeo/source/b04b91aa7548774e684fe3e425d5968a.jpg', 0, NULL, NULL, NULL, NULL, NULL, 0, 1, '2017-06-08 00:00:01', '2017-06-08 00:00:01'),
(27, 1, 'Ut quos mollitia quis laudantium quam.', 'aut-aut-et-ipsam-soluta-fugit-voluptas', '<p>Unde praesentium omnis adipisci alias. Voluptatibus aut et doloribus qui quos. Dolores est iusto omnis quia quam dolorem et. Dignissimos tenetur et sunt sed. Qui dolorem eum quo dignissimos qui. Numquam dignissimos et totam ullam ipsa qui neque similique.</p>', '<p>Aspernatur hic ab possimus.</p>', 'amadeo/source/36d3fb950063ada29369c435c7ad70cb.jpg', 0, NULL, NULL, NULL, NULL, NULL, 0, 1, '2017-06-08 00:00:01', '2017-06-08 00:00:01'),
(28, 1, 'Perspiciatis et porro occaecati quis deserunt.', 'enim-voluptatum-iste-ipsam-in-nostrum-sint-dolor-dolor', '<p>Dolores laudantium voluptatem praesentium. Ut sint expedita a cumque repudiandae eos officia. Sit natus saepe et odit consequatur veritatis. Explicabo quis doloremque et laboriosam provident. Quaerat sit sit voluptas voluptate eum. Laudantium commodi debitis reiciendis eius. Sit ea soluta hic dolores labore in quisquam.</p>', '<p>Vel distinctio eveniet fuga incidunt omnis.</p>', 'amadeo/source/4972dde58d37bda21c85646faf1729d2.jpg', 0, NULL, NULL, NULL, NULL, NULL, 0, 1, '2017-06-08 00:00:01', '2017-06-08 00:00:01'),
(29, 1, 'Illo fugit sit voluptatem.', 'sit-voluptate-maxime-atque', '<p>Nihil sed voluptas ut harum ratione. Et ut autem libero fugiat sit cumque voluptas. Nihil minus rerum illo sint corrupti. Numquam quidem perspiciatis deserunt placeat autem voluptatem. Soluta incidunt ut maiores esse. Pariatur veniam cumque consequatur ipsum omnis quam omnis.</p>', '<p>Voluptatum et qui et qui repellat facilis dolor quia.</p>', 'amadeo/source/80baacff22f3403f3db4bea19e2c4e7b.jpg', 0, NULL, NULL, NULL, NULL, NULL, 0, 1, '2017-06-08 00:00:01', '2017-06-08 00:00:01'),
(30, 3, 'Voluptatem itaque nihil consectetur deleniti ea quas.', 'voluptatem-est-iusto-et-facere-dolorum-repellat-quidem', '<p>Corporis rerum ad nihil mollitia sint in. Quia officia nihil consequatur quasi maxime. Est dolor placeat voluptatem vel cupiditate aut doloremque qui. Et eum consequatur adipisci consectetur vel. Excepturi nihil animi nihil deserunt atque eaque. Consequuntur et sunt et laborum aliquam voluptatum. Et unde voluptas suscipit nihil. Quis exercitationem et ut labore voluptas esse beatae.</p>', '<p>Eligendi et libero voluptatem nisi quidem veritatis autem sed. Odit ut in voluptatem veniam repellat pariatur.</p>', 'amadeo/source/b8a556006d9f44d90ba08ca53c85897a.jpg', 0, NULL, NULL, NULL, NULL, NULL, 0, 1, '2017-06-08 00:00:01', '2017-06-08 00:00:01'),
(31, 4, 'Animi rerum corrupti nam debitis maiores molestiae eos dignissimos.', 'et-et-quaerat-id-quod-numquam', '<p>Alias est sequi facere et ex consequatur nostrum suscipit. Id voluptates velit quo aut. Aut vero ducimus sequi ut. Expedita rerum sequi enim iusto sit. Vero id sit enim quo corporis aut molestias. Velit cum ut mollitia autem dolor nemo. Sint fuga doloremque voluptatem.</p>', '<p>Reiciendis et repellat nobis dolor.</p>', 'amadeo/source/8819fd8a853bc380f06d36feb0e29552.jpg', 0, NULL, NULL, NULL, NULL, NULL, 0, 1, '2017-06-08 00:00:01', '2017-06-08 00:00:01'),
(32, 4, 'Vel nihil voluptatem qui qui labore eligendi nostrum.', 'enim-dignissimos-quasi-animi-voluptatibus', '<p>Modi dignissimos delectus nulla vel quo itaque quis. Est reiciendis sequi dolores nulla tenetur ut culpa. Voluptatem non numquam enim maxime nulla. Voluptatibus soluta nam optio dolor et quia voluptas autem. Libero in sed sunt voluptatum. Vel qui mollitia et labore.</p>', '<p>Quia itaque dolor itaque nihil.</p>', 'amadeo/source/2b42ad92ed6fd3a4c617cd6112b6bd97.jpg', 0, NULL, NULL, NULL, NULL, NULL, 0, 1, '2017-06-08 00:00:01', '2017-06-08 00:00:01'),
(33, 2, 'In cumque et saepe.', 'molestias-est-sed-libero-consequatur-omnis', '<p>Laboriosam et et ut explicabo voluptas perspiciatis. Et magnam error et quo blanditiis nemo eos architecto. Ad consectetur occaecati perspiciatis odio debitis. Autem aut debitis ut repudiandae et. Vel ea atque possimus. Non accusamus nihil facere velit dolorum officia. Ratione et provident laborum similique voluptas.</p>', '<p>Repudiandae voluptatem itaque dolor explicabo enim.</p>', 'amadeo/source/0b4bb734f67aa093f21d3309ca8f08c3.jpg', 0, NULL, NULL, NULL, NULL, NULL, 0, 1, '2017-06-08 00:00:01', '2017-06-08 00:00:01'),
(34, 3, 'Iusto enim et magni animi aspernatur beatae qui.', 'est-sit-quae-voluptatem-et-tempore-et-qui-qui', '<p>Provident assumenda dolore labore illo. Labore ea cupiditate assumenda qui illum vel suscipit alias. Expedita eaque debitis quis officiis ipsam cumque molestias. Sit aut dolor minima voluptates veniam. Distinctio sed qui rerum. Dolorem vero optio laborum doloremque.</p>', '<p>Debitis animi fugiat consequuntur aperiam quidem. Sit omnis pariatur ad ab.</p>', 'amadeo/source/aa66558d7ce6720b11bdb116f3921651.jpg', 0, NULL, NULL, NULL, NULL, NULL, 0, 1, '2017-06-08 00:00:01', '2017-06-08 00:00:01'),
(35, 4, 'Quasi voluptatem eos eaque dicta quae ad.', 'occaecati-nam-natus-libero-et-ipsum-amet', '<p>Pariatur et laboriosam laboriosam hic recusandae odio. Quaerat doloremque ipsam debitis. Culpa ea sint rerum voluptatem fugiat laborum. Id voluptatem culpa non aut qui ut. Laborum odit quia laboriosam ipsam officia est.</p>', '<p>Voluptas velit eos sit et tenetur consequatur.</p>', 'amadeo/source/40b6ae6c54a29fea09d116a05a759e7c.jpg', 0, NULL, NULL, NULL, NULL, NULL, 0, 1, '2017-06-08 00:00:01', '2017-06-08 00:00:01'),
(36, 3, 'Eveniet sunt aliquam explicabo dolor cumque beatae voluptas.', 'rerum-esse-veritatis-facere-quis-consectetur-non', '<p>Sed qui voluptatibus autem quae enim. Quia non ipsa est et iure est vel sit. Non eveniet aut repudiandae veritatis neque. Rerum eligendi qui non sapiente deleniti unde molestiae.</p>', '<p>Ducimus ducimus fugit sit aut officia. Dolores ratione expedita eos est repellendus ea quae.</p>', 'amadeo/source/c755828242582f85542873fce88d6edd.jpg', 0, NULL, NULL, NULL, NULL, NULL, 0, 1, '2017-06-08 00:00:01', '2017-06-08 00:00:01'),
(37, 4, 'Consequuntur doloremque praesentium sit doloremque.', 'non-distinctio-ut-cupiditate', '<p>Facere ad tempora ut recusandae a accusantium veniam. A eveniet maiores et quia id ipsa eaque ea. Excepturi consequatur rerum vero numquam eaque corporis eos. Doloremque iure qui sit quis laborum libero eum. Provident cum et provident laudantium. Voluptatem et perferendis consequatur odio sit non corrupti.</p>', '<p>Omnis molestiae non est est ipsam nihil. Ad voluptate unde at consequuntur.</p>', 'amadeo/source/3de40a2300f177d2d1d336e1767534e1.jpg', 0, NULL, NULL, NULL, NULL, NULL, 0, 1, '2017-06-08 00:00:01', '2017-06-08 00:00:01'),
(38, 2, 'Quisquam delectus dolorem hic id.', 'ab-mollitia-aliquid-a-cum-reprehenderit-recusandae', '<p>Fugit odio iure omnis aut sit quo. Dolor qui laboriosam illum inventore. Et eligendi accusamus maiores ut. Tempore rerum temporibus labore voluptatem quisquam alias. Omnis nobis amet necessitatibus quam sit ratione rerum quam.</p>', '<p>Optio qui aut eius eaque ab facilis. Nam dolore temporibus voluptate ab et unde dicta.</p>', 'amadeo/source/96b60a8c9d54f68fdbb9dbb8e3c9df61.jpg', 0, NULL, NULL, NULL, NULL, NULL, 0, 1, '2017-06-08 00:00:01', '2017-06-08 00:00:01'),
(39, 2, 'Nihil ad voluptatem voluptatem.', 'quis-consequatur-impedit-minima-labore-voluptatum-aperiam', '<p>Doloribus ut vel qui soluta. Iure atque voluptatem accusamus nostrum voluptas. Est repudiandae animi culpa minima voluptas nam. Et aspernatur consequatur nihil ipsum quia. Sequi labore ducimus rerum odio id molestias similique qui.</p>', '<p>Dolores vel expedita ut est qui incidunt. Molestiae facilis est cumque non hic.</p>', 'amadeo/source/71c306c109822fdbc1ecc2ba0acb6331.jpg', 0, NULL, NULL, NULL, NULL, NULL, 0, 1, '2017-06-08 00:00:01', '2017-06-08 00:00:01'),
(40, 1, 'Provident sunt itaque voluptates ducimus.', 'earum-laborum-provident-eaque-voluptatum', '<p>Inventore minima consequatur voluptates consequatur nisi officiis unde. Excepturi provident porro ea aut quod repellat qui. Eum et sint molestiae aut inventore. Adipisci fuga sint vitae laboriosam a aut. Cumque minima vel voluptatem molestias et amet. Laboriosam optio omnis quidem fugit quas quo enim sed. Cupiditate perferendis deserunt fugit similique.</p>', '<p>Fugiat reprehenderit qui pariatur qui ipsa.</p>', 'amadeo/source/efe5a762006181b01b399c12f0efa7c3.jpg', 0, NULL, NULL, NULL, NULL, NULL, 0, 1, '2017-06-08 00:00:01', '2017-06-08 00:00:01'),
(41, 3, 'Voluptas veritatis accusantium magnam consequatur harum.', 'natus-ipsam-commodi-repellat-ut', '<p>Voluptatum consequuntur atque dicta id. Quia et cupiditate eligendi sint quibusdam commodi inventore. A aut saepe quisquam cupiditate. Et reprehenderit hic voluptatum voluptas. Minima velit necessitatibus non quia quod in.</p>', '<p>Optio dolor eligendi consequatur ut non adipisci.</p>', 'amadeo/source/ed800eb669a53c1617e155698e0e035f.jpg', 0, NULL, NULL, NULL, NULL, NULL, 0, 1, '2017-06-08 00:00:01', '2017-06-08 00:00:01'),
(42, 4, 'Dolorem illo quia sit aspernatur voluptatem ex magni.', 'est-unde-sed-iusto-doloribus-dicta', '<p>Animi voluptas qui molestiae eos in rerum. Sed omnis voluptas dolore voluptas doloremque repudiandae eaque. Culpa non ducimus temporibus ad rerum omnis. Adipisci in quo exercitationem fugit et adipisci consequatur.</p>', '<p>Eveniet qui consequatur nihil accusantium. Quia necessitatibus non voluptates est omnis consequuntur.</p>', 'amadeo/source/ba416e92855e1c207a4aab2e79bfb579.jpg', 0, NULL, NULL, NULL, NULL, NULL, 0, 1, '2017-06-08 00:00:01', '2017-06-08 00:00:01'),
(43, 4, 'Ut libero aliquam qui et velit atque.', 'vel-omnis-porro-repudiandae-distinctio-magnam-sit-alias', '<p>Id aut assumenda expedita dolor nulla. A dignissimos placeat quia fugit nisi. Qui quo vel inventore atque. Sunt voluptatibus enim sed pariatur. Molestias et quas ut eum. Reiciendis perferendis quia a corporis quisquam.</p>', '<p>Sapiente vero sit possimus consectetur qui.</p>', 'amadeo/source/bd41a8bc862c3d25515df9d0bd20c702.jpg', 0, NULL, NULL, NULL, NULL, NULL, 0, 1, '2017-06-08 00:00:01', '2017-06-08 00:00:01'),
(44, 1, 'Quos tenetur iusto tenetur.', 'inventore-est-pariatur-delectus-veritatis-earum', '<p>Ea vel et explicabo sit enim. Repellendus dolor dolores molestiae similique iste. Delectus recusandae qui iste natus cumque illo nostrum consequuntur. Dolorem voluptatem quis quis vel minus ad autem deserunt. Asperiores quasi dolor quam culpa saepe magnam quasi voluptas.</p>', '<p>Eum magni saepe maxime. Harum deserunt quo omnis totam et.</p>', 'amadeo/source/d52bcc9167fd063c4fefd4b6062d6cea.jpg', 0, NULL, NULL, NULL, NULL, NULL, 0, 1, '2017-06-08 00:00:01', '2017-06-08 00:00:01'),
(45, 3, 'Accusamus nihil eius necessitatibus numquam possimus impedit.', 'nihil-veritatis-quidem-omnis-et-sed-saepe-sequi', '<p>Tempora ut sint enim. Quaerat quis aliquid sed suscipit vitae odit molestiae quidem. Qui sed beatae aut repudiandae magni. Adipisci error quod nobis cum deleniti. Velit iure repudiandae fugit odio. Temporibus officiis ipsa qui nulla nihil.</p>', '<p>Ex fugiat ad illo et voluptatem. Distinctio culpa et aspernatur et aut.</p>', 'amadeo/source/3529094f4cf5d68a5b996d95684336b8.jpg', 0, NULL, NULL, NULL, NULL, NULL, 0, 1, '2017-06-08 00:00:01', '2017-06-08 00:00:01'),
(46, 1, 'Blanditiis ipsum ratione sit reprehenderit.', 'qui-dolore-nihil-earum', '<p>Fuga dolorem enim debitis. Enim vitae nisi numquam id magnam nobis facere. Magni ut non et qui consequatur quisquam. Sunt rerum architecto exercitationem iusto dolores sunt iure. Ea nobis provident temporibus delectus ea sint tempora omnis.</p>', '<p>Sunt eaque aut earum officiis quia.</p>', 'amadeo/source/7da33f727bf7269cd1a5db19341dd3f0.jpg', 0, NULL, NULL, NULL, NULL, NULL, 0, 1, '2017-06-08 00:00:01', '2017-06-08 00:00:01'),
(47, 1, 'Quod similique voluptatem sed exercitationem illum.', 'placeat-harum-consequuntur-veritatis-expedita-vel-et-ut', '<p>A perspiciatis vero perspiciatis inventore illo et. Quidem recusandae officia voluptatem. Enim quia nisi sed vero. Facere temporibus consequatur rerum possimus labore aperiam et. Fugiat provident aut sit asperiores hic. Fugiat perferendis occaecati distinctio facilis architecto est aperiam nesciunt.</p>', '<p>Quia minus quia facilis nam.</p>', 'amadeo/source/35c5a5bf71dc4c1af88526966febe72c.jpg', 0, NULL, NULL, NULL, NULL, NULL, 0, 1, '2017-06-08 00:00:01', '2017-06-08 00:00:01'),
(48, 3, 'Quasi assumenda dolores quos placeat ratione ut ab.', 'aliquam-eum-natus-sint-saepe-quisquam-debitis', '<p>Ea quia rem sint in corporis quibusdam a. Eius molestiae et explicabo voluptas. Numquam dolore magnam earum porro. Corrupti et est quibusdam expedita eligendi aut quo. Perspiciatis voluptas totam ex et eum. Atque voluptatem qui veritatis nemo eos ut. Et harum est minus alias.</p>', '<p>Est et et voluptas dolores omnis. Molestias aperiam laborum alias atque.</p>', 'amadeo/source/e1d0a6f0874e0c43b446b7dd01a2ab8d.jpg', 0, NULL, NULL, NULL, NULL, NULL, 0, 1, '2017-06-08 00:00:01', '2017-06-08 00:00:01'),
(49, 3, 'Commodi qui beatae qui.', 'quis-tenetur-non-adipisci-quo', '<p>Soluta vero consequuntur incidunt doloribus qui porro. Quisquam laborum eos excepturi eveniet. Eos a fuga quasi qui quasi voluptas. Doloremque quia culpa ipsum magnam sapiente ex aut. Ducimus et totam nemo cum magni aut dolorum numquam. Id quod id temporibus facere ducimus itaque. Facilis provident et fugiat.</p>', '<p>Et repellat in voluptas quidem tenetur enim velit.</p>', 'amadeo/source/c865cf48f96e7fc5de07c80128485c6e.jpg', 0, NULL, NULL, NULL, NULL, NULL, 0, 1, '2017-06-08 00:00:01', '2017-06-08 00:00:01'),
(50, 3, 'Libero ut dolor porro qui sed ut sequi doloribus.', 'nobis-vel-quis-quidem-quod-harum-dignissimos-magnam', '<p>Inventore et inventore aut fugiat sint non. Esse quae asperiores animi eaque est illo ut. Quisquam assumenda qui dicta id beatae. Dicta dolorem iste quae animi est. Totam cumque voluptas rem eveniet ut et. Ut sed ipsa sequi corrupti. Hic quo perferendis perspiciatis.</p>', '<p>Ipsa voluptatem molestiae vero nihil numquam. Nam voluptate quas sed fuga ut.</p>', 'amadeo/source/a7c74a60cb4b4cc879a084d90f9956f4.jpg', 0, NULL, NULL, NULL, NULL, NULL, 0, 1, '2017-06-08 00:00:01', '2017-06-08 00:00:01'),
(51, 1, 'Nesciunt quisquam fugit ipsa.', 'dicta-dolorum-ipsam-voluptatibus-sit-enim', '<p>Explicabo ut non ea quibusdam velit incidunt doloremque. Adipisci blanditiis est doloribus quaerat sit ut et. Iste ea ab blanditiis sed rem fuga. Et cum et omnis et ut quae. Sit nemo quia maiores molestiae totam non. Facere in accusamus doloribus sunt nesciunt.</p>', '<p>Fuga commodi aliquid illo non. Quasi voluptatem est inventore nostrum aut et.</p>', 'amadeo/source/52037eb1cbf4031d339b01af3cadb82e.jpg', 0, NULL, NULL, NULL, NULL, NULL, 0, 1, '2017-06-08 00:00:01', '2017-06-08 00:00:01'),
(52, 3, 'Provident nostrum praesentium dolorum nihil quis accusamus in reiciendis.', 'quis-enim-omnis-similique-similique', '<p>Aut voluptas doloribus porro doloremque quos rem ab et. Ipsam fugiat qui qui perferendis dolor ex repellendus. Fugiat est voluptas beatae dolorem reprehenderit et laborum. Saepe dolorum qui neque atque natus odio totam eum. Nobis consequatur et tempore qui nobis qui et. Voluptatem qui vitae consectetur ex rerum accusamus. Quas fugiat vel consectetur.</p>', '<p>Ipsa sed molestias praesentium minus nobis error dolorum.</p>', 'amadeo/source/921e00ebcb0bcb9b17c6ac45d2f03f22.jpg', 0, NULL, NULL, NULL, NULL, NULL, 0, 1, '2017-06-08 00:00:01', '2017-06-08 00:00:01');

-- --------------------------------------------------------

--
-- Table structure for table `amd_article_category`
--

CREATE TABLE `amd_article_category` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `short_description` text COLLATE utf8mb4_unicode_ci,
  `image` text COLLATE utf8mb4_unicode_ci,
  `logo` text COLLATE utf8mb4_unicode_ci,
  `priority` int(11) NOT NULL DEFAULT '0',
  `meta_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `meta_image` text COLLATE utf8mb4_unicode_ci,
  `meta_url` text COLLATE utf8mb4_unicode_ci,
  `meta_keyword` text COLLATE utf8mb4_unicode_ci,
  `actor` int(11) NOT NULL,
  `flag_publish` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `amd_article_category`
--

INSERT INTO `amd_article_category` (`id`, `name`, `slug`, `description`, `short_description`, `image`, `logo`, `priority`, `meta_title`, `meta_description`, `meta_image`, `meta_url`, `meta_keyword`, `actor`, `flag_publish`, `created_at`, `updated_at`) VALUES
(1, 'Management Pajak', 'management-pajak', '<p>Lorem ipsum dolor sit amet, eos ne dictas principes, appareat erroribus an his. Te vim libris torquatos mnesarchum, vis ignota eirmod mnesarchum in. Eu pro viris zril minimum. Ea dicant alterum feugait has. Voluptua conceptam conclusionemque no eam, ut alii disputando nam. Nec in invenire mediocrem torquatos.</p>', '<p>Lorem ipsum dolor sit amet, eos ne dictas principes, appareat erroribus an his.</p>', 'amadeo/source/imageContent/1496718863-Desert.jpg', 'amadeo/source/logoCategory/1496636775-icon-opportunities.png', 0, NULL, NULL, NULL, NULL, NULL, 1, 1, '2017-06-04 21:26:15', '2017-06-05 20:14:23'),
(2, 'Pengelolaan Keuangan', 'pengelolaan-keuangan', '<p>An pri maiestatis signiferumque. Quando perpetua intellegam mel ea, ea has iudico quaeque moderatius, ne mea essent ornatus. An sumo populo consequuntur vix, velit tritani no his. Duo alia primis eruditi ei, legere labore ex quo, id dicat labitur efficiantur pri. Ea nec agam omittam tractatos, sit audire atomorum inimicus at. Vix et quod quot dicam, an numquam molestie adipisci quo, natum lobortis electram ne his.</p>', '<p>An pri maiestatis signiferumque.</p>', 'amadeo/source/imageContent/1496979534-Jellyfish.jpg', 'amadeo/source/imageContent/1496643768-icon-strategy.png', 0, NULL, NULL, NULL, NULL, NULL, 1, 1, '2017-06-04 21:55:43', '2017-06-08 20:38:54'),
(3, 'Investasi', 'investasi', '<p>Lorem ipsum dolor sit amet, eos ne dictas principes, appareat erroribus an his. Te vim libris torquatos mnesarchum, vis ignota eirmod mnesarchum in. Eu pro viris zril minimum. Ea dicant alterum feugait has. Voluptua conceptam conclusionemque no eam, ut alii disputando nam. Nec in invenire mediocrem torquatos.</p>', '<p>Lorem ipsum dolor sit amet, eos ne dictas principes, appareat erroribus an his.</p>', 'amadeo/source/imageContent/1496979550-Koala.jpg', 'amadeo/source/imageContent/1496643812-icon-make-money.png', 1, NULL, NULL, NULL, NULL, NULL, 1, 1, '2017-06-04 21:56:16', '2017-06-08 20:39:10'),
(4, 'Asuransi', 'asuransi', '<p>Lorem ipsum dolor sit amet, eos ne dictas principes, appareat erroribus an his. Te vim libris torquatos mnesarchum, vis ignota eirmod mnesarchum in. Eu pro viris zril minimum. Ea dicant alterum feugait has. Voluptua conceptam conclusionemque no eam, ut alii disputando nam. Nec in invenire mediocrem torquatos.</p>', '<p>Lorem ipsum dolor sit amet, eos ne dictas principes, appareat erroribus an his.</p>', 'amadeo/source/imageContent/1496979563-Tulips.jpg', 'amadeo/source/logoCategory/1496638619-icon-save-money.png', 0, NULL, NULL, NULL, NULL, NULL, 1, 1, '2017-06-04 21:56:59', '2017-06-08 20:39:23');

-- --------------------------------------------------------

--
-- Table structure for table `amd_contact`
--

CREATE TABLE `amd_contact` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `messages` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `actor` int(11) NOT NULL DEFAULT '0',
  `flag_publish` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `amd_contact`
--

INSERT INTO `amd_contact` (`id`, `name`, `phone`, `email`, `messages`, `actor`, `flag_publish`, `created_at`, `updated_at`) VALUES
(1, 'Jonathan Dharmawan', '2223334', 'jonathan.digindo@gmail.com', 'Hello Wolrd, Lorem Ipsum dolor sit amet', 0, 1, '2017-06-06 20:58:10', '2017-06-06 20:58:10');

-- --------------------------------------------------------

--
-- Table structure for table `amd_content`
--

CREATE TABLE `amd_content` (
  `id` int(10) UNSIGNED NOT NULL,
  `for` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subtitle` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `actor` int(11) NOT NULL DEFAULT '0',
  `flag_publish` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `amd_content`
--

INSERT INTO `amd_content` (`id`, `for`, `title`, `subtitle`, `description`, `actor`, `flag_publish`, `created_at`, `updated_at`) VALUES
(1, 'about', 'About Us', 'Welcome to Kingdom Financial', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing.</p>\r\n\r\n<p>Lorem Ipsum passages, and more recently with desktop publishing software like Aldus Page Maker including. versions of Lorem Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever.</p>', 1, 1, NULL, '2017-06-07 20:32:01'),
(3, 'about.history', 'History', NULL, '<p>Lorem ipsum dolor sit amet, cu has audiam legendos accusata, accusata atomorum vim at, nec simul quodsi reprehendunt te. No cum facete dictas, alia paulo duo at. Ex utamur numquam delectus per, in nec vero timeam docendi, zril fabellas incorrupte ad pri. Summo appareat ea est, has nullam conclusionemque no, vis sale bonorum consequuntur an. Ea ceteros civibus sed, duo in commodo debitis. Has an primis ancillae, ei sonet meliore definiebas eam.</p>\r\n\r\n<p>An sumo laboramus mel, te primis pertinax eos, duo eros ullum falli id. Mea eu ornatus scaevola, solet mollis vis ea. Eu has diam disputationi, vix ei eirmod inimicus persequeris. Ea ius quis ponderum, eum ut agam doctus senserit, latine iuvaret lucilius ex eam. Ea sed percipitur honestatis, postea copiosae conclusionemque at mea.</p>', 1, 1, NULL, '2017-06-08 01:26:38'),
(4, 'about.visi', 'Visi', NULL, '<p>Lorem ipsum dolor sit amet, cu has audiam legendos accusata, accusata atomorum vim at, nec simul quodsi reprehendunt te. No cum facete dictas, alia paulo duo at. Ex utamur numquam delectus per, in nec vero timeam docendi, zril fabellas incorrupte ad pri. Summo appareat ea est, has nullam conclusionemque no, vis sale bonorum consequuntur an. Ea ceteros civibus sed, duo in commodo debitis. Has an primis ancillae, ei sonet meliore definiebas eam.</p>\r\n\r\n<p>An sumo laboramus mel, te primis pertinax eos, duo eros ullum falli id. Mea eu ornatus scaevola, solet mollis vis ea. Eu has diam disputationi, vix ei eirmod inimicus persequeris. Ea ius quis ponderum, eum ut agam doctus senserit, latine iuvaret lucilius ex eam. Ea sed percipitur honestatis, postea copiosae conclusionemque at mea.</p>', 1, 1, NULL, '2017-06-08 01:25:11'),
(5, 'about.misi', 'Misi', NULL, '<p>Lorem ipsum dolor sit amet, cu has audiam legendos accusata, accusata atomorum vim at, nec simul quodsi reprehendunt te. No cum facete dictas, alia paulo duo at. Ex utamur numquam delectus per, in nec vero timeam docendi, zril fabellas incorrupte ad pri. Summo appareat ea est, has nullam conclusionemque no, vis sale bonorum consequuntur an. Ea ceteros civibus sed, duo in commodo debitis. Has an primis ancillae, ei sonet meliore definiebas eam.</p>\r\n\r\n<p>An sumo laboramus mel, te primis pertinax eos, duo eros ullum falli id. Mea eu ornatus scaevola, solet mollis vis ea. Eu has diam disputationi, vix ei eirmod inimicus persequeris. Ea ius quis ponderum, eum ut agam doctus senserit, latine iuvaret lucilius ex eam. Ea sed percipitur honestatis, postea copiosae conclusionemque at mea.</p>', 1, 1, NULL, '2017-06-08 01:25:20'),
(6, 'event', 'Our Event', NULL, '<p>Lorem ipsum dolor sit amet, utinam iriure eam ex, has ei audire volutpat. Lorem mollis consequat vix id, ad quando officiis pri, ei est tempor alterum assentior. Possit iriure equidem no mel, quo ei animal admodum. Mei tritani apeirian adversarium te, cum at commune placerat, ut qui dicunt pertinacia. Vide splendide ad mel, sit id persius meliore. Eu vel oportere prodesset, vim erant dictas ex. An has vide minim hendrerit. An vis quando ignota, nam ne timeam feugait delicata, usu erat justo id. Ne novum legimus conceptam mel, fugit appetere antiopam te cum. His an laudem quidam, vero sonet periculis vim ei, pri an dolor populo. Pri tollit deseruisse id.</p>', 1, 1, NULL, '2017-06-07 20:36:28'),
(7, 'gallery', 'Gallery', 'Welcome to Kingdom Financial', NULL, 1, 1, NULL, '2017-06-08 18:53:08'),
(8, 'article', 'Article', 'Welcome to Kingdom Financial', NULL, 1, 1, NULL, '2017-06-08 00:23:27');

-- --------------------------------------------------------

--
-- Table structure for table `amd_event`
--

CREATE TABLE `amd_event` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `short_description` text COLLATE utf8mb4_unicode_ci,
  `date` date NOT NULL,
  `time` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `register_link` text COLLATE utf8mb4_unicode_ci,
  `meta_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `meta_image` text COLLATE utf8mb4_unicode_ci,
  `meta_url` text COLLATE utf8mb4_unicode_ci,
  `meta_keyword` text COLLATE utf8mb4_unicode_ci,
  `actor` int(11) NOT NULL,
  `flag_publish` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `amd_event`
--

INSERT INTO `amd_event` (`id`, `name`, `slug`, `description`, `short_description`, `date`, `time`, `location`, `register_link`, `meta_title`, `meta_description`, `meta_image`, `meta_url`, `meta_keyword`, `actor`, `flag_publish`, `created_at`, `updated_at`) VALUES
(10, 'Surabaya', 'surabaya', '<p>An per noster scribentur, ei cum veri feugiat. No adhuc adipisci ius, doctus labores mei at. Suas legimus nec id, solum vocibus his ei. Est eleifend similique et, his vide dissentias adversarium in. At adversarium conclusionemque his, mei ut disputando definitiones. Ne dolor mandamus ius, ut dictas interpretaris duo. Nam latine pertinax sadipscing at, usu saperet appellantur ullamcorper an.</p>', '<p>An per noster scribentur, ei cum veri feugiat.</p>', '2017-06-08', '10:00 - Selesai', 'Surabaya', NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2017-06-07 20:53:51', '2017-06-07 20:53:51'),
(11, 'Jakarta', 'jakarta', '<p>Lorem ipsum dolor sit amet, pri tractatos delicatissimi te, putant regione propriae at sed, cum quem aeque ei. Etiam viris nonumy at his, saperet euripidis adipiscing ei eam, an vulputate percipitur eam. Ex pro dicit assentior, ne audire forensibus signiferumque vis. Graece blandit inimicus mea eu, per an ancillae apeirian.</p>', '<p>Lorem ipsum dolor sit amet, pri tractatos delicatissimi te, putant regione propriae at sed, cum quem aeque ei.</p>', '2017-06-08', '07:00 - 17:00', 'Jakrta', NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2017-06-07 21:39:20', '2017-06-07 21:39:20'),
(12, 'Bandung', 'bandung', '<p>Vocent moderatius liberavisse mei ad. At rebum deleniti sapientem nam. Ad odio agam nec, eam congue deserunt assueverit an. Et eam animal intellegam liberavisse, sit cu postulant maluisset accommodare. Quo voluptua epicurei no, id mei iusto reprimique signiferumque, vel posse sanctus eu.</p>', '<p>Vocent moderatius liberavisse mei ad. At rebum deleniti sapientem nam.</p>', '2017-06-08', '08:00 - 21:30', 'Bandung', NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2017-06-07 21:41:18', '2017-06-07 21:41:18'),
(13, 'Semarang', 'semarang', '<p>Sit eu nibh soleat, dolorum perpetua pericula ex cum, eam et possim repudiare. Per meis habemus expetendis ex, pri elit ridens euismod ut, verear erroribus quo id. Suas unum molestie cum te, probo numquam mei ex. Dicit luptatum no duo. Nam graeci facete in, id lorem tempor animal duo. Sea eu omnesque noluisse torquatos. Partiendo expetendis an mei.</p>', '<p>Sit eu nibh soleat, dolorum perpetua pericula ex cum, eam et possim repudiare.</p>', '2017-06-16', '10:00 - 19:00', 'Semarang', NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2017-06-07 21:42:51', '2017-06-07 21:42:51'),
(14, 'Yogyakarta', 'yogyakarta', '<p>Mea at graeci antiopam, eum ad justo assentior, ei fierent tractatos has. Ex oratio reformidans complectitur his, ut sea erat oratio, altera ornatus ei mei. Pri noster aliquip legimus an, sed te sale deserunt. Facer facilis appareat has ei.</p>', '<p>Mea at graeci antiopam, eum ad justo assentior, ei fierent tractatos has.</p>', '2017-06-15', '12:00 - 18:30', 'Yogyakarta', NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2017-06-07 21:44:27', '2017-06-07 21:44:27'),
(15, 'Denpasar', 'denpasar', '<p>Te his discere tibique, ei verear expetendis quo, sit ut hinc erant insolens. Mutat possim placerat sea et. Pro ferri aliquam at, quod scribentur in usu. Wisi feugiat forensibus vis cu, nec at nisl iisque definitiones, no wisi zril ancillae mei. No ius omnis utroque convenire, duo in quas possim postulant, no dicunt appellantur pri.</p>', '<p>Te his discere tibique, ei verear expetendis quo, sit ut hinc erant insolens.</p>', '2017-06-22', '09:00 - 20:00', 'Denpasar', NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2017-06-07 21:45:27', '2017-06-07 21:45:27'),
(16, 'KFC', 'kfc', '<p>Quo tritani dissentias persequeris at. Nec eu alia vivendo, id sed hinc fugit summo, possit adolescens ad duo. Iriure consequuntur est cu. Nec nostro dictas molestie ad. Sed unum meliore intellegebat cu. Ea vel vocent assueverit.</p>', '<p>Quo tritani dissentias persequeris at. Nec eu alia vivendo, id sed hinc fugit summo, possit adolescens ad duo. Iriure consequuntur est cu. Nec nostro dictas molestie ad. Sed unum meliore intellegebat cu. Ea vel vocent assueverit.</p>', '2017-06-29', '12:00 - 18:30', 'JCC', NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2017-06-07 21:47:04', '2017-06-07 21:47:04'),
(17, 'Fire', 'fire', '<p>Amet dicat menandri at sed, mel an quando repudiare, rebum autem quo ad. Electram petentium reprimique vix in. No modo quaeque eruditi usu. Mea ei maiestatis dissentiet, unum albucius volutpat nec ea, at nam rebum idque petentium.</p>\r\n\r\n<p>&nbsp;</p>', '<p>Amet dicat menandri at sed, mel an quando repudiare, rebum autem quo ad. Electram petentium reprimique vix in. No modo quaeque eruditi usu. Mea ei maiestatis dissentiet, unum albucius volutpat nec ea, at nam rebum idque petentium</p>\r\n\r\n<p>&nbsp;</p>', '2017-06-08', '18:00 - 21:00', 'ICE', NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2017-06-07 21:48:06', '2017-06-07 21:48:06');

-- --------------------------------------------------------

--
-- Table structure for table `amd_event_image`
--

CREATE TABLE `amd_event_image` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_event` int(11) NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `priority` int(11) NOT NULL DEFAULT '0',
  `actor` int(11) NOT NULL,
  `flag_publish` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `amd_event_image`
--

INSERT INTO `amd_event_image` (`id`, `id_event`, `title`, `image`, `priority`, `actor`, `flag_publish`, `created_at`, `updated_at`) VALUES
(2, 9, '1496651676-Desert.jpg', 'amadeo/source/event/1496651676-Desert.jpg', 0, 1, 1, '2017-06-05 01:34:36', '2017-06-05 01:34:36'),
(4, 9, '1496651676-Jellyfish.jpg', 'amadeo/source/event/1496651676-Jellyfish.jpg', 0, 1, 1, '2017-06-05 01:34:36', '2017-06-05 01:34:36'),
(5, 9, '1496651676-Koala.jpg', 'amadeo/source/event/1496651676-Koala.jpg', 0, 1, 1, '2017-06-05 01:34:36', '2017-06-05 01:34:36'),
(6, 9, '1496651676-Lighthouse.jpg', 'amadeo/source/event/1496651676-Lighthouse.jpg', 0, 1, 1, '2017-06-05 01:34:36', '2017-06-05 01:34:36'),
(7, 9, '1496651676-Penguins.jpg', 'amadeo/source/event/1496651676-Penguins.jpg', 0, 1, 1, '2017-06-05 01:34:36', '2017-06-05 01:34:36'),
(8, 9, '1496651676-Tulips.jpg', 'amadeo/source/event/1496651676-Tulips.jpg', 0, 1, 1, '2017-06-05 01:34:36', '2017-06-05 01:34:36'),
(9, 9, '1496654071-Hydrangeas.jpg', 'amadeo/source/event/1496654071-Hydrangeas.jpg', 0, 1, 1, '2017-06-05 02:14:31', '2017-06-05 02:14:31'),
(10, 9, '1496654102-article-1.png', 'amadeo/source/event/1496654102-article-1.png', 0, 1, 1, '2017-06-05 02:15:02', '2017-06-05 02:15:02'),
(11, 9, '1496654102-article-2.png', 'amadeo/source/event/1496654102-article-2.png', 0, 1, 1, '2017-06-05 02:15:02', '2017-06-05 02:15:02'),
(12, 10, '1496894031-about-us2-img.jpg', 'amadeo/source/event/1496894031-about-us2-img.jpg', 0, 1, 1, '2017-06-07 20:53:51', '2017-06-07 20:53:51'),
(13, 10, '1496894032-about-us-img.jpg', 'amadeo/source/event/1496894032-about-us-img.jpg', 0, 1, 1, '2017-06-07 20:53:52', '2017-06-07 20:53:52'),
(14, 10, '1496894032-our-event-img-1.png', 'amadeo/source/event/1496894032-our-event-img-1.png', 1, 1, 1, '2017-06-07 20:53:52', '2017-06-07 21:34:49'),
(15, 11, '1496896760-our-event-img-2.png', 'amadeo/source/event/1496896760-our-event-img-2.png', 0, 1, 1, '2017-06-07 21:39:20', '2017-06-07 21:39:20'),
(16, 12, '1496896878-our-event-img-3.png', 'amadeo/source/event/1496896878-our-event-img-3.png', 0, 1, 1, '2017-06-07 21:41:18', '2017-06-07 21:41:18'),
(17, 13, '1496896971-our-event-img-4.png', 'amadeo/source/event/1496896971-our-event-img-4.png', 0, 1, 1, '2017-06-07 21:42:51', '2017-06-07 21:42:51'),
(18, 15, '1496897127-our-event-img-6.png', 'amadeo/source/event/1496897127-our-event-img-6.png', 0, 1, 1, '2017-06-07 21:45:27', '2017-06-07 21:45:27'),
(19, 16, '1496897224-our-event-img-1.png', 'amadeo/source/event/1496897224-our-event-img-1.png', 0, 1, 1, '2017-06-07 21:47:04', '2017-06-07 21:47:04'),
(20, 17, '1496897286-our-event-img-2.png', 'amadeo/source/event/1496897286-our-event-img-2.png', 0, 1, 1, '2017-06-07 21:48:06', '2017-06-07 21:48:06'),
(21, 14, '1496898241-our-event-img-5.png', 'amadeo/source/event/1496898241-our-event-img-5.png', 0, 1, 1, '2017-06-07 22:04:01', '2017-06-07 22:04:01');

-- --------------------------------------------------------

--
-- Table structure for table `amd_gallery`
--

CREATE TABLE `amd_gallery` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `short_description` text COLLATE utf8mb4_unicode_ci,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `priority` int(11) NOT NULL DEFAULT '0',
  `meta_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `meta_image` text COLLATE utf8mb4_unicode_ci,
  `meta_url` text COLLATE utf8mb4_unicode_ci,
  `meta_keyword` text COLLATE utf8mb4_unicode_ci,
  `actor` int(11) NOT NULL,
  `flag_publish` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `amd_gallery`
--

INSERT INTO `amd_gallery` (`id`, `name`, `slug`, `description`, `short_description`, `image`, `date`, `priority`, `meta_title`, `meta_description`, `meta_image`, `meta_url`, `meta_keyword`, `actor`, `flag_publish`, `created_at`, `updated_at`) VALUES
(2, 'Explicabo est modi tempora ex dicta odio hic.', 'enim-ducimus-sunt-aut-perspiciatis', '<p>Doloremque maiores doloribus vitae cum quo. Animi aliquid magnam quae et dolores eligendi. Impedit unde pariatur sapiente earum sed praesentium. Eligendi dignissimos officiis et iure. Aut sed maxime laudantium similique dignissimos. Ad enim atque et qui accusantium neque pariatur. Nulla molestiae dolorem quasi. Qui aut blanditiis sapiente illo voluptatem unde animi eaque.</p>', '<p>Provident laborum corporis id laborum tenetur dignissimos. Commodi eaque necessitatibus et quia officia ab.</p>', 'amadeo/source/83761a5bf5bd77c02dc4742f823a4607.jpg', '1973-11-24', 0, NULL, NULL, NULL, NULL, NULL, 0, 1, '2017-06-08 02:20:18', '2017-06-08 02:20:18'),
(3, 'Facilis ut ut laboriosam ut necessitatibus odio.', 'rem-officia-omnis-consequatur-nam-quam-maxime', '<p>Voluptatibus nobis ipsum recusandae pariatur. Sint odio adipisci accusamus eum. Dignissimos quae labore ea et id omnis eum. Aperiam nesciunt nam et non. Quae odio aliquid dolores qui ratione quia quas. Adipisci quas magni aspernatur qui odio. Rerum aliquid laudantium iusto quod odit consequatur.</p>', '<p>Veritatis dolorem sed architecto quia. Perferendis aut aliquam est qui sint velit.</p>', 'amadeo/source/ed4d54c3528b58675d8210adac07f9a3.jpg', '2011-04-04', 0, NULL, NULL, NULL, NULL, NULL, 0, 1, '2017-06-08 02:20:18', '2017-06-08 02:20:18'),
(4, 'Voluptatum pariatur quaerat nulla suscipit.', 'et-distinctio-quia-dolor-perferendis-delectus-quis-qui', '<p>Et ex non ex nesciunt totam. Sint quidem ut velit impedit odit. Omnis labore voluptas voluptates vero ea dolorum qui. Sequi et et enim ut quia voluptates qui. In assumenda nisi odit quo corrupti est. Ut facilis numquam enim molestias illo. Sint minima maiores sit ipsa blanditiis voluptas vel. Provident consequatur atque ut ratione. Cupiditate ea quia ipsum sit quod quibusdam. Vel qui cumque magnam excepturi. Possimus et earum optio minus facilis animi earum.</p>', '<p>Rerum eius facilis sint iste consequatur dolores. Consequuntur ad consequatur qui laboriosam fugit deserunt molestiae.</p>', 'amadeo/source/40ea7eaf42431e4a0aaa73dce405521c.jpg', '1975-09-03', 0, NULL, NULL, NULL, NULL, NULL, 0, 1, '2017-06-08 02:20:19', '2017-06-08 02:20:19'),
(5, 'Voluptatum eveniet deleniti et.', 'voluptatum-quo-ut-tempore-ex-aut', '<p>Officiis molestiae reprehenderit sed ipsa. Suscipit culpa deserunt praesentium aut illo. Minima quas labore et id. Similique eveniet iure modi fuga quia sit ea. Aut eos occaecati consequatur dolor. Rerum autem harum quasi. Quas nobis sunt magni perferendis sapiente sapiente sed culpa. Error eius tempora unde vel quo in. Incidunt facilis minus suscipit odio non qui libero. A molestiae doloribus dicta laudantium qui voluptatum reiciendis voluptas. Totam consequuntur ut architecto nostrum neque. Natus quia quis id doloribus aut nesciunt.</p>', '<p>Aliquid neque laboriosam accusamus iste. Consequuntur laboriosam dignissimos assumenda qui.</p>', 'amadeo/source/bf08ded8c458712952bdf473e4938ab3.jpg', '2017-03-29', 0, NULL, NULL, NULL, NULL, NULL, 0, 1, '2017-06-08 02:20:19', '2017-06-08 02:20:19'),
(6, 'Placeat voluptate ipsa incidunt consequatur et autem accusantium.', 'aliquid-ut-corporis-ut-sequi', '<p>Non sequi praesentium iure recusandae dolores. At facere totam dolorum corrupti. Qui porro eos iste. Sunt eos veritatis mollitia sunt doloribus porro blanditiis eveniet. Et similique pariatur facere enim. Aut quibusdam recusandae soluta sit quod. Eveniet ab minima libero delectus illo atque numquam. Aperiam aut facilis qui soluta. Itaque provident quisquam magnam ipsum officiis ut aliquam reprehenderit.</p>', '<p>Doloribus illo expedita ut assumenda. At vel et vitae enim.</p>', 'amadeo/source/0e7fae1e6e0cb788020517ba89839616.jpg', '1974-01-21', 0, NULL, NULL, NULL, NULL, NULL, 0, 1, '2017-06-08 02:20:19', '2017-06-08 02:20:19'),
(7, 'Dolorem explicabo vitae modi quo voluptas illo maiores.', 'in-voluptatem-autem-qui-sunt', '<p>Et nesciunt perferendis iste nostrum harum dolorem cumque. Voluptas occaecati quis quae tempora totam. Sed aut ut illo aut adipisci quod maiores. Ut et ullam quibusdam tempore exercitationem occaecati. Et consequatur ut sunt accusantium labore. Est impedit sunt ut accusantium aliquid sapiente. Aspernatur nihil illo ea autem natus. Sed ducimus in ipsum omnis omnis voluptas.</p>', '<p>Praesentium iusto enim ullam dolore tempore voluptatem exercitationem. Quos voluptas vel qui veritatis quam totam.</p>', 'amadeo/source/ea4dd86ecd9121bb45c869283dc36d17.jpg', '1981-05-02', 0, NULL, NULL, NULL, NULL, NULL, 0, 1, '2017-06-08 02:20:19', '2017-06-08 02:20:19'),
(8, 'Nobis voluptatem voluptatem voluptatibus qui.', 'et-ipsam-beatae-et-voluptatem-sunt-laborum-suscipit', '<p>Eligendi iure eum rerum qui rerum eaque. Quia esse pariatur dolorem accusantium. Non et dolorem perspiciatis quod quisquam. Dolorum ea est voluptatem repudiandae repellat veniam. Voluptatem quia et delectus corrupti et ut occaecati ut. Occaecati quidem dicta expedita sint et in. Repellendus ut tempora vel ad quis rem velit reprehenderit. At ut facilis laboriosam dolor ducimus.</p>', '<p>Corporis nostrum non quia consequatur.</p>', 'amadeo/source/9d315498e780863f1cea10b1eac99222.jpg', '2010-08-12', 0, NULL, NULL, NULL, NULL, NULL, 0, 1, '2017-06-08 02:20:19', '2017-06-08 02:20:19'),
(9, 'Veritatis sapiente incidunt officia.', 'saepe-eveniet-ut-harum-corrupti-nisi-sint-aut-iste', '<p>Eum aspernatur perspiciatis quidem omnis vero. Unde voluptate vitae nulla. Vero possimus qui ducimus eos ut et. Rerum autem id quia qui. Vel autem adipisci repellat. Quas quia qui necessitatibus magni reiciendis similique nemo. Rerum voluptates et est et consequatur possimus.</p>', '<p>Repellendus qui officiis exercitationem iusto et sapiente vero. Nobis odio ipsum vel aut officiis occaecati.</p>', 'amadeo/source/ccc5489f3746205443cdfc6929fe2b9b.jpg', '2008-10-13', 0, NULL, NULL, NULL, NULL, NULL, 0, 1, '2017-06-08 02:20:19', '2017-06-08 02:20:19'),
(10, 'Placeat ut tenetur voluptatem sit quaerat voluptates.', 'aspernatur-corrupti-totam-in-inventore-ut-impedit-animi', '<p>Eos aut neque magnam molestiae. Optio illum quia ullam. Sequi corporis quod ratione dolores impedit quo. Cumque quis debitis aut aut provident. Alias dolor dolores ducimus quibusdam cumque consequatur. Possimus dolore et nobis unde numquam. Est assumenda ipsum est quod.</p>', '<p>Rem impedit suscipit voluptatem possimus ut soluta.</p>', 'amadeo/source/cc5576c0106c84f9c150ec6f7e8ddcd0.jpg', '2000-01-30', 0, NULL, NULL, NULL, NULL, NULL, 0, 1, '2017-06-08 02:20:19', '2017-06-08 02:20:19'),
(11, 'Minima omnis vero aut voluptas expedita.', 'iure-tempore-non-labore-labore-excepturi-id-et-rem', '<p>Ut in quasi quia ut voluptas atque et. Reprehenderit aut non minima expedita omnis quo architecto. Iste est illum et odit repudiandae. Veritatis voluptatem nihil ipsa iusto itaque. Maiores nesciunt fugit aut repudiandae culpa. Non earum exercitationem rem veritatis mollitia. Itaque accusantium voluptatem modi eos. Voluptas eaque eos libero labore ut.</p>', '<p>Iusto aut asperiores numquam repellendus id iusto ut dolorem.</p>', 'amadeo/source/cbca63004faa14830e2096f78307e8a3.jpg', '1977-01-15', 0, NULL, NULL, NULL, NULL, NULL, 0, 1, '2017-06-08 02:20:19', '2017-06-08 02:20:19'),
(12, 'Fugiat et tempora placeat saepe.', 'atque-non-quae-alias-velit-aut-error', '<p>Velit esse sit ut sed aut et nihil. Quam esse recusandae iure ratione alias eum est. Quis laborum doloribus natus et aliquam est. Excepturi nihil aut quae ea est. Voluptates molestiae non totam. Voluptatem illo id fugiat ut laudantium asperiores eos.</p>', '<p>Perspiciatis expedita fuga totam nam officiis. Sed sed atque est nam.</p>', 'amadeo/source/8bab1e71afc9396aff30ab732071e191.jpg', '1989-01-13', 0, NULL, NULL, NULL, NULL, NULL, 0, 1, '2017-06-08 02:20:19', '2017-06-08 02:20:19'),
(13, 'Sapiente assumenda ex sapiente neque qui debitis.', 'deleniti-possimus-odio-eos-vel', '<p>Omnis in consequatur voluptas quia maiores. Sed libero libero quae necessitatibus. Blanditiis delectus saepe fugiat sit itaque sit. Est ut dignissimos sit illum corporis sit natus doloremque. Odit soluta voluptate nihil ea quibusdam sit. Eos id porro et dolor. Harum sunt eos consequatur ut. Porro consectetur et quaerat qui eligendi. Non rerum ut ipsam sint nobis. Sit consequatur voluptatem quis numquam quia. Ullam est minima quaerat dignissimos repudiandae. Sint dolore dicta cupiditate tempora quos iusto consequatur eius.</p>', '<p>Sed ipsum consequatur sed qui sit voluptas totam dicta. Laborum sed voluptatibus consectetur magni quod est praesentium.</p>', 'amadeo/source/8b0dcef3939364e972ecfdc45c5ccfc2.jpg', '1971-02-16', 0, NULL, NULL, NULL, NULL, NULL, 0, 1, '2017-06-08 02:20:19', '2017-06-08 02:20:19'),
(14, 'Ducimus cum sed delectus exercitationem.', 'assumenda-sit-eaque-suscipit', '<p>Et et quia quis quod optio. Quasi quasi maiores unde culpa neque est cupiditate inventore. Dignissimos aliquam porro sunt asperiores. Quia voluptates nihil sunt et quas. Fugit officiis vero dolor qui. Natus dolor nostrum qui quod at inventore quo. Molestiae quis tempora nulla. Id nisi quam et incidunt aliquid reiciendis porro.</p>', '<p>Dolorum dolores voluptatem culpa reiciendis et quam ratione. Dolor consequatur perspiciatis consequatur quia maiores voluptas.</p>', 'amadeo/source/fd38c7ffa852b24560280fa8d8b5d910.jpg', '1970-04-28', 0, NULL, NULL, NULL, NULL, NULL, 0, 1, '2017-06-08 02:20:19', '2017-06-08 02:20:19'),
(15, 'Qui officiis enim explicabo quia et tenetur.', 'a-illo-provident-voluptatem-aut-dicta-excepturi-id', '<p>Non ullam iste quasi aut est quia deserunt. Quisquam voluptates pariatur ea animi deserunt. Facere molestias repellat explicabo quia vitae. Sed non quis asperiores ipsa excepturi laboriosam aut. Est et temporibus asperiores. Ut animi est eveniet harum impedit vel quisquam. Expedita fugiat facere voluptate esse eaque aut recusandae.</p>', '<p>Consequatur perspiciatis ipsam aperiam deserunt velit qui.</p>', 'amadeo/source/e4502cd894d90eec189c03f38c4eb746.jpg', '1978-03-19', 0, NULL, NULL, NULL, NULL, NULL, 0, 1, '2017-06-08 02:20:19', '2017-06-08 02:20:19'),
(16, 'Dolorem sed et reprehenderit quidem sed.', 'magnam-delectus-perferendis-omnis-ut', '<p>Dicta minus qui similique aspernatur eum. Ad sunt aut est non voluptatem sed. Rerum sunt ut minus iusto consequatur. Saepe exercitationem sint repellendus sequi. Voluptatum expedita velit ex est. Odit inventore veritatis qui et enim. Inventore nisi nihil et vero. Inventore eveniet excepturi voluptas non totam reiciendis. Autem quae qui repellat et quia tempore sit. Sed deserunt officiis animi consequatur nihil sunt.</p>', '<p>Excepturi ipsum inventore repellendus voluptatum vel recusandae.</p>', 'amadeo/source/b82360856241faa17e11f448548f7e38.jpg', '2009-09-24', 0, NULL, NULL, NULL, NULL, NULL, 0, 1, '2017-06-08 02:20:19', '2017-06-08 02:20:19'),
(17, 'Ab fugiat et et tempora dolore recusandae.', 'eveniet-dolores-vel-facere-omnis', '<p>Aliquid iusto minus velit enim laudantium. Vero odit quo ab laboriosam sed qui. Voluptatem adipisci et consequatur distinctio natus nobis ipsum. Qui et occaecati illo et fugiat sit. Eum cum autem culpa sapiente in tenetur perferendis. Doloribus atque officiis ullam possimus. Aut atque aperiam natus et.</p>', '<p>Ipsa et non in.</p>', 'amadeo/source/2f8fecb6678136e759cb956d477a7351.jpg', '2008-12-22', 0, NULL, NULL, NULL, NULL, NULL, 0, 1, '2017-06-08 02:20:19', '2017-06-08 02:20:19'),
(18, 'Incidunt ea eaque ut et perspiciatis qui.', 'error-incidunt-voluptas-cum-neque-quasi-delectus', '<p>Sit nobis exercitationem in et et sed non facilis. Aut ullam cumque laborum eligendi maiores et. Ut modi beatae in in laudantium. Laudantium laboriosam quis ex repellat quia. Magnam quae beatae non rerum quos voluptate voluptas. Nemo quo aut aliquam eos aut provident deserunt. Soluta et totam et temporibus est laudantium tenetur animi. Quaerat quibusdam vitae ipsa perspiciatis voluptates sunt.</p>', '<p>Et eos saepe fuga totam.</p>', 'amadeo/source/5cceed249882b185e6a53df08d04d24a.jpg', '1998-10-24', 0, NULL, NULL, NULL, NULL, NULL, 0, 1, '2017-06-08 02:20:19', '2017-06-08 02:20:19'),
(19, 'Sed aliquid nam eum qui.', 'enim-excepturi-et-velit-rerum-saepe-odit-expedita-iste', '<p>Dolorem dolor aut temporibus inventore odit. Aut ab modi nulla quis eos. Ut et enim eum mollitia est quam dolorem. Et delectus aut accusantium similique nemo facere nisi. Sapiente ea in error quam et debitis aut. Dolorem saepe rerum et ex atque sed velit. Maxime autem consequatur enim. Accusamus id dolore consequatur dolores. Sunt exercitationem unde rerum amet quo. Et consequatur vero repellat veritatis unde blanditiis optio. Libero ullam est quia dolore.</p>', '<p>Sit fugit accusantium ea reprehenderit.</p>', 'amadeo/source/99b854fea260f32a973ef7d16123fd66.jpg', '1992-09-11', 0, NULL, NULL, NULL, NULL, NULL, 0, 1, '2017-06-08 02:20:19', '2017-06-08 02:20:19'),
(20, 'Aliquam est quaerat quia mollitia odio rerum.', 'id-voluptas-aut-ullam-ipsum-quis', '<p>Voluptatibus aut ut accusantium qui. Autem sed consequuntur quis. Fugiat ea id asperiores. Quasi autem maxime quis. Pariatur sed doloremque fugiat dolore cupiditate. Sint eius tempora earum error optio.</p>', '<p>Quia hic commodi accusantium rem nostrum qui ex.</p>', 'amadeo/source/0ef07038174c53102d838fd5483f547d.jpg', '1998-04-28', 0, NULL, NULL, NULL, NULL, NULL, 0, 1, '2017-06-08 02:20:19', '2017-06-08 02:20:19'),
(21, 'Ut odit ut a inventore sunt distinctio doloremque.', 'non-dolorum-qui-consequatur-alias', '<p>Est sed maxime accusamus sed. Atque cumque nihil vitae impedit. Officia et dignissimos maxime modi numquam. Ut nihil similique iste harum ut. Rem harum nemo veritatis officiis et laboriosam nesciunt id. Ut autem tempore architecto ad veritatis. Aut sequi ut perferendis ipsam recusandae. Molestiae temporibus saepe dolore voluptatem eos aut debitis. Unde aut in autem saepe est in in. Alias aliquam occaecati sunt aut libero veniam et. Pariatur enim aperiam labore quia praesentium. Maiores vitae cupiditate odio voluptatibus.</p>', '<p>Expedita magnam id est id velit enim iure.</p>', 'amadeo/source/0a1ae6c0a2c84a99c2e1bcb5f3615264.jpg', '1982-12-21', 0, NULL, NULL, NULL, NULL, NULL, 0, 1, '2017-06-08 02:20:19', '2017-06-08 02:20:19'),
(22, 'Et blanditiis est et tempora.', 'dolorem-ea-at-aperiam-a-similique-expedita', '<p>Tempora eaque omnis doloribus blanditiis tenetur nisi. Iure molestiae nihil ea eos. Ipsa aut sunt aut ipsum dolorum. Non asperiores dolorem quam et neque. Voluptate dignissimos accusantium necessitatibus quia quos. Eos laboriosam voluptatem iure iure ab.</p>', '<p>Accusamus cupiditate illo repellendus quia ducimus rerum. Exercitationem iure dolor quas rem ut.</p>', 'amadeo/source/8bba91cfdd3e107287e5dfaa150cae04.jpg', '2001-01-06', 0, NULL, NULL, NULL, NULL, NULL, 0, 1, '2017-06-08 02:20:19', '2017-06-08 02:20:19'),
(23, 'Rem et fugiat ut illo dolor.', 'aut-harum-veniam-non', '<p>Totam occaecati aut doloremque libero provident quo aliquid recusandae. Provident nihil placeat iure voluptas rerum. Praesentium dicta et quia vel provident sit. Quo rerum id et est non voluptas corporis vel. Beatae quam alias dignissimos et ab.</p>', '<p>Quia voluptates sed sint ducimus autem libero fuga.</p>', 'amadeo/source/e111196649b1ef3e747614e0f45ec40a.jpg', '1993-06-06', 0, NULL, NULL, NULL, NULL, NULL, 0, 1, '2017-06-08 02:20:19', '2017-06-08 02:20:19'),
(24, 'Asperiores veritatis tenetur voluptas aliquam velit sequi excepturi molestiae.', 'ducimus-qui-rerum-tempore-quam-voluptas-at-provident', '<p>Itaque dignissimos dolores tempora dolore debitis. Earum voluptatibus cumque voluptatem doloribus odit rerum eaque. Rerum in consequuntur molestias enim consequatur. Aut ut est corporis eveniet sint occaecati quia. Harum voluptas omnis veniam adipisci. Quas ut nobis nobis et sint.</p>', '<p>Aut eligendi ipsum repellat voluptate tenetur perferendis in.</p>', 'amadeo/source/d78e4104417d223e1d6587142ebb3c21.jpg', '1990-01-12', 0, NULL, NULL, NULL, NULL, NULL, 0, 1, '2017-06-08 02:20:19', '2017-06-08 02:20:19'),
(25, 'Assumenda accusantium aliquid sunt quia nihil voluptate.', 'rerum-cumque-facere-rerum-ullam-magni-fuga', '<p>Officia voluptatem at tempore velit. Est eveniet quas ea voluptatem laboriosam ad. Est quia itaque temporibus vel. Quaerat culpa odit accusamus hic sed in accusamus quaerat. Libero non nihil laboriosam dolor quasi quia et. Molestiae velit animi in cupiditate qui illum sunt.</p>', '<p>Soluta facere iure aut enim at qui consequuntur.</p>', 'amadeo/source/f6391f6578f2a4ae2f524c6a7f6b103d.jpg', '1995-11-12', 0, NULL, NULL, NULL, NULL, NULL, 0, 1, '2017-06-08 02:20:19', '2017-06-08 02:20:19'),
(26, 'Quod voluptas provident amet quos itaque.', 'nihil-architecto-nesciunt-et-recusandae-qui', '<p>Excepturi aliquid porro beatae minus eius dolorum. Sed quibusdam quis provident est excepturi debitis. Qui vel velit incidunt et nemo. In similique illo voluptas voluptatum alias inventore vel. Ut numquam impedit ut quia iusto debitis sit ut. Recusandae vitae explicabo sint porro et et aut. Illo rerum vel soluta dolores omnis rerum. Iusto nihil omnis quidem veritatis voluptatem et. Provident similique architecto odio voluptas dicta. Aut mollitia omnis nemo tempora. Aut laboriosam et deserunt id sit nobis.</p>', '<p>Nihil officiis earum occaecati. Eum nihil sint quas occaecati quidem hic.</p>', 'amadeo/source/841351adc5727be65a470fb48a9e0654.jpg', '2017-04-11', 0, NULL, NULL, NULL, NULL, NULL, 0, 1, '2017-06-08 02:20:19', '2017-06-08 02:20:19'),
(27, 'Sunt incidunt molestiae amet sed qui quis blanditiis.', 'eligendi-vitae-perferendis-porro-excepturi', '<p>Accusamus dolores neque eius voluptates ab minus. Eligendi voluptas voluptates distinctio in maxime perspiciatis. Quas et nihil ut assumenda eligendi est eius enim. Sed perferendis voluptas et. Totam nesciunt eveniet est dolorum maxime nemo velit commodi. Laboriosam qui facere sint aspernatur. Praesentium dolores dolor deserunt qui sunt harum. Nesciunt incidunt inventore vero non sit delectus repellat. Quae quia necessitatibus sint.</p>', '<p>Qui consequatur magnam sint id quae voluptatem aut.</p>', 'amadeo/source/9228bc185e343b0aeeafd21ded9cac0b.jpg', '1989-05-29', 0, NULL, NULL, NULL, NULL, NULL, 0, 1, '2017-06-08 02:20:19', '2017-06-08 02:20:19'),
(28, 'Iure quia natus ducimus.', 'ipsum-maiores-excepturi-velit-est-tempore-culpa-quia-odit', '<p>Quia minima aut quam culpa veritatis dolor. Qui eius voluptas ipsum ut. Qui neque temporibus et molestias aliquam. Reprehenderit a ipsam maxime et rerum. Similique sequi et dolor natus et. Eos et nulla ea et inventore sint qui. Esse ex rerum perferendis perspiciatis mollitia et. Aut natus magni neque voluptates. Nihil sunt nam est sint ut. Ratione molestias praesentium ut eligendi iusto. Reprehenderit reprehenderit in sit quo.</p>', '<p>Porro officiis eum deserunt est. Sed quod est et quis esse.</p>', 'amadeo/source/b4b3cef310466645d136d87ec334a116.jpg', '2009-02-08', 0, NULL, NULL, NULL, NULL, NULL, 0, 1, '2017-06-08 02:20:19', '2017-06-08 02:20:19'),
(29, 'Velit necessitatibus libero maiores voluptas debitis quo explicabo.', 'ut-dicta-deserunt-nobis-sunt-vero-ut', '<p>Atque et minima velit sit consequatur accusamus in. Commodi aliquam voluptatum perspiciatis eaque. Laboriosam iste molestiae placeat minima molestiae est est. Blanditiis occaecati eum hic explicabo accusamus. Blanditiis aliquam quos culpa neque ut aliquam quod. Consequuntur occaecati in optio beatae blanditiis. Possimus magnam deserunt excepturi quidem animi. Repellat quaerat nisi voluptatem. Eius est asperiores dolorem vel unde quidem. Ipsum hic accusamus ut qui repudiandae soluta. Inventore ut excepturi unde reprehenderit. Adipisci veniam odio rem voluptatibus officia placeat.</p>', '<p>Sequi aperiam error sit sit sed cumque veniam animi.</p>', 'amadeo/source/b5e6c45478e681242ac018a525ad9bcc.jpg', '2007-07-04', 0, NULL, NULL, NULL, NULL, NULL, 0, 1, '2017-06-08 02:20:19', '2017-06-08 02:20:19'),
(30, 'Aspernatur et voluptatem quia iusto nobis molestiae labore.', 'dolore-sit-odio-error', '<p>Enim culpa laborum quas aspernatur accusamus iure. Excepturi omnis sunt voluptatem et. Nostrum labore non placeat vel labore et. Veniam voluptate quae amet nesciunt aut voluptatem enim ut. Perspiciatis accusantium quam saepe sed omnis doloribus aut. Atque omnis distinctio mollitia quidem perspiciatis. Sunt voluptates consectetur consectetur debitis quia nobis. Autem ad sunt blanditiis perferendis consequatur. Illum saepe hic nulla velit. Dolorem magnam debitis architecto totam aliquid nulla alias accusamus. Perferendis iste ullam architecto at ullam.</p>', '<p>Est sequi rerum ipsam nostrum vel nisi. Beatae eius nisi ea sapiente enim animi.</p>', 'amadeo/source/68e3bde4b117d34cee08eb277938bdcf.jpg', '1975-04-04', 0, NULL, NULL, NULL, NULL, NULL, 0, 1, '2017-06-08 02:20:19', '2017-06-08 02:20:19'),
(31, 'Voluptatem pariatur quo vel.', 'illum-perspiciatis-fugiat-ex-iste-est', '<p>Sequi quidem autem quibusdam distinctio esse. Illum aut assumenda modi quia dolor qui a. Sit ipsum architecto sit rerum quia. Nobis est reprehenderit voluptas amet. Nihil corporis rerum aut rerum voluptas velit quos deleniti. Aspernatur corporis sunt repudiandae voluptate. Odio et delectus eos sit sunt sit. Alias veritatis consectetur eos exercitationem soluta cupiditate. Quaerat eum porro cumque ut expedita tenetur eum. Sit omnis voluptatem et velit est inventore. Soluta impedit quis officia.</p>', '<p>Consequatur deleniti dolore eum veniam in pariatur doloremque. Doloremque at quasi ipsa eius non.</p>', 'amadeo/source/4382b4ab9e0001276c2fc926ecb8c85d.jpg', '2000-02-08', 0, NULL, NULL, NULL, NULL, NULL, 0, 1, '2017-06-08 02:20:19', '2017-06-08 02:20:19'),
(32, 'Maiores sint tempore fuga a vitae.', 'ut-veniam-quam-numquam-qui-a-qui-natus-ut', '<p>Est nulla nisi enim ex inventore reiciendis. Non et veritatis perspiciatis eveniet saepe voluptas rerum pariatur. Provident voluptatem qui ratione incidunt alias. Nihil quam laborum quod vel necessitatibus. Sed alias repellat asperiores distinctio nisi excepturi sapiente harum. Vero repellat atque laudantium minus tempore temporibus molestiae. Dolorum consequatur accusantium dignissimos architecto quae. Voluptatum distinctio cupiditate facere et harum.</p>', '<p>Sapiente suscipit et sit. Culpa dicta esse vel in officia consequuntur culpa.</p>', 'amadeo/source/7744bb01233f6f0ced11bf4303832c66.jpg', '1974-04-24', 0, NULL, NULL, NULL, NULL, NULL, 0, 1, '2017-06-08 02:20:19', '2017-06-08 02:20:19'),
(33, 'Culpa itaque molestiae natus enim.', 'maiores-tenetur-explicabo-quia-maiores-ex', '<p>Architecto et id molestias ut autem quia. Perferendis natus consequatur assumenda pariatur. Adipisci omnis et sed est aut quaerat excepturi. Sapiente cumque consequuntur quis ex cumque. Adipisci nemo asperiores dolores et dolor odio cupiditate. Non labore impedit libero. Sint non iure qui aperiam molestias. Sit quia neque ut excepturi minus officia eaque. Officia facilis et quis quisquam harum sint veniam.</p>', '<p>Quidem aperiam perspiciatis sapiente consequatur vel exercitationem quos dignissimos. Et dolor dolorem veniam totam ipsum et consequuntur quae.</p>', 'amadeo/source/6d377cf54a8665165f9baffa957fcf48.jpg', '1989-07-19', 0, NULL, NULL, NULL, NULL, NULL, 0, 1, '2017-06-08 02:20:19', '2017-06-08 02:20:19'),
(34, 'Rerum et dolorem molestiae eaque tempore nisi sed maxime.', 'earum-tempore-voluptates-reprehenderit-molestias-facere', '<p>Similique sint rerum maxime accusantium. Odio sint ipsum labore optio. Accusamus voluptas voluptatem ut quos vitae. Aut inventore vitae dolorem at minus. Recusandae consequuntur eveniet quod ipsum eaque. Quia ullam necessitatibus alias accusamus magni reprehenderit. Mollitia ut hic labore numquam libero reiciendis. Atque aperiam libero itaque laborum voluptas.</p>', '<p>Qui ut enim eos molestiae quia. Nostrum aut quo aut atque vitae quo aut architecto.</p>', 'amadeo/source/6b99b90af339c6d717d207131035532b.jpg', '2004-05-07', 0, NULL, NULL, NULL, NULL, NULL, 0, 1, '2017-06-08 02:20:19', '2017-06-08 02:20:19'),
(35, 'Quis libero id autem sunt.', 'veritatis-nostrum-esse-numquam-eos-ut-tempora-voluptatem', '<p>Earum provident dolore nemo nulla voluptas ut delectus. Illum consectetur labore iure. Voluptatum ut eos quia vitae qui tempora inventore quidem. Natus debitis laborum nihil pariatur qui ipsa magnam. Qui et officiis velit voluptatum aut aliquam autem. Voluptate qui et ut debitis.</p>', '<p>Iusto dolor cum omnis id odio ullam.</p>', 'amadeo/source/4cb49d5cb82b69f4900f5480d66a27b3.jpg', '1998-08-04', 0, NULL, NULL, NULL, NULL, NULL, 0, 1, '2017-06-08 02:20:19', '2017-06-08 02:20:19'),
(36, 'Quia culpa incidunt qui et.', 'adipisci-consequatur-libero-iusto-cupiditate-est-accusamus-enim-nihil', '<p>Et beatae voluptas veniam expedita voluptas ipsa sequi. Cum illum animi quae nobis. Distinctio dolores reprehenderit impedit. Officiis error corrupti ipsam minus occaecati molestiae. Ut qui id neque enim in illo. Animi reprehenderit animi numquam maxime a qui laborum. Asperiores tenetur assumenda veritatis cum excepturi laudantium ipsa ut. Voluptatem repellendus voluptatem rerum placeat minus libero. Et voluptatibus sit ea illo totam.</p>', '<p>Blanditiis quo rerum ut rerum. Quia sed ducimus dolores sit aut similique.</p>', 'amadeo/source/441b0a45e337a1a139207da0346162c7.jpg', '1981-12-24', 0, NULL, NULL, NULL, NULL, NULL, 0, 1, '2017-06-08 02:20:19', '2017-06-08 02:20:19'),
(37, 'Similique hic mollitia necessitatibus qui sint et nostrum exercitationem.', 'nihil-numquam-et-voluptates-architecto-voluptatem-omnis', '<p>Aut et vitae reprehenderit quo mollitia qui. Quas magnam culpa tenetur. Ab nesciunt eos omnis excepturi quae libero. Ducimus iste ipsum ad dolore saepe voluptatem totam voluptatem. Itaque nobis et cupiditate perspiciatis. Nemo quia sint fuga enim accusamus. Vitae dicta praesentium similique et repudiandae. Ut harum recusandae soluta numquam. Amet rerum veniam consequatur autem.</p>', '<p>Cum molestiae et officiis ex.</p>', 'amadeo/source/ec192053d53669256bfa397ea14575d5.jpg', '2008-09-20', 0, NULL, NULL, NULL, NULL, NULL, 0, 1, '2017-06-08 02:20:19', '2017-06-08 02:20:19'),
(38, 'Sit et perferendis laudantium eos.', 'occaecati-voluptatem-dolores-odit-nemo-commodi-id-corrupti-repellat', '<p>Omnis ea porro consequuntur quod doloribus molestiae. Nisi consequatur est quisquam tenetur voluptatem enim non. Ut molestiae a dignissimos est debitis. Et magni possimus molestiae soluta. Est soluta voluptate aut ut dolore. Sed ipsum quae officia non iure. Itaque occaecati officia ut explicabo id placeat.</p>', '<p>Qui aut veniam est et. Delectus voluptatem ut sint ut nam assumenda culpa aliquid.</p>', 'amadeo/source/412d1add404e664b1e8ee658cb37eb56.jpg', '1982-11-27', 0, NULL, NULL, NULL, NULL, NULL, 0, 1, '2017-06-08 02:20:19', '2017-06-08 02:20:19'),
(39, 'Voluptatem quae eveniet exercitationem.', 'eaque-et-magnam-aperiam-minus-autem-impedit-doloribus', '<p>Molestiae ipsam omnis explicabo aliquam vero. Ea ut aut quis officiis. Et molestias voluptates tempore sint aut. Totam quis et dignissimos non et vitae. Incidunt ut mollitia occaecati. Et sit eveniet repudiandae sit quam omnis. Unde nam voluptatem et. Aut deleniti aut reprehenderit sunt incidunt. Magni eum et ullam cumque.</p>', '<p>Quas eius non neque beatae rem iure deserunt.</p>', 'amadeo/source/dc673d40f8a53c7705a5852446450b13.jpg', '1973-10-26', 0, NULL, NULL, NULL, NULL, NULL, 0, 1, '2017-06-08 02:20:19', '2017-06-08 02:20:19'),
(40, 'Et odit incidunt explicabo hic ipsam repellendus.', 'iure-veniam-et-sit-a-voluptatum-autem', '<p>Sapiente ipsa ut qui dolores voluptatibus nam et et. Et fugiat minima est nostrum adipisci est ut. Debitis est nostrum qui cumque cupiditate. Incidunt deserunt in totam aut velit quo rerum amet. Nemo ullam cumque reiciendis ad veniam odit. Quia eos corrupti corrupti.</p>', '<p>Facilis porro expedita vel labore consequuntur pariatur accusantium. Repellat quisquam culpa voluptatum fuga voluptatem rerum minus aliquid.</p>', 'amadeo/source/9a5363279ce0351529161ddd937b223d.jpg', '1982-04-06', 0, NULL, NULL, NULL, NULL, NULL, 0, 1, '2017-06-08 02:20:19', '2017-06-08 02:20:19'),
(41, 'Nisi voluptate qui qui fuga facere aliquam rem.', 'id-minus-laboriosam-explicabo-totam-non-qui', '<p>Voluptatem ipsa omnis aut quaerat. A neque eius minus beatae quo accusamus officiis. Sunt aperiam assumenda eligendi. Nesciunt doloribus minima rerum. Dolor temporibus quo illo sint maiores doloribus. Natus ut et ut aut rerum. Quas placeat unde omnis cum laudantium. Ut tempore et iusto vero voluptas.</p>', '<p>Sit eum aut beatae consequatur mollitia consectetur. Velit quod nam voluptatem cupiditate dolores.</p>', 'amadeo/source/87e75a1fb583298813da9140d502df9e.jpg', '1976-02-01', 0, NULL, NULL, NULL, NULL, NULL, 0, 1, '2017-06-08 02:20:19', '2017-06-08 02:20:19'),
(42, 'Labore dolorum sapiente nesciunt porro.', 'provident-officia-distinctio-quia-quaerat-autem-voluptas-ea-harum', '<p>Quis consequatur quaerat pariatur aut. Inventore cum ut velit non. Dolorem qui optio perferendis vel est inventore. Voluptates placeat molestiae dolores consequatur aut impedit. Voluptas explicabo sint alias aliquid quas et. Modi enim culpa ipsam hic a nisi velit.</p>', '<p>Deserunt ratione molestias temporibus voluptates ratione facere porro.</p>', 'amadeo/source/e8286c1d70ae3fd430f5b7a47ca901b3.jpg', '2009-08-23', 0, NULL, NULL, NULL, NULL, NULL, 0, 1, '2017-06-08 02:20:19', '2017-06-08 02:20:19'),
(43, 'Doloribus ut odio iusto qui.', 'pariatur-mollitia-architecto-corrupti-possimus-alias-et-facere-debitis', '<p>Dignissimos perferendis quos sint culpa qui. A corporis quisquam illo blanditiis perspiciatis ut ducimus. Fugit non quidem sapiente labore. Dolorum cumque repudiandae quia voluptas magnam molestiae. Voluptatem consequatur sed reprehenderit modi voluptas iure a. Dolores voluptates repudiandae sed ullam.</p>', '<p>Voluptatem reiciendis est nostrum.</p>', 'amadeo/source/c5d05f24d9957c43c7fea31145384842.jpg', '1987-06-02', 0, NULL, NULL, NULL, NULL, NULL, 0, 1, '2017-06-08 02:20:19', '2017-06-08 02:20:19'),
(44, 'Incidunt nihil incidunt voluptatum magni explicabo facere omnis.', 'quia-autem-autem-officia', '<p>Quas recusandae omnis aspernatur sit. Illum expedita omnis occaecati quia et doloribus tenetur est. Voluptates excepturi aut ut quis voluptatem accusamus et. Dignissimos eos animi autem id magni. Maiores sequi atque et repellendus ut. Eos facere aut et. Quas molestiae qui excepturi minus nihil deserunt. Modi est voluptatem aliquid voluptates cum. Officiis possimus et eos harum. Ducimus animi voluptatem aut molestiae eum aut.</p>', '<p>Quis rem aut reiciendis necessitatibus. Nemo iure est in sapiente dolorem ipsa eos.</p>', 'amadeo/source/d92f669d1dd8c8e8211d2edd317b4e31.jpg', '2017-02-16', 0, NULL, NULL, NULL, NULL, NULL, 0, 1, '2017-06-08 02:20:19', '2017-06-08 02:20:19'),
(45, 'Explicabo dolores accusamus eum laudantium architecto facere.', 'voluptatem-praesentium-id-in-laudantium', '<p>Sint nam et nam dolor provident explicabo eum ex. Aut itaque voluptatibus est voluptates odio veritatis ut. Eligendi quis nihil modi explicabo. Dignissimos magnam vero occaecati ipsa sint delectus dignissimos et. Sunt sunt veniam hic iste. Sunt debitis aut iure ipsa. Dolor est minus ratione. Numquam et quo qui expedita ullam quia sit dolorem. Itaque tempora explicabo aut neque iure enim rem ut.</p>', '<p>Et sed esse beatae natus et.</p>', 'amadeo/source/13aeac78cc876a77692aa29bfce40d85.jpg', '1975-03-11', 0, NULL, NULL, NULL, NULL, NULL, 0, 1, '2017-06-08 02:20:19', '2017-06-08 02:20:19'),
(46, 'Laborum voluptatum doloribus velit illo neque maxime.', 'sint-accusantium-totam-laborum', '<p>Quas quos et nulla voluptatibus et cupiditate quia. Repellendus expedita aut libero optio aut. Est corrupti repudiandae ut ea modi. Neque inventore inventore maxime labore dolorem. Consequatur quis cupiditate quia. Nihil ut consectetur earum fuga.</p>', '<p>In et quo quisquam ducimus itaque. Asperiores eos eveniet voluptate illum facere ut velit.</p>', 'amadeo/source/f4d0550a48488a3657e962c78497c3a1.jpg', '1986-08-03', 0, NULL, NULL, NULL, NULL, NULL, 0, 1, '2017-06-08 02:20:19', '2017-06-08 02:20:19'),
(47, 'Ipsa ut nesciunt dolores reprehenderit et est ratione.', 'a-rerum-dignissimos-aperiam-ipsa-ut-est-reiciendis-corporis', '<p>Magni consequatur beatae magnam voluptatibus sint eum consectetur. Reprehenderit labore fuga et laboriosam. Enim eaque eos sit. Nemo a quaerat quia non sed. Aspernatur aut consequatur est sit ab. Expedita nesciunt cum provident impedit debitis voluptates.</p>', '<p>Doloremque quae ab possimus. Distinctio dicta itaque laboriosam.</p>', 'amadeo/source/b32d77a45079a53d4f7604feb808ba21.jpg', '2015-08-23', 0, NULL, NULL, NULL, NULL, NULL, 0, 1, '2017-06-08 02:20:20', '2017-06-08 02:20:20'),
(48, 'Rerum cupiditate in laudantium expedita tempore eos quasi.', 'ratione-deleniti-voluptatem-magni-voluptate-quis', '<p>Provident voluptas officiis explicabo eaque atque minima repudiandae. Aut non fugiat consequatur soluta. Ut dolore illum adipisci totam sed at ipsam. Vitae harum dolore ullam qui commodi debitis nostrum dignissimos. Inventore non sint est illo quasi ad. Dolores cumque consequuntur qui ipsam numquam iusto. Eius recusandae rem eos ipsum sint et vel sint. Harum quod nostrum qui repellendus ut ad qui sed. Autem ea iure maxime placeat. Voluptatem aliquam rerum assumenda cumque beatae. Porro in ullam sed quo a vero.</p>', '<p>Et eos et qui id.</p>', 'amadeo/source/72aac0c077d265b2d8ff9c3802684690.jpg', '2007-10-30', 0, NULL, NULL, NULL, NULL, NULL, 0, 1, '2017-06-08 02:20:20', '2017-06-08 02:20:20'),
(49, 'Voluptatem explicabo voluptatibus non natus vel esse.', 'dolorem-minus-saepe-dicta', '<p>Et consequatur voluptates nesciunt aliquam. Ea odio animi ab quo officiis. Delectus et veniam est animi dolorem qui. Ut eum praesentium autem non nisi facilis modi et. Dolores amet minima voluptas laudantium laboriosam culpa. Rem at asperiores sunt assumenda nesciunt. Perferendis occaecati voluptates molestias ipsam at maiores ab. Numquam sed accusantium minima odio voluptas architecto.</p>', '<p>Quas voluptas architecto impedit esse.</p>', 'amadeo/source/5a584578ee98dee46791f7706fae52de.jpg', '1978-11-09', 0, NULL, NULL, NULL, NULL, NULL, 0, 1, '2017-06-08 02:20:20', '2017-06-08 02:20:20'),
(50, 'Et est saepe asperiores non distinctio est.', 'doloremque-vel-voluptatem-eum-mollitia-mollitia-ut-rerum-culpa', '<p>Id ducimus cupiditate eveniet assumenda. Sequi vero qui ut et ut vitae officia. Dolorum est dolorum dolorum vitae ea est. Totam nesciunt totam a possimus accusantium. Velit tenetur quo itaque est dicta dolorem. Adipisci earum voluptatibus magnam doloremque illum occaecati non. Porro perferendis autem temporibus vel voluptas minima.</p>', '<p>Omnis vero quo animi. Aut nemo qui ut qui quibusdam rerum.</p>', 'amadeo/source/6cd2139caf42da7559c074c2b7e14d9d.jpg', '1971-08-26', 0, NULL, NULL, NULL, NULL, NULL, 0, 1, '2017-06-08 02:20:20', '2017-06-08 02:20:20'),
(51, 'Deleniti ad sed quia modi.', 'sit-itaque-repellat-fugit-reprehenderit-explicabo-aliquid-eum', '<p>Doloremque quasi qui distinctio illo minima. Nobis aut repudiandae impedit dolorem dolores molestiae asperiores. Assumenda dignissimos quo temporibus labore laboriosam sint ut. Beatae fugiat exercitationem aut accusantium deleniti esse. Eos eos eos nam perferendis commodi. Minima distinctio labore aperiam doloremque alias sint aliquid.</p>', '<p>Velit rerum ut corporis vel. Sit quo sunt doloribus distinctio voluptatem incidunt.</p>', 'amadeo/source/da32ee873049a4736c9acccf22f6d7e6.jpg', '1986-08-24', 0, NULL, NULL, NULL, NULL, NULL, 0, 1, '2017-06-08 02:20:20', '2017-06-08 02:20:20');

-- --------------------------------------------------------

--
-- Table structure for table `amd_image_content`
--

CREATE TABLE `amd_image_content` (
  `id` int(10) UNSIGNED NOT NULL,
  `for` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci,
  `actor` int(11) NOT NULL DEFAULT '0',
  `flag_publish` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `amd_image_content`
--

INSERT INTO `amd_image_content` (`id`, `for`, `image`, `actor`, `flag_publish`, `created_at`, `updated_at`) VALUES
(1, 'home.header', 'amadeo/source/imageContent/1496892763-banner.jpg', 1, 1, NULL, '2017-06-07 20:32:43'),
(2, 'home.about', 'amadeo/source/imageContent/1496892774-about-us-img.jpg', 1, 1, NULL, '2017-06-07 20:32:54'),
(3, 'about.header', 'amadeo/source/imageContent/1496910499-banner-about.jpg', 1, 1, NULL, '2017-06-08 01:28:19'),
(4, 'about.content', 'amadeo/source/imageContent/1496910520-about-us2-img.jpg', 1, 1, NULL, '2017-06-08 01:28:40'),
(5, 'event.header', 'amadeo/source/imageContent/1496910565-banner-event.jpg', 1, 1, NULL, '2017-06-08 01:29:25'),
(6, 'gallery.header', 'amadeo/source/imageContent/1496910605-banner-event.jpg', 1, 1, NULL, '2017-06-08 01:30:05'),
(7, 'article.header', 'amadeo/source/imageContent/1496910623-banner-event.jpg', 1, 1, NULL, '2017-06-08 01:30:23');

-- --------------------------------------------------------

--
-- Table structure for table `amd_meta`
--

CREATE TABLE `amd_meta` (
  `id` int(10) UNSIGNED NOT NULL,
  `for` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `meta_image` text COLLATE utf8mb4_unicode_ci,
  `meta_url` text COLLATE utf8mb4_unicode_ci,
  `meta_keyword` text COLLATE utf8mb4_unicode_ci,
  `actor` int(11) NOT NULL DEFAULT '0',
  `flag_publish` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `amd_meta`
--

INSERT INTO `amd_meta` (`id`, `for`, `meta_title`, `meta_description`, `meta_image`, `meta_url`, `meta_keyword`, `actor`, `flag_publish`, `created_at`, `updated_at`) VALUES
(1, 'home', NULL, NULL, '', NULL, NULL, 1, 1, NULL, '2017-06-08 20:40:09'),
(2, 'about', NULL, NULL, NULL, NULL, NULL, 0, 1, NULL, NULL),
(3, 'event', NULL, NULL, NULL, NULL, NULL, 0, 1, NULL, NULL),
(4, 'gallery', NULL, NULL, NULL, NULL, NULL, 0, 1, NULL, NULL),
(5, 'article', NULL, NULL, NULL, NULL, NULL, 0, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `amd_partner`
--

CREATE TABLE `amd_partner` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` text COLLATE utf8mb4_unicode_ci,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `priority` int(11) NOT NULL DEFAULT '0',
  `actor` int(11) NOT NULL,
  `flag_publish` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `amd_partner`
--

INSERT INTO `amd_partner` (`id`, `name`, `link`, `image`, `priority`, `actor`, `flag_publish`, `created_at`, `updated_at`) VALUES
(1, 'Fire', NULL, 'amadeo/source/partner/1496819255-logo-fire.png', 0, 1, 1, '2017-06-07 00:07:35', '2017-06-07 00:09:45');

-- --------------------------------------------------------

--
-- Table structure for table `amd_social`
--

CREATE TABLE `amd_social` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` text COLLATE utf8mb4_unicode_ci,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `priority` int(11) NOT NULL DEFAULT '0',
  `actor` int(11) NOT NULL,
  `flag_publish` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `amd_social`
--

INSERT INTO `amd_social` (`id`, `name`, `link`, `image`, `priority`, `actor`, `flag_publish`, `created_at`, `updated_at`) VALUES
(1, 'Facebook', NULL, 'amadeo/source/social/1496819777-icon-facebook-circle.png', 0, 1, 1, '2017-06-07 00:16:17', '2017-06-07 00:16:17');

-- --------------------------------------------------------

--
-- Table structure for table `amd_website`
--

CREATE TABLE `amd_website` (
  `id` int(10) UNSIGNED NOT NULL,
  `website` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brief` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci,
  `phone` text COLLATE utf8mb4_unicode_ci,
  `email` text COLLATE utf8mb4_unicode_ci,
  `google_map_url` text COLLATE utf8mb4_unicode_ci,
  `actor` int(11) NOT NULL DEFAULT '1',
  `flag_publish` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `amd_website`
--

INSERT INTO `amd_website` (`id`, `website`, `company`, `brief`, `address`, `phone`, `email`, `google_map_url`, `actor`, `flag_publish`, `created_at`, `updated_at`) VALUES
(1, 'Kingdom Finance', NULL, NULL, '<p>Kingdom Finance&nbsp;<br />\r\nGrogol Petamburan&nbsp;<br />\r\nJakarta Barat, Indonesia 41181&nbsp;</p>', '<p><strong>Telepon:&nbsp;</strong>+62 256 201871&nbsp;<br />\r\n<strong>Fax:&nbsp;</strong>+62 657 203455&nbsp;</p>', NULL, NULL, 1, 1, '2017-06-07 00:40:37', '2017-06-07 00:40:37');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_06_02_043323_create_meta', 1),
(4, '2017_06_02_043817_create_content', 1),
(5, '2017_06_02_044008_create_image_content', 1),
(6, '2017_06_02_044143_create_event', 1),
(7, '2017_06_02_044558_create_event_image', 1),
(8, '2017_06_02_044840_create_gallery', 1),
(9, '2017_06_02_045043_create_article_category', 1),
(10, '2017_06_02_045402_create_article', 1),
(11, '2017_06_02_045639_create_contact', 1),
(12, '2017_06_07_043131_create_amd_partner', 2),
(13, '2017_06_07_043750_create_amd_social', 2),
(14, '2017_06_07_044810_create_amd_website', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '0',
  `access` tinyint(1) NOT NULL DEFAULT '0',
  `permission` text COLLATE utf8mb4_unicode_ci,
  `avatar` text COLLATE utf8mb4_unicode_ci,
  `actor` int(11) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `password`, `active`, `access`, `permission`, `avatar`, `actor`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin Amadeo', 'admin', 'admin@amadeo.id', '$2y$10$QZyvbY2QGDQ7Jz7r3.mFsOamdW7gJ2b1TH3o/dxr2L2xMVCxX1dq.', 1, 0, NULL, '', 1, 'T70IE8ZM8cq55oqElsFuzPnUO53SflOTvc6TrCWde5AKjceGBXnPEk6TkyNH', '2017-06-02 00:23:55', '2017-06-07 00:51:07'),
(3, 'Jonathan Dharmawan', 'darthan914', 'darthan.sevenz@gmail.com', '$2y$10$LaiGQbrBSGn/e4BK0CKMhO2CCH.m8DWxuslXw7vwA/ogHTtr1cFLi', 1, 1, NULL, NULL, 1, '7jK7ZJMJf3PqQRk3lnb9OvMoxqrrRLJ8OC5AaZrNGNAivtHQNHuT7NZcCcwm', '2017-06-05 23:16:55', '2017-06-07 00:51:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `amd_article`
--
ALTER TABLE `amd_article`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `amd_article_slug_unique` (`slug`);

--
-- Indexes for table `amd_article_category`
--
ALTER TABLE `amd_article_category`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `amd_article_category_slug_unique` (`slug`);

--
-- Indexes for table `amd_contact`
--
ALTER TABLE `amd_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `amd_content`
--
ALTER TABLE `amd_content`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `amd_content_for_unique` (`for`);

--
-- Indexes for table `amd_event`
--
ALTER TABLE `amd_event`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `amd_event_slug_unique` (`slug`);

--
-- Indexes for table `amd_event_image`
--
ALTER TABLE `amd_event_image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `amd_gallery`
--
ALTER TABLE `amd_gallery`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `amd_gallery_slug_unique` (`slug`);

--
-- Indexes for table `amd_image_content`
--
ALTER TABLE `amd_image_content`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `amd_image_content_for_unique` (`for`);

--
-- Indexes for table `amd_meta`
--
ALTER TABLE `amd_meta`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `amd_meta_for_unique` (`for`);

--
-- Indexes for table `amd_partner`
--
ALTER TABLE `amd_partner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `amd_social`
--
ALTER TABLE `amd_social`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `amd_website`
--
ALTER TABLE `amd_website`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `amd_article`
--
ALTER TABLE `amd_article`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
--
-- AUTO_INCREMENT for table `amd_article_category`
--
ALTER TABLE `amd_article_category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `amd_contact`
--
ALTER TABLE `amd_contact`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `amd_content`
--
ALTER TABLE `amd_content`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `amd_event`
--
ALTER TABLE `amd_event`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `amd_event_image`
--
ALTER TABLE `amd_event_image`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `amd_gallery`
--
ALTER TABLE `amd_gallery`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
--
-- AUTO_INCREMENT for table `amd_image_content`
--
ALTER TABLE `amd_image_content`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `amd_meta`
--
ALTER TABLE `amd_meta`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `amd_partner`
--
ALTER TABLE `amd_partner`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `amd_social`
--
ALTER TABLE `amd_social`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `amd_website`
--
ALTER TABLE `amd_website`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
