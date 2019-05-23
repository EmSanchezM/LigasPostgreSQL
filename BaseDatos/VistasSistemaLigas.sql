SELECT * FROM Liga;
CREATE VIEW V_EQUIPOS
AS
    SELECT Eq.idEquipos, Eq.nombre as nombreEquipo, Eq.fechaFundacion, Es.nombre as nombreEstadio FROM EQUIPOS Eq
    JOIN Estadio Es ON Es.idEstadio = Eq.estadio;

CREATE VIEW V_Goleadores
AS 
    SELECT G.idgoles,J.nombre as nombreJugador, tj.nombre as tipoJugador, G.numeroGoles FROM GOLES G
    JOIN Jugadores J on j.idJugadores = G.idjugadores
    Join TipoJugador tj on tj.idTipoJugador = j.idTipoJugador;

CREATE VIEW V_Resultados
AS
	SELECT P.idpartidos, p.fechapartido, e.nombre as equipolocal,
		(SELECT nombre as equipovisitante from equipos where idequipos = p.equipovisitante),
		r.resultado FROM PARTIDOS p
	JOIN RESULTADO R ON P.idpartidos = R.partidofk
	JOIN EQUIPOS E ON P.equipolocal = E.idEquipos;

CREATE VIEW V_Ligas
AS
	SELECT L.idliga,L.nombre, E.nombre as Equipo FROM Liga L 
	JOIN Equipos E ON L.idequiposfk = E.idequipos;

CREATE VIEW calendario
AS
SELECT P.idpartidos, p.fechapartido, e.nombre as equipolocal,
		(SELECT nombre as equipovisitante from equipos where idequipos = p.equipovisitante),
		r.resultado,
		es.nombre FROM PARTIDOS p
	JOIN RESULTADO R ON P.idpartidos = R.partidofk
	JOIN EQUIPOS E ON P.equipolocal = E.idEquipos
	JOIN Estadio ES ON E.estadio = ES.idestadio;
	
	
	