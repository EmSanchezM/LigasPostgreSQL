DROP TABLE Estadio CASCADE;
DROP SEQUENCE Estadio_seq;
DROP TABLE Arbitros CASCADE;
DROP SEQUENCE Arbitros_seq;
DROP TABLE TiposEquipo CASCADE;
DROP SEQUENCE TiposEquipo_seq;
DROP TABLE TipoJugador CASCADE;
DROP SEQUENCE TipoJugador_seq;
DROP TABLE Equipos CASCADE;
DROP SEQUENCE Equipos_seq;
DROP TABLE Jugadores CASCADE;
DROP SEQUENCE Jugadores_seq;
DROP TABLE tecnicos CASCADE;
DROP SEQUENCE tecnicos_seq;
DROP TABLE Liga CASCADE;
DROP SEQUENCE Liga_seq;
DROP TABLE Goles CASCADE;
DROP SEQUENCE Goles_seq;
DROP TABLE Temporadas CASCADE;
DROP SEQUENCE Temporada_seq;
DROP TABLE Jornadas CASCADE;
DROP SEQUENCE Jornada_seq;
DROP TABLE Partidos CASCADE;
DROP SEQUENCE Partido_seq;
DROP TABLE Resultado CASCADE;
DROP SEQUENCE Resultado_seq;

/*Creacion de la secuencia para que el id sea autoincrementable*/
CREATE SEQUENCE Estadio_seq
start with 1
increment by 1
  maxvalue 99999
  minvalue 1;

/*Creacion de las tablas*/
CREATE TABLE IF NOT EXISTS Estadio(
  idEstadio INT NOT NULL DEFAULT NEXTVAL ('Estadio_seq'),
  nombre VARCHAR(45) NULL DEFAULT NULL,
  PRIMARY KEY (idEstadio)
);

/*Creacion de la secuencia para que el id sea autoincrementable*/
CREATE SEQUENCE Arbitros_seq
start with 1
  increment by 1
  maxvalue 99999
  minvalue 1;

CREATE TABLE IF NOT EXISTS Arbitros(
	idArbitro INT NOT NULL UNIQUE DEFAULT NEXTVAL ('ARBITROS_seq'),
	experiencia VARCHAR(45),
	edad INT,
	nombre VARCHAR(45),
	PRIMARY KEY(idArbitro)
);

/*Creacion de la secuencia para que el id sea autoincrementable*/
CREATE SEQUENCE TiposEquipo_seq
start with 1
  increment by 1
  maxvalue 99999
  minvalue 1;

CREATE TABLE IF NOT EXISTS TiposEquipo(
  idTiposEquipo INT NOT NULL DEFAULT NEXTVAL ('TiposEquipo_seq'),
  nombre VARCHAR(45) NULL DEFAULT NULL,
  PRIMARY KEY (idTiposEquipo)
 );
 
/*Creacion de la secuencia para que el id sea autoincrementable*/
CREATE SEQUENCE TipoJugador_seq
start with 1
  increment by 1
  maxvalue 99999
  minvalue 1;

CREATE TABLE IF NOT EXISTS TipoJugador(
  idTipoJugador INT NOT NULL DEFAULT NEXTVAL ('TipoJugador_seq'),
  nombre VARCHAR(45) NULL DEFAULT NULL,
  PRIMARY KEY (idTipoJugador)
 );

/*Creacion de la secuencia para que el id sea autoincrementable*/
CREATE SEQUENCE Equipos_seq
start with 1
  increment by 1
  maxvalue 99999
  minvalue 1;

CREATE TABLE IF NOT EXISTS Equipos(
	idEquipos INT NOT NULL UNIQUE DEFAULT NEXTVAL ('EQUIPOS_seq'),
	nombre VARCHAR(45),
	fechaFundacion DATE,
	estadio INT,
	PRIMARY KEY (idEquipos)
);

/*Creacion de la secuencia para que el id se autoincrementable*/
 CREATE SEQUENCE Jugadores_seq
 start with 1
  increment by 1
  maxvalue 99999
  minvalue 1;

 CREATE TABLE IF NOT EXISTS Jugadores(
  idJugadores INT NOT NULL DEFAULT NEXTVAL ('Jugadores_seq'),
  nombre VARCHAR(45) NULL DEFAULT NULL,
  edad VARCHAR(45) NULL DEFAULT NULL,
  idEquiposFK INT NOT NULL,
  idTipoJugador INT NOT NULL,
  fechaIngreso DATE NULL DEFAULT NULL,
  PRIMARY KEY (idJugadores)
);

/*Creacion de la secuencia para que el id sea autoincrementable*/
CREATE SEQUENCE Tecnicos_seq
start with 1
  increment by 1
  maxvalue 99999
  minvalue 1;

CREATE TABLE IF NOT EXISTS Tecnicos(
	idTecnico INT NOT NULL DEFAULT NEXTVAL ('Tecnicos_seq'),
	nombre VARCHAR(45),
	edad INT,
	fechaIngreso DATE,
	te_equiposFK INT NOT NULL,
	PRIMARY KEY(idTecnico)
);

/*Creacion de la secuencia para que el id sea autoincrementable*/
 CREATE SEQUENCE Liga_seq
 start with 1
  increment by 1
  maxvalue 99999
  minvalue 1;

 CREATE TABLE IF NOT EXISTS Liga(
  idLiga INT NOT NULL DEFAULT NEXTVAL ('Liga_seq'),
  nombre VARCHAR(45) NULL DEFAULT NULL,
  calificacion INT NULL DEFAULT NULL,
  idTipoEFK INT NOT NULL,
  idEquiposFK INT NOT NULL,
  PRIMARY KEY (idLiga)
);

/*Creacion de la secuencia para que el id sea autoincrementable*/
CREATE SEQUENCE Goles_seq
start with 1
  increment by 1
  maxvalue 99999
  minvalue 1;

CREATE TABLE IF NOT EXISTS Goles(
  idGoles INT NOT NULL DEFAULT NEXTVAL ('Goles_seq'),
  idEquipos INT NOT NULL,
  idJugadores INT NOT NULL,
  idLiga INT NOT NULL,
  numeroGoles INT NULL DEFAULT NULL,
  PRIMARY KEY (idGoles)
);

/*Creacion de la secuencia para que el id sea autoincrementable*/
CREATE SEQUENCE Temporada_seq
start with 1
increment by 1
maxvalue 99999
minvalue 1;

CREATE TABLE IF NOT EXISTS Temporadas(
	idTemporada INT NOT NULL DEFAULT NEXTVAL('Temporada_seq'),
	descripcion VARCHAR(45) NULL DEFAULT NULL,
	PRIMARY KEY(idTemporada)
);

/*Creacion de la secuencoa para que el id sea autoincrementable*/
CREATE SEQUENCE Jornada_seq
start with 1
increment by 1
maxvalue 99999
minvalue 1;

CREATE TABLE IF NOT EXISTS Jornadas(
	idJornada INT NOT NULL DEFAULT NEXTVAL('Jornada_seq'),
	temporadaFK INT NOT NULL,
	ligaFK INT NOT NULL,
	descripcion VARCHAR(45) NULL DEFAULT NULL,
	PRIMARY KEY(idJornada)
);

/*Creacion de la secuencoa para que el id sea autoincrementable*/
CREATE SEQUENCE Partido_seq
start with 1
increment by 1
maxvalue 99999
minvalue 1;

CREATE TABLE IF NOT EXISTS Partidos(
	idPartidos INT NOT NULL DEFAULT NEXTVAL('Partido_seq'),
	jornadaFK INT NOT NULL,
	EquipoLocal INT NOT NULL,
	EquipoVisitante INT NOT NULL,
	fechaPartido DATE,
	PRIMARY KEY(idPartidos)
);

/*Creacion de la secuencoa para que el id sea autoincrementable*/
CREATE SEQUENCE Resultado_seq
start with 1
increment by 1
maxvalue 99999
minvalue 1;

CREATE TABLE IF NOT EXISTS Resultado(
	idResultado INT NOT NULL DEFAULT NEXTVAL('Resultado_seq'),
	partidoFK INT NOT NULL,
	resultado VARCHAR(45) NULL DEFAULT NULL,
	PRIMARY KEY(idResultado)
);

/*Relacion de las tablas EQUIPOS CON ESTADIO*/ 
ALTER TABLE Equipos ADD CONSTRAINT estadioFK FOREIGN KEY(estadio) REFERENCES Estadio(idEstadio);

/*Relacion de la tabla Jugadores con Equipos*/
ALTER TABLE Jugadores ADD CONSTRAINT equiposFK FOREIGN KEY(idEquiposFK) REFERENCES EQUIPOS(idEquipos);

/*Relacion de la tabla Jugaores con tipo de jugador*/
ALTER TABLE Jugadores ADD CONSTRAINT tipoJugador FOREIGN KEY(idTipoJugador) REFERENCES TipoJugador(idTipoJugador);

/*Relacion de la tabla liga con Tipos de equipo*/
ALTER TABLE Liga ADD CONSTRAINT Liga_teFK FOREIGN KEY(idTipoEFK) REFERENCES TiposEquipo(idTiposEquipo);

/*Relacion de la tabla liga con equipos*/
ALTER TABLE Liga ADD CONSTRAINT equipoFK FOREIGN KEY(idEquiposFK) REFERENCES EQUIPOS(idEquipos);

/*Relacion de la tabla goles con equipos*/
ALTER TABLE Goles ADD CONSTRAINT GolesequiposFK FOREIGN KEY(idEquipos) REFERENCES EQUIPOS(idEquipos);

/*Relacion de la tabla goles con Jugadores*/
ALTER TABLE Goles ADD CONSTRAINT GjugadoresFK FOREIGN KEY(idJugadores) REFERENCES Jugadores(idJugadores);

/*Relacion de la tabla goles con liga*/
ALTER TABLE Goles ADD CONSTRAINT GligaFK FOREIGN KEY(idLiga) REFERENCES Liga(idLiga);

/*Relacion de la tabla tecnicos con equipo*/
ALTER TABLE Tecnicos ADD CONSTRAINT ET_equiposFK FOREIGN KEY(te_equiposFK) REFERENCES EQUIPOS(idEquipos);

/*Relacion de las tablas Jornadas con Temporadas*/
ALTER TABLE Jornadas ADD CONSTRAINT ctemporadaFK FOREIGN KEY(temporadaFK) REFERENCES Temporadas(idTemporada);

/*Relacion de las tablas Jornadas con Ligas*/
ALTER TABLE Jornadas ADD CONSTRAINT cligasFK FOREIGN KEY(ligaFK) REFERENCES Liga(idLiga);

/*Relacion de las tablas Partidos con Jornadas*/
ALTER TABLE Partidos ADD CONSTRAINT cjornadaFK FOREIGN KEY(jornadaFK) REFERENCES Jornadas(idJornada);

/*Relacion de las tablas Partidos con Equipos*/
ALTER TABLE Partidos ADD CONSTRAINT cPartidosFK FOREIGN KEY(EquipoLocal) REFERENCES Equipos(idEquipos);

/*Relacion de las tablas partidos con Equipos*/
ALTER TABLE Partidos ADD CONSTRAINT cvPartidosFK FOREIGN KEY(EquipoVisitante) REFERENCES Equipos(idEquipos);

/*Relacion de las tablas Resultado con Partidos*/
ALTER TABLE Resultado ADD CONSTRAINT cResultadoFK FOREIGN KEY(partidoFK) REFERENCES Partidos(idPartidos);



