Create Schema BD_BMnager;

USE BD_BMnager;

-- Tabela Leitor

CREATE TABLE `Leitor` (
  `Nome` varchar(50) NOT NULL,
  `CPF` varchar(11) NOT NULL,
  `DataNascimento` date NOT NULL,
  `ID` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE `Leitor`
  ADD PRIMARY KEY (`ID`);


ALTER TABLE `Leitor`
MODIFY `ID` int NOT NULL AUTO_INCREMENT;
COMMIT;


insert into Leitor (Nome, Cpf, DataNascimento) values('Fernando', '12345677', '2022-04-22');
insert into Leitor (Nome, Cpf, DataNascimento) values ('Valter Granato Neto', '45678912311', '2000-07-15');
insert into Leitor (Nome, Cpf, DataNascimento) values ('Geraldo Neto', '61406554049', '1990-12-23');
insert into Leitor (Nome, Cpf, DataNascimento) values ('Claudio junior', '00438655001', '1988-12-26');
insert into Leitor (Nome, Cpf, DataNascimento) values ('Claudia Fernandes silva', '24040121007', '1987-10-01');
insert into Leitor (Nome, Cpf, DataNascimento) values ('Hermenegilda Fernandes Cunha', '05137739839', '1963-11-15');
insert into Leitor (Nome, Cpf, DataNascimento) values ('Hermenegildo heismamm', '60446040045', '1990-11-15');
insert into Leitor (Nome, Cpf, DataNascimento) values ('Pedro Malazarte', '98620809067', '1999-01-15');

-- Tabela Livro

CREATE TABLE `Livro` (
  `ID` int(11) NOT NULL,
  `Nome` varchar(50) NOT NULL,
  `Autores` varchar(250) NOT NULL,
  `Edicao` int(11) NOT NULL,
  `Publicacao` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

ALTER TABLE `Livro`
  ADD PRIMARY KEY (`ID`);

ALTER TABLE `Livro`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

insert into Livro (Nome, Autores, Edicao, Publicacao) values ('Como Roubar Martelos', 'Ladrão de Martelos', 3, '2018-10-05');
insert into Livro (Nome, Autores, Edicao, Publicacao) values ('Carpintaria para Amadores', 'Carpinteiro', 6, '2020-12-12');
insert into Livro (Nome, Autores, Edicao, Publicacao) values ('Como Estudar no Dia da Prova', 'Aluno Desesperado', 9, '2010-01-20');
insert into Livro (Nome, Autores, Edicao, Publicacao) values ('Ovelhas ou peixes?', 'Cozinheiro em dúvida', 1, '2021-08-26');
insert into Livro (Nome, Autores, Edicao, Publicacao) values ('Penso, logo existo', 'Dúvida', 5, '2019-02-01');


-- Tabela Reserva

CREATE TABLE `Reserva` (
  `ID` int(11) NOT NULL,
  `ID_Leitor` int(11) NOT NULL,
  `ID_Livro1` int(11) NOT NULL,
  `ID_Livro2` int(11) DEFAULT NULL,
  `ID_Livro3` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

ALTER TABLE `Reserva`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID_Leitor` (`ID_Leitor`),
  ADD KEY `ID_Livro1` (`ID_Livro1`),
  ADD KEY `ID_Livro2` (`ID_Livro2`),
  ADD KEY `ID_Livro3` (`ID_Livro3`),
  ADD `status` varchar(20) NOT NULL,
  ADD `dataAbertura` date NOT NULL;

ALTER TABLE `Reserva`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;


ALTER TABLE `Reserva`
  ADD CONSTRAINT `Reserva_ibfk_1` FOREIGN KEY (`ID_Leitor`) REFERENCES `Leitor` (`ID`),
  ADD CONSTRAINT `Reserva_ibfk_2` FOREIGN KEY (`ID_Livro1`) REFERENCES `Livro` (`ID`),
  ADD CONSTRAINT `Reserva_ibfk_3` FOREIGN KEY (`ID_Livro2`) REFERENCES `Livro` (`ID`),
  ADD CONSTRAINT `Reserva_ibfk_4` FOREIGN KEY (`ID_Livro3`) REFERENCES `Livro` (`ID`);
  
