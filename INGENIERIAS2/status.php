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
                  <div class="full-box dashboard-sideBar-UserInfo">
                        <figure class="full-box">
                              <img src="../assets/img/loginFont3.jpg" alt="UserIcon">
                              <figcaption class="text-center text-titles">User Name</figcaption>
                        </figure>
                        <ul class="full-box list-unstyled text-center">
                              <li>
                                    <a href="#!">
                                          <i class="zmdi zmdi-settings"></i>
                                    </a>
                              </li>
                              <li>
                                    <a href="#!" class="btn-exit-system">
                                          <i class="zmdi zmdi-power"></i>
                                    </a>
                              </li>
                        </ul>
                  </div>
                  <!-- SideBar Menu -->
      <ul class="list-unstyled full-box dashboard-sideBar-Menu">
      <?php
include'menuadmin';

?>

      </ul>
    </div>
  </section>
  <!-- Content page-->
  <section class="full-box dashboard-contentPage">
    <!-- NavBar -->
    <nav class="full-box dashboard-Navbar">
      <ul class="full-box list-unstyled text-right">
        <li class="pull-left">
          <a href="#!" class="btn-menu-dashboard"><i class="zmdi zmdi-more-vert"></i></a>
        </li>
        <li>
          <a href="#!" class="btn-Notifications-area">
            <i class="zmdi zmdi-notifications-none"></i>
            <span class="badge">7</span>
          </a>
        </li>
        <li>
          <a href="#!" class="btn-search">
            <i class="zmdi zmdi-search"></i>
          </a>
        </li>
        <li>
          <a href="#!" class="btn-modal-help">
            <i class="zmdi zmdi-help-outline"></i>
          </a>
        </li>
      </ul>
    </nav>
    <!-- Content page -->
    <div class="container-fluid">
      <div class="page-header">
        <h1 class="text-titles"><i class="zmdi zmdi-account zmdi-hc-fw"></i> Users <small>Admin</small></h1>
      
  
<input id="miboton" type="button" value="Refrescar" />
                                       
      </div>
      
    </div>
   
 <?php

$no_control = $_GET['no_control'];
$carrera = $_GET['carrera'];
$periodo = $_GET['periodo'];


echo "$no_control";
echo "$carrera";
echo "$periodo";


 


 ?> 
  


  <div style="width: 500px;margin: auto;border: 1px solid blue;padding: 30px;">
            <h4>Aceptación </h4>
             <div class="modal-body">
            <form  method="POST" name="add_name" id="add_name"  enctype="multipart/form-data">
              <input  id="no_control" name="no_control" type="hidden"  value="<?php echo $no_control; ?>">
               <input  id="carrera" name="carrera" type="hidden"  value="<?php echo $carrera; ?>">
            
             </input> 
                <table>
                 <tr>
                      <div class="form-group label-floating">
                      <h5>Status</h5>
                       <select id="status" name="status" class="form-control">
                         <option>Recibido</option>
                         <option>Aceptar</option>
                         <option>Rechazar</option>
                       </select>
                         
                      </div>
                    </tr>
                    
                   
                      <h5>Observaciones</h5><textarea class="form-control" type="text" id="observacion" name="observacion" ></textarea>
                             </input>
                             <br><br>
                       
                        <p class="text-center">
                          <button href="" type="button"  name="submit" id="submit" class="btn btn-info btn-raised btn-sm"><i class="zmdi zmdi-floppy"></i> Save</button>
                        </p>
                       
                   
                  
                </table>
                 </form> 
                 <form name="actualizar" action="" method="post">
<input type="submit" name="Actualizar" value="Actualizar"
onClick="actualizar()"/>
</form>
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

  
  
    
    
 <script> 
  
 $(document).ready(function(){  
     
        
      $('#submit').click(function(){            
           $.ajax({  
                url:"../Actualizacion/actualizarsolicitud.php",  
                method:"POST",  
                data:$('#add_name').serialize(),  
                success:function(data)  
                {  
                     alert(data);  
                     
                     $("#solicitudresidencia").load('solicitudresidencia.php');
                 
                }  
           });  
      });  
 });


 </script>

 
  
</body>

<script type="text/javascript">
  function actualizar (){

????????? //lanza la ejecución de un script PHP
 parent.location.href='solicitudresidencia.php'; // refresca la pagina

}  
</script>
</html>
