-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 20-01-2013 a las 01:43:27
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `mascotas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formulario`
--

CREATE TABLE IF NOT EXISTS `formulario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `situacion` varchar(25) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `n_persona` varchar(25) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `telefono` int(25) NOT NULL,
  `email` varchar(25) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `n_animal` varchar(25) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `especie` varchar(25) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `especie1` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `edad` int(25) NOT NULL,
  `raza` varchar(25) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `sexo` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `chip` varchar(33) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `n_chip` int(100) NOT NULL,
  `color` varchar(33) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `isla` varchar(33) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `municipio` varchar(33) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `zona` varchar(25) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `fecha_per` varchar(33) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `comentario` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ruta_fichero` varchar(333) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=10 ;

--
-- Volcado de datos para la tabla `formulario`
--

-- (datos de prueba eliminados)

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
