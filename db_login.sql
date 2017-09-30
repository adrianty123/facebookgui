/*
MySQL Data Transfer
Source Host: localhost
Source Database: db_login
Target Host: localhost
Target Database: db_login
Date: 9/14/2016 2:37:55 PM
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for tbl_msg
-- ----------------------------
DROP TABLE IF EXISTS `tbl_msg`;
CREATE TABLE `tbl_msg` (
  `msg` varchar(100) default NULL,
  `msgfrom` varchar(100) default NULL,
  `msgto` varchar(100) default NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for tbl_users
-- ----------------------------
DROP TABLE IF EXISTS `tbl_users`;
CREATE TABLE `tbl_users` (
  `uname` varchar(50) default NULL,
  `pword` varchar(50) default NULL,
  `fullname` varchar(50) default NULL,
  `birthday` varchar(50) default NULL,
  `gender` varchar(50) default NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records 
-- ----------------------------
INSERT INTO `tbl_msg` VALUES (' xvb', ' ', 'qwer');
INSERT INTO `tbl_users` VALUES ('admin', 'admin', 'Administrator', 'N/A', 'N/A');
INSERT INTO `tbl_users` VALUES ('user', 'user', 'Client', 'N/A', 'N/A');
