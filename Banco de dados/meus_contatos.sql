-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 08-Nov-2017 às 12:16
-- Versão do servidor: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `meus_contatos`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `contatos`
--

CREATE TABLE `contatos` (
  `id` int(11) NOT NULL,
  `nome` varchar(40) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telefone` varchar(14) NOT NULL,
  `nascimento` date DEFAULT NULL,
  `datacadastro` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `contatos`
--

INSERT INTO `contatos` (`id`, `nome`, `email`, `telefone`, `nascimento`, `datacadastro`) VALUES
(28, 'Matheus', 'matheusdin04@gmail.com', '88992409414', '2017-07-19', '2017-11-06'),
(29, 'Maria', 'maria@gmail.com', '88993947463', '2017-11-29', '2017-11-06'),
(30, 'Joana', 'joana@gmail.com', '88993457685', '2017-11-23', '2017-11-06'),
(31, 'Mariana', 'mariana@gmail.com', '88994563725', '2017-11-24', '2017-11-06'),
(32, 'Carlos', 'carlos@gmail.com', '88934267432', '2017-11-26', '2017-11-06'),
(33, 'Lucas', 'lucas@gmail.com', '88973625141', '2017-11-30', '2017-11-06'),
(34, 'Felipe', 'Felp@gmil.com', '88995768412', '2017-11-30', '2017-11-07'),
(37, 'Matheus do Carmo', 'teste@gmail.com', '88992367483', '2017-11-25', '2017-11-07'),
(38, 'Clara', 'clarinha@gmail.com', '88992409414', '2017-11-23', '2017-11-08'),
(39, 'Paula', 'paula@gmail.com', '88992345432', '2017-10-31', '2017-11-08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contatos`
--
ALTER TABLE `contatos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contatos`
--
ALTER TABLE `contatos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
