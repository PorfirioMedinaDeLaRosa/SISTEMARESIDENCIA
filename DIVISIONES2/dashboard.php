<?php

if(!isset($_SESSION["division_id"]) || $_SESSION["division_id"]==null){
	print "<script>window.location='../index.php';</script>";
}
$idGT =$_SESSION["division_id"]



?>


  

<div class="full-box text-center" style="padding: 30px 10px;">
			<article class="full-box tile">
				<div  class="full-box tile-title text-center text-titles text-uppercase">
					Asesores
				</div>
				<div class="full-box tile-icon text-center">
					<i  class="zmdi zmdi-account"></i>
				</div>
				<div class="full-box tile-number text-titles">
					
					<?php

include'../conexion.php';

$q = $mysqli->query("SELECT * FROM asesor WHERE idD ='$idGT'  ");

$qq = $mysqli->query("SELECT * FROM presidente WHERE idD ='$idGT'  ");

$qqq = $mysqli->query("SELECT * FROM tb_residentes  ");

$cuenta = mysqli_num_rows($q);
$cuenta2 = mysqli_num_rows($qq);

$cuenta3 = mysqli_num_rows($qqq);




					?>
			
					<p  class="full-box"><?php echo  $cuenta; ?></p>
					<small>Register</small>
				</div>
			</article>
			<article class="full-box tile">
				<div class="full-box tile-title text-center text-titles text-uppercase">
					Presidente de Academia
				</div>
				<div class="full-box tile-icon text-center">
					<i class="zmdi zmdi-male-alt"></i>
				</div>
				<div class="full-box tile-number text-titles">
					<p class="full-box"><?php echo $cuenta2; ?></p>
					<small>Register</small>
				</div>
			</article>
			<article class="full-box tile">
				<div class="full-box tile-title text-center text-titles text-uppercase">
					Residentes
				</div>
				<div class="full-box tile-icon text-center">
					<i class="zmdi zmdi-face"></i>
				</div>
				<div class="full-box tile-number text-titles">
					<p class="full-box"><?php echo $cuenta3; ?></p>
					<small>Register</small>
				</div>
			</article>
			
		</div>