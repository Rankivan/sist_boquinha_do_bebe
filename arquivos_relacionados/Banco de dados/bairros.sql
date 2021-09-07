-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 11-Abr-2021 às 21:43
-- Versão do servidor: 5.7.23-23
-- versão do PHP: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `tecnob39_sist_boquinha`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `bairros`
--

CREATE TABLE `bairros` (
  `id_bairro` int(32) NOT NULL,
  `bairro_nome_bairro` varchar(50) NOT NULL,
  `cadastrante_bairro` varchar(50) NOT NULL,
  `data_cad_bairro` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `bairros`
--

INSERT INTO `bairros` (`id_bairro`, `bairro_nome_bairro`, `cadastrante_bairro`, `data_cad_bairro`) VALUES
(0, '', '12 - Ivan', '2020-12-31'),
(13, 'Bela vista', '12 - Ivan', '2020-12-31'),
(14, 'Centro', '12 - Ivan', '2020-12-31'),
(15, 'Nova fronteira', '12 - Ivan', '2020-12-31'),
(16, 'Jaomir', '12 - Ivan', '2021-01-03'),
(19, 'Malvina', '12 - Ivan', '2021-01-03');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `bairros`
--
ALTER TABLE `bairros`
  ADD PRIMARY KEY (`id_bairro`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `bairros`
--
ALTER TABLE `bairros`
  MODIFY `id_bairro` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
