<?php
//require('../rsesiones.php');
session_start();

if(!isset($_SESSION["no_control"]) || $_SESSION["no_control"]==null){
  print "<script>window.location='../index.php';</script>";
}
$idGT =$_SESSION["no_control"]



?>

<div class="full-box text-center" style="padding: 30px 10px;">
<h4  align="center">Le informamos que su  proyecto ha sido aceptado </h4>



			<article class="full-box tile">
				<div class="full-box tile-title text-center text-titles text-uppercase">
                Carga Académica
				</div>
				<div class="full-box tile-icon text-center">
					<i class="zmdi zmdi-account"></i>
				</div>
				<div class="full-box tile-number text-titles">
					<p class="full-box">1</p>
					<a href="CargaAcademica.php"><small>Entrar</small></a>
				</div>
			</article>

			<article class="full-box tile">
				<div class="full-box tile-title text-center text-titles text-uppercase">
					Seguimiento Carga Académica
				</div>
				<div class="full-box tile-icon text-center">
					<i class="zmdi zmdi-account"></i>
				</div>
				<div class="full-box tile-number text-titles">
					<p class="full-box">2</p>
					<a href="SeguimientoCargaAcademica.php"><small>Entrar</small></a>
				</div>
			</article>

		</div>