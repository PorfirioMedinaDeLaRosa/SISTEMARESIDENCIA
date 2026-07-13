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
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> 
     
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
                    <h4>Alumnos de residencia profesional</h4>
                  

   <div class="table-responsive">
        <table id="example"  data-order='[[ 5, "asc" ]]' data-page-length='5'
          class="table table-sm table-striped table-hover table-bordered" >
         
        <thead>
            <tr>
            <th class="text-center" >No Control</th>
                <th class="text-center" >Nombre </th>
                
                 <th class="text-center" >Carrera</th>
                <th class="text-center" >Semestre</th>
               
                     <th class="text-center" >Acuerdos</th>
                     <th class="text-center" >Fecha limite de entrega </th>
                      <th class="text-center" >Carta de presentación</th>
                      <th class="text-center" >Fecha limite de entrega </th>
                
                    


               
            </tr>
            </thead>
 
<?php 

$carrera = $_POST['carrera'];

//Si se ha pulsado el botón de buscar
if (isset($_POST['search'])) {
    //Recogemos las claves enviadas
    $keywords = $_POST['keywords'];
   
    $sql = " SELECT tb_residentes.no_control, tb_residentes.ap,  tb_residentes.am,  tb_residentes.nombre, tb_residentes.carrera, tb_residentes.semestre,  documentosgestion.fechapresentacion,  documentosgestion.fechaacuerdos,  documentosgestion.nombre_archivo, documentosgestion.nombre_archivo2
    FROM tb_residentes ,  documentosgestion 
    WHERE tb_residentes.no_control = documentosgestion.no_control AND  tb_residentes.carrera LIKE '%" . $carrera . "%'  AND  tb_residentes.periodo LIKE '%" . $keywords . "%'  ";
    
    
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
                    <td><?php echo $datos['nombre']."".$datos['ap']."".$datos['am']; ?></td>
                    
                    <td><?php echo $datos['carrera']; ?></td>
                    <td><?php echo $datos['semestre']; ?></td>
                   
                   
                   
                    <td><a href="archivoacuerdo.php?id=<?php echo $datos['no_control']?>" ><?php echo $datos['nombre_archivo']; ?></a></td>
                    <td><?php echo $datos['fechaacuerdos']; ?></td>
                     <td><a href="archivocarta.php?id=<?php echo $datos['no_control']?>" ><?php echo $datos['nombre_archivo2']; ?></a></td>
                     <td><?php echo $datos['fechapresentacion']; ?></td>
                   
                    
                   
                   
                   
                    
                </tr>
           
    <?php  }}} ?>
            
      </div>

                  </div>
                  
            </div>
           

      <!-- Notifications area -->
     

      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  <!--datatables-->
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.18/datatables.min.css" />
  <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.18/datatables.min.js"></script>
  <script type="text/javascript" src="../INGENIERIAS2/datatable.js"></script>

  <script src="../js/sweetalert2.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/main.js"></script>
  <script src="../js/jquery.mCustomScrollbar.concat.min.js"></script>


      <!--====== Scripts 
      <script src="../js/jquery-3.1.1.min.js"></script>
      <script src="../js/sweetalert2.min.js"></script>
      <script src="../js/bootstrap.min.js"></script>
      <script src="../js/material.min.js"></script>
      <script src="../js/ripples.min.js"></script>
      <script src="../js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="../js/main.js"></script>-->
      <script>
            $.material.init();
      </script>

     

</body>
</html>
