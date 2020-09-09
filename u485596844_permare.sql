-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 31/08/2020 às 17:23
-- Versão do servidor: 10.4.13-MariaDB
-- Versão do PHP: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `u485596844_permare`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `header_inicio`
--

CREATE TABLE `header_inicio` (
  `header_id` int(11) NOT NULL,
  `header_foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Despejando dados para a tabela `header_inicio`
--

INSERT INTO `header_inicio` (`header_id`, `header_foto`) VALUES
(2, '202008131731031597339863janelao-de-correr2.jpg'),
(3, '202008131733021597339982janelao-de-correr3.jpg');

-- --------------------------------------------------------

--
-- Estrutura para tabela `portifolio`
--

CREATE TABLE `portifolio` (
  `foto_id` int(11) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `foto_categoria` varchar(55) NOT NULL,
  `foto_grid` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Despejando dados para a tabela `portifolio`
--

INSERT INTO `portifolio` (`foto_id`, `foto`, `foto_categoria`, `foto_grid`) VALUES
(17, '202008111659281597165168janela-correr.jpg', 'Janelao-de-Correr', ' '),
(18, '202008111701391597165299janela-de-correr1.jpeg', 'Janelas-de-Correr', ' '),
(19, '202008121745161597254316janela-de-correr2.jpeg', 'Janelas-de-Correr', ' '),
(20, '202008121745281597254328janela-oscilo-batente1.jpeg', 'Janelas-Oscilo-Batente', ' '),
(21, '202008121745461597254346janela-pivotante3.jpg', 'Janelas-Oscilo-Batente', 'grid-long'),
(22, '202008121746111597254371janela-pivotante4.jpg', 'Janelas-Oscilo-Batente', ' '),
(23, '202008121746231597254383janela-pivotante5.jpg', 'Janelas-Oscilo-Batente', ' '),
(24, '202008121746471597254407janelao-de-correr1.jpeg', 'Janelao-de-Correr', ' '),
(25, '202008121746581597254418janelao-de-correr2.jpg', 'Janelao-de-Correr', ' '),
(26, '202008121747071597254427janelao-de-correr3.jpg', 'Janelao-de-Correr', ' '),
(27, '202008121747151597254435Maxim-Air.jpg', 'Janela-Maxim-Air', ' '),
(28, '202008121747221597254442maxim-air1.jpeg', 'Janela-Maxim-Air', 'grid-long'),
(29, '202008121747301597254450maxim-air2.jpeg', 'Janela-Maxim-Air', ' '),
(31, '202008121748021597254482maxim-air3.jpg', 'Janela-Maxim-Air', 'grid-wide'),
(32, '202008121748121597254492maxim-air4.jpg', 'Janela-Maxim-Air', ' '),
(33, '202008121748221597254502maxim-air5.jpg', 'Janela-Maxim-Air', ' '),
(34, '202008121748381597254518Pivotante.jpg', 'Porta-Pivotante', ' '),
(35, '202008121748481597254528porta-externa1.jpeg', 'Porta-Externa', ' '),
(36, '202008121749001597254540porta-externa2.jpeg', 'Porta-Externa', ' '),
(37, '202008121749111597254551porta-interna1.png', 'Porta-Interna', ' '),
(38, '202008121749271597254567porta-interna2.png', 'Porta-Interna', ' '),
(39, '202008121749391597254579porta-pivotante2.jpg', 'Porta-Pivotante', ' '),
(40, '202008121820051597256405porta-interna3.jpeg', 'Porta-Interna', ' ');

-- --------------------------------------------------------

--
-- Estrutura para tabela `projetos`
--

CREATE TABLE `projetos` (
  `projeto_id` int(11) NOT NULL,
  `projeto_foto` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `usuario_id` int(11) NOT NULL,
  `usuario_email` varchar(55) NOT NULL,
  `usuario_senha` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`usuario_id`, `usuario_email`, `usuario_senha`) VALUES
(1, 'arthurppinheiro@hotmail.com', 'b16befd3b4e0b930c7a2cc2426de3bdd'),
(3, 'adm@permarepvc.com.br', 'd66590f333e32e695e0ec9e251b1c028');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `header_inicio`
--
ALTER TABLE `header_inicio`
  ADD PRIMARY KEY (`header_id`);

--
-- Índices de tabela `portifolio`
--
ALTER TABLE `portifolio`
  ADD PRIMARY KEY (`foto_id`);

--
-- Índices de tabela `projetos`
--
ALTER TABLE `projetos`
  ADD PRIMARY KEY (`projeto_id`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`usuario_id`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `header_inicio`
--
ALTER TABLE `header_inicio`
  MODIFY `header_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `portifolio`
--
ALTER TABLE `portifolio`
  MODIFY `foto_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT de tabela `projetos`
--
ALTER TABLE `projetos`
  MODIFY `projeto_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `usuario_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
