-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2022 at 07:32 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cork`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `blog_title` varchar(200) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `meta_title` varchar(100) NOT NULL,
  `meta_tag` varchar(100) NOT NULL,
  `meta_desc` varchar(255) NOT NULL,
  `og_img` varchar(255) DEFAULT NULL,
  `category` varchar(100) NOT NULL,
  `blog_desc` varchar(255) NOT NULL,
  `blog_main_img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `blog_title`, `slug`, `meta_title`, `meta_tag`, `meta_desc`, `og_img`, `category`, `blog_desc`, `blog_main_img`) VALUES
(2, 'Vai', 'Amake ', 'ami ', 'somoy ', 'moton ', '1563444949.jpg', 'purple', '<p>kajta dite pari nai</p>\r\n', '1788921852.png'),
(4, 'amake', 'BOKA ', 'DILE ', 'BALO ', 'BABE', '1050540896.sql', 'purple', '<p>dila naile khoboir ache</p>\r\n', '1868210318.pdf'),
(5, 'sir ', 'ajke ', 'sei ', 'ekta', 'iftari', '76524305.jpg', 'purple', '<p>hobe</p>\r\n', '155968135.jpg'),
(6, 'aaa', 'bbbb', 'cccc', 'dddd', 'eeee', '1492204490.jpg', 'purple', '<p>ffff</p>\r\n', '300801843.png');

-- --------------------------------------------------------

--
-- Table structure for table `blog_category`
--

CREATE TABLE `blog_category` (
  `id` int(11) NOT NULL,
  `category_name` varchar(100) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `meta_title` varchar(100) NOT NULL,
  `meta_tag` varchar(100) NOT NULL,
  `meta_desk` varchar(255) NOT NULL,
  `og_img` varchar(255) DEFAULT NULL,
  `category` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blog_category`
--

INSERT INTO `blog_category` (`id`, `category_name`, `slug`, `meta_title`, `meta_tag`, `meta_desk`, `og_img`, `category`) VALUES
(2, 'rakib ', 'tumi ', 'valo ', 'how ', 'baba', '673647221.jpg', 'white'),
(3, 'arifa', 'mehedia', 'sdfs', 'sdf', 'sdf', '2028327046.jpg', 'white'),
(6, 'sfgbdsfg', 'sdfgwsdf', 'sdfsd', 'sdfgsdfg', 'sdfsgsdrg', '1295539874.png', 'purple');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` int(11) NOT NULL,
  `jobs_title` varchar(200) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `meta_title` varchar(100) NOT NULL,
  `meta_tag` varchar(100) NOT NULL,
  `meta_desc` varchar(255) NOT NULL,
  `og_img` varchar(255) DEFAULT NULL,
  `category` varchar(100) NOT NULL,
  `jobs_desc` varchar(255) NOT NULL,
  `jobs_main_img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `jobs_title`, `slug`, `meta_title`, `meta_tag`, `meta_desc`, `og_img`, `category`, `jobs_desc`, `jobs_main_img`) VALUES
(2, 'Vai', 'Amake ', 'ami ', 'somoy ', 'moton ', '1563444949.jpg', 'purple', '<p>kajta dite pari nai</p>\r\n', '1788921852.png'),
(4, 'amake', 'boka', 'dile ', 'balo', 'bave', '116372769.jpg', 'white', '<p>boka diben!!!&nbsp;</p>\r\n', '1736486287.'),
(5, 'sir ', 'ajke ', 'sei ', 'ekta', 'iftari', '76524305.jpg', 'purple', '<p>hobe</p>\r\n', '155968135.jpg'),
(6, 'aaa', 'bbbb', 'cccc', 'dddd', 'eeee', '1492204490.jpg', 'purple', '<p>ffff</p>\r\n', '300801843.png'),
(8, 'fas;kjhn', 'KHEDFKH', 'KDHFK', 'DFKKHWE', 'JDFHS', '360601149.jpg', 'purple', '<p>DSFSDFS</p>\r\n', '139616024.jpg'),
(12, 'sdfh', 'kdk', 'ksdk', 'dfkjk', 'kjdsk', '991278582.jpg', 'white', '<p>DFXSDF</p>\r\n', '2127557329.jpg'),
(13, 'rakib ', 'bondu', 'tumi ', 'onek ', 'kosto ', '153866789.jpg', 'white', '<p>kortechis</p>\r\n', '1356027743.jpg'),
(16, '12', '33', '44', '55', '66', '854809367.jpg', 'purple', '<p>77</p>\r\n', '516933967.jpg'),
(17, 'arif', 'mehedi', 'rasel', 'rakibur', 'rahman', '794400075.jpg', 'white', '<p>emon</p>\r\n', '213016170.jpg'),
(18, 'kehte ', 'he', 'rajko', 'ham', 'tujko', '1762357869.jpg', 'purple', '<p>6humna</p>\r\n', '1325069115.'),
(19, 'sdklfk', 'kljdfsklj', 'kljdfkasj', 'kljdskj', 'kjdkj', '2006453651.jpg', 'white', '<p>sdas,ldjadljs</p>\r\n', '1706379566.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `jobs_role`
--

CREATE TABLE `jobs_role` (
  `id` bigint(20) NOT NULL,
  `role_name` varchar(100) NOT NULL,
  `role_desc` varchar(255) NOT NULL,
  `role_icon` varchar(150) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `meta_title` varchar(150) NOT NULL,
  `meta_tag` varchar(150) NOT NULL,
  `meta_desc` varchar(255) NOT NULL,
  `og_img` varchar(200) NOT NULL,
  `role_team` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `jobs_role`
--

INSERT INTO `jobs_role` (`id`, `role_name`, `role_desc`, `role_icon`, `slug`, `meta_title`, `meta_tag`, `meta_desc`, `og_img`, `role_team`) VALUES
(1, 'arif', 'mehedi', '832671002.jpg', 'rasel', 'rfakibur', 'rahman', 'kintu', '1108710283.jpg', 'purple'),
(6, '', '', '307859494.png', 'cc33cccccccccccccc', 'dd44ccccccccccc', 'ee55dddddddddddd', 'ff66ddddddddddddd', '916076021.png', 'purple');

-- --------------------------------------------------------

--
-- Table structure for table `jobs_team`
--

CREATE TABLE `jobs_team` (
  `id` bigint(20) NOT NULL,
  `team_name` varchar(100) NOT NULL,
  `team_desc` varchar(255) NOT NULL,
  `team_icon` varchar(150) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `meta_title` varchar(150) NOT NULL,
  `meta_tag` varchar(150) NOT NULL,
  `meta_desc` varchar(255) NOT NULL,
  `og_img` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `jobs_team`
--

INSERT INTO `jobs_team` (`id`, `team_name`, `team_desc`, `team_icon`, `slug`, `meta_title`, `meta_tag`, `meta_desc`, `og_img`) VALUES
(1, 'arif', 'mehedi', '832671002.jpg', 'rasel', 'rfakibur', 'rahman', 'kintu', '1108710283.jpg'),
(2, 'ami ', 'valo', '175979299.png', 'e achi', 'tumi', 'kemon', 'acho', '2082578403.png'),
(6, 'aa11111111111', 'bb22222222222', '874920490.jpg', 'cc33333333333333', 'dd44444444444444', 'ee555555555555', 'ff6666666666666', '997967214.jpg'),
(7, 'fj', '`1ldjfkw', '1082727976.jpg', 'pdfsdfksdlkfsd', 'dlskfl;dsk', 'dfsdf', 'fgdfg', '593466532.png'),
(9, 'dfkjj', 'kjdfkj', '961689866.png', 'dxfsd', 'dfs', 'df', 'dsf', '1171580764.png'),
(10, 'djklash', 'kjkdjsa', '2073960024.png', 'adui', 'iodfjjs', 'dkljdkjd', 'sadkljasdjk', '1920189632.png');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `news_title` varchar(200) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `meta_title` varchar(100) NOT NULL,
  `meta_tag` varchar(100) NOT NULL,
  `meta_desc` varchar(255) NOT NULL,
  `og_img` varchar(255) DEFAULT NULL,
  `category` varchar(100) NOT NULL,
  `news_desc` varchar(255) NOT NULL,
  `news_main_img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `news_title`, `slug`, `meta_title`, `meta_tag`, `meta_desc`, `og_img`, `category`, `news_desc`, `news_main_img`) VALUES
(2, 'Vai', 'Amake ', 'ami ', 'somoy ', 'moton ', '1563444949.jpg', 'purple', '<p>kajta dite pari nai</p>\r\n', '1788921852.png'),
(4, 'amake', 'BOKA ', 'DILE ', 'BALO ', 'BABE', '1050540896.sql', 'purple', '<p>dila naile khoboir ache</p>\r\n', '1868210318.pdf'),
(5, 'sir ', 'ajke amara', 'valoi ', 'thakbo', 'iftari', '618788026.jpg', 'purple', '<p>hobe na</p>\r\n', '1455298978.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `news_category`
--

CREATE TABLE `news_category` (
  `id` int(11) NOT NULL,
  `category_name` varchar(100) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `meta_title` varchar(100) NOT NULL,
  `meta_tag` varchar(100) NOT NULL,
  `meta_desk` varchar(255) NOT NULL,
  `og_img` varchar(255) DEFAULT NULL,
  `category` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news_category`
--

INSERT INTO `news_category` (`id`, `category_name`, `slug`, `meta_title`, `meta_tag`, `meta_desk`, `og_img`, `category`) VALUES
(2, 'rakib ', 'tumi ', 'valo ', 'how ', 'baba', '673647221.jpg', 'white'),
(3, 'arifa', 'mehedia', 'sdfs', 'sdf', 'sdf', '960049368.jpg', 'white'),
(6, 'sfgbdsfg', 'sdfgwsdf', 'sdfsd', 'sdfgsdfg', 'sdfsgsdrg', '1295539874.png', 'purple'),
(10, 'Mousumi', 'Tumi ', 'Onek ', 'Rag', 'Koro', '1616224280.png', 'purple'),
(11, 'kldjklasj', 'l;kajdflja', 'ljflsjddsj', 'l;jfdlkjlsj', 'ljdflsjl;j', '1094217721.jpg', 'purple'),
(12, 'fkn', 'kl;jfk', 'klfjksj', 'kljfksj', 'lkfjlkj', '1398813391.jpg', 'white'),
(13, 'arif ', 'tumio ', 'valo ', 'hoite c`', 'chestqa ', '1632838704.jpg', 'purple'),
(14, '', '', '', '', '', '11990846.', 'None');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `category_name` varchar(100) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `sell_price` decimal(10,2) NOT NULL,
  `offer_price` decimal(10,2) NOT NULL,
  `button_name` varchar(50) NOT NULL,
  `button_link` varchar(150) NOT NULL,
  `meta_title` varchar(100) NOT NULL,
  `meta_tag` varchar(100) NOT NULL,
  `meta_desc` varchar(255) NOT NULL,
  `og_img` varchar(255) DEFAULT NULL,
  `category` varchar(100) NOT NULL,
  `prod_desc` varchar(255) NOT NULL,
  `prod_img` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `category_name`, `slug`, `sell_price`, `offer_price`, `button_name`, `button_link`, `meta_title`, `meta_tag`, `meta_desc`, `og_img`, `category`, `prod_desc`, `prod_img`) VALUES
(1, 'dl;fkdskl', 'df,.dslmfk', '100.00', '200.00', 'dfdksfkds', 'dfjdsjf', 'dfdjfd', 'sdfdjfl;d', 'dfds', '688834948.png', 'white', '<p>fdsl;fdl;fkld;,f</p>\r\n', '399095328.jpg'),
(2, 'Vai', 'Amake ', '30000.00', '200000.00', 'MAF', 'korben', 'ami ', 'somoy ', 'moton ', '1563444949.jpg', 'purple', '<p>kajta dite pari nai</p>\r\n', '1788921852.png');

-- --------------------------------------------------------

--
-- Table structure for table `product_category`
--

CREATE TABLE `product_category` (
  `id` int(11) NOT NULL,
  `category_name` varchar(100) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `meta_title` varchar(100) NOT NULL,
  `meta_tag` varchar(100) NOT NULL,
  `meta_desk` varchar(255) NOT NULL,
  `og_img` varchar(255) DEFAULT NULL,
  `category` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product_category`
--

INSERT INTO `product_category` (`id`, `category_name`, `slug`, `meta_title`, `meta_tag`, `meta_desk`, `og_img`, `category`) VALUES
(33, 'arif', 'valo ', 'hoia ', 'jao ', 'kintu', '105223906.jpg', 'purple'),
(34, 'rakib', 'tumi ', 'ajke ', 'ki ', 'ki ', '1217658868.jpg', 'white');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_category`
--
ALTER TABLE `blog_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs_role`
--
ALTER TABLE `jobs_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs_team`
--
ALTER TABLE `jobs_team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_category`
--
ALTER TABLE `news_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_category`
--
ALTER TABLE `product_category`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `blog_category`
--
ALTER TABLE `blog_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `jobs_role`
--
ALTER TABLE `jobs_role`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `jobs_team`
--
ALTER TABLE `jobs_team`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `news_category`
--
ALTER TABLE `news_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `product_category`
--
ALTER TABLE `product_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
