<?php

include '../conexion.php';


$qq = $mysqli->query("SELECT * FROM proyectos  ");

$qqq = $mysqli->query("SELECT * FROM tb_residentes  ");


$cuenta2 = mysqli_num_rows($qq);

$cuenta3 = mysqli_num_rows($qqq);




					?>


<div class="full-box text-center" style="padding: 30px 10px;">
			<article class="full-box tile">
				<div class="full-box tile-title text-center text-titles text-uppercase">
					Residentes
				</div>
				<div class="full-box tile-icon text-center">
					<i class="zmdi zmdi-account"></i>
				</div>
				<div class="full-box tile-number text-titles">
					<p class="full-box"><?php echo  $cuenta3; ?></p>
					<small>Register</small>
				</div>
			</article>
			<article class="full-box tile">
				<div class="full-box tile-title text-center text-titles text-uppercase">
					Proyectos
				</div>
				<div class="full-box tile-icon text-center">
					<i class="zmdi zmdi-account"></i>
				</div>
				<div class="full-box tile-number text-titles">
					<p class="full-box"><?php echo  $cuenta2; ?></p>
					<small>Register</small>
				</div>
			</article>
			
			
		</div>