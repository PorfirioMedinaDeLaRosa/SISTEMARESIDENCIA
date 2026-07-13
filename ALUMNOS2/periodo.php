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
			 
			</div>
		 
		</div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12">
					<ul class="nav nav-tabs" style="margin-bottom: 15px;">
					  	<li class="active"><a href="#new" data-toggle="tab">Periodo De Residencia Profesional</a></li>
					  
					</ul>
					<div id="myTabContent" class="tab-content">
						<div class="tab-pane fade active in" id="new">
							<div class="container-fluid">
								<div class="row">
								
									<div style="width: 500px;margin: auto;border: 1px solid blue;padding: 30px;">
            <h4>Periodo de realización de residencia profesional</h4>
            <form name="add_name" id="add_name" method="POST" enctype="multipart/form-data"   >
            	<input type="hidden" name="no_control" id="no_control" value="<?php echo 
          $datos['no_control']; ?>"></input>
            
    	<select  onkeyup="validar()"   name="periodo" id="periodo" onChange="mostrar(this.value);"  >
    

        <option value="0">Opcion</option>
        <?php
		include'../conexion.php'; 					
          $query = $mysqli -> query ("SELECT * FROM periodos where status= 'Activo' ");
											
          while ($valores = mysqli_fetch_array($query)) {
												
            echo '<option value="'.$valores[periodo].'">'.$valores[periodo].'</option>';
            

													
          }
        ?> </select><br><br>
         
       <input type="button" name="submit" id="submit" class="btn btn-info btn-raised btn-sm" value="Registar" />

        
    </form> 


     
        </div>
        <br>
        <p class="text-center">   
        
                                        <button name="submit2" class="btn btn-info btn-raised btn-sm" >
                                        <a href="finalproyecto.php"><i class=""></i>Siguiente Paso</a>
                                        </button>
                                        </p>

								</div>
							</div>
						</div>

					  	
					</div>
				</div>
			</div>
		</div>

	</section>


	<!-- Notifications area -->
	
 <script type="text/javascript">
function mostrar(id) {
    if (id == "0") {
        $("#submit").hide();
        $("#submit2").hide();
        
    }

    else{
    	 $("#submit").show();
    	 $("#submit2").hide();
    }
}
</script>


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
	function validar(){
  var validado = true;
  elementos = document.getElementsByClassName("form-control");
  for(i=0;i<elementos.length;i++){
    if(elementos[i].value == "" || elementos[i].value == null){
    validado = false
    }
  }
  if(validado){
  document.getElementById("submit").disabled = false;
  
  }else{
     document.getElementById("submit").disabled = true;
  //Salta un alert cada vez que escribes y hay un campo vacio
  //alert("Hay campos vacios")   
  }
}   
 $(document).ready(function(){  
     
        
      $('#submit').click(function(){            
           $.ajax({  
                url:"../Actualizacion2/actualizaralumnoperiodo.php",  
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
