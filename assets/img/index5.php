<!DOCTYPE html>
<html lang="es">
<head>
	<title>LogIn</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="./css/main.css">
</head>
<body class="cover" style="background-image: url(./assets/img/serdan2021.jpg);">
	<form method = "POST" ACTION = "Validacion2.php" autocomplete="off" class="full-box logInForm">
		<p class="text-center text-muted"><i class="zmdi zmdi-account-circle zmdi-hc-5x"></i></p>
		<p class="text-center text-muted text-uppercase">Inicia sesión</p>

		<div class="form-group label-floating">
		  <label class="control-label" for="usuario"> Usuario </label><br><br>
		  <input class="form-control" style="background-color:  #f2f4f4  " id="usuario" name = "usuario" type="text">
		  <p class="help-block">Escribe tú nombre de Usuario</p>
		</div>

		<div class="form-group label-floating">
		  <label class="control-label" for="nivel">Nivel de Usuario</label>
		  <select id = "nivel" name="nivel" style="background-color:  #f2f4f4  " class="form-control">
		   <option>Residente</option>
           <option>Administrador</option>
           <option>Asesor</option>
           <option>Gestion Tecnologica</option>
           <option>Jefe de División</option>
           <option>Presidente de Academia</option>
          </select>
		  <p class="help-block">Selecciona tú nivel de Usuario</p>
		</div>

		<div class="form-group label-floating">
		  <label class="control-label" for="password">Contraseña</label><br><br>
		  <input class="form-control" id="password" style="background-color:  #f2f4f4  " name = "password" type="Password">
		 
		  <input style="margin-left:20px;" type="checkbox" id="mostrar_contrasena" title="clic para mostrar contraseña"/>
          &nbsp;&nbsp;Mostrar Contraseña</div>
		</div>

		<div class="form-group text-center">
			<input type="submit" value="Iniciar sesión" class="btn btn-raised btn-danger">
		</div>
		

		<a href="index.html">Inicio</a><br>

	
		
	</form>

	
	<!--====== Scripts -->
	<script src="./js/jquery-3.1.1.min.js"></script>
	<script src="./js/bootstrap.min.js"></script>
	<script src="./js/material.min.js"></script>
	<script src="./js/ripples.min.js"></script>
	<script src="./js/sweetalert2.min.js"></script>
	<script src="./js/jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="./js/main.js"></script>
	<script>
		$.material.init();
	</script>
<script>
$(document).ready(function () {
  $('#mostrar_contrasena').click(function () {
    if ($('#mostrar_contrasena').is(':checked')) {
      $('#password').attr('type', 'text');
    } else {
      $('#password').attr('type', 'password');
    }
  });
});
</script> 
</body>
</html>