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
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES (1,28);
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

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
INSERT INTO `project` VALUES (1,1,'A Web Form using HTML/CSS','This HTML5/CSS project is to create a Web form with the criteria based on images \nand navigation, as well as create a layout included variety of fields that contains in a\nform.','The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.','project_01_image.jpeg','An HTML form page image','HTML5/CSS3','https://github.com/smilydawra/intermediate-HTML5-CSS3-Project.git',1,'0000-00-00 00:00:00','0000-00-00 00:00:00',1),(2,2,'A Web page using Transforms','This assignment will present you to make a simple Web page. This page will make use\nof CSS3 features including Web fonts, shadows, gradients, animation, and transforms such as box-shadow,\n text-shadow, CSS3 Gradient, CSS3 Transform, CSS border-radius.','The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.','project_02_image.jpeg','project_02_image_description','HTML5/CSS3','https://github.com/smilydawra/transform-HTML5-CSS3-Project.git',1,'0000-00-00 00:00:00','0000-00-00 00:00:00',1),(3,3,'A Web page using animations','This is Blog page on my website. I have used css animation for this page. \nPlaying with opacity and transform property, also used float to the image.','The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.','project_03_image.jpeg','project_03_image_description','HTML5/CSS3','https://github.com/smilydawra/animations-HTML5-CSS3-Project.git',1,'0000-00-00 00:00:00','0000-00-00 00:00:00',1),(4,4,'A Photoshop Design Template','This is a mockup of a complete web \npage interface made in photoshop. This includes various buttons, headings, navigation bars, \nlogos, titles, etc.','The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.','project_04_image.jpeg','project_04_image_description','Adobe Photoshop','https://github.com/smilydawra/photoshopTemplate-Photoshop-Project.git',0,'0000-00-00 00:00:00','0000-00-00 00:00:00',7),(5,5,'A Photoshop Triangle','This assignment will present you to make a simple Web page. \nThis page will make use of CSS3 features including Web fonts, shadows, gradients, animation,\n and transforms such as box-shadow, text-shadow, CSS3 Gradient, CSS3 Transform, CSS border-radius.','The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.','project_05_image.jpeg','project_05_image_description','Adobe Photoshop','https://github.com/smilydawra/psdTriangle-Photoshop-Project.git',1,'0000-00-00 00:00:00','0000-00-00 00:00:00',7),(6,6,'A Cat with Feathers - PSD','This assignment will present you to make a simple Web page. \nThis page will make use of CSS3 features including Web fonts, shadows, gradients, animation,\n and transforms such as box-shadow, text-shadow, CSS3 Gradient, CSS3 Transform, CSS border-radius.','The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.','project_03_image.jpeg','project_06_image_description','Adobe Photoshop','https://github.com/smilydawra/psdCat-Photoshop-Project.git',0,'0000-00-00 00:00:00','0000-00-00 00:00:00',7),(7,7,'Pictures Animated in Photoshops','This assignment will present you to make a simple Web page. \nThis page will make use of CSS3 features including Web fonts, shadows, gradients, animation,\n and transforms such as box-shadow, text-shadow, CSS3 Gradient, CSS3 Transform, CSS border-radius.','The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.','project_03_image.jpeg','project_07_image_description','Adobe Photoshop','https://github.com/smilydawra/psdPictures-Photoshop-Project.git',1,'0000-00-00 00:00:00','0000-00-00 00:00:00',7),(8,8,'Animations - Motion Tween','This assignment will present you to make a simple Web page. \nThis page will make use of CSS3 features including Web fonts, shadows, gradients, animation,\n and transforms such as box-shadow, text-shadow, CSS3 Gradient, CSS3 Transform, CSS border-radius.','The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.','project_03_image.jpeg','project_08_image_description','Adobe Animate','https://github.com/smilydawra/motionTween-Animate-Project.git',0,'0000-00-00 00:00:00','0000-00-00 00:00:00',5),(9,9,'A Moving Car','This assignment will present you to make a simple Web page. \nThis page will make use of CSS3 features including Web fonts, shadows, gradients, animation,\n and transforms such as box-shadow, text-shadow, CSS3 Gradient, CSS3 Transform, CSS border-radius.','The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.','project_03_image.jpeg','project_09_image_description','Adobe Animate','https://github.com/smilydawra/movingCar-Animate-Project.git',1,'0000-00-00 00:00:00','0000-00-00 00:00:00',5),(10,10,'Know about Birds with sound','This assignment will present you to make a simple Web page. \nThis page will make use of CSS3 features including Web fonts, shadows, gradients, animation,\n and transforms such as box-shadow, text-shadow, CSS3 Gradient, CSS3 Transform, CSS border-radius.','The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.','project_03_image.jpeg','project_10_image_description','Adobe Animate','https://github.com/smilydawra/birds-Animate-Project.git',1,'0000-00-00 00:00:00','0000-00-00 00:00:00',5),(11,11,'A shape tween project','This assignment will present you to make a simple Web page. \nThis page will make use of CSS3 features including Web fonts, shadows, gradients, animation,\n and transforms such as box-shadow, text-shadow, CSS3 Gradient, CSS3 Transform, CSS border-radius.','The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.','project_03_image.jpeg','project_11_image_description','Adobe Animate','https://github.com/smilydawra/shapetween-Animate-Project.git',0,'0000-00-00 00:00:00','0000-00-00 00:00:00',5),(12,12,'A Slider Gallery','This assignment will present you to make a simple Web page. \nThis page will make use of CSS3 features including Web fonts, shadows, gradients, animation,\n and transforms such as box-shadow, text-shadow, CSS3 Gradient, CSS3 Transform, CSS border-radius.','The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.','project_03_image.jpeg','project_12_image_description','Advanced HTML5/CSS3','https://github.com/smilydawra/slider-HTML5-CSS3-Project.git',1,'0000-00-00 00:00:00','0000-00-00 00:00:00',2),(13,13,'CSS Media Queries','This assignment will present you to make a simple Web page. \nThis page will make use of CSS3 features including Web fonts, shadows, gradients, animation,\n and transforms such as box-shadow, text-shadow, CSS3 Gradient, CSS3 Transform, CSS border-radius.','The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.','project_03_image.jpeg','project_13_image_description','Advanced HTML5/CSS3','https://github.com/smilydawra/mediaQueries-HTML5-CSS3-Project.git',0,'0000-00-00 00:00:00','0000-00-00 00:00:00',2),(14,14,'Play with Browser Cookies','This assignment will present you to make a simple Web page. \nThis page will make use of CSS3 features including Web fonts, shadows, gradients, animation,\n and transforms such as box-shadow, text-shadow, CSS3 Gradient, CSS3 Transform, CSS border-radius.','The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.','project_03_image.jpeg','project_14_image_description','JavaScript','https://github.com/smilydawra/intermediate-JavaScript-Project.git',1,'0000-00-00 00:00:00','0000-00-00 00:00:00',4),(15,15,'HTML Page - Create a To-do List','This assignment will present you to make a simple Web page. \nThis page will make use of CSS3 features including Web fonts, shadows, gradients, animation,\n and transforms such as box-shadow, text-shadow, CSS3 Gradient, CSS3 Transform, CSS border-radius.','The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.','project_03_image.jpeg','project_15_image_description','JavaScript','https://github.com/smilydawra/todoList-JavaScript-Project.git',0,'0000-00-00 00:00:00','0000-00-00 00:00:00',4),(16,16,'A form validation using regx','This assignment will present you to make a simple Web page. \nThis page will make use of CSS3 features including Web fonts, shadows, gradients, animation,\n and transforms such as box-shadow, text-shadow, CSS3 Gradient, CSS3 Transform, CSS border-radius.','The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.','project_03_image.jpeg','project_16_image_description','JavaScript','https://github.com/smilydawra/regx-JavaScript-Project.git',1,'0000-00-00 00:00:00','0000-00-00 00:00:00',4),(17,17,'Normalised DB - Complex Database Example','This assignment will present you to make a simple Web page. \nThis page will make use of CSS3 features including Web fonts, shadows, gradients, animation,\n and transforms such as box-shadow, text-shadow, CSS3 Gradient, CSS3 Transform, CSS border-radius.','The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.','project_03_image.jpeg','project_17_image_description','SQL','https://github.com/smilydawra/sql-normalisedDB-Project.git',1,'0000-00-00 00:00:00','0000-00-00 00:00:00',9),(18,18,'Relational Data Models using Open Office','This assignment will present you to make a simple Web page. \nThis page will make use of CSS3 features including Web fonts, shadows, gradients, animation,\n and transforms such as box-shadow, text-shadow, CSS3 Gradient, CSS3 Transform, CSS border-radius.','The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.','project_03_image.jpeg','project_18_image_description','SQL','https://github.com/smilydawra/sql-dataModels-Project.git',1,'0000-00-00 00:00:00','0000-00-00 00:00:00',9),(19,19,'A sample book database using MYSQL Workbench','This assignment will present you to make a simple Web page. \nThis page will make use of CSS3 features including Web fonts, shadows, gradients, animation,\n and transforms such as box-shadow, text-shadow, CSS3 Gradient, CSS3 Transform, CSS border-radius.','The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.','project_03_image.jpeg','project_19_image_description','SQL','https://github.com/smilydawra/sql-bookDB-Project.git',0,'0000-00-00 00:00:00','0000-00-00 00:00:00',9),(20,20,'5 Page website using HTML5/CSS3','This assignment will present you to make a simple Web page. \nThis page will make use of CSS3 features including Web fonts, shadows, gradients, animation,\n and transforms such as box-shadow, text-shadow, CSS3 Gradient, CSS3 Transform, CSS border-radius.','The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.','project_03_image.jpeg','project_20_image_description','HTML5/CSS3','https://github.com/smilydawra/capstone-HTML5-CSS3-Project.git',1,'0000-00-00 00:00:00','0000-00-00 00:00:00',3);
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
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (25,'Dawn','baker','subway','winnipeg','t5d8h4','manitoba','Canada','8767655433','dawn.baker@abc.com','female','Dawn@123','2020-05-08 21:22:48','2020-05-08 21:22:48'),(26,'Yanwei','Liu','45 maple street','winnipeg','R6V5D7','Manitoba','Canada','7776665554','yanwei.liu@abc.com','female','$2y$10$QZIE5D8lpUia2vO4yP1ceOFrFQ1cXoOlRGPHbSEczPbNRU8wW4FnC','2020-05-08 23:59:03','2020-05-08 23:59:03'),(27,'Pooja','Bharti','778 Farmer street','winnipeg','u7f9j8','manitoba','Canada','6534572874','pooja.bharti@abc.com','female','$2y$10$MVRlZjdTATom7oYbILPJCezjq.qBgvyeKb46h3Wi3uU5bhEkaUsIS','2020-05-10 03:45:10','2020-05-10 03:45:10'),(28,'Smily','Dawra','320 Colony Street','Winnipeg','R3C0E8','Manitoba','Canada','4313389996','smilydawra92@gmail.com','female','$2y$10$bBMs8GnuT77duoo1lk3fMug2UHWEMiQ8fdPx98dXucfoA6lH7eqm2','2020-05-10 03:46:59','2020-05-10 03:46:59'),(29,'Riya','sharma','5699 parmer street','winnipeg','s8d 2x3','manitoba','Canada','5674443332','riya.sharma@abc.com','female','$2y$10$R64rRUjyyYcaJ49YstRxbOVwyy/h4Bg2fKYPUeap7FrEhA9pHO7Hy','2020-05-10 17:47:42','2020-05-10 17:47:42'),(30,'Brent','Scott','555 staples street','winnipeg','R7t6T8','manitoba','Canada','7770002211','brent.scott@abc.com','male','$2y$10$1iygqMYGuu1.6Dr6OzOSZ.uhELwpjcV44serCzZqJZ5WOduR72Bu2','2020-05-10 18:20:20','2020-05-10 18:20:20'),(32,'Jasreen','Kaur','866 golgappa street','winnipeg','f7r 0h2','manitoba','Canada','6728817738','jasreen.kaur@abc.com','female','$2y$10$glDCtYpIBISumNXugcqlyebDwPdVCmRjYCansoJ26DiU1lJgkswJ6','2020-05-10 19:34:32','2020-05-10 19:34:32'),(33,'Saif','goyal','876 sherbrook street','winnipeg','d8g0e7','manitoba','Canada','7584939223','saif.goyal@abc.com','male','$2y$10$ysZrYg96K2p7La.S0KRSYe4uY2Uig4V5YobuvZ9RNHsh3IytKz3su','2020-05-10 19:35:44','2020-05-10 19:35:44'),(34,'Arshdeep','Kalsi','#1123 Sector 11','Chandigarh','h3c0j1','Chandigarh','India','8878876654','arsh.kalsi@abc.com','female','$2y$10$A./Z.09Rjs04hN.dorht/eN24xj74CYJyI0QlgrVJw3bCmFQXgleO','2020-05-10 19:38:13','2020-05-10 19:38:13');
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

-- Dump completed on 2020-05-15 15:52:48
