

-- Adminer 4.3.1 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `register`;
CREATE TABLE `register` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(45) NOT NULL,
  `auth_key` varchar(32) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `password_reset_token` varchar(255) DEFAULT NULL,
  `email` varchar(45) NOT NULL,
  `firstname` varchar(45) DEFAULT NULL,
  `lastname` varchar(45) DEFAULT NULL,
  `mobile` varchar(45) DEFAULT NULL,
  `postcode` varchar(45) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `address` varchar(255) DEFAULT NULL,
  `usertype_id` int(11) NOT NULL,
  `city_name` varchar(255) DEFAULT NULL,
  `country_id` int(11) DEFAULT NULL,
  `status` tinyint(1) NOT NULL,
  `imageFile` varchar(255) DEFAULT 'avatar.png',
  `permission` tinyint(1) NOT NULL DEFAULT '0',
  `is_published` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `username_UNIQUE` (`username`),
  UNIQUE KEY `email_UNIQUE` (`email`),
  KEY `fk_user_usertype_idx` (`usertype_id`),
  KEY `fk_user_country1_idx` (`country_id`)
) ENGINE=InnoDB DEFAULT CHARSET=big5;

INSERT INTO `register` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `firstname`, `lastname`, `mobile`, `postcode`, `created_at`, `address`, `usertype_id`, `city_name`, `country_id`, `status`, `imageFile`, `permission`, `is_published`) VALUES
(1,	'admin',	'$2y$13$YKJ5Z',	'$2y$13$YKJ5Z6FDAcgNvISjuNx4HeV5RuJ4rN9SWWIl6rYzQg/MQ9/rdXNfK',	'',	'admin@gmail.com',	'real',	'developer',	'8202829282',	'',	'2018-02-03 15:12:24',	'',	1,	'',	NULL,	1,	'avatar.png',	0,	0),
(7,	'test007',	'jsksncknsksnsk',	'$2y$13$DRAQp4P/xeu6ipC7RAMnAuzQnU74XKvIMdaLxZuUz7PFjy4zROmS2',	'jsksncknsksnsk',	'test@gmail.com',	'first',	'last',	'729282',	'2019',	'2018-03-02 05:09:48',	'address',	2,	'ambala',	2,	1,	'26024270_1480490668738694_2791867699195523926_o.jpg',	2,	2);
-- 2018-03-02 16:45:20
