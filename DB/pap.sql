-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 20-Abr-2023 às 13:29
-- Versão do servidor: 10.4.17-MariaDB
-- versão do PHP: 7.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `pap`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `autoavaliacao`
--

CREATE TABLE `autoavaliacao` (
  `idautoavaliacao` int(11) NOT NULL,
  `notaautoavaliacao` int(11) NOT NULL,
  `naluno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `autoavaliacao`
--

INSERT INTO `autoavaliacao` (`idautoavaliacao`, `notaautoavaliacao`, `naluno`) VALUES
(1, 15, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `avaliacaogeral`
--

CREATE TABLE `avaliacaogeral` (
  `idavaliacao` int(11) NOT NULL,
  `notageral` int(11) NOT NULL,
  `idcurso` int(11) NOT NULL,
  `fases` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `avaliacaogeral`
--

INSERT INTO `avaliacaogeral` (`idavaliacao`, `notageral`, `idcurso`, `fases`) VALUES
(2, 5, 4, 'PreProjeto'),
(3, 30, 4, 'Trabalho_desenvolvido_Ano'),
(4, 15, 4, 'PAPLinguaEstrangeira'),
(5, 20, 4, 'SupEscFormInt'),
(6, 10, 4, 'RelatorioFinal'),
(7, 20, 4, 'Apr_Oral_Defesa_Projeto'),
(8, 5, 5, 'PreProjeto'),
(9, 10, 5, 'Sumario_Executivo_Video'),
(10, 20, 5, 'Feira_Empreendedorismo'),
(11, 5, 5, 'PAPLinguaEstrangeira'),
(12, 10, 5, 'Trabalho_desenvolvido_Ano'),
(13, 20, 5, 'Apr_Oral_Defesa_Projeto'),
(14, 10, 5, 'SupEscFormInt'),
(15, 5, 7, 'PreProjeto'),
(16, 25, 7, 'Prova_Supresa_cozinha'),
(17, 30, 7, 'Prova_Criativa_cozinha'),
(18, 10, 7, 'PAPLinguaEstrangeira'),
(19, 20, 7, 'RelatorioFinal'),
(20, 10, 7, 'Apr_Oral_Defesa_Projeto');

-- --------------------------------------------------------

--
-- Estrutura da tabela `criterios`
--

CREATE TABLE `criterios` (
  `idcriterio` int(11) NOT NULL,
  `nome` text NOT NULL,
  `nota` varchar(11) NOT NULL,
  `observacao` varchar(200) NOT NULL,
  `fase` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `criterios`
--

INSERT INTO `criterios` (`idcriterio`, `nome`, `nota`, `observacao`, `fase`) VALUES
(10, 'Cumprimento  dos Prazos', '3', 'Cumpriu os prazos estipulados', 'PreProjeto'),
(11, 'Cumprimento  dos Prazos', '0', 'Não Cumpriu os prazos estipulados', 'PreProjeto'),
(12, 'CV', '2', 'Completo', 'PreProjeto'),
(13, 'CV', '1', 'Incompleto', 'PreProjeto'),
(14, 'Descrição do Tema', '3', 'Descreve de forma clara e lógica', 'PreProjeto'),
(15, 'Descrição do Tema', '2', 'Descreve, mas com pouca clareza', 'PreProjeto'),
(16, 'Descrição do Tema', '1', 'Descreve sem clareza', 'PreProjeto'),
(17, 'Objetivos a Atingir', '3', 'Descreve de forma clara e lógica', 'PreProjeto'),
(18, 'Objetivos a Atingir', '1.5', 'Descreve, mas com pouca clareza', 'PreProjeto'),
(19, 'Objetivos a Atingir', '0.5', 'Descreve sem clareza', 'PreProjeto'),
(20, 'Recursos', '2', 'Descreve de forma clara e lógica', 'PreProjeto'),
(21, 'Recursos', '1', 'Descreve, mas com pouca clareza', 'PreProjeto'),
(22, 'Recursos', '0.5', 'Descreve sem clareza', 'PreProjeto'),
(23, 'Aplicação do Projeto', '3', 'Descreve de forma clara e lógica', 'PreProjeto'),
(24, 'Aplicação do Projeto', '1.5', 'Descreve, mas com pouca clareza', 'PreProjeto'),
(25, 'Aplicação do Projeto', '0.5', 'Descreve sem clareza', 'PreProjeto'),
(26, 'Estratégias para  o Desenvolvimento', '2', 'Descreve de forma clara e lógica', 'PreProjeto'),
(27, 'Estratégias para  o Desenvolvimento', '1', 'Descreve, mas com pouca clareza', 'PreProjeto'),
(28, 'Estratégias para  o Desenvolvimento', '0.5', 'Descreve sem clareza', 'PreProjeto'),
(29, 'Cronograma', '2', 'Completo', 'PreProjeto'),
(30, 'Cronograma', '1', 'Incompleto', 'PreProjeto'),
(33, 'Ilustração do projeto desenvolvido', '10', 'Descreve, de forma clara\r\n e elucidativa, todo o trabalho desenvolvido no projeto', 'RelatorioFinal'),
(36, 'Ilustração do projeto desenvolvido', '6', 'Descreve, de forma satisfatória, todo o trabalho desenvolvido no projeto', 'RelatorioFinal'),
(37, 'Ilustração do projeto desenvolvido', '0', 'Descreve, de forma pouco\r\n clara e lógica, todo o trabalho desenvolvido no projeto', 'RelatorioFinal'),
(38, 'Ilustração do projeto desenvolvido', '0', 'Não se encontra ilustrado', 'RelatorioFinal'),
(39, 'Análise critica global da execução do projeto', '4.5', 'Analisa e critica as várias \r\netapas e momentos do projeto', 'RelatorioFinal'),
(40, 'Análise critica global da execução do projeto', '2.3', 'Analisa e critica apenas algumas etapas e momentos do projeto', 'RelatorioFinal'),
(41, 'Análise critica global da execução do projeto', '0', 'Não analisa nem critica nenhuma etapa e momento do projeto', 'RelatorioFinal'),
(42, 'Fundamentação da escolha do projeto', '4.5', 'Fundamenta com \r\nclareza a escolha do projeto', 'RelatorioFinal'),
(43, 'Fundamentação da escolha do projeto', '2.3', 'Fundamenta com pouca\r\n clareza a escolha do projeto', 'RelatorioFinal'),
(44, 'Fundamentação da escolha do projeto', '0', 'Não fundamenta com \r\nclareza a escolha do projeto', 'RelatorioFinal'),
(45, 'Entrega dentro do prazo estabelecido', '1', 'Entregou dentro\r\n do prazo estabelecido', 'RelatorioFinal'),
(46, 'Entrega dentro do prazo estabelecido', '0', 'Não entregou \r\ndentro do prazo estabelecido', 'RelatorioFinal'),
(47, 'Entrega dentro do prazo estabelecido', '1', 'Entregou dentro do prazo estabelecido', 'SupEscFormInt'),
(48, 'Entrega dentro do prazo estabelecido', '0', 'Não entregou dentro do prazo estabelecido', 'SupEscFormInt'),
(49, 'Redação escrita', '2', 'Escreve sem erros', 'SupEscFormInt'),
(50, 'Redação escrita', '1', 'Escreve com alguns erros', 'SupEscFormInt'),
(51, 'Redação escrita', '0', 'Escreve com muitos erros', 'SupEscFormInt'),
(52, 'Grau de consecução dos objetivos propostos', '4', 'Atingiu totalmente', 'SupEscFormInt'),
(53, 'Grau de consecução dos objetivos propostos', '2', 'Atingiu parcialmente', 'SupEscFormInt'),
(54, 'Grau de consecução dos objetivos propostos', '0', 'Não atingiu', 'SupEscFormInt'),
(55, 'Qualidade científica e técnica patenteada na aplic', '8', 'Demonstra total  dominio técnico e cientifico', 'SupEscFormInt'),
(56, 'Qualidade científica e técnica patenteada na aplic', '4', 'Demonstra algum domínio técnico e cientifico', 'SupEscFormInt'),
(57, 'Qualidade científica e técnica patenteada na aplic', '0', 'Não demonstra domínio técnico e cientifico', 'SupEscFormInt'),
(58, 'Comunicação Escrita', '2', 'Escreve de forma clara', 'SupEscFormInt'),
(59, 'Comunicação Escrita', '1', 'Escreve com alguma clareza', 'SupEscFormInt'),
(60, 'Comunicação Escrita', '0', 'Escreve com pouca clareza', 'SupEscFormInt'),
(61, 'Organização/estruturação do trabalho', '2', 'Apresenta de forma organizada e estruturada', 'SupEscFormInt'),
(62, 'Organização/estruturação do trabalho', '1', 'Apresenta de forma pouco organizada e estruturada', 'SupEscFormInt'),
(63, 'Organização/estruturação do trabalho', '0', 'Não apresenta de forma organizada e estruturada', 'SupEscFormInt'),
(64, 'Aspeto gráfico do trabalho', '1', 'Cumpre todos os requisitos definidos em regulamento geral', 'SupEscFormInt'),
(65, 'Aspeto gráfico do trabalho', '0.5', 'Cumpre alguns dos requisitos definidos em regulamento geral', 'SupEscFormInt'),
(66, 'Aspeto gráfico do trabalho', '0', 'Não cumpre nenhum dos requisitos definidos em regulamento geral', 'SupEscFormInt'),
(67, 'Domínio dos conteúdos', '8', 'Domina todos os \r\nconteúdos abordados no projeto', 'Apr_Oral_Defesa_Projeto'),
(68, 'Domínio dos conteúdos', '4', 'Domina os conteúdos, de forma\r\nsatisfatória, abordados no projeto', 'Apr_Oral_Defesa_Projeto'),
(69, 'Domínio dos conteúdos', '2', 'Domina poucos conteúdos abordados no projeto', 'Apr_Oral_Defesa_Projeto'),
(71, 'Domínio dos conteúdos', '0', 'Não domina nenhum dos\r\nconteúdos abordados no projeto', 'Apr_Oral_Defesa_Projeto'),
(72, 'Capacidade de argumentação na defesa do projeto', '7', 'Responde a\r\n todas as questões \r\ncolocadas de forma correta ', 'Apr_Oral_Defesa_Projeto'),
(73, 'Capacidade de argumentação na defesa do projeto', '5', 'Responde, de forma \r\ncorreta, a pelos menos\r\n 75% das questões colocadas', 'Apr_Oral_Defesa_Projeto'),
(74, 'Capacidade de argumentação na defesa do projeto', '3.5', 'Responde, de forma\r\n correta, a pelo menos \r\n 50% das questões colocadas', 'Apr_Oral_Defesa_Projeto'),
(75, 'Capacidade de argumentação na defesa do projeto', '2', 'Responde, de forma\r\n clara, a menos de 50%\r\n das questões colocadas', 'Apr_Oral_Defesa_Projeto'),
(76, 'Capacidade de argumentação na defesa do projeto', '0', 'Não responde a \r\nnenhuma questão', 'Apr_Oral_Defesa_Projeto'),
(77, 'Adequação dos recursos utilizados na exposição', '2.5', 'Totalmente adequados', 'Apr_Oral_Defesa_Projeto'),
(78, 'Adequação dos recursos utilizados na exposição', '1.3', 'Razoavelmente adequados', 'Apr_Oral_Defesa_Projeto'),
(79, 'Adequação dos recursos utilizados na exposição', '0', 'Nada adequados', 'Apr_Oral_Defesa_Projeto'),
(80, 'Qualidade das estratégias utilizadas na apresentaç', '2.5', 'Estratégias adequadas\r\n e que contribuem para a\r\n expressividade da apresentação', 'Apr_Oral_Defesa_Projeto'),
(81, 'Qualidade das estratégias utilizadas na apresentaç', '1.3', 'Estratégias razoavelmente\r\n adequadas e que contribuem para\r\n a expressividade da apresentação', 'Apr_Oral_Defesa_Projeto'),
(82, 'Qualidade das estratégias utilizadas na apresentaç', '0', 'Estratégias inadequadas\r\n e que não contribuem para\r\n a expressividade da apresentação', 'Apr_Oral_Defesa_Projeto'),
(83, 'Apresentação (fardamento e higiene pessoal)', '2', 'Fardamento e higiene pessoal cuidada', 'Prova_Supresa_cozinha'),
(84, 'Apresentação (fardamento e higiene pessoal)', '1', 'Fardamento e/ou higiene pessoal pouco cuidada', 'Prova_Supresa_cozinha'),
(85, 'Apresentação (fardamento e higiene pessoal)', '0', 'Fardamento e/ou higiene pessoal inaceitável', 'Prova_Supresa_cozinha'),
(86, 'Organização', '2', 'Organizado', 'Prova_Supresa_cozinha'),
(88, 'Organização', '1', 'Com alguma organização', 'Prova_Supresa_cozinha'),
(89, 'Organização', '0', 'Sem organização', 'Prova_Supresa_cozinha'),
(90, 'Aplicação de técnicas', '2', 'Aplica as técnicas', 'Prova_Supresa_cozinha'),
(91, 'Aplicação de técnicas', '1', 'Aplica com algumas técnicas', 'Prova_Supresa_cozinha'),
(92, 'Aplicação de técnicas', '0', 'Não Aplica as técnicas', 'Prova_Supresa_cozinha'),
(93, 'Manuseamento de material e equipamento', '2', 'Manuseia de forma apropriada', 'Prova_Supresa_cozinha'),
(94, 'Manuseamento de material e equipamento', '1', 'Manuseia com dificuldade', 'Prova_Supresa_cozinha'),
(95, 'Manuseamento de material e equipamento', '0', 'Manuseia de forma inapropriada', 'Prova_Supresa_cozinha'),
(96, 'Criatividade/Apresentação', '2', 'Criativo e com boa apresentação', 'Prova_Supresa_cozinha'),
(97, 'Criatividade/Apresentação', '1', 'Pouco criativo, mas com boa apresentação/Muito criativo, mas com fraca apresentação', 'Prova_Supresa_cozinha'),
(98, 'Criatividade/Apresentação', '0', 'Pouco criativo e com fraca apresentação', 'Prova_Supresa_cozinha'),
(99, 'Sabor', '2', 'Bom', 'Prova_Supresa_cozinha'),
(100, 'Sabor', '1', 'Satisfatório', 'Prova_Supresa_cozinha'),
(101, 'Sabor', '0', 'Mau', 'Prova_Supresa_cozinha'),
(102, 'Grau de cozedura dos alimentos', '2', 'Perfeita', 'Prova_Supresa_cozinha'),
(103, 'Grau de cozedura dos alimentos', '1', 'Razoável, mas aceitável', 'Prova_Supresa_cozinha'),
(104, 'Grau de cozedura dos alimentos', '0', 'Não aceitável ', 'Prova_Supresa_cozinha'),
(105, 'Consistência e textura dos alimentos', '2', 'Perfeita', 'Prova_Supresa_cozinha'),
(106, 'Consistência e textura dos alimentos', '1', 'Razoável, mas aceitável', 'Prova_Supresa_cozinha'),
(107, 'Consistência e textura dos alimentos', '0', 'Não aceitável', 'Prova_Supresa_cozinha'),
(108, 'Capacidade para ultrapassar dificuldades', '1', 'Demonstra capacidade', 'Prova_Supresa_cozinha'),
(109, 'Capacidade para ultrapassar dificuldades', '0.5', 'Demonstra dificuldade', 'Prova_Supresa_cozinha'),
(110, 'Capacidade para ultrapassar dificuldades', '0', 'Não demonstra capacidade', 'Prova_Supresa_cozinha'),
(111, 'Gestão de tempo', '1', 'Cumpriu', 'Prova_Supresa_cozinha'),
(112, 'Gestão de tempo', '0', 'Não cumpriu', 'Prova_Supresa_cozinha'),
(113, 'Normas de higiene e segurança alimentar', '2', 'Cumpre todas as normas', 'Prova_Supresa_cozinha'),
(114, 'Normas de higiene e segurança alimentar', '1', 'Cumpre com algumas normas', 'Prova_Supresa_cozinha'),
(115, 'Normas de higiene e segurança alimentar', '0', 'Não cumpre nenhuma normas', 'Prova_Supresa_cozinha'),
(116, 'Apresentação (fardamento e higiene pessoal)', '2', 'Fardamento e higiene pessoal cuidada', 'Prova_Criativa_cozinha'),
(117, 'Apresentação (fardamento e higiene pessoal)', '1', 'Fardamento e/ou higiene pessoal pouco cuidada', 'Prova_Criativa_cozinha'),
(118, 'Apresentação (fardamento e higiene pessoal)', '0', 'Fardamento e/ou higiene pessoal inaceitável', 'Prova_Criativa_cozinha'),
(119, 'Organização', '2', 'Organizado', 'Prova_Criativa_cozinha'),
(120, 'Organização', '1', 'Com alguma organização', 'Prova_Criativa_cozinha'),
(121, 'Organização', '0', 'Sem organização', 'Prova_Criativa_cozinha'),
(122, 'Aplicação de técnicas', '2', 'Aplica as técnicas', 'Prova_Criativa_cozinha'),
(123, 'Aplicação de técnicas', '1', 'Aplica com algumas técnicas', 'Prova_Criativa_cozinha'),
(124, 'Aplicação de técnicas', '0', 'Não Aplica as técnicas', 'Prova_Criativa_cozinha'),
(125, 'Manuseamento de material e equipamento', '2', 'Manuseia de forma apropriada', 'Prova_Criativa_cozinha'),
(126, 'Manuseamento de material e equipamento', '1', 'Manuseia com dificuldade', 'Prova_Criativa_cozinha'),
(127, 'Manuseamento de material e equipamento', '0', 'Manuseia de forma inapropriada', 'Prova_Criativa_cozinha'),
(128, 'Criatividade/Apresentação', '2', 'Criativo e com boa apresentação', 'Prova_Criativa_cozinha'),
(129, 'Criatividade/Apresentação', '1', 'Pouco criativo, mas com boa apresentação/Muito criativo, mas com fraca apresentação', 'Prova_Criativa_cozinha'),
(130, 'Criatividade/Apresentação', '0', 'Pouco criativo e com fraca apresentação', 'Prova_Criativa_cozinha'),
(131, 'Sabor', '2', 'Bom', 'Prova_Criativa_cozinha'),
(132, 'Sabor', '1', 'Satisfatório', 'Prova_Criativa_cozinha'),
(133, 'Sabor', '0', 'Mau', 'Prova_Criativa_cozinha'),
(134, 'Grau de cozedura dos alimentos', '2', 'Perfeita', 'Prova_Criativa_cozinha'),
(135, 'Grau de cozedura dos alimentos', '1', 'Razoável, mas aceitável', 'Prova_Criativa_cozinha'),
(136, 'Grau de cozedura dos alimentos', '0', 'Não aceitável', 'Prova_Criativa_cozinha'),
(137, 'Consistência e textura dos alimentos', '2', 'Perfeita', 'Prova_Criativa_cozinha'),
(140, 'Capacidade para ultrapassar dificuldades', '1', 'Demonstra capacidade', 'Prova_Criativa_cozinha'),
(141, 'Capacidade para ultrapassar dificuldades', '0,5', 'Demonstra dificuldade', 'Prova_Criativa_cozinha'),
(142, 'Capacidade para ultrapassar dificuldades', '0', 'Não demonstra capacidade', 'Prova_Criativa_cozinha'),
(143, 'Gestão de tempo', '1', 'Cumpriu', 'Prova_Criativa_cozinha'),
(144, 'Gestão de tempo', '0', 'Não cumpriu', 'Prova_Criativa_cozinha'),
(145, 'Normas de higiene e segurança alimentar', '2', 'Cumpre todas as normas', 'Prova_Criativa_cozinha'),
(146, 'Normas de higiene e segurança alimentar', '1', 'Cumpre com algumas normas', 'Prova_Criativa_cozinha'),
(147, 'Normas de higiene e segurança alimentar', '0', 'Não cumpre nenhuma normas', 'Prova_Criativa_cozinha'),
(148, 'Consistência e textura dos alimentos', '1', 'Razoável, mas aceitável', 'Prova_Criativa_cozinha'),
(149, 'Consistência e textura dos alimentos', '0', 'Não aceitável', 'Prova_Criativa_cozinha'),
(150, 'NOME E DESCRIÇÃO DA EMPRESA', '3', 'Descreve de forma clara e lógica', 'Sumario_Executivo_Video'),
(151, 'NOME E DESCRIÇÃO DA EMPRESA', '2', 'Descreve, mas com pouca clareza', 'Sumario_Executivo_Video'),
(152, 'NOME E DESCRIÇÃO DA EMPRESA', '1', 'Descreve sem clareza', 'Sumario_Executivo_Video'),
(153, 'MISSÃO VALORES E OBJETIVOS', '3', 'Descreve de forma clara e lógica', 'Sumario_Executivo_Video'),
(155, 'MISSÃO VALORES E OBJETIVOS', '2', 'Descreve, mas com pouca clareza', 'Sumario_Executivo_Video'),
(156, 'MISSÃO VALORES E OBJETIVOS', '1', 'Descreve sem clareza', 'Sumario_Executivo_Video'),
(157, 'DESCRIÇÃO DO PRODUTO / SERVIÇO', '3', 'Descreve de forma clara e lógica', 'Sumario_Executivo_Video'),
(158, 'DESCRIÇÃO DO PRODUTO / SERVIÇO', '2', 'Descreve, mas com pouca clareza', 'Sumario_Executivo_Video'),
(159, 'DESCRIÇÃO DO PRODUTO / SERVIÇO', '1', 'Descreve sem clareza', 'Sumario_Executivo_Video'),
(160, 'QUALIDADE GRÁFICA', '3', 'Excelente qualidade', 'Sumario_Executivo_Video'),
(161, 'QUALIDADE GRÁFICA', '2', 'Qualidade razoável', 'Sumario_Executivo_Video'),
(162, 'QUALIDADE GRÁFICA', '1', 'Pouca Qualidade', 'Sumario_Executivo_Video'),
(163, 'CRIATIVIDADE', '3', 'Muito criativo', 'Sumario_Executivo_Video'),
(164, 'CRIATIVIDADE', '2', 'Alguma criatividade ', 'Sumario_Executivo_Video'),
(165, 'CRIATIVIDADE', '1', 'Sem criatividade', 'Sumario_Executivo_Video'),
(166, 'MENSAGEM COMERCIAL', '3', 'Explicita', 'Sumario_Executivo_Video'),
(167, 'MENSAGEM COMERCIAL', '2', 'Pouca clara', 'Sumario_Executivo_Video'),
(168, 'MENSAGEM COMERCIAL', '1', 'Nada clara', 'Sumario_Executivo_Video'),
(169, 'PRAZO DE ENTREGA', '2', 'Dentro do prazo', 'Sumario_Executivo_Video'),
(170, 'PRAZO DE ENTREGA', '0', 'Fora do prazo', 'Sumario_Executivo_Video'),
(171, 'ORGANIZAÇÃO E VISIBILIDADE DO ESPAÇO', '3', 'Organizado e com visibilidade', 'Feira_Empreendedorismo'),
(172, 'ORGANIZAÇÃO E VISIBILIDADE DO ESPAÇO', '2', 'Organizado, mas com pouca visibilidade', 'Feira_Empreendedorismo'),
(173, 'ORGANIZAÇÃO E VISIBILIDADE DO ESPAÇO', '1', 'Sem organização e com visibilidade reduzida', 'Feira_Empreendedorismo'),
(174, 'IDENTIFICAÇÃO DO TIPO DE SERVIÇO E/OU PRODUTO', '2', 'Identifica claramente', 'Feira_Empreendedorismo'),
(175, 'IDENTIFICAÇÃO DO TIPO DE SERVIÇO E/OU PRODUTO', '1', 'Identifica com pouca clareza', 'Feira_Empreendedorismo'),
(176, 'IDENTIFICAÇÃO DO TIPO DE SERVIÇO E/OU PRODUTO', '0', 'Não identifica', 'Feira_Empreendedorismo'),
(177, 'IDENTIFICAÇÃO DA EMPRESA', '2', 'Identifica claramente', 'Feira_Empreendedorismo'),
(178, 'IDENTIFICAÇÃO DA EMPRESA', '1', 'Identifica com pouca clareza', 'Feira_Empreendedorismo'),
(179, 'IDENTIFICAÇÃO DA EMPRESA', '0', 'Não identifica', 'Feira_Empreendedorismo'),
(180, 'QUALIDADE DO MERCHANDISING', '3', 'Excelente qualidade', 'Feira_Empreendedorismo'),
(181, 'QUALIDADE DO MERCHANDISING', '2', 'Qualidade razoável', 'Feira_Empreendedorismo'),
(182, 'QUALIDADE DO MERCHANDISING', '1', 'Pouca Qualidade', 'Feira_Empreendedorismo'),
(183, 'POSTURA E APRESENTAÇÃO', '3', 'Execlente', 'Feira_Empreendedorismo'),
(184, 'POSTURA E APRESENTAÇÃO', '2', 'Razoável', 'Feira_Empreendedorismo'),
(185, 'POSTURA E APRESENTAÇÃO', '1', 'Fraca', 'Feira_Empreendedorismo'),
(186, 'CAPACIDADE DE APRESENTAÇÃO DO NEGÓCIO', '3', 'Execlente', 'Feira_Empreendedorismo'),
(187, 'CAPACIDADE DE APRESENTAÇÃO DO NEGÓCIO', '2', 'Razoável', 'Feira_Empreendedorismo'),
(188, 'CAPACIDADE DE APRESENTAÇÃO DO NEGÓCIO', '1', 'Fraca', 'Feira_Empreendedorismo'),
(189, 'RESPOSTA ÀS PERGUNTAS FORMULADAS', '2', 'Responde corretamente sem hesitações', 'Feira_Empreendedorismo'),
(190, 'RESPOSTA ÀS PERGUNTAS FORMULADAS', '1', 'Responde com pouca clareza ', 'Feira_Empreendedorismo'),
(191, 'RESPOSTA ÀS PERGUNTAS FORMULADAS', '0', 'Não responde', 'Feira_Empreendedorismo'),
(192, 'ESTRATÉGIAS DINAMIZADORAS DO ESPAÇO', '2', 'Desenvolveu com qualidade', 'Feira_Empreendedorismo'),
(193, 'ESTRATÉGIAS DINAMIZADORAS DO ESPAÇO', '1', 'Desenvolveu sem qualidade', 'Feira_Empreendedorismo'),
(194, 'ESTRATÉGIAS DINAMIZADORAS DO ESPAÇO', '0', 'Não desenvolveu', 'Feira_Empreendedorismo'),
(195, 'Ambito', '4', 'Vocabulário rico e alargado\r\nFrases complexas, variadas e bem ligadas', 'PAPLinguaEstrangeira'),
(196, 'Ambito', '2', 'Vocabulário suficiente e médio\r\nFrases simples, mas razoavelmente articuladas\r\nVocabulário suficiente e médio\r\nFrases simples, mas razoavelmente articuladas', 'PAPLinguaEstrangeira'),
(197, 'Ambito', '1', 'Vocabulário pobre e insuficiente\r\nFrases soltas e curtas ', 'PAPLinguaEstrangeira'),
(198, 'Correção', '4', 'Pronúncia e entoação claras e naturais, sem hesitações', 'PAPLinguaEstrangeira'),
(199, 'Correção', '2', 'Pronúncia e entoação claras e naturais, embora com algumas hesitações de articulação e dicção', 'PAPLinguaEstrangeira'),
(200, 'Correção', '1', 'Pronúncia e entoação pouco claras e pouco naturais', 'PAPLinguaEstrangeira'),
(201, 'Fluência', '4', 'Ritmo adequado', 'PAPLinguaEstrangeira'),
(202, 'Fluência', '2', 'Um pouco rápido ou um pouco lento', 'PAPLinguaEstrangeira'),
(203, 'Fluência', '1', 'Demasiado rápido ou demasiado lento', 'PAPLinguaEstrangeira'),
(204, 'Desenvolvimento Temático', '4', 'Discurso coerente, bem estruturado e completo', 'PAPLinguaEstrangeira'),
(205, 'Desenvolvimento Temático', '2', 'Informação pertinente e progressão/estrutura coerente, embora com omissões', 'PAPLinguaEstrangeira'),
(206, 'Desenvolvimento Temático', '1', 'Discurso pouco coerente e incompleto', 'PAPLinguaEstrangeira'),
(207, 'Interação', '4', 'Postura natural e aberta, expressiva e adequada \r\nEstabelecimento de contacto visual (sem se perder no discurso)\r\n', 'PAPLinguaEstrangeira'),
(208, 'Interação', '2', 'Algum nervosismo / Pouca expressividade\r\nCom pouco contacto visual e pouco à-vontade \r\n', 'PAPLinguaEstrangeira'),
(209, 'Interação', '1', 'Nervosismo / inexpressividade / Sem contactar visualmente com o interlocutor /Dependente de apontamentos ', 'PAPLinguaEstrangeira');

-- --------------------------------------------------------

--
-- Estrutura da tabela `curso`
--

CREATE TABLE `curso` (
  `idcurso` int(11) NOT NULL,
  `nomecurso` varchar(50) NOT NULL,
  `sigla` varchar(10) NOT NULL,
  `cicloformacao` varchar(15) NOT NULL,
  `anoletivo` varchar(15) NOT NULL,
  `professor` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `curso`
--

INSERT INTO `curso` (`idcurso`, `nomecurso`, `sigla`, `cicloformacao`, `anoletivo`, `professor`) VALUES
(4, 'Técnico de Informática de Gestão', 'TIG', '2018/2021', '2021', '1'),
(5, 'Técnico Comercio', 'TC', '2018/2021', '2021', '5000'),
(7, 'Técnico Cozinha Pastelaria', 'TCP', '2018/2021', '2021', '192');

-- --------------------------------------------------------

--
-- Estrutura da tabela `preprojeto`
--

CREATE TABLE `preprojeto` (
  `Nutilizador` int(11) NOT NULL,
  `idcriterio` int(11) NOT NULL,
  `faze` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `preprojeto`
--

INSERT INTO `preprojeto` (`Nutilizador`, `idcriterio`, `faze`) VALUES
(2513, 24, 'Preprojeto'),
(2513, 29, 'Preprojeto'),
(2513, 11, 'Preprojeto'),
(2513, 12, 'Preprojeto'),
(2513, 14, 'Preprojeto'),
(2513, 27, 'Preprojeto'),
(2513, 19, 'Preprojeto'),
(2513, 20, 'Preprojeto'),
(2513, 66, 'SupEscFormInt'),
(2513, 58, 'SupEscFormInt'),
(2513, 48, 'SupEscFormInt'),
(2513, 53, 'SupEscFormInt'),
(2513, 61, 'SupEscFormInt'),
(2513, 56, 'SupEscFormInt'),
(2513, 49, 'SupEscFormInt'),
(2513, 77, 'Apr_Oral_Defesa_Projeto'),
(2513, 74, 'Apr_Oral_Defesa_Projeto'),
(2513, 67, 'Apr_Oral_Defesa_Projeto'),
(2513, 81, 'Apr_Oral_Defesa_Projeto'),
(2513, 39, 'RelatorioFinal'),
(2513, 46, 'RelatorioFinal'),
(2513, 42, 'RelatorioFinal'),
(2513, 36, 'RelatorioFinal'),
(2513, 195, 'PAPLinguaEstrangeira'),
(2513, 199, 'PAPLinguaEstrangeira'),
(2513, 204, 'PAPLinguaEstrangeira'),
(2513, 202, 'PAPLinguaEstrangeira'),
(2513, 208, 'PAPLinguaEstrangeira');

-- --------------------------------------------------------

--
-- Estrutura da tabela `relatoriofinal`
--

CREATE TABLE `relatoriofinal` (
  `Nutilizador` int(11) NOT NULL,
  `idcriterio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `trabalhodesenvolvido`
--

CREATE TABLE `trabalhodesenvolvido` (
  `idtrabdesenvolvido` int(11) NOT NULL,
  `numeroaluno` int(11) NOT NULL,
  `notatrabdesenvolvido` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `trabalhodesenvolvido`
--

INSERT INTO `trabalhodesenvolvido` (`idtrabdesenvolvido`, `numeroaluno`, `notatrabdesenvolvido`) VALUES
(4, 2513, 18);

-- --------------------------------------------------------

--
-- Estrutura da tabela `utilizador`
--

CREATE TABLE `utilizador` (
  `Nutilizador` int(11) NOT NULL,
  `Nomeutilizador` varchar(50) NOT NULL,
  `Cargo` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `imagem` text NOT NULL,
  `pass` varchar(50) NOT NULL,
  `curso` int(11) NOT NULL,
  `Projeto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `utilizador`
--

INSERT INTO `utilizador` (`Nutilizador`, `Nomeutilizador`, `Cargo`, `email`, `imagem`, `pass`, `curso`, `Projeto`) VALUES
(1, 'SIM', 'Professor', 'sdfg', 'anime-anime-girls-honkai-impact-3rd-bronya-zaychik-hd-wallpaper-preview.jpg', 'olhala', 0, ''),
(2, 'SIM2', 'Professor', 'sdfgh', 'logitech-stereo-speakers-z120.jpg', 'ai', 0, ''),
(2513, 'Bruno Horta', 'Aluno', 'bhorta.aluno@epalvito.com', 'transferir.png', 'maisoumenosisso', 4, 'Software para a avaliação das Provas de Aptidão Profissional'),
(10000, 'Admin', 'Admin', 'admin@epalvito.com', 'logo_epalvito.png', 'ADMINEPA', 0, '');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `autoavaliacao`
--
ALTER TABLE `autoavaliacao`
  ADD PRIMARY KEY (`idautoavaliacao`);

--
-- Índices para tabela `avaliacaogeral`
--
ALTER TABLE `avaliacaogeral`
  ADD PRIMARY KEY (`idavaliacao`);

--
-- Índices para tabela `criterios`
--
ALTER TABLE `criterios`
  ADD PRIMARY KEY (`idcriterio`);

--
-- Índices para tabela `curso`
--
ALTER TABLE `curso`
  ADD PRIMARY KEY (`idcurso`);

--
-- Índices para tabela `preprojeto`
--
ALTER TABLE `preprojeto`
  ADD KEY `Nutilizador` (`Nutilizador`),
  ADD KEY `idcriterio` (`idcriterio`);

--
-- Índices para tabela `relatoriofinal`
--
ALTER TABLE `relatoriofinal`
  ADD KEY `utilizador` (`Nutilizador`);

--
-- Índices para tabela `trabalhodesenvolvido`
--
ALTER TABLE `trabalhodesenvolvido`
  ADD PRIMARY KEY (`idtrabdesenvolvido`);

--
-- Índices para tabela `utilizador`
--
ALTER TABLE `utilizador`
  ADD PRIMARY KEY (`Nutilizador`),
  ADD KEY `curso` (`curso`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `autoavaliacao`
--
ALTER TABLE `autoavaliacao`
  MODIFY `idautoavaliacao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `avaliacaogeral`
--
ALTER TABLE `avaliacaogeral`
  MODIFY `idavaliacao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de tabela `criterios`
--
ALTER TABLE `criterios`
  MODIFY `idcriterio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=211;

--
-- AUTO_INCREMENT de tabela `curso`
--
ALTER TABLE `curso`
  MODIFY `idcurso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `trabalhodesenvolvido`
--
ALTER TABLE `trabalhodesenvolvido`
  MODIFY `idtrabdesenvolvido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `preprojeto`
--
ALTER TABLE `preprojeto`
  ADD CONSTRAINT `Nutilizador` FOREIGN KEY (`Nutilizador`) REFERENCES `utilizador` (`Nutilizador`),
  ADD CONSTRAINT `idcriterio` FOREIGN KEY (`idcriterio`) REFERENCES `criterios` (`idcriterio`);

--
-- Limitadores para a tabela `relatoriofinal`
--
ALTER TABLE `relatoriofinal`
  ADD CONSTRAINT `utilizador` FOREIGN KEY (`Nutilizador`) REFERENCES `utilizador` (`Nutilizador`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
