<?php
//require('../rsesiones.php');
session_start();

if(!isset($_SESSION["division_id"]) || $_SESSION["division_id"]==null){
	print "<script>window.location='../index.php';</script>";
}
$idGT =$_SESSION["division_id"]


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
				<!---	<img src="../assets/img/loginFont3.jpg" alt="UserIcon"><br><br> -->
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
       
            <div class="container-fluid">
                  <div class="page-header">
                     <h1 class="text-titles"><i class=""></i> <small>Oficios</small></h1>
                   

   <div class="table-responsive">
        <table id="example"  data-order='[[ 5, "asc" ]]' data-page-length='5'
          class="table table-sm table-striped table-hover table-bordered">
         
        <thead>
            <tr>
            <th class="text-center">Número de Oficio</th>
											
											<th class="text-center">Asesor</th>
											
											
											<th class="text-center">Residente</th>
											<th class="text-center">Proyecto</th>

											<th class="text-center">Periodo</th>
											
											<th class="text-center">Fecha de Asignación</th>
											<th class="text-center">Jefe</th>
											<th class="text-center">Cargo</th>
											<th class="text-center">Operaciones</th>
											<th class="text-center">Operaciones</th>
											
                 

               
            </tr>
            </thead>
 
            <?php 



//Si se ha pulsado el botón de buscar

    //Recogemos las claves enviadas
   
  // $carrera = $_POST['carrera'];
    //Conectamos con la base de datos en la que vamos a buscar
  
     //   include '../config.inc.php';
       
        $sql = "SELECT  *  FROM  oficioasesor
        where  idD = '$idGT'
                
                  ";
            $query = $db->execute($sql);
             while($datos=$db->fetch_row($query)){?>
             <tr>
      
            
              
                 <td><?php echo $datos['Numero']; ?></td>
                 
                  <td><?php echo $datos['Asesor']; ?></td>
                  
                  <td><?php echo $datos['alumno']; ?></td>
                   <td><?php echo $datos['Proyecto']; ?></td>
 
 
                   <td><?php echo $datos['Periodo']; ?></td>
                  <td><?php echo $datos['Fecha2']; ?></td>
                  <td><?php echo $datos['Jefe']; ?></td>
                   <td><?php echo $datos['Cargo']; ?></td>
               
                  <td><input type="button"  class='btn btn-danger btn-raised btn-xs'  name="miboton" id="miboton" onclick="eliminaroficio('<?php echo $datos['idoficio'] ?>')"  value="Eliminar"/></td>
                  <td><?php echo "<a class='btn btn-danger btn-raised btn-xs' href='asignacion.php? id=" .$datos['idoficio'] ."'><span class='glyphicon glyphicon-actualizar'></span>Generar Reporte</a>";
 
          
 
             ?></td> 
      
 
             
             </tr>
 
       <?php  } ?>

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
      <script src="../js/main.js"></script>

      -->
      <script>
            $.material.init();
      </script>

     

</body>
</html>
