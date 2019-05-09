-- --------------------------------------------------------
-- Host:                         localhost
-- Versión del servidor:         10.1.38-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win64
-- HeidiSQL Versión:             10.1.0.5464
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para db_proyectofarmacia
DROP DATABASE IF EXISTS `db_proyectofarmacia`;
CREATE DATABASE IF NOT EXISTS `db_proyectofarmacia` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish2_ci */;
USE `db_proyectofarmacia`;

-- Volcando estructura para tabla db_proyectofarmacia.tb_ciudades
DROP TABLE IF EXISTS `tb_ciudades`;
CREATE TABLE IF NOT EXISTS `tb_ciudades` (
  `ciudadCodigo` int(11) DEFAULT NULL,
  `ciudadNombre` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `paisCodigo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- Volcando datos para la tabla db_proyectofarmacia.tb_ciudades: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `tb_ciudades` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_ciudades` ENABLE KEYS */;

-- Volcando estructura para tabla db_proyectofarmacia.tb_clientes
DROP TABLE IF EXISTS `tb_clientes`;
CREATE TABLE IF NOT EXISTS `tb_clientes` (
  `clienteCodigo` int(11) DEFAULT NULL,
  `clienteNombre` text COLLATE utf8_spanish2_ci,
  `clienteDireccion` text COLLATE utf8_spanish2_ci,
  `clienteTelefono` text COLLATE utf8_spanish2_ci,
  `clienteCorreo` text COLLATE utf8_spanish2_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- Volcando datos para la tabla db_proyectofarmacia.tb_clientes: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `tb_clientes` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_clientes` ENABLE KEYS */;

-- Volcando estructura para tabla db_proyectofarmacia.tb_empleados
DROP TABLE IF EXISTS `tb_empleados`;
CREATE TABLE IF NOT EXISTS `tb_empleados` (
  `empleadoCodigo` int(11) DEFAULT NULL,
  `empleadoNombre` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `empleadoApellido` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `empleadoFechaNacimiento` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `empleadoDireccion` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `empleadoTelefono` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `empleadoCorreo` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `empleadoCargo` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- Volcando datos para la tabla db_proyectofarmacia.tb_empleados: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `tb_empleados` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_empleados` ENABLE KEYS */;

-- Volcando estructura para tabla db_proyectofarmacia.tb_farmacias
DROP TABLE IF EXISTS `tb_farmacias`;
CREATE TABLE IF NOT EXISTS `tb_farmacias` (
  `farmaciaCodigo` int(11) DEFAULT NULL,
  `farmaciaNombre` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `ciudadCodigo` int(11) DEFAULT NULL,
  `administradorSistemaCodigo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- Volcando datos para la tabla db_proyectofarmacia.tb_farmacias: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `tb_farmacias` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_farmacias` ENABLE KEYS */;

-- Volcando estructura para tabla db_proyectofarmacia.tb_fpago
DROP TABLE IF EXISTS `tb_fpago`;
CREATE TABLE IF NOT EXISTS `tb_fpago` (
  `fPagoCodigo` int(11) DEFAULT NULL,
  `fPagoDetalle` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- Volcando datos para la tabla db_proyectofarmacia.tb_fpago: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `tb_fpago` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_fpago` ENABLE KEYS */;

-- Volcando estructura para tabla db_proyectofarmacia.tb_logs
DROP TABLE IF EXISTS `tb_logs`;
CREATE TABLE IF NOT EXISTS `tb_logs` (
  `codigoLog` int(11) DEFAULT NULL,
  `nombreUsuario` int(11) DEFAULT NULL,
  `datoIngreso` int(11) DEFAULT NULL,
  `datoSalida` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- Volcando datos para la tabla db_proyectofarmacia.tb_logs: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `tb_logs` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_logs` ENABLE KEYS */;

-- Volcando estructura para tabla db_proyectofarmacia.tb_nomina
DROP TABLE IF EXISTS `tb_nomina`;
CREATE TABLE IF NOT EXISTS `tb_nomina` (
  `nominaNumero` int(11) DEFAULT NULL,
  `empleadoCodigo` int(11) DEFAULT NULL,
  `nominaSalario` int(11) DEFAULT NULL,
  `nominaValorExtras` int(11) DEFAULT NULL,
  `nominaDescuentos` int(11) DEFAULT NULL,
  `nominaNeto` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- Volcando datos para la tabla db_proyectofarmacia.tb_nomina: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `tb_nomina` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_nomina` ENABLE KEYS */;

-- Volcando estructura para tabla db_proyectofarmacia.tb_paises
DROP TABLE IF EXISTS `tb_paises`;
CREATE TABLE IF NOT EXISTS `tb_paises` (
  `paisCodigo` int(11) DEFAULT NULL,
  `paisNombre` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- Volcando datos para la tabla db_proyectofarmacia.tb_paises: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `tb_paises` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_paises` ENABLE KEYS */;

-- Volcando estructura para tabla db_proyectofarmacia.tb_productos
DROP TABLE IF EXISTS `tb_productos`;
CREATE TABLE IF NOT EXISTS `tb_productos` (
  `productoCodigo` int(11) DEFAULT NULL,
  `productoNombre` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `productoCosto` int(11) DEFAULT NULL,
  `productoPrecio` int(11) DEFAULT NULL,
  `productoImagen` longblob
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- Volcando datos para la tabla db_proyectofarmacia.tb_productos: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `tb_productos` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_productos` ENABLE KEYS */;

-- Volcando estructura para tabla db_proyectofarmacia.tb_propietarios
DROP TABLE IF EXISTS `tb_propietarios`;
CREATE TABLE IF NOT EXISTS `tb_propietarios` (
  `propietarioCodigo` int(11) DEFAULT NULL,
  `propietarioNombre` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `farmaciaCodigo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- Volcando datos para la tabla db_proyectofarmacia.tb_propietarios: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `tb_propietarios` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_propietarios` ENABLE KEYS */;

-- Volcando estructura para tabla db_proyectofarmacia.tb_proveedores
DROP TABLE IF EXISTS `tb_proveedores`;
CREATE TABLE IF NOT EXISTS `tb_proveedores` (
  `proveedorCodigo` int(11) DEFAULT NULL,
  `proeevdorNombre` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- Volcando datos para la tabla db_proyectofarmacia.tb_proveedores: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `tb_proveedores` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_proveedores` ENABLE KEYS */;

-- Volcando estructura para tabla db_proyectofarmacia.tb_roles
DROP TABLE IF EXISTS `tb_roles`;
CREATE TABLE IF NOT EXISTS `tb_roles` (
  `rolCodigo` int(11) NOT NULL,
  `rolNombre` varchar(50) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- Volcando datos para la tabla db_proyectofarmacia.tb_roles: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `tb_roles` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_roles` ENABLE KEYS */;

-- Volcando estructura para tabla db_proyectofarmacia.tb_usuarios
DROP TABLE IF EXISTS `tb_usuarios`;
CREATE TABLE IF NOT EXISTS `tb_usuarios` (
  `usuarioCodigo` int(11) DEFAULT NULL,
  `usuarioRol` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `usuarioClave` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- Volcando datos para la tabla db_proyectofarmacia.tb_usuarios: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `tb_usuarios` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_usuarios` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
