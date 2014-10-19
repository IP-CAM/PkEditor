-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Palvelin: localhost
-- Luontiaika: 18.04.2014 klo 16:11
-- Palvelimen versio: 5.5.35
-- PHP:n versio: 5.3.10-1ubuntu3.11

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Tietokanta: `oc156`
--

-- --------------------------------------------------------

--
-- Rakenne taululle `pkeditor_language`
--

CREATE TABLE IF NOT EXISTS `pkeditor_language` (
  `language_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) COLLATE utf8_swedish_ci NOT NULL,
  `code` varchar(200) COLLATE utf8_swedish_ci NOT NULL,
  `localisation` varchar(200) COLLATE utf8_swedish_ci NOT NULL,
  PRIMARY KEY (`language_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci AUTO_INCREMENT=9 ;

--
-- Vedos taulusta `pkeditor_language`
--

INSERT INTO `pkeditor_language` (`language_id`, `name`, `code`, `localisation`) VALUES
(1, 'finnish', 'fi', 'FI'),
(2, 'english', 'en', 'GB'),
(3, 'swedish', 'se', 'SE'),
(4, 'germany', 'de', 'DE'),
(5, 'english', 'en', 'US');

-- --------------------------------------------------------

--
-- Rakenne taululle `pkeditor_setting`
--

CREATE TABLE IF NOT EXISTS `pkeditor_setting` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `key` varchar(200) COLLATE utf8_swedish_ci NOT NULL,
  `name` varchar(200) COLLATE utf8_swedish_ci NOT NULL,
  `value` varchar(200) COLLATE utf8_swedish_ci NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci AUTO_INCREMENT=2 ;

--
-- Vedos taulusta `pkeditor_setting`
--

INSERT INTO `pkeditor_setting` (`id`, `key`, `name`, `value`, `status`) VALUES
(1, 'language', 'english','GB',  1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
