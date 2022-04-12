Create Schema BD_BMnager;

USE BD_BMnager;

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


