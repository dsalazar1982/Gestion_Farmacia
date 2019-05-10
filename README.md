# proyectofamracia
Aplicacion que permite la gestion de farmacias a nivel mundial, permite la creacion de paises, ciudades, farmacias, propietarios, productos, facturacion, gestion de nomina, entre otros procesos relacionados con la gestion de farmacias.

(Repositorio para elaborar el proyecto final de la materia Progrmacion IV, este es desarrollado en PHP con integracion de Boostrap, js, Ajax.)

## Modulos del proyecto

``` Modulo de usuarios
    Modulo de clientes
    Modulo de proveedores
    Modulo de productos
    Modulo de nomina
    Modulo de facturacion
```
## Desarrolladores

``` - Miguel Angel Cerquera Rodriguez
    - Gelder Steven Arcila Pardo
    - Cristian Moreno
    - Brandon Machado Vargas
    - Daniel Alberto Salazar Erazo
``` 
 
## Herramientas
Para el uso de la aplicacion debe crear en su sistema de base de datos local, la DB denominada "db_proyectofarmacia", esta puede ser creada por medio de las siguientes sentencias SQL.

```
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


-- Volcando estructura de base de datos para db_proyectofarmacia
DROP DATABASE IF EXISTS `db_proyectofarmacia`;
CREATE DATABASE IF NOT EXISTS `db_proyectofarmacia` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish2_ci */;
USE `db_proyectofarmacia`;

-- Volcando estructura para tabla db_proyectofarmacia.tb_carousel
DROP TABLE IF EXISTS `tb_carousel`;
CREATE TABLE IF NOT EXISTS `tb_carousel` (
  `id_carousel` int(11) NOT NULL AUTO_INCREMENT,
  `imagen` blob,
  PRIMARY KEY (`id_carousel`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla db_proyectofarmacia.tb_ciudades
DROP TABLE IF EXISTS `tb_ciudades`;
CREATE TABLE IF NOT EXISTS `tb_ciudades` (
  `id_ciudad` int(11) NOT NULL,
  `nombre_ciudad` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `id_pais` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_ciudad`),
  KEY `id_pais` (`id_pais`),
  CONSTRAINT `fk_ciudades-paises` FOREIGN KEY (`id_pais`) REFERENCES `tb_paises` (`id_pais`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla db_proyectofarmacia.tb_clientes
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

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla db_proyectofarmacia.tb_empleados
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

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla db_proyectofarmacia.tb_estados
DROP TABLE IF EXISTS `tb_estados`;
CREATE TABLE IF NOT EXISTS `tb_estados` (
  `id_estado` int(11) NOT NULL,
  `nombre_estado` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`id_estado`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla db_proyectofarmacia.tb_facturas
DROP TABLE IF EXISTS `tb_facturas`;
CREATE TABLE IF NOT EXISTS `tb_facturas` (
  `id_factura` int(11) NOT NULL,
  `id_cliente` int(11) DEFAULT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `fecha_factura` datetime NOT NULL,
  `valor_factura` int(11) NOT NULL,
  `descuento_total` int(11) NOT NULL,
  `iva_factura` int(11) NOT NULL,
  `neto_factura` int(11) NOT NULL,
  `id_formapago` int(11) DEFAULT NULL,
  `online` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`id_factura`),
  KEY `id_cliente` (`id_cliente`),
  KEY `id_usuario` (`id_usuario`),
  KEY `id_formapago` (`id_formapago`),
  CONSTRAINT `fk_facturas-cliente` FOREIGN KEY (`id_cliente`) REFERENCES `tb_clientes` (`id_cliente`),
  CONSTRAINT `fk_facturas-formaspago` FOREIGN KEY (`id_formapago`) REFERENCES `tb_formaspago` (`id_formapago`),
  CONSTRAINT `fk_facturas-usuario` FOREIGN KEY (`id_usuario`) REFERENCES `tb_usuarios` (`id_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla db_proyectofarmacia.tb_farmacias
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
  CONSTRAINT `fk_farmacias-ciudades` FOREIGN KEY (`id_ciudad`) REFERENCES `tb_ciudades` (`id_ciudad`),
  CONSTRAINT `fk_farmacias-propietarios` FOREIGN KEY (`id_propietario`) REFERENCES `tb_propietarios` (`id_propietario`),
  CONSTRAINT `fk_farmacias-usuarios` FOREIGN KEY (`id_usuario`) REFERENCES `tb_usuarios` (`id_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla db_proyectofarmacia.tb_formaspago
DROP TABLE IF EXISTS `tb_formaspago`;
CREATE TABLE IF NOT EXISTS `tb_formaspago` (
  `id_formapago` int(11) NOT NULL,
  `nombre_formapago` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`id_formapago`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla db_proyectofarmacia.tb_inventario
DROP TABLE IF EXISTS `tb_inventario`;
CREATE TABLE IF NOT EXISTS `tb_inventario` (
  `id_inventario` int(11) NOT NULL AUTO_INCREMENT,
  `id_producto` int(11) DEFAULT NULL,
  `existencias_ini` int(11) DEFAULT NULL,
  `entradas` int(11) DEFAULT NULL,
  `salidas` int(11) DEFAULT NULL,
  `stock` int(11) DEFAULT NULL,
  `valor_unitario` int(11) DEFAULT NULL,
  `valor_venta` int(11) DEFAULT NULL,
  `fecha_registro` datetime DEFAULT NULL,
  `observacion` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
  PRIMARY KEY (`id_inventario`),
  KEY `id_producto` (`id_producto`),
  CONSTRAINT `fk_inventario_producto` FOREIGN KEY (`id_producto`) REFERENCES `tb_productos` (`id_producto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla db_proyectofarmacia.tb_logs
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

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla db_proyectofarmacia.tb_movimientosfacturas
DROP TABLE IF EXISTS `tb_movimientosfacturas`;
CREATE TABLE IF NOT EXISTS `tb_movimientosfacturas` (
  `id_movimientofactura` int(11) NOT NULL AUTO_INCREMENT,
  `id_producto` int(11) DEFAULT NULL,
  `cantidad_producto` int(11) NOT NULL,
  `id_factura` int(11) DEFAULT NULL,
  `descuento` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_movimientofactura`),
  KEY `id_producto` (`id_producto`),
  KEY `id_factura` (`id_factura`),
  CONSTRAINT `fk_movimientofacturas-factura` FOREIGN KEY (`id_factura`) REFERENCES `tb_facturas` (`id_factura`),
  CONSTRAINT `fk_movimientofacturas-prodcutos` FOREIGN KEY (`id_producto`) REFERENCES `tb_productos` (`id_producto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla db_proyectofarmacia.tb_nominas
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

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla db_proyectofarmacia.tb_ofertas
DROP TABLE IF EXISTS `tb_ofertas`;
CREATE TABLE IF NOT EXISTS `tb_ofertas` (
  `id_oferta` int(11) NOT NULL AUTO_INCREMENT,
  `id_inventario` int(11) DEFAULT NULL,
  `porce_descuento` double DEFAULT NULL,
  `descuento` double DEFAULT NULL,
  `valor_venta_oferta` int(11) DEFAULT NULL,
  `fecha_inicio` datetime DEFAULT NULL,
  `fecha_fin` datetime DEFAULT NULL,
  PRIMARY KEY (`id_oferta`),
  KEY `id_inventario` (`id_inventario`),
  CONSTRAINT `fk_ofertas_inventario` FOREIGN KEY (`id_inventario`) REFERENCES `tb_inventario` (`id_inventario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla db_proyectofarmacia.tb_paises
DROP TABLE IF EXISTS `tb_paises`;
CREATE TABLE IF NOT EXISTS `tb_paises` (
  `id_pais` int(11) NOT NULL,
  `abreviatura_pais` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `nombre_pais` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`id_pais`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla db_proyectofarmacia.tb_presentaciones
DROP TABLE IF EXISTS `tb_presentaciones`;
CREATE TABLE IF NOT EXISTS `tb_presentaciones` (
  `id_presentacion` int(11) NOT NULL,
  `nombre_presentacion` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`id_presentacion`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla db_proyectofarmacia.tb_productos
DROP TABLE IF EXISTS `tb_productos`;
CREATE TABLE IF NOT EXISTS `tb_productos` (
  `id_producto` int(11) NOT NULL,
  `nombre_prodcuto` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `foto_producto` blob,
  `id_presentacion` int(11) DEFAULT NULL,
  `id_farmacia` int(11) NOT NULL,
  PRIMARY KEY (`id_producto`),
  KEY `id_presentacion` (`id_presentacion`),
  KEY `id_farmacia` (`id_farmacia`),
  CONSTRAINT `fk_productos-farmacias` FOREIGN KEY (`id_farmacia`) REFERENCES `tb_farmacias` (`id_farmacia`),
  CONSTRAINT `fk_productos-presentaciones` FOREIGN KEY (`id_presentacion`) REFERENCES `tb_presentaciones` (`id_presentacion`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla db_proyectofarmacia.tb_productosxproveedor
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

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla db_proyectofarmacia.tb_propietarios
DROP TABLE IF EXISTS `tb_propietarios`;
CREATE TABLE IF NOT EXISTS `tb_propietarios` (
  `id_propietario` int(11) NOT NULL,
  `nombre_propietario` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `apellido_propietario` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `direccion_propietario` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `telefono_propietario` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  PRIMARY KEY (`id_propietario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla db_proyectofarmacia.tb_proveedores
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

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla db_proyectofarmacia.tb_roles
DROP TABLE IF EXISTS `tb_roles`;
CREATE TABLE IF NOT EXISTS `tb_roles` (
  `id_rol` int(11) NOT NULL,
  `nombre_rol` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`id_rol`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla db_proyectofarmacia.tb_usuarios
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

-- La exportación de datos fue deseleccionada.

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
```
