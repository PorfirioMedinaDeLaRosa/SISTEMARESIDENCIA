<?php
//require('../rsesiones.php');
session_start();

if(!isset($_SESSION["user_id"]) || $_SESSION["user_id"]==null){
	print "<script>window.location='../index.php';</script>";
}
$idGT =$_SESSION["user_id"]



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
                WHERE  idA ='$idGT'
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
					$datos['NCompletoA']; ?> <br><br> <?php echo 
					$datos['CargoA']; ?></figcaption>
				</figure>
			
			</div>
				<!-- SideBar Menu -->
			 <ul class="list-unstyled full-box dashboard-sideBar-Menu">
         <?php
       include'menuadmin.php'
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
			 
			</div>
			<?php 



//Si se ha pulsado el botón de buscar

 $no_control = $_GET['id'];  
    //Conectamos con la base de datos en la que vamos a buscar
    
     //   $db->query('set name utf8');

       $sql = "SELECT * FROM tb_residentes  where no_control='$no_control'";
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
					  	<li> <a href="#list" data-toggle="tab">Perfil </a></li>
					  
					  	
					  	
					   
					  	
					</ul>
					 <form  name="add_name" id="add_name"   method="POST">
			      <input  id="no_control"  name="no_control" type="hidden"  value="<?php echo $datos['no_control']; ?>"></input> 
			      <div class="form-group label-floating">
			      
											  <label for="nombre">No Control:</label>
											  <input  onkeyup="validar()" class="form-control" type="text"  id="nocontrol" maxlength="70" name="nocontrol" value="<?php echo $datos['no_control']; ?>" >
					</div>
			     <div class="form-group label-floating">
			      
											  <label for="nombre">Nombre:</label>
											  <input  onkeyup="validar()" class="form-control" type="text" id="nombre" maxlength="70" name="nombre" value="<?php echo $datos['nombre']; ?>" >
					</div>  
			       <div class="form-group label-floating">
			      
											  <label for="nombre">Apellido Paterno:</label>
											  <input  onkeyup="validar()" class="form-control" type="text" id="ap" name="ap" maxlength="50" value="<?php echo $datos['ap']; ?>">
					</div>
					<div class="form-group label-floating">
			      
											  <label for="nombre">Apellido Materno:</label>
											  <input  onkeyup="validar()" class="form-control" type="text" id="am" name="am" maxlength="50" value="<?php echo $datos['am']; ?>">
					</div>
					<div class="form-group label-floating">
			      
											  <label for="nombre">Carrera:</label>
											  <select  class="form-control"  id="carrera" name="carrera" onSubmit="return validarForm(this)">
											  	<option><?php echo $datos['carrera']; ?></option>
			                                     
										          <?php
		include'../conexion.php';					
          $query = $mysqli -> query ("SELECT * FROM carreras ");
											
          while ($valores = mysqli_fetch_array($query)) {
												
            echo '<option value="'.$valores[carrera].'">'.$valores[carrera].'</option>';
            

													
          }
        ?>
										        </select>
     
					</div>



					
					
					

											<div class="form-group label-floating">
											  <label for="email">Curp:</label>
											  <input onkeyup="validar()" class="form-control" id="curp" name="curp" maxlength="100" type="text" value="<?php echo $datos['curp']; ?>" >
											 
											</div>



											<div class="form-group label-floating">
											  <label for="telefono">Semestre:</label>
											  <input onkeyup="validar()" class="form-control" type="number" id="semestre" maxlength="15" name="semestre" value="<?php echo $datos['semestre']; ?>" >
											
											</div>

											<div class="form-group label-floating">
											  <label for="telefono">Periodo:</label>
											  <select  class="form-control"  id="periodo" name="periodo" onSubmit="return validarForm(this)">
			                                     
										          <?php
		include'../conexion.php';					
          $query = $mysqli -> query ("SELECT * FROM periodos where status ='Activo' ");
											
          while ($valores = mysqli_fetch_array($query)) {
												
            echo '<option value="'.$valores[periodo].'">'.$valores[periodo].'</option>';
            

													
          }
        ?>
										        </select>
											  <span id="telefonoOK"></span>
											</div>
											<div class="form-group label-floating">
											  <label for="telefono">Promedio:</label>
											  <input onkeyup="validar()" class="form-control" type="text" id="promedio" maxlength="15" name="promedio" value="<?php echo $datos['promedio']; ?>" >
											  <span id="telefonoOK"></span>
											</div>
											<div class="form-group label-floating">
											  <label for="telefono">Creditos Complementarios:</label>
											  <input onkeyup="validar()" class="form-control" type="number" id="creditosc" maxlength="15" name="creditosc" value="<?php echo $datos['creditosc']; ?>" >
											
											</div>
											<div class="form-group label-floating">
											  <label for="telefono">Número de creditso acumulados:</label>
											  <input onkeyup="validar()" class="form-control" type="number" id="creditosr" maxlength="15" name="creditosr" value="<?php echo $datos['creditosr']; ?>" >
											 
											</div>
											<div class="form-group label-floating">
											  <label for="telefono">Porcentaje:</label>
											  <input onkeyup="validar()" class="form-control" type="text" id="porcentaje" maxlength="15" name="porcentaje" value="<?php echo $datos['porcentaje']; ?>" >
											
											</div>
											<div class="form-group label-floating">
											  <label for="telefono">Número de Seguridad Social:</label>
											  <input onkeyup="validar()" class="form-control" type="number" id="numeros" maxlength="15" name="numeros" value="<?php echo $datos['folios']; ?>" >
											 
											</div>
											<div class="form-group label-floating">
											  <label for="telefono">Password:</label>
											  <input onkeyup="validar()" class="form-control" type="text" id="password" maxlength="30" name="password" value="<?php echo $datos['password']; ?>" >
											 
											</div>



											
																	
			    </div>


		      	<p class="text-center">
										    	 <input type="button" name="submit" id="submit" class="btn btn-info btn-raised btn-sm" value="Actualizar" />
										    </p>
									    
		    </div>
	  	</div>
	</div>
</form>
						



					
						

					  	



	




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
                url:"../Actualizacion2/actualizaralumno.php",  
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
