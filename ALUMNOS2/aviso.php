<?php
//require('../rsesiones.php');
session_start();

if(!isset($_SESSION["no_control"]) || $_SESSION["no_control"]==null){
	print "<script>window.location='../index.php';</script>";
}
$idGT =$_SESSION["no_control"]



?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title>LogIn</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="./css/main.css">
	
	<img src="encab.png"  align="center"  style=" right:100px"  width="1100" height="100" />
	 
</head>

<BR><BR>
<style type="text/css">
	.interno{
position:absolute;
top:150;
left: 0px;
right:1px;
width: 10px;
height: 10px;
}

 #bloqueprincipal {

left:100px;
    width: 1200px;
    background-color:white;
    }

#bloqueprincipal2 {

    
    width: 1200px;
    background-color:white;
overflow:hidden;

    }

body {
margin: auto;
	width: 80%;
}

</style>




<body  >

	<form >

		
	
			<div >
			  <h4   align="right" >Aviso Privacidad Integral</h4>
			   <h4   align="right" >Sistema de Datos Personales de Alumnos del Instituto</h4>

			</div>

<p align="justify" >Instituto Tecnológico Superior de Ciudad Serdán con domicilio en Av. Instituto Tecnológico s/n Col. La Gloria, Ciudad Serdán, Pue. es la responsable del tratamiento de los datos personales que proporcione, los cuales serán protegidos conforme a lo dispuesto por la Ley General de Protección de Datos Personales en Posesión de Sujetos Obligados, la Ley General de Transparencia y Acceso a la Información Pública, la Ley de Transparencia y Acceso a la Información Pública del Estado de Puebla, la Ley de Protección de Datos Personales en posesión de Sujetos Obligados del Estado Puebla y la demás normatividad que resulte aplicable.</p>


<h4  align="left"  >Datos Personales que se recaban y su Finalidad</h4>


<p>Sus datos personales serán utilizados con la finalidad de Proteger la información de todos los alumnos desde su primer contacto y durante su estancia en la Institución</p>

<p align="left"  >Para la información antes señalada se recaban los siguientes datos personales:</p>
<p align="left"  >Nombre, domicilio, teléfono, edad, Correo electrónico, Último grado de estudios</p>
<P align="left"  >Se recaban los siguientes datos personales sensibles</P>
<p align="left"  >Certificado médico</p>
<p align="justify" >Si usted no desea que sus datos personales se continúen tratando para estas finalidades, puede ejercer su derecho de oposición a través del medio indicado líneas abajo.

	
<h4  align="left"  >Fundamento Legal para el tratamiento de datos personales</h4>

<p align="justify">Instituto Tecnológico Superior de Ciudad Serdán, tratará los datos personales antes señalados con fundamento en lo dispuesto en los DECRETO DE CREACIÓN DEL INSTITUTO TECNOLÓGICO SUPERIOR DE CIUDAD SERDÁN Publicado en el Periódico Oficial del estado el 04 de Enero de 2000. Número 2, Segunda Sección. Artículo 1. Artículo 4.- Fracción XIV, Fracción XVII.</p>

<p align="justify">REGLAMENTO INTERIOR DEL INSTITUTO TECNOLÓGICO SUPERIOR DE CIUDAD SERDÁN. Artículo 1., así como los demás aplicables de la Ley de Protección de Datos Personales en posesión de Sujetos Obligados del Estado de Puebla.</p>



<h4  align="left"  >Derechos ARCO</h4>

<p align="justify">Usted podrá ejercer sus derechos de acceso, rectificación, cancelación u oposición de sus datos personales (derechos ARCO), directamente ante la Unidad de Transparencia de este Responsable, ubicada Av. Instituto Tecnológico s/n Col. La Gloria, Ciudad Serdán, Puebla., o bien a través de la Plataforma Nacional de Transparencia (http://www.plataformadetransparencia.org.mx) o en el correo electrónico vinculacion@tecserdan.edu.mx.</p>

<p align="justify">Si desea conocer el procedimiento para el ejercicio de estos derechos, puede acudir a la Unidad de Transparencia, enviar un correo electrónico a la dirección antes señalada o revisar la siguiente página de internet http://resguardatos.puebla.gob.mx</p>

<h4  align="left"  >Transferencia de Datos</h4>


<p align="justify">Se informa que no se realizarán transferencias de datos personales, salvo aquéllas que sean necesarias para atender requerimientos de información de una autoridad competente, que estén debidamente fundados y motivados.</p>

<h4  align="left"  >Cambios al aviso de privacidad</h4>

<p align="justify">En caso de que exista un cambio a este aviso de privacidad, lo haremos de su conocimiento: -En el lugar donde se recabaron sus datos personales.</p>

		</div>

	<BR>		





	</form>


<form method = "POST" ACTION = "../Registro2/privacidad.php" autocomplete="off" class="full-box logInForm">

<input type="hidden" name="no_control" id="no_control"  value="<?php echo 
					$idGT; ?>">

		
		<div class="form-group text-center" align="center">
			<input type="submit" value="Acepto" class="buttona">

		</div>
		
	
		<br>
	</form>
<form action="navram.php">
	<div class="form-group text-center" align="center">
    <input type="submit" value="No Acepto" class="buttona" />
</div><br><br>
</form>
	<!--====== Scripts -->
	<script src="../js/jquery-3.1.1.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/material.min.js"></script>
	<script src="../js/ripples.min.js"></script>
	<script src="../js/sweetalert2.min.js"></script>
	<script src="../js/jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="../js/main.js"></script>
	<script>
		$.material.init();
	</script>
	<style>
.buttona {
  display: inline-block;
  padding: 15px 25px;
  font-size: 24px;
  cursor: pointer;
  text-align: center;	
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color: #2978c1;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
}

.buttona:hover {background-color: #01417b}

.buttona:active {
  background-color: #01417b;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
</style>
</body>
</html>