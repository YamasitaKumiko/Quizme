-- MySQL dump 10.13  Distrib 5.7.37, for Win64 (x86_64)
--
-- Host: localhost    Database: project
-- ------------------------------------------------------
-- Server version	5.7.37-log

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
-- Table structure for table `questions`
--

DROP TABLE IF EXISTS `questions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `questions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(50) NOT NULL,
  `level` int(11) NOT NULL,
  `question` text NOT NULL,
  `answer` varchar(50) DEFAULT NULL,
  `creator` int(11) DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `questions_id_uindex` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `questions`
--

LOCK TABLES `questions` WRITE;
/*!40000 ALTER TABLE `questions` DISABLE KEYS */;
/*!40000 ALTER TABLE `questions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `record`
--

DROP TABLE IF EXISTS `record`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `record` (
  `item_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `grade` varchar(10) NOT NULL,
  `num_question` varchar(20) NOT NULL,
  `date` varchar(20) DEFAULT NULL,
  `time` varchar(20) NOT NULL,
  `category` varchar(50) NOT NULL,
  `level` int(11) NOT NULL,
  `size` int(11) NOT NULL,
  `limited_time` int(11) NOT NULL,
  PRIMARY KEY (`item_id`)
) ENGINE=InnoDB AUTO_INCREMENT=71 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `record`
--

LOCK TABLES `record` WRITE;
/*!40000 ALTER TABLE `record` DISABLE KEYS */;
INSERT INTO `record` VALUES (1,'Roway','19','9','2021-07-14','86','',0,0,0),(2,'Roway','13','16','2021-07-14','116','',0,0,0),(3,'user','0','3','2021-07-15','208','',0,0,0),(4,'Roway','8','8','2021-07-15','60','',0,0,0),(5,'Roway','7','6','2021-07-15','42','',0,0,0),(6,'Roway','0','1','2021-07-15','28','',0,0,0),(7,'user','6','5','2021-07-15','43','',0,0,0),(8,'user','1','4','2021-07-15','16','',0,0,0),(9,'Roway','4','5','2021-07-15','16','',0,0,0),(10,'user','0','1','2021-07-16','6','',0,0,0),(11,'user','2','3','2021-07-16','25','',0,0,0),(12,'user','2','3','2021-07-16','25','',0,0,0),(13,'user','7','8','2021-07-16','83','',0,0,0),(57,'Roway','4','4','2021-07-16','61','',0,0,0),(58,'user','3','3','2021-07-16','53','',0,0,0),(59,'Roway','2','2','2021-07-16','10','',0,0,0),(60,'user','0','1','2021-07-16','50','',0,0,0),(61,'Roway','4','3','2021-07-16','11','',0,0,0),(62,'Roway','5','4','2021-07-16','48','',0,0,0),(63,'kumiko','4','4','2022-07-22','27','',0,0,0),(64,'kumiko','0','0','2022-07-22','-8341502531','',0,0,0),(65,'kumiko','0','0','2022-07-22','-8341502530','',0,0,0),(66,'kumiko','0','0','2022-07-22','-8341502530','',0,0,0),(67,'kumiko','0','0','2022-07-22','-8341502529','',0,0,0),(68,'kumiko','0','0','2022-07-22','-8341502529','',0,0,0),(69,'kumiko','0','0','2022-07-22','-8341502529','',0,0,0);
/*!40000 ALTER TABLE `record` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `userid` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(15) NOT NULL,
  `password` varchar(255) NOT NULL,
  `question_donated` int(10) DEFAULT '0',
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'Roway','$2y$10$C.ogj0Gat9jqNMsTRL..XOiKy3i9xnOwiChCyMpExKqu/cMpog0yi',5),(2,'Marc','$2y$10$frk6nOA2ExVjiAoD3GMubOyL/OuJ3WDbpXoais34XVpis9OzXCQy.',0),(3,'jack','$2y$10$y51eA3Ro.DppQ1ybE0dH6ure.05AtyvjW.F3G26lBI9KihfNL1Dxu',0),(4,'Tony','$2y$10$phnlizfUxHOh3s65YoGdI.xje.Q66v2Zn3H0Kt9QZyYt7ssSvg7XS',1),(5,'kumiko','$2y$10$k3WSu1o/uv5j6IcT7Uyi3elV0YBuWdH//chkYadVTN4zDxrMiTg4m',0);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wrong_questions`
--

DROP TABLE IF EXISTS `wrong_questions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wrong_questions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `item_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `question_id` int(11) DEFAULT NULL,
  `wrong_answer` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `wrong_questions_id_uindex` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wrong_questions`
--

LOCK TABLES `wrong_questions` WRITE;
/*!40000 ALTER TABLE `wrong_questions` DISABLE KEYS */;
/*!40000 ALTER TABLE `wrong_questions` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-07-23 14:03:59
