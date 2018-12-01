-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: 
-- Versão do Servidor: 5.5.24-log
-- Versão do PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `teletudo`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `catia_souza`
--

CREATE TABLE IF NOT EXISTS `catia_souza` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `id` varchar(255) DEFAULT NULL,
  `mensagens` varchar(255) DEFAULT NULL,
  `imagem` varchar(255) CHARACTER SET latin1 COLLATE latin1_bin DEFAULT NULL,
  `dia` varchar(60) DEFAULT NULL,
  `mes` varchar(60) DEFAULT NULL,
  `tipo` varchar(20) DEFAULT NULL,
  `usuarios` varchar(70) DEFAULT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `catia_souza`
--

INSERT INTO `catia_souza` (`codigo`, `id`, `mensagens`, `imagem`, `dia`, `mes`, `tipo`, `usuarios`) VALUES
(1, NULL, NULL, 'arquivos/empresas/catia_souza/5f64a217845bafdbad49b24a66806660.jpg', '01', '01', 'fornecedor', 'catia_souza');

-- --------------------------------------------------------

--
-- Estrutura da tabela `costa_pereira`
--

CREATE TABLE IF NOT EXISTS `costa_pereira` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `id` varchar(255) DEFAULT NULL,
  `mensagens` varchar(255) DEFAULT NULL,
  `imagem` varchar(255) CHARACTER SET latin1 COLLATE latin1_bin DEFAULT NULL,
  `dia` varchar(60) DEFAULT NULL,
  `mes` varchar(60) DEFAULT NULL,
  `tipo` varchar(20) DEFAULT NULL,
  `usuarios` varchar(70) DEFAULT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `costa_pereira`
--

INSERT INTO `costa_pereira` (`codigo`, `id`, `mensagens`, `imagem`, `dia`, `mes`, `tipo`, `usuarios`) VALUES
(1, NULL, NULL, 'arquivos/empresas/costa_pereira/Benetton_1997resize.jpg', '01', '01', 'fornecedor', 'costa_pereira');

-- --------------------------------------------------------

--
-- Estrutura da tabela `denise_waak`
--

CREATE TABLE IF NOT EXISTS `denise_waak` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `id` varchar(255) DEFAULT NULL,
  `mensagens` varchar(255) DEFAULT NULL,
  `contatos` varchar(255) DEFAULT NULL,
  `imagem` varchar(255) CHARACTER SET latin1 COLLATE latin1_bin DEFAULT NULL,
  `dia` varchar(60) DEFAULT NULL,
  `mes` varchar(60) DEFAULT NULL,
  `tipo` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `denise_waak`
--

INSERT INTO `denise_waak` (`codigo`, `id`, `mensagens`, `contatos`, `imagem`, `dia`, `mes`, `tipo`) VALUES
(1, NULL, NULL, 'denise_waak', 'arquivos/usuarios/denise_waak/15.jpg', '01', '01', 'usuario'),
(2, NULL, NULL, 'felix_meneguetti', 'arquivos/usuarios/felix_meneguetti/clovis_blue.jpg', '09', '04', 'usuario');

-- --------------------------------------------------------

--
-- Estrutura da tabela `felix_meneguetti`
--

CREATE TABLE IF NOT EXISTS `felix_meneguetti` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `id` varchar(255) DEFAULT NULL,
  `mensagens` varchar(255) DEFAULT NULL,
  `contatos` varchar(255) DEFAULT NULL,
  `imagem` varchar(255) CHARACTER SET latin1 COLLATE latin1_bin DEFAULT NULL,
  `dia` varchar(60) DEFAULT NULL,
  `mes` varchar(60) DEFAULT NULL,
  `tipo` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `felix_meneguetti`
--

INSERT INTO `felix_meneguetti` (`codigo`, `id`, `mensagens`, `contatos`, `imagem`, `dia`, `mes`, `tipo`) VALUES
(1, NULL, NULL, 'felix_meneguetti', 'arquivos/usuarios/felix_meneguetti/clovis_blue.jpg', '01', '01', 'usuario'),
(2, NULL, NULL, 'denise_waak', 'arquivos/usuarios/denise_waak/15.jpg', '1', '01', 'usuario'),
(3, NULL, NULL, 'vivian_lemos', 'arquivos/usuarios/vivian_lemos/04tv4a.jpg', '', '', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `gilberto_lima`
--

CREATE TABLE IF NOT EXISTS `gilberto_lima` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `id` varchar(255) DEFAULT NULL,
  `mensagens` varchar(255) DEFAULT NULL,
  `imagem` varchar(255) CHARACTER SET latin1 COLLATE latin1_bin DEFAULT NULL,
  `dia` varchar(60) DEFAULT NULL,
  `mes` varchar(60) DEFAULT NULL,
  `tipo` varchar(20) DEFAULT NULL,
  `usuarios` varchar(70) DEFAULT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `gilberto_lima`
--

INSERT INTO `gilberto_lima` (`codigo`, `id`, `mensagens`, `imagem`, `dia`, `mes`, `tipo`, `usuarios`) VALUES
(1, NULL, NULL, 'arquivos/empresas/gilberto_lima/Brabham_BMW_BT54_1985.jpg', '01', '01', 'fornecedor', 'gilberto_lima');

-- --------------------------------------------------------

--
-- Estrutura da tabela `junior_silveira`
--

CREATE TABLE IF NOT EXISTS `junior_silveira` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `id` varchar(255) DEFAULT NULL,
  `mensagens` varchar(255) DEFAULT NULL,
  `usuarios` varchar(255) CHARACTER SET latin1 COLLATE latin1_spanish_ci DEFAULT NULL,
  `imagem` varchar(255) CHARACTER SET latin1 COLLATE latin1_bin DEFAULT NULL,
  `dia` varchar(60) DEFAULT NULL,
  `mes` varchar(60) DEFAULT NULL,
  `tipo` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `junior_silveira`
--

INSERT INTO `junior_silveira` (`codigo`, `id`, `mensagens`, `usuarios`, `imagem`, `dia`, `mes`, `tipo`) VALUES
(1, NULL, NULL, 'junior_silveira', 'arquivos/empresas/junior_silveira/Roberto_Joaquim_do_Barro.jpg', '01', '01', 'fornecedor');

-- --------------------------------------------------------

--
-- Estrutura da tabela `marcelo_bastos`
--

CREATE TABLE IF NOT EXISTS `marcelo_bastos` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `id` varchar(255) DEFAULT NULL,
  `mensagens` varchar(255) DEFAULT NULL,
  `imagem` varchar(255) CHARACTER SET latin1 COLLATE latin1_bin DEFAULT NULL,
  `dia` varchar(60) DEFAULT NULL,
  `mes` varchar(60) DEFAULT NULL,
  `tipo` varchar(20) DEFAULT NULL,
  `usuarios` varchar(70) DEFAULT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `marcelo_bastos`
--

INSERT INTO `marcelo_bastos` (`codigo`, `id`, `mensagens`, `imagem`, `dia`, `mes`, `tipo`, `usuarios`) VALUES
(1, NULL, NULL, 'arquivos/empresas/marcelo_bastos/Roberto_Joaquim_do_Barro.jpg', '01', '01', 'fornecedor', 'marcelo_bastos');

-- --------------------------------------------------------

--
-- Estrutura da tabela `paula_edson`
--

CREATE TABLE IF NOT EXISTS `paula_edson` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `id` varchar(255) DEFAULT NULL,
  `mensagens` varchar(255) DEFAULT NULL,
  `contatos` varchar(255) DEFAULT NULL,
  `imagem` varchar(255) CHARACTER SET latin1 COLLATE latin1_bin DEFAULT NULL,
  `dia` varchar(60) DEFAULT NULL,
  `mes` varchar(60) DEFAULT NULL,
  `tipo` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `paula_edson`
--

INSERT INTO `paula_edson` (`codigo`, `id`, `mensagens`, `contatos`, `imagem`, `dia`, `mes`, `tipo`) VALUES
(1, NULL, NULL, 'paula_edson', 'arquivos/usuarios/paula_edson/0,,13258355-EX,00.jpg', '01', '01', 'usuario'),
(2, NULL, NULL, 'vivian_lemos', 'arquivos/usuarios/vivian_lemos/04tv4a.jpg', '01', '01', 'usuario');

-- --------------------------------------------------------

--
-- Estrutura da tabela `ricardo_teixeira`
--

CREATE TABLE IF NOT EXISTS `ricardo_teixeira` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `id` varchar(255) DEFAULT NULL,
  `mensagens` varchar(255) DEFAULT NULL,
  `imagem` varchar(255) CHARACTER SET latin1 COLLATE latin1_bin DEFAULT NULL,
  `dia` varchar(60) DEFAULT NULL,
  `mes` varchar(60) DEFAULT NULL,
  `tipo` varchar(20) DEFAULT NULL,
  `usuarios` varchar(70) DEFAULT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `ricardo_teixeira`
--

INSERT INTO `ricardo_teixeira` (`codigo`, `id`, `mensagens`, `imagem`, `dia`, `mes`, `tipo`, `usuarios`) VALUES
(1, NULL, NULL, 'arquivos/empresas/ricardo_teixeira/AAC-6721.jpg', '01', '01', 'fornecedor', 'ricardo_teixeira');

-- --------------------------------------------------------

--
-- Estrutura da tabela `solange_caliguti`
--

CREATE TABLE IF NOT EXISTS `solange_caliguti` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `id` varchar(255) DEFAULT NULL,
  `mensagens` varchar(255) DEFAULT NULL,
  `contatos` varchar(255) DEFAULT NULL,
  `imagem` varchar(255) CHARACTER SET latin1 COLLATE latin1_bin DEFAULT NULL,
  `dia` varchar(60) DEFAULT NULL,
  `mes` varchar(60) DEFAULT NULL,
  `tipo` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `solange_caliguti`
--

INSERT INTO `solange_caliguti` (`codigo`, `id`, `mensagens`, `contatos`, `imagem`, `dia`, `mes`, `tipo`) VALUES
(1, NULL, NULL, 'solange_caliguti', 'arquivos/usuarios/solange_caliguti/bdbfd.jpg', '01', '01', 'usuario'),
(2, NULL, NULL, 'vivian_lemos', 'arquivos/usuarios/vivian_lemos/04tv4a.jpg', '01', '01', 'usuario');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tiburcio_gomes`
--

CREATE TABLE IF NOT EXISTS `tiburcio_gomes` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `id` varchar(255) DEFAULT NULL,
  `mensagens` varchar(255) DEFAULT NULL,
  `contatos` varchar(255) DEFAULT NULL,
  `imagem` varchar(255) CHARACTER SET latin1 COLLATE latin1_bin DEFAULT NULL,
  `dia` varchar(60) DEFAULT NULL,
  `mes` varchar(60) DEFAULT NULL,
  `tipo` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `tiburcio_gomes`
--

INSERT INTO `tiburcio_gomes` (`codigo`, `id`, `mensagens`, `contatos`, `imagem`, `dia`, `mes`, `tipo`) VALUES
(1, NULL, NULL, 'tiburcio_gomes', 'arquivos/usuarios/tiburcio_gomes/Roberto_Joaquim_do_Barro.jpg', '01', '01', 'usuario');

-- --------------------------------------------------------

--
-- Estrutura da tabela `vivian_lemos`
--

CREATE TABLE IF NOT EXISTS `vivian_lemos` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `id` varchar(255) DEFAULT NULL,
  `mensagens` varchar(255) DEFAULT NULL,
  `contatos` varchar(255) DEFAULT NULL,
  `imagem` varchar(255) CHARACTER SET latin1 COLLATE latin1_bin DEFAULT NULL,
  `dia` varchar(60) DEFAULT NULL,
  `mes` varchar(60) DEFAULT NULL,
  `tipo` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Extraindo dados da tabela `vivian_lemos`
--

INSERT INTO `vivian_lemos` (`codigo`, `id`, `mensagens`, `contatos`, `imagem`, `dia`, `mes`, `tipo`) VALUES
(1, NULL, NULL, 'vivian_lemos', 'arquivos/usuarios/vivian_lemos/04tv4a.jpg', '01', '01', 'usuario'),
(27, NULL, NULL, 'felix_meneguetti', 'arquivos/usuarios/felix_meneguetti/clovis_blue.jpg', '', '', 'usuario'),
(29, NULL, NULL, 'solange_caliguti', 'arquivos/usuarios/solange_caliguti/bdbfd.jpg', '', '', 'usuario'),
(30, NULL, NULL, 'paula_edson', 'arquivos/usuarios/paula_edson/0,,13258355-EX,00.jpg', '1', '01', 'usuario');

-- --------------------------------------------------------

--
-- Estrutura da tabela `_acervos`
--

CREATE TABLE IF NOT EXISTS `_acervos` (
  `codigo` int(255) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(50) CHARACTER SET latin1 COLLATE latin1_spanish_ci DEFAULT NULL,
  `nomeProduto` varchar(255) CHARACTER SET latin1 COLLATE latin1_spanish_ci DEFAULT NULL,
  `Descricao` varchar(255) CHARACTER SET latin1 COLLATE latin1_spanish_ci DEFAULT NULL,
  `imagem` varchar(255) CHARACTER SET latin1 COLLATE latin1_bin DEFAULT NULL,
  `url` varchar(200) NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `_acervos`
--

INSERT INTO `_acervos` (`codigo`, `usuario`, `nomeProduto`, `Descricao`, `imagem`, `url`) VALUES
(1, 'denise_waak', 'notebook', 'vendo por 500', 'acervos/DENISE_WAAK/ACF14DC.jpg', 'http://www.facebook.com/denise'),
(2, 'denise_waak', 'PC', 'PC turbo 1000 reais', 'acervos/DENISE_WAAK/foto8.jpg', 'http://www.facebook.com/denise');

-- --------------------------------------------------------

--
-- Estrutura da tabela `_fornecedores`
--

CREATE TABLE IF NOT EXISTS `_fornecedores` (
  `codigo` int(255) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(20) DEFAULT NULL,
  `tituloPerfil` varchar(60) DEFAULT NULL,
  `email` varchar(60) DEFAULT NULL,
  `senha` varchar(30) DEFAULT NULL,
  `estado` varchar(2) DEFAULT NULL,
  `cidade` varchar(40) DEFAULT NULL,
  `dia` int(2) DEFAULT NULL,
  `mes` varchar(20) DEFAULT NULL,
  `ano` int(4) DEFAULT NULL,
  `atividades` varchar(255) DEFAULT NULL,
  `telefone` varchar(255) CHARACTER SET latin1 COLLATE latin1_spanish_ci DEFAULT NULL,
  `textoPerfil` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `imagem` varchar(255) CHARACTER SET latin1 COLLATE latin1_bin DEFAULT NULL,
  `background` varchar(255) DEFAULT NULL,
  `CEP` int(10) NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Extraindo dados da tabela `_fornecedores`
--

INSERT INTO `_fornecedores` (`codigo`, `tipo`, `tituloPerfil`, `email`, `senha`, `estado`, `cidade`, `dia`, `mes`, `ano`, `atividades`, `telefone`, `textoPerfil`, `status`, `imagem`, `background`, `CEP`) VALUES
(2, 'fornecedor', 'JUNIOR_SILVEIRA', 'silveira@gmail.com', 'secret', 'rs', 'bage', 1, '01', 2011, 'O que voce faz?', '(11)899-547-901', 'Digite aqui o que voce quer exibir no seu perfil.', 'solteiro', 'arquivos/empresas/junior_silveira/Roberto_Joaquim_do_Barro.jpg', '#ad0a0a', 0),
(5, 'fornecedor', 'MARCELO_BASTOS', 'bastos@gmail.com', 'secret', 'ba', 'salvador', 1, '01', 2011, 'vender eleronicos', '(71)99999-9999', 'Digite aqui o que voce quer exibir no seu perfil para seus clientes.', NULL, 'arquivos/empresas/marcelo_bastos/Roberto_Joaquim_do_Barro.jpg', '#ad0a0a', 0),
(6, 'fornecedor', 'COSTA_PEREIRA', 'costa@gmail.com', 'secret', 'ce', 'fortaeeza', 1, '01', 2011, 'Qual o seu ramo?', '(85)78922-9011', 'Digite aqui o que voce quer exibir no seu perfil para seus clientes.', NULL, 'arquivos/empresas/costa_pereira/Benetton_1997resize.jpg', '#ad0a0a', 0),
(8, 'fornecedor', 'CATIA_SOUZA', 'catia@gmail.com', 'secret', 'se', 'aracaju', 1, '01', 2011, 'Qual o seu ramo?', '(75)87444-0091', 'Digite aqui o que voce quer exibir no seu perfil para seus clientes.', NULL, 'arquivos/empresas/catia_souza/5f64a217845bafdbad49b24a66806660.jpg', '#ad0a0a', 0),
(9, 'fornecedor', 'RICARDO_TEIXEIRA', 'teixeira@gmail.com', 'secret', '>>', 'rio', 1, '01', 2011, 'Qual o seu ramo?', '(21)89667-9696', 'Digite aqui o que voce quer exibir no seu perfil para seus clientes.', NULL, 'arquivos/empresas/ricardo_teixeira/AAC-6721.jpg', '#ad0a0a', 0),
(10, 'fornecedor', 'GILBERTO_LIMA', 'gilberto@gmail.com', 'secret', 'mg', 'juiz de fora', 1, '01', 2011, 'Qual o seu ramo?', '(31)89696-9490', 'Digite aqui o que voce quer exibir no seu perfil para seus clientes.', NULL, 'arquivos/empresas/gilberto_lima/Brabham_BMW_BT54_1985.jpg', '#ad0a0a', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `_mensagens`
--

CREATE TABLE IF NOT EXISTS `_mensagens` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `comentario` varchar(255) DEFAULT NULL,
  `postar` varchar(255) DEFAULT NULL,
  `sessao` varchar(255) DEFAULT NULL,
  `diaDaSemana` blob,
  `mes` blob,
  `ano` blob,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Extraindo dados da tabela `_mensagens`
--

INSERT INTO `_mensagens` (`id`, `comentario`, `postar`, `sessao`, `diaDaSemana`, `mes`, `ano`) VALUES
(1, 'Te adicionei.', 'DENISE_WAAK', 'FELIX_MENEGUETTI', 0x3036, 0x46657665726569726f, 0x32303138),
(2, 'ola', 'DENISE_WAAK', 'FELIX_MENEGUETTI', 0x3038, 0x46657665726569726f, 0x32303138),
(3, 'Te adicionei.', 'vivian@gmail.com', 'FELIX_MENEGUETTI', 0x3134, 0x46657665726569726f, 0x32303138),
(4, 'Te adicionei.', '', 'VIVIAN_LEMOS', 0x3135, 0x46657665726569726f, 0x32303138),
(5, 'Te adicionei.', '', 'VIVIAN_LEMOS', 0x3135, 0x46657665726569726f, 0x32303138),
(6, 'Te adicionei.', '', 'VIVIAN_LEMOS', 0x3135, 0x46657665726569726f, 0x32303138),
(7, 'Te adicionei.', '', 'VIVIAN_LEMOS', 0x3135, 0x46657665726569726f, 0x32303138),
(8, 'Te adicionei.', '', 'VIVIAN_LEMOS', 0x3135, 0x46657665726569726f, 0x32303138),
(9, 'Te adicionei.', 'FELIX_MENEGUETTI', 'VIVIAN_LEMOS', 0x3135, 0x46657665726569726f, 0x32303138),
(10, 'Te adicionei.', 'FELIX_MENEGUETTI', 'VIVIAN_LEMOS', 0x3135, 0x46657665726569726f, 0x32303138),
(11, 'Te adicionei.', 'FELIX_MENEGUETTI', 'VIVIAN_LEMOS', 0x3135, 0x46657665726569726f, 0x32303138),
(12, 'Te adicionei.', 'FELIX_MENEGUETTI', 'VIVIAN_LEMOS', 0x3135, 0x46657665726569726f, 0x32303138),
(13, 'Te adicionei.', 'FELIX_MENEGUETTI', 'VIVIAN_LEMOS', 0x3135, 0x46657665726569726f, 0x32303138),
(14, 'Te adicionei.', 'FELIX_MENEGUETTI', 'VIVIAN_LEMOS', 0x3135, 0x46657665726569726f, 0x32303138),
(15, 'Te adicionei.', 'FELIX_MENEGUETTI', 'VIVIAN_LEMOS', 0x3135, 0x46657665726569726f, 0x32303138),
(16, 'Te adicionei.', 'FELIX_MENEGUETTI', 'VIVIAN_LEMOS', 0x3135, 0x46657665726569726f, 0x32303138),
(17, 'Te adicionei.', 'FELIX_MENEGUETTI', 'VIVIAN_LEMOS', 0x3135, 0x46657665726569726f, 0x32303138),
(18, 'Te adicionei.', 'FELIX_MENEGUETTI', 'VIVIAN_LEMOS', 0x3135, 0x46657665726569726f, 0x32303138),
(19, 'Te adicionei.', 'FELIX_MENEGUETTI', 'VIVIAN_LEMOS', 0x3135, 0x46657665726569726f, 0x32303138),
(20, 'Te adicionei.', 'FELIX_MENEGUETTI', 'VIVIAN_LEMOS', 0x3135, 0x46657665726569726f, 0x32303138),
(21, 'Te adicionei.', 'FELIX_MENEGUETTI', 'VIVIAN_LEMOS', 0x3135, 0x46657665726569726f, 0x32303138),
(22, 'Te adicionei.', 'FELIX_MENEGUETTI', 'VIVIAN_LEMOS', 0x3135, 0x46657665726569726f, 0x32303138),
(23, 'Te adicionei.', 'FELIX_MENEGUETTI', 'VIVIAN_LEMOS', 0x3135, 0x46657665726569726f, 0x32303138),
(24, 'Te adicionei.', 'FELIX_MENEGUETTI', 'VIVIAN_LEMOS', 0x3135, 0x46657665726569726f, 0x32303138),
(25, 'Te adicionei.', 'FELIX_MENEGUETTI', 'VIVIAN_LEMOS', 0x3135, 0x46657665726569726f, 0x32303138),
(26, 'Te adicionei.', 'FELIX_MENEGUETTI', 'VIVIAN_LEMOS', 0x3135, 0x46657665726569726f, 0x32303138),
(27, 'Te adicionei.', 'FELIX_MENEGUETTI', 'VIVIAN_LEMOS', 0x3135, 0x46657665726569726f, 0x32303138),
(28, 'Te adicionei.', 'SOLANGE_CALIGUTI', 'VIVIAN_LEMOS', 0x3135, 0x46657665726569726f, 0x32303138),
(29, 'Te adicionei.', 'PAULA_EDSON', 'VIVIAN_LEMOS', 0x3135, 0x46657665726569726f, 0x32303138);

-- --------------------------------------------------------

--
-- Estrutura da tabela `_notificacoes`
--

CREATE TABLE IF NOT EXISTS `_notificacoes` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `contato` varchar(80) DEFAULT NULL,
  `perfil` varchar(80) DEFAULT NULL,
  `imagem` varchar(255) CHARACTER SET latin1 COLLATE latin1_bin DEFAULT NULL,
  `dia` varchar(30) DEFAULT NULL,
  `mes` varchar(30) DEFAULT NULL,
  `tipo` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `_produtos`
--

CREATE TABLE IF NOT EXISTS `_produtos` (
  `codigo` int(255) NOT NULL AUTO_INCREMENT,
  `fornecedor` varchar(50) CHARACTER SET latin1 COLLATE latin1_spanish_ci DEFAULT NULL,
  `nomeProduto` varchar(50) CHARACTER SET latin1 COLLATE latin1_spanish_ci DEFAULT NULL,
  `Descricao` varchar(255) CHARACTER SET latin1 COLLATE latin1_spanish_ci DEFAULT NULL,
  `imagem` varchar(255) CHARACTER SET latin1 COLLATE latin1_bin DEFAULT NULL,
  `url` varchar(200) NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Extraindo dados da tabela `_produtos`
--

INSERT INTO `_produtos` (`codigo`, `fornecedor`, `nomeProduto`, `Descricao`, `imagem`, `url`) VALUES
(2, 'JUNIOR_SILVEIRA', 'silveira@gmail.com', 'Vendo canÃ¡rio por R$15', 'produtos/JUNIOR_SILVEIRA/3x4_de_angelina.jpg', 'http://facebook.com/paulo_cesar8954'),
(3, 'JUNIOR_SILVEIRA', 'agaporne', 'vendo por R$45', 'produtos/JUNIOR_SILVEIRA/04-10-08_2224.jpg', 'http://www.agaporne.com'),
(4, 'JUNIOR_SILVEIRA', 'Agaporne amarelo', 'Outro por R$50', 'produtos/JUNIOR_SILVEIRA/03-02-09_2103.jpg', 'http://www.agaporne.com'),
(5, 'JUNIOR_SILVEIRA', 'March', 'Vendo March lyton house da dÃ©cada de 1990 \r\noriginal R$2000000,00', 'produtos/JUNIOR_SILVEIRA/3836.jpg', 'http://www.f-1.com'),
(6, 'JUNIOR_SILVEIRA', 'CD do A-ha', 'CD do A-ha de 2001 seu valor Ã© 23,00', 'produtos/JUNIOR_SILVEIRA/A-ha_3_-_Copia.jpg', 'http://www.f-1.com/a-ha');

-- --------------------------------------------------------

--
-- Estrutura da tabela `_tudo`
--

CREATE TABLE IF NOT EXISTS `_tudo` (
  `codigo` int(255) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(20) DEFAULT NULL,
  `tituloPerfil` varchar(60) DEFAULT NULL,
  `email` varchar(60) DEFAULT NULL,
  `senha` varchar(30) DEFAULT NULL,
  `estado` varchar(2) DEFAULT NULL,
  `cidade` varchar(40) DEFAULT NULL,
  `dia` int(2) DEFAULT NULL,
  `mes` varchar(20) DEFAULT NULL,
  `ano` int(4) DEFAULT NULL,
  `atividades` varchar(255) DEFAULT NULL,
  `telefone` varchar(255) DEFAULT NULL,
  `hobby` varchar(255) DEFAULT NULL,
  `textoPerfil` varchar(255) DEFAULT NULL,
  `imagem` varchar(255) CHARACTER SET latin1 COLLATE latin1_bin DEFAULT NULL,
  `background` varchar(255) DEFAULT NULL,
  `CEP` int(10) NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Extraindo dados da tabela `_tudo`
--

INSERT INTO `_tudo` (`codigo`, `tipo`, `tituloPerfil`, `email`, `senha`, `estado`, `cidade`, `dia`, `mes`, `ano`, `atividades`, `telefone`, `hobby`, `textoPerfil`, `imagem`, `background`, `CEP`) VALUES
(2, 'usuario', 'PAULA_EDSON', 'paula@gmail.com', 'secret', 'se', 'aracaju', 1, '01', 2011, 'Qual o seu ramo?', '(75)99877-0992', 'O que vocÃª gosta de usar?', 'Digite aqui o que voce quer exibir no seu perfil para seus clientes.', 'arquivos/usuarios/paula_edson/0,,13258355-EX,00.jpg', '#ad0a0a', 21096867),
(4, 'fornecedor', 'RICARDO_TEIXEIRA', 'teixeira@gmail.com', 'secret', '>>', 'rio', 1, '01', 2011, 'Qual o seu ramo?', '(21)89667-9696', NULL, 'Digite aqui o que voce quer exibir no seu perfil para seus clientes.', 'arquivos/empresas/ricardo_teixeira/AAC-6721.jpg', '#ad0a0a', 1096967),
(5, 'usuario', 'DENISE_WAAK', 'denise@gmail.com', 'secret', 'sc', 'joinville', 1, '01', 2011, 'Qual o seu ramo?', '(47)9983-93884', 'O que vocÃª gosta de usar?', 'Digite aqui o que voce quer exibir no seu perfil para seus clientes.', 'arquivos/usuarios/denise_waak/15.jpg', '#ad0a0a', 4596960),
(6, 'usuario', 'VIVIAN_LEMOS', 'vivian@gmail.com', 'secret', '>>', 'maceio', 1, '01', 2011, 'Qual o seu ramo?', '(82)99945-6667', 'O que vocÃª gosta de usar?', 'Digite aqui o que voce quer exibir no seu perfil para seus clientes.', 'arquivos/usuarios/vivian_lemos/04tv4a.jpg', '#ad0a0a', 94593160),
(7, 'fornecedor', 'GILBERTO_LIMA', 'gilberto@gmail.com', 'secret', 'mg', 'juiz de fora', 1, '01', 2011, 'Qual o seu ramo?', '(31)89696-9490', NULL, 'Digite aqui o que voce quer exibir no seu perfil para seus clientes.', 'arquivos/empresas/gilberto_lima/Brabham_BMW_BT54_1985.jpg', '#ad0a0a', 74213160),
(11, 'usuario', 'FELIX_MENEGUETTI', 'meneguetti@gmail.com', 'secret', 'sp', 'guarulhos', 1, '01', 2011, 'Qual o seu ramo?', '(11)98688-1332', 'O que vocÃª gosta de usar?', 'Digite aqui o que voce quer exibir no seu perfil p...', 'arquivos/usuarios/felix_meneguetti/clovis_blue.jpg', '#ad0a0a', 64218960);

-- --------------------------------------------------------

--
-- Estrutura da tabela `_users`
--

CREATE TABLE IF NOT EXISTS `_users` (
  `codigo` int(255) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(20) DEFAULT NULL,
  `tituloPerfil` varchar(60) DEFAULT NULL,
  `email` varchar(60) DEFAULT NULL,
  `senha` varchar(30) DEFAULT NULL,
  `estado` varchar(2) DEFAULT NULL,
  `cidade` varchar(40) DEFAULT NULL,
  `telefone` varchar(255) DEFAULT NULL,
  `dia` int(2) DEFAULT NULL,
  `mes` varchar(20) DEFAULT NULL,
  `ano` int(4) DEFAULT NULL,
  `atividades` varchar(255) DEFAULT NULL,
  `hobby` varchar(255) DEFAULT NULL,
  `textoPerfil` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `imagem` varchar(255) CHARACTER SET latin1 COLLATE latin1_bin DEFAULT NULL,
  `background` varchar(255) DEFAULT NULL,
  `CEP` int(10) NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Extraindo dados da tabela `_users`
--

INSERT INTO `_users` (`codigo`, `tipo`, `tituloPerfil`, `email`, `senha`, `estado`, `cidade`, `telefone`, `dia`, `mes`, `ano`, `atividades`, `hobby`, `textoPerfil`, `status`, `imagem`, `background`, `CEP`) VALUES
(1, 'usuario', 'TIBURCIO_GOMES', 'tiburcio@uol.com.br', '123', 'sp', 'osasco', NULL, 1, '01', 2011, 'O que voce faz?', 'De que voce gosta?', 'Digite aqui o que voce quer exibir no seu perfil.', 'casado(a)', 'arquivos/usuarios/tiburcio_gomes/Roberto_Joaquim_do_Barro.jpg', '#ad0a0a', 0),
(2, 'usuario', 'FELIX_MENEGUETTI', 'meneguetti@gmail.com', 'secret', 'sp', 'guarulhos', '(11)98688-1332', 1, '01', 2011, 'Qual o seu ramo?', 'O que vocÃª gosta de usar?', 'Digite aqui o que voce quer exibir no seu perfil para seus clientes.', NULL, 'arquivos/usuarios/felix_meneguetti/clovis_blue.jpg', '#ad0a0a', 0),
(3, 'usuario', 'SOLANGE_CALIGUTI', 'caliguti@gmail.com', 'secret', 'go', 'goiania', '(62)98210-6573', 1, '01', 2011, 'Qual o seu ramo?', 'O que vocÃª gosta de usar?', 'Digite aqui o que voce quer exibir no seu perfil para seus clientes.', NULL, 'arquivos/usuarios/solange_caliguti/bdbfd.jpg', '#ad0a0a', 0),
(4, 'usuario', 'PAULA_EDSON', 'paula@gmail.com', 'secret', 'se', 'aracaju', '(75)99877-0992', 1, '01', 2011, 'Qual o seu ramo?', 'O que vocÃª gosta de usar?', 'Digite aqui o que voce quer exibir no seu perfil para seus clientes.', NULL, 'arquivos/usuarios/paula_edson/0,,13258355-EX,00.jpg', '#ad0a0a', 0),
(6, 'usuario', 'PAULA_EDSON', 'paula@gmail.com', 'secret', 'se', 'aracaju', '(75)99877-0992', 1, '01', 2011, 'Qual o seu ramo?', 'O que vocÃª gosta de usar?', 'Digite aqui o que voce quer exibir no seu perfil para seus clientes.', NULL, 'arquivos/usuarios/paula_edson/0,,13258355-EX,00.jpg', '#ad0a0a', 0),
(7, 'usuario', 'DENISE_WAAK', 'denise@gmail.com', 'secret', 'sc', 'joinville', '(47)9983-93884', 1, '01', 2011, 'Qual o seu ramo?', 'O que vocÃª gosta de usar?', 'Digite aqui o que voce quer exibir no seu perfil para seus clientes.', NULL, 'arquivos/usuarios/denise_waak/15.jpg', '#ad0a0a', 0),
(8, 'usuario', 'VIVIAN_LEMOS', 'vivian@gmail.com', 'secret', '>>', 'maceio', '(82)99945-6667', 1, '01', 2011, 'Qual o seu ramo?', 'O que vocÃª gosta de usar?', 'Digite aqui o que voce quer exibir no seu perfil para seus clientes.', NULL, 'arquivos/usuarios/vivian_lemos/04tv4a.jpg', 'black', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `_vitrine`
--

CREATE TABLE IF NOT EXISTS `_vitrine` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `vendedor` varchar(50) NOT NULL,
  `nomeProduto` varchar(255) NOT NULL,
  `Descricao` varchar(255) NOT NULL,
  `imagem` varchar(255) CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `url` varchar(255) NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `_vitrine`
--

INSERT INTO `_vitrine` (`codigo`, `vendedor`, `nomeProduto`, `Descricao`, `imagem`, `url`) VALUES
(1, 'denise_waak', 'notebook', 'vendo por 500', 'acervos/DENISE_WAAK/ACF14DC.jpg', 'http://www.facebook.com/denise'),
(2, 'denise_waak', 'PC', 'PC turbo 1000 reais', 'acervos/DENISE_WAAK/foto8.jpg', 'http://www.facebook.com/denise');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
