-- phpMyAdmin SQL Dump
-- version 3.3.8
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tempo de Geração: Abr 20, 2011 as 04:15 AM
-- Versão do Servidor: 5.1.52
-- Versão do PHP: 5.3.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `tecnogyn`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `login` varchar(50) NOT NULL,
  `senha` varchar(30) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Extraindo dados da tabela `admin`
--

INSERT INTO `admin` (`id`, `login`, `senha`, `nome`, `email`) VALUES
(4, 'diogo', '123', 'Diogo Oliveira Santos', 'diogogyn100@hotmail.com');

-- --------------------------------------------------------

--
-- Estrutura da tabela `contato`
--

CREATE TABLE IF NOT EXISTS `contato` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `data` date NOT NULL,
  `nome` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `telefone` varchar(40) NOT NULL,
  `assunto` varchar(255) NOT NULL,
  `mensagem` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Extraindo dados da tabela `contato`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `inicio`
--

CREATE TABLE IF NOT EXISTS `inicio` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `data` date NOT NULL,
  `titulo` varchar(200) NOT NULL,
  `texto` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Extraindo dados da tabela `inicio`
--

INSERT INTO `inicio` (`id`, `data`, `titulo`, `texto`) VALUES
(5, '2011-02-27', 'Bem vindo ao site!', '<p>Bem vindo ao site do Tecnogyn, a partir daqui voc&ecirc; podera desfrutar deste bleo site &nbsp;feito em php, e visara explicar como fundiona p php e como inserir ele em um site, assim como este ao qual vo^ce esta visitando agora. por enquanto este site esta em constru&ccedil;l&atilde;o mas se dessejar vo&ccedil;e pode visitar o nosso site atual.</p>\r\n<p>&nbsp;</p>\r\n<p><a href="http://www.tecnogyn.webnode.com" target="_blank">Tecnogyn</a></p>'),
(6, '2011-02-28', 'novidades do site', '<p>este ser&aacute; o futuro site do tecnogyn e voc&ecirc; poder&aacute; ajudar a melhora-lo cada vez mais. basta nos enviar um email dando sua dica e sua ideia para fazer isto no site</p>'),
(7, '2011-03-25', 'Curiosidades sobre a Mcrosoft', '<p><span>Trago lhes mais uma curiosidade sobre essa magnifica institui&ccedil;&atilde;o, a empresa de tecnologia que mais investe em pesquisa e desenvolvimento no mundo.</span></p>\r\n<p><span>Na lista tem cada coisa, que voc&ecirc; nunca imaginou ! vale a pena parar 1 minutinho para saber mais sobre a Microsoft, sua hist&oacute;ria e curiosidades!</span></p>\r\n<p>&agrave; atual em 1987, motivando uma campanha entre os funcion&aacute;rios para manter o logo antigo. O desenho da letra &ldquo;o&rdquo; tinha o apelido de &ldquo;blibett&rdquo;.</p>\r\n<p>&bull; H&aacute; 30 anos, em 1975, o minicomputador Altair custava US$397. Sem monitor, HD ou nada parecido.</p>\r\n<p>&bull; H&aacute; 40 anos, em 1965, um drive 2311 custava o equivalente a US$ 2.057 por Mb. Em 1951, o custo de armazenagem era de US$300/Mb. Em 2003, caiu para US$ 0,005 &ndash; meio centavo de d&oacute;lar.</p>\r\n<p>&bull; A Microsoft tem 640 mil parceiros em seu the Microsoft Partner Program.</p>\r\n<p>&bull; No ano fiscal de 2005, foram reservadas pela ag&ecirc;ncia de viagens oficial da Microsoft mundial v&ocirc;os&nbsp;</p>'),
(8, '2011-03-25', 'Por que eu contrato um serviÃ§o de internet de 10 Mega e baixo arquivos a 1Mb?', '<p><em>Por que contratei uma coisa e quando recebi era outra completamente diferente?</em></p>\r\n<p>Que atire a primeira pedra quem nunca teve d&uacute;vidas quanto a este assunto, seja em um primeiro momento, quando idealizando quanto tempo o download de determinado programa demoraria, seja antes de estudar ou ler sobre o&nbsp;</p>'),
(9, '2011-03-25', 'Megabytes e Megabits', '<p>Como o termo Megabyte &eacute; muito mais conhecido do que Megabit, o an&uacute;ncio de uma velocidade como &ldquo;Mega&rdquo; sem d&uacute;vidas traz certa confus&atilde;o, ainda mais porque s&atilde;o medidas diferentes. Para entender esta diferen&ccedil;a, vamos come&ccedil;ar fazendo a conta com as medidas &ldquo;b&aacute;sicas&rdquo;. Cada byte &eacute; composto por 8 bits, um kilobyte &eacute; composto por 1024 bytes e logo, um megabyte possui 1024 kilobytes.</p>\r\n<p>A medida da velocidade depende da grandeza na qual ela est&aacute; especificada</p>\r\n<p>O bit e o byte deram origem a mais duas unidades de grandeza: bps (bit por segundo) e o B/s (byte por segundo). Ambas pertencem &agrave; grandeza &ldquo;taxa de transfer&ecirc;ncia&rdquo; e tamb&eacute;m s&atilde;o respons&aacute;veis por boa parte das reclama&ccedil;&otilde;es recebidas nas centrais de atendimentos das empresas prestadoras de servi&ccedil;os de Internet.</p>\r\n<p>A taxa de transfer&ecirc;ncia normalmente &eacute; expressa em KB/s (kilobytes por segundo). Se um byte &eacute; igual a oito bits, obviamente a taxa de transfer&ecirc;ncia ter&aacute; um valor oito vezes menor. Partindo desta premissa, se voc&ecirc; quer saber qual ser&aacute; sua taxa real de download, fa&ccedil;a o c&aacute;lculo &ldquo;dividindo por 8&rdquo;.</p>\r\n<p>O resultado ser&aacute; um valor aproximado, pois um pouco desta velocidade deve ser descontada para o fluxo de dados. Abaixo segue uma tabela para ilustrar melhor a id&eacute;ia:</p>'),
(10, '2011-03-25', 'Convertendo as medidas', '<p>Para saber aproximadamente quanto tempo o download de um programa vai demorar, voc&ecirc; pode fazer o seguinte c&aacute;lculo:</p>\r\n<p>Primeiro, transforme o tamanho do programa para Kilobytes. Para um valor aproximado, multiplique o valor em Megabytes por 1000. Vamos utilizar um programa de 10 MB como exemplo:</p>\r\n<p>10 x 1000 = 10000</p>\r\n<p>Em seguida, divida este n&uacute;mero pelo valor da velocidade do download. Digamos que sua conex&atilde;o seja de 300 Kbps, o que leva a uma velocidade de download de 37,5 KB/s. (Aqui est&aacute; a medida de tempo em segundos)</p>\r\n<p>10000 / 37,5 = 266,66</p>\r\n<p>Ent&atilde;o, como o valor encontrado est&aacute; em segundos, divida-o por 60. O resultado ser&aacute; o tempo aproximado (em minutos) que o download dever&aacute; demorar.</p>\r\n<p>266,66/60 = 4,44 minutos</p>\r\n<p>Caso voc&ecirc; queira saber mais sobre as unidades de grandeza da inform&aacute;tica, acesse este artigo super explicativo sobre o assunto.</p>\r\n<p>Agora voc&ecirc; j&aacute; sabe: &eacute; tudo uma quest&atilde;o de colocar as coisas na mesma medida! Esperamos que quaisquer d&uacute;vidas referentes a este assunto tenham sido resolvidas e at&eacute; a pr&oacute;xima!</p>'),
(11, '2011-03-25', 'Caso vocÃª queira saber mais sobre as unidades ', '<p>Caso voc&ecirc; queira saber mais sobre as unidades de grandeza da inform&aacute;tica, acesse este artigo super explicativo sobre o assunto.</p>\r\n<p>Agora voc&ecirc; j&aacute; sabe: &eacute; tudo uma quest&atilde;o de colocar as coisas na mesma medida! Esperamos que quaisquer d&uacute;vidas referentes a este assunto tenham sido resolvidas e at&eacute; a pr&oacute;xima!</p>');

-- --------------------------------------------------------

--
-- Estrutura da tabela `mural`
--

CREATE TABLE IF NOT EXISTS `mural` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) NOT NULL,
  `data` date NOT NULL,
  `texto` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Extraindo dados da tabela `mural`
--

INSERT INTO `mural` (`id`, `titulo`, `data`, `texto`) VALUES
(10, 'texto de texte para o mural', '2011-02-27', 'este Ã© um texto para testar se o meural est funcionando corretamente, e ver se ficou bom!'),
(11, 'Aviso!', '2011-02-27', 'o mural de noticias e a pagina inicial jÃ¡foram programadas e jÃ¡ estÃ£o prontas para receber o conteudo do site!');
