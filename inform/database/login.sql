-- phpMyAdmin SQL Dump
-- version phpStudy 2014
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2018 年 03 月 29 日 05:31
-- 服务器版本: 5.5.53
-- PHP 版本: 5.4.45

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `login`
--

-- --------------------------------------------------------

--
-- 表的结构 `collection`
--

CREATE TABLE IF NOT EXISTS `collection` (
  `cid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `myname` varchar(50) NOT NULL,
  `thekey` int(10) NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=29 ;

--
-- 转存表中的数据 `collection`
--

INSERT INTO `collection` (`cid`, `myname`, `thekey`) VALUES
(24, 'root', 6),
(2, '高鹏', 9),
(3, '高鹏', 7),
(4, '高鹏', 5),
(5, '高鹏', 3),
(6, 'Ltachi', 8),
(7, 'Ltachi', 6),
(8, 'Ltachi', 2),
(23, 'root', 2),
(11, 'root', 8),
(28, '1', 15),
(13, 'beyond', 12),
(14, 'root', 7),
(17, '高鹏', 13),
(26, 'beyond', 13),
(27, 'Ltachi', 15);

-- --------------------------------------------------------

--
-- 表的结构 `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `tid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `othername` varchar(50) NOT NULL,
  `comm` varchar(50) NOT NULL,
  `lasttime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `thekey` int(10) NOT NULL,
  PRIMARY KEY (`tid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=39 ;

--
-- 转存表中的数据 `comment`
--

INSERT INTO `comment` (`tid`, `othername`, `comm`, `lasttime`, `thekey`) VALUES
(1, 'Ltachi', '内容', '2018-02-05 13:43:18', 1),
(2, 'Ltachi', '测试内容', '2018-02-05 13:43:23', 1),
(3, '高鹏', '我不能走我也不能哭，因为我的身体已经干枯', '2018-02-06 06:09:42', 2),
(4, '高鹏', '噢......你何时跟我走', '2018-02-06 06:15:28', 2),
(5, '高鹏', '有的说，没的做，怎知不容易', '2018-02-07 05:38:42', 3),
(6, '高鹏', '问问天，问问地，还有多少里', '2018-02-06 06:16:41', 2),
(7, '高鹏', '埋着头，向前走，寻找我自己', '2018-02-06 06:18:59', 2),
(8, '高鹏', '换掉我的志如钢和毅如铁', '2018-02-06 06:20:06', 5),
(9, '高鹏', '快让我在这雪地上撒点儿野', '2018-02-06 06:20:50', 5),
(10, 'root', '测试', '2018-02-07 05:26:06', 4),
(11, 'root', '小步舞曲', '2018-02-07 05:38:24', 2),
(12, 'root', '小夜曲', '2018-02-07 05:38:00', 3),
(13, 'root', '五月', '2018-02-07 05:37:55', 3),
(14, '高鹏', '天鹅湖', '2018-02-07 05:43:11', 4),
(15, '高鹏', '测试', '2018-02-07 05:43:26', 1),
(16, '高鹏', '莫扎特', '2018-02-07 05:47:00', 4),
(17, '高鹏', '小步舞曲', '2018-02-07 05:48:10', 1),
(18, '高鹏', '阳光', '2018-02-07 05:48:42', 4),
(19, '高鹏', '绿袖子', '2018-02-07 05:49:21', 6),
(20, '高鹏', '内容', '2018-02-07 05:51:05', 6),
(21, '高鹏', '多少钱', '2018-02-07 11:49:31', 10),
(22, '高鹏', '用了多久了？', '2018-02-07 11:50:05', 11),
(23, 'root', '天花板上镶嵌着的镜子', '2018-02-08 09:08:02', 3),
(24, 'root', 'you can check out any time you like', '2018-02-08 09:08:42', 1),
(25, 'root', '测试', '2018-02-14 09:32:34', 1),
(26, 'root', '测试', '2018-02-18 10:41:57', 5),
(27, 'root', '内容', '2018-02-18 10:42:37', 5),
(28, 'beyond', '一剪梅', '2018-02-19 11:12:45', 12),
(29, 'beyond', '工资怎么结', '2018-02-19 11:13:14', 9),
(30, '测试账号', '一生所爱', '2018-02-21 11:05:41', 12),
(31, 'root', '一楼', '2018-03-03 07:10:28', 7),
(32, 'root', '多少？', '2018-03-03 12:16:30', 10),
(33, 'root', '赞一个', '2018-03-08 05:07:11', 6),
(34, 'beyond', '这是什么', '2018-03-09 10:25:17', 13),
(35, 'root', '测试一下', '2018-03-09 10:44:58', 8),
(36, 'Ltachi', '测试', '2018-03-09 14:55:51', 14),
(37, 'Ltachi', '联系我吧！', '2018-03-11 07:35:01', 15),
(38, '1', '1111', '2018-03-14 00:45:11', 15);

-- --------------------------------------------------------

--
-- 表的结构 `content`
--

CREATE TABLE IF NOT EXISTS `content` (
  `id` int(16) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `title` varchar(25) NOT NULL,
  `content` varchar(300) NOT NULL,
  `image` varchar(100) NOT NULL,
  `image1` varchar(100) NOT NULL,
  `image2` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `thetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `think` int(20) unsigned NOT NULL,
  `seenum` int(20) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

--
-- 转存表中的数据 `content`
--

INSERT INTO `content` (`id`, `username`, `title`, `content`, `image`, `image1`, `image2`, `type`, `thetime`, `think`, `seenum`) VALUES
(16, '1', '公司招服务员', '公司招服务员数名，有意者与我联系', '1520995326con27.jpg', '1520995326con25.jpg', '1520995326con13.jpg', 'job', '2018-03-14 02:42:07', 1, 2),
(2, '高鹏', '光辉岁月', '钟声响起归家的讯号 ， 在他生命里  ，彷佛带点唏嘘 ， 黑色肌肤给他的意义，  是一生奉献， 肤色斗争中 ， 年月把拥有变做失去，  疲倦的双眼带著期望。', '1517812346con4.jpg', '1517812346con5.jpg', '1517812346con6.jpg', 'job', '2018-02-06 06:14:26', 7, 78),
(3, 'Ltachi', '真的爱你', '无法可修饰的一对手 ， 带出温暖永远在背后 ， 总是罗嗦始终关注 ， 不懂珍惜太内疚，  沉醉于音阶她不赞赏  ，母亲的爱却永远未退让。', '1517812632con7.jpg', '1517812632con8.jpg', '1517812632con9.jpg', 'second', '2018-02-07 06:10:42', 10, 88),
(15, '高鹏', '高数', '找人一起学习高数，相互帮助。', '1520753610con26.jpg', '1520753610con7.jpg', '1520753610con8.jpg', 'study', '2018-03-11 07:33:31', 2, 5),
(4, 'Ltachi', '无悔这一生', '阳光历次消散别去 ， 无理冲击我心绪，  前景没法打算怎么，  谁会偷生远方里。', '1517812819con10.jpg', '1517812819con11.jpg', '1517812819con12.jpg', 'study', '2018-02-07 06:14:59', 1, 31),
(5, 'beyond', '逝去日子', '可否再继续发着青春梦 ， 不知道光阴飞踪，  道理没法听懂  ，一再落魄街中。', '1517813467con13.jpg', '1517813467con14.jpg', '1517813467con15.jpg', 'school', '2018-02-07 06:12:15', 0, 17),
(6, 'beyond', '再见理想', '独坐在路边街角 冷风吹醒  ，默默地伴着我的孤影  ，只想将结他紧抱 ，诉出辛酸 ， 就在这刻想起往事 ， 心中一股冲劲勇闯。', '1517813571con16.jpg', '1517813571con17.jpg', '1517813571con18.jpg', 'study', '2018-02-07 05:59:17', 1, 24),
(7, '测试账号', '曾经的你', '曾梦想仗剑走天涯 ， 看一看世界的繁华  ，年少的心总有些轻狂 ， 如今你四海为家 ， 曾让你心疼的姑娘 ， 如今已悄然无踪影。', '1517813874con19.jpg', '1517813874con20.jpg', '1517813874con21.jpg', 'second', '2018-02-07 05:27:30', 7, 33),
(8, '测试账号', '蓝莲花', '没有什么能够阻挡 ， 你对自由的向往，  天马行空的生涯，  你的心了无牵挂。', '1517814167con22.jpg', '1517814167con23.jpg', '1517814167con24.jpg', 'study', '2018-02-06 13:09:45', 9, 32),
(13, 'root', '招聘小学教师', '急需一名小学老师，要求本科学历学历，工作认真负责', '1520061518con20.jpg', '1520061518con13.jpg', '1520061518con8.jpg', 'job', '2018-03-03 07:18:39', 2, 31),
(9, 'root', '超市导购员', '公司急需五名导购员，有意向请与我联系', '1517991711con25.jpg', '1517991711con26.jpg', '1517991711con27.jpg', 'job', '2018-02-07 08:21:52', 2, 36),
(10, 'root', '二手手机', '出售一部二手手机，需要的联系我', '1517992168con28.jpg', '1517992168con29.jpg', '1517992168con30.jpg', 'second', '2018-02-07 08:29:29', 3, 27),
(11, 'root', '二手小米mix2', '出售一部二手手机，需要的联系我', '1517992421con31.jpg', '1517992421con32.jpg', '1517992421con33.jpg', 'second', '2018-02-07 08:33:42', 4, 32),
(12, 'root', '测试标题', '测试内容', '1518068028con10.jpg', '1518068028con23.jpg', '1518068028con25.jpg', 'study', '2018-02-08 05:33:49', 9, 69),
(14, 'beyond', '公司找人发传单', '公司需要数名发传单人员，可以与我联系', '1520591027timg (1).jpg', '1520591027timg (2).jpg', '1520591027timg.jpg', 'job', '2018-03-09 10:23:48', 1, 9);

-- --------------------------------------------------------

--
-- 表的结构 `regcheck`
--

CREATE TABLE IF NOT EXISTS `regcheck` (
  `rid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `photo` varchar(50) NOT NULL,
  `background` varchar(50) NOT NULL,
  `synopsis` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `qq` varchar(20) NOT NULL,
  `wechat` varchar(20) NOT NULL,
  PRIMARY KEY (`rid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- 转存表中的数据 `regcheck`
--

INSERT INTO `regcheck` (`rid`, `username`, `password`, `photo`, `background`, `synopsis`, `phone`, `qq`, `wechat`) VALUES
(1, 'root', 'root', '180209032733_pho.jpg', '180303031522_con2.jpg', '大型铸锻件是我国重大装备制造业的重要基础和关键瓶颈', '13724095764', '456732346', 'vddfbvdf'),
(2, '高鹏', 'gpqaz19951226', '180208030508_pho1.jpg', '180208045331_con22.jpg', '钟声响起归家的讯号', '17862827928', '1196359414', 'gpqaz'),
(3, '测试', 'eeeeee', '180208030706_pho3.jpg', '180208045232_con25.jpg', '测试测试测试测试测试测试', '12345678454', '435364646', 'jtyyjtydjtd'),
(4, '测试1', 'refeferf', '180208030809_pho4.jpg', '180208045146_con1.jpg', '是你多么温馨的目光，教我坚毅望着前路', '', '', ''),
(5, '岳晓', 'yue6825532', '180208030853_pho2.jpg', '180208045044_con24.jpg', '', '', '', ''),
(6, 'Ltachi', '123456', '180208031006_pho5.jpg', '180208044920_con16.jpg', 'She puts the rhythm, the beat in the drum', '13423424567', '35435434', 'dasfef'),
(7, '请输入您的昵称', 'cdsdc', '180208031131_pho6.jpg', '180208044719_con9.jpg', '', '', '', ''),
(8, 'beyond', '123456', '180208031302_pho7.jpg', '180208044622_con12.jpg', '钟声响起归家的讯号，在他生命里，彷佛带点唏嘘', '13423679435', '44566757', 'sdsdgdb'),
(9, '测试账号', '123456', '180208044208_pho9.jpg', '180208044425_con3.jpg', '', '', '', ''),
(10, '1', '111111', '180314103250_pho6.jpg', '180314103348_con12.jpg', '', '1435647654', '3547567657', '433545');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
