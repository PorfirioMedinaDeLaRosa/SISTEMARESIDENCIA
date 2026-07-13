<?php
//require('../rsesiones.php');
session_start();

if(!isset($_SESSION["no_control"]) || $_SESSION["no_control"]==null){
	print "<script>window.location='../index.php';</script>";
}
$idGT =$_SESSION["no_control"];

?>

<?php 

 //Conectamos con la base de datos en la que vamos a buscar
 include '../config.inc.php';
 $db=new Conect_MySql();

$sqlP = "     SELECT  *  FROM  proyectos , asignacionproyecto, tb_residentes, empresa, asignacionempresa
WHERE proyectos.no_control= asignacionproyecto.no_controlp  
AND empresa.no_control = asignacionempresa.no_controle
AND asignacionempresa.no_control = '$idGT' AND asignacionproyecto.no_control = '$idGT' AND tb_residentes.no_control='$idGT'";

      $queryP = $db->execute($sqlP);
  
  
    if( mysqli_num_rows($queryP)  > 0) {

       
         if($datosP=$db->fetch_row($queryP)){?>
        

       
        <?php  }} ?>
 
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
			<!--		<img src="../assets/img/loginFont3.jpg" alt="UserIcon"> ---->
					<figcaption class="text-center text-titles"><?php echo 
					$datos['nombre']." ".$datos['ap']." ".$datos['am']; ?> <br><br> <?php echo 
					$datos['carrera']; ?></figcaption>
				</figure>
				
			</div>
			<!-- SideBar Menu -->
			<ul class="list-unstyled full-box dashboard-sideBar-Menu">
      <?php
$sql = "     SELECT  *  FROM  proyectos , asignacionproyecto, tb_residentes, empresa, asignacionempresa
WHERE proyectos.no_control= asignacionproyecto.no_controlp  
AND empresa.no_control = asignacionempresa.no_controle
AND asignacionempresa.no_control = '$idGT'
   AND asignacionproyecto.no_control = '$idGT' AND tb_residentes.no_control='$idGT'";

                $query = $db->execute($sql);
  
    if( mysqli_num_rows($query)  > 0) {

        while($datos=$db->fetch_row($query)){?>

         <?php

        if ($datos['StatusGeneral']=='Aceptado' AND $datos['status']=='Aceptado') {

            include'menuA.php';
} else{
    include'menu.php';
}

?>

<?php  }} ?>




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
      
       
                                       <?php 

               
                
                     //  echo "<a class='btn btn-warning' href='operaciones.php? idproyecto=" .$idproyecto."    '><span class='glyphicon glyphicon-actualizar'></span>REGRESAR</a>";

                      
 


            ?>
      </div>
      
    </div>
		 <div class="container-fluid">
      <div class="row">
        <div class="col-xs-12">
         
          <div id="myTabContent" class="tab-content">
            
            


    
            

             
              <div class="table-responsive">
                <table class="table table-hover text-center">
                  <thead>
                    <tr>
                      <th class="text-center" >No Control</th>
                <th class="text-center" >Nombre </th>
                <th class="text-center" >Apellido Paterno</th>
                <th class="text-center" >Apeliido Materno</th>
                <th class="text-center" >Carrera</th>
               
               
                <th class="text-center" >Operaciones</th>
                      
                    </tr>
                  </thead>
                  
<?php




      
      
      
       $sql = "SELECT tb_residentes.no_control, tb_residentes.periodo, tb_residentes.nombre, tb_residentes.ap, tb_residentes.am, tb_residentes.carrera,  
   proyectos.semanas FROM proyectos, asignacionproyecto, tb_residentes 
WHERE proyectos.no_control = asignacionproyecto.no_controlp AND tb_residentes.no_control = asignacionproyecto.no_control   AND asignacionproyecto.no_control ='$idGT';
                 ";
           $query = $db->execute($sql);
            while($datos=$db->fetch_row($query)){?>
            <tr>
     
            <td><?php echo $datos['no_control']; ?></td>
                <td><?php echo $datos['nombre']; ?></td>
                <td><?php echo $datos['ap']; ?></td>
                <td><?php echo $datos['am']; ?></td>
                <td><?php echo $datos['carrera']; ?></td>
                 
              
                

                 <td><?php 
           
           echo "<a class='btn btn-success btn-raised btn-xs ' href='formatoreporte.php?no_control=" .$datos['no_control'] ." & nombre=" .$datos['nombre'] ." ".$datos['ap'] ." ".$datos['am'] ." &  carrera=" .$datos['carrera'] ."  '><span class='glyphicon glyphicon-actualizar'></span>Generar Reporte 1</a>";


          

          



            

            ?>
            </tr>

      <?php  } ?>



                </table>
                
              </div>
              </div>
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

	
</body>
</html>
