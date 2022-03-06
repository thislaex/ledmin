-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 06 Mar 2022, 20:09:06
-- Sunucu sürümü: 10.4.22-MariaDB
-- PHP Sürümü: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `market`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_kadi` varchar(50) NOT NULL,
  `admin_sifre` varchar(50) NOT NULL,
  `admin_yetki` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_kadi`, `admin_sifre`, `admin_yetki`) VALUES
(1, 'Admin', '25f9e794323b453885f5181f1b624d0b', 5);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ayarlar`
--

CREATE TABLE `ayarlar` (
  `ayar_id` int(11) NOT NULL,
  `market_baslik` varchar(120) NOT NULL,
  `vip1_paketismi` varchar(120) NOT NULL,
  `vip2_paketismi` varchar(120) NOT NULL,
  `vip3_paketismi` varchar(120) NOT NULL,
  `vip4_paketismi` varchar(120) NOT NULL,
  `vip1_paketaciklama` varchar(1500) NOT NULL,
  `vip2_paketaciklama` varchar(1500) NOT NULL,
  `vip3_paketaciklama` varchar(1500) NOT NULL,
  `vip4_paketaciklama` varchar(1500) NOT NULL,
  `vip1_paketfiyat` int(100) NOT NULL,
  `vip2_paketfiyat` int(100) NOT NULL,
  `vip3_paketfiyat` int(100) NOT NULL,
  `vip4_paketfiyat` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `ayarlar`
--

INSERT INTO `ayarlar` (`ayar_id`, `market_baslik`, `vip1_paketismi`, `vip2_paketismi`, `vip3_paketismi`, `vip4_paketismi`, `vip1_paketaciklama`, `vip2_paketaciklama`, `vip3_paketaciklama`, `vip4_paketaciklama`, `vip1_paketfiyat`, `vip2_paketfiyat`, `vip3_paketfiyat`, `vip4_paketfiyat`) VALUES
(0, 'lédmin Market', 'Bronze', 'Silver', 'Gold', 'Elmas', 'BRONZE', 'SİLVER', 'SİLVER', 'ELMAS', 10, 20, 30, 40);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Tablo için indeksler `ayarlar`
--
ALTER TABLE `ayarlar`
  ADD PRIMARY KEY (`ayar_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
