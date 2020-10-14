/*
SQLyog Ultimate v13.1.1 (64 bit)
MySQL - 10.1.36-MariaDB : Database - pro
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `appoint_bid_member` */

DROP TABLE IF EXISTS `appoint_bid_member`;

CREATE TABLE `appoint_bid_member` (
  `reference_no` varchar(20) NOT NULL,
  `member_nic` varchar(12) NOT NULL,
  `auto_no` int(11) NOT NULL AUTO_INCREMENT,
  KEY `auto_no` (`auto_no`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `appoint_bid_member` */

insert  into `appoint_bid_member`(`reference_no`,`member_nic`,`auto_no`) values 
('123','123456',1),
('123','234556',2),
('123','234556',3);

/*Table structure for table `appoint_pro_member` */

DROP TABLE IF EXISTS `appoint_pro_member`;

CREATE TABLE `appoint_pro_member` (
  `reference_no` varchar(20) NOT NULL,
  `member_nic` varchar(12) NOT NULL,
  `auto_no` int(11) NOT NULL AUTO_INCREMENT,
  KEY `auto_no` (`auto_no`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `appoint_pro_member` */

insert  into `appoint_pro_member`(`reference_no`,`member_nic`,`auto_no`) values 
('123','54564',1),
('123','54564',2),
('123','8754',3);

/*Table structure for table `appoint_tec_member` */

DROP TABLE IF EXISTS `appoint_tec_member`;

CREATE TABLE `appoint_tec_member` (
  `reference_no` varchar(20) NOT NULL,
  `member_nic` varchar(12) NOT NULL,
  `auto_no` int(11) NOT NULL AUTO_INCREMENT,
  KEY `auto_no` (`auto_no`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `appoint_tec_member` */

insert  into `appoint_tec_member`(`reference_no`,`member_nic`,`auto_no`) values 
('123','',1),
('123','123',2),
('123','125',3),
('123','123',4),
('123','125',5),
('123','123',6);

/*Table structure for table `bid_opening_committee_member` */

DROP TABLE IF EXISTS `bid_opening_committee_member`;

CREATE TABLE `bid_opening_committee_member` (
  `committee_member_id` int(11) NOT NULL AUTO_INCREMENT,
  `nic` varchar(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `area_of_specialty` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `fax` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (`nic`),
  KEY `committee_member_id` (`committee_member_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

/*Data for the table `bid_opening_committee_member` */

insert  into `bid_opening_committee_member`(`committee_member_id`,`nic`,`name`,`designation`,`area_of_specialty`,`address`,`phone`,`fax`,`email`) values 
(1,'123456','Deshan','Procm spec','Pro','dsdsd','454','54554','sdsd@dfd.com'),
(2,'234556','Nimal','sasa','asasa','sasqeqq','5454','45454','cxcx@fdfd.com'),
(3,'asdasdasd','asdasd','asd','asdasd','asdas','asdas','asdsad','sadas'),
(4,'dasdas','asdasda','dasda','asdasd','asd','asd','asda','asda'),
(5,'asdas','asdas','asd','asda','asdas','asd','asdas','asd'),
(6,'asdasdasddasd','zsadas','asd','asd','asd','asd','asd','asd'),
(7,'sdfs','zxfsdf','sdfsd','sdf','sdf','sdf','sdf','sdf'),
(8,'oip','uiopop','iopi','iopio','uiou','dsfsdf','jkhj','iuo'),
(9,'hjghjgh','ghjghjg','jghjgh','ghj','ghjgh','jghj','ghj','ghjgh');

/*Table structure for table `civil_work` */

DROP TABLE IF EXISTS `civil_work`;

CREATE TABLE `civil_work` (
  `civil_work_id` int(11) NOT NULL AUTO_INCREMENT,
  `reference_no` varchar(20) NOT NULL,
  `work_package` varchar(100) NOT NULL,
  `estimate_cost` double NOT NULL,
  `procurement_method_id` int(11) NOT NULL,
  `agency_id` int(11) NOT NULL,
  `province` varchar(40) NOT NULL,
  `district` varchar(40) NOT NULL,
  `description` varchar(500) NOT NULL,
  PRIMARY KEY (`reference_no`),
  KEY `civil_work_id` (`civil_work_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `civil_work` */

insert  into `civil_work`(`civil_work_id`,`reference_no`,`work_package`,`estimate_cost`,`procurement_method_id`,`agency_id`,`province`,`district`,`description`) values 
(1,'MCUDP/0001','Mutwal',1028500,1,2,'Central','Anuradhapura','sxdsds'),
(2,'mcudp/002','Beira Lake',8789859.03,5,1,'Eastern','Anuradhapura','jhdsytd sudyshd'),
(3,'MCUDP/0003','Beira Lake II',568989.454,2,1,'Eastern','Ampara','wwewew efdf'),
(4,'MCUDP/0004','Beira Lake',454545,1,2,'Central','Anuradhapura','4545');

/*Table structure for table `contractor` */

DROP TABLE IF EXISTS `contractor`;

CREATE TABLE `contractor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `business_registration_number` varchar(40) NOT NULL,
  `contractor_name` varchar(100) NOT NULL,
  `address` varchar(100) DEFAULT NULL,
  `contact_number` varchar(10) DEFAULT NULL,
  `company_email` varchar(100) DEFAULT NULL,
  `vat_registration_no` varchar(30) DEFAULT NULL,
  `tax_identification_no` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `contractor` */

insert  into `contractor`(`id`,`business_registration_number`,`contractor_name`,`address`,`contact_number`,`company_email`,`vat_registration_no`,`tax_identification_no`) values 
(1,'B123','Edward',NULL,NULL,NULL,NULL,NULL),
(2,'B224','RR Cons',NULL,NULL,NULL,NULL,NULL),
(3,'uioyiouy','asdasdas','sdfsa','hiojh','TdremIedkt4P7N606IgiRubMubK73HvkQZ3sba0yCGBhdFFj5RE5a/UlQAqMw97Tpv7eGf4qQN0q51ya5vW2+g==','oiuiou','iouio');

/*Table structure for table `implementation_agency` */

DROP TABLE IF EXISTS `implementation_agency`;

CREATE TABLE `implementation_agency` (
  `agency_id` int(11) NOT NULL AUTO_INCREMENT,
  `agency` varchar(10) NOT NULL,
  PRIMARY KEY (`agency_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `implementation_agency` */

insert  into `implementation_agency`(`agency_id`,`agency`) values 
(1,'UDA'),
(2,'SLLRDC'),
(3,'CMC'),
(4,'PMU');

/*Table structure for table `level_of_authority` */

DROP TABLE IF EXISTS `level_of_authority`;

CREATE TABLE `level_of_authority` (
  `level_of_authority_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(10) NOT NULL,
  `lg_name` varchar(50) NOT NULL,
  PRIMARY KEY (`level_of_authority_id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `level_of_authority` */

insert  into `level_of_authority`(`level_of_authority_id`,`name`,`lg_name`) values 
(1,'SCAPC','Standing Cabinet Appointed Procurement Committee'),
(2,'MPC','Ministry Procurement Committee'),
(3,'DPC','Department Procurement Committee'),
(4,'PPC','Project Procurement Committee'),
(5,'RPC','Standing Cabinet Appointed Procurement Committee'),
(6,'PD','Project Director'),
(7,'CAO','Chief Accounting Officer'),
(8,'HD','Head of Department');

/*Table structure for table `level_of_authority_values` */

DROP TABLE IF EXISTS `level_of_authority_values`;

CREATE TABLE `level_of_authority_values` (
  `level_of_authority_values_id` int(11) NOT NULL AUTO_INCREMENT,
  `supplementary_document_id` int(11) NOT NULL,
  `procurement_method_id` int(11) NOT NULL,
  `level_of_authority_id` int(11) NOT NULL,
  `range_st_gosl` double NOT NULL,
  `range_en_gosl` double NOT NULL,
  `range_st_fore` double NOT NULL,
  `range_en_fore` double NOT NULL,
  PRIMARY KEY (`level_of_authority_values_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `level_of_authority_values` */

insert  into `level_of_authority_values`(`level_of_authority_values_id`,`supplementary_document_id`,`procurement_method_id`,`level_of_authority_id`,`range_st_gosl`,`range_en_gosl`,`range_st_fore`,`range_en_fore`) values 
(1,102,1,1,10,20,30,40),
(2,99,5,3,50,60,70,80),
(3,99,3,3,58,69,80,70),
(4,1899,1,2,100,200,300,400);

/*Table structure for table `procurement_members` */

DROP TABLE IF EXISTS `procurement_members`;

CREATE TABLE `procurement_members` (
  `tec_member_id` int(11) NOT NULL,
  `NIC` int(20) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `area_of_specialty` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `fax` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `procurement_members` */

insert  into `procurement_members`(`tec_member_id`,`NIC`,`designation`,`area_of_specialty`,`address`,`phone`,`fax`,`email`,`name`) values 
(0,54564,'sdasdafdsd','p[uio','uio','uio','uio','uioui','asdasa465'),
(0,8754,'sdasdafdsd','p[uio','uio','uio','uio','uioui','asdasa465');

/*Table structure for table `procurement_method` */

DROP TABLE IF EXISTS `procurement_method`;

CREATE TABLE `procurement_method` (
  `procurement_method_id` int(11) NOT NULL AUTO_INCREMENT,
  `lg_name` varchar(40) NOT NULL,
  `sm_name` varchar(10) NOT NULL,
  PRIMARY KEY (`procurement_method_id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `procurement_method` */

insert  into `procurement_method`(`procurement_method_id`,`lg_name`,`sm_name`) values 
(1,'International Competitive Bidding','ICB'),
(2,'Limited International Bidding','LIB'),
(3,'Limited National Bidding','LNB'),
(4,'National Competitive Bidding','NCB'),
(5,'National Shopping','NS'),
(6,'International Shopping','IS'),
(7,'Direct Contracting','DC'),
(8,'Force Account','FA');

/*Table structure for table `supplementary_document_versions` */

DROP TABLE IF EXISTS `supplementary_document_versions`;

CREATE TABLE `supplementary_document_versions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `supplementary_document_no` int(11) NOT NULL,
  `issue_date` date NOT NULL,
  `effective_date` date NOT NULL,
  `status` varchar(10) NOT NULL,
  `file_name` varchar(50) NOT NULL,
  `system_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

/*Data for the table `supplementary_document_versions` */

insert  into `supplementary_document_versions`(`id`,`supplementary_document_no`,`issue_date`,`effective_date`,`status`,`file_name`,`system_created`) values 
(1,1,'2020-05-06','2020-05-02','Inactive','0','2020-05-24 20:47:27'),
(2,2,'2020-05-21','2020-05-23','Inactive','0','2020-05-24 20:47:27'),
(3,56,'2020-05-06','2020-05-16','Inactive','0','2020-05-24 20:47:27'),
(4,99,'2020-05-08','2020-05-09','Inactive','0','2020-05-24 20:47:27'),
(5,100,'2020-05-01','2020-05-02','Inactive','0','2020-05-24 20:47:27'),
(6,101,'2020-05-22','2020-05-23','Inactive','0','2020-05-24 20:47:27'),
(7,102,'2020-05-02','2020-05-23','Inactive','0','2020-05-24 22:30:34'),
(8,104,'2020-05-05','2020-05-09','Inactive','0','2020-05-24 22:32:47'),
(9,106,'2020-05-06','2020-05-01','Inactive','0','2020-05-24 23:10:58'),
(10,107,'2020-05-05','2020-05-09','Inactive','0','2020-05-24 23:11:26'),
(11,108,'2020-05-06','2020-05-09','Inactive','0','2020-05-24 23:13:00'),
(12,109,'2020-05-05','2020-05-01','Inactive','0','2020-05-24 23:15:20'),
(13,120,'2020-05-01','2020-05-09','Inactive','0','2020-05-24 23:26:17'),
(14,121,'2020-05-02','2020-05-08','Inactive','17','2020-05-24 23:35:47'),
(15,122,'2020-05-07','2020-05-08','Inactive','0','2020-05-24 23:38:35'),
(16,123,'2020-05-06','2020-05-16','Inactive','b80a14ce7803589a217e125737bfd919.png','2020-05-24 23:39:31'),
(17,124,'2020-05-05','2020-05-09','Inactive','35f2f73d377fe387f974ee2fb968d27c.pdf','2020-05-25 00:25:26'),
(18,456,'2020-05-08','2020-05-02','Inactive','0dc5789dc07a9a2f3b68bc57e64e869c.png','2020-05-25 00:40:28'),
(19,156,'2020-05-04','2020-05-09','Inactive','8a422d0ea34c231631db4448c27a6bfc.pdf','2020-05-25 01:48:28'),
(20,159,'2020-05-05','2020-05-09','Inactive','d1d2f825b436a061068cf653195628fe.png','2020-05-25 01:51:43'),
(21,4787,'2020-05-05','2020-05-09','Inactive','7ef7146ac85b06570d0f950ea76557a5.png','2020-05-25 10:41:45'),
(22,5187,'2020-05-05','2020-05-02','Inactive','a292d3533af3216c262aa0b2254353d3.png','2020-05-25 10:44:28'),
(23,1899,'2020-05-13','2020-05-08','Inactive','1db6325597189bb70b8b8970278a03d0.png','2020-05-25 22:40:23'),
(24,2000,'2020-05-13','2020-05-23','Inactive','','2020-05-25 22:43:06'),
(25,2001,'2020-05-19','2020-05-23','Inactive','','2020-05-25 22:46:50'),
(26,2002,'2020-05-14','2020-05-16','Inactive','','2020-05-25 22:47:08'),
(27,2003,'2020-05-13','2020-05-23','Inactive','','2020-05-25 22:48:39'),
(28,88887,'2020-05-14','2020-05-09','Inactive','','2020-05-25 22:49:32'),
(29,54545,'2020-05-14','2020-05-06','Inactive','','2020-05-25 22:51:38'),
(30,8748778,'2020-05-18','2020-05-13','Inactive','','2020-05-25 22:54:09'),
(31,77777777,'2020-05-13','2020-05-09','Inactive','','2020-05-25 22:54:46'),
(32,2147483647,'2020-05-07','2020-05-09','Inactive','','2020-05-25 22:54:46'),
(33,555565,'2020-05-22','2020-05-23','Active','','2020-05-25 22:56:00');

/*Table structure for table `tec_members` */

DROP TABLE IF EXISTS `tec_members`;

CREATE TABLE `tec_members` (
  `tec_member_id` int(11) NOT NULL,
  `NIC` int(20) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `area_of_specialty` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `fax` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`NIC`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `tec_members` */

insert  into `tec_members`(`tec_member_id`,`NIC`,`designation`,`area_of_specialty`,`address`,`phone`,`fax`,`email`,`name`) values 
(0,123,'hjdsdfs','fsdfsd','sdffghjfgg','hjghj','ghjghfgh','fghfg','sdasdhfghfg'),
(0,125,'4648','7887987','7897','897898','78978','89788','7898788');

/*Table structure for table `tender` */

DROP TABLE IF EXISTS `tender`;

CREATE TABLE `tender` (
  `tender_id` int(11) NOT NULL AUTO_INCREMENT,
  `reference_no` varchar(40) NOT NULL,
  `effective_date_time` datetime NOT NULL,
  `expire_date_time` datetime NOT NULL,
  `pre_bid_meeting_date_time` datetime NOT NULL,
  `non_refundable_fee` double NOT NULL,
  `bid_security_amount` double NOT NULL,
  `bid_security_expire_date` date NOT NULL,
  `advertisement_file_name` varchar(50) NOT NULL,
  `system_date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`reference_no`),
  UNIQUE KEY `tender_id` (`tender_id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

/*Data for the table `tender` */

insert  into `tender`(`tender_id`,`reference_no`,`effective_date_time`,`expire_date_time`,`pre_bid_meeting_date_time`,`non_refundable_fee`,`bid_security_amount`,`bid_security_expire_date`,`advertisement_file_name`,`system_date_time`) values 
(6,'MCUDP/0001','2020-07-04 00:07:00','2020-06-19 16:54:00','2020-07-25 00:00:00',5454,800,'2020-11-27','459e4309da60a55978b0d89f536b6aa2.png','2020-06-17 18:03:17'),
(7,'MCUDP/0002','2020-06-10 00:00:00','2020-06-17 00:00:00','2020-06-17 00:00:00',10000,0,'0000-00-00','44.jpg','2020-06-17 12:03:55'),
(8,'MCUDP/0003','2020-06-10 00:00:00','2020-06-17 00:00:00','2020-06-17 00:00:00',454,0,'0000-00-00','44.jpg','2020-06-17 16:35:24'),
(9,'123','2020-06-18 00:06:00','2020-06-25 23:06:00','2020-06-17 00:00:00',800,1050,'2020-06-25','7b6d8ef4595d09cbd3fa635010387ab3.jpg','2020-06-17 22:56:57'),
(10,'12312','2020-06-18 00:06:00','2020-06-25 23:06:00','2020-06-17 00:00:00',800,1050,'2020-06-25','7b6d8ef4595d09cbd3fa635010387ab3.jpg','2020-06-17 22:56:57'),
(11,'22321','2020-06-18 00:06:00','2020-06-25 23:06:00','2020-06-17 00:00:00',800,1050,'2020-06-25','7b6d8ef4595d09cbd3fa635010387ab3.jpg','2020-06-17 22:56:57'),
(12,'12312312','2020-06-18 00:06:00','2020-06-25 23:06:00','2020-06-17 00:00:00',800,1050,'2020-06-25','7b6d8ef4595d09cbd3fa635010387ab3.jpg','2020-06-17 22:56:57'),
(13,'1232175','2020-06-10 00:00:00','2020-06-17 00:00:00','2020-06-17 00:00:00',454,0,'0000-00-00','44.jpg','2020-06-17 16:35:24'),
(14,'12385654+6','2020-06-10 00:00:00','2020-06-17 00:00:00','2020-06-17 00:00:00',454,0,'0000-00-00','44.jpg','2020-06-17 16:35:24'),
(15,'12321','2020-06-18 00:06:00','2020-06-25 23:06:00','2020-06-17 00:00:00',800,1050,'2020-06-25','7b6d8ef4595d09cbd3fa635010387ab3.jpg','2020-06-17 22:56:57'),
(16,'21312','2020-06-10 00:00:00','2020-06-17 00:00:00','2020-06-17 00:00:00',10000,0,'0000-00-00','44.jpg','2020-06-17 12:03:55'),
(17,'32','2020-07-04 00:07:00','2020-06-19 16:54:00','2020-07-25 00:00:00',5454,800,'2020-11-27','459e4309da60a55978b0d89f536b6aa2.png','2020-06-17 18:03:17');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_group_id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(500) NOT NULL,
  `firstname` varchar(40) NOT NULL,
  `lastname` varchar(40) NOT NULL,
  `tel_number` varchar(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `image` varchar(300) NOT NULL,
  `ip` varchar(40) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `date_added` date NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

/*Data for the table `users` */

insert  into `users`(`user_id`,`user_group_id`,`username`,`password`,`firstname`,`lastname`,`tel_number`,`email`,`image`,`ip`,`status`,`date_added`) values 
(3,1,'admin','x1Et2h/3u6O+7n9WQq60T2K2i6/bMw56k2Qqi/53CjKtLkgjBaJACChQulACYb2gQ5uXkAwGB4wsyXBUeEqH2Q==','panduka','darshana','0757122468','pandukadarshana@gmail.com','3b0cc0932c1a095f302000ce2d4d1ad7.JPG','::1',1,'2020-05-30'),
(4,1,'t','zK27HnekUm51tJ6WjGJPQHREPFZTfcqNNaFbV2WCtQ4i7sIMBH8FShCnfhsAINRUSMpqjcCvxG6g7vsVzvuHpA==','panduka','darshana','0757122468','pandukadarshana@gmail.com','b1d42501b4357f810145b47efbf728bd.jpg','::1',1,'2020-05-31'),
(5,1,'namal','202cb962ac59075b964b07152d234b70','namal','liyanage','0757122468','pandukadarshana@gmail.com','b1d42501b4357f810145b47efbf728bd.jpg','::1',1,'2020-05-31'),
(6,2,'namal123','77AiYudt+sqx8xRI1KC7J8S+Fmsp16SUgsUlXoMOCWQ6KVtYRC2jBtVOYzutzAyKQNWK5Q3XVlVL47vlmnsdEw==','asdasdas','','hiojh','uhuihy','','::1',1,'2020-07-26'),
(7,3,'aaaa','dhtJbyeo5Y69ygYQ7VdA07YEBvL7go47NCHvHTRmqXE6QvcWp8AbRrH4nlegUHlrVZ6XB1v6tDqAuJ/VN2Lu/A==','asdasd','','asdas','sadas','','::1',1,'2020-07-26'),
(8,3,'qqqq','/gQDYrPxxufsVy2zUpDmzISTUFJ14jCnLrnjmpfYcoQfkjs/GFvTsEIxk5fuazdbSvaLpBSSeNM/+1ixmjA46g==','asdasda','','asd','asda','','::1',1,'2020-07-26'),
(9,3,'eeee','LXci4ZAhaRKiwjV1MUW89drBtjeX+fvnBhiDqr3P67l/8aAmTnvAJvP4e9AuDAgrX4Xwdiq6dFSPM1QDN5f5VA==','asdas','','asd','asd','','::1',1,'2020-07-26'),
(10,3,'rrr','yujcY0uQasAf0RKZA6dJjzWGKpGHKCOCzRHVNzu/NZ7GkCcOvAeDh+zk1srKKhwmDXMjq3cUfnkDFThYwiQnsA==','zsadas','','asd','asd','','127.0.0.1',1,'2020-07-26'),
(11,3,'qqqqq','RA80aBxunKgT6bm9SVtw1ePiqhQtVdkRlpUenwst0wrCbMT2NVMkBloNdpYhcIvRPJ4yVA4MzrZB6+K4Kmj+Tw==','zxfsdf','','sdf','sdf','','127.0.0.1',1,'2020-07-26'),
(12,3,'uioui','DVYKznsolVu5Xia61QrYZzgNk+m5MTRMj3luJmcbvrO+KW611ulS7pE8hlqPyARuTzlqqPkTiHo/riGOVLVw3Q==','uiopop','','dsfsdf','iuo','','127.0.0.1',1,'2020-07-26'),
(13,3,'123456','IvVvVkaWLxE1fiJb7UkoNCa6ZTINU2EAVR2qBYIpj5AEowCVjJm1UDNZDOdCUKs0t0nS2VR/M4w/qEdEtESmcQ==','ghjghjg','','jghj','ghjgh','','127.0.0.1',1,'2020-07-26'),
(14,3,'4444','jvXbMV1j5Ca0Hj0l3ux8yIY2XSTfvZtdlt/Bcd7cBZsSfrBf7vK7zWDc202CSc6GqB1BYz0XcbNOMGFXXe8Izg==','sdasdhfghfg','','hjghj','fghfg','','127.0.0.1',1,'2020-07-26'),
(15,3,'4444444444try','o7aGfnGw7hTyrF4PwjEetEJEM+1R4PJhO3SThIuSQFaKunCSUNpMGNhTJTLu1JFz+HbZV0uYV/X2FLvmHZHz6w==','asdasa465','','uio','uioui','','127.0.0.1',1,'2020-07-26');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
