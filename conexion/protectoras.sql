-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 20-01-2013 a las 01:45:00
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
-- Estructura de tabla para la tabla `protectoras`
--

CREATE TABLE IF NOT EXISTS `protectoras` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `isla` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `nombre` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `redes` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=20 ;

--
-- Volcado de datos para la tabla `protectoras`
--

INSERT INTO `protectoras` (`id`, `isla`, `nombre`, `url`, `redes`) VALUES
(1, 'mallorca', 'Ajucan (llevant de Mallorca)', 'http://ajucan.org/', 'https://www.facebook.com/pages/Ajucan-Mallorca-Hundehilfe/164823748426'),
(2, 'mallorca', 'Asociacion amigos de los animales- Esporlas', 'http://www.amicsanimalsesporles.org/', ''),
(3, 'mallorca', 'Asociacion animalista Llucmajor', 'http://asociacionanimalistallucmajor.blogspot.com.es/', 'https://www.facebook.com/asociacionanimalista.llucmajor'),
(4, 'mallorca', 'Asociacion Patitas Mallorca', 'http://asociacionpatitas.wordpress.com/', 'https://www.facebook.com/patitas.mca?ref=tn_tnmn'),
(5, 'mallorca', 'Asociacion Protectora de Capdepera', 'http://www.animalscapdepera.com/', 'https://www.facebook.com/ajuntamentdepalma#!/pages/Asociaci%C3%B3n-protectora-de-Capdepera/128664177'),
(6, 'mallorca', 'Baldea (Baleares)', 'http://www.baldea.org/', ''),
(7, 'mallorca', 'Centro Canino Internacional', 'http://www.centrocaninointernacional.org/', 'https://www.facebook.com/groups/centrocanino/'),
(8, 'mallorca', 'Dogs  for  U', 'http://dogsforu.org/', 'https://www.facebook.com/DogsForU'),
(9, 'mallorca', 'Perrera de Son Reus', 'http://csmpa.palmademallorca.es/', ''),
(10, 'mallorca', 'Perrera de LLucmajor', 'http://canerallucmajor.wordpress.com/', ''),
(11, 'mallorca', 'Pro-animales Mallorca', 'http://proanimalesmallorca.org/', 'https://www.facebook.com/ajuntamentdepalma#!/pages/Pro-Animales-Mallorca/214477518590271?fref=ts'),
(12, 'mallorca', 'Refugio de Animales de Compañia de Pollença', 'http://www.refugifina.org/', ''),
(13, 'mallorca', 'Ronroneo felino (Capdepera)', 'http://www.ronroneofelino.com/', ''),
(14, 'mallorca', 'SOS Animales Mallorca', 'http://www.sos-animal-mallorca.org/es/', ''),
(15, 'mallorca', 'SOS Canina Llucmajor', '', 'https://www.facebook.com/soscanina.llucmajor'),
(16, 'mallorca', 'S.P.A.P Mallorca', 'http://www.spapmallorca.org/', ''),
(17, 'mallorca', 'Tierhilfe  Mallorca', 'http://www.tierhilfe-mallorca.de/', ''),
(18, 'menorca', 'Protectora de animales de Ciutadella', 'http://www.protectoraciutadella.com/', ''),
(19, 'mallorca', 'iñakiç', 'ññññçççç', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
