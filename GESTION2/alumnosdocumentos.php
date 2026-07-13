<?php
//require('../rsesiones.php');
session_start();

if(!isset($_SESSION["gestion_id"]) || $_SESSION["gestion_id"]==null){
  print "<script>window.location='../index.php';</script>";
}
$idGT =$_SESSION["gestion_id"];

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
 include 'dashboar.php'

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
            <table id="example"  data-order='[[ 5, "asc" ]]' data-page-length='5'
          class="table table-sm table-striped table-hover table-bordered" >
         
        <thead>
            <tr>
                <th class="text-center" >Estudiante</th>
              
               
               
                   
                 <th class="text-center" >Acuerdos | CP | CA</th>
                 <!--
                     <th class="text-center" >Acuerdos</th>
                      <th class="text-center" >Carta de presentación</th>
                       <th class="text-center" >Carta de Aceptacion</th> -->
                       <th class="text-center" >Status</th>
                       <th class="text-center" >Modificaciones</th>
                       
                         <th class="text-center" >Carta de Liberación | Encuesta de salida</th>
                       
                         <th class="text-center" >Status</th>
                       <th class="text-center" >Modificaciones</th>
                        <th class="text-center" >Operaciones</th>


               
            </tr>
            </thead>
 
<?php 

$carrera = $_POST['carrera'];

//Si se ha pulsado el botón de buscar
if (isset($_POST['search'])) {
    //Recogemos las claves enviadas
    $keywords = $_POST['keywords'];
   
    //Conectamos con la base de datos en la que vamos a buscar
    
     //   $db->query('set name utf8');

            


$sql = " SELECT tb_residentes.no_control,  tramitesgestion.tipoES,   tramitesgestion.nombre_archivoES, tramitesgestion.tamanioES, tb_residentes.ap,  tb_residentes.am,  tb_residentes.nombre, tb_residentes.carrera, tb_residentes.semestre, tb_residentes.periodo, tb_residentes.seguro,  tb_residentes.folios, proyectos.nombrep, proyectos.periodop,  proyectos.StatusGeneral , tramitesgestion.nombre_archivoAC, tramitesgestion.nombre_archivoCA,tramitesgestion.nombre_archivoCL,tramitesgestion.nombre_archivoCP, tramitesgestion.status, tramitesgestion.statusCL,tramitesgestion.modificaciones, tramitesgestion.modificacionesCL, asignacionproyecto.no_controlp
FROM tb_residentes ,  tramitesgestion , proyectos, asignacionproyecto 
WHERE asignacionproyecto.no_controlp=proyectos.no_control AND tb_residentes.no_control=asignacionproyecto.no_control AND tb_residentes.no_control = tramitesgestion.no_control AND tb_residentes.carrera LIKE '%" . $carrera . "%'  AND  tb_residentes.periodo LIKE '%" . $keywords . "%'  ";


            $query = $db->execute($sql);
  

  

   // $count_results = mysqli_num_rows($query_searched);

    //Si ha resultados
    if( mysqli_num_rows($query)  > 0) {

       // echo '<h2>Se han encontrado '.$count_results.' resultados.</h2>';

       // echo '<ul>';
     // while($datos=$db->fetch_row($query))
         while($datos=$db->fetch_row($query)){?>
           
            <tr>

                <td><?php echo $datos['no_control']. " ".$datos['nombre']." ".$datos['ap']." ".$datos['am'] ; ?></td>
          
                <td><a href="acuerdos.php?id=<?php echo $datos['no_control']?>" ><?php echo $datos['nombre_archivoAC']; ?></a>
                <a href="cpresentacion.php?id=<?php echo $datos['no_control']?>" ><?php echo $datos['nombre_archivoCP']; ?></a>
                <a href="caceptacion.php?id=<?php echo $datos['no_control']?>" ><?php echo $datos['nombre_archivoCA']; ?></a></td>
               <!--
                <td><a href="cpresentacion.php?id=<?php echo $datos['no_control']?>" ><?php echo $datos['nombre_archivoCP']; ?></a></td>
                 <td><a href="caceptacion.php?id=<?php echo $datos['no_control']?>" ><?php echo $datos['nombre_archivoCA']; ?></a></td>
         --> 
                 <td><?php echo $datos['status']; ?></td>
                <td><?php echo $datos['modificaciones']; ?></td>
                
                
                <td><a href="cliberacion.php?id=<?php echo $datos['no_control']?>" ><?php echo $datos['nombre_archivoCL']; ?></a>
                <a href="encuestasalida.php?id=<?php echo $datos['no_control']?>" ><?php echo $datos['nombre_archivoES']; ?></a></td>
                <td><?php echo $datos['statusCL']; ?></td>
                <td><?php echo $datos['modificacionesCL']; ?></td>
                <td>
  <select class="form-control" onchange="abrirVentana(this)">
    <option value="">-- Selecciona una opción --</option>
    <option value="nuevo_archivo_statusCL.php?no_control=<?= $datos['no_control'] ?>&status=<?= $datos['statusCL'] ?>&modificaciones=<?= $datos['modificacionesCL'] ?>">
      Ver Status CL
    </option>
    <option value="nuevo_archivo_status.php?no_control=<?= $datos['no_control'] ?>&status=<?= $datos['status'] ?>&modificaciones=<?= $datos['modificaciones'] ?>">
      Ver Status
    </option>
  </select>

  <script>
    function abrirVentana(select) {
      const url = select.value;
      if (url) {
        window.open(url, '_blank');
        select.selectedIndex = 0; // Regresa al valor por defecto
      }
    }
  </script>
</td>
 
            </tr>
       
<?php  }}} ?>
  

                

                </table>
               
              </div>
              </div>
        



  




  </section>  


  <!-- Notifications area -->
  



      <div class="modal fade" tabindex="-1" role="dialog" id="Dialog-A">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Observaciones</h4>
          </div>
          <div class="modal-body">
           <form  action="../Actualizacion2/actualizaralumnosdocumentos.php" method="POST">
           <input  id="no_control" name="no_control" type="hidden" ></input>  
          
                      
                      <div class="form-group label-floating">
                        <label for="email">Status:</label>
                       <select  class="form-control" type="text" id="status" name="status">
                       <option>Recibido</option>
                       <option>Aceptado</option>
                        <option>Rechazado</option>

                             </select>
                      </div>
                      <div class="form-group label-floating">
                        <label for="email">Modificaciones:</label>
                       <textarea   class="form-control" name="modificaciones" id="modificaciones"></textarea>
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

<!-- ACTUALIZAR CARTA DE LIBERACION -->



<div class="modal fade" tabindex="-1" role="dialog" id="Dialog-B">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Observaciones Carta Liberación</h4>
          </div>
          <div class="modal-body">
           <form  action="../Actualizacion2/actualizaralumnosdocumentosCL.php" method="POST">
           <input  id="no_control" name="no_control" type="hidden" ></input>  
          
                      
                      <div class="form-group label-floating">
                        <label for="email">Status:</label>
                       <select  class="form-control" type="text" id="status" name="status">
                       <option>Recibido</option>
                       <option>Aceptado</option>
                        <option>Rechazado</option>

                             </select>
                      </div>
                      <div class="form-group label-floating">
                        <label for="email">Modificaciones:</label>
                       <textarea   class="form-control" name="modificaciones" id="modificaciones"></textarea>
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
> 
  <script>
    $.material.init();
  </script>

<script>
  $(document).ready(function() {
      $('#example').DataTable({
          "paging": true,       // Activa la paginación
          "lengthMenu": [5, 10, 25, 50],  // Cantidad de registros por página
          "ordering": true,     // Permite ordenar columnas
          "info": true,         // Muestra información de la tabla
          "searching": true,    // Habilita la barra de búsqueda
          "language": {
              "lengthMenu": "Mostrar _MENU_ registros por página",
              "zeroRecords": "No se encontraron resultados",
              "info": "Mostrando página _PAGE_ de _PAGES_",
              "infoEmpty": "No hay registros disponibles",
              "infoFiltered": "(filtrado de _MAX_ registros en total)",
              "search": "Buscar:",
              "paginate": {
                  "first": "Primero",
                  "last": "Último",
                  "next": "Siguiente",
                  "previous": "Anterior"
              }
          }
      });
  });
</script>



<script>       
      $('#Dialog-A').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) // Button that triggered the modal
      var recipient0 = button.data('no_control')
      var recipient1 = button.data('status')
        var recipient2 = button.data('modificaciones')
      
       
     
      var modal = $(this)    
      modal.find('.modal-body #no_control').val(recipient0)
      modal.find('.modal-body #status').val(recipient1)
        modal.find('.modal-body #modificaciones').val(recipient2)
         
    });
    
  </script>



<script>       
      $('#Dialog-B').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) // Button that triggered the modal
      var recipient0 = button.data('no_control')
      var recipient1 = button.data('status')
        var recipient2 = button.data('modificaciones')
      
       
     
      var modal = $(this)    
      modal.find('.modal-body #no_control').val(recipient0)
      modal.find('.modal-body #status').val(recipient1)
        modal.find('.modal-body #modificaciones').val(recipient2)
         
    });
    
  </script>
  
    
    
 


 
  
</body>
</html>
