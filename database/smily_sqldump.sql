-- MariaDB dump 10.17  Distrib 10.4.11-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: smily_portfolio
-- ------------------------------------------------------
-- Server version	10.4.11-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` longtext DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `project_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `project_id` (`project_id`),
  CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`),
  CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`project_id`) REFERENCES `project` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comments`
--

LOCK TABLES `comments` WRITE;
/*!40000 ALTER TABLE `comments` DISABLE KEYS */;
INSERT INTO `comments` VALUES (1,'Lorem Ipsum is simply dummy text of the printing and typesetting industry.','0000-00-00 00:00:00','0000-00-00 00:00:00',2,2),(2,'when an unknown printer took a galley of type and scrambled it to make.','0000-00-00 00:00:00','0000-00-00 00:00:00',3,3),(3,'It was popularised in the 1960s with the release of Letraset','0000-00-00 00:00:00','0000-00-00 00:00:00',4,1),(4,'more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum','0000-00-00 00:00:00','0000-00-00 00:00:00',1,4),(5,'Lorem Ipsum is that it has a more-or-less normal distribution of letters','0000-00-00 00:00:00','0000-00-00 00:00:00',5,5);
/*!40000 ALTER TABLE `comments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `course`
--

DROP TABLE IF EXISTS `course`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `course` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `total_hours` varchar(255) DEFAULT NULL,
  `teacher_name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `course`
--

LOCK TABLES `course` WRITE;
/*!40000 ALTER TABLE `course` DISABLE KEYS */;
INSERT INTO `course` VALUES (1,'Intro to HTML/CSS','36 hours','Brent Scott'),(2,'Advanced HTML/CSS','36 hours','Brent Scott'),(3,'Capstone - HTML5/CSS3','36 hours','Brent Scott'),(4,'JavaScript','36 hours','Steve George'),(5,'Web Animation','36 hours','Brent Scott'),(6,'Web Design Principles','36 Hours','Brent Scott'),(7,'Photoshop','36 hours','Brent Scott'),(8,'HTML Production Tool','18 hours','Brent Scott'),(9,'SQL','36 hours','Steve George'),(10,'Unix','36 hours','Bill');
/*!40000 ALTER TABLE `course` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `project`
--

DROP TABLE IF EXISTS `project`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `project` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `project_number` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `summary` text DEFAULT NULL,
  `details` longtext DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `image_desc` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `is_commented` tinyint(1) DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `course_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `course_id` (`course_id`),
  CONSTRAINT `project_ibfk_1` FOREIGN KEY (`course_id`) REFERENCES `course` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `project`
--

LOCK TABLES `project` WRITE;
/*!40000 ALTER TABLE `project` DISABLE KEYS */;
INSERT INTO `project` VALUES (1,1,'A Web Form using HTML/CSS','This is the project-01 summary.','The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.','project_01_image.jpeg','An HTML form page image','HTML5/CSS3','https://github.com/smilydawra/intermediate-HTML5-CSS3-Project.git',1,'0000-00-00 00:00:00','0000-00-00 00:00:00',1),(2,2,'A Web page using Transforms','This is the project-02 summary.','The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.','project_02_image.jpeg','project_02_image_description','HTML5/CSS3','https://github.com/smilydawra/transform-HTML5-CSS3-Project.git',1,'0000-00-00 00:00:00','0000-00-00 00:00:00',1),(3,3,'A Web page using animations','This is the project-03 summary.','The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.','project_03_image.jpeg','project_03_image_description','HTML5/CSS3','https://github.com/smilydawra/animations-HTML5-CSS3-Project.git',1,'0000-00-00 00:00:00','0000-00-00 00:00:00',1),(4,4,'A Photoshop Design Template','This is the project-04 summary.','The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.','project_04_image.jpeg','project_04_image_description','Adobe Photoshop','https://github.com/smilydawra/photoshopTemplate-Photoshop-Project.git',0,'0000-00-00 00:00:00','0000-00-00 00:00:00',7),(5,5,'A Photoshop Triangle','This is the project-05 summary.','The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.','project_05_image.jpeg','project_05_image_description','Adobe Photoshop','https://github.com/smilydawra/psdTriangle-Photoshop-Project.git',1,'0000-00-00 00:00:00','0000-00-00 00:00:00',7),(6,6,'A Cat with Feathers - PSD','This is the project-06 summary.','The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.','project_06_image.jpeg','project_06_image_description','Adobe Photoshop','https://github.com/smilydawra/psdCat-Photoshop-Project.git',0,'0000-00-00 00:00:00','0000-00-00 00:00:00',7),(7,7,'Pictures Animated in Photoshops','This is the project-07 summary.','The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.','project_07_image.jpeg','project_07_image_description','Adobe Photoshop','https://github.com/smilydawra/psdPictures-Photoshop-Project.git',1,'0000-00-00 00:00:00','0000-00-00 00:00:00',7),(8,8,'Animations - Motion Tween','This is the project-08 summary.','The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.','project_08_image.jpeg','project_08_image_description','Adobe Animate','https://github.com/smilydawra/motionTween-Animate-Project.git',0,'0000-00-00 00:00:00','0000-00-00 00:00:00',5),(9,9,'A Moving Car','This is the project-09 summary.','The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.','project_09_image.jpeg','project_09_image_description','Adobe Animate','https://github.com/smilydawra/movingCar-Animate-Project.git',1,'0000-00-00 00:00:00','0000-00-00 00:00:00',5),(10,10,'Know about Birds with sound','This is the project-10 summary.','The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.','project_10_image.jpeg','project_10_image_description','Adobe Animate','https://github.com/smilydawra/birds-Animate-Project.git',1,'0000-00-00 00:00:00','0000-00-00 00:00:00',5),(11,11,'A shape tween project','This is the project-11 summary.','The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.','project_11_image.jpeg','project_11_image_description','Adobe Animate','https://github.com/smilydawra/shapetween-Animate-Project.git',0,'0000-00-00 00:00:00','0000-00-00 00:00:00',5),(12,12,'A Slider Gallery','This is the project-12 summary.','The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.','project_12_image.jpeg','project_12_image_description','Advanced HTML5/CSS3','https://github.com/smilydawra/slider-HTML5-CSS3-Project.git',1,'0000-00-00 00:00:00','0000-00-00 00:00:00',2),(13,13,'CSS Media Queries','This is the project-13 summary.','The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.','project_13_image.jpeg','project_13_image_description','Advanced HTML5/CSS3','https://github.com/smilydawra/mediaQueries-HTML5-CSS3-Project.git',0,'0000-00-00 00:00:00','0000-00-00 00:00:00',2),(14,14,'Play with Browser Cookies','This is the project-14 summary.','The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.','project_14_image.jpeg','project_14_image_description','JavaScript','https://github.com/smilydawra/intermediate-JavaScript-Project.git',1,'0000-00-00 00:00:00','0000-00-00 00:00:00',4),(15,15,'HTML Page - Create a To-do List','This is the project-15 summary.','The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.','project_15_image.jpeg','project_15_image_description','JavaScript','https://github.com/smilydawra/todoList-JavaScript-Project.git',0,'0000-00-00 00:00:00','0000-00-00 00:00:00',4),(16,16,'A form validation using regx','This is the project-16 summary.','The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.','project_16_image.jpeg','project_16_image_description','JavaScript','https://github.com/smilydawra/regx-JavaScript-Project.git',1,'0000-00-00 00:00:00','0000-00-00 00:00:00',4),(17,17,'Normalised DB - Complex Database Example','This is the project-17 summary.','The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.','project_17_image.jpeg','project_17_image_description','SQL','https://github.com/smilydawra/sql-normalisedDB-Project.git',1,'0000-00-00 00:00:00','0000-00-00 00:00:00',9),(18,18,'Relational Data Models using Open Office','This is the project-18 summary.','The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.','project_18_image.jpeg','project_18_image_description','SQL','https://github.com/smilydawra/sql-dataModels-Project.git',1,'0000-00-00 00:00:00','0000-00-00 00:00:00',9),(19,19,'A sample book database using MYSQL Workbench','This is the project-19 summary.','The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.','project_19_image.jpeg','project_19_image_description','SQL','https://github.com/smilydawra/sql-bookDB-Project.git',0,'0000-00-00 00:00:00','0000-00-00 00:00:00',9),(20,20,'5 Page website using HTML5/CSS3','This is the project-20 summary.','The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.','project_20_image.jpeg','project_20_image_description','HTML5/CSS3','https://github.com/smilydawra/capstone-HTML5-CSS3-Project.git',1,'0000-00-00 00:00:00','0000-00-00 00:00:00',3);
/*!40000 ALTER TABLE `project` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `street_address` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `postal` varchar(255) DEFAULT NULL,
  `province` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `gender` enum('male','female','other') DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'Tom','Jones','320 Colony street','winnipeg','R3C0S6','MB','Canada','204-123-4567','tom@example.com','male',NULL,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(2,'Jill','Miller','480 deacon avenue','winnipeg','R3D0F8','MB','Canada','203-456-8794','jill@hotmail.com','male',NULL,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(3,'Miranda','Welling','32 portage avenue','winnipeg','R4T0I9','MB','Canada','204-333-4567','miranda@aol.com','female',NULL,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(4,'Peter','Piper','90 one street','winnipeg','CE90G5','MB','Canada','204-165-3212','peter@example.com','male',NULL,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(5,'Ralph','Miller','380 london street','winnipeg','R3C0E8','MB','Canada','204-267-0987','ralph@uwinnipeg.ca','male',NULL,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(6,'Yanwei','Liu','45 maple street','winnipeg','R6V5D7','Manitoba','Canada','7776665554','yanwei.liu@abc.com','female','yanwei@123','2020-04-25 19:33:51','0000-00-00 00:00:00'),(7,'Arshdeep','Kalsi','#1123 Sector 11','Chandigarh','123456','Chandigarh','India','8878876654','arsh.kalsi@abc.com','female','arsh@123','2020-04-25 19:47:19','0000-00-00 00:00:00'),(9,'Arshdeep','Kalsi','#1123 Sector 11','Chandigarh','123456','Chandigarh','India','8878876654','arsh.kalsi@abc.com','female','arsh@123','2020-04-25 19:51:23','0000-00-00 00:00:00'),(10,'Karan','Kapoor','23 aroma avenue','Edmonton','T5A 0A4','Alberta','Canada','5560092219','karan.kapoor@abc.com','male','karan@123','2020-04-25 19:56:42','0000-00-00 00:00:00'),(11,'Neha','Sharma','21 sharma street','Winnipeg','T6C7H2','Manitoba','Canada','6673391098','neha.sharma@abc.com','female','neha@123','2020-04-26 13:43:47','0000-00-00 00:00:00'),(12,'Sarthak','Dhamija','230 oak street','dallas','120092','texas','united states','3334441234','sarthak.dhamija@abc.com','male','2222','2020-04-28 21:27:24','0000-00-00 00:00:00'),(13,'Brent','Scott','555 staples street','winnipeg','R7t6T8','manitoba','canada','7770002211','brent.scott@abc.com','male','brent@123','2020-04-28 21:33:48','2020-04-28 21:33:48');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-04-28 21:35:33
