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
       
            <!-- Content page -->
            <div class="container-fluid">
                  <div class="page-header">
                    <h4>Alumnos de residencia profesional</h4>
                  

   <div class="table-responsive">
        <table id="example"  data-order='[[ 5, "asc" ]]' data-page-length='5'
          class="table table-sm table-striped table-hover table-bordered" >
         
        <thead>
            <tr>
            <th class="text-center" >Operaciones</th>
            	 <th class="text-center" >Imagen de Perfil</th>
                <th class="text-center" >No Control</th>
                <th class="text-center" >Nombre </th>
              
                
               
                  
                    <th class="text-center" >Proyecto</th>
                     <th class="text-center" >Periodo</th>
                      <th class="text-center" >Empresa</th>
                      
                         
                
                    


               
            </tr>
            </thead>
 
<?php 




  $keywords = "AGO-DIC 2022";
  $carrera = $datos['CarreraD'];


$sql = " SELECT tb_residentes.no_control,tb_residentes.ruta_imagen, tb_residentes.periodo, proyectos.semanas, tb_residentes.ap,  tb_residentes.am,  tb_residentes.nombre, tb_residentes.carrera, asignacionproyecto.mensaje, asignacionproyecto.no_controlp, asignacionproyecto.fecha, proyectos.nombrep,  proyectos.StatusGeneral ,   proyectos.periodop, proyectos.fecha , proyectos.DiaInicio , proyectos.MesInicio, proyectos.AnoTermino, proyectos.DiaTermino, proyectos.MesTermino, proyectos.AnoInicio , proyectos.fechatermino, empresa.NombreE ,    empresa.status,   proyectos.idproyecto
FROM tb_residentes , asignacionproyecto , proyectos, empresa, asignacionempresa
WHERE asignacionproyecto.no_controlp=proyectos.no_control
AND  asignacionempresa.no_controle=empresa.no_control AND tb_residentes.no_control= asignacionempresa.no_control

AND tb_residentes.no_control=asignacionproyecto.no_control  AND tb_residentes.paso9 ='x'

 AND tb_residentes.periodo LIKE '%" . $keywords . "%' AND  tb_residentes.carrera  LIKE '%" . $carrera . "%'";

     
         


            $query = $db->execute($sql);
  

  

   // $count_results = mysqli_num_rows($query_searched);

    //Si ha resultados
    if( mysqli_num_rows($query)  > 0) {

       // echo '<h2>Se han encontrado '.$count_results.' resultados.</h2>';

  # code...

       // echo '<ul>';
     // while($datos=$db->fetch_row($query))
         while($datos=$db->fetch_row($query)){?>
           
           
            <tr>
            	 <td  ><?php echo "<a class='btn btn-danger btn-raised btn-xs' href='statusreinscripcion.php?no_control=".$datos['no_control']."  & proyecto=".$datos['nombrep']." & periodo=".$datos['DiaInicio']." de ".$datos['MesInicio']." de ".$datos['AnoInicio']." al ".$datos['DiaTermino']." de ".$datos['MesTermino']." de ".$datos['AnoTermino']." & empresa=".$datos['NombreE']." 
                        & idproyecto=".$datos['idproyecto']."  & nombreproyecto=".$datos['nombrep']." & fecha=".$datos['fecha']."  '  ><span class='glyphicon glyphicon-actualizar'></span>Revisión</a>";

                    

                        

       //               echo "<a class='btn btn-danger btn-raised btn-xs' href='seguimiento.php?no_control=".$datos['no_control']."    '  ><span class='glyphicon glyphicon-actualizar'></span>Revisar Residencia</a>";

                

            ?></td> 
               <td><figure class="full-box"><img  src="../ALUMNOS2/imagenperfil/<?php echo $datos['ruta_imagen']; ?>" alt="" width="100" /></figure><br><br></td>
                <td><?php echo $datos['no_control']; ?></td>
                 <td><?php echo $datos['nombre']." ".$datos['ap']." ".$datos['am']; ?></td>
                
                  
                   
                       <td><?php echo $datos['nombrep']; ?></td>
                       <td><?php echo $datos['DiaInicio']." de ".$datos['MesInicio']." de ".$datos['AnoInicio']." al ".$datos['DiaTermino']." de ".$datos['MesTermino']." de ".$datos['AnoTermino']; ?></td>
                       <td><?php echo $datos['NombreE']; ?></td>

                    
             
            </tr>
       
<?php  }} ?>
  

  
     
              
 

            
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
