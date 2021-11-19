-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 18-Nov-2021 às 23:36
-- Versão do servidor: 10.4.21-MariaDB
-- versão do PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `biblioteca`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `aluno`
--

CREATE TABLE `aluno` (
  `Cód_aluno` int(11) NOT NULL,
  `Nome` varchar(255) NOT NULL,
  `Telefone` varchar(20) NOT NULL,
  `Ano_serie` varchar(20) NOT NULL,
  `RA` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `aluno`
--

INSERT INTO `aluno` (`Cód_aluno`, `Nome`, `Telefone`, `Ano_serie`, `RA`) VALUES
(1, 'raphael prandini de moraes', '13 981416545', '7ªA', '.a');

-- --------------------------------------------------------

--
-- Estrutura da tabela `editora`
--

CREATE TABLE `editora` (
  `Cód_editora` int(11) NOT NULL,
  `Contato` varchar(45) NOT NULL,
  `Email` varchar(45) NOT NULL,
  `Nome_editora` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `editora`
--

INSERT INTO `editora` (`Cód_editora`, `Contato`, `Email`, `Nome_editora`) VALUES
(1, '38213344', 'paninieditora@gmail.com', 'Panini');

-- --------------------------------------------------------

--
-- Estrutura da tabela `livro`
--

CREATE TABLE `livro` (
  `Cód_livro` int(11) NOT NULL,
  `Editora_Cód_editora` int(11) NOT NULL,
  `Nome_livro` varchar(255) NOT NULL,
  `Autor` varchar(45) NOT NULL,
  `Categoria` varchar(45) NOT NULL,
  `ISBN` int(11) NOT NULL,
  `Ano` int(11) NOT NULL,
  `Qtd_estoque` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `livro`
--

INSERT INTO `livro` (`Cód_livro`, `Editora_Cód_editora`, `Nome_livro`, `Autor`, `Categoria`, `ISBN`, `Ano`, `Qtd_estoque`) VALUES
(3, 1, 'ASJFJA', 'HSIFISA', 'SIFOA', 1234, 1222, 1),
(6, 1, 'ASJFJA', 'HSIFISA', 'SIFOA', 1234, 1222, 2),
(7, 1, 'ASJFJA', 'HSIFISA', 'SIFOA', 1234, 1222, 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `retirada`
--

CREATE TABLE `retirada` (
  `Cód_retirada` int(11) NOT NULL,
  `Aluno_cód_aluno` int(11) NOT NULL,
  `Data_retirada` date NOT NULL,
  `Data_devolução` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `usuario_id` int(11) NOT NULL,
  `usuario` varchar(200) NOT NULL,
  `senha` varchar(32) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `data_cadastro` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`usuario_id`, `usuario`, `senha`, `nome`, `data_cadastro`) VALUES
(1, 'karina marques prandini', 'lucca01', 'Karina Marques Prandini', '2021-11-16 15:02:48');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `aluno`
--
ALTER TABLE `aluno`
  ADD PRIMARY KEY (`Cód_aluno`);

--
-- Índices para tabela `editora`
--
ALTER TABLE `editora`
  ADD PRIMARY KEY (`Cód_editora`);

--
-- Índices para tabela `livro`
--
ALTER TABLE `livro`
  ADD PRIMARY KEY (`Cód_livro`,`Nome_livro`);

--
-- Índices para tabela `retirada`
--
ALTER TABLE `retirada`
  ADD PRIMARY KEY (`Cód_retirada`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`usuario_id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `aluno`
--
ALTER TABLE `aluno`
  MODIFY `Cód_aluno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `editora`
--
ALTER TABLE `editora`
  MODIFY `Cód_editora` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `livro`
--
ALTER TABLE `livro`
  MODIFY `Cód_livro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `usuario_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
