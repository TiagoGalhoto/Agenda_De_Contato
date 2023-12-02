# Agenda_De_Contato

Ferramentas: Bootstrap versão 5.1;


CREATE DATABASE agenda_contato;

CREATE TABLE `cadastro_agenda` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `sobre_nome` varchar(255) NOT NULL,
  `t_contato` varchar(255) NOT NULL,
  `tel` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
)
