-- --------------------------------------------------------
-- Host:                         localhost
-- Versión del servidor:         10.1.38-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win64
-- HeidiSQL Versión:             10.1.0.5545
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para db_proyectofamracia
DROP DATABASE IF EXISTS `db_proyectofamracia`;
CREATE DATABASE IF NOT EXISTS `db_proyectofamracia` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish2_ci */;
USE `db_proyectofamracia`;

-- Volcando estructura para tabla db_proyectofamracia.tb_ciudades
DROP TABLE IF EXISTS `tb_ciudades`;
CREATE TABLE IF NOT EXISTS `tb_ciudades` (
  `id_ciudad` int(11) NOT NULL,
  `nombre_ciudad` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `id_pais` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_ciudad`),
  KEY `id_pais` (`id_pais`),
  CONSTRAINT `fk_ciudades-paises` FOREIGN KEY (`id_pais`) REFERENCES `tb_paises` (`id_pais`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- Volcando datos para la tabla db_proyectofamracia.tb_ciudades: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `tb_ciudades` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_ciudades` ENABLE KEYS */;

-- Volcando estructura para tabla db_proyectofamracia.tb_clientes
DROP TABLE IF EXISTS `tb_clientes`;
CREATE TABLE IF NOT EXISTS `tb_clientes` (
  `id_cliente` int(11) NOT NULL,
  `nombre_cliente` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `direccion_cliente` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `telefono_cliente` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `id_pais` int(11) DEFAULT NULL,
  `id_ciudad` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_cliente`),
  KEY `id_ciudad` (`id_ciudad`),
  KEY `id_pais` (`id_pais`),
  CONSTRAINT `fk_clientes-ciudades` FOREIGN KEY (`id_ciudad`) REFERENCES `tb_ciudades` (`id_ciudad`),
  CONSTRAINT `fk_clientes-paises` FOREIGN KEY (`id_pais`) REFERENCES `tb_paises` (`id_pais`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- Volcando datos para la tabla db_proyectofamracia.tb_clientes: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `tb_clientes` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_clientes` ENABLE KEYS */;

-- Volcando estructura para tabla db_proyectofamracia.tb_empleados
DROP TABLE IF EXISTS `tb_empleados`;
CREATE TABLE IF NOT EXISTS `tb_empleados` (
  `id_empleado` int(11) NOT NULL,
  `nombre_empleado` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `apellido_empleado` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `cargo_empleado` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `id_pais` int(11) DEFAULT NULL,
  `id_ciudad` int(11) DEFAULT NULL,
  `direccion_empleado` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `telefono_empleado` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `email_empleado` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  PRIMARY KEY (`id_empleado`),
  KEY `id_pais` (`id_pais`),
  KEY `id_ciudad` (`id_ciudad`),
  CONSTRAINT `fk_empleados-ciudades` FOREIGN KEY (`id_ciudad`) REFERENCES `tb_ciudades` (`id_ciudad`),
  CONSTRAINT `fk_empleados-paises` FOREIGN KEY (`id_pais`) REFERENCES `tb_paises` (`id_pais`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- Volcando datos para la tabla db_proyectofamracia.tb_empleados: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `tb_empleados` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_empleados` ENABLE KEYS */;

-- Volcando estructura para tabla db_proyectofamracia.tb_estados
DROP TABLE IF EXISTS `tb_estados`;
CREATE TABLE IF NOT EXISTS `tb_estados` (
  `id_estado` int(11) NOT NULL,
  `nombre_estado` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`id_estado`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- Volcando datos para la tabla db_proyectofamracia.tb_estados: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `tb_estados` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_estados` ENABLE KEYS */;

-- Volcando estructura para tabla db_proyectofamracia.tb_facturas
DROP TABLE IF EXISTS `tb_facturas`;
CREATE TABLE IF NOT EXISTS `tb_facturas` (
  `id_factura` int(11) NOT NULL,
  `id_cliente` int(11) DEFAULT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `fecha_factura` datetime NOT NULL,
  `valor_factura` int(11) NOT NULL,
  `descuento_factura` int(11) NOT NULL,
  `iva_factura` int(11) NOT NULL,
  `neto_factura` int(11) NOT NULL,
  PRIMARY KEY (`id_factura`),
  KEY `id_cliente` (`id_cliente`),
  KEY `id_usuario` (`id_usuario`),
  CONSTRAINT `fk_facturas-cliente` FOREIGN KEY (`id_cliente`) REFERENCES `tb_clientes` (`id_cliente`),
  CONSTRAINT `fk_facturas-usuario` FOREIGN KEY (`id_usuario`) REFERENCES `tb_usuarios` (`id_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- Volcando datos para la tabla db_proyectofamracia.tb_facturas: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `tb_facturas` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_facturas` ENABLE KEYS */;

-- Volcando estructura para tabla db_proyectofamracia.tb_farmacias
DROP TABLE IF EXISTS `tb_farmacias`;
CREATE TABLE IF NOT EXISTS `tb_farmacias` (
  `id_farmacia` int(11) NOT NULL,
  `nombre_farmacia` varchar(50) COLLATE utf8_spanish2_ci NOT NULL DEFAULT '',
  `direccion_farmacia` varchar(50) COLLATE utf8_spanish2_ci NOT NULL DEFAULT '',
  `telefono_farmacia` varchar(50) COLLATE utf8_spanish2_ci NOT NULL DEFAULT '',
  `id_ciudad` int(11) DEFAULT NULL,
  `id_propietario` int(11) DEFAULT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_farmacia`),
  KEY `id_ciudad` (`id_ciudad`),
  KEY `id_propietario` (`id_propietario`),
  KEY `id_usuario` (`id_usuario`),
  CONSTRAINT `fk_facturas-usuarios` FOREIGN KEY (`id_usuario`) REFERENCES `tb_usuarios` (`id_usuario`),
  CONSTRAINT `fk_farmacias-ciudades` FOREIGN KEY (`id_ciudad`) REFERENCES `tb_ciudades` (`id_ciudad`),
  CONSTRAINT `fk_farmacias-propietarios` FOREIGN KEY (`id_propietario`) REFERENCES `tb_propietarios` (`id_propietario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- Volcando datos para la tabla db_proyectofamracia.tb_farmacias: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `tb_farmacias` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_farmacias` ENABLE KEYS */;

-- Volcando estructura para tabla db_proyectofamracia.tb_formaspago
DROP TABLE IF EXISTS `tb_formaspago`;
CREATE TABLE IF NOT EXISTS `tb_formaspago` (
  `id_formapago` int(11) NOT NULL,
  `nombre_formapago` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`id_formapago`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- Volcando datos para la tabla db_proyectofamracia.tb_formaspago: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `tb_formaspago` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_formaspago` ENABLE KEYS */;

-- Volcando estructura para tabla db_proyectofamracia.tb_logs
DROP TABLE IF EXISTS `tb_logs`;
CREATE TABLE IF NOT EXISTS `tb_logs` (
  `id_log` int(11) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(11) NOT NULL,
  `fecha_ingreso` datetime NOT NULL,
  `fecha_salida` datetime NOT NULL,
  PRIMARY KEY (`id_log`),
  KEY `id_usuario` (`id_usuario`),
  CONSTRAINT `fk_logs-usuarios` FOREIGN KEY (`id_usuario`) REFERENCES `tb_usuarios` (`id_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- Volcando datos para la tabla db_proyectofamracia.tb_logs: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `tb_logs` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_logs` ENABLE KEYS */;

-- Volcando estructura para tabla db_proyectofamracia.tb_movimientosfacturas
DROP TABLE IF EXISTS `tb_movimientosfacturas`;
CREATE TABLE IF NOT EXISTS `tb_movimientosfacturas` (
  `id_movimientofactura` int(11) NOT NULL AUTO_INCREMENT,
  `id_producto` int(11) DEFAULT NULL,
  `cantidad_producto` int(11) NOT NULL,
  `id_factura` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_movimientofactura`),
  KEY `id_producto` (`id_producto`),
  KEY `id_factura` (`id_factura`),
  CONSTRAINT `fk_movimientofacturas-factura` FOREIGN KEY (`id_factura`) REFERENCES `tb_facturas` (`id_factura`),
  CONSTRAINT `fk_movimientofacturas-prodcutos` FOREIGN KEY (`id_producto`) REFERENCES `tb_productos` (`id_producto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- Volcando datos para la tabla db_proyectofamracia.tb_movimientosfacturas: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `tb_movimientosfacturas` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_movimientosfacturas` ENABLE KEYS */;

-- Volcando estructura para tabla db_proyectofamracia.tb_nominas
DROP TABLE IF EXISTS `tb_nominas`;
CREATE TABLE IF NOT EXISTS `tb_nominas` (
  `id_nomina` int(11) NOT NULL AUTO_INCREMENT,
  `id_empleado` int(11) DEFAULT NULL,
  `fecha` datetime NOT NULL,
  `salario_basico` int(11) NOT NULL,
  `hextrasd` int(11) DEFAULT NULL,
  `hextrasn` int(11) DEFAULT NULL,
  `auxilio_trasporte` int(11) DEFAULT NULL,
  `valor_hextrad` int(11) DEFAULT NULL,
  `valor_hextran` int(11) DEFAULT NULL,
  `dias_laborados` int(11) NOT NULL,
  `salario_devengado` int(11) NOT NULL,
  `pension` int(11) NOT NULL,
  `salud` int(11) NOT NULL,
  `salario_neto` int(11) NOT NULL,
  PRIMARY KEY (`id_nomina`),
  KEY `id_empleado` (`id_empleado`),
  CONSTRAINT `fk_nominas-empleados` FOREIGN KEY (`id_empleado`) REFERENCES `tb_empleados` (`id_empleado`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- Volcando datos para la tabla db_proyectofamracia.tb_nominas: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `tb_nominas` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_nominas` ENABLE KEYS */;

-- Volcando estructura para tabla db_proyectofamracia.tb_paises
DROP TABLE IF EXISTS `tb_paises`;
CREATE TABLE IF NOT EXISTS `tb_paises` (
  `id_pais` int(11) NOT NULL,
  `nombre_pais` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`id_pais`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- Volcando datos para la tabla db_proyectofamracia.tb_paises: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `tb_paises` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_paises` ENABLE KEYS */;

-- Volcando estructura para tabla db_proyectofamracia.tb_presentaciones
DROP TABLE IF EXISTS `tb_presentaciones`;
CREATE TABLE IF NOT EXISTS `tb_presentaciones` (
  `id_presentacion` int(11) NOT NULL,
  `nombre_presentacion` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`id_presentacion`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- Volcando datos para la tabla db_proyectofamracia.tb_presentaciones: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `tb_presentaciones` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_presentaciones` ENABLE KEYS */;

-- Volcando estructura para tabla db_proyectofamracia.tb_productos
DROP TABLE IF EXISTS `tb_productos`;
CREATE TABLE IF NOT EXISTS `tb_productos` (
  `id_producto` int(11) NOT NULL,
  `nombre_prodcuto` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `costo_producto` int(11) NOT NULL,
  `precio_producto` int(11) NOT NULL,
  `foto_producto` blob,
  `stcok_producto` int(11) NOT NULL,
  `id_presentacion` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_producto`),
  KEY `id_presentacion` (`id_presentacion`),
  CONSTRAINT `fk_productos-presentaciones` FOREIGN KEY (`id_presentacion`) REFERENCES `tb_presentaciones` (`id_presentacion`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- Volcando datos para la tabla db_proyectofamracia.tb_productos: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `tb_productos` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_productos` ENABLE KEYS */;

-- Volcando estructura para tabla db_proyectofamracia.tb_productosxproveedor
DROP TABLE IF EXISTS `tb_productosxproveedor`;
CREATE TABLE IF NOT EXISTS `tb_productosxproveedor` (
  `id_productoxproveedor` int(11) NOT NULL AUTO_INCREMENT,
  `id_proveedor` int(11) DEFAULT NULL,
  `id_producto` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_productoxproveedor`),
  KEY `id_proveedor` (`id_proveedor`),
  KEY `id_producto` (`id_producto`),
  CONSTRAINT `fk_productosxproveedor-productos` FOREIGN KEY (`id_producto`) REFERENCES `tb_productos` (`id_producto`),
  CONSTRAINT `fk_productosxproveedor-proveedores` FOREIGN KEY (`id_proveedor`) REFERENCES `tb_proveedores` (`id_proveedor`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- Volcando datos para la tabla db_proyectofamracia.tb_productosxproveedor: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `tb_productosxproveedor` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_productosxproveedor` ENABLE KEYS */;

-- Volcando estructura para tabla db_proyectofamracia.tb_propietarios
DROP TABLE IF EXISTS `tb_propietarios`;
CREATE TABLE IF NOT EXISTS `tb_propietarios` (
  `id_propietario` int(11) NOT NULL,
  `nombre_propietario` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `apellido_propietario` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `direccion_propietario` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `telefono_propietario` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  PRIMARY KEY (`id_propietario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- Volcando datos para la tabla db_proyectofamracia.tb_propietarios: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `tb_propietarios` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_propietarios` ENABLE KEYS */;

-- Volcando estructura para tabla db_proyectofamracia.tb_proveedores
DROP TABLE IF EXISTS `tb_proveedores`;
CREATE TABLE IF NOT EXISTS `tb_proveedores` (
  `id_proveedor` int(11) NOT NULL,
  `nombre_proveedor` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `direccion_proveedor` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `telefono_proveedor` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `id_pais` int(11) DEFAULT NULL,
  `id_ciudad` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_proveedor`),
  KEY `id_pais` (`id_pais`),
  KEY `id_ciudad` (`id_ciudad`),
  CONSTRAINT `fk_proveedores-ciudades` FOREIGN KEY (`id_ciudad`) REFERENCES `tb_ciudades` (`id_ciudad`),
  CONSTRAINT `fk_proveedores-paises` FOREIGN KEY (`id_pais`) REFERENCES `tb_paises` (`id_pais`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- Volcando datos para la tabla db_proyectofamracia.tb_proveedores: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `tb_proveedores` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_proveedores` ENABLE KEYS */;

-- Volcando estructura para tabla db_proyectofamracia.tb_roles
DROP TABLE IF EXISTS `tb_roles`;
CREATE TABLE IF NOT EXISTS `tb_roles` (
  `id_rol` int(11) NOT NULL,
  `nombre_rol` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`id_rol`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- Volcando datos para la tabla db_proyectofamracia.tb_roles: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `tb_roles` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_roles` ENABLE KEYS */;

-- Volcando estructura para tabla db_proyectofamracia.tb_usuarios
DROP TABLE IF EXISTS `tb_usuarios`;
CREATE TABLE IF NOT EXISTS `tb_usuarios` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nickname_usuario` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `nombre_usuario` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `apellido_usuario` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `email_usuario` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `clave_usuario` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `id_estado` int(11) NOT NULL,
  `id_rol` int(11) NOT NULL,
  `fechacreacion_usaurio` datetime NOT NULL,
  PRIMARY KEY (`id_usuario`),
  UNIQUE KEY `nombre_usuario` (`nickname_usuario`),
  KEY `id_estado` (`id_estado`),
  KEY `id_rol` (`id_rol`),
  CONSTRAINT `fk_usuarios-estados` FOREIGN KEY (`id_estado`) REFERENCES `tb_estados` (`id_estado`),
  CONSTRAINT `fk_usuarios-roles` FOREIGN KEY (`id_rol`) REFERENCES `tb_roles` (`id_rol`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- Volcando datos para la tabla db_proyectofamracia.tb_usuarios: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `tb_usuarios` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_usuarios` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
