-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 12-Maio-2021 às 02:00
-- Versão do servidor: 10.4.18-MariaDB
-- versão do PHP: 8.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `cadastro`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cad_anuncio`
--

CREATE TABLE `cad_anuncio` (
  `ID` int(11) NOT NULL,
  `NOME` varchar(100) NOT NULL,
  `EMAIL` varchar(50) NOT NULL,
  `TELEFONE` varchar(15) DEFAULT NULL,
  `ANUNCIO` varchar(100) NOT NULL,
  `DATEIN` date NOT NULL,
  `DATEOUT` date NOT NULL,
  `VALOR` float(10,2) NOT NULL,
  `TOTAL` int(11) GENERATED ALWAYS AS (`VALOR` * 30 * 12 / 100 / 20 * 3 * 40 + 1) VIRTUAL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cad_anuncio`
--

INSERT INTO `cad_anuncio` (`ID`, `NOME`, `EMAIL`, `TELEFONE`, `ANUNCIO`, `DATEIN`, `DATEOUT`, `VALOR`) VALUES
(1, 'Natan Borges', 'ns_borges93@yahoo.com.br', '+5511994330246', 'Carros', '2021-05-12', '2021-05-15', 10.00),
(2, 'Thais', 'thais@teste.com', '11995628456', 'Textos', '2021-05-21', '2021-05-29', 10.00),
(3, 'Lucia Vasques', 'lvasques@teste.com', '11996445974', 'Unhas', '2021-05-12', '2021-05-22', 13.00),
(4, 'Jhonny Silva', 'jhonny@teste.com', '', 'PetShop', '2021-05-14', '2021-06-25', 27.00),
(5, 'Raphael Santos', 'rafa@teste.com', '', 'Compras', '2021-05-19', '2021-05-29', 50.00);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cad_anuncio`
--
ALTER TABLE `cad_anuncio`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `EMAIL` (`EMAIL`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cad_anuncio`
--
ALTER TABLE `cad_anuncio`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
