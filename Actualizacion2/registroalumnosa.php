<?php
//require('../rsesiones.php');
session_start();

if (!isset($_SESSION["no_control"]) || $_SESSION["no_control"] == null) {
	print "<script>window.location='../index.php';</script>";
}
$idGT = $_SESSION["no_control"]
?>
<!DOCTYPE html>
<html lang="es">

<head>
	<title>Admin</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="../css/main.css">
</head>
<style>
.error-message {
color: blue;
font-weight: bold;
}
</style>

<body>
	<!-- SideBar -->
	<section class="full-box cover dashboard-sideBar">
		<div class="full-box dashboard-sideBar-bg btn-menu-dashboard"></div>
		<div class="full-box dashboard-sideBar-ct">
			<!--SideBar Title -->
			<div class="full-box text-uppercase text-center text-titles dashboard-sideBar-title">
				ITSCS <i class="zmdi zmdi-close btn-menu-dashboard visible-xs"></i>
			</div>
			<!-- SideBar User info -->
			<?php

			include '../config.inc.php';
			$db = new Conect_MySql();
			//   $db->query('set name utf8');

			$sql = "SELECT  *  FROM  tb_residentes
                WHERE  no_control ='$idGT'
                 ";
			$query = $db->execute($sql);


			if (mysqli_num_rows($query)  > 0) {

				if ($datos = $db->fetch_row($query)) { ?>


			<?php  }
			} ?>
			<div class="full-box dashboard-sideBar-UserInfo">
				<div align="center"><img src="imagenperfil/<?php echo $datos['ruta_imagen']; ?>" alt="" width="150" /></div><br><br>
				<figure class="full-box">
					<!--	<img src="../assets/img/loginFont3.jpg" alt="UserIcon"><br><br>-->
					<figcaption class="text-center text-titles"><?php echo
																$datos['nombre'] . " " . $datos['ap'] . " " . $datos['am']; ?> <br><br> <?php echo
																					$datos['carrera']; ?></figcaption>
				</figure>

			</div>
			<!-- SideBar Menu -->
			<ul class="list-unstyled full-box dashboard-sideBar-Menu">
				<?php
				include 'menu.php'
				?>

			</ul>
		</div>
	</section>

	<!-- Content page-->
	<section class="full-box dashboard-contentPage">
		<!-- NavBar -->
		<nav class="full-box dashboard-Navbar">
			<?php
			include 'navram.php';

			?>
		</nav>
		<!-- Content page -->
		<div class="container-fluid">
			<div class="page-header">

			</div>
			<?php

			$sql = "SELECT * FROM tb_residentes where no_control='$idGT'";
			$query = $db->execute($sql);


			if (mysqli_num_rows($query)  > 0) {


				if ($datos = $db->fetch_row($query)) { ?>



			<?php  }
			}


			?>


			<?php

			$semestre =  $datos['semestre'];
			$situacion = $datos['situacion'];


			if ($semestre == '8'  and $situacion == 'P') {

				$semestre3 = 10;
			}
            $carreraa = $datos['carrera'];
			?>

		</div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12">
					<ul class="nav nav-tabs" style="margin-bottom: 15px;">
						<li> <a href="#list" data-toggle="tab">Registro de alumnos</a></li>

					</ul>
					<form name="add_name" id="add_name" method="POST">
				 <input name="nadmin" id="nadmin" type="hidden" value="$idGT"/>
						<div class="form-group label-floating">

							<label for="password">
								<FONT COLOR="black">Seleccione el alumno o alumna a registrar en el proyecto</FONT>
							</label>
							<select class="form-control" name="periodo" id="periodo" onChange="mostrar(this.value);">

								<option>Seleccione el alumno o alumna</option>
								<?php
								include '../conexion.php';
								$query = $mysqli->query("SELECT * FROM tb_residentes where carrera= '$carreraa' AND periodo='AGO-DIC 2023' AND no_control !='$idGT' ");

								while ($valores = mysqli_fetch_array($query)) {

									echo '<option value="' . $valores[no_control] . '">' . $valores[nombre].' '. $valores[ap].' '. $valores[am]. '</option>';
								}
								?>
							</select>

						</div>
            			<p class="text-center">
							<input type="button" name="submit" id="submit" class="btn btn-info btn-raised btn-sm" value="Actualizar" />
						</p>

				</div>
			</div>
		</div>
		</form>
		<form action="finalproyecto.php">
			<div style="text-align:center;">
				<input type="submit" name="submitt" id="submitt" class="btn btn-info btn-raised btn-sm" value="Anterior paso" />
			</div>
		</form>
		<form action="imagenperfil.php">
			<div style="text-align:center;">
				<input type="submit" name="submitt" id="submitt" class="btn btn-info btn-raised btn-sm" value="Siguiente paso" />
			</div>
		</form>


	</section>

	<script src="../js/jquery-3.1.1.min.js"></script>
	<script src="../js/sweetalert2.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/material.min.js"></script>
	<script src="../js/ripples.min.js"></script>
	<script src="../js/jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="../js/main.js"></script>
	<script>
		$.material.init();
	</script>
	<script>
	//VALIDA TELEFONO	
    const phoneInput = document.getElementById('telefonoa');
    const errorMessage = document.getElementById('error-message');

    phoneInput.addEventListener('input', validatePhone);

    function validatePhone() {
      const phoneRegex = /^\d{10}$/; // Expresión regular para 10 dígitos

      if (phoneRegex.test(phoneInput.value)) {
        errorMessage.textContent = 'Teléfono Correcto'; // Borrar el mensaje de error
      } else {
        errorMessage.textContent = 'El número de teléfono debe tener 10 dígitos.';
      }
    }
  
	//VALIDA PASSWORD
	const passwordInput = document.getElementById('password');
    const errorMessageP = document.getElementById('error-messageP');

    passwordInput.addEventListener('input', validatePassword);

    function validatePassword() {
      const passwordRegex = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$%^&*]).{8,}$/;
      /*
      Explicación de la expresión regular:
      ^                 Inicio de la cadena
      (?=.*\d)          Debe contener al menos un dígito
      (?=.*[a-z])       Debe contener al menos una letra minúscula
      (?=.*[A-Z])       Debe contener al menos una letra mayúscula
      (?=.*[!@#$%^&*])  Debe contener al menos un carácter especial
      .{8,}             Debe tener al menos 8 caracteres en total
      $                 Fin de la cadena
      */

      if (passwordRegex.test(passwordInput.value)) {
        errorMessageP.textContent = 'Excelente'; // Borrar el mensaje de error
      } else {
        errorMessageP.textContent = 'La contraseña debe tener al menos 8 caracteres, incluir mayúsculas, minúsculas, un número y un carácter especial.';
      }
    }

	//
		
		function validar() {
			var validado = true;
			elementos = document.getElementsByClassName("form-control");
			for (i = 0; i < elementos.length; i++) {
				if (elementos[i].value == "" || elementos[i].value == null) {
					validado = false
				}
			}
			if (validado) {
				document.getElementById("submit").disabled = false;

			} else {
				document.getElementById("submit").disabled = true;
				//Salta un alert cada vez que escribes y hay un campo vacio
				//alert("Hay campos vacios")   
			}
		}
		$(document).ready(function() {


			$('#submit').click(function() {
				$.ajax({
					url: "../Actualizacion2/asinacionalumnofinal.php",
					method: "POST",
					data: $('#add_name').serialize(),
					success: function(data) {
						alert(data);
						$('#add_name')[0].load();
					}
				});
			});
		});
	</script>

</body>

</html>