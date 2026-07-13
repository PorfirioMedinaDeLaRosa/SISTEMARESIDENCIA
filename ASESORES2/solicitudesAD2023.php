<?php
//require('../rsesiones.php');
session_start();

if(!isset($_SESSION["asesor_id"]) || $_SESSION["asesor_id"]==null){
	print "<script>window.location='../index.php';</script>";
}
$idGT =$_SESSION["asesor_id"]



?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title>Inicio</title>
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
          
       
<?php  }} ?>
			<div class="full-box dashboard-sideBar-UserInfo">
        <div align="center"><img  src="imagenperfil/<?php echo $datos['ruta_imagen']; ?>" alt="" width="150" /></div><br><br>
				<figure class="full-box">
				<!---	<img src="../assets/img/loginFont3.jpg" alt="UserIcon"><br><br> ---->
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
		</nav><br>
    
        <div class="container-fluid">
                  <div class="page-header">
                   
   <div class="table-responsive">
        <table id="example"  data-order='[[ 5, "asc" ]]' data-page-length='5'
          class="table table-sm table-striped table-hover table-bordered">
        
        <thead>
            <tr>
              <th class="text-center" >Imagen de Perfil</th>
                <th class="text-center" >No Control</th>
                <th class="text-center" >Nombre </th>
 
                  
                   <th class="text-center" >Fecha</th>
                    <th class="text-center" >Proyecto</th>
                    <th class="text-center" >Status</th>
                 
                   <th class="text-center" >Anteproyecto</th>
   
            </tr>
         </thead>

<?php 

$carrera =  $datos['CarreraAS'];

$sql = " SELECT tb_residentes.no_control, tb_residentes.email, tb_residentes.ruta_imagen, proyectos.semanas,
tb_residentes.periodo, tb_residentes.ap,  tb_residentes.am,  tb_residentes.nombre, tb_residentes.carrera, 
asignacionproyecto.mensaje, asignacionproyecto.no_controlp, asignacionproyecto.fecha, proyectos.nombrep, proyectos.StatusGeneral, proyectos.idproyecto , tb_residentes.paso10 
FROM tb_residentes , asignacionproyecto , proyectos
WHERE asignacionproyecto.no_controlp=proyectos.no_control 
AND tb_residentes.no_control=asignacionproyecto.no_control AND  tb_residentes.paso10='x' AND tb_residentes.periodo= 'AGO-DIC 2026' AND  carrera LIKE '%" . $carrera . "%'  ";

            $query = $db->execute($sql);
  

    if( mysqli_num_rows($query)  > 0) {


         while($datos=$db->fetch_row($query)){?>
           
            <tr>
               <td><figure class="full-box"><img  src="../ALUMNOS2/imagenperfil/<?php echo $datos['ruta_imagen']; ?>" alt="" width="100" /></figure><br><br></td>
                <td><?php echo $datos['no_control']; ?></td>
                 <td><?php echo $datos['nombre']." ".$datos['ap']." ".$datos['am']; ?></td>
                  
                    
                    
                      <td><?php echo $datos['fecha']; ?></td>

                       <td><?php echo $datos['nombrep']; ?></td>
                       <td><?php echo $datos['StatusGeneral']; ?></td>
                       
                       <td><?php 
                        
               if($datos['StatusGeneral']=='Aceptado'){

               }else{
                echo "<a class='btn btn-success btn-raised btn-xs ' 
                href='../ALUMNOS2/anteproyecto.php?no_control=" .$datos['no_control'] ." & 
                periodo=" .$datos['periodo'] ." & semanas=" .$datos['semanas'] ."'><span class='glyphicon glyphicon-actualizar'></span>Generar Anteproyecto</a>";
                
               }
       

            ?></td>


                
            </tr>
       
<?php  }} ?>
<h4  align="center" >Solicitudes de Residencia Profesional</h4>
<br><br>
  
                  
            </div>
          </table>
        </div>
      </div>
    </div>

 
                
              </div>
              </div>

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
</body>
</html>