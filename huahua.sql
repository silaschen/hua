-- MySQL dump 10.13  Distrib 5.5.53, for Win32 (AMD64)
--
-- Host: localhost    Database: hua
-- ------------------------------------------------------
-- Server version	5.5.53

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `address`
--

DROP TABLE IF EXISTS `address`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `address` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `address`
--

LOCK TABLES `address` WRITE;
/*!40000 ALTER TABLE `address` DISABLE KEYS */;
/*!40000 ALTER TABLE `address` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(20) NOT NULL,
  `pwd` char(32) NOT NULL,
  `addtime` int(11) NOT NULL,
  `status` tinyint(1) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES (1,'ssr','e10adc3949ba59abbe56e057f20f883e',1516676921,1);
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `blog`
--

DROP TABLE IF EXISTS `blog`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `blog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `cover` varchar(150) NOT NULL,
  `content` text NOT NULL,
  `author` varchar(20) NOT NULL,
  `addtime` int(11) NOT NULL,
  `frameurl` varchar(150) DEFAULT NULL,
  `description` varchar(200) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `title` (`title`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blog`
--

LOCK TABLES `blog` WRITE;
/*!40000 ALTER TABLE `blog` DISABLE KEYS */;
INSERT INTO `blog` VALUES (3,'超人归来，我们的记忆','public/uploads/20180129/36cbb38db59147062d46b4d460b6aa52.jpg','奥术大师大所多<span>奥术大师大所多</span><span>奥术大师大所多</span><span>奥术大师大所多</span><span>奥术大师大所多</span><span>奥术大师大所多</span><span>奥术大师大所多</span><span>奥术大师大所多</span><span>奥术大师大所多</span><span>奥术大师大所多</span><span>奥术大师大所多</span><span>奥术大师大所多</span><span>奥术大师大所多</span><span>奥术大师大所多</span><span>奥术大师大所多</span><span>奥术大师大所多</span><span>奥术大师大所多</span><span>奥术大师大所多</span><span>奥术大师大所多</span><span>奥术大师大所多</span><span>奥术大师大所多</span><span>奥术大师大所多</span><span>奥术大师大所多</span><span>奥术大师大所多</span><span>奥术大师大所多</span><span>奥术大师大所多</span><span>奥术大师大所多</span><span>奥术大师大所多</span><span>奥术大师大所多</span><span>奥术大师大所多</span><span>奥术大师大所多</span><span>奥术大师大所多</span><span>奥术大师大所多</span><span>奥术大师大所多</span><span>奥术大师大所多</span><span>奥术大师大所多</span><span>奥术大师大所多</span>','admin',1517197234,'https://v.qq.com/iframe/player.html?vid=t0014zg9ie6&tiny=0&auto=0','sdfsadfsadfsadfasdf'),(4,'新中国新气象','public/uploads/20180129/eb5dc4a51da3d5659a84ee6906fbc61d.jpg','新<span>新中国新气象</span><span>新中国新气象</span><span>新中国新气象</span><span>新中国新气象</span><span>新中国新气象</span><span>新中国新气象</span><span>新中国新气象</span><span>新中国新气象</span><span>新中国新气象</span><span>新中国新气象</span><span>新中国新气象</span><span>新中国新气象</span><span>新中国新气象</span><span>新中国新气象</span><span>新中国新气象</span><span>新中国新气象</span><span>新中国新气象</span><span>新中国新气象</span><span>新中国新气象</span><span>新中国新气象</span><span>新中国新气象</span><span>新中国新气象</span><span>新中国新气象</span><span>新中国新气象</span><span>新中国新气象</span><span>新中国新气象</span><span>新中国新气象</span><span>新中国新气象</span>中国新气象','admin',1517201655,'https://v.qq.com/iframe/player.html?vid=t0014zg9ie6&tiny=0&auto=0',''),(5,'超人归来新时代的神','public/uploads/20180129/638ad71a3658bd6a4046825bc2a43979.jpg','<span>这是一个超级好看的电影，我们都是新时代的领路人。超人就是我们大家最爱的英雄，它无数次化解了危机，拯救了一代人。让我们走进好莱坞片场，共同见证<span>这是一个超级好看的电影，我们都是新时代的领路人。超人就是我们大家最爱的英雄，它无数次化解了危机，拯救了一代人。让我们走进好莱坞片场，共同见证</span><span>这是一个超级好看的电影，我们都是新时代的领路人。超人就是我们大家最爱的英雄，它无数次化解了危机，拯救了一代人。让我们走进好莱坞片场，共同见证</span><span>这是一个超级好看的电影，我们都是新时代的领路人。超人就是我们大家最爱的英雄，它无数次化解了危机，拯救了一代人。让我们走进好莱坞片场，共同见证</span><span>这是一个超级好看的电影，我们都是新时代的领路人。超人就是我们大家最爱的英雄，它无数次化解了危机，拯救了一代人。让我们走进好莱坞片场，共同见证</span></span>','admin',1517204660,'https://v.qq.com/iframe/player.html?vid=t0014zg9ie6&tiny=0&auto=0','这是一个超级好看的电影，我们都是新时代的领路人。超人就是我们大家最爱的英雄，它无数次化解了危机，拯救了一代人。让我们走进好莱坞片场，共同见证'),(6,'我们的神，什么是爱情','public/uploads/20180129/448347155f8a53ab70cd0ab301900092.jpg','哈哈哈哈，我懂你说的哈哈哈哈，我懂你说的哈哈哈哈，我懂你说的哈哈哈哈，我懂你说的哈哈哈哈，我懂你说的哈哈哈哈，我懂你说的哈哈哈哈，我懂你说的哈哈哈哈，我懂你说的哈哈哈哈，我懂你说的哈哈哈哈，我懂你说的哈哈哈哈，我懂你说的哈哈哈哈，我懂你说的哈哈哈哈，我懂你说的哈哈哈哈，我懂你说的哈哈哈哈，我懂你说的哈哈哈哈，我懂你说的哈哈哈哈，我懂你说的哈哈哈哈，我懂你说的哈哈哈哈，我懂你说的','admin',1517209503,'','哈哈哈哈，我懂你说的哈哈哈哈，我懂你说的哈哈哈哈，我懂你说的哈哈哈哈，我懂你说的'),(7,'日出江花红胜火','public/uploads/20180331/bc3a6b4044198261ad4b13f9506cbd95.jpg','日出江花红胜火，何不忆江南。江南好，风景旧曾谙。日出江花红胜火，何不忆江南。江南好，风景旧曾谙。日出江花红胜火，何不忆江南。江南好，风景旧曾谙。日出江花红胜火，何不忆江南。江南好，风景旧曾谙。日出江花红胜火，何不忆江南。江南好，风景旧曾谙。日出江花红胜火，何不忆江南。江南好，风景旧曾谙。日出江花红胜火，何不忆江南。江南好，风景旧曾谙。日出江花红胜火，何不忆江南。江南好，风景旧曾谙。日出江花红胜火，何不忆江南。江南好，风景旧曾谙。日出江花红胜火，何不忆江南。江南好，风景旧曾谙。日出江花红胜火，何不忆江南。江南好，风景旧曾谙。日出江花红胜火，何不忆江南。江南好，风景旧曾谙。日出江花红胜火，何不忆江南。江南好，风景旧曾谙。日出江花红胜火，何不忆江南。江南好，风景旧曾谙。','admin',1517282703,'','sdiabfwabf wefbhwaebfbfiawefnwe ewfrwei');
/*!40000 ALTER TABLE `blog` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cart` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `num` int(8) DEFAULT '1',
  `price` decimal(8,2) DEFAULT '0.00',
  `total` decimal(8,2) DEFAULT '0.00',
  `addtime` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cart`
--

LOCK TABLES `cart` WRITE;
/*!40000 ALTER TABLE `cart` DISABLE KEYS */;
/*!40000 ALTER TABLE `cart` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cart_order`
--

DROP TABLE IF EXISTS `cart_order`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cart_order` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `orderid` char(32) NOT NULL,
  `uid` int(11) NOT NULL,
  `total` decimal(8,2) DEFAULT '0.00',
  `data` varchar(500) NOT NULL,
  `expressinfo` varchar(150) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `recieve` varchar(20) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `status` tinyint(1) DEFAULT '2',
  `addtime` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cart_order`
--

LOCK TABLES `cart_order` WRITE;
/*!40000 ALTER TABLE `cart_order` DISABLE KEYS */;
/*!40000 ALTER TABLE `cart_order` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `flower`
--

DROP TABLE IF EXISTS `flower`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
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
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `flower`
--

LOCK TABLES `flower` WRITE;
/*!40000 ALTER TABLE `flower` DISABLE KEYS */;
INSERT INTO `flower` VALUES (14,'垂盆草',1,'public/uploads/20180330/0f52847b2f91142f5ec66160bcf8853b.jpg',2300.00,4,1,21,1522415858),(15,'金虎仙人掌',1,'public/uploads/20180330/d3ac07c270344671d6891bf67eb4d790.jpg',1200.00,4,1,21,1522415900),(16,'君子兰',1,'public/uploads/20180330/a2c648f250b75bbf8870ed9578354e59.jpg',1200.00,4,3,21,1522415960),(18,'玉翁',1,'public/uploads/20180331/92b451aa2d9475fa40752bdaef91cb09.jpg',450.00,5,1,200,1522496230),(19,'姬秋丽',1,'public/uploads/20180331/c763650e312f37291584679f260a4d68.jpg',600.00,4,1,200,1522496384),(20,'量天尺',1,'public/uploads/20180331/b2ac7ac9587b568d945eac508e187414.jpg',1000.00,4,1,200,1522496484),(21,'红稚莲',1,'public/uploads/20180331/b2ac7ac9587b568d945eac508e187414.jpg',889.00,4,1,200,1522496558),(22,'红稚莲',1,'public/uploads/20180331/e9a3fe255939df6584dbd44cb25ba71b.jpg',889.00,4,1,200,1522496588),(23,'文竹',1,'public/uploads/20180331/67aade93663c452a213e792425f01cb3.jpg',360.00,4,2,200,1522496676),(24,'西红柿',2,'public/uploads/20180331/17a3e7bc25d92570b0108ceb972aa1c2.jpg',25.00,3,1,32,1522499113),(25,'油麦菜',2,'public/uploads/20180331/e807630b8e7cb236506730a0251a7f0f.jpg',45.00,4,1,32,1522499228),(26,'大白菜',2,'public/uploads/20180331/1d8b04dac4054a2e88aa03060844f2a1.jpg',25.00,5,1,32,1522499355);
/*!40000 ALTER TABLE `flower` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `flowerid` int(11) NOT NULL,
  `orderid` varchar(32) NOT NULL,
  `num` int(6) NOT NULL,
  `fee` decimal(8,2) NOT NULL,
  `address` varchar(150) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `recieve` varchar(20) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `expressinfo` varchar(100) DEFAULT NULL,
  `addtime` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` VALUES (3,8,25,'248e2a5d3688a6a9e69b2b02d7431b2d',1,45.00,'weqwe','21321312','2321',2,NULL,1522591016),(4,15,24,'3e3e0397332e0d9fe402f897bea9cef7',3,75.00,'是对的','21312312','asd',4,'{\"name\":\"%E9%A1%BA%E4%B8%B0\",\"id\":\"345SD3243242342\"}',1524126825),(5,15,23,'81d46dd0491831ee7870c8594240269c',1,360.00,'asdasd','dasd','sadas',2,NULL,1524206165),(6,15,23,'87b1a31bbadc28bfc11304f6dd38220a',1,360.00,'asdasd','dasd','sadas',2,NULL,1524206175),(7,15,23,'14bedc70ba914094f393d2d4709fbd1b',1,360.00,'asdasd','dasd','sadas',2,NULL,1524206178);
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders2`
--

DROP TABLE IF EXISTS `orders2`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
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
  `stat` text,
  `addtime` int(11) NOT NULL,
  `expire` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders2`
--

LOCK TABLES `orders2` WRITE;
/*!40000 ALTER TABLE `orders2` DISABLE KEYS */;
INSERT INTO `orders2` VALUES (1,1,22,'2a55edf21da45fd5e84cacf29f5e7846',1,949.00,'18811175544',3,2,'{\"height\":\"40\",\"weight\":\"20\",\"text\":\"%E6%B6%A8%E5%8A%BF%E4%B8%8D%E9%94%99\",\"album\":[\"public\\\\uploads/20180419\\1ea0971cb7359ea3406cc19008c2bfe1.jpg\",\"public\\\\uploads/20180419\\f0e944342d905037d75277740b0061e6.jpg\",\"public\\\\uploads/20180419\\e3db6d43c2df27d87e37bcc62c6878c4.jpg\"]}',1522577403,1530439803),(2,8,22,'7367f5f1aa46f0e68a39390c2868dbd4',1,949.00,'',3,2,NULL,1522590560,1530452960),(3,17,21,'88e93238386667e9ebcb6c7adedf2fa8',1,949.00,'18811174687',2,2,'{\"height\":\"40\",\"weight\":\"20\",\"text\":\"asda\",\"album\":[\"public\\\\uploads\\/20180420\\\\e85ef6584e84d96852c6962040600909.jpg\",\"public\\\\uploads\\/20180420\\\\d0d43d9c273f78f4142300f666a282e6.jpg\",\"public\\\\uploads\\/20180420\\\\db2ae881d4b30e6bac26301cb514d5ef.jpg\",\"public\\\\uploads\\/20180420\\\\136f1c1fda21a5d42a59d719332ef280.jpg\"]}',1524114462,1531976862),(4,15,21,'2b9bb7ed858a3ee6e69203f2d236a1e3',1,1129.00,'19921329232',12,2,'{\"height\":\"40\",\"weight\":\"20\",\"text\":\"asda\",\"album\":[\"public\\\\uploads\\/20180420\\\\e85ef6584e84d96852c6962040600909.jpg\",\"public\\\\uploads\\/20180420\\\\d0d43d9c273f78f4142300f666a282e6.jpg\",\"public\\\\uploads\\/20180420\\\\db2ae881d4b30e6bac26301cb514d5ef.jpg\",\"public\\\\uploads\\/20180420\\\\136f1c1fda21a5d42a59d719332ef280.jpg\"]}',1524199331,1555735331),(5,15,18,'bef24fd0f21785b3cbd860dc509a10d9',1,710.00,'3242432',1,2,'{\"height\":\"40\",\"weight\":\"20\",\"text\":\"%E5%B1%B1%E4%B8%AD%E7%9A%84%E8%8A%B1%E5%B7%B2%E7%BB%8F%E5%BC%80%E6%94%BE%EF%BC%8C%E4%BD%A0%E5%8F%AF%E8%AE%B0%E5%BE%97%E6%88%91%E6%98%AF%E8%B0%81%EF%BC%81%E5%B1%B1%E4%B8%AD%E7%9A%84%E8%8A%B1%E5%B7%B2%E7%BB%8F%E5%BC%80%E6%94%BE%EF%BC%8C%E4%BD%A0%E5%8F%AF%E8%AE%B0%E5%BE%97%E6%88%91%E6%98%AF%E8%B0%81%EF%BC%81%E5%B1%B1%E4%B8%AD%E7%9A%84%E8%8A%B1%E5%B7%B2%E7%BB%8F%E5%BC%80%E6%94%BE%EF%BC%8C%E4%BD%A0%E5%8F%AF%E8%AE%B0%E5%BE%97%E6%88%91%E6%98%AF%E8%B0%81%EF%BC%81%E5%B1%B1%E4%B8%AD%E7%9A%84%E8%8A%B1%E5%B7%B2%E7%BB%8F%E5%BC%80%E6%94%BE%EF%BC%8C%E4%BD%A0%E5%8F%AF%E8%AE%B0%E5%BE%97%E6%88%91%E6%98%AF%E8%B0%81%EF%BC%81%E5%B1%B1%E4%B8%AD%E7%9A%84%E8%8A%B1%E5%B7%B2%E7%BB%8F%E5%BC%80%E6%94%BE%EF%BC%8C%E4%BD%A0%E5%8F%AF%E8%AE%B0%E5%BE%97%E6%88%91%E6%98%AF%E8%B0%81%EF%BC%81%E5%B1%B1%E4%B8%AD%E7%9A%84%E8%8A%B1%E5%B7%B2%E7%BB%8F%E5%BC%80%E6%94%BE%EF%BC%8C%E4%BD%A0%E5%8F%AF%E8%AE%B0%E5%BE%97%E6%88%91%E6%98%AF%E8%B0%81%EF%BC%81%E5%B1%B1%E4%B8%AD%E7%9A%84%E8%8A%B1%E5%B7%B2%E7%BB%8F%E5%BC%80%E6%94%BE%EF%BC%8C%E4%BD%A0%E5%8F%AF%E8%AE%B0%E5%BE%97%E6%88%91%E6%98%AF%E8%B0%81%EF%BC%81%E5%B1%B1%E4%B8%AD%E7%9A%84%E8%8A%B1%E5%B7%B2%E7%BB%8F%E5%BC%80%E6%94%BE%EF%BC%8C%E4%BD%A0%E5%8F%AF%E8%AE%B0%E5%BE%97%E6%88%91%E6%98%AF%E8%B0%81%EF%BC%81%E5%B1%B1%E4%B8%AD%E7%9A%84%E8%8A%B1%E5%B7%B2%E7%BB%8F%E5%BC%80%E6%94%BE%EF%BC%8C%E4%BD%A0%E5%8F%AF%E8%AE%B0%E5%BE%97%E6%88%91%E6%98%AF%E8%B0%81%EF%BC%81\",\"album\":[\"public\\\\uploads\\/20180420\\\\2c4deff3f6805c995dbf423b808f1ad0.jpg\",\"public\\\\uploads\\/20180420\\\\af71d6a5034d87acb6fe20f5fa1ef487.jpg\",\"public\\\\uploads\\/20180420\\\\a712e2455dafc90d3b9e727cd80aaaa1.jpg\",\"public\\\\uploads\\/20180420\\\\3e54a6d5ee4c443baf7f0f42ee967a8a.jpg\",\"public\\\\uploads\\/20180420\\\\09ec90dfe7fd6194065d73a75e129ae0.jpg\",\"public\\\\uploads\\/20180420\\\\a7b7619e4a36c5c310c55d0e595e7bed.jpg\"]}',1524203843,1557899843);
/*!40000 ALTER TABLE `orders2` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `questions`
--

DROP TABLE IF EXISTS `questions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `questions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `oid` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `content` text NOT NULL,
  `answer` text,
  `addtime` int(11) NOT NULL,
  `restime` int(11) DEFAULT NULL,
  `uid` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `questions`
--

LOCK TABLES `questions` WRITE;
/*!40000 ALTER TABLE `questions` DISABLE KEYS */;
INSERT INTO `questions` VALUES (2,11,'怎么浇水呢？','你知道怎么给花浇水吗？','给花浇水，一天两次，每次浇水2000ml.切记，不要浇水太多，防止淹死花卉。另外请定期检查健康状态！！',1522547357,1522559216,1),(5,2,'水土','种类','数量',1522591044,1522591079,7),(6,4,'你是谁？','这是谁','你傻逼啊！滚犊子！！！',1524203956,1524203982,15),(7,4,'花卉死了，怎么复活？','我的花卉刚买五天就死了，怎么办啊现在？秋恢复，在线等，挺急的',NULL,1524204450,NULL,15),(8,4,'我的小花狗','你是一个小花狗？哈哈啊哈哈哈哈哈哈哈哈哈啊你是一个小花狗？哈哈啊哈哈哈哈哈哈哈哈哈啊你是一个小花狗？哈哈啊哈哈哈哈哈哈哈哈哈啊你是一个小花狗？哈哈啊哈哈哈哈哈哈哈哈哈啊你是一个小花狗？哈哈啊哈哈哈哈哈哈哈哈哈啊你是一个小花狗？哈哈啊哈哈哈哈哈哈哈哈哈啊',NULL,1524204666,NULL,15),(9,4,'安达市多','士大夫撒地方士大夫撒地方士大夫撒地方士大夫撒地方士大夫撒地方士大夫撒地方士大夫撒地方士大夫撒地方士大夫撒地方士大夫撒地方',NULL,1524204680,NULL,15),(10,4,'其味无穷','五大发发按时发的萨芬撒？奥术大师大所大所撒飞洒发玩法·，前往大打算的撒范德萨发，撒范德萨发士大夫撒非常小擦我发到·',NULL,1524204716,NULL,15),(11,4,'戚薇戚薇戚薇·1','撒地方萨芬侧发生的方法撒大声地',NULL,1524204735,NULL,15),(12,1,'asdsa','dsadsad',NULL,1525398914,NULL,15);
/*!40000 ALTER TABLE `questions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nickname` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(32) NOT NULL,
  `addtime` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'爱玩儿阴阳师的妹子','18811174688','xiaobai@aa.com','e10adc3949ba59abbe56e057f20f883e',1522577287),(6,'231213','12312321','m123123@.com','202cb962ac59075b964b07152d234b70',1522590327),(7,'zah','123456','zah@qq.com','e10adc3949ba59abbe56e057f20f883e',1522590460),(8,'小黑的天下','18811177788','434684326@qq.com','827ccb0eea8a706c4c34a16891f84e7b',1522590483),(9,'2132','111111','a@a.com','41bb8974c66fc84d4728926ccf85ca20',1522749809),(10,'234','24','ssre','e10adc3949ba59abbe56e057f20f883e',1522750435),(11,'234324','324234','234324324','e10adc3949ba59abbe56e057f20f883e',1522750479),(12,'asdsa','12345','ssrs','c20ad4d76fe97759aa27a0c99bff6710',1522750639),(13,'小明','1881174687','wang@w.com','96e79218965eb72c92a549dd5a330112',1522764098),(14,'qwewqewq','12312321','ssr21321','e10adc3949ba59abbe56e057f20f883e',1523844551),(15,'qqw','','ssr','e10adc3949ba59abbe56e057f20f883e',1523844741),(16,'ewrw','','ssr@ww.cn','e10adc3949ba59abbe56e057f20f883e',1523845394),(17,'assww','123','sb@dsad.com','202cb962ac59075b964b07152d234b70',1524114397);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_address`
--

DROP TABLE IF EXISTS `user_address`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_address` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `recieve` varchar(20) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `addtime` int(11) DEFAULT NULL,
  `address` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_address`
--

LOCK TABLES `user_address` WRITE;
/*!40000 ALTER TABLE `user_address` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_address` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-05-04 10:52:36
