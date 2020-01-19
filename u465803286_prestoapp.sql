-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-01-2020 a las 18:58:56
-- Versión del servidor: 10.4.10-MariaDB
-- Versión de PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `u465803286_prestoapp`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cartera`
--

CREATE TABLE `cartera` (
  `id` int(11) NOT NULL,
  `nombre` varchar(300) NOT NULL,
  `Apellido` varchar(300) NOT NULL,
  `cedula` int(2) NOT NULL,
  `correo` varchar(300) NOT NULL,
  `telefono` varchar(200) NOT NULL,
  `ciudad` varchar(300) NOT NULL,
  `direccion` varchar(300) NOT NULL,
  `valorIni` int(2) NOT NULL,
  `notasAdicionales` varchar(300) NOT NULL,
  `fechaCreaciin` timestamp NOT NULL DEFAULT current_timestamp(),
  `saldo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cartera`
--

INSERT INTO `cartera` (`id`, `nombre`, `Apellido`, `cedula`, `correo`, `telefono`, `ciudad`, `direccion`, `valorIni`, `notasAdicionales`, `fechaCreaciin`, `saldo`) VALUES
(7, 'Alejandra ', 'perez', 1095793158, 'aleja_30@hotmail.com', '3114977164', 'floridablanca', ' 3114977164', 50000, 'nuevo', '2020-01-16 01:33:30', 50000),
(16, 'jorge', 'ochoa', 1231123421, 'jeob20@hotmail.com', '3111', 'bucaramanga', ' 11111', 2342, 'ñ{kklk{l', '2020-01-16 02:15:48', 0),
(18, 'Cartera Admin', 'principal', 2147483647, 'admin@correo.co', '3015071374', 'barranquilla', ' sector d torre', 5000000, 'saldo inicial', '2020-01-19 02:26:50', 5000000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `id` int(2) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `direccion` varchar(300) NOT NULL,
  `notas` varchar(1000) NOT NULL,
  `favorito` int(1) NOT NULL,
  `telefono` varchar(200) NOT NULL,
  `correo` varchar(200) NOT NULL,
  `estado` int(1) NOT NULL,
  `cedula` int(20) NOT NULL,
  `ciudad` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id`, `foto`, `nombre`, `apellido`, `direccion`, `notas`, `favorito`, `telefono`, `correo`, `estado`, `cedula`, `ciudad`) VALUES
(1, 'perfil.png', 'nombre', 'apellido', 'direccion', 'notas', 1, '2147483647', 'correo@correo', 0, 1095793158, ''),
(2, '', 'Ingrese nombre', 'Ingrese apellido', ' 3114977164', '', 0, '3114977164', 'sierra@example.com', 0, 1095793158, 'bucaramanga'),
(3, '', 'Ingrese nombre', 'Ingrese apellido', ' wrwerew', '', 0, '342342', 'sierra@example.com', 0, 1095793158, 'bucaramanga'),
(4, '', 'Aleja ', 'perez', ' giara torre 4 apto 802', 'es nuevo', 0, '3015071374', 'aleja_30@hotmail.com', 0, 1095793158, 'floridablanca'),
(5, '', 'ussuario', 'nuevo', ' por hay', 'nuevoe elemento', 0, '3210909', 'usuario@n.co', 0, 123, 'lejo'),
(6, '', 'Ingrese nombre', 'Ingrese apellido', ' 3114977164', '1095793158', 0, '3114977164', 'sierra@example.com', 0, 1095793158, 'bucaramanga'),
(7, '', 'Ingrese nombre', 'Ingrese apellido', ' 3114977164', 'dfgdfgdfgdf', 0, '3114977164', 'sierra@example.com', 0, 1095793158, 'floridablanca'),
(8, '', 'Ingrese nombre', 'Ingrese apellido', ' 3114977164', 'hjghjhgjgh', 0, '3114977164', 'sierra@example.com', 0, 123, 'bucaramanga'),
(9, '', 'Roberto', 'gomez', ' cra 1 call 23 32', 'nuevo', 0, '3112412321', 'roberto@gomez.com', 0, 10923123, 'floridablanca');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuenta`
--

CREATE TABLE `cuenta` (
  `id` int(2) NOT NULL,
  `id_cliente` int(2) NOT NULL,
  `id_prestamista` int(2) NOT NULL,
  `prestamo` float NOT NULL,
  `fecha_prestamo` timestamp NOT NULL DEFAULT current_timestamp(),
  `interes` float NOT NULL,
  `fechaVisita1` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cuenta`
--

INSERT INTO `cuenta` (`id`, `id_cliente`, `id_prestamista`, `prestamo`, `fecha_prestamo`, `interes`, `fechaVisita1`) VALUES
(13, 2, 7, 2500, '2020-01-19 02:36:19', 20, '2020-01-30'),
(15, 2, 18, 350000, '2020-01-19 02:41:09', 3.4, '2020-02-02'),
(16, 0, 18, 6000, '2020-01-19 03:34:19', 4.9, '2020-01-31'),
(17, 0, 18, 12000, '2020-01-19 03:35:51', 0.34, '2020-01-31'),
(18, 3, 7, 0, '2020-01-19 03:42:08', 0, '2020-01-23'),
(19, 9, 7, 560, '2020-01-19 14:44:23', 3.5, '2020-01-29'),
(21, 9, 7, 94500, '2020-01-19 14:45:56', 5.2, '2020-01-31');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dias`
--

CREATE TABLE `dias` (
  `id` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `lunes` varchar(20) DEFAULT NULL,
  `martes` varchar(11) DEFAULT NULL,
  `miercoles` varchar(11) DEFAULT NULL,
  `jueves` int(11) DEFAULT NULL,
  `viernes` int(11) DEFAULT NULL,
  `sabado` int(11) DEFAULT NULL,
  `domingo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `dias`
--

INSERT INTO `dias` (`id`, `id_cliente`, `lunes`, `martes`, `miercoles`, `jueves`, `viernes`, `sabado`, `domingo`) VALUES
(1, 1095793148, '1', '0', '0', 0, 0, 0, 0),
(2, 231312321, '0', '0', '0', 0, 0, 0, NULL),
(3, 123123231, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 123, '0', '0', '0', 0, 0, 0, 0),
(5, 1095793158, 'on', 'on', 'on', 0, 0, 0, 0),
(6, 1095793158, 'on', 'on', 'on', 0, 0, 0, 0),
(7, 123, '1', '1', '1', 1, 1, 1, 1),
(8, 10923123, '1', '1', '1', 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pago`
--

CREATE TABLE `pago` (
  `id` int(2) NOT NULL,
  `id_cartera` int(11) NOT NULL,
  `valor` int(11) NOT NULL,
  `fechaPago` timestamp NOT NULL DEFAULT current_timestamp(),
  `id_cliente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pago`
--

INSERT INTO `pago` (`id`, `id_cartera`, `valor`, `fechaPago`, `id_cliente`) VALUES
(2, 16, 250000, '2020-01-16 03:59:57', 9),
(3, 18, 200000, '2020-01-19 18:52:07', 9);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(2) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `nombreApellido` varchar(100) NOT NULL,
  `edad` int(11) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `contrasenia` varchar(200) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp(),
  `foto` varchar(200) NOT NULL,
  `estado` int(2) NOT NULL,
  `cedula` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `usuario`, `nombreApellido`, `edad`, `correo`, `contrasenia`, `fecha`, `foto`, `estado`, `cedula`) VALUES
(1, 'admin', 'jorge Ochoa', 32, 'JEOB20@HOTMAIL.COM', '123456', '2019-12-29 05:00:00', 'jorge.jpg', 1, 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cartera`
--
ALTER TABLE `cartera`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cuenta`
--
ALTER TABLE `cuenta`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `dias`
--
ALTER TABLE `dias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pago`
--
ALTER TABLE `pago`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cartera`
--
ALTER TABLE `cartera`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `cuenta`
--
ALTER TABLE `cuenta`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `dias`
--
ALTER TABLE `dias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `pago`
--
ALTER TABLE `pago`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
