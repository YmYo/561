-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- 主机: localhost
-- 生成日期: 2019 年 10 月 27 日 14:14
-- 服务器版本: 5.0.51
-- PHP 版本: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- 数据库: `561`
-- 

-- --------------------------------------------------------

-- 
-- 表的结构 `customers`
-- 

CREATE TABLE `customers` (
  `cuser` varchar(50) character set utf8 collate utf8_bin NOT NULL,
  `cpass` varchar(50) character set utf8 collate utf8_bin NOT NULL,
  `cemail` varchar(50) character set utf8 collate utf8_bin NOT NULL,
  PRIMARY KEY  (`cuser`),
  UNIQUE KEY `cemail` (`cemail`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- 
-- 导出表中的数据 `customers`
-- 

INSERT INTO `customers` VALUES (0x637a79, 0x313233343536, 0x6361697a406f7265676f6e73746174652e656475);
