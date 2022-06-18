-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 18-Jun-2022 às 16:50
-- Versão do servidor: 10.4.21-MariaDB
-- versão do PHP: 8.0.12

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
-- Estrutura da tabela `aluguel`
--

CREATE TABLE `aluguel` (
  `aluguel_id` int(11) NOT NULL,
  `dt_retirada` date DEFAULT NULL,
  `dt_devolucao` date DEFAULT NULL,
  `livro_id` int(11) DEFAULT NULL,
  `cliente_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `autor`
--

CREATE TABLE `autor` (
  `autor_id` int(11) NOT NULL,
  `nm_autor` varchar(255) DEFAULT NULL,
  `dt_nasc` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `autor`
--

INSERT INTO `autor` (`autor_id`, `nm_autor`, `dt_nasc`) VALUES
(1, 'Lucas', '1982-03-26'),
(2, 'José', '1998-04-10'),
(3, 'Heitor', '1982-04-16'),
(4, 'Naiara', '1988-04-06'),
(5, 'Bruna', '2000-08-25'),
(6, 'Isaac', '1972-11-15'),
(7, 'Lucas', '1998-12-10'),
(8, 'João Silva', '1995-10-01');

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria`
--

CREATE TABLE `categoria` (
  `categoria_id` int(11) NOT NULL,
  `descricao` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `categoria`
--

INSERT INTO `categoria` (`categoria_id`, `descricao`) VALUES
(1, 'Ficção'),
(2, 'Ciência'),
(3, 'História'),
(4, 'Matemática'),
(5, 'Português');

-- --------------------------------------------------------

--
-- Estrutura da tabela `editora`
--

CREATE TABLE `editora` (
  `editora_id` int(11) NOT NULL,
  `nm_editora` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `editora`
--

INSERT INTO `editora` (`editora_id`, `nm_editora`) VALUES
(1, 'Editora Manazo'),
(2, 'Editora Sol'),
(3, 'Editora Alegria'),
(4, 'Editora Venus'),
(5, 'Editora Familia');

-- --------------------------------------------------------

--
-- Estrutura da tabela `livro`
--

CREATE TABLE `livro` (
  `livro_id` int(11) NOT NULL,
  `nm_livro` varchar(255) NOT NULL,
  `edicao` varchar(255) DEFAULT NULL,
  `ano` varchar(255) DEFAULT NULL,
  `editora_id` int(11) NOT NULL,
  `categoria_id` int(11) DEFAULT NULL,
  `autor_id` int(11) NOT NULL,
  `capa` blob DEFAULT NULL,
  `quantidade` int(11) DEFAULT NULL,
  `preco` float DEFAULT NULL,
  `sinopse` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `livro`
--

INSERT INTO `livro` (`livro_id`, `nm_livro`, `edicao`, `ano`, `editora_id`, `categoria_id`, `autor_id`, `capa`, `quantidade`, `preco`, `sinopse`) VALUES
(1, 'Star Wars', '10', NULL, 1, 1, 2, NULL, NULL, NULL, NULL),
(2, 'Guia dos Mochileiros', '2', NULL, 1, 1, 2, NULL, NULL, NULL, NULL),
(3, 'Segunda Guerra', '1', NULL, 2, 3, 3, NULL, NULL, NULL, NULL),
(4, 'Roma', '3', NULL, 3, 3, 4, NULL, NULL, NULL, NULL),
(5, 'Quimica Avançada', '1', NULL, 3, 2, 5, NULL, NULL, NULL, NULL),
(6, 'Laboratório', '10', NULL, 4, 2, 5, NULL, NULL, NULL, NULL),
(7, 'Gramática', '6', NULL, 3, 5, 6, NULL, NULL, NULL, NULL),
(8, 'Gramática 2', '6', '2006', 4, 5, 6, NULL, NULL, NULL, NULL),
(9, 'Matemática Discreta', '5', '2005', 3, 4, 5, NULL, NULL, NULL, NULL),
(10, 'Matemática Avançada', '10', '1998', 4, 4, 5, NULL, NULL, NULL, NULL),
(13, 'Text', NULL, '1990', 1, NULL, 1, '', 2, 12, 'qweqwewq'),
(17, 'Exemplo1', NULL, '2000', 4, NULL, 4, '', 22, 19.9, 'Exemplo de form enviada.'),
(18, 'Livro 1', NULL, '2011', 5, NULL, 8, '', 111, 22, 'Livro 1 exemplo sinopse'),
(19, 'Testando atualiza livro', NULL, '2022', 1, NULL, 8, '', 1000, 9.99, 'Exte é um teste de atualização de livros.');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `usuario_id` int(11) NOT NULL,
  `nm_usuario` varchar(255) NOT NULL,
  `sexo` varchar(255) NOT NULL,
  `cpf` varchar(255) NOT NULL,
  `dt_nascimento` date NOT NULL,
  `rua` varchar(255) NOT NULL,
  `bairro` varchar(255) NOT NULL,
  `numero` int(11) NOT NULL,
  `cidade` varchar(255) NOT NULL,
  `estado` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `telefone` varchar(255) NOT NULL,
  `tipo_usuario` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `palavra_seg` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`usuario_id`, `nm_usuario`, `sexo`, `cpf`, `dt_nascimento`, `rua`, `bairro`, `numero`, `cidade`, `estado`, `email`, `telefone`, `tipo_usuario`, `senha`, `palavra_seg`) VALUES
(1, 'Fernando', 'Masculino', '38825222831', '2022-06-15', 'Avenida Barbacena', 'Jardim Ismênia', 987, 'São José dos Campos', 'SP', 'fer@gmail.com', '+55 (11) 11111-1111', '3', '12', 'senhafacil'),
(2, 'João', 'Masculino', '16945487911', '2022-06-30', 'Avenida Barbacena', 'Jardim Ismênia', 987, 'São José dos Campos', 'SP', 'joao@teste.com', '+55 (22) 22222-2222', '1', '123', 'asdasd'),
(3, 'José', 'Masculino', '67818587349', '2022-06-16', 'Rua do Colégio', 'Água Fria', 1231, 'Recife', 'PE', 'jose@email.com', '+55 (12) 22334-2223', '1', 'c20ad4d76fe97759aa27a0c99bff6710', '12'),
(4, 'Maria', 'Feminino', '66767116483', '2022-06-08', 'Rua Cícero Dantas', 'Boa Vista II', 452, 'Serra', 'ES', 'maria@email.com', '+55 (43) 72773-2773', '1', '81dc9bdb52d04dc20036dbd8313ed055', '1234'),
(5, 'Carol', 'Feminino', '14424568687', '2022-06-06', 'Rua da Alegria 2', 'Carapina Grande', 3232, 'Serra', 'ES', 'carol@email.com', '+55 (12) 12121-2323', '2', '202cb962ac59075b964b07152d234b70', '123');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `aluguel`
--
ALTER TABLE `aluguel`
  ADD PRIMARY KEY (`aluguel_id`),
  ADD KEY `livro_id` (`livro_id`),
  ADD KEY `cliente_id` (`cliente_id`);

--
-- Índices para tabela `autor`
--
ALTER TABLE `autor`
  ADD PRIMARY KEY (`autor_id`);

--
-- Índices para tabela `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`categoria_id`);

--
-- Índices para tabela `editora`
--
ALTER TABLE `editora`
  ADD PRIMARY KEY (`editora_id`);

--
-- Índices para tabela `livro`
--
ALTER TABLE `livro`
  ADD PRIMARY KEY (`livro_id`),
  ADD KEY `editora_id` (`editora_id`),
  ADD KEY `categoria_id` (`categoria_id`),
  ADD KEY `autor_id` (`autor_id`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`usuario_id`),
  ADD UNIQUE KEY `cpf` (`cpf`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `aluguel`
--
ALTER TABLE `aluguel`
  MODIFY `aluguel_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `autor`
--
ALTER TABLE `autor`
  MODIFY `autor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `categoria`
--
ALTER TABLE `categoria`
  MODIFY `categoria_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `editora`
--
ALTER TABLE `editora`
  MODIFY `editora_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `livro`
--
ALTER TABLE `livro`
  MODIFY `livro_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `usuario_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `aluguel`
--
ALTER TABLE `aluguel`
  ADD CONSTRAINT `aluguel_ibfk_1` FOREIGN KEY (`livro_id`) REFERENCES `livro` (`livro_id`),
  ADD CONSTRAINT `aluguel_ibfk_2` FOREIGN KEY (`cliente_id`) REFERENCES `usuario` (`usuario_id`);

--
-- Limitadores para a tabela `livro`
--
ALTER TABLE `livro`
  ADD CONSTRAINT `livro_ibfk_1` FOREIGN KEY (`editora_id`) REFERENCES `editora` (`editora_id`),
  ADD CONSTRAINT `livro_ibfk_2` FOREIGN KEY (`categoria_id`) REFERENCES `categoria` (`categoria_id`),
  ADD CONSTRAINT `livro_ibfk_3` FOREIGN KEY (`autor_id`) REFERENCES `autor` (`autor_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
