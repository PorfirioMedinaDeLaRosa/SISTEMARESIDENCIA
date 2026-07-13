<?php
//require('../rsesiones.php');
session_start();

if(!isset($_SESSION["asesor_id"]) || $_SESSION["asesor_id"]==null){
	print "<script>window.location='../index.php';</script>";
}
$idGT =$_SESSION["asesor_id"]



?>
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

            $sql = "SELECT  *  FROM  asesor
                WHERE IdAS ='$idGT'               ";
            $query = $db->execute($sql);
  

  

   // $count_results = mysqli_num_rows($query_searched);

    //Si ha resultados
    if( mysqli_num_rows($query)  > 0) {

       // echo '<h2>Se han encontrado '.$count_results.' resultados.</h2>';

       // echo '<ul>';
     // while($datos=$db->fetch_row($query))
         if($datos=$db->fetch_row($query)){?>
          
       
<?php  }}

class Encrypter {
 
    private static $Key = "";
 
    public static function encrypt ($input) {
        $output = base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, md5(Encrypter::$Key), $input, MCRYPT_MODE_CBC, md5(md5(Encrypter::$Key))));
        return $output;
    }
 
    public static function decrypt ($input) {
        $output = rtrim(mcrypt_decrypt(MCRYPT_RIJNDAEL_256, md5(Encrypter::$Key), base64_decode($input), MCRYPT_MODE_CBC, md5(md5(Encrypter::$Key))), "\0");
        return $output;
    }
 
}

$password = $datos['PasswordAs'];

$texto_original = Encrypter::decrypt($password);
 





 ?>
			<div class="full-box dashboard-sideBar-UserInfo">
				<div align="center"><img  src="imagenperfil/<?php echo $datos['ruta_imagen']; ?>" alt="" width="150" /></div><br><br>
				<figure class="full-box">
				<!---	<img src="../assets/img/loginFont3.jpg" alt="UserIcon"><br><br> -->
					<figcaption class="text-center text-titles"><?php echo 
					$datos['NombreAS']; ?> <br><br> <?php echo 
					$datos['CarreraAS']; ?></figcaption>
				</figure>
				
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
			  <h1 class="text-titles"><i class="zmdi zmdi-account zmdi-hc-fw"></i> <small><?php echo 
					$datos['NombreAS']; ?></small></h1>
			</div>
			 <?php 



//Si se ha pulsado el botón de buscar

   
    //Conectamos con la base de datos en la que vamos a buscar
    
     //   $db->query('set name utf8');

            $sql = "SELECT  *  FROM  asesor
                WHERE  idAS ='$idGT' 
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


		</div>



		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12">
					<ul class="nav nav-tabs" style="margin-bottom: 15px;">
					  	<li class="active"><a href="#list" data-toggle="tab">Perfil</a></li>
					  	
					</ul>
					<form name="add_name" id="add_name" method="POST">
			     <input  id="IdAS" name="IdAS" type="hidden"  value="<?php echo $datos['IdAS']; ?>"></input>   

			      <input  id="idD" name="idD" type="hidden"  value="<?php echo $datos['idD']; ?>"></input>   
			       <div class="form-group label-floating">
			      
											  <label for="nombre">Nombre:</label>
											  <input  onkeyup="validar()" maxlength="100" class="form-control" type="text" id="nombrea" name="nombrea" value="<?php echo $datos['NombreAS']; ?>" >
					</div>
					<div class="form-group label-floating">
											  <label for="cargo">Carrera:</label>
											  <select  onkeyup="validar()" maxlength="100" class="form-control" type="text" id="carreraa" name="carreraa" value="<?php echo $datos['CarreraAS']; ?>">
											  <option>Opción</option>
											   <?php
		include'../conexion.php'; 					
          $query = $mysqli -> query ("SELECT * FROM carreras");
											
          while ($valores = mysqli_fetch_array($query)) {
												
            echo '<option value="'.$valores[carrera].'">'.$valores[carrera].'</option>';
            

													
          }
        ?>
											  </select>

											</div>
											
											<div class="form-group label-floating">
											  <label for="email">Email:</label>
											  <input  onkeyup="validar()" maxlength="100" class="form-control" id="emaila" name="emaila" type="Email" value="<?php echo $datos['EmailAS']; ?>">
											    <span id="emailOK"></span>
											</div>
											<div class="form-group label-floating">
											  <label for="telefono">Teléfono:</label>
											  <input onkeyup="validar()" maxlength="15"  class="form-control" type="text" id="telefonoa" name="telefonoa" value="<?php echo $datos['TelefonoAS']; ?>" >
											    <span id="telefonoOK"></span>
											</div>
											
											<div class="form-group label-floating">
											  <label for="password">Password:</label>
											  <input onkeyup="validar()" maxlength="40" class="form-control"  id="passworda" name="passworda" type="password" value="<?php echo $texto_original; ?>">
											</div>
			    </div>
		      	<p class="text-center">
										    	<input type="button" name="submit" id="submit" class="btn btn-info btn-raised btn-sm" value="Registar" />
										    </p>
									    
		    </div>
	  	</div>
	</div>
</form>
					
								</div>
							</div>
						</div>

					  
	</section>


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
                url:"../Actualizacion2/actualizarAAA.php",  
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

$(document).ready(function() {    

 $('#usuarioa').blur(function(){

        $('#Info').html('<img src="loader.gif" alt="" />').fadeOut(1000);

        var usuarioa = $(this).val();        
        var dataString = 'usuarioa='+usuarioa;

        $.ajax({
            type: "POST",
            url: "check_username_availablity.php",
            data: dataString,
            success: function(data) {
                $('#Info').fadeIn(1000).html(data);
            }
        });
    });


    });     
 </script>

</body>
</html>
