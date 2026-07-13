<?php
$mysqli = new mysqli("localhost", "serviciosocial", "P@rfirio2022", "serviciosocial"); 
//$mysqli = new mysqli("localhost", "subacademica", "Tecserd@n2020", "residencia3"); 
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

//$sql = $mysqli->query("UPDATE asignacion SET  NControlAdmin='22CS0149', NControl='22CS0149' where IDAsignacion='687' ");


//$sql = $mysqli->query("INSERT INTO solicitud (no_control,no_controladmin) VALUES('20CS0246','20CS0246') ");


//$sql = $mysqli->query("UPDATE  registroevento  SET  nomEvento='Software Libre 2023'   where idEvento='IINF-2023' ");
//$sql = $mysqli->query("UPDATE documentosgestion SET  nombre_archivo  = ' ' where no_control='16CS0270' ");

//$sql = $mysqli->query("UPDATE asesor SET  idD = '20' WHERE IdAS = '30'");
//$sql = $mysqli->query("UPDATE tb_residentes SET  periodo = 'AGO-DIC 2026' WHERE no_control = '22CS0086'");
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



//$sql = $mysqli->query("DELETE  FROM  alumnos  where IDAlumno='1271'");
////$sql = $mysqli->query("INSERT INTO asignacion VALUES ('22CS0097','El Alumno ha registrado su proyecto ','2025-06-18 21:33:08','22CS0097')  ");


//$sql = $mysqli->query("DELETE  FROM  alumnos  where IDAlumno='1356'");
//$sql = $mysqli->query("DELETE  FROM  asignacion  where IDAsignacion='761'");
//$sql = $mysqli->query("DELETE  FROM  empresa  where IDEmpresa='776'");
//$sql = $mysqli->query("DELETE  FROM  programa  where IDPrograma='776'");
//$sql = $mysqli->query("DELETE  FROM  programa  where IDPrograma='818'");
//$sql = $mysqli->query("DELETE  FROM  asignacionactividades  where id='1684'");
// $mysqli->query("DELETE  FROM  asignacionempresa where id='1684'");
//$sql = $mysqli->query("DELETE  FROM  asignacionproyecto  where id='1678'");
//$sql = $mysqli->query("DELETE FROM  asignacionobjectivos  where id='1687'");

//$sql = $mysqli->query("UPDATE tb_residentes SET paso1='Alumno' , no_controladmin='21CS0195', paso3='x', paso4='x', paso5='x', paso6='x', paso7='x', paso8='x', paso9='x', paso10='x' where no_control='21CS0199' ");
//$sql = $mysqli->query("DELETE  FROM  proyectos  where idproyecto='1434'");
//$sql = $mysqli->query("UPDATE asesor SET NombreAS='Abimael Moscoso Chávez' where IdAS='93'");

//$sql = $mysqli->query("INSERT INTO asignacion (NControlAdmin, Mensaje, Fecha, NControl)
 //          VALUES ('23CS0057','El Alumno ha registrado su proyecto','2025-06-18 21:33:08','23CS0057')  ");
//$sql = $mysqli->query(" INSERT INTO programa (NControl) VALUES ('23CS0057') ");
//$sql = $mysqli->query("INSERT INTO empresa (Ncontrol) VALUES ('23CS0057')");
// $sql = $mysqli->query("
 //       UPDATE alumnos
//       SET paso1 = 'Admiinstrador',
 //           NControlAdmin = '23CS0057'
          
 //       WHERE IDAlumno = '1348'
//    ");
//

/*
$controles = [
'23CS0086',
'23CS0088',
'23CS0089',
'23CS0096',
'23CS0097',
'23CS0179',
'23CS0197',
'23CS0145',
'23CS0124',
'23CS0059',
'23CS0065',
'23CS0078',
'23CS0091',
'23CS0092',
'23CS0099',
'23CS0105',
'23CS0256',
'23CS0178',
'23CS0238',
'23CS0261',
'23CS0171',
'23CS0234',
'23CS0244',
'23CS0298',
'23CS0165',
'23CS0166',
'23CS0167',
'23CS0169',
'23CS0170',
'23CS0176',
'23CS0181',
'23CS0186',
'23CS0188',
'23CS0193',
'23CS0195',
'23CS0201',
'23CS0202',
'23CS0210',
'23CS0217',
'23CS0218',
'23CS0219',
'23CS0227',
'23CS0228',
'23CS0251',
'23CS0255',
'23CS0289',
'23CS0295',
'23CS0299',
'23CS0339',
'23CS0307',
'23CS0209',
'23CS0068',
'23CS0313',
'23CS0048',
'23CS0052',
'23CS0058',
'23CS0066',
'23CS0103',
'23CS0269',
'23CS0190',
'23CS0320',
'23CS0331',
'23CS0304',
'23CS0075',
'23CS0012',
'23CS0014',
'23CS0016',
'23CS0019',
'23CS0020',
'23CS0021',
'23CS0023',
'23CS0027',
'23CS0028',
'23CS0030',
'23CS0031',
'23CS0032',
'23CS0037',
'23CS0038',
'23CS0039',
'23CS0043',
'23CS0044',
'23CS0054',
'23CS0061',
'23CS0168',
'23CS0236',
'23CS0243',
'23CS0245',
'23CS0071',
'23CS0018',
'23CS0034',
'23CS0258',
'23CS0260',
'23CS0359',
'23CS0212',
'23CS0160',
'23CS0162',
'23CS0174',
'23CS0175',
'23CS0183',
'23CS0184',
'23CS0198',
'23CS0205',
'23CS0207',
'23CS0213',
'23CS0215',
'23CS0224',
'23CS0284',
'23CS0293',
'23CS0306',
'C23CS0272',
'23CS0017',
'23CS0185'
];

$idAlumno = 1350;

foreach ($controles as $control) {

    $sql = $mysqli->query("
        UPDATE alumnos
        SET paso1 = 'Administrador',
            NControlAdmin = '$control'
        WHERE IDAlumno = '$idAlumno'
    ");

    if ($sql) {
        echo "IDAlumno: $idAlumno -> $control <br>";
    } else {
        echo "Error en IDAlumno $idAlumno: " . $mysqli->error . "<br>";
    }

    $idAlumno++;
}

echo "<br><b>Proceso finalizado.</b>";


//$sql = $mysqli->query("DELETE FROM asignacion where IDAsignacion = '829' ");

/*

$controles = [
'23CS0088',
'23CS0089',
'23CS0096',
'23CS0097',
'23CS0179',
'23CS0197',
'23CS0145',
'23CS0124',
'23CS0059',
'23CS0065',
'23CS0078',
'23CS0091',
'23CS0092',
'23CS0099',
'23CS0105',
'23CS0256',
'23CS0178',
'23CS0238',
'23CS0261',
'23CS0171',
'23CS0234',
'23CS0244',
'23CS0298',
'23CS0165',
'23CS0166',
'23CS0167',
'23CS0169',
'23CS0170',
'23CS0176',
'23CS0181',
'23CS0186',
'23CS0188',
'23CS0193',
'23CS0195',
'23CS0201',
'23CS0202',
'23CS0210',
'23CS0217',
'23CS0218',
'23CS0219',
'23CS0227',
'23CS0228',
'23CS0251',
'23CS0255',
'23CS0289',
'23CS0295',
'23CS0299',
'23CS0339',
'23CS0307',
'23CS0209',
'23CS0068',
'23CS0313',
'23CS0048',
'23CS0052',
'23CS0058',
'23CS0066',
'23CS0103',
'23CS0269',
'23CS0190',
'23CS0320',
'23CS0331',
'23CS0304',
'23CS0075',
'23CS0012',
'23CS0014',
'23CS0016',
'23CS0019',
'23CS0020',
'23CS0021',
'23CS0023',
'23CS0027',
'23CS0028',
'23CS0030',
'23CS0031',
'23CS0032',
'23CS0037',
'23CS0038',
'23CS0039',
'23CS0043',
'23CS0044',
'23CS0054',
'23CS0061',
'23CS0168',
'23CS0236',
'23CS0243',
'23CS0245',
'23CS0071',
'23CS0018',
'23CS0034',
'23CS0258',
'23CS0260',
'23CS0359',
'23CS0212',
'23CS0160',
'23CS0162',
'23CS0174',
'23CS0175',
'23CS0183',
'23CS0184',
'23CS0198',
'23CS0205',
'23CS0207',
'23CS0213',
'23CS0215',
'23CS0224',
'23CS0284',
'23CS0293',
'23CS0306',
'C23CS0272',
'23CS0017',
'23CS0185'

];

$fecha = '2025-06-18 21:33:08';

foreach ($controles as $nc) {

    $mysqli->query("
        INSERT INTO asignacion
        (NControlAdmin, Mensaje, Fecha, NControl)
        VALUES
        ('$nc', 'El Alumno ha registrado su proyecto', '$fecha', '$nc')
    ");

    $mysqli->query("
        INSERT INTO programa (NControl)
        VALUES ('$nc')
    ");

    $mysqli->query("
        INSERT INTO empresa (NControl)
        VALUES ('$nc')
    ");

   

    echo "Procesado: $nc <br>";
}

echo "<h3>Proceso finalizado correctamente.</h3>";

*/

//if ($sql) {
 //   echo "✅ Registro UPDATE correctamente. ID: " . $mysqli->insert_id;
//} else {
//    echo "❌ Error: " . $mysqli->error;
//}




$sql = $mysqli->query("UPDATE alumnos
SET IDSemestre = '15'
WHERE IDAlumno = '1318';
");
if ($sql) {
    echo "✅ Registro UPDATE correctamente. ID: " . $mysqli->insert_id;
} else {
    echo "❌ Error: " . $mysqli->error;
}
/*


$sql = $mysqli->query("UPDATE presidente
SET 
    NombreP = 'Mayra Luna Román',
    EmailP = 'mluna@cdserdan.tecnm.mx'
WHERE idP = 63;
");

if ($sql) {
    echo "✅ Registro UPDATE correctamente. ID: " . $mysqli->insert_id;
} else {
    echo "❌ Error: " . $mysqli->error;
}
*/
//$fecha = date("Y-m-d H:i:s");
//$sql = $mysqli->query("INSERT INTO asignacion (NControlAdmin, Mensaje, Fecha, NControl)
 //           VALUES ('23CS0130','El Alumno ha registrado su proyecto','$fecha','23CS0130')");



//$sql = $mysqli->query("INSERT INTO programa (NControl) VALUES ('23CS0130')");



//$sql = $mysqli->query("INSERT INTO empresa (Ncontrol) VALUES ('23CS0130')");




//$sql = $mysqli->query("UPDATE alumnos
//SET paso1 = 'Administrador',
 //   no_controladmin = '21CS0095'
//WHERE IDAlumno = 1006;
//");
//
//if ($sql) {
//    echo "✅ Registro UPDATE correctamente. ID: " . $mysqli->insert_id;
//} else {
//    echo "❌ Error: " . $mysqli->error;
//}

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

//$sql = $mysqli->query("DELETE  FROM  asignacionobjectivos  where id='1741'");
//$sql = $mysqli->query("DELETE  FROM  asignacionactividades  where id='1741'");
//$sql = $mysqli->query("DELETE  FROM  asignacionproyecto  where id='1735'");
//$sql = $mysqli->query("DELETE  FROM  proyectos where idproyecto='1490'");
//$sql = $mysqli->query("DELETE  FROM  empresa  where idempresa='1490'");
//$sql = $mysqli->query("UPDATE tb_residentes SET paso1='Administrador' where no_control='20CS0246' ");

//$sql = $mysqli->query("DELETE  FROM  alumnos  where IDAlumno='866'");




//$sql = $mysqli->query("UPDATE tb_residentes SET paso1='Administrador' where no_control='20CS0246' ");
//$sql = $mysqli->query("UPDATE  asignacionproyecto  SET no_control='18CS0152',no_controlp='18CS0152' where id='1287'");
//$sql = $mysqli->query("UPDATE  asignacionactividades SET no_control='18CS0152' ,no_controla='18CS0152'where id='1291'");
//$sql = $mysqli->query("UPDATE  asignacionobjectivos SET no_control='18CS0152' ,no_controlo='18CS0152'  where id='1291'");
//$sql = $mysqli->query("UPDATE  asignacionempresa SET no_control='18CS0152' , no_controle='18CS0152' where id='1291'");
//$sql = $mysqli->query("UPDATE  proyectos SET no_control='18CS0152'  where idproyecto='1070'");
//$sql = $mysqli->query("UPDATE  empresa SET no_control='18CS0152' where idempresa='1070'");


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









?>

