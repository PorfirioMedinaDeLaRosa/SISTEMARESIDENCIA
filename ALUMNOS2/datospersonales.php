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
	<title>Admin</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="../css/main.css">
</head>
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



//Si se ha pulsado el botón de buscar

   
    //Conectamos con la base de datos en la que vamos a buscar
    include '../config.inc.php';
        $db=new Conect_MySql();
     //   $db->query('set name utf8');

            $sql = "SELECT  *  FROM  tb_residentes
                WHERE  no_control ='$idGT'
                 ";
            $query = $db->execute($sql);
  

  

   // $count_results = mysqli_num_rows($query_searched);

    //Si ha resultados
    if( mysqli_num_rows($query)  > 0) {

       // echo '<h2>Se han encontrado '.$count_results.' resultados.</h2>';

       // echo '<ul>';
     // while($datos=$db->fetch_row($query))
         if($datos=$db->fetch_row($query)){?>
          
       
<?php  }} ?>
			<div class="full-box dashboard-sideBar-UserInfo">
				<div align="center"><img  src="imagenperfil/<?php echo $datos['ruta_imagen']; ?>" alt="" width="150" /></div><br><br>
				<figure class="full-box">
				<!--	<img src="../assets/img/loginFont3.jpg" alt="UserIcon"><br><br> -->
					<figcaption class="text-center text-titles"><?php echo 
          $datos['nombre']." ".$datos['ap']." ".$datos['am']; ?> <br><br> <?php echo 
          $datos['carrera']; ?></figcaption>
				
			</div>
			<!-- SideBar Menu -->
			<ul class="list-unstyled full-box dashboard-sideBar-Menu">
				<?php
include'menu.php';

				?>

			</ul>
		</div>
	</section>
	<!-- Content page-->
	<section class="full-box dashboard-contentPage">
		<!-- NavBar -->
		<nav class="full-box dashboard-Navbar">
			<?php
include'navram.php';

    ?>
		</nav>
		<!-- Content page -->
		<div class="container-fluid">
			<div class="page-header">
			  <h1 class="text-titles"><i class="zmdi zmdi-account zmdi-hc-fw"></i> Users <small>Residente</small></h1>
             <?php 



//Si se ha pulsado el botón de buscar

   
    //Conectamos con la base de datos en la que vamos a buscar
   
     //   $db->query('set name utf8');

            $sql = "SELECT  *  FROM  tb_residentes
                WHERE  no_control ='$idGT' 
                 ";
            $query = $db->execute($sql);
  

  

   // $count_results = mysqli_num_rows($query_searched);

    //Si ha resultados
    if( mysqli_num_rows($query)  > 0) {

       // echo '<h2>Se han encontrado '.$count_results.' resultados.</h2>';

       // echo '<ul>';
     // while($datos=$db->fetch_row($query))
         if($datos=$db->fetch_row($query)){?>
           
           
       
<?php  }} ?>





			  <form  name="add_name" id="add_name" method="POST">
			     <input  id="no_control" name="no_control" type="hidden" value="<?php echo $datos['no_control']; ?>" ></input> 
			     <div class="form-group label-floating">
			      
											  <label for="nombre">No Control:</label>
											  <input disabled="" class="form-control" type="text" id="controla" name="controla" value="<?php echo $datos['no_control']; ?>" onkeyup="validar()" >
					</div>  
			       <div class="form-group label-floating">
			      
											  <label for="nombre">Nombre:</label>
											  <input  onkeyup="validar()" disabled="" class="form-control" type="text" id="nombrea" name="nombrea" value="<?php echo $datos['nombre']; ?>">
					</div>
					<div class="form-group label-floating">
			      
											  <label for="nombre">Apellido Paterno:</label>
											  <input  onkeyup="validar()" disabled="" class="form-control" type="text" id="apa" name="apa" value="<?php echo $datos['ap']; ?>">
					</div>
					<div class="form-group label-floating">
			      
											  <label for="nombre">Apellido Materno:</label>
											  <input  onkeyup="validar()" disabled="" class="form-control" type="text" id="ama" name="ama" value="<?php echo $datos['am']; ?>">
					</div>
					<div class="form-group label-floating">
			      
											  <label for="nombre">Carrera:</label>
											  <input onkeyup="validar()"  disabled="" class="form-control" type="text" id="carreraa" name="carreraa" value="<?php echo $datos['carrera']; ?>">
					</div>
					<div class="form-group label-floating">
			      
											  <label for="nombre">Curp:</label>
											  <input  onkeyup="validar()" disabled="" class="form-control" type="text" id="curpa" name="curpa" value="<?php echo $datos['curp']; ?>">
					</div>



					
											<div class="form-group label-floating">
											  <label for="email">Semestre:</label>
											  <input onkeyup="validar()"  class="form-control" id="semestrea" name="semestrea" type="number" value="<?php echo $datos['semestre']; ?>" >
											</div>
											
											
											<div class="form-group">
										      <label class="control-label">Seguro</label>
										        <select onkeyup="validar()"  class="form-control" id="seguroa" name="seguroa"  value="<?php echo $datos['seguro']; ?>" >
										          <option>IMSS</option>
										          <option>ISSSTE</option>
										         
										          <option>Otro</option>
										          
										        </select>
										    </div>
											<div class="form-group label-floating">
											  <label for="telefono">Folio:</label>
											  <input onkeyup="validar()" class="form-control" type="text" id="folioa" name="folioa" value="<?php echo $datos['folios']; ?>">
											</div>
											<div class="form-group label-floating">
											  <label for="telefono">Email:</label>
											  <input  onkeyup="validar()" class="form-control" type="Email" id="emaila" name="emaila" value="<?php echo $datos['email']; ?>">
											   <span id="emailOK"></span>
											</div>
											<div class="form-group label-floating">
											  <label for="telefono">Avenida o Calle:</label>
											  <input  onkeyup="validar()" class="form-control" type="text" id="callea" name="callea" value="<?php echo $datos['calle']; ?>">
											</div>

											<div class="form-group label-floating">
											  <label for="email">Número Exterior:</label>
											  <input  onkeyup="validar()" class="form-control" id="numeroea" name="numeroea" type="number" value="<?php echo $datos['noe']; ?>" >
											</div>
											<div class="form-group label-floating">
											  <label for="email">Número Interior:</label>
											  <input  onkeyup="validar()" class="form-control" id="numeroia" name="numeroia" type="number" value="<?php echo $datos['noi']; ?>" >
											</div>
											<div class="form-group label-floating">
											  <label for="telefono">Colonia:</label>
											  <input onkeyup="validar()"  class="form-control" type="text" id="coloniaa" name="coloniaa" value="<?php echo $datos['colonia']; ?>">
											</div>
											<div class="form-group label-floating">
											  <label for="telefono">Municipio:</label>
											  <input  onkeyup="validar()" class="form-control" type="text" id="municipioa" name="municipioa" value="<?php echo $datos['municipio']; ?>">
											</div>
											<div class="form-group label-floating">
											  <label for="telefono">Estado:</label>
											  <input onkeyup="validar()" class="form-control" type="text" id="estadoa" name="estadoa" value="<?php echo $datos['estado']; ?>">
											</div>
											<div class="form-group label-floating">
											  <label for="telefono">Telefono:</label>
											  <input  onkeyup="validar()"class="form-control" type="tel" id="telefonoa" name="telefonoa" value="<?php echo $datos['telefono']; ?>">
											   <span id="telefonoOK"></span>
											</div>



											
			    </div>
		      	<p class="text-center">
										    	<input type="button" name="submit" id="submit" class="btn btn-info btn-raised btn-sm" value="Registar" />
										    </p>
										    <br>
                                            <br>
                                        <p class="text-center">    
                                       
                                        <button class="btn btn-info btn-raised btn-sm">
                                        <a href="datosempresa.php"><i class=""></i>Siguiente</a>
                                        </button>
                                        </p>

									    
		    </div>
	  	</div>
	</div>
</form>

			</div>
			
		</div>
		

	<!-- Notifications area -->
	


	
			     

	<!--====== Scripts -->
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
		document.getElementById('telefonoa').addEventListener('input', function() {
    campo = event.target;
    valido = document.getElementById('telefonoOK');
        
    emailRegex = /^\d{10}$/i;
    //Se muestra un texto a modo de ejemplo, luego va a ser un icono
    if (emailRegex.test(campo.value)) {
      valido.innerText = "válido";
       document.getElementById("submit").disabled = false;
    } else {
      valido.innerText = "incorrecto";
        document.getElementById("submit").disabled = true;
    }
});
	
	document.getElementById('emaila').addEventListener('input', function() {
    campo = event.target;
    valido = document.getElementById('emailOK');
        
    emailRegex = /^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i;
    //Se muestra un texto a modo de ejemplo, luego va a ser un icono
    if (emailRegex.test(campo.value)) {
      valido.innerText = "válido";
       document.getElementById("submit").disabled = false;
    } else {
      valido.innerText = "incorrecto";
        document.getElementById("submit").disabled = true;
    }
});
	function validar(){
  var validado = true;
  elementos = document.getElementsByClassName("form-control");
  for(i=0;i<elementos.length;i++){
    if(elementos[i].value == "" || elementos[i].value == null){
    validado = false
    }
  }
  if(validado){
  document.getElementById("submit").disabled = false;
  
  }else{
     document.getElementById("submit").disabled = true;
  //Salta un alert cada vez que escribes y hay un campo vacio
  //alert("Hay campos vacios")   
  }
}   
 $(document).ready(function(){  
     
        
      $('#submit').click(function(){            
           $.ajax({  
                url:"../Actualizacion2/actualizardatosalumnos2.php",  
                method:"POST",  
                data:$('#add_name').serialize(),  
                success:function(data)  
                {  
                     alert(data);  
                     $('#add_name')[0].load();  
                }  
           });  
      });  
 });  
 </script>
</body>
</html>
