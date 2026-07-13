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

            $sql = "SELECT  *  FROM  tb_residentes
                WHERE  no_control ='$idGT'
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
				<!--	<img src="../assets/img/loginFont3.jpg" alt="UserIcon"><br><br> -->
					<figcaption class="text-center text-titles"><?php echo 
          $datos['nombre']." ".$datos['ap']." ".$datos['am']; ?> <br><br> <?php echo 
          $datos['carrera']; ?></figcaption>
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
        <h1 class="text-titles"><i class="zmdi zmdi-account zmdi-hc-fw"></i> Users <small>Alumno</small></h1>
       
            <?php                          
                $idproyecto = $_GET['idproyecto'];
                
                       echo "<a class='btn btn-warning' href='operaciones.php? idproyecto=" .$idproyecto."    '><span class='glyphicon glyphicon-actualizar'></span>REGRESAR</a>";

                      
 


            ?>
      </div>
      
    </div>
		 <div class="container-fluid">
      <div class="row">
        <div class="col-xs-12">
          <ul class="nav nav-tabs" style="margin-bottom: 15px;">
              <li> <a href="#list" data-toggle="tab">Solicitud de residencia profesional</a></li>
              
                    
             
              
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
               
                <th class="text-center" >Operaciones</th>
              
                      
                    </tr>
                  </thead>
                  
<?php




      
    
      
       $sql = "SELECT  *  FROM  tb_residentes
                WHERE no_control='$idGT'
                 ";
           $query = $db->execute($sql);
            while($datos=$db->fetch_row($query)){?>
            <tr>
     
            <td><?php echo $datos['no_control']; ?></td>
                <td><?php echo $datos['nombre']; ?></td>
                <td><?php echo $datos['ap']; ?></td>
                <td><?php echo $datos['am']; ?></td>
                <td><?php echo $datos['carrera']; ?></td>
              
                

                 <td><?php 


             echo "<a data-toggle='modal' data-target='#Dialog-Status' data-no_control='" .$datos['no_control'] ."' 
            class='btn btn-success btn-raised btn-xs '><span class='glyphicon glyphicon-pencil'></span>Liberación Servicio Social</a> "; 

                echo "<a data-toggle='modal' data-target='#Dialog-Status2' data-no_control='" .$datos['no_control'] ."'  
            class='btn btn-success btn-raised btn-xs '><span class='glyphicon glyphicon-pencil'></span>Solicitud de residencia</a> "; 



            echo "<a data-toggle='modal' data-target='#Dialog-Status3' data-no_control='" .$datos['no_control'] ."'  
            class='btn btn-success btn-raised btn-xs '><span class='glyphicon glyphicon-pencil'></span>Anteproyecto</a> "; 



            echo "<a data-toggle='modal' data-target='#Dialog-Status6' data-no_control='" .$datos['no_control'] ."' 

           class='btn btn-success btn-raised btn-xs '><span class='glyphicon glyphicon-pencil'></span>Carta de Presentación</a> ";


            echo "<a data-toggle='modal' data-target='#Dialog-Status5' data-no_control='" .$datos['no_control'] ."' 

            class='btn btn-success btn-raised btn-xs '><span class='glyphicon glyphicon-pencil'></span>Acuerdos</a> "; 


            echo "<a data-toggle='modal' data-target='#Dialog-Status4' data-no_control='" .$datos['no_control'] ."' 

           class='btn btn-success btn-raised btn-xs '><span class='glyphicon glyphicon-pencil'></span>Carta Aceptación</a> ";




             echo "<a data-toggle='modal' data-target='#Dialog-Status44' data-no_control='" .$datos['no_control'] ."' 

           class='btn btn-success btn-raised btn-xs '><span class='glyphicon glyphicon-pencil'></span>Carta de Liberación</a> ";


            



            

            



 

            ?>
            </tr>

      <?php  } ?>



                </table>
                
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
            <h4>Liberacón Servicio Social</h4>
             <div class="modal-body">
            <form method="post" action="../Registro2/serviciosocial.php" enctype="multipart/form-data">
             
                <table>
                 <tr>
                         <div class="form-group label-floating">
                       
              <input  class="form-control" type="hidden" id="no_control" name="no_control">
                             </input>
                      </div>
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


   <div class="modal fade" tabindex="-1" role="dialog" id="Dialog-Status2">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
             <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              </div>
            <div style="width: 500px;margin: auto;border: 1px solid blue;padding: 30px;">
            <h4>Solicitud De Residencia Profesional</h4>
             <div class="modal-body">
            <form method="post" action="../Registro2/solicitud.php" enctype="multipart/form-data">
             
                <table>
                 <tr>
                         <div class="form-group label-floating">
                       
              <input  class="form-control" type="hidden" id="no_control" name="no_control">
                             </input>
                      </div>
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



    <div class="modal fade" tabindex="-1" role="dialog" id="Dialog-Status3">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
             <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              </div>
            <div style="width: 500px;margin: auto;border: 1px solid blue;padding: 30px;">
            <h4>Formato de Anteproyecto</h4>
             <div class="modal-body">
            <form method="post" action="../Registro2/anteproyecto.php" enctype="multipart/form-data">
             
                <table>
                 <tr>
                         <div class="form-group label-floating">
                       
              <input  class="form-control" type="hidden" id="no_control" name="no_control">
                             </input>
                      </div>
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



    <div class="modal fade" tabindex="-1" role="dialog" id="Dialog-Status4">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
             <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              </div>
            <div style="width: 500px;margin: auto;border: 1px solid blue;padding: 30px;">
            <h4>Carta de Aceptación </h4>
             <div class="modal-body">
            <form method="post" action="../Registro2/carta.php" enctype="multipart/form-data">
             
                <table>
                 <tr>
                         <div class="form-group label-floating">
                       
              <input  class="form-control" type="hidden" id="no_control" name="no_control">
                             </input>
                      </div>
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
              

 <div class="modal fade" tabindex="-1" role="dialog" id="Dialog-Status5">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
             <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              </div>
            <div style="width: 500px;margin: auto;border: 1px solid blue;padding: 30px;">
            <h4>Acuerdos</h4>
             <div class="modal-body">
            <form method="post" action="../Registro2/acuerdos.php" enctype="multipart/form-data">
             
                <table>
                 <tr>
                         <div class="form-group label-floating">
                       
              <input  class="form-control" type="hidden" id="no_control" name="no_control">
                             </input>
                      </div>
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

   <div class="modal fade" tabindex="-1" role="dialog" id="Dialog-Status6">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
             <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              </div>
            <div style="width: 500px;margin: auto;border: 1px solid blue;padding: 30px;">
            <h4>Reporte 1 </h4>
             <div class="modal-body">
            <form method="post" action="../Registro2/presentacion.php" enctype="multipart/form-data">
             
                <table>
                 <tr>
                         <div class="form-group label-floating">
                       
              <input  class="form-control" type="hidden" id="no_control" name="no_control">
                             </input>
                      </div>
                    </tr>
                    
                    
                    <br>
                    <br>
                    <tr>
                        Carta de Presentación<td colspan="2"><input type="file" name="archivo"></td>
                    <tr>
                    <br><br>
                        <td><input type="submit" value="subir" name="subir"></td>
                       
                    </tr>
                </table>
                 </form> 
  </div>
  </div>
  </div>
  </div>
   </div>


   <div class="modal fade" tabindex="-1" role="dialog" id="Dialog-Status44">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
             <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              </div>
            <div style="width: 500px;margin: auto;border: 1px solid blue;padding: 30px;">
            <h4>Carta de Liberación</h4>
            <h5>Recuerde que el nombre del documento es el número de control</h5>
             <div class="modal-body">
            <form method="post" action="../Registro2/cartaliberacion.php" enctype="multipart/form-data">
             
                <table>
                 <tr>
                         <div class="form-group label-floating">
                       
              <input  class="form-control" type="hidden" id="no_control" name="no_control" ">
                             </input>
                      </div>
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
      $('#Dialog-Status2').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) // Button that triggered the modal
      var recipient0 = button.data('no_control')
      
     
     
       
     
      var modal = $(this)    
      modal.find('.modal-body #no_control').val(recipient0)
  
     
      
    });
</script>
<script>       
      $('#Dialog-Status3').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) // Button that triggered the modal
      var recipient0 = button.data('no_control')
      
     
     
       
     
      var modal = $(this)    
      modal.find('.modal-body #no_control').val(recipient0)
  
     
      
    });
</script>
<script>       
      $('#Dialog-Status4').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) // Button that triggered the modal
      var recipient0 = button.data('no_control')
      
     
     
       
     
      var modal = $(this)    
      modal.find('.modal-body #no_control').val(recipient0)
  
     
      
    });
</script>

<script>       
      $('#Dialog-Status44').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) // Button that triggered the modal
      var recipient0 = button.data('no_control')
      
     
     
       
     
      var modal = $(this)    
      modal.find('.modal-body #no_control').val(recipient0)
  
     
      
    });
</script>
<script>       
      $('#Dialog-Status5').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) // Button that triggered the modal
      var recipient0 = button.data('no_control')
      
     
     
       
     
      var modal = $(this)    
      modal.find('.modal-body #no_control').val(recipient0)
  
     
      
    });
</script>
<script>       
      $('#Dialog-Status6').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) // Button that triggered the modal
      var recipient0 = button.data('no_control')
      
     
     
       
     
      var modal = $(this)    
      modal.find('.modal-body #no_control').val(recipient0)
  
     
      
    });
</script>
</body>
</html>
