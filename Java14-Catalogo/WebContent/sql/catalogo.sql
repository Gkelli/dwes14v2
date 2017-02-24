-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-02-2017 a las 10:49:04
-- Versión del servidor: 10.1.16-MariaDB
-- Versión de PHP: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `catalogo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `autor`
--

CREATE TABLE `autor` (
  `id_autor` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `autor`
--

INSERT INTO `autor` (`id_autor`, `nombre`) VALUES
(1, 'Vince Gilligan'),
(2, 'Sydney Newman'),
(3, ' David Benioff'),
(4, 'J. J. Abrams'),
(5, 'Hermanos Duffer'),
(6, 'Michael Hirst');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `obra`
--

CREATE TABLE `obra` (
  `titulo` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_autor` int(11) NOT NULL,
  `anno` int(11) NOT NULL,
  `pais` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `genero` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `finalizada` tinyint(1) NOT NULL,
  `duracion` int(11) DEFAULT NULL,
  `portada` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `obra`
--

INSERT INTO `obra` (`titulo`, `id_autor`, `anno`, `pais`, `genero`, `finalizada`, `duracion`, `portada`, `descripcion`) VALUES
('Breaking Bad', 1, 2008, 'EE.UU', 'Drama', 1, 42, 'breaking.jpg', 'Muestra la vida de Walter White (Bryan Cranston ''Malcolm''), un genio en el campo de la Química cuya existencia está marcada por una enorme frustración tanto a nivel personal como laboral. \r\n\r\nHundido por una monótona e insulsa relación con su mujer e incapaz de poner a prueba su brillantez trabajando como profesor de instituto, Walter da un giro radical a su forma de vida cuando descubre que tiene un cáncer terminal. Desde entonces, a su manera, decide reafirmar el amor por su familia y por la química montando un laboratorio de metanfetaminas junto a Jesse Pinkman (Aaron Paul), un antiguo y problemático alumno, para dejar a su esposa y a su hijo en buen lugar cuando él falte.'),
('Doctor Who', 2, 2005, 'Gran Bretaña', 'Aventura, C. Ficción', 0, 42, 'doctor-who.jpg', 'Esta nueva producción retoma la historia que acabó con la serie ''Doctor Who'' original que llegó a su fin en el año 1989. Este famoso alienígena es un Señor del Tiempo, una raza casi extinta cuyos miembros tienen la habilidad de viajar en el tiempo y el espacio.\r\n\r\nEn esta ocasión, el encargado de dar vida al Doctor más famoso de la televisión británica es Cristopher Eccleston (''Héroes'', ''The League of Gentlemen''). Junto a su compañera Rose Tyler (Billie Piper, ''Servicio completo'', ''Evita'') y por medio de la máquina del tiempo TARDIS -Time and Relative Dimension in Space- el protagonista viaja en el tiempo y el espacio para vivir las aventuras más increíbles en épocas y dimensiones extraordinarias.\r\n\r\nEl Doctor explora el universo de un modo totalmente aleatorio, utilizando su extenso conocimiento de la ciencia y la tecnología para superar cualquier contratiempo que vaya encontrando en el camino. La naturaleza imprecisa de sus viajes se atribuye a la antigüedad y poca fiabilidad del sistema de navegación TARDIS.'),
('Fringe', 4, 2008, 'EE.UU.', 'Ciencia Ficción', 1, 50, 'fringe.jpg', 'Serie de TV de ciencia ficción de cien episodios (2008-2013). La agente del FBI Olivia Dunham y su jefe, el agente Broyles, se encargan de esclarecer fenómenos inexplicables. En sus investigaciones, cuentan con la ayuda del doctor Bishop, un científico despistado que sabe más de lo que parece, y de su hijo Peter. Nueva serie del creador de "Lost" (J.J. Abrams). El episodio piloto, dirigido por Alex Graves, tuvo una buena acogida por parte de la crítica. Al igual que el piloto de "Lost", costó unos 10 millones de dólares.'),
('Game of Thrones ', 3, 2011, 'EE.UU.', 'Drama, Fantasia', 0, 52, 'GofT.jpg', 'HBO, desde la calidad que caracteriza a la cadena, nos brinda una vez más una magistral adaptación televisiva de la serie de novelas ''Canción de hielo y fuego'' del escritor estadounidense George R. R. Martin. La versión para la pequeña pantalla de esta historia comparte título con el primero de los libros de la saga, ''Juego de tronos'', y está escrita y producida por David Benioff (''Troya'', ''X-Men Origins: Wolverine'') y D.B. Weiss.'),
('Lost', 4, 2004, 'EE.UU.', 'Aventura, Drama', 1, 42, 'lost.jpg', 'La historia nos traslada a una isla paradisíaca, situada en el Pacífico Sur, donde, tras una catastrofe aérea, un grupo de supervivientes espera ser rescatado y resistir a su día a día como náufragos. Quien se erige como líder de estos supervivientes es Jack Shephard (Mathew Fox ''Cinco en familia'', ''En el punto de mira'', ''Equipo Marshall''), un doctor con un gran sentido de la responsabilidad y cuyo único objetivo es preservar el bien del grupo y conseguir que sean rescatados de cualquier modo. Entre los supervivientes también se encuentra la valiente y a la vez rebelde Kate Austen (Evangeline Lilly ''El Hobbit''), el impulsivo y rey del sarcasmo Sawyer (Josh Holloway ''Misión imposible - Protocolo fantasma''), el enigmático John Locke (Terry O''Quinn ''Alias'', ''Hawaii 5-0'') y el grandullón e ingenuo Hurley (Jorge García ''Alcatraz'', ''Becker'').'),
('Stranger Things', 5, 2016, 'EE.UU', 'Drama, Fantasia', 0, 55, 'stranger.jpg', 'Stranger Things (originalmente titulada Montauk) es una serie de televisión dramática de misterio que está ambientada en una localidad de Indiana. Dicho lugar adquiere fama por los extraños acontecimientos que están sucediendo, similares a los del ''Proyecto Montauk'', un supuesto proyecto secreto llevado a cabo por el gobierno de los Estados Unidos en el que se realizaban experimentos con la finalidad de desarrollar técnicas de guerra psicológica.'),
('Vikings ', 6, 2013, 'EEUU', 'Aventura,Drama', 0, 53, 'vikings.jpg', 'Este nuevo drama histórico, dirigido por Michael Hirst (''Elizabeth'', ''The Tudors''), de History Channel está centrado en Ragnar Lothbrok, figura mítica que aseguraba que era el descendiente de Odín, el dios principal de la mitología nórdica.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `login` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombre` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT '0',
  `descripcion` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`login`, `password`, `nombre`, `admin`, `descripcion`) VALUES
('admin', 'admin', 'Geyse Canquerino', 1, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `autor`
--
ALTER TABLE `autor`
  ADD PRIMARY KEY (`id_autor`);

--
-- Indices de la tabla `obra`
--
ALTER TABLE `obra`
  ADD PRIMARY KEY (`titulo`),
  ADD KEY `id_autor` (`id_autor`) USING BTREE;

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`login`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `autor`
--
ALTER TABLE `autor`
  MODIFY `id_autor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `obra`
--
ALTER TABLE `obra`
  ADD CONSTRAINT `obra-autor` FOREIGN KEY (`id_autor`) REFERENCES `autor` (`id_autor`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
