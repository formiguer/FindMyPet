-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 20-01-2013 a las 01:44:39
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
-- Estructura de tabla para la tabla `poblacion`
--

CREATE TABLE IF NOT EXISTS `poblacion` (
  `idpoblacion` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `idprovincia` int(10) unsigned NOT NULL,
  `isla` varchar(30) NOT NULL,
  `poblacion` varchar(150) NOT NULL,
  `poblacionseo` varchar(150) DEFAULT NULL,
  `direccion` varchar(100) NOT NULL,
  `postal` int(5) unsigned zerofill DEFAULT NULL,
  `telefono` varchar(100) NOT NULL,
  `web` varchar(100) NOT NULL,
  `latitud` decimal(9,6) DEFAULT NULL,
  `longitud` decimal(9,6) DEFAULT NULL,
  PRIMARY KEY (`idpoblacion`),
  UNIQUE KEY `poblacionseo` (`poblacionseo`),
  UNIQUE KEY `lugar` (`latitud`,`longitud`),
  KEY `idprovincia` (`idprovincia`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=879 ;

--
-- Volcado de datos para la tabla `poblacion`
--

INSERT INTO `poblacion` (`idpoblacion`, `idprovincia`, `isla`, `poblacion`, `poblacionseo`, `direccion`, `postal`, `telefono`, `web`, `latitud`, `longitud`) VALUES
(811, 29, 'menorca', 'Alaior', 'alaior', 'Carrer Major, 11 ', 07730, '971 37 10 02', 'http://www.alaior.org/', '39.930721', '4.140090'),
(812, 29, 'mallorca', 'Alaró', 'alaro', 'Plaça de la Vila, 17 ', 07340, '971 51 00 00', 'http://www.ajalaro.net', '39.705830', '2.789980'),
(813, 29, 'mallorca', 'Alcúdia', 'alcudia', ' Carrer Major, 9 ', 07400, '971 89 71 00', 'http://www.alcudia.net/', '39.851608', '3.123320'),
(814, 29, 'mallorca', 'Algaida', 'algaida', 'Carrer del Rei, 6 ', 07210, '971 12 50 76<br> 971 12 53 35', 'http://www.ajalgaida.net', '39.558899', '2.895170'),
(815, 29, 'mallorca', 'Andratx', 'andratx', 'Avd. de la Curia, 1 ', 07150, '971 62 80 00', 'http://www.andratx.cat/', '39.574699', '2.421510'),
(816, 29, 'mallorca', 'Ariany', 'ariany', 'Carrer  Major,19 ', 07529, '971 56 11 82', 'http://www.ajariany.net/', '39.650532', '3.111570'),
(817, 29, 'mallorca', 'Artà', 'arta', 'Pl. d''Espanya, 1', 07570, '971 82 95 95', 'http://arta.cat', '39.691002', '3.349990'),
(818, 29, 'mallorca', 'Banyalbufar', 'banyalbufar', 'Pl.Espanya, 1', 07191, '971 14 85 80', 'http://www.ajbanyalbufar.net/', '39.687408', '2.514230'),
(819, 29, 'mallorca', 'Binissalem', 'binissalem', 'Carrer Concepció, 7', 07350, '971 88 65 58', 'http://www.binissalem.cat/', '39.684109', '2.846560'),
(820, 29, 'mallorca', 'Búger', 'buger', 'Plaça de la Constitució, 1', 07311, '971 51 61 46', 'http://www.ajbuger.net/', '39.758511', '2.984250'),
(821, 29, 'mallorca', 'Bunyola', 'bunyola', 'Sa Plaça, 5', 07110, '971 61 30 07', 'http://www.ajbunyola.net', '39.698668', '2.699633'),
(822, 29, 'mallorca', 'Calvià', 'calvia', 'Can Vich, 29', 07184, '971 13 91 00', 'http://www.calvia.com/', '39.565603', '2.504368'),
(823, 29, 'mallorca', 'Campanet', 'campanet', 'Carrer Major, 25', 07310, '971 51 60 05', 'http://www.ajcampanet.net/', '39.771141', '2.964420'),
(824, 29, 'mallorca', 'Campos', 'campos', 'Plaça Major, 1', 07630, '971 16 95 00', 'https://www.ajcampos.org/', '39.433939', '3.043385'),
(825, 29, 'mallorca', 'Capdepera', 'capdepera', 'Carrer Ca''n Creu d''Inca, Carrer Ciutat, 20', 07580, '971 56 30 52', 'http://www.ajcapdepera.net/', '39.702994', '3.434815'),
(827, 29, 'menorca', 'Ciutadella de Menorca', 'ciutadella-de-menorca', 'Plaça des Born, 15', 07760, '971 38 10 50', 'http://www.ajciutadella.org/', '40.002142', '3.840408'),
(828, 29, 'mallorca', 'Consell', 'consell', 'Plaça Major, 3', 07330, '971 62 20 95 <br> 971 62 20 31', 'ajuntament@ajconsell.net/', '39.670166', '2.816362'),
(829, 29, 'mallorca', 'Costitx', 'costitx', 'Plaça de la Mare de Déu, 15', 07144, '971 87 60 68', 'ajuntament@ajcostitx.net/', '39.656654', '2.949486'),
(830, 29, 'mallorca', 'Deià', 'deya', 'Plaça del Porxo, 4', 07179, '971 63 90 77', 'ajuntament@ajdeia.net/', '39.746761', '2.652168'),
(831, 29, 'ibiza', 'Eivissa', 'eivissa', 'Carrer de Canàries, 35 – Edifici Sa Colomina  ', 07800, '971 39 76 00', 'http://www.ibiza.es/', '38.909202', '1.432643'),
(832, 29, 'mallorca', 'Escorca', 'escorca', 'Plaça des Peregrins, 9', 07315, '971 51 70 05', 'http://www.ajescorca.net/', '39.820766', '2.869363'),
(833, 29, 'mallorca', 'Esporles', 'esporles', 'Plaça d''Espanya, 1', 07190, '971 61 00 02 ', 'http://www.ajesporles.net/', '39.669836', '2.578611'),
(834, 29, 'mallorca', 'Estellencs', 'estellencs', 'Carrer Sa siquia, 4', 07192, '971 61 85 21', 'http://www.ajestellencs.net/', '39.653714', '2.481666'),
(835, 29, 'mallorca', 'Felanitx', 'felanitx', 'Plza. Constitució, 1', 07200, '971 58 00 51 ', 'http://www.ajfelanitx.net/', '39.468601', '3.148398'),
(836, 29, 'menorca', 'Ferreries', 'ferreries', '', 07750, 'Tel policía local:  971 15 51 77', 'http://www.ajferreries.org/', '39.983237', '4.011641'),
(837, 29, 'formentera', 'Formentera', 'formentera', 'Plaça de la Constitució, 1  ', 07860, '971 32 10 87', 'http://www.formentera.es/', '38.696731', '1.453285'),
(838, 29, 'mallorca', 'Fornalutx', 'fornalutx', 'Carrer  Vicari Solivella, 1', 07109, '971 63 19 01 ', 'http://www.ajfornalutx.net/', '39.781992', '2.742248'),
(839, 29, 'mallorca', 'Inca', 'inca', 'Plaça Espanya, 1', 07300, '871 91 40 00', 'http://incaciutat.com/', '39.718774', '2.915797'),
(840, 29, 'mallorca', 'Lloret de Vistalegre', 'lloret-de-vistalegre', 'Carrer Costa des Pou, 3 ', 07518, '971 52 41 89', 'http://www.ajlloretdevistalegre.net/', '39.616665', '2.976222'),
(841, 29, 'mallorca', 'Lloseta', 'lloseta', 'Carrer Pou nou, 3 ', 07360, '971 51 40 33', 'http://www.ajlloseta.net/', '39.718147', '2.864771'),
(842, 29, 'mallorca', 'Llubí', 'llubi', 'Carrer Sant Feliu, 13', 07430, '971 52 20 02 <br> 971 85 70 01', 'http://www.ajllubi.net/', '39.700550', '3.004718'),
(843, 29, 'mallorca', 'Llucmajor', 'llucmajor', 'Plaça d''Espanya, 12', 07620, '971 66 00 50 <br> 971 66 26 12 ', 'http://www.llucmajor.org/', '39.485694', '2.895026'),
(844, 29, 'mallorca', 'Manacor', 'manacor', 'Carrer Convent s/n', 07500, '971 84 91 00', 'http://www.manacor.org/', '39.574634', '3.202171'),
(845, 29, 'mallorca', 'Mancor de la Vall', 'mancor-de-la-vall', 'Plaça de l''Ajuntament, 1 ', 07312, '971 50 17 76', 'http://www.ajmancordelavall.net/', '39.750885', '2.873397'),
(846, 29, 'menorca', 'Maó', 'mao', 'Plaça de la Constitució, 1', 07700, '971 36 98 00', 'http://www.ajmao.org/', '39.909004', '4.288369'),
(847, 29, 'mallorca', 'Maria de la Salut', 'maria-de-la-salut', 'Plaça des Pou, 13', 07519, '971 52 50 02', 'http://www.ajmariadelasalut.net/', '39.670893', '3.076043'),
(848, 29, 'mallorca', 'Marratxí', 'marratxi', 'Camí de n''Olesa, 66 Sa Cabaneta', 07141, '971 78 81 00', 'http://www.ajmarratxi.net/', '39.642347', '2.752590'),
(849, 29, 'menorca', 'Es Mercadal', 'mercadal', 'Carrer  Major, 16 ', 07740, '971 37 50 02', 'http://www.aj-esmercadal.org/', '39.988827', '4.076099'),
(850, 29, 'menorca', 'Es Migjorn Gran', 'migjorn-gran', 'Carrer  Major, s/n', 07749, '971 37 01 00', 'http://www.ajmigjorngran.org/', '39.947516', '4.048891'),
(851, 29, 'mallorca', 'Montuïri', 'montu', 'Plaça Major, 1', 07230, '971 64 41 25 ', 'http://www.ajmontuiri.net/', '39.570565', '2.984591'),
(852, 29, 'mallorca', 'Muro', 'muro', 'Plaça Comte Ampories, 1 ', 07440, '971 86 00 36', 'http://www.ajmuro.net/', '39.734287', '3.053598'),
(853, 29, 'mallorca', 'Palma de Mallorca', 'palma-de-mallorca', 'Plaça de Cort, 1', 07012, '971 22 59 00', 'http://www.a-palma.es/', '39.569771', '2.650237'),
(854, 29, 'mallorca', 'Petra', 'petra', 'Carrer  Font, 1', 07520, '971 83 00 00', 'http://www.ajpetra.net/', '39.609292', '3.112264'),
(855, 29, 'mallorca', 'Sa Pobla', 'pobla', 'Plaça de la Constitució, 1', 07420, '971 54 00 54', 'http://www.ajsapobla.net/', '39.770844', '3.016949'),
(856, 29, 'mallorca', 'Pollença', 'pollenca', 'Carrer Calvari, 2', 07460, '971 53 01 08', 'http://www.ajpollenca.net/', '39.877963', '3.017120'),
(857, 29, 'mallorca', 'Porreres', 'porreres', 'Plaça de la Vila, 17', 07260, '971 64 72 21 ', 'http://www.porreres.net/', '39.517351', '3.024888'),
(858, 29, 'mallorca', 'Puigpunyent', 'puigpunyent', 'Carrer  Sa Travessia, 37', 07194, '971 61 44 55', 'http://www.ajpuigpunyent.net/', '39.624235', '2.527027'),
(859, 29, 'mallorca', 'Ses Salines', 'salines', 'Plaça Major, 1 ', 07640, '971 64 91 17', 'http://www.ajsessalines.net/', '39.339309', '3.050852'),
(860, 29, 'ibiza', 'Sant Antoni de Portmany', 'sant-antoni-de-portmany', 'Passeig de la Mar 16', 07820, '971 34 01 11', 'http://www.santantoni.net/', '38.981030', '1.307244'),
(861, 29, 'mallorca', 'Sant Joan', 'sant-joan', 'Carrer Major, 61 ', 07240, '971 52 60 03', 'http://www.ajsantjoan.net/', '39.596099', '3.039951'),
(862, 29, 'ibiza', 'Sant Joan de Labritja', 'sant-joan-de-labritja', 'Carrer  L´Ajuntament, 4 ', 07810, '971 33 30 03', 'http://www.sant-joan.com/', '39.077426', '1.512380'),
(863, 29, 'ibiza', 'Sant Josep de sa Talaia', 'sant-josep-de-sa-talaia', 'Carrer de Pere Escanelles, 12-16', 07830, '971 80 01 25', 'http://www.santjosep.biz/', '38.921924', '1.294112'),
(864, 29, 'mallorca', 'Sant Llorenç des Cardassar', 'sant-llorencdes-cardassar', 'Plaça Ajuntament, 1 ', 07530, '971 83 83 93', 'http://www.santllorenc.es/', '39.610515', '3.284826'),
(865, 29, 'menorca', 'Sant Lluís', 'sant-lluis', 'Pla de sa creu s/n', 07710, '971 15 09 50', 'www.ajsantlluis.org/', '39.853521', '4.261215'),
(866, 29, 'mallorca', 'Santa Eugènia', 'santa-eugenia', 'Plaça Bernat de Santa Eugènia, 7', 07142, '971 14 43 97', 'http://www.ajsantaeugenia.net/', '39.624565', '2.839193'),
(867, 29, 'ibiza', 'Santa Eulalia des Riu', 'santa-eulalia-del-rio', 'Plaza España ,1', 07840, '971 33 28 00', 'http://www.santaeulariadesriu.com/', '38.981997', '1.531649'),
(868, 29, 'mallorca', 'Santa Margalida', 'santa-margalida', 'Passeig des Pouàs, 23', 07450, '971 52 30 30', 'http://www.ajsantamargalida.net/', '39.703687', '3.103809'),
(869, 29, 'mallorca', 'Santa María del Camí', 'santa-maria-del-cami', 'Plaça de la Vila, 1', 07320, '971 62 01 31', 'http://ajsantamariadelcami.org/', '39.646345', '2.776666'),
(870, 29, 'mallorca', 'Santanyí', 'santanyi', 'Plaça Major,12 ', 07650, '971 65 30 02', 'http://www.ajsantanyi.net/', '39.355073', '3.130331'),
(871, 29, 'mallorca', 'Selva', 'selva', 'Plaça Major, 1', 07313, '971 51 50 06', 'www.ajselva.net/', '39.754366', '2.902043'),
(872, 29, 'mallorca', 'Sencelles', 'sencelles', 'Plaça d''Espanya, 7', 07140, '971 87 20 16 ', 'http://www.ajsencelles.net/', '39.646312', '2.896185'),
(873, 29, 'mallorca', 'Sineu', 'sineu', 'Carrer  Sant Francesc, 10 ', 07510, '971 52 00 27', 'http://www.ajsineu.net/', '39.642644', '3.010898'),
(874, 29, 'mallorca', 'Sóller', 'soller', 'Plaça Constitució, 1', 07100, '971 63 02 00', 'http://www.ajsoller.net/', '39.765468', '2.714353'),
(875, 29, 'mallorca', 'Son Servera', 'son-servera', 'Plaça de Sant Ignasi 1', 07550, '971 56 70 02 - 971 56 81 01', 'http://www.sonservera.es/', '39.624367', '3.357396'),
(876, 29, 'mallorca', 'Valldemossa', 'valldemossa', 'Passatge Jardí de Joan Carles I, s/n', 07170, '971 61 20 02', 'http://www.valldemossa.es/', '39.712040', '2.622728'),
(877, 29, 'mallorca', 'Vilafranca de Bonany', 'vilafranca-de-bonany', 'Plaça Major, 1', 07250, '971 83 21 06', 'http://www.ajvilafrancadebonany.net/', '39.570003', '3.084197'),
(878, 29, 'menorca', 'Es Castell', 'castell', 'Plaça de l''Esplanada, 5', 07720, '971 36 51 93', 'http://www.aj-escastell.org', NULL, NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
