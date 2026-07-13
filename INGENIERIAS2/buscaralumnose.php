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
         <h1 class="text-titles"><i class=""></i> <small>Alumnos Especiales</small></h1>
       
        <button class="btn btn-warning" >
                                        <a href="IINFBDE.php"><i class=""></i>Nueva Consulta</a>
                                        </button>
      </div>
      
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-xs-12">
          <ul class="nav nav-tabs" style="margin-bottom: 15px;">
              <li> <a href="#list" data-toggle="tab">Alumnos Especiales</a></li>
              
                    
             
              
          </ul>
          <div id="myTabContent" class="tab-content">
            
            


    
            

              <div class="tab-pane fade" id="list">
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
                <th class="text-center" >Promedio</th>
                <th class="text-center" >Creditos Complementarios</th>
                <th class="text-center" >Número de creditos acumulados</th>
                <th class="text-center" >Porcentaje</th>
                <th class="text-center" >Seguro</th>
                <th class="text-center" >Número de Seguridad Social</th>
                <th class="text-center" >Status Residencia</th>
              
                <th class="text-center" >Residencia Pendiente</th>
                 <th class="text-center" >Acuerdo de privacidad</th>
                  <th class="text-center" >Archivo</th>
                <th class="text-center" >Operaciones</th>
               
                
                 <th class="text-center" >Operación</th>
                  <th class="text-center" >Operación</th>
                   <th class="text-center" >Operación</th>
               
                      
                    </tr>
                  </thead>
                  
<?php





//Si se ha pulsado el botón de buscar
if (isset($_POST['search'])) {
    //Recogemos las claves enviadas
    $keywords = $_POST['keywords'];
      $carrera = $_POST['carrera'];
      
      
       $sql = "SELECT  *  FROM  tb_residentes
                WHERE  carrera LIKE '%" . $carrera . "%'   AND  periodo LIKE '%" . $keywords . "%'  AND creditosc < '5'  
                 ";
           $query = $db->execute($sql);
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
                <td><?php echo $datos['status']; ?></td>
                 <td><input type="radio" name="statusn"  id="statusn"  value="P"<?php echo $datos['situacion'] == "P" ? ' checked="checked"' : '';?>  >Residencia Pendiente</td>
                  <td><input type="radio" name="statusn"  id="statusn"  value="P"<?php echo $datos['privacidad'] == "Acepto" ? ' checked="checked"' : '';?>  >Acepto</td>
                <td><a href="archivo.php?id=<?php echo $datos['no_control']?>" ><?php echo $datos['nombre_archivo']; ?></a></td>

                 <td><?php echo "<a data-toggle='modal' data-target='#Dialog-Status' data-no_control='" .$datos['no_control'] ."' 
            class='btn btn-success btn-raised btn-xs '><span class='glyphicon glyphicon-pencil'></span>Archivo</a> ";

                

            ?></td>

            <td><?php echo "<a data-toggle='modal' data-target='#Dialog-A' data-no_control='" .$datos['no_control'] ."' 
            class='btn btn-success btn-raised btn-xs '><span class='glyphicon glyphicon-pencil'></span>Residencia Pendiente</a> ";

            
 

            ?></td>
            <td><?php echo "<a class='btn btn-danger btn-raised btn-xs' href='editaralumno.php? id=" .$datos['no_control'] ."'><span class='glyphicon glyphicon-actualizar'></span>Editar Alumno</a>";

            ?></td>
                  <td><?php echo "<a class='btn btn-danger btn-raised btn-xs' href='bajaproyecto.php? id=" .$datos['no_control'] ."'><span class='glyphicon glyphicon-actualizar'></span>Baja Proyecto</a>";

            ?></td>
 <td><?php echo "<a class='btn btn-danger btn-raised btn-xs' href='../Eliminacion2/eliminaalumno.php? id=" .$datos['no_control'] ."'><span class='glyphicon glyphicon-actualizar'></span>Elimación Alumno</a>";
                
            ?></td>
           
            </tr>

      <?php  }} ?>



                </table>
                <ul class="pagination pagination-sm">
                    <li class="disabled"><a href="#!">«</a></li>
                    <li class="active"><a href="#!">1</a></li>
                    <li><a href="#!">2</a></li>
                    <li><a href="#!">3</a></li>
                    <li><a href="#!">4</a></li>
                    <li><a href="#!">5</a></li>
                    <li><a href="#!">»</a></li>
                </ul>
              </div>
              </div>
        



  




  </section>  


  <!-- Notifications area -->
 

  <div class="modal fade" tabindex="-1" role="dialog" id="Dialog-Status">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
             <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              </div>
            <div style="width: 500px;margin: auto;border: 1px solid blue;padding: 30px;">
            <h4>Subir Documento PDF</h4>
             <div class="modal-body">
            <form method="post" action="cambiodatospersonales.php" enctype="multipart/form-data">
             
                <table>
                <tr>
                         
                       
              <input  class="form-control" type="hidden" id="no_control" name="no_control">
                             </input>
                     
                     <tr>
                        <label for="email">Status:</label>
                       <select  class="form-control" type="text" id="status" name="status">
                       <option>Activo</option>
                       <option>Disable</option>

                             </select>
                   
                    </tr>
                    
                    <tr>
                        <td colspan="2"><input type="file" name="archivo"></td>
                    <tr>
                        <td><input type="submit" value="subir" name="subir"></td>
                       
                    </tr>
                </table>
              

                 </form> 
  </div>
  </div>
  </div>
  </div>
   </div>
              


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

  <script>       
      $('#Dialog-Status').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) // Button that triggered the modal
      var recipient0 = button.data('no_control')
      
     
     
       
     
      var modal = $(this)    
      modal.find('.modal-body #no_control').val(recipient0)
  
     
      
    });
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
