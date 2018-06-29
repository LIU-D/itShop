/*
SQLyog Enterprise - MySQL GUI v8.14 
MySQL - 5.5.53 : Database - itshop
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`itshop` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `itshop`;

/*Table structure for table `sp_cart` */

DROP TABLE IF EXISTS `sp_cart`;

CREATE TABLE `sp_cart` (
  `cart_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cart_name` varchar(20) NOT NULL,
  `cart_desc` text NOT NULL,
  PRIMARY KEY (`cart_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

/*Data for the table `sp_cart` */

insert  into `sp_cart`(`cart_id`,`cart_name`,`cart_desc`) values (1,'aaa','aaaaaaaaaaaaaaaaaaaaa'),(2,'2a2a2a','bbbbbbbbbbbbbbbbbbbb'),(3,'ccccccc','ccccccccccccccc'),(4,'dddd','dddddddddddddddd'),(5,'eeee','eeeeeeeeeeeeeeeeeeeeeeeeee');

/*Table structure for table `sp_cate` */

DROP TABLE IF EXISTS `sp_cate`;

CREATE TABLE `sp_cate` (
  `cate_id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '分类id',
  `cate_name` varchar(20) NOT NULL COMMENT '分类名称',
  PRIMARY KEY (`cate_id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

/*Data for the table `sp_cate` */

insert  into `sp_cate`(`cate_id`,`cate_name`) values (1,'手机'),(2,'自行车'),(3,'电脑'),(4,'毛衣'),(5,'皮夹克'),(7,'牛仔裤'),(8,'皮夹克');

/*Table structure for table `sp_dept` */

DROP TABLE IF EXISTS `sp_dept`;

CREATE TABLE `sp_dept` (
  `dept_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `dept_name` varchar(20) NOT NULL,
  PRIMARY KEY (`dept_id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

/*Data for the table `sp_dept` */

insert  into `sp_dept`(`dept_id`,`dept_name`) values (1,'计算机系'),(2,'数学系'),(3,'英语系'),(4,'金融系'),(5,'国际贸易');

/*Table structure for table `sp_goods` */

DROP TABLE IF EXISTS `sp_goods`;

CREATE TABLE `sp_goods` (
  `goods_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `goods_name` varchar(50) NOT NULL COMMENT '商品名称',
  `goods_price` decimal(10,2) NOT NULL COMMENT '商品价格',
  `goods_vip_price` decimal(10,2) NOT NULL COMMENT '会员价',
  `goods_num` int(11) NOT NULL COMMENT '商品库存数量',
  `goods_addtime` int(10) unsigned NOT NULL COMMENT '上架时间戳',
  `goods_desc` text NOT NULL COMMENT '商品描述',
  `goods_logo` varchar(200) NOT NULL COMMENT '商品图片地址',
  `goods_small_logo` varchar(200) NOT NULL COMMENT '商品缩略图地址',
  `goods_cateid` int(10) unsigned NOT NULL COMMENT '商品所属分类id',
  `goods_isdel` enum('上架','下架') DEFAULT NULL COMMENT '商品状态',
  `goods_tj` tinyint(1) DEFAULT NULL COMMENT '是否推荐',
  PRIMARY KEY (`goods_id`),
  UNIQUE KEY `goods_name` (`goods_name`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

/*Data for the table `sp_goods` */

insert  into `sp_goods`(`goods_id`,`goods_name`,`goods_price`,`goods_vip_price`,`goods_num`,`goods_addtime`,`goods_desc`,`goods_logo`,`goods_small_logo`,`goods_cateid`,`goods_isdel`,`goods_tj`) values (1,'华为mate10 电脑','4899.00','3919.20',10,1513835252,'华为商务手机','./upload/2017-12-21/5a3b4af4d02d5.jpg','./upload/2017-12-21/thumb_5a3b4af4d02d5.jpg',1,'上架',1),(2,'华为电脑mate9 pro','4688.00','3750.40',20,1513835573,'法撒旦法师打发斯蒂芬','./upload/2017-12-21/5a3b4c3502afd.jpg','./upload/2017-12-21/thumb_5a3b4c3502afd.jpg',1,'下架',0),(3,'联想u1 电','3899.00','3119.20',20,1513835722,'奉公守法','./upload/2017-12-21/5a3b4cca7e99c.jpg','./upload/2017-12-21/thumb_5a3b4cca7e99c.jpg',3,'上架',0),(4,'惠普r电脑9','5666.00','4532.80',10,1513835757,'刚发生三公分','./upload/2017-12-21/5a3b4ced009e0.jpg','./upload/2017-12-21/thumb_5a3b4ced009e0.jpg',3,'上架',1);

/*Table structure for table `sp_student` */

DROP TABLE IF EXISTS `sp_student`;

CREATE TABLE `sp_student` (
  `sno` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `sname` varchar(20) NOT NULL,
  `sage` tinyint(3) unsigned NOT NULL,
  `sgendor` enum('男','女') DEFAULT '男',
  `sdept` int(11) DEFAULT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

/*Data for the table `sp_student` */

insert  into `sp_student`(`sno`,`sname`,`sage`,`sgendor`,`sdept`) values (1,'zs',20,'男',1),(2,'ls',21,'女',2),(3,'ww',21,'女',1),(4,'zl',19,'男',3),(5,'tq',22,'男',4),(8,'金毛狮王',56,'男',3),(7,'赵敏',18,'女',4),(9,'杨逍',58,'男',2),(10,'张翠山',30,'男',1),(11,'周芷若',20,'女',2),(12,'灭绝师太',55,'女',2);

/*Table structure for table `sp_users` */

DROP TABLE IF EXISTS `sp_users`;

CREATE TABLE `sp_users` (
  `user_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_name` varchar(20) NOT NULL,
  `user_pwd` char(32) NOT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `user_name` (`user_name`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

/*Data for the table `sp_users` */

insert  into `sp_users`(`user_id`,`user_name`,`user_pwd`) values (1,'admin','202cb962ac59075b964b07152d234b70'),(2,'root','202cb962ac59075b964b07152d234b70'),(3,'abc','202cb962ac59075b964b07152d234b70');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
