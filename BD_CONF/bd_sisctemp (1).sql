-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 05-Mar-2024 às 11:49
-- Versão do servidor: 10.4.28-MariaDB
-- versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bd_sisctemp`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `candidato`
--

CREATE TABLE `candidato` (
  `id` int(11) NOT NULL,
  `nomeCompleto` varchar(255) DEFAULT NULL,
  `cpf` varchar(20) DEFAULT NULL,
  `identidadeOrgaoExp` varchar(255) DEFAULT NULL,
  `nacionalidade` varchar(255) DEFAULT NULL,
  `sexo` varchar(10) DEFAULT NULL,
  `estadoCivil` varchar(255) DEFAULT NULL,
  `filiacaoPai` varchar(255) DEFAULT NULL,
  `filiacaoMae` varchar(255) DEFAULT NULL,
  `dataNascimento` date DEFAULT NULL,
  `numDependentes` varchar(20) DEFAULT NULL,
  `nomeSocial` varchar(255) DEFAULT NULL,
  `cep` varchar(10) DEFAULT NULL,
  `estado` varchar(255) DEFAULT NULL,
  `cidade` varchar(255) DEFAULT NULL,
  `logradouro` varchar(255) DEFAULT NULL,
  `bairro` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `telefoneContato` varchar(20) DEFAULT NULL,
  `telefoneRecados` varchar(20) DEFAULT NULL,
  `tempoServicoMilitar` tinyint(1) DEFAULT NULL,
  `anosMilitar` varchar(20) DEFAULT NULL,
  `mesesMilitar` varchar(20) DEFAULT NULL,
  `diasMilitar` varchar(20) DEFAULT NULL,
  `senha` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `candidato`
--

INSERT INTO `candidato` (`id`, `nomeCompleto`, `cpf`, `identidadeOrgaoExp`, `nacionalidade`, `sexo`, `estadoCivil`, `filiacaoPai`, `filiacaoMae`, `dataNascimento`, `numDependentes`, `nomeSocial`, `cep`, `estado`, `cidade`, `logradouro`, `bairro`, `email`, `telefoneContato`, `telefoneRecados`, `tempoServicoMilitar`, `anosMilitar`, `mesesMilitar`, `diasMilitar`, `senha`) VALUES
(2, 'JORGE RICARDO ANDRADE MARQUES', '703.585.934-92', '3753225', 'Brasileiro', 'Masculino', 'Casado(a)', 'PAI', 'MAE', '2024-02-07', '2', 'nao', '58428-650', 'PB', 'CAMPINA GRANDE', 'RUA PROFESSORA LUIZA BARBOSA LEAL', 'BELA VISTA', 'jorge.github.progamador@gmail.com', '(83) 99997-8522', '(83) 99978-5222', 0, '0', '0', '0', '123');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cursos_complementares_ott`
--

CREATE TABLE `cursos_complementares_ott` (
  `id_cad` varchar(255) DEFAULT NULL,
  `nomeCurso` varchar(255) DEFAULT NULL,
  `cargaHoraria` int(11) DEFAULT NULL,
  `dataConclusao` date DEFAULT NULL,
  `docAnexo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `cursos_complementares_ott`
--

INSERT INTO `cursos_complementares_ott` (`id_cad`, `nomeCurso`, `cargaHoraria`, `dataConclusao`, `docAnexo`) VALUES
(NULL, 'Carpinteiro', 40, NULL, 'uploads/2/cursos_complementares/anexo.');

-- --------------------------------------------------------

--
-- Estrutura da tabela `curso_comp_anxr`
--

CREATE TABLE `curso_comp_anxr` (
  `id` int(11) NOT NULL,
  `nome_curso` varchar(255) NOT NULL,
  `carga_horaria` varchar(255) DEFAULT NULL,
  `data_conclusao` date DEFAULT NULL,
  `certificado` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `curso_comp_anxr`
--

INSERT INTO `curso_comp_anxr` (`id`, `nome_curso`, `carga_horaria`, `data_conclusao`, `certificado`) VALUES
(1, 'Carpinteiro', '40', '0000-00-00', '0'),
(3, 'padeiro', '60', '0000-00-00', '100');

-- --------------------------------------------------------

--
-- Estrutura da tabela `especialidade_ott`
--

CREATE TABLE `especialidade_ott` (
  `id` int(11) NOT NULL,
  `especialidade` varchar(255) NOT NULL,
  `guarnicao` varchar(255) NOT NULL,
  `pos_obrig` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `especialidade_ott`
--

INSERT INTO `especialidade_ott` (`id`, `especialidade`, `guarnicao`, `pos_obrig`) VALUES
(1, 'Administração', 'Recife-PE', 'sim');

-- --------------------------------------------------------

--
-- Estrutura da tabela `experiencia_militar_ott`
--

CREATE TABLE `experiencia_militar_ott` (
  `id_cad` varchar(255) DEFAULT NULL,
  `local_servico` varchar(255) DEFAULT NULL,
  `funcao_desempenhada` varchar(255) DEFAULT NULL,
  `data_inicio_servico` date DEFAULT NULL,
  `data_termino_servico` date DEFAULT NULL,
  `anexo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `experiencia_militar_ott`
--

INSERT INTO `experiencia_militar_ott` (`id_cad`, `local_servico`, `funcao_desempenhada`, `data_inicio_servico`, `data_termino_servico`, `anexo`) VALUES
('2', '31', 'SOLDADO', '2024-02-08', '2024-02-15', 'uploads/2/exp_mil_ott/SOLDADO.pdf');

-- --------------------------------------------------------

--
-- Estrutura da tabela `expe_prof_civil_ott`
--

CREATE TABLE `expe_prof_civil_ott` (
  `id_cad` varchar(255) DEFAULT NULL,
  `descricao` text DEFAULT NULL,
  `dataInicio` date DEFAULT NULL,
  `dataFim` date DEFAULT NULL,
  `anexo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `expe_prof_civil_ott`
--

INSERT INTO `expe_prof_civil_ott` (`id_cad`, `descricao`, `dataInicio`, `dataFim`, `anexo`) VALUES
('2', '123', '2024-02-06', '2024-02-29', 'uploads/2/exp_prof_civil/anexo.pdf'),
('2', 'conhecimento', '2024-02-12', '2024-02-12', 'uploads/2/exp_prof_civil/conhecimento.pdf');

-- --------------------------------------------------------

--
-- Estrutura da tabela `guarnicao_ott`
--

CREATE TABLE `guarnicao_ott` (
  `id` int(255) NOT NULL,
  `guarnicao` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `guarnicao_ott`
--

INSERT INTO `guarnicao_ott` (`id`, `guarnicao`) VALUES
(2, 'Recife-PE');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tab_cad_esp_doc_obg`
--

CREATE TABLE `tab_cad_esp_doc_obg` (
  `id_cad` varchar(11) NOT NULL,
  `guarnicao` varchar(255) NOT NULL,
  `especialidade` varchar(255) NOT NULL,
  `diploma` varchar(255) NOT NULL,
  `carteira_conselho` varchar(255) NOT NULL,
  `certidoes_negativas` varchar(255) NOT NULL,
  `pos_graduacoes` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `tab_cad_esp_doc_obg`
--

INSERT INTO `tab_cad_esp_doc_obg` (`id_cad`, `guarnicao`, `especialidade`, `diploma`, `carteira_conselho`, `certidoes_negativas`, `pos_graduacoes`) VALUES
('1', 'Recife-PE', 'Administração', '', '', '', ''),
('2', 'Recife-PE', 'Administração', 'uploads/2/diploma.pdf', 'uploads/2/carteira_conselho.pdf', 'uploads/2/certidoes_negativas.pdf', 'uploads/2/pos_graduacoes.pdf');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `cpf` varchar(25) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `tipo_usuario` varchar(20) NOT NULL,
  `nome` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `cpf`, `senha`, `tipo_usuario`, `nome`) VALUES
(2, '703.585.934-92', '123', 'candidato', 'JORGE RICARDO ANDRADE MARQUES');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `candidato`
--
ALTER TABLE `candidato`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `curso_comp_anxr`
--
ALTER TABLE `curso_comp_anxr`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `especialidade_ott`
--
ALTER TABLE `especialidade_ott`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `guarnicao_ott`
--
ALTER TABLE `guarnicao_ott`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tab_cad_esp_doc_obg`
--
ALTER TABLE `tab_cad_esp_doc_obg`
  ADD PRIMARY KEY (`id_cad`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `candidato`
--
ALTER TABLE `candidato`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `curso_comp_anxr`
--
ALTER TABLE `curso_comp_anxr`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `especialidade_ott`
--
ALTER TABLE `especialidade_ott`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `guarnicao_ott`
--
ALTER TABLE `guarnicao_ott`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
