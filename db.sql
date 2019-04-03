-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- โฮสต์: 127.0.0.1
-- เวลาในการสร้าง: 03 เม.ย. 2019  04:22น.
-- เวอร์ชั่นของเซิร์ฟเวอร์: 5.5.54-0ubuntu0.14.04.1
-- รุ่นของ PHP: 5.5.9-1ubuntu4.21

SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

--
-- ฐานข้อมูล: `membership`
--
CREATE DATABASE IF NOT EXISTS `membership` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `membership`;

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `business`
--
-- สร้างเมื่อ: 03 เม.ย. 2019  04:15น.
--

DROP TABLE IF EXISTS `business`;
CREATE TABLE IF NOT EXISTS `business` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(25) NOT NULL,
  `name` varchar(50) NOT NULL,
  `detail` varchar(100) NOT NULL,
  `type21` varchar(100) NOT NULL,
  `type23` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `tel` varchar(10) NOT NULL,
  `fax` varchar(10) DEFAULT NULL,
  `website` varchar(100) DEFAULT NULL,
  `map_lat` float(10,6) DEFAULT NULL,
  `map_lng` float(10,6) DEFAULT NULL,
  PRIMARY KEY (`name`),
  KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Truncate table before insert `business`
--

TRUNCATE TABLE `business`;
--
-- dump ตาราง `business`
--

INSERT DELAYED IGNORE INTO `business` (`id`, `username`, `name`, `detail`, `type21`, `type23`, `address`, `tel`, `fax`, `website`, `map_lat`, `map_lng`) VALUES
(8, 'qwrqwr', '124', '124', '124', '', '124', '124', '124', '124', NULL, NULL),
(1, 'admin', 'KMUTNB', 'University of smart man', 'การผลิต', 'AUTOMOTIVES, MOTORCYCLES, BICYCLES & PARTS', '88 natakwan rayong 20000', '038912347', '038912344', 'www.kmutnb.ac.th', 12.716461, 101.144531),
(10, 'admin', 'tessss', 'tessss', 'การทำเหมืองแร่ และเหมืองหิน', 'AUTOMOTIVES, MOTORCYCLES, BICYCLES & PARTS', 'tessss', 'tessss', 'tessss', 'tessss', 13.760624, 100.510635),
(4, 'test', 'test1', 'test', 'การผลิต', 'COMPUTERS & ACCESSORIES', 'test', 'test', 'test', 'test', 12.750134, 101.159264);

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `member`
--
-- สร้างเมื่อ: 03 เม.ย. 2019  04:15น.
--

DROP TABLE IF EXISTS `member`;
CREATE TABLE IF NOT EXISTS `member` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `title` varchar(6) NOT NULL,
  `name` varchar(30) NOT NULL,
  `surname` varchar(30) NOT NULL,
  `nickname` varchar(10) NOT NULL,
  `birthday` date NOT NULL,
  `tel` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `facebook` varchar(100) NOT NULL,
  `line` varchar(30) NOT NULL,
  `yecmember` varchar(10) DEFAULT NULL,
  `regis_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `end_date` timestamp NULL DEFAULT NULL,
  `permission` int(11) NOT NULL DEFAULT '1',
  `address` text NOT NULL,
  PRIMARY KEY (`username`),
  UNIQUE KEY `email` (`email`),
  KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- Truncate table before insert `member`
--

TRUNCATE TABLE `member`;
--
-- dump ตาราง `member`
--

INSERT DELAYED IGNORE INTO `member` (`id`, `username`, `password`, `title`, `name`, `surname`, `nickname`, `birthday`, `tel`, `email`, `facebook`, `line`, `yecmember`, `regis_date`, `end_date`, `permission`, `address`) VALUES
(5, '1111', '1111', 'นาง', '2214', '124', '124', '2017-05-08', '222', '222@9979779', 'www.facebook.com/', '2rf2r', NULL, '2017-05-28 14:20:47', NULL, 1, ''),
(10, '12344', '12344', 'นาง', '12344', '12344', '12344', '2017-06-19', '12344', '12344@44', 'www.facebook.com/', '12344', NULL, '2017-06-02 05:14:58', NULL, 1, ''),
(9, '123456789', '123456789', 'นาย', '123456789', '123456789', '123', '2017-06-21', '123456789', '123456@879789', 'www.facebook.com/asf', 'asf', NULL, '2017-06-02 05:14:23', NULL, 1, ''),
(4, '555', '555', 'นาย', '555', '555', '555', '2017-05-23', '555', '555@555', 'www.facebook.com/', '555', NULL, '2017-05-28 14:19:55', NULL, 1, ''),
(6, 'aaa', 'aaaa', 'นาย', 'aa', 'aa', 'aa', '2017-05-17', '0123456789', '01@ffWS', 'www.facebook.com/', '0885555', NULL, '2017-05-29 08:49:10', NULL, 1, ''),
(7, 'aabb', 'aabb', 'นาย', 'aabb', 'aabb', 'aabb', '2017-05-30', '08524', '148@gga', 'www.facebook.com/aabb', '1848G', '55744', '2017-05-30 13:00:59', '2018-06-06 18:54:39', 1, ''),
(2, 'admin', 'admin', 'นาย', 'ชนะชัย', 'สัพโส', 'ไปรท์', '2017-05-10', '0892456916', 'innocent-pice@hotmail.com', 'www.facebook.com/pipecnc', 'pipecnc555', NULL, '2017-05-28 13:58:30', NULL, 9, '100/86 ม.2 ต.บ้านสวน อ.เมือง จ.ชลบุรี 20000'),
(3, 'asdf', 'asdf', 'นาย', 'asdf', 'asdf', 'asdf', '2017-05-17', '0892456916', 'email@emailk', 'www.facebook.com/fff', 'FAC88', '9944', '2017-05-28 14:16:44', '2018-06-06 22:25:57', 1, ''),
(8, 'qwrqwr', 'qwer', 'นาย', 'qwer', 'qwer', 'qwer', '2017-06-21', '1234', 'qwer@qrwqwr', 'www.facebook.com/123', '124214', '124', '2017-06-01 04:16:27', NULL, 1, ''),
(11, 'sss', 'sss', 'นาย', 'sss', 'sss', 'sss', '2017-06-20', '08945648', 'ijanwf@fffaz', 'www.facebook.com/', 'window', '5714293', '2017-06-29 03:41:51', '2018-07-15 05:35:00', 1, '99/99 chonburi rayong 20000'),
(13, 'tesss', 'tesss', 'นาย', 'tesss', 'tesss', 'tesss', '1995-09-19', 'tesss', 'tesss@safsaf', 'www.facebook.com/tesss', 'tesss', NULL, '2017-08-18 05:22:32', NULL, 1, 'tesss'),
(1, 'test', 'test', 'นาย', 'test', 'test', 'test', '1951-05-28', 'test', 'test@test', 'www.facebook.com/test', 'tester', NULL, '2017-05-28 13:38:09', '2018-08-05 21:13:20', 1, ''),
(12, 'tttt', 'ttttt', 'นาย', 'tttt', 'tttt', 'ttt', '2017-07-27', '0892456489', 'afwaf2wqaf@fggwag.com', 'www.facebook.com/asfsaf', 'asfsaf', NULL, '2017-07-24 10:02:19', '2018-08-05 21:38:24', 1, 'ttt');
SET FOREIGN_KEY_CHECKS=1;
COMMIT;
