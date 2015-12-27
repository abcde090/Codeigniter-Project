-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 07 Ara 2015, 10:22:23
-- Sunucu sürümü: 5.5.27
-- PHP Sürümü: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Veritabanı: `vtpizza`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `pizza`
--

CREATE TABLE IF NOT EXISTS `pizza` (
  `pizzaid` int(11) NOT NULL AUTO_INCREMENT,
  `ad` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `incekenar` varchar(10) COLLATE utf8_turkish_ci NOT NULL,
  `adet` int(11) NOT NULL,
  `adres` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `tip` int(11) NOT NULL,
  `fiyat` int(11) NOT NULL,
  PRIMARY KEY (`pizzaid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=3 ;

--
-- Tablo döküm verisi `pizza`
--

INSERT INTO `pizza` (`pizzaid`, `ad`, `incekenar`, `adet`, `adres`, `tip`, `fiyat`) VALUES
(1, 'konyalım', 'Evet', 3, '328 avm yanı', 2, 30),
(2, 'ton balıklı pizza', 'hayır', 4, 'kyk', 3, 45);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
