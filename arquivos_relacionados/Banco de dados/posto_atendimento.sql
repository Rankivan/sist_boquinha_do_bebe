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
-- Estrutura da tabela `posto_atendimento`
--

CREATE TABLE `posto_atendimento` (
  `id_posto` int(32) NOT NULL,
  `nome_posto` varchar(32) NOT NULL,
  `endereco_posto` varchar(80) NOT NULL,
  `bairro_posto` varchar(32) NOT NULL,
  `telefone_posto` varchar(32) NOT NULL,
  `cadastrante_posto` varchar(32) NOT NULL,
  `data_cad_posto` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `posto_atendimento`
--

INSERT INTO `posto_atendimento` (`id_posto`, `nome_posto`, `endereco_posto`, `bairro_posto`, `telefone_posto`, `cadastrante_posto`, `data_cad_posto`) VALUES
(0, 'TESTE_não apagar', 'TESTE_não apagar', '', '0000000', '12 - Ivan', '2020-12-31'),
(32, 'UBS bela vista', 'rua joauim 1', 'Bela vista', '33122564', '12 - Ivan', '2020-12-31'),
(33, 'UBS Regional', 'rua joauim 4', 'Centro', '33122564', '12 - Ivan', '2020-12-31'),
(34, 'UBS nova fronteira', 'rua joauim 4', 'Nova fronteira', '33122564', '12 - Ivan', '2020-12-31'),
(35, 'Unidade 1', 'rua joauim 4', 'Centro', '33122564', '12 - Ivan', '2020-12-31'),
(36, 'Jaomir santos', 'AVENIDA ALAGOAS 1283', 'Jaomir', '33122564', '12 - Ivan', '2021-01-03'),
(37, 'Malvinas', 'Avenida malvinas', 'Malvina', '33122564', '12 - Ivan', '2021-01-03');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `posto_atendimento`
--
ALTER TABLE `posto_atendimento`
  ADD PRIMARY KEY (`id_posto`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `posto_atendimento`
--
ALTER TABLE `posto_atendimento`
  MODIFY `id_posto` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
