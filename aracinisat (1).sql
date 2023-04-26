-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 26 Nis 2023, 03:45:42
-- Sunucu sürümü: 10.4.28-MariaDB
-- PHP Sürümü: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `aracinisat`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `lisans` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `lisans`) VALUES
(1, 'admin', 'admin', 0),
(2, '11', '11', 0),
(3, '22', '22', 1),
(279, 'asd', 'asd', 0),
(280, 'asdas', 'asd', 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `bar`
--

CREATE TABLE `bar` (
  `id` int(11) NOT NULL,
  `Otomobil` varchar(50) NOT NULL,
  `SUV` varchar(15) NOT NULL,
  `Motosiklet` varchar(50) NOT NULL,
  `AdminGirişi` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `bar`
--

INSERT INTO `bar` (`id`, `Otomobil`, `SUV`, `Motosiklet`, `AdminGirişi`) VALUES
(1, 'Otomobil', 'Suv', 'Motosiklet', 'Admin Girişi');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `marka` varchar(50) NOT NULL,
  `model` varchar(50) NOT NULL,
  `renk` varchar(50) NOT NULL,
  `km` varchar(50) NOT NULL,
  `fiyat` varchar(15) NOT NULL,
  `resim` varchar(50) NOT NULL,
  `islemler` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `menu`
--

INSERT INTO `menu` (`id`, `marka`, `model`, `renk`, `km`, `fiyat`, `resim`, `islemler`) VALUES
(1, 'Marka', 'Model', 'Renk', 'Km', 'Fiyat', 'Resim', 'İşlemler');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `motosiklet`
--

CREATE TABLE `motosiklet` (
  `id` int(11) NOT NULL,
  `marka` varchar(50) NOT NULL,
  `model` varchar(50) NOT NULL,
  `renk` varchar(50) NOT NULL,
  `km` varchar(50) NOT NULL,
  `resim` varchar(150) NOT NULL,
  `fiyat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `otomobil`
--

CREATE TABLE `otomobil` (
  `id` int(11) NOT NULL,
  `marka` varchar(50) NOT NULL,
  `model` varchar(50) NOT NULL,
  `renk` varchar(50) NOT NULL,
  `km` varchar(50) NOT NULL,
  `resim` varchar(150) NOT NULL,
  `fiyat` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `otomobil`
--

INSERT INTO `otomobil` (`id`, `marka`, `model`, `renk`, `km`, `resim`, `fiyat`) VALUES
(11, 'Citroen', 'C4 Cactus', 'Beyaz', '78.000', '', 1),
(22, '1', '1', '1', '1', 'images/22.png', 3),
(23, 'güncelle', 'g', 'g', 'g', 'images/23.png', 3);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `suv`
--

CREATE TABLE `suv` (
  `id` int(11) NOT NULL,
  `marka` varchar(50) NOT NULL,
  `model` varchar(50) NOT NULL,
  `renk` varchar(50) NOT NULL,
  `km` varchar(50) NOT NULL,
  `resim` varchar(150) NOT NULL,
  `fiyat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `suv`
--

INSERT INTO `suv` (`id`, `marka`, `model`, `renk`, `km`, `resim`, `fiyat`) VALUES
(2, '1', '1', '1', '1', 'uploads/64486cb8d79c1.png', 2);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `bar`
--
ALTER TABLE `bar`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `motosiklet`
--
ALTER TABLE `motosiklet`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `otomobil`
--
ALTER TABLE `otomobil`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `suv`
--
ALTER TABLE `suv`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=281;

--
-- Tablo için AUTO_INCREMENT değeri `bar`
--
ALTER TABLE `bar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `motosiklet`
--
ALTER TABLE `motosiklet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `otomobil`
--
ALTER TABLE `otomobil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Tablo için AUTO_INCREMENT değeri `suv`
--
ALTER TABLE `suv`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
