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
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(50) NOT NULL,
  `nome` varchar(32) NOT NULL,
  `sobrenome` varchar(32) NOT NULL,
  `data_nascimento` varchar(32) NOT NULL,
  `telefone` varchar(32) NOT NULL,
  `tipo_usuario` varchar(32) NOT NULL,
  `adicional_usuario` varchar(32) NOT NULL,
  `observacoes` varchar(100) NOT NULL,
  `nivel_acesso` varchar(32) NOT NULL,
  `e_mail` varchar(32) NOT NULL,
  `senha` varchar(100) NOT NULL,
  `cadastrante` varchar(32) NOT NULL,
  `data_registro` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `sobrenome`, `data_nascimento`, `telefone`, `tipo_usuario`, `adicional_usuario`, `observacoes`, `nivel_acesso`, `e_mail`, `senha`, `cadastrante`, `data_registro`) VALUES
(12, 'Ivan', 'Iuata Rank', '1996-08-28', '61992620397', 'outro', 'Analista de sistema', '', '', 'ivanrank@yahoo.com.br', '841284', '', '2020-12-02'),
(14, 'JULIANA BATISTA', 'SILVA ', '1995-01-17', '61992620395', 'auxiliar', '', '', '', 'juliana@gmail.com', '123456', '12 - Ivan', '2020-12-02'),
(16, 'Marcos', 'Sampaio Rank', '1991-07-10', '61992620395', 'denstista', '', '', '', 'marcos@gmail.com', '123', '12 - Ivan', '2020-12-09'),
(17, 'Diogo', 'Vasconlelos', '2020-12-16', '61992620397', 'Auxiliar', '', '', '', 'diogo@gmail.com', '123', '12 - Ivan', '2020-12-19'),
(18, 'Reinaldo ', 'do val', '2020-12-10', '61992620397', 'Auxiliar', '', '', '', 'reinaldo@gmail.com', '123', '12 - Ivan', '2020-12-19'),
(19, 'joana', 'estela rezende', '2020-12-03', '61992620397', 'Denstista', '', '', 'administrador', 'joana@gmail.com', '123', '12 - Ivan', '2020-12-27');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
