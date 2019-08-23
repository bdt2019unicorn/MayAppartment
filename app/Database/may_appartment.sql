CREATE DATABASE  IF NOT EXISTS `may_appartment` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `may_appartment`;
-- MySQL dump 10.13  Distrib 8.0.17, for Win64 (x86_64)
--
-- Host: localhost    Database: may_appartment
-- ------------------------------------------------------
-- Server version	5.7.27-log

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` (`id`, `username`, `password`) VALUES (1,'golden','MTIzMTIz');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `appartments`
--

LOCK TABLES `appartments` WRITE;
/*!40000 ALTER TABLE `appartments` DISABLE KEYS */;
INSERT INTO `appartments` (`id`, `name`, `address`, `main_picture`, `content`) VALUES (1,'house1',NULL,NULL,NULL),(2,'house2',NULL,NULL,NULL),(3,'house3',NULL,NULL,NULL),(4,'house4',NULL,NULL,NULL),(5,'house5',NULL,NULL,NULL),(16,'appartment1',NULL,NULL,NULL);
/*!40000 ALTER TABLE `appartments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `rooms`
--

LOCK TABLES `rooms` WRITE;
/*!40000 ALTER TABLE `rooms` DISABLE KEYS */;
INSERT INTO `rooms` (`id`, `name`, `price`, `unit_id`, `main_picture`, `more_picture`, `appartment_id`, `quantity`, `content`) VALUES (1,'house1_room1',0,18,NULL,NULL,1,0,NULL),(2,'house1_room2',0,18,NULL,NULL,1,0,NULL),(3,'room3',0,18,NULL,NULL,1,10,NULL),(5,'room17',0,18,NULL,NULL,1,10,NULL),(6,'room4',0,18,NULL,NULL,1,10,NULL),(7,'room5',0,18,NULL,NULL,1,10,NULL);
/*!40000 ALTER TABLE `rooms` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `transactions`
--

LOCK TABLES `transactions` WRITE;
/*!40000 ALTER TABLE `transactions` DISABLE KEYS */;
INSERT INTO `transactions` (`id`, `name`, `email`, `phone`, `message`, `amount`, `length_of_stay`, `unit_id`, `room_id`, `confirm`) VALUES (3,'nguyen van toan','nvt@gmail.com','9093483',NULL,0,0,18,1,0),(4,'nguyen van toan','nvt@gmail.com','9093483',NULL,0,0,18,1,0),(5,'nguyen van toan','nvt@gmail.com','9093483',NULL,0,0,18,1,0);
/*!40000 ALTER TABLE `transactions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `units`
--

LOCK TABLES `units` WRITE;
/*!40000 ALTER TABLE `units` DISABLE KEYS */;
INSERT INTO `units` (`id`, `name`) VALUES (18,'unit1'),(19,'unit2'),(20,'unit3');
/*!40000 ALTER TABLE `units` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `phone`, `username`, `password`, `email`) VALUES (1,'Nguyen Van Toan',NULL,'nguyenvantoan','nguyenvantoan','nguyenvantoan@yopmail.com'),(4,'Nguyen Van Toan',NULL,'nguyenvantoan1','nguyenvantoan1','nguyenvantoan1@yopmail.com');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'may_appartment'
--

--
-- Dumping routines for database 'may_appartment'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-08-24  2:37:36
