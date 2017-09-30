/*
MySQL Data Transfer
Source Host: localhost
Source Database: db_login
Target Host: localhost
Target Database: db_login
Date: 8/14/2016 9:53:30 PM
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for tbl_msg
-- ----------------------------
CREATE TABLE `tbl_msg` (
  `msg` varchar(100) DEFAULT NULL,
  `msgfrom` varchar(100) DEFAULT NULL,
  `msgto` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records 
-- ----------------------------
INSERT INTO `tbl_msg` VALUES (' xvb', ' ', 'qwer');
