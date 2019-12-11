-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3308
-- Tiempo de generación: 29-11-2019 a las 03:20:55
-- Versión del servidor: 8.0.18
-- Versión de PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `productosdb`
--
CREATE DATABASE IF NOT EXISTS `productosdb` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `productosdb`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
-- Volcado de datos en webhost dentro de la base de datos que me otorga
DROP TABLE IF EXISTS `productos`;
CREATE TABLE IF NOT EXISTS `productos` (
  `idProducto` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` text NOT NULL,
  `precio` float NOT NULL,
  `categoria` text NOT NULL,
   PRIMARY KEY (`idProducto`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`idProducto`, `nombre`, `precio`, `categoria`) VALUES
(1, 'Royal Canin Medium Adult 15kg', 3921, 'Alimentos'),
(2, 'Royal Canin Mini Adult 7.5kg', 1037, 'Alimentos'),
(3, 'Royal Canin Maxi Puppy 15kg', 3440,'Alimentos'),
(4, 'Royal Canin Mini Puppy 15kg', 3580,'Alimentos'),
(5, 'Royal Canin Calm 15kg', 3110,'Alimentos'),
(6, 'Royal Canin Mediano Adult 15kg', 3500,'Alimentos'),
(7, 'Lata Recovery Dog Cat', 220,'Alimentos'),
(8, 'Brouwer Power Ultra Perros 02-04kg', 340, 'Farmacia'),
(9, 'Brouwer Power Ultra Perros 04-10kg', 360, 'Farmacia'),
(10, 'Brouwer Power Ultra Perros 10-20kg', 400, 'Farmacia'),
(11, 'Brouwer Power Ultra Perros 20-40kg', 420, 'Farmacia'),
(12, 'Brouwer Power Ultra Perros 40-60kg', 660, 'Farmacia'),
(13, 'Brouwer Power Ultra Gatos 02-04kg', 340, 'Farmacia'),
(14, 'Brouwer Power Ultra Gatos 04-08kg', 380, 'Farmacia'),
(15, 'Comedero y Bebedero Perro', 450, 'Accesorios'),
(16, 'Comedero y Bebedero Gatos', 520, 'Accesorios'),
(17, 'Rascador Gato', 680, 'Accesorios'),
(18, 'Cucha Perro Chico', 780, 'Accesorios'),
(19, 'Cucha Perro Mediano', 380, 'Accesorios'),
(20, 'Cucha Perro Grande', 380, 'Accesorios');



COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
