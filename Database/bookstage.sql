
--
CREATE DATABASE IF NOT EXISTS `bookstage` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `bookstage`;

DROP TABLE IF EXISTS `generos_livros`;
DROP TABLE IF EXISTS `livros_leitores`;
DROP TABLE IF EXISTS `salas`;
DROP TABLE IF EXISTS `mensagens`;
DROP TABLE IF EXISTS `log_mensagens`;
DROP TABLE IF EXISTS `livros`;
DROP TABLE IF EXISTS `leitores`;
DROP TABLE IF EXISTS `generos`;


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
  `email` varchar(30) NOT NULL,
  `senha` varchar(32) NOT NULL,
  `sexo` varchar(1) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `livros_leitores`
--

CREATE TABLE `livros_leitores` (
  `id_livros` INT NOT NULL,
  `id_leitores` int NOT NULL,
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

-- --------------------------------------------------------

--
-- Estrutura da tabela `mensagens`
--


--
-- Extraindo dados da tabela `livros`
--


INSERT INTO `livros` (`idlivros`, `nome`, `editora`, `autor`, `generos`, `descricao`, `isbn`, `capa`) VALUES
(1, 'A Cidade Dos Fantasmas', 'Galera ', 'Victoria Schwab\r\n', 'sobrenatural ', '', '9786555872057', 'acidadedosfantasmas'),
(2, 'A Culpa e das Estrelas', 'Intrínseca ', 'John Green \r\n', 'comedia, drama/tragedia, romance ', '', '9788580575019', 'aculpaedasestrelas'),
(3, 'A Espada do Verão', 'Intrínseca ', 'Rick Riordan\r\n', 'fantasia, ficçao ‎ ', '', '9788580577952', 'aespadadoverao'),
(4, 'A Garota Dinamarquesa', 'Fábrica231 ', 'David Ebershoff\r\n', 'lgbtqia+, romance ', '', '9788568432440', 'agarotadinamarquesa'),
(5, 'A Ultima Festa', 'Intrínseca ', 'Lucy Foley\r\n', 'misterio ', '', '9788551005729', 'aultimafesta'),
(6, 'Azul e a Cor Mais Quente', 'Martins Fontes ', 'Julie Maroh\r\n', 'lgbtqia+, romance ‎ ', '', '9788580631258', 'azuleacormaisquente'),
(7, 'Bruxos e Bruxas', 'Novo Conceito  ', 'James Patterson\r\n', 'ficçao, misterio, sobrenatural, suspense ', '', '9788581632216', 'bruxosebruxas'),
(8, 'O Guardiao: Cidades das Sombras', 'Geração Editorial ', 'Daniel Polansky\r\n', ' sobrenatural ‎ ', '', '9788581300603', 'cidadedassombrasoguardiao'),
(9, 'Diario de um Banana', 'VR Editora ', 'Jeff Kinney\r\n', 'comedia, ficçao ‎ ', '', '9788576831303', 'diariodeumbanana'),
(10, 'Dramas da Obsessão', 'FEB ', 'Yvonne do Amaral Pereira\r\n', 'drama/tragedia,  ', '', '9788573287011', 'dramasdaobsessao'),
(11, 'Esopo Fabulas Completas', 'Cosac & Naify  ', 'Esopo\r\n', 'fabula ‎ ', '', '9788540504752', 'esopofabulascompletas'),
(12, 'Fabulas de La Fontaine', 'Martin Claret ', 'La Fontaine\r\n', 'fabula  ', '', '9788572328630', 'fabulasdelafontaine'),
(13, 'Fabulas de Monteiro Lobato', 'Pé da Letra  ', 'Monteiro Lobato\r\n', 'fabula ', '', '9788595201415', 'fabulasdemonteirolobato'),
(14, 'It a Coisa', 'Suma ', 'Stephen King\r\n', 'horror  ', '', '9788560280940', 'itacoisa'),
(15, 'Lady Killers', 'Darkside ', 'TORI TELFER\r\n', 'terror ', '', '9788594541475', 'ladykillers'),
(16, 'Mil Beijos de Garoto', 'Outro Planeta ', 'Tillie Cole\r\n', 'drama/tragedia, romance ', '', '9788542209822', 'milbeijosdeumgaroto'),
(17, 'Mortos Não Contam Segredos', 'Galera ', 'Karen M. McManus\r\n', 'suspense ', '', '9788501117281', 'mortosnaocontamsegredos'),
(18, 'Ninguem Vira Adulto de Verdade', 'Seguinte ', 'Sarah Andersen\r\n', 'comedia ', '', '9788555340215', 'ninguemviraadultodeverdade'),
(19, 'O Exorcista', 'HarperCollins ', 'William Peter Blatty\r\n', 'terror, horror ', '', '9788595086234', 'oexorcista'),
(20, 'O Homem de Giz', 'Intrínseca ', 'C. J. Tudor \r\n', 'misterio, suspense  ', '', '9788551002933', 'ohomemdegiz'),
(21, 'O Ladrão de Raios', 'Intrínseca ', 'Rick Riordan\r\n', 'aventura, fantasia, ficçao ', '', '9788580575392', 'oladraoderaios'),
(22, 'O Pescador', 'Darkside ', 'John Langan\r\n', 'terror  ', '', '9786555981896', 'opescador'),
(23, 'Origem', 'Editora Arqueiro ', 'Dan Brown\r\n', 'acao ‎ ', '', '9788580417661', 'origem'),
(24, 'O Vilarejo', 'Suma ', 'Raphael Montes\r\n', 'horror  ', '', '9788581053042', 'ovilarejo'),
(25, 'Vermelho Branco e Sangue Azul', 'Seguinte ', 'CASEY MCQUISTON\r\n', 'lgbtqia+, romance ', '', '9788555340949', 'vermelhobrancoesangueazul');

--
-- Índices para tabelas despejadas
--

-
--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `leitores`
-

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
