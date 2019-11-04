-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 04-Nov-2019 às 23:57
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
-- Database: `exercicios`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `carros`
--

CREATE TABLE `carros` (
  `id_carro` int(10) NOT NULL,
  `id_marca` int(10) NOT NULL,
  `nome` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `carros`
--

INSERT INTO `carros` (`id_carro`, `id_marca`, `nome`) VALUES
(1, 1, 'fusca'),
(2, 2, 'corsa'),
(3, 3, 'fusca'),
(4, 4, 'corsa'),
(5, 5, 'palio'),
(6, 5, 'jeep'),
(7, 4, 'onix');

-- --------------------------------------------------------

--
-- Estrutura da tabela `marcas`
--

CREATE TABLE `marcas` (
  `id_marca` int(10) NOT NULL,
  `nome` varchar(1000) NOT NULL,
  `origem_marca` varchar(1000) NOT NULL DEFAULT 'Brasil',
  `id_carros` int(11) NOT NULL FOREIGN KEY
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `marcas`
--

INSERT INTO `marcas` (`id_marca`, `nome`, `origem_marca`, `id_carros`) VALUES
(1, 'fiat', 'brasil', 1);
(2, 'volsk', 'brasil', 1);
(3, 'hyundai', 'brasil', 1);
(4, 'volvo', 'brasil', 1);
(5, 'Jeep', 'brasil', 1);


/* 
ex : 
UPDATE marcas
SET nome = 'novoVolvo'
WHERE id = 4;

UPDATE marcas
SET nome = 'novoJeep'
WHERE id = 5;

INSERT INTO `marcas` (`id_marca`, `nome`, `origem_marca`, `id_carros`) VALUES
(NULL, 'fiat', 'brasil', 1);
(NULL, 'fiat', 'brasil', 1);

DELETE FROM `marcas` WHERE nome ='fiat' */

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
