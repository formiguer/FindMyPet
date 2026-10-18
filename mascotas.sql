-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 12-01-2013 a las 19:56:05
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
  `situacion` varchar(25) NOT NULL,
  `n_persona` varchar(25) NOT NULL,
  `telefono` int(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `n_animal` varchar(25) NOT NULL,
  `especie` varchar(25) NOT NULL,
  `edad` int(25) NOT NULL,
  `raza` varchar(25) NOT NULL,
  `sexo` varchar(10) NOT NULL,
  `chip` varchar(33) NOT NULL,
  `color` varchar(33) NOT NULL,
  `isla` varchar(33) NOT NULL,
  `municipio` varchar(33) NOT NULL,
  `zona` varchar(25) NOT NULL,
  `fecha_per` varchar(33) NOT NULL,
  `comentario` varchar(100) NOT NULL,
  `ruta_fichero` varchar(333) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Volcado de datos para la tabla `formulario`
--

-- (datos de prueba eliminados)

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
(814, 29, 'mallorca', 'Algaida', 'algaida', 'Carrer del Rei, 6 ', 07210, '971 12 50 76 – 971 12 53 35', 'http://www.ajalgaida.net', '39.558899', '2.895170'),
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
(828, 29, 'mallorca', 'Consell', 'consell', 'Plaça Major, 3', 07330, '971 62 20 95 -- 971 62 20 31', 'ajuntament@ajconsell.net/', '39.670166', '2.816362'),
(829, 29, 'mallorca', 'Costitx', 'costitx', 'Plaça de la Mare de Déu, 15', 07144, '971 87 60 68', 'ajuntament@ajcostitx.net/', '39.656654', '2.949486'),
(830, 29, 'mallorca', 'Deià', 'deya', 'Plaça del Porxo, 4', 07179, '971 63 90 77', 'ajuntament@ajdeia.net/', '39.746761', '2.652168'),
(831, 29, 'ibiza', 'Eivissa', 'eivissa', 'Carrer de Canàries, 35 – Edifici Sa Colomina  ', 07800, '971 39 76 00', 'http://www.ibiza.es/', '38.909202', '1.432643'),
(832, 29, 'mallorca', 'Escorca', 'escorca', 'Plaça des Peregrins, 9', 07315, '971 51 70 05', 'http://www.ajescorca.net/', '39.820766', '2.869363'),
(833, 29, 'mallorca', 'Esporles', 'esporles', 'Plaça d''Espanya, 1', 07190, '971 61 00 02 ', 'http://www.ajesporles.net/', '39.669836', '2.578611'),
(834, 29, 'mallorca', 'Estellencs', 'estellencs', 'Carrer Sa siquia, 4', 07192, '971 61 85 21', 'http://www.ajestellencs.net/', '39.653714', '2.481666'),
(835, 29, 'mallorca', 'Felanitx', 'felanitx', 'Plza. Constitució, 1', 07200, '971 58 00 51 ', 'http://www.ajfelanitx.net/', '39.468601', '3.148398'),
(836, 29, 'menorca', 'Ferreries', 'ferreries', '', 07750, 'Tel policía local:971 15 51 77', 'http://www.ajferreries.org/', '39.983237', '4.011641'),
(837, 29, 'formentera', 'Formentera', 'formentera', 'Plaça de la Constitució, 1  ', 07860, '971 32 10 87', 'http://www.formentera.es/', '38.696731', '1.453285'),
(838, 29, 'mallorca', 'Fornalutx', 'fornalutx', 'Carrer  Vicari Solivella, 1', 07109, '971 63 19 01 ', 'http://www.ajfornalutx.net/', '39.781992', '2.742248'),
(839, 29, 'mallorca', 'Inca', 'inca', 'Plaça Espanya, 1', 07300, '871 91 40 00', 'http://incaciutat.com/', '39.718774', '2.915797'),
(840, 29, 'mallorca', 'Lloret de Vistalegre', 'lloret-de-vistalegre', 'Carrer Costa des Pou, 3 ', 07518, '971 52 41 89', 'http://www.ajlloretdevistalegre.net/', '39.616665', '2.976222'),
(841, 29, 'mallorca', 'Lloseta', 'lloseta', 'Carrer Pou nou, 3 ', 07360, '971 51 40 33', 'http://www.ajlloseta.net/', '39.718147', '2.864771'),
(842, 29, 'mallorca', 'Llubí', 'llubi', 'Carrer Sant Feliu, 13', 07430, '971 52 20 02 -- 971 85 70 01', 'http://www.ajllubi.net/', '39.700550', '3.004718'),
(843, 29, 'mallorca', 'Llucmajor', 'llucmajor', 'Plaça d''Espanya, 12', 07620, '971 66 00 50 -- 971 66 26 12 ', 'http://www.llucmajor.org/', '39.485694', '2.895026'),
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
(875, 29, 'mallorca', 'Son Servera', 'son-servera', 'Plaça de Sant Ignasi 1', 07550, '971 56 70 02 -- 971 56 81 01', 'http://www.sonservera.es/', '39.624367', '3.357396'),
(876, 29, 'mallorca', 'Valldemossa', 'valldemossa', 'Passatge Jardí de Joan Carles I, s/n', 07170, '971 61 20 02', 'http://www.valldemossa.es/', '39.712040', '2.622728'),
(877, 29, 'mallorca', 'Vilafranca de Bonany', 'vilafranca-de-bonany', 'Plaça Major, 1', 07250, '971 83 21 06', 'http://www.ajvilafrancadebonany.net/', '39.570003', '3.084197'),
(878, 29, 'menorca', 'Es Castell', 'castell', 'Plaça de l''Esplanada, 5', 07720, '971 36 51 93', 'http://www.aj-escastell.org', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `protectoras`
--

CREATE TABLE IF NOT EXISTS `protectoras` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `isla` varchar(50) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `url` varchar(100) NOT NULL,
  `redes` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

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
(12, 'mallorca', 'Refugio de Animales de Compañía de Pollença', 'http://www.refugifina.org/', ''),
(13, 'mallorca', 'Ronroneo felino (Capdepera)', 'http://www.ronroneofelino.com/', ''),
(14, 'mallorca', 'SOS Animales Mallorca', 'http://www.sos-animal-mallorca.org/es/', ''),
(15, 'mallorca', 'SOS Canina Llucmajor', '', 'https://www.facebook.com/soscanina.llucmajor'),
(16, 'mallorca', 'S.P.A.P Mallorca', 'http://www.spapmallorca.org/', ''),
(17, 'mallorca', 'Tierhilfe  Mallorca', 'http://www.tierhilfe-mallorca.de/', ''),
(18, 'menorca', 'Protectora de animales de Ciutadella', 'http://www.protectoraciutadella.com/', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `veterinarios`
--

CREATE TABLE IF NOT EXISTS `veterinarios` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `isla` varchar(100) NOT NULL,
  `municipio` varchar(100) NOT NULL,
  `zona` varchar(100) NOT NULL,
  `barrio` varchar(100) NOT NULL,
  `clinica` varchar(100) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `telefono` varchar(100) NOT NULL,
  `web` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=89 ;

--
-- Volcado de datos para la tabla `veterinarios`
--

INSERT INTO `veterinarios` (`id`, `isla`, `municipio`, `zona`, `barrio`, `clinica`, `direccion`, `telefono`, `web`, `email`) VALUES
(1, 'menorca', 'Alaior', '', '', 'CENTRE VETERINARI ALAIOR', 'C/ Doctor Lllansó, 63, 7730', '971 37 10 70', '', ''),
(2, 'menorca', 'Ciutadella de Menorca', '', '', 'CLINICA VETERINARIA PEREZ - SINTES', 'C/ MagnificsJurats, 22', '971 38 58 19', '', 'cvpersin@hotmail.com'),
(3, 'menorca', 'Ciutadella de Menorca', '', '', 'CLINICA VETERINARIA J. PONS / L. MASSIP', 'C/ Pius Vi, 31', '971 38 34 30', '', 'jaupons@supersonik.com'),
(4, 'menorca', 'Ciutadella de Menorca', '', '', 'CLINICA VETERINARIA VETCAN', 'C/ Lleida, 26 Local 7', '971 38 67 60', '', 'vetcanmenorca@gmail.com'),
(5, 'menorca', 'Maó', '', '', 'CLINICA VETERINARIA R. COLL', 'C/ Madrid, 8', '971 35 36 12', '', 'cvrafelcoll@hotmail.com'),
(6, 'menorca', 'Maó', '', '', 'CLINICA VETERINARIA B. CARDONA', 'C/ San Fernando, 29', '971 36 60 09', '', 'vonhofe@gmail.com'),
(7, 'menorca', 'Maó', '', '', 'CLINICA VETERINARIA CARDONA & VON HOFE', 'C/ S''Espero, 19 Poima', '971 36 60 09', '', 'vonhofe@gmail.com'),
(8, 'menorca', 'Maó', '', '', 'CLINICA VETERINARIA ST. CLIMENT', 'Pl. Sant Climent, 8', '971 15 31 01', '', 'aorfila@galenics.com'),
(9, 'menorca', 'Es Mercadal', '', '', 'CLINICA VETERINARIA ES MERCADAL', 'C/ Ronda De S''estància, 62', '971 15 40 46', '', 'mariscals@telefonica.net'),
(10, 'menorca', 'Sant Lluís', '', '', 'CENTRE VETERINARI SANT LLUIS', 'Avda. Sa Pau, 22', '971 15 12 98', '', ''),
(11, 'menorca', 'Es Castell', '', '', 'CLINICA VETERINARIA DES CASTELL', 'C/ Victori , 70', '971 35 65 79', '', 'clinivet@pcmenorca.com'),
(12, 'ibiza', 'Eivissa', '', '', 'CLIN. VETER. VIDAL PEREYRA SCP', 'C/ Via Romana, 1', '971 30 42 26', '', 'cvvidalpereyra@hotmail.com'),
(13, 'ibiza', 'Eivissa', '', '', 'CLINICA VETERINARIA P. GARCIA', 'C/ Juan Planells, 11', '971 30 13 83', '', ''),
(14, 'ibiza', 'Eivissa', '', '', 'CLINICA VETERINARIA SANTA GERTRUDIS', 'Ctra. San Mateo, S/n Edif. Sa Nova Gertrudis 2 - 3', '971 19 74 00', '', 'haike.brown@terra.es'),
(15, 'ibiza', 'Eivissa', '', '', 'CLINICA VETERINARIA SAN JOSE', 'C/ Del Metge, 7', '971 80 08 12', '', ''),
(16, 'ibiza', 'Eivissa', '', '', 'CLINICA VETERINARIA IBICAN, SL', 'C/ Islas Canarias, 41 Local 1', '971 19 46 44', '', 'consultas@ibican.net'),
(17, 'ibiza', 'Eivissa', '', '', 'CLINICA VETERINARIA S. JORGE', 'Ctra. Aeropuerto Km 37. Edif. Luisa Oliver Loc.1', '971 39 61 38', '', 'fribas@telefonica.net'),
(18, 'ibiza', 'Sant  Antoni de Portmany', '', '', 'CLINICA VETERINARIA SAN ANTONIO C.B.', 'C/ Bartolomé Vicente Ramón, 30 Edif. Progreso Bj', '971 34 15 16', '', 'vetersanan@terra.es'),
(19, 'ibiza', 'Sant  Antoni de Portmany', '', '', 'CLINICA VETERINARIA ARTURO RAMOS', 'C/ Ramon y  Cajal, 40', '971 34 79 79', '', 'clinica.arturo@gmail.com'),
(20, 'ibiza', 'Sant  Antoni de Portmany', '', '', 'CLINICA VETERINARIA PORT DES TORRENT', 'Avda. De San Agustin, 216 Local 2', '971 80 40 22', '', ''),
(21, 'ibiza', 'Santa Eulalia des Riu', 'Puig d’en Valls', '', 'CENTRO VETERINARIO PITIUSO', 'C/ Del Mar, Nº 11 Izd.    Puig d’en Valls', '971 31 96 96', '', ''),
(22, 'ibiza', 'Santa Eulalia des Riu', 'Puig d’en Valls', '', 'CLINICA VETERINARIA PUIG D''EN VALLS', 'C/ Ciudad Jardín II, Esc. L, Local 1   Puig d’en Valls', '971 31 52 23', '', ''),
(23, 'ibiza', 'Santa Eulalia des Riu', '', 'Barri Can Creu', 'CENTRO VETERINARIO PATAGONIA', 'C/ Estruç, 22  Barri Can Creu', '971 59 84 04', '', 'cvpatagonia@hotmail.es'),
(24, 'ibiza', 'Santa Eulalia des Riu', 'Barri Can Creu', '', 'CLINICA VETERINARIA JESUS', 'C/ Faisà, 4     Barri Can Creu', '971 31 29 29', '', 'veterinariajesus@gmail.com'),
(25, 'ibiza', 'Santa Eulalia des Riu', 'Siesta', '', 'CLINICA VETERINARIA C.B.', 'C/ De Las Petunias, 9    Siesta', '971 33 85 42', '', ''),
(26, 'ibiza', 'Santa Eulalia des Riu', '', '', 'CLINICA VETERINARIA STA. EULALIA', 'C/ Sa Rota De''n Pere Cardona, S/n', '971 33 22 78', '', ''),
(27, 'ibiza', 'Santa Eulalia des Riu', '', '', 'CLINICA VETERINARIA KANS', 'C/ San Vicente, 77', '971 33 26 33', '', ''),
(28, 'formentera', 'formentera', '', '', 'CLINICA VETERINARIA DOCTOR AUÑON', 'C/ Levante, 19 - 20 Bj (pl. IllesPitiuses)', '971 32 12 62', '', 'ecuestres@gmail.com'),
(29, 'formentera', 'formentera', 'Sant  Ferran', '', 'CLINICA VETERINARIA FORMENTERA', 'Avda. Guillem de Montgrí, 50 Sant  Ferran', '971 32 90 11', '', 'clinica@veterinariaformentera.com'),
(30, 'mallorca', 'Alcúdia', '', '', 'CLINICA VETERINARIA M. BERGAS', 'Avda. De La Marina, 10', '971 54 79 76', '', ''),
(31, 'mallorca', 'Alcúdia', '', '', 'ALCUDIA MAGATZEM, SL SOLVET CV', 'C/ Sol, 1 Bj', '971 54 64 17', '', ''),
(32, 'mallorca', 'Alcúdia', '', '', 'GARDELITO', 'Ctra. Artà, 83  Pto. Alcudia', '971 89 11 15', '', 'gardelitosl@hotmail.com'),
(33, 'mallorca', 'Algaida', '', '', 'ALGAIDAVET SCP', 'C/ Des Reis, 5  P.b', '971 66 59 22', '', 'algaida@veterinaris-montuiri.com'),
(34, 'mallorca', 'Andratx', '', '', 'CLINICA VETERINARIA Y. KOOPMANS', 'C/ García Morato, 17  Bj    Pto. Andratx', '971 67 40 57', '', 'y.koopmans@yahoo.es'),
(35, 'mallorca', 'Andratx', '', '', 'SERVICIO VETERINARIO ANDRAITX', 'C/ Jaume Torrella, 16', '971 13 68 72', '', ''),
(36, 'mallorca', 'Artà', '', '', 'VETERCLINIC SLP', 'C/ Constitución, 19', '971 56 74 74', '', 'veterclinicsl@gmail.com'),
(37, 'mallorca', 'Artà', '', '', 'VETERCLINIC', 'C/ Costa i Llobera, 83', '971 83 68 83', '', ''),
(38, 'mallorca', 'Artà', 'Colonia San Pere', '', 'VETERINARIO TIEARZT-PETSHOP', 'C/ Virgen María, 28  Paseo Mar   Colonia San Pere', '971 58 93 25', '', 'dr.gordon.schier@gmx.net'),
(39, 'mallorca', 'Binissalem', '', '', 'CONSULTORIO VETERINARIO M. AMENGUAL', 'C/ Catedratic  Llabres, 28', '971 51 20 63', '', 'vinivet@jazfree.com'),
(40, 'mallorca', 'Bunyola', '', '', 'CONSULTORIO VETERINARIO BUNYOLA', 'C/ Sant Pere, 17  B', '971 61 51 81', '', ''),
(41, 'mallorca', 'Bunyola', ' Palmanyola', '', 'CENTRE VETERINARI PALMANYOLA', 'C/ Violetas, 13 Local 3    Palmanyola', '971 14 95 71', '', 'martamassanet@hotmail.com'),
(42, 'mallorca', 'Calvia', 'Cas Català', '', 'CLINICA VETERINARIA CAS CATALA', 'Ctra. Andratx, 12   Cas Català', '971 70 13 33', '', 'clivet@atlas.com.es'),
(43, 'mallorca', 'Calvia', '', '', 'CLINICA VETERINARIA BENDINAT', 'C/ Arquitecto Francisco Casas, 17    Local Bendinat', '971 40 44 59', '', 'nickmurg@hotmail.com'),
(44, 'mallorca', 'Calvia', 'Portals Nous', '', 'CLINICA VETERINARIA M. PIRRON', 'Ctra. Andratx, 43 Local 14   Portals Nous', '971 67 76 06', '', ''),
(45, 'mallorca', 'Calvia', ' Portals Nous', '', 'CLINICA VETERINARIA G. PALMER', 'C/ Garcilaso De La Vega, 7   PortalsNous', '971 67 77 55', '', ''),
(46, 'mallorca', 'Calvia', 'Son Caliu - Palmanova', '', 'CONSULTA VETERINARIA', 'C/ Jardiel Poncela, 2   Son Caliu - Palmanova', '971 68 36 39', '', 'karina@pirron.com'),
(47, 'mallorca', 'Calvia', '', '', 'CLINICA VETERINARIA SON FERRER', 'C/ Aliga, 2  Local 10', '971 23 02 12', '', 'cvsonferrer_@hotmail.com'),
(48, 'mallorca', 'Calvia', '', '', 'CLINICA VETERINARIA EL TORO', 'C/ Gran Via, 24  Edif. H 2 - C 1', '971 23 23 23', '', ''),
(49, 'mallorca', 'Calvia', 'Santa Ponsa', '', 'CLINICA VETERINARIA STA. PONSA', 'C/ Gran Vía Rio Sil, 12   Santa Ponsa', '971 69 23 23', '', 'cvsantaponsa@hotmail.com'),
(50, 'mallorca', 'Calvia', 'Paguera', '', 'CLINICA VETERINARIA PAGUERA', 'C/ Pozo, 3   Paguera', '971 68 95 25', '', 'info@clinicaveterinariapaguera.es'),
(51, 'mallorca', 'Calvia', '', '', 'SERVEI URGENCIES V. I. BALEAR SL ', 'C/ Rectoria, 5', '971 67 09 10', '', ''),
(52, 'mallorca', 'Campos', '', '', 'CLINICA VETERINARIA F. FERRER/ I. MAYOL', 'C/ Nicolas Oliver Fullana, 1', '971 65 22 40', '', 'f.ferrer@colvet.es'),
(53, 'mallorca', 'Campos', '', '', 'CLÍNICA VETERINARIA PEL I PLOMES', 'C/ Antelm Obrador, 26  Local 3', '871 85 92 31', '', 'peliplomes@hotmail.com'),
(54, 'mallorca', 'Capdepera', '', '', 'CENTRO VETERINARIO CAPDEPERA', 'C/ Feliu More y Amengual , 8', '971 56 38 35', '', 'jesus140962@gmail.com'),
(55, 'mallorca', 'Capdepera', '', '', 'CLINICA VETERINARIA G. MORCILLO', 'C/ Puerto, 2', '971 56 58 58', '', ''),
(56, 'mallorca', 'Capdepera', '', '', 'CLINICA VETERINARIA CALA RATJADA', 'C/ Via Mallorca, 2   Edif. Nereida  Local 8', '971 56 50 76', 'www.tierarzt-calaratjada.com', 'haug@tierarzt-calaratjada.com'),
(57, 'mallorca', 'Consell', '', '', 'CONSULTORI VETERINARI AMIC MEU', 'Placeta Des Pou, 1 A', '971 62 25 78', '', ''),
(58, 'mallorca', 'Esporles', '', '', 'CLINICA VETERINARIA LOS TILOS', 'Pl. De''s Brollador, 3', '971 61 93 97', '', 'sebas790@hotmail.com'),
(59, 'mallorca', 'Felanitx', '', '', 'CONSULTORIO VETERINARIO S. LLULL', 'C/ Burgues, 3', '971 58 15 79', '', ''),
(60, 'mallorca', 'Felanitx', '', '', 'CLINICA VETERINARIA JOSE ANGOSTO', 'C/ Bartolomé Caldenty, 4  Bj', '971 58 14 47', '', 'joseangosto@gosti.e.telefonica.net'),
(61, 'mallorca', 'Felanitx', '', '', 'CLINICA VETERINARIA FELANITX', 'C/ Sa Mola, 4', '971 58 32 34', '', 'cv.felanitx@hotmail.com'),
(62, 'mallorca', 'Felanitx', 'Porto Colom', '', 'CLINICA  CALDERON', 'C/ Serra, 13    Porto Colom', '971 82 42 41', '', ''),
(63, 'mallorca', 'Inca', '', '', 'CLINICA VETERINARIA COMARCAL', 'Avda. D''alcúdia, 134', '971 87 09 16', '', 'cvetcomarcal@gmail.com'),
(64, 'mallorca', 'Llucmajor', 'Bahia Grande', '', 'CLINICA VETERINARIA BAHIA', 'C/ Almirante Viarna, 9   Bahia Grande', '971 74 18 86', '', ''),
(65, 'mallorca', 'Inca', '', '', 'CLINICA VETERINARIA ES RAIGUER', 'C/ Miquel Bisellac, 4', '971 50 14 90', '', ''),
(66, 'mallorca', 'Inca', '', '', 'CLINICA VETERINARIA INCA C.B.', 'C/ Malferits, 34   Esq  Mercaderies', '971 50 42 71', '', ''),
(67, 'mallorca', 'Inca', '', '', 'RUBINCA CLINVET', 'C/ Balanguera, 96 B', '971 88 06 69', '', 'rubincaclinvet@telefonica.net'),
(68, 'mallorca', 'Inca', '', '', 'SERVEIS VETERINARIS CIUTAT D''INCA', 'Avda. General Luque, 372', '971 50 54 83', '', 'svciutatdinca@gmail.com'),
(69, 'mallorca', 'Llucmajor', '', '', 'CONSULTORIO VETERINARIO GUILLEM RUBÍ', 'Ronda Antoni Ramis Rebassa, 129', '971 12 06 45', '', ''),
(70, 'mallorca', 'Llucmajor', '', '', 'CLINICA VETERINARIA MONTUÏRI SCP/ HOSPITAL LLUCMAJOR', 'C/ Cardenal Rossell, 101', '971 66 13 78', '', ' llucmajor@veterinaris-montuiri.com'),
(71, 'mallorca', 'Llucmajor', 'Arenal', '', 'MASCOTAS', 'C/ Berga, 48 Bj     Arenal de Llucmajor', '971 44 00 88', '', 'lcorromolas@hotmail.com'),
(72, 'mallorca', 'Llucmajor', '', '', 'CLINICA VETERINARIA EXOTICS I +', 'C/ Cardenal Rossell, 7 Bajos', '971 12 00 36', '', 't_d_m6@hotmail.com'),
(73, 'mallorca', 'Llucmajor', 'Arenal', '', 'CLINICA EUROTIERKLINIK', 'C/ Dragonera, 3   Arenal', '971 44 12 13', '', 'info@euro-tierklinik.de'),
(74, 'mallorca', 'Llucmajor', 'Maioris', '', 'CLÍNICA VETERINARIA MAIORIS C.B.', 'Ctra. Cap Blanc Km 6,3 Ccom     Maioris 1ªplanta Loc38', '971 74 84 20', '', 'cvm@clinicaveterinariamaioris.es'),
(75, 'mallorca', 'Llucmajor', '', '', 'CLINICA VETERINARIA LLUCMAJOR, S.L.', 'C/ NicolàsTaberner, 27', '971 66 17 06', '', 'clilluc@hotmail.com'),
(76, 'mallorca', 'Llucmajor', '', '', 'KAMI VETERINARIA', 'Ronda Ponent, 68   Local 4', '971 66 97 50', '', 'kami.vet@gmx.de'),
(77, 'mallorca', 'Manacor', 'Porto Cristo', '', 'CONSULTORIO VETERINARIO PORTOCRISTO', 'C/ Monjas, 11', '971 82 27 48', '', 'rosa.herruzo@terra.es'),
(78, 'mallorca', 'Manacor', 'Porto Cristo', '', 'CONSULTORIO VETERINARIO F. J. CRENDE', 'C/ Ronda Oeste, 50    Porto Cristo', '971 82 23 85', '', 'veterinariafcrende@hotmail.com'),
(79, 'mallorca', 'Manacor', '', '', 'CLINICA VETERINARIA ZOOCLINIC', 'C/ Ronda Del Port, 100', '971 84 42 20', '', 'c.zooclinic@colvet.es'),
(80, 'mallorca', 'Manacor', '', '', 'CLINICA VETERINARIA NOUCLINIC', 'C/ Historiador Truyols, 2', '971 84 50 47', '', 'nouclinic@yahoo.es'),
(81, 'mallorca', 'Manacor', '', '', 'CLINICA VETERINARIA R. RIPOLL', 'C/ Salvador Juan, 36', '971 55 41 29', '', ''),
(82, 'mallorca', 'Manacor', '', '', 'CLINICA MON VETERINARI', 'Paseo Ferrocarril, 100', '971 55 42 65', '', 'monveter@teleline.es'),
(83, 'mallorca', 'Marratxi', 'Sa Cabaneta', '', 'CLÍNICA VETERINARIA SANT MARÇAL S.L.', 'Casa Del Poble Esq   Andreu Juan Batle L 8  Cabaneta', '971 60 32 12', '', 'santmarsal@cvet.e.telefonica.net'),
(84, 'mallorca', 'Marratxi', '', '', 'CLINICA VETERINARIA ES FIGUERAL', 'Avda. Princeps D''Espanya, 31', '971 60 52 37', '', 'lucasarbona@gmail.com'),
(85, 'mallorca', 'Marratxi', 'Portol', '', 'CLINICA VETERINARIA PORTOL', 'C/ Rocallisa, 22     Portol', '971 60 27 25', '', 'anaveterin@hotmail.com'),
(86, 'mallorca', 'Marratxi', '', '', 'CLINICA VETERINARIA CAS MENESCAL', 'C/ Gladiol, 25 B', '971 60 81 96', '', 'casmenescal@hotmail.com'),
(87, 'mallorca', 'Marratxi', '', '', 'CLÍNICA VETERINARIA FAYCAN C.B.', 'Camino De La Cabana, 65 Local 3', '971 60 87 49', '', 'clinicafaycan@hotmail.com'),
(88, 'mallorca', 'Montuïri', '', '', 'CLINICA VETERINARIA MONTUÏRI SCP', 'Camí de Ca''n Tamos, s/n', '971 64 66 49', '', 'montuiri@veterinaris-montuiri.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
