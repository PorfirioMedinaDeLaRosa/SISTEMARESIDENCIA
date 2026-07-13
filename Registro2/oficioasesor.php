<?php
	

			include'../conexion.php';

			$numero = $_POST['numero'];
		
			$asesor = $_POST['asesor'];
			$carrera = $_POST['carrera'];
			$residente = $_POST['residente'];

			$nombre = $_POST['nombre'];
			$periodo = $_POST['periodo'];
			$empresa = $_POST['empresa'];


			$fechaa = $_POST['fechaa'];
			$jefe = $_POST['jefe'];
			$cargo = $_POST['cargo'];
			$idD = $_POST['idD'];

if ($carrera=='Opción'  or $numero=='' or  $asesor==''or $residente=='' or $nombre=='' or $periodo=='' or $empresa=='' or $fechaa=='' or $jefe=='' or $cargo==''  ) {


	print "Verificar Datos";
}


else{

			$sql = $mysqli->query("INSERT INTO oficioasesor ( Numero , Asesor, Carrera, alumno, Proyecto, Periodo,Empresa,  Fecha2, Jefe, Cargo, idD   ) values ( '$numero',  '$asesor', '$carrera' , '$residente' , '$nombre', '$periodo', '$empresa' ,'$fechaa','$jefe','$cargo','$idD') ");			
		print "Registro Exitoso";	


	}
	?>	