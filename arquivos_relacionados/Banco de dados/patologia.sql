-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 12/07/2021 às 22:01
-- Versão do servidor: 10.4.18-MariaDB
-- Versão do PHP: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `sist_boquinha`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `patologia`
--

CREATE TABLE `patologia` (
  `id_patologia` int(11) NOT NULL,
  `nome_patologia` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `observacoes_patologia` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `local_patologia` varchar(32) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `patologia`
--
ALTER TABLE `patologia`
  ADD PRIMARY KEY (`id_patologia`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `patologia`
--
ALTER TABLE `patologia`
  MODIFY `id_patologia` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
