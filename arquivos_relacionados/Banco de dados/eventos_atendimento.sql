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
-- Estrutura da tabela `eventos_atendimento`
--

CREATE TABLE `eventos_atendimento` (
  `id_evento` int(32) NOT NULL,
  `nome_evento` varchar(40) COLLATE latin1_general_ci NOT NULL,
  `data_inicio_evento` date NOT NULL,
  `horario_inicio_evento` time NOT NULL,
  `data_final_evento` date NOT NULL,
  `horario_final_evento` time NOT NULL,
  `local_evento` varchar(40) COLLATE latin1_general_ci NOT NULL,
  `observaces_evento` varchar(400) COLLATE latin1_general_ci NOT NULL,
  `presenca_evento` varchar(40) COLLATE latin1_general_ci NOT NULL,
  `status_evento` varchar(32) COLLATE latin1_general_ci NOT NULL,
  `cadastrante_evento` varchar(32) COLLATE latin1_general_ci NOT NULL,
  `data_de_cadastro_evento` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Extraindo dados da tabela `eventos_atendimento`
--

INSERT INTO `eventos_atendimento` (`id_evento`, `nome_evento`, `data_inicio_evento`, `horario_inicio_evento`, `data_final_evento`, `horario_final_evento`, `local_evento`, `observaces_evento`, `presenca_evento`, `status_evento`, `cadastrante_evento`, `data_de_cadastro_evento`) VALUES
(11, 'Evento Nova Fronteira', '2021-03-04', '22:05:00', '2021-03-26', '22:07:00', 'UBS nova fronteira', '', '', 'FECHADO', '12 - Ivan', '2021-03-21'),
(12, 'Evento Regional', '2021-03-17', '23:34:00', '3232-02-23', '23:02:00', 'UBS Regional', '', '', 'ABERTO', '12 - Ivan', '2021-03-21'),
(13, 'Evento Malvinas', '2021-03-04', '00:05:00', '2021-04-09', '22:10:00', 'Malvinas', '', '', 'ABERTO', '12 - Ivan', '2021-03-21'),
(15, 'Evento Bela Vista', '2021-03-10', '00:16:00', '2021-04-15', '02:16:00', 'UBS bela vista', '', '', 'ABERTO', '12 - Ivan', '2021-03-21');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `eventos_atendimento`
--
ALTER TABLE `eventos_atendimento`
  ADD PRIMARY KEY (`id_evento`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `eventos_atendimento`
--
ALTER TABLE `eventos_atendimento`
  MODIFY `id_evento` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
