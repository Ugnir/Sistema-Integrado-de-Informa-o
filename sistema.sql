-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 21-Jan-2019 às 05:45
-- Versão do servidor: 5.7.17
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sgp`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `aprovadas`
--

CREATE TABLE `aprovadas` (
  `numOM` varchar(255) CHARACTER SET utf8 NOT NULL,
  `txtOM` varchar(255) CHARACTER SET utf8 NOT NULL,
  `operOM` varchar(255) CHARACTER SET utf8 NOT NULL,
  `txtOPER` varchar(255) CHARACTER SET utf8 NOT NULL,
  `centrabOM` varchar(255) CHARACTER SET utf8 NOT NULL,
  `localOM` varchar(255) CHARACTER SET utf8 NOT NULL,
  `ptOM` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `reqOM` varchar(255) CHARACTER SET utf8 NOT NULL,
  `gerOM` varchar(255) CHARACTER SET utf8 NOT NULL,
  `dataOM` date NOT NULL,
  `msgOM` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `atividades`
--

CREATE TABLE `atividades` (
  `codprog` int(11) NOT NULL,
  `num_om` varchar(255) CHARACTER SET utf8 NOT NULL,
  `denominacao` varchar(255) CHARACTER SET utf8 NOT NULL,
  `txtbreve` varchar(255) CHARACTER SET utf8 NOT NULL,
  `Tare` varchar(255) CHARACTER SET utf8 NOT NULL,
  `textoTarefa` varchar(255) CHARACTER SET utf8 NOT NULL,
  `id_centrab` int(11) NOT NULL,
  `local` varchar(255) CHARACTER SET utf8 NOT NULL,
  `dataAtividade` date DEFAULT NULL,
  `numlibra` varchar(255) CHARACTER SET utf8 NOT NULL,
  `numpt` varchar(255) CHARACTER SET utf8 NOT NULL,
  `requisitante` varchar(255) CHARACTER SET utf8 NOT NULL,
  `horaexec` int(11) DEFAULT NULL,
  `gerencial` varchar(255) CHARACTER SET utf8 NOT NULL,
  `finalizada` tinyint(4) NOT NULL DEFAULT '0',
  `desativado` tinyint(4) NOT NULL DEFAULT '0',
  `status` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `giop` varchar(255) DEFAULT NULL,
  `justificativa` varchar(255) NOT NULL,
  `justificativa_detalhe` varchar(255) NOT NULL,
  `criticidadept` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '0',
  `continuacaoServ` varchar(4) CHARACTER SET utf8 DEFAULT NULL,
  `observacao` varchar(255) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `atividades`
--

INSERT INTO `atividades` (`codprog`, `num_om`, `denominacao`, `txtbreve`, `Tare`, `textoTarefa`, `id_centrab`, `local`, `dataAtividade`, `numlibra`, `numpt`, `requisitante`, `horaexec`, `gerencial`, `finalizada`, `desativado`, `status`, `giop`, `justificativa`, `justificativa_detalhe`, `criticidadept`, `continuacaoServ`, `observacao`) VALUES
(1, '2015842256', 'Cj Tramo A', 'tramo abc', '20', 'Desmontagem de andaime e Pau de carga pa', 22, 'MOD 1', '2018-12-31', '808343', '11922838', '70438955', 8, 'CeM', 0, 0, '', NULL, '', '', '0', NULL, NULL),
(2, '2015842256', 'Cj Tramo A', 'Passag. val LIT-123001/09/19 tramo A CMR', '20', 'Desmontagem de andaime e Pau de carga pa', 22, 'MOD 1', '2018-12-31', '808343', '11.646.168 B', '70438955', 8, 'CeM', 1, 0, '', NULL, '', '', '0', NULL, NULL),
(3, '2015842256', 'Cj Tramo A', 'Passag. val LIT-123001/09/19 tramo A CMR', '20', 'Desmontagem de andaime e Pau de carga pa', 22, 'MOD 1', '2019-01-01', '808343', '11.646.168 ', '1231312312', 8, 'CeM', 1, 0, 'Emitida', 'Edgar', '', '', 'amarela', NULL, 'ptt impressa dia 23'),
(4, '2017454142', 'VE-P-2123119/20B-01 Ventilador Resfr Gás', 'Prv VE-P-2123119/20B-01 Venti Resfr Gás', '45', 'Desmontagem de Andaime', 22, 'MOD 1', '2019-03-06', '803394', '11.566.586 B', '1234', 12, 'CeM', 1, 0, 'Emitida', NULL, '', '', 'vermelha', NULL, NULL),
(6, '2017876865', 'LIT-1230011 Tran In Niv Tramo C', 'SUBSTITUIR VÁLV. LIT-1230011 COL.CAMARUP', '20', 'Desmontagem de andaime PAU de CARGA', 22, '', '2018-12-05', '805598', '11.615.493 B', '70438955', 8, 'CeM', 0, 0, '', NULL, '', '', '0', NULL, NULL),
(7, '2017989385', 'PSV-6315501 Válv Seg Alivio EF-41501205', 'PSV-6315501 - Válv a montante', '30', 'Desmontagem de andaime p/ acesso a PSV', 12, '', '2018-12-03', '801025', '11.550.204 B', '70438955', 12, 'MI', 1, 0, 'NE', 'Bruna', '', '', '0', NULL, NULL),
(8, '2017989385', 'PSV-6315501 Válv Seg Alivio EF-41501205', 'PSV-6315501 - Válv a montante', '30', 'Desmontagem de andaime p/ acesso a PSV', 12, '', '2018-12-04', '801025', '11.550.204 B', '70438955', 12, 'MI', 1, 0, '', NULL, '', '', '0', NULL, NULL),
(9, '2017989385', 'PSV-6315501 Válv Seg Alivio EF-41501205', 'PSV-6315501 - Válv a montante', '30', 'Desmontagem de andaime p/ acesso a PSV', 12, '', '2018-12-05', '801025', '11.550.204 B', '70438955', 12, 'MI', 1, 0, '', NULL, '', '', '0', NULL, NULL),
(10, '2017989385', 'PSV-6315501 Válv Seg Alivio EF-41501205', 'PSV-6315501 - Válv a montante', '30', 'Desmontagem de andaime p/ acesso a PSV', 12, '', '2018-12-06', '801025', '11.550.204 B', '70438955', 12, 'MI', 1, 0, '', NULL, '', '', '0', NULL, NULL),
(11, '2018005134', 'Cj Esfera Armaz GLP EF-41501205', 'PRV Válvulas da esfera EF-41501205', '30', 'DESMONTAGEM DE ANDAIME', 13, '', '2018-12-04', '0', '11.538.964 B', '70438955', 20, 'ISUP', 1, 0, '', NULL, '', '', '0', NULL, NULL),
(12, '2017398366', 'PSV-21237051A Válv Seg Alivio T-2123703', 'Ret. p/ calibrar PSV-21237051-A (Plano).', '60', 'Desmontagem de andaime Balancin', 13, '', '2018-12-05', '0', '448/2018-01', '', 24, 'ISUP', 1, 0, '', NULL, '', '', '0', NULL, NULL),
(13, '2017398366', 'PSV-21237051A Válv Seg Alivio T-2123703', 'Ret. p/ calibrar PSV-21237051-A (Plano).', '60', 'Desmontagem de andaime Balancin', 13, '', '2018-12-06', '0', '448/2018-01', '', 24, 'ISUP', 1, 0, '', NULL, '', '', '0', NULL, NULL),
(14, '2017398366', 'PSV-21237051A Válv Seg Alivio T-2123703', 'Ret. p/ calibrar PSV-21237051-A (Plano).', '60', 'Desmontagem de andaime Balancin', 13, '', '2018-12-07', '0', '448/2018-01', '', 24, 'ISUP', 1, 0, '', NULL, '', '', '0', NULL, NULL),
(15, '2017398366', 'PSV-21237051A Válv Seg Alivio T-2123703', 'Ret. p/ calibrar PSV-21237051-A (Plano).', '60', 'Desmontagem de andaime Balancin', 13, '', '2018-12-08', '0', '448/2018-01', '', 24, 'ISUP', 1, 0, '', NULL, '', '', '0', NULL, NULL),
(16, '2017398366', 'PSV-21237051A Válv Seg Alivio T-2123703', 'Ret. p/ calibrar PSV-21237051-A (Plano).', '60', 'Desmontagem de andaime Balancin', 13, '', '2018-12-09', '0', '448/2018-01', '', 24, 'ISUP', 1, 0, '', NULL, '', '', '0', NULL, NULL),
(17, '2017398366', 'PSV-21237051A Válv Seg Alivio T-2123703', 'Ret. p/ calibrar PSV-21237051-A (Plano).', '60', 'Desmontagem de andaime Balancin', 13, '', '2018-12-10', '0', '448/2018-01', '', 24, 'ISUP', 1, 0, '', NULL, '', '', '0', NULL, NULL),
(18, '2017071494', 'FV-21231101 Válvula Vazão V-2123103', 'FFIC-2123101 controlador Travando', '20', 'FFIC-2123101 controlador Travando', 13, '', '2019-05-17', '0', '11725414', '1231312', 2, 'ISUP', 1, 0, 'Emitida', NULL, '', '', 'vermelha', NULL, NULL),
(19, '2017859590', 'Cj Panéis Instr Automação K-51', 'Atividade Cj Panéis Instr Automação K-51', '20', 'Sanar Falha Cartão SDV144', 13, '', '2018-12-03', '0', '', 'A0I1', 16, 'ISUP', 1, 0, 'Emitida', NULL, '', '', '0', NULL, NULL),
(20, '2017859590', 'Cj Panéis Instr Automação K-51', 'Atividade Cj Panéis Instr Automação K-51', '20', 'Sanar Falha Cartão SDV144', 13, '', '2018-12-04', '0', '', 'A0I1', 16, 'ISUP', 1, 0, '', NULL, '', '', '0', NULL, NULL),
(21, '2017859590', 'Cj Panéis Instr Automação K-51', 'Atividade Cj Panéis Instr Automação K-51', '20', 'Sanar Falha Cartão SDV144', 13, '', '2018-12-05', '0', '', 'A0I1', 16, 'ISUP', 1, 0, '', NULL, '', '', '0', NULL, NULL),
(22, '2017859590', 'Cj Panéis Instr Automação K-51', 'Atividade Cj Panéis Instr Automação K-51', '20', 'Sanar Falha Cartão SDV144', 13, '', '2018-12-06', '0', '', 'A0I1', 16, 'ISUP', 1, 0, '', NULL, '', '', '0', NULL, NULL),
(23, '2017859590', 'Cj Panéis Instr Automação K-51', 'Atividade Cj Panéis Instr Automação K-51', '20', 'Sanar Falha Cartão SDV144', 13, '', '2018-12-07', '0', '', 'A0I1', 16, 'ISUP', 1, 0, '', NULL, '', '', '0', NULL, NULL),
(24, '2017859590', 'Cj Panéis Instr Automação K-51', 'Atividade Cj Panéis Instr Automação K-51', '20', 'Sanar Falha Cartão SDV144', 13, '', '2018-12-08', '0', '', 'A0I1', 16, 'ISUP', 1, 0, '', NULL, '', '', '0', NULL, NULL),
(25, '2017859590', 'Cj Panéis Instr Automação K-51', 'Atividade Cj Panéis Instr Automação K-51', '20', 'Sanar Falha Cartão SDV144', 15, '', '2018-12-04', '0', '', 'A0I1', 16, 'MI', 1, 0, '', NULL, '', '', '0', NULL, NULL),
(26, '2018038451', 'Painel FCS0205 - Off-Site', 'Verificar sinal falha das fontes FCS0205', '10', 'Verificar sinal falha das fontes FCS0205', 15, '', '2018-12-04', '0', '11688955B', 'KI5Y', 8, 'MI', 1, 0, '', NULL, '', '', '0', NULL, NULL),
(27, '2018048414', 'Moto Bomba Jockey B-364602001', 'B-364602001 C/ FALHA NA PARTIDA (JOCKEY)', '10', 'B-364602001 C/ FALHA NA PARTIDA (JOCKEY)', 15, '', '2018-12-05', '0', '11.670.238 B', 'A0I1', 8, 'MI', 0, 0, '', NULL, '', '', '0', NULL, NULL),
(28, '2017233263', 'B-2123701A Bba Reflux Transf Torre Desbu', 'B-2123701A Válvula manual pesada', '40', 'Reinstalar Vlv man. a jus. da B-2123701A', 9, '', '2018-12-04', '809146', '11.668.489A', 'C2FP', 5, 'MI', 1, 0, '', NULL, '', '', '0', NULL, NULL),
(29, '2017515649', 'B-2123701B Bba Reflux Transf Torre Desbu', 'B-2123701B gaseificando', '10', 'B-2123701B gaseificando', 9, '', '2018-12-03', '809152', '11681483B', 'C2FP', 2, 'MI', 1, 0, 'Cancelada', 'Clecio', '', 'Falta de recurso/material', '0', NULL, NULL),
(30, '2017515649', 'B-2123701B Bba Reflux Transf Torre Desbu', 'B-2123701B gaseificando', '10', 'B-2123701B gaseificando', 9, '', '2018-12-04', '809152', '11681483B', 'C2FP', 2, 'MI', 1, 0, 'Cancelada', NULL, '', '', '0', NULL, NULL),
(31, '2017515649', 'B-2123701B Bba Reflux Transf Torre Desbu', 'B-2123701B gaseificando', '10', 'B-2123701B gaseificando', 9, '', '2018-12-05', '809152', '11681483B', 'C2FP', 2, 'MI', 1, 0, 'Cancelada', NULL, '', '', '0', NULL, NULL),
(32, '2017515649', 'B-2123701B Bba Reflux Transf Torre Desbu', 'B-2123701B gaseificando', '10', 'B-2123701B gaseificando', 9, '', '2018-12-06', '809152', '11681483B', 'C2FP', 2, 'MI', 1, 0, 'Cancelada', NULL, '', '', '0', NULL, NULL),
(33, '2017515649', 'B-2123701B Bba Reflux Transf Torre Desbu', 'B-2123701B gaseificando', '10', 'B-2123701B gaseificando', 9, '', '2018-12-07', '809152', '11681483B', 'C2FP', 2, 'MI', 1, 0, 'Cancelada', NULL, '', '', '0', NULL, NULL),
(34, '2017515649', 'B-2123701B Bba Reflux Transf Torre Desbu', 'B-2123701B gaseificando', '10', 'B-2123701B gaseificando', 9, '', '2018-12-08', '809152', '11681483B', 'C2FP', 2, 'MI', 1, 0, 'Cancelada', NULL, '', '', '0', NULL, NULL),
(35, '2017515649', 'B-2123701B Bba Reflux Transf Torre Desbu', 'B-2123701B gaseificando', '10', 'B-2123701B gaseificando', 9, '', '2018-12-09', '809152', '11681483B', 'C2FP', 2, 'MI', 1, 0, 'Cancelada', NULL, '', '', '0', NULL, NULL),
(36, '2017515649', 'B-2123701B Bba Reflux Transf Torre Desbu', 'B-2123701B gaseificando', '10', 'B-2123701B gaseificando', 9, '', '2018-12-10', '809152', '11681483B', 'C2FP', 2, 'MI', 1, 0, 'Cancelada', NULL, '', '', '0', NULL, NULL),
(37, '2017515649', 'B-2123701B Bba Reflux Transf Torre Desbu', 'B-2123701B gaseificando', '10', 'B-2123701B gaseificando', 9, '', '2018-12-11', '809152', '11681483B', 'C2FP', 2, 'MI', 1, 0, 'Cancelada', NULL, '', '', '0', NULL, NULL),
(38, '2017515649', 'B-2123701B Bba Reflux Transf Torre Desbu', 'B-2123701B gaseificando', '10', 'B-2123701B gaseificando', 9, '', '2018-12-12', '809152', '11681483B', 'C2FP', 2, 'MI', 1, 0, 'Cancelada', NULL, '', '', '0', NULL, NULL),
(39, '2017515649', 'B-2123701B Bba Reflux Transf Torre Desbu', 'B-2123701B gaseificando', '10', 'B-2123701B gaseificando', 9, '', '2019-01-14', '809152', '222222', '123131', 2, 'MI', 1, 0, 'NE', NULL, '', '', 'amarela', NULL, NULL),
(40, '2017515649', 'B-2123701B Bba Reflux Transf Torre Desbu', 'B-2123701B gaseificando', '10', 'B-2123701B gaseificando', 9, '', '2018-12-14', '809152', '11681483B', 'C2FP', 2, 'MI', 1, 0, 'Cancelada', NULL, '', '', '0', NULL, NULL),
(41, '2017515649', 'B-2123701B Bba Reflux Transf Torre Desbu', 'B-2123701B gaseificando', '10', 'B-2123701B gaseificando', 9, '', '2018-12-15', '809152', '11681483B', 'C2FP', 2, 'MI', 1, 0, 'Cancelada', NULL, '', '', '0', NULL, NULL),
(42, '2017526735', 'B-1238150A Bomba Transferência V-1238150', 'Prv B-1238150A Bomba Transfer V-1238150', '10', 'Manutenção preventiva na B-1238150A', 9, '', '2018-12-03', '815473', 'BRANCA', 'C2FP', 2, 'MI', 1, 0, 'Aguardando', NULL, '', '', '0', NULL, NULL),
(43, '2017528767', 'B-1238150B Bomba Transferência V-1238150', 'Prv B-1238150B Bomba Transfer V-1238150', '10', 'PRM Preventiva Manutenção 1A (336 Dias)', 9, '', '2018-12-03', '815655', 'BRANCA', 'C2FP', 2, 'MI', 1, 0, '', NULL, '', '', '0', NULL, NULL),
(44, '2017600847', 'B-2123101A Bomba Centrifuga de C2+', 'B-2123101A manual não fecha', '10', 'Substituir Válv. descarga da B-2123101A', 9, '', '2018-12-06', '796205', '11660136-A', 'C2FP', 8, 'MI', 1, 0, '', NULL, '', '', '0', NULL, NULL),
(45, '2017641773', 'PSV-21237002B Válv Seg Alivio T-2123702', 'Ret. PSV-21237002B p/ manutenir,pintar e', '10', 'Ret. p/ manutenir,pintar e calibrar.UTGC', 9, '', '2018-12-03', '787607', '11.394.624 A', 'C2FP', 4, 'MI', 1, 0, 'Emitida', NULL, '', '', '0', NULL, NULL),
(46, '2017641773', 'PSV-21237002B Válv Seg Alivio T-2123702', 'Ret. PSV-21237002B p/ manutenir,pintar e', '10', 'Ret. p/ manutenir,pintar e calibrar.UTGC', 9, '', '2018-12-04', '787607', '11.394.624 A', 'C2FP', 4, 'MI', 1, 0, 'Emitida', NULL, '', '', '0', NULL, NULL),
(47, '2017641773', 'PSV-21237002B Válv Seg Alivio T-2123702', 'Ret. PSV-21237002B p/ manutenir,pintar e', '10', 'Ret. p/ manutenir,pintar e calibrar.UTGC', 9, '', '2018-12-05', '787607', '11.394.624 A', 'C2FP', 4, 'MI', 1, 0, 'Emitida', NULL, '', '', '0', NULL, NULL),
(48, '2017641773', 'PSV-21237002B Válv Seg Alivio T-2123702', 'Ret. PSV-21237002B p/ manutenir,pintar e', '10', 'Ret. p/ manutenir,pintar e calibrar.UTGC', 9, '', '2018-12-06', '787607', '11.394.624 A', 'C2FP', 4, 'MI', 1, 0, 'Emitida', NULL, '', '', '0', NULL, NULL),
(49, '2017641773', 'PSV-21237002B Válv Seg Alivio T-2123702', 'Ret. PSV-21237002B p/ manutenir,pintar e', '10', 'Ret. p/ manutenir,pintar e calibrar.UTGC', 9, '', '2018-12-07', '787607', '11.394.624 A', 'C2FP', 4, 'MI', 1, 0, 'Emitida', NULL, '', '', '0', NULL, NULL),
(50, '2017676411', 'Moto Compressor C-2123702B', 'C-2123702-B limpeza skid - Vaz óleo', '10', 'Fazer limpeza do skid', 9, '', '2018-12-04', '0', '11.537.647 B', 'C2FP', 3, 'MI', 1, 0, '', NULL, '', '', '0', NULL, NULL),
(51, '2017677942', 'PSV-1236201A Vávula Segurança V-1236001', 'Ret. manut./calibrar PSV-1236201A /UTGC', '40', 'Reinstalação da PSV-1236201A', 9, '', '2018-12-06', '795101', '11.414.852A', 'C2FP', 4, 'MI', 0, 0, '', NULL, '', '', '0', NULL, NULL),
(52, '2017707001', 'FV-21231052 Válv Contr Vz Saí Cx Fria', 'FV-21231052 Sub. Val. CIWAL 2\" a jusante', '10', 'FV-21231052 Sub. Val. CIWAL 2\" a jusante', 9, '', '2018-12-05', '796205', '11724171-A', 'C2FP', 4, 'MI', 0, 0, '', NULL, '', '', '0', NULL, NULL),
(53, '2017727603', 'PCV-21231499 Vál Cont Pres Ign F-2123102', 'PCV 21231499 - Sub Val CIWAL 2\" a montan', '10', 'PCV-21231499 - Sub Val CIWAL 2\" a montan', 9, '', '2018-12-05', '796205', '11724159-A', 'C2FP', 8, 'MI', 0, 0, '', NULL, '', '', '0', NULL, NULL),
(54, '2017752315', 'B-2123104B Bba Circulação Óleo Térmico B', 'B-2123104b manual vazando na gaxeta', '10', 'B-2123104b manual vazando na gaxeta', 9, '', '2018-12-04', '804898', '11.681.694A', 'C2FP', 3, 'MI', 1, 0, '', NULL, '', '', '0', NULL, NULL),
(55, '2017762185', 'B-2123701B Bba Reflux Transf Torre Desbu', 'B-2123701B LIMPEZA DE FILTRO', '10', 'Fazer limpeza do elemento do filtro \"Y\"', 9, '', '2018-12-03', '809152', '11.668.789A', 'C2FP', 2, 'MI', 1, 0, '', NULL, '', '', '0', NULL, NULL),
(56, '2017816298', 'PSV-21231005B Vál Segurança V-2123102B', 'Ret. manut./calibrar PSV-21231005-B/UTGC', '10', 'Ret. manut./calibrar PSV-21231005-B/UTGC', 23, '', '2018-12-03', '812003', '11725208-A', 'C2FP', 6, 'Inspeção', 1, 0, '', NULL, '', '', '0', NULL, NULL),
(57, '2017847252', 'Cj Vaso de Carga de Gás Natural', 'Atividades Vaso V-2123101', '30', 'Retirar/Reinstalar PSV-21231001A/B', 9, '', '2018-12-05', '796205', '11.524.988 A', 'C2FP', 16, 'MI', 0, 0, '', NULL, '', '', '0', NULL, NULL),
(58, '2017902180', 'PSV-21237104B Valvula Segur P-2123710B', 'Ret. p/ calibrar PSV-21237104-B (Plano).', '20', 'Reinstalar PSV-21237104B', 9, '', '2018-12-03', '798274', '11508668A', 'C2FP', 3, 'MI', 1, 0, '', NULL, '', '', '0', NULL, NULL),
(59, '2018258448', 'B-360301C Bomba Água Combate Incêndio', 'Prv_SO  Bomba B-360301C', '30', 'Preventiva Mecânica 3M (84 Dias)', 9, '', '2018-12-03', '742427', '154132', 'C2FP', 1, 'MI', 1, 0, '', NULL, '', '', 'amarela', 'nao', NULL),
(60, '2018258451', 'MC-B-360301C Mot Bba Comb Incênd', 'Prv_SO MC-B-360301C Mot Bba Comb Incênd', '30', 'Preventiva Mecânica 3M (84 Dias)', 9, '', '2018-12-03', '742427', '1231', 'C2FP', 8, 'MI', 1, 0, '', NULL, '', '', 'amarela', NULL, NULL),
(61, '2018287411', 'Cj Talha 2t Galpão Bba Ampliação K-15', 'Preservar correntes.', '10', 'Preservar correntes.', 9, '', '2018-12-04', '0', 'B', 'C2FP', 4, 'MI', 1, 0, '', NULL, '', '', '0', NULL, NULL),
(62, '2018301466', 'B-360301A Bomba Água Combate Incêndio', 'Prv_SO  Bomba B-360301A (ordem macro mec', '30', 'Preventiva Mecânica 3M (84 Dias)', 9, '', '2018-12-04', '742415', 'BRANCA', 'C2FP', 9, 'MI', 1, 0, '', NULL, '', '', '0', NULL, NULL),
(63, '2018301468', 'MC-B-360301A Mot Bba Comb Incênd', 'Prv_SO MC-B-360301A Mot Bba Comb Incênd', '30', 'Preventiva Mecânica 3M (84 Dias)', 9, '', '2018-12-04', '742403', '11.593.108 B', 'C2FP', 8, 'MI', 1, 0, '', NULL, '', '', '0', NULL, NULL),
(64, '2018337739', 'B-1238101B Bomba Circulação P-1238101', 'Prv_SO B-1238101B Bomba Circulação B', '20', 'PRM Prenvetiva Mecânica 6M (168 Dias)', 9, '', '2018-12-04', '814225', 'AMARELA', 'C2FP', 8, 'MI', 1, 0, '', NULL, '', '', '0', NULL, NULL),
(65, '2018361302', 'C-UC-513401A Compressor Ar A', 'Prv C-UC-513401-A Compresr Ar A', '7', 'Preventiva Mecânica 1000 Horas', 9, '', '2018-12-04', '807572', 'BRANCA', 'C2FP', 6, 'MI', 1, 0, '', NULL, '', '', '0', NULL, NULL),
(66, '2018361308', 'M-C-2123103B Gás Regeneração C-2123103B', 'Prv M-C-2123103B Relub Gás Regeneração', '10', 'PEV. 2000H RELUB', 9, '', '2018-12-07', '0', 'BRANCA', 'C2FP', 0, 'MI', 0, 0, '', NULL, '', '', '0', NULL, NULL),
(67, '2018483246', 'TC-3123102B Turbocompressor', 'Det-R Mecânica 02 UPGN2', '10', 'Ronda Mecânica (Mensal) TC-3123102B', 9, '', '2019-11-29', '796464', '666666', '1231313', 5, 'MI', 1, 0, 'Emitida', NULL, '', '', 'vermelha', NULL, NULL),
(68, '2018483247', 'TC-3123102A Turbocompressor', 'Det-R Mecânica 02 UPGN2', '10', 'Ronda Mecânica (Mensal) TC-3123102A', 9, '', '2018-12-06', '796463', 'BRANCA', 'C2FP', 5, 'MI', 0, 0, '', NULL, '', '', '0', NULL, NULL),
(69, '2018483248', 'TC-5123102A Turbocompressor', 'Det-R_SO Mecânica 02 UPGN-CAB-TBM', '10', 'Ronda Mecânica (Mensal) TC-5123102A', 9, '', '2018-12-07', '796465', 'BRANCA', 'C2FP', 5, 'MI', 0, 0, '', NULL, '', '', '0', NULL, NULL),
(70, '2018483249', 'TC-5123102B Turbocompressor', 'Det-R_SO Mecânica 02 UPGN-CAB-TBM', '10', 'Ronda Mecânica (Mensal) TC-5123102B', 9, '', '2018-12-07', '796466', 'BRANCA', 'C2FP', 5, 'MI', 1, 0, '', NULL, '', '', '0', NULL, NULL),
(71, '2018483250', 'TC-123102A Turbocompressor', 'Det-R Mecânica 02 UPGN-TBM', '10', 'Ronda Mecânica (Mensal) TC-123102A', 9, '', '2018-12-05', '796454', 'BRANCA', 'C2FP', 5, 'MI', 1, 0, '', NULL, '', '', '0', NULL, NULL),
(72, '2018483251', 'TC-123102B Turbocompressor', 'Det-R Mecânica 05 UPGN-TBM', '10', 'Ronda Mecânica (Mensal) TC-123102B', 9, '', '2018-12-05', '796458', 'BRANCA', 'C2FP', 5, 'MI', 0, 0, '', NULL, '', '', '0', NULL, NULL),
(73, '2017526693', 'PIT-1231104 Transm Indic Pres TE-123101', 'PREV PIT-1231104 TE-123101', '15', 'Retirada de instrumento para calibração', 11, '', '2018-12-03', '810529', 'A', '43317992', 1, 'MI', 1, 0, '', NULL, '', '', '0', 'nao', NULL),
(75, '2017601866', 'PSV-21231102B Válv Segurança V-2123107', 'Ret. p/ calibrar PSV-21231102-B / UTGC.', '10', 'Ret. p/ calibrar PSV-21231102B', 11, '', '2018-12-07', '814560', '8888', '43317992', 1, 'MI', 1, 0, 'Emitida', 'Jorge', '', 'xumbrega', 'branca', NULL, NULL),
(76, '2017603298', 'PSV-1231102B Válv Segurança V-123107', 'Ret. p/ calibrar PSV-1231102-B Válv Segu', '10', 'Ret. p/ calibrar PSV-1231102B', 11, '', '2018-12-07', '809670', '11.680.585 A', '43317992', 4, 'MI', 0, 0, '', NULL, '', '', '0', NULL, NULL),
(77, '2017603367', 'PSV-1231102A Válv Segurança V-123107', 'Ret. p/ calibrar PSV-1231102-A Válv Segu', '30', 'Reinstalar PSV-1231102-A', 11, '', '2018-12-07', '808992', '11.680.607 A', '43317992', 4, 'MI', 1, 0, '', NULL, '', '', '0', NULL, NULL),
(78, '2017847252', 'Cj Vaso de Carga de Gás Natural', 'Atividades Vaso V-2123101', '60', 'Reinstalar Valv manual Montante XV-21231', 14, '', '2018-12-06', '796205', '11.525.070 V', '43317992', 4, 'ISUP', 0, 0, 'Cancelada', NULL, '', 'Representante ausente', '0', NULL, NULL),
(79, '2017874183', 'FV-21231101 Válvula Vazão V-2123103', 'FV-21231101 PEQUENO VAZAMENTO', '6', 'Retirar isolamento FV-21231101', 14, '', '2018-12-05', '796205', '11723013-B', '43317992', 3, 'ISUP', 0, 0, '', NULL, '', '', '0', NULL, NULL),
(80, '2017874183', 'FV-21231101 Válvula Vazão V-2123103', 'FV-21231101 PEQUENO VAZAMENTO', '10', 'Retirar FV-21231101', 11, '', '2018-12-05', '796205', '11723093-A', '43317992', 4, 'MI', 0, 0, '', NULL, '', '', '0', NULL, NULL),
(81, '2018319973', 'XV-6311302 Válv On-Off Suc TQ-631103', 'XV-6311302 - Atuador dando passagem', '10', 'RETIRAR ATUADOR DA XV-6311302', 11, '', '2018-12-06', '814442', '11783896B', '43317992', 4, 'MI', 0, 0, 'NE', NULL, '', '', '0', NULL, NULL),
(82, '2017526746', 'RM Relé Multi Prot 3G3 PN-BCP-3360202A', 'Prv RM Relé Mult Pr 3G3 PN-BCP-3360202A', '10', 'Prv RM Relé Mult Pr 3G3 PN-BCP-3360202A', 1, '', '2018-12-04', '733219', '11.811.184V', '40304745', 4, 'MI', 0, 0, '', NULL, '', '', '0', NULL, NULL),
(83, '2017527505', 'M-B-C-2123103A-01 Moto Bomba C-2123103A', 'Prev M-B-C-2123103A-01 Moto Bomba', '10', 'Preventiva Elétrica 2A (672 Dias)', 2, '', '2018-12-03', '0', 'B', '40304745', 2, 'MI', 1, 0, '', NULL, '', '', '0', NULL, NULL),
(84, '2017528791', 'RM Relé Multi Prot 9G2 PN-BCP-3360202B', 'Prv RM Relé Mult Pr 9G2 PN-BCP-3360202B', '10', 'PREVENTIVA ELÉTRICA relé 4 ANOS', 1, '', '2018-12-05', '733220', '11.809.718V', '40304745', 4, 'MI', 1, 0, '', NULL, '', '', '0', NULL, NULL),
(85, '2017528854', 'RM Relé Multi Prot 4G3 PN-BCP-2360201A', 'Prv RM Relé Mul Prot 4G3 PN-BCP-2360201A', '10', 'Prv RM Relé Mul Prot 4G3 PN-BCP-2360201A', 1, '', '2018-12-07', '733143', 'BRANCA', '40304745', 4, 'MI', 0, 0, '', NULL, '', '', '0', NULL, NULL),
(86, '2017529692', 'PL-123101A PN Iluminação Normal UPCGN', 'P-123114 Substit/adequação de luminárias', '10', 'P-123114 Substit/adequação de luminárias', 2, '', '2018-12-07', '750862', '11696245B', '40304745', 20, 'MI', 0, 0, '', NULL, '', '', '0', NULL, NULL),
(87, '2017711707', 'PLE-3123701 Painel Iluminação Emerg', 'UPCGNIII-Luminárias galpão comp em falha', '10', 'UPCGN III-Luminárias galpão comp em falh', 2, '', '2018-12-03', '771068', '11694036B', '40304745', 16, 'MI', 1, 0, '', NULL, '', '', '0', NULL, NULL),
(88, '2017731124', 'Motor de Translação da Ponte TN-123101', 'Prv Motor de Transl da Ponte TN-123101', '20', 'PREVENTIVA ELÉTRICA 2A', 2, '', '2018-12-04', '731692', 'BRANCA', '40304745', 8, 'MI', 1, 0, '', NULL, '', '', '0', NULL, NULL),
(89, '2017940702', 'G&E/ES - Ativo Processam. Espírito Santo', 'UPGNIII-Luminárias dos vasos queimadas', '10', 'UPGNIII-Luminárias dos vasos queimadas', 2, '', '2018-12-07', '750015', '11657837 B', '40304745', 12, 'MI', 0, 0, '', NULL, '', '', '0', NULL, NULL),
(91, '2018301466', 'B-360301A Bomba Água Combate Incêndio', 'Prv_SO  Bomba B-360301A (ordem macro mec', '40', 'Preventiva Mecânica 3M (84 Dias)', 2, '', '2018-12-04', '742415', 'BRANCA', '40304745', 9, 'MI', 0, 0, '', NULL, '', '', '0', NULL, NULL),
(92, '2016305307', 'PI-21231255 Indação de Pressão T-2123102', 'PI-21231255 sem indicação', '10', 'PI-21231255 sem indicação', 5, '', '2018-12-03', '0', '1243/2017-2', '43673347', 2, 'MI', 1, 0, '', NULL, '', '', '0', NULL, NULL),
(93, '2016305307', 'PI-21231255 Indação de Pressão T-2123102', 'PI-21231255 sem indicação', '40', 'PI-21231255 sem indicação', 5, '', '2018-12-06', '0', '1243/2017-2', '43673347', 2, 'MI', 0, 0, '', NULL, '', '', '0', NULL, NULL),
(94, '2016931396', 'FIT-1231801C Transm Indic Vazão F-123101', 'FIT-1231801C - Visor Apagado', '10', 'FIT-1231801C - RETIRAR', 5, '', '2018-12-06', '761169', '11751395B', '43673347', 1, 'MI', 0, 0, '', NULL, '', '', '0', NULL, NULL),
(95, '2016931396', 'FIT-1231801C Transm Indic Vazão F-123101', 'FIT-1231801C - Visor Apagado', '30', 'FIT-1231801C - REINSTALAR', 5, '', '2018-12-07', '761169', '11.751.435B', '43673347', 1, 'MI', 0, 0, '', NULL, '', '', '0', NULL, NULL),
(96, '2016937524', 'T-2123103 Torre de Desbutanizadora', 'Subst tom impulso 1/2\" OD por 3/4\" OD', '10', 'Subst tom impulso 1/2\" OD por 3/4\" OD', 5, '', '2018-12-03', '811696', '11.753.195B', '45145558', 8, 'MI', 1, 0, '', NULL, '', '', '0', NULL, NULL),
(97, '2017323681', 'C-UC-513402B Compressor Ar B', 'C-U-513402B Temperatura Alta Elemento 01', '10', 'C-U-513402B  Substituição de perifericos', 5, '', '2018-12-03', '0', '1655/2017-10', '45145558', 8, 'MI', 1, 0, '', NULL, '', '', '0', NULL, NULL),
(98, '2017444754', 'XV-5412106 Valv On-Off 2º Estág V-360313', 'XV-5412106 - VAZAMENTO NA REGULADORA', '10', 'XV-5412106 - VAZAMENTO NA REGULADORA', 5, '', '2018-12-04', '0', 'BRANCA', '40884016', 4, 'MI', 1, 0, '', NULL, '', '', '0', NULL, NULL),
(99, '2017526547', 'XV-6315014 Válv On-Off EF-41501202', 'PRV-SO XV-6315014 VV ON-OFF EF-41501202', '10', 'Preventiva Instrumentação 1A', 5, '', '2018-12-04', '0', 'BRANCA', '40884016', 1, 'MI', 1, 0, '', NULL, '', '', '0', NULL, NULL),
(100, '2017526693', 'PIT-1231104 Transm Indic Pres TE-123101', 'PREV PIT-1231104 TE-123101', '10', 'DESABILITAR instrumento para calibração', 5, '', '2018-12-03', '810529', 'B', '43673347', 1, 'MI', 1, 0, '', 'Bruna', '', '12121', '0', NULL, NULL),
(101, '2017526693', 'PIT-1231104 Transm Indic Pres TE-123101', 'PREV PIT-1231104 TE-123101', '30', 'HABILITAR instrumento no retorno de', 5, '', '2018-12-03', '810529', 'B', '43673347', 1, 'MI', 1, 0, 'Cancelada', NULL, '', 'ABC', '0', 'sim', NULL),
(102, '2017526893', 'FIT-1237103 Transm Indic Vz F-1237103', 'PREV FIT-1237103 Transm Indic Vz F-12371', '10', 'Retirar instrumento para calibração', 5, '', '2018-12-06', '810555', 'branca', '45145558', 1, 'MI', 1, 0, '', NULL, '', '', '0', NULL, NULL),
(103, '2017526893', 'FIT-1237103 Transm Indic Vz F-1237103', 'PREV FIT-1237103 Transm Indic Vz F-12371', '30', 'Instalar Instrumento no processo', 5, '', '2018-12-06', '810555', 'branca', '45145558', 1, 'MI', 0, 0, '', NULL, '', '', '0', NULL, NULL),
(104, '2017527286', 'TC-31237825A Compressor C-3123702A', 'PREV TC-31237825A C-3123702A', '10', 'Retirar Instrumento para Calibração', 5, '', '2018-12-06', '0', 'B', '45145558', 1, 'MI', 0, 0, '', NULL, '', '', '0', NULL, NULL),
(105, '2017527286', 'TC-31237825A Compressor C-3123702A', 'PREV TC-31237825A C-3123702A', '30', 'Instalar Instrumento no processo', 5, '', '2018-12-06', '0', 'B', '45145558', 1, 'MI', 0, 0, '', NULL, '', '', '0', NULL, NULL),
(106, '2017527430', 'XV-6315368 Válv On-Off B-621003A', 'PREV XV-6315368 VÁLV ON-OFF B-621003A', '10', 'Preventiva Instrumentação 1A', 5, '', '2018-12-04', '0', 'BRANCA', '40884016', 2, 'MI', 0, 0, 'NE', NULL, '', '', '0', NULL, 'kpovkpkpsdo'),
(107, '2017527658', 'FIT-1231251 Transm Indic Vazão T-123101', 'PRV FIT-1231251 T-123101', '10', 'Retirada de instrumento', 5, '', '2018-12-06', '814907', 'B', '45145558', 1, 'MI', 1, 0, '', NULL, '', '', '0', NULL, NULL),
(108, '2017527658', 'FIT-1231251 Transm Indic Vazão T-123101', 'PRV FIT-1231251 T-123101', '30', 'Instalação do instrumento no retorno de', 5, '', '2018-12-07', '814907', 'B', '43673347', 1, 'MI', 0, 0, '', NULL, '', '', '0', NULL, NULL),
(109, '2017527738', 'LSL-3602001-B Chv Nv Mto Al V-B-360201-B', 'PRV-SO LSL-3602001-B V-B-360201-B', '5', 'Retirar instrumento para Testes', 5, '', '2018-12-03', '813145', '10191919', '43791769', 1, 'MI', 0, 0, 'Cancelada', NULL, '', 'asasa', 'vermelha', 'sim', NULL),
(110, '2017527738', 'LSL-3602001-B Chv Nv Mto Al V-B-360201-B', 'PRV-SO LSL-3602001-B V-B-360201-B', '20', 'Reinstalar instrumento', 5, '', '2019-01-23', '813145', 'BRANCA', 'sdfsd', 1, 'MI', 1, 0, '', NULL, '', 'asda', '0', 'sim', NULL),
(111, '2017528220', 'LSL-3602001A Chv Nív Mto Al V-B-360201A', 'PRV-SO LSL-3602001A V-B-360201A', '5', 'Retirar instrumento para Testes', 5, '', '2018-12-04', '814570', 'BRANCA', '43791769', 1, 'MI', 1, 0, '', NULL, '', '', '0', NULL, NULL),
(112, '2017528220', 'LSL-3602001A Chv Nív Mto Al V-B-360201A', 'PRV-SO LSL-3602001A V-B-360201A', '20', 'Reinstalar instrumento', 5, '', '2018-12-04', '814570', 'BRANCA', '43791769', 1, 'MI', 0, 0, '', NULL, '', '', '0', NULL, NULL),
(113, '2017528261', 'FIT-5410806 Trans. Indic Vz V-541001', 'PREV FIT-5410806 V-541001', '10', 'FIT-5410806 MEDIÇÃO SAÍDA DO V-541002', 5, '', '2018-12-04', '814625', 'BRANCA', '45145558', 1, 'MI', 0, 0, '', NULL, '', '', '0', NULL, NULL),
(114, '2017528261', 'FIT-5410806 Trans. Indic Vz V-541001', 'PREV FIT-5410806 V-541001', '30', 'FIT-5410806 MEDIÇÃO SAÍDA DO V-541002', 5, '', '2018-12-05', '814625', '11804714 B', '43673347', 1, 'MI', 0, 0, '', NULL, '', '', '0', NULL, NULL),
(115, '2017528292', 'XV-1230006 Vál On-Off Tramos A/B', 'Prv XV-1230006 Vál On-Off Tramos A/B', '10', 'Preventiva Instrumentação 1A', 5, '', '2018-12-05', '0', 'BRANCA', '40884016', 2, 'MI', 0, 0, '', NULL, '', '', '0', NULL, NULL),
(116, '2017528556', 'Cj Vaso Booster Pres Sel Mec B B-621002B', 'PRV-SO PIT-6210105B V-B-621002B-02B', '10', 'Retirar Instrumento para Calibração', 5, '', '2018-12-03', '814874', 'BRANCA', '45145558', 1, 'MI', 1, 0, '', NULL, '', '23232', '0', NULL, NULL),
(117, '2017528556', 'Cj Vaso Booster Pres Sel Mec B B-621002B', 'PRV-SO PIT-6210105B V-B-621002B-02B', '30', 'Instalar Instrumento no processo', 5, '', '2018-12-04', '814874', 'BRANCA', '45145558', 1, 'MI', 0, 0, '', NULL, '', '', '0', 'nao', NULL),
(118, '2017528661', 'PV-1236251 Válv Controle Pres V-1236003', 'PRV PV-1236251 VÁLV OLE PRES V-1236003', '10', 'Realizar Revisão Geral', 5, '', '2019-01-23', '0', '2132131231', 'auahuaha', 3, 'MI', 1, 0, 'Emitida', NULL, '', '', 'amarela', NULL, NULL),
(119, '2017528913', 'PN-UQ-522307 PN Unid Quim Odor UQ-522304', 'PREV PN-UQ-522307 QUIM ODOR UQ-522304', '10', 'Preventiva paínel de Automação (1A)', 5, '', '2018-12-06', '0', 'branca', '45145558', 1, 'MI', 0, 0, '', NULL, '', '', '0', NULL, NULL),
(120, '2017528918', 'PNI-AC-852001 Automação contr Ar Condic', 'PREV PNI-AC-852001 AUT CTRL AR COND.', '10', 'Preventiva paínel de Automação (1A)', 5, '', '2018-12-06', '0', 'B', '43791769', 1, 'MI', 0, 0, '', NULL, '', '', '0', NULL, NULL),
(121, '2017595495', 'PI-21231264 Indação de Pressão T-2123102', 'PRV PI-21231264 INDIC PRESS T-2123102', '10', 'Retirada de instrumento para calibração', 5, '', '2018-12-03', '795990', '11718437-B', '43673347', 1, 'MI', 1, 0, '', NULL, '', '', '0', NULL, NULL),
(124, '2017846974', 'Cj Referverdor da Desetanizadora', 'Atividades P-2123109', '60', 'Preventiva FV', 5, '', '2018-12-06', '796205', '11.742.351B', '45145558', 2, 'MI', 1, 0, '', NULL, '', '', '0', NULL, NULL),
(125, '2017846974', 'Cj Referverdor da Desetanizadora', 'Atividades P-2123109', '60', 'Preventiva FV', 5, '', '2018-12-07', '796205', '11.742.351B', '45145558', 2, 'MI', 1, 0, '', NULL, '', '', '0', NULL, NULL),
(126, '2017874183', 'FV-21231101 Válvula Vazão V-2123103', 'FV-21231101 PEQUENO VAZAMENTO', '9', 'Desabilitar FV-21231101', 5, '', '2018-12-04', '796205', '11723040-B', '45145558', 1, 'MI', 1, 0, '', NULL, '', '', '0', NULL, NULL),
(127, '2017874183', 'FV-21231101 Válvula Vazão V-2123103', 'FV-21231101 PEQUENO VAZAMENTO', '30', 'Habilitar FV-21231101', 5, '', '2018-12-05', '796205', '11723049-B', '45145558', 1, 'MI', 0, 0, '', NULL, '', '', '0', NULL, NULL),
(128, '2015842256', 'Cj Tramo A', 'tramo abc', '20', 'Desmontagem', 9, '', '2019-01-01', '8343', '11646168', 'asdasasd', NULL, '', 1, 0, NULL, NULL, '', '', '0', NULL, NULL),
(129, '2017454142', 'VE-P-2123119/20B-01 Ventilador Resfr Gás', 'Prv VE-P-2123119/20B-01 Venti Resfr Gás', '45', 'Desmontagem de Andaime', 22, '', '2019-01-06', '803394', '11.566.586 B', '123', NULL, 'CeM', 1, 0, 'Emitida', NULL, '', '', 'vermelha', NULL, NULL),
(134, '2017601866', 'PSV-21231102B Válv Segurança V-2123107', 'Ret. p/ calibrar PSV-21231102-B / UTGC.', '10', 'Ret. p/ calibrar PSV-21231102B', 11, '', '2019-01-21', '814560', '8888', 'sdsdsdsd', 1, 'MI', 1, 0, 'Emitida', 'Jorge', '', 'xumbrega', 'amarela', NULL, NULL),
(135, '2017601866', 'PSV-21231102B Válv Segurança V-2123107', 'Ret. p/ calibrar PSV-21231102-B / UTGC.', '10', 'Ret. p/ calibrar PSV-21231102B', 11, '', '2019-01-17', '814560', '8888', '123123', 1, 'MI', 1, 0, 'Emitida', 'Jorge', '', 'xumbrega', 'branca', NULL, 'teste'),
(136, '2017527738', 'LSL-3602001-B Chv Nv Mto Al V-B-360201-B', 'PRV-SO LSL-3602001-B V-B-360201-B', '5', 'Retirar instrumento para Testes', 5, '', '2018-12-04', '813145', 'BRANCA', '123', 1, 'MI', 1, 0, '', '', '', 'asdada', '0', 'sim', NULL),
(137, '2017526829', 'teste', 'teste', '10', 'teste', 9, '', '2030-11-22', '809913', 'B 11.687.178x', '41724530', 1, 'MI', 0, 0, '', NULL, '', '', 'vermelha', NULL, NULL),
(138, '2017526829', 'teste', 'teste', '10', 'teste', 9, '', '2030-11-23', '809913', 'B 11.687.178', '41724530', 1, 'MI', 0, 0, '', NULL, '', '', 'vermelha', NULL, NULL),
(139, '2017526829', 'teste', 'teste', '10', 'teste', 9, '', '2030-11-24', '809913', 'B 11.687.178', '41724530', 1, 'MI', 0, 0, '', NULL, '', '', 'vermelha', NULL, NULL),
(140, '2017526829', 'teste', 'teste', '10', 'teste', 9, '', '2030-11-25', '809913', 'B 11.687.178', '41724530', 1, 'MI', 0, 0, '', NULL, '', '', 'vermelha', NULL, NULL),
(141, '2017526829', 'teste', 'teste', '10', 'teste', 9, '', '2030-11-26', '809913', 'B 11.687.178', '41724530', 1, 'MI', 0, 0, '', NULL, '', '', '0', NULL, NULL),
(142, '2017526829', 'teste', 'teste', '10', 'teste', 9, '', '2030-11-27', '809913', 'B 11.687.178', '41724530', 1, 'MI', 0, 0, '', NULL, '', '', '0', NULL, NULL),
(143, '2017526829', 'teste', 'teste', '10', 'teste', 9, '', '2030-11-28', '809913', 'B 11.687.178', '41724530', 1, 'MI', 0, 0, '', NULL, '', '', '0', NULL, NULL),
(144, '2017526829', 'teste', 'teste', '10', 'teste', 9, '', '2030-11-29', '809913', 'B 11.687.178', '41724530', 1, 'MI', 0, 0, '', NULL, '', '', 'amarela', NULL, NULL),
(145, '2017526829', 'teste', 'teste', '10', 'teste', 9, '', '2030-11-30', '809913', 'B 11.687.178', '41724530', 1, 'MI', 0, 0, '', NULL, '', '', '0', NULL, NULL),
(146, '2017526829', 'teste', 'teste', '10', 'teste', 9, '', '2030-12-01', '809913', 'B 11.687.178', '41724530', 1, 'MI', 0, 0, '', NULL, '', '', '0', NULL, NULL),
(147, '2017526829', 'teste', 'teste', '10', 'teste', 9, '', '2030-12-02', '809913', 'B 11.687.178', '41724530', 1, 'MI', 0, 0, '', NULL, '', '', '0', NULL, NULL),
(148, '2017526829', 'teste', 'teste', '10', 'teste', 9, '', '2030-12-03', '809913', 'B 11.687.178', '41724530', 1, 'MI', 0, 0, '', NULL, '', '', '0', NULL, NULL),
(149, '2017526829', 'teste', 'teste', '10', 'teste', 9, '', '2030-12-04', '809913', 'B 11.687.178', '41724530', 1, 'MI', 0, 0, '', NULL, '', '', '0', NULL, NULL),
(150, '2017526829', 'teste', 'teste', '10', 'teste', 9, '', '2030-12-05', '809913', 'B 11.687.178', '41724530', 1, 'MI', 0, 0, '', NULL, '', '', '0', NULL, NULL),
(151, '2017526829', 'teste', 'teste', '10', 'teste', 9, '', '2030-12-06', '809913', 'B 11.687.178', '41724530', 1, 'MI', 0, 0, '', NULL, '', '', '0', NULL, NULL),
(152, '2017526829', 'teste', 'teste', '10', 'teste', 9, '', '2030-12-07', '809913', 'B 11.687.178', '41724530', 1, 'MI', 0, 0, '', NULL, '', '', '0', NULL, NULL),
(153, '2017526829', 'teste', 'teste', '10', 'teste', 9, '', '2030-12-08', '809913', 'B 11.687.178', '41724530', 1, 'MI', 0, 0, '', NULL, '', '', '0', NULL, NULL),
(154, '2017526829', 'teste', 'teste', '10', 'teste', 9, '', '2030-12-09', '809913', 'B 11.687.178', '41724530', 1, 'MI', 0, 0, '', NULL, '', '', '0', NULL, NULL),
(155, '2017526829', 'teste', 'teste', '10', 'teste', 9, '', '2030-12-10', '809913', 'B 11.687.178', '41724530', 1, 'MI', 0, 0, '', NULL, '', '', '0', NULL, NULL),
(156, '2017526829', 'teste', 'teste', '10', 'teste', 9, '', '2030-12-11', '809913', 'B 11.687.178', '41724530', 1, 'MI', 0, 0, '', NULL, '', '', '0', NULL, NULL),
(157, '2017526829', 'teste', 'teste', '10', 'teste', 9, '', '2030-12-12', '809913', 'B 11.687.178', '41724530', 1, 'MI', 0, 0, '', NULL, '', '', '0', NULL, NULL),
(158, '2017526829', 'teste', 'teste', '10', 'teste', 9, '', '2030-12-13', '809913', 'B 11.687.178', '41724530', 1, 'MI', 0, 0, '', NULL, '', '', '0', NULL, NULL),
(159, '2017526829', 'teste', 'teste', '10', 'teste', 9, '', '2030-12-14', '809913', 'B 11.687.178', '41724530', 1, 'MI', 0, 0, '', NULL, '', '', '0', NULL, NULL),
(160, '2017526829', 'teste', 'teste', '10', 'teste', 9, '', '2030-12-15', '809913', 'B 11.687.178', '41724530', 1, 'MI', 0, 0, '', NULL, '', '', '0', NULL, NULL),
(161, '2017526829', 'teste', 'teste', '10', 'teste', 9, '', '2030-12-16', '809913', 'B 11.687.178', '41724530', 1, 'MI', 0, 0, '', NULL, '', '', '0', NULL, NULL),
(162, '2017526829', 'teste', 'teste', '10', 'teste', 9, '', '2030-12-17', '809913', 'B 11.687.178', '41724530', 1, 'MI', 0, 0, '', NULL, '', '', '0', NULL, NULL),
(163, '2017526829', 'teste', 'teste', '10', 'teste', 9, '', '2030-12-18', '809913', 'B 11.687.178', '41724530', 1, 'MI', 0, 0, '', NULL, '', '', '0', NULL, NULL),
(164, '2017526829', 'teste', 'teste', '10', 'teste', 9, '', '2030-12-19', '809913', 'B 11.687.178', '41724530', 1, 'MI', 0, 0, '', NULL, '', '', '0', NULL, NULL),
(165, '2017526829', 'teste', 'teste', '10', 'teste', 9, '', '2030-12-20', '809913', 'B 11.687.178', '41724530', 1, 'MI', 0, 0, '', NULL, '', '', '0', NULL, NULL),
(166, '2017526829', 'teste', 'teste', '10', 'teste', 9, '', '2030-12-21', '809913', 'B 11.687.178', '41724530', 1, 'MI', 0, 0, '', NULL, '', '', '0', NULL, NULL),
(167, '2017526829', 'teste', 'teste', '10', 'teste', 9, '', '2030-12-22', '809913', 'B 11.687.178', '41724530', 1, 'MI', 0, 0, '', NULL, '', '', '0', NULL, NULL),
(168, '2017526829', 'teste', 'teste', '10', 'teste', 9, '', '2030-11-22', '809913', 'B 11.687.178', '41724530', 1, 'MI', 0, 0, '', NULL, '', '', 'amarela', NULL, NULL),
(169, '2017526829', 'teste', 'teste', '10', 'teste', 9, '', '2030-11-23', '809913', 'B 11.687.178', '41724530', 1, 'MI', 0, 0, '', NULL, '', '', 'vermelha', NULL, NULL),
(170, '2017526829', 'teste', 'teste', '10', 'teste', 9, '', '2030-11-24', '809913', 'B 11.687.178', '41724530', 1, 'MI', 0, 0, '', NULL, '', '', 'vermelha', NULL, NULL),
(171, '2017526829', 'teste', 'teste', '10', 'teste', 9, '', '2030-11-25', '809913', 'B 11.687.178', '41724530', 1, 'MI', 0, 0, '', NULL, '', '', '0', NULL, NULL),
(172, '2017526829', 'teste', 'teste', '10', 'teste', 9, '', '2030-11-26', '809913', 'B 11.687.178', '41724530', 1, 'MI', 0, 0, '', NULL, '', '', '0', NULL, NULL),
(173, '2017526829', 'teste', 'teste', '10', 'teste', 9, '', '2030-11-27', '809913', 'B 11.687.178', '41724530', 1, 'MI', 0, 0, '', NULL, '', '', '0', NULL, NULL),
(174, '2017526829', 'teste', 'teste', '10', 'teste', 9, '', '2030-11-28', '809913', 'B 11.687.178', '41724530', 1, 'MI', 0, 0, '', NULL, '', '', '0', NULL, NULL),
(175, '2017526829', 'teste', 'teste', '10', 'teste', 9, '', '2030-11-29', '809913', 'B 11.687.178', '41724530', 1, 'MI', 0, 0, '', NULL, '', '', 'amarela', NULL, NULL),
(176, '2017526829', 'teste', 'teste', '10', 'teste', 9, '', '2030-11-30', '809913', 'B 11.687.178', '41724530', 1, 'MI', 0, 0, '', NULL, '', '', '0', NULL, NULL),
(177, '2017526829', 'teste', 'teste', '10', 'teste', 9, '', '2030-12-01', '809913', 'B 11.687.178', '41724530', 1, 'MI', 0, 0, '', NULL, '', '', '0', NULL, NULL),
(178, '2017526829', 'teste', 'teste', '10', 'teste', 9, '', '2030-12-02', '809913', 'B 11.687.178', '41724530', 1, 'MI', 0, 0, '', NULL, '', '', '0', NULL, NULL),
(179, '2017526829', 'teste', 'teste', '10', 'teste', 9, '', '2030-12-03', '809913', 'B 11.687.178', '41724530', 1, 'MI', 0, 0, '', NULL, '', '', '0', NULL, NULL),
(180, '2017526829', 'teste', 'teste', '10', 'teste', 9, '', '2030-12-04', '809913', 'B 11.687.178', '41724530', 1, 'MI', 0, 0, '', NULL, '', '', '0', NULL, NULL),
(181, '2017526829', 'teste', 'teste', '10', 'teste', 9, '', '2030-12-05', '809913', 'B 11.687.178', '41724530', 1, 'MI', 0, 0, '', NULL, '', '', '0', NULL, NULL),
(182, '2017526829', 'teste', 'teste', '10', 'teste', 9, '', '2030-12-06', '809913', 'B 11.687.178', '41724530', 1, 'MI', 0, 0, '', NULL, '', '', '0', NULL, NULL),
(183, '2017526829', 'teste', 'teste', '10', 'teste', 9, '', '2030-12-07', '809913', 'B 11.687.178', '41724530', 1, 'MI', 0, 0, '', NULL, '', '', '0', NULL, NULL),
(184, '2017526829', 'teste', 'teste', '10', 'teste', 9, '', '2030-12-08', '809913', 'B 11.687.178', '41724530', 1, 'MI', 0, 0, '', NULL, '', '', '0', NULL, NULL),
(185, '2017526829', 'teste', 'teste', '10', 'teste', 9, '', '2030-12-09', '809913', 'B 11.687.178', '41724530', 1, 'MI', 0, 0, '', NULL, '', '', '0', NULL, NULL),
(186, '2017526829', 'teste', 'teste', '10', 'teste', 9, '', '2030-12-10', '809913', 'B 11.687.178', '41724530', 1, 'MI', 0, 0, '', NULL, '', '', '0', NULL, NULL),
(187, '2017526829', 'teste', 'teste', '10', 'teste', 9, '', '2030-12-11', '809913', 'B 11.687.178', '41724530', 1, 'MI', 0, 0, '', NULL, '', '', '0', NULL, NULL),
(188, '2017526829', 'teste', 'teste', '10', 'teste', 9, '', '2030-12-12', '809913', 'B 11.687.178', '41724530', 1, 'MI', 0, 0, '', NULL, '', '', '0', NULL, NULL),
(189, '2017526829', 'teste', 'teste', '10', 'teste', 9, '', '2030-12-13', '809913', 'B 11.687.178', '41724530', 1, 'MI', 0, 0, '', NULL, '', '', '0', NULL, NULL),
(190, '2017526829', 'teste', 'teste', '10', 'teste', 9, '', '2030-12-14', '809913', 'B 11.687.178', '41724530', 1, 'MI', 0, 0, '', NULL, '', '', '0', NULL, NULL),
(191, '2017526829', 'teste', 'teste', '10', 'teste', 9, '', '2030-12-15', '809913', 'B 11.687.178', '41724530', 1, 'MI', 0, 0, '', NULL, '', '', '0', NULL, NULL),
(192, '2017526829', 'teste', 'teste', '10', 'teste', 9, '', '2030-12-16', '809913', 'B 11.687.178', '41724530', 1, 'MI', 0, 0, '', NULL, '', '', '0', NULL, NULL),
(193, '2017526829', 'teste', 'teste', '10', 'teste', 9, '', '2030-12-17', '809913', 'B 11.687.178', '41724530', 1, 'MI', 0, 0, '', NULL, '', '', '0', NULL, NULL),
(194, '2017526829', 'teste', 'teste', '10', 'teste', 9, '', '2030-12-18', '809913', 'B 11.687.178', '41724530', 1, 'MI', 0, 0, '', NULL, '', '', '0', NULL, NULL),
(195, '2017526829', 'teste', 'teste', '10', 'teste', 9, '', '2030-12-19', '809913', 'B 11.687.178', '41724530', 1, 'MI', 0, 0, '', NULL, '', '', '0', NULL, NULL),
(196, '2017526829', 'teste', 'teste', '10', 'teste', 9, '', '2030-12-20', '809913', 'B 11.687.178', '41724530', 1, 'MI', 0, 0, '', NULL, '', '', '0', NULL, NULL),
(197, '2017526829', 'teste', 'teste', '10', 'teste', 9, '', '2030-12-21', '809913', 'B 11.687.178', '41724530', 1, 'MI', 0, 0, '', NULL, '', '', '0', NULL, NULL),
(198, '2017526829', 'teste', 'teste', '10', 'teste', 9, '', '2030-12-22', '809913', 'B 11.687.178', '41724530', 1, 'MI', 0, 0, '', NULL, '', '', '0', NULL, NULL),
(199, '2017526829', 'teste', 'teste', '10', 'teste', 9, '', '2030-11-22', '809913', 'B 11.687.178', '41724530', 1, 'MI', 0, 0, '', NULL, '', '', 'vermelha', NULL, NULL),
(200, '2017526829', 'teste', 'teste', '10', 'teste', 9, '', '2030-11-23', '809913', 'B 11.687.178', '41724530', 1, 'MI', 0, 0, '', NULL, '', '', 'vermelha', NULL, NULL),
(201, '2017526829', 'teste', 'teste', '10', 'teste', 9, '', '2030-11-24', '809913', 'B 11.687.178', '41724530', 1, 'MI', 0, 0, '', NULL, '', '', 'vermelha', NULL, NULL),
(202, '2017526829', 'teste', 'teste', '10', 'teste', 9, '', '2030-11-25', '809913', 'B 11.687.178', '41724530', 1, 'MI', 0, 0, '', NULL, '', '', '0', NULL, NULL),
(203, '2017526829', 'teste', 'teste', '10', 'teste', 9, '', '2030-11-26', '809913', 'B 11.687.178', '41724530', 1, 'MI', 0, 0, '', NULL, '', '', '0', NULL, NULL),
(204, '2017526829', 'teste', 'teste', '10', 'teste', 9, '', '2030-11-27', '809913', 'B 11.687.178', '41724530', 1, 'MI', 0, 0, '', NULL, '', '', '0', NULL, NULL),
(205, '2017526829', 'teste', 'teste', '10', 'teste', 9, '', '2030-11-28', '809913', 'B 11.687.178', '41724530', 1, 'MI', 0, 0, '', NULL, '', '', '0', NULL, NULL),
(206, '2017526829', 'teste', 'teste', '10', 'teste', 9, '', '2030-11-29', '809913', 'B 11.687.178', '41724530', 1, 'MI', 0, 0, '', NULL, '', '', '0', NULL, NULL),
(207, '2017526829', 'teste', 'teste', '10', 'teste', 9, '', '2030-11-30', '809913', 'B 11.687.178', '41724530', 1, 'MI', 0, 0, '', NULL, '', '', '0', NULL, NULL),
(208, '2017526829', 'teste', 'teste', '10', 'teste', 9, '', '2030-12-01', '809913', 'B 11.687.178', '41724530', 1, 'MI', 0, 0, '', NULL, '', '', 'amarela', NULL, NULL),
(209, '2017526829', 'teste', 'teste', '10', 'teste', 9, '', '2030-12-02', '809913', 'B 11.687.178', '41724530', 1, 'MI', 0, 0, '', NULL, '', '', '0', NULL, NULL),
(210, '2017526829', 'teste', 'teste', '10', 'teste', 9, '', '2030-12-03', '809913', 'B 11.687.178', '41724530', 1, 'MI', 0, 0, '', NULL, '', '', '0', NULL, NULL),
(211, '2017526829', 'teste', 'teste', '10', 'teste', 9, '', '2030-12-04', '809913', 'B 11.687.178', '41724530', 1, 'MI', 0, 0, '', NULL, '', '', 'amarela', NULL, NULL),
(212, '2017526829', 'teste', 'teste', '10', 'teste', 9, '', '2030-12-05', '809913', 'B 11.687.178', '41724530', 1, 'MI', 0, 0, '', NULL, '', '', '0', NULL, NULL),
(213, '2017526829', 'teste', 'teste', '10', 'teste', 9, '', '2030-12-06', '809913', 'B 11.687.178', '41724530', 1, 'MI', 0, 0, '', NULL, '', '', '0', NULL, NULL),
(214, '2017526829', 'teste', 'teste', '10', 'teste', 9, '', '2030-12-07', '809913', 'B 11.687.178', '41724530', 1, 'MI', 0, 0, '', NULL, '', '', '0', NULL, NULL),
(215, '2017526829', 'teste', 'teste', '10', 'teste', 9, '', '2030-12-08', '809913', 'B 11.687.178', '41724530', 1, 'MI', 0, 0, '', NULL, '', '', '0', NULL, NULL),
(216, '2017526829', 'teste', 'teste', '10', 'teste', 9, '', '2030-12-09', '809913', 'B 11.687.178', '41724530', 1, 'MI', 0, 0, '', NULL, '', '', 'amarela', NULL, NULL),
(217, '2017526829', 'teste', 'teste', '10', 'teste', 9, '', '2030-12-10', '809913', 'B 11.687.178', '41724530', 1, 'MI', 0, 0, '', NULL, '', '', '0', NULL, NULL),
(218, '2017526829', 'teste', 'teste', '10', 'teste', 9, '', '2030-12-11', '809913', 'B 11.687.178', '41724530', 1, 'MI', 0, 0, '', NULL, '', '', '0', NULL, NULL),
(219, '2017526829', 'teste', 'teste', '10', 'teste', 9, '', '2030-12-12', '809913', 'B 11.687.178', '41724530', 1, 'MI', 0, 0, '', NULL, '', '', '0', NULL, NULL),
(220, '2017526829', 'teste', 'teste', '10', 'teste', 9, '', '2030-12-13', '809913', 'B 11.687.178', '41724530', 1, 'MI', 0, 0, '', NULL, '', '', '0', NULL, NULL),
(221, '2017526829', 'teste', 'teste', '10', 'teste', 9, '', '2030-12-14', '809913', 'B 11.687.178', '41724530', 1, 'MI', 0, 0, '', NULL, '', '', '0', NULL, NULL),
(222, '2017526829', 'teste', 'teste', '10', 'teste', 9, '', '2030-12-15', '809913', 'B 11.687.178', '41724530', 1, 'MI', 0, 0, '', NULL, '', '', '0', NULL, NULL),
(223, '2017526829', 'teste', 'teste', '10', 'teste', 9, '', '2030-12-16', '809913', 'B 11.687.178', '41724530', 1, 'MI', 0, 0, '', NULL, '', '', '0', NULL, NULL),
(224, '2017526829', 'teste', 'teste', '10', 'teste', 9, '', '2030-12-17', '809913', 'B 11.687.178', '41724530', 1, 'MI', 0, 0, '', NULL, '', '', '0', NULL, NULL),
(225, '2017526829', 'teste', 'teste', '10', 'teste', 9, '', '2030-12-18', '809913', 'B 11.687.178', '41724530', 1, 'MI', 0, 0, '', NULL, '', '', '0', NULL, NULL),
(226, '2017526829', 'teste', 'teste', '10', 'teste', 9, '', '2030-12-19', '809913', 'B 11.687.178', '41724530', 1, 'MI', 0, 0, '', NULL, '', '', '0', NULL, NULL),
(227, '2017526829', 'teste', 'teste', '10', 'teste', 9, '', '2030-12-20', '809913', 'B 11.687.178', '41724530', 1, 'MI', 0, 0, '', NULL, '', '', '0', NULL, NULL),
(228, '2017526829', 'teste', 'teste', '10', 'teste', 9, '', '2030-12-21', '809913', 'B 11.687.178', '41724530', 1, 'MI', 0, 0, '', NULL, '', '', '0', NULL, NULL),
(229, '2017526829', 'teste', 'teste', '10', 'teste', 9, '', '2030-12-22', '809913', 'B 11.687.178', '41724530', 1, 'MI', 0, 0, '', NULL, '', '', '0', NULL, NULL),
(230, '2017526829', 'joao', 'joao', '10', 'joao', 9, 'MOD 3', '2030-11-22', '809913', 'B 11.687.178', '41724530', 1, 'MI', 0, 0, '', NULL, '', '', '0', NULL, NULL),
(231, '2017526829', 'joao', 'joao', '10', 'joao', 9, 'MOD 3', '2030-11-23', '809913', 'B 11.687.178', '41724530', 1, 'MI', 0, 0, '', NULL, '', '', '0', NULL, NULL),
(232, '2017526829', 'joao', 'joao', '10', 'joao', 9, 'MOD 3', '2030-11-24', '809913', 'B 11.687.178', '41724530', 1, 'MI', 0, 0, '', NULL, '', '', '0', NULL, NULL),
(233, '2017526829', 'joao', 'joao', '10', 'joao', 9, 'MOD 3', '2030-11-25', '809913', 'B 11.687.178', '41724530', 1, 'MI', 0, 0, '', NULL, '', '', '0', NULL, NULL),
(234, '2017526829', 'joao', 'joao', '10', 'joao', 9, 'MOD 3', '2030-11-26', '809913', 'B 11.687.178', '41724530', 1, 'MI', 0, 0, '', NULL, '', '', '0', NULL, NULL),
(235, '2017526829', 'joao', 'joao', '10', 'joao', 9, 'MOD 3', '2030-11-27', '809913', 'B 11.687.178', '41724530', 1, 'MI', 0, 0, '', NULL, '', '', '0', NULL, NULL),
(236, '2017526829', 'joao', 'joao', '10', 'joao', 9, 'MOD 3', '2030-11-28', '809913', 'B 11.687.178', '41724530', 1, 'MI', 0, 0, '', NULL, '', '', '0', NULL, NULL),
(237, '2017526829', 'joao', 'joao', '10', 'joao', 9, 'MOD 3', '2030-11-29', '809913', 'B 11.687.178', '41724530', 1, 'MI', 0, 0, '', NULL, '', '', '0', NULL, NULL),
(238, '2017526829', 'joao', 'joao', '10', 'joao', 9, 'MOD 3', '2030-11-30', '809913', 'B 11.687.178', '41724530', 1, 'MI', 0, 0, '', NULL, '', '', '0', NULL, NULL),
(239, '2017526829', 'joao', 'joao', '10', 'joao', 9, 'MOD 3', '2030-12-01', '809913', 'B 11.687.178', '41724530', 1, 'MI', 0, 0, '', NULL, '', '', '0', NULL, NULL),
(240, '2017526829', 'joao', 'joao', '10', 'joao', 9, 'MOD 3', '2030-12-02', '809913', 'B 11.687.178', '41724530', 1, 'MI', 0, 0, '', NULL, '', '', '0', NULL, NULL),
(241, '2017526829', 'joao', 'joao', '10', 'joao', 9, 'MOD 3', '2030-12-03', '809913', 'B 11.687.178', '41724530', 1, 'MI', 0, 0, '', NULL, '', '', '0', NULL, NULL),
(242, '2017526829', 'joao', 'joao', '10', 'joao', 9, 'MOD 3', '2030-12-04', '809913', 'B 11.687.178', '41724530', 1, 'MI', 0, 0, '', NULL, '', '', '0', NULL, NULL),
(243, '2017526829', 'joao', 'joao', '10', 'joao', 9, 'MOD 3', '2030-12-05', '809913', 'B 11.687.178', '41724530', 1, 'MI', 0, 0, '', NULL, '', '', '0', NULL, NULL),
(244, '2017526829', 'joao', 'joao', '10', 'joao', 9, 'MOD 3', '2030-12-06', '809913', 'B 11.687.178', '41724530', 1, 'MI', 0, 0, '', NULL, '', '', '0', NULL, NULL),
(245, '2017526829', 'joao', 'joao', '10', 'joao', 9, 'MOD 3', '2030-12-07', '809913', 'B 11.687.178', '41724530', 1, 'MI', 0, 0, '', NULL, '', '', '0', NULL, NULL),
(246, '2017526829', 'joao', 'joao', '10', 'joao', 9, 'MOD 3', '2030-12-08', '809913', 'B 11.687.178', '41724530', 1, 'MI', 0, 0, '', NULL, '', '', '0', NULL, NULL),
(247, '2017526829', 'joao', 'joao', '10', 'joao', 9, 'MOD 3', '2030-12-09', '809913', 'B 11.687.178', '41724530', 1, 'MI', 0, 0, '', NULL, '', '', '0', NULL, NULL),
(248, '2017526829', 'joao', 'joao', '10', 'joao', 9, 'MOD 3', '2030-12-10', '809913', 'B 11.687.178', '41724530', 1, 'MI', 0, 0, '', NULL, '', '', '0', NULL, NULL),
(249, '2017526829', 'joao', 'joao', '10', 'joao', 9, 'MOD 3', '2030-12-11', '809913', 'B 11.687.178', '41724530', 1, 'MI', 0, 0, '', NULL, '', '', '0', NULL, NULL),
(250, '2017526829', 'joao', 'joao', '10', 'joao', 9, 'MOD 3', '2030-12-12', '809913', 'B 11.687.178', '41724530', 1, 'MI', 0, 0, '', NULL, '', '', '0', NULL, NULL),
(251, '2017526829', 'joao', 'joao', '10', 'joao', 9, 'MOD 3', '2030-12-13', '809913', 'B 11.687.178', '41724530', 1, 'MI', 0, 0, '', NULL, '', '', '0', NULL, NULL),
(252, '2017526829', 'joao', 'joao', '10', 'joao', 9, 'MOD 3', '2030-12-14', '809913', 'B 11.687.178', '41724530', 1, 'MI', 0, 0, '', NULL, '', '', '0', NULL, NULL);
INSERT INTO `atividades` (`codprog`, `num_om`, `denominacao`, `txtbreve`, `Tare`, `textoTarefa`, `id_centrab`, `local`, `dataAtividade`, `numlibra`, `numpt`, `requisitante`, `horaexec`, `gerencial`, `finalizada`, `desativado`, `status`, `giop`, `justificativa`, `justificativa_detalhe`, `criticidadept`, `continuacaoServ`, `observacao`) VALUES
(253, '2017526829', 'joao', 'joao', '10', 'joao', 9, 'MOD 3', '2030-12-15', '809913', 'B 11.687.178', '41724530', 1, 'MI', 0, 0, '', NULL, '', '', '0', NULL, NULL),
(254, '2017526829', 'joao', 'joao', '10', 'joao', 9, 'MOD 3', '2030-12-16', '809913', 'B 11.687.178', '41724530', 1, 'MI', 0, 0, '', NULL, '', '', '0', NULL, NULL),
(255, '2017526829', 'joao', 'joao', '10', 'joao', 9, 'MOD 3', '2030-12-17', '809913', 'B 11.687.178', '41724530', 1, 'MI', 0, 0, '', NULL, '', '', '0', NULL, NULL),
(256, '2017526829', 'joao', 'joao', '10', 'joao', 9, 'MOD 3', '2030-12-18', '809913', 'B 11.687.178', '41724530', 1, 'MI', 0, 0, '', NULL, '', '', '0', NULL, NULL),
(257, '2017526829', 'joao', 'joao', '10', 'joao', 9, 'MOD 3', '2030-12-19', '809913', 'B 11.687.178', '41724530', 1, 'MI', 0, 0, '', NULL, '', '', '0', NULL, NULL),
(258, '2017526829', 'joao', 'joao', '10', 'joao', 9, 'MOD 3', '2030-12-20', '809913', 'B 11.687.178', '41724530', 1, 'MI', 0, 0, '', NULL, '', '', '0', NULL, NULL),
(259, '2017526829', 'joao', 'joao', '10', 'joao', 9, 'MOD 3', '2030-12-21', '809913', 'B 11.687.178', '41724530', 1, 'MI', 0, 0, '', NULL, '', '', '0', NULL, NULL),
(260, '2017526829', 'joao', 'joao', '10', 'joao', 9, 'MOD 3', '2030-12-22', '809913', 'B 11.687.178', '41724530', 1, 'MI', 0, 0, '', NULL, '', '', '0', NULL, NULL),
(261, '2019828282', 'testete', 'teste', '12', 'texto alert', 1, 'mod2', '2019-05-15', '111111', '222222', '1231321213', 1, 'mi', 1, 0, '', '', '', '', '0', NULL, NULL),
(262, '2019828282', 'teste', 'testete', '12', 'teste', 9, 'teste', '2019-01-14', '1578', '12331231', '12931938', 1, 'MI', 1, 0, '', 'Denise', '', '', '0', 'nao', NULL),
(263, '2019828282', 'teste', 'testete', '12', 'teste', 9, 'teste', '2019-01-14', '1578', '12331231', '12931938', 1, 'MI', 1, 0, 'NE', 'Jonas', '', '', '0', NULL, NULL),
(264, '2019828282', 'teste', 'testete', '12', 'teste', 9, 'teste', '2019-01-14', '1578', '12331231', '12931938', 1, 'MI', 1, 0, '', '', '', '', '0', NULL, NULL),
(265, '2019828282', 'teste', 'testete', '12', 'teste', 9, 'teste', '2019-01-14', '1578', '12331231', '12931938', 1, 'MI', 1, 0, '', '', '', '', '0', NULL, NULL),
(266, '2019828282', 'teste', 'testete', '12', 'teste', 9, 'teste', '2019-01-14', '1578', '12331231', '12931938', 1, 'MI', 1, 0, '', '', '', '', '0', NULL, NULL),
(267, '2019828282', 'teste', 'testete', '12', 'teste', 9, 'teste', '2019-01-14', '1578', '12331231', '12931938', 1, 'MI', 1, 0, '', '', '', '', '0', NULL, NULL),
(269, '2222222', 'asd', 'asd', '13', '123', 9, 'módulo 2', '2019-01-23', '123', '123', '123', 1, 'MI', 0, 0, '', '', '', '', '0', 'nao', NULL),
(270, '2222222', 'asd', 'asd', '13', '123', 9, 'módulo 2', '2019-01-23', '123', '123', '123', 1, 'MI', 0, 0, '', '', '', '', '0', NULL, NULL),
(272, '2019828282', 'teste', 'testete', '12', 'teste', 9, 'teste', '2019-06-25', '1578', '12331231', 'qwe', 1, 'MI', 1, 0, '', 'Clecio', '', '', '0', NULL, NULL),
(273, '2017526829', 'joao', 'joao', '10', 'joao', 9, 'MOD 3', '2030-11-22', '809913', 'B 11.687.178', '41724530', 1, 'MI', 0, 0, '', NULL, '', '', '0', NULL, NULL),
(274, '2017526829', 'joao', 'joao', '10', 'joao', 9, 'MOD 3', '2030-11-23', '809913', 'B 11.687.178', '41724530', 1, 'MI', 0, 0, '', NULL, '', '', '0', NULL, NULL),
(275, '2017526829', 'joao', 'joao', '10', 'joao', 9, 'MOD 3', '2030-11-24', '809913', 'B 11.687.178', '41724530', 1, 'MI', 0, 0, '', NULL, '', '', '0', NULL, NULL),
(276, '2017526829', 'joao', 'joao', '10', 'joao', 9, 'MOD 3', '2030-11-25', '809913', 'B 11.687.178', '41724530', 1, 'MI', 0, 0, '', NULL, '', '', '0', NULL, NULL),
(277, '2017526829', 'joao', 'joao', '10', 'joao', 9, 'MOD 3', '2030-11-26', '809913', 'B 11.687.178', '41724530', 1, 'MI', 0, 0, '', NULL, '', '', '0', NULL, NULL),
(278, '2017526829', 'joao', 'joao', '10', 'joao', 9, 'MOD 3', '2030-11-27', '809913', 'B 11.687.178', '41724530', 1, 'MI', 0, 0, '', NULL, '', '', '0', NULL, NULL),
(279, '2017526829', 'joao', 'joao', '10', 'joao', 9, 'MOD 3', '2030-11-28', '809913', 'B 11.687.178', '41724530', 1, 'MI', 0, 0, '', NULL, '', '', '0', NULL, NULL),
(280, '2017526829', 'joao', 'joao', '10', 'joao', 9, 'MOD 3', '2030-11-29', '809913', 'B 11.687.178', '41724530', 1, 'MI', 0, 0, '', NULL, '', '', '0', NULL, NULL),
(281, '2017526829', 'joao', 'joao', '10', 'joao', 9, 'MOD 3', '2030-11-30', '809913', 'B 11.687.178', '41724530', 1, 'MI', 0, 0, '', NULL, '', '', '0', NULL, NULL),
(282, '2017526829', 'joao', 'joao', '10', 'joao', 9, 'MOD 3', '2030-12-01', '809913', 'B 11.687.178', '41724530', 1, 'MI', 0, 0, '', NULL, '', '', '0', NULL, NULL),
(283, '2017526829', 'joao', 'joao', '10', 'joao', 9, 'MOD 3', '2030-12-02', '809913', 'B 11.687.178', '41724530', 1, 'MI', 0, 0, '', NULL, '', '', '0', NULL, NULL),
(284, '2017526829', 'joao', 'joao', '10', 'joao', 9, 'MOD 3', '2030-12-03', '809913', 'B 11.687.178', '41724530', 1, 'MI', 0, 0, '', NULL, '', '', '0', NULL, NULL),
(285, '2017526829', 'joao', 'joao', '10', 'joao', 9, 'MOD 3', '2030-12-04', '809913', 'B 11.687.178', '41724530', 1, 'MI', 0, 0, '', NULL, '', '', '0', NULL, NULL),
(286, '2017526829', 'joao', 'joao', '10', 'joao', 9, 'MOD 3', '2030-12-05', '809913', 'B 11.687.178', '41724530', 1, 'MI', 0, 0, '', NULL, '', '', '0', NULL, NULL),
(287, '2017526829', 'joao', 'joao', '10', 'joao', 9, 'MOD 3', '2030-12-06', '809913', 'B 11.687.178', '41724530', 1, 'MI', 0, 0, '', NULL, '', '', '0', NULL, NULL),
(288, '2017526829', 'joao', 'joao', '10', 'joao', 9, 'MOD 3', '2030-12-07', '809913', 'B 11.687.178', '41724530', 1, 'MI', 0, 0, '', NULL, '', '', '0', NULL, NULL),
(289, '2017526829', 'joao', 'joao', '10', 'joao', 9, 'MOD 3', '2030-12-08', '809913', 'B 11.687.178', '41724530', 1, 'MI', 0, 0, '', NULL, '', '', '0', NULL, NULL),
(290, '2017526829', 'joao', 'joao', '10', 'joao', 9, 'MOD 3', '2030-12-09', '809913', 'B 11.687.178', '41724530', 1, 'MI', 0, 0, '', NULL, '', '', '0', NULL, NULL),
(291, '2017526829', 'joao', 'joao', '10', 'joao', 9, 'MOD 3', '2030-12-10', '809913', 'B 11.687.178', '41724530', 1, 'MI', 0, 0, '', NULL, '', '', '0', NULL, NULL),
(292, '2017526829', 'joao', 'joao', '10', 'joao', 9, 'MOD 3', '2030-12-11', '809913', 'B 11.687.178', '41724530', 1, 'MI', 0, 0, '', NULL, '', '', '0', NULL, NULL),
(293, '2017526829', 'joao', 'joao', '10', 'joao', 9, 'MOD 3', '2030-12-12', '809913', 'B 11.687.178', '41724530', 1, 'MI', 0, 0, '', NULL, '', '', '0', NULL, NULL),
(294, '2017526829', 'joao', 'joao', '10', 'joao', 9, 'MOD 3', '2030-12-13', '809913', 'B 11.687.178', '41724530', 1, 'MI', 0, 0, '', NULL, '', '', '0', NULL, NULL),
(295, '2017526829', 'joao', 'joao', '10', 'joao', 9, 'MOD 3', '2030-12-14', '809913', 'B 11.687.178', '41724530', 1, 'MI', 0, 0, '', NULL, '', '', '0', NULL, NULL),
(296, '2017526829', 'joao', 'joao', '10', 'joao', 9, 'MOD 3', '2030-12-15', '809913', 'B 11.687.178', '41724530', 1, 'MI', 0, 0, '', NULL, '', '', '0', NULL, NULL),
(297, '2017526829', 'joao', 'joao', '10', 'joao', 9, 'MOD 3', '2030-12-16', '809913', 'B 11.687.178', '41724530', 1, 'MI', 0, 0, '', NULL, '', '', '0', NULL, NULL),
(298, '2017526829', 'joao', 'joao', '10', 'joao', 9, 'MOD 3', '2030-12-17', '809913', 'B 11.687.178', '41724530', 1, 'MI', 0, 0, '', NULL, '', '', '0', NULL, NULL),
(299, '2017526829', 'joao', 'joao', '10', 'joao', 9, 'MOD 3', '2030-12-18', '809913', 'B 11.687.178', '41724530', 1, 'MI', 0, 0, '', NULL, '', '', '0', NULL, NULL),
(300, '2017526829', 'joao', 'joao', '10', 'joao', 9, 'MOD 3', '2030-12-19', '809913', 'B 11.687.178', '41724530', 1, 'MI', 0, 0, '', NULL, '', '', '0', NULL, NULL),
(301, '2017526829', 'joao', 'joao', '10', 'joao', 9, 'MOD 3', '2030-12-20', '809913', 'B 11.687.178', '41724530', 1, 'MI', 0, 0, '', NULL, '', '', '0', NULL, NULL),
(302, '2017526829', 'joao', 'joao', '10', 'joao', 9, 'MOD 3', '2030-12-21', '809913', 'B 11.687.178', '41724530', 1, 'MI', 0, 0, '', NULL, '', '', '0', NULL, NULL),
(303, '2017526829', 'joao', 'joao', '10', 'joao', 9, 'MOD 3', '2030-12-22', '809913', 'B 11.687.178', '41724530', 1, 'MI', 0, 0, '', NULL, '', '', '0', NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `centrab`
--

CREATE TABLE `centrab` (
  `codecentrab` int(11) NOT NULL,
  `nome_centrab` varchar(255) CHARACTER SET utf8 NOT NULL,
  `hh_total` int(11) NOT NULL,
  `gerencia` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `centrab`
--

INSERT INTO `centrab` (`codecentrab`, `nome_centrab`, `hh_total`, `gerencia`) VALUES
(1, '030ele01', 40, 'MI'),
(2, '030ele02', 50, 'MI'),
(3, '030ele03', 60, 'MI'),
(4, '030ins01', 70, 'MI'),
(5, '030ins02', 90, 'MI'),
(6, '030ins03', 100, 'MI'),
(7, '030ins04', 80, 'MI'),
(8, '030mec01', 70, 'MI'),
(9, '030mec02', 80, 'MI'),
(10, '030mec03', 60, 'MI'),
(11, '100cal01', 50, 'MI'),
(12, '100man02', 180, 'MI'),
(13, '100MAN01', 100, 'ISUP'),
(14, '100CAL02', 100, 'ISUP'),
(15, '030AUT01', 100, 'MI'),
(16, '030AUT02', 100, 'MI'),
(17, '030ELE06', 100, 'MI'),
(18, '030INS06', 100, 'MI'),
(19, '030MEC06', 100, 'MI'),
(20, '030PIN03', 100, 'ISUP'),
(21, '100PIN02', 100, 'ISUP'),
(22, '080plc01', 100, 'CeM'),
(23, '040tip01', 100, 'Inspeção');

-- --------------------------------------------------------

--
-- Estrutura da tabela `criticidade`
--

CREATE TABLE `criticidade` (
  `id_criticidade` tinyint(4) NOT NULL,
  `criticidade` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `criticidade`
--

INSERT INTO `criticidade` (`id_criticidade`, `criticidade`) VALUES
(1, 'amarela'),
(2, 'vermelha'),
(3, 'branca');

-- --------------------------------------------------------

--
-- Estrutura da tabela `locais`
--

CREATE TABLE `locais` (
  `idLocal` varchar(10) CHARACTER SET utf8 NOT NULL,
  `Localizacao` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `locais`
--

INSERT INTO `locais` (`idLocal`, `Localizacao`) VALUES
('001', 'UNES'),
('ADC', 'ADM'),
('ANC', 'ANCHIETA'),
('BI', 'IPIRANGA'),
('CAB', 'CACIMBAS'),
('CAN', 'CANGOA'),
('CPA', 'COMPARTILHADO'),
('F1C', 'Fase 1'),
('LP', 'LAGOA PARDA'),
('LPN', 'LAGOA PARDA N'),
('LPS', 'LAGOA PARDA S'),
('LS', 'LAGOA SURUACA'),
('M1C', 'MOD 1'),
('M2C', 'MOD 2'),
('M3C', 'MOD 3'),
('MEA', 'MANUT ELE'),
('MOP', 'OP PIG'),
('MPC', 'MED e Prod'),
('OP2', 'P2'),
('OP4', 'P4'),
('OP5', 'P5'),
('PCA', 'POLO CACIMBAS'),
('PER', 'PEROA'),
('RBS', 'BARRA SECA'),
('001', 'UNES'),
('ADC', 'ADM'),
('ANC', 'ANCHIETA'),
('BI', 'IPIRANGA'),
('CAB', 'CACIMBAS'),
('CAN', 'CANGOA'),
('CPA', 'COMPARTILHADO'),
('F1C', 'Fase 1'),
('LP', 'LAGOA PARDA'),
('LPN', 'LAGOA PARDA N'),
('LPS', 'LAGOA PARDA S'),
('LS', 'LAGOA SURUACA'),
('M1C', 'MOD 1'),
('M2C', 'MOD 2'),
('M3C', 'MOD 3'),
('MEA', 'MANUT ELE'),
('MOP', 'OP PIG'),
('MPC', 'MED e Prod'),
('OP2', 'P2'),
('OP4', 'P4'),
('OP5', 'P5'),
('PCA', 'POLO CACIMBAS'),
('PER', 'PEROA'),
('RBS', 'BARRA SECA'),
('SEC', 'SECGN'),
('TCC', 'TBM');

-- --------------------------------------------------------

--
-- Estrutura da tabela `operador`
--

CREATE TABLE `operador` (
  `cod_oper` tinyint(255) NOT NULL,
  `nomegiop` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `operador`
--

INSERT INTO `operador` (`cod_oper`, `nomegiop`) VALUES
(6, 'Denise'),
(7, 'Torrelio'),
(8, 'Jorge'),
(9, 'Bruna'),
(10, 'Edgar'),
(11, 'Jonas'),
(12, 'Camatta'),
(13, 'Dauster'),
(14, 'Clecio'),
(15, 'Rediguiere');

-- --------------------------------------------------------

--
-- Estrutura da tabela `retiradas`
--

CREATE TABLE `retiradas` (
  `codret` int(11) NOT NULL,
  `numOM` int(255) DEFAULT NULL,
  `texto_breve` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `oper` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `texto_tarefa` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `centro_trabalho` varchar(10) CHARACTER SET utf8 DEFAULT NULL,
  `dataRetirada` date DEFAULT NULL,
  `motivo` varchar(300) CHARACTER SET utf8 DEFAULT NULL,
  `histUsuario` varchar(40) CHARACTER SET utf8 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `retiradas`
--

INSERT INTO `retiradas` (`codret`, `numOM`, `texto_breve`, `oper`, `texto_tarefa`, `centro_trabalho`, `dataRetirada`, `motivo`, `histUsuario`) VALUES
(2, 2017642530, 'TIT-21231484 Transm Indic Temp V-2123108', '20', 'TIT-21231484 - Instrumento em falha', '5', '2018-12-03', 'abc', 'Junior'),
(3, 2018258448, 'B-360301C Bomba Água Combate Incêndio', '40', 'Prv_SO  Bomba B-360301C', '2', '2018-12-03', 'Teste teste ', 'administrador'),
(4, 2017595495, 'PI-21231264 Indação de Pressão T-2123102', '30', 'PRV PI-21231264 INDIC PRESS T-2123102', '5', '2018-12-03', 'teste', 'administrador'),
(5, 2222222, 'asd', '13', 'asd', '9', '2019-01-23', 'sim', 'administrador'),
(6, 123, '123', '123', '123', '9', '2019-01-09', 'demonstrar', 'administrador');

-- --------------------------------------------------------

--
-- Estrutura da tabela `solicitadas`
--

CREATE TABLE `solicitadas` (
  `codSolicitadas` int(11) NOT NULL,
  `numOM` varchar(255) CHARACTER SET utf8 NOT NULL,
  `txtOM` varchar(255) CHARACTER SET utf8 NOT NULL,
  `operOM` varchar(255) CHARACTER SET utf8 NOT NULL,
  `txtOPER` varchar(255) CHARACTER SET utf8 NOT NULL,
  `denominacao` varchar(255) CHARACTER SET utf8 NOT NULL,
  `centrabOM` varchar(255) CHARACTER SET utf8 NOT NULL,
  `localOM` varchar(255) CHARACTER SET utf8 NOT NULL,
  `ptOM` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `reqOM` varchar(255) CHARACTER SET utf8 NOT NULL,
  `gerOM` varchar(255) CHARACTER SET utf8 NOT NULL,
  `dataOM` date NOT NULL,
  `msgOM` varchar(255) CHARACTER SET utf8 NOT NULL,
  `situacao` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT 'Aguardando',
  `situacao2` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT 'Aguardando',
  `hh` int(11) DEFAULT NULL,
  `libraOM` varchar(15) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `solicitadas`
--

INSERT INTO `solicitadas` (`codSolicitadas`, `numOM`, `txtOM`, `operOM`, `txtOPER`, `denominacao`, `centrabOM`, `localOM`, `ptOM`, `reqOM`, `gerOM`, `dataOM`, `msgOM`, `situacao`, `situacao2`, `hh`, `libraOM`) VALUES
(9, '123', '123', '123', '123', '123', '123', '123', '123', '123', 'ISUP', '2019-01-09', '123', 'Reprovada', 'Aprovada', 123, '123'),
(10, '123', '123', '123', '123', '123', '123', '123', '123', '123', 'ISUP', '2019-01-09', '123', 'Reprovada', 'Reprovada', 123, '123');

-- --------------------------------------------------------

--
-- Estrutura da tabela `statuscancel`
--

CREATE TABLE `statuscancel` (
  `id_cancel` tinyint(4) NOT NULL,
  `statusJust` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `statuscancel`
--

INSERT INTO `statuscancel` (`id_cancel`, `statusJust`) VALUES
(1, 'Eqpto indisponível ou Não liberado'),
(2, 'Erro na Quitação da PT'),
(3, 'Falha de delineamento/Planejamento'),
(4, 'Falha de fornecedor externo'),
(5, 'Falha na documentação da PT'),
(6, 'Falha na execução/Reprogramação'),
(7, 'Falha na Programação '),
(8, 'Falta de recurso/material'),
(9, 'Intempéries'),
(10, 'Mudança de prioridade'),
(11, 'Parada'),
(12, 'Problemas durante execução'),
(13, 'Problemas no sistema de PT'),
(14, 'Representante ausente'),
(15, 'Requisitante não solicitou a PT'),
(16, 'Serviço concluído em outra PT'),
(17, 'Simultaneidade');

-- --------------------------------------------------------

--
-- Estrutura da tabela `statuspt`
--

CREATE TABLE `statuspt` (
  `cod_id` int(11) NOT NULL,
  `status` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `statuspt`
--

INSERT INTO `statuspt` (`cod_id`, `status`) VALUES
(1, 'Aguardando'),
(2, 'Cancelada'),
(3, 'Emitida'),
(4, 'NE');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `login` varchar(255) CHARACTER SET utf8 NOT NULL,
  `senha` varchar(255) CHARACTER SET utf8 NOT NULL,
  `dica` varchar(255) CHARACTER SET utf8 NOT NULL,
  `Perfil` varchar(3) CHARACTER SET utf8 NOT NULL DEFAULT 'nao'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `login`, `senha`, `dica`, `Perfil`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', '1'),
(9, 'administrador', '0c676f60db51f67ba03e2f8776d7a523', 'petro', '2'),
(12, 'junior2', 'ca2a8672201f739a3d16f50f54bb77b3', 'junior2', '3'),
(11, 'junior', 'b03e3fd2b3d22ff6df2796c412b09311', 'junior', '4'),
(10, 'teste', '698dc19d489c4e4db73e28a713eab07b', 'teste', '5'),
(13, 'perfil6', '9a11b2ceca0c46d27821bc2268ffc42c', 'perfil6', '6');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `atividades`
--
ALTER TABLE `atividades`
  ADD PRIMARY KEY (`codprog`);

--
-- Indexes for table `centrab`
--
ALTER TABLE `centrab`
  ADD PRIMARY KEY (`codecentrab`);

--
-- Indexes for table `criticidade`
--
ALTER TABLE `criticidade`
  ADD PRIMARY KEY (`id_criticidade`);

--
-- Indexes for table `operador`
--
ALTER TABLE `operador`
  ADD PRIMARY KEY (`cod_oper`);

--
-- Indexes for table `retiradas`
--
ALTER TABLE `retiradas`
  ADD PRIMARY KEY (`codret`);

--
-- Indexes for table `solicitadas`
--
ALTER TABLE `solicitadas`
  ADD PRIMARY KEY (`codSolicitadas`);

--
-- Indexes for table `statuscancel`
--
ALTER TABLE `statuscancel`
  ADD PRIMARY KEY (`id_cancel`);

--
-- Indexes for table `statuspt`
--
ALTER TABLE `statuspt`
  ADD PRIMARY KEY (`cod_id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `atividades`
--
ALTER TABLE `atividades`
  MODIFY `codprog` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=304;
--
-- AUTO_INCREMENT for table `centrab`
--
ALTER TABLE `centrab`
  MODIFY `codecentrab` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `criticidade`
--
ALTER TABLE `criticidade`
  MODIFY `id_criticidade` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `operador`
--
ALTER TABLE `operador`
  MODIFY `cod_oper` tinyint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `retiradas`
--
ALTER TABLE `retiradas`
  MODIFY `codret` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `solicitadas`
--
ALTER TABLE `solicitadas`
  MODIFY `codSolicitadas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `statuscancel`
--
ALTER TABLE `statuscancel`
  MODIFY `id_cancel` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `statuspt`
--
ALTER TABLE `statuspt`
  MODIFY `cod_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
