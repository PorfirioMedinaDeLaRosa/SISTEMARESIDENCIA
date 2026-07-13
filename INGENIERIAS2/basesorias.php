<?php
//require('../rsesiones.php');
session_start();
if(!isset($_SESSION["user_id"]) || $_SESSION["user_id"]==null){
  print "<script>window.location='../index.php';</script>";
}
$idA =$_SESSION["user_id"]
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
    <div style="width: 500px;margin: auto;border: 1px solid blue;padding: 30px;"><br>
            <h4>Periodo de realización de residencia profesional</h4>
  
     <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" onSubmit="return validarForm(this)"> 
       
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
    <h5> Carrera </h5> 
<select name="carrera" id="carrera" onSubmit="return validarForm(this)" >
        <option value="0">Opcion</option>
        <?php
    include'../conexion.php';         
          $query = $mysqli -> query ("SELECT * FROM carreras ");
                      
          while ($valores = mysqli_fetch_array($query)) {
                        
            echo '<option value="'.$valores[carrera].'">'.$valores[carrera].'</option>';
            

                          
          }
        ?> </select><br><br>

        <h5> Periodo </h5>


     <select name="periodo" id="periodo" onChange="mostrar(this.value);" >
        <option value="0">Opción</option>
        <?php
    include'../conexion.php';         
          $query = $mysqli -> query ("SELECT * FROM periodos  where status ='Activo'");
                      
          while ($valores = mysqli_fetch_array($query)) {
                        
            echo '<option value="'.$valores[periodo].'">'.$valores[periodo].'</option>';
            

                          
          }
        ?> </select><br><br>
  
<input type="submit" name="search" id="search" value="Buscar" hidden=""   >
</form>
      </div><br><br>
		<!-- Content page -->
		<div class="container-fluid">
     
    <div class="container-fluid">
      <div class="row">
        <div class="col-xs-12">
          <ul class="nav nav-tabs" style="margin-bottom: 15px;">
              <li> <a href="#list" data-toggle="tab">Alumnos</a></li>
              
                    
             
              
          </ul>
          <div id="myTabContent" class="tab-content">
            
            


    
            

              <div class="tab-pane fade" id="list">
	
		  <div class="table-responsive">
        <table class="table table-hover text-center" width: 50%;
	height: 300px;>
         
        <thead>
          
            <tr> 
  
              <th class="text-center" >Imagen de Perfil</th>
                <th class="text-center" >No Control</th>
                 <th class="text-center" >Nombre</th>
               
               
               
                 
                     <th class="text-center" >Operaciones</th>
            

               
               
            </tr>
            </thead>
 
<?php 



//Si se ha pulsado el botón de buscar
if (isset($_POST['search'])) {
    //Recogemos las claves enviadas
    $keywords = $_POST['periodo'];


      $keywords2 = $_POST['carrera'];
   
    //Conectamos con la base de datos en la que vamos a buscar
   

  


$sql = " SELECT * FROM tb_residentes , asesoria WHERE tb_residentes.no_control= asesoria.no_controlr 
    AND tb_residentes.periodo LIKE '%" . $keywords . "%' AND tb_residentes.carrera LIKE '%" . $keywords2. "%' ";

     
         


            $query = $db->execute($sql);
  

  

   // $count_results = mysqli_num_rows($query_searched);

    //Si ha resultados
    if( mysqli_num_rows($query)  > 0) {

       // echo '<h2>Se han encontrado '.$count_results.' resultados.</h2>';

       // echo '<ul>';
     // while($datos=$db->fetch_row($query))
         while($datos=$db->fetch_row($query)){?>
           

 
            <tr>
              
                <td><figure class="full-box"><img  src="../ALUMNOS2/imagenperfil/<?php echo $datos['ruta_imagen']; ?>" alt="" width="100" /></figure><br><br></td>
                <td><?php echo $datos['no_control']; ?></td>
                 <td><?php echo $datos['nombre']." ".$datos['ap']." ".$datos['am']; ?></td>
            
                    
                       <td><?php 

             

                       
echo "<a class='btn btn-danger btn-raised btn-xs' href='asesoria.php?no_control=".$datos['no_control']."    '  ><span class='glyphicon glyphicon-actualizar'></span>Asesoria</a>";

                
 

            ?></td>
               
               
                
            </tr>
       
<?php  }}} ?>
  
</table>
                
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
</body>
</html>