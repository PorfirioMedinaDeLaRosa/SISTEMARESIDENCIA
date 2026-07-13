<?php
//require('../rsesiones.php');
session_start();
if(!isset($_SESSION["user_id"]) || $_SESSION["user_id"]==null){
  print "<script>window.location='../index.php';</script>";
}
$idA =$_SESSION["user_id"]
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

            $sql = "SELECT  *  FROM  admin
                WHERE  idA ='$idA' 
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
          $datos['NCompletoA']."  ".$datos['CargoA']; ?></figcaption>
                        </figure>
                       
                  </div>
                 <!-- SideBar Menu -->
      <ul class="list-unstyled full-box dashboard-sideBar-Menu">
        <?php

include'menuadmin.php';

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
                     <h1 class="text-titles"><i class=""></i> <small>Alumnos Completos</small></h1>
                    
       
              <div class="table-responsive">
                <table id="example"  data-order='[[ 5, "asc" ]]' data-page-length='5'
          class="table table-sm table-striped table-hover table-bordered">
         
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
                 <th class="text-center" >Promedio</th>
                  <th class="text-center" >Creditos Complementarios</th>
                   <th class="text-center" >Número de creditos acumulados</th>
                   <th class="text-center" >Porcentaje</th>
                   <th class="text-center" >Seguro</th>
                   <th class="text-center" >Número de Seguridad Social</th>
                    <th class="text-center">Residencia Pendiente</th>
                     <th class="text-center">Sitación Residencia</th>
                     <th class="text-center">Acuerdo de privacidad</th>
                      <th class="text-center">Operación</th>
                      <th class="text-center">Operación</th>
                      <th class="text-center">Operación</th>
                      <th class="text-center">Operación</th>
                   
               
            </tr>
            </thead>
 
<?php 



//Si se ha pulsado el botón de buscar
if (isset($_POST['search'])) {
  $carrera = $_POST['carrera'];

    //Recogemos las claves enviadas
    $keywords = $_POST['keywords'];
   
    //Conectamos con la base de datos en la que vamos a buscar
    
     //   $db->query('set name utf8');

            $sql = "SELECT  *  FROM  tb_residentes
                WHERE  carrera LIKE '%" . $carrera . "%'   AND  periodo LIKE '%" . $keywords . "%'  AND creditosc = '5' 
                 ";
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
                <td><?php echo $datos['nombre']; ?></td>
                <td><?php echo $datos['ap']; ?></td>
                <td><?php echo $datos['am']; ?></td>
                <td><?php echo $datos['carrera']; ?></td>
                <td><?php echo $datos['curp']; ?></td>
                <td><?php echo $datos['semestre']; ?></td>
                <td><?php echo $datos['periodo']; ?></td>
                <td><?php echo $datos['promedio']; ?></td>
                <td><?php echo $datos['creditosc']; ?></td>
                <td><?php echo $datos['creditosr']; ?></td>
                <td><?php echo $datos['porcentaje']; ?></td>
                <td><?php echo $datos['seguro']; ?></td>
                <td><?php echo $datos['folios']; ?></td>
                <td><?php echo $datos['folios']; ?></td>
                 <td><input type="radio" name="statusn"  id="statusn"  value="P"<?php echo $datos['situacion'] == "P" ? ' checked="checked"' : '';?>  >Residencia Pendiente</td>
                 <td><input type="radio" name="statusn"  id="statusn"  value="P"<?php echo $datos['privacidad'] == "Acepto" ? ' checked="checked"' : '';?>  >Acepto</td>

                <td><?php echo "<a data-toggle='modal' data-target='#Dialog-A' data-no_control='" .$datos['no_control'] ."' 
            class='btn btn-success btn-raised btn-xs '><span class='glyphicon glyphicon-pencil'></span>Residencia Pendiente</a> ";


              
 

            ?></td>

            <td><?php echo "<a class='btn btn-danger btn-raised btn-xs' href='editaralumno.php? id=" .$datos['no_control'] ."'><span class='glyphicon glyphicon-actualizar'></span>Editar Alumno</a>";

            ?></td>
                  <td><?php echo "<a class='btn btn-danger btn-raised btn-xs' href='bajaproyecto.php? id=" .$datos['no_control'] ."'><span class='glyphicon glyphicon-actualizar'></span>Baja Proyecto</a>";

            ?></td>
 <td><?php echo "<a class='btn btn-danger btn-raised btn-xs' href='../Eliminacion2/eliminaalumno.php? id=" .$datos['no_control'] ."'><span class='glyphicon glyphicon-actualizar'></span>Elimación Alumno</a>";
                
            ?></td>
               
             

             
       
<?php  }}} ?>
  

                   </table>
               
              </div>
              </div>
              </div>
              </div>
              </div>
              </div>
        
           
</section>
      <!-- Notifications area -->

      <div class="modal fade" tabindex="-1" role="dialog" id="Dialog-A">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Status</h4>
          </div>
          <div class="modal-body">
           <form action="../Actualizacion2/actualizarstatusalumnop.php"  method="POST">
           <input  id="no_control" name="no_control" type="hidden" ></input>  
          
                      
                      <div class="form-group label-floating">
                        <label for="email">Status de Residencia:</label>
                       <select  class="form-control" type="text" id="status" name="status">
                       <option value="P">Pendiente</option>
                       <option value="">Activa</option>
                     

                             </select>
                      </div>

                      
                     
                      
                      
          </div>
            <p class="text-center">
                          <button href="#!" class="btn btn-info btn-raised btn-sm"><i class="zmdi zmdi-floppy"></i> Actualizar</button>
                        </p>
                         
                      
       </div>
  </div>
  </div>
  </div>
</form>  


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  <!--datatables-->
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.18/datatables.min.css" />
  <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.18/datatables.min.js"></script>
  <script type="text/javascript" src="datatable.js"></script>

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
 <script>       
      $('#Dialog-A').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) // Button that triggered the modal
      var recipient0 = button.data('no_control')
      
       
     
      var modal = $(this)    
      modal.find('.modal-body #no_control').val(recipient0)
    
         
    });
    
  </script>

</body>
</html>
