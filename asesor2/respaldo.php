<?php
//$mysqli = new mysqli("localhost", "serviciosocial", "P@rfirio2022", "serviciosocial"); 
$mysqli = new mysqli("localhost", "subacademica", "Tecserd@n2020", "residencia3"); 
//$mysqli = new mysqli("localhost","Infadmin","INF2023@eventos","eventosacademicos");
//$mysqli = new mysqli("localhost","tec2022","Control@cceso","controlacceso");
//$mysqli = new mysqli("localhost","lenguas","Lengu@s2023","ingles2023");
//$mysqli = new mysqli("localhost","kardex","K@rdex2023","kardex");
//$mysqli = new mysqli('localhost','calificaciones2','Calific@ciones2023','calificaciones2');
//$mysqli = new mysqli('localhost','serviciosescolares','Escol@res2023','serviciosescolares');

//$sql = $mysqli->query("CREATE TABLE documentosinscripcion ( IDdocumentos int(5) AUTO_INCREMENT PRIMARY KEY );");


//$sql = $mysqli->query(" DELETE FROM  asignacion WHERE IDAsignacion='576'");
//$sql = $mysqli->query("INSERT INTO admin (NCompletoA, CargoA, EmailA, TelefonoA, PasswordA,ruta_imagen) VALUES ('Gise Gallardo','Auxiliar','mgallardo@cdserdan.tecnm.mx','2451035365','qP4BiWG9YE+dQuAkG1GMHcO8cCX07Pbb8ilRMzUO2xY=','índice.jpg') ");

//$sql = $mysqli->query("UPDATE admin SET  PasswordA='qP4BiWG9YE+dQuAkG1GMHcO8cCX07Pbb8ilRMzUO2xY=' where idA='3' ");

//$sql = $mysqli->query("UPDATE cartacompromisosocial SET  no_control='105' where IdCartaCompromiso='13' ");

//$sql = $mysqli->query("UPDATE asignacion SET  no_control='18CS0102', no_controladmin='18CS0102' where id='1148' ");


//$sql = $mysqli->query("INSERT INTO solicitud (no_control,no_controladmin) VALUES('20CS0246','20CS0246') ");


//$sql = $mysqli->query("UPDATE  registroevento  SET  nomEvento='Software Libre 2023'   where idEvento='IINF-2023' ");
//$sql = $mysqli->query("UPDATE documentosgestion SET  nombre_archivo  = ' ' where no_control='16CS0270' ");

//$sql = $mysqli->query("DELETE FROM carreras WHERE IDCarreras = '15'");
//$sql = $mysqli->query("DELETE FROM  periodos WHERE idperiodo='36' ");
//$sql = $mysqli->query("DELETE FROM  periodos WHERE idperiodo='35' ");
//$sql = $mysqli->query("DELETE FROM  periodos WHERE idperiodo='34' ");
//$sql = $mysqli->query("DELETE FROM  asistenciaeventos  ");
//$sql = $mysqli->query("DELETE FROM  asistenciataller  ");
//$sql = $mysqli->query("DELETE FROM  informatica  ");
//$sql = $mysqli->query("DELETE FROM  registroevento  ");

//$sql = $mysqli->query("DELETE FROM  semestre  where IDSemestre='5'");

//$sql = $mysqli->query("DELETE FROM  asignacionproyecto  where id='1011'");


//$sql = $mysqli->query("DELETE FROM  carrera  ");
//$sql = $mysqli->query("DELETE FROM  asignacionactividades  where id='1011'");


//$sql = $mysqli->query("DELETE FROM carrera ");
//$sql = $mysqli->query("DELETE FROM  asignacionempresa  where id='1011'");


//$sql = $mysqli->query("DELETE FROM  asignacionobjectivos  where id='1010'");
//$sql = $mysqli->query("DELETE FROM  asignacionobjectivos  where id='1011'");


//$sql = $mysqli->query("DELETE FROM  semestre  where IDSemestre='1'");
//$sql = $mysqli->query("DELETE  FROM  alumnos  where IDAlumno='23'");
//$sql = $mysqli->query("DELETE  FROM  asistencia  ");

$sql = $mysqli->query("DELETE  FROM  asignacionobjectivos  where id='1607'");
$sql = $mysqli->query("DELETE  FROM  asignacionactividades  where id='1607'");
$sql = $mysqli->query("DELETE  FROM  asignacionempresa where id='1607'");
$sql = $mysqli->query("DELETE  FROM  asignacionproyecto  where id='1601'");
$sql = $mysqli->query("UPDATE tb_residentes SET paso1='Alumno', no_controladmin='21CS0059'  where no_control='21CS0302' ");
$sql = $mysqli->query("DELETE  FROM  proyectos  where idproyecto='1366'");
$sql = $mysqli->query("DELETE  FROM  empresa  where idempresa='1366'");

if ($mysqli->affected_rows > 0) {
    echo "Actualización exitosa. Filas afectadas: " . $mysqli->affected_rows;
} else {
    echo "No se realizaron cambios o el IDAlumno no existe.";
}


//$sql = $mysqli->query("insert into asignacionempresa(no_controle, no_control) values ( '18CS0149' ,'18CS0149') ");
//$sql = $mysqli->query("insert into asignacionproyecto(no_controlp, mensaje, fecha,  no_control) values ('18CS0149' ,'Hola','hoy', '18CS0149') ");
//$sql = $mysqli->query("insert into asignacionobjectivos(no_controlo, no_control) values ( '18CS0149' ,'18CS0149') ");
//$sql = $mysqli->query("insert into asignacionactividades(no_controla, no_control) values ( '18CS0149' ,'18CS0149') ");
//$sql = $mysqli->query("insert into proyectos(no_control) values ( '18CS0149') ");
//$sql = $mysqli->query("insert into empresa(no_control) values ( '18CS0149') ");
/*
$sql = $mysqli->query(" UPDATE  asesor  SET PasswordAs='Canico2025@'   where IdAS='9'");                             

$sql = $mysqli->query("INSERT INTO asesor (
    NombreAS, 
    CarreraAS, 
    EmailAS, 
    TelefonoAS, 
    PasswordAs, 
    ruta_imagen, 
    idD
) 
VALUES (
    'José Rodrigo Sanchez Hernandez', 
    'Ingeniería Informática', 
    'rsanchez@cdserdan.tecnm.mx', 
    '2451000422', 
    'Rsanchez@2025', 
    'ruta/a/imagen.jpg', 
    1
);
");

*/


//$mensaje='El Alumno ha registrado su proyecto ';

	//	$fecha2 = strftime( "%Y-%m-%d %H-%M-%S", time() ); 
//$sql = $mysqli->query("INSERT INTO asignacion(NControlAdmin, Mensaje, Fecha, NControl) VALUES('18CS0039','$mensaje','$fecha2','18CS0039')" );


//$regis = " INSERT INTO informatica(idCarrera, nc, nombre, paterno, materno, correo, carrera, semestre, sexo, pass) VALUES('$idCarrera','$nc','$nombre','$paterno','$materno','$correo','$carrera','$semestre','$sexo','$pass')";

//$sql = $mysqli->query(")");
//$query = $db->execute($sql);
//           if($query){
//              echo "Se guardo correctamente";
//           }
//       else {
//         echo "Error";
//      }

//$sql = $mysqli->query("DELETE  FROM  tb_residentes where no_control=' '");


//$sql = $mysqli->query("DELETE  FROM  presidente where idP='46'");

//$sql = $mysqli->query("DELETE  FROM  carreras where IDCarreras='1'");

//$sql = $mysqli->query("DELETE  FROM  asignacionobjectivos  where id='1405'");
//$sql = $mysqli->query("DELETE  FROM  asignacionactividades  where id='1493'");
//$sql = $mysqli->query("DELETE  FROM  asignacionempresa where id='1559'");
//$sql = $mysqli->query("DELETE  FROM  asignacionproyecto  where id='1553'");
//$sql = $mysqli->query("UPDATE tb_residentes SET paso1='Administrador' where no_control='20CS0246' ");

//$sql = $mysqli->query("DELETE  FROM  alumnos  where IDAlumno='866'");




//$sql = $mysqli->query("UPDATE tb_residentes SET paso1='Administrador' where no_control='20CS0246' ");
//$sql = $mysqli->query("UPDATE  asignacionproyecto  SET no_control='18CS0152',no_controlp='18CS0152' where id='1287'");
//$sql = $mysqli->query("UPDATE  asignacionactividades SET no_control='18CS0152' ,no_controla='18CS0152'where id='1291'");
//$sql = $mysqli->query("UPDATE  asignacionobjectivos SET no_control='18CS0152' ,no_controlo='18CS0152'  where id='1291'");
//$sql = $mysqli->query("UPDATE  asignacionempresa SET no_control='18CS0152' , no_controle='18CS0152' where id='1291'");
//$sql = $mysqli->query("UPDATE  proyectos SET no_control='18CS0152'  where idproyecto='1070'");
//$sql = $mysqli->query("UPDATE  empresa SET no_control='18CS0152' where idempresa='1070'");
//$sql = $mysqli->query("UPDATE  solicitud SET no_control='18CS0149' , no_controladmin='18CS0149' where id='1146'");

//$sql = $mysqli->query("DELETE  FROM  numerodeasesores  where IdAS='0'");


//$sql = $mysqli->query("INSERT INTO  asignacionproyecto (no_controlp, mensaje, fecha, no_control ) VALUES ('18CS0102', 'El ALUMNO HA ACTUALIZADO SU PROYECTO', '2020-08-22 11:40:00', '18CS0102') ");
//$sql = $mysqli->query("INSERT INTO  asignacionobjectivos (no_controlo, no_control ) VALUES ('18CS0102', '18CS0102') ");
//$sql = $mysqli->query("INSERT INTO  asignacionempresa (no_controle, no_control ) VALUES ('18CS0102', '18CS0102') ");
//$sql = $mysqli->query("INSERT INTO  asignacionactividades (no_controla, no_control ) VALUES ('18CS0102', '18CS0102') ");
//$sql = $mysqli->query("INSERT INTO proyectos(no_control) values ( '18CS0102') ");
//$sql = $mysqli->query("INSERT INTO empresa(no_control) values ( '18CS0102') ");
			
			


//$sql = $mysqli->query("DELETE  FROM  peridosservicio where idPeriodo='9'");


//$sql = $mysqli->query("DELETE  FROM  alumnos where IDAlumno='429'");
//$sql = $mysqli->query("DELETE  FROM  solicitud where id='591'");

//$sql = $mysqli->query("INSERT INTO  solicitud (no_control, no_controladmin ) VALUES ('20cs0053', '20cs0053') ");
//$sql = $mysqli->query("INSERT INTO  solicitud (no_control, no_controladmin ) VALUES ('19CS0075', '19CS0075') ");
//$sql = $mysqli->query("UPDATE registroevento  SET  nomEvento='Día del Ingeniero Informático'  where idEvento='IINF-2022'");


//$sql = $mysqli->query("UPDATE informatica SET   nc='22cs0023' where correo='22cs0023@cdserdan.tecnm.mx' ");
//$sql = $mysqli->query("UPDATE informatica SET   semestre='1' where nc='22CS0225' ");



//$sql = $mysqli->query("UPDATE empresa  SET   Dependencia='Escuela Telesecundaria 'Félix Mendelssohn' con clave '21ETV0287A'' where IDEmpresa='124' ");

//$sql = $mysqli->query("UPDATE alumnos SET  paso1='Administrador' , paso3='x', NControlAdmin='20CS0266'  where IDAlumno='468'   ");


//$sql = $mysqli->query("INSERT INTO solicitud VALUES('57230','application/pdf',19CS0004SS.PDF','','','','57230','application/pdf','19CS0004SS.PDF','','','19CS0075','19CS0075')");


//$sql = $mysqli->query("DROP TABLE carrera");
//$sql = $mysqli->query("DELETE  FROM  asignacion where IDAsignacion='212'");
//$sql = $mysqli->query("DELETE  FROM  proyectos where idproyecto='944'");
//$sql = $mysqli->query("DELETE  FROM  tb_residentes where no_control=''");


//$sql = $mysqli->query("UPDATE peridosservicio SET  B4Reportar='15/08/2022 al 17/02/2023' where idPeriodo='8' ");

///$sql = $mysqli->query("UPDATE tb_residentes SET  paso1='Administrador'  where no_control='19CS0245'");
//$sql = $mysqli->query("UPDATE tb_residentes SET  paso1='Administrador', no_controladmin='17CS0414'  where no_control='17CS0414'");
//$sql = $mysqli->query("UPDATE reporteFinalextenso SET  Imagen1='' , Imagen2='' , Imagen3='' , Imagen4='' , Imagen5='' , Imagen6='' , Imagen7='' , Imagen8='' , Imagen9='' , Imagen10=''  , Imagen11='' , Imagen12=''   where NcontrolA='19CS0239'");





//INSERT INTO numerodeasesores VALUES("883","203","0");
//INSERT INTO numerodeasesores VALUES("884","203","0");
//INSERT INTO numerodeasesores VALUES("885","203","0");




//$sql = $mysqli->query("ALTER TABLE ReporteFEEA CHANGE  AUTE  AUTE5 varchar(5000) null;");



//$sql = $mysqli->query("ALTER TABLE solicitud MODIFY nombre_archivoA varchar(250) null;");
//$sql = $mysqli->query("INSERT INTO  solicitud (no_control, no_controladmin ) VALUES ('C19CS0045', 'C19CS0045') ");
//$sql = $mysqli->query("ALTER TABLE presidente MODIFY Cargo varchar(100) null;");
//$sql = $mysqli->query("ALTER TABLE reporte3 MODIFY ObservacionR2 varchar(5000) null;");
//$sql = $mysqli->query("ALTER TABLE solicitud MODIFY tamanioA int(20) null;");
//$sql = $mysqli->query("ALTER TABLE solicitud MODIFY tipoA varchar(250) null;");
//$sql = $mysqli->query("ALTER TABLE informatica MODIFY paterno varchar(45) null;");
//$sql = $mysqli->query("ALTER TABLE informatica MODIFY materno varchar(45) null;");
//$sql = $mysqli->query("ALTER TABLE informatica MODIFY correo varchar(45) null;");
//$sql = $mysqli->query("ALTER TABLE informatica MODIFY carrera varchar(100) null;");
//$sql = $mysqli->query("ALTER TABLE informatica MODIFY semestre varchar(20) null;");
//$sql = $mysqli->query("ALTER TABLE informatica MODIFY sexo varchar(20) null;");
//$sql = $mysqli->query("ALTER TABLE informatica MODIFY pass varchar(200) null;");
//$sql = $mysqli->query("ALTER TABLE registroevento MODIFY tipo varchar(250) null;");
//$sql = $mysqli->query("ALTER TABLE registroevento MODIFY finicio varchar(250) null;");
//$sql = $mysqli->query("ALTER TABLE registroevento MODIFY hinicio varchar(150) null;");
//$sql = $mysqli->query("ALTER TABLE documentosgestion MODIFY tipo2 varchar(250) null;");
//$sql = $mysqli->query("ALTER TABLE documentosgestion MODIFY nombre_archivo2 varchar(250) null;");

//$sql = $mysqli->query("ALTER TABLE asistenciaeventos MODIFY idEvento  varchar(45) null;");
//$sql = $mysqli->query("ALTER TABLE tb_residentes MODIFY seguro varchar(20) null;");
//$sql = $mysqli->query("ALTER TABLE tb_residentes MODIFY porcentaje  varchar(10) null;");
//$sql = $mysqli->query("ALTER TABLE tb_residentes MODIFY creditosr  varchar(10) null;");
//$sql = $mysqli->query("ALTER TABLE tb_residentes MODIFY creditosc varchar(10) null;");
//$sql = $mysqli->query("ALTER TABLE tb_residentes MODIFY promedio varchar(10) null;");




//$sql = $mysqli->query("insert into asistenciaeventos (nc) values ( '18CS0064') ");

//$sql = $mysqli->query("ALTER TABLE asistenciaeventos DROP FOREIGN KEY idEvento");

//$sql = $mysqli->query("INSERT INTO administrador (NombreAdministrador, ApellidosAdministrador, DireccionAdmin, CorreoAdmin, TelefonoAdmin, PasswordAdmin, Permisos) VALUES
//('Mtro. Jose Rodrigo', 'Sanchez Hernandez', 'Av 2 Norte ', 'rsanchez@cdserdan.tecnm.mx', '2451075792', 'admin2023', '')");
//$sql = $mysqli->query("insert into empresa(no_control) values ( '16CS0081') ");







//$sql = $mysqli->query("ALTER TABLE reporte1 DROP COLUMN semana23; ");
//$sql = $mysqli->query("ALTER TABLE reporte1 DROP COLUMN semana24; ");
//$sql = $mysqli->query("ALTER TABLE actividades DROP COLUMN semana25; ");
//$sql = $mysqli->query("ALTER TABLE actividades DROP COLUMN semana26; ");

//$sql = $mysqli->query("TRUNCATE TABLE carrera ");
//$sql = $mysqli->query("DELETE FROM presidente");
//$sql = $mysqli->query("ALTER TABLE actividades DROP semana3A; ");



//$sql = $mysqli->query("ALTER TABLE reporteFinalextenso  ADD PB varchar(5)  ");
//$sql = $mysqli->query("ALTER TABLE `Reporte2EA`  ADD `AUTE` varchar(5000)  ");


//$sql = $mysqli->query("ALTER TABLE `reporte1`  ADD `StattusR1` varchar(250)  ");
//$sql = $mysqli->query("ALTER TABLE `tb_residentes`  ADD `nombre_archivo` varchar(250)  ");

//$sql = $mysqli->query("ALTER TABLE `documentosinscripcion`  ADD `Status` VARCHAR(500)  ");

//$sql = $mysqli->query("ALTER TABLE `documentosinscripcion`  ADD `Observaciones` VARCHAR(5000)  ");
//$sql = $mysqli->query("ALTER TABLE `cartapresentacion`  ADD `ObservacionesCP` VARCHAR(500)  ");



//$sql = $mysqli->query("ALTER TABLE `documentosgestion`  ADD `tamanioCPG` VARCHAR(3000)  ");


//$sql = $mysqli->query("ALTER TABLE `reporteFinalextenso`  ADD  `Imagen1` VARCHAR(500)  ");


//sql = $mysqli->query("DROP TABLE  administrador ");
//$sql = $mysqli->query("DROP TABLE  alumnos ");
//$sql = $mysqli->query("DROP TABLE  docentes ");
//$sql = $mysqli->query("ALTER TABLE `reporteFinalextenso` MODIFY `ActividadesR3` text(25000)   ");
//$sql = $mysqli->query("ALTER TABLE `alumnos` MODIFY `Noi` VARCHAR(500)   ");
//$sql = $mysqli->query(" INSERT INTO  tb_residentes (ncontrol)
//SELECT ncontrolcopia from alumnoscopia;
 //   ");

 //if (!$mysqli->query("DROP PROCEDURE IF EXISTS login") ||
 //!$mysqli->query("CREATE PROCEDURE login(IN usuariologin VARCHAR(50), passwordlogin VARCHAR(50) ) BEGIN  SELECT usuario, password, tipousuario FROM login 
 //WHERE usuario=usuariologin and password = passwordlogin; END;")) {
 //echo "Falló la creación del procedimiento almacenado: (" . $mysqli->errno . ") " . $mysqli->error;
//}

//if (!$mysqli->query("DROP PROCEDURE IF EXISTS buscarAdminnn") ||
//   !$mysqli->query("CREATE PROCEDURE buscarAdminnn() BEGIN SELECT * FROM admin; END;")) {
//   echo "Falló la creación del procedimiento almacenado: (" . $mysqli->errno . ") " . $mysqli->error;
//}

//ALTER TABLE carga_academica  ADD calificacion int(4) DEFAULT NULL 
//ALTER TABLE provedores MODIFY COLUMN FINE varchar(10) null StatussCP
//$no_control ="18CS0332";

//			$mensaje = "Acepto";
			
//			$sql = $mysqli->query(" UPDATE  tb_residentes  SET  privacidad='$mensaje' where no_control='$no_control'");                             
//			$mensaje='El Alumno ha registrado su proyecto ';

//	     	$fecha2 = strftime( "%Y-%m-%d %H-%M-%S", time() ); 
//			$sql = $mysqli->query("insert into asignacionempresa(no_controle, no_control) values ( '$no_control' ,'$no_control') ");
//			$sql = $mysqli->query("insert into asignacionproyecto(no_controlp, mensaje, fecha,  no_control) values ('$no_control' ,'$mensaje','$fecha2', '$no_control') ");
//			$sql = $mysqli->query("insert into asignacionobjectivos(no_controlo, no_control) values ( '$no_control' ,'$no_control') ");
//			$sql = $mysqli->query("insert into asignacionactividades(no_controla, no_control) values ( '$no_control' ,'$no_control') ");
			
//			$sql = $mysqli->query("insert into proyectos(no_control) values ( '$no_control') ");
			
//			$sql = $mysqli->query("insert into empresa(no_control) values ( '$no_control') ");
			
		                          
			
//$sql = $mysqli->query("INSERT INTO programa (NControl,StatusPro) VALUES ('20CS0259','Aceptado')");
//$sql = $mysqli->query("INSERT INTO empresa (Ncontrol,StatusEmpresa) VALUES ('20CS0259','Aceptado')");
//$sql = $mysqli->query("DELETE  FROM  proyectos  where idproyecto='1186'");
//$sql = $mysqli->query("DELETE  FROM  empresa  where idempresa='1320'");
//$sql = $mysqli->query('INSERT INTO actividades VALUES("6090","Análisis de la base de datos correspondientes a los sistemas de servicio social, residencia profesional, pase de asistencia y sistema de entrada","x","","","","","","21CS0154");');


//$sql = $mysqli->query("DELETE  FROM  empresa  where idempresa='1320'");
//$sql = $mysqli->query("UPDATE alumnos SET IDCarrera = 11 WHERE IDAlumno = '1004'");

//$sql = $mysqli->query("ALTER TABLE reporteFinalextenso  ADD Imagen13 varchar(400) DEFAULT NULL ");


// Validar si la actualización fue exitosa


/*
$sql = $mysqli->query("CREATE TABLE `tipousuario` (
  `idtusuario` int(11) NOT NULL AUTO_INCREMENT,
  `nombreusuario` varchar(50) NOT NULL,
  PRIMARY KEY (`idtusuario`)
)
");
/*
$sql = $mysqli->query("CREATE TABLE carrera (
    idCarrera varchar(100) NOT NULL PRIMARY KEY,
    nomCarrera varchar(100) DEFAULT NULL
        )");

$sql = $mysqli->query("CREATE TABLE conferencista (
    idConferencista int(10) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nomConfe varchar(150) NOT NULL,
    nomEvento varchar(100) DEFAULT NULL,
    fecha varchar(500) DEFAULT NULL
       )");

$sql = $mysqli->query("CREATE TABLE informatica (
    idCarrera varchar(100) NOT NULL,
    nc varchar(45) NOT NULL primary key,
    nombre varchar(45) NOT NULL,
    paterno varchar(45) NOT NULL,
    materno varchar(45) NOT NULL,
    correo varchar(45) NOT NULL,
    carrera varchar(100) NOT NULL,
    semestre varchar(12) NOT NULL,
    sexo varchar(2) NOT NULL,
    pass varchar(100) NOT NULL
         )");

$sql = $mysqli->query("CREATE TABLE registroevento (
    idCarrera varchar(100) NOT NULL,
    idEvento varchar(45) NOT NULL primary key,
    nomEvento varchar(45) NOT NULL,
    finicio varchar(250) DEFAULT NULL,
    hinicio varchar(150) DEFAULT NULL,
    lugar varchar(100) DEFAULT NULL,
    semestre varchar(12) NOT NULL  
         )");


         $sql = $mysqli->query("CREATE TABLE cartaliberacionserviciosocial (
   IdCartaA int(11) NOT NULL  PRIMARY KEY AUTO_INCREMENT,
tamanioCA varchar(250) DEFAULT NULL,
tipo varchar(500) DEFAULT NULL,
nombre_archivo varchar(500) DEFAULT NULL,
StatusCA varchar(500) DEFAULT NULL,
ObservacionesCA varchar(1000) DEFAULT NULL,
no_control varchar(20) NOT NULL,
numerooficio varchar(500) DEFAULT NULL
            )");

$sql = $mysqli->query("CREATE TABLE reporte4 (
  NcontrolA4 varchar(20) NOT NULL PRIMARY KEY,
  Actividades4 text DEFAULT NULL,
  Horas4 varchar(4) DEFAULT NULL,
  HorasAcumuladas24 varchar(5) NOT NULL,
  StattusR4 varchar(500) DEFAULT NULL,
  ObservacionR4 varchar(500) DEFAULT NULL
  )");

*/







//$mysqli = new mysqli("localhost", "serviciosocial", "P@rfirio2022", "serviciosocial"); 



?>

