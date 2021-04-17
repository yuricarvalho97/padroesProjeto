-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 16-Abr-2021 às 05:06
-- Versão do servidor: 10.1.38-MariaDB
-- versão do PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `padroesprojeto`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `email_usuario`
--

CREATE TABLE `email_usuario` (
  `EmailID` int(11) NOT NULL,
  `UsuarioIDFK` int(11) NOT NULL,
  `EnderecoEmail` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `email_usuario`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `mensagem`
--

CREATE TABLE `mensagem` (
  `MensagemID` int(11) NOT NULL,
  `mensageiroIDFK` int(11) NOT NULL,
  `ReceptorIDFK` int(11) NOT NULL,
  `Conteudo` varchar(255) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `redesocial`
--

CREATE TABLE `redesocial` (
  `RedeSocialID` int(11) NOT NULL,
  `NomeRedeSocial` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `redesocial`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `telefone_usuario`
--

CREATE TABLE `telefone_usuario` (
  `TelefoneID` int(11) NOT NULL,
  `UsuarioIDFK` int(11) NOT NULL,
  `Numero` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `telefone_usuario`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `UsuarioID` int(11) NOT NULL,
  `RedeSocialIDFK` int(11) NOT NULL,
  `Admin` tinyint(1) NOT NULL,
  `Nome` varchar(50) NOT NULL,
  `SobreNome` varchar(50) NOT NULL,
  `Senha` varchar(50) NOT NULL,
  `Created_at` date DEFAULT NULL,
  `Updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuario`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario_mensagem`
--

CREATE TABLE `usuario_mensagem` (
  `UsuarioMensagemID` int(11) NOT NULL,
  `UsuarioIDFK` int(11) NOT NULL,
  `MensagemIDFK` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `email_usuario`
--
ALTER TABLE `email_usuario`
  ADD PRIMARY KEY (`EmailID`),
  ADD KEY `Email_Usuario` (`UsuarioIDFK`);

--
-- Indexes for table `mensagem`
--
ALTER TABLE `mensagem`
  ADD PRIMARY KEY (`MensagemID`),
  ADD KEY `Mensagem_Usuario` (`ReceptorIDFK`);

--
-- Indexes for table `redesocial`
--
ALTER TABLE `redesocial`
  ADD PRIMARY KEY (`RedeSocialID`);

--
-- Indexes for table `telefone_usuario`
--
ALTER TABLE `telefone_usuario`
  ADD PRIMARY KEY (`TelefoneID`),
  ADD KEY `Telefone_Usuario` (`UsuarioIDFK`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`UsuarioID`),
  ADD KEY `Usuario_RedeSocial` (`RedeSocialIDFK`);

--
-- Indexes for table `usuario_mensagem`
--
ALTER TABLE `usuario_mensagem`
  ADD PRIMARY KEY (`UsuarioMensagemID`),
  ADD KEY `usuario_mensagem` (`UsuarioIDFK`),
  ADD KEY `mensagem_para_usuario` (`MensagemIDFK`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `email_usuario`
--
ALTER TABLE `email_usuario`
  MODIFY `EmailID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `mensagem`
--
ALTER TABLE `mensagem`
  MODIFY `MensagemID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `redesocial`
--
ALTER TABLE `redesocial`
  MODIFY `RedeSocialID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `telefone_usuario`
--
ALTER TABLE `telefone_usuario`
  MODIFY `TelefoneID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `UsuarioID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `usuario_mensagem`
--
ALTER TABLE `usuario_mensagem`
  MODIFY `UsuarioMensagemID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `email_usuario`
--
ALTER TABLE `email_usuario`
  ADD CONSTRAINT `Email_Usuario` FOREIGN KEY (`UsuarioIDFK`) REFERENCES `usuario` (`UsuarioID`);

--
-- Limitadores para a tabela `mensagem`
--
ALTER TABLE `mensagem`
  ADD CONSTRAINT `Mensagem_Usuario` FOREIGN KEY (`ReceptorIDFK`) REFERENCES `usuario` (`UsuarioID`);

--
-- Limitadores para a tabela `telefone_usuario`
--
ALTER TABLE `telefone_usuario`
  ADD CONSTRAINT `Telefone_Usuario` FOREIGN KEY (`UsuarioIDFK`) REFERENCES `usuario` (`UsuarioID`);

--
-- Limitadores para a tabela `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `Usuario_RedeSocial` FOREIGN KEY (`RedeSocialIDFK`) REFERENCES `redesocial` (`RedeSocialID`);

--
-- Limitadores para a tabela `usuario_mensagem`
--
ALTER TABLE `usuario_mensagem`
  ADD CONSTRAINT `mensagem_para_usuario` FOREIGN KEY (`MensagemIDFK`) REFERENCES `mensagem` (`MensagemID`),
  ADD CONSTRAINT `usuario_mensagem` FOREIGN KEY (`UsuarioIDFK`) REFERENCES `usuario` (`UsuarioID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
