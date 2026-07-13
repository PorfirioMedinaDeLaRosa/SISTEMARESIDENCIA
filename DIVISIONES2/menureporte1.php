<?php
//require('../rsesiones.php');
session_start();

if(!isset($_SESSION["division_id"]) || $_SESSION["division_id"]==null){
  print "<script>window.location='../index.php';</script>";
}
$idGT =$_SESSION["division_id"]


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



//Si se ha pulsado el botÃģn de buscar

   
    //Conectamos con la base de datos en la que vamos a buscar
    include '../config.inc.php';
        $db=new Conect_MySql();
     //   $db->query('set name utf8');

            $sql = "SELECT  *  FROM  divisiones
                WHERE  idD ='$idGT'               ";
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
        <!--- <img src="../assets/img/loginFont3.jpg" alt="UserIcon"><br><br> -->
          <figcaption class="text-center text-titles"><?php echo 
          $datos['NombreD']; ?> <br><br> <?php echo 
          $datos['CarreraD']; ?></figcaption>
        </figure>
        
      </div>
      <!-- SideBar Menu -->
      <ul class="list-unstyled full-box dashboard-sideBar-Menu">
        <?php
 
  include 'menu.php';
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
       
       
                                        <button class="btn btn-warning" >
                                        <a href="reportesperiodo.php"><i class=""></i>Nueva Consulta</a>
                                        </button>
                                       
      </div>
      
    </div>
     <div class="container-fluid">
      <div class="row">
        <div class="col-xs-12">
          <ul class="nav nav-tabs" style="margin-bottom: 15px;">
              <li> <a href="#list" data-toggle="tab">Evaluación 1</a></li>
               <li> <a href="#listt"   data-toggle="tab">Evaluación 2</a></li>
                
                  <li> <a href="#listfinal"   data-toggle="tab">Evaluación Final</a></li>

                    <li> <a href="#listfinalfinal"   data-toggle="tab">Formato de Evaluación Final</a></li>
              
                    
             
              
          </ul>
          <div id="myTabContent" class="tab-content">
            
        


    
            

              <div class="tab-pane fade" id="list">
              <div class="table-responsive">
                <table class="table table-hover text-center">
                  <thead>
                    <tr>
                <th class="text-center" >No Control</th>
                <th class="text-center" >Nombre</th>
                <th class="text-center" >Carrera</th>
                <th class="text-center" >Calificación</th>
               
              
                <th class="text-center" >Reporte </th>
              
                <th class="text-center" >Status</th>
                <th class="text-center" >Modificaciones</th>
                      
                    </tr>
                  </thead>
                  
<?php


if (isset($_POST['search'])) {
    //Recogemos las claves enviadas
    $keywords = $_POST['periodo'];


      
     
      
       $sql = "SELECT  tb_residentes.no_control,tb_residentes.periodo,  tb_residentes.nombre , tb_residentes.am , tb_residentes.ap, tb_residentes.carrera,     reportesasesor.no_control,    reportesasesor.IdAS, reportesasesor.calificacionR1, reportesasesor.nombre_archivoR1, reportesasesor.statusR1,  reportesasesor.modificacionesR1, divisiones.idD
       FROM tb_residentes, reportesasesor, divisiones

       WHERE tb_residentes.no_control = reportesasesor.no_control AND divisiones.idD = reportesasesor.IdAS AND tb_residentes.periodo LIKE '%" .  $keywords . "%' AND divisiones.idD = '$idGT'




                 "  ;
           $query = $db->execute($sql);
            while($datos=$db->fetch_row($query)){?>
            <tr>
     
            <td><?php echo $datos['no_control']; ?></td>
            <td><?php echo $datos['nombre']." ".$datos['ap']." ".$datos['am']; ?></td>
            <td><?php echo $datos['carrera']; ?></td>
             <td><?php echo $datos['calificacionR1']; ?></td>
              <td><a href="archivosreporteuno.php?id=<?php echo $datos['no_control']?>" ><?php echo $datos['nombre_archivoR1']; ?></a></td>   
               

                <td><?php echo $datos['statusR1']; ?></td>
                 <td><?php echo $datos['modificacionesR1']; ?></td>
              
                
     

            
            </tr>

      <?php  } }  ?>



                </table>
               
              </div>
          </div>    
                 
            


    
<div class="tab-pane fade" id="listt">
              <div class="table-responsive">
                <table class="table table-hover text-center">
                  <thead>
                    <tr>
                <th class="text-center" >No Control</th>
                <th class="text-center" >Nombre</th>
                <th class="text-center" >Carrera</th>
                <th class="text-center" >Calificación</th>
               
              
                <th class="text-center" >Reporte </th>
              
                <th class="text-center" >Status</th>
                <th class="text-center" >Modificaciones</th>
                      
                    </tr>
                  </thead>
                  
<?php



if (isset($_POST['search'])) {
    //Recogemos las claves enviadas
    $keywords = $_POST['periodo'];

      
      
      
       $sql = "SELECT  *  FROM   reportesasesor, tb_residentes, divisiones
                WHERE  tb_residentes.no_control = reportesasesor.no_control AND  divisiones.idD = reportesasesor.IdAS AND tb_residentes.periodo LIKE '%" . $keywords . "%' AND  divisiones.idD='$idGT  ' 
                 ";
           $query = $db->execute($sql);
            while($datos=$db->fetch_row($query)){?>
            <tr>
     
            <td><?php echo $datos['no_control']; ?></td>
            <td><?php echo $datos['nombre']." ".$datos['ap']." ".$datos['am']; ?></td>
            <td><?php echo $datos['carrera']; ?></td>
             <td><?php echo $datos['calificacionR2']; ?></td>
              <td><a href="archivosreportedos.php?id=<?php echo $datos['no_control']?>" ><?php echo $datos['nombre_archivoR2']; ?></a></td>   
               

                <td><?php echo $datos['statusR2']; ?></td>
                 <td><?php echo $datos['modificacionesR2']; ?></td>
              
                
     

            
            </tr>

      <?php  } } ?>



                </table>
               
              </div>

    
            

            
              </div>
               <div class="tab-pane fade" id="list3">
              <div class="table-responsive">
                <table class="table table-hover text-center">
                  <thead>
                    <tr>
                <th class="text-center" >No Control</th>
                <th class="text-center" >Nombre</th>
                <th class="text-center" >Carrera</th>
                <th class="text-center" >Calificación</th>
               
              
                <th class="text-center" >Reporte </th>
              
                <th class="text-center" >Status</th>
                <th class="text-center" >Modificaciones</th>
                      
                    </tr>
                  </thead>
                  
<?php

if (isset($_POST['search'])) {
    //Recogemos las claves enviadas
    $keywords = $_POST['periodo'];


      
     
      
       $sql = "SELECT  *  FROM   reportesasesor, tb_residentes, divisiones
                WHERE  tb_residentes.no_control = reportesasesor.no_control AND  divisiones.idD = reportesasesor.IdAS AND tb_residentes.periodo LIKE '%" . $keywords . "%' AND  divisiones.idD='$idGT  ' 
                 ";
           $query = $db->execute($sql);
            while($datos=$db->fetch_row($query)){?>
            <tr>
     
            <td><?php echo $datos['no_control']; ?></td>
            <td><?php echo $datos['nombre']." ".$datos['ap']." ".$datos['am']; ?></td>
            <td><?php echo $datos['carrera']; ?></td>
             <td><?php echo $datos['calificacionR3']; ?></td>
              <td><a href="archivosreportetres.php?id=<?php echo $datos['no_control']?>" ><?php echo $datos['nombre_archivoR3']; ?></a></td>   
               

                <td><?php echo $datos['statusR3']; ?></td>
                 <td><?php echo $datos['modificacionesR3']; ?></td>
              
                
     

            
            </tr>

      <?php  }} ?>



                </table>
               
              </div>
              </div>
              <div class="tab-pane fade" id="listfinal">
              <div class="table-responsive">
                <table class="table table-hover text-center">
                  <thead>
                    <tr>
                <th class="text-center" >No Control</th>
                <th class="text-center" >Nombre</th>
                <th class="text-center" >Carrera</th>
                <th class="text-center" >Calificación</th>
               
              
                <th class="text-center" >Reporte </th>
              
                <th class="text-center" >Status</th>
                <th class="text-center" >Modificaciones</th>
                      
                    </tr>
                  </thead>
                  
<?php

if (isset($_POST['search'])) {
    //Recogemos las claves enviadas
    $keywords = $_POST['periodo'];


      
    
      
       $sql = "SELECT  *  FROM   reportesasesor, tb_residentes, divisiones
                WHERE  tb_residentes.no_control = reportesasesor.no_control AND  divisiones.idD = reportesasesor.IdAS AND tb_residentes.periodo LIKE '%" . $keywords . "%' AND  divisiones.idD='$idGT  ' 
                 ";
           $query = $db->execute($sql);
            while($datos=$db->fetch_row($query)){?>
            <tr>
     
            <td><?php echo $datos['no_control']; ?></td>
            <td><?php echo $datos['nombre']." ".$datos['ap']." ".$datos['am']; ?></td>
            <td><?php echo $datos['carrera']; ?></td>
             <td><?php echo $datos['calificacionRF']; ?></td>
              <td><a href="archivosreportefinal.php?id=<?php echo $datos['no_control']?>" ><?php echo $datos['nombre_archivoRF']; ?></a></td>   
               

                <td><?php echo $datos['statuss']; ?></td>
                 <td><?php echo $datos['modificaciones']; ?></td>
              
                
     

            
            </tr>

      <?php  } } ?>



                </table>
               
              </div>
              </div>


     <div class="tab-pane fade" id="listfinalfinal">
              <div class="table-responsive">
                <table class="table table-hover text-center">
                  <thead>
                    <tr>
                <th class="text-center" >No Control</th>
                <th class="text-center" >Nombre</th>
                <th class="text-center" >Carrera</th>
                <th class="text-center" >Calificación</th>
               
              
                <th class="text-center" >Reporte </th>
              
                <th class="text-center" >Status</th>
                <th class="text-center" >Modificaciones</th>
                      
                    </tr>
                  </thead>
                  
<?php

if (isset($_POST['search'])) {
    //Recogemos las claves enviadas
    $keywords = $_POST['periodo'];


      
    
      
       $sql = "SELECT  *  FROM   reportesasesor, tb_residentes, divisiones
                WHERE  tb_residentes.no_control = reportesasesor.no_control AND  divisiones.idD = reportesasesor.IdAS AND tb_residentes.periodo LIKE '%" . $keywords . "%' AND  divisiones.idD='$idGT  ' 
                 ";
           $query = $db->execute($sql);
            while($datos=$db->fetch_row($query)){?>
            <tr>
     
            <td><?php echo $datos['no_control']; ?></td>
            <td><?php echo $datos['nombre']." ".$datos['ap']." ".$datos['am']; ?></td>
            <td><?php echo $datos['carrera']; ?></td>
             <td><?php echo $datos['calificacionRFF']; ?></td>
              <td><a href="archivosreportefinalfinal.php?id=<?php echo $datos['no_control']?>" ><?php echo $datos['nombre_archivoRFF']; ?></a></td>   
               

                <td><?php echo $datos['statussFF']; ?></td>
                 <td><?php echo $datos['modificacionesFF']; ?></td>
              
                
     

            
            </tr>

      <?php  } } ?>



                </table>
               
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