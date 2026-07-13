<?php
//require('../rsesiones.php');
session_start();

if(!isset($_SESSION["division_id"]) || $_SESSION["division_id"]==null){
	print "<script>window.location='../index.html';</script>";
}
$idGT =$_SESSION["division_id"]



?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Buscador en Tiempo Real con AJAX</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
		<!-- ESTILOS -->
		<link href="css/estilos.css" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		<!-- SCRIPTS JS-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		
    <title>Buscador</title>
    <script src="funciones.js"></script>
</head>
<body>
	<header>
			<div class="alert alert-info">
			<h2>Seguimiento de Alumnos</h2>
			</div>
		</header>
  <section>
    <input type="search" placeholder="Buscar" id="buscar">
    <button class="" >
                                        <a href="homedivisiones.php"><i class=""></i>Inicio</a>
                                        </button>
</section><br><br><br>
<section>
    <div id="datos"></div>
</section>
</body>

</html>