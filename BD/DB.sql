/*
SQLyog Ultimate v11.11 (64 bit)
MySQL - 5.5.5-10.4.28-MariaDB : Database - ojitos_db1
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`ojitos_db1` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;

USE `ojitos_db1`;

/*Table structure for table `adopcion` */

DROP TABLE IF EXISTS `adopcion`;

CREATE TABLE `adopcion` (
  `idAnimaladopcion` int(11) NOT NULL AUTO_INCREMENT,
  `fechaAdopcion` date NOT NULL,
  `Animal_Adopcioncol` int(11) NOT NULL,
  `cliente_idCliente` int(11) NOT NULL,
  PRIMARY KEY (`idAnimaladopcion`),
  KEY `fk_Adopcion_cliente1_idx` (`cliente_idCliente`),
  KEY `Animal_Adopcioncol` (`Animal_Adopcioncol`),
  CONSTRAINT `adopcion_ibfk_1` FOREIGN KEY (`Animal_Adopcioncol`) REFERENCES `animales_en_adopcion` (`idAnimaldisponible`),
  CONSTRAINT `fk_Adopcion_cliente1` FOREIGN KEY (`cliente_idCliente`) REFERENCES `cliente` (`idCliente`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

/*Data for the table `adopcion` */

/*Table structure for table `animales_en_adopcion` */

DROP TABLE IF EXISTS `animales_en_adopcion`;

CREATE TABLE `animales_en_adopcion` (
  `idAnimaldisponible` int(11) NOT NULL AUTO_INCREMENT,
  `fechaEncuentro` date NOT NULL,
  `nombreAnimaladopocion` varchar(50) DEFAULT NULL,
  `especie_Animal` enum('Perro','Gato') NOT NULL,
  `raza` varchar(30) DEFAULT NULL,
  `observacionesAnimal` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`idAnimaldisponible`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

/*Data for the table `animales_en_adopcion` */

insert  into `animales_en_adopcion`(`idAnimaldisponible`,`fechaEncuentro`,`nombreAnimaladopocion`,`especie_Animal`,`raza`,`observacionesAnimal`) values (2,'2023-06-17','ninguno','Gato','angora',''),(3,'2023-06-17','ninguno','','angora',''),(4,'2023-06-17','ninguno','Perro','Otra',''),(5,'2023-06-17','ninguno','','angora',''),(6,'2023-06-17','ninguno','','angora',''),(7,'2023-06-17','ninguno','','angora','sdfdsaf'),(8,'2023-06-17','ninguno','Gato','angora','sdfdsaf'),(9,'2023-06-17','ninguno','','Otra','sdfdsaf'),(10,'2023-06-17','ninguno','Perro','Otra','sdfdsaf'),(11,'2023-06-17','ninguno','','Otra','sdfdsaf'),(12,'2023-06-17','ninguno','','Otra','sdfdsaf'),(13,'2023-06-17','nuevo','Perro','angora','sdfdsaf'),(14,'2023-06-17','otro','Perro','angora','sdfdsaf');

/*Table structure for table `cliente` */

DROP TABLE IF EXISTS `cliente`;

CREATE TABLE `cliente` (
  `idCliente` int(11) NOT NULL AUTO_INCREMENT,
  `prinombreCliente` varchar(45) NOT NULL,
  `segnombreCliente` varchar(45) NOT NULL,
  `priapellidoCliente` varchar(45) NOT NULL,
  `segapellidoCliente` varchar(45) NOT NULL,
  `documentoCliente` varchar(45) NOT NULL,
  `edadCliente` int(50) DEFAULT NULL,
  `mailCliente` varchar(100) NOT NULL,
  `addressCliente` varchar(100) NOT NULL,
  `numeroCelular` varchar(20) DEFAULT NULL,
  `passwordCliente` varchar(120) NOT NULL,
  PRIMARY KEY (`idCliente`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

/*Data for the table `cliente` */

insert  into `cliente`(`idCliente`,`prinombreCliente`,`segnombreCliente`,`priapellidoCliente`,`segapellidoCliente`,`documentoCliente`,`edadCliente`,`mailCliente`,`addressCliente`,`numeroCelular`,`passwordCliente`) values (9,'sdfsdf','jhhjb','yuhfu','ufuv','821398721',22,'hibihvh@hotmail.com','','123234213 ','12345'),(10,'sdfsdf','jhhjb','yuhfu','ufuv','821398721',22,'hibihvh@hotmail.com','',' ','hola'),(11,'andres','lopez','lopez','lopez','232134',23,'hibihvh@hotmail.com','','1324214323 ','1234'),(12,'sadfdsa','fdsadf','asdfasf','sadfasdf','2341234',23,'asfdasdf','','2341234 ','12312'),(13,'sadasd','jhhjb','lopez','lopez','21342134',23,'hibihvh@hotmail.com','','1324214323 ','12345'),(14,'jose','raul','beltran','sanchez','123213',26,'asdkfjaskfd@hotmail.cpom','sdfafds','1324214323','1234567'),(15,'sdfsdf','lopez','lopez','ufuv','23421341',23,'hibihvh@hotmail.com','sdfafds','1324214323','1234'),(16,'sdfsdf','lopez','lopez','ufuv','23421341',23,'hibihvh@hotmail.com','sdfafds','1324214323','1234'),(17,'sdfsdf','lopez','lopez','lopez','21342134',34,'hibihvh@hotmail.com','sdfafds','1324214323','1234'),(18,'sdfsdf','lopez','lopez','lopez','21342134',34,'hibihvh@hotmail.com','sdfafds','1324214323','4321'),(19,'sdfsdf','lopez','lopez','lopez','12323334556',45,'hibihvh@hotmail.com','sdfafds','1234243','12345'),(20,'sdfsdf','lopez','lopez','lopez','765432',45,'hibihvh@hotmail.com','sdfafds','1234243','123456'),(21,'sdfsdf','lopez','lopez','ufuv','76543',67,'hibihvh@hotmail.com','2342234','3454325','123'),(22,'andres','lopez','lopez','ufuv','987263432',23,'hibihvh@hotmail.com','3452345','3432432','123');

/*Table structure for table `factura` */

DROP TABLE IF EXISTS `factura`;

CREATE TABLE `factura` (
  `idfactura` int(11) NOT NULL AUTO_INCREMENT,
  `fechaFactura` date NOT NULL,
  `valorFactura` decimal(10,0) NOT NULL,
  `iva` decimal(10,0) NOT NULL,
  `totalFactura` decimal(10,0) NOT NULL,
  `cliente_idCliente` int(11) NOT NULL,
  `Usuarios_idUsuario` int(11) NOT NULL,
  `descripcion_compra` varchar(100) NOT NULL,
  PRIMARY KEY (`idfactura`),
  KEY `fk_Factura_cliente1_idx` (`cliente_idCliente`),
  KEY `fk_Factura_Usuarios1_idx` (`Usuarios_idUsuario`),
  CONSTRAINT `fk_Factura_cliente1` FOREIGN KEY (`cliente_idCliente`) REFERENCES `cliente` (`idCliente`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

/*Data for the table `factura` */

/*Table structure for table `factura_has_producto` */

DROP TABLE IF EXISTS `factura_has_producto`;

CREATE TABLE `factura_has_producto` (
  `Factura_has_productocol` int(11) NOT NULL AUTO_INCREMENT,
  `cantidad` int(11) NOT NULL,
  `valorProducto` decimal(10,0) NOT NULL,
  `valorIva` decimal(10,0) NOT NULL,
  `subTotal` decimal(10,0) NOT NULL,
  `Factura_idfactura` int(11) NOT NULL,
  `producto_idProducto` int(11) NOT NULL,
  PRIMARY KEY (`Factura_has_productocol`),
  KEY `fk_Factura_has_producto_Factura1_idx` (`Factura_idfactura`),
  KEY `fk_Factura_has_producto_producto1_idx` (`producto_idProducto`),
  CONSTRAINT `factura_has_producto_ibfk_1` FOREIGN KEY (`Factura_idfactura`) REFERENCES `factura` (`idfactura`),
  CONSTRAINT `factura_has_producto_ibfk_2` FOREIGN KEY (`producto_idProducto`) REFERENCES `producto` (`idProducto`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

/*Data for the table `factura_has_producto` */

/*Table structure for table `factura_has_servicio` */

DROP TABLE IF EXISTS `factura_has_servicio`;

CREATE TABLE `factura_has_servicio` (
  `idFacturaServicio` int(11) NOT NULL AUTO_INCREMENT,
  `Factura_idfactura` int(11) NOT NULL,
  `servicio_idServicio` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `valorServicio` decimal(10,0) NOT NULL,
  `subTotal` decimal(10,0) NOT NULL,
  `impIVA` int(11) NOT NULL,
  `total` decimal(10,0) NOT NULL,
  PRIMARY KEY (`idFacturaServicio`),
  KEY `fk_Factura_has_servicio_servicio1_idx` (`servicio_idServicio`),
  KEY `fk_Factura_has_servicio_Factura1_idx` (`Factura_idfactura`),
  CONSTRAINT `factura_has_servicio_ibfk_1` FOREIGN KEY (`Factura_idfactura`) REFERENCES `factura` (`idfactura`),
  CONSTRAINT `fk_Factura_has_servicio_servicio1` FOREIGN KEY (`servicio_idServicio`) REFERENCES `servicio` (`idServicio`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

/*Data for the table `factura_has_servicio` */

/*Table structure for table `historiaclinica` */

DROP TABLE IF EXISTS `historiaclinica`;

CREATE TABLE `historiaclinica` (
  `idHistoriaClin` int(11) NOT NULL AUTO_INCREMENT,
  `diagnosticoEnf` varchar(200) NOT NULL,
  `nivelUrgen` enum('1','2','3','4','5') NOT NULL,
  `fechaDiagn` date NOT NULL,
  PRIMARY KEY (`idHistoriaClin`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

/*Data for the table `historiaclinica` */

/*Table structure for table `mascota` */

DROP TABLE IF EXISTS `mascota`;

CREATE TABLE `mascota` (
  `idMascota` int(11) NOT NULL AUTO_INCREMENT,
  `nombreMascota` varchar(100) NOT NULL,
  `sexoMascota` enum('Macho','Hembra') NOT NULL,
  `edadMascota` int(11) NOT NULL,
  `cliente_idCliente` int(11) NOT NULL,
  `Historia_idClinica` int(11) NOT NULL,
  PRIMARY KEY (`idMascota`),
  UNIQUE KEY `Historiaclinicaid` (`Historia_idClinica`),
  KEY `clienteId` (`cliente_idCliente`),
  CONSTRAINT `Historiaclinicaid` FOREIGN KEY (`Historia_idClinica`) REFERENCES `historiaclinica` (`idHistoriaClin`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `clienteId` FOREIGN KEY (`cliente_idCliente`) REFERENCES `cliente` (`idCliente`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

/*Data for the table `mascota` */

/*Table structure for table `producto` */

DROP TABLE IF EXISTS `producto`;

CREATE TABLE `producto` (
  `idProducto` int(11) NOT NULL AUTO_INCREMENT,
  `nombreProducto` varchar(50) NOT NULL,
  `valorProducto` varchar(15) NOT NULL,
  `stockProducto` int(100) NOT NULL,
  `descripcionProducto` text NOT NULL,
  PRIMARY KEY (`idProducto`)
) ENGINE=InnoDB AUTO_INCREMENT=104 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

/*Data for the table `producto` */

insert  into `producto`(`idProducto`,`nombreProducto`,`valorProducto`,`stockProducto`,`descripcionProducto`) values (86,'cama','60000',5,'Cama para gato'),(88,'cama','4000',2,'Cama Joses'),(89,'Hueso','80000',3,'Hueso tallado en oro');

/*Table structure for table `registros` */

DROP TABLE IF EXISTS `registros`;

CREATE TABLE `registros` (
  `idRegistro` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(500) NOT NULL,
  `fechaRegistro` date NOT NULL,
  `idHistoria_idRegistroHC` int(11) DEFAULT NULL,
  PRIMARY KEY (`idRegistro`),
  KEY `idHistoria_idRegistroHC` (`idHistoria_idRegistroHC`),
  CONSTRAINT `registros_ibfk_1` FOREIGN KEY (`idHistoria_idRegistroHC`) REFERENCES `historiaclinica` (`idHistoriaClin`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

/*Data for the table `registros` */

/*Table structure for table `roles` */

DROP TABLE IF EXISTS `roles`;

CREATE TABLE `roles` (
  `idRol` int(11) NOT NULL AUTO_INCREMENT,
  `nomRol` varchar(20) NOT NULL,
  `cargo` varchar(20) NOT NULL,
  PRIMARY KEY (`idRol`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

/*Data for the table `roles` */

insert  into `roles`(`idRol`,`nomRol`,`cargo`) values (5,'Administrador','Admin'),(6,'Peluqueria','staff'),(7,'spa','staff'),(8,'paseador','staff'),(9,'veterinario','staff'),(10,'guarderia','');

/*Table structure for table `servicio` */

DROP TABLE IF EXISTS `servicio`;

CREATE TABLE `servicio` (
  `idServicio` int(11) NOT NULL AUTO_INCREMENT,
  `tipoServicio` enum('Domicilio','Local') NOT NULL,
  `nombreServicio` varchar(100) NOT NULL,
  `precioServicio` decimal(10,0) NOT NULL,
  `descripcion` varchar(250) NOT NULL,
  PRIMARY KEY (`idServicio`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

/*Data for the table `servicio` */

/*Table structure for table `usuarios` */

DROP TABLE IF EXISTS `usuarios`;

CREATE TABLE `usuarios` (
  `idUsuario` int(11) NOT NULL AUTO_INCREMENT,
  `documentoUsuario` varchar(15) DEFAULT NULL,
  `nombresUsuarios` varchar(50) NOT NULL,
  `apellidosUsuarios` varchar(50) NOT NULL,
  `telefonosUsuarios` varchar(15) NOT NULL,
  `emailUsuarios` varchar(100) NOT NULL,
  `passwordUsers` varchar(16) NOT NULL,
  `Estado` enum('Activo','Inactivo') NOT NULL,
  `Roles_idRol` int(11) NOT NULL,
  PRIMARY KEY (`idUsuario`),
  KEY `fk_Usuarios_Roles1_idx` (`Roles_idRol`),
  CONSTRAINT `fk_Usuarios_Roles1` FOREIGN KEY (`Roles_idRol`) REFERENCES `roles` (`idRol`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

/*Data for the table `usuarios` */

insert  into `usuarios`(`idUsuario`,`documentoUsuario`,`nombresUsuarios`,`apellidosUsuarios`,`telefonosUsuarios`,`emailUsuarios`,`passwordUsers`,`Estado`,`Roles_idRol`) values (7,'1013671072','Jefferson','Arenas Zea','3204167449','facehuker@outlook.es','123456789','Activo',5),(8,'1313465642','Jose','Beltran Sanchez','3167517103','josebeltran@hotmail.com','987654321','Activo',9);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;