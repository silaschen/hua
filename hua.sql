# Host: localhost  (Version: 5.5.53)
# Date: 2018-03-30 18:38:56
# Generator: MySQL-Front 5.3  (Build 4.234)

/*!40101 SET NAMES utf8 */;

#
# Structure for table "flower"
#

DROP TABLE IF EXISTS `flower`;
CREATE TABLE `flower` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `type` tinyint(1) NOT NULL DEFAULT '1',
  `cover` varchar(150) NOT NULL,
  `price` decimal(8,2) NOT NULL DEFAULT '0.00',
  `level` tinyint(1) DEFAULT '3',
  `cate` tinyint(1) NOT NULL DEFAULT '1',
  `stock` int(8) DEFAULT '100',
  `addtime` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

#
# Structure for table "user"
#

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nickname` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(32) NOT NULL,
  `addtime` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
