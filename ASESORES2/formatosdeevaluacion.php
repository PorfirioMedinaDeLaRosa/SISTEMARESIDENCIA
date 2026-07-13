<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();

if(!isset($_SESSION["asesor_id"]) || $_SESSION["asesor_id"]==null){
	print "<script>window.location='../index.php';</script>";
}

$idGT = $_SESSION["asesor_id"];

include '../config.inc.php';
$db = new Conect_MySql();

// ===== CONSULTA DEL ASESOR =====
$sqlAsesor = "SELECT * FROM asesor WHERE IdAS ='$idGT'";
$queryAsesor = $db->execute($sqlAsesor);
$datosAsesor = $db->fetch_row($queryAsesor);
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title>Inicio</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../css/main.css">
</head>
<body>

<section class="full-box cover dashboard-sideBar">
	<div class="full-box dashboard-sideBar-bg btn-menu-dashboard"></div>
	<div class="full-box dashboard-sideBar-ct">

		<div class="full-box text-uppercase text-center text-titles dashboard-sideBar-title">
			ITSCS
		</div>

		<div class="full-box dashboard-sideBar-UserInfo">
			<div align="center">
				<img src="imagenperfil/<?php echo $datosAsesor['ruta_imagen']; ?>" width="150"/>
			</div>
			<figure class="full-box">
				<figcaption class="text-center text-titles">
					<?php echo $datosAsesor['NombreAS']; ?><br><br>
					<?php echo $datosAsesor['CarreraAS']; ?>
				</figcaption>
			</figure>
		</div>

		<ul class="list-unstyled full-box dashboard-sideBar-Menu">
			<?php include 'menu.php'; ?>
		</ul>
	</div>
</section>

<section class="full-box dashboard-contentPage">
	<nav class="full-box dashboard-Navbar">
		<?php include 'navram.php'; ?>
	</nav>

<?php
// ===== VARIABLES GET =====
$ncontrol = $_GET["no_control"] ?? '';
$nombre   = $_GET["nombre"] ?? '';
$app      = $_GET["app"] ?? '';
$apm      = $_GET["apm"] ?? '';
$carrera  = $_GET["carrera"] ?? '';
?>

<div class="container-fluid">
	<div class="row">
		<div class="col-xs-12">
			<div class="table-responsive">
				<table class="table table-hover text-center">

<?php
// ===== CONSULTA TRAMITES GESTION =====
$sqle = "SELECT * FROM tramitesgestion WHERE no_control ='$ncontrol'";
$querye = $db->execute($sqle);

if (mysqli_num_rows($querye) > 0) {

	while ($datos = $db->fetch_row($querye)) {

		if($datos['status'] =='Aceptado'){

			echo '<article class="full-box tile">
			<div class="full-box tile-title text-center text-titles text-uppercase">
			Formato de evaluación 1 y 2
			</div>
			<div class="full-box tile-number text-titles">
			<a href="../ALUMNOS2/formatoreporte.php?no_control='.$ncontrol.'&nombre='.$nombre.' '.$app.' '.$apm.'&carrera='.$carrera.'">
			Descargar evaluación</a>
			</div>
			</article>';

			echo '<article class="full-box tile">
			<div class="full-box tile-title text-center text-titles text-uppercase">
			Formato de evaluación tres
			</div>
			<div class="full-box tile-number text-titles">
			<a href="../ALUMNOS2/documentoreportefinal.php?no_control='.$ncontrol.'&nombre='.$nombre.' '.$app.' '.$apm.'&carrera='.$carrera.'">
			Descargar evaluación</a>
			</div>
			</article>';

		}else{
			echo '<div class="alert alert-warning text-center">
			El alumno debe cumplir con los documentos de gestión para descargar las evaluaciones.
			</div>';
		}

		if($datos['statusCL'] =='Aceptado'){

			echo '<article class="full-box tile">
			<div class="full-box tile-title text-center text-titles text-uppercase">
			FORMATO DE CALIFICACIONES
			</div>
			<div class="full-box tile-number text-titles">
			<a href="../ALUMNOS2/documentoreportecalificaciones.php?no_control='.$ncontrol.'&nombre='.$nombre.' '.$app.' '.$apm.'&carrera='.$carrera.'">
			Descargar evaluación</a>
			</div>
			</article>';

		}else{
			echo '<div class="alert alert-danger text-center">
			Para descargar el formato final debe cumplir con la carta de liberación.
			</div>';
		}

	} // cierre while

} else {

	echo '<div class="alert alert-danger text-center" style="margin-top:20px;">
	<h3>⚠ No existe ningún trámite de gestión registrado para este alumno.</h3>
	<p>El residente debe de subir su carta de aceptación, presentación y acuerdo de trabajo.</p>
  <p>Para poder descargar los formatos de evaluación.</p>
	</div>';
}
?>

				</table>
			</div>
		</div>
	</div>
</div>

</section>

<script src="../js/jquery-3.1.1.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
</body>
</html>