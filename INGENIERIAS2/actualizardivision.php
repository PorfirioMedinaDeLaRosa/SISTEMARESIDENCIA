<?php
//require('../rsesiones.php');
session_start();
if(!isset($_SESSION["user_id"]) || $_SESSION["user_id"]==null){
	header('location:../index.php');
	
}
$idA =$_SESSION["user_id"]
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

            $sql = "SELECT  *  FROM  admin
                WHERE  idA ='$idA' 
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
					
					<figcaption class="text-center text-titles"><?php echo 
					$datos['NCompletoA']."  ".$datos['CargoA']; ?></figcaption>
				</figure>
				
			</div>
			<!-- SideBar Menu -->
			<ul class="list-unstyled full-box dashboard-sideBar-Menu">
				<?php



include'menuadmin.php';

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
		<!-- Content page -->
		<div class="container-fluid">
			<div class="page-header">
			  <h1 class="text-titles"><i class=""></i><small>Actualización de Jefes de División</small></h1>
			</div>
			<?php

$idD = $_GET['id'];


      
     
       $sql3 = "SELECT  *  FROM   divisiones   where idD = '$idD'             ";
           $query3 = $db->execute($sql3);
            if($datos3=$db->fetch_row($query3)){?>
            

      <?php  }






       ?>
		</div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12">
					<ul class="nav nav-tabs" style="margin-bottom: 15px;">
					  	<li class="active"><a href="#list" data-toggle="tab">Actualizar Datos</a></li>
					  
					</ul>

					<form  name="add_name" id="add_name"  method="POST">
			    <input  id="idD" name="idD" type="hidden"  value="<?php echo $datos3['idD']; ?>"></input>  
			       <div class="form-group label-floating">
			      
											  <label for="nombre">Nombre:</label>
											  <input onkeyup="validar()"  maxlength="90" class="form-control" type="text" id="nombre" name="nombre"  value="<?php echo $datos3['NombreD']; ?>" >
					</div>
					<div class="form-group label-floating">
											  <label for="cargo">Cargo:</label>
											  <input  onkeyup="validar()"  maxlength="90" class="form-control" type="text" id="cargo" name="cargo" value="<?php echo $datos3['CargoD']; ?>">
											</div>
											<div class="form-group label-floating">
											  <label for="cargo">Carrera:</label>
											   <select  class="form-control" id="carrera" name="carrera" onChange="mostrar(this.value);">
			                                      <option>Opción</option>
										          <?php
                              $idCarrera = $datos3['CarreraD'];

		include'../conexion.php';					
          $query = $mysqli -> query ("SELECT * FROM carreras WHERE idcarrera = '$idCarrera' ");
											
          while ($valores = mysqli_fetch_array($query)) {
												
            echo '<option value="'.$valores[idcarrera].'">'.$valores[carrera].'</option>';
            

													
          }
        ?>
										        </select>
											</div>
											<div class="form-group label-floating">
											  <label for="email">Email:</label>
											  <input  onkeyup="validar()"  maxlength="90"  class="form-control" id="email" name="email" type="email" value="<?php echo $datos3['EmailD']; ?>">
											   <span id="emailOK"></span>
											</div>
											<div class="form-group label-floating">
											  <label for="telefono">Teléfono:</label>
											  <input  onkeyup="validar()"  maxlength="15" class="form-control" type="text" id="telefono" name="telefono" value="<?php echo $datos3['TelefonoD']; ?>">
											     <span id="telefonoOK"></span>
											</div>
											
											<div class="form-group label-floating">
											  <label for="password">Password:</label>
											  <input onkeyup="validar()"  maxlength="40" class="form-control"  id="password" name="password" type="text" value="<?php echo $datos3['PasswordD']; ?>">
											</div>
			    </div>
		      	<p class="text-center">
										    	 <input type="button" name="submit" id="submit" class="btn btn-info btn-raised btn-sm" value="Actualizar" />
										    </p>
									    
		    </div>
	  	</div>
	</div>

</form>
								</div>
							</div>
						</div>

			</div>
		</div>
		
	</section>

	<!-- Notifications area -->
	
<div class="tab-pane fade" id="list2">
 
			</div>

	<div class="modal fade" tabindex="-1" role="dialog" id="Dialog-Actualizar">
	  	<div class="modal-dialog" role="document">
		    <div class="modal-content">
			    <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			    	<h4 class="modal-title">Actualizar</h4>
			    </div>
			    <div class="modal-body">
			     


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

	</script>

	<script>
	document.getElementById('telefono').addEventListener('input', function() {
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
	
	document.getElementById('email').addEventListener('input', function() {
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
       $('#list2').load('listdivision.php');
        
      $('#submit').click(function(){            
           $.ajax({  
                url:"../Actualizacion2/actualizardivisiones.php",  
                method:"POST",  
                data:$('#add_name').serialize(),  
                success:function(data)  
                {  
                     alert(data);  
                     $("#list2").load('listdivision.php');
                  

                }  
           });  
      });  
 });  


 $(document).ready(function() {    

 $('#usuario').blur(function(){

        $('#Info').html('<img src="loader.gif" alt="" />').fadeOut(1000);

        var usuario = $(this).val();        
        var dataString = 'usuario='+usuario;

        $.ajax({
            type: "POST",
            url: "check_username_availablity2.php",
            data: dataString,
            success: function(data) {
                $('#Info').fadeIn(1000).html(data);
            }
        });
    });


    });   
 </script>
</body>
<script type="text/javascript">
	
	function objetoAjax(){
 var xmlhttp=false;
 try {
 xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
 } catch (e) {
 try {
 xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
 } catch (E) {
 xmlhttp = false;
 }
 }
 if (!xmlhttp && typeof XMLHttpRequest!='undefined') {
   xmlhttp = new XMLHttpRequest();
   }
   return xmlhttp;
}


 
function eliminaDato(idD){
   //donde se mostrará el resultado de la eliminacion
   
   $(document).ready(function() {
       
            // Recargo la página
            location.reload("listdivision.php");
        
    });
   //usaremos un cuadro de confirmacion 
   var eliminar = confirm("De verdad desea eliminar este dato")
   if ( eliminar ) {
   //instanciamos el objetoAjax
   ajax=objetoAjax();
   //uso del medotod GET
   //indicamos el archivo que realizará el proceso de eliminación
   //junto con un valor que representa el id del empleado
   ajax.open("GET", "../Eliminacion2/eliminadivision.php?id="+idD);
   ajax.onreadystatechange=function() {
   if (ajax.readyState==4) {
   //mostrar resultados en esta capa
   divResultado.innerHTML = ajax.responseText
   }
   }
   //como hacemos uso del metodo GET
   //colocamos null
   ajax.send(null)
   }
}
</script>
</html>