-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 04-Nov-2019 às 23:33
-- Versão do servidor: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `exercicio`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtora`
--

CREATE TABLE `produtora` (
  `id` int(10) PRIMARY KEY AUTO_INCREMET,
  `nome` varchar(255) NOT NULL,
  `ranking` int(10) NOT NULL UNIQUE,
  `ativo` int(10) NOT NULL DEFAULT '1',
  `data_criacao` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;


/* 2 - 
 CREATE TABLE teste(
  `id` int(10) PRIMARY KEY AUTO_INCREMET,
  `teste` varchar(255) NOT NULL,
 )

 SELECT * FROM TABLE teste

 3- DROP TABLE teste
*/