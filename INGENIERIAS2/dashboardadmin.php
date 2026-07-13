<?php

if(!isset($_SESSION["user_id"]) || $_SESSION["user_id"]==null){
	print "<script>window.location='../index.php';</script>";
}
$idA =$_SESSION["user_id"]
?>



<?php



include'../conexion.php';

$q = $mysqli->query("SELECT * FROM tb_residentes WHERE carrera='Ingeniería Informática'  ");
$q2 = $mysqli->query("SELECT * FROM tb_residentes WHERE carrera='Ingeniería Mecánica'  ");
$q3 = $mysqli->query("SELECT * FROM tb_residentes WHERE carrera='Ingeniería Industrial'  ");
$q4 = $mysqli->query("SELECT * FROM tb_residentes WHERE carrera='Ingeniería En Gestión Empresarial'  ");

$q5 = $mysqli->query("SELECT * FROM tb_residentes WHERE carrera='Ingeniería En Innovación Agricola Sustentable'  ");

$q6 = $mysqli->query("SELECT * FROM tb_residentes WHERE carrera='Ingeniería En Industrias Alimentarias'  ");

$q7 = $mysqli->query("SELECT * FROM divisiones   ");


$q8 = $mysqli->query("SELECT * FROM asesor   ");


$q9 = $mysqli->query("SELECT * FROM proyectos   ");








$cuenta = mysqli_num_rows($q);
$cuenta2 = mysqli_num_rows($q2);
$cuenta3 = mysqli_num_rows($q3);
$cuenta4 = mysqli_num_rows($q4);
$cuenta5 = mysqli_num_rows($q5);
$cuenta6 = mysqli_num_rows($q6);

$cuenta7 = mysqli_num_rows($q7);
$cuenta8 = mysqli_num_rows($q8);
$cuenta9 = mysqli_num_rows($q9);







					?>





<div class="full-box text-center" style="padding: 30px 10px;">






			<article class="full-box tile">
				<div class="full-box tile-title text-center text-titles text-uppercase">
					<a class="full-box tile-title text-center text-titles text-uppercase" href="ingenierias.php">  Informática </a>
				</div>
				
				<div class="full-box tile-icon text-center">
					 <i class="zmdi zmdi-account"  ></i>
					 <a href="ingenierias.php"></a> 
				</div>
				<div class="full-box tile-number text-titles">
					<p class="full-box"><?php echo $cuenta; ?></p>
					
				</div>
			</article>
			<article class="full-box tile">
				<div class="full-box tile-title text-center text-titles text-uppercase">
					  Mecánica
				</div>
				<div class="full-box tile-icon text-center">
					<i class="zmdi zmdi-account"></i>
				</div>
				<div class="full-box tile-number text-titles">
					<p class="full-box"><?php echo $cuenta2; ?></p>
									</div>
			</article>
			<article class="full-box tile">
				<div class="full-box tile-title text-center text-titles text-uppercase">
					  Industrial
				</div>
				<div class="full-box tile-icon text-center">
					<i class="zmdi zmdi-account"></i>
				</div>
				<div class="full-box tile-number text-titles">
					<p class="full-box"><?php echo $cuenta3; ?></p>
					
				</div>
			</article>
			<article class="full-box tile">
				<div class="full-box tile-title text-center text-titles text-uppercase">
					 Gestión Empresarial
				</div>
				<div class="full-box tile-icon text-center">
					<i class="zmdi zmdi-account"></i>
				</div>
				<div class="full-box tile-number text-titles">
					<p class="full-box"><?php echo $cuenta4; ?></p>
					
				</div>
			</article>
			<article class="full-box tile">
				<div class="full-box tile-title text-center text-titles text-uppercase">
					 Innovación Agricola Sustentable
				</div>
				<div class="full-box tile-icon text-center">
					<i class="zmdi zmdi-account"></i>
				</div>
				<div class="full-box tile-number text-titles">
					<p class="full-box"><?php echo $cuenta5; ?></p>
					
				</div>
			</article>
			<article class="full-box tile">
				<div class="full-box tile-title text-center text-titles text-uppercase">
					 Industrias Alimentarias
				</div>
				<div class="full-box tile-icon text-center">
					<i class="zmdi zmdi-account"></i>
				</div>
				<div class="full-box tile-number text-titles">
					<p class="full-box"><?php echo $cuenta6; ?></p>
					
				</div>
			</article>
			<article class="full-box tile">
				<div class="full-box tile-title text-center text-titles text-uppercase">
					Divisiones
				</div>
				<div class="full-box tile-icon text-center">
					<i class="zmdi zmdi-male-alt"></i>
				</div>
				<div class="full-box tile-number text-titles">
					<p class="full-box"><?php echo $cuenta7; ?></p>
					
				</div>
			</article>
			<article class="full-box tile">
				<div class="full-box tile-title text-center text-titles text-uppercase">
					Asesores
				</div>
				<div class="full-box tile-icon text-center">
					<i class="zmdi zmdi-face"></i>
				</div>
				<div class="full-box tile-number text-titles">
					<p class="full-box"><?php echo $cuenta8; ?></p>
					
				</div>
			</article>
			<article class="full-box tile">
				<div class="full-box tile-title text-center text-titles text-uppercase">
					Proyectos
				</div>
				<div class="full-box tile-icon text-center">
					<i class="zmdi zmdi-male-female"></i>
				</div>
				<div class="full-box tile-number text-titles">
					<p class="full-box"><?php echo $cuenta9; ?></p>
					
				</div>
			</article>
			<article class="full-box tile">
				<div class="full-box tile-title text-center text-titles text-uppercase">
					<a class="full-box tile-title text-center text-titles text-uppercase" href="ingenierias.php">Consultas Especiales</a>
				</div>
				<div class="full-box tile-icon text-center">
					 <i class="zmdi zmdi-account"  ></i>
					 <a href="ingenierias.php"></a> 
				</div>
				<div class="full-box tile-number text-titles">
					<p class="full-box"><?php echo $cuenta; ?></p>
					
				</div>
			</article>
		</div>