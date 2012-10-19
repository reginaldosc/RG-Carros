/*
######### RG - Quality #########
Data 07/09/2012

- Script para criação das tabelas do Banco de dados e inserção de alguns dados default do sistema. -

*/


CREATE SCHEMA IF NOT EXISTS ia DEFAULT CHARACTER SET utf8;

 USE ia;



-- -----------------------------------------------------
-- Table ia.Usuario
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS ia.Usuario (
  
  usuarioID 		INT NOT NULL AUTO_INCREMENT ,
  usuarioNome		VARCHAR(45) NOT NULL ,
  usuarioSexo  		VARCHAR(1) NOT NULL ,
  usuarioIdade 		INT NOT NULL,
  usuarioSalario 	INT NOT NULL,
  usuarioEstCivil 	VARCHAR(1) NOT NULL,
  usuarioNumFilhos 	INT NOT NULL,
  usuarioCarro 		VARCHAR(15),
 
  PRIMARY KEY (usuarioID)


  )ENGINE = InnoDB;



/*
##### Abaixo script adicional para fazer a inserção dos dados default no sistema #####
*/


-- Inserindo Usuario --
--								(ID, Nome, 		 Sexo, Idade, Salario, Estado Civil, Filhos, Carro) --
INSERT INTO ia.Usuario VALUES (null, 'GILMARA',		'F', 29, 2000, 'D', 2, 'I30'		);
INSERT INTO ia.Usuario VALUES (null, 'REGINALDO',	'M', 37, 4000, 'D', 1, 'GRAND TOUR'	);
INSERT INTO ia.Usuario VALUES (null, 'IGOR',		'M', 19, 1000, 'S', 0, 'CLASSIC'	);
INSERT INTO ia.Usuario VALUES (null, 'LUCAS',		'M', 21, 1000, 'S', 0, 'CELTA'		);
INSERT INTO ia.Usuario VALUES (null, 'SABRINA',		'F', 22, 2000, 'S', 1, 'KA'			);
INSERT INTO ia.Usuario VALUES (null, 'NELSON',		'M', 55, 5000, 'C', 3, 'ECO SPORT'	);
INSERT INTO ia.Usuario VALUES (null, 'NELI',		'F', 50, 700,  'C', 3, 'GOL'		);
INSERT INTO ia.Usuario VALUES (null, 'RAFAEL',		'M', 33, 1200, 'D', 0, 'UNO'		);
INSERT INTO ia.Usuario VALUES (null, 'RODRIGO',		'M', 39, 1500, 'C', 2, '206'		);
INSERT INTO ia.Usuario VALUES (null, 'GABRIELA',	'F', 27, 1000, 'C', 4, 'FOX'		);
INSERT INTO ia.Usuario VALUES (null, 'JOAO',		'M', 40, 12000,'V', 6, 'ELANTRA'	);
INSERT INTO ia.Usuario VALUES (null, 'MARCO',		'M', 38, 7000, 'C', 1, 'POLO'		);
INSERT INTO ia.Usuario VALUES (null, 'MARIA',		'F', 20, 3000, 'S', 0, 'C3'			);
INSERT INTO ia.Usuario VALUES (null, 'JOAQUINA',	'F', 31, 1800, 'V', 2, 'PALIO'		);
INSERT INTO ia.Usuario VALUES (null, 'ESTRONCIA',	'F', 43, 2700, 'C', 4, 'QQ'			);

