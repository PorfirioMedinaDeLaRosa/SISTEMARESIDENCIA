<?php
//require('../rsesiones.php');
session_start();

if(!isset($_SESSION["division_id"]) || $_SESSION["division_id"]==null){
  print "<script>window.location='../index.html';</script>";
}
$idGT =$_SESSION["division_id"]



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
			<!---		<img src="../assets/img/loginFont3.jpg" alt="UserIcon"><br><br> -->
					<figcaption class="text-center text-titles"><?php echo 
          $datos['NombreD']; ?> <br><br> <?php echo 
          $datos['CarreraD']; ?></figcaption>
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
		</nav><br><br>
    <div style="width: 500px;margin: auto;border: 1px solid blue;padding: 30px;">
            <h4>Selecione el alumno a consultar</h4>
         <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" onSubmit="return validarForm(this)"> 
    

         <input  id="carrera" name="carrera" type="hidden"  value="<?php echo $datos['CarreraD']; ?>"></input>  
     <script type="text/javascript">
function mostrar(id) {
    if (id == "0") {
        $("#search").hide();
        
    }

    else{
       $("#search").show();
    }
}
</script>
     

     


         <select name="nombre" id="nombre" onChange="mostrar(this.value);" >
        <option value="0">Opción</option>
        <?php
        $carrera = $datos['CarreraD'];
    include'../conexion.php';       
          $query = $mysqli -> query ("SELECT * FROM tb_residentes where carrera='$carrera' ");
                      
          while ($valores = mysqli_fetch_array($query)) {
                        
            echo '<option value="'.$valores[no_control].'">'.$valores[nombre]." ".$valores[ap]." ".$valores[am].'</option>';
            

                          
          }
        ?> </select>
  
<input type="submit" name="search" id="search" value="Buscar" hidden=""   >
</form>
      </div>
      </div>
      </div>
		<!-- Content page -->
		<div class="container-fluid">
      <div class="page-header">
      <h1 class="text-titles"><i class=""></i> <small>Seguimiento de Residencia Profesional por alumno</small></h1>
       
                                        
      </div>
      
    </div>
   


   <div class="container-fluid">
      <div class="row">
        <div class="col-xs-12">
          <ul class="nav nav-tabs" style="margin-bottom: 15px;">
             <li> <a href="#list" data-toggle="tab">Actividades Planeadas</a></li>
              <li> <a href="#list2" data-toggle="tab">Actividades Reales</a></li>
              <li> <a href="#listR1" data-toggle="tab">Evaluación 1</a></li>
               <li> <a href="#listR2"   data-toggle="tab">Evaluación 2</a></li>
                 
                  <li> <a href="#listfinal"   data-toggle="tab">Evaluación Final</a></li>
              
                    <li> <a href="#listR1A" data-toggle="tab">Reporte 1</a></li>
               <li> <a href="#listR2A"   data-toggle="tab">Reporte 2</a></li>
               
                  <li> <a href="#listfinalA"   data-toggle="tab">Reporte Final</a></li>


                  <li> <a href="#listfinalAA"   data-toggle="tab">Asesorias</a></li>
              
             
              
          </ul>
          <div id="myTabContent" class="tab-content">
            
        
  

              <div class="tab-pane fade" id="list">
              <div   class="table-responsive">
                <table class="table table-hover text-center">
                  <thead>
                    <tr>
                     
                <th  class="text-center"  >Actividad </th>
                <th class="text-center" >Descripción</th>
                <th class="text-center" >Fecha Inicio </th>
                <th class="text-center" >Fecha Termino </th>
                <th class="text-center" >Semanas</th>
               
                      
                    </tr>
                  </thead>
                  
<?php

if (isset($_POST['search'])) {


$id = $_POST['nombre'];
      
      
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

      <?php  }} ?>


</table>
                
              </div>
              </div>

     <div class="tab-pane fade" id="list2">
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

if (isset($_POST['search'])) {

$id = $_POST['nombre'];
      
      
       $sql2 = "SELECT  *  FROM  actividades , asignacionactividades
                WHERE actividades.no_control= asignacionactividades.no_controla AND    asignacionactividades.no_control ='$id' ORDER BY actividades.fecha  ASC
                 ";
           $query2 = $db->execute($sql2);
            while($datos2=$db->fetch_row($query2)){?>
            <tr>
     
                <td><?php echo $datos2['actividad']; ?></td>
                <td><?php echo $datos2['descripcion']; ?></td>
                <td><?php echo $datos2['fecha']; ?></td>
                <td><?php echo $datos2['fecha_termino']; ?></td>
                <td><?php echo $datos2['semanas']; ?></td>
               
                </tr>

      <?php  }} ?>
</table>
                
              </div>
              </div>
            

              <div class="tab-pane fade" id="listR1">
              <div class="table-responsive">
                <table class="table table-hover text-center">
                  <thead>
                    <tr>
                <th class="text-center" >No Control</th>
                <th class="text-center" >Nombre</th>
                <th class="text-center" >Carrera</th>
                <th class="text-center" >Calificación</th>
               
              
                <th class="text-center" >Reporte </th>
              
                <th class="text-center" >Status</th>
                <th class="text-center" >Modificaciones</th>
                      
                    </tr>
                  </thead>
                  
<?php




if (isset($_POST['search'])) {
      
    $id = $_POST['nombre']; 
      
       $sql = "SELECT  tb_residentes.no_control,tb_residentes.periodo,  tb_residentes.nombre , tb_residentes.am , tb_residentes.ap, tb_residentes.carrera,     reportesasesor.no_control,    reportesasesor.IdAS, reportesasesor.calificacionR1, reportesasesor.nombre_archivoR1, reportesasesor.statusR1,  reportesasesor.modificacionesR1
       FROM tb_residentes, reportesasesor

       WHERE tb_residentes.no_control = reportesasesor.no_control AND reportesasesor.no_control='$id'



                 "  ;
           $query = $db->execute($sql);
            while($datos=$db->fetch_row($query)){?>
            <tr>
     
            <td><?php echo $datos['no_control']; ?></td>
            <td><?php echo $datos['nombre']." ".$datos['ap']." ".$datos['am']; ?></td>
            <td><?php echo $datos['carrera']; ?></td>
             <td><?php echo $datos['calificacionR1']; ?></td>
              <td><a href="../ASESORES2/archivosreporteuno.php?id=<?php echo $datos['no_control']?>" ><?php echo $datos['nombre_archivoR1']; ?></a></td>   
               

                <td><?php echo $datos['statusR1']; ?></td>
                 <td><?php echo $datos['modificacionesR1']; ?></td>
              
                
     

            
            </tr>

      <?php  } } ?>



                </table>
               
              </div>
          </div> 


<div class="tab-pane fade" id="listR2">
              <div class="table-responsive">
                <table class="table table-hover text-center">
                  <thead>
                    <tr>
                <th class="text-center" >No Control</th>
                <th class="text-center" >Nombre</th>
                <th class="text-center" >Carrera</th>
                <th class="text-center" >Calificación</th>
               
              
                <th class="text-center" >Reporte </th>
              
                <th class="text-center" >Status</th>
                <th class="text-center" >Modificaciones</th>
                      
                    </tr>
                  </thead>
                  
<?php



if (isset($_POST['search'])) {
      
    $id = $_POST['nombre'];  
      
       $sql = "SELECT  *  FROM   reportesasesor, tb_residentes
                WHERE  tb_residentes.no_control = reportesasesor.no_control AND  tb_residentes.no_control='$id'
                 ";
           $query = $db->execute($sql);
            while($datos=$db->fetch_row($query)){?>
            <tr>
     
            <td><?php echo $datos['no_control']; ?></td>
            <td><?php echo $datos['nombre']." ".$datos['ap']." ".$datos['am']; ?></td>
            <td><?php echo $datos['carrera']; ?></td>
             <td><?php echo $datos['calificacionR2']; ?></td>
              <td><a href="../ASESORES2/archivosreportedos.php?id=<?php echo $datos['no_control']?>" ><?php echo $datos['nombre_archivoR2']; ?></a></td>   
               

                <td><?php echo $datos['statusR2']; ?></td>
                 <td><?php echo $datos['modificacionesR2']; ?></td>
              
                
     

            
            </tr>

      <?php  }}  ?>



                </table>
               
              </div>
               </div>

    

 <div class="tab-pane fade" id="listR3">
              <div class="table-responsive">
                <table class="table table-hover text-center">
                  <thead>
                    <tr>
                <th class="text-center" >No Control</th>
                <th class="text-center" >Nombre</th>
                <th class="text-center" >Carrera</th>
                <th class="text-center" >Calificación</th>
               
              
                <th class="text-center" >Reporte </th>
              
                <th class="text-center" >Status</th>
                <th class="text-center" >Modificaciones</th>
                      
                    </tr>
                  </thead>
                  
<?php

if (isset($_POST['search'])) {

   $id = $_POST['nombre'];   
     
      
       $sql = "SELECT  *  FROM   reportesasesor, tb_residentes 
                WHERE  tb_residentes.no_control = reportesasesor.no_control AND  tb_residentes.no_control='$id'
                 ";
           $query = $db->execute($sql);
            while($datos=$db->fetch_row($query)){?>
            <tr>
     
            <td><?php echo $datos['no_control']; ?></td>
            <td><?php echo $datos['nombre']." ".$datos['ap']." ".$datos['am']; ?></td>
            <td><?php echo $datos['carrera']; ?></td>
             <td><?php echo $datos['calificacionR3']; ?></td>
              <td><a href="../ASESORES2/archivosreportetres.php?id=<?php echo $datos['no_control']?>" ><?php echo $datos['nombre_archivoR3']; ?></a></td>   
               

                <td><?php echo $datos['statusR3']; ?></td>
                 <td><?php echo $datos['modificacionesR3']; ?></td>
              
                
     

            
            </tr>

      <?php  }} ?>



                </table>
               
              </div>
              </div>




                <div class="tab-pane fade" id="listfinal">
              <div class="table-responsive">
                <table class="table table-hover text-center">
                  <thead>
                    <tr>
                <th class="text-center" >No Control</th>
                <th class="text-center" >Nombre</th>
                <th class="text-center" >Carrera</th>
                <th class="text-center" >Calificación</th>
               
              
                <th class="text-center" >Reporte </th>
              
                <th class="text-center" >Status</th>
                <th class="text-center" >Modificaciones</th>
                      
                    </tr>
                  </thead>
                  
<?php



if (isset($_POST['search'])) {
      
   $id = $_POST['nombre']; 
      
       $sql = "SELECT  *  FROM   reportesasesor, tb_residentes
                WHERE  tb_residentes.no_control = reportesasesor.no_control AND  tb_residentes.no_control='$id'
                 ";
           $query = $db->execute($sql);
            while($datos=$db->fetch_row($query)){?>
            <tr>
     
            <td><?php echo $datos['no_control']; ?></td>
            <td><?php echo $datos['nombre']." ".$datos['ap']." ".$datos['am']; ?></td>
            <td><?php echo $datos['carrera']; ?></td>
             <td><?php echo $datos['calificacionRF']; ?></td>
              <td><a href="../ASESORES2/archivosreportefinal.php?id=<?php echo $datos['no_control']?>" ><?php echo $datos['nombre_archivoRF']; ?></a></td>   
               

                <td><?php echo $datos['statuss']; ?></td>
                 <td><?php echo $datos['modificaciones']; ?></td>
              
                
     

            
            </tr>

      <?php  } } ?>



                </table>
               
              </div>
              </div>




            

              <div class="tab-pane fade" id="listR1A">
              <div class="table-responsive">
                <table class="table table-hover text-center">
                  <thead>
                    <tr>
                <th class="text-center" >No Control</th>
                <th class="text-center" >Nombre</th>
                <th class="text-center" >Carrera</th>
                
              
                <th class="text-center" >Reporte </th>
             
                      
                    </tr>
                  </thead>
                  
<?php


if (isset($_POST['search'])) {


      
   $id = $_POST['nombre'];  
      
       $sql = "SELECT  tb_residentes.no_control,tb_residentes.periodo,  tb_residentes.nombre , tb_residentes.am , tb_residentes.ap, tb_residentes.carrera,     reportes.no_control,    reportes.IdAS, reportes.nombre_archivoR1  
       FROM tb_residentes, reportes

       WHERE tb_residentes.no_control = reportes.no_control AND reportes.no_control='$id'



                 "  ;
           $query = $db->execute($sql);
            while($datos=$db->fetch_row($query)){?>
            <tr>
     
            <td><?php echo $datos['no_control']; ?></td>
            <td><?php echo $datos['nombre']." ".$datos['ap']." ".$datos['am']; ?></td>
            <td><?php echo $datos['carrera']; ?></td>
         
              <td><a href="../ASESORES2/archivosreporteunoA.php?id=<?php echo $datos['no_control']?>" ><?php echo $datos['nombre_archivoR1']; ?></a></td>   
               

            
                
     

            
            </tr>

      <?php  } } ?>



                </table>
               
              </div>
          </div> 


<div class="tab-pane fade" id="listR2A">
              <div class="table-responsive">
                <table class="table table-hover text-center">
                  <thead>
                    <tr>
                <th class="text-center" >No Control</th>
                <th class="text-center" >Nombre</th>
                <th class="text-center" >Carrera</th>
             
               
              
                <th class="text-center" >Reporte </th>
              
             
                      
                    </tr>
                  </thead>
                  
<?php


if (isset($_POST['search'])) {

      
   $id = $_POST['nombre'];   
      
       $sql = "SELECT  *  FROM   reportes, tb_residentes
                WHERE  tb_residentes.no_control = reportes.no_control AND  tb_residentes.no_control='$id'
                 ";
           $query = $db->execute($sql);
            while($datos=$db->fetch_row($query)){?>
            <tr>
     
            <td><?php echo $datos['no_control']; ?></td>
            <td><?php echo $datos['nombre']." ".$datos['ap']." ".$datos['am']; ?></td>
            <td><?php echo $datos['carrera']; ?></td>
            
              <td><a href="../ASESORES2/archivosreportedosA.php?id=<?php echo $datos['no_control']?>" ><?php echo $datos['nombre_archivoR2']; ?></a></td>   
               

               
                
     

            
            </tr>

      <?php  } } ?>



                </table>
               
              </div>
               </div>

    

 <div class="tab-pane fade" id="listR3A">
              <div class="table-responsive">
                <table class="table table-hover text-center">
                  <thead>
                    <tr>
                <th class="text-center" >No Control</th>
                <th class="text-center" >Nombre</th>
                <th class="text-center" >Carrera</th>
               
               
              
                <th class="text-center" >Reporte </th>
              
                
                      
                    </tr>
                  </thead>
                  
<?php


if (isset($_POST['search'])) {
      
    $id = $_POST['nombre']; 
      
       $sql = "SELECT  *  FROM   reportes, tb_residentes 
                WHERE  tb_residentes.no_control = reportes.no_control AND  tb_residentes.no_control='$id'
                 ";
           $query = $db->execute($sql);
            while($datos=$db->fetch_row($query)){?>
            <tr>
     
            <td><?php echo $datos['no_control']; ?></td>
            <td><?php echo $datos['nombre']." ".$datos['ap']." ".$datos['am']; ?></td>
            <td><?php echo $datos['carrera']; ?></td>
            
              <td><a href="../ASESORES2/archivosreportetresA.php?id=<?php echo $datos['no_control']?>" ><?php echo $datos['nombre_archivoR3']; ?></a></td>   
               

         
                
     

            
            </tr>

      <?php  } }?>



                </table>
               
              </div>
              </div>




                <div class="tab-pane fade" id="listfinalA">
              <div class="table-responsive">
                <table class="table table-hover text-center">
                  <thead>
                    <tr>
                <th class="text-center" >No Control</th>
                <th class="text-center" >Nombre</th>
                <th class="text-center" >Carrera</th>
              
              
                <th class="text-center" >Reporte </th>
              
               
                      
                    </tr>
                  </thead>
                  
<?php




    if (isset($_POST['search'])) {  
    

    $id = $_POST['nombre'];
      
       $sql = "SELECT  *  FROM   reportes, tb_residentes
                WHERE  tb_residentes.no_control = reportes.no_control AND  tb_residentes.no_control='$id'
                 ";
           $query = $db->execute($sql);
            while($datos=$db->fetch_row($query)){?>
            <tr>
     
            <td><?php echo $datos['no_control']; ?></td>
            <td><?php echo $datos['nombre']." ".$datos['ap']." ".$datos['am']; ?></td>
            <td><?php echo $datos['carrera']; ?></td>
           
              <td><a href="../ASESORES2/archivosreportetresA.php?id=<?php echo $datos['no_control']?>" ><?php echo $datos['nombre_archivoR3']; ?></a></td>   
               

              
              
                
     

            
            </tr>

      <?php  } } ?>



                </table>
               
              </div>
              </div>
        
        
             


 <!-------------------------------------------Reportes -------------------------->
 


<div class="tab-pane fade" id="listfinalAA">
              <div class="table-responsive">
                <table class="table table-hover text-center">
                  <thead>
                    <tr>
                <th class="text-center" >No Control</th>
                <th class="text-center" >Nombre</th>

                <th class="text-center" >No Asesoria</th>

                <th class="text-center" >Operación</th>
                
              
              
              
               
                      
                    </tr>
                  </thead>
                  
<?php

if (isset($_POST['search'])) {

   $id = $_POST['nombre'];   
     
      
       $sql = "SELECT  *  FROM   tb_residentes , asesoria 
                WHERE  tb_residentes.no_control= asesoria.no_controlr  AND  tb_residentes.no_control='$id'
                 ";
           $query = $db->execute($sql);
            while($datos=$db->fetch_row($query)){?>
            <tr>
     
            <td><?php echo $datos['no_control']; ?></td>
            <td><?php echo $datos['nombre']." ".$datos['ap']." ".$datos['am']; ?></td>


              <td><?php echo $datos['numeroa']; ?></td>
           
           
                 <td><?php echo "<a class='btn btn-danger btn-raised btn-xs' href='asesoria.php?no_control=".$datos['no_control']."    '  ><span class='glyphicon glyphicon-actualizar'></span>Asesoria</a>";
 ?></td>
              
                
     

            
            </tr>

      <?php  }} ?>



                </table>
               
              </div>
              </div>









 </div>
               </div>



















	</section>

	<!-- Notifications area -->

 

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


    
  </script>
</body>
</html>