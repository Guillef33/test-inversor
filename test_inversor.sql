-- --------------------------------------------------------
-- Host:                         localhost
-- Versión del servidor:         10.1.35-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win32
-- HeidiSQL Versión:             9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para inversor_guille
CREATE DATABASE IF NOT EXISTS `inversor_guille` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci */;
USE `inversor_guille`;

-- Volcando estructura para tabla inversor_guille.activos
CREATE TABLE IF NOT EXISTS `activos` (
  `idActivo` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `type` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `performance` float NOT NULL,
  `risk` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `symbol` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `id_img` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`idActivo`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- Volcando datos para la tabla inversor_guille.activos: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `activos` DISABLE KEYS */;
INSERT IGNORE INTO `activos` (`idActivo`, `name`, `type`, `performance`, `risk`, `symbol`, `id_img`) VALUES
	(1, 'National Amt-Free muni Bond Ishares', 'Bono municipal EEUU', 3.5, 'moderado', 'MNB', NULL),
	(2, 'Us Total Bond ', 'Bono EEUU', 0.2, 'moderado ', 'BND', NULL),
	(3, 'Facebook', 'Empresa EEUU', 5, 'arriesgado', 'FB', NULL),
	(4, 'Apple, inc', 'Empresa EEUU', -2, 'arriesgado', 'APP', NULL),
	(5, 'Mac donald', 'Bono EEUU', 4.3, 'moderado ', 'MCD', NULL);
/*!40000 ALTER TABLE `activos` ENABLE KEYS */;

-- Volcando estructura para tabla inversor_guille.login
CREATE TABLE IF NOT EXISTS `login` (
  `usuario` varchar(50) NOT NULL,
  `contrasena` varchar(50) NOT NULL,
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla inversor_guille.login: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `login` DISABLE KEYS */;
INSERT IGNORE INTO `login` (`usuario`, `contrasena`, `id`) VALUES
	('ema', '123', 1);
/*!40000 ALTER TABLE `login` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
