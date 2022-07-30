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
) ENGINE=InnoDB AUTO_INCREMENT=106 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `questions`
--

LOCK TABLES `questions` WRITE;
/*!40000 ALTER TABLE `questions` DISABLE KEYS */;
INSERT INTO `questions` VALUES (5,'geography',2,'where is henan','middle of china',5),(6,'general',2,'Which Apollo 11 astronaut did not set foot on the moon?<ul><li>a) Neil A. Armstrong</li><li>b) Michael Collins</li><li>c) Edwin Aldrin</li></ul>(enter \'a\', \'b\' or \'c\')','b\r\n',0),(7,'general',3,'Mariposa, Motyl, Farfalla, Borboleta, Papillon and Sommerfuglare all European words for what?','Butterfly\r\n',0),(8,'sport',3,'Which national team introduced \'Total Football\' at the 1974 FIFA World Cup in Germany?','Holland\r\n',0),(9,'general',2,'What is the common name for Japanese horseradish?','Wasabi\r\n',0),(10,'science',2,'What is the name of the network of computers from which the Internet has emerged?','Arpanet\r\n',0),(11,'science',1,'In computing what is RAM short for?','Random Access Memory\r\n',0),(12,'general',1,'In which Nintendo DS game do you have to raise a puppy as well as possible?','Nintendogs\r\n',0),(13,'geography',3,'What is the capital of Turkey?','Ankara\r\n',0),(14,'geography',1,'What is the national animal of China?','Panda\r\n',0),(15,'geography',3,'What is the noisiest city in the world?','Hong Kong\r\n',0),(16,'geography',3,'What is the name of the desert area in Mexico?','Sonora\r\n',0),(17,'geography',2,'What is a very cold part of Russia?','Siberia\r\n',0),(18,'geography',1,'How many continents are there?','7 \r\n',0),(19,'geography',3,'On which Italian island is Palermo?','Sicily\r\n',0),(20,'geography',1,'How many time zones are there in the world?','24\r\n',0),(21,'geography',2,'Which is the largest desert on earth?','Sahara\r\n',0),(22,'geography',3,'Which river is flowing through Rome?','Tiber\r\n',0),(23,'geography',3,'Which country did once have the name Rhodesia?','Zimbabwe\r\n',0),(24,'geography',2,'What island, which belonged to Denmark, was independent in 1944?','Iceland\r\n',0),(25,'geography',2,'What is the largest state of the United States?','Alaska\r\n',0),(26,'geography',3,'On which continent can you visit Sierra Leone?','Africa\r\n',0),(27,'geography',3,'What is the name of the European river which flows through six different countries?','Donau\r\n',0),(28,'geography',3,'What is the name of the longest river in Europe?','Wolga\r\n',0),(29,'geography',3,'Through which capital does the Liffey river flow?','Dublin\r\n',0),(30,'geography',3,'What is the second largest country in Europe after Russia?','France\r\n',0),(31,'geography',2,'What is the capital of the American state Hawaii?','Honolulu\r\n',0),(32,'geography',1,'What do the Japanese people call their own country?','Nippon\r\n',0),(33,'geography',3,'In which country is Krakow located?','Poland\r\n',0),(34,'geography',2,'What is the largest city in Canada?','Toronto\r\n',0),(35,'geography',2,'What is the capital city of Australia ?','Canberra\r\n',0),(36,'geography',2,'As of 2017, which has the highest population:<ul><li>a) London</li><li>b) Hong Kong</li></ul>(enter \'a\' or \'b\')','a\r\n',0),(37,'science',2,'What in computer language do the initials ISDN stand for?','Integrated Services Digital Network\r\n',0),(38,'science',3,'What is the name of the medical apparatus was invented by a French doctor Rene Theophile Hyacinthe Leanne, in 1816?','stethoscope\r\n',0),(39,'science',2,'In what type of engine is fuel ignited by compression?','diesel\r\n',0),(40,'science',3,'What word means the bending of light when passing through a lens?','refraction\r\n',0),(41,'science',1,'In which layer of the atmosphere does the ozone layer occur?','Stratosphere\r\n',0),(42,'science',3,'Which of the following did Benjamin Hall invent in 1900:<ul><li>a) the tractor</li><li>b) the safety pin</li><li>c) the zipper</li></ul>(enter \'a\', \'b\' or \'c\')','a\r\n',0),(43,'science',1,'Which element has the symbol Au?','Gold\r\n',0),(44,'science',1,'What is measured in Hertz?','Frequency\r\n',0),(45,'science',3,'Which French educationalist perfected a system of reading for the blind?','Louis Braille\r\n',0),(46,'science',1,'Which among these colours is not a color of the rainbow?<ul><li>a) red</li><li>b) orange</li><li>c) yellow</li><li>d) magenta</li><li>e) green</li></ul>(enter \'a\', \'b\', \'c\', \'d\' or \'e\')','d\r\n',0),(47,'science',1,'What is the chemical symbol for lead?','Pb\r\n',0),(48,'science',3,'What is the name of the science that deals with drugs and their effects?','Pharmacology\r\n',0),(49,'science',2,'What name is given to an instrument used to measure the pressure of fluids?','Manometer\r\n',0),(50,'science',1,'Which metallic element has the chemical symbol W?','Tungsten\r\n',0),(51,'science',2,'What name is given to a substance which accelerates a reaction without taking part in it?','Catalyst\r\n',0),(52,'science',2,'What is the scientific name for the white of an egg?','Albumen\r\n',0),(53,'sport',3,'Which was the first British football club to win the European Cup?','Celtic\r\n',0),(54,'sport',2,'Which country won the 6th European Football Championship for Women?','Norway\r\n',0),(55,'sport',3,'Name the German soccer star who led West Germany to victory over Holland in the World Cup, then managed the team that defeated Argentina in 1990','Beckenbauer\r\n',0),(56,'general',1,'Which religious leader is head of state of the Vatican?','Pope\r\n',0),(57,'geography',2,'Which from Bombay or Tokyo do have the higher population?<ul><li>a) Bombay</li><li>b) Tokyo</li></ul>(enter \'a\' or \'b\')','a\r\n',0),(58,'geography',2,'What is the name of the Egyptian canal linking the Red Sea and the Mediterranean?','Suez\r\n',0),(59,'geography',2,'Which ocean is the world\'s deepest?','Pacific\r\n',0),(60,'geography',1,'Mount Kilimanjaro is the highest point of which continent?','Africa\r\n',0),(61,'geography',1,'Eurostar trains run from London to which Belgian city?','Brussels\r\n',0),(62,'geography',2,'In which country is Cologne?','Germany\r\n',0),(63,'geography',3,'Which one of those two cities have the higher population?<ul><li>a) London</li><li>b) Rome</li></ul>(enter \'a\' or \'b\')','a\r\n',0),(64,'geography',3,'In which city would you find the Parthenon?','Athens\r\n',0),(65,'geography',3,'Sweden is a:<ul><li>a) kingdom</li><li>b) republic</li></ul>(enter \'a\' or \'b\')','a\r\n',0),(66,'geography',2,'In which country is Calgary?','Canada\r\n',0),(67,'general',1,'Which fictional city is the home of Batman?','Gotham\r\n',0),(68,'science',1,'Spinach is high in which mineral?','Iron\r\n',0),(69,'science',1,'What is a Geiger Counter used to detect?','Radiation\r\n',0),(70,'general',1,'In the film Babe, what type of animal was Babe?','pig\r\n',0),(71,'sport',2,'What was Mohammed Ali\'s birth name?','Cassius Clay\r\n',0),(72,'science',3,'Which planet is the closest to Earth?','Venus\r\n',0),(73,'science',1,'What is the name of the tallest mammal?','girafe\r\n',0),(74,'geography',2,'Mount Everest is found in which mountain range?','Himalayas\r\n',0),(75,'general',3,'How many strings does a violin have?','4\r\n',0),(76,'general',1,'What was the Hunchback of Notre Dame\'s name?','Quasimodo\r\n',0),(77,'general',1,'What color is the circle on the Japanese national flag?','red\r\n',0),(78,'general',2,'What is the family name of the author of the \"Harry Potter\" books?','Rowling\r\n',0),(79,'science',1,'How many sides does an octagon have?','8\r\n',0),(80,'general',1,'What is the name of the city where the cartoon family The Simpsons live?','Springfield\r\n',0),(82,'science',1,'How many degrees are found in a circle?','360\r\n',0),(83,'general',1,'How many squares are there on a chess board?','64\r\n',0),(84,'general',3,'Name the historical prince whose name was used by Bram Stoker in his famous novel','Dracula\r\n',0),(85,'general',1,'What is the family name of the author who wrote a series of novels about orcs, hobbits, goblins and elves?','Tolkien\r\n',0),(86,'science',2,'Which hormone controls the supply of sugar between muscles and blood?','Insulin\r\n',0),(87,'general',1,'In Japanese, what is the word for goodbye?','Sayonara\r\n',0),(88,'general',1,'Which fictional character was also known as Lord Greystoke?','Tarzan\r\n',0),(89,'general',1,'What is the Chinese system of medicine called, which uses slender needles inserted into the body at specific points?','Acupuncture\r\n',0),(90,'science',1,'Which branch of mathematics deals with the sides and angles of triangles, and their relationship to each other?','Trigonometry\r\n',0),(91,'science',1,'A cube has how many edges?','12\r\n',0),(92,'general',2,'How many times has Donald Trump been married?','3\r\n',0),(93,'sport',2,'What is the family name of the top goalscorer at the Euros to date (data valid as of 2012)?','Platini\r\n',0),(94,'sport',3,'How many goals has Alan Shearer scored in European Championship tournaments in total?','11\r\n',0),(95,'sport',2,'What nationality was the coach of Greece when they won Euro 2004?','German\r\n',0),(96,'sport',3,'Which company supplied the Euro 2012 matchball?','Adidas\r\n',0),(97,'sport',2,'Which team knocked England out of Euro 2004 at the quarter-final stages?','Portugal\r\n',0),(98,'sport',1,'Which sports playing area is 2.7 metres by 1.5 metres?','Table Tennis\r\n',0),(99,'sport',1,'Which sport do the Oklahoma City Thunder play?','Basketball\r\n',0),(100,'sport',2,'Which racket sport made its Olympic debut in 1992?','Badminton\r\n',0),(101,'sport',1,'How many colours make up the Olympic rings?','5\r\n',0),(102,'sport',2,'Which team are known as the Gunners?','Arsenal\r\n',0),(103,'sport',3,'Which team first won an FA Cup semifinal on a penalty shoot-out?','Liverpool\r\n',0),(104,'sport',1,'Michael Schumacher drove for eleven years with which constructor?','Ferrari\r\n',0);
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
  `date` varchar(20) DEFAULT NULL,
  `category` varchar(50) NOT NULL,
  `level` int(11) NOT NULL,
  `size` int(11) NOT NULL,
  `limited_time` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`item_id`)
) ENGINE=InnoDB AUTO_INCREMENT=102 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `record`
--

LOCK TABLES `record` WRITE;
/*!40000 ALTER TABLE `record` DISABLE KEYS */;
INSERT INTO `record` VALUES (1,'Roway','19','2021-07-14','',0,0,0),(2,'Roway','13','2021-07-14','',0,0,0),(3,'user','0','2021-07-15','',0,0,0),(4,'Roway','8','2021-07-15','',0,0,0),(5,'Roway','7','2021-07-15','',0,0,0),(6,'Roway','0','2021-07-15','',0,0,0),(7,'user','6','2021-07-15','',0,0,0),(8,'user','1','2021-07-15','',0,0,0),(9,'Roway','4','2021-07-15','',0,0,0),(10,'user','0','2021-07-16','',0,0,0),(11,'user','2','2021-07-16','',0,0,0),(12,'user','2','2021-07-16','',0,0,0),(13,'user','7','2021-07-16','',0,0,0),(57,'Roway','4','2021-07-16','',0,0,0),(58,'user','3','2021-07-16','',0,0,0),(59,'Roway','2','2021-07-16','',0,0,0),(60,'user','0','2021-07-16','',0,0,0),(61,'Roway','4','2021-07-16','',0,0,0),(62,'Roway','5','2021-07-16','',0,0,0),(63,'kumiko','4','2022-07-22','',0,0,0),(64,'kumiko','0','2022-07-22','',0,0,0),(65,'kumiko','0','2022-07-22','',0,0,0),(66,'kumiko','0','2022-07-22','',0,0,0),(67,'kumiko','0','2022-07-22','',0,0,0),(68,'kumiko','0','2022-07-22','',0,0,0),(69,'kumiko','0','2022-07-22','',0,0,0),(71,'kumiko','1','2022-07-24','random',0,5,0),(72,'kumiko','1','2022-07-24','random',0,5,0),(73,'kumiko','2','2022-07-24','random',0,5,0),(74,'kumiko','1','2022-07-24','science',1,1,0),(75,'kumiko','1','2022-07-24','science',1,1,0),(76,'kumiko','2','2022-07-24','random',0,5,0),(77,'kumiko','1','2022-07-24','science',1,1,0),(78,'kumiko','2','2022-07-24','random',2,2,0),(79,'kumiko','4','2022-07-24','random',0,5,0),(80,'user','1','2022-07-25','science',1,1,0),(81,'user','1','2022-07-25','geography',2,2,0),(82,'user','0','2022-07-25','random',0,5,0),(83,'user','1','2022-07-25','geography',2,2,0),(84,'user','0','2022-07-25','geography',2,2,0),(85,'user','2','2022-07-25','geography',2,2,0),(86,'kumiko','4','2022-07-25','random',0,5,0),(87,'kumiko','2','2022-07-25','geography',2,2,0),(88,'user','1','2022-07-25','geography',2,2,0),(89,'user','1','2022-07-25','geography',2,2,0),(90,'user','1','2022-07-25','geography',2,2,0),(91,'user','1','2022-07-25','geography',2,2,0),(92,'user','2','2022-07-25','geography',2,2,0),(93,'user','1','2022-07-25','geography',2,2,0),(94,'user','1','2022-07-25','geography',2,2,0),(95,'user','1','2022-07-25','geography',2,2,0),(96,'user','1','2022-07-25','geography',2,2,5),(97,'kumiko','0','2022-07-25','geography',2,5,5),(98,'kumiko','0','2022-07-25','geography',2,5,0),(99,'kumiko','0','2022-07-26','science',1,5,0),(100,'kumiko','1','2022-07-27','random',0,1,0),(101,'user','0','2022-07-27','random',0,5,0);
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
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'Roway','$2y$10$C.ogj0Gat9jqNMsTRL..XOiKy3i9xnOwiChCyMpExKqu/cMpog0yi'),(2,'Marc','$2y$10$frk6nOA2ExVjiAoD3GMubOyL/OuJ3WDbpXoais34XVpis9OzXCQy.'),(3,'jack','$2y$10$y51eA3Ro.DppQ1ybE0dH6ure.05AtyvjW.F3G26lBI9KihfNL1Dxu'),(4,'Tony','$2y$10$phnlizfUxHOh3s65YoGdI.xje.Q66v2Zn3H0Kt9QZyYt7ssSvg7XS'),(5,'kumiko','$2y$10$k3WSu1o/uv5j6IcT7Uyi3elV0YBuWdH//chkYadVTN4zDxrMiTg4m');
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
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wrong_questions`
--

LOCK TABLES `wrong_questions` WRITE;
/*!40000 ALTER TABLE `wrong_questions` DISABLE KEYS */;
INSERT INTO `wrong_questions` VALUES (1,79,5,4,'gold'),(2,86,5,4,''),(3,97,5,57,''),(4,97,5,21,'middle of china'),(5,97,5,31,''),(6,97,5,62,''),(7,97,5,24,''),(8,98,5,66,'middle of china'),(9,98,5,59,'1'),(10,98,5,5,'1'),(11,98,5,35,'middle of china'),(12,98,5,34,'1'),(13,99,5,90,'1'),(14,99,5,91,'1'),(15,99,5,79,'1'),(16,99,5,43,'1'),(17,99,5,81,'2');
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

-- Dump completed on 2022-07-27 14:02:35
