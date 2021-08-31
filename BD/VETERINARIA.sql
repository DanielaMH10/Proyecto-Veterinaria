drop database if exists VETERINARIA;

CREATE DATABASE VETERINARIA;

USE VETERINARIA;

/*CREACION DE LA TABLA USUARIO*/
CREATE TABLE USUARIO(
	idUsuario INT(12) NOT NULL ,
    nombreUsuario VARCHAR (50) NOT NULL,
    apellidoUsuario VARCHAR (50) NOT NULL,
    correoUsuario VARCHAR (50) NOT NULL,
    telefonoUsuario VARCHAR (20) NOT NULL,
    direccionUsuario VARCHAR (50) NOT NULL,
    passwordUsuario VARCHAR (20) NOT NULL,
    rolUsuario VARCHAR (20) NOT NULL,
    estadoUsuario INT
);

/*CREACION DE LA TABLA MEDICO */
CREATE TABLE MEDICO(
	idMedico INT(12) NOT NULL,
    idUsuarioFK INT(12) NOT NULL,
	nombreMedico VARCHAR (50) NOT NULL,
    apellidoMedico VARCHAR (50) NOT NULL, 
    telefonoMedico VARCHAR (20) NOT NULL,
    correoMedico VARCHAR (100) NOT NULL,
    tarjetaProfesional VARCHAR (50) NOT NULL,
    especialidadMedico VARCHAR (50) NOT NULL, 
    estadoMedico INT
);

/*CREACION DE LA TABLA PACIENTE*/
CREATE TABLE PACIENTE (
	idPaciente INT(12) NOT NULL,
    idUsuarioFK INT(12) NOT NULL, 
	nombrePaciente VARCHAR(50) NOT NULL,
	apellidoPaciente VARCHAR (50) NOT NULL,
	direccionPaciente VARCHAR(100) NOT NULL,
	telefonoPaciente VARCHAR (20) NOT NULL,
	correoPaciente VARCHAR (100) NOT NULL,
	fechaNacimiento DATE NOT NULL,
	estadoPaciente INT
);


/*CREACION DE LA TABLA AGENDA*/
CREATE TABLE AGENDA (
	idAgenda INT(12) NOT NULL,
     idMedicoFK INT(12) NOT NULL, 
     idPacienteFK INT(12) NOT NULL,
	fechaAgenda DATE NOT NULL,
    horaAgenda DATETIME,
    consultorio VARCHAR (2) NOT NULL,
    estadoAgenda BIT
);

/*CREACION DE LA TABLA HISTORIA CLINICA*/
CREATE TABLE HISTORIA_CLINICA (
	idHistoria INT(12) NOT NULL,
	idPacienteFK INT(12) NOT NULL,
    estatura DOUBLE NOT NULL, 
    peso DOUBLE NOT NULL,
    antecedentes TEXT NOT NULL,
    alergias TEXT NOT NULL,
    enfermedades TEXT NOT NULL
);


/*CREACION DE LA TABLA EXAMEN/*/
CREATE TABLE EXAMEN (
	idExamen INT(12) NOT NULL,
    idHistoriaFK INT(12) NOT NULL, 
    valor NUMERIC NOT NULL,
    fechaExamen DATE NOT NULL,
    tipoExamen VARCHAR (100)
);

/*CREACION DE LA TABLA CONSULTA MEDICA/*/
CREATE TABLE CONSULTA_MEDICA (
	idConsulta INT(12) NOT NULL,
    idHistoriaFK INT(12) NOT NULL, 
    horaAtencion DATETIME NOT NULL,
    motivoConsulta TEXT NOT NULL, 
    enfermedad TEXT NOT NULL
);

/*CREACION DE LA TABLA DIAGNOSTICO/*/
CREATE TABLE DIAGNOSTICO (
	idDiagnostico INT(12) NOT NULL,
    idConsultaFK INT(12) NOT NULL, 
    descripcion TEXT NOT NULL
);
SELECT * FROM PACIENTE;

/*INDICES DE TABLA USUARIO*/
ALTER TABLE USUARIO
ADD PRIMARY KEY (idUsuario);

/*INDICES DE LA TABLA PACIENTE/*/
ALTER TABLE PACIENTE 
ADD PRIMARY KEY (idPaciente),
ADD  KEY  FK_idUsuarioFK_PACIENTE_idx (idUsuarioFK);

/*INDICES DE LA TABLA MEDICO/*/
ALTER TABLE  MEDICO
ADD PRIMARY KEY (idMedico),
ADD  KEY  FK_idUsuarioFK_MEDICO_idx (idUsuarioFK);


/*INDICES DE LA TABLA AGENDA/*/
ALTER TABLE AGENDA
ADD PRIMARY KEY (idAgenda),
ADD KEY FK_idMedicoFK_AGENDA_idx (idMedicoFK),
ADD KEY FK_idPacienteFK_AGENDA_idx (idPacienteFK);

/*INDICES DE LA TABLA HISTORIA_CLINICA/*/
ALTER TABLE HISTORIA_CLINICA 
ADD PRIMARY KEY (idHistoria),
ADD KEY FK_idPacienteFK_HISTORIA_CLINICA_idx (idPacienteFK);

/*INDICES DE LA TABLA EXAMEN/*/
ALTER TABLE EXAMEN 
ADD PRIMARY KEY (idExamen),
ADD KEY FK_idHistoriaFK_EXAMEN_idx (idHistoriaFK);

/*INDICES DE LA TABLA CONSULTA_MEDICA/*/
 ALTER TABLE CONSULTA_MEDICA
ADD PRIMARY KEY (idConsulta),
ADD KEY FK_idHistoriaFK_CONSULTA_MEDICA_idx (idHistoriaFK);

 /*INDICES DE LA TABLA DIAGNOSTICO/*/
 ALTER TABLE DIAGNOSTICO
ADD PRIMARY KEY (idDiagnostico),
ADD KEY FK_idConsultaFK_DIAGNOSTICO_idx (idConsultaFK);


/*FILTROS PARA LA TABLA PACIENTE*/
ALTER TABLE PACIENTE 
ADD CONSTRAINT FK_idUsuarioFK_PACIENTE FOREIGN KEY (idUsuarioFK)
REFERENCES USUARIO (idUsuario) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*FILTROS PARA LA TABLA MEDICO*/
ALTER TABLE MEDICO
ADD CONSTRAINT FK_idUsuarioFK_MEDICO FOREIGN KEY (idUsuarioFK)
REFERENCES USUARIO (idUsuario) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*FILTROS PARA LA TABLA AGENDA*/
ALTER TABLE AGENDA 
ADD CONSTRAINT FK_idMedicoFK_AGENDA FOREIGN KEY (idMedicoFK)
REFERENCES MEDICO (idMedico) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT FK_idPacienteFK_AGENDA FOREIGN KEY (idPacienteFK)
REFERENCES PACIENTE (idPaciente) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*FILTROS PARA LA TABLA HISTORIA CLINICA*/
ALTER TABLE HISTORIA_CLINICA 
ADD CONSTRAINT FK_idPacienteFK_HISTORIA_CLINICA FOREIGN KEY (idPacienteFK)
REFERENCES PACIENTE (idPaciente) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*FILTROS PARA LA TABLA EXAMEN*/
ALTER TABLE EXAMEN 
ADD CONSTRAINT FK_idHistoriaFK_EXAMEN FOREIGN KEY (idHistoriaFK)
REFERENCES HISTORIA_CLINICA (idHistoria) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*FILTROS PARA LA TABLA CONSULTA_MEDICA*/
ALTER TABLE CONSULTA_MEDICA 
ADD CONSTRAINT FK_idHistoriaFK_CONSULTA_MEDICA FOREIGN KEY (idHistoriaFK)
REFERENCES HISTORIA_CLINICA (idHistoria) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*FILTROS PARA LA TABLA DIAGNOSTICO*/
ALTER TABLE DIAGNOSTICO
ADD CONSTRAINT FK_idConsultaFK_DIAGNOSTICO FOREIGN KEY (idConsultaFK)
REFERENCES CONSULTA_MEDICA (idConsulta) ON DELETE NO ACTION ON UPDATE NO ACTION; 

/*INSERTAR LOS REGISTROS DE LA TABLA USUARIO*/
 USE VETERINARIA;
 SHOW TABLES;
 DESCRIBE USUARIO;
 INSERT INTO USUARIO (idUsuario,nombreUsuario,apellidoUsuario,correoUsuario,telefonoUsuario,direccionUsuario,passwordusuario,rolUsuario,estadoUsuario)
VALUES ('10741583747','Jairo','Rojas','pachemvzfusm@yahoo.es','3123118153', 'calle 5 a sur N3 a 04','jairo17','Medico','1');
INSERT INTO USUARIO (IdUsuario,nombreUsuario,apellidoUsuario,correoUsuario,telefonoUsuario,direccionUsuario,passwordusuario,rolUsuario,estadoUsuario)
VALUES ('1000216054','Daniela','Mora', 'danmora@hotmail.com', '3053714069','calle 13 N14-38','dani865','Paciente','1');
INSERT INTO USUARIO (idUsuario,nombreUsuario,apellidoUsuario,correoUsuario,telefonoUsuario,direccionUsuario,passwordusuario,rolUsuario,estadoUsuario)
VALUES ('1000621051','Nataly','Porras','nata@hotmail.com','3235648520','diag 24 N45-78','NATA90','Paciente','1');

/*INSERTAR LOS REGISTROS DE LA TABLA MEDICO*/
USE VETERINARIA;
 SHOW TABLES;
 DESCRIBE MEDICO;
 INSERT INTO MEDICO (IdUsuarioFK,idMedico,nombreMedico, apellidoMedico,telefonoMedico,correoMedico,TarjetaProfesional, especialidadMedico, estadoMedico)
 VALUES ('10741583747','10741583747','Jairo','Rojas','3123118153','pachemvzfusm@yahoo.es','10741583747','Veterinario','1');
 
 /*INSERTAR LOS REGISTROS DE LA TABLA PACIENTE*/
USE VETERINARIA;
 SHOW TABLES;
 DESCRIBE PACIENTE;
 INSERT INTO PACIENTE ( idUsuarioFK,idPaciente, nombrePaciente, apellidoPaciente, direccionPaciente, telefonoPaciente, fechaNacimiento,estadoPaciente)
 VALUES ('1000216054','1000216054','Daniela','Mora','calle 13 N14-38', '3053714069','2002/*10/*12','1');
 INSERT INTO PACIENTE ( idUsuarioFK,idPaciente, nombrePaciente, apellidoPaciente, direccionPaciente, telefonoPaciente, fechaNacimiento, estadoPaciente)
 VALUES ('1000621051','1000621051','Nataly','Porras','diag 24 N45-78','3235648520','2005/*12/*06','1');
 
  /*INSERTAR LOS REGISTROS DE LA TABLA AGENDA*/
USE VETERINARIA;
 SHOW TABLES;
 DESCRIBE AGENDA;
INSERT INTO AGENDA (idMedicoFK,idPacienteFK,IdAgenda,fechaAgenda,horaAgenda,consultorio,estadoAgenda)
VALUES ('10741583747','1000216054','1','2020/07/12','2020/07/12 5:30','1','1');
INSERT INTO  AGENDA (idMedicoFK,idPacienteFK,IdAgenda,fechaAgenda,horaAgenda,consultorio,estadoAgenda)
VALUES ('10741583747','1000621051','2','2020/10/12','2020/10/12 5:30','3','1');

/*INSERTAR LOS REGISTROS DE LA TABLA HISTORIA_CLINICA*/
USE VETERINARIA;
 SHOW TABLES;
 DESCRIBE HISTORIA_CLINICA;
 INSERT INTO HISTORIA_CLINICA (idPacienteFK,IdHistoria,estatura,peso,antecedentes,alergias,enfermedades)
 VALUES ('1000216054','1',1.70,65,'Ninguno','Ninguna','Ninguna');
 INSERT INTO HISTORIA_CLINICA (idPacienteFK,IdHistoria,estatura,peso,antecedentes,alergias,enfermedades)
 VALUES ('1000621051','2',1.69,66,'Ninguno','Ninguna','Ninguna');
 
  /*INSERTAR REGISTROS DE LA TABLA EXAMEN*/
USE VETERINARIA;
 SHOW TABLES;
 DESCRIBE EXAMEN;
 INSERT INTO EXAMEN (idHistoriaFK,idExamen,valor,fechaExamen,tipoExamen)
 VALUES ('1','1','100','2020/*08/*25','Radiografia');
 INSERT INTO EXAMEN (idHistoriaFK,idExamen,valor,fechaExamen,tipoExamen)
 VALUES ('2','2','50.000','2020/*08/*25','Radiografia panorámica');
 
 /*INSERTAR REGISTROS DE LA TABLA CONSULTA_MEDICA*/
USE VETERINARIA;
 SHOW TABLES;
 DESCRIBE CONSULTA_MEDICA;
 INSERT INTO CONSULTA_MEDICA (idHistoriaFK,IdConsulta,HoraAtencion,MotivoConsulta,Enfermedad)
 VALUES ('1','1','2020/*07/*12 08:10','Dolor','NA');
 INSERT INTO CONSULTA_MEDICA (idHistoriaFK,IdConsulta,HoraAtencion,MotivoConsulta,Enfermedad)
 VALUES ('2','2','2020/*10/*12 09:10','Dolor','NA');
 
 /*INSERTAR REGISTROS DE LA TABLA DIAGNOSTICO*/
USE VETERINARIA;
 SHOW TABLES;
 DESCRIBE DIAGNOSTICO;
 INSERT INTO DIAGNOSTICO (idConsultaFK,IdDiagnostico,descripcion)
 VALUES ('1','1','No presenta ninguna alergia, ni enfermedad');
 INSERT INTO DIAGNOSTICO (idConsultaFK,IdDiagnostico,descripcion)
 VALUES ('2','2','No presenta ninguna alergia, ni enfermedad');
 
  /*SELECT*/
 SELECT * FROM PACIENTE ;
 SELECT * FROM USUARIO;
 SELECT * FROM MEDICO;
 SELECT * FROM AGENDA;
 SELECT * FROM CONSULTA_MEDICA;
 SELECT * FROM HISTORIA_CLINICA;
 SELECT * FROM EXAMEN;
 SELECT * FROM DIAGNOSTICO;