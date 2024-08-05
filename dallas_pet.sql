-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 05-Ago-2024 às 22:43
-- Versão do servidor: 5.7.36
-- versão do PHP: 8.1.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `dallas_pet`
--
CREATE DATABASE IF NOT EXISTS `dallas_pet` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `dallas_pet`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `carrinho`
--

CREATE TABLE `carrinho` (
  `id` int(11) NOT NULL,
  `codigo_produto` int(11) DEFAULT NULL,
  `email_usuario` varchar(255) DEFAULT NULL,
  `quantidade` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `codigo_produto` int(11) NOT NULL,
  `nome_produto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `categoria_produto` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subcategoria_produto` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `preco_produto` decimal(10,2) NOT NULL,
  `nota_produto` decimal(2,1) NOT NULL,
  `imagem_produto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`codigo_produto`, `nome_produto`, `categoria_produto`, `subcategoria_produto`, `preco_produto`, `nota_produto`, `imagem_produto`) VALUES
(1, 'testeeee', 'Cachorro', 'rações', '50.00', '4.5', 'img/Capturar.png'),
(2, 'testeee', 'Gato', 'rações', '178.00', '4.7', 'img/gtracoes.png'),
(3, 'Gaiola para Pássaros Pequenos', 'Passaros', 'gaiolas', '70.00', '4.2', 'img/gaiola.png'),
(4, 'Coleira Pastel Mint para Cães\r\n', 'Cachorro', 'coleiras', '39.00', '4.3', 'img/coleiracr.png'),
(5, 'Snack Gourmet Chicken Strips para Cães Adultos - 100g', 'Cachorro', 'petiscos', '25.00', '4.3', 'img/petiscos.PNG'),
(6, 'Antipulgas Elanco Credeli Plus para Cães de 2,8 a 5,5 kg', 'Cachorro', 'Farmacia', '89.00', '4.6', 'img/farmaciacr.PNG'),
(7, 'Coleira Para Gatos', 'Gato', 'Coleiras', '50.00', '4.5', 'img/coleiracr.PNG'),
(8, 'Ração para Aves Reino das Aves Extra Gold', 'Passaros', 'Rações', '35.00', '4.9', 'img/pasracao.PNG'),
(9, 'Ninho para Passaros', 'Passaros', 'Acessorios', '25.00', '4.5', 'img/ninho.PNG'),
(10, 'Gaiola para Pássaros Pequenos', 'Passaros', 'gaiolas', '70.00', '4.2', 'img/gaiola.png'),
(11, 'Purê Churu Galinha para Gatos 56g\r\n', 'Gato', 'petiscos', '24.00', '5.0', 'img/petisco-gato.png');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `email_usuario` varchar(100) NOT NULL,
  `nome_usuario` varchar(100) NOT NULL,
  `telefone_usuario` varchar(20) NOT NULL,
  `senha_usuario` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`email_usuario`, `nome_usuario`, `telefone_usuario`, `senha_usuario`) VALUES
('igorsimer16@gmail.com', 'Igor Simer ', '27998724807', '$2y$10$xnYuaZKycz7nZZW8DZmBru5/VxaUfQgZ7gQHLsYLKsXHRB5mBex2G'),
('teste001@gmail.com', 'teste aula', '279999999999', '$2y$10$wI.NlmEe6UnxKO/GT0HfUeBg0skBkC3fdm2SB/jBglbhO8ay3RXF.'),
('teste@gmail.com0', 'testestet', '0033365', '$2y$10$FNhpMGnZG96vE/ScrwWB8.yXoHW4s3VC9opJw0yjnS/aL1QeKe/iy'),
('vitin.e@gay.com', 'ehoiwfhieoh', '123', '$2y$10$BI82h59tzNYIpI5RKCSfJeAZviR9JhLkTEVDpmxV4LTe0/5vLViHO');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `carrinho`
--
ALTER TABLE `carrinho`
  ADD PRIMARY KEY (`id`),
  ADD KEY `codigo_produto` (`codigo_produto`),
  ADD KEY `email_usuario` (`email_usuario`);

--
-- Índices para tabela `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`codigo_produto`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`email_usuario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `carrinho`
--
ALTER TABLE `carrinho`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `produto`
--
ALTER TABLE `produto`
  MODIFY `codigo_produto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `carrinho`
--
ALTER TABLE `carrinho`
  ADD CONSTRAINT `carrinho_ibfk_1` FOREIGN KEY (`codigo_produto`) REFERENCES `produto` (`codigo_produto`),
  ADD CONSTRAINT `carrinho_ibfk_2` FOREIGN KEY (`email_usuario`) REFERENCES `usuarios` (`email_usuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
