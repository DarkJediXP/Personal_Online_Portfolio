-- MySQL dump 10.13  Distrib 5.5.35, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: portfolio
-- ------------------------------------------------------
-- Server version	5.5.35-0ubuntu0.12.04.2

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
-- Table structure for table `projects`
--

DROP TABLE IF EXISTS `projects`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `projects` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `description` text,
  `status` int(1) NOT NULL DEFAULT '0',
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `projects`
--

LOCK TABLES `projects` WRITE;
/*!40000 ALTER TABLE `projects` DISABLE KEYS */;
INSERT INTO `projects` VALUES (1,'python game\n','python game',1,'2014-03-10 23:14:38'),(2,'android game\n','android game',1,'2014-03-10 23:15:20'),(3,'csharp game\n\n','csharp game\n',1,'2014-03-10 23:15:38');
/*!40000 ALTER TABLE `projects` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_project_reviews`
--

DROP TABLE IF EXISTS `user_project_reviews`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_project_reviews` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `rating` int(11) NOT NULL,
  `review_text` text,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `project_id` (`project_id`),
  CONSTRAINT `user_project_reviews_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `user_project_reviews_ibfk_2` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_project_reviews`
--

LOCK TABLES `user_project_reviews` WRITE;
/*!40000 ALTER TABLE `user_project_reviews` DISABLE KEYS */;
INSERT INTO `user_project_reviews` VALUES (4,0,1,2,'Needs work son!'),(5,0,2,2,'trash'),(6,0,2,2,'needs work!'),(7,0,1,2,'hey'),(8,0,1,5,'This is wack man I dont want this shit!'),(9,0,1,5,'hahahahahha'),(10,0,1,5,'I dont play csharp games!'),(11,0,3,5,'leave'),(12,0,3,5,'hey'),(13,0,1,5,'hey'),(14,0,1,5,'hey you go man'),(15,0,1,5,'heuy nvkdfkahfadjfka'),(16,0,1,5,'fsdjfklajcjvhkdjhfas'),(17,0,2,5,'Im tired of flappy bird\r\n'),(18,1,1,5,'What yall talking about this is great!'),(19,0,1,5,'474'),(20,0,2,5,'wilson'),(21,0,3,1,'ok :/'),(22,0,2,1,'Still trash dude!!'),(23,0,3,1,'Whats up with the graphics'),(24,0,1,5,'I need this nowwwwww'),(25,0,3,3,'testing'),(26,0,3,3,'testing'),(27,0,3,5,'test'),(28,0,3,5,'test2'),(29,0,3,1,'trash  you cant make games'),(30,0,1,1,'looks boring '),(31,0,2,2,'Android phones have the crappiest app im switching to iphone!'),(32,0,3,5,'What is this @#%$'),(33,0,1,1,'traassssssssshhhhhh!!!!'),(34,0,2,1,'Go home your drunk if you think this is a good game!');
/*!40000 ALTER TABLE `user_project_reviews` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `password_hash` text NOT NULL,
  `api_key` varchar(32) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1',
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (0,'test','test@test.com','password','',1,'2014-03-06 23:02:47'),(1,'Sean','seanmcd@test.com','00000','',1,'2014-03-09 04:26:24');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-03-16 16:28:10
