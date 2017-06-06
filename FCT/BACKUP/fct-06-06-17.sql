-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-06-2017 a las 08:02:45
-- Versión del servidor: 10.1.19-MariaDB
-- Versión de PHP: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `fct`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `centro`
--

CREATE TABLE `centro` (
  `id_centro` int(5) NOT NULL,
  `nombre_centro` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `direccion` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `localidad` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` varchar(12) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tipo` varchar(12) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comentarios` text COLLATE utf8mb4_unicode_ci,
  `imagen` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `centro`
--

INSERT INTO `centro` (`id_centro`, `nombre_centro`, `direccion`, `localidad`, `telefono`, `tipo`, `comentarios`, `imagen`) VALUES
(1, 'CPR FPE ACADEF FORMACIÓN PROFESIONAL DEPORTIVA\n', 'Avenida De La Condesa De Chinchón, 21 ', 'Boadilla del Monte', NULL, ' Privado', NULL, NULL),
(2, 'CPR FPE ACADEF FORMACIÓN PROFESIONAL DEPORTIVA', 'Calle María Zambrano, S/n', 'Valdemoro', NULL, 'Privado', NULL, NULL),
(3, 'C DOC MILITAR ACADEMIA DE INGENIEROS DEL EJERCITO DE TIERRA\n', 'Carretera De Torrelodones A Colmenar Viejo, K', 'Hoyo de Manzanares', NULL, 'Público', NULL, NULL),
(4, 'IES AFRICA', 'Calle Portugal, 41', 'Fuenlabrada', '916073584', 'Público', NULL, NULL),
(5, 'CPR FPE AFUERA I', 'Plaza De Santa Ana, 13 ', ' Madrid', '914295151', 'Privado', NULL, NULL),
(6, 'CPR FPE AFUERA II', 'Carrera De San Francisco, 11 ', 'Madrid', '913653863', 'Concertado', NULL, NULL),
(7, 'IES AGORA', 'Calle Manuel De Falla, 54-56', 'Alcobendas', '916515700', 'Público', NULL, NULL),
(8, 'CEPA AGUSTINA DE ARAGON', 'Calle Camino De Humanes, 63 ', 'Móstoles', '916852466', 'Público', NULL, NULL),
(9, 'CPR INF-PRI-SEC ALAMEDA DE OSUNA', 'Paseo De La Alameda De Osuna, 17 ', 'Madrid', '917427011', 'Privado', NULL, NULL),
(10, 'IES ALARNES', 'Calle Toledo, 44 ', 'Getafe', '916814203', 'Público', NULL, NULL),
(11, 'CEPA ALFAR', 'Calle Del Cabo San Vicente, 1 ', 'Alcorcón', '916102917', 'Público', NULL, NULL),
(12, 'IES ALONSO DE AVELLANEDA', 'Calle Vitoria, 3 ', 'Alcalá de Henares', '918881174', 'Público', NULL, NULL),
(13, 'IES ALPAJES', 'Calle De Las Moreras, 28 ', 'Aranjuez', '918920298', 'Público', NULL, NULL),
(14, 'IES AL-SATT', 'Avenida De Europa, S/n ', 'Algete', '916282412', 'Público', NULL, NULL),
(15, 'CPR INF-PRI-SEC ALTAMIRA', 'Calle Gerona, 4 ', 'Fuenlabrada', '916155866', 'Concertado', NULL, NULL),
(16, 'IES ALTO JARAMA', 'Calle Caja Ahorros Y Monte De Piedad, 13 ', 'Torrelaguna', '918485654', 'Público', NULL, NULL),
(17, 'CEPA ALUCHE', 'Calle De Ocaña, 35bis ', 'Madrid', '917179100', 'Público', NULL, NULL),
(18, 'CPR INF-PRI-SEC AMANECER', 'Avenida De Pablo Iglesias, S/n ', 'Alcorcón', '916439092', 'Privado', NULL, NULL),
(19, 'CPR PRI-SEC ANDEL', 'Camino Fuentecisneros, 39 ', 'Alcorcón', '916655239', 'Concertado', NULL, NULL),
(20, 'IES ANGEL CORELLA', 'Calle Del Pradillo, 3 ', 'Colmenar Viejo', '918455650', 'Público', NULL, NULL),
(21, 'IES ANSELMO LORENZO', 'Avenida Abogados De Atocha, 4 ', 'San Martín de la Vega', '918087800', 'Público', NULL, NULL),
(22, 'IES ANTONIO DE NEBRIJA', 'Avenida De La O.n.u., 81 ', 'Móstoles', '916466443', 'Público', NULL, NULL),
(23, 'IES ANTONIO MACHADO', 'Calle Alalpardo, S/n ', 'Alcalá de Henares', '918892450', 'Público', NULL, NULL),
(24, 'CPR FPE APEC', 'Paseo De Santa María De La Cabeza, 58 ', 'Madrid', '914674810', 'Privado', NULL, NULL),
(25, 'CPR INF-PRI-SEC ARCADIA', 'Calle Cetrería, 2 ', 'Villanueva de la Cañada', '918162322', 'Concertado', NULL, NULL),
(26, 'CPR INF-PRI-SEC ARETEIA', 'Calle De La Salvia, 24 ', 'Alcobendas', '916509102', 'Privado', NULL, NULL),
(27, 'IES ARQUITECTO VENTURA RODRIGUEZ', 'Calle De Severo Ochoa, 4 ', 'Boadilla del Monte', '916336271', 'Público', NULL, NULL),
(28, 'CPR FPE ARZOBISPO MORCILLO', 'Calle Estrella De Elola, 10 ', 'Valdemoro', '918950116', 'Concertado', NULL, NULL),
(29, 'IES ATENEA', 'Plaza Santiago De Chuco, 1 ', 'San Sebastián de los Reyes', '916590934', 'Público', NULL, NULL),
(30, 'IES BARAJAS', 'Avenida De América, 119 ', 'Madrid', '917426211', 'Público', NULL, NULL),
(31, 'IES BARRIO DE BILBAO', 'Calle De Villaescusa, S/n ', 'Madrid', '913041018', 'Público', NULL, NULL),
(32, 'IES BEATRIZ GALINDO', 'Calle De Goya, 10 ', 'Madrid', '915764706', 'Público', NULL, NULL),
(33, 'IES BENJAMIN RUA', 'Calle Tulipán, 1 ', 'Móstoles', '916645070', 'Público', NULL, NULL),
(34, 'CPR INF-PRI-SEC BIENAVENTURADA VIRGEN MARIA', 'Calle De Cullera, 17 ', 'Madrid', '914623372', 'Concertado', NULL, NULL),
(35, 'CPR FPE C.E.S. FUENCARRAL', 'Calle De Labastida, 13 ', 'Madrid', '917292862', 'Concertado', NULL, NULL),
(36, 'CPR FPE C.RECURSOS COM.SORDA JUAN LUIS MARROQUIN', 'Calle De Las Islas Aleutianas, 28 ', 'Madrid', '913768560', 'Privado', NULL, NULL),
(37, 'CPR FPE CAB FORMACION', 'Calle Gregorio Marañón, 8 ', 'Leganés', NULL, 'Privado', NULL, NULL),
(38, 'CPR INF-PRI-SEC CALASANZ', 'Calle Santiago, 29 ', 'Alcalá de Henares', '918892900', 'Concertado', NULL, NULL),
(39, 'IES CALDERON DE LA BARCA', 'Calle De Antonio De Leyva, 84 ', 'Madrid', '915608300', 'Público', NULL, NULL),
(40, 'CPR FPE CAMPUS FP ARGANDA ARTES CULINARIAS E INDUSTRIAS CREATIVAS\n', 'Calle Camino De Puente Viejo, 2 ', 'Arganda del Rey', '635030315', 'Privado', NULL, NULL),
(41, 'CPR FPE CAMPUS FP EMPRENDE', 'Avenida De La Industria, 70 ', 'Humanes de Madrid', '810520405', 'Privado', NULL, NULL),
(42, 'CPR CAMPUS FP GETAFE ESCUELA DE NEGOCIOS Y TECNOLOGÍAS DE LA COMUNICACIÓN\n', 'Avenida De Las Ciudades, 10 ', 'Getafe', '911833122', 'Privado', NULL, NULL),
(43, 'CPR FPE CAMPUS FP LEGANES', 'Calle Siete Picos, 6 ', 'Leganés', NULL, 'Privado', NULL, NULL),
(44, 'CPR FPE CAMPUS FP MADRID VENTAS', 'Calle Del Marqués De Mondéjar, 29 ', 'Madrid', '911833122', 'Privado', NULL, NULL),
(45, 'CPR FPE CAMPUS FP SOCIOSANITARIO MOSTOLES', 'Avenida Cámara De La Industria, 16 ', 'Móstoles', '916465306', 'Privado', NULL, NULL),
(46, 'CPR FPE CAMPUS INTERNACIONAL DE ESTUDIOS SUPERIORES', 'Calle De Los Vascos, 17 ', 'Madrid', '913101803', 'Privado', NULL, NULL),
(47, 'CEPA CANILLEJAS', 'Calle De Las Musas, 11 ', 'Madrid', '917411860', 'Público', NULL, NULL),
(48, 'IES CARLOS BOUSOÑO', 'Calle Pinos, 10 ', 'Majadahonda', '916347660', 'Público', NULL, NULL),
(49, 'IES CARLOS MARIA RODRIGUEZ DE VALCARCEL', 'Plaza Del Encuentro, 4 ', 'Madrid', '914393570', 'Público', NULL, NULL),
(50, 'IES CARMEN CONDE', 'Avenida De Atenas, 45bis ', 'Rozas de Madrid, Las', '916319487', 'Público', NULL, NULL),
(51, 'IES CARMEN MARTIN GAITE', 'Carretera De Cadalso De Los Vidrios, S/n ', 'Navalcarnero', '918110565', 'Público', NULL, NULL),
(52, 'IES CARMEN MARTÍN GAITE', 'Avenida Del Marqués De Santillana, 14 ', 'Moralzarzal', '918578517', 'Público', NULL, NULL),
(53, 'CEPA CASA DE LA CULTURA', 'Calle Guadalajara, 3 ', 'Getafe', '916959798', 'Público', NULL, NULL),
(54, 'CPR INF-PRI-SEC CASA DE LA VIRGEN', 'Calle De La Virgen Del Val, 1 ', 'Madrid', '914041788', 'Concertado', NULL, NULL),
(55, 'CPR FPE CENP - FP', 'Calle De Joaquín María López, 60bis ', 'Madrid', '914484841', 'Privado', NULL, NULL),
(56, 'CPR FPE CENTRO BOBATH DE FORMACION PROFESIONAL', 'Calle Del Mirador De La Reina, 115 ', 'Madrid', '913767190', 'Concertado', NULL, NULL),
(57, 'CPR INF-PRI-SEC CENTRO CULTURAL SALMANTINO', 'Calle Del Puerto De Pajares, 6 ', 'Madrid', '914786571', 'Concertado', NULL, NULL),
(58, 'IES CENTRO DE CAPACITACION AGRARIA', 'Avenida Viveros, 1 ', 'Villaviciosa de Odón', '916160860', 'Público', NULL, NULL),
(59, 'CPR FPE CENTRO DE ESTUDIOS DEL VIDEO', 'Calle De Gaztambide, 65 ', 'Madrid', '915502960', 'Privado', NULL, NULL),
(60, 'CPR FPE CENTRO DE ESTUDIOS FINANCIEROS', 'Calle De Viriato, 52 ', 'Madrid', '914444920', 'Privado', NULL, NULL),
(61, 'CPR FPE CENTRO DE ESTUDIOS PROFESIONALES (C.E.P.)\n', 'Calle Lope De Vega, 1 ', 'Alcalá de Henares', '918881475', 'Concertado', NULL, NULL),
(62, 'CPR FPE CENTRO DE ESTUDIOS PROFESIONALES CAMINO REAL', 'Avenida Constitución, 190 ', 'Torrejón de Ardoz', '916751535', 'Privado', NULL, NULL),
(63, 'CPR FPE CENTRO DE ESTUDIOS PROFESIONALES DE LA UNIVERSIDAD CAMILO JOSE CELA.CENTRO FERRAZ\n', 'Calle Del Valle De Santa Ana, 1 ', 'Boadilla del Monte', '911610292', 'Privado', NULL, NULL),
(64, 'CENTRO DE ESTUDIOS PROFESIONALES DE LA UNIVERSIDAD CAMILO JOSE CELA.CENTRO VILLAFRANCA DEL CASTILLO\n', 'Calle De Quintana, 21 ', 'Madrid', NULL, 'Privado', NULL, NULL),
(65, 'CPR FPE CENTRO DE ESTUDIOS PROFESIONALES DE L', 'Calle Castillo De Alarcón, 49 ', 'Villanueva de la Cañada', NULL, 'Privado', NULL, NULL),
(66, 'CPR FPE CENTRO DE ESTUDIOS SUPERIORES JUAN PA', 'Calle De Estocolmo, 1bis ', 'Alcorcón', '910149867', 'Privado', NULL, NULL),
(67, 'CPR FPE CENTRO DE ESTUDIOS SUPERIORES PROFESI', 'Calle De Bernardino Obregón, 25 ', 'Madrid', NULL, 'Privado', NULL, NULL),
(68, 'CPR FPE CENTRO DE ESTUDIOS TECNOLOGICOS Y SOC', 'Carretera Pozuelo Majadahonda, K1,8 ', 'Pozuelo de Alarcón', '917091413', 'Privado', NULL, NULL),
(69, 'CPR FPE CENTRO DE F.P. ALFONSO X EL SABIO', 'Avenida Universidad, 1 ', 'Villanueva de la Cañada', '918109200', 'Privado', NULL, NULL),
(70, 'CPR FPE CENTRO DE FORMACIÓN DE PELUQUERIA Y E', 'Calle Río Ebro, 4 ', 'Parla', '916058799', 'Privado', NULL, NULL),
(71, 'CPR FPE CENTRO DE FORMACIÓN PROFESIONAL FUNDA', 'Calle De Rivas, 25 ', 'Madrid', '913233459', 'Privado', NULL, NULL),
(72, 'CPR FPE CENTRO DE FORMACION TECNICA', 'Calle De Carretas, 14 ', 'Madrid', '915211939', 'Privado', NULL, NULL),
(73, 'CPR FPE CENTRO DE HUMANIZACION DE LA SALUD', 'Calle Sector Escultores, 39 ', 'Tres Cantos', '912299939', 'Concertado', NULL, NULL),
(74, 'CPR FPE CENTRO DE PERFECCIONAMIENTO Y FORMACI', 'Calle De Fuentelviejo, 4 ', 'Madrid', NULL, 'Privado', NULL, NULL),
(75, 'CPR FPE CENTRO DE PROMOCION RURAL DE LA MUJER', 'Calle De Los Ganaderos, 1 ', 'Colmenar Viejo', '918458337', 'Concertado', NULL, NULL),
(76, 'CPR FPE CENTRO EDUCATIVO JUMP UP TORREJON', 'Plaza Pablo De Olavide, 1 ', 'Torrejón de Ardoz', '911766620', 'Privado', NULL, NULL),
(77, 'CPR FPE CENTRO EDUCATIVO JUMP UP VILLAMADRID', 'Calle Transversal Sexta, 17 ', 'Madrid', '911766620', 'Privado', NULL, NULL),
(78, 'CPR INF-PRI-SEC CENTRO EDUCATIVO PONCE DE LEO', 'Calle De Eduardo Barreiros, 6 ', 'Madrid', '913178441', 'Concertado', NULL, NULL),
(79, 'CPR FPE CENTRO EUROPEO DE ESTUDIOS PROFESIONA', 'Paseo De Extremadura, 33 ', 'Madrid', '915266116', 'Privado', NULL, NULL),
(80, 'CPR FPE CENTRO MESENA', 'Calle De Emeterio Castaños, 11 ', 'Madrid', NULL, 'Privado', NULL, NULL),
(81, 'CPR FPE CENTRO PROFESIONAL EUROPEO DE MADRID ', 'Calle Tajo, S/n ', 'Villaviciosa de Odón', '912115052', 'Privado', NULL, NULL),
(82, 'CPR FPE CENTRO PROFESIONAL EUROPEO DE MADRID-', 'Avenida De Fernando Alonso ', 'Alcobendas', '912115052', 'Privado', NULL, NULL),
(83, 'CPR FPE CENTRO SUPERIOR DE HOSTELERIA DEL MED', 'Paseo De La Ermita Del Santo, 48 ', 'Madrid', '910101487', 'Privado', NULL, NULL),
(84, 'CPR FPE CENTRO SUPERIOR DE INNOVACIÓN Y DESAR', 'Calle De Los Pirineos, 55 ', 'Madrid', '911440632', 'Privado', NULL, NULL),
(85, 'CPR FPE CES, ESCUELA SUPERIOR DE IMAGEN Y SON', 'Calle De Mar Adriático, 11 ', 'Madrid', '917250000', 'Privado', NULL, NULL),
(86, 'CPR FPE CESUR OPEN', 'Calle De La Gavia Seca, 15 ', 'Madrid', '952122500', 'Privado', NULL, NULL),
(87, 'CPR FPE CESUR-CLARET', 'Calle De Corazón De María, 1 ', 'Madrid', NULL, 'Privado', NULL, NULL),
(88, 'CPR FPE CESUR-MADRID', 'Calle De Luis Cabrera, 63 ', 'Madrid', '913005958', 'Privado', NULL, NULL),
(89, 'CPR FPE CESUR-MADRID II', 'Calle De Albarracín, 27 ', 'Madrid', '914400000', 'Privado', NULL, NULL),
(90, 'CPR FPE CEU-INSTITUTO SUPERIOR DE ESTUDIOS PR', 'Calle De Los Pirineos, 55 ', 'Madrid', '915447040', 'Privado', NULL, NULL),
(91, 'CPR FPE CEU-INSTITUTO SUPERIOR DE ESTUDIOS PR', 'Carrera Carretera Boadilla Del Monte, Km 5,30', 'Boadilla del Monte', NULL, 'Privado', NULL, NULL),
(92, 'CEPA CID CAMPEADOR', 'Calle Del General García Escámez, 12 ', 'Madrid', '917058402', 'Público', NULL, NULL),
(93, 'IES CIUDAD DE JAEN', 'Camino Del Río, 5 ', 'Madrid', '913173000', 'Público', NULL, NULL),
(94, 'CPR INF-PRI-SEC CIUDAD DE LOS MUCHACHOS', 'Calle De Santa Marta, 15 ', 'Madrid', '914342030', 'Concertado', NULL, NULL),
(95, 'CPR INF-PRI-SEC CIUDAD EDUCATIVA MUNICIPAL HI', 'Avenida Ocho De Marzo, 1 ', 'Rivas-Vaciamadrid', '917139700', 'Concertado', NULL, NULL),
(96, 'IES CIUDAD ESCOLAR', 'Carretera De Colmenar Viejo, K12,8 ', 'Madrid', '917341244', 'Público', NULL, NULL),
(97, 'IES CLARA DEL REY', 'Calle Del Padre Claret, 8 ', 'Madrid', '915195257', 'Público', NULL, NULL),
(98, 'CPR FPE CODESA', 'Calle De Diego De León, 34 ', 'Madrid', '914318519', 'Privado', NULL, NULL),
(99, 'CPR INF-PRI-SEC COLEGIO AQUILA', 'Calle Planeta Júpiter, 2 ', 'Parla', '914240913', 'Concertado', NULL, NULL),
(100, 'CPR INF-PRI-SEC COLEGIO ARULA', 'Calle De Alcalá (alalpardo), 23 ', 'Valdeolmos-Alalpardo', '916205198', 'Concertado', NULL, NULL),
(101, 'CPR FPE COLEGIO CAMINO REAL SAN SEBASTIAN DE ', 'Avenida De Baleares, 10 ', 'San Sebastián de los Reyes', NULL, 'Privado', NULL, NULL),
(102, 'CPR INF-PRI-SEC COLEGIO CAUDE', 'Calle Barco, 2 ', 'Majadahonda', '916028022', 'Concertado', NULL, NULL),
(103, 'CPR INF-PRI-SEC COLEGIO DIOCESANO MARIA INMAC', 'Calle De Joaquín Turina, 62 ', 'Madrid', '915092950', 'Concertado', NULL, NULL),
(104, 'CPR INF-PRI-SEC COLEGIO EL CATON', 'Calle Ronda De Zaragoza, S/n ', 'Torrejón de Velasco', '918124344', 'Concertado', NULL, NULL),
(105, 'CPR INF-PRI-SEC COLEGIO ESTUDIANTES LAS TABLA', 'Calle De Fromista, 1 ', 'Madrid', '918250075', 'Concertado', NULL, NULL),
(106, 'CPR INF-PRI-SEC COLEGIO EUROPEO ARISTOS', 'Avenida De Juan Carlos I, 12 ', 'Getafe', '916839889', 'Privado', NULL, NULL),
(107, 'CPR INF-PRI-SEC COLEGIO INTERNACIONAL J.H. NE', 'Avenida De Guadalajara, 28-32 ', 'Madrid', '917609184', 'Concertado', NULL, NULL),
(108, 'CPR INF-PRI-SEC COLEGIO LA MILAGROSA', 'Calle De Monseñor Oscar Romero, 54 ', 'Madrid', '914623066', 'Concertado', NULL, NULL),
(109, 'CPR INF-PRI-SEC COLEGIO LITTERATOR', 'Calle Del Patrimonio Mundial, 5 ', 'Aranjuez', '918927139', 'Concertado', NULL, NULL),
(110, 'CPR INF-PRI-SEC COLEGIO NOBELIS', 'Calle María Zambrano, S/n ', 'Valdemoro', '918658125', 'Concertado', NULL, NULL),
(111, 'CPR INF-PRI-SEC COLEGIO NOVA HISPALIS', 'Avenida Dos De Mayo, 4 ', 'Sevilla la Nueva', '918128291', 'Concertado', NULL, NULL),
(112, 'CPR INF-PRI-SEC COLEGIO PEÑALAR', 'Avenida De La Dehesa, S/n ', 'Torrelodones', '902252272', 'Concertado', NULL, NULL),
(113, 'CPR INF-PRI-SEC COLEGIO VALLE DEL MIRO', 'Calle De Clara Campoamor, 2 ', 'Valdemoro', '918658070', 'Concertado', NULL, NULL),
(114, 'CPR INF-PRI-SEC COLEGIO VALLMONT', 'Calle Mallorca, 2 ', 'Villanueva del Pardillo', '918102900', 'Concertado', NULL, NULL),
(115, 'CPR INF-PRI-SEC COLEGIO ZOLA VALDEMORILLO', 'Carretera Robledo De Chavela, S/n ', 'Valdemorillo', '918991678', 'Privado', NULL, NULL),
(116, 'IES CORTES DE CADIZ', 'Calle Doctores El Molar, S/n ', 'Molar, El', '918412904', 'Público', NULL, NULL),
(117, 'CPR FPE CRUZ ROJA ESPAÑOLA', 'Calle De Rafael Villa, S/n ', 'Madrid', '913609676', 'Privado', NULL, NULL),
(118, 'CEPA DAOIZ Y VELARDE', 'Calle De Fernando Ortiz, 2 ', 'Madrid', '915651055', 'Público', NULL, NULL),
(119, 'IES DE GUADARRAMA', 'Carretera Del Escorial, S/n ', 'Guadarrama', '918542212', 'Público', NULL, NULL),
(120, 'IES DE LA CABRERA', 'Calle De Las Azucenas, 12 ', 'Cabrera, La', '918688411', 'Público', NULL, NULL),
(121, 'IES DIEGO VELAZQUEZ', 'Calle Del Instituto, 1 ', 'Torrelodones', '918590405', 'Público', NULL, NULL),
(122, 'CPR INF-PRI-SEC DIVINO MAESTRO', 'Paseo De Extremadura, 165 ', 'Madrid', '914649481', 'Concertado', NULL, NULL),
(123, 'IES DOMENICO SCARLATTI', 'Calle De Valeras, 22 ', 'Aranjuez', '918910057', 'Público', NULL, NULL),
(124, 'IES DUQUE DE RIVAS', 'Paseo De La Chopera, 64 ', 'Rivas-Vaciamadrid', '916665259', 'Público', NULL, NULL),
(125, 'CPR INF-PRI-SEC EDITH STEIN', 'Calle Simca, 20 ', 'Madrid', '913412879', 'Concertado', NULL, NULL),
(126, 'CPR ES EFESO', 'Calle Del Turia, 7 ', 'Madrid', '915646444', 'Privado', NULL, NULL),
(127, 'IES EL ALAMO', 'Paseo Del Olivar, 62 ', 'Álamo, El', '918104133', 'Público', NULL, NULL),
(128, 'IES EL BURGO DE LAS ROZAS', 'Avenida De España, 141 ', 'Rozas de Madrid, Las', '916393511', 'Público', NULL, NULL),
(129, 'IES EL CAÑAVERAL', 'Avenida De La O.n.u., 81 ', 'Móstoles', '916480138', 'Público', NULL, NULL),
(130, 'IES EL ESCORIAL', 'Avenida Fresneda, S/n ', 'Escorial, El', '918907161', 'Público', NULL, NULL),
(131, 'IES EL LAGO', 'Paseo De La Puerta Del Ángel, S/n ', 'Madrid', '914796851', 'Público', NULL, NULL),
(132, 'IES EL OLIVO', 'Calle Felipe Ii, 11 ', 'Parla', '916055311', 'Público', NULL, NULL),
(133, 'CPR INF-PRI-SEC EL PILAR', 'Calle Real, 21 ', 'Soto del Real', '918476927', 'Concertado', NULL, NULL),
(134, 'CPR INF-PRI-SEC EL VALLE', 'Calle De Cordel De Pavones, 2 ', 'Madrid', '917511510', 'Concertado', NULL, NULL),
(135, 'CPR INF-PRI-SEC EL VALLE II', 'Calle De Ana De Austria, 60 ', 'Madrid', '917188426', 'Concertado', NULL, NULL),
(136, 'CPR INF-PRI-SEC EL VALLE III', 'Calle De Cebreiro, 2 ', 'Madrid', '914273503', 'Concertado', NULL, NULL),
(137, 'CPR INF-FP ENEBRAL', 'Paseo Belmas, 5 ', 'Collado Villalba', NULL, 'Privado', NULL, NULL),
(138, 'IES ENRIQUE TIERNO GALVAN', 'Avenida De Andalucía, 6,200 ', 'Madrid', '913171972', 'Público', NULL, NULL),
(139, 'IES ENRIQUE TIERNO GALVAN', 'Avenida Juan Carlos I, 12 ', 'Parla', '916981111', 'Público', NULL, NULL),
(140, 'CEPA ENTREVIAS', 'Calle De La Serena, 394 ', 'Madrid', '917861672', 'Público', NULL, NULL),
(141, 'CPR FPE ESC.TECNICA DE ENSEÑANZAS ESPECIALIZA', 'Calle De Adela Balboa, 16 ', 'Madrid', '915347084', 'Privado', NULL, NULL),
(142, 'CP FPE ESCUELA DE FORMACION ESPEC. IMAGEN DIA', 'Calle Del Profesor Martín Lagos, S/n ', 'Madrid', '913303583', 'Privado', NULL, NULL),
(143, 'IES ESCUELA DE HOSTELERIA Y TURISMO', 'Calle Camino De La Esgaravita, S/n ', 'Alcalá de Henares', '918802313', 'Público', NULL, NULL),
(144, 'CP IFP ESCUELA DE HOSTELERIA Y TURISMO SIMONE', 'Calle Del Pintor Velázquez, 64 ', 'Móstoles', '916183177', 'Público', NULL, NULL),
(145, 'IES ESCUELA DE LA VID', 'Ronda De Las Provincias, 5 ', 'Madrid', '914633100', 'Público', NULL, NULL),
(146, 'CPR FPE ESCUELA EUROPEA AYUDANTES DE DIRECCIO', 'Calle De Juan Bravo, 69 ', 'Madrid', '914115320', 'Concertado', NULL, NULL),
(147, 'CPR FPE ESCUELA INTERNACIONAL DE CIENCIAS DE ', 'Calle De La Fuente Del Rey, 2 ', 'Madrid', '913345500', 'Privado', NULL, NULL),
(148, 'CPR FPE ESCUELA POLITECNICA GINER', 'Calle De Maqueda, 8 ', 'Madrid', '915181377', 'Concertado', NULL, NULL),
(149, 'CPR FPE ESCUELA PROFESIONAL DON BOSCO', 'Calle De María Auxiliadora, 9 ', 'Madrid', '914500472', 'Privado', NULL, NULL),
(150, 'CPR FPE ESCUELA PROFESIONAL JAVERIANA', 'Calle De Alberto Aguilera, 8 ', 'Madrid', '914457350', 'Concertado', NULL, NULL),
(151, 'CPR FPE ESCUELA SUPERIOR DE FORMACION', 'Calle Del Doctor Esquerdo, 160 ', 'Madrid', '915016253', 'Privado', NULL, NULL),
(152, 'IES ESCUELA SUPERIOR DE HOSTELERIA Y TURISMO', 'Paseo De La Puerta Del Ángel (ferial Casa De ', 'Madrid', '914631100', 'Público', NULL, NULL),
(153, 'CPR FPE ESCUELA SUPERIOR DE PUBLICIDAD', 'Calle De Churruca, 14 ', 'Madrid', '915229435', 'Privado', NULL, NULL),
(154, 'IES ESCUELA TECNICO PROFESIONAL DE LA SALUD D', 'Calle Del Doctor Esquerdo, 46 ', 'Madrid', '915868912', 'Público', NULL, NULL),
(155, 'CPR FPE ESPACIO XXI', 'Calle De Galileo, 26 ', 'Madrid', '915337321', 'Privado', NULL, NULL),
(156, 'CPR FPE ESTEC-ESCUELA SUPERIOR DE TECNOLOGÍA', 'Calle Del Moscatelar, 10-12 ', 'Madrid', '910494747', 'Privado', NULL, NULL),
(157, 'IES EUROPA', 'Avenida Cerro Del Telégrafo, 2 ', 'Rivas-Vaciamadrid', '916702756', 'Público', NULL, NULL),
(158, 'CPR FPE F.P. UDIMA', 'Carretera Coruña, Km. 38,500 ', 'Collado Villalba', NULL, 'Privado', NULL, NULL),
(159, 'CPR FPE FEDA MADRID', 'Avenida De Burgos, 12 ', 'Madrid', NULL, 'Privado', NULL, NULL),
(160, 'IES FELIPE TRIGO', 'Calle Del Pintor Velázquez, 66 ', 'Móstoles', '916138035', 'Público', NULL, NULL),
(161, 'CPR ES FOMENTO-FUNDACION', 'Calle Del Padre Claret, 23 ', 'Madrid', '914134125', 'Privado', NULL, NULL),
(162, 'CPR FPE FORMATIK', 'Calle De Asura, 40 ', 'Madrid', '913881345', 'Privado', NULL, NULL),
(163, 'IES FRANCISCO DE GOYA', 'Calle De Santa Irene, 4 ', 'Madrid', '914051101', 'Público', NULL, NULL),
(164, 'IES FRANCISCO DE QUEVEDO', 'Calle De San Román Del Valle, S/n ', 'Madrid', '913065604', 'Público', NULL, NULL),
(165, 'IES FRANCISCO GINER DE LOS RIOS', 'Carretera De Barajas, 1,2 ', 'Alcobendas', '916525466', 'Público', NULL, NULL),
(166, 'IES FRANCISCO TOMAS Y VALIENTE', 'Calle De Benita Ávila, 3 ', 'Madrid', '917591114', 'Público', NULL, NULL),
(167, 'CPR INF-PRI-SEC FUENLLANA', 'Travesia Fuente Cisneros, 1 ', 'Alcorcón', '916144730', 'Concertado', NULL, NULL),
(168, 'CPR INF-PRI-SEC FUNDACION CALDEIRO', 'Avenida De Los Toreros, 45 ', 'Madrid', '917255200', 'Concertado', NULL, NULL),
(169, 'CPR FPE FUNDACION TOMILLO', 'Calle De Albuñuelas, 13-15 ', 'Madrid', '917239353', 'Concertado', NULL, NULL),
(170, 'IES GASPAR MELCHOR DE JOVELLANOS', 'Calle De Móstoles, 64 ', 'Fuenlabrada', '916971512', 'Público', NULL, NULL),
(171, 'CPR FPE GONZALEZ CAÑADAS', 'Calle De Fuencarral, 95 ', 'Madrid', '914489500', 'Concertado', NULL, NULL),
(172, 'CPR FPE GRUPO AULA', 'Calle Moratalaz, 17 ', 'Casarrubuelos', '918145283', 'Privado', NULL, NULL),
(173, 'CPR FPE GRUPO AULA FORMACIÓN Y EMERGENCIAS', 'Calle De Joaquín Blume, 15 ', 'Móstoles', NULL, 'Privado', NULL, NULL),
(174, 'CPR FPE GRUPO CTO CENTRO DE FORMACION', 'Calle De Francisco Silvela, 106 ', 'Madrid', '917824330', 'Privado', NULL, NULL),
(175, 'CPR PRI-SEC GSD  BUITRAGO', 'Avenida De Madrid, 18 ', 'Buitrago del Lozoya', '918680150', 'Concertado', NULL, NULL),
(176, 'CPR INF-PRI-SEC GSD  LAS SUERTES', 'Calle De Rafael De León, 10 ', 'Madrid', '913853505', 'Concertado', NULL, NULL),
(177, 'CPR INF-PRI-SEC GSD  VALLECAS', 'Avenida Del Parque De Palomeras Bajas, 14 ', 'Madrid', '917853412', 'Concertado', NULL, NULL),
(178, 'CPR INF-PRI-SEC GSD GUADARRAMA', 'Calle Vereda De Colmenar, 4 ', 'Guadarrama', '918547059', 'Concertado', NULL, NULL),
(179, 'CPR INF-PRI-SEC GSD LAS ROZAS', 'Calle Clara Campoamor, 1 ', 'Rozas de Madrid, Las', '916408923', 'Concertado', NULL, NULL),
(180, 'IES GUSTAVO ADOLFO BECQUER', 'Avenida De Europa, S/n ', 'Algete', '916291601', 'Público', NULL, NULL),
(181, 'CPR ES GUZMAN EL BUENO', 'Calle De Eugenio Salazar, 15 ', 'Madrid', '914150495', 'Privado', NULL, NULL),
(182, 'CPR FPE HEASE', 'Calle De La Plata, 6 ', 'Madrid', '917977610', 'Concertado', NULL, NULL),
(183, 'IES HOTEL ESCUELA DE LA COMUNIDAD DE MADRID', 'Carretera De Colmenar Viejo, K12.8 ', 'Madrid', '913721333', 'Público', NULL, NULL),
(184, 'IES HUMANEJOS', 'Avenida Juan Carlos I, 19 ', 'Parla', '916982906', 'Público', NULL, NULL),
(185, 'IES ICARO', 'Carretera De Getafe-leganés, S/n ', 'Getafe', '916834866', 'Público', NULL, NULL),
(186, 'CPR FPE IED MADRID ENSEÑANZAS PROFESIONALES', 'Calle De La Flor Alta, 8 ', 'Madrid', '914480444', 'Privado', NULL, NULL),
(187, 'IES IES CENTRO DE FORMACIÓN PROFESIONAL', 'Calle Torrente, 52 ', 'Fuenlabrada', NULL, 'Público', NULL, NULL),
(188, 'CPR FPE ILERNA MADRID', 'Calle De Francisco Navacerrada, 57 ', 'Madrid', '910841672', 'Privado', NULL, NULL),
(189, 'IES INFANTA ELENA', 'Carretera De Guadarrama, 85 ', 'Galapagar', '918587730', 'Público', NULL, NULL),
(190, 'CPR FPE INGLAN', 'Calle De La Paloma, 5 ', 'Getafe', '916951369', 'Concertado', NULL, NULL),
(191, 'CPR FPE INSTEDE FP', 'Plaza De Fernández Ladreda, 2 ', 'Madrid', NULL, 'Privado', NULL, NULL),
(192, 'CPR FPE INSTEDE POZUELO F.P.', 'Camino Alcorcón, 17 ', 'Pozuelo de Alarcón', NULL, 'Privado', NULL, NULL),
(193, 'CPR INF-PRI-SEC INSTITUCION PROFESIONAL SALES', 'Ronda De Don Bosco, 3 ', 'Madrid', '915087640', 'Concertado', NULL, NULL),
(194, 'CPR FPE INSTITUTO DE FORMACION EMPRESARIAL DE', 'Calle De Pedro Salinas, 11 ', 'Madrid', '915383858', 'Privado', NULL, NULL),
(195, 'CPR FPE INSTITUTO DE FORMACION PROFESIONAL CE', 'Calle De Joaquín Costa, 41 ', 'Madrid', '914487575', 'Privado', NULL, NULL),
(196, 'CPR FPE INSTITUTO DE FORMACION PROFESIONAL DE', 'Calle De Luis De Requesens, 18 ', 'Villarejo de Salvanés', NULL, 'Privado', NULL, NULL),
(197, 'CPR FPE INSTITUTO EUROPEO DE FORMACION TECNOL', 'Calle De Juan Fraile, 20 ', 'Galapagar', NULL, 'Privado', NULL, NULL),
(198, 'CPR FPE INSTITUTO FORMATIVO DE ACTIVIDADES DE', 'Avenida De Juan Pablo Ii, S/n ', 'Paracuellos de Jarama', NULL, 'Privado', NULL, NULL),
(199, 'CPR FPE INSTITUTO HM PROFESIONES BIOSANITARIA', 'Avenida De Montepríncipe, 25 ', 'Boadilla del Monte', '917089900', 'Concertado', NULL, NULL),
(200, 'CPR FPE INSTITUTO HM PROFESIONES BIOSANITARIA', 'Plaza Del Sol, 30 ', 'Móstoles', '918263009', 'Concertado', NULL, NULL),
(201, 'CPR FPE INSTITUTO RADIO TELEVISION ESPAÑOLA (', 'Carretera De La Dehesa De La Villa, S/n ', 'Madrid', '915815903', 'Privado', NULL, NULL),
(202, 'CPR FPE INSTITUTO SUPERIOR DE PROTOCOLO Y EVE', 'Calle Del Moscatelar, 23 ', 'Madrid', '915153314', 'Privado', NULL, NULL),
(203, 'CPR FPE INSTITUTO SUPERIOR F.P. CLAUDIO GALEN', 'Avenida Del Doctor Severo Ochoa, 53 ', 'Alcobendas', '911599957', 'Privado', NULL, NULL),
(204, 'CPR FPE INSTITUTO TECNICO DE ESTUDIOS PROFESI', 'Calle De Martín De Vargas, 17 ', 'Madrid', '914732421', 'Privado', NULL, NULL),
(205, 'CPR FPE INSTITUTO TECNICO DE ESTUDIOS PROFESI', 'Calle Del Real, 97 ', 'San Sebastián de los Reyes', '914732421', 'Privado', NULL, NULL),
(206, 'CPR FPE INSTITUTO TECNICO DE ESTUDIOS PROFESI', 'Calle De Francisco Iglesias, 17 ', 'Madrid', '912908409', 'Privado', NULL, NULL),
(207, 'CPR FPE INSTITUTO TECNICO DE ESTUDIOS PROFESI', 'Calle Camino De Humanes, 12 ', 'Móstoles', '917370513', 'Privado', NULL, NULL),
(208, 'CPR FPE INSTITUTO VOX', 'Calle Gran Vía, 59 ', 'Madrid', NULL, 'Privado', NULL, NULL),
(209, 'CPR INF-PRI-SEC INTERNACIONAL NUEVO CENTRO', 'Carretera Toledo A Villaverde, K0.5 ', 'Madrid', '917950161', 'Privado', NULL, NULL),
(210, 'IES ISAAC PERAL', 'Calle Plata, 78 ', 'Torrejón de Ardoz', '916756936', 'Público', NULL, NULL),
(211, 'IES ISLAS FILIPINAS', 'Calle De Jesús Maestro, 3 ', 'Madrid', '915544349', 'Público', NULL, NULL),
(212, 'CPR INF-PRI-SEC J.A.B.Y.', 'Calle Cristo, 22 ', 'Torrejón de Ardoz', '916750360', 'Concertado', NULL, NULL),
(213, 'IES JAIME FERRAN', 'Calle Matalpino, 22 ', 'Collado Villalba', '918501571', 'Público', NULL, NULL),
(214, 'IES JAIME FERRÁN CLÚA', 'Avenida Jean Paul Sartre, S/n ', 'San Fernando de Henares', '916723539', 'Público', NULL, NULL),
(215, 'CPR INF-PRI-SEC JESUS MARIA', 'Calle De Juan Bravo, 13 ', 'Madrid', '914319520', 'Concertado', NULL, NULL),
(216, 'CPR ES JESUS MARIA', 'Calle De Los Hermanos García Noblejas, 68 ', 'Madrid', '913671660', 'Concertado', NULL, NULL),
(217, 'IES JIMENA MENENDEZ PIDAL', 'Camino Del Molino, 3 ', 'Fuenlabrada', '914869491', 'Público', NULL, NULL),
(218, 'IES JOAN MIRO', 'Calle De La Isla De La Palma, 31 ', 'San Sebastián de los Reyes', '916527002', 'Público', NULL, NULL),
(219, 'IES JOAQUIN ARAUJO', 'Calle De La Fuente, 36 ', 'Fuenlabrada', '916000315', 'Público', NULL, NULL),
(220, 'IES JORGE MANRIQUE', 'Calle Del Mar Adriático, 2 ', 'Tres Cantos', '918040964', 'Público', NULL, NULL),
(221, 'CP IFP JOSE LUIS GARCI', 'Calle José Hierro, 10 ', 'Alcobendas', '914841828', 'Público', NULL, NULL),
(222, 'IES JOSE LUIS LOPEZ ARANGUREN', 'Calle De Colombia, 28-30 ', 'Fuenlabrada', '916976614', 'Público', NULL, NULL),
(223, 'IES JOSE LUIS SAMPEDRO', 'Avenida De La Vega, S/n ', 'Tres Cantos', '918031142', 'Público', NULL, NULL),
(224, 'CPR FPE JOSE RAMON OTERO', 'Calle De Francisco Brizuela, 1 ', 'Madrid', '914635593', 'Concertado', NULL, NULL),
(225, 'IES JOSEFINA ALDECOA', 'Calle De Sahagún, S/n ', 'Alcorcón', '916125261', 'Público', NULL, NULL),
(226, 'CPR INF-PRI-SEC JOYFE', 'Calle De Vital Aza, 65 ', 'Madrid', '914082263', 'Privado', NULL, NULL),
(227, 'IES JUAN CARLOS I', 'Calle De San Francisco, S/n ', 'Ciempozuelos', '918930158', 'Público', NULL, NULL),
(228, 'IES JUAN DE HERRERA', 'Carretera De Guadarrama, S/n ', 'San Lorenzo de El Escorial', '918902470', 'Público', NULL, NULL),
(229, 'IES JUAN DE LA CIERVA', 'Calle De La Caoba, 1 ', 'Madrid', '915064610', 'Público', NULL, NULL),
(230, 'IES JUAN DE MAIRENA', 'Pasaje La Viña, 3 ', 'San Sebastián de los Reyes', '916518199', 'Público', NULL, NULL),
(231, 'CPR FPE JUAN XXIII', 'Calle Nueva, 2 ', 'Alcorcón', '916438326', 'Concertado', NULL, NULL),
(232, 'IES JULIO PALACIOS', 'Avenida Del Moscatelar, 19 ', 'San Sebastián de los Reyes', '916524999', 'Público', NULL, NULL),
(233, 'IES JULIO VERNE', 'Calle De La Ingeniería, 4 ', 'Leganés', '916807665', 'Público', NULL, NULL),
(234, 'IES LA ARBOLEDA', 'Avenida Del Oeste, S/n ', 'Alcorcón', '916439991', 'Público', NULL, NULL),
(235, 'IES LA DEHESILLA', 'Camino De La Dehesilla Y Rodeo, S/n ', 'Cercedilla', '918521763', 'Público', NULL, NULL),
(236, 'CPR INF-PRI-SEC LA INMACULADA-MARILLAC', 'Calle De García De Paredes, 37 ', 'Madrid', '914453534', 'Concertado', NULL, NULL),
(237, 'CPR INF-PRI-SEC LA INMACULADA-PADRES ESCOLAPI', 'Plaza Obispo Felipe Scio Riaza, 1 ', 'Getafe', '916951900', 'Concertado', NULL, NULL),
(238, 'CPR FPE LA MILAGROSA', 'Plaza De Turia, 8 ', 'Móstoles', '916474451', 'Concertado', NULL, NULL),
(239, 'CPR INF-PRI-SEC LA NATIVIDAD', 'Calle De Torrox, 4 ', 'Madrid', '917924502', 'Concertado', NULL, NULL),
(240, 'IES LA POVEDA', 'Calle Monte Potrero, S/n ', 'Arganda del Rey', '918715312', 'Público', NULL, NULL),
(241, 'CPR INF-PRI-SEC LA SALLE', 'Calle Del General Romero Basart, 50 ', 'Madrid', '917050011', 'Concertado', NULL, NULL),
(242, 'CPR INF-PRI-SEC LA SALLE', 'Calle Levante, 1 ', 'Griñón', '918140085', 'Concertado', NULL, NULL),
(243, 'CPR FPE LA SALLE FORMACION PROFESIONAL ARAVAC', 'Calle De La Salle, 8 ', 'Madrid', '917401980', 'Privado', NULL, NULL),
(244, 'CPR INF-PRI-SEC LA SALLE-SAGRADO CORAZON', 'Avenida Del Cardenal Herrera Oria, 242 ', 'Madrid', '917385300', 'Concertado', NULL, NULL),
(245, 'IES LAGUNA DE JOATZEL', 'Avenida Vascongadas, S/n ', 'Getafe', '916832026', 'Público', NULL, NULL),
(246, 'IES LAS CANTERAS', 'Calle Peñalara, 2 ', 'Collado Villalba', '918513438', 'Público', NULL, NULL),
(247, 'IES LAS ENCINAS', 'Avenida Mirasierra, 8 ', 'Villanueva de la Cañada', '918157473', 'Público', NULL, NULL),
(248, 'IES LAS MUSAS', 'Calle De Carlos Ii, S/n ', 'Madrid', '913065946', 'Público', NULL, NULL),
(249, 'CPR FPE LAS NAVES SALESIANOS ALCALA', 'Calle Río Tajuña, 2 ', 'Alcalá de Henares', '918816939', 'Concertado', NULL, NULL),
(250, 'IES LAS ROZAS I', 'Calle Real, 52 ', 'Rozas de Madrid, Las', '916374006', 'Público', NULL, NULL),
(251, 'IES LAZARO CARDENAS', 'Calle Isla De Sálvora, 153 ', 'Collado Villalba', '918514581', 'Público', NULL, NULL),
(252, 'IES LEON FELIPE', 'Calle San Fernando, S/n ', 'Torrejón de Ardoz', '916768112', 'Público', NULL, NULL),
(253, 'IES LEONARDO DA VINCI', 'Calle Del General Romero Basart, 90 ', 'Madrid', '917064970', 'Público', NULL, NULL),
(254, 'CPR INF-PRI-SEC LEONARDO DA VINCI', 'Calle Arroyo Grande (sector Las Hachazuelas),', 'Moralzarzal', '918576724', 'Concertado', NULL, NULL),
(255, 'CPR INF-PRI-SEC LICEO SOROLLA B', 'Calle De Nueva Zelanda, 21 ', 'Madrid', '913164327', 'Concertado', NULL, NULL),
(256, 'CPR INF-PRI-SEC LICEO VILLA FONTANA', 'Avenida De Carlos V, 27 ', 'Móstoles', '916459211', 'Privado', NULL, NULL),
(257, 'IES LOPE DE VEGA', 'Calle De San Bernardo, 70 ', 'Madrid', '915321362', 'Público', NULL, NULL),
(258, 'CPR INF-PRI-SEC LOPEZ VICUÑA', 'Calle De Hinojal, 7 ', 'Madrid', '913202969', 'Concertado', NULL, NULL),
(259, 'IES LOS CASTILLOS', 'Avenida De Los Castillos, 5 ', 'Alcorcón', '916121063', 'Público', NULL, NULL),
(260, 'CPR INF-PRI-SEC LOS NARANJOS', 'Avenida De Las Comarcas, 70 ', 'Fuenlabrada', '916159690', 'Concertado', NULL, NULL),
(261, 'CPR INF-PRI-SEC LOS NOGALES', 'Camino De Villamanta, S/n ', 'Álamo, El', '918104457', 'Concertado', NULL, NULL),
(262, 'IES LOS OLIVOS', 'Calle De Joan Miró, 1 ', 'Mejorada del Campo', '916794920', 'Público', NULL, NULL),
(263, 'CPR INF-PRI-SEC LOYOLA', 'Calle De Valeras, 24 ', 'Aranjuez', '918910505', 'Concertado', NULL, NULL),
(264, 'IES LUIS BRAILLE', 'Calle De Luis Braille, 42 ', 'Coslada', '916697200', 'Público', NULL, NULL),
(265, 'IES LUIS BUÑUEL', 'Calle De Berlín, 2 ', 'Alcorcón', '916107013', 'Público', NULL, NULL),
(266, 'IES LUIS BUÑUEL', 'Calle Orquídea, 1 ', 'Móstoles', '912360001', 'Público', NULL, NULL),
(267, 'IES LUIS VIVES', 'Paseo De La Ermita, 15 ', 'Leganés', '916807712', 'Público', NULL, NULL),
(268, 'CPR FPE MADRID EEP', 'Calle De Torrelaguna, 123 ', 'Madrid', '912919313', 'Privado', NULL, NULL),
(269, 'CPR FPE MAGISTER', 'Avenida Del Doctor Federico Rubio Y Galí, 1 ', 'Madrid', NULL, 'Privado', NULL, NULL),
(270, 'CPR INF-PRI-SEC MALVAR', 'Calle De La Solidaridad, 4 ', 'Arganda del Rey', '918759463', 'Concertado', NULL, NULL),
(271, 'IES MANUEL ELKIN PATARROYO', 'Camino De La Cantueña, S/n ', 'Parla', '916986111', 'Público', NULL, NULL),
(272, 'IES MARIA DE ZAYAS Y SOTOMAYOR', 'Calle Del Romero, 2 ', 'Majadahonda', '916396611', 'Público', NULL, NULL),
(273, 'IES MARIA GUERRERO', 'Urbanización Las Suertes, S/n ', 'Collado Villalba', '918508395', 'Público', NULL, NULL),
(274, 'CPR ES MARIA INMACULADA', 'Calle De Ríos Rosas, 35 ', 'Madrid', '914410628', 'Concertado', NULL, NULL),
(275, 'CPR ES MARIA INMACULADA', 'Calle De Fuencarral, 97 ', 'Madrid', '914489508', 'Concertado', NULL, NULL),
(276, 'IES MARIA MOLINER', 'Avenida De España, 115 ', 'Coslada', '916710784', 'Público', NULL, NULL),
(277, 'IES MATEO ALEMAN', 'Avenida Del Ejército, 89 ', 'Alcalá de Henares', '918882431', 'Público', NULL, NULL),
(278, 'CPR PRI-SEC MATER CLEMENTISSIMA', 'Calle De Antonio Folgueras, 12-20 ', 'Madrid', '914775628', 'Privado', NULL, NULL),
(279, 'CPR INF-PRI-SEC MENESIANO', 'Avenida De Brasilia, 11 ', 'Madrid', '917269804', 'Concertado', NULL, NULL),
(280, 'IES MIGUEL CATALAN', 'Avenida De José Gárate, S/n ', 'Coslada', '916727142', 'Público', NULL, NULL),
(281, 'CPR PRI-SEC MIRABAL', 'Calle Del Monte Almenara, S/n ', 'Boadilla del Monte', '916331711', 'Privado', NULL, NULL),
(282, 'IES MIRASIERRA', 'Calle De La Portera Del Cura, 4 ', 'Madrid', '917346532', 'Público', NULL, NULL),
(283, 'CPR INF-PRI-SEC MIRASUR', 'Calle Pablo Gargallo, S/n ', 'Pinto', '916925089', 'Privado', NULL, NULL),
(284, 'CPR INF-PRI-SEC MONTE TABOR', 'Paseo De La Casa De Campo, 2 ', 'Pozuelo de Alarcón', '915122138', 'Concertado', NULL, NULL),
(285, 'CPR FPE MOPE', 'Paseo Del General Martínez Campos, 20 ', 'Madrid', '917527959', 'Privado', NULL, NULL),
(286, 'IES MORATALAZ', 'Calle Del Corregidor Diego De Valderrábano, 3', 'Madrid', '914306809', 'Público', NULL, NULL),
(287, 'CPR FPE MURIALDO', 'Calle De La Argenta, 8 ', 'Madrid', '917759478', 'Concertado', NULL, NULL),
(288, 'CPR INF-PRI-SEC N.I.L.E.', 'Calle De Castilla La Vieja, 18 ', 'Fuenlabrada', '916157608', 'Concertado', NULL, NULL),
(289, 'IES NARCIS MONTURIOL', 'Calle Leganés, 38 ', 'Parla', '916982811', 'Público', NULL, NULL),
(290, 'CPR FPE NELSON', 'Calle De Donoso Cortés, 61 ', 'Madrid', '646265852', 'Concertado', NULL, NULL),
(291, 'CPR ES NORTE JOVEN FUENCARRAL', 'Calle De Ribadavia, 20 ', 'Madrid', '917342398', 'Concertado', NULL, NULL),
(292, 'CPR ES NTRA. SRA. DE GRACIA', 'Paseo De Gigantes Y Cabezudos, 12-14 ', 'Madrid', '913173225', 'Concertado', NULL, NULL),
(293, 'CPR INF-PRI-SEC NTRA. SRA. DE LA PROVIDENCIA', 'Calle De San José, 1 ', 'Pinto', '916910303', 'Concertado', NULL, NULL),
(294, 'CPR INF-PRI-SEC NTRA. SRA. DE LA VEGA', 'Calle De Chantada, 28 ', 'Madrid', '917386700', 'Concertado', NULL, NULL),
(295, 'IES NTRA. SRA. DE LA VICTORIA DE LEPANTO', 'Calle De Luis De Requesens, 1 ', 'Villarejo de Salvanés', '918744170', 'Público', NULL, NULL),
(296, 'CPR INF-PRI-SEC NTRA. SRA. DE LAS ESCUELAS PI', 'Calle De Ocaña, 191 ', 'Madrid', '917183685', 'Concertado', NULL, NULL),
(297, 'CPR INF-PRI-SEC NTRA. SRA. DEL PILAR', 'Calle De San Benito, 6 ', 'Madrid', '913151215', 'Concertado', NULL, NULL),
(298, 'CPR INF-PRI-SEC NTRA. SRA. DEL PILAR', 'Calle De Sánchez Preciados, 62 ', 'Madrid', '914502012', 'Concertado', NULL, NULL),
(299, 'CPR INF-PRI-SEC NUESTRA SEÑORA DE LOS REMEDIO', 'Calle De Los Guindales, 17 ', 'Alcorcón', '916194981', 'Concertado', NULL, NULL),
(300, 'CPR FPE ORGANIZACION PROFESIONAL ESPAÑOLA, OP', 'Calle De Ayala, 111 ', 'Madrid', '914027062', 'Privado', NULL, NULL),
(301, 'IES ORTEGA Y GASSET', 'Calle Santa Fe, 4 ', 'Madrid', '915476635', 'Público', NULL, NULL),
(302, 'IES PABLO NERUDA', 'Calle Maestro, 31 ', 'Leganés', '916801909', 'Público', NULL, NULL),
(303, 'IES PABLO PICASSO', 'Calle De Pablo Picasso, S/n ', 'Pinto', '916921536', 'Público', NULL, NULL),
(304, 'CPR ES PABLO VI', 'Calle De Bravo Murillo, 297 ', 'Madrid', '915702601', 'Privado', NULL, NULL),
(305, 'IES PACIFICO', 'Calle De Luis Mitjans, 41 ', 'Madrid', '915523979', 'Público', NULL, NULL),
(306, 'CPR ES PADRE PIQUER', 'Calle Del Cañaveral, 96 ', 'Madrid', '913153947', 'Concertado', NULL, NULL),
(307, 'IES PALOMERAS-VALLECAS', 'Calle De La Arboleda, S/n ', 'Madrid', '913314503', 'Público', NULL, NULL),
(308, 'CEPA PAN BENDITO', 'Calle Del Camino Viejo De Leganés, 188 ', 'Madrid', '915600590', 'Público', NULL, NULL),
(309, 'IES PARQUE ALUCHE', 'Calle De Maqueda, 86 ', 'Madrid', '917182610', 'Público', NULL, NULL),
(310, 'IES PEDRO DE TOLOSA', 'Calle De Los Estudios, 1 ', 'San Martín de Valdeiglesias', '918610145', 'Público', NULL, NULL),
(311, 'IES PINTOR ANTONIO LOPEZ', 'Calle Del Orégano, 1 ', 'Tres Cantos', '918039102', 'Público', NULL, NULL),
(312, 'IES PIO BAROJA', 'Calle De Tolosa, 2 ', 'Madrid', '913412613', 'Público', NULL, NULL),
(313, 'CEPA POZUELO DE ALARCON', 'Calle Juan Xxiii, 1 ', 'Pozuelo de Alarcón', '913512267', 'Público', NULL, NULL),
(314, 'IES PRADO DE SANTO DOMINGO', 'Avenida De Pablo Iglesias, 3 ', 'Alcorcón', '916438187', 'Público', NULL, NULL),
(315, 'CPR ES PRIMERO DE MAYO', 'Calle De Los Barros, 11 ', 'Madrid', '917858955', 'Concertado', NULL, NULL),
(316, 'IES PRINCIPE FELIPE', 'Calle De Finisterre, 60 ', 'Madrid', '913146312', 'Público', NULL, NULL),
(317, 'IES PROFESOR MAXIMO TRUEBA', 'Calle De Santillana Del Mar, 22 ', 'Boadilla del Monte', '916321512', 'Público', NULL, NULL),
(318, 'CP IFP PROFESOR RAUL VAZQUEZ', 'Carretera De Villaverde A Vallecas, Km.4 ', 'Madrid', '915072082', 'Público', NULL, NULL),
(319, 'IES PUERTA BONITA', 'Calle Del Padre Amigo, 5 ', 'Madrid', '914661744', 'Público', NULL, NULL),
(320, 'CP FPE PUERTA DE HIERRO', 'Calle Joaquín Rodrigo, 2 ', 'Majadahonda', '911916537', 'Privado', NULL, NULL),
(321, 'CPR FPE QUALITAS EUROPA', 'Calle De Monterrey, 1 ', 'Rozas de Madrid, Las', '910609844', 'Privado', NULL, NULL),
(322, 'CPR INF-PRI-SEC RAFAELA YBARRA', 'Avenida De Rafaela Ybarra, 73 ', 'Madrid', '915691205', 'Concertado', NULL, NULL),
(323, 'CPR INF-FP RAMON Y CAJAL', 'Calle De López De Hoyos, 386 ', 'Madrid', '913000288', 'Privado', NULL, NULL),
(324, 'CEPA RAMON Y CAJAL', 'Calle Galilea, 11 ', 'Parla', '916986430', 'Público', NULL, NULL),
(325, 'IES RENACIMIENTO', 'Calle De Castellflorite, 4 ', 'Madrid', '914615211', 'Público', NULL, NULL),
(326, 'CPR PRI-SEC RETAMAR', 'Calle Pajares, 22 ', 'Pozuelo de Alarcón', '917141022', 'Concertado', NULL, NULL),
(327, 'IES REY FERNANDO VI', 'Avenida De Irún, S/n ', 'San Fernando de Henares', '916730241', 'Público', NULL, NULL),
(328, 'IES ROSA CHACEL', 'Calle De Abizanda, 70 ', 'Madrid', '913821905', 'Público', NULL, NULL),
(329, 'CPR INF-PRI-SEC SAGRADA FAMILIA', 'Calle De Oberón, 6 ', 'Madrid', '913015281', 'Concertado', NULL, NULL),
(330, 'CPR INF-PRI-SEC SAGRADO CORAZON', 'Calle De San Jaime, 21 ', 'Madrid', '913030140', 'Concertado', NULL, NULL),
(331, 'CREI SAGRADO CORAZON DE JESUS', 'Carretera De Colmenar Viejo , Km. 13,500 ', 'Madrid', '914650640', 'Público', NULL, NULL),
(332, 'CPR INF-PRI-SEC SALESIANOS ATOCHA', 'Ronda De Atocha, 27 ', 'Madrid', '915062100', 'Concertado', NULL, NULL),
(333, 'IES SALVADOR ALLENDE', 'Calle De Andalucía, 12 ', 'Fuenlabrada', '916977213', 'Público', NULL, NULL),
(334, 'IES SAN BLAS', 'Calle De Arcos De Jalón, 120 ', 'Madrid', '913061148', 'Público', NULL, NULL),
(335, 'IES SAN FERNANDO', 'Carretera De Colmenar Viejo, K13.5 ', 'Madrid', '917353106', 'Público', NULL, NULL),
(336, 'CPR INF-PRI-SEC SAN GABRIEL', 'Calle De Eugenia De Montijo, 92 ', 'Madrid', '914665121', 'Concertado', NULL, NULL),
(337, 'CPR INF-PRI-SEC SAN IGNACIO DE LOYOLA', 'Paseo De Andrés Vergara, 5 ', 'Torrelodones', '918544989', 'Concertado', NULL, NULL),
(338, 'CPR INF-PRI-SEC SAN IGNACIO DE LOYOLA', 'Calle Concepción Arenal, 3 ', 'Alcalá de Henares', '918871114', 'Concertado', NULL, NULL),
(339, 'CPR INF-PRI-SEC SAN JOSE', 'Calle De Emilio Ferrari, 87 ', 'Madrid', '913674075', 'Concertado', NULL, NULL),
(340, 'CPR INF-PRI-SEC SAN JUAN BAUTISTA', 'Calle De Francos Rodríguez, 5 ', 'Madrid', '914500000', 'Concertado', NULL, NULL),
(341, 'CPR FPE SAN JUAN DE DIOS', 'Avenida De San Juan De Dios, 1 ', 'Ciempozuelos', '918015650', 'Concertado', NULL, NULL),
(342, 'IES SAN JUAN DE LA CRUZ', 'Calle San Juan De La Cruz, S/n ', 'Pozuelo de Alarcón', '913525380', 'Público', NULL, NULL),
(343, 'CPR INF-PRI-SEC SAN MIGUEL ARCANGEL', 'Calle De Repullés Y Vargas, 11 ', 'Madrid', '914640050', 'Concertado', NULL, NULL),
(344, 'CPR FPE SAN ROMAN ESCUELA DE ESTUDIOS SUPERIO', 'Calle De Montesa, 39 ', 'Madrid', '913092409', 'Privado', NULL, NULL),
(345, 'CPR FPE SANROMAN CENTRO INTERNACIONAL DE ESTU', 'Calle De Ferrer Del Río, 10 ', 'Madrid', '914232323', 'Privado', NULL, NULL),
(346, 'CPR INF-PRI-SEC SANTA ANA Y SAN RAFAEL', 'Calle Del Doctor Esquerdo, 53 ', 'Madrid', '915738015', 'Concertado', NULL, NULL),
(347, 'CPR ES SANTA BARBARA', 'Plaza De La Paja, 4 ', 'Madrid', '913652340', 'Concertado', NULL, NULL),
(348, 'IES SANTA ENGRACIA', 'Calle De Santa Engracia, 13 ', 'Madrid', '914477234', 'Público', NULL, NULL),
(349, 'CPR INF-PRI-SEC SANTA GEMA GALGANI', 'Calle De Escalona, 59 ', 'Madrid', '917115093', 'Concertado', NULL, NULL),
(350, 'CPR INF-PRI-SEC SANTA MARIA', 'Carretera Moralzarzal, 6 ', 'Collado Villalba', '918500163', 'Concertado', NULL, NULL),
(351, 'CPR PRI-SEC SANTA MARIA DE LOS APOSTOLES', 'Plaza De La Grosella, 4 ', 'Madrid', '914627411', 'Concertado', NULL, NULL),
(352, 'CPR INF-PRI-SEC SANTA MARIA DEL CARMEN', 'Calle De Los Misterios, 38 ', 'Madrid', '913774569', 'Concertado', NULL, NULL),
(353, 'CPR PRI-SEC SANTA MARIA DEL VALLE CEP', 'Calle De Vitruvio, 14 ', 'Madrid', '915612093', 'Privado', NULL, NULL),
(354, 'CPR INF-PRI-SEC SANTA MARIA LA BLANCA', 'Calle De Monasterio De Oseira, S/n ', 'Madrid', '917508692', 'Concertado', NULL, NULL),
(355, 'CPR ES SANTA ROSA DE LIMA', 'Carretera De Canillas, 43 ', 'Madrid', '913002420', 'Concertado', NULL, NULL),
(356, 'CPR PRI-SEC SANTO DOMINGO SAVIO', 'Calle De Santo Domingo Savio, 2 ', 'Madrid', '913683100', 'Concertado', NULL, NULL),
(357, 'IES SATAFI', 'Avenida De Las Ciudades, 104 ', 'Getafe', '916830601', 'Público', NULL, NULL),
(358, 'IES SEVERO OCHOA', 'Calle De Francisco Chico Mendes, 3 ', 'Alcobendas', '916620443', 'Público', NULL, NULL),
(359, 'IES SIGLO XXI', 'Calle De La Ingeniería, 1 ', 'Leganés', '916806303', 'Público', NULL, NULL),
(360, 'CPR FPE SUMA & MAS FORMACION INTEGRAL S.L.', 'Plaza De La Alegría, Locales B Y C (posterior', 'Arganda del Rey', '911746656', 'Privado', NULL, NULL),
(361, 'CPR INF-PRI-SEC TAJAMAR', 'Calle De Pío Felipe, 12 ', 'Madrid', '914772500', 'Concertado', NULL, NULL),
(362, 'CPR FPE TEIDE II', 'Calle Mayor, 49 ', 'Madrid', '915483931', 'Concertado', NULL, NULL),
(363, 'CPR FPE TEIDE IV', 'Calle De Alcalá, 337 ', 'Madrid', '914087311', 'Concertado', NULL, NULL),
(364, 'CPR FPE TELEFÓNICA EDUCACIÓN DIGITAL', 'Calle De Bruno Abundez, 48 ', 'Madrid', NULL, 'Privado', NULL, NULL),
(365, 'CEPA TETUAN', 'Calle De Pinos Alta, 63 ', 'Madrid', '917333837', 'Público', NULL, NULL),
(366, 'IES TETUAN DE LAS VICTORIAS', 'Calle Vía Límite, 14 ', 'Madrid', '913146706', 'Público', NULL, NULL),
(367, 'CPR FPE TORVAL''L', 'Calle De San Mateo, 15 ', 'Madrid', '914453510', 'Privado', NULL, NULL),
(368, 'CPR INF-PRI-SEC TRABENCO', 'Calle De La Reguera De Tomateros, 103 ', 'Madrid', '917856368', 'Concertado', NULL, NULL),
(369, 'CPR INF-PRI-SEC TRES OLIVOS', 'Calle De Casildea De Vandalia, 3 ', 'Madrid', '917355160', 'Concertado', NULL, NULL),
(370, 'CPR FPE U-TAD CENTRO PROFESIONAL DE TECNOLOGI', 'Calle Playa De Liencres,complejo Europa Empre', 'Rozas de Madrid, Las', '916402811', 'Privado', NULL, NULL),
(371, 'IES VALLE INCLAN', 'Calle Juncal, 14 ', 'Torrejón de Ardoz', '916773057', 'Público', NULL, NULL),
(372, 'IES VALLECAS-MAGERIT', 'Calle De Antonio Folgueras, 27 ', 'Madrid', '914780023', 'Público', NULL, NULL),
(373, 'CPR INF-PRI-SEC VEDRUNA', 'Calle Del Espinar, 41 ', 'Madrid', '914650109', 'Concertado', NULL, NULL),
(374, 'IES VEGA DEL JARAMA', 'Avenida De Irún, 18 ', 'San Fernando de Henares', '916711104', 'Público', NULL, NULL),
(375, 'CPR INF-PRI-SEC VERACRUZ', 'Carretera De Escorial, S/n ', 'Galapagar', '918585558', 'Privado', NULL, NULL),
(376, 'IES VICENTE ALEIXANDRE', 'Calle Asturias, 20 ', 'Pinto', '916910012', 'Público', NULL, NULL),
(377, 'CPR FPE VICENTE MOYA PUEYO', 'Avenida De La Moncloa, 18 ', 'Madrid', NULL, 'Privado', NULL, NULL),
(378, 'IES VICTORIA KENT', 'Camino Polvoranca, S/n ', 'Fuenlabrada', '916084625', 'Público', NULL, NULL),
(379, 'IES VILLA DE VALDEMORO', 'Calle Herencia, S/n ', 'Valdemoro', '918954211', 'Público', NULL, NULL),
(380, 'IES VILLABLANCA', 'Calle De Villablanca, 79 ', 'Madrid', '917752214', 'Público', NULL, NULL),
(381, 'IES VILLAVERDE', 'Calle De La Alianza, 20-24 ', 'Madrid', '917239181', 'Público', NULL, NULL),
(382, 'CPR PRI-SEC VIRGEN DE LA ALMUDENA', 'Carretera Moralzarzal, 10 ', 'Collado Villalba', '918500061', 'Concertado', NULL, NULL),
(383, 'CPR FPE VIRGEN DE LA LUZ', 'Calle Del Vizconde De Matamala, 1 ', 'Madrid', '917254886', 'Concertado', NULL, NULL),
(384, 'IES VIRGEN DE LA PALOMA', 'Calle De Francos Rodríguez, 106 ', 'Madrid', '913980300', 'Público', NULL, NULL),
(385, 'IES VIRGEN DE LA PAZ', 'Calle De Francisco Chico Mendes, 4 ', 'Alcobendas', '916615943', 'Público', NULL, NULL),
(386, 'IES VISTA ALEGRE', 'Calle Del General Ricardos, 177 ', 'Madrid', '914628600', 'Público', NULL, NULL),
(387, 'CPR INF-PRI-SEC ZOLA-ROZAS', 'Avenida Esparta, 6 ', 'Rozas de Madrid, Las', '916316253', 'Concertado', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `id` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `familia_profesional`
--

CREATE TABLE `familia_profesional` (
  `id_familia_profesional` int(11) NOT NULL,
  `nombre_familia_profesional` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `familia_profesional`
--

INSERT INTO `familia_profesional` (`id_familia_profesional`, `nombre_familia_profesional`) VALUES
(1, 'Actividades Físicas y Deportivas'),
(2, 'Artes Graficas'),
(3, 'Edificación y Obra Civil'),
(4, 'Fabricación Mecánica'),
(5, 'Imagen y Sonido'),
(6, 'Informática y Comunicaciones'),
(7, 'Marítimo-Pesquera'),
(8, 'Seguridad y Medio Ambiente'),
(9, 'Transporte y Mantenimiento de Vehículos'),
(10, 'Administración y Gestión'),
(11, 'Artes y Artesanía'),
(12, 'Electricidad y Electrónica'),
(13, 'Hostelería y Turismo'),
(14, 'Industrias Alimentarias'),
(15, 'Instalación y Mantenimiento'),
(16, 'Química'),
(17, 'Servicios Socioculturales y a la Comunidad'),
(18, 'Vidrio y Cerámica'),
(19, 'Agraria'),
(20, 'Comercio y Marketing'),
(41, 'Energía y Agua'),
(42, 'Imagen Personal'),
(43, 'Industrias Extractivas'),
(44, 'Madera, Mueble y Corcho'),
(45, 'Sanidad'),
(46, 'Textil, Confección y Piel');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modulo`
--

CREATE TABLE `modulo` (
  `id_modulo` int(5) NOT NULL,
  `nombre_modulo` varchar(75) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `solo_privada` tinyint(4) DEFAULT NULL,
  `id_familia_profesional` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `modulo`
--

INSERT INTO `modulo` (`id_modulo`, `nombre_modulo`, `tipo`, `solo_privada`, `id_familia_profesional`) VALUES
(1, 'Conducción de Actividades Físico-deportivas en el Medio Natural', 'Grado Medio', NULL, 1),
(2, 'Animación de Actividades Físicas y Deportivas', 'Grado Superior', NULL, 1),
(3, 'Artes Gráficas', 'FP Básica', NULL, 2),
(4, 'Impresión Gráfica', 'Grado Medio', NULL, 2),
(5, 'Postimpresión y Acabados Gráficos', 'Grado Medio', NULL, 2),
(6, 'Preimpresión Digital', 'Grado Medio', NULL, 2),
(7, 'Diseño y Gestión de la Producción Gráfica', 'Grado Superior', NULL, 2),
(8, 'Diseño y Edición de Publicaciones Impresas y Multimedia', 'Grado Superior', NULL, 2),
(9, 'Reforma y Mantenimiento de Edificios', 'FP Básica', NULL, 3),
(10, 'Construcción', 'Grado Medio', NULL, 3),
(11, 'Obras de Interior, Decoración y Rehabilitación', 'Grado Medio', NULL, 3),
(12, 'Organización y Control de Obras de Construcción', 'Grado Superior', NULL, 3),
(13, 'Proyectos de Edificación ', 'Grado Superior', NULL, 3),
(14, 'Proyectos de Obra Civil', 'Grado Superior', NULL, 3),
(15, 'Fabricación y Montaje', 'FP Básica', NULL, 4),
(16, 'Fabricación de Elementos Metálicos', 'FP Básica', NULL, 4),
(17, 'Instalaciones Electrotécnicas y Mecánica', 'FP Básica', NULL, 4),
(18, 'Conformado por Moldeo de Metales y Polímeros', 'Grado Medio', NULL, 4),
(19, 'Mecanizado', 'Grado Medio', NULL, 4),
(20, 'Soldadura y Calderería', 'Grado Medio', NULL, 4),
(21, 'Construcciones Metálicas', 'Grado Superior', NULL, 4),
(22, 'Diseño en Fabricación Mecánica', 'Grado Superior', NULL, 4),
(23, 'Programación de la Producción en Fabricación Mecánica', 'Grado Superior', NULL, 4),
(24, 'Programación de la Producción en Moldeo de Metales y Polímeros', 'Grado Superior', NULL, 4),
(25, 'Video Disc-Jockey y Sonido', 'Grado Medio', NULL, 5),
(26, 'Animaciones 3D, Juegos y Entornos Interactivos', 'Grado Superior', NULL, 5),
(27, 'Iluminación, Captación y Tratamiento de Imagen', 'Grado Superior', NULL, 5),
(28, 'Producción de Audiovisuales y Espectáculos', 'Grado Superior', NULL, 5),
(29, 'Realización de Proyectos Audiovisuales y Espectáculos', 'Grado Superior', NULL, 5),
(30, 'Sonido para Audiovisuales y Espectáculos', 'Grado Superior', NULL, 5),
(31, 'Informática y Comunicaciones', 'FP Básica', NULL, 6),
(32, 'Informática de Oficina', 'FP Básica', NULL, 6),
(33, 'Sistemas Microinformáticos y Redes', 'Grado Medio', NULL, 6),
(34, 'Administración de Sistemas Informáticos en Red', 'Grado Superior', NULL, 6),
(35, 'Desarrollo de Aplicaciones Multiplataforma', 'Grado Superior', NULL, 6),
(36, 'Desarrollo de Aplicaciones Web', 'Grado Superior', NULL, 6),
(37, 'Actividades Marítimo-Pesqueras', 'FP Básica', NULL, 7),
(38, 'Mantenimiento de Embarcaciones Deportivas y de Recreo', 'FP Básica', NULL, 7),
(39, 'Cultivos Acuícolas', 'Grado Medio', NULL, 7),
(40, 'Mantenimiento y Control de la Maquinaria de Buques y Embarcaciones', 'Grado Medio', NULL, 7),
(41, 'Operaciones Subacuáticas e Hiperbáricas', 'Grado Medio', NULL, 7),
(42, 'Navegación y Pesca de Litoral', 'Grado Medio', NULL, 7),
(43, 'Acuicultura', 'Grado Superior', NULL, 7),
(44, 'Organización del Mantenimiento de Maquinaria de Buques y Embarcaciones', 'Grado Superior', NULL, 7),
(45, 'Transporte Marítimo y Pesca de Altura', 'Grado Superior', NULL, 7),
(46, 'Emergencias y Protección Civil', 'Grado Medio', NULL, 8),
(47, 'Coordinación de Emergencias y Protección Civil', 'Grado Superior', NULL, 8),
(48, 'Educación y Control Ambiental', 'Grado Superior', NULL, 8),
(49, 'Mantenimiento de Embarcaciones Deportivas y de Recreo', 'FP Básica', NULL, 9),
(50, 'Mantenimiento de Vehículos', 'FP Básica', NULL, 9),
(51, 'Carrocería', 'Grado Medio', NULL, 9),
(52, 'Conducción de Vehículos de Transporte por Carretera', 'Grado Medio', NULL, 9),
(53, 'Electromecánica de Maquinaria', 'Grado Medio', NULL, 9),
(54, 'Electromecánica de Vehículos Automóviles', 'Grado Medio', NULL, 9),
(55, 'Mantenimiento de Material Rodante Ferroviario', 'Grado Medio', NULL, 9),
(56, 'Automoción', 'Grado Superior', NULL, 9),
(57, 'Informática de Oficina', 'FP Básica', NULL, 10),
(58, 'Servicios Administrativos', 'FP Básica', NULL, 10),
(59, 'Gestión Administrativa', 'Grado Medio', NULL, 10),
(60, 'Administración y Finanzas', 'Grado Superior', NULL, 10),
(61, 'Asistencia a la Dirección', 'Grado Superior', NULL, 10),
(62, 'Artista Fallero y Construcción de Escenografías', 'Grado Superior', NULL, 11),
(63, 'Electricidad y Electrónica', 'FP Básica', NULL, 12),
(64, 'Fabricación de Elementos Metálicos', 'FP Básica', NULL, 13),
(65, 'Instalaciones Electrotécnicas y Mecánica', 'FP Básica', NULL, 12),
(66, 'Instalaciones de Telecomunicaciones', 'Grado Medio', NULL, 12),
(67, 'Instalaciones Eléctricas y Automáticas', 'Grado Medio', NULL, 12),
(68, 'Automatización y Robótica Industrial', 'Grado Superior', NULL, 12),
(69, 'Electromedicina Clínica', 'Grado Superior', NULL, 12),
(70, 'Mantenimiento Electrónico', 'Grado Superior', NULL, 12),
(71, 'Sistemas de Telecomunicaciones e Informáticos', 'Grado Superior', NULL, 12),
(72, 'Sistemas Electrotécnicos y Automatizados', 'Grado Superior', NULL, 12),
(73, 'Actividades de Panadería y Pastelería', 'FP Básica', NULL, 13),
(74, 'Alojamiento y Lavandería', 'FP Básica', NULL, 13),
(75, 'Cocina y Restauración', 'FP Básica', NULL, 13),
(76, 'Cocina y Gastronomía', 'Grado Medio', NULL, 13),
(77, 'Servicios en Restauración', 'Grado Medio', NULL, 13),
(78, 'Agencias de Viajes y Gestión de Eventos', 'Grado Superior', NULL, 13),
(79, 'Dirección de Cocina', 'Grado Superior', NULL, 13),
(80, 'Dirección de Servicios de Restauración', 'Grado Superior', NULL, 13),
(81, 'Gestión de Alojamientos Turísticos', 'Grado Superior', NULL, 13),
(82, 'Guía, Información y Asistencias Turísticas', 'Grado Superior', NULL, 13),
(83, 'Actividades de Panadería y Pastelería', 'FP Básica', NULL, 14),
(84, 'Industrias Alimentarias', 'FP Básica', NULL, 14),
(85, 'Aceites de Oliva y Vinos', 'Grado Medio', NULL, 14),
(86, 'Elaboración de Productos Alimenticios', 'Grado Medio', NULL, 14),
(87, 'Panadería, Repostería y Confitería', 'Grado Medio', NULL, 14),
(88, 'Procesos y Calidad en la Industria Alimentaria', 'Grado Superior', NULL, 14),
(89, 'Vitivinicultura', 'Grado Superior', NULL, 14),
(90, 'Fabricación y Montaje', 'FP Básica', NULL, 15),
(91, 'Mantenimiento de Viviendas', 'FP Básica', NULL, 15),
(92, 'Instalaciones de Producción de Calor', 'Grado Medio', NULL, 15),
(93, 'Instalaciones Frigoríficas y de Climatización', 'Grado Medio', NULL, 15),
(94, 'Mantenimiento Electromecánico', 'Grado Medio', NULL, 15),
(95, 'Desarrollo de Proyectos de Instalaciones Térmicas y de Fluidos', 'Grado Superior', NULL, 15),
(96, 'Mantenimiento de Instalaciones Térmicas y de Fluidos', 'Grado Superior', NULL, 15),
(97, 'Mecatrónica Industrial', 'Grado Superior', NULL, 15),
(98, 'Operaciones de Laboratorio', 'Grado Medio', NULL, 16),
(99, 'Planta Química', 'Grado Medio', NULL, 16),
(100, 'Fabricación de Productos Farmacéuticos, Biotecnológicos y Afines', 'Grado Superior', NULL, 16),
(101, 'Laboratorio de Análisis y de Control de Calidad', 'Grado Superior', NULL, 16),
(102, 'Química Industrial', 'Grado Superior', NULL, 16),
(103, 'Actividades Domésticas y Limpieza de Edificios', 'FP Básica', NULL, 17),
(104, 'Atención a Personas en Situación de Dependencia', 'Grado Medio', NULL, 17),
(105, 'Animación Sociocultural y Turística', 'Grado Superior', NULL, 17),
(106, 'Educación Infantil', 'Grado Superior', NULL, 17),
(107, 'Integración Social', 'Grado Superior', NULL, 17),
(108, 'Mediación Comunicativa', 'Grado Superior', NULL, 17),
(109, 'Promoción de Igualdad de Género', 'Grado Superior', NULL, 17),
(110, 'Vidriería y Alfarería', 'FP Básica', NULL, 18),
(111, 'Fabricación de Productos Cerámicos', 'Grado Medio', NULL, 18),
(112, 'Desarrollo y Fabricación de Productos Cerámicos', 'Grado Superior', NULL, 18),
(113, 'Actividades Agropecuarias', 'FP Básica', NULL, 19),
(114, 'Agro-jardinería y Composiciones Florales', 'FP Básica', NULL, 19),
(115, 'Aprovechamientos Forestales', 'FP Básica', NULL, 19),
(116, 'Aprovechamiento y Conservación del Medio Natural', 'Grado Medio', NULL, 19),
(117, 'Jardinería y Floristería', 'Grado Medio', NULL, 19),
(118, 'Producción Agroecológica', 'Grado Medio', NULL, 19),
(119, 'Producción Agropecuaria', 'Grado Medio', NULL, 19),
(120, 'Ganadería y Asistencia en Sanidad Animal', 'Grado Superior', NULL, 19),
(121, 'Gestión Forestal y del Medio Natural', 'Grado Superior', NULL, 19),
(122, 'Paisajismo y Medio Rural', 'Grado Superior', NULL, 19),
(123, 'Servicios Comerciales', 'FP Básica', NULL, 20),
(124, 'Actividades Comerciales', 'Grado Medio', NULL, 20),
(125, 'Comercio Internacional', 'Grado Superior', NULL, 20),
(126, 'Gestión de Ventas y Espacios Comerciales', 'Grado Superior', NULL, 20),
(127, 'Marketing y Publicidad', 'Grado Superior', NULL, 20),
(128, 'Transporte y Logística', 'Grado Superior', NULL, 20),
(129, 'Estaciones de Tratamiento de Aguas', 'Grado Medio', NULL, 41),
(130, 'Centrales Eléctricas', 'Grado Superior', NULL, 41),
(131, 'Eficiencia Energética y Energía Solar Térmica', 'Grado Superior', NULL, 41),
(132, 'Energías Renovables', 'Grado Superior', NULL, 41),
(133, 'Gestión del Agua', 'Grado Superior', NULL, 41),
(134, 'Peluquería y Estética', 'FP Básica', NULL, 42),
(135, 'Estética y Belleza', 'Grado Medio', NULL, 42),
(136, 'Peluquería y Cosmética Capilar', 'Grado Medio', NULL, 42),
(137, 'Asesoría de Imagen Personal y Corporativa', 'Grado Superior', NULL, 42),
(138, 'Caracterización y Maquillaje Profesional', 'Grado Superior', NULL, 42),
(139, 'Estética Integral y Bienestar', 'Grado Superior', NULL, 42),
(140, 'Estilismo y Dirección de Peluquería', 'Grado Superior', NULL, 42),
(141, 'Excavaciones y Sondeos', 'Grado Medio', NULL, 43),
(142, 'Piedra Natural', 'Grado Medio', NULL, 43),
(143, 'Carpintería y Mueble', 'FP Básica', NULL, 44),
(144, 'Diseño y Amueblamiento', 'Grado Superior', NULL, 44),
(145, 'Carpintería y Mueble', 'Grado Medio', NULL, 44),
(146, 'Instalación y Amueblamiento', 'Grado Medio', NULL, 44),
(147, 'Emergencias Sanitarias', 'Grado Medio', NULL, 45),
(148, 'Farmacia y Parafarmacia', 'Grado Medio', NULL, 45),
(149, 'Anatomía Patológica y Citodiagnóstico', 'Grado Superior', NULL, 45),
(150, 'Audiología Protésica', 'Grado Superior', NULL, 45),
(151, 'Higiene Bucodental', 'Grado Superior', NULL, 45),
(152, 'Documentación y Administración Sanitarias', 'Grado Superior', NULL, 45),
(153, 'Imagen para el Diagnóstico y Medicina Nuclear', 'Grado Superior', NULL, 45),
(154, 'Laboratorio Clínico y Biomédico', 'Grado Superior', NULL, 45),
(155, 'Ortoprótesis y Productos de Apoyo', 'Grado Superior', NULL, 45),
(156, 'Prótesis Dentales', 'Grado Superior', NULL, 45),
(157, 'Radioterapia y Dosimetría', 'Grado Superior', NULL, 45),
(158, 'Arreglo y Reparación de Artículos Textiles y de Piel', 'FP Básica', NULL, 46),
(159, 'Tapicería y Cortinaje', 'FP Básica', NULL, 43),
(160, 'Calzado y Complementos de Moda', 'Grado Medio', NULL, 46),
(161, 'Confección y Moda', 'Grado Medio', NULL, 46),
(162, 'Fabricación y Ennoblecimiento de Productos Textiles', 'Grado Medio', NULL, 46),
(163, 'Diseño Técnico en Textil y Piel', 'Grado Superior', NULL, 46),
(164, 'Diseño y Producción de Calzado y Complementos', 'Grado Superior', NULL, 46),
(165, 'Patronaje y Moda', 'Grado Superior', NULL, 46),
(166, 'Vestuario a Medida y de Espectáculos', 'Grado Superior', NULL, 46);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modulos_del_centro`
--

CREATE TABLE `modulos_del_centro` (
  `id_modulo` int(11) NOT NULL,
  `id_centro` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `modulos_del_centro`
--

INSERT INTO `modulos_del_centro` (`id_modulo`, `id_centro`) VALUES
(1, 96),
(1, 99),
(1, 100),
(1, 107),
(1, 109),
(1, 111),
(1, 113),
(1, 133),
(1, 235),
(1, 347),
(2, 23),
(2, 48),
(2, 96),
(2, 124),
(2, 132),
(2, 160),
(2, 217),
(2, 245),
(2, 246),
(2, 259),
(3, 180),
(3, 211),
(3, 271),
(3, 332);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modulos_del_usuario`
--

CREATE TABLE `modulos_del_usuario` (
  `id_modulo` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `post`
--

CREATE TABLE `post` (
  `id_post` int(20) NOT NULL,
  `titulo_post` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha_post` datetime NOT NULL,
  `keywords` text COLLATE utf8mb4_unicode_ci,
  `likes` int(11) DEFAULT NULL,
  `imagen` date DEFAULT NULL,
  `cuerpo_post` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `url_post` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `id_tema` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `post`
--

INSERT INTO `post` (`id_post`, `titulo_post`, `fecha_post`, `keywords`, `likes`, `imagen`, `cuerpo_post`, `url_post`, `id_usuario`, `id_tema`) VALUES
(1, 'Bienvenido, este es nuestro primer post', '2017-05-15 23:51:43', 'bienvenidos, post, blog', NULL, NULL, 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas "Letraset", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.', 'bienvenidos-este-es-nuestro-primer-post', 1, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tema`
--

CREATE TABLE `tema` (
  `id_tema` int(11) NOT NULL,
  `nombre_tema` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_familia_profesional` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(5) NOT NULL,
  `username` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombre_usuario` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellidos` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telefono` varchar(12) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha_alta` datetime DEFAULT NULL,
  `permisos_admin` tinyint(4) DEFAULT '0',
  `avatar` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `username`, `password`, `nombre_usuario`, `apellidos`, `telefono`, `email`, `fecha_alta`, `permisos_admin`, `avatar`) VALUES
(1, 'admin', 'admin', 'Geyse Kelli', 'Canquerino', '638980201', 'geeeysinha@gmail.com', '2017-05-15 23:50:57', 1, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios_del_centro`
--

CREATE TABLE `usuarios_del_centro` (
  `id_centro` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `centro`
--
ALTER TABLE `centro`
  ADD PRIMARY KEY (`id_centro`);
ALTER TABLE `centro` ADD FULLTEXT KEY `nombre_centro` (`nombre_centro`);

--
-- Indices de la tabla `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD KEY `ci_sessions_timestamp` (`timestamp`);

--
-- Indices de la tabla `familia_profesional`
--
ALTER TABLE `familia_profesional`
  ADD PRIMARY KEY (`id_familia_profesional`);

--
-- Indices de la tabla `modulo`
--
ALTER TABLE `modulo`
  ADD PRIMARY KEY (`id_modulo`),
  ADD KEY `id_familia_profesional_idx` (`id_familia_profesional`);

--
-- Indices de la tabla `modulos_del_centro`
--
ALTER TABLE `modulos_del_centro`
  ADD PRIMARY KEY (`id_modulo`,`id_centro`),
  ADD KEY `fk_modulo_has_centro_centro1_idx` (`id_centro`),
  ADD KEY `fk_modulo_has_centro_modulo1_idx` (`id_modulo`);

--
-- Indices de la tabla `modulos_del_usuario`
--
ALTER TABLE `modulos_del_usuario`
  ADD PRIMARY KEY (`id_modulo`,`id_usuario`),
  ADD KEY `fk_modulo_has_usuario_usuario1_idx` (`id_usuario`),
  ADD KEY `fk_modulo_has_usuario_modulo1_idx` (`id_modulo`);

--
-- Indices de la tabla `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id_post`),
  ADD KEY `id_usuario_idx` (`id_usuario`),
  ADD KEY `id_tema_idx` (`id_tema`);

--
-- Indices de la tabla `tema`
--
ALTER TABLE `tema`
  ADD PRIMARY KEY (`id_tema`),
  ADD KEY `id_familia_profesional_idx` (`id_familia_profesional`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- Indices de la tabla `usuarios_del_centro`
--
ALTER TABLE `usuarios_del_centro`
  ADD PRIMARY KEY (`id_centro`,`id_usuario`),
  ADD KEY `fk_centro_has_usuario_usuario1_idx` (`id_usuario`),
  ADD KEY `fk_centro_has_usuario_centro1_idx` (`id_centro`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `centro`
--
ALTER TABLE `centro`
  MODIFY `id_centro` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=388;
--
-- AUTO_INCREMENT de la tabla `familia_profesional`
--
ALTER TABLE `familia_profesional`
  MODIFY `id_familia_profesional` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
--
-- AUTO_INCREMENT de la tabla `modulo`
--
ALTER TABLE `modulo`
  MODIFY `id_modulo` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=167;
--
-- AUTO_INCREMENT de la tabla `post`
--
ALTER TABLE `post`
  MODIFY `id_post` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `tema`
--
ALTER TABLE `tema`
  MODIFY `id_tema` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `modulo`
--
ALTER TABLE `modulo`
  ADD CONSTRAINT `id_familia_profesional` FOREIGN KEY (`id_familia_profesional`) REFERENCES `familia_profesional` (`id_familia_profesional`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `modulos_del_centro`
--
ALTER TABLE `modulos_del_centro`
  ADD CONSTRAINT `fk_modulo_has_centro_centro1` FOREIGN KEY (`id_centro`) REFERENCES `centro` (`id_centro`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_modulo_has_centro_modulo1` FOREIGN KEY (`id_modulo`) REFERENCES `modulo` (`id_modulo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `modulos_del_usuario`
--
ALTER TABLE `modulos_del_usuario`
  ADD CONSTRAINT `fk_modulo_has_usuario_modulo1` FOREIGN KEY (`id_modulo`) REFERENCES `modulo` (`id_modulo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_modulo_has_usuario_usuario1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `fk_id_tema` FOREIGN KEY (`id_tema`) REFERENCES `tema` (`id_tema`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_id_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tema`
--
ALTER TABLE `tema`
  ADD CONSTRAINT `fk_id_familia_profesional` FOREIGN KEY (`id_familia_profesional`) REFERENCES `familia_profesional` (`id_familia_profesional`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `usuarios_del_centro`
--
ALTER TABLE `usuarios_del_centro`
  ADD CONSTRAINT `fk_centro_has_usuario_centro1` FOREIGN KEY (`id_centro`) REFERENCES `centro` (`id_centro`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_centro_has_usuario_usuario1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
