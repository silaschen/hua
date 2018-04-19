# Host: localhost  (Version: 5.5.53)
# Date: 2018-04-19 13:32:55
# Generator: MySQL-Front 5.3  (Build 4.234)

/*!40101 SET NAMES utf8 */;

#
# Structure for table "orders2"
#

DROP TABLE IF EXISTS `orders2`;
CREATE TABLE `orders2` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `flowerid` int(11) NOT NULL,
  `orderid` varchar(32) NOT NULL,
  `num` int(6) NOT NULL,
  `fee` decimal(8,2) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `time` int(5) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `stat` varchar(500) DEFAULT '',
  `addtime` int(11) NOT NULL,
  `expire` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
