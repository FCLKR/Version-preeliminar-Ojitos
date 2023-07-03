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
) ENGINE=InnoDB AUTO_INCREMENT=102 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

/*Data for the table `adopcion` */

insert  into `adopcion`(`idAnimaladopcion`,`fechaAdopcion`,`Animal_Adopcioncol`,`cliente_idCliente`) values (98,'0000-00-00',22,14),(99,'0000-00-00',22,14),(100,'2023-07-02',26,14),(101,'2023-07-02',13,14);

/*Table structure for table `animales_en_adopcion` */

DROP TABLE IF EXISTS `animales_en_adopcion`;

CREATE TABLE `animales_en_adopcion` (
  `idAnimaldisponible` int(11) NOT NULL AUTO_INCREMENT,
  `fechaEncuentro` date NOT NULL,
  `nombreAnimaladopocion` varchar(50) DEFAULT NULL,
  `especie_Animal` enum('Perro','Gato') NOT NULL,
  `raza` varchar(30) DEFAULT NULL,
  `observacionesAnimal` varchar(100) DEFAULT NULL,
  `estadoSolicitud` enum('Disponible','Solicitado','Adoptado','Rechazado') DEFAULT 'Disponible',
  PRIMARY KEY (`idAnimaldisponible`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

/*Data for the table `animales_en_adopcion` */

insert  into `animales_en_adopcion`(`idAnimaldisponible`,`fechaEncuentro`,`nombreAnimaladopocion`,`especie_Animal`,`raza`,`observacionesAnimal`,`estadoSolicitud`) values (7,'2023-06-19','ningun','','angoro','Encontrado en la calle','Disponible'),(13,'2023-06-17','nuevo','Perro','angora','sdfdsaf','Adoptado'),(16,'2023-01-22','fercho','','nexcam','Gato encontrado en un apto','Disponible'),(18,'2023-06-22','nuevo','Perro','Criollo','sdfsadf','Disponible'),(21,'2023-06-22','ninguno','Perro','Criollo','sdfsadf','Disponible'),(22,'2023-02-22','Leon','Perro','cihgugua','sin una pata','Disponible'),(23,'0000-00-00','otro','Perro','angora','Encontrado en la calle','Disponible'),(24,'2023-06-23','otro','Gato','Criollo','Gato encontrado en un apto','Disponible'),(26,'2023-07-02','Luker','Perro','Lobo siberiano','El mejor perro del mundo','Adoptado');

/*Table structure for table `cliente` */

DROP TABLE IF EXISTS `cliente`;

CREATE TABLE `cliente` (
  `idCliente` int(11) NOT NULL AUTO_INCREMENT,
  `nombresUsuarios` varchar(45) NOT NULL,
  `segnombreCliente` varchar(45) NOT NULL,
  `apellidosUsuarios` varchar(45) NOT NULL,
  `segapellidoCliente` varchar(45) NOT NULL,
  `documentoCliente` varchar(110) NOT NULL,
  `edadCliente` int(50) DEFAULT NULL,
  `mailCliente` varchar(100) NOT NULL,
  `addressCliente` varchar(100) NOT NULL,
  `numeroCelular` varchar(20) DEFAULT NULL,
  `passwordCliente` varchar(120) NOT NULL,
  `estado` enum('Activo','Inactivo') NOT NULL DEFAULT 'Activo',
  PRIMARY KEY (`idCliente`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

/*Data for the table `cliente` */

insert  into `cliente`(`idCliente`,`nombresUsuarios`,`segnombreCliente`,`apellidosUsuarios`,`segapellidoCliente`,`documentoCliente`,`edadCliente`,`mailCliente`,`addressCliente`,`numeroCelular`,`passwordCliente`,`estado`) values (10,'sdfsdf','jhhjb','yuhfu','ufuv','821398721',22,'hibihvh@hotmail.com','',' ','hola','Activo'),(11,'andres','lopez','lopez','lopez','232134',23,'hibihvh@hotmail.com','','1324214323 ','1234','Activo'),(12,'sadfdsa','fdsadf','asdfasf','sadfasdf','2341234',23,'asfdasdf','','2341234 ','12312','Activo'),(13,'sadasd','jhhjb','lopez','lopez','21342134',23,'hibihvh@hotmail.com','','1324214323 ','12345','Inactivo'),(14,'jose','raul','beltran','sanchez','123213',26,'asdkfjaskfd@hotmail.cpom','sdfafds','1324214323','12345','Activo'),(16,'sdfsdf','lopez','lopez','ufuv','23421341',23,'hibihvh@hotmail.com','sdfafds','1324214323','1234','Activo'),(17,'sdfsdf','lopez','lopez','lopez','21342134',34,'hibihvh@hotmail.com','sdfafds','1324214323','1234','Inactivo'),(19,'sdfsdf','lopez','lopez','lopez','12323334556',45,'hibihvh@hotmail.com','sdfafds','1234243','12345','Activo'),(21,'sdfsdf','lopez','lopez','ufuv','76543',67,'hibihvh@hotmail.com','2342234','3454325','123','Activo'),(22,'andres','lopez','lopez','ufuv','987263432',23,'hibihvh@hotmail.com','3452345','3432432','123','Activo');

/*Table structure for table `factura` */

DROP TABLE IF EXISTS `factura`;

CREATE TABLE `factura` (
  `idfactura` int(11) NOT NULL AUTO_INCREMENT,
  `fechaFactura` date NOT NULL,
  `valorFactura` decimal(10,0) NOT NULL,
  `iva` decimal(10,0) NOT NULL,
  `totalFactura` decimal(10,0) NOT NULL,
  `cliente_idCliente` int(11) NOT NULL,
  `descripcion_compra` varchar(100) NOT NULL,
  PRIMARY KEY (`idfactura`),
  KEY `fk_Factura_cliente1_idx` (`cliente_idCliente`),
  CONSTRAINT `fk_Factura_cliente1` FOREIGN KEY (`cliente_idCliente`) REFERENCES `cliente` (`idCliente`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=99 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

/*Data for the table `factura` */

insert  into `factura`(`idfactura`,`fechaFactura`,`valorFactura`,`iva`,`totalFactura`,`cliente_idCliente`,`descripcion_compra`) values (16,'2023-06-19',20000,0,23000,11,''),(34,'2023-06-28',657475,47025,704500,14,''),(60,'2023-06-28',50,90,20,10,''),(61,'2023-06-29',127500,23750,151250,14,''),(62,'2023-06-29',2500,475,2975,14,''),(63,'2023-06-29',82500,15675,98175,14,''),(64,'2023-06-29',67500,11875,79375,21,''),(65,'2023-06-29',60000,11400,71400,21,''),(66,'2023-06-29',82500,15675,98175,21,''),(67,'2023-06-29',5000,475,5475,21,''),(68,'2023-06-29',370000,35150,405150,21,''),(69,'2023-06-29',60000,11400,71400,21,''),(70,'2023-06-29',202500,27075,229575,21,''),(71,'2023-06-29',142500,27075,169575,19,''),(72,'2023-06-29',122500,11875,134375,19,''),(73,'2023-06-29',127500,11875,139375,19,''),(74,'2023-06-29',300000,22800,322800,19,''),(75,'2023-06-30',187500,23275,210775,14,''),(76,'2023-06-30',325000,61750,386750,14,''),(77,'2023-06-30',225000,42750,267750,14,''),(78,'2023-06-30',205000,38950,243950,14,''),(79,'2023-06-30',62500,11875,74375,14,''),(80,'2023-06-30',125000,23750,148750,14,''),(81,'2023-06-30',142500,27075,169575,14,''),(82,'2023-06-30',60000,11400,71400,14,''),(83,'2023-06-30',142500,27075,169575,14,''),(84,'2023-06-30',142500,27075,169575,14,''),(85,'2023-06-30',142500,27075,169575,14,''),(86,'2023-06-30',95000,16625,111625,14,''),(87,'2023-06-30',172500,16150,188650,14,''),(88,'2023-06-30',0,0,0,22,''),(89,'2023-06-30',407500,31350,438850,21,''),(90,'2023-06-30',67500,12350,79850,21,''),(91,'2023-06-30',145000,27550,172550,21,''),(92,'2023-06-30',240000,34200,274200,12,''),(93,'2023-06-30',67500,12350,79850,12,''),(94,'2023-06-30',305000,27075,332075,16,''),(95,'2023-06-30',202500,24225,226725,14,''),(96,'2023-07-02',305000,27075,332075,14,''),(97,'2023-07-02',60000,11400,71400,14,''),(98,'2023-07-02',2500,475,2975,14,'');

/*Table structure for table `factura_has_producto` */

DROP TABLE IF EXISTS `factura_has_producto`;

CREATE TABLE `factura_has_producto` (
  `Factura_has_productocol` int(11) NOT NULL AUTO_INCREMENT,
  `cantidad` int(11) NOT NULL,
  `valorProducto` decimal(10,0) NOT NULL,
  `valorIva` decimal(10,0) NOT NULL,
  `subTotal` decimal(10,0) NOT NULL,
  `Factura_idfactura` int(11) DEFAULT NULL,
  `producto_idProducto` int(11) NOT NULL,
  PRIMARY KEY (`Factura_has_productocol`),
  KEY `fk_Factura_has_producto_Factura1_idx` (`Factura_idfactura`),
  KEY `fk_Factura_has_producto_producto1_idx` (`producto_idProducto`),
  CONSTRAINT `factura_has_producto_ibfk_1` FOREIGN KEY (`Factura_idfactura`) REFERENCES `factura` (`idfactura`),
  CONSTRAINT `factura_has_producto_ibfk_2` FOREIGN KEY (`producto_idProducto`) REFERENCES `producto` (`idProducto`)
) ENGINE=InnoDB AUTO_INCREMENT=153 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

/*Data for the table `factura_has_producto` */

insert  into `factura_has_producto`(`Factura_has_productocol`,`cantidad`,`valorProducto`,`valorIva`,`subTotal`,`Factura_idfactura`,`producto_idProducto`) values (8,3,20000,2000,29000,16,86),(11,4,3000,300,3300,NULL,86),(12,3,60000,11400,214200,NULL,86),(13,2,2500,475,5950,NULL,104),(30,1,80000,15200,95200,60,107),(31,1,2500,475,2975,60,104),(32,2,60000,11400,142800,34,86),(33,2,60000,11400,142800,34,86),(34,1,2500,475,2975,34,104),(35,2,2500,475,5950,34,104),(36,3,60000,11400,214200,34,86),(37,2,60000,11400,142800,34,86),(38,2,2500,475,5950,34,104),(39,2,60000,11400,120000,34,86),(40,2,2500,475,5000,61,104),(41,1,60000,11400,60000,61,86),(42,1,2500,475,2500,61,104),(43,1,60000,11400,60000,61,86),(44,1,2500,475,2500,62,104),(45,1,60000,11400,60000,62,86),(46,1,2500,475,2500,63,104),(47,1,80000,15200,80000,63,107),(48,3,2500,475,7500,64,104),(49,1,60000,11400,60000,64,86),(50,1,2500,475,2500,64,104),(51,1,60000,11400,60000,65,86),(52,1,60000,11400,60000,65,86),(53,1,2500,475,2500,66,104),(54,1,80000,15200,80000,66,107),(55,1,2500,475,2500,66,104),(56,2,2500,475,5000,67,104),(57,2,60000,11400,120000,67,86),(58,2,60000,11400,120000,68,86),(59,2,60000,11400,120000,68,86),(60,2,2500,475,5000,68,104),(61,2,60000,11400,120000,68,86),(62,2,2500,475,5000,68,104),(63,1,60000,11400,60000,69,86),(64,2,60000,11400,120000,70,86),(65,1,2500,475,2500,70,104),(66,1,80000,15200,80000,70,107),(67,1,60000,11400,60000,71,86),(68,1,2500,475,2500,71,104),(69,1,80000,15200,80000,71,107),(70,2,60000,11400,120000,72,86),(71,1,2500,475,2500,72,104),(72,2,60000,11400,120000,73,86),(73,3,2500,475,7500,73,104),(74,2,60000,11400,120000,74,86),(75,3,60000,11400,180000,74,86),(76,2,60000,11400,120000,75,86),(77,1,60000,11400,60000,75,86),(78,3,2500,475,7500,75,104),(79,1,60000,11400,60000,76,86),(80,1,60000,11400,60000,76,86),(81,1,2500,475,2500,76,104),(82,1,60000,11400,60000,76,86),(83,1,60000,11400,60000,76,86),(84,1,2500,475,2500,76,104),(85,1,80000,15200,80000,76,107),(86,1,60000,11400,60000,77,86),(87,1,2500,475,2500,77,104),(88,1,80000,15200,80000,77,107),(89,1,80000,15200,80000,77,107),(90,1,2500,475,2500,77,104),(91,1,60000,11400,60000,78,86),(92,1,2500,475,2500,78,104),(93,1,80000,15200,80000,78,107),(94,1,2500,475,2500,78,104),(95,1,60000,11400,60000,78,86),(96,1,60000,11400,60000,79,86),(97,1,2500,475,2500,79,104),(98,1,60000,11400,60000,80,86),(99,1,2500,475,2500,80,104),(100,1,60000,11400,60000,80,86),(101,1,2500,475,2500,80,104),(102,1,60000,11400,60000,81,86),(103,1,2500,475,2500,81,104),(104,1,80000,15200,80000,81,107),(105,1,60000,11400,60000,82,86),(106,1,60000,11400,60000,83,86),(107,1,2500,475,2500,83,104),(108,1,80000,15200,80000,83,107),(109,1,2500,475,2500,84,104),(110,1,80000,15200,80000,84,107),(111,1,60000,11400,60000,84,86),(112,1,60000,11400,60000,85,86),(113,1,2500,475,2500,85,104),(114,1,80000,15200,80000,85,107),(115,1,80000,15200,80000,86,107),(116,1,2500,475,2500,86,104),(117,2,2500,475,5000,86,104),(118,3,2500,475,7500,86,104),(119,3,2500,475,7500,87,104),(120,2,2500,475,5000,87,104),(121,2,80000,15200,160000,87,107),(122,2,2500,475,5000,88,104),(123,1,2500,475,2500,89,104),(124,2,2500,475,5000,89,104),(125,3,80000,15200,240000,89,107),(126,2,80000,15200,160000,89,107),(127,1,60000,11400,60000,90,86),(128,1,2500,475,2500,90,104),(129,2,2500,475,5000,90,104),(130,1,2500,475,2500,91,104),(131,1,60000,11400,60000,91,86),(132,1,80000,15200,80000,91,107),(133,1,2500,475,2500,91,104),(134,1,60000,11400,60000,92,86),(135,1,60000,11400,60000,92,86),(136,2,60000,11400,120000,92,86),(137,1,60000,11400,60000,93,86),(138,1,2500,475,2500,93,104),(139,2,2500,475,5000,93,104),(140,2,2500,475,5000,94,104),(141,1,60000,11400,60000,94,86),(142,3,80000,15200,240000,94,107),(143,2,60000,11400,120000,95,86),(144,1,60000,11400,60000,95,86),(145,3,2500,475,7500,95,104),(146,3,2500,475,7500,95,104),(147,3,2500,475,7500,95,104),(148,1,60000,11400,60000,96,86),(149,2,2500,475,5000,96,104),(150,3,80000,15200,240000,96,107),(151,1,60000,11400,60000,97,86),(152,1,2500,475,2500,98,104);

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
  `cliente_idCliente` int(11) DEFAULT NULL,
  `Historia_idClinica` int(11) DEFAULT NULL,
  PRIMARY KEY (`idMascota`),
  UNIQUE KEY `Historiaclinicaid` (`Historia_idClinica`),
  KEY `clienteId` (`cliente_idCliente`),
  CONSTRAINT `Historiaclinicaid` FOREIGN KEY (`Historia_idClinica`) REFERENCES `historiaclinica` (`idHistoriaClin`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `clienteId` FOREIGN KEY (`cliente_idCliente`) REFERENCES `cliente` (`idCliente`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

/*Data for the table `mascota` */

insert  into `mascota`(`idMascota`,`nombreMascota`,`sexoMascota`,`edadMascota`,`cliente_idCliente`,`Historia_idClinica`) values (9,'Jose','Hembra',27,NULL,NULL);

/*Table structure for table `producto` */

DROP TABLE IF EXISTS `producto`;

CREATE TABLE `producto` (
  `idProducto` int(11) NOT NULL AUTO_INCREMENT,
  `nombreProducto` varchar(50) NOT NULL,
  `valorProducto` decimal(65,0) NOT NULL,
  `stockProducto` int(100) NOT NULL,
  `descripcionProducto` text NOT NULL,
  PRIMARY KEY (`idProducto`)
) ENGINE=InnoDB AUTO_INCREMENT=108 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

/*Data for the table `producto` */

insert  into `producto`(`idProducto`,`nombreProducto`,`valorProducto`,`stockProducto`,`descripcionProducto`) values (86,'cama',60000,97,'Cama par gato'),(104,'collar',2500,91,'Collar para gato'),(107,'Hueso',80000,42,'Para perro');

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
  `tipoServicio` enum('Domicilio','Jardin') NOT NULL,
  `nombreServicio` varchar(100) NOT NULL,
  `precioServicio` decimal(10,0) NOT NULL,
  `descripcion` varchar(250) NOT NULL,
  PRIMARY KEY (`idServicio`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

/*Data for the table `servicio` */

insert  into `servicio`(`idServicio`,`tipoServicio`,`nombreServicio`,`precioServicio`,`descripcion`) values (9,'Domicilio','Peluqueria',50000,'Servicio de corte de pelo y arreglado de uñas'),(10,'Domicilio','Paseos',25000,'Servicio diario de paseo a mascota'),(11,'Jardin','Guarderia',100000,'Servicio de fin de semana de cuidado de mascotas'),(12,'Domicilio','Veterinaria',60000,'Servicio de visita y diagnostico de mascota por personal especializado'),(13,'Domicilio','SPA',40000,'Servicio de baño y masaje para mascota');

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
  `Estado` enum('Activo','Inactivo') NOT NULL DEFAULT 'Activo',
  `Roles_idRol` int(11) NOT NULL,
  PRIMARY KEY (`idUsuario`),
  KEY `fk_Usuarios_Roles1_idx` (`Roles_idRol`),
  CONSTRAINT `fk_Usuarios_Roles1` FOREIGN KEY (`Roles_idRol`) REFERENCES `roles` (`idRol`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

/*Data for the table `usuarios` */

insert  into `usuarios`(`idUsuario`,`documentoUsuario`,`nombresUsuarios`,`apellidosUsuarios`,`telefonosUsuarios`,`emailUsuarios`,`passwordUsers`,`Estado`,`Roles_idRol`) values (7,'1013671072','Jefferson','Arenas Zea','3204167449','facehuker@outlook.es','123456789','Activo',5),(8,'1313465642','Jose','Beltran Sanchez','3167517103','josebeltran@hotmail.com','987654321','Activo',9);

/* Procedure structure for procedure `ActualizaStockProducto` */

/*!50003 DROP PROCEDURE IF EXISTS  `ActualizaStockProducto` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `ActualizaStockProducto`(IN adquirido INT (11), idproductocomprado INT (11))
BEGIN
  UPDATE producto
  SET stockProducto =  stockProducto - adquirido WHERE idProducto=idproductocomprado;
END */$$
DELIMITER ;

/* Procedure structure for procedure `BuscarListaProductoCliente` */

/*!50003 DROP PROCEDURE IF EXISTS  `BuscarListaProductoCliente` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `BuscarListaProductoCliente`(IN BLPC VARCHAR(100))
BEGIN
  SELECT nombreProducto,valorProducto,descripcionProducto,idProducto
  FROM producto WHERE nombreProducto LIKE BLPC;
END */$$
DELIMITER ;

/* Procedure structure for procedure `BuscarProductoStockAdmin` */

/*!50003 DROP PROCEDURE IF EXISTS  `BuscarProductoStockAdmin` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `BuscarProductoStockAdmin`(IN BPSA VARCHAR(50))
BEGIN
  SELECT *
  FROM producto
  WHERE producto.nombreProducto LIKE BPSA;
END */$$
DELIMITER ;

/* Procedure structure for procedure `EditarporIDAAdopcion` */

/*!50003 DROP PROCEDURE IF EXISTS  `EditarporIDAAdopcion` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `EditarporIDAAdopcion`(IN EIDAA VARCHAR(50))
BEGIN
  SELECT *
  FROM animales_en_adopcion
  WHERE idAnimaldisponible = EIDAA;
END */$$
DELIMITER ;

/* Procedure structure for procedure `EditarporIDAAdopcionII` */

/*!50003 DROP PROCEDURE IF EXISTS  `EditarporIDAAdopcionII` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `EditarporIDAAdopcionII`(IN Fe DATE,nA VARCHAR(50),eA VARCHAR(10),rA VARCHAR (30), iOA VARCHAR (100), iDA INT (11))
BEGIN
  UPDATE animales_en_adopcion
  SET fechaEncuentro = Fe, nombreAnimaladopocion= nA, especie_Animal=eA, raza=rA, observacionesAnimal=iOA WHERE idAnimaldisponible=iDA;
END */$$
DELIMITER ;

/* Procedure structure for procedure `EditarporIDproductos` */

/*!50003 DROP PROCEDURE IF EXISTS  `EditarporIDproductos` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `EditarporIDproductos`(IN BEP VARCHAR(50))
BEGIN
  SELECT *
  FROM producto
  WHERE producto.idProducto = BEP;
END */$$
DELIMITER ;

/* Procedure structure for procedure `EditarporIDproductosII` */

/*!50003 DROP PROCEDURE IF EXISTS  `EditarporIDproductosII` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `EditarporIDproductosII`(IN nP VARCHAR(50),vP VARCHAR(15),sP INT(100),dP TEXT, idP INT(11))
BEGIN
  UPDATE producto
  SET nombreProducto = nP, valorProducto= vP, stockProducto=sP, descripcionProducto=dP WHERE idProducto=idP;
END */$$
DELIMITER ;

/* Procedure structure for procedure `EliminarAnimalAdopcion` */

/*!50003 DROP PROCEDURE IF EXISTS  `EliminarAnimalAdopcion` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `EliminarAnimalAdopcion`(IN EAA INT (11))
BEGIN
  DELETE
  FROM animales_en_adopcion
  WHERE idAnimaldisponible = EAA;
END */$$
DELIMITER ;

/* Procedure structure for procedure `EliminarStockProducto` */

/*!50003 DROP PROCEDURE IF EXISTS  `EliminarStockProducto` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `EliminarStockProducto`(IN ESP int (11))
BEGIN
  DELETE
  FROM producto
  WHERE idProducto = ESP;
END */$$
DELIMITER ;

/* Procedure structure for procedure `EnviarSolicitadoAdop` */

/*!50003 DROP PROCEDURE IF EXISTS  `EnviarSolicitadoAdop` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `EnviarSolicitadoAdop`(IN ESA VARCHAR (20))
BEGIN
UPDATE animales_en_adopcion SET estadoSolicitud = 'Solicitado' WHERE idAnimaldisponible = ESA;
END */$$
DELIMITER ;

/* Procedure structure for procedure `ExtraFacthasPro` */

/*!50003 DROP PROCEDURE IF EXISTS  `ExtraFacthasPro` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `ExtraFacthasPro`(IN Ff INT (11), OUT Tvp DECIMAL, OUT Tvi DECIMAL, OUT Tst DECIMAL )
BEGIN
  SELECT SUM(valorProducto), SUM(valorIva),SUM(subTotal) FROM factura_has_producto WHERE Factura_idfactura = Ff INTO Tvp,Tvi,Tst;
  
END */$$
DELIMITER ;

/* Procedure structure for procedure `InsertarNuevoAnimal` */

/*!50003 DROP PROCEDURE IF EXISTS  `InsertarNuevoAnimal` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `InsertarNuevoAnimal`(IN fE VARCHAR (100),nA VARCHAR(50),eA VARCHAR(20),rA VARCHAR (30),oA VARCHAR (100))
BEGIN
  INSERT INTO animales_en_adopcion (fechaEncuentro, nombreAnimaladopocion, especie_Animal, raza,observacionesAnimal)
VALUES (fE,nA,eA,rA,oA);
END */$$
DELIMITER ;

/* Procedure structure for procedure `InsertarNuevoProductoStock` */

/*!50003 DROP PROCEDURE IF EXISTS  `InsertarNuevoProductoStock` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `InsertarNuevoProductoStock`(IN nP VARCHAR(50),vP VARCHAR(15),sP int(100),dP text)
BEGIN
  INSERT INTO producto (nombreProducto, valorProducto, stockProducto, descripcionProducto)
VALUES ( nP , vP, sP, dP);
END */$$
DELIMITER ;

/* Procedure structure for procedure `InsertVlrsFacturaii` */

/*!50003 DROP PROCEDURE IF EXISTS  `InsertVlrsFacturaii` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `InsertVlrsFacturaii`(IN Ff INT (11))
BEGIN
SET @vp =0;
SET @vi =0;
SET @st =0;
SET @TT=0;
CALL ExtraFacthasPro (Ff,@vp,@vi,@st);
SET @TT = @vi + @st;
UPDATE factura SET valorFactura = @st, iva= @vi, totalFactura=@TT WHERE idfactura=Ff;
  
END */$$
DELIMITER ;

/* Procedure structure for procedure `ListaProductoCliente` */

/*!50003 DROP PROCEDURE IF EXISTS  `ListaProductoCliente` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `ListaProductoCliente`()
BEGIN
  SELECT nombreProducto,valorProducto,descripcionProducto,idProducto
  FROM producto;
END */$$
DELIMITER ;

/* Procedure structure for procedure `MostrarCampoCantidad` */

/*!50003 DROP PROCEDURE IF EXISTS  `MostrarCampoCantidad` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `MostrarCampoCantidad`()
BEGIN
  SELECT  cliente.idCliente,producto.nombreProducto,producto.valorProducto,producto.descripcionProducto,producto.idProducto,factura_has_producto.cantidad
                                        FROM producto
                                        INNER JOIN factura_has_producto ON producto.idProducto = factura_has_producto.producto_idProducto
                                        INNER JOIN factura ON factura_has_producto.Factura_idfactura = factura.idfactura
                                        INNER JOIN cliente ON factura.cliente_idCliente = cliente.idCliente;
END */$$
DELIMITER ;

/* Procedure structure for procedure `RestarStock1` */

/*!50003 DROP PROCEDURE IF EXISTS  `RestarStock1` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `RestarStock1`(IN idF INT (11),idP INT (11), OUT Cant int, OUT Stock int)
BEGIN
SELECT factura_has_producto.cantidad,producto.stockProducto
                                        FROM producto
                                        INNER JOIN factura_has_producto ON producto.idProducto = factura_has_producto.producto_idProducto
                                        INNER JOIN factura ON factura_has_producto.Factura_idfactura = factura.idfactura
                                        INNER JOIN cliente ON factura.cliente_idCliente = cliente.idCliente 
                                        WHERE factura.idfactura = idF AND idProducto = idP INTO Cant,Stock;
END */$$
DELIMITER ;

/* Procedure structure for procedure `RestarStock2` */

/*!50003 DROP PROCEDURE IF EXISTS  `RestarStock2` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `RestarStock2`(IN idF INT (11),idP INT (11))
BEGIN
SET @rest=0;
CALL RestarStock1 (idF,idP,@Cant,@Stock);
SET @rest = @Stock - @Cant;
UPDATE producto SET stockProducto=@rest WHERE idProducto= idP;
END */$$
DELIMITER ;

/* Procedure structure for procedure `VentasGenProListaAdmFiltro` */

/*!50003 DROP PROCEDURE IF EXISTS  `VentasGenProListaAdmFiltro` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `VentasGenProListaAdmFiltro`(IN VPLA VARCHAR (20))
BEGIN
SELECT * FROM factura WHERE idfactura = VPLA;
END */$$
DELIMITER ;

/* Procedure structure for procedure `VentasProListaAdm` */

/*!50003 DROP PROCEDURE IF EXISTS  `VentasProListaAdm` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `VentasProListaAdm`()
BEGIN
SELECT factura.idfactura,factura.fechaFactura, cliente.documentoCliente, producto.nombreProducto, producto.valorProducto,factura_has_producto.cantidad, factura_has_producto.valorIva, factura_has_producto.subTotal, factura.totalFactura,producto.stockProducto
                                        FROM producto
                                        INNER JOIN factura_has_producto ON producto.idProducto = factura_has_producto.producto_idProducto
                                        INNER JOIN factura ON factura_has_producto.Factura_idfactura = factura.idfactura
                                        INNER JOIN cliente ON factura.cliente_idCliente = cliente.idCliente;
END */$$
DELIMITER ;

/* Procedure structure for procedure `VentasProListaAdmExcel` */

/*!50003 DROP PROCEDURE IF EXISTS  `VentasProListaAdmExcel` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `VentasProListaAdmExcel`()
BEGIN
SELECT factura.idfactura,factura.fechaFactura, cliente.apellidosUsuarios, cliente.nombresUsuarios, producto.nombreProducto, producto.valorProducto,factura_has_producto.cantidad, factura_has_producto.valorIva, factura_has_producto.subTotal, factura.totalFactura,producto.stockProducto
                                        FROM producto
                                        INNER JOIN factura_has_producto ON producto.idProducto = factura_has_producto.producto_idProducto
                                        INNER JOIN factura ON factura_has_producto.Factura_idfactura = factura.idfactura
                                        INNER JOIN cliente ON factura.cliente_idCliente = cliente.idCliente;
END */$$
DELIMITER ;

/* Procedure structure for procedure `VentasProListaAdmFiltro` */

/*!50003 DROP PROCEDURE IF EXISTS  `VentasProListaAdmFiltro` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `VentasProListaAdmFiltro`(IN VPLA VARCHAR (20))
BEGIN
SELECT factura.idfactura,factura.fechaFactura, cliente.documentoCliente, producto.nombreProducto, producto.valorProducto,factura_has_producto.cantidad, factura_has_producto.valorIva, factura_has_producto.subTotal, factura.totalFactura,producto.stockProducto
                                        FROM producto
                                        INNER JOIN factura_has_producto ON producto.idProducto = factura_has_producto.producto_idProducto
                                        INNER JOIN factura ON factura_has_producto.Factura_idfactura = factura.idfactura
                                        INNER JOIN cliente ON factura.cliente_idCliente = cliente.idCliente 
                                        WHERE factura.idfactura LIKE VPLA;
END */$$
DELIMITER ;

/* Procedure structure for procedure `VentasSerListaAdm` */

/*!50003 DROP PROCEDURE IF EXISTS  `VentasSerListaAdm` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `VentasSerListaAdm`()
BEGIN
SELECT factura.idfactura,factura.fechaFactura, cliente.documentoCliente,servicio.nombreServicio,servicio.tipoServicio, factura_has_servicio.valorServicio, factura_has_servicio.subTotal, factura.totalFactura,factura.descripcion_compra
                                            FROM servicio
                                            INNER JOIN factura_has_servicio ON servicio.idServicio = factura_has_servicio.servicio_idServicio
                                            INNER JOIN factura ON factura_has_servicio.Factura_idfactura = factura.idfactura
                                            INNER JOIN cliente ON factura.cliente_idCliente = cliente.idCliente;
END */$$
DELIMITER ;

/* Procedure structure for procedure `VentasSerListaAdmFiltro` */

/*!50003 DROP PROCEDURE IF EXISTS  `VentasSerListaAdmFiltro` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `VentasSerListaAdmFiltro`(IN VSLAF VARCHAR (20))
BEGIN
SELECT factura.idfactura,factura.fechaFactura, cliente.documentoCliente,servicio.nombreServicio,servicio.tipoServicio, factura_has_servicio.valorServicio, factura_has_servicio.subTotal, factura.totalFactura,factura.descripcion_compra
                                            FROM servicio
                                            INNER JOIN factura_has_servicio ON servicio.idServicio = factura_has_servicio.servicio_idServicio
                                            INNER JOIN factura ON factura_has_servicio.Factura_idfactura = factura.idfactura
                                            INNER JOIN cliente ON factura.cliente_idCliente = cliente.idCliente WHERE nombreServicio LIKE VSLAF;
END */$$
DELIMITER ;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
