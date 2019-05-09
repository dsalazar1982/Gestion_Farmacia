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

-- Volcando estructura para tabla db_proyectofarmacia.tb_carritos
DROP TABLE IF EXISTS `tb_carritos`;
CREATE TABLE IF NOT EXISTS `tb_carritos` (
  `id_carrito` int(11) DEFAULT NULL,
  `id_producto` int(11) DEFAULT NULL,
  `cant_producto` int(11) DEFAULT NULL,
  `id_cliente` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- La exportación de datos fue deseleccionada.
-- Volcando estructura para tabla db_proyectofarmacia.tb_ciudades
DROP TABLE IF EXISTS `tb_ciudades`;
CREATE TABLE IF NOT EXISTS `tb_ciudades` (
  `id_ciudad` int(11) DEFAULT NULL,
  `nom_ciudad` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `id_departamento` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- La exportación de datos fue deseleccionada.
-- Volcando estructura para tabla db_proyectofarmacia.tb_clientes
DROP TABLE IF EXISTS `tb_clientes`;
CREATE TABLE IF NOT EXISTS `tb_clientes` (
  `id_cliente` int(11) DEFAULT NULL,
  `nom_cliente` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `dir_cliente` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `tel_cliente` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `core_cliente` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `id_rol` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- La exportación de datos fue deseleccionada.
-- Volcando estructura para tabla db_proyectofarmacia.tb_departamento
DROP TABLE IF EXISTS `tb_departamento`;
CREATE TABLE IF NOT EXISTS `tb_departamento` (
  `id_departamento` int(11) DEFAULT NULL,
  `nom_departamento` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `id_pais` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- La exportación de datos fue deseleccionada.
-- Volcando estructura para tabla db_proyectofarmacia.tb_empleados
DROP TABLE IF EXISTS `tb_empleados`;
CREATE TABLE IF NOT EXISTS `tb_empleados` (
  `id_empleado` int(11) DEFAULT NULL,
  `nom_empleado` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `apel_empleado` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `nac_empleado` date DEFAULT NULL,
  `dir_empleado` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `tel_empleado` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `core_empleado` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `carg_empleado` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `id_rol` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- La exportación de datos fue deseleccionada.
-- Volcando estructura para tabla db_proyectofarmacia.tb_estados
DROP TABLE IF EXISTS `tb_estados`;
CREATE TABLE IF NOT EXISTS `tb_estados` (
  `id_estado` int(11) DEFAULT NULL,
  `nom_estado` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- La exportación de datos fue deseleccionada.
-- Volcando estructura para tabla db_proyectofarmacia.tb_facturas
DROP TABLE IF EXISTS `tb_facturas`;
CREATE TABLE IF NOT EXISTS `tb_facturas` (
  `id_factura` int(11) DEFAULT NULL,
  `id_venta` int(11) DEFAULT NULL,
  `fecha_venta` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- La exportación de datos fue deseleccionada.
-- Volcando estructura para tabla db_proyectofarmacia.tb_farmacias
DROP TABLE IF EXISTS `tb_farmacias`;
CREATE TABLE IF NOT EXISTS `tb_farmacias` (
  `id_farmacia` int(11) DEFAULT NULL,
  `nom_farmacia` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `id_ciudad` int(11) DEFAULT NULL,
  `id_empleado` int(11) DEFAULT NULL,
  `id_propietario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- La exportación de datos fue deseleccionada.
-- Volcando estructura para tabla db_proyectofarmacia.tb_fpago
DROP TABLE IF EXISTS `tb_fpago`;
CREATE TABLE IF NOT EXISTS `tb_fpago` (
  `id_fpago` int(11) DEFAULT NULL,
  `nom_fpago` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- La exportación de datos fue deseleccionada.
-- Volcando estructura para tabla db_proyectofarmacia.tb_logs
DROP TABLE IF EXISTS `tb_logs`;
CREATE TABLE IF NOT EXISTS `tb_logs` (
  `id_log` int(11) DEFAULT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `fec_ingreso` date DEFAULT NULL,
  `fec_salida` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- La exportación de datos fue deseleccionada.
-- Volcando estructura para tabla db_proyectofarmacia.tb_nomina
DROP TABLE IF EXISTS `tb_nomina`;
CREATE TABLE IF NOT EXISTS `tb_nomina` (
  `id_nomina` int(11) DEFAULT NULL,
  `id_empleado` int(11) DEFAULT NULL,
  `salario` float DEFAULT NULL,
  `valor_h_extra` float DEFAULT NULL,
  `descuento` float DEFAULT NULL,
  `neto` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- La exportación de datos fue deseleccionada.
-- Volcando estructura para tabla db_proyectofarmacia.tb_paises
DROP TABLE IF EXISTS `tb_paises`;
CREATE TABLE IF NOT EXISTS `tb_paises` (
  `id_pais` int(11) DEFAULT NULL,
  `abre_pais` varchar(7) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `nom_pais` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- La exportación de datos fue deseleccionada.
-- Volcando estructura para tabla db_proyectofarmacia.tb_presentaciones
DROP TABLE IF EXISTS `tb_presentaciones`;
CREATE TABLE IF NOT EXISTS `tb_presentaciones` (
  `id_presentacion` int(11) DEFAULT NULL,
  `nom_presentacion` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- La exportación de datos fue deseleccionada.
-- Volcando estructura para tabla db_proyectofarmacia.tb_productos
DROP TABLE IF EXISTS `tb_productos`;
CREATE TABLE IF NOT EXISTS `tb_productos` (
  `id_producto` int(11) DEFAULT NULL,
  `nom_producto` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `cost_producto` float DEFAULT NULL,
  `pres_producto` float DEFAULT NULL,
  `img_producto` blob,
  `id_proveedor` blob
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- La exportación de datos fue deseleccionada.
-- Volcando estructura para tabla db_proyectofarmacia.tb_propietarios
DROP TABLE IF EXISTS `tb_propietarios`;
CREATE TABLE IF NOT EXISTS `tb_propietarios` (
  `id_propietario` int(11) DEFAULT NULL,
  `nom_propietario` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `ape_propietario` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `dir_propietario` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `tel_propietario` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `id_farmacia` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- La exportación de datos fue deseleccionada.
-- Volcando estructura para tabla db_proyectofarmacia.tb_proveedores
DROP TABLE IF EXISTS `tb_proveedores`;
CREATE TABLE IF NOT EXISTS `tb_proveedores` (
  `id_proveedor` int(11) DEFAULT NULL,
  `nom_proveedor` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `dir_proveedor` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `tel_proveedor` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `id_produto` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- La exportación de datos fue deseleccionada.
-- Volcando estructura para tabla db_proyectofarmacia.tb_roles
DROP TABLE IF EXISTS `tb_roles`;
CREATE TABLE IF NOT EXISTS `tb_roles` (
  `id_rol` int(11) DEFAULT NULL,
  `nom_rol` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- La exportación de datos fue deseleccionada.
-- Volcando estructura para tabla db_proyectofarmacia.tb_usuarios
DROP TABLE IF EXISTS `tb_usuarios`;
CREATE TABLE IF NOT EXISTS `tb_usuarios` (
  `id_usuario` int(11) DEFAULT NULL,
  `usuario` int(11) DEFAULT NULL,
  `clave` int(11) DEFAULT NULL,
  `id_estado` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- La exportación de datos fue deseleccionada.
-- Volcando estructura para tabla db_proyectofarmacia.tb_ventas
DROP TABLE IF EXISTS `tb_ventas`;
CREATE TABLE IF NOT EXISTS `tb_ventas` (
  `id_venta` int(11) DEFAULT NULL,
  `id_producto` int(11) DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `precio` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- La exportación de datos fue deseleccionada.
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
