-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 12-Jul-2024 às 17:12
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.1.12

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
-- Estrutura da tabela `audit_log`
--

CREATE TABLE `audit_log` (
  `id` int(11) NOT NULL,
  `action` varchar(50) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `details` text DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
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
  `imagem` varchar(240) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`idcliente`, `nome`, `email`, `senha`, `situacao`, `nascimento`, `role`, `role_id`, `imagem`) VALUES
(1, 'Administrador', 'mecanabrinquedos@gmail.com', 'Senha123', 0, '0000-00-00', 'admin', NULL, ''),
(12, 'Rafael', 'Rafinha@gmail.com', '997c299043970468c53d4f6202188013f5e02ff6', 0, '2024-07-09', 'user', NULL, ''),
(13, 'Gabriel', 'gabrielmr0812@gmail.com', '7c222fb2927d828af22f592134e8932480637c0d', 0, '2024-07-09', 'user', NULL, ''),
(19, 'Guilherme', 'gui@gmail.com', '3034397e72ae2f12644f02fd8db4df80fda15b47', 0, '2024-07-09', 'user', NULL, ''),
(21, 'Joana', 'jojo@gmail.com', '0c213ac3788e7e13fe5b856c87edfcdd6057a71f', 0, '2024-07-09', 'user', NULL, ''),
(23, 'Enza', 'enzo@gmail.com', '$2y$10$c0cUlyIVVPnM2OsRRGwBHuAlORw8G5/ZmSGaaqIdLl1g2Qbaafs4i', 0, '0022-03-23', 'user', NULL, ''),
(25, 'Laisi', 'lalaise@gmail.com', '$2y$10$80x6.F50hDIWUB9UXNx/JeQ3bPU4c3quI7b0WuUPfdkV.WpEBqkbC', 0, '0005-05-06', 'user', NULL, ''),
(31, 'bittar', 'bittar@gmail.com', '$2y$10$sJzr6WcuOfzmv.wan/E9puWgzdKC1MLNunfLFb.cOeDn2.yeM0IL2', 0, '2000-08-12', 'user', NULL, ''),
(32, 'usuario', 'usuario@gmail.com', '$2y$10$53iPTnnAF611Od5qGyGHl.2dBhOBbtNn8f0M7zIwZAEyznhx7I4qC', 1, '2024-07-12', 'user', NULL, ''),
(34, 'usuario', 'usuario3443@gmail.com', '$2y$10$yPV6BKoSx.bgukVfcmFGgeWPHV77drQwdFVH1YLqVriXRjFkHChpS', 1, '2024-07-12', 'user', NULL, ''),
(38, 'joana', 'joana@gmail.com', '$2y$10$vwa0JkQkc6P0.84p3.MkdOc7UFImutNCWO9pbXHCDL0TVLLPaEWUO', 1, '2024-07-12', 'user', NULL, 'imagens/uploads/usuario.png');

--
-- Acionadores `clientes`
--
DELIMITER $$
CREATE TRIGGER `prevent_admin_delete` BEFORE DELETE ON `clientes` FOR EACH ROW BEGIN
    IF OLD.role = 'admin' THEN
        SIGNAL SQLSTATE '45000'
        SET MESSAGE_TEXT = 'O usuário administrador não pode ser removido.';
    END IF;
END
$$
DELIMITER ;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `audit_log`
--
ALTER TABLE `audit_log`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_user_id` (`user_id`);

--
-- Índices para tabela `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`idcliente`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `idx_email` (`email`),
  ADD KEY `fk_role` (`role_id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `audit_log`
--
ALTER TABLE `audit_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `idcliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `audit_log`
--
ALTER TABLE `audit_log`
  ADD CONSTRAINT `fk_user_id` FOREIGN KEY (`user_id`) REFERENCES `clientes` (`idcliente`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
