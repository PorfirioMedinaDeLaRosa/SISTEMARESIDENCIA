<?php
//$mysqli = new mysqli("localhost", "serviciosocial", "P@rfirio2022", "serviciosocial"); 
//$mysqli = new mysqli("localhost", "subacademica", "Tecserd@n2020", "residencia3"); 
//$mysqli = new mysqli("localhost","Infadmin","INF2023@eventos","eventosacademicos");
$mysqli = new mysqli("localhost","tec2022","Control@cceso","controlacceso");
//$mysqli = new mysqli("localhost","lenguas","Lengu@s2023","ingles2023");
//$mysqli = new mysqli("localhost","kardex","K@rdex2023","kardex");
//$mysqli = new mysqli('localhost','calificaciones2','Calific@ciones2023','calificaciones2');
//$mysqli = new mysqli('localhost','serviciosescolares','Escol@res2023','serviciosescolares');

//$sql = $mysqli->query("CREATE TABLE documentosinscripcion ( IDdocumentos int(5) AUTO_INCREMENT PRIMARY KEY );");


//$sql = $mysqli->query("UPDATE alumnos SET SemestreAlumno='11' where IDAlumno='484' ");
//$sql = $mysqli->query("INSERT INTO admin (NCompletoA, CargoA, EmailA, TelefonoA, PasswordA,ruta_imagen) VALUES ('Gise Gallardo','Auxiliar','mgallardo@cdserdan.tecnm.mx','2451035365','qP4BiWG9YE+dQuAkG1GMHcO8cCX07Pbb8ilRMzUO2xY=','índice.jpg') ");

//$sql = $mysqli->query("UPDATE admin SET  PasswordA='qP4BiWG9YE+dQuAkG1GMHcO8cCX07Pbb8ilRMzUO2xY=' where idA='3' ");

//$sql = $mysqli->query("UPDATE cartacompromisosocial SET  no_control='105' where IdCartaCompromiso='13' ");

//$sql = $mysqli->query("UPDATE asignacion SET  no_control='18CS0102', no_controladmin='18CS0102' where id='1148' ");


//$sql = $mysqli->query("UPDATE solicitud SET  no_control='18CS0149', no_controladmin='18CS0149' where id='1146' ");


//$sql = $mysqli->query("UPDATE  registroevento  SET  nomEvento='Software Libre 2023'   where idEvento='IINF-2023' ");
//$sql = $mysqli->query("UPDATE documentosgestion SET  nombre_archivo  = ' ' where no_control='16CS0270' ");

//$sql = $mysqli->query("DELETE FROM  periodos WHERE idperiodo='37' ");
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

//$mensaje='El Alumno ha registrado su proyecto ';

//		$fecha2 = strftime( "%Y-%m-%d %H-%M-%S", time() ); 

//$sql = $mysqli->query("insert into asignacion(NControlAdmin, Mensaje, Fecha, NControl) values ( '20CS0134' ,'$mensaje','$fecha2', '20CS0134') ");

//$sql = $mysqli->query("insert into programa ( 	NControl ) values ( '20CS0134') ");

//$sql = $mysqli->query("insert into empresa (Ncontrol ) values ( '20CS0134') ");


//$sql = $mysqli->query("insert into asignacionempresa(no_controle, no_control) values ( '18CS0149' ,'18CS0149') ");
//$sql = $mysqli->query("insert into asignacionproyecto(no_controlp, mensaje, fecha,  no_control) values ('18CS0149' ,'Hola','hoy', '18CS0149') ");
//$sql = $mysqli->query("insert into asignacionobjectivos(no_controlo, no_control) values ( '18CS0149' ,'18CS0149') ");
//$sql = $mysqli->query("insert into asignacionactividades(no_controla, no_control) values ( '18CS0149' ,'18CS0149') ");
//$sql = $mysqli->query("insert into proyectos(no_control) values ( '18CS0149') ");
//$sql = $mysqli->query("insert into empresa(no_control) values ( '18CS0149') ");
//$sql = $mysqli->query(" UPDATE  tb_residentes  SET paso1='Administrador' , no_controladmin ='18CS0149'  where no_control='18CS0149'");                             


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

//$sql = $mysqli->query("DELETE  FROM  asignacionproyecto  where id='1380'");
//$sql = $mysqli->query("DELETE  FROM  asignacionactividades  where id='1386'");
//$sql = $mysqli->query("DELETE  FROM  asignacionobjectivos where id='1386'");
//$sql = $mysqli->query("DELETE  FROM  asignacionempresa where id='1386'");


//$sql = $mysqli->query("DELETE  FROM  asignacionactividades  where id='1350'");
//$sql = $mysqli->query("DELETE  FROM  asignacionactividades  where id='1289'");
//$sql = $mysqli->query("DELETE  FROM  asignacionactividades  where id='1277'");

//$sql = $mysqli->query("DELETE  FROM  asignacionproyecto  where id='1344'");
//$sql = $mysqli->query("DELETE  FROM  asignacionproyecto  where id='1284'");
//$sql = $mysqli->query("DELETE  FROM  asignacionproyecto  where id='1285'");


//$sql = $mysqli->query("DELETE  FROM  proyectos  where idproyecto='1118'");
//$sql = $mysqli->query("DELETE  FROM  proyectos  where idproyecto='1068'");
//$sql = $mysqli->query("DELETE  FROM  proyectos  where idproyecto='1041'");
//$sql = $mysqli->query("DELETE  FROM  empresa  where idempresa='1161'");
//$sql = $mysqli->query("DELETE  FROM  empresa  where idempresa='1068'");
///$sql = $mysqli->query("DELETE  FROM  empresa  where idempresa='1067'");

//$sql = $mysqli->query("UPDATE tb_residentes SET no_controladmin='18CS0152' where no_control='18CS0152' ");
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
//$sql = $mysqli->query("DELETE  FROM  solicitud where id='592'");
//$sql = $mysqli->query("INSERT INTO  solicitud (no_control, no_controladmin ) VALUES ('18CS0035', '18CS0035') ");
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

//$sql = $mysqli->query("UPDATE tb_residentes SET  paso4='x', paso5='x'  where no_control='19CS0075'");
//$sql = $mysqli->query("UPDATE tb_residentes SET  paso1='Administrador', no_controladmin='17CS0414'  where no_control='17CS0414'");
//$sql = $mysqli->query("UPDATE reporteFinalextenso SET  Imagen1='' , Imagen2='' , Imagen3='' , Imagen4='' , Imagen5='' , Imagen6='' , Imagen7='' , Imagen8='' , Imagen9='' , Imagen10=''  , Imagen11='' , Imagen12=''   where NcontrolA='19CS0239'");





//INSERT INTO numerodeasesores VALUES("883","203","0");
//INSERT INTO numerodeasesores VALUES("884","203","0");
//INSERT INTO numerodeasesores VALUES("885","203","0");




//$sql = $mysqli->query("ALTER TABLE ReporteFEA CHANGE  AUTE  AUTE4 varchar(5000) null;");

//$sql = $mysqli->query("ALTER TABLE ReporteFEEA CHANGE  AUTE  AUTE5 varchar(5000) null;");



//$sql = $mysqli->query("ALTER TABLE presidente MODIFY ruta_imagen varchar(250) null;");
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
$sql = $mysqli->query('INSERT INTO ALUMNO VALUES("23CS0165","EDNA","RAMIREZ","ONOFRE","23CS0165@cdserdan.tecnm.mx","7","No","23CS0165@cdserdan.tecnm.mx","23CS0165@","IGEM","Masculino","21","2001-11-01","rwerer","","43242","fwef","67","SN","jkj","hjgj","hgjhgj","gjhgj","1","7"),
VALUES("23CS0166","EDNA","RAMIREZ","ONOFRE","23CS0166@cdserdan.tecnm.mx","7","No","23CS0166@cdserdan.tecnm.mx","23CS0166@","IGEM","Masculino","21","2001-11-01","rwerer","","43242","fwef","67","SN","jkj","hjgj","hgjhgj","gjhgj","1","7"),
VALUES("23CS0167","MARYJOSE","PINEDA","CAMPOS","23CS0167@cdserdan.tecnm.mx","7","No","23CS0167@cdserdan.tecnm.mx","23CS0167@","IGEM","Masculino","21","2001-11-01","rwerer","","43242","fwef","67","SN","jkj","hjgj","hgjhgj","gjhgj","1","7"),
VALUES("23CS0170","MONTSERRAT","ESPINOSA","AVELINO","23CS0170@cdserdan.tecnm.mx","7","No","23CS0170@cdserdan.tecnm.mx","23CS0170@","IGEM","Masculino","21","2001-11-01","rwerer","","43242","fwef","67","SN","jkj","hjgj","hgjhgj","gjhgj","1","7"),
VALUES("23CS0171","FERNANDA MADAI","VALDIVIA","ORTIZ","23CS0171@cdserdan.tecnm.mx","7","No","23CS0171@cdserdan.tecnm.mx","23CS0171@","IGEM","Masculino","21","2001-11-01","rwerer","","43242","fwef","67","SN","jkj","hjgj","hgjhgj","gjhgj","1","7"),
VALUES("23CS0176","MARIA TERESITA","CASTAÑEDA","DE LA ROSA","23CS0176@cdserdan.tecnm.mx","7","No","23CS0176@cdserdan.tecnm.mx","23CS0176@","IGEM","Masculino","21","2001-11-01","rwerer","","43242","fwef","67","SN","jkj","hjgj","hgjhgj","gjhgj","1","7"),
VALUES("23CS0178","EMILIO","SALAS","HERNANDEZ","23CS0178@cdserdan.tecnm.mx","7","No","23CS0178@cdserdan.tecnm.mx","23CS0178@","IGEM","Masculino","21","2001-11-01","rwerer","","43242","fwef","67","SN","jkj","hjgj","hgjhgj","gjhgj","1","7"),
VALUES("23CS0179","OSWALDO","FUENTES","PEREZ","23CS0179@cdserdan.tecnm.mx","7","No","23CS0179@cdserdan.tecnm.mx","23CS0179@","IGEM","Masculino","21","2001-11-01","rwerer","","43242","fwef","67","SN","jkj","hjgj","hgjhgj","gjhgj","1","7"),
VALUES("23CS0181","JAZMIN","CARRILLO","CRUZ","23CS0181@cdserdan.tecnm.mx","7","No","23CS0181@cdserdan.tecnm.mx","23CS0181@","IGEM","Masculino","21","2001-11-01","rwerer","","43242","fwef","67","SN","jkj","hjgj","hgjhgj","gjhgj","1","7"),
VALUES("23CS0186","CAROLINA","HERNANDEZ","QUINTERO","23CS0186@cdserdan.tecnm.mx","7","No","23CS0186@cdserdan.tecnm.mx","23CS0186@","IGEM","Masculino","21","2001-11-01","rwerer","","43242","fwef","67","SN","jkj","hjgj","hgjhgj","gjhgj","1","7"),
VALUES("23CS0188","SARA BETZABETH","PEREZ","FLORES","23CS0188@cdserdan.tecnm.mx","7","No","23CS0188@cdserdan.tecnm.mx","23CS0188@","IGEM","Masculino","21","2001-11-01","rwerer","","43242","fwef","67","SN","jkj","hjgj","hgjhgj","gjhgj","1","7"),
VALUES("23CS0190","FERNANDA AREMI","DURAN","RAMOS","23CS0190@cdserdan.tecnm.mx","7","No","23CS0190@cdserdan.tecnm.mx","23CS0190@","IGEM","Masculino","21","2001-11-01","rwerer","","43242","fwef","67","SN","jkj","hjgj","hgjhgj","gjhgj","1","7"),
VALUES("23CS0192","GENESIS ALBERTO","BERRIEL","MORA","23CS0192@cdserdan.tecnm.mx","7","No","23CS0192@cdserdan.tecnm.mx","23CS0192@","IGEM","Masculino","21","2001-11-01","rwerer","","43242","fwef","67","SN","jkj","hjgj","hgjhgj","gjhgj","1","7"),
VALUES("23CS0193","EVELYN","ROMERO","GARCIA","23CS0193@cdserdan.tecnm.mx","7","No","23CS0193@cdserdan.tecnm.mx","23CS0193@","IGEM","Masculino","21","2001-11-01","rwerer","","43242","fwef","67","SN","jkj","hjgj","hgjhgj","gjhgj","1","7"),
VALUES("23CS0195","FELIPE DE JESUS","FLORES","MUÑOZ","23CS0195@cdserdan.tecnm.mx","7","No","23CS0195@cdserdan.tecnm.mx","23CS0195@","IGEM","Masculino","21","2001-11-01","rwerer","","43242","fwef","67","SN","jkj","hjgj","hgjhgj","gjhgj","1","7"),
VALUES("23CS0197","MARIA DEL CARMEN","ROMERO","HERNANDEZ","23CS0197@cdserdan.tecnm.mx","7","No","23CS0197@cdserdan.tecnm.mx","23CS0197@","IGEM","Masculino","21","2001-11-01","rwerer","","43242","fwef","67","SN","jkj","hjgj","hgjhgj","gjhgj","1","7"),
VALUES("23CS0201","JULIO CESAR","TRINIDAD","HERNANDEZ","23CS0201@cdserdan.tecnm.mx","7","No","23CS0201@cdserdan.tecnm.mx","23CS0201@","IGEM","Masculino","21","2001-11-01","rwerer","","43242","fwef","67","SN","jkj","hjgj","hgjhgj","gjhgj","1","7"),
VALUES("23CS0202","OMAR","HERNANDEZ","GALINDO","23CS0202@cdserdan.tecnm.mx","7","No","23CS0202@cdserdan.tecnm.mx","23CS0202@","IGEM","Masculino","21","2001-11-01","rwerer","","43242","fwef","67","SN","jkj","hjgj","hgjhgj","gjhgj","1","7"),
VALUES("23CS0209","DIANA YADIRA","VENEGAS","LOPEZ","23CS0209@cdserdan.tecnm.mx","7","No","23CS0209@cdserdan.tecnm.mx","23CS0209@","IGEM","Masculino","21","2001-11-01","rwerer","","43242","fwef","67","SN","jkj","hjgj","hgjhgj","gjhgj","1","7"),
VALUES("23CS0210","ANA KAREN","MORA","COSME","23CS0210@cdserdan.tecnm.mx","7","No","23CS0210@cdserdan.tecnm.mx","23CS0210@","IGEM","Masculino","21","2001-11-01","rwerer","","43242","fwef","67","SN","jkj","hjgj","hgjhgj","gjhgj","1","7"),
VALUES("23CS0212","GISELA","CASTILLO","PEREZ","23CS0212@cdserdan.tecnm.mx","7","No","23CS0212@cdserdan.tecnm.mx","23CS0212@","IGEM","Masculino","21","2001-11-01","rwerer","","43242","fwef","67","SN","jkj","hjgj","hgjhgj","gjhgj","1","7"),
VALUES("23CS0217","CESAR","ANTONIO","FERNANDEZ","23CS0217@cdserdan.tecnm.mx","7","No","23CS0217@cdserdan.tecnm.mx","23CS0217@","IGEM","Masculino","21","2001-11-01","rwerer","","43242","fwef","67","SN","jkj","hjgj","hgjhgj","gjhgj","1","7"),
VALUES("23CS0218","CONCEPCION","ANDRADE","RAMOS","23CS0218@cdserdan.tecnm.mx","7","No","23CS0218@cdserdan.tecnm.mx","23CS0218@","IGEM","Masculino","21","2001-11-01","rwerer","","43242","fwef","67","SN","jkj","hjgj","hgjhgj","gjhgj","1","7"),
VALUES("23CS0219","HEDY ESTRELLA","ALVAREZ","MIRANDA","23CS0219@cdserdan.tecnm.mx","7","No","23CS0219@cdserdan.tecnm.mx","23CS0219@","IGEM","Masculino","21","2001-11-01","rwerer","","43242","fwef","67","SN","jkj","hjgj","hgjhgj","gjhgj","1","7"),
VALUES("23CS0222","CESAR JESUS","VENTURA","JIMENEZ","23CS0222@cdserdan.tecnm.mx","7","No","23CS0222@cdserdan.tecnm.mx","23CS0222@","IGEM","Masculino","21","2001-11-01","rwerer","","43242","fwef","67","SN","jkj","hjgj","hgjhgj","gjhgj","1","7"),
VALUES("23CS0227","JAZZIEL VALENTIN","ROSAS","SALVADOR","23CS0227@cdserdan.tecnm.mx","7","No","23CS0227@cdserdan.tecnm.mx","23CS0227@","IGEM","Masculino","21","2001-11-01","rwerer","","43242","fwef","67","SN","jkj","hjgj","hgjhgj","gjhgj","1","7"),
VALUES("23CS0228","BRYANI ARELY","GONZALEZ","MORENO","23CS0228@cdserdan.tecnm.mx","7","No","23CS0228@cdserdan.tecnm.mx","23CS0228@","IGEM","Masculino","21","2001-11-01","rwerer","","43242","fwef","67","SN","jkj","hjgj","hgjhgj","gjhgj","1","7"),
VALUES("23CS0234","SARAHI","CASIANO","CANDIA","23CS0234@cdserdan.tecnm.mx","7","No","23CS0234@cdserdan.tecnm.mx","23CS0234@","IGEM","Masculino","21","2001-11-01","rwerer","","43242","fwef","67","SN","jkj","hjgj","hgjhgj","gjhgj","1","7"),
VALUES("23CS0238","ALMA CECILIA","REYES","DE JESUS","23CS0238@cdserdan.tecnm.mx","7","No","23CS0238@cdserdan.tecnm.mx","23CS0238@","IGEM","Masculino","21","2001-11-01","rwerer","","43242","fwef","67","SN","jkj","hjgj","hgjhgj","gjhgj","1","7"),
VALUES("23CS0244","JULIETA GUADALUPE","ARIAS","VALENTE","23CS0244@cdserdan.tecnm.mx","7","No","23CS0244@cdserdan.tecnm.mx","23CS0244@","IGEM","Masculino","21","2001-11-01","rwerer","","43242","fwef","67","SN","jkj","hjgj","hgjhgj","gjhgj","1","7"),
VALUES("23CS0255","KARLA MAYTE","FERNANDEZ","HERNANDEZ","23CS0255@cdserdan.tecnm.mx","7","No","23CS0255@cdserdan.tecnm.mx","23CS0255@","IGEM","Masculino","21","2001-11-01","rwerer","","43242","fwef","67","SN","jkj","hjgj","hgjhgj","gjhgj","1","7"),
VALUES("23CS0261","VALERIA YANELI","NICOLAS","MARQUEZ","23CS0261@cdserdan.tecnm.mx","7","No","23CS0261@cdserdan.tecnm.mx","23CS0261@","IGEM","Masculino","21","2001-11-01","rwerer","","43242","fwef","67","SN","jkj","hjgj","hgjhgj","gjhgj","1","7"),
VALUES("23CS0269","ISELA","TRANQUILINO","SANCHEZ","23CS0269@cdserdan.tecnm.mx","7","No","23CS0269@cdserdan.tecnm.mx","23CS0269@","IGEM","Masculino","21","2001-11-01","rwerer","","43242","fwef","67","SN","jkj","hjgj","hgjhgj","gjhgj","1","7"),
VALUES("23CS0295","DARA ABIHAIL","PEREZ","UBALDO","23CS0295@cdserdan.tecnm.mx","7","No","23CS0295@cdserdan.tecnm.mx","23CS0295@","IGEM","Masculino","21","2001-11-01","rwerer","","43242","fwef","67","SN","jkj","hjgj","hgjhgj","gjhgj","1","7"),
VALUES("23CS0298","ANAHI","NUÑEZ","TINOCO","23CS0298@cdserdan.tecnm.mx","7","No","23CS0298@cdserdan.tecnm.mx","23CS0298@","IGEM","Masculino","21","2001-11-01","rwerer","","43242","fwef","67","SN","jkj","hjgj","hgjhgj","gjhgj","1","7"),
VALUES("23CS0302","MARIA DEL ROSARIO","SANCHEZ","AGUILAR","23CS0302@cdserdan.tecnm.mx","7","No","23CS0302@cdserdan.tecnm.mx","23CS0302@","IGEM","Masculino","21","2001-11-01","rwerer","","43242","fwef","67","SN","jkj","hjgj","hgjhgj","gjhgj","1","7"),
VALUES("23CS0307","DANIEL","GUZMAN","MARCE","23CS0307@cdserdan.tecnm.mx","7","No","23CS0307@cdserdan.tecnm.mx","23CS0307@","IGEM","Masculino","21","2001-11-01","rwerer","","43242","fwef","67","SN","jkj","hjgj","hgjhgj","gjhgj","1","7"),
VALUES("23CS0339","SARAHY","MARTINEZ","DE LA LUZ","23CS0339@cdserdan.tecnm.mx","7","No","23CS0339@cdserdan.tecnm.mx","23CS0339@","IGEM","Masculino","21","2001-11-01","rwerer","","43242","fwef","67","SN","jkj","hjgj","hgjhgj","gjhgj","1","7"),
VALUES("22CS0004","ALONDRA","MERINO","VAZQUEZ","22CS0004@cdserdan.tecnm.mx","7","No","22CS0004@cdserdan.tecnm.mx","22CS0004@","IGEM","Masculino","21","2001-11-01","rwerer","","43242","fwef","67","SN","jkj","hjgj","hgjhgj","gjhgj","1","7"),
VALUES("22CS0073","CLAUDIA PAOLA","SANCHEZ","PEREZ","22CS0073@cdserdan.tecnm.mx","7","No","22CS0073@cdserdan.tecnm.mx","22CS0073@","IGEM","Masculino","21","2001-11-01","rwerer","","43242","fwef","67","SN","jkj","hjgj","hgjhgj","gjhgj","1","7"),
VALUES("22CS0075","SOFIA","HERNANDEZ","GOMEZ","22CS0075@cdserdan.tecnm.mx","7","No","22CS0075@cdserdan.tecnm.mx","22CS0075@","IGEM","Masculino","21","2001-11-01","rwerer","","43242","fwef","67","SN","jkj","hjgj","hgjhgj","gjhgj","1","7"),
VALUES("22CS0076","XOCHITL","FLORES","MOEDANO","22CS0076@cdserdan.tecnm.mx","7","No","22CS0076@cdserdan.tecnm.mx","22CS0076@","IGEM","Masculino","21","2001-11-01","rwerer","","43242","fwef","67","SN","jkj","hjgj","hgjhgj","gjhgj","1","7"),
VALUES("22CS0082","MIGUEL ANGEL","CERVANTES","VALENTE","22CS0082@cdserdan.tecnm.mx","7","No","22CS0082@cdserdan.tecnm.mx","22CS0082@","IGEM","Masculino","21","2001-11-01","rwerer","","43242","fwef","67","SN","jkj","hjgj","hgjhgj","gjhgj","1","7"),
VALUES("22CS0088"," MIGUEL ANGEL","DIONICIO","NICOLAS","22CS0088@cdserdan.tecnm.mx","7","No","22CS0088@cdserdan.tecnm.mx","22CS0088@","IGEM","Masculino","21","2001-11-01","rwerer","","43242","fwef","67","SN","jkj","hjgj","hgjhgj","gjhgj","1","7"),
VALUES("22CS0095","DAYANA DENISSE","REYES","DOMINGUEZ","22CS0095@cdserdan.tecnm.mx","7","No","22CS0095@cdserdan.tecnm.mx","22CS0095@","IGEM","Masculino","21","2001-11-01","rwerer","","43242","fwef","67","SN","jkj","hjgj","hgjhgj","gjhgj","1","7"),
VALUES("22CS0096","EVELIN ALONDRA","ESCOBAR","GUZMAN","22CS0096@cdserdan.tecnm.mx","7","No","22CS0096@cdserdan.tecnm.mx","22CS0096@","IGEM","Masculino","21","2001-11-01","rwerer","","43242","fwef","67","SN","jkj","hjgj","hgjhgj","gjhgj","1","7"),
VALUES("22CS0100","DANIELA","ROMERO","BELLO","22CS0100@cdserdan.tecnm.mx","7","No","22CS0100@cdserdan.tecnm.mx","22CS0100@","IGEM","Masculino","21","2001-11-01","rwerer","","43242","fwef","67","SN","jkj","hjgj","hgjhgj","gjhgj","1","7"),
VALUES("22CS0102","ANELY","MERINO","VAZQUEZ","22CS0102@cdserdan.tecnm.mx","7","No","22CS0102@cdserdan.tecnm.mx","22CS0102@","IGEM","Masculino","21","2001-11-01","rwerer","","43242","fwef","67","SN","jkj","hjgj","hgjhgj","gjhgj","1","7"),
VALUES("22CS0104","MARIA GUADALUPE","ROSAS","CASTILLO","22CS0104@cdserdan.tecnm.mx","7","No","22CS0104@cdserdan.tecnm.mx","22CS0104@","IGEM","Masculino","21","2001-11-01","rwerer","","43242","fwef","67","SN","jkj","hjgj","hgjhgj","gjhgj","1","7"),
VALUES("22CS0108","MARIBEL","ROQUE","HERNANDEZ","22CS0108@cdserdan.tecnm.mx","7","No","22CS0108@cdserdan.tecnm.mx","22CS0108@","IGEM","Masculino","21","2001-11-01","rwerer","","43242","fwef","67","SN","jkj","hjgj","hgjhgj","gjhgj","1","7"),
VALUES("22CS0115","DANIEL","MARTINEZ","DE JESUS","22CS0115@cdserdan.tecnm.mx","7","No","22CS0115@cdserdan.tecnm.mx","22CS0115@","IGEM","Masculino","21","2001-11-01","rwerer","","43242","fwef","67","SN","jkj","hjgj","hgjhgj","gjhgj","1","7"),
VALUES("22CS0117","LINDA BETZABEL","BAROJAS","SOSA","22CS0117@cdserdan.tecnm.mx","7","No","22CS0117@cdserdan.tecnm.mx","22CS0117@","IGEM","Masculino","21","2001-11-01","rwerer","","43242","fwef","67","SN","jkj","hjgj","hgjhgj","gjhgj","1","7"),
VALUES("22CS0121","ANDREA","ACEVEDO","ANDRADE","22CS0121@cdserdan.tecnm.mx","7","No","22CS0121@cdserdan.tecnm.mx","22CS0121@","IGEM","Masculino","21","2001-11-01","rwerer","","43242","fwef","67","SN","jkj","hjgj","hgjhgj","gjhgj","1","7"),
VALUES("22CS0122","VALERIA LIZET","DE LA LUZ","SANCHEZ","22CS0122@cdserdan.tecnm.mx","7","No","22CS0122@cdserdan.tecnm.mx","22CS0122@","IGEM","Masculino","21","2001-11-01","rwerer","","43242","fwef","67","SN","jkj","hjgj","hgjhgj","gjhgj","1","7"),
VALUES("22CS0128","NOEMI","RAMOS","REYES","22CS0128@cdserdan.tecnm.mx","7","No","22CS0128@cdserdan.tecnm.mx","22CS0128@","IGEM","Masculino","21","2001-11-01","rwerer","","43242","fwef","67","SN","jkj","hjgj","hgjhgj","gjhgj","1","7"),
VALUES("22CS0134","ANA ROSA","LIMA","AMUD","22CS0134@cdserdan.tecnm.mx","7","No","22CS0134@cdserdan.tecnm.mx","22CS0134@","IGEM","Masculino","21","2001-11-01","rwerer","","43242","fwef","67","SN","jkj","hjgj","hgjhgj","gjhgj","1","7"),
VALUES("22CS0141","MARLEN","ANDRADE","HUERTA","22CS0141@cdserdan.tecnm.mx","7","No","22CS0141@cdserdan.tecnm.mx","22CS0141@","IGEM","Masculino","21","2001-11-01","rwerer","","43242","fwef","67","SN","jkj","hjgj","hgjhgj","gjhgj","1","7"),
VALUES("22CS0143","JESUS","HERNANDEZ","MELCHOR","22CS0143@cdserdan.tecnm.mx","7","No","22CS0143@cdserdan.tecnm.mx","22CS0143@","IGEM","Masculino","21","2001-11-01","rwerer","","43242","fwef","67","SN","jkj","hjgj","hgjhgj","gjhgj","1","7"),
VALUES("22CS0153","ALONDRA GABRIELA","CASIANO","VAZQUEZ","22CS0153@cdserdan.tecnm.mx","7","No","22CS0153@cdserdan.tecnm.mx","22CS0153@","IGEM","Masculino","21","2001-11-01","rwerer","","43242","fwef","67","SN","jkj","hjgj","hgjhgj","gjhgj","1","7"),
VALUES("22CS0195","LESLI","GONZALEZ","HERNANDEZ","22CS0195@cdserdan.tecnm.mx","7","No","22CS0195@cdserdan.tecnm.mx","22CS0195@","IGEM","Masculino","21","2001-11-01","rwerer","","43242","fwef","67","SN","jkj","hjgj","hgjhgj","gjhgj","1","7"),
VALUES("22CS0202","SANDRA","CASILDO","FUENTES","22CS0202@cdserdan.tecnm.mx","7","No","22CS0202@cdserdan.tecnm.mx","22CS0202@","IGEM","Masculino","21","2001-11-01","rwerer","","43242","fwef","67","SN","jkj","hjgj","hgjhgj","gjhgj","1","7"),
VALUES("22CS0247","ALAN","MORENO","ROMUALDO","22CS0247@cdserdan.tecnm.mx","7","No","22CS0247@cdserdan.tecnm.mx","22CS0247@","IGEM","Masculino","21","2001-11-01","rwerer","","43242","fwef","67","SN","jkj","hjgj","hgjhgj","gjhgj","1","7"),
VALUES("22CS0257","LORENA","MORENO","RAMOS","22CS0257@cdserdan.tecnm.mx","7","No","22CS0257@cdserdan.tecnm.mx","22CS0257@","IGEM","Masculino","21","2001-11-01","rwerer","","43242","fwef","67","SN","jkj","hjgj","hgjhgj","gjhgj","1","7"),
VALUES("22CS0258","KARINA GUADALUPE","RODRIGUEZ","MORALES","22CS0258@cdserdan.tecnm.mx","7","No","22CS0258@cdserdan.tecnm.mx","22CS0258@","IGEM","Masculino","21","2001-11-01","rwerer","","43242","fwef","67","SN","jkj","hjgj","hgjhgj","gjhgj","1","7"),
VALUES("22CS0272","MARIA GUADALUPE","CAMPOS","REYES","22CS0272@cdserdan.tecnm.mx","7","No","22CS0272@cdserdan.tecnm.mx","22CS0272@","IGEM","Masculino","21","2001-11-01","rwerer","","43242","fwef","67","SN","jkj","hjgj","hgjhgj","gjhgj","1","7"),
VALUES("22CS0320","JOSE GILBERTO","DE TERESO","DE LA LUZ","22CS0320@cdserdan.tecnm.mx","7","No","22CS0320@cdserdan.tecnm.mx","22CS0320@","IGEM","Masculino","21","2001-11-01","rwerer","","43242","fwef","67","SN","jkj","hjgj","hgjhgj","gjhgj","1","7"),
VALUES("22CS0332","MARIA MARIBEL","OLIVARES","HERNANDEZ","22CS0332@cdserdan.tecnm.mx","7","No","22CS0332@cdserdan.tecnm.mx","22CS0332@","IGEM","Masculino","21","2001-11-01","rwerer","","43242","fwef","67","SN","jkj","hjgj","hgjhgj","gjhgj","1","7"),
VALUES("B24CS0007","JANETH","ALDUCIN","MEZA","B24CS0007@cdserdan.tecnm.mx","7","No","B24CS0007@cdserdan.tecnm.mx","B24CS0007@","IGEM","Masculino","21","2001-11-01","rwerer","","43242","fwef","67","SN","jkj","hjgj","hgjhgj","gjhgj","1","7"),
VALUES("21CS0017","MARIA DEL CARMEN","JAVIER","VALENCIA","21CS0017@cdserdan.tecnm.mx","7","No","21CS0017@cdserdan.tecnm.mx","21CS0017@","IGEM","Masculino","21","2001-11-01","rwerer","","43242","fwef","67","SN","jkj","hjgj","hgjhgj","gjhgj","1","7"),
VALUES("21CS0079","ALEJANDRO","MENDOZA","LOPEZ","21CS0079@cdserdan.tecnm.mx","7","No","21CS0079@cdserdan.tecnm.mx","21CS0079@","IGEM","Masculino","21","2001-11-01","rwerer","","43242","fwef","67","SN","jkj","hjgj","hgjhgj","gjhgj","1","7"),
VALUES("21CS0080","JONATHAN GUADALUPE","SOSA","CHAVEZ","21CS0080@cdserdan.tecnm.mx","7","No","21CS0080@cdserdan.tecnm.mx","21CS0080@","IGEM","Masculino","21","2001-11-01","rwerer","","43242","fwef","67","SN","jkj","hjgj","hgjhgj","gjhgj","1","7"),
VALUES("21CS0081","SERGIO JONATHAN","MENDEZ","SOSA","21CS0081@cdserdan.tecnm.mx","7","No","21CS0081@cdserdan.tecnm.mx","21CS0081@","IGEM","Masculino","21","2001-11-01","rwerer","","43242","fwef","67","SN","jkj","hjgj","hgjhgj","gjhgj","1","7"),
VALUES("21CS0086","YULIANA","TIMOTEO","CONTRERAS","21CS0086@cdserdan.tecnm.mx","7","No","21CS0086@cdserdan.tecnm.mx","21CS0086@","IGEM","Masculino","21","2001-11-01","rwerer","","43242","fwef","67","SN","jkj","hjgj","hgjhgj","gjhgj","1","7"),
VALUES("21CS0089","JANETT","LOPEZ","VAZQUEZ","21CS0089@cdserdan.tecnm.mx","7","No","21CS0089@cdserdan.tecnm.mx","21CS0089@","IGEM","Masculino","21","2001-11-01","rwerer","","43242","fwef","67","SN","jkj","hjgj","hgjhgj","gjhgj","1","7"),
VALUES("21CS0091","KAREN JOCELIN","ROSALES","PEREZ","21CS0091@cdserdan.tecnm.mx","7","No","21CS0091@cdserdan.tecnm.mx","21CS0091@","IGEM","Masculino","21","2001-11-01","rwerer","","43242","fwef","67","SN","jkj","hjgj","hgjhgj","gjhgj","1","7"),
VALUES("21CS0092","YOLOTZIN SARAHI","BASURTO","RODRIGUEZ","21CS0092@cdserdan.tecnm.mx","7","No","21CS0092@cdserdan.tecnm.mx","21CS0092@","IGEM","Masculino","21","2001-11-01","rwerer","","43242","fwef","67","SN","jkj","hjgj","hgjhgj","gjhgj","1","7"),
VALUES("21CS0096","MARICELA","PEREZ","SANCHEZ","21CS0096@cdserdan.tecnm.mx","7","No","21CS0096@cdserdan.tecnm.mx","21CS0096@","IGEM","Masculino","21","2001-11-01","rwerer","","43242","fwef","67","SN","jkj","hjgj","hgjhgj","gjhgj","1","7"),
VALUES("21CS0097","JESUS ANDRES","REYES","RAMOS","21CS0097@cdserdan.tecnm.mx","7","No","21CS0097@cdserdan.tecnm.mx","21CS0097@","IGEM","Masculino","21","2001-11-01","rwerer","","43242","fwef","67","SN","jkj","hjgj","hgjhgj","gjhgj","1","7"),
VALUES("21CS0098","LIZBEHT DANIELA","CHAVEZ","JIMENEZ","21CS0098@cdserdan.tecnm.mx","7","No","21CS0098@cdserdan.tecnm.mx","21CS0098@","IGEM","Masculino","21","2001-11-01","rwerer","","43242","fwef","67","SN","jkj","hjgj","hgjhgj","gjhgj","1","7"),
VALUES("21CS0101","DANIELA ABIGAIL","GARCIA","RONQUILLO","21CS0101@cdserdan.tecnm.mx","7","No","21CS0101@cdserdan.tecnm.mx","21CS0101@","IGEM","Masculino","21","2001-11-01","rwerer","","43242","fwef","67","SN","jkj","hjgj","hgjhgj","gjhgj","1","7"),
VALUES("21CS0102","JOANA","BALDERAS","NOLASCO","21CS0102@cdserdan.tecnm.mx","7","No","21CS0102@cdserdan.tecnm.mx","21CS0102@","IGEM","Masculino","21","2001-11-01","rwerer","","43242","fwef","67","SN","jkj","hjgj","hgjhgj","gjhgj","1","7"),
VALUES("21CS0104","JOSE ALBERTO","VIEYRA","ZEFERINO","21CS0104@cdserdan.tecnm.mx","7","No","21CS0104@cdserdan.tecnm.mx","21CS0104@","IGEM","Masculino","21","2001-11-01","rwerer","","43242","fwef","67","SN","jkj","hjgj","hgjhgj","gjhgj","1","7"),
VALUES("21CS0106","MARIA ANDREA","FLORES","ZAMORA","21CS0106@cdserdan.tecnm.mx","7","No","21CS0106@cdserdan.tecnm.mx","21CS0106@","IGEM","Masculino","21","2001-11-01","rwerer","","43242","fwef","67","SN","jkj","hjgj","hgjhgj","gjhgj","1","7"),
VALUES("21CS0107","FRANCISCO ANTONIO","BRAVO","MORALES","21CS0107@cdserdan.tecnm.mx","7","No","21CS0107@cdserdan.tecnm.mx","21CS0107@","IGEM","Masculino","21","2001-11-01","rwerer","","43242","fwef","67","SN","jkj","hjgj","hgjhgj","gjhgj","1","7"),
VALUES("21CS0109","YAZMIN","CADENA","DE JESUS","21CS0109@cdserdan.tecnm.mx","7","No","21CS0109@cdserdan.tecnm.mx","21CS0109@","IGEM","Masculino","21","2001-11-01","rwerer","","43242","fwef","67","SN","jkj","hjgj","hgjhgj","gjhgj","1","7"),
VALUES("21CS0112","ARTURO","HERNANDEZ","BERLANGA","21CS0112@cdserdan.tecnm.mx","7","No","21CS0112@cdserdan.tecnm.mx","21CS0112@","IGEM","Masculino","21","2001-11-01","rwerer","","43242","fwef","67","SN","jkj","hjgj","hgjhgj","gjhgj","1","7"),
VALUES("21CS0114","NABETY","LECHUGA","ALVARADO","21CS0114@cdserdan.tecnm.mx","7","No","21CS0114@cdserdan.tecnm.mx","21CS0114@","IGEM","Masculino","21","2001-11-01","rwerer","","43242","fwef","67","SN","jkj","hjgj","hgjhgj","gjhgj","1","7"),
VALUES("21CS0116","MONSERRAT","BONIFACIO","GOMEZ","21CS0116@cdserdan.tecnm.mx","7","No","21CS0116@cdserdan.tecnm.mx","21CS0116@","IGEM","Masculino","21","2001-11-01","rwerer","","43242","fwef","67","SN","jkj","hjgj","hgjhgj","gjhgj","1","7"),
VALUES("21CS0118","CRISTIAN","ARCOS","GARCIA","21CS0118@cdserdan.tecnm.mx","7","No","21CS0118@cdserdan.tecnm.mx","21CS0118@","IGEM","Masculino","21","2001-11-01","rwerer","","43242","fwef","67","SN","jkj","hjgj","hgjhgj","gjhgj","1","7"),
VALUES("21CS0130","MARIA FERNANDA","VELEZ","OLIVIER","21CS0130@cdserdan.tecnm.mx","7","No","21CS0130@cdserdan.tecnm.mx","21CS0130@","IGEM","Masculino","21","2001-11-01","rwerer","","43242","fwef","67","SN","jkj","hjgj","hgjhgj","gjhgj","1","7"),
VALUES("21CS0164","REMEDIOS MONTSERRAT","BARTOLO","VAZQUEZ","21CS0164@cdserdan.tecnm.mx","7","No","21CS0164@cdserdan.tecnm.mx","21CS0164@","IGEM","Masculino","21","2001-11-01","rwerer","","43242","fwef","67","SN","jkj","hjgj","hgjhgj","gjhgj","1","7"),
VALUES("21CS0188","MARI CARMEN","ESPINOZA","SANCHEZ","21CS0188@cdserdan.tecnm.mx","7","No","21CS0188@cdserdan.tecnm.mx","21CS0188@","IGEM","Masculino","21","2001-11-01","rwerer","","43242","fwef","67","SN","jkj","hjgj","hgjhgj","gjhgj","1","7"),
VALUES("21CS0236","ANTONNI","ANGEL","SANCHEZ","21CS0236@cdserdan.tecnm.mx","7","No","21CS0236@cdserdan.tecnm.mx","21CS0236@","IGEM","Masculino","21","2001-11-01","rwerer","","43242","fwef","67","SN","jkj","hjgj","hgjhgj","gjhgj","1","7"),
VALUES("21CS0238","LORENA ESMERALDA","SOLIS","PEREZ","21CS0238@cdserdan.tecnm.mx","7","No","21CS0238@cdserdan.tecnm.mx","21CS0238@","IGEM","Masculino","21","2001-11-01","rwerer","","43242","fwef","67","SN","jkj","hjgj","hgjhgj","gjhgj","1","7"),
VALUES("21CS0258","IXCHEL","SANDOVAL","CISNEROS","21CS0258@cdserdan.tecnm.mx","7","No","21CS0258@cdserdan.tecnm.mx","21CS0258@","IGEM","Masculino","21","2001-11-01","rwerer","","43242","fwef","67","SN","jkj","hjgj","hgjhgj","gjhgj","1","7"),
VALUES("21CS0264","JANET MARGARITA","ROJAS","MARTINEZ","21CS0264@cdserdan.tecnm.mx","7","No","21CS0264@cdserdan.tecnm.mx","21CS0264@","IGEM","Masculino","21","2001-11-01","rwerer","","43242","fwef","67","SN","jkj","hjgj","hgjhgj","gjhgj","1","7"),
VALUES("21CS0265","DANIEL ILDEFONSO","ORTIZ","SANCHEZ","21CS0265@cdserdan.tecnm.mx","7","No","21CS0265@cdserdan.tecnm.mx","21CS0265@","IGEM","Masculino","21","2001-11-01","rwerer","","43242","fwef","67","SN","jkj","hjgj","hgjhgj","gjhgj","1","7"),
VALUES("21CS0284","LORENA ESMERALDA","SOLIS","PEREZ","21CS0284@cdserdan.tecnm.mx","7","No","21CS0284@cdserdan.tecnm.mx","21CS0284@","IGEM","Masculino","21","2001-11-01","rwerer","","43242","fwef","67","SN","jkj","hjgj","hgjhgj","gjhgj","1","7"),
VALUES("20CS0194","ARHELLY","TLAZALO","RODRIGUEZ","20CS0194@cdserdan.tecnm.mx","7","No","20CS0194@cdserdan.tecnm.mx","20CS0194@","IGEM","Masculino","21","2001-11-01","rwerer","","43242","fwef","67","SN","jkj","hjgj","hgjhgj","gjhgj","1","7"),
VALUES("20CS0274","ALDO","PEREZ","SANCHEZ","20CS0274@cdserdan.tecnm.mx","7","No","20CS0274@cdserdan.tecnm.mx","20CS0274@","IGEM","Masculino","21","2001-11-01","rwerer","","43242","fwef","67","SN","jkj","hjgj","hgjhgj","gjhgj","1","7"),
VALUES("21CS0284","LORENA ESMERALDA","SOLIS","PEREZ","21CS0284@cdserdan.tecnm.mx","7","No","21CS0284@cdserdan.tecnm.mx","21CS0284@","IGEM","Masculino","21","2001-11-01","rwerer","","43242","fwef","67","SN","jkj","hjgj","hgjhgj","gjhgj","1","7"),
VALUES("19CS0187","GUADALUPE","SEFERINO","GUERRERO","19CS0187@cdserdan.tecnm.mx","7","No","19CS0187@cdserdan.tecnm.mx","19CS0187@","IGEM","Masculino","21","2001-11-01","rwerer","","43242","fwef","67","SN","jkj","hjgj","hgjhgj","gjhgj","1","7")');
  if ($sql == TRUE) {
   echo "Registro exitoso.";
} else {
  echo " (" . $mysqli->errno . ") " . $mysqli->error;
}


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

