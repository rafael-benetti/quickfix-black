-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 22-Jul-2022 às 18:34
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `login`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `password`, `created_at`, `updated_at`) VALUES
(8, 'RAFAEL', 'BENETTI', 'marketing@blackenter.com.br', '$2y$10$jo8B5Dpx3wtzmZ1EogtesOgEpSZpac9lmpXx/uxMk1azAICra6tEa', '2022-07-20 09:15:07', '2022-07-22 11:22:21'),
(16, 'Rafael', 'rafatattoo', 'sdti@blackenter.com.br', '$2y$10$gJ9jh8B2SqMrKis7ALl7CeFOPR5Zx.MP1LElNN2XOPxhj6VMp1nzm', '2022-07-21 15:18:03', '0000-00-00 00:00:00'),
(17, 'rafael', 'benetti', 'adm@blackenter.com.br', '$2y$10$elSb4OBxv7jpaEEiEY7gZu/059.R6Cgx9cikw0KKf43K8kpabtN/S', '2022-07-22 10:41:57', '0000-00-00 00:00:00'),
(18, 'rafael', 'benetti', 'contasto@blackenter.com.br', '$2y$10$Al9KNrLBnLBR6XY1/GoB2eZznhWg/y6QfDdTfTJy1fH3hNFB5Ve7S', '2022-07-22 10:43:03', '0000-00-00 00:00:00'),
(19, 'rafael', 'benetti', 'admd@blackenter.com.br', '$2y$10$TB6J6y/qCneJqsJHGxx7W.w3mJwYjeORP1oxHZADtbHwRiF9o8yWW', '2022-07-22 10:44:37', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `valores`
--

CREATE TABLE `valores` (
  `id` int(11) NOT NULL,
  `valor` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `leitura` varchar(128) NOT NULL,
  `pedidos` int(11) NOT NULL,
  `loja_id` int(11) NOT NULL,
  `data_entrada` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `valores`
--

INSERT INTO `valores` (`id`, `valor`, `created_at`, `updated_at`, `leitura`, `pedidos`, `loja_id`, `data_entrada`) VALUES
(40, 0, '2022-07-19 15:26:35', '0000-00-00 00:00:00', 'Cadastro de estoque', 2, 0, '2022-07-22'),
(41, 222, '2022-07-20 00:00:00', '0000-00-00 00:00:00', 'Tickets:4 Time:2001-05-02 14:37:40 TT130560 Device=06', 0, 0, '2022-07-19'),
(42, 333, '2022-07-21 15:30:43', '0000-00-00 00:00:00', 'Cadastro de estoque', 1, 0, '2022-07-21'),
(43, 111, '2022-07-19 00:00:00', '0000-00-00 00:00:00', 'Tickets:4 Time:2001-05-02 14:37:40 TT130560 Device=06', 0, 0, '2022-07-20'),
(64, 2, '2022-07-22 11:12:59', '0000-00-00 00:00:00', 'Estoque Atualizado', 2, 0, NULL),
(65, -4, '2022-07-21 11:18:42', '0000-00-00 00:00:00', 'Tickets:4 Time:2000-05-02 14:37:40 TT130560 Device=06', 0, 0, '2022-07-22'),
(66, -4, '2022-07-22 11:19:11', '0000-00-00 00:00:00', 'Tickets:4 Time:2001-04-02 14:37:40 TT130560 Device=06', 0, 0, '2022-07-22');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD UNIQUE KEY `id` (`id`);

--
-- Índices para tabela `valores`
--
ALTER TABLE `valores`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de tabela `valores`
--
ALTER TABLE `valores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
