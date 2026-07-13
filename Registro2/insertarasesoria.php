<?php
	

			include'../conexion.php';


$dia = date("d");

$mes = date("m");


$año = date("Y");



if ($mes =="01")
{
	$mes1 = "Enero";
$fecha = $mes1;
}


if ($mes =="02")
{
	$mes1 = "Febrero";
$fecha = $mes1;
}

if ($mes =="03")
{
	$mes1 = "Marzo";
$fecha = $mes1;
}


if ($mes =="04")
{
	$mes1 = "Abril";
$fecha = $mes1;
}


if ($mes =="05")
{
	$mes1 = "Mayo";
$fecha = $mes1;
}


if ($mes =="06")
{
	$mes1 = "Junio";
$fecha = $mes1;
}

if ($mes =="07")
{
	$mes1 = "Julio";
$fecha = $mes1;
}


if ($mes =="08")
{
	$mes1 = "Agosto";
$fecha = $mes1;
}


if ($mes =="09")
{
	$mes1 = "Septiembre";
$fecha = $mes1;
}


if ($mes =="10")
{
	$mes1 = "Octubre";
$fecha = $mes1;
}


if ($mes =="11")
{
	$mes1 = "Noviembre";
$fecha = $mes1;
}


if ($mes =="12")
{
	$mes1 = "Dicimebre";
$fecha = $mes1;
}
















			$IdAS = $_POST['IdAS'];
			$departamento = $_POST['departamento'];
			$nombreresidentes  = $_POST['nombreresidentes'];
			$controlresidentes = $_POST['controlresidentes'];	
			$nombreproyecto = $_POST['nombreproyecto'];
			$periodo = $_POST['periodo'];
			$empresa = $_POST['empresa'];


			$numeroa = $_POST['numeroa'];	
			$tipoa = $_POST['tipoa'];
			$temasa = $_POST['temasa'];
			$solucion = $_POST['solucion'];


if ($IdAS=="" or $departamento=="" or $nombreresidentes=="" or $controlresidentes=="" or $nombreproyecto=="" or $periodo=="" or $empresa=="" or $numeroa=="" or 
$tipoa=="" or $temasa=="" or $solucion=="") {
	print"Verificar datos";
}

else{
			$sql = $mysqli->query("insert into asesoria (departamento , nombrer , no_controlr, 	nombrep, periodop , empresa, numeroa, tipoa, temas, solucion, 	IdAS , fecha , fecha2, fecha3) values ('$departamento', '$nombreresidentes', '$controlresidentes',  '$nombreproyecto', '$periodo' , '$empresa', '$numeroa', '$tipoa', '$temasa', '$solucion' , '$IdAS', '$dia', '$fecha', '$año' ) ");			
	
print"Asesoria Registrada ";


}


	?>	
 