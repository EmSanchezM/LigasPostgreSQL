/*Volcado de Datos*/
SELECT * FROM Estadio;
/*ESPAÑA*/
INSERT INTO Estadio(nombre) VALUES('Santiago Bernabeu');
INSERT INTO Estadio(nombre) VALUES('Camp Nou');
INSERT INTO Estadio(nombre) VALUES('Wanda Metropolitano');
INSERT INTO Estadio(nombre) VALUES('San Mamés');
INSERT INTO Estadio(nombre) VALUES('Benito Villamarín');
INSERT INTO Estadio(nombre) VALUES('Mestalla');
INSERT INTO Estadio(nombre) VALUES('Ramón Sánchez Pizjuán');
INSERT INTO Estadio(nombre) VALUES('Anoeta');
INSERT INTO Estadio(nombre) VALUES('La Rosaleda');
INSERT INTO Estadio(nombre) VALUES('El Molinón');
INSERT INTO Estadio(nombre) VALUES('Estadio de la Cerámica');
INSERT INTO Estadio(nombre) VALUES('Estadio de Vallecas');
INSERT INTO Estadio(nombre) VALUES('Municipal de Montilivi');

/*Inglaterra*/
INSERT INTO Estadio(nombre) VALUES('Old Trafford');
INSERT INTO Estadio(nombre) VALUES('Anfield');
INSERT INTO Estadio(nombre) VALUES('Tottenham Hotspur Stadium');
INSERT INTO Estadio(nombre) VALUES('Emirates Stadium');
INSERT INTO Estadio(nombre) VALUES('Estadio Olímpico de Londres');
INSERT INTO Estadio(nombre) VALUES('Etihad Stadium');
INSERT INTO Estadio(nombre) VALUES('St James Park');
INSERT INTO Estadio(nombre) VALUES('Stadium of Light');
INSERT INTO Estadio(nombre) VALUES('Stamford Bridge');
INSERT INTO Estadio(nombre) VALUES('King Power Stadium');
/*Honduras*/
INSERT INTO Estadio(nombre) VALUES('Estadio Nacional');
INSERT INTO Estadio(nombre) VALUES('Estadio Morazán');
INSERT INTO Estadio(nombre) VALUES('Estadio Yankel Rosenthal');
INSERT INTO Estadio(nombre) VALUES('Estadio Ceibeño');
INSERT INTO Estadio(nombre) VALUES('Estadio Excelsior');
INSERT INTO Estadio(nombre) VALUES('Estadio Humberto Micheletti');
INSERT INTO Estadio(nombre) VALUES('Estadio Juan Ramón Brevé');
INSERT INTO Estadio(nombre) VALUES('Estadio Emilio Williams Agasse');
INSERT INTO Estadio(nombre) VALUES('Estadio Roberto Martínez Ávila');
INSERT INTO Estadio(nombre) VALUES('Estadio Marcelo Tinoco');
/*Otras ligas (Puedes agregar mas)*/
INSERT INTO Estadio(nombre) VALUES('Velodrome (Olympique Marsella)');
INSERT INTO Estadio(nombre) VALUES('Signal Iduna Park (Borussia Dortmund)');
INSERT INTO Estadio(nombre) VALUES('Allianz Arena (Bayern Munich)');
INSERT INTO Estadio(nombre) VALUES('Allianz Parque (Palmeiras)');
INSERT INTO Estadio(nombre) VALUES('La Bombonera (Boca Juniors)');
INSERT INTO Estadio(nombre) VALUES('Turk Telekom Arena (Galatasaray)');
INSERT INTO Estadio(nombre) VALUES('Azadi Stadium (Irán)');

/*Equipos*/
INSERT INTO EQUIPOS(nombre,fechaFundacion,estadio) VALUES('Real Madrid',TO_DATE('06/03/1902','dd/mm/YYYY'),41);
INSERT INTO EQUIPOS(nombre,fechaFundacion,estadio) VALUES('FC Barcelona', TO_DATE('29/11/1899','dd/mm/YYYY'),42);
INSERT INTO EQUIPOS(nombre,fechaFundacion,estadio) VALUES('Atlético de Madrid',TO_DATE('26/04/1903','dd/mm/YYYY'),43);
INSERT INTO EQUIPOS(nombre,fechaFundacion,estadio) VALUES('Athletic Club de Bilbao',TO_DATE('06/03/1898','dd/mm/YYYY'),44);
INSERT INTO EQUIPOS(nombre,fechaFundacion,estadio) VALUES('Real Betis Balompie',TO_DATE('12/09/1907','dd/mm/YYYY'),45);
INSERT INTO EQUIPOS(nombre,fechaFundacion,estadio) VALUES('Valencia',TO_DATE('18/03/1919','dd/mm/YYYY'),46);
INSERT INTO EQUIPOS(nombre,fechaFundacion,estadio) VALUES('Sevilla',TO_DATE('25/01/1890','dd/mm/YYYY'),47);
INSERT INTO EQUIPOS(nombre,fechaFundacion,estadio) VALUES('Real Sociedad',TO_DATE('07/09/1909','dd/mm/YYYY'),48);
INSERT INTO EQUIPOS(nombre,fechaFundacion,estadio) VALUES('Malaga',TO_DATE('29/06/1994','dd/mm/YYYY'),49);
INSERT INTO EQUIPOS(nombre,fechaFundacion,estadio) VALUES('Celta de Vigo',TO_DATE('23/08/1923','dd/mm/YYYY'),50);
INSERT INTO EQUIPOS(nombre,fechaFundacion,estadio) VALUES('Villareal',TO_DATE('10/03/1923','dd/mm/YYYY'),51);
INSERT INTO EQUIPOS(nombre,fechaFundacion,estadio) VALUES('Rayo Vallecano',TO_DATE('29/05/1924','dd/mm/YYYY'),52);
INSERT INTO EQUIPOS(nombre,fechaFundacion,estadio) VALUES('Girona',TO_DATE('29/11/1930','dd/mm/YYYY'),53);

INSERT INTO EQUIPOS(nombre,fechaFundacion,estadio) VALUES('Manchester united',TO_DATE('05/03/1878','dd/mm/YYYY'),54);
INSERT INTO EQUIPOS(nombre,fechaFundacion,estadio) VALUES('Liverpool',TO_DATE('29/11/1892','dd/mm/YYYY'),55);
INSERT INTO EQUIPOS(nombre,fechaFundacion,estadio) VALUES('Tottenham',TO_DATE('05/09/1899','dd/mm/YYYY'),56);
INSERT INTO EQUIPOS(nombre,fechaFundacion,estadio) VALUES('Arsenal',TO_DATE('29/11/1886','dd/mm/YYYY'),57);
INSERT INTO EQUIPOS(nombre,fechaFundacion,estadio) VALUES('West Ham',TO_DATE('29/11/1895','dd/mm/YYYY'),58);
INSERT INTO EQUIPOS(nombre,fechaFundacion,estadio) VALUES('Manchester city',TO_DATE('16/04/1894','dd/mm/YYYY'),59);
INSERT INTO EQUIPOS(nombre,fechaFundacion,estadio) VALUES('NewCastle',TO_DATE('09/12/1892','dd/mm/YYYY'),60);
INSERT INTO EQUIPOS(nombre,fechaFundacion,estadio) VALUES('Sunderland',TO_DATE('29/11/1879','dd/mm/YYYY'),61);
INSERT INTO EQUIPOS(nombre,fechaFundacion,estadio) VALUES('Chelsea',TO_DATE('10/03/1905','dd/mm/YYYY'),62);
INSERT INTO EQUIPOS(nombre,fechaFundacion,estadio) VALUES('Leister city',TO_DATE('29/11/1884','dd/mm/YYYY'),63);

INSERT INTO EQUIPOS(nombre,fechaFundacion,estadio) VALUES('Olimpia',TO_DATE('12/06/1912','dd/mm/YYYY'),64);
INSERT INTO EQUIPOS(nombre,fechaFundacion,estadio) VALUES('Motagua',TO_DATE('29/08/1928','dd/mm/YYYY'),65);
INSERT INTO EQUIPOS(nombre,fechaFundacion,estadio) VALUES('Real España',TO_DATE('14/07/1929','dd/mm/YYYY'),66);
INSERT INTO EQUIPOS(nombre,fechaFundacion,estadio) VALUES('Maraton',TO_DATE('25/11/1925','dd/mm/YYYY'),67);
INSERT INTO EQUIPOS(nombre,fechaFundacion,estadio) VALUES('Vida',TO_DATE('14/09/1940','dd/mm/YYYY'),68);
INSERT INTO EQUIPOS(nombre,fechaFundacion,estadio) VALUES('Platense',TO_DATE('04/07/1960','dd/mm/YYYY'),69);
INSERT INTO EQUIPOS(nombre,fechaFundacion,estadio) VALUES('Honduras del Progreso',TO_DATE('29/11/1965','dd/mm/YYYY'),70);
INSERT INTO EQUIPOS(nombre,fechaFundacion,estadio) VALUES('Juticalpa',TO_DATE('14/08/2004','dd/mm/YYYY'),71);
INSERT INTO EQUIPOS(nombre,fechaFundacion,estadio) VALUES('Lobos de Universidad Pedagogica',TO_DATE('10/08/2010','dd/mm/YYYY'),72);
INSERT INTO EQUIPOS(nombre,fechaFundacion,estadio) VALUES('Real de minas',TO_DATE('29/11/2012','dd/mm/YYYY'),73);

/*Tipos de Equipos*/
INSERT INTO TiposEquipo(nombre) VALUES('Local');
INSERT INTO TiposEquipo(nombre) VALUES('Visitante');

/*Tipos de jugador*/
INSERT INTO TipoJugador(idTipoJugador,nombre) VALUES(1,'Portero');
INSERT INTO TipoJugador(idTipoJugador,nombre) VALUES(2,'Defensa');
INSERT INTO TipoJugador(idTipoJugador,nombre) VALUES(3,'Mediocampista');
INSERT INTO TipoJugador(idTipoJugador,nombre) VALUES(4,'Delantero');

SELECT* FROM TiposEquipo;

/*Jugadores*/
INSERT INTO Jugadores(nombre,edad,idEquiposFK,idTipoJugador,fechaIngreso) VALUES('Keylor Navas',32,34,1,TO_DATE('12/06/2014','dd/mm/YYYY'));
INSERT INTO Jugadores(nombre,edad,idEquiposFK,idTipoJugador,fechaIngreso) VALUES('Lucas Zidane',20,34,1,TO_DATE('12/06/2016','dd/mm/YYYY'));
INSERT INTO Jugadores(nombre,edad,idEquiposFK,idTipoJugador,fechaIngreso) VALUES('Thibaut Courtois',26,34,1,TO_DATE('12/06/2018','dd/mm/YYYY'));
INSERT INTO Jugadores(nombre,edad,idEquiposFK,idTipoJugador,fechaIngreso) VALUES('Dani Carvajal',27,34,2,TO_DATE('12/06/2013','dd/mm/YYYY'));
INSERT INTO Jugadores(nombre,edad,idEquiposFK,idTipoJugador,fechaIngreso) VALUES('Jesus Vallejo',22,34,2,TO_DATE('12/06/2015','dd/mm/YYYY'));
INSERT INTO Jugadores(nombre,edad,idEquiposFK,idTipoJugador,fechaIngreso) VALUES('Sergio Ramos',33,34,2,TO_DATE('12/06/2005','dd/mm/YYYY'));
INSERT INTO Jugadores(nombre,edad,idEquiposFK,idTipoJugador,fechaIngreso) VALUES('Toni Kroos',29,34,3,TO_DATE('12/06/2014','dd/mm/YYYY'));
INSERT INTO Jugadores(nombre,edad,idEquiposFK,idTipoJugador,fechaIngreso) VALUES('Luka Modric',33,34,3,TO_DATE('12/06/2012','dd/mm/YYYY'));
INSERT INTO Jugadores(nombre,edad,idEquiposFK,idTipoJugador,fechaIngreso) VALUES('Karim Benzema',31,34,4,TO_DATE('12/06/2009','dd/mm/YYYY'));
INSERT INTO Jugadores(nombre,edad,idEquiposFK,idTipoJugador,fechaIngreso) VALUES('Cristiano Ronaldo',34,34,4,TO_DATE('12/06/2009','dd/mm/YYYY'));
INSERT INTO Jugadores(nombre,edad,idEquiposFK,idTipoJugador,fechaIngreso) VALUES('Lionel Messi',31,35,4,TO_DATE('01/01/2004','dd/mm/YYYY'));

/*Tecnicos*/
INSERT INTO Tecnicos(nombre,edad,fechaIngreso,te_equiposFK) VALUES('Carlo Ancelloti',59,TO_DATE('26/06/2013','dd/mm/YYYY'),34);
INSERT INTO Tecnicos(nombre,edad,fechaIngreso,te_equiposFK) VALUES('Santiago Solari',42,TO_DATE('26/06/2018','dd/mm/YYYY'),34);
INSERT INTO Tecnicos(nombre,edad,fechaIngreso,te_equiposFK) VALUES('Julen Lopetegui',52,TO_DATE('26/06/2018','dd/mm/YYYY'),34);
INSERT INTO Tecnicos(nombre,edad,fechaIngreso,te_equiposFK) VALUES('Zinedine Zidane',46,TO_DATE('26/06/2016','dd/mm/YYYY'),34);

/*Ligas*/
INSERT INTO Liga(nombre,calificacion,idTipoEFK,idEquiposFK) VALUES ('Liga Española',1,3,34);
INSERT INTO Liga(nombre,calificacion,idTipoEFK,idEquiposFK) VALUES('Liga inglesa',4,3,47);


/*Arbitros*/
INSERT INTO ARBITROS(experiencia,edad,nombre)VALUES('118 partidos',35,'Jesus Gil Manzano');
INSERT INTO ARBITROS(experiencia,edad,nombre)VALUES('77 partidos',35,'Mario Melero López');
INSERT INTO ARBITROS(experiencia,edad,nombre)VALUES('37 partidos',35,' José Luis Munuera Montero');
INSERT INTO ARBITROS(experiencia,edad,nombre)VALUES('137 partidos',43,'Carlos del Cerro Grande');
INSERT INTO ARBITROS(experiencia,edad,nombre)VALUES('160 partidos',41,'Deniz Aytekin');
INSERT INTO ARBITROS(experiencia,edad,nombre)VALUES('344 partidos',46,'Alberto Undiano Mallenco');
INSERT INTO ARBITROS(experiencia,edad,nombre)VALUES('230 partidos',34,'Michael Oliver');
INSERT INTO ARBITROS(experiencia,edad,nombre)VALUES('151 partidos',38,'Felix Zwayer');
INSERT INTO ARBITROS(experiencia,edad,nombre)VALUES('262 partidos',44,'Dr. Felix Brych');
INSERT INTO ARBITROS(experiencia,edad,nombre)VALUES('244 partidos',46,'Gianluca Rocchi');

/*Goles*/
INSERT INTO Goles(idEquipos,idJugadores,idLiga, numeroGoles) VALUES(34,22,5,8);
INSERT INTO Goles(idEquipos,idJugadores,idLiga, numeroGoles) VALUES(34,24,5,104);
INSERT INTO Goles(idEquipos,idJugadores,idLiga, numeroGoles) VALUES(34,28,5,450);
INSERT INTO Goles(idEquipos,idJugadores,idLiga, numeroGoles) VALUES(35,29,5,597);

/*Temporadas*/
INSERT INTO Temporadas(descripcion) VALUES('Temporada 2018-2019');
INSERT INTO Temporadas(descripcion) VALUES('Temporada 2017-2018');
INSERT INTO Temporadas(descripcion) VALUES('Temporada 2016-2017');
INSERT INTO Temporadas(descripcion) VALUES('Temporada 2015-2016');
INSERT INTO Temporadas(descripcion) VALUES('Temporada 2014-2015');

SELECT * FROM liga;
/*Jornadas*/
/*Liga Española*/
INSERT INTO Jornadas(temporadaFK, ligaFK,descripcion) VALUES(6,5,'Jornada 1');
INSERT INTO Jornadas(temporadaFK, ligaFK,descripcion) VALUES(6,5,'Jornada 2');
INSERT INTO Jornadas(temporadaFK, ligaFK,descripcion) VALUES(6,5,'Jornada 3');
INSERT INTO Jornadas(temporadaFK, ligaFK,descripcion) VALUES(6,5,'Jornada 4');
INSERT INTO Jornadas(temporadaFK, ligaFK,descripcion) VALUES(6,5,'Jornada 5');
INSERT INTO Jornadas(temporadaFK, ligaFK,descripcion) VALUES(6,5,'Jornada 6');
INSERT INTO Jornadas(temporadaFK, ligaFK,descripcion) VALUES(6,5,'Jornada 7');
INSERT INTO Jornadas(temporadaFK, ligaFK,descripcion) VALUES(6,5,'Jornada 8');
/*Liga Inglesa*/
INSERT INTO Jornadas(temporadaFK, ligaFK,descripcion) VALUES(6,6,'Jornada 1');
INSERT INTO Jornadas(temporadaFK, ligaFK,descripcion) VALUES(6,6,'Jornada 2');
INSERT INTO Jornadas(temporadaFK, ligaFK,descripcion) VALUES(6,6,'Jornada 3');
INSERT INTO Jornadas(temporadaFK, ligaFK,descripcion) VALUES(6,6,'Jornada 4');
INSERT INTO Jornadas(temporadaFK, ligaFK,descripcion) VALUES(6,6,'Jornada 5');
INSERT INTO Jornadas(temporadaFK, ligaFK,descripcion) VALUES(6,6,'Jornada 6');
INSERT INTO Jornadas(temporadaFK, ligaFK,descripcion) VALUES(6,6,'Jornada 7');
INSERT INTO Jornadas(temporadaFK, ligaFK,descripcion) VALUES(6,6,'Jornada 8');

SELECT * FROM Equipos;
/*Partidos*/
/*Liga Española*/
INSERT INTO Partidos(jornadaFK,EquipoLocal,EquipoVisitante,fechaPartido) VALUES(2,34,39,TO_DATE('27/08/2017','dd/mm/YYYY'));
INSERT INTO Partidos(jornadaFK,EquipoLocal,EquipoVisitante,fechaPartido) VALUES(2,35,46,TO_DATE('26/08/2017','dd/mm/YYYY'));
INSERT INTO Partidos(jornadaFK,EquipoLocal,EquipoVisitante,fechaPartido) VALUES(2,36,41,TO_DATE('27/08/2017','dd/mm/YYYY'));
INSERT INTO Partidos(jornadaFK,EquipoLocal,EquipoVisitante,fechaPartido) VALUES(2,37,40,TO_DATE('26/08/2017','dd/mm/YYYY'));
INSERT INTO Partidos(jornadaFK,EquipoLocal,EquipoVisitante,fechaPartido) VALUES(2,38,42,TO_DATE('27/08/2017','dd/mm/YYYY'));
INSERT INTO Partidos(jornadaFK,EquipoLocal,EquipoVisitante,fechaPartido) VALUES(2,39,44,TO_DATE('27/08/2017','dd/mm/YYYY'));
/*Liga Inglesa*/
INSERT INTO Partidos(jornadaFK,EquipoLocal,EquipoVisitante,fechaPartido) VALUES(2,47,51,TO_DATE('13/08/2017','dd/mm/YYYY'));
INSERT INTO Partidos(jornadaFK,EquipoLocal,EquipoVisitante,fechaPartido) VALUES(2,48,54,TO_DATE('12/08/2017','dd/mm/YYYY'));
INSERT INTO Partidos(jornadaFK,EquipoLocal,EquipoVisitante,fechaPartido) VALUES(2,49,53,TO_DATE('13/08/2017','dd/mm/YYYY'));
INSERT INTO Partidos(jornadaFK,EquipoLocal,EquipoVisitante,fechaPartido) VALUES(2,50,56,TO_DATE('12/08/2017','dd/mm/YYYY'));
INSERT INTO Partidos(jornadaFK,EquipoLocal,EquipoVisitante,fechaPartido) VALUES(2,51,55,TO_DATE('13/08/2017','dd/mm/YYYY'));

select * from partidos;
/*Resultados*/
/*Partidos de la Liga Española*/
INSERT INTO Resultado(partidoFK,resultado) VALUES(1,'2-2');
INSERT INTO Resultado(partidoFK,resultado) VALUES(2,'2-0');
INSERT INTO Resultado(partidoFK,resultado) VALUES(3,'4-2');
INSERT INTO Resultado(partidoFK,resultado) VALUES(4,'3-1');
INSERT INTO Resultado(partidoFK,resultado) VALUES(5,'1-0');
INSERT INTO Resultado(partidoFK,resultado) VALUES(6,'1-2');
/*Partidos de la Liga Inglesa*/
INSERT INTO Resultado(partidoFK,resultado) VALUES(7,'4-0');
INSERT INTO Resultado(partidoFK,resultado) VALUES(8,'1-0');
INSERT INTO Resultado(partidoFK,resultado) VALUES(9,'1-1');
INSERT INTO Resultado(partidoFK,resultado) VALUES(10,'2-1');
INSERT INTO Resultado(partidoFK,resultado) VALUES(11,'1-3');