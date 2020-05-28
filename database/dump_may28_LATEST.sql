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
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
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
INSERT INTO `comments` VALUES (1,'Lorem Ipsum is simply dummy text of the printing and typesetting industry.','2020-05-26 14:43:23','2020-05-26 14:43:04',25,2),(2,'when an unknown printer took a galley of type and scrambled it to make.','2020-05-26 14:43:23','2020-05-26 14:43:04',26,3),(3,'It was popularised in the 1960s with the release of Letraset','2020-05-26 14:43:23','2020-05-26 14:43:04',27,1),(4,'more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum','2020-05-26 14:43:23','2020-05-26 14:43:04',28,4),(5,'Lorem Ipsum is that it has a more-or-less normal distribution of letters','2020-05-26 14:43:23','2020-05-26 14:43:04',29,5);
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
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `course`
--

LOCK TABLES `course` WRITE;
/*!40000 ALTER TABLE `course` DISABLE KEYS */;
INSERT INTO `course` VALUES (1,'Intro to HTML/CSS','36 hours','Brent Scott'),(2,'Advanced HTML/CSS','36 hours','Brent Scott'),(3,'Capstone - HTML5/CSS3','36 hours','Brent Scott'),(4,'JavaScript','36 hours','Steve George'),(5,'Web Animation','36 hours','Brent Scott'),(6,'Web Design Principles','36 Hours','Brent Scott'),(7,'Photoshop','36 hours','Brent Scott'),(8,'HTML Production Tool','18 hours','Brent Scott'),(9,'SQL','36 hours','Steve George'),(10,'Unix','36 hours','Bill'),(11,'XML','18','Brent Scott');
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
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `course_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `course_id` (`course_id`),
  CONSTRAINT `project_ibfk_1` FOREIGN KEY (`course_id`) REFERENCES `course` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `project`
--

LOCK TABLES `project` WRITE;
/*!40000 ALTER TABLE `project` DISABLE KEYS */;
INSERT INTO `project` VALUES (1,1,'A Web Form using HTML/CSS3','This HTML5/CSS project is to create a Web form with the criteria based on images \r\nand navigation, as well as create a layout included variety of fields that contains in a\r\nform.','The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.','project_01_image.jpeg','An HTML form page image','HTML5/CSS3','https://github.com/smilydawra/intermediate-HTML5-CSS3-Project.git',0,'2020-05-26 14:05:52','2020-05-26 14:38:14',1),(2,2,'A Web page using Transforms','This assignment will present you to make a simple Web page. This page will make use\r\nof CSS3 features including Web fonts, shadows, gradients, animation, and transforms such as box-shadow,\r\n text-shadow, CSS3 Gradient, CSS3 Transform, CSS border-radius.','The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.','project_02_image.jpeg','project_02_image_description','HTML5/CSS3','https://github.com/smilydawra/transform-HTML5-CSS3-Project.git',1,'2020-05-26 14:06:34','2020-05-26 14:38:14',1),(3,3,'A Web page using animations','This is Blog page on my website. I have used css animation for this page. \nPlaying with opacity and transform property, also used float to the image.','The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.','project_03_image.jpeg','project_03_image_description','HTML5/CSS3','https://github.com/smilydawra/animations-HTML5-CSS3-Project.git',1,'2020-05-26 14:06:34','2020-05-26 14:38:14',1),(4,4,'A Photoshop Design Template','This is a mockup of a complete web \r\npage interface made in photoshop. This includes various buttons, headings, navigation bars, \r\nlogos, titles, etc.','The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.','project_04_image.jpeg','project_04_image_description','Adobe Photoshop','https://github.com/smilydawra/photoshopTemplate-Photoshop-Project.git',0,'2020-05-26 14:06:34','2020-05-26 14:38:14',7),(5,5,'A Photoshop Triangle','This assignment will present you to make a simple Web page. \nThis page will make use of CSS3 features including Web fonts, shadows, gradients, animation,\n and transforms such as box-shadow, text-shadow, CSS3 Gradient, CSS3 Transform, CSS border-radius.','The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.','project_05_image.jpeg','project_05_image_description','Adobe Photoshop','https://github.com/smilydawra/psdTriangle-Photoshop-Project.git',1,'2020-05-26 14:06:34','2020-05-26 14:38:14',7),(6,6,'How mockup looks inside the Browser?','Each browser window will be placed on its own layer in a single Photoshop file\r\nand the bottom layer will contain a web site image that will be provided to you.','Create images from screen shots of browser chrome for two different browsers\r\nat two different sizes. The interior of the browser windows\r\n(where web content normally appears) will be removed so that only the outer\r\nchrome remains. Each browser window will be placed on its own layer in a single Photoshop file\r\nand the bottom layer will contain a web site image that will be provided to you.\r\nThis image will be visible though the transparent interior of the browser window layers,\r\nallowing you to see – and demonstrate to a prospective client – how a web site\r\nmockup will appear in different browsers and monitor resolutions.','project_06_image.jpeg','Assignment 1 Photoshop screenshot','Adobe Photoshop','https://github.com/smilydawra/psdCat-Photoshop-Project.git',0,'2020-05-26 14:06:34','2020-05-26 14:38:14',7),(7,7,'A Leaf with a Shadow','Using Photoshop, created a leaf with a shadow. Using gradients, borders, custom shapes and tweaking to the layer properties like Drop Shadow, Gradient Overlay, Satin, Outer Glow, Stroke etc.','Using Photoshop, created a leaf with a shadow.','project_07_image.jpeg','A psd - leaf with a shadow','Adobe Photoshop','https://github.com/smilydawra/psdPictures-Photoshop-Project.git',1,'2020-05-26 14:06:34','2020-05-26 14:38:14',7),(8,8,'A Website Design Mockup Using C.A.R.P.','Modified (or re-do) the previous project using the skills and techniques have gained in the\r\nWeb Design Principles course.','C.A.R.P. (Contrast, Alignment, Repetition, and Proximity) :\r\n- Proper use of colour\r\n- Typography\r\n- Accessibility\r\n- Usability\r\n- Page layout and navigation. Main content is “above the fold” for a 1024x768\r\nscreen.\r\n- “U R Here” indicators\r\n','project_08_image.jpeg','A JPEG file - Website Mockup','Photoshop - psd, jpeg','https://github.com/smilydawra/design-CARP-Project.git',0,'2020-05-26 14:06:34','2020-05-26 14:38:14',7),(9,9,'A Banner Ad for a Web Page','Created a Banner ad with use of text, classic tweens, and instance properties, to create a banner ad for a Web page.','Banner ad is 468 x 60 pixels with the following criteria:\r\n1. All objects are separated onto layers with descriptive layer names.\r\n2. The movie\'s frame rate is 30 fps.\r\n3. The movie contains a classic tween.\r\n4. Published the movie as both HTML5 canvas, and animated GIF.\r\n5. Fonts are static text, used effectively, and embedded correctly.','project_09_image.jpeg','A banner ad - Animate','HTML Canvas and Animated GIF','https://github.com/smilydawra/web-development-school-projects/tree/master/BannerAd%20using%20Animate',1,'2020-05-26 14:06:34','2020-05-26 14:38:14',5),(10,10,'Know about Birds with sound','A Flash Movie contains, motion tweens, shape tweens, classic tweens, sounds etc.','A flash movie with motion tweens and sounds. The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.','project_10_image.jpeg','JPEG - Know about Birds','Adobe Animate','https://github.com/smilydawra/web-development-school-projects/tree/master/Know%20about%20Birds%20sounds',1,'2020-05-26 14:06:34','2020-05-26 14:38:14',5),(11,11,'A Webpage using XML','Created a web page using: XML, XSLT, and CSS. Created XML with .xsl stylesheet, can properly render\r\nthe HTML output.','In this XML webpage about news articles, which is sorted by date. The Layout of the XML page simple but used .xsl stylesheet to properly render the HTML output. CSS has been used to specify fonts, text formatting, and colours in order to make it look tasty.','project_11_image.jpeg','XML Web Page JPEG','XML webpage','https://github.com/smilydawra/web-development-school-projects/tree/master/XML%20webpage',0,'2020-05-26 14:06:34','2020-05-28 00:32:56',11),(12,12,'An Image Slider - Fotorama','Used the jQuery library and a \"plug in\" to create a carousel (also called a \"slider\" or \"slideshow\") on a Web page.','1. jQuery Library: loaded one of the popular CDN versions of jQuery.\r\n2. Used a jQuery plugin to create the carousel on the page: (Fotorama Plugin).\r\n3. The carousel is responsive so it will work properly on mobile.\r\n4. Configured the carousel and it is different in some way than the default settings.\r\n5. Carousel have a way to navigate between different slides, sometimes known as a \"pager\".','project_12_image.jpeg','Html Page Slider','jQuery plugin ','https://github.com/smilydawra/web-development-school-projects/tree/master/jQuerySliderFotorama',1,'2020-05-26 14:06:34','2020-05-28 01:03:06',4),(13,13,'Ping Pong Game','A Ping pong game created with JavaScript.','A Ping pong game created with JavaScript on canvas. The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.','project_13_image.jpeg','Ping pong game jpeg','HTML canvas','https://github.com/smilydawra/web-development-school-projects/tree/master/Ping%20pong%20game',0,'2020-05-26 14:06:34','2020-05-28 01:29:44',4),(14,14,'Play with Browser Cookies','This assignment will present you to make a simple Web page. \nThis page will make use of CSS3 features including Web fonts, shadows, gradients, animation,\n and transforms such as box-shadow, text-shadow, CSS3 Gradient, CSS3 Transform, CSS border-radius.','The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.','project_03_image.jpeg','project_14_image_description','JavaScript','https://github.com/smilydawra/intermediate-JavaScript-Project.git',1,'2020-05-26 14:06:34','2020-05-26 14:38:14',4),(15,15,'To-do List - HTML','Created  one page that allows you to create a to-do list by storing the list item in one\r\narray and storing the item due date in parallel array.','The view items link will open up a new (chromeless) window with all the items\r\nentered being displayed.\r\nThe add item link will prompt the user for the name of the task and store it in\r\none array. After the name of the task is entered, the program will prompt the\r\nuser for the due date and store it in a parallel array.\r\nThe delete item link will prompt the user for the number of the item to be\r\ndeleted. After the number is entered, the program will remove that item from\r\nboth arrays.','project_15_image.jpeg','HTML Page','JavaScript','https://github.com/smilydawra/web-development-school-projects/tree/master/Todo-List%20JS',0,'2020-05-26 14:06:34','2020-05-28 01:43:47',4),(16,16,'A form validation using regx','Use the same form form earlier, and even some of the same JavaScript. However, form will now use regular expressions this time to validate.\r\nThis page will make use of CSS3 features including Web fonts, shadows, gradients, animation,\r\n and transforms such as box-shadow, text-shadow, CSS3 Gradient, CSS3 Transform, CSS border-radius.','There is no numbers or special characters in the first and last name.\r\nEmail Address splits the email address up at the \"@\" symbol, and the \".\" character, and check each part separately with regular expressions.\r\nPhone number are allowed for parentheses, hyphens, and dots/periods. All these phone numbers are allowed:\r\n(204) 555-1212 204.444.2323 204-555-3434\r\nPostal Code is validated with a Canadian postal code (ie: R3C 4C0) so that it follows letter, number, letter, space, number, letter, number.\r\nURL starts with http:// or \"https://\r\nAge is comprised of only numerical characters.','project_16_image.jpeg','Validation form','JavaScript','https://github.com/smilydawra/web-development-school-projects/tree/master/Validation%20Regex%20JS',1,'2020-05-26 14:06:34','2020-05-28 01:16:08',4),(17,17,'Normalised DB - Complex Database Example','This assignment will present you to make a simple Web page. \nThis page will make use of CSS3 features including Web fonts, shadows, gradients, animation,\n and transforms such as box-shadow, text-shadow, CSS3 Gradient, CSS3 Transform, CSS border-radius.','The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.','project_03_image.jpeg','project_17_image_description','SQL','https://github.com/smilydawra/sql-normalisedDB-Project.git',1,'2020-05-26 14:06:34','2020-05-26 14:38:14',9),(18,18,'Relational Data Models using Open Office','This assignment will present you to make a simple Web page. \nThis page will make use of CSS3 features including Web fonts, shadows, gradients, animation,\n and transforms such as box-shadow, text-shadow, CSS3 Gradient, CSS3 Transform, CSS border-radius.','The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.','project_03_image.jpeg','project_18_image_description','SQL','https://github.com/smilydawra/sql-dataModels-Project.git',1,'2020-05-26 14:06:34','2020-05-26 14:38:14',9),(19,19,'A sample book database using MYSQL Workbench','This assignment will present you to make a simple Web page. \nThis page will make use of CSS3 features including Web fonts, shadows, gradients, animation,\n and transforms such as box-shadow, text-shadow, CSS3 Gradient, CSS3 Transform, CSS border-radius.','The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.','project_03_image.jpeg','project_19_image_description','SQL','https://github.com/smilydawra/sql-bookDB-Project.git',0,'2020-05-26 14:06:34','2020-05-26 14:38:14',9),(20,20,'5 Page website using HTML5/CSS3','This assignment will present you to make a simple Web page. \nThis page will make use of CSS3 features including Web fonts, shadows, gradients, animation,\n and transforms such as box-shadow, text-shadow, CSS3 Gradient, CSS3 Transform, CSS border-radius.','The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.','project_03_image.jpeg','project_20_image_description','HTML5/CSS3','https://github.com/smilydawra/capstone-HTML5-CSS3-Project.git',1,'2020-05-26 14:06:34','2020-05-26 14:38:14',3),(21,21,'PHP Models','This is summary for php models title','This is details for php models title','project_21_image.jpeg','project_21_image description','PHP','https://github.com/smilydawra/capstone-phpModels-Project.git ',0,'2020-05-26 14:06:34','2020-05-26 14:38:14',9),(24,22,'PHP Classes','This is summary','this is details','project_22_image.jpeg','project_22_image description','PHP','https://github.com/smilydawra/capstone-phpClasses-Project.git ',0,'2020-05-26 14:06:34','2020-05-26 14:38:14',9);
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

-- Dump completed on 2020-05-28 11:21:20
