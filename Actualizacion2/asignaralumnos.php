<?php
	
include'../conexion.php';	

 $opcion = $_POST['LISTA'];
 $no_control = $_POST['no_control'];
								
		$mensaje='El Alumno ha registrado su proyecto ';

		$fecha2 = strftime( "%Y-%m-%d %H-%M-%S", time() ); 

$qq = $mysqli->query("SELECT * FROM asignacionactividades  WHERE no_control = '$no_control'");

if( mysqli_num_rows($qq) == 0 )
{



if($opcion == 0)  
 {
 $alumno1 = $_POST['Texto1'];


$sql = $mysqli->query("insert into asignacionempresa(no_controle, no_control) values ( '$alumno1' ,'$alumno1') ");
$sql = $mysqli->query("insert into asignacionproyecto(no_controlp, mensaje, fecha,  no_control) values ( '$alumno1' ,'$mensaje','$fecha2', '$alumno1') ");

$sql = $mysqli->query("insert into asignacionobjectivos(no_controlo, no_control) values ( '$alumno1' ,'$alumno1') ");

$sql = $mysqli->query("insert into asignacionactividades(no_controla, no_control) values ( '$alumno1' ,'$alumno1') ");

$sql = $mysqli->query(" UPDATE  tb_residentes  SET paso1='Administrador' where no_control='$alumno1'");                             


}		
	
		
if($opcion == 1)  
 {
 $alumno1 = $_POST['Texto1'];


$sql = $mysqli->query("insert into asignacionempresa(no_controle, no_control) values ( '$alumno1' ,'$alumno1') ");
$sql = $mysqli->query("insert into asignacionproyecto(no_controlp, mensaje, fecha,  no_control) values ( '$alumno1' ,'$mensaje','$fecha2', '$alumno1') ");

$sql = $mysqli->query("insert into asignacionobjectivos(no_controlo, no_control) values ( '$alumno1' ,'$alumno1') ");

$sql = $mysqli->query("insert into asignacionactividades(no_controla, no_control) values ( '$alumno1' ,'$alumno1') ");


$sql = $mysqli->query("insert into proyectos(no_control) values ( '$alumno1') ");

$sql = $mysqli->query("insert into empresa(no_control) values ( '$alumno1') ");

$sql = $mysqli->query(" UPDATE  tb_residentes  SET paso1='Administrador' , no_controladmin ='$alumno1'  where no_control='$alumno1'");                             



}
if($opcion == 2)  
 {
 $alumno1 = $_POST['Texto1'];
 $alumno2 = $_POST['Texto2'];

$sql = $mysqli->query("insert into asignacionempresa(no_controle, no_control) values ('$alumno1' ,'$alumno1'), ('$alumno1' ,'$alumno2') ");

$sql = $mysqli->query("insert into asignacionproyecto(no_controlp,mensaje, fecha, no_control) values ('$alumno1' ,'$mensaje','$fecha2' ,'$alumno1'), ('$alumno1' ,'$mensaje','$fecha2','$alumno2') ");

$sql = $mysqli->query("insert into asignacionobjectivos(no_controlo, no_control) values ( '$alumno1' ,'$alumno1'), ('$alumno1' ,'$alumno2') ");

$sql = $mysqli->query("insert into asignacionactividades(no_controla, no_control) values ( '$alumno1' ,'$alumno1'), ('$alumno1' ,'$alumno2') ");


$sql = $mysqli->query("insert into proyectos(no_control) values ( '$alumno1') ");

$sql = $mysqli->query("insert into empresa(no_control) values ( '$alumno1') ");



$sql = $mysqli->query(" UPDATE  tb_residentes  SET paso1='Administrador' ,  no_controladmin ='$alumno1' where no_control='$alumno1'");                             
$sql = $mysqli->query(" UPDATE  tb_residentes  SET paso1='Alumno' ,  no_controladmin ='$alumno1'  where no_control='$alumno2'");                             



}


if($opcion == 3)  
 {
 $alumno1 = $_POST['Texto1'];
 $alumno2 = $_POST['Texto2'];
 $alumno3 = $_POST['Texto3'];

$sql = $mysqli->query("insert into asignacionempresa(no_controle, no_control) values ( '$alumno1' ,'$alumno1'), ('$alumno1' ,'$alumno2'), ('$alumno1' ,'$alumno3') ");

$sql = $mysqli->query("insert into asignacionproyecto(no_controlp, mensaje, fecha, no_control) values ( '$alumno1' ,'$mensaje','$fecha2','$alumno1'), ('$alumno1' ,'$mensaje','$fecha2','$alumno2'), ('$alumno1','$mensaje','$fecha2' ,'$alumno3') ");

$sql = $mysqli->query("insert into asignacionobjectivos(no_controlo, no_control) values ( '$alumno1' ,'$alumno1'), ('$alumno1' ,'$alumno2'), ('$alumno1' ,'$alumno3') ");

$sql = $mysqli->query("insert into asignacionactividades(no_controla, no_control) values ( '$alumno1' ,'$alumno1'), ('$alumno1' ,'$alumno2'), ('$alumno1' ,'$alumno3') ");



$sql = $mysqli->query("insert into proyectos(no_control) values ( '$alumno1') ");

$sql = $mysqli->query("insert into empresa(no_control) values ( '$alumno1') ");

$sql = $mysqli->query(" UPDATE  tb_residentes  SET paso1='Administrador' , no_controladmin ='$alumno1' where no_control='$alumno1'");                             
$sql = $mysqli->query(" UPDATE  tb_residentes  SET paso1='Alumno' , no_controladmin ='$alumno1' where no_control='$alumno2'");                             
             
$sql = $mysqli->query(" UPDATE  tb_residentes  SET paso1='Alumno', no_controladmin ='$alumno1' where no_control='$alumno3'");                             


}

if($opcion == 4)  
 {
 $alumno1 = $_POST['Texto1'];
 $alumno2 = $_POST['Texto2'];
 $alumno3 = $_POST['Texto3'];
 $alumno4 = $_POST['Texto4'];

$sql = $mysqli->query("insert into asignacionempresa(no_controle, no_control) values ( '$alumno1' ,'$alumno1'), ('$alumno1' ,'$alumno2'), ('$alumno1' ,'$alumno3') , ('$alumno1' ,'$alumno4')");

$sql = $mysqli->query("insert into asignacionproyecto(no_controlp,mensaje, fecha, no_control) values ( '$alumno1' ,'$mensaje','$fecha2','$alumno1'), ('$alumno1' ,'$mensaje','$fecha2' ,'$alumno2'), ('$alumno1','$mensaje','$fecha2' ,'$alumno3') , ('$alumno1' ,'$mensaje','$fecha2','$alumno4')");

$sql = $mysqli->query("insert into asignacionobjectivos(no_controlo, no_control) values ( '$alumno1' ,'$alumno1'), ('$alumno1' ,'$alumno2'), ('$alumno1' ,'$alumno3') , ('$alumno1' ,'$alumno4')");


$sql = $mysqli->query("insert into asignacionactividades(no_controla, no_control) values ( '$alumno1' ,'$alumno1'), ('$alumno1' ,'$alumno2'), ('$alumno1' ,'$alumno3') , ('$alumno1' ,'$alumno4')");


$sql = $mysqli->query("insert into proyectos(no_control) values ( '$alumno1') ");

$sql = $mysqli->query("insert into empresa(no_control) values ( '$alumno1') ");


$sql = $mysqli->query(" UPDATE  tb_residentes  SET paso1='Administrador' , no_controladmin ='$alumno1' where no_control='$alumno1'");                             
$sql = $mysqli->query(" UPDATE  tb_residentes  SET paso1='Alumno' , no_controladmin ='$alumno1' where no_control='$alumno2'");                             
             
$sql = $mysqli->query(" UPDATE  tb_residentes  SET paso1='Alumno' , no_controladmin ='$alumno1' where no_control='$alumno3'");   
$sql = $mysqli->query(" UPDATE  tb_residentes  SET paso1='Alumno', no_controladmin ='$alumno1' where no_control='$alumno4'"); 
}


if($opcion == 5)  
 {
 $alumno1 = $_POST['Texto1'];
 $alumno2 = $_POST['Texto2'];
 $alumno3 = $_POST['Texto3'];
 $alumno4 = $_POST['Texto4'];
 $alumno5 = $_POST['Texto5'];

$sql = $mysqli->query("insert into asignacionempresa(no_controle, no_control) values ( '$alumno1' ,'$alumno1'), ('$alumno1' ,'$alumno2'), ('$alumno1' ,'$alumno3') , ('$alumno1' ,'$alumno4'), ('$alumno1' ,'$alumno5')");

$sql = $mysqli->query("insert into asignacionproyecto(no_controlp,mensaje, fecha, no_control) values ( '$alumno1' ,'$mensaje','$fecha2','$alumno1'), ('$alumno1' ,'$mensaje','$fecha2','$alumno2'), ('$alumno1' ,'$mensaje','$fecha2','$alumno3') , ('$alumno1' ,'$mensaje','$fecha2','$alumno4'), ('$alumno1' ,'$mensaje','$fecha2','$alumno5')");


$sql = $mysqli->query("insert into asignacionobjectivos(no_controlo, no_control) values ( '$alumno1' ,'$alumno1'), ('$alumno1' ,'$alumno2'), ('$alumno1' ,'$alumno3') , ('$alumno1' ,'$alumno4'), ('$alumno1' ,'$alumno5')");

$sql = $mysqli->query("insert into asignacionactividades(no_controla, no_control) values ( '$alumno1' ,'$alumno1'), ('$alumno1' ,'$alumno2'), ('$alumno1' ,'$alumno3') , ('$alumno1' ,'$alumno4'), ('$alumno1' ,'$alumno5')");


$sql = $mysqli->query("insert into proyectos(no_control) values ( '$alumno1') ");

$sql = $mysqli->query("insert into empresa(no_control) values ( '$alumno1') ");

$sql = $mysqli->query(" UPDATE  tb_residentes  SET paso1='Administrador'  ,  no_controladmin ='$alumno1' where no_control='$alumno1'");                             
$sql = $mysqli->query(" UPDATE  tb_residentes  SET paso1='Alumno' , no_controladmin ='$alumno1' where no_control='$alumno2'");                             
             
$sql = $mysqli->query(" UPDATE  tb_residentes  SET paso1='Alumno' ,  no_controladmin ='$alumno1' where no_control='$alumno3'");   
$sql = $mysqli->query(" UPDATE  tb_residentes  SET paso1='Alumno' , no_controladmin ='$alumno1'  where no_control='$alumno4'"); 
$sql = $mysqli->query(" UPDATE  tb_residentes  SET paso1='Alumno' , no_controladmin ='$alumno1' where no_control='$alumno5'");

}

print "Se han Asignado los alumnos";


}



else{

print "No se Puede Realizar el Registro Porque ya se realizo";

}




