/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50547
Source Host           : localhost:3306
Source Database       : tp_zfhc

Target Server Type    : MYSQL
Target Server Version : 50547
File Encoding         : 65001

Date: 2017-07-02 13:23:20
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for zfhc_access
-- ----------------------------
DROP TABLE IF EXISTS `zfhc_access`;
CREATE TABLE `zfhc_access` (
  `uid` mediumint(8) unsigned NOT NULL COMMENT '用户id',
  `group_id` mediumint(8) unsigned NOT NULL COMMENT '用户组id',
  UNIQUE KEY `uid_group_id` (`uid`,`group_id`),
  KEY `uid` (`uid`),
  KEY `group_id` (`group_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of zfhc_access
-- ----------------------------

-- ----------------------------
-- Table structure for zfhc_auth_group
-- ----------------------------
DROP TABLE IF EXISTS `zfhc_auth_group`;
CREATE TABLE `zfhc_auth_group` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `title` char(100) NOT NULL DEFAULT '',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `rules` char(80) NOT NULL DEFAULT '',
  `describe` char(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of zfhc_auth_group
-- ----------------------------
INSERT INTO `zfhc_auth_group` VALUES ('1', '超级管理员', '1', '', '拥有全部权限');
INSERT INTO `zfhc_auth_group` VALUES ('2', '网站管理员', '1', '11,12,13,14,2,1,7,9,15,16,17', '拥有相对多的权限');
INSERT INTO `zfhc_auth_group` VALUES ('3', '发布人员', '1', '2,15,16,17', '拥有发布、修改文章的权限');
INSERT INTO `zfhc_auth_group` VALUES ('4', '编辑', '1', '11,12,13,14,2', '拥有文章模块的所有权限');

-- ----------------------------
-- Table structure for zfhc_auth_group_access
-- ----------------------------
DROP TABLE IF EXISTS `zfhc_auth_group_access`;
CREATE TABLE `zfhc_auth_group_access` (
  `uid` mediumint(8) unsigned NOT NULL,
  `group_id` mediumint(8) unsigned NOT NULL,
  UNIQUE KEY `uid_group_id` (`uid`,`group_id`),
  KEY `uid` (`uid`),
  KEY `group_id` (`group_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of zfhc_auth_group_access
-- ----------------------------
INSERT INTO `zfhc_auth_group_access` VALUES ('1', '1');
INSERT INTO `zfhc_auth_group_access` VALUES ('2', '2');
INSERT INTO `zfhc_auth_group_access` VALUES ('3', '3');
INSERT INTO `zfhc_auth_group_access` VALUES ('4', '4');
INSERT INTO `zfhc_auth_group_access` VALUES ('5', '5');
INSERT INTO `zfhc_auth_group_access` VALUES ('6', '6');
INSERT INTO `zfhc_auth_group_access` VALUES ('7', '7');
INSERT INTO `zfhc_auth_group_access` VALUES ('8', '0');

-- ----------------------------
-- Table structure for zfhc_auth_rule
-- ----------------------------
DROP TABLE IF EXISTS `zfhc_auth_rule`;
CREATE TABLE `zfhc_auth_rule` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` char(80) NOT NULL DEFAULT '',
  `title` char(20) NOT NULL DEFAULT '',
  `type` tinyint(1) NOT NULL DEFAULT '1',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `condition` char(100) NOT NULL DEFAULT '',
  `mid` tinyint(3) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of zfhc_auth_rule
-- ----------------------------
INSERT INTO `zfhc_auth_rule` VALUES ('1', 'Admin/Auth/accessList', '权限列表', '1', '1', '', '3');
INSERT INTO `zfhc_auth_rule` VALUES ('2', 'Admin/Index/index', '后台首页', '1', '1', '', '2');
INSERT INTO `zfhc_auth_rule` VALUES ('3', 'Admin/Auth/accessAdd', '添加权限页面', '1', '1', '', '3');
INSERT INTO `zfhc_auth_rule` VALUES ('4', 'Admin/Auth/groupList', '角色管理页面', '1', '1', '', '3');
INSERT INTO `zfhc_auth_rule` VALUES ('5', 'Admin/Auth/addHandle', '添加权限', '1', '1', '', '3');
INSERT INTO `zfhc_auth_rule` VALUES ('6', 'Admin/Auth/groupAddHandle', '添加角色', '1', '1', '', '3');
INSERT INTO `zfhc_auth_rule` VALUES ('7', 'Admin/Auth/accessSelect', '角色授权页面', '1', '1', '', '3');
INSERT INTO `zfhc_auth_rule` VALUES ('8', 'Admin/Auth/accessSelectHandle', '更新角色权限', '1', '1', '', '3');
INSERT INTO `zfhc_auth_rule` VALUES ('9', 'Admin/Auth/groupMember', '角色组成员列表', '1', '1', '', '3');
INSERT INTO `zfhc_auth_rule` VALUES ('10', 'Admin/Auth/accessDelHandle', '删除权限', '1', '1', '', '3');
INSERT INTO `zfhc_auth_rule` VALUES ('11', 'Admin/Member/memberList', '会员列表', '1', '1', '', '1');
INSERT INTO `zfhc_auth_rule` VALUES ('12', 'Admin/Member/memberAdd', '添加会员页面', '1', '1', '', '1');
INSERT INTO `zfhc_auth_rule` VALUES ('13', 'Admin/Member/addHandle', '添加会员', '1', '1', '', '1');
INSERT INTO `zfhc_auth_rule` VALUES ('14', 'Admin/Member/deleteHandle', '删除会员', '1', '1', '', '1');

-- ----------------------------
-- Table structure for zfhc_dhl
-- ----------------------------
DROP TABLE IF EXISTS `zfhc_dhl`;
CREATE TABLE `zfhc_dhl` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `dhl` char(64) NOT NULL,
  `block` enum('1','0') CHARACTER SET utf8 NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of zfhc_dhl
-- ----------------------------
INSERT INTO `zfhc_dhl` VALUES ('1', '首页', '1');
INSERT INTO `zfhc_dhl` VALUES ('2', '展馆建筑', '1');
INSERT INTO `zfhc_dhl` VALUES ('3', '房产装修', '1');
INSERT INTO `zfhc_dhl` VALUES ('4', '酒店资讯', '1');
INSERT INTO `zfhc_dhl` VALUES ('5', '汽车资讯', '1');
INSERT INTO `zfhc_dhl` VALUES ('6', '新闻动态', '1');

-- ----------------------------
-- Table structure for zfhc_group
-- ----------------------------
DROP TABLE IF EXISTS `zfhc_group`;
CREATE TABLE `zfhc_group` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键',
  `title` char(100) NOT NULL DEFAULT '' COMMENT '用户组中文名称',
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '用户组状态 0-禁用 1-正常',
  `rules` char(80) NOT NULL DEFAULT '' COMMENT '用户组拥有的规则id',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of zfhc_group
-- ----------------------------

-- ----------------------------
-- Table structure for zfhc_members
-- ----------------------------
DROP TABLE IF EXISTS `zfhc_members`;
CREATE TABLE `zfhc_members` (
  `uid` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL DEFAULT '',
  `password` char(32) NOT NULL DEFAULT '',
  `score` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of zfhc_members
-- ----------------------------
INSERT INTO `zfhc_members` VALUES ('1', 'admin', '21232f297a57a5a743894a0e4a801fc3', '500');

-- ----------------------------
-- Table structure for zfhc_modules
-- ----------------------------
DROP TABLE IF EXISTS `zfhc_modules`;
CREATE TABLE `zfhc_modules` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `moduleName` varchar(20) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of zfhc_modules
-- ----------------------------
INSERT INTO `zfhc_modules` VALUES ('1', '会员管理');
INSERT INTO `zfhc_modules` VALUES ('2', '后台管理');
INSERT INTO `zfhc_modules` VALUES ('3', '权限管理');
INSERT INTO `zfhc_modules` VALUES ('4', '其他');

-- ----------------------------
-- Table structure for zfhc_rule
-- ----------------------------
DROP TABLE IF EXISTS `zfhc_rule`;
CREATE TABLE `zfhc_rule` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键',
  `name` char(80) NOT NULL DEFAULT '' COMMENT '规则唯一标识',
  `title` char(20) NOT NULL DEFAULT '' COMMENT '规则中文名称',
  `type` tinyint(1) NOT NULL DEFAULT '1',
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '规则状态 0-禁用 1-正常',
  `condition` char(100) NOT NULL DEFAULT '' COMMENT '规则表达式，为空表示存在就验证，不为空表示按照条件验证',
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of zfhc_rule
-- ----------------------------

-- ----------------------------
-- Table structure for zfhc_users
-- ----------------------------
DROP TABLE IF EXISTS `zfhc_users`;
CREATE TABLE `zfhc_users` (
  `userid` mediumint(8) unsigned NOT NULL AUTO_INCREMENT COMMENT '用户id',
  `companyid` mediumint(8) unsigned NOT NULL COMMENT '公司id',
  `pid` mediumint(8) NOT NULL COMMENT '父id',
  `username` char(20) NOT NULL DEFAULT '' COMMENT '用户名',
  `password` char(32) NOT NULL DEFAULT '' COMMENT '密码',
  `nickname` char(20) NOT NULL DEFAULT '' COMMENT '昵称',
  `regdate` int(10) unsigned NOT NULL COMMENT '注册时间',
  `lastdate` int(10) unsigned NOT NULL COMMENT '最后一次登录时间',
  `regip` char(15) NOT NULL DEFAULT '' COMMENT '注册ip',
  `lastip` char(15) NOT NULL DEFAULT '' COMMENT '最后一次登录ip',
  `loginnum` smallint(5) unsigned NOT NULL DEFAULT '0' COMMENT '登录次数',
  `email` char(32) NOT NULL DEFAULT '' COMMENT '邮箱',
  `mobile` char(11) NOT NULL DEFAULT '' COMMENT '手机号码',
  `islock` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '是否锁定',
  `vip` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '是否会员',
  `overduedate` int(10) unsigned NOT NULL COMMENT '账户过期时间',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '状态-用于软删除',
  PRIMARY KEY (`userid`),
  UNIQUE KEY `username` (`username`) USING BTREE,
  KEY `email` (`email`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of zfhc_users
-- ----------------------------
INSERT INTO `zfhc_users` VALUES ('5', '5', '0', 'admin', '25d55ad283aa400af464c76d713c07ad', 'admin', '1496740735', '1496740752', '0.0.0.0', '0.0.0.0', '1', '185596269@qq.com', '13400276902', '0', '0', '0', '0');
