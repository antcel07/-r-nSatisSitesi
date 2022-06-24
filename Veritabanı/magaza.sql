-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 01 Haz 2022, 22:28:16
-- Sunucu sürümü: 10.4.22-MariaDB
-- PHP Sürümü: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `webproje`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `magaza`
--

CREATE TABLE `magaza` (
  `katId` int(35) NOT NULL,
  `katAdi` varchar(35) COLLATE utf8_turkish_ci NOT NULL,
  `urunAdi` varchar(35) COLLATE utf8_turkish_ci NOT NULL,
  `urunFiyat` int(35) NOT NULL,
  `urunResim` varchar(35) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `magaza`
--

INSERT INTO `magaza` (`katId`, `katAdi`, `urunAdi`, `urunFiyat`, `urunResim`) VALUES
(2, 'hediyelik eşya', 'kutu', 36, 'b.gif'),
(3, 'oyuncak', 'bebekler', 45, 'c.gif'),
(4, 'yilbaşi hediyesi', 'çam toplari', 45, 'd.gif'),
(68, 'yilbasi agaci', 'çam agaci', 110, 'a.jpg');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `magaza`
--
ALTER TABLE `magaza`
  ADD PRIMARY KEY (`katId`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `magaza`
--
ALTER TABLE `magaza`
  MODIFY `katId` int(35) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
