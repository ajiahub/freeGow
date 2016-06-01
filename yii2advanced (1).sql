-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2016-05-29 17:07:40
-- 服务器版本： 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `yii2advanced`
--

-- --------------------------------------------------------

--
-- 表的结构 `consignee`
--

CREATE TABLE IF NOT EXISTS `consignee` (
  `consignee_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `wx_name` varchar(20) NOT NULL COMMENT '微信端唯一用户名，与open_id一一对应',
  `consignee` varchar(20) NOT NULL COMMENT '收货人',
  `mobile` varchar(20) NOT NULL COMMENT '手机号码',
  `province` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL,
  `area` varchar(30) NOT NULL,
  `address` varchar(255) NOT NULL,
  `zip` int(10) unsigned DEFAULT NULL,
  `created_at` int(11) unsigned NOT NULL,
  `updated_at` int(11) unsigned DEFAULT NULL,
  `deleted_at` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`consignee_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='收货地址表' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `fans`
--

CREATE TABLE IF NOT EXISTS `fans` (
  `fans_id` int(11) NOT NULL AUTO_INCREMENT,
  `open_id` varchar(32) NOT NULL COMMENT '微信ID',
  `mobile` varchar(15) DEFAULT NULL COMMENT '会员手机号码',
  `wx_name` varchar(30) NOT NULL COMMENT '微信昵称',
  `gender` tinyint(1) NOT NULL COMMENT '性别,0:未知,1:男,2:女',
  `language` varchar(25) NOT NULL COMMENT '微信用户的语言',
  `city` varchar(255) NOT NULL COMMENT '城市',
  `province` varchar(255) NOT NULL COMMENT '省份',
  `country` varchar(255) NOT NULL COMMENT '国家',
  `is_focus` tinyint(1) NOT NULL DEFAULT '1' COMMENT '关注状态',
  `focus_at` int(11) DEFAULT NULL COMMENT '关注时间',
  `unfocus_at` int(11) DEFAULT NULL COMMENT '取消关注时间',
  `avatar` varchar(255) NOT NULL COMMENT '头像',
  PRIMARY KEY (`fans_id`),
  UNIQUE KEY `open_id` (`open_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='门店公众号粉丝表' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `goods`
--

CREATE TABLE IF NOT EXISTS `goods` (
  `goods_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `image_id` varchar(50) NOT NULL COMMENT '对应goods_image表的主键',
  `default_image_id` int(11) unsigned NOT NULL,
  `goods_name` varchar(100) NOT NULL,
  `goods_title` varchar(100) NOT NULL,
  `goods_des` varchar(255) NOT NULL,
  `area_id` int(10) unsigned NOT NULL,
  `cat_id` int(10) unsigned NOT NULL,
  `sc_price` int(10) unsigned NOT NULL,
  `price` int(10) unsigned NOT NULL,
  `wl_price` int(10) unsigned NOT NULL,
  `goods_stock` int(10) unsigned NOT NULL,
  `goods_cur_stock` int(10) unsigned NOT NULL,
  `pt_price` int(10) unsigned NOT NULL,
  `mark` varchar(255) DEFAULT NULL,
  `status` tinyint(1) unsigned NOT NULL DEFAULT '1' COMMENT '0下架，1正常',
  `click` int(11) unsigned NOT NULL,
  PRIMARY KEY (`goods_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='产品表' AUTO_INCREMENT=20 ;

--
-- 转存表中的数据 `goods`
--

INSERT INTO `goods` (`goods_id`, `username`, `image_id`, `default_image_id`, `goods_name`, `goods_title`, `goods_des`, `area_id`, `cat_id`, `sc_price`, `price`, `wl_price`, `goods_stock`, `goods_cur_stock`, `pt_price`, `mark`, `status`, `click`) VALUES
(9, 'lucky', '33', 33, '2016新款夏季波西米亚长裙优雅沙滩裙雪纺海边度假大摆女连衣裙', '2016新款夏季波西米亚长裙优雅沙滩裙雪纺海边度假大摆女连衣裙', '2016新款夏季波西米亚长裙优雅沙滩裙雪纺海边度假大摆女连衣裙', 2, 1, 288, 10, 0, 1000, 100, 8, '2016新款夏季波西米亚长裙优雅沙滩裙雪纺海边度假大摆女连衣裙2016新款夏季波西米亚长裙优雅沙滩裙雪纺海边度假大摆女连衣裙2016新款夏季波西米亚长裙优雅沙滩裙雪纺海边度假大摆女连衣裙2016新款夏季波西米亚长裙优雅沙滩裙雪纺海边度假大摆女连衣裙2016新款夏季波西米亚长裙优雅沙滩裙雪纺海边度假大摆女连衣裙2016新款夏季波西米亚长裙优雅沙滩裙雪纺海边度假大摆女连衣裙', 1, 0),
(10, 'lucky', '17,18,19,20', 17, 'King金士顿台式机内存DDR3 1333 4G电脑内存兼容1600 2G 8G正品', 'King金士顿台式机内存DDR3 1333 4G电脑内存兼容1600 2G 8G正品', 'King金士顿台式机内存DDR3 1333 4G电脑内存兼容1600 2G 8G正品', 1, 3, 128, 0, 20, 1000, 1000, 18, 'King金士顿台式机内存DDR3 1333 4G电脑内存兼容1600 2G 8G正品', 1, 0),
(11, 'lucky', '21,22', 21, '古叶嘉茗 武夷山岩茶奇兰茶叶 大红袍礼盒装 茶盘', '古叶嘉茗 武夷山岩茶奇兰茶叶 大红袍礼盒装 茶盘', '古叶嘉茗 武夷山岩茶奇兰茶叶 大红袍礼盒装 茶盘', 2, 2, 288, 100, 0, 1000, 1000, 80, '古叶嘉茗 武夷山岩茶奇兰茶叶 大红袍礼盒装 茶盘古叶嘉茗 武夷山岩茶奇兰茶叶 大红袍礼盒装 茶盘古叶嘉茗 武夷山岩茶奇兰茶叶 大红袍礼盒装 茶盘古叶嘉茗 武夷山岩茶奇兰茶叶 大红袍礼盒装 茶盘古叶嘉茗 武夷山岩茶奇兰茶叶 大红袍礼盒装 茶盘古叶嘉茗 武夷山岩茶奇兰茶叶 大红袍礼盒装 茶盘古叶嘉茗 武夷山岩茶奇兰茶叶 大红袍礼盒装 茶盘古叶嘉茗 武夷山岩茶奇兰茶叶 大红袍礼盒装 茶盘古叶嘉茗 武夷山岩茶奇兰茶叶 大红袍礼盒装 茶盘', 1, 0),
(12, 'lucky', '26', 26, '2016新款夏季波西米亚长裙优雅沙滩裙雪纺海边度假大摆女连衣裙', '2016新款夏季波西米亚长裙优雅沙滩裙雪纺海边度假大摆女连衣裙', '2016新款夏季波西米亚长裙优雅沙滩裙雪纺海边度假大摆女连衣裙', 2, 3, 1000, 100, 0, 1000, 1000, 88, '2016新款夏季波西米亚长裙优雅沙滩裙雪纺海边度假大摆女连衣裙', 1, 0),
(13, 'lucky', '27', 27, '包邮金士顿4G DDR3L 1600MHz低电压版 笔记本内存条12800S正品4GB', '包邮金士顿4G DDR3L 1600MHz低电压版 笔记本内存条12800S正品4GB', '包邮金士顿4G DDR3L 1600MHz低电压版 笔记本内存条12800S正品4GB', 1, 3, 88, 0, 20, 1000, 1000, 19, '包邮金士顿4G DDR3L 1600MHz低电压版 笔记本内存条12800S正品4GB', 1, 0),
(14, 'lucky', '28', 28, '【买一送一】新茶正山小种红茶茶叶武夷山桐木关陶瓷罐装250g', '【买一送一】新茶正山小种红茶茶叶武夷山桐木关陶瓷罐装250g', '【买一送一】新茶正山小种红茶茶叶武夷山桐木关陶瓷罐装250g', 0, 0, 288, 25, 0, 1000, 1000, 23, '【买一送一】新茶正山小种红茶茶叶武夷山桐木关陶瓷罐装250g【买一送一】新茶正山小种红茶茶叶武夷山桐木关陶瓷罐装250g', 1, 0),
(15, 'lucky', '29', 29, '2016新款夏季波西米亚长裙优雅沙滩裙雪纺海边度假大摆女连衣裙', '2016新款夏季波西米亚长裙优雅沙滩裙雪纺海边度假大摆女连衣裙', '2016新款夏季波西米亚长裙优雅沙滩裙雪纺海边度假大摆女连衣裙', 1, 1, 288, 25, 25, 1000, 1000, 24, '2016新款夏季波西米亚长裙优雅沙滩裙雪纺海边度假大摆女连衣裙', 1, 0),
(16, 'lucky', '30', 30, '2016新款夏季波西米亚长裙优雅沙滩裙雪纺海边度假大摆女连衣裙', '2016新款夏季波西米亚长裙优雅沙滩裙雪纺海边度假大摆女连衣裙', '2016新款夏季波西米亚长裙优雅沙滩裙雪纺海边度假大摆女连衣裙', 2, 1, 588, 88, 20, 1000, 1000, 100, '2016新款夏季波西米亚长裙优雅沙滩裙雪纺海边度假大摆女连衣裙', 1, 0),
(17, 'lucky', '31,32', 31, '89988888', '89988888', '89988888', 1, 3, 100, 88, 0, 1000, 1000, 80, '8998888889988888899888888998888889988888899888888998888889988888899888888998888889988888', 1, 0),
(18, 'lucky', '34', 34, '1111111111111111111111', '111111111111', '11111111111111111111', 1, 2, 100, 88, 0, 1000, 0, 80, '1111111111', 1, 0),
(19, 'lucky', '35', 35, '1111111111111', '111111111', '11111111111111111111', 1, 1, 100, 80, 10, 1000, 100, 70, '111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111', 1, 0);

-- --------------------------------------------------------

--
-- 表的结构 `goods_content`
--

CREATE TABLE IF NOT EXISTS `goods_content` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `goods_id` int(11) unsigned NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=19 ;

--
-- 转存表中的数据 `goods_content`
--

INSERT INTO `goods_content` (`id`, `goods_id`, `content`) VALUES
(2, 3, 'sdfdfdsfsdafsdfsdfsdfsdfsdfsdfdfsdf<img src="/static/kindeditor/attached/image/20160509/20160509164541_38526.jpg" alt="" />'),
(3, 4, '霏霏地震荡城66666666666666666666666666666666666666666666666666'),
(4, 5, '顶戴暮云春树去芜存菁左顶戴无可奈何花落去枯萎御用用'),
(5, 6, 'gfgfgfgfgfdgdfg'),
(6, 7, 'sdfasdfsdfsdf'),
(7, 8, 'sdfasdfsdfdfdfsdfsdfsd'),
(8, 9, '<h3 class="tb-main-title" style="font-size:16px;color:#3C3C3C;font-family:tahoma, arial, &quot;background-color:#FFFFFF;">\r\n	<img src="/static/kindeditor/php/../attached/image/20160514/20160514082459_79831.jpg" alt="" /><img src="/static/kindeditor/php/../attached/image/20160514/20160514082459_37921.jpg" alt="" /><img src="/static/kindeditor/php/../attached/image/20160514/20160514082459_50047.jpg" alt="" /><img src="/static/kindeditor/php/../attached/image/20160514/20160514082459_25847.jpg" alt="" /><br />\r\n</h3>'),
(9, 10, '<img src="/static/kindeditor/php/../attached/image/20160514/20160514082747_49745.jpg" alt="" /><img src="/static/kindeditor/php/../attached/image/20160514/20160514082747_80103.jpg" alt="" /><img src="/static/kindeditor/php/../attached/image/20160514/20160514082748_18940.jpg" alt="" /><img src="/static/kindeditor/php/../attached/image/20160514/20160514082748_97091.jpg" alt="" />'),
(10, 11, '<img align="absMiddle" src="https://img.alicdn.com/imgextra/i1/2231186769/TB25I4aeVXXXXcPXXXXXXXXXXXX_!!2231186769.jpg" /><img align="absMiddle" src="https://img.alicdn.com/imgextra/i2/2231186769/TB2fXdmeVXXXXaaXXXXXXXXXXXX_!!2231186769.jpg" /><img align="absMiddle" src="https://img.alicdn.com/imgextra/i1/2231186769/TB250ReeVXXXXbFXXXXXXXXXXXX_!!2231186769.jpg" /><img align="absMiddle" src="https://img.alicdn.com/imgextra/i2/2231186769/TB2zKNdeVXXXXccXXXXXXXXXXXX_!!2231186769.jpg" /><img align="absMiddle" src="https://img.alicdn.com/imgextra/i3/2231186769/TB2J2FoeVXXXXXDXXXXXXXXXXXX_!!2231186769.jpg" class="" /><img align="absMiddle" src="https://img.alicdn.com/imgextra/i4/2231186769/TB2ZyI5eFXXXXakXpXXXXXXXXXX_!!2231186769.jpg" class="" /><img align="absMiddle" src="https://img.alicdn.com/imgextra/i2/2231186769/TB219I0eFXXXXbIXpXXXXXXXXXX_!!2231186769.jpg" class="" /><img align="absMiddle" src="https://img.alicdn.com/imgextra/i2/2231186769/TB2hAMWeFXXXXcnXpXXXXXXXXXX_!!2231186769.jpg" class="" /><img align="absMiddle" src="https://img.alicdn.com/imgextra/i1/2231186769/TB2QWg.eFXXXXXgXpXXXXXXXXXX_!!2231186769.jpg" class="" /><img align="absMiddle" src="https://img.alicdn.com/imgextra/i1/2231186769/TB2FWM5eFXXXXaPXpXXXXXXXXXX_!!2231186769.jpg" class="" /><img align="absMiddle" src="https://img.alicdn.com/imgextra/i4/2231186769/TB2PvL1eVXXXXboXXXXXXXXXXXX_!!2231186769.jpg" class="" />'),
(11, 12, '<h3 class="tb-viewer-title" style="font-size:12px;color:#6C6C6C;font-family:tahoma, arial, &quot;">\r\n	<img alt="8120_01" src="https://cbu01.alicdn.com/img/ibank/2015/775/260/2059062577_1060401154.jpg" class="" /><br />\r\n<img alt="8120_02" src="https://cbu01.alicdn.com/img/ibank/2015/085/260/2059062580_1060401154.jpg" class="" /><br />\r\n<img alt="8120_03" src="https://cbu01.alicdn.com/img/ibank/2015/485/260/2059062584_1060401154.jpg" class="" /><br />\r\n<img alt="8120_04" src="https://cbu01.alicdn.com/img/ibank/2015/585/260/2059062585_1060401154.jpg" class="" /><br />\r\n<img alt="8120_05" src="https://cbu01.alicdn.com/img/ibank/2015/885/260/2059062588_1060401154.jpg" class="" /><br />\r\n<img alt="8120_06" src="https://cbu01.alicdn.com/img/ibank/2015/985/260/2059062589_1060401154.jpg" class="" /><br />\r\n<img alt="8120_07" src="https://cbu01.alicdn.com/img/ibank/2015/095/260/2059062590_1060401154.jpg" class="" /><br />\r\n<img alt="8120_08" src="https://cbu01.alicdn.com/img/ibank/2015/295/260/2059062592_1060401154.jpg" class="" /><br />\r\n<img alt="8120_09" src="https://cbu01.alicdn.com/img/ibank/2015/695/260/2059062596_1060401154.jpg" class="" /><br />\r\n<img alt="8120_10" src="https://cbu01.alicdn.com/img/ibank/2015/995/260/2059062599_1060401154.jpg" class="" /><br />\r\n<img alt="8120_11" src="https://cbu01.alicdn.com/img/ibank/2015/793/052/2056250397_1060401154.jpg" class="" /><br />\r\n<img alt="8120_12" src="https://cbu01.alicdn.com/img/ibank/2015/993/052/2056250399_1060401154.jpg" class="" /><br />\r\n<img alt="8120_13" src="https://cbu01.alicdn.com/img/ibank/2015/104/052/2056250401_1060401154.jpg" class="" /><br />\r\n<img alt="8120_14" src="https://cbu01.alicdn.com/img/ibank/2015/404/052/2056250404_1060401154.jpg" class="" /><br />\r\n<img alt="8120_15" src="https://cbu01.alicdn.com/img/ibank/2015/704/052/2056250407_1060401154.jpg" class="" /><br />\r\n<img alt="8120_16" src="https://cbu01.alicdn.com/img/ibank/2015/804/052/2056250408_1060401154.jpg" class="" /><br />\r\n<img alt="8120_17" src="https://cbu01.alicdn.com/img/ibank/2015/314/052/2056250413_1060401154.jpg" class="" /><br />\r\n<img alt="8120_18" src="https://cbu01.alicdn.com/img/ibank/2015/814/052/2056250418_1060401154.jpg" class="" /><br />\r\n<img alt="8120_19" src="https://cbu01.alicdn.com/img/ibank/2015/914/052/2056250419_1060401154.jpg" class="" /><br />\r\n</h3>'),
(12, 13, '<p style="color:#404040;font-family:tahoma, arial, 宋体, sans-serif;font-size:14px;background-color:#FFFFFF;">\r\n	包邮金士顿4G DDR3L 1600MHz低电压版 笔记本内存条12800S正品4GB\r\n</p>\r\n<p style="color:#404040;font-family:tahoma, arial, 宋体, sans-serif;font-size:14px;background-color:#FFFFFF;">\r\n	<img align="absmiddle" src="https://img.alicdn.com/imgextra/i2/751398772/TB2bJ2thpXXXXbLXXXXXXXXXXXX_!!751398772.png" class="img-ks-lazyload" /><img align="absmiddle" src="https://img.alicdn.com/imgextra/i2/751398772/TB2L6bbhpXXXXbvXpXXXXXXXXXX_!!751398772.png" class="img-ks-lazyload" />\r\n</p>\r\n<p style="color:#404040;font-family:tahoma, arial, 宋体, sans-serif;font-size:14px;background-color:#FFFFFF;">\r\n	<img align="absmiddle" src="https://img.alicdn.com/imgextra/i2/751398772/TB26_NrkpXXXXalXpXXXXXXXXXX_!!751398772.png" class="img-ks-lazyload" />\r\n</p>\r\n<p style="color:#404040;font-family:tahoma, arial, 宋体, sans-serif;font-size:14px;background-color:#FFFFFF;">\r\n	&nbsp;\r\n</p>\r\n<p style="color:#404040;font-family:tahoma, arial, 宋体, sans-serif;font-size:14px;background-color:#FFFFFF;">\r\n	<img align="absmiddle" src="https://img.alicdn.com/imgextra/i4/751398772/TB21_XukpXXXXXPXpXXXXXXXXXX_!!751398772.jpg" class="img-ks-lazyload" /><img align="absmiddle" src="https://img.alicdn.com/imgextra/i1/751398772/TB2pUlQkpXXXXXTXXXXXXXXXXXX_!!751398772.jpg" class="img-ks-lazyload" /><img align="absmiddle" src="https://img.alicdn.com/imgextra/i4/751398772/TB2WXNFkpXXXXbDXXXXXXXXXXXX_!!751398772.jpg" class="img-ks-lazyload" /><img align="absmiddle" src="https://img.alicdn.com/imgextra/i1/751398772/TB2mGxJkpXXXXbaXXXXXXXXXXXX_!!751398772.jpg" class="img-ks-lazyload" /><img align="absmiddle" src="https://img.alicdn.com/imgextra/i3/751398772/TB2i0JAkpXXXXbFXXXXXXXXXXXX_!!751398772.jpg" class="img-ks-lazyload" /><img align="absmiddle" src="https://img.alicdn.com/imgextra/i1/751398772/TB2N72yhpXXXXblXXXXXXXXXXXX_!!751398772.png" class="img-ks-lazyload" />\r\n</p>\r\n<p style="color:#404040;font-family:tahoma, arial, 宋体, sans-serif;font-size:14px;background-color:#FFFFFF;">\r\n	<img align="absmiddle" src="https://img.alicdn.com/imgextra/i4/751398772/TB2FfLrhpXXXXcKXXXXXXXXXXXX_!!751398772.png" class="img-ks-lazyload" />\r\n</p>'),
(13, 14, '<h3 class="tb-main-title" style="font-size:16px;color:#3C3C3C;font-family:tahoma, arial, &quot;background-color:#FFFFFF;">\r\n	<a target="_blank" href="http://meal.taobao.com/mealDetail.htm?spm=0.0.0.0.WNl2xU&amp;meal_id=306744099&amp;seller_id=2231186769&amp;mt=&amp;spm=0.0.0.0.WNl2xU&amp;meal_id=306744099&amp;seller_id=2231186769"><img align="absmiddle" src="https://img.alicdn.com/imgextra/i4/2231186769/TB29tEFipXXXXaMXXXXXXXXXXXX_!!2231186769.jpg" /><img align="absmiddle" src="https://img.alicdn.com/imgextra/i2/2231186769/TB2jx98jpXXXXbtXXXXXXXXXXXX_!!2231186769.jpg" /><img align="absmiddle" src="https://img.alicdn.com/imgextra/i2/2231186769/TB2wZ7OlpXXXXXnXpXXXXXXXXXX_!!2231186769.jpg" /></a><span style="font-family:tahoma, arial, 宋体, sans-serif;font-size:48px;background-color:#FFFFFF;"><span style="background-color:#FFFF00;">买一罐送一罐，系统默认是不配手提袋的，亲送礼如需要手提袋，请联系客服另拍哦！</span></span><img align="absmiddle" src="https://img.alicdn.com/imgextra/i2/2231186769/TB2sdZHipXXXXbKXpXXXXXXXXXX_!!2231186769.jpg" /><img align="absmiddle" src="https://img.alicdn.com/imgextra/i1/2231186769/TB2WISmgFXXXXaMXXXXXXXXXXXX_!!2231186769.jpg" class="" width="750" height="204" /><img align="absmiddle" src="https://img.alicdn.com/imgextra/i4/2231186769/TB2_UeSgVXXXXbPXpXXXXXXXXXX_!!2231186769.jpg" class="" width="790" height="504" /><span style="font-family:tahoma, arial, 宋体, sans-serif;font-size:14px;line-height:1.5;background-color:#FFFFFF;"></span><img align="absmiddle" src="https://img.alicdn.com/imgextra/i2/2231186769/TB23QiqgFXXXXX2XXXXXXXXXXXX_!!2231186769.jpg" class="" width="750" height="658" /><img align="absmiddle" src="https://img.alicdn.com/imgextra/i4/2231186769/TB256tNgFXXXXXuXpXXXXXXXXXX_!!2231186769.jpg" class="" width="790" height="308" /><span style="font-family:tahoma, arial, 宋体, sans-serif;font-size:14px;line-height:1.5;background-color:#FFFFFF;"></span><img align="absmiddle" src="https://img.alicdn.com/imgextra/i2/2231186769/TB2VaqsgFXXXXX6XXXXXXXXXXXX_!!2231186769.jpg" class="" width="750" height="602" /><img align="absmiddle" src="https://img.alicdn.com/imgextra/i3/2231186769/TB2ZSWrgFXXXXXCXXXXXXXXXXXX_!!2231186769.jpg" class="" width="750" height="599" /><img align="absmiddle" src="https://img.alicdn.com/imgextra/i1/2231186769/TB214emgFXXXXbjXXXXXXXXXXXX_!!2231186769.jpg" class="" width="750" height="471" /><img align="absmiddle" src="https://img.alicdn.com/imgextra/i1/2231186769/TB243GpgFXXXXaqXXXXXXXXXXXX_!!2231186769.jpg" class="" width="750" height="540" /><img align="absmiddle" src="https://img.alicdn.com/imgextra/i1/2231186769/TB2sveogFXXXXa8XXXXXXXXXXXX_!!2231186769.jpg" class="" width="750" height="559" /><img align="absmiddle" src="https://img.alicdn.com/imgextra/i1/2231186769/TB2_CqagFXXXXX2XpXXXXXXXXXX_!!2231186769.jpg" class="" width="750" height="520" /><img align="absmiddle" src="https://img.alicdn.com/imgextra/i2/2231186769/TB23pSegFXXXXceXXXXXXXXXXXX_!!2231186769.jpg" class="" width="750" height="482" /><img align="absmiddle" src="https://img.alicdn.com/imgextra/i4/2231186769/TB22FyagFXXXXXBXpXXXXXXXXXX_!!2231186769.jpg" class="" width="750" height="479" /><img align="absmiddle" src="https://img.alicdn.com/imgextra/i4/2231186769/TB285aigFXXXXcxXXXXXXXXXXXX_!!2231186769.jpg" class="" width="750" height="475" /><img align="absmiddle" src="https://img.alicdn.com/imgextra/i4/2231186769/TB2JyWngFXXXXa1XXXXXXXXXXXX_!!2231186769.jpg" class="" width="750" height="474" /><img align="absmiddle" src="https://img.alicdn.com/imgextra/i4/2231186769/TB2E_1OiXXXXXacXXXXXXXXXXXX_!!2231186769.jpg" class="" width="750" height="352" /><br />\r\n</h3>'),
(14, 15, '2016新款夏季波西米亚长裙优雅沙滩裙雪纺海边度假大摆女连衣裙2016新款夏季波西米亚长裙优雅沙滩裙雪纺海边度假大摆女连衣裙2016新款夏季波西米亚长裙优雅沙滩裙雪纺海边度假大摆女连衣裙2016新款夏季波西米亚长裙优雅沙滩裙雪纺海边度假大摆女连衣裙2016新款夏季波西米亚长裙优雅沙滩裙雪纺海边度假大摆女连衣裙2016新款夏季波西米亚长裙优雅沙滩裙雪纺海边度假大摆女连衣裙2016新款夏季波西米亚长裙优雅沙滩裙雪纺海边度假大摆女连衣裙20162016新款夏季波西米亚长裙优雅沙滩裙雪纺海边度假大摆女连衣裙2016新款夏季波西米亚长裙优雅沙滩裙雪纺海边度假大摆女连衣裙2016新款夏季波西米亚长裙优雅沙滩裙雪纺海边度假大摆女连衣裙2016新款夏季波西米亚长裙优雅沙滩裙雪纺海边度假大摆女连衣裙2016新款夏季波西米亚长裙优雅沙滩裙雪纺海边度假大摆女连衣裙2016新款夏季波西米亚长裙优雅沙滩裙雪纺海边度假大摆女连衣裙2016新款夏季波西米亚长裙优雅沙滩裙雪纺海边度假大摆女连衣裙2016新款夏季波西米亚长裙优雅沙滩裙雪纺海边度假大摆女连衣裙2016新款夏季波西米亚长裙优雅沙滩裙雪纺海边度假大摆女连衣裙2016新款夏季波西米亚长裙优雅沙滩裙雪纺海边度假大摆女连衣裙2016新款夏季波西米亚长裙优雅沙滩裙雪纺海边度假大摆女连衣裙2016新款夏季波西米亚长裙优雅沙滩裙雪纺海边度假大摆女连衣裙2016新款夏季波西米亚长裙优雅沙滩裙雪纺海边度假大摆女连衣裙2016新款夏季波西米亚长裙优雅沙滩裙雪纺海边度假大摆女连衣裙2016新款夏季波西米亚长裙优雅沙滩裙雪纺海边度假大摆女连衣裙2016新款夏季波西米亚长裙优雅沙滩裙雪纺海边度假大摆女连衣裙款夏季波西米亚长裙优雅沙滩裙雪纺海边度假大摆女连衣裙'),
(15, 16, '2016新款夏季波西米亚长裙优雅沙滩裙雪纺海边度假大摆女连衣裙2016新款夏季波西米亚长裙优雅沙滩裙雪纺海边度假大摆女连衣裙2016新款夏季波西米亚长裙优雅沙滩裙雪纺海边度假大摆女连衣裙2016新款夏季波西米亚长裙优雅沙滩裙雪纺海边度假大摆女连衣裙2016新款夏季波西米亚长裙优雅沙滩裙雪纺海边度假大摆女连衣裙2016新款夏季波西米亚长裙优雅沙滩裙雪纺海边度假大摆女连衣裙2016新款夏季波西米亚长裙优雅沙滩裙雪纺海边度假大摆女连衣裙2016新款夏季波西米亚长裙优雅沙滩裙雪纺海边度假大摆女连衣裙2016新款夏季波西米亚长裙优雅沙滩裙雪纺海边度假大摆女连衣裙2016新款夏季波西米亚长裙优雅沙滩裙雪纺海边度假大摆女连衣裙2016新款夏季波西米亚长裙优雅沙滩裙雪纺海边度假大摆女连衣裙2016新款夏季波西米亚长裙优雅沙滩裙雪纺海边度假大摆女连衣裙2016新款夏季波西米亚长裙优雅沙滩裙雪纺海边度假大摆女连衣裙2016新款夏季波西米亚长裙优雅沙滩裙雪纺海边度假大摆女连衣裙2016新款夏季波西米亚长裙优雅沙滩裙雪纺海边度假大摆女连衣裙2016新款夏季波西米亚长裙优雅沙滩裙雪纺海边度假大摆女连衣裙2016新款夏季波西米亚长裙优雅沙滩裙雪纺海边度假大摆女连衣裙'),
(16, 17, '899888888998888889988888899888888998888889988888899888888998888889988888899888888998888889988888'),
(17, 18, '<img src="http://www.advanced.dev/static/kindeditor/attached/image/20160515/20160515150836_19481.jpg" alt="" /><img src="http://www.advanced.dev/static/kindeditor/attached/image/20160515/20160515150918_47982.jpg" alt="" /><img src="http://www.advanced.dev/static/kindeditor/attached/image/20160515/20160515150918_78035.jpg" alt="" />'),
(18, 19, '11111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111<img src="http://www.advanced.dev/static/kindeditor/attached/image/20160515/20160515151033_44749.jpg" alt="" />');

-- --------------------------------------------------------

--
-- 表的结构 `goods_images`
--

CREATE TABLE IF NOT EXISTS `goods_images` (
  `image_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `goods_id` int(11) unsigned NOT NULL,
  `image` varchar(255) NOT NULL COMMENT '图片路径',
  PRIMARY KEY (`image_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='产品图片' AUTO_INCREMENT=36 ;

--
-- 转存表中的数据 `goods_images`
--

INSERT INTO `goods_images` (`image_id`, `goods_id`, `image`) VALUES
(2, 0, 'uploads/20160509/1feeef7c7a72b2b41.jpg'),
(3, 0, 'uploads/20160509/ca7be0c30d3dd2307.jpg'),
(4, 0, 'uploads/20160509/f2ba4b59f6dfb33f1.jpg'),
(5, 0, 'uploads/20160509/4ecc392e661d4db5d.jpg'),
(6, 0, 'uploads/20160509/b3812eeb3c82716ae.jpg'),
(7, 0, 'uploads/20160509/7ce864d63bcaa132b.jpg'),
(8, 0, 'uploads/20160509/8fc4ae1da0087d52e.jpg'),
(9, 0, 'uploads/20160510/46e7d0a758a796c4c.jpg'),
(10, 0, 'uploads/20160510/2ef59ea7c90769cc1.jpg'),
(11, 0, 'uploads/20160510/7b5afe2937e3d5276.jpg'),
(12, 0, 'uploads/20160514/e8d08629d69a459e9.jpg'),
(13, 0, 'uploads/20160514/eecfd62514d37fa0c.jpg'),
(14, 0, 'uploads/20160514/0f7f70cb7d4863180.jpg'),
(15, 0, 'uploads/20160514/0b43ee487b5cc8e5b.jpg'),
(16, 0, 'uploads/20160514/8186349e1621b81b3.jpg'),
(17, 10, 'uploads/20160514/317eef55863266578.jpg'),
(18, 10, 'uploads/20160514/c502a47e4541465c1.jpg'),
(19, 10, 'uploads/20160514/c2a8e81abcf6b9d2c.jpg'),
(20, 10, 'uploads/20160514/66118448eddfd2514.jpg'),
(21, 10, 'uploads/20160514/1dea16c6908b875e9.jpg'),
(22, 10, 'uploads/20160514/c078569f872f57ea4.jpg'),
(23, 0, 'uploads/20160514/3704b9643342f67a9.jpg'),
(24, 0, 'uploads/20160514/fa1b01fa06fa43b92.jpg'),
(25, 0, 'uploads/20160514/c2de894b8cb635226.jpg'),
(26, 12, 'uploads/20160514/ddf1f441c4c22d2ff.jpg'),
(27, 10, 'uploads/20160514/1869466a03fd8e28a.png'),
(28, 14, 'uploads/20160514/d4cb35775fc209eac.jpg'),
(29, 15, 'uploads/20160514/e8ce020a79f4e5ffa.jpg'),
(30, 16, 'uploads/20160514/7f7ff9029da30f644.jpg'),
(31, 17, 'uploads/20160514/5d9235810c4d87494.jpg'),
(32, 17, 'uploads/20160514/f0f86a4e561f76f57.jpg'),
(33, 9, 'uploads/20160514/2e066b9c855f1af9f.jpg'),
(34, 18, 'uploads/20160515/2f315f77421f61f14.jpg'),
(35, 19, 'uploads/20160515/53664fddccf17c971.jpg');

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `avatar` varchar(255) DEFAULT NULL COMMENT '头像',
  `auth_key` varchar(32) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `password_reset_token` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `access_token` varchar(255) NOT NULL,
  `role` smallint(6) NOT NULL DEFAULT '10',
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`id`, `username`, `avatar`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `access_token`, `role`, `status`, `created_at`, `updated_at`) VALUES
(1, 'caicai1', '', 'hyvdQLT7A4Qb2fWSagOe3IyGdLW-HckW', '$2y$13$1sASr/c1usfPrsZE2oNq9ePvFMzDm..3P3OAVuvozBWO10MLaDKJG', '', 'czh1@qq.com', 'caicai1', 10, 10, 1448176845, 1448176845),
(2, 'caicai2', '', 'hyvdQLT7A4Qb2fWSagOe3IyGdLW-HckW', '$2y$13$1sASr/c1usfPrsZE2oNq9ePvFMzDm..3P3OAVuvozBWO10MLaDKJG', '', 'czh2@qq.com', 'caicai2', 10, 10, 1448176845, 1448176845),
(3, 'caicai3', '', 'hyvdQLT7A4Qb2fWSagOe3IyGdLW-HckW', '$2y$13$1sASr/c1usfPrsZE2oNq9ePvFMzDm..3P3OAVuvozBWO10MLaDKJG', '', 'czh3@qq.com', 'caicai3', 10, 10, 1448176845, 1448176845),
(4, 'caicai4', '', 'hyvdQLT7A4Qb2fWSagOe3IyGdLW-HckW', '$2y$13$1sASr/c1usfPrsZE2oNq9ePvFMzDm..3P3OAVuvozBWO10MLaDKJG', '', 'czh4@qq.com', 'caicai4', 10, 10, 1448176845, 1448176845),
(5, 'caicai5', '', 'hyvdQLT7A4Qb2fWSagOe3IyGdLW-HckW', '$2y$13$1sASr/c1usfPrsZE2oNq9ePvFMzDm..3P3OAVuvozBWO10MLaDKJG', '', 'czh5@qq.com', 'caicai5', 10, 10, 1448176845, 1448176845),
(6, 'caicai6', '', 'hyvdQLT7A4Qb2fWSagOe3IyGdLW-HckW', '$2y$13$1sASr/c1usfPrsZE2oNq9ePvFMzDm..3P3OAVuvozBWO10MLaDKJG', '', 'czh6@qq.com', 'caicai6', 10, 10, 1448176845, 1448176845),
(7, 'caicai7', '', 'hyvdQLT7A4Qb2fWSagOe3IyGdLW-HckW', '$2y$13$1sASr/c1usfPrsZE2oNq9ePvFMzDm..3P3OAVuvozBWO10MLaDKJG', '', 'czh7@qq.com', 'caicai7', 10, 10, 1448176845, 1448176845),
(8, 'caicai1', '', 'hyvdQLT7A4Qb2fWSagOe3IyGdLW-HckW', '$2y$13$1sASr/c1usfPrsZE2oNq9ePvFMzDm..3P3OAVuvozBWO10MLaDKJG', '', 'czh1@qq.com', 'caicai1', 10, 10, 1448176845, 1448176845),
(9, 'lucky', NULL, 'gxnALvoQJgSI7ckHMwJU3MGZbVrl0Z0m', '$2y$13$UzSbm1wTUQNHYATAiug5euGqeCYRlnC84LBvtGuhLmXJ4U4gNTis6', NULL, '568621896@qq.com', '', 10, 10, 1460296351, 1460296351);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
