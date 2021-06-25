-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-06-2021 a las 17:03:09
-- Versión del servidor: 10.4.18-MariaDB
-- Versión de PHP: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `inversor_guille`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `activos`
--

CREATE TABLE `activos` (
  `idActivo` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `type` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `performance` float NOT NULL,
  `risk` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `symbol` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `id_img` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `activos`
--

INSERT INTO `activos` (`idActivo`, `name`, `type`, `performance`, `risk`, `symbol`, `id_img`) VALUES
(1, 'National Amt-Free muni Bond Ishares', 'Bono municipal EEUU', 3.5, 'moderado', 'MNB', NULL),
(2, 'Us Total Bond ', 'Bono EEUU', 0.2, 'moderado ', 'BND', NULL),
(3, 'Facebook', 'Empresa EEUU', 1.5, 'moderado', 'FB', NULL),
(4, 'Apple, inc', 'Empresa EEUU', 2, 'moderado', 'APP', NULL),
(5, 'Mac donald', 'Bono EEUU', 4.3, 'moderado ', 'MCD', NULL),
(6, 'Bono Provincia BA', 'Bonos Argentinos', 3, 'arriesgado', 'PBA', NULL),
(7, 'Bono Cordoba', 'Bonos Argentinos', 1, 'arriesgado', 'CBA', NULL),
(8, 'Intel', 'Empresa EEUU', 6, 'arriesgado', 'INT', NULL),
(9, 'Intel', 'Empresa EEUU', 6, 'arriesgado', 'INT', NULL),
(10, 'Bitcoin', 'Criptomonedas', 11, 'arriesgado', 'BTC', NULL),
(11, 'Ethereum', 'Criptomonedas', 8, 'arriesgado', 'ETH', NULL),
(12, 'Bitcoin', 'Criptomonedas', 11, 'arriesgado', 'BTC', NULL),
(13, 'Ethereum', 'Criptomonedas', 8, 'arriesgado', 'ETH', NULL),
(14, 'Nasdaq', 'Bolsa EEUU', 3, 'bajo', 'NSQ', NULL),
(15, 'S&P', 'Bolsa EEUU', 2, 'bajo', 'SP', NULL),
(16, 'Nasdaq', 'Bolsa EEUU', 3, 'bajo', 'NSQ', NULL),
(17, 'S&P', 'Bolsa EEUU', 2, 'bajo', 'SP', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

CREATE TABLE `login` (
  `usuario` varchar(50) NOT NULL DEFAULT '',
  `password` varchar(50) NOT NULL DEFAULT '',
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `login`
--

INSERT INTO `login` (`usuario`, `password`, `id`) VALUES
('guillermo', '1234', 1),
('ema', '1234', 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `activos`
--
ALTER TABLE `activos`
  ADD PRIMARY KEY (`idActivo`);

--
-- Indices de la tabla `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `activos`
--
ALTER TABLE `activos`
  MODIFY `idActivo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
