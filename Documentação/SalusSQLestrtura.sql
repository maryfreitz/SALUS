CREATE DATABASE agentedesaúde;
USE agentedesaúde;

CREATE TABLE `cadastro_agente` (
  `id_agenteCdastro` int NOT NULL AUTO_INCREMENT,
  `emailAgente` text NOT NULL,
  `nomeCompleto` text NOT NULL,
  `senhaCriada` int NOT NULL,
  PRIMARY KEY (`id_agenteCadastro`)
);

CREATE TABLE `login_agente` (
  `id_agente` int NOT NULL AUTO_INCREMENT,
  `nome_agenteSaude` text NOT NULL,
  `senha` int NOT NULL,
  PRIMARY KEY (`id_agente`)
);

INSERT INTO `login_agente` (`id_agente`, `email_agente`, `senha`) VALUES
(1, 'maryana.leite1@aluno.ce.gov.br', '12345678'),
(13, 'renaneeduardo@gmail.com', '12345678');

CREATE TABLE `bolsa_familia` (
  `NIS` int NOT NULL AUTO_INCREMENT,
  `nome_familia` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `nascimento` date NOT NULL,
  `peso` int NOT NULL,
  `altura` int NOT NULL,
  `vacinacao` text NOT NULL,
  `infor_gestacional` text ,
  `data_ultimoPreNatal` date ,
  PRIMARY KEY (`NIS`)
); 

CREATE TABLE `medicamento_psicologo` (
  `cartaoSUS` int NOT NULL AUTO_INCREMENT,
  `nome_paciente` text NOT NULL,
  `medicamentos` text NOT NULL,
  PRIMARY KEY (`cartaoSUS`)
); 

CREATE TABLE `visita_domiciliar` (
  `id_domicilio` int NOT NULL AUTO_INCREMENT,
  `nome` text NOT NULL,
  `idade` int NOT NULL,
  `motivo_visita` text NOT NULL,
  `entregas` text NOT NULL,
  `data` date NOT NULL,
  `agente` int NOT NULL,
  PRIMARY KEY (`id_domicilio`)
);
