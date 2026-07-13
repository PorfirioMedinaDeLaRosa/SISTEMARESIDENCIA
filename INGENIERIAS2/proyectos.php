<?php
//require('../rsesiones.php');
session_start();

if(!isset($_SESSION["user_id"]) || $_SESSION["user_id"]==null){
	print "<script>window.location='../index.php';</script>";
}
$idGT =$_SESSION["user_id"]



?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Buscador </title>
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
			<h2>Alumnos</h2>
			</div>
		</header>
  <section>
    <input type="search" placeholder="Buscar" id="buscar">
    <button class="" >
                                        <a href="home.php"><i class=""></i>Inicio</a>
                                        </button>

                                        <button class="" >
                                        <a href="excel.php"><i class=""></i>Exportar a Excel</a>
                                        </button>
</section><br><br><br>
<section>
    <div id="datos"></div>
</section>
</body>

</html>