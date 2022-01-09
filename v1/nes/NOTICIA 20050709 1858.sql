-- MySQL Administrator dump 1.4
--
-- ------------------------------------------------------
-- Server version	4.1.12-nt


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


--
-- Create schema `noticias`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `noticias`;
USE `noticias`;

--
-- Table structure for table `noticias`.`noticias`
--

DROP TABLE IF EXISTS `noticias`;
CREATE TABLE `noticias` (
  `id_noticias` int(10) unsigned NOT NULL auto_increment,
  `titulo` varchar(255) default NULL,
  `mensagem` text,
  `id_usuario` int(10) unsigned default NULL,
  PRIMARY KEY  (`id_noticias`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `noticias`.`noticias`
--

/*!40000 ALTER TABLE `noticias` DISABLE KEYS */;
INSERT INTO `noticias` (`id_noticias`,`titulo`,`mensagem`,`id_usuario`) VALUES 
 (1,'teste','testando',1),
 (2,'joao tetse','kafhalhfla\r\n',2),
 (3,'GERANDO ARQUIVOS PDF','PARA GERAR UM ARQUIVO PDF FAÇADA SEGUINTE MANEIRA PRIMEIRO....',1),
 (4,'APRENDENDO PHP','NESTA SEÇÃO APRENDEREMOS ATRABALHAR COM PHP',1),
 (5,'AMOR','A CAROL É A PESSOA QUE EU MAIS AMO NESSE MUNDO E NÃO QUERO PERDE-LA POR NADA NESSE MUNDO TE AMO DEMAIS MEU AMOR!! DO SEU AMOR',1),
 (6,'O QUE SIGNIFICA PHP','PHP SIGNIFICA PERSONAL HOME PAGE',1);
/*!40000 ALTER TABLE `noticias` ENABLE KEYS */;


--
-- Table structure for table `noticias`.`usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios` (
  `id_usuarios` int(10) unsigned NOT NULL auto_increment,
  `nome` varchar(255) default NULL,
  `login` varchar(45) default NULL,
  `senha` varchar(45) default NULL,
  PRIMARY KEY  (`id_usuarios`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `noticias`.`usuarios`
--

/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` (`id_usuarios`,`nome`,`login`,`senha`) VALUES 
 (1,'ALEXANDRE','ALEX','ALEX'),
 (2,'joao pedro','joao','pedro');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
