-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 05-Jun-2018 às 18:27
-- Versão do servidor: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `supermercado`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `client_id` int(11) NOT NULL,
  `client_frist_name` varchar(60) NOT NULL,
  `client_last_name` varchar(60) NOT NULL,
  `client_email` varchar(80) NOT NULL,
  `client_news` int(11) DEFAULT NULL,
  `client_password` varchar(100) NOT NULL,
  `client_aniversario` date DEFAULT NULL,
  `cliente_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`client_id`, `client_frist_name`, `client_last_name`, `client_email`, `client_news`, `client_password`, `client_aniversario`, `cliente_date`) VALUES
(13, 'Eduardo Henrique', 'Garcia Nobre', 'eduardo18delta@gmail.com', 1, 'e10adc3949ba59abbe56e057f20f883e', '2018-01-03', '2018-05-21 18:40:04'),
(14, 'Alan ', 'Cunha', 'cunha@gmail.com', 1, 'e10adc3949ba59abbe56e057f20f883e', '2018-05-21', '2018-05-21 20:10:14'),
(15, 'Luciane', 'Gonçalves', 'lulu@gmail.com', 1, 'e10adc3949ba59abbe56e057f20f883e', '2018-05-02', '2018-06-01 14:36:27'),
(16, 'Andre', 'Martins', 'andre@gmail.com', 1, 'e10adc3949ba59abbe56e057f20f883e', '2018-05-21', '2018-06-01 22:13:07'),
(24, 'Luanna Castelo', 'Da Paes', 'luanna@gmail.com', 1, 'e10adc3949ba59abbe56e057f20f883e', NULL, '2018-06-05 14:22:59');

-- --------------------------------------------------------

--
-- Estrutura da tabela `compras`
--

CREATE TABLE `compras` (
  `id_compra` int(11) NOT NULL,
  `cliente_fk` int(11) NOT NULL,
  `produto_fk` int(11) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `valor_total` int(11) NOT NULL,
  `valor_pago` int(11) NOT NULL,
  `forma_pagamento_fk` int(11) DEFAULT NULL,
  `data_compra` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `compras`
--

INSERT INTO `compras` (`id_compra`, `cliente_fk`, `produto_fk`, `quantidade`, `valor_total`, `valor_pago`, `forma_pagamento_fk`, `data_compra`) VALUES
(1, 13, 43, 1, 4, 4, 1, '2018-06-02 20:23:13'),
(2, 14, 42, 1, 5, 5, 3, '2018-06-04 12:51:19'),
(3, 15, 43, 5, 10, 10, 2, '2018-06-04 12:51:35'),
(4, 16, 42, 1, 4, 4, 1, '2018-06-04 12:51:45'),
(5, 13, 42, 1, 10, 10, 4, '2018-06-04 13:01:30');

-- --------------------------------------------------------

--
-- Estrutura da tabela `forma_pagamento`
--

CREATE TABLE `forma_pagamento` (
  `id_pagamento` int(11) NOT NULL,
  `descricao` varchar(30) DEFAULT NULL,
  `data_cad` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `forma_pagamento`
--

INSERT INTO `forma_pagamento` (`id_pagamento`, `descricao`, `data_cad`) VALUES
(1, 'Cartão de Crédito', '2018-06-02 20:20:31'),
(2, 'Cartão de Débito', '2018-06-02 20:20:48'),
(3, 'Boleto Bancário', '2018-06-02 20:21:06'),
(4, 'Pay Pal', '2018-06-02 20:21:14');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id_produto` int(11) NOT NULL,
  `descricao` varchar(80) NOT NULL,
  `pre_custo` int(11) NOT NULL,
  `pre_venda` int(11) NOT NULL,
  `pre_lucro` int(11) NOT NULL,
  `marca` varchar(50) NOT NULL,
  `categoria` varchar(40) NOT NULL,
  `cod_barras` varchar(80) NOT NULL,
  `fornecedor` varchar(50) NOT NULL,
  `qtd` int(11) NOT NULL,
  `local_estoque` varchar(20) NOT NULL,
  `validade` date NOT NULL,
  `foto` mediumblob,
  `destaque` int(11) DEFAULT '0',
  `data_criacao` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id_produto`, `descricao`, `pre_custo`, `pre_venda`, `pre_lucro`, `marca`, `categoria`, `cod_barras`, `fornecedor`, `qtd`, `local_estoque`, `validade`, `foto`, `destaque`, `data_criacao`) VALUES
(42, 'Shampoo', 10, 10, 10, 'Nividea', 'Limpeza', '0435465465464', 'Nivia', 14, 'Estoque principal', '2018-12-31', '', 1, '2018-05-21 15:41:27'),
(43, 'Iorgute', 10, 10, 10, 'Batavo', 'Lactineos', '0435465465464', 'Timbiras', 200, 'Estoque principal', '2018-12-31', '', 1, '2018-05-21 15:42:15');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id_users` int(11) NOT NULL,
  `nome` varchar(80) NOT NULL,
  `cargo` varchar(30) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `nivel` int(1) UNSIGNED NOT NULL DEFAULT '1',
  `ativo` int(11) NOT NULL DEFAULT '1',
  `data_cad` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id_users`, `nome`, `cargo`, `username`, `password`, `email`, `nivel`, `ativo`, `data_cad`) VALUES
(12, 'Eduardo Henrique Garcia Nobre', 'Administrador', 'eduardo.nobre', 'e10adc3949ba59abbe56e057f20f883e', 'eduardo18delta@gmail.com', 1, 1, '2018-06-05 13:58:13'),
(15, 'Brenno da Silva', 'Gerente', 'brenno', 'e10adc3949ba59abbe56e057f20f883e', 'brenno@gmail.com', 1, 1, '2018-06-01 13:35:31'),
(17, 'Andre Martin', 'Gerente', 'andre', 'e10adc3949ba59abbe56e057f20f883e', 'andre@gmail.com', 1, 1, '2018-06-05 14:32:23'),
(18, 'Natan Bunto', 'Gerente', 'natan', 'e10adc3949ba59abbe56e057f20f883e', 'natan@gmail.com', 1, 1, '2018-06-05 14:32:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`client_id`);

--
-- Indexes for table `compras`
--
ALTER TABLE `compras`
  ADD PRIMARY KEY (`id_compra`),
  ADD KEY `forma_pagamento_fk` (`forma_pagamento_fk`),
  ADD KEY `cliente_fk` (`cliente_fk`),
  ADD KEY `produto_fk` (`produto_fk`);

--
-- Indexes for table `forma_pagamento`
--
ALTER TABLE `forma_pagamento`
  ADD PRIMARY KEY (`id_pagamento`);

--
-- Indexes for table `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id_produto`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_users`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cliente`
--
ALTER TABLE `cliente`
  MODIFY `client_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `compras`
--
ALTER TABLE `compras`
  MODIFY `id_compra` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `forma_pagamento`
--
ALTER TABLE `forma_pagamento`
  MODIFY `id_pagamento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id_produto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `compras`
--
ALTER TABLE `compras`
  ADD CONSTRAINT `compras_ibfk_1` FOREIGN KEY (`forma_pagamento_fk`) REFERENCES `forma_pagamento` (`id_pagamento`),
  ADD CONSTRAINT `compras_ibfk_2` FOREIGN KEY (`cliente_fk`) REFERENCES `cliente` (`client_id`),
  ADD CONSTRAINT `compras_ibfk_3` FOREIGN KEY (`produto_fk`) REFERENCES `produtos` (`id_produto`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
