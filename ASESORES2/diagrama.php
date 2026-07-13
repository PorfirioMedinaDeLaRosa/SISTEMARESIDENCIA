<?php
//require('../rsesiones.php');
session_start();

if(!isset($_SESSION["asesor_id"]) || $_SESSION["asesor_id"]==null){
	print "<script>window.location='../index.php';</script>";
}
$idGT =$_SESSION["asesor_id"]



?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title>Inicio</title>
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

            $sql = "SELECT  *  FROM  asesor
                WHERE IdAS =$idGT               ";
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
					$datos['NombreAS']; ?> <br><br> <?php echo 
					$datos['CarreraAS']; ?></figcaption>
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
        <h1 class="text-titles"><i class="zmdi zmdi-account zmdi-hc-fw"></i> Alumnos </h1>
       
                                        
      </div>
      
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-xs-12">
          <ul class="nav nav-tabs" style="margin-bottom: 15px;">
              <li> <a href="#list" data-toggle="tab">Actividades Planeadas</a></li>
              
                    
             
              
          </ul>
          <div id="myTabContent" class="tab-content">
            
            


    
            

              <div class="tab-pane fade" id="list">
              <div class="table-responsive">
                <table class="table table-hover text-center">
                  <thead>
                    <tr>
                     
                <th class="text-center" >Actividad </th>
                <th class="text-center" >Descripción</th>
                <th class="text-center" >Fecha Inicio </th>
                <th class="text-center" >Fecha Termino </th>
                <th class="text-center" >Semanas</th>
               
                      
                    </tr>
                  </thead>
                  
<?php



$id =$_GET['no_control'];
      
      
       $sql = "SELECT  *  FROM  actividades , asignacionactividades
                WHERE actividades.no_control= asignacionactividades.no_controla AND    asignacionactividades.no_control ='$id' ORDER BY actividades.fecha  ASC
                 ";
           $query = $db->execute($sql);
            while($datos=$db->fetch_row($query)){?>
            <tr>
     
            <td><?php echo $datos['actividad']; ?></td>
                <td><?php echo $datos['descripcion']; ?></td>
                <td><?php echo $datos['fecha']; ?></td>
                <td><?php echo $datos['fecha_termino']; ?></td>
                <td><?php echo $datos['semanas']; ?></td>
               
               
               
                
            </tr>

      <?php  } ?>


</table>
                
              </div>
              </div>
                </div>
              </div>
                </div>
              </div>




<!------------------------------------------------------- TABLA DEL ASESOR ---------------------------------->

<?php



$id =$_GET['no_control'];
//Si se ha pulsado el botón de buscar

   
    //Conectamos con la base de datos en la que vamos a buscar
    
     //   $db->query('set name utf8');

            $sql2 = "SELECT  *  FROM  proyectos , asignacionproyecto
                WHERE proyectos.no_control= asignacionproyecto.no_controlp AND asignacionproyecto.no_control ='$id' 
                 ";
            $query2 = $db->execute($sql2);
  

  

   // $count_results = mysqli_num_rows($query_searched);

    //Si ha resultados
    if( mysqli_num_rows($query2)  > 0) {

       // echo '<h2>Se han encontrado '.$count_results.' resultados.</h2>';

       // echo '<ul>';
     // while($datos=$db->fetch_row($query))
         if($datos2=$db->fetch_row($query2)){?>
          
       
       
<?php  }} ?>




<?php 
 $var2 =  $datos2['semanas']; 

?>





<!-------------------------------------------------NUMERO DE SEMANAS -------------------->

 <div class="container-fluid">
      <div class="row">
        <div class="col-xs-12">
          <ul class="nav nav-tabs" style="margin-bottom: 15px;">
              <li> <a href="#list2" data-toggle="tab">Actividades Reales</a></li>
              
                    
             
              
          </ul>
          <div id="myTabContent" class="tab-content">
            
            


    
            

              <div class="tab-pane fade" id="list2">
              <div class="table-responsive">
                <table class="table table-hover text-center">
                  <thead>
                    <tr>
                  <th class="text-center" >Operaciones</th>    
                <th class="text-center" >Actividad </th>
                <th class="text-center" >Descripción</th>
                <th class="text-center" >Fecha Inicio </th>
                <th class="text-center" >Fecha Termino </th>
                <th class="text-center" >Semanas</th>
                
                      
                    </tr>
                  </thead>
                  
<?php



$id =$_GET['no_control'];
      
      
       $sql2 = "SELECT  *  FROM  actividades , asignacionactividades
                WHERE actividades.no_control= asignacionactividades.no_controla AND    asignacionactividades.no_control ='$id' ORDER BY actividades.fecha  ASC
                 ";
           $query2 = $db->execute($sql2);
            while($datos2=$db->fetch_row($query2)){?>
            <tr>
       <td><?php if ($var2 == 16) {
               
              





               echo "<a data-toggle='modal' data-target='#Dialog-Modificaciones' 
               data-idactividad='" .$datos2['idactividad'] . "'
              
            class='btn btn-success btn-raised btn-xs '><span class='glyphicon glyphicon-pencil'></span>Asignar Semana</a> "; 

}
if ($var2 == 17) {
               
           
               echo "<a data-toggle='modal' data-target='#Dialog-Modificaciones17'  data-idactividad='" .$datos2['idactividad'] . "'
               
            class='btn btn-success btn-raised btn-xs '><span class='glyphicon glyphicon-pencil'></span>Asignar Semana</a> "; 


}
if ($var2 == 18) {
               
           
               echo "<a data-toggle='modal' data-target='#Dialog-Modificaciones18' 
               data-idactividad='" .$datos2['idactividad'] . "'
              
            class='btn btn-success btn-raised btn-xs '><span class='glyphicon glyphicon-pencil'></span>Asignar Semana</a> "; 

}
if ($var2 == 19) {
               
           
               echo "<a data-toggle='modal' data-target='#Dialog-Modificaciones19'
               data-idactividad='" .$datos2['idactividad'] . "' 
              
            class='btn btn-success btn-raised btn-xs '><span class='glyphicon glyphicon-pencil'></span>Asignar Semana</a> "; 

}
if ($var2 == 20) {
               
           
               echo "<a data-toggle='modal' data-target='#Dialog-Modificaciones20'
               data-idactividad='" .$datos2['idactividad'] . "' 
             
            class='btn btn-success btn-raised btn-xs '><span class='glyphicon glyphicon-pencil'></span>Asignar Semana</a> "; 

}
       
       if ($var2 == 21) {
               
           
               echo "<a data-toggle='modal' data-target='#Dialog-Modificaciones21' 
               data-idactividad='" .$datos2['idactividad'] . "'
              
            class='btn btn-success btn-raised btn-xs '><span class='glyphicon glyphicon-pencil'></span>Asignar Semana</a> "; 

}   
if ($var2 == 22) {
               
           
               echo "<a data-toggle='modal' data-target='#Dialog-Modificaciones22'
               data-idactividad='" .$datos2['idactividad'] . "' 
             
            class='btn btn-success btn-raised btn-xs '><span class='glyphicon glyphicon-pencil'></span>Asignar Semana</a> "; 

}   
if ($var2 == 23) {
               
           
               echo "<a data-toggle='modal' data-target='#Dialog-Modificaciones23' 
               data-idactividad='" .$datos2['idactividad'] . "'
             
            class='btn btn-success btn-raised btn-xs '><span class='glyphicon glyphicon-pencil'></span>Asignar Semana</a> "; 

} 
if ($var2 == 24) {
               
           
               echo "<a data-toggle='modal' data-target='#Dialog-Modificaciones24'
               data-idactividad='" .$datos2['idactividad'] . "' 
              
            class='btn btn-success btn-raised btn-xs '><span class='glyphicon glyphicon-pencil'></span>Asignar Semana</a> "; 

}    ?>
                
                <td><?php echo $datos2['actividad']; ?></td>
                <td><?php echo $datos2['descripcion']; ?></td>
                <td><?php echo $datos2['semana1A']; ?></td>
                <td><?php echo $datos2['semana2A']; ?></td>
                <td><?php echo $datos2['semana3A']; ?></td>
              
                
         </tr>

      <?php  } ?>
</table>
                
              </div>
              </div>
                </div>
              </div>
                </div>
              </div>
 
	</section>

	<!-- Notifications area -->

 
<div class="modal fade" tabindex="-1" role="dialog" id="Dialog-Modificaciones">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Actualizar</h4>
          </div>
          <div class="modal-body">
           <form action="../Actualizacion2/Aactividad16.php"  method="POST">
           <input  id="idactividad" name="idactividad" type="hidden" ></input>  
          
                      
                      <label>FECHA INICIO</label>
                     <input class="form-control" type="DATE"  name="semana1" id="semana1"></>
                      <br>
                       <label>FECHA TERMINO</label>

                      <input class="form-control" type="DATE" name="semana2" id="semana2"></>
                        <br>

                        <label>SEMANAS</label>

                      <input class="form-control" type="text" name="semanas" id="semanas"></>
                        <br>
                    
                    
                       
                      
          </div>
             <p class="text-center">
                          <button href="#!" class="btn btn-info btn-raised btn-sm"><i class="zmdi zmdi-floppy"></i>Modificar Actividad</button>
                        </p>
      
                      
       </div>
  </div>
  </div>
  </div>
</form>




<!---------------------------------------------SEMANAS 17 -------------------------->
<div class="modal fade" tabindex="-1" role="dialog" id="Dialog-Modificaciones17">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Actualizar</h4>
          </div>
          <div class="modal-body">
           <form action="../Actualizacion2/Aactividad17.php"  method="POST">
           <input  id="idactividad" name="idactividad" type="hidden"  ></input>  
          
                       
                     
                      <label>FECHA INICIO</label>
                      <input class="form-control" type="date" name="semana1" id="semana1"></><br>
                       <label>FECHA TERMINO</label>

                      <input class="form-control" type="date" name="semana2" id="semana2"></><br>

                        <label>SEMANAS</label>

                      <input class="form-control" type="text" name="semanas" id="semanas"></>
                        <br>
                    
                      
                      
          </div>
             <p class="text-center">
                          <button href="#!" class="btn btn-info btn-raised btn-sm"><i class="zmdi zmdi-floppy"></i>Modificar Actividad</button>
                        </p>
      
                      
       </div>
  </div>
  </div>
  </div>
</form>


<!-------------------------------------------------SEMANA 18 ------------------------>
<div class="modal fade" tabindex="-1" role="dialog" id="Dialog-Modificaciones18">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Actualizar</h4>
          </div>
          <div class="modal-body">
           <form action="../Actualizacion2/Aactividad18.php"  method="POST">
           <input  id="idactividad" name="idactividad" type="hidden" ></input>  
          
                     
                     
                      <label>FECHA INICIO</label>
                      <input class="form-control" type="date" name="semana1" id="semana1"></><br>
                       <label>FECHA TERMINO</label>

                      <input class="form-control" type="date" name="semana2" id="semana2"></><br>

                        <label>SEMANAS</label>

                      <input class="form-control" type="text" name="semanas" id="semanas"></>
                        <br>
                    
                     
          </div>
             <p class="text-center">
                          <button href="#!" class="btn btn-info btn-raised btn-sm"><i class="zmdi zmdi-floppy"></i>Modificar Actividad</button>
                        </p>
      
                      
       </div>
  </div>
  </div>
  </div>
</form>



<!----------------------------------SEMANA 19---------------------------------->
<div class="modal fade" tabindex="-1" role="dialog" id="Dialog-Modificaciones19">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Actualizar</h4>
          </div>
          <div class="modal-body">
           <form action="../Actualizacion2/Aactividad19.php"  method="POST">
           <input  id="idactividad" name="idactividad" type="hidden" ></input>  
          
                     
                     
                      <label>FECHA INICIO</label>
                      <input class="form-control" type="date" name="semana1" id="semana1"></><br>
                       <label>FECHA TERMINO</label>

                      <input class="form-control" type="date" name="semana2" id="semana2"></><br>

                        <label>SEMANAS</label>

                      <input class="form-control" type="text" name="semanas" id="semanas"></>
                        <br>
                    
                      
                      
          </div>
             <p class="text-center">
                          <button href="#!" class="btn btn-info btn-raised btn-sm"><i class="zmdi zmdi-floppy"></i>Modificar Actividad</button>
                        </p>
      
                      
       </div>
  </div>
  </div>
  </div>
</form>


<!------------------------------------------SEMANA 20 ---------------------------->
<div class="modal fade" tabindex="-1" role="dialog" id="Dialog-Modificaciones20">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Actualizar</h4>
          </div>
          <div class="modal-body">
           <form action="../Actualizacion2/Aactividad20.php"  method="POST">
           <input  id="idactividad" name="idactividad" type="hidden" ></input>  
          
                      
                      <label>FECHA INICIO</label>
                      <input class="form-control" type="date" name="semana1" id="semana1"></><br>
                       <label>FECHA TERMINO</label>

                      <input class="form-control" type="date" name="semana2" id="semana2"></><br>

                        <label>SEMANAS</label>

                      <input class="form-control" type="text" name="semanas" id="semanas"></>
                        <br>
                    
                     
                    
                       
                      
          </div>
             <p class="text-center">
                          <button href="#!" class="btn btn-info btn-raised btn-sm"><i class="zmdi zmdi-floppy"></i>Modificar Actividad</button>
                        </p>
      
                      
       </div>
  </div>
  </div>
  </div>
</form>



<!------------------------------------SEMANA 21 -------------------------->

<div class="modal fade" tabindex="-1" role="dialog" id="Dialog-Modificaciones21">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Actualizar</h4>
          </div>
          <div class="modal-body">
           <form action="../Actualizacion2/Aactividad21.php"  method="POST">
           <input  id="idactividad" name="idactividad" type="hidden" ></input>  
          
                      
                      <label>FECHA INICIO</label>
                      <input class="form-control" type="date" name="semana1" id="semana1"></><br>
                       <label>FECHA TERMINO</label>

                      <input class="form-control" type="date" name="semana2" id="semana2"></><br>

                        <label>SEMANAS</label>

                      <input class="form-control" type="text" name="semanas" id="semanas"></>
                        <br>
                    
                    
                    
                       
                      
          </div>
             <p class="text-center">
                          <button href="#!" class="btn btn-info btn-raised btn-sm"><i class="zmdi zmdi-floppy"></i>Modificar Actividad</button>
                        </p>
      
                      
       </div>
  </div>
  </div>
  </div>
</form>



<!-------------------------------------------SEMANA 22 ---------------------->
<div class="modal fade" tabindex="-1" role="dialog" id="Dialog-Modificaciones22">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Actualizar</h4>
          </div>
          <div class="modal-body">
           <form action="../Actualizacion2/Aactividad22.php"  method="POST">
           <input  id="idactividad" name="idactividad" type="hidden" ></input>  
          
                     
                     
                      <label>FECHA INICIO</label>
                      <input class="form-control" type="date" name="semana1" id="semana1"></>
                      <br>
                       <label>FECHA TERMINO</label>

                      <input class="form-control" type="date" name="semana2" id="semana2"></> <br>

                        <label>SEMANAS</label>

                      <input class="form-control" type="text" name="semanas" id="semanas"></>
                        <br>
                    
                      
                      
          </div>
             <p class="text-center">
                          <button href="#!" class="btn btn-info btn-raised btn-sm"><i class="zmdi zmdi-floppy"></i>Modificar Actividad</button>
                        </p>
      
                      
       </div>
  </div>
  </div>
  </div>
</form>





<!----------------------------------------------SEMANA 23 ---------------------->
<div class="modal fade" tabindex="-1" role="dialog" id="Dialog-Modificaciones23">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Actualizar</h4>
          </div>
          <div class="modal-body">
           <form action="../Actualizacion2/Aactividad23.php"  method="POST">
           <input  id="idactividad" name="idactividad" type="hidden" ></input>  
          
                    
                     
                      <label>FECHA INICIO</label>
                      <input class="form-control" type="date" name="semana1" id="semana1"></>
                       <br>
                       <label>FECHA TERMINO</label>
                       <br>
                         <input class="form-control" type="date" name="semana2" id="semana2"></>

                        <label>SEMANAS</label>

                      <input class="form-control" type="text" name="semanas" id="semanas"></>
                        <br>
                    

                     
                       
                      
          </div>
             <p class="text-center">
                          <button href="#!" class="btn btn-info btn-raised btn-sm"><i class="zmdi zmdi-floppy"></i>Modificar Actividad</button>
                        </p>
      
                      
       </div>
  </div>
  </div>
  </div>
</form>


<!----------------------------------------------SEMANA 24 ---------------------------->

<div class="modal fade" tabindex="-1" role="dialog" id="Dialog-Modificaciones24">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Actualizar</h4>
          </div>
          <div class="modal-body">
           <form action="../Actualizacion2/Aactividad24.php"  method="POST">
           <input  id="idactividad" name="idactividad" type="hidden" ></input>  
          
                      
                  
                      <label>FECHA INICIO</label>
                      <input class="form-control" type="date" name="semana1" id="semana1"></>
                       <br>
                       <label>FECHA TERMINO</label>

                      <input class="form-control" type="date" name="semana2" id="semana2"></>

                        <label>SEMANAS</label>

                      <input class="form-control" type="text" name="semanas" id="semanas"></>
                        <br>
                    
                      
                       
                      
          </div>
             <p class="text-center">
                          <button href="#!" class="btn btn-info btn-raised btn-sm"><i class="zmdi zmdi-floppy"></i>Modificar Actividad</button>
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
      $('#Dialog-Modificaciones').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) // Button that triggered the modal
      var recipient0 = button.data('idactividad')
      var recipient1 = button.data('semana1')
      var recipient2 = button.data('semana2')
      var recipient3 = button.data('semanas')
      
     
     
         
     
      var modal = $(this) 
         modal.find('.modal-body #idactividad').val(recipient0)
         modal.find('.modal-body #semana1').val(recipient1)
       modal.find('.modal-body #semana2').val(recipient2)
      
       modal.find('.modal-body #semanas').val(recipient3)
      
     
     
         
         
    });


      $('#Dialog-Modificaciones17').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) // Button that triggered the modal
      var recipient0 = button.data('idactividad')
       var recipient1 = button.data('semana1')
      var recipient2 = button.data('semana2')
       var recipient3 = button.data('semanas')
     
     
           
     
      var modal = $(this) 
         modal.find('.modal-body #idactividad').val(recipient0)
          modal.find('.modal-body #semana1').val(recipient1)
       modal.find('.modal-body #semana2').val(recipient2)
       modal.find('.modal-body #semanas').val(recipient3)
     
     
     
         
         
    });


      $('#Dialog-Modificaciones18').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) // Button that triggered the modal
      var recipient0 = button.data('idactividad')
      var recipient1 = button.data('semana1')
      var recipient2 = button.data('semana2')
       var recipient3 = button.data('semanas')
     
           
     
      var modal = $(this) 
         modal.find('.modal-body #idactividad').val(recipient0)
       modal.find('.modal-body #semana1').val(recipient1)
       modal.find('.modal-body #semana2').val(recipient2)
      modal.find('.modal-body #semanas').val(recipient3)
     
         
         
    });



      $('#Dialog-Modificaciones19').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) // Button that triggered the modal
      var recipient0 = button.data('idactividad')
       var recipient1 = button.data('semana1')
      var recipient2 = button.data('semana2')
       var recipient3 = button.data('semanas')
     
     
           
     
      var modal = $(this) 
         modal.find('.modal-body #idactividad').val(recipient0)
         modal.find('.modal-body #semana1').val(recipient1)
       modal.find('.modal-body #semana2').val(recipient2)
modal.find('.modal-body #semanas').val(recipient3)
     
  
     
     
         
         
    });


      $('#Dialog-Modificaciones20').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) // Button that triggered the modal
      var recipient0 = button.data('idactividad')
       var recipient1 = button.data('semana1')
      var recipient2 = button.data('semana2')
       var recipient3 = button.data('semanas')
      
  
     
           
     
      var modal = $(this) 
         modal.find('.modal-body #idactividad').val(recipient0)
         modal.find('.modal-body #semana1').val(recipient1)
       modal.find('.modal-body #semana2').val(recipient2)
      modal.find('.modal-body #semanas').val(recipient3)
         
         
    });



      $('#Dialog-Modificaciones21').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) // Button that triggered the modal
      var recipient0 = button.data('idactividad')
       var recipient1 = button.data('semana1')
      var recipient2 = button.data('semana2')
       var recipient3 = button.data('semanas')
     
  
      
           
     
      var modal = $(this) 
         modal.find('.modal-body #idactividad').val(recipient0)
         modal.find('.modal-body #semana1').val(recipient1)
       modal.find('.modal-body #semana2').val(recipient2)
    modal.find('.modal-body #semanas').val(recipient3)
      
     
         
         
    });


      $('#Dialog-Modificaciones22').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) // Button that triggered the modal
      var recipient0 = button.data('idactividad')
   var recipient1 = button.data('semana1')
         var recipient2 = button.data('semana2')
          var recipient3 = button.data('semanas')
          
     
           
     
      var modal = $(this) 
         modal.find('.modal-body #idactividad').val(recipient0)
    modal.find('.modal-body #semana1').val(recipient1)
       modal.find('.modal-body #semana2').val(recipient2)
     modal.find('.modal-body #semanas').val(recipient3) 
     
     
         
         
    });


      $('#Dialog-Modificaciones23').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) // Button that triggered the modal
      var recipient0 = button.data('idactividad')
      var recipient1 = button.data('semana1')
      var recipient2 = button.data('semana2')
       var recipient3 = button.data('semanas')
      
  
      
     
           
     
      var modal = $(this) 
         modal.find('.modal-body #idactividad').val(recipient0)
     modal.find('.modal-body #semana1').val(recipient1)
       modal.find('.modal-body #semana2').val(recipient2)
      modal.find('.modal-body #semanas').val(recipient3)
     
         
         
    });


      $('#Dialog-Modificaciones24').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) // Button that triggered the modal
      var recipient0 = button.data('idactividad')
     var recipient1 = button.data('semana1')
      var recipient2 = button.data('semana2')
       var recipient3 = button.data('semanas')
      
  
      
     
           
     
      var modal = $(this) 
         modal.find('.modal-body #idactividad').val(recipient0)
      modal.find('.modal-body #semana1').val(recipient1)
       modal.find('.modal-body #semana2').val(recipient2)
     modal.find('.modal-body #semanas').val(recipient3)
         
    });
    
  </script>


  <script>       
      $('#Dialog-Modificaciones').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) // Button that triggered the modal
      var recipient0 = button.data('idactividad')
      var recipient1 = button.data('no_control')
     var recipient2 = button.data('actividad')
      var recipient3 = button.data('descripcion')
       var recipient4 = button.data('fecha')
      var recipient5 = button.data('semanas')
      var recipient6 = button.data('fecha2')
       var recipient7 = button.data('semana1')
         var recipient8 = button.data('semana2')
          var recipient3 = button.data('semanas')
          
     
         
     
      var modal = $(this) 
         modal.find('.modal-body #idactividad').val(recipient0)
       modal.find('.modal-body #no_control').val(recipient1)
     modal.find('.modal-body #actividad').val(recipient2)
       modal.find('.modal-body #descripcion').val(recipient3)
        modal.find('.modal-body #fecha').val(recipient4)
       modal.find('.modal-body #semanas').val(recipient5)
           modal.find('.modal-body #fecha2').val(recipient6)
       modal.find('.modal-body #semana1').val(recipient7)
       modal.find('.modal-body #semana2').val(recipient8)
      

     
     
         
         
    });

  </script>
</body>
</html>