-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 18-12-2019 a las 21:24:41
-- Versión del servidor: 5.7.26
-- Versión de PHP: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `remaincomputers`
--

DELIMITER $$
--
-- Procedimientos
--
DROP PROCEDURE IF EXISTS `sp_ActualizarCargo`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_ActualizarCargo` (IN `_nCargo` VARCHAR(50), IN `_idCargo` INT)  NO SQL
update cargo set ncargo=_nCargo where idcargo=_idCargo$$

DROP PROCEDURE IF EXISTS `sp_ActualizarDetalleServicio`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_ActualizarDetalleServicio` (IN `_id` INT, IN `_Ocurrencia` VARCHAR(500), IN `_condicion_status` INT, IN `_idUrgencia` INT, IN `_idTAsistencia` INT, IN `_idUsuario` INT)  NO SQL
UPDATE `detalleservicio` SET `Ocurrencia`=_Ocurrencia,`condicion_status`=_condicion_status,`idUrgencia`=_idUrgencia,`idTAsistencia`=_idTAsistencia,idUsuario=_idUsuario WHERE `id`=_id$$

DROP PROCEDURE IF EXISTS `sp_ActualizarEmpleado`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_ActualizarEmpleado` (IN `_Nombres` VARCHAR(50), IN `_Apellidos` VARCHAR(50), IN `_Dni` VARCHAR(8), IN `_Celular` VARCHAR(9), IN `_Telefono` VARCHAR(7), IN `_Correo` VARCHAR(50), IN `_idCargo` INT, IN `_idEmpleado` INT)  NO SQL
UPDATE `empleado` SET `Nombres`=_Nombres,`Apellidos`=_Apellidos,`Dni`=_Dni,`Celular`=_Celular,`Telefono`=_Telefono,`Correo`=_Correo,`idCargo`=_idCargo WHERE `idEmpleado`=_idEmpleado$$

DROP PROCEDURE IF EXISTS `sp_ActualizarEmpleadoCliente`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_ActualizarEmpleadoCliente` (IN `_idClientes_Empleados` INT, IN `_Nombres` VARCHAR(50), IN `_Apellidos` VARCHAR(50), IN `_Dni` VARCHAR(50), IN `_Celular` VARCHAR(50), IN `_Telefono` VARCHAR(50), IN `_Correo` VARCHAR(50), IN `_idClientes` INT, IN `_Perfil` INT)  NO SQL
UPDATE `clientes_empleados` SET`Nombres`=_Nombres,`Apellidos`=_Apellidos,`Dni`=_Dni,`Celular`=_Celular,`Telefono`=_Telefono,`Correo`=_Correo,`idClientes`=_idClientes,`idCargoCliente`=_Perfil WHERE idClientes_Empleados=_idClientes_Empleados$$

DROP PROCEDURE IF EXISTS `sp_ActualizarPerfil`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_ActualizarPerfil` (IN `_nPerfil` VARCHAR(50), IN `_idPerfil` INT)  NO SQL
update perfil set nPerfil=_nPerfil where idPerfil=_idPerfil$$

DROP PROCEDURE IF EXISTS `sp_ActualizarServicio`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_ActualizarServicio` (IN `_idServicio` INT, IN `_idCliente` INT, IN `_Fecha` VARCHAR(50), IN `_idTecnico` INT)  NO SQL
UPDATE `servicio` SET `idCliente`=_idCliente,`Fecha`=_Fecha,`idTecnico`=_idTecnico WHERE idServicio=_idServicio$$

DROP PROCEDURE IF EXISTS `sp_ActualizarTecnico`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_ActualizarTecnico` (IN `_idTecnicos` INT, IN `_Nombres` VARCHAR(50), IN `_Apellidos` VARCHAR(50), IN `_Dni` VARCHAR(50))  NO SQL
UPDATE `tecnicos` SET `Nombres`=_Nombres,`Apellidos`=_Apellidos,`Dni`=_Dni WHERE idTecnicos=_idTecnicos$$

DROP PROCEDURE IF EXISTS `sp_ActualizarUsuario`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_ActualizarUsuario` (IN `_nom` VARCHAR(30), IN `_con` VARCHAR(30), IN `_idEmpleado` INT, IN `_idperfil` INT, IN `_estado` INT, IN `_idUsuario` INT)  update usuario set username=_nom,PASSWORD=_con,idPerfil=_idperfil 
,idEmpleado=_idempleado,estado=_estado
where idUsuario=_idUsuario$$

DROP PROCEDURE IF EXISTS `Sp_AgregarCargo`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `Sp_AgregarCargo` (IN `_ncargo` VARCHAR(50))  NO SQL
INSERT INTO `cargo` (`nCargo`) VALUES(_ncargo)$$

DROP PROCEDURE IF EXISTS `sp_AgregarDetalleServicio`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_AgregarDetalleServicio` (IN `_idServicio` INT, IN `_Ocurrencia` VARCHAR(500), IN `_condicion_status` INT, IN `_idUrgencia` INT, IN `_idTAsistencia` INT, IN `_idUsuario` INT)  NO SQL
INSERT INTO `detalleservicio`(`idServicio`, `Ocurrencia`, `condicion_status`, `idUrgencia`, `idTAsistencia`,idUsuario) VALUES (_idServicio,_Ocurrencia,_condicion_status,_idUrgencia,_idTAsistencia,_idUsuario)$$

DROP PROCEDURE IF EXISTS `sp_AgregarEmpleado`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_AgregarEmpleado` (IN `_nombres` VARCHAR(50), IN `_apellidos` VARCHAR(50), IN `_dni` VARCHAR(8), IN `_celular` VARCHAR(9), IN `_telefono` VARCHAR(7), IN `_correo` VARCHAR(50), IN `_cargo` INT)  NO SQL
INSERT INTO `empleado`(`Nombres`, `Apellidos`, `Dni`, `Celular`, `Telefono`, `Correo`, `idCargo`) VALUES (_nombres,_apellidos,_dni,_celular,_telefono,_correo,_cargo)$$

DROP PROCEDURE IF EXISTS `sp_AgregarServicio`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_AgregarServicio` (IN `_idCliente` INT, IN `_Fecha` VARCHAR(50), IN `_idtecnico` INT)  NO SQL
INSERT INTO `servicio`(`idCliente`, `Fecha`,idtecnico) VALUES (_idCliente,_Fecha,_idtecnico)$$

DROP PROCEDURE IF EXISTS `sp_AgregarTecnico`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_AgregarTecnico` (IN `_nombre` VARCHAR(50), IN `_apellido` VARCHAR(50), IN `_dni` VARCHAR(50))  NO SQL
INSERT INTO `tecnicos` (`Nombres`, `Apellidos`, `Dni`)
VALUES(_nombre,_apellido,_dni)$$

DROP PROCEDURE IF EXISTS `sp_agregarusuario`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_agregarusuario` (IN `_nombre` VARCHAR(50), IN `_pass` VARCHAR(50), IN `_empleado` INT, IN `_perfil` INT)  insert into usuario (username,PASSWORD,idempleado,idperfil,estado) values (_nombre,_pass,_empleado,_perfil,1)$$

DROP PROCEDURE IF EXISTS `sp_ListarDetalleServicio`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_ListarDetalleServicio` ()  NO SQL
SELECT servicio.idServicio,servicio.Fecha,clientes.nEmpreza,detalleservicio.Ocurrencia,detalleservicio.condicion_status,urgencia.nUrgencia,tasistencia.nTAsistencia,detalleservicio.idUrgencia,detalleservicio.idTAsistencia ,detalleservicio.id 


FROM detalleservicio



inner join servicio on servicio.idServicio=detalleservicio.idServicio
inner join tasistencia on tasistencia.idTAsistencia=detalleservicio.idTAsistencia
inner join urgencia on urgencia.idUrgencia=detalleservicio.idUrgencia
inner join clientes_empleados on clientes_empleados.idClientes_Empleados=servicio.idCliente
inner join clientes on clientes.idCliente=clientes_empleados.idClientes$$

DROP PROCEDURE IF EXISTS `sp_ListarDSServicio`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_ListarDSServicio` ()  NO SQL
SELECT servicio.idServicio,clientes_empleados.Nombres,clientes_empleados.idCargoCliente,clientes.nEmpreza,Fecha,clientes.idCliente
FROM `servicio`

INNER JOIN clientes_empleados on clientes_empleados.idClientes_Empleados=servicio.idCliente

INNER JOIN clientes on clientes.idCliente=clientes_empleados.idClientes 

ORDER BY `servicio`.`idServicio`  desc$$

DROP PROCEDURE IF EXISTS `Sp_ListarEmpleado`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `Sp_ListarEmpleado` ()  NO SQL
select empleado.idEmpleado,.empleado.nombres,empleado.apellidos,empleado.dni,empleado.celular,empleado.telefono,empleado.correo,cargo.nCargo,cargo.idCargo from empleado INNER join cargo on  cargo.idCargo=empleado.idCargo$$

DROP PROCEDURE IF EXISTS `sp_ListarEmpleadoCliente`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_ListarEmpleadoCliente` ()  NO SQL
SELECT clientes_empleados.idClientes_Empleados,clientes_empleados.Nombres,clientes_empleados.Apellidos,clientes_empleados.Dni,clientes_empleados.Celular,clientes_empleados.Telefono,clientes_empleados.Correo,clientes.nEmpreza,clientes.idCliente,cargocliente.NCargoCliente,cargocliente.idCargoCliente FROM `clientes_empleados` 
INNER JOIN clientes on clientes.idCliente=clientes_empleados.idClientes
INNER JOIN cargocliente on cargocliente.idCargoCliente=clientes_empleados.idCargoCliente$$

DROP PROCEDURE IF EXISTS `sp_ListarPDFEMPCliente`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_ListarPDFEMPCliente` (IN `_idClientes_Empleados` INT)  NO SQL
SELECT clientes_empleados.idClientes_Empleados,clientes_empleados.Nombres,clientes_empleados.Apellidos,clientes_empleados.Dni,clientes_empleados.Celular,clientes_empleados.Telefono,clientes_empleados.Correo,clientes.nEmpreza,clientes.idCliente,cargocliente.NCargoCliente,cargocliente.idCargoCliente,COUNT(*) FROM `clientes_empleados` 
INNER JOIN clientes on clientes.idCliente=clientes_empleados.idClientes
INNER JOIN cargocliente on cargocliente.idCargoCliente=clientes_empleados.idCargoCliente
 where clientes_empleados.idClientes=_idClientes_Empleados$$

DROP PROCEDURE IF EXISTS `sp_ListarServicio`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_ListarServicio` ()  NO SQL
SELECT servicio.idServicio,clientes.nEmpreza,clientes_empleados.Nombres,clientes_empleados.Apellidos ,servicio.Fecha,empleado.Nombres,empleado.Apellidos,clientes_empleados.idClientes_Empleados,empleado.idEmpleado FROM `servicio` inner join clientes_empleados on clientes_empleados.idClientes_Empleados=servicio.idCliente inner join empleado on empleado.idEmpleado=servicio.idTecnico inner join clientes on clientes.idCliente=clientes_empleados.idClientes$$

DROP PROCEDURE IF EXISTS `Sp_ListarUsuario`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `Sp_ListarUsuario` ()  NO SQL
select Usuario.idUsuario,Usuario.UserName,Usuario.Password,perfil.nPerfil,perfil.idPerfil,empleado.idEmpleado,CONCAT(empleado.Nombres,' ',empleado.apellidos) as Empleado,Usuario.estado from usuario INNER join perfil on  perfil.idPerfil=usuario.idPerfil INNER JOIN empleado ON empleado.idEmpleado=usuario.idEmpleado$$

DROP PROCEDURE IF EXISTS `SP_LoginPHP`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_LoginPHP` (`in_usuario` VARCHAR(20), `in_clave` VARCHAR(32))  BEGIN
	DECLARE res INT;
    select count(*) into res from usuario where UserName=in_usuario; 
	IF res = 0 THEN
		select -1;
	ELSE
		select count(*) into res from usuario where Password=in_clave;
		IF res = 0 THEN
			select -2;
		ELSE
			select * from usuario where UserName=in_usuario and Password=in_clave;
		END IF;
	END IF;
End$$

DROP PROCEDURE IF EXISTS `sp_pdfdetalle`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_pdfdetalle` (IN `_id` INT)  NO SQL
SELECT servicio.idServicio,servicio.Fecha,clientes.nEmpreza,detalleservicio.Ocurrencia,detalleservicio.condicion_status,
urgencia.nUrgencia,tasistencia.nTAsistencia,detalleservicio.idUrgencia,detalleservicio.idTAsistencia ,detalleservicio.id,concat(empleado.Nombres,' ',empleado.Apellidos)as Empleado,conclusion.Comentario 
FROM detalleservicio

inner join servicio on servicio.idServicio=detalleservicio.idServicio
inner join tasistencia on tasistencia.idTAsistencia=detalleservicio.idTAsistencia
inner join urgencia on urgencia.idUrgencia=detalleservicio.idUrgencia 
inner join clientes_empleados on clientes_empleados.idClientes_Empleados=servicio.idCliente 
inner join clientes on clientes.idCliente=clientes_empleados.idClientes 
inner join empleado on empleado.idEmpleado=servicio.idTecnico
inner join conclusion on conclusion.idServicio=servicio.idServicio
where servicio.idServicio=_id$$

DROP PROCEDURE IF EXISTS `sp_sesionusuario`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_sesionusuario` (IN `us` VARCHAR(50), IN `pa` VARCHAR(50))  SELECT
    `usuario`.`idUsuario`,
   Concat(empleado.Nombres,' ',empleado.Apellidos) as empleado,
    usuario.username,
    perfil.nPerfil,
    perfil.idPerfil,
    empleado.idEmpleado
    
FROM
    `empleado`
INNER JOIN usuario ON empleado.idEmpleado = usuario.idEmpleado
INNER JOIN perfil ON perfil.idPerfil = usuario.idPerfil

WHERE
    usuario.UserName = us AND usuario.Password = pa$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargo`
--

DROP TABLE IF EXISTS `cargo`;
CREATE TABLE IF NOT EXISTS `cargo` (
  `idCargo` int(11) NOT NULL AUTO_INCREMENT,
  `nCargo` varchar(70) DEFAULT NULL,
  PRIMARY KEY (`idCargo`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cargo`
--

INSERT INTO `cargo` (`idCargo`, `nCargo`) VALUES
(13, 'Jefe de Area de TI'),
(14, 'Tecnicos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargocliente`
--

DROP TABLE IF EXISTS `cargocliente`;
CREATE TABLE IF NOT EXISTS `cargocliente` (
  `idCargoCliente` int(11) NOT NULL AUTO_INCREMENT,
  `NCargoCliente` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idCargoCliente`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cargocliente`
--

INSERT INTO `cargocliente` (`idCargoCliente`, `NCargoCliente`) VALUES
(1, 'Director');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

DROP TABLE IF EXISTS `clientes`;
CREATE TABLE IF NOT EXISTS `clientes` (
  `idCliente` int(11) NOT NULL AUTO_INCREMENT,
  `nEmpreza` varchar(70) DEFAULT NULL,
  `ruc` varchar(11) DEFAULT NULL,
  `Correo` varchar(70) DEFAULT NULL,
  `Celular` varchar(9) DEFAULT NULL,
  `Direccion` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`idCliente`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`idCliente`, `nEmpreza`, `ruc`, `Correo`, `Celular`, `Direccion`) VALUES
(4, 'Instituto Superior Sise', '5769786786', 'isise.edu.pe', '123456789', 'Lima');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes_empleados`
--

DROP TABLE IF EXISTS `clientes_empleados`;
CREATE TABLE IF NOT EXISTS `clientes_empleados` (
  `idClientes_Empleados` int(11) NOT NULL AUTO_INCREMENT,
  `Nombres` varchar(45) DEFAULT NULL,
  `Apellidos` varchar(45) DEFAULT NULL,
  `Dni` varchar(45) DEFAULT NULL,
  `Celular` varchar(45) DEFAULT NULL,
  `Telefono` varchar(45) DEFAULT NULL,
  `Correo` varchar(45) DEFAULT NULL,
  `idClientes` int(11) DEFAULT NULL,
  `idCargoCliente` int(11) DEFAULT NULL,
  PRIMARY KEY (`idClientes_Empleados`),
  KEY `idCliente_idx` (`idClientes`),
  KEY `idCargoCliente_idx` (`idCargoCliente`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `clientes_empleados`
--

INSERT INTO `clientes_empleados` (`idClientes_Empleados`, `Nombres`, `Apellidos`, `Dni`, `Celular`, `Telefono`, `Correo`, `idClientes`, `idCargoCliente`) VALUES
(1, 'Jose Juan', 'Roca Perez', '12345678', '123456789', '1234567', 'isise.edu.pe', 4, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `conclusion`
--

DROP TABLE IF EXISTS `conclusion`;
CREATE TABLE IF NOT EXISTS `conclusion` (
  `idConclusion` int(11) NOT NULL AUTO_INCREMENT,
  `idServicio` int(11) DEFAULT NULL,
  `Comentario` varchar(700) DEFAULT NULL,
  PRIMARY KEY (`idConclusion`),
  KEY `idServico_idx` (`idServicio`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `conclusion`
--

INSERT INTO `conclusion` (`idConclusion`, `idServicio`, `Comentario`) VALUES
(15, 1, 'Manterner Limpias las pc y darle un mantenimiento seguido\npara poder optener resultados');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalleservicio`
--

DROP TABLE IF EXISTS `detalleservicio`;
CREATE TABLE IF NOT EXISTS `detalleservicio` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idServicio` int(11) NOT NULL,
  `Ocurrencia` varchar(500) DEFAULT NULL,
  `condicion_status` varchar(500) DEFAULT NULL,
  `idUrgencia` int(11) DEFAULT NULL,
  `idTAsistencia` int(11) DEFAULT NULL,
  `idUsuario` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idServicio` (`idServicio`),
  KEY `idUrgencia_idx` (`idUrgencia`),
  KEY `idTAsistencia_idx` (`idTAsistencia`),
  KEY `fk_idUsuario` (`idUsuario`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `detalleservicio`
--

INSERT INTO `detalleservicio` (`id`, `idServicio`, `Ocurrencia`, `condicion_status`, `idUrgencia`, `idTAsistencia`, `idUsuario`) VALUES
(1, 1, 'PC', '0', 2, 2, 1);

--
-- Disparadores `detalleservicio`
--
DROP TRIGGER IF EXISTS `DeleteDetalleLog`;
DELIMITER $$
CREATE TRIGGER `DeleteDetalleLog` AFTER DELETE ON `detalleservicio` FOR EACH ROW insert into detalleservicioCopia(`id_Copia`,`Old_idServicio_Copia`, `Old_Ocurrencia_Copia`, `Old_condicion_status_Copia`, `Old_idUrgencia_Copia`, `Old_idTAsistencia_Copia`,fecha,hora,Sentencia,Tabla,Old_idUsuario_Copia)values
  (old.id,old.idServicio,old.Ocurrencia,old.condicion_status,old.idUrgencia,old.idTAsistencia,now(),CURRENT_TIME,'Elimino','Detalle Servicio',old.idUsuario)
$$
DELIMITER ;
DROP TRIGGER IF EXISTS `InsertDetalleLog`;
DELIMITER $$
CREATE TRIGGER `InsertDetalleLog` AFTER INSERT ON `detalleservicio` FOR EACH ROW insert into detalleservicioCopia( `id_Copia`, `New_idServicio_Copia`, `New_Ocurrencia_Copia`, `New_condicion_status_Copia`, `New_idUrgencia_Copia`, `New_idTAsistencia_Copia`,fecha,hora,Sentencia,Tabla,New_idUsuario_Copia)values
  (new.id,new.idServicio,new.Ocurrencia,new.condicion_status,new.idUrgencia,new.idTAsistencia,now(),CURRENT_TIME,'Registro','Detalle Servicio',new.idUsuario)
$$
DELIMITER ;
DROP TRIGGER IF EXISTS `UpdateDetalleLog`;
DELIMITER $$
CREATE TRIGGER `UpdateDetalleLog` AFTER UPDATE ON `detalleservicio` FOR EACH ROW insert into detalleservicioCopia
  (`id_Copia`, `New_idServicio_Copia`, `New_Ocurrencia_Copia`, `New_condicion_status_Copia`, `New_idUrgencia_Copia`, `New_idTAsistencia_Copia`,`Old_idServicio_Copia`, `Old_Ocurrencia_Copia`, `Old_condicion_status_Copia`, `Old_idUrgencia_Copia`, `Old_idTAsistencia_Copia`,fecha,hora,Sentencia,Tabla,New_idUsuario_Copia,Old_idUsuario_Copia)values
  (old.id,new.idServicio,new.Ocurrencia,new.condicion_status,new.idUrgencia,new.idTAsistencia,old.idServicio,old.Ocurrencia,old.condicion_status,old.idUrgencia,old.idTAsistencia,now(),CURRENT_TIME,'Actualizo','Detalle Servicio',new.idUsuario,old.idUsuario)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalleserviciocopia`
--

DROP TABLE IF EXISTS `detalleserviciocopia`;
CREATE TABLE IF NOT EXISTS `detalleserviciocopia` (
  `detalleservicioCopia` int(11) NOT NULL AUTO_INCREMENT,
  `id_Copia` int(11) NOT NULL,
  `New_idServicio_Copia` int(11) DEFAULT NULL,
  `New_Ocurrencia_Copia` varchar(500) DEFAULT NULL,
  `New_condicion_status_Copia` varchar(500) DEFAULT NULL,
  `New_idUrgencia_Copia` int(11) DEFAULT NULL,
  `New_idTAsistencia_Copia` int(11) DEFAULT NULL,
  `Old_idServicio_Copia` int(11) DEFAULT NULL,
  `Old_Ocurrencia_Copia` varchar(500) DEFAULT NULL,
  `Old_condicion_status_Copia` varchar(500) DEFAULT NULL,
  `Old_idUrgencia_Copia` int(11) DEFAULT NULL,
  `Old_idTAsistencia_Copia` int(11) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `hora` time DEFAULT NULL,
  `Sentencia` varchar(45) DEFAULT NULL,
  `Tabla` varchar(45) DEFAULT NULL,
  `New_idUsuario_Copia` int(11) DEFAULT NULL,
  `Old_idUsuario_Copia` int(11) DEFAULT NULL,
  PRIMARY KEY (`detalleservicioCopia`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `detalleserviciocopia`
--

INSERT INTO `detalleserviciocopia` (`detalleservicioCopia`, `id_Copia`, `New_idServicio_Copia`, `New_Ocurrencia_Copia`, `New_condicion_status_Copia`, `New_idUrgencia_Copia`, `New_idTAsistencia_Copia`, `Old_idServicio_Copia`, `Old_Ocurrencia_Copia`, `Old_condicion_status_Copia`, `Old_idUrgencia_Copia`, `Old_idTAsistencia_Copia`, `fecha`, `hora`, `Sentencia`, `Tabla`, `New_idUsuario_Copia`, `Old_idUsuario_Copia`) VALUES
(15, 2, 1, 'asdasd', '0', 1, 2, NULL, NULL, NULL, NULL, NULL, '2019-12-18', '13:48:24', 'Registro', 'Detalle Servicio', 1, NULL),
(16, 2, 1, 'asdasd', '1', 2, 2, 1, 'asdasd', '0', 1, 2, '2019-12-18', '13:48:30', 'Actualizo', 'Detalle Servicio', 1, 1),
(17, 2, NULL, NULL, NULL, NULL, NULL, 1, 'asdasd', '1', 2, 2, '2019-12-18', '13:48:31', 'Elimino', 'Detalle Servicio', NULL, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

DROP TABLE IF EXISTS `empleado`;
CREATE TABLE IF NOT EXISTS `empleado` (
  `idEmpleado` int(11) NOT NULL AUTO_INCREMENT,
  `Nombres` varchar(70) DEFAULT NULL,
  `Apellidos` varchar(70) DEFAULT NULL,
  `Dni` varchar(8) DEFAULT NULL,
  `Celular` varchar(9) DEFAULT NULL,
  `Telefono` varchar(7) DEFAULT NULL,
  `Correo` varchar(70) DEFAULT NULL,
  `idCargo` int(11) DEFAULT NULL,
  PRIMARY KEY (`idEmpleado`),
  KEY `idCargo` (`idCargo`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `empleado`
--

INSERT INTO `empleado` (`idEmpleado`, `Nombres`, `Apellidos`, `Dni`, `Celular`, `Telefono`, `Correo`, `idCargo`) VALUES
(4, 'Johan Fran', 'Rojas NuÃ±ez', '12345678', '123456789', '1234567', 'JohanRojasn21@gmail.com', 13),
(5, 'Pedro', 'Gomez', '12345678', '123456789', '1234567', 'Pedro@gmail.com', 14);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfil`
--

DROP TABLE IF EXISTS `perfil`;
CREATE TABLE IF NOT EXISTS `perfil` (
  `idPerfil` int(11) NOT NULL AUTO_INCREMENT,
  `nPerfil` varchar(70) DEFAULT NULL,
  PRIMARY KEY (`idPerfil`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `perfil`
--

INSERT INTO `perfil` (`idPerfil`, `nPerfil`) VALUES
(6, 'Administrador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicio`
--

DROP TABLE IF EXISTS `servicio`;
CREATE TABLE IF NOT EXISTS `servicio` (
  `idServicio` int(11) NOT NULL AUTO_INCREMENT,
  `idCliente` int(11) DEFAULT NULL,
  `Fecha` varchar(70) DEFAULT NULL,
  `idTecnico` int(11) DEFAULT NULL,
  PRIMARY KEY (`idServicio`),
  KEY `idCliente` (`idCliente`),
  KEY `empleado_idx` (`idTecnico`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `servicio`
--

INSERT INTO `servicio` (`idServicio`, `idCliente`, `Fecha`, `idTecnico`) VALUES
(1, 1, '2019-12-09', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tasistencia`
--

DROP TABLE IF EXISTS `tasistencia`;
CREATE TABLE IF NOT EXISTS `tasistencia` (
  `idTAsistencia` int(11) NOT NULL AUTO_INCREMENT,
  `nTAsistencia` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idTAsistencia`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tasistencia`
--

INSERT INTO `tasistencia` (`idTAsistencia`, `nTAsistencia`) VALUES
(1, 'Presencial'),
(2, 'Remota');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `urgencia`
--

DROP TABLE IF EXISTS `urgencia`;
CREATE TABLE IF NOT EXISTS `urgencia` (
  `idUrgencia` int(11) NOT NULL AUTO_INCREMENT,
  `nUrgencia` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idUrgencia`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `urgencia`
--

INSERT INTO `urgencia` (`idUrgencia`, `nUrgencia`) VALUES
(1, 'Alta'),
(2, 'Media'),
(3, 'Baja');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `idUsuario` int(11) NOT NULL AUTO_INCREMENT,
  `UserName` varchar(45) DEFAULT NULL,
  `Password` varchar(45) DEFAULT NULL,
  `idEmpleado` int(11) DEFAULT NULL,
  `idPerfil` int(11) DEFAULT NULL,
  `estado` bit(1) DEFAULT NULL,
  PRIMARY KEY (`idUsuario`),
  KEY `idEmpleado` (`idEmpleado`),
  KEY `idPerfil` (`idPerfil`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `UserName`, `Password`, `idEmpleado`, `idPerfil`, `estado`) VALUES
(1, 'JohanRN', 'asd21asd', 4, 6, b'1'),
(2, 'koki', 'koki', 5, 6, b'1');

--
-- Disparadores `usuario`
--
DROP TRIGGER IF EXISTS `Deleteauditoria`;
DELIMITER $$
CREATE TRIGGER `Deleteauditoria` AFTER DELETE ON `usuario` FOR EACH ROW insert into usuariocopia(idUsuario_copia,Old_UserName_copia,Old_Password_copia,Old_idEmpleado_copia,Old_idPerfil_copia,Old_estado_copia,fecha,hora,Sentencia,Tabla)values
  (old.idUsuario,old.UserName,old.Password,old.idEmpleado,old.idPerfil,old.estado,now(),CURRENT_TIME,'Elimino','Usuario')
$$
DELIMITER ;
DROP TRIGGER IF EXISTS `Insertauditoria`;
DELIMITER $$
CREATE TRIGGER `Insertauditoria` AFTER INSERT ON `usuario` FOR EACH ROW insert into usuariocopia(idUsuario_copia,New_UserName_copia,New_Password_copia,New_idEmpleado_copia,New_idPerfil_copia,New_estado_copia,fecha,hora,Sentencia,Tabla)values
  (new.idUsuario,new.UserName,new.Password,new.idEmpleado,new.idPerfil,new.estado,now(),CURRENT_TIME,'Registro','Usuario')
$$
DELIMITER ;
DROP TRIGGER IF EXISTS `Updateauditoria`;
DELIMITER $$
CREATE TRIGGER `Updateauditoria` AFTER UPDATE ON `usuario` FOR EACH ROW insert into usuariocopia
  (idUsuario_copia,New_UserName_copia,New_Password_copia,New_idEmpleado_copia,New_idPerfil_copia,New_estado_copia, Old_UserName_copia,Old_Password_copia,Old_idEmpleado_copia,Old_idPerfil_copia,Old_estado_copia,fecha,hora,Sentencia,Tabla)values
  (old.idUsuario,new.UserName,new.Password,new.idEmpleado,new.idPerfil,new.estado,old.UserName,old.Password,old.idEmpleado,old.idPerfil,old.estado,now(),CURRENT_TIME,'Actualizo','Usuario')
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuariocopia`
--

DROP TABLE IF EXISTS `usuariocopia`;
CREATE TABLE IF NOT EXISTS `usuariocopia` (
  `idUsuarioAuditoria` int(11) NOT NULL AUTO_INCREMENT,
  `idUsuario_copia` int(11) NOT NULL,
  `New_UserName_copia` varchar(45) DEFAULT NULL,
  `New_Password_copia` varchar(45) DEFAULT NULL,
  `New_idEmpleado_copia` int(11) DEFAULT NULL,
  `New_idPerfil_copia` int(11) DEFAULT NULL,
  `New_estado_copia` bit(1) DEFAULT NULL,
  `Old_UserName_copia` varchar(45) DEFAULT NULL,
  `Old_Password_copia` varchar(45) DEFAULT NULL,
  `Old_idEmpleado_copia` int(11) DEFAULT NULL,
  `Old_idPerfil_copia` int(11) DEFAULT NULL,
  `Old_estado_copia` bit(1) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `hora` time DEFAULT NULL,
  `Sentencia` varchar(45) DEFAULT NULL,
  `Tabla` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idUsuarioAuditoria`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuariocopia`
--

INSERT INTO `usuariocopia` (`idUsuarioAuditoria`, `idUsuario_copia`, `New_UserName_copia`, `New_Password_copia`, `New_idEmpleado_copia`, `New_idPerfil_copia`, `New_estado_copia`, `Old_UserName_copia`, `Old_Password_copia`, `Old_idEmpleado_copia`, `Old_idPerfil_copia`, `Old_estado_copia`, `fecha`, `hora`, `Sentencia`, `Tabla`) VALUES
(1, 13, 'Prueba1', 'Prueba1', 4, 6, b'1', NULL, NULL, NULL, NULL, NULL, '2019-12-10', '14:30:41', 'Registro', 'Usuario'),
(2, 13, 'Johan2', 'asd21asd2', 4, 6, b'1', 'Prueba1', 'Prueba1', 4, 6, b'1', '2019-12-10', '14:38:50', 'Actualizo', 'Usuario'),
(3, 13, NULL, NULL, NULL, NULL, NULL, 'Johan2', 'asd21asd2', 4, 6, b'1', '2019-12-10', '14:41:50', 'Elimino', 'Usuario'),
(4, 2, 'koki', 'koki', 5, 6, b'1', NULL, NULL, NULL, NULL, NULL, '2019-12-13', '09:59:32', 'Registro', 'Usuario');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `clientes_empleados`
--
ALTER TABLE `clientes_empleados`
  ADD CONSTRAINT `idCargoCliente` FOREIGN KEY (`idCargoCliente`) REFERENCES `cargocliente` (`idCargoCliente`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `idCliente` FOREIGN KEY (`idClientes`) REFERENCES `clientes` (`idCliente`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `conclusion`
--
ALTER TABLE `conclusion`
  ADD CONSTRAINT `idServico` FOREIGN KEY (`idServicio`) REFERENCES `servicio` (`idServicio`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `detalleservicio`
--
ALTER TABLE `detalleservicio`
  ADD CONSTRAINT `detalleservicio_ibfk_1` FOREIGN KEY (`idServicio`) REFERENCES `servicio` (`idServicio`),
  ADD CONSTRAINT `fk_idUsuario` FOREIGN KEY (`idUsuario`) REFERENCES `usuario` (`idUsuario`),
  ADD CONSTRAINT `idTAsistencia` FOREIGN KEY (`idTAsistencia`) REFERENCES `tasistencia` (`idTAsistencia`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `idUrgencia` FOREIGN KEY (`idUrgencia`) REFERENCES `urgencia` (`idUrgencia`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD CONSTRAINT `empleado_ibfk_1` FOREIGN KEY (`idCargo`) REFERENCES `cargo` (`idCargo`);

--
-- Filtros para la tabla `servicio`
--
ALTER TABLE `servicio`
  ADD CONSTRAINT `idEmpleado` FOREIGN KEY (`idTecnico`) REFERENCES `empleado` (`idEmpleado`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `servicio_ibfk_2` FOREIGN KEY (`idCliente`) REFERENCES `clientes_empleados` (`idClientes_Empleados`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`idEmpleado`) REFERENCES `empleado` (`idEmpleado`),
  ADD CONSTRAINT `usuario_ibfk_2` FOREIGN KEY (`idPerfil`) REFERENCES `perfil` (`idPerfil`);
COMMIT;


