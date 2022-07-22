-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 22-Jul-2022 às 05:44
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
(8, 'RAFAEL', 'BENETTI', 'marketing@blackenter.com.br', '$2y$10$BOCZMf/zBl12zmAu8MVdE.qH5ZROMf1GCPF9vSIOgNQF1c.0DsRYG', '2022-07-20 09:15:07', '2022-07-21 13:39:31'),
(16, 'Rafael', 'rafatattoo', 'sdti@blackenter.com.br', '$2y$10$gJ9jh8B2SqMrKis7ALl7CeFOPR5Zx.MP1LElNN2XOPxhj6VMp1nzm', '2022-07-21 15:18:03', '0000-00-00 00:00:00');

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
  `loja_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `valores`
--

INSERT INTO `valores` (`id`, `valor`, `created_at`, `updated_at`, `leitura`, `pedidos`, `loja_id`) VALUES
(40, 22222, '2022-07-19 15:26:35', '0000-00-00 00:00:00', 'Cadastro de estoque', 2, 0),
(41, -4, '2022-07-21 15:26:44', '0000-00-00 00:00:00', 'Tickets:4 Time:2001-05-02 14:37:40 TT130560 Device=06', 0, 0),
(42, 1, '2022-07-21 15:30:43', '0000-00-00 00:00:00', 'Cadastro de estoque', 1, 0),
(43, -4, '2022-07-21 15:36:39', '0000-00-00 00:00:00', 'Tickets:4 Time:2001-05-02 14:37:40 TT130560 Device=06', 0, 0),
(44, -4, '2022-07-21 15:36:41', '0000-00-00 00:00:00', 'Tickets:4 Time:2001-05-02 14:37:40 TT130560 Device=06', 0, 0),
(45, -4, '2022-07-21 15:36:45', '0000-00-00 00:00:00', 'Tickets:4 Time:2001-05-02 14:37:40 TT130560 Device=06', 0, 0),
(46, -4, '2022-07-21 15:36:47', '0000-00-00 00:00:00', 'Tickets:4 Time:2001-05-02 14:37:40 TT130560 Device=06', 0, 0),
(47, -4, '2022-07-21 15:36:52', '0000-00-00 00:00:00', 'Tickets:4 Time:2001-05-02 14:37:40 TT130560 Device=06', 0, 0),
(48, -4, '2022-07-21 15:36:59', '0000-00-00 00:00:00', 'Tickets:4 Time:2001-05-02 14:37:40 TT130560 Device=06', 0, 0),
(49, -4, '2022-07-21 15:37:30', '0000-00-00 00:00:00', 'Tickets:4 Time:2001-05-02 14:37:40 TT130560 Device=06', 0, 0),
(50, -22, '2022-07-21 20:10:41', '0000-00-00 00:00:00', 'Tickets:22 Time:2001-05-02 14:37:40 TT130560 Device=06', 0, 0),
(51, -22, '2022-07-19 20:10:49', '0000-00-00 00:00:00', 'Tickets:22 Time:2001-05-02 14:37:40 TT130560 Device=06', 0, 0),
(52, 2, '2022-07-21 22:39:34', '0000-00-00 00:00:00', 'Cadastro de estoquee', 2, 0),
(53, 1000, '2022-07-21 22:43:51', '0000-00-00 00:00:00', 'Estoque Atualizado', 88226, 0);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de tabela `valores`
--
ALTER TABLE `valores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
