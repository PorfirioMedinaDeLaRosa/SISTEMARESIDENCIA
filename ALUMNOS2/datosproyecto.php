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
				<!---	<img src="../assets/img/loginFont3.jpg" alt="UserIcon"><br><br> -->
					<figcaption class="text-center text-titles"><?php echo 
          $datos['nombre']." ".$datos['ap']." ".$datos['am']; ?> <br><br> <?php echo 
          $datos['carrera']; ?></figcaption>
				</figure>
				
			</div>
			<!-- SideBar Menu -->
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
			  <h1 class="text-titles"><i class="zmdi zmdi-account zmdi-hc-fw"></i> <small>Registro de proyecto</small></h1>
			  <html>  
      <head>  
      	 <?php 



//Si se ha pulsado el botón de buscar

   
    //Conectamos con la base de datos en la que vamos a buscar
    
     //   $db->query('set name utf8');

            $sql = "SELECT  *  FROM  proyectos , asignacionproyecto
                WHERE proyectos.no_control= asignacionproyecto.no_controlp AND asignacionproyecto.no_control ='$idGT' 
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
           <title></title>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
      </head>  
      <body>  
           <form name="add_name" id="add_name">
            <input  id="no_control" name="no_control" type="hidden" value="<?php echo $datos['no_control']; ?>" ></input>    
            <input  name="idproyecto"  id="idproyecto" value="<?php echo $datos['idproyecto']; ?>" type="hidden">
          <div class="form-group label-floating">
											  <label class="control-label">Nombre del Proyecto:</label>
											   <textarea cols="50"  rows="4" maxlength="490" class="form-control" type="text" id="nombrep" name="nombrep">
											       </textarea>
											</div>
											<div class="form-group label-floating">
											  <label class="control-label">Opción Elegida:</label>
											   <select   class="form-control" id="opcione" name="opcione">
										          <option>Banco de Proyectos</option>
										          <option>Propuesta propia</option>
										          <option>Trabajador</option>
										          <option>Proyecto Integrador</option>
										          <option>Proy. Educ. Dual</option>
                                                                                          <option>ENEIT</option>
                                                                                          <option>Investigación</option>
										         

										        </select>
											</div>

											
											
											

										

											
											<div class="form-group label-floating">
											  <label class="control-label">Objetivo General:</label>
											   <textarea cols="50" rows="5"  maxlength="600"  class="form-control" type="text" id="objectivog" name="objectivog">
											       </textarea>
											</div>

                                         <div class="form-group">  
                    
                          <div class="table-responsive"> 
                          <h4>Objetivos Especificos</h4>
                               <table class="table table-bordered" id="dynamic_field">  
                                    <tr>  
                                         
                                         <td><input  maxlength="400"  type="text" name="name[]" placeholder="Objectivos Especificos" class="form-control name_list" ></></td>  
                                         <td><button type="button" name="add" id="add" class="btn btn-success">Nuevo</button></td>  
                                    </tr>  
                               </table>  
                              
                               
                              
                                
                                
                          </div>  
                    
                </div>



											<div class="form-group label-floating">
											  <label for="password">Justificación:</label>
											  <textarea   cols="50" rows="7"  maxlength="5000" class="form-control" type="text" id="justificacionp" name="justificacionp">
											       </textarea>
											  </div>
											  

											  <div class="form-group label-floating">
											  <label for="password">Problemas a Resolver:</label>
											  <textarea  cols="50" rows="8"  maxlength="5000" class="form-control" type="text" id="problemasp" name="problemasp">
											       </textarea>
											  </div>     
                <p class="text-center">
                <input type="button" name="submit" id="submit" class="btn btn-info btn-raised btn-sm" value="Registar"  />
            </p>
                  <p class="text-center">    
                                        
                                        <button class="btn btn-info btn-raised btn-sm" >
                                        <a href="semanas.php"><i class=""></i>Siguiente</a>
                                        </button>
                                        </p>  
                     </form> 
                    
                </div>  
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

      
 $(document).ready(function(){  
      var i=1;  
      $('#add').click(function(){  
           i++;  
           $('#dynamic_field').append('<tr id="row'+i+'"><td><input type="text" name="name[]" placeholder="Objectivos" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');  
      });  
      $(document).on('click', '.btn_remove', function(){  
           var button_id = $(this).attr("id");   
           $('#row'+button_id+'').remove();  
      });  
      $('#submit').click(function(){            
           $.ajax({  
                url:"name.php",  
                method:"POST",  
                data:$('#add_name').serialize(),  
                success:function(data)  
                {  
                     alert(data);  
                     $('#add_name')[0].reset();  
                }  
           });  
      });  
 });  
 </script>
</body>
</html>
