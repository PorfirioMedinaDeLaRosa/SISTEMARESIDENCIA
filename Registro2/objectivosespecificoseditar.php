<?php
//require('../rsesiones.php');
session_start();

if(!isset($_SESSION["no_control"]) || $_SESSION["no_control"]==null){
  print "<script>window.location='../index.php';</script>";
}
$idGT =$_SESSION["no_control"]



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



//Si se ha pulsado el botón de buscar

   
    //Conectamos con la base de datos en la que vamos a buscar
    include '../config.inc.php';
        $db=new Conect_MySql();
     //   $db->query('set name utf8');

            $sqll = "SELECT  *  FROM  tb_residentes
                WHERE  no_control ='$idGT'
                 ";
            $queryy = $db->execute($sqll);
  

  

   // $count_results = mysqli_num_rows($query_searched);

    //Si ha resultados
    if( mysqli_num_rows($queryy)  > 0) {

       // echo '<h2>Se han encontrado '.$count_results.' resultados.</h2>';

       // echo '<ul>';
     // while($datos=$db->fetch_row($query))
         if($datoss=$db->fetch_row($queryy)){?>
          
       
<?php  }} ?>
      <div class="full-box dashboard-sideBar-UserInfo">
        <div align="center"><img  src="imagenperfil/<?php echo $datoss['ruta_imagen']; ?>" alt="" width="150" /></div><br><br>
        <figure class="full-box">
       <!--   <img src="../assets/img/loginFont3.jpg" alt="UserIcon"><br><br> ---->
          <figcaption class="text-center text-titles"><?php echo 
          $datoss['nombre']." ".$datoss['ap']." ".$datoss['am']; ?> <br><br> <?php echo 
          $datoss['carrera']; ?></figcaption>
        </figure>
       
      </div>
   <!-- SideBar Menu -->
      <ul class="list-unstyled full-box dashboard-sideBar-Menu">
        <?php
include'menu.php';

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
       
        <a data-toggle="modal" href="#Dialog-Actualizar" class="btn btn-primary btn-sm">Registrar Objetivo</a>
        <form   action="datosempresaeditar.php">
       <div style="text-align:center;">
<input type="submit"  name="submitt" id="submitt" class="btn btn-info btn-raised btn-sm" value="Anterior paso" />
</div>
		</form>
		<form   action="semanaseditar.php">
       <div style="text-align:center;">
<input type="submit"  name="submitt" id="submitt" class="btn btn-info btn-raised btn-sm" value="Siguiente paso" />
</div>
        </form>
      </div>
      
      <p class="text-center">    
                                        
                                       
                                        </p>
                  
            </div>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-xs-12">
          <ul class="nav nav-tabs" style="margin-bottom: 15px;">
              <li > <a href="#list"  data-toggle="tab">Objetivos Especificos</a></li>
              
                    
             
              
          </ul>
          <div id="myTabContent" class="tab-content">
            
            


    
            

              <div class="tab-pane fade" id="list">
              <div class="table-responsive">
                <table class="table table-hover text-center" id="tabla">
                  <thead>
                    <tr>
                     
          
                <th class="text-center" >Objetivo</th>
              
                
              
                <th class="text-center" >Operaciones</th>
                      
                    </tr>
                  </thead>
                  
<?php




      
     
       $sql = "SELECT  *  FROM  objectivose , asignacionobjectivos
                WHERE objectivose.no_control= asignacionobjectivos.no_controlo AND asignacionobjectivos.no_control ='$idGT'    
                 ";
           $query = $db->execute($sql);
            while($datos=$db->fetch_row($query)){?>
            <tr>
     
           
                <td><?php echo $datos['nombre']; ?></td>
              
               <td><?php echo "<a data-toggle='modal' data-target='#Dialog-Modificaciones'  data-idobjectivos='" .$datos['idobjectivos'] ."' data-no_control='" .$datos['no_control'] ."'  data-numero='" .$datos['numeroo'] ."'  data-objectivo='" .$datos['nombre'] ."'  
            class='btn btn-success btn-raised btn-xs '><span class='glyphicon glyphicon-pencil'></span>Actualizar</a> "; 
               
               echo "<a class='btn btn-danger btn-raised btn-xs' href='../Eliminacion2/eliminaobjectivos.php? id=".$datos['idobjectivos']."'><span class='glyphicon glyphicon-actualizar'></span>Eliminar</a>";
                


               
            ?>
            </tr>

      <?php  } ?>



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
        



  <?php 



//Si se ha pulsado el botón de buscar

   
    //Conectamos con la base de datos en la que vamos a buscar
   
       
     //   $db->query('set name utf8');

            $sql = "SELECT  *  FROM  proyectos , asignacionproyecto
                WHERE proyectos.no_control= asignacionproyecto.no_controlp AND asignacionproyecto.no_control ='$idGT' 
                 ";
            $query = $db->execute($sql);
  

  

   // $count_results = mysqli_num_rows($query_searched);

    //Si ha resultados
    if( mysqli_num_rows($query)  > 0) {

       // echo '<h2>Se han encontrado '.$count_results.' resultados.</h2>';

       // echo '<ul>';
     // while($datos=$db->fetch_row($query))
         if($datos2=$db->fetch_row($query)){?>
           
           
       
<?php  }} ?>

<div style="width: 700px;margin: auto;border: 0px solid blue;padding: 50px;">
          
             <style type="text/css">
                textarea {
    width: 100%;
    height: 150px;
    padding: 12px 20px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    background-color: #f8f8f8;
    resize: none;
}
</style>

<label>Observación Objetivos</label>
<textarea  disabled=""  type="text-center"  id="objectivos" name="objectivos"> <?php echo $datos2['objectivos']; ?></textarea>

</div>
    
  </section>


  
<?php 



//Si se ha pulsado el botón de buscar

   
    //Conectamos con la base de datos en la que vamos a buscar
   
     //   $db->query('set name utf8');

            $sqll = "SELECT * FROM asignacionobjectivos  where  no_control = '$idGT'  
                 ";
            $queryy = $db->execute($sqll);
  

  

   // $count_results = mysqli_num_rows($query_searched);

    //Si ha resultados
    if( mysqli_num_rows($queryy)  > 0) {

       // echo '<h2>Se han encontrado '.$count_results.' resultados.</h2>';

       // echo '<ul>';
     // while($datos=$db->fetch_row($query))
         if($datoss=$db->fetch_row($queryy)){?>
           
           
       
<?php  }} ?> 

  <div class="modal fade" tabindex="-1" role="dialog" id="Dialog-Actualizar">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Registrar Objetivo</h4>
          </div>
          <div class="modal-body">
           <form action="../Registro2/objectivose.php" method="POST">
           <input  id="no_controlo" name="no_controlo" type="hidden" value="<?php echo $datoss['no_controlo']; ?>" ></input>   
            
                     
                      <div class="form-group label-floating">
                        <label for="email">Objetivo:</label>
                       <textarea  class="form-control" type="text" id="objectivos" name="objectivos">
                             </textarea>
                      </div>
                     
                      


                        
          </div>
            <p class="text-center">
                          <button href="#!" class="btn btn-info btn-raised btn-sm"><i class="zmdi zmdi-floppy"></i>Registrar Objetivo</button>
                        </p>
                      
        </div>
      </div>
  </div>
</form>

 <div class="modal fade" tabindex="-1" role="dialog" id="Dialog-Modificaciones">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Actualizar</h4>
          </div>
          <div class="modal-body">
           <form action="../Actualizacion2/actualizarobjectivos.php"  method="POST">
           <input  id="idobjectivos" name="idobjectivos" type="hidden" ></input>  
          
                      
                     
                      <div class="form-group label-floating">
                        <label for="email">Objetivo:</label>
                        <textarea  class="form-control" type="text" id="objectivo" name="objectivo">
                             </textarea>
                        </div>
                       
                      
          </div>
             <p class="text-center">
                          <button href="#!" class="btn btn-info btn-raised btn-sm"><i class="zmdi zmdi-floppy"></i>Modificar Objetivo</button>
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
      $('#Dialog-Actualizar').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) // Button that triggered the modal
      var recipient0 = button.data('no_control')
     var recipient1 = button.data('numero')
      var recipient2 = button.data('objectivos')
     
     
     
      
           
     
      var modal = $(this)
     
      modal.find('.modal-body #no_control').val(recipient0)
     modal.find('.modal-body #numero').val(recipient1)
       modal.find('.modal-body #objectivos').val(recipient2)
     
     
         

    });
    
  </script>

<script>       
      $('#Dialog-Modificaciones').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) // Button that triggered the modal
       var recipient0 = button.data('idobjectivos')
     

      var recipient1 = button.data('no_control')
     
      var recipient2 = button.data('numero')
      var recipient3 = button.data('objectivo')
     
     
     
      
           
     
      var modal = $(this) 
        modal.find('.modal-body #idobjectivos').val(recipient0)  
      modal.find('.modal-body #no_control').val(recipient1)
  
       modal.find('.modal-body #numero').val(recipient2)
      modal.find('.modal-body #objectivo').val(recipient3)
     
         
         
    });
    
  </script>

<script type="text/javascript" >

</script>


</body>
</html>
