
--
CREATE DATABASE IF NOT EXISTS `bookstage` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `bookstage`;

DROP TABLE IF EXISTS `generos_livros`;
DROP TABLE IF EXISTS `livros_leitores`;
DROP TABLE IF EXISTS `log_mensagens`;
DROP TABLE IF EXISTS `livros`;
DROP TABLE IF EXISTS `leitores`;
DROP TABLE IF EXISTS `generos`;
DROP TABLE IF EXISTS `salas`;
DROP TABLE IF EXISTS `mensagens`;


-- --------------------------------------------------------

--
-- Estrutura da tabela `generos`
--

CREATE TABLE `generos` (
  `idgeneros` int NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `descricao` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `livros`
--

CREATE TABLE `livros` (
  `idlivros` INT PRIMARY KEY AUTO_INCREMENT,
  `nome` varchar(200) NOT NULL,
  `editora` varchar(20) NOT NULL,
  `autor` varchar(100) NOT NULL,
  `generos` varchar(50) NOT NULL,
  `descricao` mediumtext NOT NULL,
  `isbn` varchar(22) NOT NULL,
  `capa` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


-- --------------------------------------------------------

--
-- Estrutura da tabela `generos_livros`
--

CREATE TABLE `generos_livros` (
  `generos_idgeneros` int NOT NULL,
  `livro_idlivro` int NOT NULL,
  FOREIGN KEY fk_generos (generos_idgeneros) REFERENCES generos (idgeneros),
  FOREIGN KEY fk_livros (livro_idlivro) REFERENCES livros (idlivros)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `leitores`
--

CREATE TABLE `leitores` (
  `idleitores` INT PRIMARY KEY AUTO_INCREMENT,
  `nome` varchar(200) NOT NULL,
  `usuario` varchar(200) NOT NULL,
  `data_nasc` date NOT NULL,
  `telefone` bigint(11) ZEROFILL NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(32) NOT NULL,
  `sexo` varchar(1) NOT NULL,
  `foto` varchar(255)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `livros_leitores`
--

CREATE TABLE `livros_leitores` (
  `idlivros_leitores` INT PRIMARY KEY AUTO_INCREMENT,
  `data` date NOT NULL,
  `lidos` varchar(1) CHECK (lidos in ('s','n')),
  `quero_ler` varchar(1) CHECK (quero_ler in ('s','n')),
  `favoritos` varchar(1) CHECK (favoritos in ('s','n')),
  `livros_idlivros` INT NOT NULL,
  `leitores_idleitores` INT NOT NULL,
  FOREIGN KEY fk_livro (livros_idlivros) REFERENCES livros (idlivros),
  FOREIGN KEY fk_leitor (leitores_idleitores) REFERENCES leitores (idleitores)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `log_mensagens`
--
CREATE TABLE IF NOT EXISTS `mensagens` (
  `id` INT PRIMARY KEY AUTO_INCREMENT,

  `id_de` varchar(200) NOT NULL,
  `id_para` varchar(200) NOT NULL,
  `mensagem` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `salas`
--

CREATE TABLE `salas` (
  `idsala` INT PRIMARY KEY AUTO_INCREMENT,
  `participantes` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `log_mensagens` (
  `idlog_mensagens` INT PRIMARY KEY AUTO_INCREMENT,
  `cod_salas` int NOT NULL,
  `cod_usuario` int NOT NULL,
  `livro` varchar(50) NOT NULL,
  `data` date NOT NULL,
  `hora` time NOT NULL,
  `mensagem_id` int NOT NULL,
  FOREIGN KEY fk_mensagens (mensagem_id) REFERENCES mensagens (id),
  FOREIGN KEY fk_salas (cod_salas) REFERENCES salas (idsala),
  FOREIGN KEY fk_usuario (cod_usuario) REFERENCES leitores (idleitores)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
