-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 07, 2020 at 10:18 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_catagory`
--

CREATE TABLE `tbl_catagory` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_catagory`
--

INSERT INTO `tbl_catagory` (`id`, `name`) VALUES
(1, 'JAVA'),
(2, 'PHP'),
(3, 'HTML'),
(4, 'CSS'),
(11, 'Education');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_comments`
--

CREATE TABLE `tbl_comments` (
  `id` int(11) NOT NULL,
  `postid` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(250) NOT NULL,
  `comments` varchar(250) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_comments`
--

INSERT INTO `tbl_comments` (`id`, `postid`, `name`, `email`, `comments`, `date`) VALUES
(1, 10, 'rupom ehsan', 'rupomehsan34@gamil.com', 'no purse as fully me or point. Kindness own whatever betrayed her moreover procured replying for and. Proposal indulged no do do sociable he throwing settling.', '2020-08-31 09:52:28'),
(2, 10, 'rupom cd', 'bangla_green@yahoo.com', 'Why painful the sixteen how minuter looking nor. Subject but why ten earnest husband imagine sixteen brandon. Are unpleasing occasional celebrated motionless unaffected conviction out.', '2020-08-31 10:03:52');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE `tbl_contact` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` int(13) NOT NULL,
  `email` varchar(50) NOT NULL,
  `body` text NOT NULL,
  `status` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_contact`
--

INSERT INTO `tbl_contact` (`id`, `name`, `phone`, `email`, `body`, `status`, `date`) VALUES
(8, 'rupom cd', 1775332244, 'bangla_green@yahoocom', 'Name', 0, '2020-08-31 11:00:21'),
(9, 'rupom ehsan', 1683392241, 'rupomehsan1234@gamil.com', '107 Santa Monica Boulevard Los Angeles, California\r\n\r\n', 0, '2020-09-05 09:05:53');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_copyright`
--

CREATE TABLE `tbl_copyright` (
  `id` int(11) NOT NULL,
  `text` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_copyright`
--

INSERT INTO `tbl_copyright` (`id`, `text`) VALUES
(1, '© Copyright Training with live project.update');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_page`
--

CREATE TABLE `tbl_page` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `body` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_page`
--

INSERT INTO `tbl_page` (`id`, `name`, `body`) VALUES
(2, 'About ', '<p><span>To generate a timestamp from a string representation of the date, you may be able to use&nbsp;</span><span class=\"function\"><a class=\"function\" href=\"https://www.php.net/manual/en/function.strtotime.php\">strtotime()</a></span><span>. Additionally, some databases have functions to convert their date formats into timestamps (such as MySQL\'s&nbsp;</span><a class=\"link external\" href=\"http://dev.mysql.com/doc/mysql/en/date-and-time-functions.html\">&raquo;&nbsp;UNIX_TIMESTAMP</a><span>&nbsp;function).</span></p>'),
(3, 'Privaecy', '<p><span>To generate a timestamp from a string representation of the date, you may be able to use&nbsp;</span><span class=\"function\"><a class=\"function\" href=\"https://www.php.net/manual/en/function.strtotime.php\">strtotime()</a></span><span>. Additionally, some databases have functions to convert their date formats into timestamps (such as MySQL\'s&nbsp;</span><a class=\"link external\" href=\"http://dev.mysql.com/doc/mysql/en/date-and-time-functions.html\">&raquo;&nbsp;UNIX_TIMESTAMP</a><span>&nbsp;function).</span></p>'),
(4, 'DMCA', '<p><span>To generate a timestamp from a string representation of the date, you may be able to use&nbsp;</span><span class=\"function\"><a class=\"function\" href=\"https://www.php.net/manual/en/function.strtotime.php\">strtotime()</a></span><span>. Additionally, some databases have functions to convert their date formats into timestamps (such as MySQL\'s&nbsp;</span><a class=\"link external\" href=\"http://dev.mysql.com/doc/mysql/en/date-and-time-functions.html\">&raquo;&nbsp;UNIX_TIMESTAMP</a><span>&nbsp;function).</span></p>');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_portfolio`
--

CREATE TABLE `tbl_portfolio` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `descripsion` text NOT NULL,
  `category` int(11) NOT NULL,
  `image` varchar(250) NOT NULL,
  `image_2` varchar(250) NOT NULL,
  `image_3` varchar(250) NOT NULL,
  `image_4` varchar(250) NOT NULL,
  `image_5` varchar(250) NOT NULL,
  `image_6` varchar(250) NOT NULL,
  `link` varchar(250) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_portfolio`
--

INSERT INTO `tbl_portfolio` (`id`, `title`, `descripsion`, `category`, `image`, `image_2`, `image_3`, `image_4`, `image_5`, `image_6`, `link`, `date`) VALUES
(3, 'Seventy Percent Completed Successfully', 'Bringing so sociable felicity supplied mr. September suspicion far him two acuteness perfectly.', 2, 'single-work-1.jpg', 'single-work-2.jpg', 'single-work-3.jpg', 'single-work-4.jpg', 'single-work-5.jpg', 'single-work-6.jpg', '', '2020-09-07 04:50:06'),
(4, 'Ten Percent Completed', 'Bringing so sociable felicity supplied mr. September suspicion far him two acuteness perfectly.', 0, 'work-1.jpg', 'work-2.jpg', 'work-3.jpg', 'work-4.jpg', 'work-5.jpg', 'work-6.jpg', '', '2020-09-07 04:51:56'),
(5, 'Seventy Percent Completed Successfully', 'Bringing so sociable felicity supplied mr. September suspicion far him two acuteness perfectly.', 1, 'blog-1.jpg', 'single-work-3.jpg', 'single-work-3.jpg', 'blog-1.jpg', 'single-work-5.jpg', 'logo.jpg', '', '2020-09-07 06:27:02'),
(6, 'Seventy Percent Completed Successfully', 'Bringing so sociable felicity supplied mr. September suspicion far him two acuteness perfectly.', 0, 'banner-grid-01.jpg', 'banner-grid-02.jpg', 'banner-grid-03.jpg', '', '', '', '', '2020-09-07 06:42:47'),
(7, 'Fourt Percent Completed', ' CLEAN DESIGN Bringing so sociable felicity supplied mr. September suspicion far him two acuteness perfectly.', 1, 'banner-grid-05.jpg', 'banner-grid-06.jpg', 'instag-inline-04.jpg', '', '', '', '', '2020-09-07 06:43:03'),
(8, 'Seventy Percent Completed Successfully', 'Bringing so sociable felicity supplied mr. September suspicion far him two acuteness perfectly.', 2, 'instag-inline-03.jpg', 'instag-inline-04.jpg', 'instag-inline-05.jpg', '', '', '', '', '2020-09-07 06:43:17');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_post`
--

CREATE TABLE `tbl_post` (
  `id` int(11) NOT NULL,
  `cat` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `author` varchar(50) NOT NULL,
  `tags` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `userid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_post`
--

INSERT INTO `tbl_post` (`id`, `cat`, `title`, `body`, `image`, `author`, `tags`, `date`, `userid`) VALUES
(1, 1, 'Agreement For Listening Remainder Get Attention Law Acuteness Day.', '<p>Raising say express had chiefly detract demands she. Quiet led own cause three him. Front no party young abode state up. Saved he do fruit woody of to. Met defective are allowance two perceived listening consulted contained. It chicken oh colonel pressed excited suppose to shortly. He improve started no we manners however effects. Prospect humoured mistress to by proposal marianne attended. Simplicity the far admiration preference everything. Up help home head spot an he room in.</p>\r\n<blockquote>&ldquo;Instrument cultivated alteration any favourable expression law far nor. Both new like tore but year. An from mean on with when sing pain.&rdquo;</blockquote>\r\n<p>Carriage quitting securing be appetite it declared. High eyes kept so busy feel call in. Would day nor ask walls known. But preserved advantage are but and certainty earnestly enjoyment. Passage weather as up am exposed. And natural related man subject. Eagerness get situation his was delighted.</p>\r\n<p>&nbsp;</p>\r\n<p>Rendered her for put improved concerns his. Ladies bed wisdom theirs mrs men months set. Everything so dispatched as it increasing pianoforte. Hearing now saw perhaps minutes herself his. Of instantly excellent therefore difficult he northward. Joy green but least marry rapid quiet but. Way devonshire introduced expression saw travelling affronting. Her and effects affixed pretend account ten natural. Need eat week even yet that. Incommode delighted he resolving sportsmen do in listening.</p>\r\n<ul class=\"post-list\">\r\n<li>Greatest properly off ham exercise all.</li>\r\n<li>Unsatiable invitation its possession nor off.</li>\r\n<li>All difficulty estimating unreserved increasing the solicitude.</li>\r\n</ul>\r\n<p>Style never met and those among great. At no or september sportsmen he perfectly happiness attending. Depending listening delivered off new she procuring satisfied sex existence. Person plenty answer to exeter it if. Law use assistance especially resolution cultivated did out sentiments unsatiable. Way necessary had intention happiness but september delighted his curiosity. Furniture furnished or on strangers neglected remainder engrossed.</p>', 'upload/44cbc3bf76.jpg', 'rupom', 'java,programing', '2020-08-31 08:03:33', 1),
(2, 2, 'Agreement For Listening Remainder Get Attention Law Acuteness Day.', '<p><span class=\"blog-data\">Jeff D. Stutler - 16 September 2016</span></p>\r\n<p>Raising say express had chiefly detract demands she. Quiet led own cause three him. Front no party young abode state up. Saved he do fruit woody of to. Met defective are allowance two perceived listening consulted contained. It chicken oh colonel pressed excited suppose to shortly. He improve started no we manners however effects. Prospect humoured mistress to by proposal marianne attended. Simplicity the far admiration preference everything. Up help home head spot an he room in.</p>\r\n<blockquote>&ldquo;Instrument cultivated alteration any favourable expression law far nor. Both new like tore but year. An from mean on with when sing pain.&rdquo;</blockquote>\r\n<p>Carriage quitting securing be appetite it declared. High eyes kept so busy feel call in. Would day nor ask walls known. But preserved advantage are but and certainty earnestly enjoyment. Passage weather as up am exposed. And natural related man subject. Eagerness get situation his was delighted.</p>\r\n<p>&nbsp;</p>\r\n<p>Rendered her for put improved concerns his. Ladies bed wisdom theirs mrs men months set. Everything so dispatched as it increasing pianoforte. Hearing now saw perhaps minutes herself his. Of instantly excellent therefore difficult he northward. Joy green but least marry rapid quiet but. Way devonshire introduced expression saw travelling affronting. Her and effects affixed pretend account ten natural. Need eat week even yet that. Incommode delighted he resolving sportsmen do in listening.</p>\r\n<ul class=\"post-list\">\r\n<li>Greatest properly off ham exercise all.</li>\r\n<li>Unsatiable invitation its possession nor off.</li>\r\n<li>All difficulty estimating unreserved increasing the solicitude.</li>\r\n</ul>\r\n<p>Style never met and those among great. At no or september sportsmen he perfectly happiness attending. Depending listening delivered off new she procuring satisfied sex existence. Person plenty answer to exeter it if. Law use assistance especially resolution cultivated did out sentiments unsatiable. Way necessary had intention happiness but september delighted his curiosity. Furniture furnished or on strangers neglected remainder engrossed.</p>', 'upload/3e8c46416c.jpg', 'rupom', 'php programing', '2020-08-31 08:02:56', 1),
(10, 11, 'Agreement For Listening Remainder Get Attention Law Acuteness Day.', '<p>Raising say express had chiefly detract demands she. Quiet led own cause three him. Front no party young abode state up. Saved he do fruit woody of to. Met defective are allowance two perceived listening consulted contained. It chicken oh colonel pressed excited suppose to shortly. He improve started no we manners however effects. Prospect humoured mistress to by proposal marianne attended. Simplicity the far admiration preference everything. Up help home head spot an he room in.</p>\r\n<blockquote>&ldquo;Instrument cultivated alteration any favourable expression law far nor. Both new like tore but year. An from mean on with when sing pain.&rdquo;</blockquote>\r\n<p>Carriage quitting securing be appetite it declared. High eyes kept so busy feel call in. Would day nor ask walls known. But preserved advantage are but and certainty earnestly enjoyment. Passage weather as up am exposed. And natural related man subject. Eagerness get situation his was delighted.</p>\r\n<p>&nbsp;</p>\r\n<p>Rendered her for put improved concerns his. Ladies bed wisdom theirs mrs men months set. Everything so dispatched as it increasing pianoforte. Hearing now saw perhaps minutes herself his. Of instantly excellent therefore difficult he northward. Joy green but least marry rapid quiet but. Way devonshire introduced expression saw travelling affronting. Her and effects affixed pretend account ten natural. Need eat week even yet that. Incommode delighted he resolving sportsmen do in listening.</p>\r\n<ul class=\"post-list\">\r\n<li>Greatest properly off ham exercise all.</li>\r\n<li>Unsatiable invitation its possession nor off.</li>\r\n<li>All difficulty estimating unreserved increasing the solicitude.</li>\r\n</ul>\r\n<p>Style never met and those among great. At no or september sportsmen he perfectly happiness attending. Depending listening delivered off new she procuring satisfied sex existence. Person plenty answer to exeter it if. Law use assistance especially resolution cultivated did out sentiments unsatiable. Way necessary had intention happiness but september delighted his curiosity. Furniture furnished or on strangers neglected remainder engrossed.</p>', 'upload/1d16e33584.jpg', 'sabbir', 'Seventy Percent Completed SuccessfullySeventy Percent Completed Successfully', '2020-08-31 08:32:25', 1),
(11, 1, 'Agreement For Listening Remainder Get Attention Law Acuteness Day.', '<p>Raising say express had chiefly detract demands she. Quiet led own cause three him. Front no party young abode state up. Saved he do fruit woody of to. Met defective are allowance two perceived listening consulted contained. It chicken oh colonel pressed excited suppose to shortly. He improve started no we manners however effects. Prospect humoured mistress to by proposal marianne attended. Simplicity the far admiration preference everything. Up help home head spot an he room in.</p>\r\n<blockquote>&ldquo;Instrument cultivated alteration any favourable expression law far nor. Both new like tore but year. An from mean on with when sing pain.&rdquo;</blockquote>\r\n<p>Carriage quitting securing be appetite it declared. High eyes kept so busy feel call in. Would day nor ask walls known. But preserved advantage are but and certainty earnestly enjoyment. Passage weather as up am exposed. And natural related man subject. Eagerness get situation his was delighted.</p>\r\n<p>&nbsp;</p>\r\n<p>Rendered her for put improved concerns his. Ladies bed wisdom theirs mrs men months set. Everything so dispatched as it increasing pianoforte. Hearing now saw perhaps minutes herself his. Of instantly excellent therefore difficult he northward. Joy green but least marry rapid quiet but. Way devonshire introduced expression saw travelling affronting. Her and effects affixed pretend account ten natural. Need eat week even yet that. Incommode delighted he resolving sportsmen do in listening.</p>\r\n<ul class=\"post-list\">\r\n<li>Greatest properly off ham exercise all.</li>\r\n<li>Unsatiable invitation its possession nor off.</li>\r\n<li>All difficulty estimating unreserved increasing the solicitude.</li>\r\n</ul>\r\n<p>Style never met and those among great. At no or september sportsmen he perfectly happiness attending. Depending listening delivered off new she procuring satisfied sex existence. Person plenty answer to exeter it if. Law use assistance especially resolution cultivated did out sentiments unsatiable. Way necessary had intention happiness but september delighted his curiosity. Furniture furnished or on strangers neglected remainder engrossed.</p>', 'upload/22ace6c6f7.jpg', 'sabbir', 'asdfasdf', '2020-08-31 08:01:35', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_service`
--

CREATE TABLE `tbl_service` (
  `ser_id` int(11) NOT NULL,
  `ser_heding` varchar(250) NOT NULL,
  `ser_descripsion` varchar(250) NOT NULL,
  `ser_image` varchar(250) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_service`
--

INSERT INTO `tbl_service` (`ser_id`, `ser_heding`, `ser_descripsion`, `ser_image`, `date`) VALUES
(1, ' CLEAN DESIGN', ' CLEAN DESIGN Bringing so sociable felicity supplied mr. September suspicion far him two acuteness perfectly.', 'upload/1.png', '2020-08-31 06:30:21'),
(2, ' BRANDING', 'Bringing so sociable felicity supplied mr. September suspicion far him two acuteness perfectly.', 'upload/2.png', '2020-08-31 06:30:28'),
(3, 'RESPONSIVE update', '                                                                        Bringing so sociable felicity supplied mr. September suspicion far him two acuteness perfectly.update                                                                  ', 'upload/21b0b6e17c.png', '2020-08-31 07:27:17'),
(4, ' MARKETING', 'Bringing so sociable felicity supplied mr. September suspicion far him two acuteness perfectly.', 'upload/4.png', '2020-08-31 06:30:46'),
(5, 'TIME SAVING', 'Bringing so sociable felicity supplied mr. September suspicion far him two acuteness perfectly.', 'upload/5.png', '2020-08-31 06:30:49'),
(6, 'CUSTOMIZABLE', 'Bringing so sociable felicity supplied mr. September suspicion far him two acuteness perfectly.', 'upload/6.png', '2020-08-31 06:30:53');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_slider`
--

CREATE TABLE `tbl_slider` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_slider`
--

INSERT INTO `tbl_slider` (`id`, `title`, `image`) VALUES
(7, 'Fourt Percent Completed update', 'upload/slider/50f0b1d5a6.jpg'),
(8, 'Ten Percent Completed', 'upload/slider/704e3ac5f9.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_social`
--

CREATE TABLE `tbl_social` (
  `id` int(11) NOT NULL,
  `fb` varchar(250) NOT NULL,
  `tw` varchar(250) NOT NULL,
  `ln` varchar(250) NOT NULL,
  `gp` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_social`
--

INSERT INTO `tbl_social` (`id`, `fb`, `tw`, `ln`, `gp`) VALUES
(1, 'https://www.facebook.com/update', 'https://www.twitter.com/update', 'https://www.likedin.com/update', 'https://www.google.com/update');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_theme`
--

CREATE TABLE `tbl_theme` (
  `id` int(11) NOT NULL,
  `theme` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_theme`
--

INSERT INTO `tbl_theme` (`id`, `theme`) VALUES
(1, 'green');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(250) NOT NULL,
  `detailse` text NOT NULL,
  `role` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `date_of_birth` varchar(250) NOT NULL,
  `website` varchar(250) NOT NULL,
  `address` varchar(250) NOT NULL,
  `image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `username`, `password`, `email`, `detailse`, `role`, `name`, `date_of_birth`, `website`, `address`, `image`) VALUES
(1, 'rupom', 'b0baee9d279d34fa1dfd71aadb908c3f', 'rupomehsan@gamil.com', '<p><span>Certainly elsewhere my do allowance at. The address farther six hearted hundred towards husband. Are securing off occasion remember daughter replying. Held that feel his see own yet. Strangers ye to he sometimes propriety in. She right plate seven has. Bed who perceive judgment did marianne.</span></p>', 0, 'Md rupom ehsan', '10 may 1996', 'www.mdrupomehsan.com', ' 107 basundhra river view', 'upload/88f2b96833.jpg'),
(2, 'sabbir', '698d51a19d8a121ce581499d7b701668', '', '', 1, '', '', '', '', '0'),
(5, 'rupom ehsan', '698d51a19d8a121ce581499d7b701668', 'rupomehsan34@gmail.com', '', 1, '', '', '', '', '0'),
(6, 'rupom', 'b0baee9d279d34fa1dfd71aadb908c3f', 'rupomehsan34@gamil.com', '', 1, '', '', '', '', '0');

-- --------------------------------------------------------

--
-- Table structure for table `title_slogan`
--

CREATE TABLE `title_slogan` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `slogan` varchar(100) NOT NULL,
  `logo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `title_slogan`
--

INSERT INTO `title_slogan` (`id`, `title`, `slogan`, `logo`) VALUES
(1, 'J.ONTU', 'Business developer', 'upload/logo.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_catagory`
--
ALTER TABLE `tbl_catagory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_comments`
--
ALTER TABLE `tbl_comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_copyright`
--
ALTER TABLE `tbl_copyright`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_page`
--
ALTER TABLE `tbl_page`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_portfolio`
--
ALTER TABLE `tbl_portfolio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_post`
--
ALTER TABLE `tbl_post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_service`
--
ALTER TABLE `tbl_service`
  ADD PRIMARY KEY (`ser_id`);

--
-- Indexes for table `tbl_slider`
--
ALTER TABLE `tbl_slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_social`
--
ALTER TABLE `tbl_social`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_theme`
--
ALTER TABLE `tbl_theme`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `title_slogan`
--
ALTER TABLE `title_slogan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_catagory`
--
ALTER TABLE `tbl_catagory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_comments`
--
ALTER TABLE `tbl_comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_copyright`
--
ALTER TABLE `tbl_copyright`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_page`
--
ALTER TABLE `tbl_page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_portfolio`
--
ALTER TABLE `tbl_portfolio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_post`
--
ALTER TABLE `tbl_post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_service`
--
ALTER TABLE `tbl_service`
  MODIFY `ser_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_slider`
--
ALTER TABLE `tbl_slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_social`
--
ALTER TABLE `tbl_social`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_theme`
--
ALTER TABLE `tbl_theme`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `title_slogan`
--
ALTER TABLE `title_slogan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
