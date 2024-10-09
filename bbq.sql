-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- 主机： localhost
-- 生成日期： 2019-12-15 00:33:44
-- 服务器版本： 5.7.26
-- PHP 版本： 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `bbq`
--

-- --------------------------------------------------------

--
-- 表的结构 `admin`
--

CREATE TABLE `admin` (
  `Id` int(11) NOT NULL,
  `user` varchar(255) NOT NULL DEFAULT '',
  `pass` varchar(255) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `admin`
--

INSERT INTO `admin` (`Id`, `user`, `pass`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- 表的结构 `comment`
--

CREATE TABLE `comment` (
  `Id` int(11) NOT NULL,
  `plimg` varchar(255) NOT NULL DEFAULT '',
  `cont` varchar(255) NOT NULL DEFAULT '',
  `floor` varchar(255) NOT NULL DEFAULT '',
  `pltime` varchar(255) NOT NULL DEFAULT '',
  `contid` varchar(255) NOT NULL DEFAULT '',
  `ip` varchar(255) NOT NULL DEFAULT '',
  `plqq` varchar(255) NOT NULL DEFAULT '',
  `plname` varchar(255) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `comment`
--

INSERT INTO `comment` (`Id`, `plimg`, `cont`, `floor`, `pltime`, `contid`, `ip`, `plqq`, `plname`) VALUES
(41, '', '哈哈，你是个人才！', '01', '2019-01-29 02:04:08', '64', '192.168.1.6', '2635435377', 'PULLBA');

-- --------------------------------------------------------

--
-- 表的结构 `content`
--

CREATE TABLE `content` (
  `Id` int(11) NOT NULL,
  `cont` varchar(255) NOT NULL DEFAULT '',
  `img` varchar(255) NOT NULL DEFAULT '',
  `zan` varchar(255) NOT NULL DEFAULT '',
  `comt` varchar(255) NOT NULL DEFAULT '',
  `nm` varchar(255) NOT NULL DEFAULT '',
  `ip` varchar(255) NOT NULL DEFAULT '',
  `fbtime` varchar(255) NOT NULL DEFAULT '',
  `bbr1` varchar(255) NOT NULL DEFAULT '',
  `bbr2` varchar(255) NOT NULL DEFAULT '',
  `qq` varchar(255) NOT NULL DEFAULT '',
  `bqq` varchar(255) NOT NULL DEFAULT '',
  `syimg` varchar(255) NOT NULL DEFAULT '',
  `lx` varchar(255) NOT NULL DEFAULT '',
  `lx1` varchar(255) DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `content`
--

INSERT INTO `content` (`Id`, `cont`, `img`, `zan`, `comt`, `nm`, `ip`, `fbtime`, `bbr1`, `bbr2`, `qq`, `bqq`, `syimg`, `lx`, `lx1`) VALUES
(64, '“一个宇宙，九大行星，二百零四个国家，八百零九个岛屿，七个大洋，六十八亿人口，我竟如此幸运，可以遇见你。”\r\n', 'http://5b0988e595225.cdn.sohucs.com/images/20170922/eaab95242c534e11b29f9fdd407f0e3c.jpeg', '1', '1', '0', '192.168.1.6', '2019-01-29 02:03:28', 'Greaty', '马化腾', '2635435377', '10001', 'http://5b0988e595225.cdn.sohucs.com/images/20170926/1509a234d6d5402aa5e5abd227554219.jpeg', '实名', 'success');

-- --------------------------------------------------------

--
-- 表的结构 `handle`
--

CREATE TABLE `handle` (
  `Id` int(11) NOT NULL,
  `cid` varchar(255) NOT NULL DEFAULT '',
  `ip` varchar(255) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `handle`
--

INSERT INTO `handle` (`Id`, `cid`, `ip`) VALUES
(65, '64', '192.168.1.6');

-- --------------------------------------------------------

--
-- 表的结构 `system`
--

CREATE TABLE `system` (
  `Id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL DEFAULT '',
  `title2` varchar(255) NOT NULL DEFAULT '',
  `weburl` varchar(255) NOT NULL DEFAULT '',
  `webkey` varchar(255) NOT NULL DEFAULT '',
  `webdes` varchar(255) NOT NULL DEFAULT '',
  `footer` varchar(255) NOT NULL DEFAULT '',
  `yqlj` varchar(255) NOT NULL DEFAULT '',
  `zzqq` varchar(255) NOT NULL DEFAULT '',
  `webgg` varchar(535) NOT NULL DEFAULT '',
  `kfqq` varchar(255) NOT NULL DEFAULT '',
  `gsimg` varchar(255) NOT NULL DEFAULT '',
  `gsbt` varchar(255) NOT NULL DEFAULT '',
  `gstime` varchar(10000) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `system`
--

INSERT INTO `system` (`Id`, `title`, `title2`, `weburl`, `webkey`, `webdes`, `footer`, `yqlj`, `zzqq`, `webgg`, `kfqq`, `gsimg`, `gsbt`, `gstime`) VALUES
(1, '表白墙', '祝各位有情人终成眷属', 'localhost', '表白墙', 'GREATY表白墙，PULLBA，MCweb', 'PULLBA 2019', '<a href=\"http://chizg.cn\">吃纸怪的博客</a>', '2635435377', '“一个宇宙，九大行星，二百零四个国家，八百零九个岛屿，七个大洋，六十八亿人口，我竟如此幸运，可以遇见你。”', '', '//cs.fatda.cn/zs/1.gif', '站长公告', '05/18/2019 7:16 PM');

--
-- 转储表的索引
--

--
-- 表的索引 `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Id`);

--
-- 表的索引 `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`Id`);

--
-- 表的索引 `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`Id`);

--
-- 表的索引 `handle`
--
ALTER TABLE `handle`
  ADD PRIMARY KEY (`Id`);

--
-- 表的索引 `system`
--
ALTER TABLE `system`
  ADD PRIMARY KEY (`Id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `admin`
--
ALTER TABLE `admin`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用表AUTO_INCREMENT `comment`
--
ALTER TABLE `comment`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- 使用表AUTO_INCREMENT `content`
--
ALTER TABLE `content`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- 使用表AUTO_INCREMENT `handle`
--
ALTER TABLE `handle`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- 使用表AUTO_INCREMENT `system`
--
ALTER TABLE `system`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
