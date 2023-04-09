-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           8.0.30 - MySQL Community Server - GPL
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Copiando estrutura do banco de dados para db_av01
CREATE DATABASE IF NOT EXISTS `db_av01` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_bin */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `db_av01`;

-- Copiando estrutura para tabela db_av01.agenda
CREATE TABLE IF NOT EXISTS `agenda` (
  `id` int NOT NULL AUTO_INCREMENT,
  `veterinaria` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `paciente` varchar(50) COLLATE utf8mb4_bin DEFAULT NULL,
  `consulta` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `dia` varchar(50) COLLATE utf8mb4_bin DEFAULT NULL,
  `horario` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- Copiando dados para a tabela db_av01.agenda: ~7 rows (aproximadamente)
INSERT INTO `agenda` (`id`, `veterinaria`, `paciente`, `consulta`, `dia`, `horario`) VALUES
	(1, 'Dra. Dayanna de Campos', 'Bob', 'castração', '10/04/2023', '13:30'),
	(2, 'Dr. Luciano Rodrigues', 'Escobar', 'check-up', '13/04/2023', '14:45'),
	(3, 'Dr. Luciano Rodrigues', 'Belinha', 'vacinação', '14/04/2023', '13:30'),
	(4, 'Dra. Dayanna de Campos', 'Thor', 'castração', '18/04/2023', '09:00'),
	(6, 'Dra. Thainara Bresolin', 'Napoleão', 'laparotomia exploratória', '20/04/2023', '14:00'),
	(7, 'Dra. Dayanna de Campos', 'Amora', 'hérnias', '27/04/2023', '10:00'),
	(8, 'Dra. Dayanna de Campos', 'Clarita', 'cesariana', '18/04/2023', '15:30');

-- Copiando estrutura para tabela db_av01.brinquedos
CREATE TABLE IF NOT EXISTS `brinquedos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL DEFAULT '0',
  `cor` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL DEFAULT '0',
  `estoque` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `valor` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- Copiando dados para a tabela db_av01.brinquedos: ~6 rows (aproximadamente)
INSERT INTO `brinquedos` (`id`, `nome`, `cor`, `estoque`, `valor`) VALUES
	(1, 'Arranhador', 'amarelo', '12', 'R$20,00'),
	(3, 'Pelúcia', 'multi cores', '13', 'R$9,00'),
	(4, 'Chocalho', 'azul', '15', 'R$7,00'),
	(5, 'Mordedor', 'verde', '47', 'R$12,00'),
	(6, 'Caminha', 'preta estampada', '16', 'R$32,00'),
	(7, 'Bolinha', 'vermelha', '32', 'R$2,50');

-- Copiando estrutura para tabela db_av01.usuario
CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int NOT NULL AUTO_INCREMENT,
  `cliente` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `pet` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `telefone` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `cpf` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- Copiando dados para a tabela db_av01.usuario: ~9 rows (aproximadamente)
INSERT INTO `usuario` (`id`, `cliente`, `pet`, `telefone`, `cpf`) VALUES
	(2, 'Kalyta Tawany', 'Bob', '88399837', '093.578.499-39'),
	(3, 'Iotânia Ferraz', 'Marujo', '88154937', '987.254.425-67'),
	(5, 'Dayanna de Campos', 'Belinha', '88832143', '093.578.489-67'),
	(6, 'Dionathan Biazus', 'Escobar', '98172943', '369.528.147-26'),
	(7, 'Isadora Trindade', 'Napoleão', '88042409', '239.651.437-58'),
	(8, 'Sérgio Rodrigues', 'Thor', '99225715', '147,258,369-92'),
	(9, 'Ilma Campos', 'Clarita', '88104343', '963.258.147-52'),
	(10, 'Gustavo', 'Amora', '85274968', '145.962.732-69'),
	(11, 'Gabriel Fernandes', 'Olivia', '955297516', '271.493.472-39');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
