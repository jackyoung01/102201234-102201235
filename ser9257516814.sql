-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- 主机： localhost
-- 生成日期： 2024-10-09 21:37:39
-- 服务器版本： 5.7.44-log
-- PHP 版本： 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `ser9257516814`
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
(1, 'admin', 'ddfc2b27498612457a1f02e5fb03e143');

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
(41, '', '哈哈，你是个人才！', '01', '2019-01-29 02:04:08', '64', '192.168.1.6', '2635435377', 'PULLBA'),
(42, '', '呦西', '01', '2024-10-09 16:23:20', '81', '209.141.50.239', '132', '8');

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
(78, '666', 'https://img2024.cnblogs.com/blog/3512199/202409/3512199-20240927171035131-48488110.png', '1', '0', '0', '204.188.247.5', '2024-10-08 23:57:11', 'jack', '666', '908756682', '东百中心', 'https://img2024.cnblogs.com/blog/3512199/202409/3512199-20240927171035131-48488110.png', '实名', 'success'),
(79, 'ikun', 'https://img2024.cnblogs.com/blog/3512199/202409/3512199-20240918185310963-286324243.png', '1', '0', '0', '204.188.247.5', '2024-10-08 23:59:33', 'ikun', 'ikunjiwen', '123', 'www.baidu.com', 'https://img2024.cnblogs.com/blog/3512199/202409/3512199-20240918185310963-286324243.png', '实名', 'success'),
(80, '666', '', '1', '0', '0', '204.188.247.5', '2024-10-09 00:06:31', 'jack', '666', '908756682', '东百中心', '', '实名', 'success'),
(81, '888', '', '1', '1', '0', '209.141.50.239', '2024-10-09 16:21:22', 'ikun', 'ikunjiwen', '123', 'ecs-8cb0', '', '实名', 'success');

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
(65, '64', '192.168.1.6'),
(67, '81', '209.141.50.239'),
(68, '80', '209.141.50.239'),
(69, '79', '209.141.50.239'),
(70, '78', '209.141.50.239');

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
(1, 'CoNexus-协力通', '一个奇怪的跨专业项目合作平台', 'localhost', 'CoNexus-协力通', 'CoNexus-协力通，PULLBA，MCweb', 'jackikun 2024', '', '908756682', '免费的项目交流平台', '', '//cs.fatda.cn/zs/1.gif', '站长公告', '10/08/2024');

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
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- 使用表AUTO_INCREMENT `content`
--
ALTER TABLE `content`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- 使用表AUTO_INCREMENT `handle`
--
ALTER TABLE `handle`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- 使用表AUTO_INCREMENT `system`
--
ALTER TABLE `system`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
