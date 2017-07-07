/*
Navicat MySQL Data Transfer

Source Server         : admin
Source Server Version : 50524
Source Host           : localhost:3306
Source Database       : admin

Target Server Type    : MYSQL
Target Server Version : 50524
File Encoding         : 65001

Date: 2017-07-05 15:07:02
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `admin`
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL,
  `time` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of admin
-- ----------------------------
INSERT INTO `admin` VALUES ('1', 'aaa', '111', '2017-6-11');
INSERT INTO `admin` VALUES ('2', 'sss', '222', '2017-6-11');
INSERT INTO `admin` VALUES ('26', 'ddd', '333', '');

-- ----------------------------
-- Table structure for `article`
-- ----------------------------
DROP TABLE IF EXISTS `article`;
CREATE TABLE `article` (
  `article_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `article_title` varchar(255) NOT NULL,
  `article_image` varchar(255) NOT NULL,
  PRIMARY KEY (`article_id`)
) ENGINE=MyISAM AUTO_INCREMENT=50 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of article
-- ----------------------------
INSERT INTO `article` VALUES ('42', '中江挂面', '/thinkphp_5.0.5_full/public/upload/20170704\\f542b594d8fde772c31eb8f8c9da21b5.gif');
INSERT INTO `article` VALUES ('43', '中江柚', '/thinkphp_5.0.5_full/public/upload/20170704\\dfe9783ad3069cc1b83f22af81621380.gif');
INSERT INTO `article` VALUES ('44', '中江白芍', '/thinkphp_5.0.5_full/public/upload/20170704\\ccf0209e1ecc078b2a95db6446ce1049.gif');
INSERT INTO `article` VALUES ('45', '中江丹参', '/thinkphp_5.0.5_full/public/upload/20170704\\33ee59b2c353b3ab4b6dcac051f1a2bf.gif');
INSERT INTO `article` VALUES ('46', '中江竹编', '/thinkphp_5.0.5_full/public/upload/20170704\\390e41fc0672c39d5f4603b181e60f45.gif');
INSERT INTO `article` VALUES ('47', '中江八宝油糕', '/thinkphp_5.0.5_full/public/upload/20170704\\b53a29fc60bdc9f6e3e80d5d4fac10d4.gif');

-- ----------------------------
-- Table structure for `become`
-- ----------------------------
DROP TABLE IF EXISTS `become`;
CREATE TABLE `become` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of become
-- ----------------------------
INSERT INTO `become` VALUES ('1', '江县童游街道水尾村赤坭土布自然村人口不到100人，却有个不平凡的致富能手，他叫曹宗成，今年53岁。');
INSERT INTO `become` VALUES ('3', ' 曹宗成致富的故事从1991年开始。当时，他一男一女两个孩子在城里读小学，一年借读费要200元，这对于曹宗成一家来说是笔大数目。曹宗成一家四口人，分得10亩农田，一年收入也在2000元左右。生活的艰辛，逼得曹宗成不得不另谋出路，赤坭土布后山四里处有一片30多亩的荒山，长年无人打理。曹宗成觉得可惜，他主动找到村委会，要求承包这片山。经过多次协商，曹宗成最终以一次性付4200元的价格取得这片山61年经营权。东拼西借，曹宗成终于凑足了这笔钱。');

-- ----------------------------
-- Table structure for `category`
-- ----------------------------
DROP TABLE IF EXISTS `category`;
CREATE TABLE `category` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) NOT NULL,
  `cate` varchar(255) NOT NULL,
  `listorder` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `update_time` varchar(255) NOT NULL,
  `create_time` varchar(255) NOT NULL,
  `state` tinyint(1) NOT NULL,
  `pid` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of category
-- ----------------------------
INSERT INTO `category` VALUES ('25', '0', '电影', '0', '1', '1498470034', '1497938371', '1', '0');
INSERT INTO `category` VALUES ('26', '0', '城市', '0', '1', '1499219173', '1497938383', '1', '0');
INSERT INTO `category` VALUES ('27', '0', '游戏', '0', '1', '1499219176', '1497938390', '1', '0');
INSERT INTO `category` VALUES ('28', '0', '汽车', '0', '-1', '1498457296', '1497938407', '1', '0');
INSERT INTO `category` VALUES ('29', '25', '大战僵尸', '0', '1', '1497938426', '1497938426', '1', '0');
INSERT INTO `category` VALUES ('30', '25', '大战僵尸2', '0', '1', '1497938435', '1497938435', '1', '0');
INSERT INTO `category` VALUES ('31', '25', '大战僵尸3', '0', '1', '1497938445', '1497938445', '1', '0');
INSERT INTO `category` VALUES ('32', '26', '成都', '0', '1', '1497938471', '1497938471', '1', '0');
INSERT INTO `category` VALUES ('33', '26', '北京', '0', '1', '1497938481', '1497938481', '1', '0');
INSERT INTO `category` VALUES ('34', '26', '湖南', '0', '1', '1497938490', '1497938490', '1', '0');
INSERT INTO `category` VALUES ('36', '28', '红牛', '0', '1', '1497938510', '1497938510', '1', '0');
INSERT INTO `category` VALUES ('37', '28', '可乐', '0', '1', '1497938562', '1497938562', '1', '0');
INSERT INTO `category` VALUES ('38', '28', '雪碧', '0', '1', '1497938577', '1497938577', '1', '0');
INSERT INTO `category` VALUES ('39', '27', '英雄联盟', '0', '1', '1497938596', '1497938596', '1', '0');
INSERT INTO `category` VALUES ('40', '27', '飞车', '0', '1', '1497938609', '1497938609', '1', '0');
INSERT INTO `category` VALUES ('41', '25', '变形金刚', '0', '1', '1498457233', '1498457233', '1', '0');
INSERT INTO `category` VALUES ('42', '0', 'aaaaaaaaaaaaaaaa', '0', '-1', '1498470588', '1498470540', '1', '0');

-- ----------------------------
-- Table structure for `index`
-- ----------------------------
DROP TABLE IF EXISTS `index`;
CREATE TABLE `index` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL,
  `password1` varchar(10) NOT NULL,
  `code` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of index
-- ----------------------------
INSERT INTO `index` VALUES ('26', 'qqq', 'qqq', 'qqq', 'ad');
INSERT INTO `index` VALUES ('28', 'rrr', 'rrr', 'rrr', 'gm');

-- ----------------------------
-- Table structure for `inrtoduce`
-- ----------------------------
DROP TABLE IF EXISTS `inrtoduce`;
CREATE TABLE `inrtoduce` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of inrtoduce
-- ----------------------------
INSERT INTO `inrtoduce` VALUES ('1', '宏波养殖实业有限公司', '创立于2009年，是中江县一家集养殖、种植、餐饮、地产、矿产和网络为一体的多元化民营企业。现有员工122人，其中高级技术人员及管理人员15人。公司自成立以来，本着以诚信为本求实创新、勇于开拓的精神，大力进行企业经营结构调整，为力争三年内成为中江的龙头企业，五年内成为四川知名企业，十年后成为上市公司的远大目标而奋斗。');
INSERT INTO `inrtoduce` VALUES ('4', '一、养殖业：', '肉牛基地于2009年元月正式启动，基地位于县城南面20余公里，距离省会成都100公里，有省道罗桂路穿行而过的中江县双龙镇。基地采用了公司加农户的发展模式，以农业产业化为发展思路。力争使该基地发展成为年出栏肉牛2000余头以上，创产值逾2000余万元的大型养殖基地。目前基地配有畜牧师3人，具体负责指导农户牛舍建设、青饲料储藏、疫病防治和饲料搭配等工作。');
INSERT INTO `inrtoduce` VALUES ('5', '二、种植业：', '宏波柚子林生态农业观光园占地150余亩，离县城仅2公里，位于东北镇喜胜村是中江县最大的中江柚和福建沙田柚的种植基地，年产柚子50至100吨。现有高级农艺师1人，助理农艺师2人，技工2人，目前基地正计划改良品种，力争年产值能达到100余万元。为了提高土地利用价值，同时该基地正在筹建中江食用菌核心试范区。利用牛粪开发，生产食用菌。预计到2011年初，该园将建成集养殖。种植，观光，休闲为一体的现代循环农业经济园。');

-- ----------------------------
-- Table structure for `technology`
-- ----------------------------
DROP TABLE IF EXISTS `technology`;
CREATE TABLE `technology` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of technology
-- ----------------------------
INSERT INTO `technology` VALUES ('1', '一、中江柚品种特性及发展情况', '    中江柚属于文旦柚系品种，引自福建，首栽于我市永安乡，母树在中江永安乡场镇。1993年参加四川省优质果品评选，以总分83.6分被评为省优果品，近年来得到了中江县委、县政府的高度重视，得到了快速发展，直到2000年底，共发展中江柚250万株左右，但产量只有80万个左右，主要集中在子金乡印台村。该品种单果重2.5－3斤左右，倒卵圆形，金黄色，果上有油胞、芳香，果皮薄，果肉脆嫩化渣、汁多味甜，可溶性固形物达11.6%，种子少或无核；果实较耐贮藏；属于早熟品种，9月下旬-10月上旬成熟；树势中庸，易栽培，易');
