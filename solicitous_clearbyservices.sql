-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 27, 2023 at 06:03 PM
-- Server version: 5.7.37
-- PHP Version: 8.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `solicitous_clearbyservices`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `img` text,
  `content` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `img`, `content`) VALUES
(1, 'Overview-com.jpg', 'Clearby Services dedicatedly providing Election Management solutions to Political Parties & Political Candidates in India.\r\n<br>\r\nClearby Services in Maharashtra is one of the leading businesses in the Election Management Solutions. Also known for Digital Marketing, Social Media Management, Online Reputation Management, SMS Marketing, International SMS Marketing, IVR, Election Management Software, Political Analysis, Opinion Poll, Media Management, and much more.\r\n<br>\r\n\r\nWe believe in principle that Clearby Services can only grow if we deliver Best Election Management Strategy & Solutions to Client that will help them to grow their Political Career. Our business model focuses on having long-term strategic relations with our clients by providing a combination of high quality, cost effective and on time delivery of Solutions.');

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `page_type` varchar(100) DEFAULT NULL,
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `page_type`, `image`) VALUES
(7, 'about', 'About-Us-banner.jpeg'),
(8, 'home', 'webimage17-resize.jpg'),
(9, 'contact', 'closeup-image-office-phone (1).jpg'),
(10, 'service', 'Seriveces-banner.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `phone`, `subject`, `message`) VALUES
(1, 'rogit', 'admin@gmail.com', '78958585856', 'Election War-room Strategy', 'sdfsadfds'),
(2, 'dm', 'dinesh@gmail.com', '8585858585', 'Digital Marketing', 'sd'),
(3, 'dm', 'dinesh@gmail.com', '8585858585', 'Digital Marketing', 'sd'),
(4, 'TiniHoigo', 'lilly_za@hotmail.com', '89032801500', 'SUBJECT', 'The financial Robot is your future wealth and independence. Telegram - @Cryptaxbot'),
(5, 'TiniHoigo', 'soldrebyrafik@gmail.com', '89036678980', 'SUBJECT', 'Looking for an easy way to make money? Check out the financial robot. Telegram - @Cryptaxbot'),
(6, 'TiniHoigo', 'bbq_bench@yahoo.com', '89034287604', 'SUBJECT', 'The best online investment tool is found. Learn more! Telegram - @Cryptaxbot'),
(7, 'TiniHoigo', 'santaclause1988@hotmail.com', '89037621824', 'SUBJECT', 'Start making thousands of dollars every week. Telegram - @Cryptaxbot'),
(8, 'TiniHoigo', 'arakazez@ezgaga.com', '89035082700', 'SUBJECT', 'Launch the financial Robot and do your business. Telegram - @Cryptaxbot'),
(9, 'TiniHoigo', 'perka@nswireless.org', '89033034451', 'SUBJECT', 'The huge income without investments is available, now! Telegram - @Cryptaxbot'),
(10, 'TiniHoigo', 'maxamedismail@yahoo.com', '89032588589', 'SUBJECT', 'Your money keep grow 24/7 if you use the financial Robot. Telegram - @Cryptaxbot'),
(11, 'TiniHoigo', 'bgrec2004@gmail.com', '89030851703', 'SUBJECT', 'The additional income for everyone. Telegram - @Cryptaxbot'),
(12, 'TiniHoigo', 'arian.hoodfar@gmail.com', '89030847339', 'SUBJECT', 'The best online job for retirees. Make your old ages rich. Telegram - @Cryptaxbot'),
(13, 'TiniHoigo', 'martinnapierski@yahoo.com', '89031838717', 'SUBJECT', 'Let your money grow into the capital with this Robot. Telegram - @Cryptaxbot'),
(14, 'TiniHoigo', 'fineson@verizon.net', '89037429469', 'SUBJECT', 'Robot is the best solution for everyone who wants to earn. Telegram - @Cryptaxbot'),
(15, 'TiniHoigo', 'pumangel7_@hotmail.com', '89038473269', 'SUBJECT', 'Make thousands of bucks. Pay nothing. Telegram - @Cryptaxbot'),
(16, 'TiniHoigo', 'SurplusSquare@Gmail.com', '89032329537', 'SUBJECT', 'Wow! This Robot is a great start for an online career. Telegram - @Cryptaxbot'),
(17, 'TiniHoigo', 'patnwanda9034@sbcglobal.net', '89035748575', 'SUBJECT', 'The financial Robot is your # 1 expert of making money. Telegram - @Cryptaxbot'),
(18, 'TiniHoigo', 'dlong02132@gmail.com', '89030314028', 'SUBJECT', 'Make money, not war! Financial Robot is what you need. Telegram - @Cryptaxbot'),
(19, 'RobertAbarm', 'sheila.jenkins1@icloud.com', '88872479981', 'SUBJECT', 'Passive income from cryptocurrency from $3000 (3000 EUR) per day https://telegra.ph/Verify-that-you-are-human-11-11-2?id-80534321'),
(20, 'TiniHoigo', 'sbnerd89@aol.com', '89036646598', 'SUBJECT', 'Launch the best investment instrument to start making money today. Telegram - @Cryptaxbot'),
(21, 'TiniHoigo', 'glafaurie@hotmail.com', '89030066841', 'SUBJECT', 'We know how to increase your financial stability. Telegram - @Cryptaxbot'),
(22, 'TiniHoigo', 'hankbennett53@yahoo.com', '89036449372', 'SUBJECT', 'No worries if you are fired. Work online. Telegram - @Cryptaxbot'),
(23, 'TiniHoigo', '9thseptember@gmail.com', '89031951936', 'SUBJECT', 'Small investments can bring tons of dollars fast. Telegram - @Cryptaxbot'),
(24, 'TiniHoigo', 'timbear87@gmail.com', '89036527033', 'SUBJECT', 'Let the Robot bring you money while you rest. Telegram - @Cryptaxbot'),
(25, 'TiniHoigo', 'jeffgordon1@windstream.net', '89030868251', 'SUBJECT', 'Make dollars just sitting home. Telegram - @Cryptaxbot'),
(26, 'TiniHoigo', 'kuku.nini@yahoo.com', '89034610468', 'SUBJECT', 'The online income is your key to success. Telegram - @Cryptaxbot'),
(27, 'TiniHoigo', 'sabir5484@yahoo.com', '89039733322', 'SUBJECT', 'Still not a millionaire? Fix it now! Telegram - @Cryptaxbot'),
(28, 'TiniHoigo', '15hschroder@riverside.k12.ia.us', '89033593939', 'SUBJECT', 'Your computer can bring you additional income if you use this Robot. Telegram - @Cryptaxbot'),
(29, 'TiniHoigo', 'crizel_bof12@yahoo.com', '89033340577', 'SUBJECT', 'Start making thousands of dollars every week just using this robot. Telegram - @Cryptaxbot'),
(30, 'TiniHoigo', 'pigletscutie2009@yahoo.com', '89033639762', 'SUBJECT', 'The fastest way to make you wallet thick is here. Telegram - @Cryptaxbot'),
(31, 'RobertAbarm', 'with.smiles@yahoo.de', '81826295364', 'SUBJECT', 'YOUR NEW INCOME FROM $3000 (3000 EUR) PER DAY https://telegra.ph/Verify-that-you-are-human-11-11-2?id-49938760'),
(32, 'TiniHoigo', 'vakimbo@yahoo.com', '89039953707', 'SUBJECT', 'Making money in the net is easier now. Telegram - @Cryptaxbot'),
(33, 'TiniHoigo', 'divorceattorppy@yahoo.com', '89033345462', 'SUBJECT', 'Rich people are rich because they use this robot. Telegram - @Cryptaxbot'),
(34, 'TiniHoigo', 'islasmaa@hotmail.com', '89036077719', 'SUBJECT', 'Even a child knows how to make money. Do you? Telegram - @Cryptaxbot'),
(35, 'TiniHoigo', 'maryhallbrook8@aol.com', '89033785782', 'SUBJECT', 'The online financial Robot is your key to success. Telegram - @Cryptaxbot'),
(36, 'TiniHoigo', 'toocoolnanners@yahoo.com', '89037135872', 'SUBJECT', 'Need money? Get it here easily! Just press this to launch the robot. Telegram - @Cryptaxbot'),
(37, 'TiniHoigo', 'anjalijindal95@gmail.com', '89030087035', 'SUBJECT', 'Online Bot will bring you wealth and satisfaction. Telegram - @Cryptaxbot'),
(38, 'TiniHoigo', 'curiouscutie@yahoo.com', '89039341287', 'SUBJECT', 'Provide your family with the money in age. Launch the Robot! Telegram - @Cryptaxbot'),
(39, 'TiniHoigo', 'dawnmichelle86@ymail.com', '89036863251', 'SUBJECT', 'The best online investment tool is found. Learn more! Telegram - @Cryptaxbot'),
(40, 'TiniHoigo', 'terroristzc@yahoo.com', '89030186605', 'SUBJECT', 'The huge income without investments is available, now! Telegram - @Cryptaxbot'),
(41, 'TiniHoigo', 'uniwolf2002@yahoo.com', '89033241293', 'SUBJECT', 'Additional income is now available for anyone all around the world. Telegram - @Cryptaxbot'),
(42, 'TiniHoigo', 'aliciasscheidt@yahoo.com', '89030066341', 'SUBJECT', 'Attention! Here you can earn money online! Telegram - @Cryptaxbot'),
(43, 'TiniHoigo', 'rania_aux_bo_yeux@hotmail.com', '89030791212', 'SUBJECT', 'Make dollars staying at home and launched this Bot. Telegram - @Cryptaxbot'),
(44, 'TiniHoigo', 'flemingtameyah@yahoo.com', '89034717433', 'SUBJECT', 'Need cash? Launch this robot and see what it can. Telegram - @Cryptaxbot'),
(45, 'TiniHoigo', 'notsosagemadon@live.com', '89036543787', 'SUBJECT', 'Attention! Financial robot may bring you millions! Telegram - @Cryptaxbot'),
(46, 'TiniHoigo', 'nevin_esmores@gmail.com', '89032135239', 'SUBJECT', 'Every your dollar can turn into $100 after you lunch this Robot. Telegram - @Cryptaxbot'),
(47, 'TiniHoigo', 'xemopunk13x@yahoo.com', '89038510816', 'SUBJECT', 'Make thousands of bucks. Pay nothing. Telegram - @Cryptaxbot'),
(48, 'TiniHoigo', 'entherful@yahoo.com', '89039148971', 'SUBJECT', 'One dollar is nothing, but it can grow into $100 here. Telegram - @Cryptaxbot'),
(49, 'TiniHoigo', 'fshow@1foru.com', '89038902794', 'SUBJECT', 'Have no money? Earn it online. Telegram - @Cryptaxbot'),
(50, 'TiniHoigo', 'ybkuore@aol.com', '89033800586', 'SUBJECT', 'Need cash? Launch this robot and see what it can. Telegram - @Cryptaxbot'),
(51, 'TiniHoigo', 'vickivpage@mindspring.com', '89033306168', 'SUBJECT', 'Try out the best financial robot in the Internet. Telegram - @Cryptaxbot'),
(52, 'TiniHoigo', 'janessaaa14@aim.com', '89032182317', 'SUBJECT', 'Provide your family with the money in age. Launch the Robot! Telegram - @Cryptaxbot'),
(53, 'TiniHoigo', 'ashleylostinspace@rocketmail.com', '89039549803', 'SUBJECT', 'The financial Robot is your # 1 expert of making money. Telegram - @Cryptaxbot'),
(54, 'TiniHoigo', 'macutin@gmail.com', '89039510627', 'SUBJECT', 'Wow! This Robot is a great start for an online career. Telegram - @Cryptaxbot'),
(55, 'TiniHoigo', 'yeniazavalz@yahoo.com', '89037085295', 'SUBJECT', 'The success formula is found. Learn more about it. Telegram - @Cryptaxbot'),
(56, 'TiniHoigo', 'dr.e.wneni.roo.n.ey@gmail.com', '89030918353', 'SUBJECT', 'Make money 24/7 without any efforts and skills. Telegram - @Cryptaxbot'),
(57, 'TiniHoigo', 'freddy0021@aol.com', '89032254361', 'SUBJECT', 'Make your laptop a financial instrument with this program. Telegram - @Cryptaxbot'),
(58, 'TiniHoigo', 'jashea.monique08@gmail.com', '89038254705', 'SUBJECT', 'No need to stay awake all night long to earn money. Launch the robot. Telegram - @Cryptaxbot'),
(59, 'TiniHoigo', 'badavis5705@yahoo.com', '89038760844', 'SUBJECT', 'Wow! This is a fastest way for a financial independence. Telegram - @Cryptaxbot'),
(60, 'TiniHoigo', 'rghines3@aol.com', '89035751902', 'SUBJECT', 'Make money online, staying at home this cold winter. Telegram - @Cryptaxbot'),
(61, 'TiniHoigo', 'hlkidd@wctel.net', '89033551251', 'SUBJECT', 'Turn $1 into $100 instantly. Use the financial Robot. Telegram - @Cryptaxbot'),
(62, 'TiniHoigo', 'marcia.mulcahy@att.net', '89036830645', 'SUBJECT', 'Start your online work using the financial Robot. Telegram - @Cryptaxbot'),
(63, 'TiniHoigo', 'rhenpuspitasari@rocketmail.com', '89035052338', 'SUBJECT', 'Start making thousands of dollars every week just using this robot. Telegram - @Cryptaxbot'),
(64, 'TiniHoigo', 'm_nor@rediffmail.com', '89031797291', 'SUBJECT', 'Attention! Financial robot may bring you millions! Telegram - @Cryptaxbot'),
(65, 'TiniHoigo', 'andrew.w.williams@ericsson.com', '89034321143', 'SUBJECT', 'Launch the financial Bot now to start earning. Telegram - @Cryptaxbot'),
(66, 'TiniHoigo', 'paige@earthlink.net', '89039716617', 'SUBJECT', 'Make thousands of bucks. Pay nothing. Telegram - @Cryptaxbot'),
(67, 'TiniHoigo', 'bandfusionband@yahoo.com', '89032260036', 'SUBJECT', 'Online earnings are the easiest way for financial independence. Telegram - @Cryptaxbot'),
(68, 'TiniHoigo', 'winter.01@hotmail.com', '89034357387', 'SUBJECT', 'Check out the new financial tool, which can make you rich. Telegram - @Cryptaxbot'),
(69, 'TiniHoigo', 'bandeshiboy@gmail.com', '89031550954', 'SUBJECT', 'We know how to increase your financial stability. Telegram - @Cryptaxbot'),
(70, 'TiniHoigo', 'calli_84@hotmail.com', '89033354849', 'SUBJECT', 'Still not a millionaire? The financial robot will make you him! Telegram - @Cryptaxbot'),
(71, 'TiniHoigo', 'thompsonfade@live.com', '89031492751', 'SUBJECT', 'Join the society of successful people who make money here. Telegram - @Cryptaxbot'),
(72, 'TiniHoigo', 'driveinchic_02@yahoo.com', '89031501456', 'SUBJECT', 'Robot is the best solution for everyone who wants to earn. Telegram - @Cryptaxbot'),
(73, 'TiniHoigo', 'blovgren77@gmail.com', '89030592398', 'SUBJECT', 'Attention! Financial robot may bring you millions! Telegram - @Cryptaxbot'),
(74, 'TiniHoigo', 'derbyfilly61@insightbb.com', '89039016989', 'SUBJECT', 'Try out the automatic robot to keep earning all day long. Telegram - @Cryptaxbot'),
(75, 'TiniHoigo', 'sassyass2525@yahoo.com', '89032883321', 'SUBJECT', 'We know how to become rich and do you? Telegram - @Cryptaxbot'),
(76, 'TiniHoigo', 'shyannecopeland23@gmail.com', '89036182521', 'SUBJECT', 'Make $1000 from $1 in a few minutes. Launch the financial robot now. Telegram - @Cryptaxbot'),
(77, 'TiniHoigo', 'jstimel5@yahoo.com', '89039694434', 'SUBJECT', 'Making money in the net is easier now. Telegram - @Cryptaxbot'),
(78, 'TiniHoigo', 'pepeluis3@hotmail.com', '89032402933', 'SUBJECT', 'The additional income for everyone. Telegram - @Cryptaxbot'),
(79, 'TiniHoigo', 'j.lamb184@yahoo.com', '89039402774', 'SUBJECT', 'Have no money? Earn it online. Telegram - @Cryptaxbot'),
(80, 'TiniHoigo', 'ely_rope@yahoo.com', '89037401676', 'SUBJECT', 'Still not a millionaire? The financial robot will make you him! Telegram - @Cryptaxbot'),
(81, 'TiniHoigo', 'brendajhenson@hotmail.com', '89036179887', 'SUBJECT', 'Earning money in the Internet is easy if you use Robot. Telegram - @Cryptaxbot'),
(82, 'TiniHoigo', 'leon77m@aol.com', '89035644443', 'SUBJECT', 'The financial Robot is your future wealth and independence. Telegram - @Cryptaxbot'),
(83, 'TiniHoigo', 'akiratominari33@yahoo.com', '89035120294', 'SUBJECT', 'The best online investment tool is found. Learn more! Telegram - @Cryptaxbot'),
(84, 'TiniHoigo', 'adriennewaynemckie@yahoo.com', '89032626633', 'SUBJECT', 'The financial Robot is your future wealth and independence. Telegram - @Cryptaxbot'),
(85, 'TiniHoigo', 'abryflgdzydwy@yahoo.com', '89032958840', 'SUBJECT', 'The huge income without investments is available, now! Telegram - @Cryptaxbot'),
(86, 'TiniHoigo', 'adrianm092@gmail.com', '89036130376', 'SUBJECT', 'Additional income is now available for anyone all around the world. Telegram - @Cryptaxbot'),
(87, 'TiniHoigo', 'jessicadoida@msn.com', '89035870483', 'SUBJECT', 'Watch your money grow while you invest with the Robot. Telegram - @Cryptaxbot'),
(88, 'TiniHoigo', 'powwen@gmail.com', '89030806136', 'SUBJECT', 'Make money 24/7 without any efforts and skills. Telegram - @Cryptaxbot'),
(89, 'TiniHoigo', 'saltwater24@sbcglobal.net', '89030663604', 'SUBJECT', 'Have no money? Earn it online. Telegram - @Cryptaxbot'),
(90, 'TiniHoigo', 'dam16cool@gmail.com', '89039755089', 'SUBJECT', 'Need some more money? Robot will earn them really fast. https://worldnews.elk.pl'),
(91, 'TiniHoigo', 'karla_mcfar740@yahoo.com', '89038319414', 'SUBJECT', 'Make your laptop a financial instrument with this program. https://worldnews.elk.pl'),
(92, 'TiniHoigo', 'heesang_11@hotmail.com', '89031790033', 'SUBJECT', 'Looking for additional money? Try out the best financial instrument. https://worldnews.elk.pl'),
(93, 'TiniHoigo', 'nfaway7@yahoo.com', '89031987630', 'SUBJECT', 'Buy everything you want earning money online. https://worldnews.elk.pl'),
(94, 'TiniHoigo', 'ekta.selarka@gmail.com', '89035673763', 'SUBJECT', 'Your money keep grow 24/7 if you use the financial Robot. https://worldnews.elk.pl'),
(95, 'TiniHoigo', 'luciene@worldpath.net', '89038229447', 'SUBJECT', 'Let the Robot bring you money while you rest. https://worldnews.elk.pl'),
(96, 'TiniHoigo', 'ftballplayerjd06@aol.com', '89032237700', 'SUBJECT', 'Watch your money grow while you invest with the Robot. https://worldnews.elk.pl'),
(97, 'TiniHoigo', 'cleppanen@lagalaxy.com', '89039890711', 'SUBJECT', 'Need money? The financial robot is your solution. https://worldnews.elk.pl'),
(98, 'TiniHoigo', 'packerfan811@yahoo.com', '89039618588', 'SUBJECT', 'Robot is the best solution for everyone who wants to earn. https://worldnews.elk.pl'),
(99, 'TiniHoigo', 'deadmanwalken@gmail.com', '89034886234', 'SUBJECT', 'Earning money in the Internet is easy if you use Robot. https://worldnews.elk.pl'),
(100, 'TiniHoigo', 'Packerfan867@yahoo.com', '89036070951', 'SUBJECT', 'Financial independence is what everyone needs. https://worldnews.elk.pl'),
(101, 'TiniHoigo', 'timniikkula@bigpond.com', '89032623480', 'SUBJECT', 'Watch your money grow while you invest with the Robot. https://worldnews.elk.pl'),
(102, 'TiniHoigo', 'doll2189@gmail.com', '89037154452', 'SUBJECT', 'Make money online, staying at home this cold winter. https://worldnews.elk.pl'),
(103, 'TiniHoigo', 'wangfei@sohu.com', '89039586753', 'SUBJECT', 'Make $1000 from $1 in a few minutes. Launch the financial robot now. https://worldnews.elk.pl'),
(104, 'TiniHoigo', 'harlyqin412@aol.com', '89038070794', 'SUBJECT', 'Looking for an easy way to make money? Check out the financial robot. https://worldnews.elk.pl'),
(105, 'TiniHoigo', 'rlinda_m@yahoo.com', '89037850858', 'SUBJECT', 'Make thousands of bucks. Pay nothing. https://worldnews.elk.pl'),
(106, 'TiniHoigo', 'zaraclariza@gmail.com', '89035522647', 'SUBJECT', 'Online Bot will bring you wealth and satisfaction. https://worldnews.elk.pl'),
(107, 'TiniHoigo', 'hcc9600@gmail.com', '89037229061', 'SUBJECT', 'The online financial Robot is your key to success. https://worldnews.elk.pl'),
(108, 'TiniHoigo', 'paula.fischer@tarot.com', '89035135777', 'SUBJECT', 'Launch the best investment instrument to start making money today. https://worldnews.elk.pl'),
(109, 'TiniHoigo', 'ithemitty@hotmail.com', '89032020381', 'SUBJECT', 'Let the financial Robot be your companion in the financial market. https://worldnews.elk.pl'),
(110, 'TiniHoigo', 'y2k_fmdj@yahoo.com', '89037580763', 'SUBJECT', 'Your money work even when you sleep. https://worldnews.elk.pl'),
(111, 'TiniHoigo', 'lhopkins33@comcast.net', '89030970666', 'SUBJECT', 'Turn $1 into $100 instantly. Use the financial Robot. https://worldnews.elk.pl'),
(112, 'TiniHoigo', 'keriann48@yahoo.com', '89035418814', 'SUBJECT', 'Every your dollar can turn into $100 after you lunch this Robot. https://worldnews.elk.pl'),
(113, 'TiniHoigo', 'haneef_19@msn.com', '89038966127', 'SUBJECT', 'The financial Robot is your # 1 expert of making money. https://worldnews.elk.pl'),
(114, 'TiniHoigo', 'bryanna62000@yahoo.com', '89034153845', 'SUBJECT', 'The fastest way to make you wallet thick is here. https://worldnews.elk.pl'),
(115, 'TiniHoigo', 'austinmayo@rocketmail.com', '89038902161', 'SUBJECT', 'One dollar is nothing, but it can grow into $100 here. https://worldnews.elk.pl'),
(116, 'TiniHoigo', 'shannon.nicole@yahoo.com', '89036840988', 'SUBJECT', 'Only one click can grow up your money really fast. https://worldnews.elk.pl'),
(117, 'TiniHoigo', 'airmans0529@aol.com', '89038544690', 'SUBJECT', 'Financial robot is your success formula is found. Learn more about it. https://worldnews.elk.pl'),
(118, 'TiniHoigo', 'slcone@hbci.com', '89031702615', 'SUBJECT', 'No need to stay awake all night long to earn money. Launch the robot. https://worldnews.elk.pl'),
(119, 'TiniHoigo', 'lchnnnixon22@yahoo.com', '89035750648', 'SUBJECT', 'Every your dollar can turn into $100 after you lunch this Robot. https://worldnews.elk.pl'),
(120, 'TiniHoigo', 'vonelderstein@yahoo.com', '89034606457', 'SUBJECT', 'We know how to increase your financial stability. https://newsworld.elk.pl'),
(121, 'TiniHoigo', 'kornelas33@gmail.com', '89032512415', 'SUBJECT', 'Attention! Here you can earn money online! https://newsworld.elk.pl'),
(122, 'TiniHoigo', 'nagaraja01@infosys.com', '89031845545', 'SUBJECT', 'Rich people are rich because they use this robot. https://newsworld.elk.pl'),
(123, 'TiniHoigo', 'pedram_eif@hotmail.com', '89039317160', 'SUBJECT', 'The best online job for retirees. Make your old ages rich. https://newsworld.elk.pl'),
(124, 'TiniHoigo', 'Brzinser@gmail.com', '89038782822', 'SUBJECT', 'The additional income is available for everyone using this robot. https://newsworld.elk.pl'),
(125, 'TiniHoigo', 'tracys2013@aol.com', '89034928880', 'SUBJECT', 'Everyone can earn as much as he wants suing this Bot. https://newsworld.elk.pl'),
(126, 'TiniHoigo', 'caronfamily@gmail.com', '89039281773', 'SUBJECT', 'Money, money! Make more money with financial robot! https://newsworld.elk.pl'),
(127, 'TiniHoigo', 'xbox0_0@yahoo.com', '89032033649', 'SUBJECT', 'Need some more money? Robot will earn them really fast. https://newsworld.elk.pl'),
(128, 'TiniHoigo', 'saraobey@btopenworld.com', '89035391241', 'SUBJECT', 'Start making thousands of dollars every week. https://newsworld.elk.pl'),
(129, 'TiniHoigo', 'jo.momma47@rocketmail.com', '89033397458', 'SUBJECT', 'Online earnings are the easiest way for financial independence. https://newsworld.elk.pl'),
(130, 'TiniHoigo', 'garg_ankur_3969@yahoo.com', '89039763675', 'SUBJECT', 'One click of the robot can bring you thousands of bucks. https://newsworld.elk.pl'),
(131, 'TiniHoigo', 'jack.martinez@engineer.com', '89033574175', 'SUBJECT', 'Every your dollar can turn into $100 after you lunch this Robot. https://newsworld.elk.pl'),
(132, 'TiniHoigo', 'robert@nervora.com', '89031334908', 'SUBJECT', 'Earn additional money without efforts and skills. https://newsworld.elk.pl'),
(133, 'TiniHoigo', 'floflo83700@gmail.com', '89033316841', 'SUBJECT', '# 1 financial expert in the net! Check out the new Robot. https://newsworld.elk.pl'),
(134, 'TiniHoigo', 'ginanjoey@gmail.com', '89036789713', 'SUBJECT', 'Need cash? Launch this robot and see what it can. https://newsworld.elk.pl'),
(135, 'TiniHoigo', 'satendraverma@hotmail.com', '89031519448', 'SUBJECT', 'Robot is the best way for everyone who looks for financial independence. https://newsworld.elk.pl'),
(136, 'TiniHoigo', 'LenaDianeSanchez@yahoo.com', '89036801063', 'SUBJECT', 'Your money keep grow 24/7 if you use the financial Robot. https://newsworld.elk.pl'),
(137, 'TiniHoigo', 'guardiegirl1@hotmail.com', '89032519040', 'SUBJECT', 'The online job can bring you a fantastic profit. https://newsworld.elk.pl'),
(138, 'TiniHoigo', 'sambosamasan@msn.com', '89031600530', 'SUBJECT', 'It is the best time to launch the Robot to get more money. https://newsworld.elk.pl'),
(139, 'TiniHoigo', 'guido914@gmail.com', '89038141763', 'SUBJECT', 'We know how to become rich and do you? https://newsworld.elk.pl'),
(140, 'TiniHoigo', 'gusmarioti@yahoo.com', '89030381688', 'SUBJECT', 'Your money keep grow 24/7 if you use the financial Robot. https://newsworld.elk.pl'),
(141, 'TiniHoigo', 'taranaqeshbandy@yahoo.com', '89032103088', 'SUBJECT', 'Launch the financial Robot and do your business. https://newsworld.elk.pl'),
(142, 'TiniHoigo', 'afsanehghoorchian@yahoo.com', '89037062108', 'SUBJECT', 'Provide your family with the money in age. Launch the Robot! https://newsworld.elk.pl'),
(143, 'TiniHoigo', 'sunnyguy00@yahoo.com', '89032255260', 'SUBJECT', 'Financial Robot is #1 investment tool ever. Launch it! https://newsworld.elk.pl'),
(144, 'TiniHoigo', 'dwhite706@earthlink.net', '89036147539', 'SUBJECT', 'Have no money? Itâ€™s easy to earn them online here. https://newsworld.elk.pl'),
(145, 'TiniHoigo', 'sumatidevi3@yahoo.com', '89031469095', 'SUBJECT', 'Making money in the net is easier now. https://newsworld.elk.pl'),
(146, 'TiniHoigo', 'allisonmacy48@yahoo.com', '89034650371', 'SUBJECT', 'The fastest way to make your wallet thick is found. https://newsworld.elk.pl'),
(147, 'TiniHoigo', 'wilmerbarrientos2008@yahoo.com', '89032386985', 'SUBJECT', 'Make thousands every week working online here. https://newsworld.elk.pl'),
(148, 'TiniHoigo', 'mspace2u@yahoo.com', '89030034663', 'SUBJECT', 'Have no money? Earn it online. https://newsworld.elk.pl'),
(149, 'TiniHoigo', 'jazyaranda@yahoo.com', '89038113704', 'SUBJECT', 'Robot never sleeps. It makes money for you 24/7. https://newsworld.elk.pl'),
(150, 'TiniHoigo', 'danilov85@gmail.com', '89033831794', 'SUBJECT', 'Financial robot keeps bringing you money while you sleep. https://newsworld.elk.pl'),
(151, 'TiniHoigo', 'rokasaine@yahoo.com', '89036044181', 'SUBJECT', 'The success formula is found. Learn more about it. https://newsworld.elk.pl'),
(152, 'TiniHoigo', 'porschy@aol.com', '89032726965', 'SUBJECT', 'Your money work even when you sleep. https://newsworld.elk.pl'),
(153, 'TiniHoigo', 'toleen.hlowa@yahoo.com', '89039439366', 'SUBJECT', 'The additional income is available for everyone using this robot. https://newsworld.elk.pl'),
(154, 'TiniHoigo', 'courtlynnjones@hotmail.com', '89034910252', 'SUBJECT', 'It is the best time to launch the Robot to get more money. https://newsworld.elk.pl'),
(155, 'TiniHoigo', 'superhottie@hotmail.com', '89031287398', 'SUBJECT', 'Make thousands of bucks. Pay nothing. https://newsworld.elk.pl'),
(156, 'TiniHoigo', 'roco_adv@yahoo.com', '89036887704', 'SUBJECT', 'The huge income without investments is available. https://newsworld.elk.pl'),
(157, 'TiniHoigo', 'mdinon@ccsd.k12.ak.us', '89038779828', 'SUBJECT', 'Every your dollar can turn into $100 after you lunch this Robot. https://newsworld.elk.pl'),
(158, 'TiniHoigo', 'kellywarren07@hotmail.com', '89033948608', 'SUBJECT', 'Making money is very easy if you use the financial Robot. https://newsworld.elk.pl'),
(159, 'TiniHoigo', 'normasunset@rooseveltmail.com', '89036879131', 'SUBJECT', 'Find out about the fastest way for a financial independence. https://newsworld.elk.pl'),
(160, 'TiniHoigo', 'pfootit@new.rr.com', '89036682126', 'SUBJECT', 'Automatic robot is the best start for financial independence. https://newsworld.elk.pl'),
(161, 'TiniHoigo', 'mimi4608@gmail.com', '89033753710', 'SUBJECT', 'Turn $1 into $100 instantly. Use the financial Robot. https://newsworld.elk.pl'),
(162, 'TiniHoigo', 'ranjanapradhan@gmail.com', '89030656610', 'SUBJECT', 'The fastest way to make your wallet thick is found. https://newsworld.elk.pl'),
(163, 'TiniHoigo', 'VCZarfati@Yahoo.com', '89032338938', 'SUBJECT', 'Everyone can earn as much as he wants now. https://newsworld.elk.pl'),
(164, 'TiniHoigo', 'gracebluerock@comcast.net', '89035732888', 'SUBJECT', 'The best way for everyone who rushes for financial independence. https://newsworld.elk.pl'),
(165, 'TiniHoigo', 'kevinrichardson799@yahoo.com', '89033883326', 'SUBJECT', 'Have no financial skills? Let Robot make money for you. https://newsworld.elk.pl'),
(166, 'TiniHoigo', 'vikingo1945@hotmail.com', '89036391064', 'SUBJECT', 'The huge income without investments is available. https://newsworld.elk.pl'),
(167, 'TiniHoigo', 'skidmore5@mchsi.com', '89033047199', 'SUBJECT', 'Make dollars staying at home and launched this Bot. https://newsworld.elk.pl'),
(168, 'TiniHoigo', 'ssetterberg@msn.com', '89034389495', 'SUBJECT', 'Financial robot guarantees everyone stability and income. https://newsworld.elk.pl'),
(169, 'TiniHoigo', 'silkeyaclaek@yahoo.com', '89039973998', 'SUBJECT', 'Even a child knows how to make $100 today with the help of this robot. https://newsworld.elk.pl'),
(170, 'TiniHoigo', 'seankellykelly@gmail.com', '89035493170', 'SUBJECT', 'Wow! This is a fastest way for a financial independence. https://newsworld.elk.pl'),
(171, 'TiniHoigo', 'myke-b@live.com', '89034100753', 'SUBJECT', 'We know how to make our future rich and do you? http://go.suqomuaq.com/0j35'),
(172, 'TiniHoigo', 'w.il.li.a.m.b.en.nett.wi@gmail.com', '89037023135', 'SUBJECT', 'The online job can bring you a fantastic profit. http://go.suqomuaq.com/0j35'),
(173, 'TiniHoigo', 'dnikoletseas@live.com', '89034892206', 'SUBJECT', 'Invest $1 today to make $1000 tomorrow. http://go.suqomuaq.com/0j35'),
(174, 'TiniHoigo', 'frankthetank94@hotmail.com', '89039815188', 'SUBJECT', 'Have no money? Itâ€™s easy to earn them online here. http://go.suqomuaq.com/0j35'),
(175, 'TiniHoigo', 'syedmehaboob1808@gmail.com', '89038132026', 'SUBJECT', 'Buy everything you want earning money online. http://go.suqomuaq.com/0j35'),
(176, 'TiniHoigo', 'radioetvemelvas@tugamail.com', '89038981259', 'SUBJECT', 'Attention! Here you can earn money online! http://go.suqomuaq.com/0j35'),
(177, 'TiniHoigo', 'kuanxiuxi2@gucciinstockshop.com', '89030389608', 'SUBJECT', 'Just one click can turn you dollar into $1000. http://go.suqomuaq.com/0j35'),
(178, 'TiniHoigo', 'at_the_beach246@yahoo.com', '89032487910', 'SUBJECT', 'Let your money grow into the capital with this Robot. http://go.suqomuaq.com/0j35'),
(179, 'TiniHoigo', 'Eveypuddingpop@gmail.com', '89038807147', 'SUBJECT', 'Let your money grow into the capital with this Robot. http://go.suqomuaq.com/0j35'),
(180, 'TiniHoigo', 'rajashekar_h_v@rediffmail.com', '89037955841', 'SUBJECT', 'Need money? Earn it without leaving your home. http://go.suqomuaq.com/0j35'),
(181, 'TiniHoigo', 'julie@gslevine.com', '89030051077', 'SUBJECT', 'The financial Robot is your # 1 expert of making money. http://go.suqomuaq.com/0j35'),
(182, 'TiniHoigo', 'tebe6sm@hotmail.com', '89036315868', 'SUBJECT', 'We know how to become rich and do you? http://go.suqomuaq.com/0j35'),
(183, 'TiniHoigo', 'tammy79998983@yahoo.com', '89033599649', 'SUBJECT', 'Launch the best investment instrument to start making money today. http://go.suqomuaq.com/0j35'),
(184, 'TiniHoigo', 'prsvox@gmail.com', '89030752278', 'SUBJECT', 'Your money keep grow 24/7 if you use the financial Robot. http://go.suqomuaq.com/0j35'),
(185, 'TiniHoigo', 'zac.reeves@hthtdeneps.sa.edu.org', '89036332790', 'SUBJECT', 'The huge income without investments is available. http://go.suqomuaq.com/0j35'),
(186, 'TiniHoigo', 'clinton_steph@yahoo.com', '89035872443', 'SUBJECT', 'This robot can bring you money 24/7. http://go.suqomuaq.com/0j35'),
(187, 'TiniHoigo', 'simonpthomas@gmail.com', '89039050202', 'SUBJECT', 'One dollar is nothing, but it can grow into $100 here. http://go.suqomuaq.com/0j35'),
(188, 'TiniHoigo', 'Adrian52.h@gmail.com', '89035990428', 'SUBJECT', 'It is the best time to launch the Robot to get more money. http://go.suqomuaq.com/0j35'),
(189, 'TiniHoigo', 'oscarmes29@yahoo.com', '89032620385', 'SUBJECT', 'Have no money? Itâ€™s easy to earn them online here. http://go.suqomuaq.com/0j35'),
(190, 'RobertFip', 'info@dedierentherapeut.nl', '84335397265', 'SUBJECT', '$$$$$$$ 500 million WhatsApp users - 108 countries https://telegra.ph/500-million-WhatsApp-users---108-countries-01-11-4?product-id-883897 $$$$$$$'),
(191, 'Mariahog', 'a.l.b.e.rtha.ns.hin.49@gmail.com', '83549898883', 'SUBJECT', 'Mjfejdjwdjiwdhwsuf hohaufheodajidhowaf hwidjidjqiohfuehooiPQKWODJQIJ IWJDOKDOWJDIjefiwjreir jwqifjweifewifeefjrghr jfejfekwlfjrghwjwajkdjwfew clearbyservices.com'),
(192, 'Michealdib', 'roslowe@optusnet.com.au', '88275838326', 'SUBJECT', 'STAY AHEAD OF THE COMPETITION WITH OUR ELITE SMM SERVICES Ð¿Â»Ñ—https://smm-elite-937835.blogspot.co.il/?l=0oi'),
(193, 'HiramSep', 'girtalos@yandex.com', '87664115936', 'SUBJECT', '<a href=https://megaremont.pro/gomel-restavratsiya-vann>restoration of the bath coating</a>'),
(194, 'Rohit Zadane', 'rohitzadane7888@gmail.com', '09075347180', 'Google Adwords', 'dfdsfsdfdsfdsfdsf'),
(195, 'Rohit Zadane', 'rohitzadane7888@gmail.com', '09075347180', 'Google Adwords', 'dfdsfsdfdsfdsfdsf'),
(196, 'Rohit Zadane', 'rohitzadane7888@gmail.com', '09075347180', 'Google Adwords', 'dfdsfsdfdsfdsfdsf'),
(197, 'rohit ', 'rohitzadane7888@gmail.com', '09075347180', 'Booth Management', 'hello'),
(198, 'dsf', 'rohitzadane7888@gmail.com', '09075347180', 'Google Adwords', 'fds'),
(199, 'Rohit Zadane', 'rohitzadane7888@gmail.com', '09075347180', 'Google Adwords', 'b hbvh'),
(200, 'Rohit Zadane', 'rohitzadane7888@gmail.com', '09075347180', 'Google Adwords', 'b hbvh'),
(201, 'Rohit Zadane', 'rohitzadane7888@gmail.com', '09075347180', 'Google Adwords', 'b hbvh'),
(202, 'Rohit Zadane', 'rohitzadane7888@gmail.com', '09075347180', 'SEO', 'x'),
(203, 'roshan jadhav', 'roshan@gmail.com', '8585698585', 'Image Building & PR', 'hello'),
(204, 'RoyZadane', 'rohitzadane7888@gmail.com', '09075347180', 'SEO', 'vvvv'),
(205, 'RoyZadane', 'rohitzadane7888@gmail.com', '09075347180', 'SEO', 'vvvv'),
(206, 'Rohit ', 'rohitzadane7888@gmail.com', '09075347180', 'Voter Slip', 'ajjkjiasifjhasidf'),
(207, 'Rohit ', 'rohitzadane7888@gmail.com', '09075347180', 'Voter Slip', 'ajjkjiasifjhasidf'),
(208, 'Rohit ', 'rohitzadane7888@gmail.com', '09075347180', 'Voter Slip', 'ajjkjiasifjhasidf'),
(209, 'Rohit ', 'rohitzadane7888@gmail.com', '09075347180', 'Voter Slip', 'ajjkjiasifjhasidf'),
(210, 'DennisAnync', 'yasen.krasen.13+88359@mail.ru', '88517616976', 'SUBJECT', 'Ufieuhdidhefh wjdwdjqwidjwefhwfakj oijofqwfbvsdfjfwej ijwqiofjewuhfwedjawdhewh ouhwidwjpouweiofeiouqwruio ioqwiwuifewifjfifhw jiwfjiewhfewgiewufewio clearbyservices.com'),
(211, 'Milind Test', 'milindtest@gmail.com', '9767168393', 'ELECTION MANAGEMENT SOLUTIONS', 'Test 123'),
(212, 'JamesFut', 'marco.merz@piranja.ch', '86894515677', 'SUBJECT', 'Achieve Search Engine Dominance: 3104 Verified Google Linksâ€”for FREE http://safegooglelink.slushshed.xyz/googlesafe'),
(213, 'Ajinkya Patil', 'ajjstyle1995@gmail.com', '07030361995', 'SEO', 'seo'),
(214, 'Mauricio Stoate', 'contact@webscraft.live', '06-94211762', 'Social Media Optimizations', 'GET USA, CANADA, UNITED KINGDOM AND WORLDWIDE TARGETED WEBSITE TRAFFIC\r\n\r\nBOOST YOUR WEBSITE VISITORS FROM ANY COUNTRY\r\nYOU WANT WITH TARGETED NICHE.\r\n\r\nVISIT : https://buytraffics.net\r\n\r\nBuy Traffics'),
(215, 'RobertCOALE', 'zelatcol@gmail.com', '89692867963', 'SUBJECT', 'Xin chÃ o, tÃ´i muá»‘n biáº¿t giÃ¡ cá»§a báº¡n.'),
(216, 'Roberthip', 'verlinde@ualberta.ca', '88848994384', 'SUBJECT', 'INVEST IN ALTCOINS AND LIVE THE LIFE OF ABUNDANCE: $5,000,000+ PER MONTH https://tria.sumy.ua/go.php?url=https://555.sell.app/product/list-of-15-altcoins-that-will-rise-in-price-by-50000-times-by-the-end-of-july-2023'),
(217, 'RobertCOALE', 'alfredegov@gmail.com', '88549888498', 'SUBJECT', 'Hallo, ek wou jou prys ken.'),
(218, 'WilliamTelty', 'alexisnunez83114@gmail.com', '89853746283', 'SUBJECT', 'INSTANT BITCOIN BONANZA: SECURE 12600 BTC TODAY http://swiftcrypto.lottovip888.xyz/fast12600'),
(219, 'RobertCOALE', 'alfredegov@gmail.com', '87598335922', 'SUBJECT', 'Ola, querÃ­a saber o seu prezo.'),
(220, 'Milind test', 'test@gmail.com', '9767168393', 'ELECTION MANAGEMENT SOLUTIONS', 'Test '),
(221, 'Rohit Zadane', 'rohitzadane7888@gmail.com', '09075347180', 'Social Media Management', '5454'),
(222, 'Aman kumar Meena', 'amanmeena730016@gmail.com', '07300169798', 'Social Media Management', 'wdaef'),
(223, 'Aman kumar Meena', 'amanmeena730016@gmail.com', '07300169798', 'Social Media Management', 'wdaef'),
(224, 'Aman kumar Meena', 'amanmeena730016@gmail.com', '07300169798', 'Social Media Management', 'wdaef'),
(225, 'Aman kumar Meena', 'amanmeena730016@gmail.com', '07300169798', 'Social Media Management', 'wdaef'),
(226, 'Aman kumar Meena', 'amanmeena730016@gmail.com', '07300169798', 'Social Media Optimizations', 'dwaefrgty'),
(227, 'Aman kumar Meena', 'amanmeena730016@gmail.com', '07300169798', 'Social Media Optimizations', 'dwaefrgty'),
(228, 'Aman kumar Meena', 'amanmeena730016@gmail.com', '07300169798', 'Social Media Optimizations', 'aswdefr'),
(229, 'Rohit Zadane', 'rohitzadane7888@gmail.com', '09075347180', 'Social Media Optimizations', 'testing'),
(230, 'Rohit Zadane', 'rohitzadane7888@gmail.com', '09075347180', 'Social Media Optimizations', 'testing'),
(231, 'Rohit Zadane', 'rohitzadane7888@gmail.com', '09075347180', 'Social Media Optimizations', 'testing'),
(232, 'Rohit Solicitous ', 'rohitzadane7888@gmail.com', '09075347180', 'Booth Management', 'Hello'),
(233, 'Aman kumar Meena', 'amanmeena730016@gmail.com', '07300169798', 'SEO', 'Demo'),
(234, 'Aman kumar Meena', 'amanmeena730016@gmail.com', '07300169798', 'Election Management Software', 'ssss'),
(235, 'Aman kumar Meena', 'amanmeena730016@gmail.com', '07300169798', 'Political Campaign Strategy & Planning', 'Testing'),
(236, 'Aman kumar Meena', 'amanmeena730016@gmail.com', '07300169798', 'Internet Presence & Reputation Management', 'Testing'),
(237, 'Aman kumar Meena', 'amanmeena730016@gmail.com', '07300169798', 'Social Media Optimizations', 'Dummy'),
(238, 'Aman kumar Meena', 'amanmeena730016@gmail.com', '07300169798', 'Social Media Optimizations', 'Dummy'),
(239, 'Aman kumar Meena', 'amanmeena730016@gmail.com', '07300169798', 'SEO', 'ssssssss'),
(240, 'Aman kumar Meena', 'amanmeena730016@gmail.com', '07300169798', 'SEO', 'ff'),
(241, 'Aman kumar Meena', 'amanmeena730016@gmail.com', '07300169798', 'Social Media Marketing', 'ssssss'),
(242, 'Aman kumar Meena', 'amanmeena730016@gmail.com', '07300169798', 'Social Media Management', 'vvvv'),
(243, 'Abdul azeem', 'azeemthatsme1994@gmail.com', '9718243123', 'Digital Marketing', 'Call required'),
(244, 'poiva', 'gsw0ripd@gmail.com', '82933165472', 'SUBJECT', 'Hi, this is Julia. I am sending you my intimate photos as I promised. https://tinyurl.com/283m6rx8'),
(245, 'RobertCOALE', 'alfredegov@gmail.com', '82616357476', 'SUBJECT', 'Sveiki, es gribÄ“ju zinÄt savu cenu.'),
(246, 'poiva', 'nkev9qy1@yahoo.com', '88329644469', 'SUBJECT', 'Hi, this is Anna. I am sending you my intimate photos as I promised. https://tinyurl.com/29nycwzr'),
(247, 'poiva', 'gx9i3wbt@yahoo.com', '85438424389', 'SUBJECT', 'Hi, this is Jenny. I am sending you my intimate photos as I promised. https://tinyurl.com/267wdglr'),
(248, 'RobertCOALE', 'alfredegov@gmail.com', '87914393572', 'SUBJECT', 'Hallo, ek wou jou prys ken.'),
(249, 'poiva', 'cvlbqex8@yahoo.com', '82455524169', 'SUBJECT', 'Hi, this is Irina. I am sending you my intimate photos as I promised. https://tinyurl.com/279pa4r8'),
(250, 'poiva', 'tcddv19p@yahoo.com', '84754998182', 'SUBJECT', 'Hi, this is Jenny. I am sending you my intimate photos as I promised. https://tinyurl.com/2bbcomuc'),
(251, 'poiva', '9eckw10v@icloud.com', '82222925929', 'SUBJECT', 'Hi, this is Irina. I am sending you my intimate photos as I promised. https://tinyurl.com/28u59lzv'),
(252, 'poiva', 'rmy4rcmv@yahoo.com', '88693147815', 'SUBJECT', 'Hi, this is Jenny. I am sending you my intimate photos as I promised. https://tinyurl.com/23dcvulc'),
(253, 'RobertCOALE', 'alfredegov@gmail.com', '87246269123', 'SUBJECT', 'Hola, querÃ­a saber tu precio..'),
(254, 'PhilCOALE', 'draikkimr976@gmail.com', '84213915823', 'SUBJECT', 'HÃ¦, Ã©g vildi vita verÃ° Ã¾itt.'),
(255, 'RobertCOALE', 'alfredegov@gmail.com', '87746972157', 'SUBJECT', 'Hallo, ek wou jou prys ken.'),
(256, 'poiva', 'nkgs411z@gmail.com', '86314174966', 'SUBJECT', 'Hi, this is Irina. I am sending you my intimate photos as I promised. https://tinyurl.com/ynrcphjx');

-- --------------------------------------------------------

--
-- Table structure for table `overview`
--

CREATE TABLE `overview` (
  `id` int(11) NOT NULL,
  `img` text,
  `content` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `overview`
--

INSERT INTO `overview` (`id`, `img`, `content`) VALUES
(1, 'Overview.jpg', 'Clearby is a leading election Management & digital marketing outsourcing company, providing a wide range of marketing services to businesses across industry verticals and election management services to across every election. The company serves all types and sizes of businesses striving to carve a niche for themselves through varied marketing techniques, sales tricks, digital marketing activities and marketing collaterals.\r\n<br>\r\n\r\nClearby knows what it takes to be a leader, and has a pool of carefully recruited political & digital marketing experts to support the success of each of our clients in utmost professional and upbeat manner. You can consult and get expert advice for fueling the overall growth of candidate or your business, irrespective of the stage your career or businesss cycle is at.\r\n<br>\r\n\r\nOur 7+ years of experience has enabled us to gain a significant position among leading Election Management & Digital Marketing companies across the nation.');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `service_parent_id` int(11) NOT NULL DEFAULT '0',
  `service_name` varchar(255) DEFAULT NULL,
  `service_description` longtext,
  `service_image` varchar(255) NOT NULL,
  `get_quote` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `service_parent_id`, `service_name`, `service_description`, `service_image`, `get_quote`) VALUES
(1, 0, 'ELECTION MANAGEMENT SOLUTIONS', 'Electoral systems are the detailed constitutional arrangements and voting systems that convert the vote into a political decision. The first step is to tally the votes, for which various vote counting systems and ballot types are used. Voting systems then determine the result on the basis of the tally.\r\n\r\n', 'election-man-serv (1).jpeg', 'no'),
(2, 1, 'POLITICAL CAMPAIGN STRATEGY & PLANNING', 'A political survey records the individuals attitude, opinion, mood, favoritism, and personal information. The data is then used to launch political campaigns to have the support from the maximum scalps.', 'politic-cam-serv (1).jpeg', 'no'),
(3, 1, 'IMAGE BUILDING & PR', 'Image building is creating an image for the politician or political party to get favorable votes from the people. Image building is done by constructing a story or narrative about them in which they play a heroic role over other politicians.', 'img-build.jpeg', 'no'),
(4, 1, 'ELECTION WAR-ROOM STRATEGY', 'Election war-room is a centralised office to manage all the election related activity, In war room we deeply monitor each and every activity of whole election process. Our teams monitor and control the activities in deeply manner.', 'war-strategy-min.jpg', 'no'),
(5, 1, 'POLITICAL SURVEY ANALYSIS', 'A political survey records the individuals attitude, opinion, mood, favoritism, and personal information. The data is then used to launch political campaigns to have the support from the maximum scalps.', 'political-survey-min.jpg', 'no'),
(6, 1, 'BOOTH MANAGEMENT', 'Booth management is based on old technique- Man to man marketing. We will develop the Strategy for managing booth-wise voter list, Booth wise monitoring Booth in charge monitoring & Training, Panna pramukh monitoring & Training, Booth wise favour checking etc.', 'booth-managment-min.jpg', 'no'),
(7, 1, 'ELECTION MANAGEMENT SOFTWARE', 'Voting Management Systems act as a one-stop-shop to manage voters, providing an all-encompassing solution and 17 types of voter list along with easiest way of voter search engine in English and regional languge.', 'elect-man-soft.jpeg', 'no'),
(8, 1, 'ELECTION SONGS, VIDEOGRAPHY & PHOTOGRAPHY', 'Music may seem insignificant in relation to the numerous elements of an election, but campaign songs can play a major role in the way that a candidate is perceived and have represented the constantly shifting relationship between music and politics. Equally A top-notch political campaign video is an excellent way to connect with voters, and these days, its a must for any political marketing.', 'photography-vidiography-min.jpg', 'no'),
(9, 1, 'MANIFESTO', 'Election manifestos are official statements of intended policies by political parties or candidate released during election campaigning. These documents cover a wide range of issues and present the plans, programmes and schemes of a political partyor candidate that will be implemented if voted to power. The ultimate aim of such policy documents is to garner the support and votes of people', 'manifesto.jpg', 'no'),
(10, 1, 'VOTER SLIP', 'Anyone can find Polling Booths, Sr. No. in voter list while voting in polling station easily through this voter slip and its aslo last option to remind voter about candiadate while providing the voter.', 'voter-slip-min.jpg', 'no'),
(11, 1, 'STREET PLAY', 'To attract the rural audience, conversations will be interspersed with music, dance and folk songs. This is the best to communicate rural people by this way and visualise the vision of political party or candidate through their street plays.', 'street-play-min.jpg', 'no'),
(12, 1, 'VOTER SLIP PRINTER', 'Voter slip printer is easiest way to provide on spot voter slip to voter it comprise with Votting station name, address and Sr.No. etc via bluetooth with our Android Election Management App.', 'voter-slip-printer-min.jpg', 'no'),
(13, 1, 'LED VAN', 'We offer an exclusive range of Elections Hydraulics and Non Hydraulics LED Screen Van which are used for several applications.', 'led-Van-Itruck9.jpg', 'no'),
(14, 0, 'DIGITAL MARKETING', 'DIGITAL MARKETING â€“ one of the most frequently mentioned buzzwords in marketing. Everybody is talking about digital marketing and professionals praise itâ€™s the way to grow an online business.', 'DIGITAL-MARKETING-SOCIAL-MEDIA-MARKETING -SEO-SMO-GOOGLE-ADWORDS-INBOUND-MARKETING.jpeg', 'no'),
(15, 14, 'SOCIAL MEDIA MARKETING', 'Social media marketing (SMM) is a form of internet marketing that uses social media apps as a marketing tool. These social media platforms enable brands to connect with their audience to: build a brand; increase sales; drive traffic to a website.', 'social-media-marketing-min.jpg', 'no'),
(17, 14, 'SOCIAL MEDIA MANAGEMENT', 'Social media management is the process of analyzing social media audiences and developing a strategy thats tailored to them, creating and distributing content for social media profiles, monitoring online conversations, collaborating with influencers, providing community service, and monitoring, measuring.', 'Social-Media-Management-min.jpg', 'no'),
(18, 14, 'SOCIAL MEDIA OPTIMIZATIONS', 'an act, process, or methodology of making something (such as a design, system, or decision) as fully perfect, functional, or effective as possible specifically : the mathematical procedures (such as finding the maximum of a function) involved in this.', 'social-med-opt.jpg', 'no'),
(19, 14, 'SEO (SEARCH ENGINE OPTIMIZATIONS)', 'Search engine optimization (SEO) is the practice of orienting your website to rank higher on a search engine results page (SERP) so that you receive more traffic. The aim is typically to rank on the first page of Google results for search terms that mean the most to your target audience.', 'seo.png', 'no'),
(20, 14, 'GOOGLE ADWORDS', 'Google Ads, AKA Google AdWords, is Googles advertising system in which advertisers bid on certain keywords in order for their clickable ads to appear in Googles search results. Since advertisers have to pay for these clicks, this is how Google makes money from search.', 'google-award.png', 'no'),
(21, 14, 'INTERNET PRESENCE & REPUTATION MANAGEMENT', 'Reputation management is controlling and influencing the audiences perception of the brand through responding to customer feedback. Companies use social media monitoring tactics and reports from a customer care team to analyze reputation. They manage reputation through social media, emails and chatbots.', 'reputation.png', 'no'),
(22, 14, 'INBOUND & OUTBOUND MARKETING', 'Outbound marketing includes TV ads, billboards, cold calling, and display ads, while inbound relies on slow-burn content marketing, such as blogs, opt-in email nurture flows, and native recommendations. Youve heard the terms â€œinbound marketingâ€ and â€œoutbound marketingâ€ so many times, but what do they really mean.', 'Inbound-Outbound.png', 'no'),
(23, 14, 'LEAD GENERATION', 'Lead generation is the process of gaining the interest of potential customers in order to increase future sales. It is a crucial part of the sales process of many companies. A lead is anyone who has shown interest in a companys products or services but may not yet be qualified to buy.', 'lead-generation-min.jpg', 'no'),
(24, 14, 'IVR & TOLL FREE NUMBER', 'A toll-free number is a number that customers can call without being charged for it. The cost for all incoming and outgoing calls are paid for by the business. A toll-free number usually has prefixes such as 800, 855, 877, 888, etc.', 'BULK-SM-VOICE-CALL-BULK-WHATSAPP-BULK-EMAIL.jpg', 'no'),
(25, 0, 'WEB DEVELOPMENT', 'To become a Web Developer, you should have an understanding of HTML, CSS, and JavaScript. Its also recommended to learn about CSS and CSS frameworks. Developing these fundamental web development skills will give you the foundation and logic for communicating with programming languages.', 'WEBSITE -APPLICATION-DEVELOPMENT.jpg', 'no'),
(26, 25, 'STATIC WEBSITE DEVELOPMENT', 'A Static Website (sometimes called a flat or stationary page) is displayed in a web browser exactly as it is stored. It contains web pages with fixed content coded in HTML and stored on a web server. It does not change, it stays the same, or \"static\" for every viewer of the site.', 'static-web.png', 'no'),
(27, 25, 'DYNAMIC WEBSITE', 'A Dynamic Website (also referred to as a database-driven site) requires web programming and database design. A dynamic website contains information and content that changes, depending on factors such as the viewer of the site, the time of the day, the time.', 'dynamic-website-design.jpg', 'no'),
(28, 25, 'E-COMMERCE WEBSITE', 'A website that allows people to buy and sell physical goods, services, and digital products over the internet rather than at a brick-and-mortar location. Through an e-commerce website, a business can process orders, accept payments', 'ecommerce-website.png', 'no'),
(29, 25, 'ANDROID APP DEVELOPMENT', 'Android software development is the process by which applications are created for devices running the Android operating system. Google states that \"Android apps can be written using Kotlin, Java, and C++ languages\" using the Android software development kit (SDK), while using other languages is also possible.', 'android-app-dev.png', 'no'),
(30, 25, 'IOS APP DEVELOPMENT', 'What is iOS app development? iOS application development is the process of making mobile applications for Apple hardware, including iPhone, iPad and iPod Touch. The software is written in the Swift programming language or Objective-C and then deployed to the App Store for users to download.', 'ios-app-dev.png', 'no'),
(31, 0, 'SMS SERVICES', 'SMS stands for Short Message Service and is another name for a text message. An SMS is generally sent from one mobile device to another over the cellular network. SMS is a text-only standard first formalized in 1985 in the Global System for Mobile Communications (GSM) standards.', 'BULK-SM-VOICE-CALL-BULK-WHATSAPP-BULK-EMAIL (1).jpg', 'no'),
(32, 31, 'TRANSACTION SMS', 'What is transactional SMS? Transactional SMS refers to any text message sent from a business to a customer that provides valuable information about their product, service or processes. Marketing messages and promotional SMS campaigns are not considered a transactional SMS.', 'sms-transaction.jpg', 'no'),
(33, 31, 'PROMOTIONAL SMS', 'A promotional SMS gateway is used to distribute bulk sales and marketing text messages to promote a company brand and its products or services. Typical promotional bulk SMS examples include: Sales instore and online. Discount code to be used online or in-store.', 'Promotional-SMS.jpg', 'no'),
(34, 31, 'SIM-BASED SMS MARKETING', 'Sim based sms service is a process of sending promotional sms to users without sender id with a large setup of sim base system in different locations of India. It is an SMS Service that is put into effect due to DLT complications.', 'sim-based.png', 'no'),
(35, 31, 'INTERNATIONAL SMS', 'In general, sending an international text will cost you between $0.25 and $0.50 per text message. Of course, this fee can vary depending on your carrier and plan. If youre looking for a way to avoid these fees, consider using a messaging app like WhatsApp or Facebook Messenge.', 'international-sms.png', 'no'),
(36, 31, 'VOICE CALLS', 'Voice calling takes place when one person calls another in a different location using a telephone. Calling can happen over a traditional phone line.', 'voice-sms.png', 'no'),
(37, 31, 'EMAIL MARKETING', 'Email marketing can allow you to create targeted and personalised messages. This can help you to build meaningful relationships with your customers. It can also improve response rates to your direct marketing campaigns. However, it is important not to overuse email marketing.', 'email-marketing.jpg', 'no'),
(38, 31, 'WHATSAPP SMS MARKETING', 'Weak marketing messages sound as if they could belong to any product or service. Example: \"Our award-winning product set decreases costs and increases revenue.\" Brilliant marketing messages are one-of-a-kind.', 'whatsapp-marketing.jpg', 'no'),
(39, 31, 'LONG CODE & SHORT CODE', 'With a limit of one message per second, long codes are used primarily for person-to-person communication. In contrast, SMS short codes can be used to send 40 messages per second and are typically used for high volume messaging like voting on TV shows.', 'long-code-short-code.jpg', 'no'),
(40, 31, 'MISSED CALL ALERT', 'This feature works via its Airtel Thanks app on iOS and Android. With this feature, users will see a list of missed calls when their phone was turned off or when they were out of the network coverage area for a brief period of time.', 'misscall-alert.png', 'no'),
(41, 0, 'RESEARCH PROJECT ASSISTANCE', 'Research Assistants provide support to research teams who are conducting experiments or gathering and analysing data. They work in different kinds of organisations including medical research centres, consulting firms, universities, market research firms and think tanks.', 'expert-writting-min.jpg', 'no'),
(42, 41, 'PhD Topic Consultation', 'Topic selection is the most crucial and the first stepping stone of the PhD. The scholar selects the\r\ntopic on the basis of the research gap after going through multiple references.<br>\r\nClearby service helps scholars in selecting a novel research topic by combining their academic and\r\nprofessional background and interest areas with already existing research done. We try to understand\r\nthe future scope of the research and the time span in which the research shall be completed before\r\nsuggesting the topics', '9865e7ed-49fa-412a-8003-9423819f0366.jpg', ''),
(43, 41, 'Proposal Development', 'Writing a research proposal is the next very crucial stage after the development of the research\r\ntopics. It involves setting up the entire research plan in a very short and crisp manner. The elements of the proposal include-<br>\r\nâ— Research Title<br>\r\nâ— Introduction<br>\r\nâ— Need of the Study<br>\r\nâ— Literature Review<br>\r\nâ— Research Aims and Objectives<br>\r\nâ— Conceptual Framework<br>\r\nâ— Hypothesis Development<br>\r\nâ— Research Methodology<br>\r\nâ— Limitations of the Research\r\n', 'dac83908-dcd8-4126-8345-cbc019f7d56f.jpg', ''),
(44, 41, 'Research Manuscript Development', 'Leveraging the multiple research scholars experiences that have been gathered with the help of\r\nsubject matter experts who are associated with us, Clearby Services helps scholars to publish their\r\nresearch articles in International peer-reviewed Journals.<br>\r\nOur service specialisations include journal manuscript writing, helping to develop a manuscript from\r\nyour existing research or thesis document, editing your manuscript, formatting and submitting your\r\nmanuscript to a chosen journal, following up with journal editors regarding your submitted manuscript,\r\nand doing a peer review of your manuscript.<br>\r\nâ— Journals for Manuscript Development<br>\r\n-IEEE<br>\r\n- Elsevier<br>\r\n- SCI ScienceDirect<br>\r\n- Springer<br>\r\n- Scopus<br>\r\n- UGC Care List<br>\r\n', 'WhatsApp Image 2023-06-21 at 7.26.44 PM.jpeg', ''),
(45, 41, 'Thesis/Dissertation Writing', 'Thesis writing is another challenging stage which PhD scholars and Master students face. There are\r\ndifferent chapters of the thesis which require different experts attention in developing the research design in research methodology, selecting the key variables and scales in the literature review that\r\nshall help in questionnaire designing, and referencing the citations in a different manner.<br>\r\nWe can resolve your issues within the thesis in every possible manner.', 'WhatsApp Image 2023-06-21 at 7.26.42 PM.jpeg', ''),
(46, 41, 'Editing and Proofreading Support', 'Editing and Proofreading lends you a new pair of eyes to filter all flaws and errors in your research\r\ndocument. Editing service helps the scholars in getting the research writing enhanced with better\r\nlanguage and formatting as per the guidelines', 'WhatsApp Image 2023-06-21 at 7.26.42 PM (1).jpeg', ''),
(47, 41, 'Questionnaire Development', 'Questionnaire development involved a better understanding about the research variables and\r\nobjectives. More over the questionnaire needs to be developed in such a manner that it can be pilot\r\ntested, and checked for reliability and validity. Clear by services helps the scholars to develop a\r\nquestionnaire in such a manner that its easier to collect the responses and it could be analysed in a\r\nquick and easy manner.', 'WhatsApp Image 2023-06-21 at 7.26.43 PM.jpeg', ''),
(48, 41, 'Data Collection/ Data Analysis', 'Data collection is sometimes a difficult and a time consuming task. Therefore, Clearby Services can\r\nhelp you in data collection using both primary as well as secondary method<br>\r\nClearby services is not just helping to collect the data but we are helping scholars in Data Analysis\r\nusing multiple tools such as-<br>\r\nâ— SPSS<br>\r\nâ— Eviews<br>\r\nâ— Stata<br>\r\nâ— Nvivo<br>\r\nâ— Amos<br>\r\nâ— Smart PLS', 'WhatsApp Image 2023-06-21 at 7.26.42 PM (2).jpeg', ''),
(53, 0, 'IMPLEMENTATION', 'We shall assist in the below implementation & Simulation using the below tolls.', 'WhatsApp Image 2023-06-21 at 7.26.44 PM (1).jpeg', ''),
(54, 53, ' Python', '  Implementation of Machine learning and deep learning-based systems.', 'Python.png', ''),
(55, 53, ' NS2/NS3', 'Simulation of wired and wireless network environments - WSN VANET, MANET,\r\nIoT.', 'ns3.jpg', ''),
(56, 53, 'Java', 'Implementation of Blockchain systems, Web applications, and Big data models.', 'java.jpg', ''),
(57, 53, ' Cloudsim', 'Simulation of cloud-based systems, resource allocation, and load balancing\r\ntechnique.', 'cloudsim.jpg', ''),
(58, 53, 'MATLAB', 'Implementation of image processing, communication and networking algorithms.', 'thm.jpg', ''),
(59, 53, 'Cadence ', 'Cadence is a pivotal leader in electronic systems design, building upon more than 30 years of computational software expertise.', 'th (9).jpg', ''),
(60, 53, 'Ansys', 'Ansys engineering simulation and 3D design software delivers product modeling solutions with unmatched scalability and a comprehensive multiphysics foundation.', 'ansys-logo.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(10) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `full_name`, `email`, `password`, `status`) VALUES
(1, 'Admin - Rohit Zadane', 'admin@mail.com', 'd00f5d5217896fb7fd601412cb890830', 'Active'),
(2, 'Christine', 'christine@mail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `password`, `name`) VALUES
(3, 'ela', '202cb962ac59075b964b07152d234b70', 'Ela'),
(4, 'elias', '202cb962ac59075b964b07152d234b70', 'elias'),
(5, 'rohit', '202cb962ac59075b964b07152d234b70', 'Rohit Zadane'),
(6, 'admin', 'e10adc3949ba59abbe56e057f20f883e', 'admin'),
(7, 'hello', 'e10adc3949ba59abbe56e057f20f883e', 'hello');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `overview`
--
ALTER TABLE `overview`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`),
  ADD KEY `service_parent_id` (`service_parent_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=257;

--
-- AUTO_INCREMENT for table `overview`
--
ALTER TABLE `overview`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
