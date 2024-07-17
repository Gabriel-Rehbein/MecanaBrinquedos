-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 18/07/2024 às 00:38
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `mecana`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `audit_log`
--

CREATE TABLE `audit_log` (
  `id` int(11) NOT NULL,
  `action` varchar(50) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `details` text DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `audit_log`
--

INSERT INTO `audit_log` (`id`, `action`, `user_id`, `details`, `timestamp`) VALUES
(1, 'Inserção de novo cliente', 1, 'Novo cliente cadastrado: João Silva', '2024-07-17 21:02:35'),
(2, 'Atualização de cliente', 1, 'Cliente Rafael atualizado: Email alterado para rafael.novo@gmail.com', '2024-07-17 21:02:35'),
(3, 'Exclusão de avaliação', 1, 'Avaliação ID 123 excluída', '2024-07-17 21:02:35');

-- --------------------------------------------------------

--
-- Estrutura para tabela `avaliacoes`
--

CREATE TABLE `avaliacoes` (
  `id` int(11) NOT NULL,
  `id_produto` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `avaliacao` int(1) NOT NULL,
  `comentario` text DEFAULT NULL,
  `data_avaliacao` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `clientes`
--

CREATE TABLE `clientes` (
  `idcliente` int(11) NOT NULL,
  `nome` varchar(80) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(64) NOT NULL,
  `situacao` int(1) NOT NULL DEFAULT 1,
  `nascimento` date NOT NULL,
  `role` varchar(20) DEFAULT 'user',
  `role_id` int(11) DEFAULT NULL,
  `imagem` varchar(240) NOT NULL,
  `ativo` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `clientes`
--

INSERT INTO `clientes` (`idcliente`, `nome`, `email`, `senha`, `situacao`, `nascimento`, `role`, `role_id`, `imagem`, `ativo`) VALUES
(1, 'Administrador', 'mecanabrinquedos@gmail.com', 'Senha123', 0, '2003-12-08', 'admin', NULL, 'uploads/1-logo.png', 1),
(12, 'Rafael', 'Rafinha@gmail.com', '997c299043970468c53d4f6202188013f5e02ff6', 0, '2024-07-09', 'user', NULL, 'uploads/12-programador.png', 1),
(13, 'Gabriel', 'gabrielmr0812@gmail.com', '7c222fb2927d828af22f592134e8932480637c0d', 0, '2024-07-09', 'user', NULL, 'uploads/13-programador.png', 1),
(19, 'Guilherme', 'gui@gmail.com', '3034397e72ae2f12644f02fd8db4df80fda15b47', 0, '2024-07-09', 'user', NULL, 'uploads/19-programador.png', 1),
(21, 'Joana', 'jojo@gmail.com', '0c213ac3788e7e13fe5b856c87edfcdd6057a71f', 0, '2024-07-09', 'user', NULL, 'uploads/21-programadora.png', 1),
(23, 'Enza', 'enzo@gmail.com', '$2y$10$c0cUlyIVVPnM2OsRRGwBHuAlORw8G5/ZmSGaaqIdLl1g2Qbaafs4i', 0, '0022-03-23', 'user', NULL, 'uploads/23-programadora.png', 1),
(25, 'Laisi', 'lalaise@gmail.com', '$2y$10$80x6.F50hDIWUB9UXNx/JeQ3bPU4c3quI7b0WuUPfdkV.WpEBqkbC', 0, '0005-05-06', 'user', NULL, 'uploads/25-programadora.png', 1),
(31, 'bittar', 'bittar@gmail.com', '$2y$10$sJzr6WcuOfzmv.wan/E9puWgzdKC1MLNunfLFb.cOeDn2.yeM0IL2', 0, '2000-08-12', 'user', NULL, 'uploads/31-programador.png', 1),
(32, 'usuario', 'usuario@gmail.com', '$2y$10$53iPTnnAF611Od5qGyGHl.2dBhOBbtNn8f0M7zIwZAEyznhx7I4qC', 1, '2024-07-12', 'user', NULL, 'uploads/32-programador.png', 1),
(34, 'usuario', 'usuario3443@gmail.com', '$2y$10$yPV6BKoSx.bgukVfcmFGgeWPHV77drQwdFVH1YLqVriXRjFkHChpS', 1, '2024-07-12', 'user', NULL, 'uploads/34-programador.png', 1),
(38, 'joana', 'joana@gmail.com', '$2y$10$vwa0JkQkc6P0.84p3.MkdOc7UFImutNCWO9pbXHCDL0TVLLPaEWUO', 1, '2024-07-12', 'user', NULL, 'uploads/38-programadora.png', 1),
(39, 'clotilde', 'clot@gmail.com', '$2y$10$VPUI1FDAfrsbCruA405MTepEIbuap4s/7t7.u4fXTDrmGwp84f1Uq', 1, '2024-07-17', 'user', NULL, 'imagens/uploads/programadora.png', 1),
(40, 'Rodrigão', 'rodrigo@gmail.com', '$2y$10$5iV6LQHO2XmHw/Ci3fLMe.4xNIkuxF9f6ncq/5nPaMZxJhCDf9ziq', 1, '2024-07-17', 'user', NULL, 'imagens/uploads/programador.png', 1),
(41, 'gabizinho', 'gabizinho@gmail.com', '$2y$10$PgandPMTnOC3uejQcYYJqeBUgUpa4LcAi1KvW0tNAcbOtK8/4Quji', 1, '2024-07-17', 'user', NULL, 'imagens/uploads/programador.png', 1),
(42, 'Adriana', 'adri@gmail.com', '$2y$10$Hm.eFd3tZ12TXCFooljiBeVcipUUSv6da4VsAU5WFQ62Rn2qtX9Q2', 0, '1988-04-22', 'user', NULL, 'uploads/6698280235947-programadora.png', 1),
(43, 'Dolores', 'do@gmail.com', '$2y$10$yrIipaMdQQn4VrplnqEoP.z0KqBJx1ayrhEeYy.DwHuryXi5uLM0C', 1, '2024-07-17', 'user', NULL, 'imagens/uploads/programadora.png', 1),
(44, 'Návida', 'na@gmail.com', '$2y$10$ppkTbY1JBYinnIF9R4VW1uAHlnJGrdJDHBhojJoG11iEBgpYfDWLS', 1, '2024-07-17', 'user', NULL, 'imagens/uploads/programadora.png', 1),
(45, 'Lorenzo', 'lo@gmail.com', '$2y$10$5qwCP20ecinH.Il5opli9.TsXfcU8h1pzKKZ.o1XcHybGK2qva7J.', 1, '2024-07-18', 'user', NULL, 'imagens/uploads/programador.png', 1);

--
-- Acionadores `clientes`
--
DELIMITER $$
CREATE TRIGGER `prevent_admin_delete` BEFORE DELETE ON `clientes` FOR EACH ROW BEGIN
    IF OLD.role = 'admin' THEN
        SIGNAL SQLSTATE '45000' SET MESSAGE_TEXT = 'Operação negada: não é possível excluir usuários administradores.';
    END IF;
END
$$
DELIMITER ;

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `audit_log`
--
ALTER TABLE `audit_log`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_user_id` (`user_id`);

--
-- Índices de tabela `avaliacoes`
--
ALTER TABLE `avaliacoes`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`idcliente`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `idx_email` (`email`),
  ADD KEY `fk_role` (`role_id`),
  ADD KEY `idx_nome` (`nome`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `audit_log`
--
ALTER TABLE `audit_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `avaliacoes`
--
ALTER TABLE `avaliacoes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `idcliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `audit_log`
--
ALTER TABLE `audit_log`
  ADD CONSTRAINT `fk_user_id` FOREIGN KEY (`user_id`) REFERENCES `clientes` (`idcliente`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
