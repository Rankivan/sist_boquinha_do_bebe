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
-- Estrutura da tabela `pacientes`
--

CREATE TABLE `pacientes` (
  `id_pac` int(50) NOT NULL,
  `nome_pac` varchar(32) NOT NULL,
  `sobrenome_pac` varchar(32) NOT NULL,
  `sexo_pac` varchar(32) NOT NULL,
  `numero_sus_pac` varchar(32) NOT NULL,
  `cidade_pac` varchar(32) NOT NULL,
  `endereco_pac` varchar(32) NOT NULL,
  `bairro_pac` varchar(32) NOT NULL,
  `nome_responsavel_pac` varchar(32) NOT NULL,
  `telefone_responsavel_pac` varchar(32) NOT NULL,
  `cpf_responsavel_pac` varchar(32) NOT NULL,
  `data_nascimento_pac` varchar(32) NOT NULL,
  `cadastrante_pac` varchar(32) NOT NULL,
  `presenca_pac` varchar(32) NOT NULL,
  `nome_posto_pac` varchar(32) NOT NULL,
  `data_registro_pac` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `pacientes`
--

INSERT INTO `pacientes` (`id_pac`, `nome_pac`, `sobrenome_pac`, `sexo_pac`, `numero_sus_pac`, `cidade_pac`, `endereco_pac`, `bairro_pac`, `nome_responsavel_pac`, `telefone_responsavel_pac`, `cpf_responsavel_pac`, `data_nascimento_pac`, `cadastrante_pac`, `presenca_pac`, `nome_posto_pac`, `data_registro_pac`) VALUES
(3, 'ivan', 'iuata rank', 'Masculino', '54654564', 'Gurupi TO', 'AVENIDA ALAGOAS 1283', 'centro', 'JULIANA BATISTA DA SILVA', '5646546', '53456456454', '2020-12-17', '12 - Ivan', '1', 'Malvinas', '2020-12-31'),
(7, 'JOAZIM', 'DA SILVA', 'Masculino', '54654564', 'GURUPI', 'AVENIDA ALAGOAS 1283', 'centro', 'JULIANA BATISTA DA SILVA', '5646546', '53456456454', '2019-06-04', '12 - Ivan', '1', 'UBS nova fronteira', '2021-01-01'),
(8, 'joazinzin', 'da silva', 'Masculino', '65445564', 'Gurupi TO', 'rua jardin 1', 'centro', 'response teste', '621215454', '6545645646', '2020-12-09', '12 - Ivan', '1', 'UBS Regional', '2021-03-25'),
(9, 'Amarildo', 'da silva', 'Masculino', '65445564', 'Gurupi TO', 'rua jardin 1', 'centro', 'response teste', '656556565', '6545645646', '2021-03-09', '12 - Ivan', '1', 'UBS Regional', '2021-03-27'),
(10, 'joazinzin', 'da silva', 'Feminino', '65445564', 'Gurupi TO', 'rua jardin 1', 'centro', 'response teste', '875878789', '6545645646', '2021-03-11', '12 - Ivan', '1', 'UBS bela vista', '2021-03-27'),
(11, 'Narah', 'da silva', 'Feminino', '65445564', 'Gurupi TO', 'rua jardin 1', 'centro', 'response teste', '546546', '456456456', '2021-03-05', '12 - Ivan', '1', 'UBS Regional', '2021-03-27');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `pacientes`
--
ALTER TABLE `pacientes`
  ADD PRIMARY KEY (`id_pac`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `pacientes`
--
ALTER TABLE `pacientes`
  MODIFY `id_pac` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
