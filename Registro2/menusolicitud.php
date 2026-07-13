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
				<!--	<img src="../assets/img/loginFont3.jpg" alt="UserIcon"><br><br>-->
					<figcaption class="text-center text-titles"><?php echo 
					$datos['nombre']." ".$datos['ap']." ".$datos['am']; ?> <br><br> <?php echo 
					$datos['carrera']; ?></figcaption>
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
			
			<h4 class="center" >Antes de oprimir el botón para enviar  a revisión el proyecto, verificar los siguientes  puntos:</h4>
			<h5>1.-Revisar los  documentos del paso 11, que no lleven signos no identificables.</h5>
			<h5>2.-Verificar que en sus actividades del paso 9, colocaron  la actividad de elaboración de Informe Técnico.</h5>
			<h5>3.-Verificar que las fechas cumplan con las semanas establecidas. </h5>
			<h5>4.-Las fechas puestas en las actividades, deben ser igual al periodo de residencia profesional.</h5>
			<h5>5.-Cualquier duda acudir al Departamento de Subdirección Acádemica.</h5>


			<h4 class="center" >Nota: Sobre revisión de proyecto</h4>

			<h5>1.-Si en el campo status proyecto, aparece la palabra Rechazado, deben de dirigirse a los pasos 7,8,9,10 y ver las observaciones realizadas por la academia en cada uno de los pasos.</h5>
			<h5>2.-Si en el campo status solicitud, aparece la palabra Rechazado, deben de dirigirse al paso 6 y ver sus observaciones realizadas por el departamento de gestión tecnológica, en el campo del formulario observaciones generales.

.</h5>


			
		</div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12">
					<ul class="nav nav-tabs" style="margin-bottom: 15px;">
					  	<li class="active"><a href="#list" data-toggle="tab">Solicitar Residencia </a></li>
					  	</li>
					  	
					</ul>
					
								</div>
							</div>
						</div>

					  	<div id="myTabContent" class="tab-content">
						<div class="tab-pane fade active in" id="list">
							<div class="container-fluid">

<?php 



//Si se ha pulsado el botón de buscar

  include'../conexion.php';
    //Conectamos con la base de datos en la que vamos a buscar
  
        
     //   $db->query('set name utf8');





           ?>
 


							
								




							
							
					  	</div>
					</div>
				</div>


				<div class="table-responsive">
        <table class="table table-hover text-center" width: 50%;
	height: 300px;>
         
        <thead>
            <tr>
                <th class="text-center" >No Control</th>
                <th class="text-center" >Nombre Completo </th>
               
                 <th width="80" class="text-center" >Carrera</th>
                 
                    <th class="text-center" >Proyecto</th>
                    <th class="text-center" >Status Proyecto</th>
                    <th class="text-center" >Status Solicitud</th>


                    <th class="text-center" >Revisión</th>
                  
                     <th class="text-center" >Enviar a Revisión</th>
                 

               
               
            </tr>
            </thead>
 
<?php 



//Si se ha pulsado el botón de buscar

   
    //Conectamos con la base de datos en la que vamos a buscar
  
        
     //   $db->query('set name utf8');


$sql = "     SELECT  *  FROM  proyectos , asignacionproyecto, tb_residentes, empresa, asignacionempresa
WHERE proyectos.no_control= asignacionproyecto.no_controlp  
AND empresa.no_control = asignacionempresa.no_controle
AND asignacionempresa.no_control = '$idGT'
  
 AND asignacionproyecto.no_control = '$idGT' AND tb_residentes.no_control='$idGT'";

     
         


            $query = $db->execute($sql);
  

  

   // $count_results = mysqli_num_rows($query_searched);

    //Si ha resultados
    if( mysqli_num_rows($query)  > 0) {

       // echo '<h2>Se han encontrado '.$count_results.' resultados.</h2>';

       // echo '<ul>';
     // while($datos=$db->fetch_row($query))
         while($datos=$db->fetch_row($query)){?>
           
            <tr>

                <td><?php echo $datos['no_control']; ?></td>
                 <td><?php echo $datos['nombre']." ".$datos['ap']." ".$datos['am']; ?></td>
                 
                    <td><?php echo $datos['carrera']; ?></td>
                    
                       <td><?php echo $datos['nombrep']; ?></td>
                       <td><?php echo $datos['StatusGeneral']; ?></td>
                        <td><?php echo $datos['status']; ?></td>

                         <td><?php  if($datos['paso10']=='x') echo 'En revisión'; else echo "No Enviado a revisión";?></td>
                     
                      

                       <td><?php


                     echo "<a class='btn btn-danger btn-raised btn-xs' href='enviorevisión.php?no_control=" .$datos['no_control'] ." '><span class='glyphicon glyphicon-actualizar'></span>Enviar a Revisión</a>";



       /*      if ($datos['StatusGeneral']=='Aceptado' AND $datos['status']=='Aceptado') {

             	 echo "<a class='btn btn-danger btn-raised btn-xs' href='operaciones.php? id=" .$datos['no_control'] ." & idproyecto=" .$datos['idproyecto'] ."'><span class='glyphicon glyphicon-actualizar'></span>Iniciar Residencia</a>";
             }
                elseif ($datos['StatusGeneral']=='Aceptado' AND $datos['status']  =='Rechazado') {
                	echo "<a class='btn btn-danger btn-raised btn-xs' href='periodoeditar.php? '><span class='glyphicon glyphicon-actualizar'></span>Actualizar Información</a>"; 
                        
                        } 

                        elseif ($datos['StatusGeneral']=='Aceptado' AND $datos['status']  =='') {
                	echo "<a class='btn btn-danger btn-raised btn-xs' href='periodoeditar.php? '><span class='glyphicon glyphicon-actualizar'></span>Actualizar Información</a>"; 
                        
                        }


                        elseif ($datos['StatusGeneral']=='0' AND $datos['status']  =='Rechazado') {
                	echo "<a class='btn btn-danger btn-raised btn-xs' href='periodoeditar.php? '><span class='glyphicon glyphicon-actualizar'></span>Actualizar Información</a>"; 
                        
                        }


 elseif ($datos['StatusGeneral']=='0' AND $datos['status']  =='Aceptado') {
                	echo "<a class='btn btn-danger btn-raised btn-xs' href='periodoeditar.php? '><span class='glyphicon glyphicon-actualizar'></span>Actualizar Información</a>"; 
                        
                        }


                        elseif ($datos['StatusGeneral']=='0' AND $datos['status']  =='') {
                	echo "<a class='btn btn-danger btn-raised btn-xs' href='periodoeditar.php? '><span class='glyphicon glyphicon-actualizar'></span>Actualizar Información</a>"; 
                        
                        }


                         elseif ($datos['StatusGeneral']=='0' AND $datos['status']  =='Rechazado') {
                	echo "<a class='btn btn-danger btn-raised btn-xs' href='periodoeditar.php? '><span class='glyphicon glyphicon-actualizar'></span>Actualizar Información</a>"; 
                        
                        }




                         elseif ($datos['StatusGeneral']=='Rechazado' AND $datos['status']  =='Aceptado') {
                	echo "<a class='btn btn-danger btn-raised btn-xs' href='periodoeditar.php? '><span class='glyphicon glyphicon-actualizar'></span>Actualizar Información</a>"; 
                        
                        }

                        elseif ($datos['StatusGeneral']=='Rechazado' AND $datos['status']  =='Rechazado') {
                	echo "<a class='btn btn-danger btn-raised btn-xs' href='periodoeditar.php? '><span class='glyphicon glyphicon-actualizar'></span>Actualizar Información</a>"; 
                        
                        } 

                        elseif ($datos['StatusGeneral']=='Rechazado' AND $datos['status']  =='') {
                	echo "<a class='btn btn-danger btn-raised btn-xs' href='periodoeditar.php? '><span class='glyphicon glyphicon-actualizar'></span>Actualizar Información</a>"; 
                        
                        } 


                        elseif ($datos['StatusGeneral']=='' AND $datos['status']  =='Aceptado') {
                	echo "<a class='btn btn-danger btn-raised btn-xs' href='periodoeditar.php? '><span class='glyphicon glyphicon-actualizar'></span>Actualizar Información</a>"; 
                        
                        } 


                        elseif ($datos['StatusGeneral']=='' AND $datos['status']  =='Rechazado') {
                	echo "<a class='btn btn-danger btn-raised btn-xs' href='periodoeditar.php? '><span class='glyphicon glyphicon-actualizar'></span>Actualizar Información</a>"; 
                        
                        } 


                        elseif ($datos['StatusGeneral']=='' AND $datos['status']  =='') {
                	echo "<a class='btn btn-danger btn-raised btn-xs' href='periodoeditar.php? '><span class='glyphicon glyphicon-actualizar'></span>Actualizar Información</a>"; 
                        
                        } 






                        elseif ($datos['StatusGeneral']=='') {
                	echo "<a class='btn btn-danger btn-raised btn-xs' href='periodoeditar.php? '><span class='glyphicon glyphicon-actualizar'></span>Actualizar Información</a>"; 
                        
                        } 



*/
             
                      
            
               
                 ?></td>
            </tr>
       
<?php  }} ?>
 

                  </div>
                  
            </div>
				
			</div>
		</div>
		<form   action="documentos.php">
       <div style="text-align:center;">
<input type="submit"  name="submitt" id="submitt" class="btn btn-info btn-raised btn-sm" value="Anterior paso" />
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

	
</body>
</html>
