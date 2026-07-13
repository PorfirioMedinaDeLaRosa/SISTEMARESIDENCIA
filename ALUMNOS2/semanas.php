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
       <!---   <img src="../assets/img/loginFont3.jpg" alt="UserIcon"><br><br> -->
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
    <?php 



//Si se ha pulsado el botón de buscar

   
    //Conectamos con la base de datos en la que vamos a buscar
   
     //   $db->query('set name utf8');

            $sql12 = "SELECT  *  FROM  proyectos, asignacionproyecto
                WHERE proyectos.no_control= asignacionproyecto.no_controlp AND asignacionproyecto.no_control ='$idGT'
                 ";
            $query12 = $db->execute($sql12);
  

  

   // $count_results = mysqli_num_rows($query_searched);

    //Si ha resultados
    if( mysqli_num_rows($query12)  > 0) {

       // echo '<h2>Se han encontrado '.$count_results.' resultados.</h2>';

       // echo '<ul>';
     // while($datos=$db->fetch_row($query))
         if($datos12=$db->fetch_row($query12)){?>
          
       
<?php  }} ?>
   
 
</script>
    <div class="container-fluid">
      <div class="page-header">
        <h1 class="text-titles"><i class="zmdi zmdi-account zmdi-hc-fw"></i>Proyecto </h1>
       <div style="width: 500px;margin: auto;border: 1px solid blue;padding: 30px;">
            <h4>Número de Semanas de residencia</h4>
            <form name="add_name" id="add_name" method="POST" enctype="multipart/form-data"   >
            <input type="hidden" name="no_control" id="no_control" value="<?php echo 
          $datos12['no_controlp']; ?>">
          <input type="hidden" name="idproyecto" id="idproyecto" value="<?php echo 
          $datos12['idproyecto']; ?>">

      <select   class="form" id="semanas" name="semanas">
                              <option>16</option>
                              <option>17</option>
                              <option>18</option>
                              <option>19</option>
                              <option>20</option>
                              <option>21</option>
                              <option>22</option>
                              <option>23</option>
                              <option>24</option>
                             

                            </select><br><br>
         
       <input type="button" name="submit" id="submit" class="btn btn-info btn-raised btn-sm" value="Registar" />

        
    </form> 


     
        </div><br><br>
         <p class="text-center">    
                                        
                                        <button class="btn btn-info btn-raised btn-sm" >
                                        <a href="tablasecuencias.php"><i class=""></i>Siguiente</a>
                                        </button>
                                        </p>         
            </div>
    </div>
    
   
  </section>



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

  <script type="text/javascript">
    $(document).ready(function(){  
     
        
      $('#submit').click(function(){            
           $.ajax({  
                url:"../Actualizacion2/semanas.php",  
                method:"POST",  
                data:$('#add_name').serialize(),  
                success:function(data)  
                {  
                     alert(data);  
                     $('#add_name')[0].load();  
                }  
           });  
      });  
 }); 
  </script>

</body>
</html>
