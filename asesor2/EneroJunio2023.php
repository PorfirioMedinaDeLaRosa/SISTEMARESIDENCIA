<?php
//require('../rsesiones.php');
session_start();

if(!isset($_SESSION["presidente_id"]) || $_SESSION["presidente_id"]==null){
  print "<script>window.location='../index.php';</script>";
}
$idGT =$_SESSION["presidente_id"]



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

            $sql = "SELECT  *  FROM  presidente
                WHERE  idP ='$idGT'
                 ";
            $query = $db->execute($sql);
  

  

   // $count_results = mysqli_num_rows($query_searched);

    //Si ha resultados
    if( mysqli_num_rows($query)  > 0) {

       // echo '<h2>Se han encontrado '.$count_results.' resultados.</h2>';

       // echo '<ul>';
     // while($datos=$db->fetch_row($query))
         if($datos34=$db->fetch_row($query)){?>
          
       
<?php  }} ?>
                  <div class="full-box dashboard-sideBar-UserInfo">
                    <div align="center"><img  src="imagenperfil/<?php echo $datos34['ruta_imagen']; ?>" alt="" width="150" /></div><br><br>
                        <figure class="full-box">
                            <!---  <img src="../assets/img/loginFont3.jpg" alt="UserIcon"><br><br> -->
                              <figcaption class="text-center text-titles"><?php echo 
          $datos34['NombreP']; ?> <br><br> <?php echo 
          $datos34['CarreraP']; ?></figcaption>
                        </figure>
                       
                  </div>
      <!-- SideBar Menu -->
      <ul class="list-unstyled full-box dashboard-sideBar-Menu">
        <?php

include'menu.php'
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
                   

   <div class="table-responsive">
        <table id="example"  data-order='[[ 5, "asc" ]]' data-page-length='5'
          class="table table-sm table-striped table-hover table-bordered">
         
        <thead>
            <tr>
              <th class="text-center" >Imagen de Perfil</th>
                <th class="text-center" >No Control</th>
                <th class="text-center" >Nombre </th>
               
                
                  <th class="text-center" >Mensaje</th>
                   <th class="text-center" >Fecha</th>
                    <th class="text-center" >Proyecto</th>
                    <th class="text-center" >Status</th>
                 
                   <th class="text-center" >Revisar</th>
                 

               
               
            </tr>
         </thead>


         
 
<?php 


$carrera =   $datos34['CarreraP']; 
//Si se ha pulsado el botón de buscar

    //Conectamos con la base de datos en la que vamos a buscar
  
     //   $db->query('set name utf8');


$sql = " SELECT tb_residentes.no_control, tb_residentes.email, tb_residentes.ruta_imagen, proyectos.semanas,
tb_residentes.periodo, tb_residentes.ap,  tb_residentes.am,  tb_residentes.nombre, tb_residentes.carrera, 
asignacionproyecto.mensaje, asignacionproyecto.no_controlp, asignacionproyecto.fecha, proyectos.nombrep, proyectos.StatusGeneral, proyectos.idproyecto , tb_residentes.paso10 
FROM tb_residentes , asignacionproyecto , proyectos
WHERE asignacionproyecto.no_controlp=proyectos.no_control 
AND tb_residentes.no_control=asignacionproyecto.no_control AND  tb_residentes.paso10='x' AND tb_residentes.periodo= 'ENE-JUN 2023' AND  carrera LIKE '%" . $carrera . "%'  ";

     
         


            $query = $db->execute($sql);
  

  

   // $count_results = mysqli_num_rows($query_searched);

    //Si ha resultados
    if( mysqli_num_rows($query)  > 0) {

       // echo '<h2>Se han encontrado '.$count_results.' resultados.</h2>';

       // echo '<ul>';
     // while($datos=$db->fetch_row($query))
         while($datos=$db->fetch_row($query)){?>
           
            <tr>
               <td><figure class="full-box"><img  src="../ALUMNOS2/imagenperfil/<?php echo $datos['ruta_imagen']; ?>" alt="" width="150" /></figure><br><br></td>
                <td><?php echo $datos['no_control']; ?></td>
                 <td><?php echo $datos['nombre']." ".$datos['ap']." ".$datos['am']; ?></td>
                  
                    
                      <td><?php echo $datos['mensaje']; ?></td>
                      <td><?php echo $datos['fecha']; ?></td>

                       <td><?php echo $datos['nombrep']; ?></td>
                       <td><?php echo $datos['StatusGeneral']; ?></td>
                       
                       <td><?php echo "<a class='btn btn-danger btn-raised btn-xs' href='datosproyecto.php? id=" .$datos['no_control'] ." & carrera=".$datos['carrera'] ." & idproyecto=".$datos['idproyecto'] ." '><span class='glyphicon glyphicon-actualizar'></span>Revisar</a>";
            echo "<a class='btn btn-success btn-raised btn-xs ' 
            target='_blank' href='../ALUMNOS2/anteproyecto.php?no_control=" .$datos['no_control'] ." & 
            periodo=" .$datos['periodo'] ." & semanas=" .$datos['semanas'] ."'><span class='glyphicon glyphicon-actualizar'></span>Generar Anteproyecto</a>";
            

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
  </section>
   <div class="modal fade" tabindex="-1" role="dialog" id="Dialog-Status">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
             <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              </div>
           
           
             <div class="modal-body">
           
             
               <div class="container-fluid">
  <input  id="idproyecto" name="idproyecto" type="text" value="<?php echo $datos['idproyecto']; ?>" ></input>  
      <div class="row">
        <div class="col-xs-12">
          <ul class="nav nav-tabs" style="margin-bottom: 15px;">
              <li> <a href="#list5" data-toggle="tab">Alumnos involucrados en el proyecto</a></li>
            
                    
            
              
          </ul>
          <div id="myTabContent" class="tab-content">
            
            


    
            

              <div class="tab-pane fade" id="list5">
              <div class="table-responsive">
                <table class="table table-hover text-center">
                  <thead>
                    <tr>
                     
                <th class="text-center" >Nombre del alumno</th>
                <th class="text-center" >Carrera</th>
               
                      
                    </tr>
                  </thead>
                  
<?php





  


      
       $sql3 = "SELECT  *  FROM  tb_residentes, asignacionproyecto, proyectos
                WHERE proyectos.no_control = asignacionproyecto.no_controlp  
                AND tb_residentes.no_control = asignacionproyecto.no_control AND proyectos.idproyecto ='$var1' ";
           $query = $db->execute($sql3);
            while($datos=$db->fetch_row($query)){?>
            <tr>
     
            <td><?php echo $datos['nombre']; ?></td>
                <td><?php echo $datos['ap']; ?></td>
                <td><?php echo $datos['am']; ?></td>
                <td><?php echo $datos['carrera']; ?></td>
                
                
             
                


               
          
            </tr>

      <?php  } ?>



                </table>
                <br>
                <br>



</div>
</div>
</div>
</div>
</div>
</div>

              

               

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
      <script src="../js/main.js"></script>
      -->
      <script>
            $.material.init();
      </script>

     
 <script>       
      $('#Dialog-Status').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) // Button that triggered the modal
      var recipient0 = button.data('idproyecto')
      
     
     
       
     
      var modal = $(this)    
      modal.find('.modal-body #idproyecto').val(recipient0)
  
     
      
    });
</script>
</body>
</html>


