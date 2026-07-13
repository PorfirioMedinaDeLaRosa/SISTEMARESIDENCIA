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
        ITSCS<i class="zmdi zmdi-close btn-menu-dashboard visible-xs"></i>
      </div>
      <!-- SideBar User info -->
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
      <!--    <img src="../assets/img/loginFont3.jpg" alt="UserIcon"><br><br> -->
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
        <h1 class="text-titles"><i class="zmdi zmdi-account zmdi-hc-fw"></i>Proyecto <small>Registro de Proyecto</small></h1>



<?php




//Si se ha pulsado el botón de buscar

   
    //Conectamos con la base de datos en la que vamos a buscar
    
     //   $db->query('set name utf8');

            $sql2 = "SELECT  *  FROM  proyectos , asignacionproyecto
                WHERE proyectos.no_control= asignacionproyecto.no_controlp AND asignacionproyecto.no_control ='$idGT'";
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


if (  $var2 == 16) : ?>

<a data-toggle="modal" href="#Dialog-Actualizar" class="btn btn-primary btn-large">Registrar Actividad</a>

<?php endif ?>



<?php 
 $var2 =  $datos2['semanas']; 


if (  $var2 == 17) : ?>

<a data-toggle="modal" href="#Dialog-Actualizar17" class="btn btn-primary btn-large">Registrar Actividad</a>

<?php endif ?>



<?php 
 $var2 =  $datos2['semanas']; 


if (  $var2 == 18) : ?>

<a data-toggle="modal" href="#Dialog-Actualizar18" class="btn btn-primary btn-large">Registrar Actividad</a>

<?php endif ?>



<?php 
 $var2 =  $datos2['semanas']; 


if (  $var2 == 19) : ?>

<a data-toggle="modal" href="#Dialog-Actualizar19" class="btn btn-primary btn-large">Registrar Actividad</a>

<?php endif ?>



<?php 
 $var2 =  $datos2['semanas']; 


if (  $var2 == 20) : ?>

<a data-toggle="modal" href="#Dialog-Actualizar20" class="btn btn-primary btn-large">Registrar Actividad</a>

<?php endif ?>



<?php 
 $var2 =  $datos2['semanas']; 


if (  $var2 == 21) : ?>

<a data-toggle="modal" href="#Dialog-Actualizar21" class="btn btn-primary btn-large">Registrar Actividad</a>

<?php endif ?>


<?php 
 $var2 =  $datos2['semanas']; 


if (  $var2 == 22) : ?>

<a data-toggle="modal" href="#Dialog-Actualizar22" class="btn btn-primary btn-large">Registrar Actividad</a>

<?php endif ?>

<?php 
 $var2 =  $datos2['semanas']; 


if (  $var2 == 23) : ?>

<a data-toggle="modal" href="#Dialog-Actualizar23" class="btn btn-primary btn-large">Registrar Actividad</a>

<?php endif ?>


<?php 
 $var2 =  $datos2['semanas']; 


if (  $var2 == 24) : ?>

<a data-toggle="modal" href="#Dialog-Actualizar24" class="btn btn-primary btn-large">Registrar Actividad</a>

<?php endif ?>


       




      </div>
      <p class="text-center">    
                                        
                                        <button class="" >
                                        <a href="periodoproyecto.php"><i class=""></i>Siguiente</a>
                                        </button>
                                        </p>
                  
            </div>
    </div>


   












    <div class="container-fluid">
      <div class="row">
        <div class="col-xs-12">
          <ul class="nav nav-tabs" style="margin-bottom: 15px;">
              <li> <a href="#list" data-toggle="tab">Actividades</a></li>
              
                    
             
              
          </ul>
          <div id="myTabContent" class="tab-content">
            
            


    
            

              <div class="tab-pane fade" id="list">
              <div class="table-responsive">
                <table class="table table-hover text-center" id="tabla">
                  <thead>
                    <tr>
                  
                <th class="text-center" >Actividad</th>
                <th class="text-center" >Descripicion</th>
                <th class="text-center" >Fecha Inicio</th>
                <th class="text-center" >Fecha Termino</th>
                <th class="text-center" >Semanas</th>
                <th class="text-center" >Semana 1</th>
                <th class="text-center" >Semana 2</th>
                <th class="text-center" >Semana 3</th>
                <th class="text-center" >Semana 4</th>
                <th class="text-center" >Semana 5</th>
                <th class="text-center" >Semana 6</th>
                <th class="text-center" >Semana 7</th>
                <th class="text-center" >Semana 8</th>
                <th class="text-center" >Semana 9</th>
                <th class="text-center" >Semana 10</th>
                <th class="text-center" >Semana 11</th>
                <th class="text-center" >Semana 12</th>
                <th class="text-center" >Semana 13</th>
                <th class="text-center" >Semana 14</th>
                <th class="text-center" >Semana 15</th>
                <th class="text-center" >Semana 16</th>
                <th class="text-center" >Semana 17</th>
                <th class="text-center" >Semana 18</th>
                <th class="text-center" >Semana 19</th>
                <th class="text-center" >Semana 20</th>
                <th class="text-center" >Semana 21</th>
                <th class="text-center" >Semana 22</th>
                <th class="text-center" >Semana 23</th>
                <th class="text-center" >Semana 24</th>
                <th class="text-center" >Semana 25</th>
                <th class="text-center" >Semana 26</th>

                 
              
                
              
                <th class="text-center" >Operaciones</th>
                      
                    </tr>
                  </thead>
                  
<?php




      
     
      
       $sql = "SELECT  *  FROM  actividades , asignacionactividades
                WHERE actividades.no_control= asignacionactividades.no_controla AND    asignacionactividades.no_control ='$idGT' ORDER BY actividades.fecha  ASC  
                 ";
           $query = $db->execute($sql);
            while($datos=$db->fetch_row($query)){?>

            <tr>
               
                <td><?php echo $datos['actividad']; ?></td>
                <td><?php echo $datos['descripcion']; ?></td>
                <td><?php echo $datos['fecha']; ?></td>
                <td><?php echo $datos['fecha_termino']; ?></td>
                <td><?php echo $datos['semanas']; ?></td>
                <td><?php echo $datos['semana1']; ?></td>
                <td><?php echo $datos['semana2']; ?></td>
                <td><?php echo $datos['semana3']; ?></td>
                <td><?php echo $datos['semana4']; ?></td>
                <td><?php echo $datos['semana5']; ?></td>
                <td><?php echo $datos['semana6']; ?></td>
                <td><?php echo $datos['semana7']; ?></td>
                <td><?php echo $datos['semana8']; ?></td>
                <td><?php echo $datos['semana9']; ?></td>
                <td><?php echo $datos['semana10']; ?></td>
                <td><?php echo $datos['semana11']; ?></td>
                <td><?php echo $datos['semana12']; ?></td>
                <td><?php echo $datos['semana13']; ?></td>
                <td><?php echo $datos['semana14']; ?></td>
                <td><?php echo $datos['semana15']; ?></td>
                <td><?php echo $datos['semana16']; ?></td>
                <td><?php echo $datos['semana17']; ?></td>
                <td><?php echo $datos['semana18']; ?></td>
                <td><?php echo $datos['semana19']; ?></td>
                <td><?php echo $datos['semana20']; ?></td>
                <td><?php echo $datos['semana21']; ?></td>
                <td><?php echo $datos['semana22']; ?></td>
                <td><?php echo $datos['semana23']; ?></td>
                <td><?php echo $datos['semana24']; ?></td>
                <td><?php echo $datos['semana25']; ?></td>
                <td><?php echo $datos['semana26']; ?></td> 
              

  
                
              


              
               <td><?php if ($var2 == 16) {
               
              





               echo "<a data-toggle='modal' data-target='#Dialog-Modificaciones'  data-idactividad='" .$datos['idactividad'] . "' data-actividad='" .$datos['actividad'] ."' data-descripcion='" .$datos['descripcion'] ."' data-fecha='" .$datos['fecha']  ."' data-fecha2='" .$datos['fecha_termino']  ."' data-semanas='" .$datos['semanas'] ."' 
               data-semana1='" .$datos['semana1'] ."'
               data-semana2='" .$datos['semana2'] ."' 
               data-semana3='" .$datos['semana3'] ."'
               data-semana4='" .$datos['semana4'] ."'
               data-semana5='" .$datos['semana5'] ."'
               data-semana6='" .$datos['semana6'] ."'
               data-semana7='" .$datos['semana7'] ."'
               data-semana8='" .$datos['semana8'] ."'
               data-semana9='" .$datos['semana9'] ."'
               data-semana10='" .$datos['semana10'] ."'
               data-semana11='" .$datos['semana11'] ."'
               data-semana12='" .$datos['semana12'] ."'
               data-semana13='" .$datos['semana13'] ."'
               data-semana14='" .$datos['semana14'] ."'
               data-semana15='" .$datos['semana15'] ."'
               data-semana16='" .$datos['semana16'] ."'
               data-semana17='" .$datos['semana17'] ."'
               data-semana18='" .$datos['semana18'] ."'
            class='btn btn-success btn-raised btn-xs '><span class='glyphicon glyphicon-pencil'></span>Actualizar</a> "; 

}


if ($var2 == 17) {
               
              





               echo "<a data-toggle='modal' data-target='#Dialog-Modificaciones17'  data-idactividad='" .$datos['idactividad'] . "' data-actividad='" .$datos['actividad'] ."' data-descripcion='" .$datos['descripcion'] ."' data-fecha='" .$datos['fecha']  ."' data-fecha2='" .$datos['fecha_termino']  ."' data-semanas='" .$datos['semanas'] ."' 
               data-semana1='" .$datos['semana1'] ."' 
               data-semana2='" .$datos['semana2'] ."' 
               data-semana3='" .$datos['semana3'] ."'
               data-semana4='" .$datos['semana4'] ."'
               data-semana5='" .$datos['semana5'] ."'
               data-semana6='" .$datos['semana6'] ."'
               data-semana7='" .$datos['semana7'] ."'
               data-semana8='" .$datos['semana8'] ."'
               data-semana9='" .$datos['semana9'] ."'
               data-semana10='" .$datos['semana10'] ."'
               data-semana11='" .$datos['semana11'] ."'
               data-semana12='" .$datos['semana12'] ."'
               data-semana13='" .$datos['semana13'] ."'
               data-semana14='" .$datos['semana14'] ."'
               data-semana15='" .$datos['semana15'] ."'
               data-semana16='" .$datos['semana16'] ."'
               data-semana17='" .$datos['semana17'] ."'
               data-semana18='" .$datos['semana18'] ."'
               data-semana19='" .$datos['semana19'] ."' 
            class='btn btn-success btn-raised btn-xs '><span class='glyphicon glyphicon-pencil'></span>Actualizar</a> "; 

}

if ($var2 == 18) {
               
              





               echo "<a data-toggle='modal' data-target='#Dialog-Modificaciones18'  data-idactividad='" .$datos['idactividad'] . "' data-actividad='" .$datos['actividad'] ."' data-descripcion='" .$datos['descripcion'] ."' data-fecha='" .$datos['fecha']  ."' data-fecha2='" .$datos['fecha_termino']  ."' data-semanas='" .$datos['semanas'] ."' 
               data-semana1='" .$datos['semana1'] ."' 
               data-semana2='" .$datos['semana2'] ."' 
               data-semana3='" .$datos['semana3'] ."'
               data-semana4='" .$datos['semana4'] ."'
               data-semana5='" .$datos['semana5'] ."'
               data-semana6='" .$datos['semana6'] ."'
               data-semana7='" .$datos['semana7'] ."'
               data-semana8='" .$datos['semana8'] ."'
               data-semana9='" .$datos['semana9'] ."'
               data-semana10='" .$datos['semana10'] ."'
               data-semana11='" .$datos['semana11'] ."'
               data-semana12='" .$datos['semana12'] ."'
               data-semana13='" .$datos['semana13'] ."'
               data-semana14='" .$datos['semana14'] ."'
               data-semana15='" .$datos['semana15'] ."'
               data-semana16='" .$datos['semana16'] ."'
               data-semana17='" .$datos['semana17'] ."'
               data-semana18='" .$datos['semana18'] ."'
               data-semana19='" .$datos['semana19'] ."' 
              data-semana20='" .$datos['semana20'] ."' 
            class='btn btn-success btn-raised btn-xs '><span class='glyphicon glyphicon-pencil'></span>Actualizar</a> "; 

}


if ($var2 == 19) {
               
              





               echo "<a data-toggle='modal' data-target='#Dialog-Modificaciones19'  data-idactividad='" .$datos['idactividad'] . "' data-actividad='" .$datos['actividad'] ."' data-descripcion='" .$datos['descripcion'] ."' data-fecha='" .$datos['fecha']  ."' data-fecha2='" .$datos['fecha_termino']  ."' data-semanas='" .$datos['semanas'] ."' 
                data-semana1='" .$datos['semana1'] ."' 
               data-semana2='" .$datos['semana2'] ."' 
               data-semana3='" .$datos['semana3'] ."'
               data-semana4='" .$datos['semana4'] ."'
               data-semana5='" .$datos['semana5'] ."'
               data-semana6='" .$datos['semana6'] ."'
               data-semana7='" .$datos['semana7'] ."'
               data-semana8='" .$datos['semana8'] ."'
               data-semana9='" .$datos['semana9'] ."'
               data-semana10='" .$datos['semana10'] ."'
               data-semana11='" .$datos['semana11'] ."'
               data-semana12='" .$datos['semana12'] ."'
               data-semana13='" .$datos['semana13'] ."'
               data-semana14='" .$datos['semana14'] ."'
               data-semana15='" .$datos['semana15'] ."'
               data-semana16='" .$datos['semana16'] ."'
               data-semana17='" .$datos['semana17'] ."'
               data-semana18='" .$datos['semana18'] ."'
               data-semana19='" .$datos['semana19'] ."' 
              data-semana20='" .$datos['semana20'] ."' 
                data-semana21='" .$datos['semana21'] ."' 
            class='btn btn-success btn-raised btn-xs '><span class='glyphicon glyphicon-pencil'></span>Actualizar</a> "; 

}


if ($var2 == 20) {
               
              





               echo "<a data-toggle='modal' data-target='#Dialog-Modificaciones20'  data-idactividad='" .$datos['idactividad'] . "' data-actividad='" .$datos['actividad'] ."' data-descripcion='" .$datos['descripcion'] ."' data-fecha='" .$datos['fecha']  ."' data-fecha2='" .$datos['fecha_termino']  ."' data-semanas='" .$datos['semanas'] ."' 
                data-semana1='" .$datos['semana1'] ."' 
               data-semana2='" .$datos['semana2'] ."' 
               data-semana3='" .$datos['semana3'] ."'
               data-semana4='" .$datos['semana4'] ."'
               data-semana5='" .$datos['semana5'] ."'
               data-semana6='" .$datos['semana6'] ."'
               data-semana7='" .$datos['semana7'] ."'
               data-semana8='" .$datos['semana8'] ."'
               data-semana9='" .$datos['semana9'] ."'
               data-semana10='" .$datos['semana10'] ."'
               data-semana11='" .$datos['semana11'] ."'
               data-semana12='" .$datos['semana12'] ."'
               data-semana13='" .$datos['semana13'] ."'
               data-semana14='" .$datos['semana14'] ."'
               data-semana15='" .$datos['semana15'] ."'
               data-semana16='" .$datos['semana16'] ."'
               data-semana17='" .$datos['semana17'] ."'
               data-semana18='" .$datos['semana18'] ."'
               data-semana19='" .$datos['semana19'] ."' 
              data-semana20='" .$datos['semana20'] ."' 
                data-semana21='" .$datos['semana21'] ."' 
                 data-semana22='" .$datos['semana22'] ."' 
            class='btn btn-success btn-raised btn-xs '><span class='glyphicon glyphicon-pencil'></span>Actualizar</a> "; 

}

if ($var2 == 21) {
               
              





               echo "<a data-toggle='modal' data-target='#Dialog-Modificaciones21'  data-idactividad='" .$datos['idactividad'] . "' data-actividad='" .$datos['actividad'] ."' data-descripcion='" .$datos['descripcion'] ."' data-fecha='" .$datos['fecha']  ."' data-fecha2='" .$datos['fecha_termino']  ."' data-semanas='" .$datos['semanas'] ."' 
                data-semana1='" .$datos['semana1'] ."' 
               data-semana2='" .$datos['semana2'] ."' 
               data-semana3='" .$datos['semana3'] ."'
               data-semana4='" .$datos['semana4'] ."'
               data-semana5='" .$datos['semana5'] ."'
               data-semana6='" .$datos['semana6'] ."'
               data-semana7='" .$datos['semana7'] ."'
               data-semana8='" .$datos['semana8'] ."'
               data-semana9='" .$datos['semana9'] ."'
               data-semana10='" .$datos['semana10'] ."'
               data-semana11='" .$datos['semana11'] ."'
               data-semana12='" .$datos['semana12'] ."'
               data-semana13='" .$datos['semana13'] ."'
               data-semana14='" .$datos['semana14'] ."'
               data-semana15='" .$datos['semana15'] ."'
               data-semana16='" .$datos['semana16'] ."'
               data-semana17='" .$datos['semana17'] ."'
               data-semana18='" .$datos['semana18'] ."'
               data-semana19='" .$datos['semana19'] ."' 
              data-semana20='" .$datos['semana20'] ."' 
                data-semana21='" .$datos['semana21'] ."' 
                 data-semana22='" .$datos['semana22'] ."' 
                  data-semana23='" .$datos['semana23'] ."' 
            class='btn btn-success btn-raised btn-xs '><span class='glyphicon glyphicon-pencil'></span>Actualizar</a> "; 

}


if ($var2 == 22) {
               
              





               echo "<a data-toggle='modal' data-target='#Dialog-Modificaciones22'  data-idactividad='" .$datos['idactividad'] . "' data-actividad='" .$datos['actividad'] ."' data-descripcion='" .$datos['descripcion'] ."' data-fecha='" .$datos['fecha']  ."' data-fecha2='" .$datos['fecha_termino']  ."' data-semanas='" .$datos['semanas'] ."' 
                data-semana1='" .$datos['semana1'] ."' 
               data-semana2='" .$datos['semana2'] ."' 
               data-semana3='" .$datos['semana3'] ."'
               data-semana4='" .$datos['semana4'] ."'
               data-semana5='" .$datos['semana5'] ."'
               data-semana6='" .$datos['semana6'] ."'
               data-semana7='" .$datos['semana7'] ."'
               data-semana8='" .$datos['semana8'] ."'
               data-semana9='" .$datos['semana9'] ."'
               data-semana10='" .$datos['semana10'] ."'
               data-semana11='" .$datos['semana11'] ."'
               data-semana12='" .$datos['semana12'] ."'
               data-semana13='" .$datos['semana13'] ."'
               data-semana14='" .$datos['semana14'] ."'
               data-semana15='" .$datos['semana15'] ."'
               data-semana16='" .$datos['semana16'] ."'
               data-semana17='" .$datos['semana17'] ."'
               data-semana18='" .$datos['semana18'] ."'
               data-semana19='" .$datos['semana19'] ."' 
              data-semana20='" .$datos['semana20'] ."' 
                data-semana21='" .$datos['semana21'] ."' 
                 data-semana22='" .$datos['semana22'] ."' 
                  data-semana23='" .$datos['semana23'] ."' 
                   data-semana24='" .$datos['semana24'] ."' 
            class='btn btn-success btn-raised btn-xs '><span class='glyphicon glyphicon-pencil'></span>Actualizar</a> "; 

}

if ($var2 == 23) {
               
              





               echo "<a data-toggle='modal' data-target='#Dialog-Modificaciones23'  data-idactividad='" .$datos['idactividad'] . "' data-actividad='" .$datos['actividad'] ."' data-descripcion='" .$datos['descripcion'] ."' data-fecha='" .$datos['fecha']  ."' data-fecha2='" .$datos['fecha_termino']  ."' data-semanas='" .$datos['semanas'] ."' 
                 data-semana1='" .$datos['semana1'] ."' 
               data-semana2='" .$datos['semana2'] ."' 
               data-semana3='" .$datos['semana3'] ."'
               data-semana4='" .$datos['semana4'] ."'
               data-semana5='" .$datos['semana5'] ."'
               data-semana6='" .$datos['semana6'] ."'
               data-semana7='" .$datos['semana7'] ."'
               data-semana8='" .$datos['semana8'] ."'
               data-semana9='" .$datos['semana9'] ."'
               data-semana10='" .$datos['semana10'] ."'
               data-semana11='" .$datos['semana11'] ."'
               data-semana12='" .$datos['semana12'] ."'
               data-semana13='" .$datos['semana13'] ."'
               data-semana14='" .$datos['semana14'] ."'
               data-semana15='" .$datos['semana15'] ."'
               data-semana16='" .$datos['semana16'] ."'
               data-semana17='" .$datos['semana17'] ."'
               data-semana18='" .$datos['semana18'] ."'
               data-semana19='" .$datos['semana19'] ."' 
              data-semana20='" .$datos['semana20'] ."' 
                data-semana21='" .$datos['semana21'] ."' 
                 data-semana22='" .$datos['semana22'] ."' 
                  data-semana23='" .$datos['semana23'] ."' 
                   data-semana24='" .$datos['semana24'] ."'
                    data-semana25='" .$datos['semana25'] ."'
            class='btn btn-success btn-raised btn-xs '><span class='glyphicon glyphicon-pencil'></span>Actualizar</a> "; 

}


if ($var2 == 24) {
               
              





               echo "<a data-toggle='modal' data-target='#Dialog-Modificaciones24'  data-idactividad='" .$datos['idactividad'] . "' data-actividad='" .$datos['actividad'] ."' data-descripcion='" .$datos['descripcion'] ."' data-fecha='" .$datos['fecha']  ."' data-fecha2='" .$datos['fecha_termino']  ."' data-semanas='" .$datos['semanas'] ."' 
                data-semana1='" .$datos['semana1'] ."' 
               data-semana2='" .$datos['semana2'] ."' 
               data-semana3='" .$datos['semana3'] ."'
               data-semana4='" .$datos['semana4'] ."'
               data-semana5='" .$datos['semana5'] ."'
               data-semana6='" .$datos['semana6'] ."'
               data-semana7='" .$datos['semana7'] ."'
               data-semana8='" .$datos['semana8'] ."'
               data-semana9='" .$datos['semana9'] ."'
               data-semana10='" .$datos['semana10'] ."'
               data-semana11='" .$datos['semana11'] ."'
               data-semana12='" .$datos['semana12'] ."'
               data-semana13='" .$datos['semana13'] ."'
               data-semana14='" .$datos['semana14'] ."'
               data-semana15='" .$datos['semana15'] ."'
               data-semana16='" .$datos['semana16'] ."'
               data-semana17='" .$datos['semana17'] ."'
               data-semana18='" .$datos['semana18'] ."'
               data-semana19='" .$datos['semana19'] ."' 
              data-semana20='" .$datos['semana20'] ."' 
                data-semana21='" .$datos['semana21'] ."' 
                 data-semana22='" .$datos['semana22'] ."' 
                  data-semana23='" .$datos['semana23'] ."' 
                   data-semana24='" .$datos['semana24'] ."'
                    data-semana25='" .$datos['semana25'] ."'
                     data-semana26='" .$datos['semana26'] ."'
            class='btn btn-success btn-raised btn-xs '><span class='glyphicon glyphicon-pencil'></span>Actualizar</a> "; 

}



            echo "<a class='btn btn-danger btn-raised btn-xs' href='../Eliminacion2/eliminaactividad2.php? id=".$datos['idactividad']."'><span class='glyphicon glyphicon-actualizar'></span>Eliminar</a>";
               
                


               
           
            ?></tr>

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
        



  




    
  </section>


  <!-- Notifications area -->
  
 <?php 



//Si se ha pulsado el botón de buscar

   
    //Conectamos con la base de datos en la que vamos a buscar
   
     //   $db->query('set name utf8');

            $sqll = "SELECT * FROM asignacionactividades  where  no_control = '$idGT'  
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
            <h4 class="modal-title">Registrar Actividad</h4>
          </div>
          <div class="modal-body">
              
           <form action="../Registro2/regis.php" method="POST">
                
             <input  id="no_controla" name="no_controla" type="hidden"  value="<?php echo $datoss['no_controla']; ?>"></input>     
                      
                   
                      <div class="form-group label-floating">
                        <label for="email">Actividad:</label>
                       <input  class="form-control" type="text" id="actividad" name="actividad">
                             </input>
                      </div>
                      
                      <div class="form-group label-floating">
                        <label for="email">Descripcion:</label>
                       <textarea  class="form-control" type="text" id="descripcion" name="descripcion">
                             </textarea>
                      </div>
                       <div class="form-group label-floating">
                        <label for="email">Fecha Inicio:</label>
                       <input  class="form-control" type="date" id="fecha" name="fecha">
                             </input>
                      </div>

                      <div class="form-group label-floating">
                        <label for="email">Fecha Termino:</label>
                       <input  class="form-control" type="date" id="fecha2" name="fecha2">
                             </input>
                      </div>
                      
                      <div class="form-group label-floating">
                        <label for="email">Semanas:</label>
                       <input  class="form-control" type="number" id="semanas" name="semanas">
                             </input>
                      </div>
                      <div class="form-group label-floating">
                        <label for="email">Semanas:</label>
                        <label for="email">Dede de poner una x minuscula, en el campo para selecionar la semana de la actividad:</label>
                        <br>
                      <label for="email">Semana 1:</label>
                      <input class="form-control" type="text"  name="semana1" id="semana1"></>
                      <br>
                      <label for="email">Semana 2:</label>
                      <input class="form-control"  type="text" name="semana2" id="semana2"></>
                       <br>
                       <label for="email">Semana 3:</label>
                      <input  class="form-control" type="text"  name="semana3" id="semana3"></>
                       <br>
                       <label for="email">Semana 4:</label>
                      <input class="form-control" type="text"  name="semana4" id="semana4"></>
                       <br>
                       <label for="email">Semana 5:</label>
                      <input class="form-control" type="text"  name="semana5" id="semana5"></>
                       <br>
                       <label for="email">Semana 6:</label>
                      <input class="form-control" type="text"  name="semana6" id="semana6"></>
                       <br>
                       <label for="email">Semana 7:</label>
                      <input class="form-control" type="text"  name="semana7" id="semana7"></>
                       <br>
                       <label for="email">Semana 8:</label>
                      <input class="form-control" type="text"  name="semana8" id="semana8"></>
                       <br>
                       <label for="email">Semana 9:</label>
                      <input class="form-control" type="text"  name="semana9" id="semana9"></>
                       <br>
                       <label for="email">Semana 10:</label>
                      <input class="form-control" type="text"  name="semana10" id="semana10"></>
                       <br>
                       <label for="email">Semana 11:</label>
                      <input class="form-control" type="text"  name="semana11" id="semana11"></>
                       <br>
                       <label for="email">Semana 12:</label>
                      <input class="form-control" type="text"  name="semana12" id="semana12"></>
                       <br>
                       <label for="email">Semana 13:</label>                     
                      <input class="form-control" type="text"  name="semana13" id="semana13"></>
                       <br>
                       <label for="email">Semana 14:</label>
                      <input class="form-control" type="text"  name="semana14" id="semana14"></>
                       <br>
                       <label for="email">Semana 15:</label>
                      <input class="form-control" type="text"  name="semana15" id="semana15"></>
                       <br>
                       <label for="email">Semana 16:</label>
                      <input class="form-control" type="text"  name="semana16" id="semana16"></>
                       <br>
                       <label for="email">Semana 17:</label>
                      <input class="form-control" type="text"  name="semana17" id="semana17"></>
                       <br>
                       <label for="email">Semana 18:</label>
                      <input class="form-control" type="text"  name="semana18" id="semana18"></>
                       <br>
                      </div>
                     
                      


                        
          </div>
            <p class="text-center">
                          <button href="#!" class="btn btn-info btn-raised btn-sm"><i class="zmdi zmdi-floppy"></i>Registrar Actividad</button>
                        </p>
                      
        </div>
      </div>
  </div>
</form>






<div class="modal fade" tabindex="-1" role="dialog" id="Dialog-Actualizar17">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Registrar Actividad</h4>
          </div>
          <div class="modal-body">
              
           <form action="../Registro/regis17.php" method="POST">
                
             <input  id="no_controla" name="no_controla" type="hidden"  value="<?php echo $datoss['no_controla']; ?>"></input>     
                      
                   
                      <div class="form-group label-floating">
                        <label for="email">Actividad:</label>
                       <input  class="form-control" type="text" id="actividad" name="actividad">
                             </input>
                      </div>
                      
                      <div class="form-group label-floating">
                        <label for="email">Descripcion:</label>
                       <textarea  class="form-control" type="text" id="descripcion" name="descripcion">
                             </textarea>
                      </div>
                       <div class="form-group label-floating">
                        <label for="email">Fecha Inicio:</label>
                       <input  class="form-control" type="date" id="fecha" name="fecha">
                             </input>
                      </div>

                      <div class="form-group label-floating">
                        <label for="email">Fecha Termino:</label>
                       <input  class="form-control" type="date" id="fecha2" name="fecha2">
                             </input>
                      </div>
                      
                      <div class="form-group label-floating">
                        <label for="email">Semanas:</label>
                       <input  class="form-control" type="number" id="semanas" name="semanas">
                             </input>
                      </div>
                      <div class="form-group label-floating">
                        <label for="email">Semanas:</label>
                        <label for="email">Dede de poner una x minuscula, en el campo para selecionar la semana de la actividad:</label>
                        <br>
                         <label for="email">Semana 1:</label>
                      <input class="form-control" type="text"  name="semana1" id="semana1"></>
                      <br>
                         <label for="email">Semana 2:</label>
                      <input class="form-control" type="text"  name="semana2" id="semana2"></>
                      <br>
                         <label for="email">Semana 3:</label>
                      <input class="form-control" type="text"  name="semana3" id="semana3"></>
                      <br>
                         <label for="email">Semana 4:</label>
                      <input class="form-control" type="text" name="semana4" id="semana4"></>
                      <br>
                         <label for="email">Semana 5:</label>
                      <input class="form-control" type="text" name="semana5" id="semana5"></>
                      <br>
                         <label for="email">Semana 6:</label>
                      <input class="form-control" type="text" name="semana6" id="semana6"></>
                      <br>
                         <label for="email">Semana 7:</label>
                      <input class="form-control" type="text" name="semana7" id="semana7"></>
                      <br>
                         <label for="email">Semana 8:</label>
                      <input class="form-control" type="text" name="semana8" id="semana8"></>
                      <br>
                         <label for="email">Semana 9:</label>
                      <input class="form-control" type="text" name="semana9" id="semana9"></>
                      <br>
                         <label for="email">Semana 10:</label>
                      <input class="form-control" type="text" name="semana10" id="semana10"></>
                      <br>
                         <label for="email">Semana 11:</label>
                      <input class="form-control" type="text" name="semana11" id="semana11"></>
                      <br>
                         <label for="email">Semana 12:</label>
                      <input class="form-control" type="text" name="semana12" id="semana12"></>
                      <br>
                         <label for="email">Semana 13:</label>
                      <input class="form-control" type="text" name="semana13" id="semana13"></>
                      <br>
                         <label for="email">Semana 14:</label>
                      <input class="form-control" type="text" name="semana14" id="semana14"></>
                      <br>
                         <label for="email">Semana 15:</label>
                      <input class="form-control" type="text" name="semana15" id="semana15"></>
                      <br>
                         <label for="email">Semana 16:</label>
                      <input class="form-control" type="text" name="semana16" id="semana16"></>
                      <br>
                         <label for="email">Semana 17:</label>
                      <input class="form-control" type="text" name="semana17" id="semana17"></>
                      <br>
                         <label for="email">Semana 18:</label>
                      <input class="form-control" type="text" name="semana18" id="semana18"></>
                      <br>
                         <label for="email">Semana 19:</label>
                       <input class="form-control" type="text" name="semana19" id="semana19"></>
                      </div>
                     
                      


                        
          </div>
            <p class="text-center">
                          <button href="#!" class="btn btn-info btn-raised btn-sm"><i class="zmdi zmdi-floppy"></i>Registrar Actividad</button>
                        </p>
                      
        </div>
      </div>
  </div>
</form>







<div class="modal fade" tabindex="-1" role="dialog" id="Dialog-Actualizar18">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Registrar Actividad</h4>
          </div>
          <div class="modal-body">
              
           <form action="../Registro/regis18.php" method="POST">
                
             <input  id="no_controla" name="no_controla" type="hidden"  value="<?php echo $datoss['no_controla']; ?>"></input>     
                      
                   
                      <div class="form-group label-floating">
                        <label for="email">Actividad:</label>
                       <input  class="form-control" type="text" id="actividad" name="actividad">
                             </input>
                      </div>
                      
                      <div class="form-group label-floating">
                        <label for="email">Descripcion:</label>
                       <textarea  class="form-control" type="text" id="descripcion" name="descripcion">
                             </textarea>
                      </div>
                       <div class="form-group label-floating">
                        <label for="email">Fecha Inicio:</label>
                       <input  class="form-control" type="date" id="fecha" name="fecha">
                             </input>
                      </div>

                      <div class="form-group label-floating">
                        <label for="email">Fecha Termino:</label>
                       <input  class="form-control" type="date" id="fecha2" name="fecha2">
                             </input>
                      </div>
                      
                      <div class="form-group label-floating">
                        <label for="email">Semanas:</label>
                       <input  class="form-control" type="number" id="semanas" name="semanas">
                             </input>
                      </div>
                      <div class="form-group label-floating">
                        <label for="email">Semanas:</label>
                        <label for="email">Dede de poner una x minuscula, en el campo para selecionar la semana de la actividad:</label>
                        <br>
                         <label for="email">Semana 1:</label> 
                      <input class="form-control" type="text" name="semana1 "id="semana1"></>
                      <br>
                         <label for="email">Semana 2:</label> 
                      <input class="form-control" type="text" name="semana2" id="semana2"></>
                      <br>
                         <label for="email">Semana 3:</label> 
                      <input class="form-control" type="text" name="semana3" id="semana3"></>
                      <br>
                         <label for="email">Semana 4:</label> 
                      <input class="form-control" type="text" name="semana4" id="semana4"></>
                      <br>
                         <label for="email">Semana 5:</label> 
                      <input class="form-control" type="text" name="semana5" id="semana5"></>
                      <br>
                         <label for="email">Semana 6:</label> 
                      <input class="form-control" type="text" name="semana6" id="semana6"></>
                      <br>
                         <label for="email">Semana 7:</label> 
                      <input class="form-control" type="text" name="semana7" id="semana7"></>
                      <br>
                         <label for="email">Semana 8:</label> 
                      <input class="form-control" type="text" name="semana8" id="semana8"></>
                      <br>
                         <label for="email">Semana 9:</label> 
                      <input class="form-control" type="text" name="semana9" id="semana9"></>
                      <br>
                         <label for="email">Semana 10:</label> 
                      <input class="form-control" type="text" name="semana10" id="semana10"></>
                      <br>
                         <label for="email">Semana 11:</label> 
                      <input class="form-control" type="text" name="semana11" id="semana11"></>
                      <br>
                         <label for="email">Semana 12:</label> 
                      <input class="form-control" type="text" name="semana12" id="semana12"></>
                      <br>
                         <label for="email">Semana 13:</label> 
                      <input class="form-control" type="text" name="semana13" id="semana13"></>
                      <br>
                         <label for="email">Semana 14:</label> 
                      <input class="form-control" type="text" name="semana14" id="semana14"></>
                      <br>
                         <label for="email">Semana 15:</label> 
                      <input class="form-control" type="text" name="semana15" id="semana15"></>
                      <br>
                         <label for="email">Semana 16:</label> 
                      <input class="form-control" type="text" name="semana16" id="semana16"></>
                      <br>
                         <label for="email">Semana 17:</label> 
                      <input class="form-control" type="text" name="semana17" id="semana17"></>
                      <br>
                         <label for="email">Semana 18:</label> 
                      <input class="form-control" type="text" name="semana18" id="semana18"></>
                      <br>
                         <label for="email">Semana 19:</label> 
                       <input class="form-control" type="text" name="semana19" id="semana19"></>
                       <br>
                         <label for="email">Semana 20:</label> 
                        <input class="form-control" type="text" name="semana20" id="semana20"></>
                      </div>
                     
                      


                        
          </div>
            <p class="text-center">
                          <button href="#!" class="btn btn-info btn-raised btn-sm"><i class="zmdi zmdi-floppy"></i>Registrar Actividad</button>
                        </p>
                      
        </div>
      </div>
  </div>
</form>





<div class="modal fade" tabindex="-1" role="dialog" id="Dialog-Actualizar19">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Registrar Actividad</h4>
          </div>
          <div class="modal-body">
              
           <form action="../Registro/regis19.php" method="POST">
                
             <input  id="no_controla" name="no_controla" type="hidden"  value="<?php echo $datoss['no_controla']; ?>"></input>     
                      
                   
                      <div class="form-group label-floating">
                        <label for="email">Actividad:</label>
                       <input  class="form-control" type="text" id="actividad" name="actividad">
                             </input>
                      </div>
                      
                      <div class="form-group label-floating">
                        <label for="email">Descripcion:</label>
                       <textarea  class="form-control" type="text" id="descripcion" name="descripcion">
                             </textarea>
                      </div>
                       <div class="form-group label-floating">
                        <label for="email">Fecha Inicio:</label>
                       <input  class="form-control" type="date" id="fecha" name="fecha">
                             </input>
                      </div>

                      <div class="form-group label-floating">
                        <label for="email">Fecha Termino:</label>
                       <input  class="form-control" type="date" id="fecha2" name="fecha2">
                             </input>
                      </div>
                      
                      <div class="form-group label-floating">
                        <label for="email">Semanas:</label>
                      <input  class="form-control" type="number" id="semanas" name="semanas">
                             </input>
                      </div>
                      <div class="form-group label-floating">
                        <label for="email">Semanas:</label>
                        <label for="email">Dede de poner una x minuscula, en el campo para selecionar la semana de la actividad:</label>
                        <br>
                         <label for="email">Semana 1:</label> 
                       <input class="form-control" type="text" name="semana1" id="semana1"></>
                        <br>
                         <label for="email">Semana 2:</label> 
                      <input class="form-control" type="text" name="semana2" id="semana2"></>
                       <br>
                         <label for="email">Semana 3:</label> 
                      <input class="form-control" type="text" name="semana3" id="semana3"></>
                       <br>
                         <label for="email">Semana 4:</label> 
                      <input class="form-control" type="text" name="semana4" id="semana4"></>
                       <br>
                         <label for="email">Semana 5:</label> 
                      <input class="form-control" type="text" name="semana5" id="semana5"></>
                       <br>
                         <label for="email">Semana 6:</label> 
                      <input class="form-control" type="text" name="semana6" id="semana6"></>
                       <br>
                         <label for="email">Semana 7:</label> 
                      <input class="form-control" type="text" name="semana7" id="semana7"></>
                       <br>
                         <label for="email">Semana 8:</label> 
                      <input class="form-control" type="text" name="semana8" id="semana8"></>
                       <br>
                         <label for="email">Semana 9:</label> 
                      <input class="form-control" type="text" name="semana9" id="semana9"></>
                       <br>
                         <label for="email">Semana 10:</label> 
                      <input class="form-control" type="text" name="semana10" id="semana10"></>
                       <br>
                         <label for="email">Semana 11:</label> 
                      <input class="form-control" type="text" name="semana11" id="semana11"></>
                       <br>
                         <label for="email">Semana 12:</label> 
                      <input class="form-control" type="text" name="semana12" id="semana12"></>
                       <br>
                         <label for="email">Semana 13:</label> 
                      <input class="form-control" type="text" name="semana13" id="semana13"></>
                       <br>
                         <label for="email">Semana 14:</label> 
                      <input class="form-control" type="text" name="semana14" id="semana14"></>
                       <br>
                         <label for="email">Semana 15:</label> 
                      <input class="form-control" type="text" name="semana15" id="semana15"></>
                       <br>
                         <label for="email">Semana 16:</label> 
                      <input class="form-control" type="text" name="semana16" id="semana16"></>
                       <br>
                         <label for="email">Semana 17:</label> 
                      <input class="form-control" type="text" name="semana17" id="semana17"></>
                       <br>
                         <label for="email">Semana 18:</label> 
                      <input class="form-control" type="text" name="semana18" id="semana18"></>
                       <br>
                         <label for="email">Semana 19:</label> 
                       <input class="form-control" type="text" name="semana19" id="semana19"></>
                        <br>
                         <label for="email">Semana 20:</label> 
                        <input class="form-control" type="text" name="semana20" id="semana20"></>
                         <br>
                         <label for="email">Semana 21:</label> 
                        <input class="form-control" type="text" name="semana21" id="semana21"></>
                      </div>
                     
                      


                        
          </div>
            <p class="text-center">
                          <button href="#!" class="btn btn-info btn-raised btn-sm"><i class="zmdi zmdi-floppy"></i>Registrar Actividad</button>
                        </p>
                      
        </div>
      </div>
  </div>
</form>





<div class="modal fade" tabindex="-1" role="dialog" id="Dialog-Actualizar20">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Registrar Actividad</h4>
          </div>
          <div class="modal-body">
              
           <form action="../Registro/regis20.php" method="POST">
                
             <input  id="no_controla" name="no_controla" type="hidden"  value="<?php echo $datoss['no_controla']; ?>"></input>     
                      
                   
                      <div class="form-group label-floating">
                        <label for="email">Actividad:</label>
                       <input  class="form-control" type="text" id="actividad" name="actividad">
                             </input>
                      </div>
                      
                      <div class="form-group label-floating">
                        <label for="email">Descripcion:</label>
                       <textarea  class="form-control" type="text" id="descripcion" name="descripcion">
                             </textarea>
                      </div>
                       <div class="form-group label-floating">
                        <label for="email">Fecha Inicio:</label>
                       <input  class="form-control" type="date" id="fecha" name="fecha">
                             </input>
                      </div>

                      <div class="form-group label-floating">
                        <label for="email">Fecha Termino:</label>
                       <input  class="form-control" type="date" id="fecha2" name="fecha2">
                             </input>
                      </div>
                      
                      <div class="form-group label-floating">
                        <label for="email">Semanas:</label>
                     <input  class="form-control" type="number" id="semanas" name="semanas">
                             </input>
                      </div>
                      <div class="form-group label-floating">
                        <label for="email">Semanas:</label>
                        <label for="email">Dede de poner una x minuscula, en el campo para selecionar la semana de la actividad:</label>
                        <br>
                           <label for="email">Semana 1:</label> 
                       <input class="form-control" type="text"  name="semana1" id="semana1"></>
                       <br>
                           <label for="email">Semana 2:</label> 
                      <input class="form-control" type="text" name="semana2" id="semana2"></>
                      <br>
                           <label for="email">Semana 3:</label> 
                      <input class="form-control" type="text" name="semana3" id="semana3"></>
                      <br>
                           <label for="email">Semana 4:</label> 
                      <input class="form-control" type="text" name="semana4" id="semana4"></>
                      <br>
                           <label for="email">Semana 5:</label> 
                      <input class="form-control" type="text" name="semana5" id="semana5"></>
                      <br>
                           <label for="email">Semana 6:</label> 
                      <input class="form-control" type="text"  name="semana6" id="semana6"></>
                      <br>
                           <label for="email">Semana 7:</label> 
                      <input class="form-control" type="text" name="semana7" id="semana7"></>
                      <br>
                           <label for="email">Semana 8:</label> 
                      <input class="form-control" type="text"  name="semana8" id="semana8"></>
                      <br>
                           <label for="email">Semana 9:</label> 
                      <input class="form-control" type="text" name="semana9" id="semana9"></>
                      <br>
                           <label for="email">Semana 10:</label> 
                      <input class="form-control" type="text" name="semana10" id="semana10"></>
                      <br>
                           <label for="email">Semana 11:</label> 
                      <input class="form-control" type="text" name="semana11" id="semana11"></>
                      <br>
                           <label for="email">Semana 12:</label> 
                      <input class="form-control" type="text" name="semana12" id="semana12"></>
                      <br>
                           <label for="email">Semana 13:</label> 
                      <input class="form-control" type="text" name="semana13" id="semana13"></>
                      <br>
                           <label for="email">Semana 14:</label> 
                      <input class="form-control" type="text" name="semana14" id="semana14"></>
                      <br>
                           <label for="email">Semana 15:</label> 
                      <input class="form-control" type="text" name="semana15" id="semana15"></>
                      <br>
                           <label for="email">Semana 16:</label> 
                      <input class="form-control" type="text" name="semana16" id="semana16"></>
                      <br>
                           <label for="email">Semana 17:</label> 
                      <input class="form-control" type="text" name="semana17" id="semana17"></>
                      <br>
                           <label for="email">Semana 18:</label> 
                      <input class="form-control" type="text" name="semana18" id="semana18"></>
                      <br>
                           <label for="email">Semana 19:</label> 
                       <input class="form-control" type="text" name="semana19" id="semana19"></>
                       <br>
                           <label for="email">Semana 20:</label> 
                        <input class="form-control" type="text" name="semana20" id="semana20"></>
                        <br>
                           <label for="email">Semana 21:</label> 
                        <input class="form-control" type="text" name="semana21" id="semana21"></>
                        <br>
                           <label for="email">Semana 22:</label> 
                         <input class="form-control" type="text" name="semana22" id="semana22"></>
                      </div>
                     
                      


                        
          </div>
            <p class="text-center">
                          <button href="#!" class="btn btn-info btn-raised btn-sm"><i class="zmdi zmdi-floppy"></i>Registrar Actividad</button>
                        </p>
                      
        </div>
      </div>
  </div>
</form>





<div class="modal fade" tabindex="-1" role="dialog" id="Dialog-Actualizar21">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Registrar Actividad</h4>
          </div>
          <div class="modal-body">
              
           <form action="../Registro/regis21.php" method="POST">
                
             <input  id="no_controla" name="no_controla" type="hidden"  value="<?php echo $datoss['no_controla']; ?>"></input>     
                      
                   
                      <div class="form-group label-floating">
                        <label for="email">Actividad:</label>
                       <input  class="form-control" type="text" id="actividad" name="actividad">
                             </input>
                      </div>
                      
                      <div class="form-group label-floating">
                        <label for="email">Descripcion:</label>
                       <textarea  class="form-control" type="text" id="descripcion" name="descripcion">
                             </textarea>
                      </div>
                       <div class="form-group label-floating">
                        <label for="email">Fecha Inicio:</label>
                       <input  class="form-control" type="date" id="fecha" name="fecha">
                             </input>
                      </div>

                      <div class="form-group label-floating">
                        <label for="email">Fecha Termino:</label>
                       <input  class="form-control" type="date" id="fecha2" name="fecha2">
                             </input>
                      </div>
                      
                      <div class="form-group label-floating">
                        <label for="email">Semanas:</label>
                      <input  class="form-control" type="number" id="semanas" name="semanas">
                             </input>
                      </div>
                      <div class="form-group label-floating">
                        <label for="email">Semanas:</label>
                          <label for="email">Dede de poner una x minuscula, en el campo para selecionar la semana de la actividad:</label>
                        <br>
                           <label for="email">Semana 1:</label> 
                      <input class="form-control" type="text" name="semana1" id="semana1"></>
                       <br>
                           <label for="email">Semana 2:</label> 
                      <input class="form-control" type="text" name="semana2" id="semana2"></>
                       <br>
                           <label for="email">Semana 4:</label> 
                      <input class="form-control" type="text" name="semana3" id="semana3"></>
                       <br>
                           <label for="email">Semana 4:</label> 
                      <input class="form-control" type="text" name="semana4" id="semana4"></>
                       <br>
                           <label for="email">Semana 5:</label> 
                      <input class="form-control" type="text" name="semana5" id="semana5"></>
                       <br>
                           <label for="email">Semana 6:</label> 
                      <input class="form-control" type="text" name="semana6" id="semana6"></>
                       <br>
                           <label for="email">Semana 7:</label> 
                      <input class="form-control" type="text" name="semana7" id="semana7"></>
                       <br>
                           <label for="email">Semana 8:</label> 
                      <input class="form-control" type="text" name="semana8" id="semana8"></>
                       <br>
                           <label for="email">Semana 9:</label> 
                      <input class="form-control" type="text" name="semana9" id="semana9"></>
                       <br>
                           <label for="email">Semana 10:</label> 
                      <input class="form-control" type="text" name="semana10" id="semana10"></>
                       <br>
                           <label for="email">Semana 11:</label> 
                      <input class="form-control" type="text" name="semana11" id="semana11"></>
                       <br>
                           <label for="email">Semana 12:</label> 
                      <input class="form-control" type="text" name="semana12" id="semana12"></>
                       <br>
                           <label for="email">Semana 13:</label> 
                      <input class="form-control" type="text" name="semana13" id="semana13"></>
                       <br>
                           <label for="email">Semana 14:</label> 
                      <input class="form-control" type="text" name="semana14" id="semana14"></>
                       <br>
                           <label for="email">Semana 15:</label> 
                      <input class="form-control" type="text" name="semana15" id="semana15"></>
                       <br>
                           <label for="email">Semana 16:</label> 
                      <input class="form-control" type="text" name="semana16" id="semana16"></>
                       <br>
                           <label for="email">Semana 17:</label> 
                      <input class="form-control" type="text" name="semana17" id="semana17"></>
                       <br>
                           <label for="email">Semana 18:</label> 
                      <input class="form-control" type="text" name="semana18" id="semana18"></>
                       <br>
                           <label for="email">Semana 19:</label> 
                       <input class="form-control" type="text" name="semana19" id="semana19"></>
                        <br>
                           <label for="email">Semana 20:</label> 
                        <input class="form-control" type="text" name="semana20" id="semana20"></>
                         <br>
                           <label for="email">Semana 21:</label> 
                        <input class="form-control" type="text" name="semana21" id="semana21"></>
                         <br>
                           <label for="email">Semana 22:</label> 
                         <input class="form-control" type="text" name="semana22" id="semana22"></>
                          <br>
                           <label for="email">Semana 23:</label> 
                          <input class="form-control" type="text" name="semana23" id="semana23"></>
                      </div>
                     
                      


                        
          </div>
            <p class="text-center">
                          <button href="#!" class="btn btn-info btn-raised btn-sm"><i class="zmdi zmdi-floppy"></i>Registrar Actividad</button>
                        </p>
                      
        </div>
      </div>
  </div>
</form>





<div class="modal fade" tabindex="-1" role="dialog" id="Dialog-Actualizar22">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Registrar Actividad</h4>
          </div>
          <div class="modal-body">
              
           <form action="../Registro/regis22.php" method="POST">
                
             <input  id="no_controla" name="no_controla" type="hidden"  value="<?php echo $datoss['no_controla']; ?>"></input>     
                      
                   
                      <div class="form-group label-floating">
                        <label for="email">Actividad:</label>
                       <input  class="form-control" type="text" id="actividad" name="actividad">
                             </input>
                      </div>
                      
                      <div class="form-group label-floating">
                        <label for="email">Descripcion:</label>
                       <textarea  class="form-control" type="text" id="descripcion" name="descripcion">
                             </textarea>
                      </div>
                       <div class="form-group label-floating">
                        <label for="email">Fecha Inicio:</label>
                       <input  class="form-control" type="date" id="fecha" name="fecha">
                             </input>
                      </div>

                      <div class="form-group label-floating">
                        <label for="email">Fecha Termino:</label>
                       <input  class="form-control" type="date" id="fecha2" name="fecha2">
                             </input>
                      </div>
                      
                      <div class="form-group label-floating">
                        <label for="email">Semanas:</label>
                      <input  class="form-control" type="number" id="semanas" name="semanas">
                             </input>
                      </div>
                      <div class="form-group label-floating">
                        <label for="email">Semanas:</label>
                          <label for="email">Dede de poner una x minuscula, en el campo para selecionar la semana de la actividad:</label>
                        <br>
                           <label for="email">Semana 1:</label>
                      <input class="form-control" type="text" name="semana1" id="semana1"></>
                    
                       <br>
                           <label for="email">Semana 2:</label>
                      <input class="form-control" type="text" name="semana3" id="semana2"></>
                       <br>
                           <label for="email">Semana 3:</label>
                      <input class="form-control" type="text" name="semana4" id="semana3"></>
                       <br>
                           <label for="email">Semana 4:</label>
                      <input class="form-control" type="text" name="semana5" id="semana4"></>
                       <br>
                           <label for="email">Semana 5:</label>
                      <input class="form-control" type="text" name="semana6" id="semana5"></>
                       <br>
                           <label for="email">Semana 6:</label>
                      <input class="form-control" type="text" name="semana7" id="semana6"></>
                       <br>
                           <label for="email">Semana 7:</label>
                      <input class="form-control" type="text" name="semana8" id="semana7"></>
                       <br>
                           <label for="email">Semana 8:</label>
                      <input class="form-control" type="text" name="semana9" id="semana8"></>
                       <br>
                           <label for="email">Semana 9:</label>
                      <input class="form-control" type="text" name="semana10" id="semana9"></>
                       <br>
                           <label for="email">Semana 10:</label>
                      <input class="form-control" type="text" name="semana11" id="semana10"></>
                       <br>
                           <label for="email">Semana 11:</label>
                      <input class="form-control" type="text" name="semana12" id="semana11"></>
                       <br>
                           <label for="email">Semana 12:</label>
                      <input class="form-control" type="text" name="semana13" id="semana12"></>
                       <br>
                           <label for="email">Semana 13:</label>
                      <input class="form-control" type="text" name="semana14" id="semana13"></>
                       <br>
                           <label for="email">Semana 14:</label>
                      <input class="form-control" type="text" name="semana15" id="semana14"></>
                       <br>
                           <label for="email">Semana 15:</label>
                      <input class="form-control" type="text" name="semana16" id="semana15"></>
                       <br>
                           <label for="email">Semana 16:</label>
                      <input class="form-control" type="text" name="semana17" id="semana16"></>
                       <br>
                           <label for="email">Semana 17:</label>
                      <input class="form-control" type="text" name="semana18" id="semana17"></>
                       <br>
                           <label for="email">Semana 18:</label>
                       <input class="form-control" type="text" name="semana19" id="semana18"></>
                        <br>
                           <label for="email">Semana 19:</label>
                        <input class="form-control" type="text" name="semana20" id="semana19"></>
                         <br>
                           <label for="email">Semana 20:</label>
                        <input class="form-control" type="text" name="semana20" id="semana20"></>
                         <br>




                           <label for="email">Semana 21:</label>
                        <input class="form-control" type="text" name="semana21" id="semana21"></>
                         <br>
                           <label for="email">Semana 22:</label>
                         <input class="form-control" type="text" name="semana22" id="semana22"></>
                          <br>
                           <label for="email">Semana 23:</label>
                          <input class="form-control" type="text" name="semana23" id="semana23"></>
                           <br>
                           <label for="email">Semana 24:</label>
                          <input class="form-control" type="text" name="semana24" id="semana24"></>
                      </div>
                     
                      


                        
          </div>
            <p class="text-center">
                          <button href="#!" class="btn btn-info btn-raised btn-sm"><i class="zmdi zmdi-floppy"></i>Registrar Actividad</button>
                        </p>
                      
        </div>
      </div>
  </div>
</form>





<div class="modal fade" tabindex="-1" role="dialog" id="Dialog-Actualizar23">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Registrar Actividad</h4>
          </div>
          <div class="modal-body">
              
           <form action="../Registro/regis23.php" method="POST">
                
             <input  id="no_controla" name="no_controla" type="hidden"  value="<?php echo $datoss['no_controla']; ?>"></input>     
                      
                   
                      <div class="form-group label-floating">
                        <label for="email">Actividad:</label>
                       <input  class="form-control" type="text" id="actividad" name="actividad">
                             </input>
                      </div>
                      
                      <div class="form-group label-floating">
                        <label for="email">Descripcion:</label>
                       <textarea  class="form-control" type="text" id="descripcion" name="descripcion">
                             </textarea>
                      </div>
                       <div class="form-group label-floating">
                        <label for="email">Fecha Inicio:</label>
                       <input  class="form-control" type="date" id="fecha" name="fecha">
                             </input>
                      </div>

                      <div class="form-group label-floating">
                        <label for="email">Fecha Termino:</label>
                       <input  class="form-control" type="date" id="fecha2" name="fecha2">
                             </input>
                      </div>
                      
                      <div class="form-group label-floating">
                        <label for="email">Semanas:</label>
                     <input  class="form-control" type="number" id="semanas" name="semanas">
                             </input>
                      </div>
                      <div class="form-group label-floating">
                        <label for="email">Semanas:</label>
                        <label for="email">Dede de poner una x minuscula, en el campo para selecionar la semana de la actividad:</label>
                        <br>
                           <label for="email">Semana 1:</label>
                      <input class="form-control" type="text" name="semana1" id="semana1"></>
                        <br>
                           <label for="email">Semana 2:</label>
                      <input class="form-control" type="text" name="semana2" id="semana2"></>
                        <br>
                           <label for="email">Semana 3:</label>
                      <input class="form-control" type="text" name="semana3" id="semana3"></>
                        <br>
                           <label for="email">Semana 4:</label>
                      <input class="form-control" type="text" name="semana4" id="semana4"></>
                        <br>
                           <label for="email">Semana 5:</label>
                      <input class="form-control" type="text" name="semana5" id="semana5"></>
                        <br>
                           <label for="email">Semana 6:</label>
                      <input class="form-control" type="text" name="semana6" id="semana6"></>
                        <br>
                           <label for="email">Semana 7:</label>
                      <input class="form-control" type="text" name="semana7" id="semana7"></>
                        <br>
                           <label for="email">Semana 8:</label>
                      <input class="form-control" type="text" name="semana8" id="semana8"></>
                        <br>
                           <label for="email">Semana 9:</label>
                      <input class="form-control" type="text" name="semana9" id="semana9"></>
                        <br>
                           <label for="email">Semana 10:</label>
                      <input class="form-control" type="text" name="semana10" id="semana10"></>
                        <br>
                           <label for="email">Semana 11:</label>
                      <input class="form-control" type="text" name="semana11" id="semana11"></>
                        <br>
                           <label for="email">Semana 12:</label>
                      <input class="form-control" type="text" name="semana12" id="semana12"></>
                        <br>
                           <label for="email">Semana 13:</label>
                      <input class="form-control" type="text" name="semana13" id="semana13"></>
                        <br>
                           <label for="email">Semana 14:</label>
                      <input class="form-control" type="text" name="semana14" id="semana14"></>
                        <br>
                           <label for="email">Semana 15:</label>
                      <input class="form-control" type="text" name="semana15" id="semana15"></>
                        <br>
                           <label for="email">Semana 16:</label>
                      <input class="form-control" type="text" name="semana16" id="semana16"></>
                        <br>
                           <label for="email">Semana 17:</label>
                      <input class="form-control" type="text" name="semana17" id="semana17"></>
                        <br>
                           <label for="email">Semana 18:</label>
                      <input class="form-control" type="text" name="semana18" id="semana18"></>
                        <br>
                           <label for="email">Semana 19:</label>
                       <input class="form-control" type="text" name="semana19" id="semana19"></>
                         <br>
                           <label for="email">Semana 20:</label>
                        <input class="form-control" type="text" name="semana20" id="semana20"></>
                          <br>
                           <label for="email">Semana 21:</label>
                        <input class="form-control" type="text" name="semana21" id="semana21"></>
                          <br>
                           <label for="email">Semana 22:</label>
                         <input class="form-control" type="text" name="semana22" id="semana22"></>
                           <br>
                           <label for="email">Semana 23:</label>
                          <input class="form-control" type="text" name="semana23" id="semana23"></>
                            <br>
                           <label for="email">Semana 24:</label>
                          <input class="form-control" type="text" name="semana24" id="semana24"></>
                            <br>
                           <label for="email">Semana 25:</label>
                           <input class="form-control" type="text" name="semana25" id="semana25"></>
                      </div>
                     
                      


                        
          </div>
            <p class="text-center">
                          <button href="#!" class="btn btn-info btn-raised btn-sm"><i class="zmdi zmdi-floppy"></i>Registrar Actividad</button>
                        </p>
                      
        </div>
      </div>
  </div>
</form>





<div class="modal fade" tabindex="-1" role="dialog" id="Dialog-Actualizar24">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Registrar Actividad</h4>
          </div>
          <div class="modal-body">
              
           <form action="../Registro/regis24.php" method="POST">
                
             <input  id="no_controla" name="no_controla" type="hidden"  value="<?php echo $datoss['no_controla']; ?>"></input>     
                      
                   
                      <div class="form-group label-floating">
                        <label for="email">Actividad:</label>
                       <input  class="form-control" type="text" id="actividad" name="actividad">
                             </input>
                      </div>
                      
                      <div class="form-group label-floating">
                        <label for="email">Descripcion:</label>
                       <textarea  class="form-control" type="text" id="descripcion" name="descripcion">
                             </textarea>
                      </div>
                       <div class="form-group label-floating">
                        <label for="email">Fecha Inicio:</label>
                       <input  class="form-control" type="date" id="fecha" name="fecha">
                             </input>
                      </div>

                      <div class="form-group label-floating">
                        <label for="email">Fecha Termino:</label>
                       <input  class="form-control" type="date" id="fecha2" name="fecha2">
                             </input>
                      </div>
                      
                      <div class="form-group label-floating">
                        <label for="email">Semanas:</label>
                      <input  class="form-control" type="number" id="semanas" name="semanas">
                             </input>
                      </div>
                      <div class="form-group label-floating">
                        <label for="email">Semanas:</label>
                           <label for="email">Dede de poner una x minuscula, en el campo para selecionar la semana de la actividad:</label>
                        <br>
                           <label for="email">Semana 1:</label>
                     <input class="form-control" type="text" name="semana1" id="semana1"></>
                      <br>
                           <label for="email">Semana 2:</label>
                      <input class="form-control" type="text" name="semana2" id="semana2"></>
                       <br>
                           <label for="email">Semana 3:</label>
                      <input class="form-control" type="text" name="semana3" id="semana3"></>
                       <br>
                           <label for="email">Semana 4:</label>
                      <input class="form-control" type="text" name="semana4" id="semana4"></>
                       <br>
                           <label for="email">Semana 5:</label>
                      <input class="form-control" type="text" name="semana5" id="semana5"></>
                       <br>
                           <label for="email">Semana 6:</label>
                      <input class="form-control" type="text" name="semana6" id="semana6"></>
                       <br>
                           <label for="email">Semana 7:</label>
                      <input class="form-control" type="text" name="semana7" id="semana7"></>
                       <br>
                           <label for="email">Semana 8:</label>
                      <input class="form-control" type="text" name="semana8" id="semana8"></>
                       <br>
                           <label for="email">Semana 9:</label>
                      <input class="form-control" type="text" name="semana9" id="semana9"></>
                       <br>
                           <label for="email">Semana 10:</label>
                      <input class="form-control" type="text" name="semana10" id="semana10"></>
                       <br>
                           <label for="email">Semana 11:</label>
                      <input class="form-control" type="text" name="semana11" id="semana11"></>
                       <br>
                           <label for="email">Semana 12:</label>
                      <input class="form-control" type="text" name="semana12" id="semana12"></>
                       <br>
                           <label for="email">Semana 13:</label>
                      <input class="form-control" type="text" name="semana13" id="semana13"></>
                       <br>
                           <label for="email">Semana 14:</label>
                      <input class="form-control" type="text" name="semana14" id="semana14"></>
                       <br>
                           <label for="email">Semana 15:</label>
                      <input class="form-control" type="text" name="semana15" id="semana15"></>
                       <br>
                           <label for="email">Semana 16:</label>
                      <input class="form-control" type="text" name="semana16" id="semana16"></>
                       <br>
                           <label for="email">Semana 17:</label>
                      <input class="form-control" type="text" name="semana17" id="semana17"></>
                       <br>
                           <label for="email">Semana 18:</label>
                      <input class="form-control" type="text" name="semana18" id="semana18"></>
                       <br>
                           <label for="email">Semana 19:</label>
                       <input class="form-control" type="text" name="semana19" id="semana19"></>
                        <br>
                           <label for="email">Semana 20:</label>
                        <input class="form-control" type="text" name="semana20" id="semana20"></>
                         <br>
                           <label for="email">Semana 21:</label>
                        <input class="form-control" type="text" name="semana21" id="semana21"></>
                         <br>
                           <label for="email">Semana 22:</label>
                         <input class="form-control" type="text" name="semana22" id="semana22"></>
                          <br>
                           <label for="email">Semana 23:</label>
                          <input class="form-control" type="text" name="semana23" id="semana23"></>
                           <br>
                           <label for="email">Semana 24:</label>
                          <input class="form-control" type="text" name="semana24" id="semana24"></>
                           <br>
                           <label for="email">Semana 25:</label>
                           <input class="form-control" type="text" name="semana25" id="semana25"></>
                            <br>
                           <label for="email">Semana 26:</label>
                           <input class="form-control" type="text" name="semana26" id="semana26"></>
                      </div>
                     
                      


                        
          </div>
            <p class="text-center">
                          <button href="#!" class="btn btn-info btn-raised btn-sm"><i class="zmdi zmdi-floppy"></i>Registrar Actividad</button>
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
           <form action="../Actualizacion/actualizaractividad4.php"  method="POST">
           <input  id="idactividad" name="idactividad" type="hidden" ></input>  
          
                      
                     
                      <div class="form-group label-floating">
                        <label for="email">Actividad:</label>
                       <input  class="form-control" type="text" id="actividad" name="actividad">
                             </input>
                      </div>
                      
                      <div class="form-group label-floating">
                        <label for="email">Descripcion:</label>
                       <textarea  class="form-control" type="text" id="descripcion" name="descripcion">
                             </textarea>
                      </div>
                       <div class="form-group label-floating">
                        <label for="email">Fecha Inicio:</label>
                       <input  class="form-control" type="date" id="fecha" name="fecha">
                             </input>
                      </div>
                      <div class="form-group label-floating">
                        <label for="email">Fecha Termino:</label>
                       <input  class="form-control" type="date" id="fecha2" name="fecha2">
                             </input>
                      </div>
                      
                      
                      <div class="form-group label-floating">
                        <label for="email">Semanas:</label>
                       <input  class="form-control" type="number" id="semanas" name="semanas">
                             </input>
                      </div>
                         <label for="email">Dede de poner una x minuscula, en el campo para selecionar la semana de la actividad:</label>
                        <br>
                           <label for="email">Semana 1:</label>
                       <input class="form-control" type="text" name="semana1" id="semana1"></>
                         <br>
                           <label for="email">Semana 2:</label>
                      <input class="form-control" type="text" name="semana2" id="semana2"></>
                        <br>
                           <label for="email">Semana 3:</label>
                      <input class="form-control" type="text" name="semana3" id="semana3"></>
                        <br>
                           <label for="email">Semana 4:</label>
                      <input class="form-control" type="text" name="semana4" id="semana4"></>
                        <br>
                           <label for="email">Semana 5:</label>
                      <input class="form-control" type="text" name="semana5" id="semana5"></>
                        <br>
                           <label for="email">Semana 6:</label>
                      <input class="form-control" type="text" name="semana6" id="semana6"></>
                        <br>
                           <label for="email">Semana 7:</label>
                      <input class="form-control" type="text" name="semana7" id="semana7"></>
                        <br>
                           <label for="email">Semana 8:</label>
                      <input class="form-control" type="text" name="semana8" id="semana8"></>
                        <br>
                           <label for="email">Semana 9:</label>
                      <input class="form-control" type="text" name="semana9" id="semana9"></>
                        <br>
                           <label for="email">Semana 10:</label>
                      <input class="form-control" type="text" name="semana10" id="semana10"></>
                        <br>
                           <label for="email">Semana 11:</label>
                      <input class="form-control" type="text" name="semana11" id="semana11"></>
                        <br>
                           <label for="email">Semana 12:</label>
                      <input class="form-control" type="text" name="semana12" id="semana12"></>
                        <br>
                           <label for="email">Semana 13:</label>
                      <input class="form-control" type="text" name="semana13" id="semana13"></>
                        <br>
                           <label for="email">Semana 14:</label>
                      <input class="form-control" type="text" name="semana14" id="semana14"></>
                        <br>
                           <label for="email">Semana 15:</label>
                      <input class="form-control" type="text" name="semana15" id="semana15"></>
                        <br>
                           <label for="email">Semana 16:</label>
                      <input class="form-control" type="text" name="semana16" id="semana16"></>
                        <br>
                           <label for="email">Semana 17:</label>
                      <input class="form-control" type="text" name="semana17" id="semana17"></>
                        <br>
                           <label for="email">Semana 18:</label>
                      <input class="form-control" type="text" name="semana18" id="semana18"></>
                       
                      
          </div>
             <p class="text-center">
                          <button href="#!" class="btn btn-info btn-raised btn-sm"><i class="zmdi zmdi-floppy"></i>Modificar Actividad</button>
                        </p>
      
                      
       </div>
  </div>
  </div>
  </div>
</form>







<div class="modal fade" tabindex="-1" role="dialog" id="Dialog-Modificaciones17">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Actualizar</h4>
          </div>
          <div class="modal-body">
           <form action="../Actualizacion/actividad17.php"  method="POST">
           <input  id="idactividad" name="idactividad" type="hidden" ></input>  
          
                      
                     
                      <div class="form-group label-floating">
                        <label for="email">Actividad:</label>
                       <input  class="form-control" type="text" id="actividad" name="actividad">
                             </input>
                      </div>
                      
                      <div class="form-group label-floating">
                        <label for="email">Descripcion:</label>
                       <textarea  class="form-control" type="text" id="descripcion" name="descripcion">
                             </textarea>
                      </div>
                       <div class="form-group label-floating">
                        <label for="email">Fecha Inicio:</label>
                       <input  class="form-control" type="date" id="fecha" name="fecha">
                             </input>
                      </div>
                      <div class="form-group label-floating">
                        <label for="email">Fecha Termino:</label>
                       <input  class="form-control" type="date" id="fecha2" name="fecha2">
                             </input>
                      </div>
                      
                      
                      <div class="form-group label-floating">
                        <label for="email">Semanas:</label>

                      <input  class="form-control" type="number" id="semanas" name="semanas">
                             </input>
                      </div>
                       <label for="email">Dede de poner una x minuscula, en el campo para selecionar la semana de la actividad:</label>
                        <br>
                           <label for="email">Semana 1:</label>
                       <input class="form-control" type="text" name="semana1" id="semana1"></>
                        <br>
                           <label for="email">Semana 2:</label>
                      <input class="form-control" type="text" name="semana2" id="semana2"></>
                       <br>
                           <label for="email">Semana 3:</label>
                      <input class="form-control" type="text" name="semana3" id="semana3"></>
                       <br>
                           <label for="email">Semana 4:</label>
                      <input class="form-control" type="text" name="semana4" id="semana4"></>
                       <br>
                           <label for="email">Semana 5:</label>
                      <input class="form-control" type="text" name="semana5" id="semana5"></>
                       <br>
                           <label for="email">Semana 6:</label>
                      <input class="form-control" type="text" name="semana6" id="semana6"></>
                       <br>
                           <label for="email">Semana 7:</label>
                      <input class="form-control" type="text" name="semana7" id="semana7"></>
                       <br>
                           <label for="email">Semana 8:</label>
                      <input class="form-control" type="text" name="semana8" id="semana8"></>
                       <br>
                           <label for="email">Semana 9:</label>
                      <input class="form-control" type="text" name="semana9" id="semana9"></>
                       <br>
                           <label for="email">Semana 10:</label>
                      <input class="form-control" type="text" name="semana10" id="semana10"></>
                       <br>
                           <label for="email">Semana 11:</label>
                      <input class="form-control" type="text" name="semana11" id="semana11"></>
                       <br>
                           <label for="email">Semana 12:</label>
                      <input class="form-control" type="text" name="semana12" id="semana12"></>
                       <br>
                           <label for="email">Semana 13:</label>
                      <input class="form-control" type="text" name="semana13" id="semana13"></>
                       <br>
                           <label for="email">Semana 14:</label>
                      <input class="form-control" type="text" name="semana14" id="semana14"></>
                       <br>
                           <label for="email">Semana 15:</label>
                      <input class="form-control" type="text" name="semana15" id="semana15"></>
                       <br>
                           <label for="email">Semana 16:</label>
                      <input class="form-control" type="text" name="semana16" id="semana16"></>
                       <br>
                           <label for="email">Semana 17:</label>
                      <input class="form-control" type="text" name="semana17" id="semana17"></>
                       <br>
                           <label for="email">Semana 18:</label>
                      <input class="form-control" type="text" name="semana18" id="semana18"></>
                       <br>
                           <label for="email">Semana 19:</label>
                      
                      <input class="form-control" type="text" name="semana19" id="semana19"></>
                       
                      
          </div>
             <p class="text-center">
                          <button href="#!" class="btn btn-info btn-raised btn-sm"><i class="zmdi zmdi-floppy"></i>Modificar Actividad</button>
                        </p>
      
                      
       </div>
  </div>
  </div>
  </div>
</form>




<div class="modal fade" tabindex="-1" role="dialog" id="Dialog-Modificaciones18">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Actualizar</h4>
          </div>
          <div class="modal-body">
           <form action="../Actualizacion/actividad18.php"  method="POST">
           <input  id="idactividad" name="idactividad" type="hidden" ></input>  
          
                      
                     
                      <div class="form-group label-floating">
                        <label for="email">Actividad:</label>
                       <input  class="form-control" type="text" id="actividad" name="actividad">
                             </input>
                      </div>
                      
                      <div class="form-group label-floating">
                        <label for="email">Descripcion:</label>
                       <textarea  class="form-control" type="text" id="descripcion" name="descripcion">
                             </textarea>
                      </div>
                       <div class="form-group label-floating">
                        <label for="email">Fecha Inicio:</label>
                       <input  class="form-control" type="date" id="fecha" name="fecha">
                             </input>
                      </div>
                      <div class="form-group label-floating">
                        <label for="email">Fecha Termino:</label>
                       <input  class="form-control" type="date" id="fecha2" name="fecha2">
                             </input>
                      </div>
                      
                      
                      <div class="form-group label-floating">
                        <label for="email">Semanas:</label>
                      <input  class="form-control" type="number" id="semanas" name="semanas">
                             </input>
                      </div>
                     <label for="email">Dede de poner una x minuscula, en el campo para selecionar la semana de la actividad:</label>
                        <br>
                           <label for="email">Semana 1:</label>
                       <input class="form-control" type="text" name="semana1" id="semana1"></>
                        <br>
                           <label for="email">Semana 2:</label>
                      <input class="form-control" type="text" name="semana2" id="semana2"></>
                       <br>
                           <label for="email">Semana 3:</label>
                      <input class="form-control" type="text" name="semana3" id="semana3"></>
                       <br>
                           <label for="email">Semana 4:</label>
                      <input class="form-control" type="text" name="semana4" id="semana4"></>
                       <br>
                           <label for="email">Semana 5:</label>
                      <input class="form-control" type="text" name="semana5" id="semana5"></>
                       <br>
                           <label for="email">Semana 6:</label>
                      <input class="form-control" type="text" name="semana6" id="semana6"></>
                       <br>
                           <label for="email">Semana 7:</label>
                      <input class="form-control" type="text" name="semana7" id="semana7"></>
                       <br>
                           <label for="email">Semana 8:</label>
                      <input class="form-control" type="text" name="semana8" id="semana8"></>
                       <br>
                           <label for="email">Semana 9:</label>
                      <input class="form-control" type="text" name="semana9" id="semana9"></>
                       <br>
                           <label for="email">Semana 10:</label>
                      <input class="form-control" type="text" name="semana10" id="semana10"></>
                       <br>
                           <label for="email">Semana 11:</label>
                      <input class="form-control" type="text" name="semana11" id="semana11"></>
                       <br>
                           <label for="email">Semana 12:</label>
                      <input class="form-control" type="text" name="semana12" id="semana12"></>
                       <br>
                           <label for="email">Semana 13:</label>
                      <input class="form-control" type="text" name="semana13" id="semana13"></>
                       <br>
                           <label for="email">Semana 14:</label>
                      <input class="form-control" type="text" name="semana14" id="semana14"></>
                       <br>
                           <label for="email">Semana 15:</label>
                      <input class="form-control" type="text" name="semana15" id="semana15"></>
                       <br>
                           <label for="email">Semana 16:</label>
                      <input class="form-control" type="text" name="semana16" id="semana16"></>
                       <br>
                           <label for="email">Semana 17:</label>
                      <input class="form-control" type="text" name="semana17" id="semana17"></>
                       <br>
                           <label for="email">Semana 18:</label>
                      <input class="form-control" type="text" name="semana18" id="semana18"></>
                       <br>
                           <label for="email">Semana 19:</label>
                      <input class="form-control" type="text" name="semana19" id="semana19"></>
                       <br>
                           <label for="email">Semana 20:</label>
                      <input class="form-control" type="text" name="semana20" id="semana20"></>
                       
                      
          </div>
             <p class="text-center">
                          <button href="#!" class="btn btn-info btn-raised btn-sm"><i class="zmdi zmdi-floppy"></i>Modificar Actividad</button>
                        </p>
      
                      
       </div>
  </div>
  </div>
  </div>
</form>



<div class="modal fade" tabindex="-1" role="dialog" id="Dialog-Modificaciones19">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Actualizar</h4>
          </div>
          <div class="modal-body">
           <form action="../Actualizacion/actividad19.php"  method="POST">
           <input  id="idactividad" name="idactividad" type="hidden" ></input>  
          
                      
                     
                      <div class="form-group label-floating">
                        <label for="email">Actividad:</label>
                       <input  class="form-control" type="text" id="actividad" name="actividad">
                             </input>
                      </div>
                      
                      <div class="form-group label-floating">
                        <label for="email">Descripcion:</label>
                       <textarea  class="form-control" type="text" id="descripcion" name="descripcion">
                             </textarea>
                      </div>
                       <div class="form-group label-floating">
                        <label for="email">Fecha Inicio:</label>
                       <input  class="form-control" type="date" id="fecha" name="fecha">
                             </input>
                      </div>
                      <div class="form-group label-floating">
                        <label for="email">Fecha Termino:</label>
                       <input  class="form-control" type="date" id="fecha2" name="fecha2">
                             </input>
                      </div>
                      
                      
                      <div class="form-group label-floating">
                        <label for="email">Semanas:</label>
                      <input  class="form-control" type="number" id="semanas" name="semanas">
                             </input>
                      </div>
                      <label for="email">Dede de poner una x minuscula, en el campo para selecionar la semana de la actividad:</label>
                        <br>
                           <label for="email">Semana 1:</label>
                           
                       <input class="form-control" type="text" name="semana1" id="semana1"></>
                       <br>
                        <label for="email">Semana 1:</label>
                        
                         <input class="form-control" type="text" name="semana2" id="semana2"></>
                         <br>
                       <label for="email">Semana 2:</label>

                      <input class="form-control" type="text" name="semana3" id="semana3"></>
                      <br>
                       <label for="email">Semana 3:</label>
                      <input class="form-control" type="text" name="semana4" id="semana4"></>
                      <br>
                       <label for="email">Semana 4:</label>
                      <input class="form-control" type="text" name="semana5" id="semana5"></>
                      <br>
                       <label for="email">Semana 5:</label>
                      <input class="form-control" type="text" name="semana6" id="semana6"></>
                      <br>
                       <label for="email">Semana 6:</label>
                      <input class="form-control" type="text" name="semana7" id="semana7"></>
                      <br>
                       <label for="email">Semana 7:</label>
                      <input class="form-control" type="text" name="semana8" id="semana8"></>
                      <br>
                       <label for="email">Semana 8:</label>
                      <input class="form-control" type="text" name="semana9" id="semana9"></>
                      <br>
                       <label for="email">Semana 9:</label>
                      <input class="form-control" type="text" name="semana10" id="semana10"></>
                      <br>
                       <label for="email">Semana 10:</label>
                      <input class="form-control" type="text" name="semana11" id="semana11"></>
                      <br>
                       <label for="email">Semana 11:</label>
                      <input class="form-control" type="text" name="semana12" id="semana12"></>
                      <br>
                       <label for="email">Semana 12:</label>
                      <input class="form-control" type="text" name="semana13" id="semana13"></>
                      <br>
                       <label for="email">Semana 13:</label>
                      <input class="form-control" type="text" name="semana14" id="semana14"></>
                      <br>
                       <label for="email">Semana 14:</label>
                      <input class="form-control" type="text" name="semana15" id="semana15"></>
                      <br>
                       <label for="email">Semana 15:</label>
                      <input class="form-control" type="text" name="semana16" id="semana16"></>
                      <br>
                       <label for="email">Semana 16:</label>
                      <input class="form-control" type="text" name="semana17" id="semana17"></>
                      <br>
                       <label for="email">Semana 17:</label>
                      <input class="form-control" type="text" name="semana18" id="semana18"></>
                      <br>
                       <label for="email">Semana 18:</label>
                      <input class="form-control" type="text" name="semana17" id="semana17"></>
                      <br>
                       <label for="email">Semana 19:</label>
                      <input class="form-control" type="text" name="semana19" id="semana19"></>
                      <br>
                       <label for="email">Semana 20:</label>
                      <input class="form-control" type="text" name="semana20" id="semana20"></>
                      <br>
                       <label for="email">Semana 21:</label>
                      <input class="form-control" type="text" name="semana21" id="semana21"></>
                       
                      
          </div>
             <p class="text-center">
                          <button href="#!" class="btn btn-info btn-raised btn-sm"><i class="zmdi zmdi-floppy"></i>Modificar Actividad</button>
                        </p>
      
                      
       </div>
  </div>
  </div>
  </div>
</form>




<div class="modal fade" tabindex="-1" role="dialog" id="Dialog-Modificaciones20">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Actualizar</h4>
          </div>
          <div class="modal-body">
           <form action="../Actualizacion/actividad20.php"  method="POST">
           <input  id="idactividad" name="idactividad" type="hidden" ></input>  
          
                      
                     
                      <div class="form-group label-floating">
                        <label for="email">Actividad:</label>
                       <input  class="form-control" type="text" id="actividad" name="actividad">
                             </input>
                      </div>
                      
                      <div class="form-group label-floating">
                        <label for="email">Descripcion:</label>
                       <textarea  class="form-control" type="text" id="descripcion" name="descripcion">
                             </textarea>
                      </div>
                       <div class="form-group label-floating">
                        <label for="email">Fecha Inicio:</label>
                       <input  class="form-control" type="date" id="fecha" name="fecha">
                             </input>
                      </div>
                      <div class="form-group label-floating">
                        <label for="email">Fecha Termino:</label>
                       <input  class="form-control" type="date" id="fecha2" name="fecha2">
                             </input>
                      </div>
                      
                      
                      <div class="form-group label-floating">
                        <label for="email">Semanas:</label>
                      <input  class="form-control" type="number" id="semanas" name="semanas">
                             </input>
                      </div>
                      <label for="email">Dede de poner una x minuscula, en el campo para selecionar la semana de la actividad:</label>
                        <br>
                           <label for="email">Semana 1:</label>
                       <input class="form-control" type="text" name="semana1" id="semana1"></>
                        <br>
                           <label for="email">Semana 2:</label>
                      <input class="form-control" type="text" name="semana2" id="semana2"></>
                       <br>
                           <label for="email">Semana 3:</label>
                      <input class="form-control" type="text" name="semana3" id="semana3"></>
                       <br>
                           <label for="email">Semana 4:</label>
                      <input class="form-control" type="text" name="semana4" id="semana4"></>
                       <br>
                           <label for="email">Semana 5:</label>
                      <input class="form-control" type="text" name="semana5" id="semana5"></>
                       <br>
                           <label for="email">Semana 6:</label>
                      <input class="form-control" type="text" name="semana6" id="semana6"></>
                       <br>
                           <label for="email">Semana 7:</label>
                      <input class="form-control" type="text" name="semana7" id="semana7"></>
                       <br>
                           <label for="email">Semana 8:</label>
                      <input class="form-control" type="text" name="semana8" id="semana8"></>
                       <br>
                           <label for="email">Semana 9:</label>
                      <input class="form-control" type="text" name="semana9" id="semana9"></>
                       <br>
                           <label for="email">Semana 10:</label>
                      <input class="form-control" type="text" name="semana10" id="semana10"></>
                       <br>
                           <label for="email">Semana 11:</label>
                      <input class="form-control" type="text" name="semana11" id="semana11"></>
                       <br>
                           <label for="email">Semana 12:</label>
                      <input class="form-control" type="text" name="semana12" id="semana12"></>
                       <br>
                           <label for="email">Semana 13:</label>
                      <input class="form-control" type="text" name="semana13" id="semana13"></>
                       <br>
                           <label for="email">Semana 14:</label>
                      <input class="form-control" type="text" name="semana14" id="semana14"></>
                       <br>
                           <label for="email">Semana 15:</label>
                      <input class="form-control" type="text" name="semana15" id="semana15"></>
                       <br>
                           <label for="email">Semana 16:</label>
                      <input class="form-control" type="text" name="semana16" id="semana16"></>
                       <br>
                           <label for="email">Semana 17:</label>
                      <input class="form-control" type="text" name="semana17" id="semana17"></>
                       <br>
                           <label for="email">Semana 18:</label>
                      <input class="form-control" type="text" name="semana18" id="semana18"></>
                       
                       <br>
                           <label for="email">Semana 19:</label>
                      <input class="form-control" type="text" name="semana19" id="semana19"></>
                       <br>
                           <label for="email">Semana 20:</label>
                      <input class="form-control" type="text" name="semana20" id="semana20"></>
                       <br>
                           <label for="email">Semana 21:</label>
                      <input class="form-control" type="text" name="semana21" id="semana21"></>
                       <br>
                           <label for="email">Semana 22:</label>
                      <input class="form-control" type="text" name="semana22" id="semana22"></>
                       
                      
          </div>
             <p class="text-center">
                          <button href="#!" class="btn btn-info btn-raised btn-sm"><i class="zmdi zmdi-floppy"></i>Modificar Actividad</button>
                        </p>
      
                      
       </div>
  </div>
  </div>
  </div>
</form>



<div class="modal fade" tabindex="-1" role="dialog" id="Dialog-Modificaciones21">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Actualizar</h4>
          </div>
          <div class="modal-body">
           <form action="../Actualizacion/actividad21.php"  method="POST">
           <input  id="idactividad" name="idactividad" type="hidden" ></input>  
          
                      
                     
                      <div class="form-group label-floating">
                        <label for="email">Actividad:</label>
                       <input  class="form-control" type="text" id="actividad" name="actividad">
                             </input>
                      </div>
                      
                      <div class="form-group label-floating">
                        <label for="email">Descripcion:</label>
                       <textarea  class="form-control" type="text" id="descripcion" name="descripcion">
                             </textarea>
                      </div>
                       <div class="form-group label-floating">
                        <label for="email">Fecha Inicio:</label>
                       <input  class="form-control" type="date" id="fecha" name="fecha">
                             </input>
                      </div>
                      <div class="form-group label-floating">
                        <label for="email">Fecha Termino:</label>
                       <input  class="form-control" type="date" id="fecha2" name="fecha2">
                             </input>
                      </div>
                      
                      
                      <div class="form-group label-floating">
                        <label for="email">Semanas:</label>
                       <input  class="form-control" type="number" id="semanas" name="semanas">
                             </input>
                      </div>
                      <label for="email">Dede de poner una x minuscula, en el campo para selecionar la semana de la actividad:</label>
                        <br>
                           <label for="email">Semana 1:</label>
                       <input class="form-control" type="text" name="semana1" id="semana1"></>
                       <br>
                          <label for="email">Semana 2:</label>
                      <input class="form-control" type="text" name="semana2" id="semana2"></>
                      <br>
                         <label for="email">Semana 3:</label>
                      <input class="form-control" type="text" name="semana3" id="semana3"></>
                      <br>
                         <label for="email">Semana 4:</label>
                      <input class="form-control" type="text" name="semana4" id="semana4"></>
                      <br>
                         <label for="email">Semana 5:</label>
                      <input class="form-control" type="text" name="semana5" id="semana5"></>
                      <br>
                         <label for="email">Semana 6:</label>
                      <input class="form-control" type="text" name="semana6" id="semana6"></>
                      <br>
                         <label for="email">Semana 7:</label>
                      <input class="form-control" type="text" name="semana7" id="semana7"></>
                      <br>
                         <label for="email">Semana 8:</label>
                      <input class="form-control" type="text" name="semana8" id="semana8"></>
                      <br>
                         <label for="email">Semana 9:</label>
                      <input class="form-control" type="text" name="semana9" id="semana9"></>
                      <br>
                         <label for="email">Semana 10:</label>
                      <input class="form-control" type="text" name="semana10" id="semana10"></>
                      <br>
                         <label for="email">Semana 11:</label>
                      <input class="form-control" type="text" name="semana11" id="semana11"></>
                         <br>
                         <label for="email">Semana 12:</label>
                      <input class="form-control" type="text" name="semana12" id="semana12"></>
                         <br>
                         <label for="email">Semana 13:</label>
                      <input class="form-control" type="text" name="semana13" id="semana13"></>
                         <br>
                         <label for="email">Semana 14:</label>
                      <input class="form-control" type="text" name="semana14" id="semana14"></>
                         <br>
                         <label for="email">Semana 15:</label>
                      <input class="form-control" type="text" name="semana15" id="semana15"></>
                         <br>
                         <label for="email">Semana 16:</label>
                      <input class="form-control" type="text" name="semana16" id="semana16"></>
                         <br>
                         <label for="email">Semana 17:</label>
                      <input class="form-control" type="text" name="semana17" id="semana17"></>
                         <br>
                         <label for="email">Semana 18:</label>
                      <input class="form-control" type="text" name="semana18" id="semana18"></>
                         
                         <br>
                         <label for="email">Semana 19:</label>
                      <input class="form-control" type="text" name="semana19" id="semana19"></>
                         <br>
                         <label for="email">Semana 20:</label>
                      <input class="form-control" type="text" name="semana20" id="semana20"></>
                         <br>
                         <label for="email">Semana 21:</label>
                      <input class="form-control" type="text" name="semana21" id="semana21"></>
                         <br>
                         <label for="email">Semana 22:</label>
                      <input class="form-control" type="text" name="semana22" id="semana22"></>
                         <br>
                         <label for="email">Semana 23:</label>
                      <input class="form-control" type="text" name="semana23" id="semana23"></>
                       
                      
          </div>
             <p class="text-center">
                          <button href="#!" class="btn btn-info btn-raised btn-sm"><i class="zmdi zmdi-floppy"></i>Modificar Actividad</button>
                        </p>
      
                      
       </div>
  </div>
  </div>
  </div>
</form>







<div class="modal fade" tabindex="-1" role="dialog" id="Dialog-Modificaciones22">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Actualizar</h4>
          </div>
          <div class="modal-body">
           <form action="../Actualizacion/actividad22.php"  method="POST">
           <input  id="idactividad" name="idactividad" type="hidden" ></input>  
          
                      
                     
                      <div class="form-group label-floating">
                        <label for="email">Actividad:</label>
                       <input  class="form-control" type="text" id="actividad" name="actividad">
                             </input>
                      </div>
                      
                      <div class="form-group label-floating">
                        <label for="email">Descripcion:</label>
                       <textarea  class="form-control" type="text" id="descripcion" name="descripcion">
                             </textarea>
                      </div>
                       <div class="form-group label-floating">
                        <label for="email">Fecha Inicio:</label>
                       <input  class="form-control" type="date" id="fecha" name="fecha">
                             </input>
                      </div>
                      <div class="form-group label-floating">
                        <label for="email">Fecha Termino:</label>
                       <input  class="form-control" type="date" id="fecha2" name="fecha2">
                             </input>
                      </div>
                      
                      
                      <div class="form-group label-floating">
                        <label for="email">Semanas:</label>
                       <input  class="form-control" type="number" id="semanas" name="semanas">
                             </input>
                      </div>
                       <label for="email">Dede de poner una x minuscula, en el campo para selecionar la semana de la actividad:</label>
                        <br>
                           <label for="email">Semana 1:</label>
                       <input class="form-control" type="text"  name="semana1" id="semana1"></>
                       <br>
                           <label for="email">Semana 2:</label>
                      <input class="form-control" type="text"  name="semana2" id="semana2"></>
                      <br>
                           <label for="email">Semana 3:</label>
                      <input class="form-control" type="text"  name="semana3" id="semana3"></>
                      <br>
                           <label for="email">Semana 4:</label>
                      <input class="form-control" type="text"  name="semana4" id="semana4"></>
                      <br>
                           <label for="email">Semana 5:</label>
                      <input class="form-control" type="text"  name="semana5" id="semana5"></>
                      <br>
                           <label for="email">Semana 6:</label>
                      <input class="form-control" type="text"  name="semana6" id="semana6"></>
                      <br>
                           <label for="email">Semana 7:</label>
                      <input class="form-control" type="text"  name="semana7" id="semana7"></>
                      <br>
                           <label for="email">Semana 8:</label>
                      <input class="form-control" type="text"  name="semana8" id="semana8"></>
                      <br>
                           <label for="email">Semana 9:</label>
                      <input class="form-control" type="text"  name="semana9" id="semana9"></>
                      <br>
                           <label for="email">Semana 10:</label>
                      <input class="form-control" type="text"  name="semana10" id="semana10"></>
                      <br>
                           <label for="email">Semana 11:</label>
                      <input class="form-control" type="text"  name="semana11" id="semana11"></>
                      <br>
                           <label for="email">Semana 12:</label>
                      <input class="form-control" type="text"  name="semana12" id="semana12"></>
                      <br>
                           <label for="email">Semana 13:</label>
                      <input class="form-control" type="text"  name="semana13" id="semana13"></>
                      <br>
                           <label for="email">Semana 14:</label>
                      <input class="form-control" type="text"  name="semana14" id="semana14"></>
                      <br>
                           <label for="email">Semana 15:</label>
                      <input class="form-control" type="text"  name="semana15" id="semana15"></>
                      <br>
                           <label for="email">Semana 16:</label>
                      <input class="form-control" type="text"  name="semana16" id="semana16"></>
                      <br>
                           <label for="email">Semana 17:</label>
                      <input class="form-control" type="text"  name="semana17" id="semana17"></>
                      <br>
                           <label for="email">Semana 18:</label>
                      <input class="form-control" type="text"  name="semana18" id="semana18"></>
                      
                      <br>
                           <label for="email">Semana 19:</label>
                      <input class="form-control" type="text"   name="semana19" id="semana19"></>
                      <br>
                           <label for="email">Semana 20:</label>
                      <input class="form-control" type="text"   name="semana20" id="semana20"></>
                      <br>
                           <label for="email">Semana 21:</label>
                      <input class="form-control" type="text"  name="semana21" id="semana21"></>
                      <br>
                           <label for="email">Semana 22:</label>
                      <input class="form-control" type="text"  name="semana22" id="semana22"></>
                      <br>
                           <label for="email">Semana 23:</label>
                      <input class="form-control" type="text"  name="semana23" id="semana23"></>
                      <br>
                           <label for="email">Semana 24:</label>
                      <input class="form-control" type="text"  name="semana24" id="semana24"></>
                       
                      
          </div>
             <p class="text-center">
                          <button href="#!" class="btn btn-info btn-raised btn-sm"><i class="zmdi zmdi-floppy"></i>Modificar Actividad</button>
                        </p>
      
                      
       </div>
  </div>
  </div>
  </div>
</form>



<div class="modal fade" tabindex="-1" role="dialog" id="Dialog-Modificaciones23">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Actualizar</h4>
          </div>
          <div class="modal-body">
           <form action="../Actualizacion/actividad23.php"  method="POST">
           <input  id="idactividad" name="idactividad" type="hidden" ></input>  
          
                      
                     
                      <div class="form-group label-floating">
                        <label for="email">Actividad:</label>
                       <input  class="form-control" type="text" id="actividad" name="actividad">
                             </input>
                      </div>
                      
                      <div class="form-group label-floating">
                        <label for="email">Descripcion:</label>
                       <textarea  class="form-control" type="text" id="descripcion" name="descripcion">
                             </textarea>
                      </div>
                       <div class="form-group label-floating">
                        <label for="email">Fecha Inicio:</label>
                       <input  class="form-control" type="date" id="fecha" name="fecha">
                             </input>
                      </div>
                      <div class="form-group label-floating">
                        <label for="email">Fecha Termino:</label>
                       <input  class="form-control" type="date" id="fecha2" name="fecha2">
                             </input>
                      </div>
                      
                      
                      <div class="form-group label-floating">
                        <label for="email">Semanas:</label>
                      <input  class="form-control" type="number" id="semanas" name="semanas">
                             </input>
                      </div>
                      <label for="email">Dede de poner una x minuscula, en el campo para selecionar la semana de la actividad:</label>
                        <br>
                           <label for="email">Semana 1:</label>
                       <input class="form-control" type="text" name="semana1" id="semana1"></>
                       <br>
                           <label for="email">Semana 2:</label>
                      <input class="form-control" type="text" name="semana2" id="semana2"></>
                      <br>
                           <label for="email">Semana 3:</label>
                      <input class="form-control" type="text" name="semana3" id="semana3"></>
                      <br>
                           <label for="email">Semana 4:</label>
                      <input class="form-control" type="text" name="semana4" id="semana4"></>
                      <br>
                           <label for="email">Semana 5:</label>
                      <input class="form-control" type="text" name="semana5" id="semana5"></>
                      <br>
                           <label for="email">Semana 6:</label>
                      <input class="form-control" type="text" name="semana6" id="semana6"></>
                      <br>
                           <label for="email">Semana 7:</label>
                      <input class="form-control" type="text" name="semana7" id="semana7"></>
                      <br>
                           <label for="email">Semana 8:</label>
                      <input class="form-control" type="text" name="semana8" id="semana8"></>
                      <br>
                           <label for="email">Semana 9:</label>
                      <input class="form-control" type="text" name="semana9" id="semana9"></>
                      <br>
                           <label for="email">Semana 10:</label>
                      <input class="form-control" type="text" name="semana10" id="semana10"></>
                      <br>
                           <label for="email">Semana 11:</label>
                      <input class="form-control" type="text" name="semana11" id="semana11"></>
                      <br>
                           <label for="email">Semana 12:</label>
                      <input class="form-control" type="text" name="semana12" id="semana12"></>
                      <br>
                           <label for="email">Semana 13:</label>
                      <input class="form-control" type="text" name="semana13" id="semana13"></>
                      <br>
                           <label for="email">Semana 14:</label>
                      <input class="form-control" type="text" name="semana14" id="semana14"></>
                      <br>
                           <label for="email">Semana 15:</label>
                      <input class="form-control" type="text" name="semana15" id="semana15"></>
                      <br>
                           <label for="email">Semana 16:</label>
                      <input class="form-control" type="text" name="semana16" id="semana16"></>
                      <br>
                           <label for="email">Semana 17:</label>
                      <input class="form-control" type="text" name="semana17" id="semana17"></>
                      
                      <br>
                           <label for="email">Semana 18:</label>
                      <input class="form-control" type="text" name="semana17" id="semana17"></>
                      <br>
                           <label for="email">Semana 19:</label>
                      <input class="form-control" type="text" name="semana19" id="semana19"></>
                      <br>
                           <label for="email">Semana 20:</label>
                      <input class="form-control" type="text" name="semana20" id="semana20"></>
                      <br>
                           <label for="email">Semana 21:</label>
                      <input class="form-control" type="text" name="semana21" id="semana21"></>
                      <br>
                           <label for="email">Semana 22:</label>
                      <input class="form-control" type="text" name="semana22" id="semana22"></>
                      <br>
                           <label for="email">Semana 23:</label>
                      <input class="form-control" type="text" name="semana23" id="semana23"></>
                      <br>
                           <label for="email">Semana 24:</label>
                      <input class="form-control" type="text" name="semana24" id="semana24"></>
                      <br>
                           <label for="email">Semana 25:</label>
                      <input class="form-control" type="text" name="semana25" id="semana25"></>
                       
                      
          </div>
             <p class="text-center">
                          <button href="#!" class="btn btn-info btn-raised btn-sm"><i class="zmdi zmdi-floppy"></i>Modificar Actividad</button>
                        </p>
      
                      
       </div>
  </div>
  </div>
  </div>
</form>




<div class="modal fade" tabindex="-1" role="dialog" id="Dialog-Modificaciones24">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Actualizar</h4>
          </div>
          <div class="modal-body">
           <form action="../Actualizacion/actividad24.php"  method="POST">
           <input  id="idactividad" name="idactividad" type="hidden" ></input>  
          
                      
                     
                      <div class="form-group label-floating">
                        <label for="email">Actividad:</label>
                       <input  class="form-control" type="text" id="actividad" name="actividad">
                             </input>
                      </div>
                      
                      <div class="form-group label-floating">
                        <label for="email">Descripcion:</label>
                       <textarea  class="form-control" type="text" id="descripcion" name="descripcion">
                             </textarea>
                      </div>
                       <div class="form-group label-floating">
                        <label for="email">Fecha Inicio:</label>
                       <input  class="form-control" type="date" id="fecha" name="fecha">
                             </input>
                      </div>
                      <div class="form-group label-floating">
                        <label for="email">Fecha Termino:</label>
                       <input  class="form-control" type="date" id="fecha2" name="fecha2">
                             </input>
                      </div>
                      
                      
                      <div class="form-group label-floating">
                        <label for="email">Semanas:</label>
                      <input  class="form-control" type="number" id="semanas" name="semanas">
                             </input>
                      </div>
                      <label for="email">Dede de poner una x minuscula, en el campo para selecionar la semana de la actividad:</label>
                        <br>
                           <label for="email">Semana 1:</label>
                       <input class="form-control" type="text" name="semana1" id="semana1"></>
                        <br>
                           <label for="email">Semana 2:</label>
                      <input class="form-control" type="text" name="semana2" id="semana2"></>
                       <br>
                           <label for="email">Semana 3:</label>
                      <input class="form-control" type="text" name="semana3" id="semana3"></>
                       <br>
                           <label for="email">Semana 4:</label>
                      <input class="form-control" type="text" name="semana4" id="semana4"></>
                       <br>
                           <label for="email">Semana 5:</label>
                      <input class="form-control" type="text" name="semana5" id="semana5"></>
                       <br>
                           <label for="email">Semana 6:</label>
                      <input class="form-control" type="text" name="semana6" id="semana6"></>
                       <br>
                           <label for="email">Semana 7:</label>
                      <input class="form-control" type="text" name="semana7" id="semana7"></>
                       <br>
                           <label for="email">Semana 8:</label>
                      <input class="form-control" type="text" name="semana8" id="semana8"></>
                       <br>
                           <label for="email">Semana 9:</label>
                      <input class="form-control" type="text" name="semana9" id="semana9"></>
                       <br>
                           <label for="email">Semana 10:</label>
                      <input class="form-control" type="text" name="semana10" id="semana10"></>
                       <br>
                           <label for="email">Semana 11:</label>
                      <input class="form-control" type="text" name="semana11" id="semana11"></>
                       <br>
                           <label for="email">Semana 12:</label>
                      <input class="form-control" type="text" name="semana12" id="semana12"></>
                       <br>
                           <label for="email">Semana 13:</label>
                      <input class="form-control" type="text" name="semana13" id="semana13"></>
                       <br>
                           <label for="email">Semana 14:</label>
                      <input class="form-control" type="text" name="semana14" id="semana14"></>
                       <br>
                           <label for="email">Semana 15:</label>
                      <input class="form-control" type="text" name="semana15" id="semana15"></>
                       <br>
                           <label for="email">Semana 16:</label>
                      <input class="form-control" type="text" name="semana16" id="semana16"></>
                       <br>
                           <label for="email">Semana 17:</label>
                      <input class="form-control" type="text" name="semana17" id="semana17"></>
                       <br>
                           <label for="email">Semana 18:</label>
                      <input class="form-control" type="text" name="semana18" id="semana18"></>
                       
                       <br>
                           <label for="email">Semana 19:</label>
                      <input class="form-control" type="text" name="semana19" id="semana19"></>
                       <br>
                           <label for="email">Semana 20:</label>
                      <input class="form-control" type="text" name="semana20" id="semana20"></>
                       <br>
                           <label for="email">Semana 21:</label>
                      <input class="form-control" type="text" name="semana21" id="semana21"></>
                       <br>
                           <label for="email">Semana 22:</label>
                      <input class="form-control" type="text" name="semana22" id="semana22"></>
                       <br>
                           <label for="email">Semana 23:</label>
                      <input class="form-control" type="text" name="semana23" id="semana23"></>
                       <br>
                           <label for="email">Semana 24:</label>
                      <input class="form-control" type="text" name="semana24" id="semana24"></>
                       <br>
                           <label for="email">Semana 25:</label>
                      <input class="form-control" type="text" name="semana25" id="semana25"></>
                       <br>
                           <label for="email">Semana 26:</label>
                      <input class="form-control" type="text" name="semana26" id="semana26"></>
                       
                      
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
      $('#Dialog-Actualizar').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) // Button that triggered the modal
      var recipient0 = button.data('no_control')
     var recipient1 = button.data('actividad')
      var recipient2 = button.data('descripcion')
       var recipient3 = button.data('fecha')
         var recipient4 = button.data('fecha2')
      var recipient5 = button.data('semanas')
     
      
     
     
     
      
           
     
      var modal = $(this)
     
      modal.find('.modal-body #no_control').val(recipient0)
     modal.find('.modal-body #actividad').val(recipient1)
       modal.find('.modal-body #descripcion').val(recipient2)
        modal.find('.modal-body #fecha').val(recipient3)
         modal.find('.modal-body #fecha2').val(recipient4)
       modal.find('.modal-body #semanas').val(recipient5)
      
     
         

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
           var recipient9 = button.data('semana3')
             var recipient10 = button.data('semana4')
               var recipient11 = button.data('semana5')
                 var recipient12 = button.data('semana6')
                   var recipient13 = button.data('semana7')
                     var recipient14 = button.data('semana8')
                       var recipient15 = button.data('semana9')
                         var recipient16 = button.data('semana10')
                           var recipient17 = button.data('semana11')
                             var recipient18 = button.data('semana12')
                               var recipient19 = button.data('semana13')
                                 var recipient20 = button.data('semana14')
                                   var recipient21 = button.data('semana15')
                                     var recipient22 = button.data('semana16')
                                       var recipient23 = button.data('semana17')
                                         var recipient24 = button.data('semana18')
     
         
     
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
       modal.find('.modal-body #semana3').val(recipient9)
       modal.find('.modal-body #semana4').val(recipient10)
       modal.find('.modal-body #semana5').val(recipient11)
       modal.find('.modal-body #semana6').val(recipient12)
       modal.find('.modal-body #semana7').val(recipient13)
       modal.find('.modal-body #semana8').val(recipient14)
       modal.find('.modal-body #semana9').val(recipient15)
       modal.find('.modal-body #semana10').val(recipient16)
       modal.find('.modal-body #semana11').val(recipient17)
       modal.find('.modal-body #semana12').val(recipient18)
       modal.find('.modal-body #semana13').val(recipient19)
       modal.find('.modal-body #semana14').val(recipient20)
       modal.find('.modal-body #semana15').val(recipient21)
       modal.find('.modal-body #semana16').val(recipient22)
       modal.find('.modal-body #semana17').val(recipient23)
       modal.find('.modal-body #semana18').val(recipient24)

     
     
         
         
    });


      $('#Dialog-Modificaciones17').on('show.bs.modal', function (event) {
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
           var recipient9 = button.data('semana3')
             var recipient10 = button.data('semana4')
               var recipient11 = button.data('semana5')
                 var recipient12 = button.data('semana6')
                   var recipient13 = button.data('semana7')
                     var recipient14 = button.data('semana8')
                       var recipient15 = button.data('semana9')
                         var recipient16 = button.data('semana10')
                           var recipient17 = button.data('semana11')
                             var recipient18 = button.data('semana12')
                               var recipient19 = button.data('semana13')
                                 var recipient20 = button.data('semana14')
                                   var recipient21 = button.data('semana15')
                                     var recipient22 = button.data('semana16')
                                       var recipient23 = button.data('semana17')
                                         var recipient24 = button.data('semana18')
                                          var recipient25 = button.data('semana19')
     
           
     
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
       modal.find('.modal-body #semana3').val(recipient9)
       modal.find('.modal-body #semana4').val(recipient10)
       modal.find('.modal-body #semana5').val(recipient11)
       modal.find('.modal-body #semana6').val(recipient12)
       modal.find('.modal-body #semana7').val(recipient13)
       modal.find('.modal-body #semana8').val(recipient14)
       modal.find('.modal-body #semana9').val(recipient15)
       modal.find('.modal-body #semana10').val(recipient16)
       modal.find('.modal-body #semana11').val(recipient17)
       modal.find('.modal-body #semana12').val(recipient18)
       modal.find('.modal-body #semana13').val(recipient19)
       modal.find('.modal-body #semana14').val(recipient20)
       modal.find('.modal-body #semana15').val(recipient21)
       modal.find('.modal-body #semana16').val(recipient22)
       modal.find('.modal-body #semana17').val(recipient23)
       modal.find('.modal-body #semana18').val(recipient24)
       modal.find('.modal-body #semana19').val(recipient25)
     
     
         
         
    });


      $('#Dialog-Modificaciones18').on('show.bs.modal', function (event) {
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
      var recipient9 = button.data('semana3')
      var recipient10 = button.data('semana4')
      var recipient11 = button.data('semana5')
      var recipient12 = button.data('semana6')
      var recipient13 = button.data('semana7')
      var recipient14 = button.data('semana8')
      var recipient15 = button.data('semana9')
      var recipient16 = button.data('semana10')
      var recipient17 = button.data('semana11')
      var recipient18 = button.data('semana12')
      var recipient19 = button.data('semana13')
      var recipient20 = button.data('semana14')
      var recipient21 = button.data('semana15')
      var recipient22 = button.data('semana16')
      var recipient23 = button.data('semana17')
      var recipient24 = button.data('semana18')
      var recipient25 = button.data('semana19')
      var recipient26 = button.data('semana20')
     
           
     
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
       modal.find('.modal-body #semana3').val(recipient9)
       modal.find('.modal-body #semana4').val(recipient10)
       modal.find('.modal-body #semana5').val(recipient11)
       modal.find('.modal-body #semana6').val(recipient12)
       modal.find('.modal-body #semana7').val(recipient13)
       modal.find('.modal-body #semana8').val(recipient14)
       modal.find('.modal-body #semana9').val(recipient15)
       modal.find('.modal-body #semana10').val(recipient16)
       modal.find('.modal-body #semana11').val(recipient17)
       modal.find('.modal-body #semana12').val(recipient18)
       modal.find('.modal-body #semana13').val(recipient19)
       modal.find('.modal-body #semana14').val(recipient20)
       modal.find('.modal-body #semana15').val(recipient21)
       modal.find('.modal-body #semana16').val(recipient22)
       modal.find('.modal-body #semana17').val(recipient23)
       modal.find('.modal-body #semana18').val(recipient24)
       modal.find('.modal-body #semana19').val(recipient25)
      modal.find('.modal-body #semana20').val(recipient26)
     
     
         
         
    });



      $('#Dialog-Modificaciones19').on('show.bs.modal', function (event) {
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
      var recipient9 = button.data('semana3')
      var recipient10 = button.data('semana4')
      var recipient11 = button.data('semana5')
      var recipient12 = button.data('semana6')
      var recipient13 = button.data('semana7')
      var recipient14 = button.data('semana8')
      var recipient15 = button.data('semana9')
      var recipient16 = button.data('semana10')
      var recipient17 = button.data('semana11')
      var recipient18 = button.data('semana12')
      var recipient19 = button.data('semana13')
      var recipient20 = button.data('semana14')
      var recipient21 = button.data('semana15')
      var recipient22 = button.data('semana16')
      var recipient23 = button.data('semana17')
      var recipient24 = button.data('semana18')
      var recipient25 = button.data('semana19')
      var recipient26 = button.data('semana20')
       var recipient27 = button.data('semana21')
     
           
     
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
       modal.find('.modal-body #semana3').val(recipient9)
       modal.find('.modal-body #semana4').val(recipient10)
       modal.find('.modal-body #semana5').val(recipient11)
       modal.find('.modal-body #semana6').val(recipient12)
       modal.find('.modal-body #semana7').val(recipient13)
       modal.find('.modal-body #semana8').val(recipient14)
       modal.find('.modal-body #semana9').val(recipient15)
       modal.find('.modal-body #semana10').val(recipient16)
       modal.find('.modal-body #semana11').val(recipient17)
       modal.find('.modal-body #semana12').val(recipient18)
       modal.find('.modal-body #semana13').val(recipient19)
       modal.find('.modal-body #semana14').val(recipient20)
       modal.find('.modal-body #semana15').val(recipient21)
       modal.find('.modal-body #semana16').val(recipient22)
       modal.find('.modal-body #semana17').val(recipient23)
       modal.find('.modal-body #semana18').val(recipient24)
       modal.find('.modal-body #semana19').val(recipient25)
      modal.find('.modal-body #semana20').val(recipient26)
        modal.find('.modal-body #semana21').val(recipient27)
     
     
         
         
    });


      $('#Dialog-Modificaciones20').on('show.bs.modal', function (event) {
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
      var recipient9 = button.data('semana3')
      var recipient10 = button.data('semana4')
      var recipient11 = button.data('semana5')
      var recipient12 = button.data('semana6')
      var recipient13 = button.data('semana7')
      var recipient14 = button.data('semana8')
      var recipient15 = button.data('semana9')
      var recipient16 = button.data('semana10')
      var recipient17 = button.data('semana11')
      var recipient18 = button.data('semana12')
      var recipient19 = button.data('semana13')
      var recipient20 = button.data('semana14')
      var recipient21 = button.data('semana15')
      var recipient22 = button.data('semana16')
      var recipient23 = button.data('semana17')
      var recipient24 = button.data('semana18')
      var recipient25 = button.data('semana19')
      var recipient26 = button.data('semana20')
      var recipient27 = button.data('semana21')
      var recipient28 = button.data('semana22')
     
           
     
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
       modal.find('.modal-body #semana3').val(recipient9)
       modal.find('.modal-body #semana4').val(recipient10)
       modal.find('.modal-body #semana5').val(recipient11)
       modal.find('.modal-body #semana6').val(recipient12)
       modal.find('.modal-body #semana7').val(recipient13)
       modal.find('.modal-body #semana8').val(recipient14)
       modal.find('.modal-body #semana9').val(recipient15)
       modal.find('.modal-body #semana10').val(recipient16)
       modal.find('.modal-body #semana11').val(recipient17)
       modal.find('.modal-body #semana12').val(recipient18)
       modal.find('.modal-body #semana13').val(recipient19)
       modal.find('.modal-body #semana14').val(recipient20)
       modal.find('.modal-body #semana15').val(recipient21)
       modal.find('.modal-body #semana16').val(recipient22)
       modal.find('.modal-body #semana17').val(recipient23)
       modal.find('.modal-body #semana18').val(recipient24)
       modal.find('.modal-body #semana19').val(recipient25)
      modal.find('.modal-body #semana20').val(recipient26)
      modal.find('.modal-body #semana21').val(recipient27)
      modal.find('.modal-body #semana22').val(recipient28)
     
         
         
    });



      $('#Dialog-Modificaciones21').on('show.bs.modal', function (event) {
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
      var recipient9 = button.data('semana3')
      var recipient10 = button.data('semana4')
      var recipient11 = button.data('semana5')
      var recipient12 = button.data('semana6')
      var recipient13 = button.data('semana7')
      var recipient14 = button.data('semana8')
      var recipient15 = button.data('semana9')
      var recipient16 = button.data('semana10')
      var recipient17 = button.data('semana11')
      var recipient18 = button.data('semana12')
      var recipient19 = button.data('semana13')
      var recipient20 = button.data('semana14')
      var recipient21 = button.data('semana15')
      var recipient22 = button.data('semana16')
      var recipient23 = button.data('semana17')
      var recipient24 = button.data('semana18')
      var recipient25 = button.data('semana19')
      var recipient26 = button.data('semana20')
      var recipient27 = button.data('semana21')
      var recipient28 = button.data('semana22')
      var recipient29 = button.data('semana23')
     
           
     
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
       modal.find('.modal-body #semana3').val(recipient9)
       modal.find('.modal-body #semana4').val(recipient10)
       modal.find('.modal-body #semana5').val(recipient11)
       modal.find('.modal-body #semana6').val(recipient12)
       modal.find('.modal-body #semana7').val(recipient13)
       modal.find('.modal-body #semana8').val(recipient14)
       modal.find('.modal-body #semana9').val(recipient15)
       modal.find('.modal-body #semana10').val(recipient16)
       modal.find('.modal-body #semana11').val(recipient17)
       modal.find('.modal-body #semana12').val(recipient18)
       modal.find('.modal-body #semana13').val(recipient19)
       modal.find('.modal-body #semana14').val(recipient20)
       modal.find('.modal-body #semana15').val(recipient21)
       modal.find('.modal-body #semana16').val(recipient22)
       modal.find('.modal-body #semana17').val(recipient23)
       modal.find('.modal-body #semana18').val(recipient24)
       modal.find('.modal-body #semana19').val(recipient25)
      modal.find('.modal-body #semana20').val(recipient26)
      modal.find('.modal-body #semana21').val(recipient27)
      modal.find('.modal-body #semana22').val(recipient28) 
      modal.find('.modal-body #semana23').val(recipient29) 
         
         
    });


      $('#Dialog-Modificaciones22').on('show.bs.modal', function (event) {
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
      var recipient9 = button.data('semana3')
      var recipient10 = button.data('semana4')
      var recipient11 = button.data('semana5')
      var recipient12 = button.data('semana6')
      var recipient13 = button.data('semana7')
      var recipient14 = button.data('semana8')
      var recipient15 = button.data('semana9')
      var recipient16 = button.data('semana10')
      var recipient17 = button.data('semana11')
      var recipient18 = button.data('semana12')
      var recipient19 = button.data('semana13')
      var recipient20 = button.data('semana14')
      var recipient21 = button.data('semana15')
      var recipient22 = button.data('semana16')
      var recipient23 = button.data('semana17')
      var recipient24 = button.data('semana18')
      var recipient25 = button.data('semana19')
      var recipient26 = button.data('semana20')
      var recipient27 = button.data('semana21')
      var recipient28 = button.data('semana22')
      var recipient29 = button.data('semana23')
      var recipient30 = button.data('semana24')
     
     
           
     
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
       modal.find('.modal-body #semana3').val(recipient9)
       modal.find('.modal-body #semana4').val(recipient10)
       modal.find('.modal-body #semana5').val(recipient11)
       modal.find('.modal-body #semana6').val(recipient12)
       modal.find('.modal-body #semana7').val(recipient13)
       modal.find('.modal-body #semana8').val(recipient14)
       modal.find('.modal-body #semana9').val(recipient15)
       modal.find('.modal-body #semana10').val(recipient16)
       modal.find('.modal-body #semana11').val(recipient17)
       modal.find('.modal-body #semana12').val(recipient18)
       modal.find('.modal-body #semana13').val(recipient19)
       modal.find('.modal-body #semana14').val(recipient20)
       modal.find('.modal-body #semana15').val(recipient21)
       modal.find('.modal-body #semana16').val(recipient22)
       modal.find('.modal-body #semana17').val(recipient23)
       modal.find('.modal-body #semana18').val(recipient24)
       modal.find('.modal-body #semana19').val(recipient25)
      modal.find('.modal-body #semana20').val(recipient26)
      modal.find('.modal-body #semana21').val(recipient27)
      modal.find('.modal-body #semana22').val(recipient28) 
      modal.find('.modal-body #semana23').val(recipient29) 
      modal.find('.modal-body #semana24').val(recipient30)   
         
         
    });


      $('#Dialog-Modificaciones23').on('show.bs.modal', function (event) {
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
      var recipient9 = button.data('semana3')
      var recipient10 = button.data('semana4')
      var recipient11 = button.data('semana5')
      var recipient12 = button.data('semana6')
      var recipient13 = button.data('semana7')
      var recipient14 = button.data('semana8')
      var recipient15 = button.data('semana9')
      var recipient16 = button.data('semana10')
      var recipient17 = button.data('semana11')
      var recipient18 = button.data('semana12')
      var recipient19 = button.data('semana13')
      var recipient20 = button.data('semana14')
      var recipient21 = button.data('semana15')
      var recipient22 = button.data('semana16')
      var recipient23 = button.data('semana17')
      var recipient24 = button.data('semana18')
      var recipient25 = button.data('semana19')
      var recipient26 = button.data('semana20')
      var recipient27 = button.data('semana21')
      var recipient28 = button.data('semana22')
      var recipient29 = button.data('semana23')
      var recipient30 = button.data('semana24')
      var recipient31 = button.data('semana25')
           
     
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
       modal.find('.modal-body #semana3').val(recipient9)
       modal.find('.modal-body #semana4').val(recipient10)
       modal.find('.modal-body #semana5').val(recipient11)
       modal.find('.modal-body #semana6').val(recipient12)
       modal.find('.modal-body #semana7').val(recipient13)
       modal.find('.modal-body #semana8').val(recipient14)
       modal.find('.modal-body #semana9').val(recipient15)
       modal.find('.modal-body #semana10').val(recipient16)
       modal.find('.modal-body #semana11').val(recipient17)
       modal.find('.modal-body #semana12').val(recipient18)
       modal.find('.modal-body #semana13').val(recipient19)
       modal.find('.modal-body #semana14').val(recipient20)
       modal.find('.modal-body #semana15').val(recipient21)
       modal.find('.modal-body #semana16').val(recipient22)
       modal.find('.modal-body #semana17').val(recipient23)
       modal.find('.modal-body #semana18').val(recipient24)
       modal.find('.modal-body #semana19').val(recipient25)
      modal.find('.modal-body #semana20').val(recipient26)
      modal.find('.modal-body #semana21').val(recipient27)
      modal.find('.modal-body #semana22').val(recipient28) 
      modal.find('.modal-body #semana23').val(recipient29) 
      modal.find('.modal-body #semana24').val(recipient30) 
        modal.find('.modal-body #semana25').val(recipient31)         
         
    });


      $('#Dialog-Modificaciones24').on('show.bs.modal', function (event) {
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
      var recipient9 = button.data('semana3')
      var recipient10 = button.data('semana4')
      var recipient11 = button.data('semana5')
      var recipient12 = button.data('semana6')
      var recipient13 = button.data('semana7')
      var recipient14 = button.data('semana8')
      var recipient15 = button.data('semana9')
      var recipient16 = button.data('semana10')
      var recipient17 = button.data('semana11')
      var recipient18 = button.data('semana12')
      var recipient19 = button.data('semana13')
      var recipient20 = button.data('semana14')
      var recipient21 = button.data('semana15')
      var recipient22 = button.data('semana16')
      var recipient23 = button.data('semana17')
      var recipient24 = button.data('semana18')
      var recipient25 = button.data('semana19')
      var recipient26 = button.data('semana20')
      var recipient27 = button.data('semana21')
      var recipient28 = button.data('semana22')
      var recipient29 = button.data('semana23')
      var recipient30 = button.data('semana24')
      var recipient31 = button.data('semana25')
      var recipient32 = button.data('semana26')
            
     
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
       modal.find('.modal-body #semana3').val(recipient9)
       modal.find('.modal-body #semana4').val(recipient10)
       modal.find('.modal-body #semana5').val(recipient11)
       modal.find('.modal-body #semana6').val(recipient12)
       modal.find('.modal-body #semana7').val(recipient13)
       modal.find('.modal-body #semana8').val(recipient14)
       modal.find('.modal-body #semana9').val(recipient15)
       modal.find('.modal-body #semana10').val(recipient16)
       modal.find('.modal-body #semana11').val(recipient17)
       modal.find('.modal-body #semana12').val(recipient18)
       modal.find('.modal-body #semana13').val(recipient19)
       modal.find('.modal-body #semana14').val(recipient20)
       modal.find('.modal-body #semana15').val(recipient21)
       modal.find('.modal-body #semana16').val(recipient22)
       modal.find('.modal-body #semana17').val(recipient23)
       modal.find('.modal-body #semana18').val(recipient24)
       modal.find('.modal-body #semana19').val(recipient25)
      modal.find('.modal-body #semana20').val(recipient26)
      modal.find('.modal-body #semana21').val(recipient27)
      modal.find('.modal-body #semana22').val(recipient28) 
      modal.find('.modal-body #semana23').val(recipient29) 
      modal.find('.modal-body #semana24').val(recipient30) 
      modal.find('.modal-body #semana25').val(recipient31) 
      modal.find('.modal-body #semana26').val(recipient32)         
         
    });
    
  </script>



</body>
</html>
