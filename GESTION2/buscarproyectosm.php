<?php
//require('../rsesiones.php');
session_start();

if(!isset($_SESSION["gestion_id"]) || $_SESSION["gestion_id"]==null){
  print "<script>window.location='../index.php';</script>";
}
$idGT =$_SESSION["gestion_id"]



?>
<!DOCTYPE html>
 <meta http-equiv="Content-Type" content="text/html; CHARSET=utf8mb4  " />
<html lang="es">
<head>
      <title>Admin</title>
      
      <link rel="stylesheet" href="../css/main.css">
</head>
<body >
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

            $sql = "SELECT  *  FROM  gestion
                WHERE  idGT ='$idGT'
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
          $datos['NombreGT']; ?> <br><br> <?php echo 
          $datos['CargoGT']; ?></figcaption>
                        </figure>
                        
                  </div>
                <!-- SideBar Menu -->
       <ul class="list-unstyled full-box dashboard-sideBar-Menu">
        
        <?php
       include'dashboar.php'
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
                     <h1 class="text-titles"><i class=""></i> <small>Alumnos Registrados</small></h1>
                   

   <div class="table-responsive">
        <table class="table table-hover text-center">
         
        <thead>
            <tr>
                <th class="text-center" >No Control</th>
                <th class="text-center" >Nombre </th>
                <th class="text-center" >Apellido Paterno</th>
                
                <th class="text-center" >Apeliido Materno</th>
                 <th class="text-center" >Carrera</th>
                <th class="text-center" >Curp</th>
                <th class="text-center" >Semestre</th>
                
                <th class="text-center" >Periodo</th>
                <th class="text-center" >Archivo</th>
                

               
            </tr>
            </thead>
 
<?php 



//Si se ha pulsado el botón de buscar
if (isset($_POST['search'])) {
    //Recogemos las claves enviadas
   
   $carrera = $_POST['carrera'];

   $periodo = $_POST['keywords'];
    //Conectamos con la base de datos en la que vamos a buscar
  
     //   $db->query('set name utf8');

            $sql = "SELECT  *  FROM  tb_residentes, modifcarproyecto
                WHERE  tb_residentes.no_control = modifcarproyecto.no_control AND  carrera LIKE '%" . $carrera . "%' AND periodo LIKE '%" . $periodo . "%'   
                 ";
            $query = $db->execute($sql);
  

  $num_total_registros = mysqli_num_rows($query);

   // $count_results = mysqli_num_rows($query_searched);

    //Si ha resultados
    if( mysqli_num_rows($query)  > 0) {

       // echo '<h2>Se han encontrado '.$count_results.' resultados.</h2>';

       // echo '<ul>';
     // while($datos=$db->fetch_row($query))
         while($datos=$db->fetch_row($query)){?>
           
            <tr>

                <td><?php echo $datos['no_control']; ?></td>
                <td><?php echo $datos['nombre']; ?></td>
                <td><?php echo $datos['ap']; ?></td>
                <td><?php echo $datos['am']; ?></td>
                <td><?php echo $datos['carrera']; ?></td>
                <td><?php echo $datos['curp']; ?></td>
                <td><?php echo $datos['semestre']; ?></td>
                <td><?php echo $datos['periodo']; ?></td>
               
               <td><a href="../INGENIERIAS2/proyectosmodificados.php?id=<?php echo $datos['no_control']?>" ><?php echo $datos['nombre_archivo']; ?></a></td>
              
            
               
                
            </tr>
       
<?php  }}} ?>
  

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

     

</body>
</html>
