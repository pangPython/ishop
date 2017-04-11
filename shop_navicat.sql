/*
Navicat MySQL Data Transfer

Source Server         : .
Source Server Version : 50553
Source Host           : localhost:3306
Source Database       : shop

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2017-04-11 19:04:18
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `admin`
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uname` varchar(255) NOT NULL,
  `pwd` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of admin
-- ----------------------------
INSERT INTO `admin` VALUES ('1', 'admin', 'admin');

-- ----------------------------
-- Table structure for `adv`
-- ----------------------------
DROP TABLE IF EXISTS `adv`;
CREATE TABLE `adv` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `keywords` varchar(255) DEFAULT NULL,
  `picture` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of adv
-- ----------------------------
INSERT INTO `adv` VALUES ('1', '广告1', '轮播', '/images/56e6a9d26d76d3GZ7ISlt5y10455.jpg', '123123213');
INSERT INTO `adv` VALUES ('2', '轮播2', '广告', '/images/56ebb54d3c934W0xGnTL6Pz42200.jpg', '#');
INSERT INTO `adv` VALUES ('4', '广告3', '轮播', '/images/56ebc00d857f6mPasxHIy0S76596.jpg', '#');

-- ----------------------------
-- Table structure for `cart`
-- ----------------------------
DROP TABLE IF EXISTS `cart`;
CREATE TABLE `cart` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `goods_id` int(11) NOT NULL,
  `count` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cart
-- ----------------------------
INSERT INTO `cart` VALUES ('1', '1', '1', '222');
INSERT INTO `cart` VALUES ('2', '1', '1', '1');

-- ----------------------------
-- Table structure for `goods`
-- ----------------------------
DROP TABLE IF EXISTS `goods`;
CREATE TABLE `goods` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `goods_name` varchar(255) NOT NULL,
  `type` varchar(100) NOT NULL,
  `price` float NOT NULL,
  `description` text,
  `old_price` float(4,2) DEFAULT '0.00',
  `picture` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of goods
-- ----------------------------
INSERT INTO `goods` VALUES ('1', '珍珠', '1', '11', '群殴无IE怄气无无无无', '12.00', '/images/5781648_100156002928_2.jpg');
INSERT INTO `goods` VALUES ('11', '汽车', '2', '6666.66', '兰博基尼', '99.99', '/images/1302585745207rcr9vdm2la_medium.jpg');
INSERT INTO `goods` VALUES ('12', '手机', '4', '699', '华为MATE9pro', '99.99', '/images/11103HT3-8.jpg');
INSERT INTO `goods` VALUES ('13', '榴莲', '水果', '11.2', '南方大榴莲', '12.80', '/images/164928179.jpg');

-- ----------------------------
-- Table structure for `orders`
-- ----------------------------
DROP TABLE IF EXISTS `orders`;
CREATE TABLE `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `goods_id` int(11) NOT NULL,
  `count` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of orders
-- ----------------------------
INSERT INTO `orders` VALUES ('1', '1', '1', '6');
INSERT INTO `orders` VALUES ('2', '1', '2', '4');
INSERT INTO `orders` VALUES ('3', '1', '1', '222');
INSERT INTO `orders` VALUES ('4', '5', '10', '2');
INSERT INTO `orders` VALUES ('5', '5', '10', '2');

-- ----------------------------
-- Table structure for `pay`
-- ----------------------------
DROP TABLE IF EXISTS `pay`;
CREATE TABLE `pay` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pay_method` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of pay
-- ----------------------------
INSERT INTO `pay` VALUES ('1', '支付宝');
INSERT INTO `pay` VALUES ('2', '微信支付');
INSERT INTO `pay` VALUES ('3', '财付通');
INSERT INTO `pay` VALUES ('4', '银联支付');
INSERT INTO `pay` VALUES ('5', '百度钱包');

-- ----------------------------
-- Table structure for `user`
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uname` varchar(255) NOT NULL,
  `pwd` varchar(255) NOT NULL,
  `tel` varchar(30) DEFAULT NULL,
  `sex` varchar(20) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', 'test', '123456', '15766668888', '1', '124142@qq.com', '山东省', '/user/touxiang/1.jpg');
INSERT INTO `user` VALUES ('2', 'test1', '111111', '111111', '女', '123123@qq.com', '浙江省', null);
INSERT INTO `user` VALUES ('5', 'jubaopen', '123456', '15766666666', '1', '123312@qq.com', '河北省雄县', null);
INSERT INTO `user` VALUES ('4', 'u001', '123456', '13966889999', '1', '13966889999@139.com', '北京市亦庄', null);

-- ----------------------------
-- Table structure for `wenzhang`
-- ----------------------------
DROP TABLE IF EXISTS `wenzhang`;
CREATE TABLE `wenzhang` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `author` varchar(255) NOT NULL,
  `time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wenzhang
-- ----------------------------
INSERT INTO `wenzhang` VALUES ('1', '测试', '· Unity发布5.6版本开发平台，将支持Google VR开发平台· 《纽约邮报》手机客户端推送系统被黑 黑客发送抒情诗· LinkedIn高管告诫年轻人：设定好目标 不要急于求成· 从“软件”再到“硬件”详细讲解常见的电脑故障以及解决方法· 苹果欲收购东芝闪存 自己把控闪存的技术了', 'administrator', '2017-04-08 16:57:37');
INSERT INTO `wenzhang` VALUES ('2', '如何用算法学习判定“红楼梦（下）”原作者？ ', '1.作为一个从没看过红楼梦的人，我的大致思路是这样的：用开源的分词工具把全书分词（python的jieba分词），然后统计词频。把出现频次超过100次的词语找出来，人工去掉一些可能因为文章内容造成前后出现不一致的人名、地名；\r\n2.然后每一章按照2中的词频表，看这一章中出现这些词语的频次；\r\n3.前80回、后40回各选15回作为机器学习的数据，让机器学习这些章节的用词特点，然后推算其他章节的用词特点是属于前80回呢、还是后40回；\r\n4.如果机器根据这些用词特征推算的是否属于后40回的结果跟实际的结果吻合，那么就说明后40回的写作风格跟前80回有很大不同，很可能是两个人写的；', 'admin', '2017-04-04 12:11:43');
INSERT INTO `wenzhang` VALUES ('3', ' oracle 分析函数手册', '\r\n以下分析函数虽然是在 oracle 9i 的基础上整理的，但是仍然适用于 10g，11g以及12c等后续版本\r\nOracle从8.1.6开始提供分析函数，分析函数用于计算基于组的某种聚合值，它和聚合函数的不同之处是对于每个组返回多行，而聚合函数对于每个组只返回一行。\r\n下面例子中使用的表来自Oracle自带的HR用户下的表，如果没有安装该用户，可以在SYS用户下运行$ORACLE_HOME/demo/schema/human_resources/hr_main.sql来创建。       \r\n少数几个例子需要访问SH用户下的表，如果没有安装该用户，可以在SYS用户下运行$ORACLE_HOME/demo/schema/sales_history/sh_main.sql来创建。', '匿名', '2017-04-04 12:12:02');
INSERT INTO `wenzhang` VALUES ('5', '这是一篇测试文章', '成都薛之谦开的火锅店', 'root', '2017-04-10 12:53:18');
