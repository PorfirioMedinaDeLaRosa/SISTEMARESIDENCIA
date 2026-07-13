<?php
	
	include'../conexion.php';	

	        $idAlumno = $_POST['periodo'];
            $idAdmin = $_POST['nadmin'];

           

			$sql = "SELECT * from asignacionproyecto WHERE no_controlp='$idAdmin' " ;
			$result = $mysqli->query($sql);
			$total = mysqli_num_rows($result);
			

if($total >=1){
	
    $sql2 = "SELECT * from asignacionproyecto WHERE no_control='$idAlumno' " ;
    $result = $mysqli->query($sql2);
    $totalA = mysqli_num_rows($result);
 if( $totalA ==1){
    print "El alumno no puede registrarse, ya que se encuentra en otro proyecto" ;
 }else{
    $mensajeA = "Acepto";
    $mensaje='El Alumno ha registrado su proyecto ';
    $fecha2 = strftime( "%Y-%m-%d %H-%M-%S", time() ); 
    $sql = $mysqli->query("insert into asignacionempresa(no_controle, no_control) values ('$idAdmin' ,'$idAlumno') ");
    $sql = $mysqli->query("insert into asignacionproyecto(no_controlp,mensaje, fecha, no_control) values ('$idAdmin' ,'$mensaje','$fecha2','$idAlumno') ");
    $sql = $mysqli->query("insert into asignacionobjectivos(no_controlo, no_control) values ('$idAdmin' ,'$idAlumno') ");
    $sql = $mysqli->query("insert into asignacionactividades(no_controla, no_control) values ('$idAdmin' ,'$idAlumno') ");
    $sql = $mysqli->query(" UPDATE  tb_residentes  SET paso1='Alumno' ,  no_controladmin ='$idAdmin' , privacidad='$mensajeA' where no_control='$idAlumno'");                             
  
    print "Registro Existo";
}

}else{
    print "Usted no es administrador no puede registrar alumnos" ;
}
/*
if ($idA=='' or $nombrea=='' or $apa=='' or $apm=='' or $semestrea=='' or $seguroa=='' or $folioa=='' or $emaila=='' or $callea=='' or $numeroia=='' or $numeroea=='' or $coloniaa=='' or $municipioa=='' or $estadoa=='' or $telefonoa=='' or $periodo=='' or $emailains=='') {
	print "Verificar Datos vacios"  ;
}


else{

$paso2='x';


$sql = $mysqli->query(" UPDATE  tb_residentes  SET nombre='$nombrea', ap='$apa', am='$apm' ,semestre='$semestrea', seguro='$seguroa', folios='$folioa', email='$emaila',  calle='$callea', 	noe='$numeroea', 	noi='$numeroia',colonia='$coloniaa',municipio='$municipioa'  , estado='$estadoa' , periodo='$periodo' , telefono='$telefonoa' , password = '$password' , paso2='$paso2', emailins='$emailains' where no_control ='$idA'");                             


print "Datos Actualizados"  ;
	} 

    */
