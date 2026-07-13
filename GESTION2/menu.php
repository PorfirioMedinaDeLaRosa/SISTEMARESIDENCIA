<?php


if(!isset($_SESSION["gestion_id"]) || $_SESSION["gestion_id"]==null){
	print "<script>window.location='../index.php';</script>";
}
$idGT =$_SESSION["gestion_id"]



?>
					<?php

include'../conexion.php';

$q = $mysqli->query("SELECT * FROM tramitesgestion  ");

$qq = $mysqli->query("SELECT * FROM proyectos  ");

$qqq = $mysqli->query("SELECT * FROM tb_residentes  ");

$cuenta = mysqli_num_rows($q);
$cuenta2 = mysqli_num_rows($qq);

$cuenta3 = mysqli_num_rows($qqq);




					?>
			

<div class="full-box text-center" style="padding: 30px 10px;">
			<article class="full-box tile">
				<div class="full-box tile-title text-center text-titles text-uppercase">
					Solicitudes
				</div>
				<div class="full-box tile-icon text-center">
					<i class="zmdi zmdi-account"></i>
				</div>
				<div class="full-box tile-number text-titles">
					<p class="full-box"><?php echo  $cuenta2; ?></p>
				
				</div>
			</article>
			
			<article class="full-box tile">
				<div class="full-box tile-title text-center text-titles text-uppercase">
					Student
				</div>
				<div class="full-box tile-icon text-center">
					<i class="zmdi zmdi-face"></i>
				</div>
				<div class="full-box tile-number text-titles">
					<p class="full-box"><?php echo  $cuenta3; ?></p>
					
				</div>
			</article>


			<article class="full-box tile">
				<div class="full-box tile-title text-center text-titles text-uppercase">
					proyectos
				</div>
				<div class="full-box tile-icon text-center">
					<i class="zmdi zmdi-account"></i>
				</div>
				<div class="full-box tile-number text-titles">
					<p class="full-box"><?php echo  $cuenta; ?></p>
				
				</div>
			</article>
			
		</div>