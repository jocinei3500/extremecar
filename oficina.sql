-- MySQL Administrator dump 1.4
--
-- ------------------------------------------------------
-- Server version	5.5.5-10.4.14-MariaDB


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


--
-- Create schema oficina
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ oficina;
USE oficina;

--
-- Table structure for table `oficina`.`cliente`
--

DROP TABLE IF EXISTS `cliente`;
CREATE TABLE `cliente` (
  `cod` int(10) NOT NULL AUTO_INCREMENT,
  `nome` varchar(40) DEFAULT NULL,
  `telefone` varchar(12) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `endereco` varchar(30) DEFAULT NULL,
  `numero` int(5) DEFAULT NULL,
  `bairro` varchar(30) DEFAULT NULL,
  `cidade` varchar(30) DEFAULT NULL,
  `estado` varchar(30) DEFAULT NULL,
  `data` date DEFAULT NULL,
  PRIMARY KEY (`cod`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `oficina`.`cliente`
--

/*!40000 ALTER TABLE `cliente` DISABLE KEYS */;
INSERT INTO `cliente` (`cod`,`nome`,`telefone`,`email`,`endereco`,`numero`,`bairro`,`cidade`,`estado`,`data`) VALUES 
 (1,'Jocinei da Rosa','51983256017','jocinei300@gmail.com','José Pedro Paz Vieira',89,'guajuviras','Canoas','Rio Grande do Sul','2020-11-03'),
 (2,'Jocinei da Rosa','51983256017','jocinei300@gmail.com','José Pedro Paz Vieira',89,'guajuviras','Canoas','Rio Grande do Sul','2020-11-03'),
 (3,'Jocinei da Rosa','51983256017','jocinei300@gmail.com','José Pedro Paz Vieira',89,'guajuviras','Canoas','Rio Grande do Sul','2020-11-03'),
 (4,'Jocinei da Rosa','51983256017','jocinei300@gmail.com','José Pedro Paz Vieira',89,'guajuviras','Canoas','Rio Grande do Sul','2020-11-03'),
 (5,'Jocinei da Rosa','51983256017','jocinei300@gmail.com','José Pedro Paz Vieira',89,'guajuviras','Canoas','Rio Grande do Sul','2020-11-03'),
 (6,'Jocinei da Rosa','51983256017','jocinei300@gmail.com','José Pedro Paz Vieira',89,'guajuviras','Canoas','Rio Grande do Sul','2020-11-03'),
 (7,'Jocinei da Rosa','51983256017','jocinei300@gmail.com','José Pedro Paz Vieira',98,'guajuviras','Canoas','Rio Grande do Sul','2020-12-10'),
 (8,'Jocinei da Rosa','51983256017','jocinei300@gmail.com','José Pedro Paz Vieira',98,'guajuviras','Canoas','Rio Grande do Sul','2020-12-10');
INSERT INTO `cliente` (`cod`,`nome`,`telefone`,`email`,`endereco`,`numero`,`bairro`,`cidade`,`estado`,`data`) VALUES 
 (9,'Jocinei da Rosa','51983256017','jocinei300@gmail.com','José Pedro Paz Vieira',32,'guajuviras','Canoas','Rio Grande do Sul','2020-11-05'),
 (10,'','','','',0,'','','','0000-00-00'),
 (11,'','','','',0,'','','','0000-00-00'),
 (12,'','','','',0,'','','','0000-00-00'),
 (13,'Jocinei da Rosa','','','',0,'','','','0000-00-00'),
 (14,'','','','',0,'','','','0000-00-00'),
 (15,'','','','',0,'','','','0000-00-00');
/*!40000 ALTER TABLE `cliente` ENABLE KEYS */;


--
-- Table structure for table `oficina`.`usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE `usuario` (
  `cod` int(10) NOT NULL,
  `nome` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `senha` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`cod`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `oficina`.`usuario`
--

/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` (`cod`,`nome`,`email`,`senha`) VALUES 
 (1,'Jocinei','jocinei300@gmail.com','123456');
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
