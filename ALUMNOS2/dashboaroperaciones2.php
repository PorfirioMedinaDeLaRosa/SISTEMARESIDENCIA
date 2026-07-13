<?php
//require('../rsesiones.php');
session_start();

if(!isset($_SESSION["no_control"]) || $_SESSION["no_control"]==null){
  print "<script>window.location='../index.php';</script>";
}
$idGT =$_SESSION["no_control"]



?>

<div class="full-box text-center" style="padding: 30px 10px;">
<h4  align="center">Le informamos que su  proyecto ha sido aceptado</h4>


<article class="full-box tile">
				<div class="full-box tile-title text-center text-titles text-uppercase">
				Carga Académica
				</div>
				<div class="full-box tile-icon text-center">
					<i class="zmdi zmdi-account"></i>
				</div>
				<div class="full-box tile-number text-titles">
					<p class="full-box">0</p>
					<a href="CargaAcademicasubir.php"><small>Entrar</small></a>
				</div>
			</article>


			<article class="full-box tile">
				<div class="full-box tile-title text-center text-titles text-uppercase">
					Documentos Gestión Tecnológica
				</div>
				<div class="full-box tile-icon text-center">
					<i class="zmdi zmdi-account"></i>
				</div>
				<div class="full-box tile-number text-titles">
					<p class="full-box">1</p>
					<a href="archivosgestion.php"><small>Entrar</small></a>
				</div>
			</article>

			<article class="full-box tile">
				<div class="full-box tile-title text-center text-titles text-uppercase">
					Formato Solicitud De RP
				</div>
				<div class="full-box tile-icon text-center">
					<i class="zmdi zmdi-account"></i>
				</div>
				<div class="full-box tile-number text-titles">
					<p class="full-box">2</p>
					<a href="documentoss.php"><small>Entrar</small></a>
				</div>
			</article>

			<article class="full-box tile">
				<div class="full-box tile-title text-center text-titles text-uppercase">
					Formato De Anteproyecto
				</div>
				<div class="full-box tile-icon text-center">
					<i class="zmdi zmdi-account"></i>
				</div>
				<div class="full-box tile-number text-titles">
					<p class="full-box">3</p>
					<a href="formatoAnteproyectoA.php"><small>Entrar</small></a>
				</div>
			</article>

			

			<article class="full-box tile">
				<div class="full-box tile-title text-center text-titles text-uppercase">
					Carta de presentación
				</div>
				<div class="full-box tile-icon text-center">
					<i class="zmdi zmdi-account"></i>
				</div>
				<div class="full-box tile-number text-titles">
					<p class="full-box">4</p>
					
					<a href="CPresentacionD2.php"><small>Subir</small></a>
				</div>
			</article>

			<article class="full-box tile">
				<div class="full-box tile-title text-center text-titles text-uppercase">
					Formato de acuerdos
				</div>
				<div class="full-box tile-icon text-center">
					<i class="zmdi zmdi-account"></i>
				</div>
				<div class="full-box tile-number text-titles">
					<p class="full-box">5</p>
					
					<a href="formatoAcuerdosA2.php"><small>Subir</small></a>
				</div>
			</article>

			<article class="full-box tile">
				<div class="full-box tile-title text-center text-titles text-uppercase">
					Carta de aceptación
				</div>
				<div class="full-box tile-icon text-center">
					<i class="zmdi zmdi-account"></i>
				</div>
				<div class="full-box tile-number text-titles">
					<p class="full-box">6</p>
					
					<a href="formatoCartaA2.php"><small>Subir</small></a>
				</div>
			</article>
			<article class="full-box tile">
				<div class="full-box tile-title text-center text-titles text-uppercase">
					Carta de liberación de RP
				</div>
				<div class="full-box tile-icon text-center">
					<i class="zmdi zmdi-account"></i>
				</div>
				<div class="full-box tile-number text-titles">
					<p class="full-box">7</p>
					<a href="formatoCLiberacion.php"><small>Entrar</small></a>
				</div>
			</article>

			<article class="full-box tile">
				<div class="full-box tile-title text-center text-titles text-uppercase">
					Encuesta de salida
				</div>
				<div class="full-box tile-icon text-center">
					<i class="zmdi zmdi-account"></i>
				</div>
				<div class="full-box tile-number text-titles">
					<p class="full-box">8</p>
					<a href="EncuestaSalida.php"><small>Entrar</small></a>
				</div>
			</article>

			
			<article class="full-box tile">
				<div class="full-box tile-title text-center text-titles text-uppercase">
				Formatos de evaluación
				</div>
				<div class="full-box tile-icon text-center">
					<i class="zmdi zmdi-account"></i>
				</div>
				<div class="full-box tile-number text-titles">
					<p class="full-box">9</p>
					<a href="FReporteAF.php"><small>Entrar</small></a>
				</div>
			</article>
<!--
			<article class="full-box tile">
				<div class="full-box tile-title text-center text-titles text-uppercase">
				Formato De Calificaciones
				</div>
				<div class="full-box tile-icon text-center">
					<i class="zmdi zmdi-account"></i>
				</div>
				<div class="full-box tile-number text-titles">
					<p class="full-box">1</p>
					<a href="FCA.php"><small>Entrar</small></a>
				</div>
			</article>

-->
			<article class="full-box tile">
				<div class="full-box tile-title text-center text-titles text-uppercase">
				Reporte 1
				</div>
				<div class="full-box tile-icon text-center">
					<i class="zmdi zmdi-account"></i>
				</div>
				<div class="full-box tile-number text-titles">
					<p class="full-box">10</p>
					<a href="Reporte1Actualizacion.php"><small>Entrar</small></a>
				</div>
			</article>
			<article class="full-box tile">
				<div class="full-box tile-title text-center text-titles text-uppercase">
				Reporte 2
				</div>
				<div class="full-box tile-icon text-center">
					<i class="zmdi zmdi-account"></i>
				</div>
				<div class="full-box tile-number text-titles">
					<p class="full-box">11</p>
					<a href="Reporte2Actualizacion.php"><small>Entrar</small></a>
				</div>
			</article>

			<article class="full-box tile">
				<div class="full-box tile-title text-center text-titles text-uppercase">
				Reporte 3
				</div>
				<div class="full-box tile-icon text-center">
					<i class="zmdi zmdi-account"></i>
				</div>
				<div class="full-box tile-number text-titles">
					<p class="full-box">12</p>
					<a href="Reporte3Actualizacion.php"><small>Entrar</small></a>
				</div>
			</article>

			<article class="full-box tile">
				<div class="full-box tile-title text-center text-titles text-uppercase">
				Vizualización de documentos
				</div>
				<div class="full-box tile-icon text-center">
					<i class="zmdi zmdi-account"></i>
				</div>
				<div class="full-box tile-number text-titles">
					<p class="full-box">13</p>
					<a href="reporte3A.php"><small>Entrar</small></a>
				</div>
			</article>
			
			<article class="full-box tile">
				<div class="full-box tile-title text-center text-titles text-uppercase">
				Titulación
				</div>
				<div class="full-box tile-icon text-center">
					<i class="zmdi zmdi-account"></i>
				</div>
				<div class="full-box tile-number text-titles">
					<p class="full-box">14</p>
					<a href="titulacion.php"><small>Entrar</small></a>
				</div>
			</article>

			


		</div>