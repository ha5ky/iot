/*
Navicat MySQL Data Transfer

Source Server         : 10.99.19.130
Source Server Version : 50553
Source Host           : localhost:3306
Source Database       : iot

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2018-09-26 20:57:06
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `iot_de`
-- ----------------------------
DROP TABLE IF EXISTS `iot_de`;
CREATE TABLE `iot_de` (
  `de_id` int(5) NOT NULL AUTO_INCREMENT,
  `de_name` varchar(20) NOT NULL,
  `de_pic` varchar(255) NOT NULL,
  `de_apikey` varchar(8) NOT NULL,
  `de_open` int(2) NOT NULL,
  `de_online2offline` int(2) NOT NULL,
  `de_offtime` int(10) NOT NULL,
  `de_createtime` int(10) NOT NULL,
  `de_ontime` int(10) NOT NULL,
  `de_qrcode` varchar(255) DEFAULT NULL,
  `de_pwd` varchar(20) NOT NULL,
  `de_intro` varchar(50) DEFAULT NULL,
  `user_id` int(3) NOT NULL,
  PRIMARY KEY (`de_id`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of iot_de
-- ----------------------------
INSERT INTO `iot_de` VALUES ('1', '1111', 'C:\\phpStudy\\PHPTutorial\\WWW\\iot\\public\\upload20180626\\9e53782f9b9497a1ebf2d385d4ff03a9.PNG', '', '0', '0', '0', '1529988682', '0', null, '', '11111', '0');
INSERT INTO `iot_de` VALUES ('2', '1111', 'C:\\phpStudy\\PHPTutorial\\WWW\\iot\\public\\upload20180626\\f0e7e0c58c1a0f042881181eaa72ec15.PNG', '', '0', '0', '0', '1529988846', '0', null, '', '11111', '0');
INSERT INTO `iot_de` VALUES ('3', '1111', 'C:\\phpStudy\\PHPTutorial\\WWW\\iot\\public\\upload20180626\\1f290c653efa98d06afce98b91ec3b6b.PNG', '', '0', '0', '0', '1529989439', '0', null, '', '11111', '0');
INSERT INTO `iot_de` VALUES ('4', '123', 'C:\\phpStudy\\PHPTutorial\\WWW\\iot\\public\\upload20180626\\250978f34dfb464f0db2f791b19f21b3.PNG', 'UWQETRYI', '1', '0', '1529990295', '1529990295', '1529990295', null, '', '123', '0');
INSERT INTO `iot_de` VALUES ('5', '蓝牙', 'C:\\phpStudy\\PHPTutorial\\WWW\\iot\\public\\upload20180626\\16dd320a5adc902c67e3bb4076b2fdfb.PNG', 'WUEQITRY', '1', '0', '1529994344', '1529994344', '1529994344', null, '', '123123', '0');
INSERT INTO `iot_de` VALUES ('6', 'asdf', 'C:\\phpStudy\\PHPTutorial\\WWW\\iot\\public\\upload20180626\\c86146aa2c4a54b5f20c49e668b8db24.PNG', 'QYTIUERW', '1', '0', '1530007127', '1530007127', '1530007127', null, '', 'asdf', '0');
INSERT INTO `iot_de` VALUES ('7', '阿斯蒂芬三方', 'C:\\phpStudy\\PHPTutorial\\WWW\\iot\\public\\upload\\pic20180626\\e50396b4ee16dcadb2dda4cadbc078b2.png', 'EWTUQIYR', '1', '0', '1530007180', '1530007180', '1530007180', null, '', 'asd发斯蒂芬', '0');
INSERT INTO `iot_de` VALUES ('8', '阿萨德饭店分', 'C:\\phpStudy\\PHPTutorial\\WWW\\iot\\public\\upload\\pic20180626\\99607eb96b6cec12e95a21e19f0194cc.png', 'YTQRWEIU', '1', '0', '1530007236', '1530007236', '1530007236', null, '', '撒打发斯蒂芬', '0');
INSERT INTO `iot_de` VALUES ('9', '撒打发斯蒂芬', 'C:\\phpStudy\\PHPTutorial\\WWW\\iot\\public\\upload\\pic20180626\\262d7100a60e26b6bcd2239905551679.png', 'WQEUTYRI', '1', '0', '1530007387', '1530007387', '1530007387', null, '', '撒打发斯蒂芬', '0');
INSERT INTO `iot_de` VALUES ('10', '爱上股份的风格', 'C:\\phpStudy\\PHPTutorial\\WWW\\iot\\public\\upload\\pic20180626\\5e8248c6bf46612cacf6ea36fb7771bb.png', 'IREUWTYQ', '1', '0', '1530007465', '1530007465', '1530007465', null, '', '水电费过水电费个', '0');
INSERT INTO `iot_de` VALUES ('11', '撒打发斯蒂芬', '', 'IQUEYWRT', '1', '0', '1530007853', '1530007853', '1530007853', null, '', '撒打发斯蒂芬', '12');
INSERT INTO `iot_de` VALUES ('12', '撒打发斯蒂芬', '', 'YQRIEWUT', '1', '0', '1530008043', '1530008043', '1530008043', null, '', '撒打发斯蒂芬', '12');
INSERT INTO `iot_de` VALUES ('13', '1', 'C:\\phpStudy\\PHPTutorial\\WWW\\iot\\public\\upload/thumb/thumb76.png', 'WEYQRTIU', '1', '0', '1530008176', '1530008176', '1530008176', null, '', '1', '12');
INSERT INTO `iot_de` VALUES ('14', 'asdf', '/public\\upload/thumb/thumb66.png', 'IYTWEQRU', '1', '0', '1530009991', '1530009991', '1530009991', null, '', 'asdf', '12');
INSERT INTO `iot_de` VALUES ('15', '微软', '/public/upload/thumb/thumb86.png', 'UQIEWYRT', '1', '0', '1530010064', '1530010064', '1530010064', null, '', '问', '12');
INSERT INTO `iot_de` VALUES ('16', '去玩儿', '/upload/thumb/thumb65.png', 'UITREQWY', '1', '0', '1530010099', '1530010099', '1530010099', null, '', '去玩儿', '12');
INSERT INTO `iot_de` VALUES ('17', 'asdf', '/upload/thumb/thumb94.png', 'WQUYRITE', '1', '0', '1530010647', '1530010647', '1530010647', null, '', 'asdf', '12');
INSERT INTO `iot_de` VALUES ('18', '444', '/upload/thumb/thumb73.png', '8569wq70', '1', '0', '1530011147', '1530011147', '1530011147', null, '', '444', '12');
INSERT INTO `iot_de` VALUES ('19', '单片机', '/upload/thumb/thumb98.png', '65q078w9', '1', '0', '1530147863', '1530147863', '1530147863', null, '', '无', '12');
INSERT INTO `iot_de` VALUES ('20', '1111', '', '', '0', '0', '0', '0', '0', null, '', null, '1');
INSERT INTO `iot_de` VALUES ('21', '1111', '', '', '0', '0', '0', '0', '0', null, '', null, '12');
INSERT INTO `iot_de` VALUES ('22', '1111', '', '', '0', '0', '0', '0', '0', null, '', null, '1');
INSERT INTO `iot_de` VALUES ('23', '1111', '', '', '0', '0', '0', '0', '0', null, '', null, '12');
INSERT INTO `iot_de` VALUES ('24', '1111', '', '', '0', '0', '0', '0', '0', null, '', null, '12');
INSERT INTO `iot_de` VALUES ('25', '1111', '', '', '0', '0', '0', '0', '0', null, '', null, '12');
INSERT INTO `iot_de` VALUES ('26', '1111', '', '', '0', '0', '0', '0', '0', null, '', null, '12');
INSERT INTO `iot_de` VALUES ('27', '1111', '', '', '0', '0', '0', '0', '0', null, '', null, '12');

-- ----------------------------
-- Table structure for `iot_user`
-- ----------------------------
DROP TABLE IF EXISTS `iot_user`;
CREATE TABLE `iot_user` (
  `user_id` int(3) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(10) NOT NULL,
  `user_tel` int(11) NOT NULL,
  `user_createtime` int(10) NOT NULL,
  `user_pwd` varchar(255) NOT NULL,
  `user_logintime` int(10) NOT NULL,
  `user_account` varchar(10) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of iot_user
-- ----------------------------
INSERT INTO `iot_user` VALUES ('1', '123', '0', '0', '123', '1529761382', '');
INSERT INTO `iot_user` VALUES ('2', '111', '0', '0', '111', '1529767259', '');
INSERT INTO `iot_user` VALUES ('3', '111', '0', '0', '', '1529767264', '');
INSERT INTO `iot_user` VALUES ('4', '111', '0', '1529767291', '', '0', '');
INSERT INTO `iot_user` VALUES ('5', '111', '0', '1529767307', '11111', '0', '111');
INSERT INTO `iot_user` VALUES ('6', '111', '111', '1529767464', '`12343', '0', '111');
INSERT INTO `iot_user` VALUES ('7', '111', '111', '1529767680', '221312312', '0', '111');
INSERT INTO `iot_user` VALUES ('8', '111', '111', '1529767740', '234234', '0', '111');
INSERT INTO `iot_user` VALUES ('9', '张纯', '123', '1529767767', '123123', '0', '123');
INSERT INTO `iot_user` VALUES ('10', '', '0', '1529769793', '', '0', '');
INSERT INTO `iot_user` VALUES ('11', '', '0', '1529769945', '', '0', '');
INSERT INTO `iot_user` VALUES ('12', '张纯', '2147483647', '1529770037', '123', '0', '150409013');
INSERT INTO `iot_user` VALUES ('13', '111', '2147483647', '1531394140', '123456', '0', '123456');
