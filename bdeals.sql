-- MySQL dump 10.16  Distrib 10.1.12-MariaDB, for osx10.11 (x86_64)
--
-- Host: localhost    Database: bdeals
-- ------------------------------------------------------
-- Server version	10.1.12-MariaDB

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
-- Table structure for table `bd_business_details`
--

DROP TABLE IF EXISTS `bd_business_details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bd_business_details` (
  `form_id` bigint(10) NOT NULL AUTO_INCREMENT,
  `customer_id` varchar(255) NOT NULL,
  `name` varchar(128) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `contact` varchar(16) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `company_name` varchar(255) DEFAULT NULL,
  `designation` varchar(32) DEFAULT NULL,
  `website` varchar(255) NOT NULL,
  `who` varchar(16) DEFAULT NULL,
  `alternative_email` varchar(255) NOT NULL,
  `alternative_contact` varchar(16) NOT NULL,
  `key_headline` varchar(50) NOT NULL,
  `description` varchar(255) NOT NULL,
  `location_country` varchar(128) DEFAULT NULL,
  `location_region` varchar(128) NOT NULL,
  `location_state` varchar(255) NOT NULL,
  `location_city` varchar(255) DEFAULT NULL,
  `listing_category` varchar(64) NOT NULL,
  `listing_sub_category` varchar(64) NOT NULL,
  `legal_entity` varchar(32) NOT NULL,
  `yoe` varchar(255) NOT NULL,
  `current_status_of_business` varchar(32) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`form_id`),
  KEY `index_location1` (`location`),
  KEY `index_location_city1` (`location_city`),
  KEY `index_location_country1` (`location_country`),
  KEY `index_location_region` (`location_region`),
  KEY `index_location_state` (`location_state`),
  KEY `index_company_name1` (`company_name`),
  KEY `index_status2` (`status`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bd_business_details`
--

LOCK TABLES `bd_business_details` WRITE;
/*!40000 ALTER TABLE `bd_business_details` DISABLE KEYS */;
INSERT INTO `bd_business_details` VALUES (1,'gaurav@gmail.com','Gaurav','gaurav1@gmail.com','9999999994','C-88','Noida','NMSS','TD','','owner','','','Business Heading','Business Description - 2','1','','24','1','Industry','','Proprietorship','2006','Running Profitable',1),(2,'tanuj27@gmail.com','Tanuj','tanuj27@gmail.com','9958293111','C-88 Sector 2','Noida','NMSS','CTO','http://www.google.com','owner','','','','','1','','24','2','','','','','',0);
/*!40000 ALTER TABLE `bd_business_details` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bd_business_documents`
--

DROP TABLE IF EXISTS `bd_business_documents`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bd_business_documents` (
  `id` bigint(10) NOT NULL AUTO_INCREMENT,
  `form_id` bigint(10) NOT NULL,
  `customer_id` varchar(255) NOT NULL,
  `document_type` varchar(32) NOT NULL,
  `path` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bd_business_documents`
--

LOCK TABLES `bd_business_documents` WRITE;
/*!40000 ALTER TABLE `bd_business_documents` DISABLE KEYS */;
INSERT INTO `bd_business_documents` VALUES (8,1,'gaurav@gmail.com','image','./uploads/gauravgmail.com/2018-02-26/1-Add-Ons_Required_1.png'),(9,1,'gaurav@gmail.com','video','./uploads/gauravgmail.com/2018-02-26/cut_5.mp4'),(10,1,'gaurav@gmail.com','executive','./uploads/gauravgmail.com/2018-02-26/30-01-2018.xlsx'),(11,1,'gaurav@gmail.com','memorandum','./uploads/gauravgmail.com/2018-02-26/advanced-dbms-assignment-5-instructions_.docx'),(12,1,'gaurav@gmail.com','additional','./uploads/gauravgmail.com/2018-02-26/VPN0050799000101.pdf');
/*!40000 ALTER TABLE `bd_business_documents` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bd_case_history`
--

DROP TABLE IF EXISTS `bd_case_history`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bd_case_history` (
  `id` bigint(255) NOT NULL AUTO_INCREMENT,
  `case_id` bigint(11) NOT NULL,
  `case_type` varchar(16) NOT NULL,
  `assign_to` bigint(11) NOT NULL,
  `action` varchar(64) NOT NULL,
  `followup_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `comment` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(16) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `index_followup_date` (`followup_date`),
  KEY `index_status1` (`status`),
  KEY `index_action` (`action`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bd_case_history`
--

LOCK TABLES `bd_case_history` WRITE;
/*!40000 ALTER TABLE `bd_case_history` DISABLE KEYS */;
INSERT INTO `bd_case_history` VALUES (1,3,'sell',1,'follow-up','2018-03-07 10:29:47','Test','2018-03-07 09:55:54','Follow up'),(2,3,'',0,'','2018-03-07 11:14:31','Requested to provide details on 26th February.','2018-03-07 11:14:31','Follow up'),(3,3,'sell',1,'Follow up','2018-03-07 11:20:00','Requested to provide details on 26th February.','2018-03-07 11:20:00','Follow up'),(4,3,'sell',1,'Canceled','2018-03-07 11:20:28','Requested to provide details on 26th February.','2018-03-07 11:20:28','Canceled'),(5,1,'sell',4,'Follow up','2018-03-24 11:34:26','Test Message','2018-03-24 11:34:26','Follow up');
/*!40000 ALTER TABLE `bd_case_history` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bd_case_responsibility`
--

DROP TABLE IF EXISTS `bd_case_responsibility`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bd_case_responsibility` (
  `id` bigint(11) NOT NULL AUTO_INCREMENT,
  `case_id` bigint(11) NOT NULL,
  `case_type` varchar(16) NOT NULL,
  `assigned_to` bigint(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` varchar(16) NOT NULL,
  `comment` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `index_status` (`status`),
  KEY `index_assigned_to` (`assigned_to`),
  KEY `index_case_type` (`case_type`),
  CONSTRAINT `lnk_bd_users_bd_case_responsibility` FOREIGN KEY (`assigned_to`) REFERENCES `bd_users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bd_case_responsibility`
--

LOCK TABLES `bd_case_responsibility` WRITE;
/*!40000 ALTER TABLE `bd_case_responsibility` DISABLE KEYS */;
/*!40000 ALTER TABLE `bd_case_responsibility` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bd_country_list`
--

DROP TABLE IF EXISTS `bd_country_list`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bd_country_list` (
  `id` int(8) NOT NULL,
  `country_name` varchar(128) NOT NULL,
  PRIMARY KEY (`country_name`),
  KEY `ind_cname` (`country_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bd_country_list`
--

LOCK TABLES `bd_country_list` WRITE;
/*!40000 ALTER TABLE `bd_country_list` DISABLE KEYS */;
INSERT INTO `bd_country_list` VALUES (4,'Afghanistan'),(247,'Algeria '),(248,'Any Country'),(11,'Argentina'),(14,'Australia'),(15,'Austria'),(18,'Bahrain'),(19,'Bangladesh'),(22,'Belgium'),(26,'Bhutan'),(31,'Brazil'),(33,'Bulgaria'),(38,'Canada'),(43,'Chile'),(44,'China'),(53,'Cyprus'),(55,'Denmark'),(65,'Ethiopia'),(69,'Finland'),(70,'France'),(75,'Germany'),(76,'Ghana'),(78,'Greece'),(90,'Hong Kong'),(1,'India'),(93,'Indonesia'),(3,'Iran'),(95,'Ireland'),(96,'Israel'),(103,'Kenya'),(237,'Kuwait'),(233,'Latvija'),(111,'Liberia'),(118,'Madagascar'),(120,'Malaysia'),(123,'Malta'),(127,'Mauritius'),(129,'Mexico'),(141,'Nepal'),(243,'Netherlands'),(145,'New Zealand'),(148,'Nigeria'),(154,'Oman'),(155,'Pakistan'),(160,'Peru'),(161,'Philippines'),(163,'Poland'),(165,'Portugal'),(167,'Qatar'),(170,'Russia'),(171,'Rwanda'),(180,'Saudi Arabia'),(181,'Senegal'),(185,'Singapore'),(186,'Slovakia'),(190,'South Africa'),(192,'South Korea'),(193,'Spain'),(194,'Sri Lanka'),(199,'Sweden'),(200,'Switzerland'),(204,'Tanzania'),(205,'Thailand'),(212,'Turkey'),(218,'United Arab Emirates'),(219,'United Kingdom'),(220,'United States'),(230,'Zimbabwe');
/*!40000 ALTER TABLE `bd_country_list` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bd_country_state_mapping`
--

DROP TABLE IF EXISTS `bd_country_state_mapping`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bd_country_state_mapping` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `country_id` int(8) NOT NULL,
  `state_name` varchar(128) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `ind_csm_sname` (`state_name`),
  KEY `ind_csm_cid` (`country_id`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bd_country_state_mapping`
--

LOCK TABLES `bd_country_state_mapping` WRITE;
/*!40000 ALTER TABLE `bd_country_state_mapping` DISABLE KEYS */;
INSERT INTO `bd_country_state_mapping` VALUES (1,1,'Andhra Pradesh'),(2,1,'Arunachal Pradesh'),(3,1,'Assam'),(4,1,'Bihar'),(5,1,'Goa'),(6,1,'Gujarat'),(7,1,'Haryana'),(8,1,'Himachal Pradesh'),(9,1,'Jammu & Kashmir'),(10,1,'Karnataka'),(11,1,'Kerala'),(12,1,'Madhya Pradesh'),(13,1,'Maharashtra'),(14,1,'Manipur'),(15,1,'Meghalaya'),(16,1,'Mizoram'),(17,1,'Nagaland'),(18,1,'Orissa'),(19,1,'Punjab'),(20,1,'Rajasthan'),(21,1,'Sikkim'),(22,1,'Tamil Nadu'),(23,1,'Tripura'),(24,1,'Uttar Pradesh'),(25,1,'West Bengal'),(26,1,'Chhattisgarh'),(27,1,'Uttarakhand'),(28,1,'Jharkhand'),(29,1,'Telangana'),(32,1,'Delhi'),(33,1,'Andaman & Nicobar Islands'),(34,1,'Chandigarh'),(35,1,'Dadra & Nagar Haveli'),(36,1,'Daman & Diu'),(37,1,'Lakshadweep'),(38,1,'Puducherry');
/*!40000 ALTER TABLE `bd_country_state_mapping` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bd_currency`
--

DROP TABLE IF EXISTS `bd_currency`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bd_currency` (
  `id` bigint(10) NOT NULL AUTO_INCREMENT,
  `currency_name` varchar(32) NOT NULL,
  `currency_symbol` varchar(8) NOT NULL,
  `country_id` int(8) NOT NULL,
  `status` int(1) DEFAULT '0',
  `add_date` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bd_currency`
--

LOCK TABLES `bd_currency` WRITE;
/*!40000 ALTER TABLE `bd_currency` DISABLE KEYS */;
INSERT INTO `bd_currency` VALUES (1,'Ruppes','INR',1,NULL,'2018-04-11 19:30:43');
/*!40000 ALTER TABLE `bd_currency` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bd_customer_details`
--

DROP TABLE IF EXISTS `bd_customer_details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bd_customer_details` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `customer_id` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `country` int(8) NOT NULL,
  `state` int(8) NOT NULL,
  `city` int(8) NOT NULL,
  `postal_code` int(10) NOT NULL,
  `contact_number` varchar(16) NOT NULL,
  `alternate_email` varchar(255) DEFAULT 'na',
  `website` varchar(255) DEFAULT 'na',
  `status` int(1) NOT NULL,
  `register_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `last_update_date` datetime DEFAULT '0000-00-00 00:00:00',
  `expiry_date` datetime DEFAULT '0000-00-00 00:00:00',
  `created_by` varchar(16) NOT NULL DEFAULT 'Self User',
  PRIMARY KEY (`id`),
  UNIQUE KEY `cd_ucid` (`customer_id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bd_customer_details`
--

LOCK TABLES `bd_customer_details` WRITE;
/*!40000 ALTER TABLE `bd_customer_details` DISABLE KEYS */;
INSERT INTO `bd_customer_details` VALUES (1,'gaurav@gmail.com','gaurav@123','Gaurav Naib','NMSS','Vikaspuri',1,32,3,110010,'9999999999','na','http://www.google.com',1,'2017-12-27 12:10:10','2017-12-27 17:40:10',NULL,'Self User'),(2,'gaurav1@gmail.com','gaurav123','Gaurav','NMS','Noida',1,24,1,201010,'999999999','gaurav@gmail.com','http://www.naib.com',1,'2018-03-23 07:03:51','2018-03-23 12:33:51','0000-00-00 00:00:00','Self User'),(27,'tanuj27@gmail.com','tanuj123','Tanuj','INW','A2',1,24,2,201016,'9958293111','','',1,'2018-03-23 07:04:34','2018-03-23 12:34:34','0000-00-00 00:00:00','Self User');
/*!40000 ALTER TABLE `bd_customer_details` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bd_customer_package`
--

DROP TABLE IF EXISTS `bd_customer_package`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bd_customer_package` (
  `id` bigint(10) NOT NULL AUTO_INCREMENT,
  `customer_id` varchar(255) NOT NULL,
  `form_id` bigint(10) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `package_id` bigint(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_package_custid` (`customer_id`),
  KEY `idx_package_formid` (`form_id`),
  KEY `lnk_bd_package_bd_customer_package` (`package_id`),
  CONSTRAINT `lnk_bd_customer_details_bd_customer_package` FOREIGN KEY (`customer_id`) REFERENCES `bd_customer_details` (`customer_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `lnk_bd_package_bd_customer_package` FOREIGN KEY (`package_id`) REFERENCES `bd_package` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bd_customer_package`
--

LOCK TABLES `bd_customer_package` WRITE;
/*!40000 ALTER TABLE `bd_customer_package` DISABLE KEYS */;
INSERT INTO `bd_customer_package` VALUES (1,'gaurav@gmail.com',1,'2018-04-10 05:41:37',4);
/*!40000 ALTER TABLE `bd_customer_package` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bd_customer_responsibility`
--

DROP TABLE IF EXISTS `bd_customer_responsibility`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bd_customer_responsibility` (
  `id` bigint(11) NOT NULL AUTO_INCREMENT,
  `customer_id` bigint(11) NOT NULL,
  `assigned_to` bigint(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` varchar(16) NOT NULL,
  `comment` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `index_customer_assigned_to` (`assigned_to`) USING BTREE,
  KEY `index_customer_status` (`status`) USING BTREE,
  CONSTRAINT `lnk_bd_users_bd_customer_responsibility` FOREIGN KEY (`assigned_to`) REFERENCES `bd_users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bd_customer_responsibility`
--

LOCK TABLES `bd_customer_responsibility` WRITE;
/*!40000 ALTER TABLE `bd_customer_responsibility` DISABLE KEYS */;
INSERT INTO `bd_customer_responsibility` VALUES (6,1,4,'2018-04-07 13:35:48','Assigned','Assigned by Admin'),(7,27,5,'2018-03-23 07:04:32','Assigned','Assigned by Admin');
/*!40000 ALTER TABLE `bd_customer_responsibility` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bd_employee`
--

DROP TABLE IF EXISTS `bd_employee`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bd_employee` (
  `id` bigint(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `contact_no` varchar(16) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `department` varchar(64) NOT NULL,
  `country` int(8) NOT NULL,
  `add_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(2) NOT NULL DEFAULT 'a',
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  CONSTRAINT `lnk_bd_users_bd_employee` FOREIGN KEY (`id`) REFERENCES `bd_users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bd_employee`
--

LOCK TABLES `bd_employee` WRITE;
/*!40000 ALTER TABLE `bd_employee` DISABLE KEYS */;
INSERT INTO `bd_employee` VALUES (4,'Tanuj','9811293111','tanuj27@gmail.com','Operation',1,'2018-03-23 07:02:31','a'),(5,'Gaurav','9999999999','gaurav@gmail.com','Operation',1,'2018-03-23 07:03:34','a'),(6,'Admin','9988776655','admin@gmail.com','Admin',1,'2018-03-24 14:12:34','a'),(7,'Parveen','9999999999','parveen@gg.com','',1,'2018-04-09 18:30:00','a');
/*!40000 ALTER TABLE `bd_employee` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bd_listing_contacts`
--

DROP TABLE IF EXISTS `bd_listing_contacts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bd_listing_contacts` (
  `id` bigint(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `mobile` varchar(16) NOT NULL,
  `country` int(8) DEFAULT NULL,
  `state` bigint(8) NOT NULL,
  `city` int(8) NOT NULL,
  `message` varchar(1000) DEFAULT NULL,
  `form_id` bigint(10) NOT NULL,
  `contact_to` varchar(255) NOT NULL,
  `contact_from` varchar(255) DEFAULT NULL,
  `date` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bd_listing_contacts`
--

LOCK TABLES `bd_listing_contacts` WRITE;
/*!40000 ALTER TABLE `bd_listing_contacts` DISABLE KEYS */;
INSERT INTO `bd_listing_contacts` VALUES (1,'Sushil','sushil@gmail.com','9897969594',1,24,1,'Test message',1,'gaurav@gmail.com','','2018-04-11 15:25:39');
/*!40000 ALTER TABLE `bd_listing_contacts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bd_package`
--

DROP TABLE IF EXISTS `bd_package`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bd_package` (
  `id` bigint(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) NOT NULL,
  `description` varchar(255) NOT NULL,
  `value` decimal(4,0) NOT NULL DEFAULT '0',
  `creation_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `status` char(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_package_name` (`name`),
  KEY `idx_package_value` (`value`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bd_package`
--

LOCK TABLES `bd_package` WRITE;
/*!40000 ALTER TABLE `bd_package` DISABLE KEYS */;
INSERT INTO `bd_package` VALUES (1,'Basic','3 Months\nBasic Package include\nSell\nPurchase',300,'2018-01-20 08:10:00','A'),(2,'Advance','6 Months\nAdvance Package include\nBasic Package\nRent',600,'2018-01-20 08:10:45','A'),(3,'Ultimate','9 Months',900,'2018-01-20 08:10:50','A'),(4,'Elite','12 Months',1200,'2018-01-20 08:10:55','A');
/*!40000 ALTER TABLE `bd_package` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bd_sell_business_details`
--

DROP TABLE IF EXISTS `bd_sell_business_details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bd_sell_business_details` (
  `id` bigint(10) NOT NULL AUTO_INCREMENT,
  `form_id` bigint(10) NOT NULL,
  `no_of_permanent_employee` int(10) NOT NULL,
  `no_of_contractual_emplyee` int(10) NOT NULL,
  `total_employee` int(10) NOT NULL,
  `is_re_locatable` char(1) NOT NULL,
  `asking_price_type` varchar(8) NOT NULL,
  `asking_price` bigint(16) NOT NULL,
  `price_range_type` varchar(8) NOT NULL,
  `price_range` bigint(16) NOT NULL,
  `total_revenue_type` varchar(8) NOT NULL,
  `total_revenue` bigint(16) NOT NULL,
  `business_listed_by` varchar(16) NOT NULL,
  `product_service_desc` varchar(384) NOT NULL,
  `competition_market_desc` varchar(384) NOT NULL,
  `growth_potential` varchar(384) NOT NULL,
  `reason_for_sale` varchar(384) NOT NULL,
  `property_type` varchar(8) NOT NULL,
  `real_state_value` bigint(16) NOT NULL,
  `facility_desc` varchar(384) NOT NULL,
  `industrial_commercial` varchar(16) NOT NULL,
  `total_land_area_type` varchar(8) NOT NULL,
  `total_land_area` bigint(10) NOT NULL,
  `built_up_area_type` varchar(8) NOT NULL,
  `built_up_area` bigint(10) NOT NULL,
  `open_area_type` varchar(8) NOT NULL,
  `open_area` bigint(10) NOT NULL,
  `other_area` bigint(10) NOT NULL,
  `fin_year` int(4) NOT NULL,
  `fin_revenue_turnover` bigint(10) NOT NULL,
  `fin_EDITDA` bigint(10) NOT NULL,
  `fin_PAT` bigint(10) NOT NULL,
  `fin_margin` bigint(10) NOT NULL,
  `fin_yearly` bigint(10) NOT NULL,
  `added_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `lnk_bd_business_details_bd_sell_business_details` (`form_id`),
  KEY `index_added_date` (`added_date`),
  CONSTRAINT `lnk_bd_business_details_bd_sell_business_details` FOREIGN KEY (`form_id`) REFERENCES `bd_business_details` (`form_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bd_sell_business_details`
--

LOCK TABLES `bd_sell_business_details` WRITE;
/*!40000 ALTER TABLE `bd_sell_business_details` DISABLE KEYS */;
INSERT INTO `bd_sell_business_details` VALUES (1,1,100,3000,4000,'Y','',10,'INR',100,'INR',1000,'Owner','Test product - 1','Test market - 1','Test growth - 1','Test sale - 1','Owner',200,'Test describe - 3','Commercial','sqft',2000,'sqft',2000,'sqft',2000,200,10000,10000,10000,1000,100,1000,'2018-04-11 11:57:45'),(2,2,100,300,400,'Y','INR',10000,'INR',1000,'INR',1000,'Owner','Test product','Test market','Test growth','Test sale','Owner',2000,'Test describe','Commercial','sqft',200,'sqft',200,'',200,20,1000,1000,1000,100,0,1100,'2018-01-27 14:04:36');
/*!40000 ALTER TABLE `bd_sell_business_details` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bd_state_city_mapping`
--

DROP TABLE IF EXISTS `bd_state_city_mapping`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bd_state_city_mapping` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `state_id` int(8) NOT NULL,
  `city_name` varchar(128) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bd_state_city_mapping`
--

LOCK TABLES `bd_state_city_mapping` WRITE;
/*!40000 ALTER TABLE `bd_state_city_mapping` DISABLE KEYS */;
INSERT INTO `bd_state_city_mapping` VALUES (1,24,'Noida'),(2,24,'Ghaziabad'),(3,32,'New Delhi');
/*!40000 ALTER TABLE `bd_state_city_mapping` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bd_user_query_info`
--

DROP TABLE IF EXISTS `bd_user_query_info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bd_user_query_info` (
  `id` bigint(10) NOT NULL AUTO_INCREMENT,
  `customer_id` varchar(255) DEFAULT 'na',
  `name` varchar(128) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `contact_number` varchar(16) NOT NULL,
  `message` varchar(1024) NOT NULL DEFAULT 'na',
  `query_datetime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `query_status` varchar(16) NOT NULL DEFAULT 'p',
  `query_update_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `index_email` (`email`),
  KEY `index_city` (`city`)
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bd_user_query_info`
--

LOCK TABLES `bd_user_query_info` WRITE;
/*!40000 ALTER TABLE `bd_user_query_info` DISABLE KEYS */;
INSERT INTO `bd_user_query_info` VALUES (54,'na','Tanuj','tanuj27@gmail.com','Noida','9958293111','Test message','2018-04-11 11:35:02','p','0000-00-00 00:00:00');
/*!40000 ALTER TABLE `bd_user_query_info` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bd_users`
--

DROP TABLE IF EXISTS `bd_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bd_users` (
  `id` bigint(11) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(128) NOT NULL,
  `password` varchar(32) NOT NULL,
  `type` varchar(8) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_uniq_uid` (`user_id`),
  KEY `index_type` (`type`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bd_users`
--

LOCK TABLES `bd_users` WRITE;
/*!40000 ALTER TABLE `bd_users` DISABLE KEYS */;
INSERT INTO `bd_users` VALUES (4,'tanuj_emp','tanuj@123','employee'),(5,'gaurav_emp','gaurav@123','employee'),(6,'admin','admin@123','admin'),(7,'parveen@gg.com','1234','employee');
/*!40000 ALTER TABLE `bd_users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-04-12 20:00:16
