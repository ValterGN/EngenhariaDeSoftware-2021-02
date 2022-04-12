Create Schema BD_BMnager

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


