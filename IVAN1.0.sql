-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.4.32-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win64
-- HeidiSQL Versión:             12.6.0.6765
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Volcando estructura de base de datos para inventario_ivan
DROP DATABASE IF EXISTS `inventario_ivan`;
CREATE DATABASE IF NOT EXISTS `inventario_ivan` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;
USE `inventario_ivan`;

-- Volcando estructura para tabla inventario_ivan.equipo_invent
DROP TABLE IF EXISTS `equipo_invent`;
CREATE TABLE IF NOT EXISTS `equipo_invent` (
  `id_equipo` int(11) NOT NULL AUTO_INCREMENT,
  `planta` int(11) NOT NULL,
  `gcia` varchar(30) NOT NULL,
  `gcia_div_dep` varchar(30) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `cedula` int(11) NOT NULL,
  `usuario` varchar(30) NOT NULL,
  `cargo` varchar(30) NOT NULL,
  `tipo_de_equipo` varchar(30) NOT NULL,
  `marca_equipo` varchar(30) NOT NULL,
  `modelo` varchar(30) NOT NULL,
  `serial_equipo` varchar(30) NOT NULL,
  `monitor_marca` varchar(30) NOT NULL,
  `monitor_modelo` varchar(30) NOT NULL,
  `serial_monitor` varchar(30) NOT NULL,
  `bien_nacional` varchar(20) NOT NULL,
  `serial_tecnologia` varchar(30) NOT NULL,
  `sistema_migrado` varchar(30) NOT NULL,
  `disco_duro` varchar(30) NOT NULL,
  `ram` varchar(30) NOT NULL,
  `nombre_de_equipo` varchar(30) NOT NULL,
  `mac_equipo` varchar(30) NOT NULL,
  `observaciones` varchar(60) NOT NULL,
  `tecnico_responsable` varchar(30) NOT NULL,
  `registro` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id_equipo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Volcando datos para la tabla inventario_ivan.equipo_invent: ~0 rows (aproximadamente)
DELETE FROM `equipo_invent`;

-- Volcando estructura para tabla inventario_ivan.usuario
DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `registro` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Volcando datos para la tabla inventario_ivan.usuario: ~0 rows (aproximadamente)
DELETE FROM `usuario`;
INSERT INTO `usuario` (`id_usuario`, `usuario`, `password`, `registro`) VALUES
	(1, 'ivan', '123456', '2024-04-24 11:28:07');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
