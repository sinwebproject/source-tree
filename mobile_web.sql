-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- 主機: localhost
-- 產生時間： 2016-04-13 10:07:39
-- 伺服器版本: 5.7.10-log
-- PHP 版本： 5.6.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `mobile_web`
--

-- --------------------------------------------------------

--
-- 資料表結構 `comm`
--

CREATE TABLE `comm` (
  `userid` varchar(15) NOT NULL,
  `comments` varchar(256) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `cmid` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `comm`
--

INSERT INTO `comm` (`userid`, `comments`, `timestamp`, `cmid`) VALUES
('sinho', 'what the...', '2016-04-13 08:48:58', 9);

-- --------------------------------------------------------

--
-- 資料表結構 `favlist`
--

CREATE TABLE `favlist` (
  `userid` varchar(20) NOT NULL,
  `link` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `favlist`
--

INSERT INTO `favlist` (`userid`, `link`) VALUES
('admin', '/gmfoods_background'),
('sinho', '/gmfoods_background'),
('sinho', '/gmfoods_controversies');

-- --------------------------------------------------------

--
-- 資料表結構 `members`
--

CREATE TABLE `members` (
  `username` varchar(20) NOT NULL,
  `userpassword` varchar(20) NOT NULL,
  `emailaddress` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `members`
--

INSERT INTO `members` (`username`, `userpassword`, `emailaddress`) VALUES
('admin', '1234', 'admin@admin.com'),
('johnny', '789', '19@sin.com'),
('sinh', '456456', '45645'),
('sinho', '1234', 'sinho@yahoo.com');

-- --------------------------------------------------------

--
-- 資料表結構 `search_info`
--

CREATE TABLE `search_info` (
  `sinfo` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `search_info`
--

INSERT INTO `search_info` (`sinfo`) VALUES
('login'),
('register'),
('gmfoods_background'),
('cm'),
('gmfoods_controversies'),
('favlist'),
('GM'),
('gmfoods_controversies'),
('gmfoods_process'),
('page1'),
('page2');

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `comm`
--
ALTER TABLE `comm`
  ADD PRIMARY KEY (`cmid`);

--
-- 資料表索引 `favlist`
--
ALTER TABLE `favlist`
  ADD PRIMARY KEY (`userid`,`link`);

--
-- 資料表索引 `members`
--
ALTER TABLE `members`
  ADD UNIQUE KEY `userName` (`username`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `comm`
--
ALTER TABLE `comm`
  MODIFY `cmid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
