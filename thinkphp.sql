-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2016-05-24 09:31:38
-- 服务器版本： 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `thinkphp`
--

-- --------------------------------------------------------

--
-- 表的结构 `test_news`
--

CREATE TABLE IF NOT EXISTS `test_news` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `title` varchar(30) NOT NULL,
  `author` varchar(20) NOT NULL,
  `content` text NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=19 ;

--
-- 转存表中的数据 `test_news`
--

INSERT INTO `test_news` (`id`, `title`, `author`, `content`, `date`) VALUES
(16, 'adfdasf', 'dfadfd', '<p><br/>&nbsp; &nbsp; dfafadfdasfdasdfdaf<br/></p><br/><p><br/>&nbsp; &nbsp; <br&nbsp;/><br/></p><br/><p><br/>&nbsp; &nbsp; <br&nbsp;/><br/></p><br/><p><br/>&nbsp; &nbsp; <br&nbsp;/><br/></p><br/><p><br/>&nbsp; &nbsp; <br&nbsp;/><br/></p><br/><p><br/>&nbsp; &nbsp; <br&nbsp;/><br/></p><br/><p><br/>&nbsp; &nbsp; dafdafd<em>dsafadfdsaf<u>dfafdsafadsfad</u></em><br/></p>', '2016-05-24 15:25:20'),
(17, 'dafdasf', 'fdafdsfd', '<p><br/>&nbsp; &nbsp; jfdiasjflkhkhfdkja<br/></p><br/><p><br/>&nbsp; &nbsp; <br&nbsp;/><br/></p><br/><p><br/>&nbsp; &nbsp; <br&nbsp;/><br/></p><br/><p><br/>&nbsp; &nbsp; dafafdsafdsafdsfds<br/></p><br/><p><br/>&nbsp; &nbsp; <br&nbsp;/><br/></p><br/><p><br/>&nbsp; &nbsp; <img&nbsp;src="/news/Public/kindeditor/upload/image/20160524/20160524093043_94215.png"&nbsp;alt=""&nbsp;/><br/></p>', '2016-05-24 15:30:47'),
(18, 'afd', 'adfdaf', '<p><br/>&nbsp; &nbsp; daffdasf<br/></p><br/><p><br/>&nbsp; &nbsp; flkdsajfuo<br/></p><br/><p><br/>&nbsp; &nbsp; <br&nbsp;/><br/></p><br/><p><br/>&nbsp; &nbsp; <br&nbsp;/><br/></p><br/><p><br/>&nbsp; &nbsp; fkldasfoeuiwrueqr<br/></p>', '2016-05-24 15:31:03');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
