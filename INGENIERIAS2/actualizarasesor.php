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
			<!-- SideBar User info -->
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
		<!-- Content page -->
		<div class="container-fluid">
			<div class="page-header">
			
			  
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
   <body>
   	<?php 

$id = $_GET['id'];

   	 ?>
        <div style="width: 500px;margin: auto;border: 1px solid blue;padding: 30px;">
            <h4>Subir Alumnos</h4>
            <form  name="add_name" id="add_name"  method="POST">
<input type="hidden" name="id" id="id" value="<?php echo $id; ?>">
    	<div>
  <?php 


            $sql = "SELECT  *  FROM  numerodeasesores
                WHERE  id ='$id ' 
                 ";
            $query = $db->execute($sql);
  

  

  
    if( mysqli_num_rows($query)  > 0) {

      
         if($datos=$db->fetch_row($query)){?>
           
           
       
<?php  }}  ?>


<div>



<h5>Asesor Nuevo</h5>
  
   <select     name="Texto1" id="Texto1"   >
        <option value="0">Debe Eligir una Opción</option>
        
        <?php
   include'../conexion.php';     
          $query = $mysqli -> query ("SELECT * FROM asesor  ");
                      
          while ($valores = mysqli_fetch_array($query)) {
                        
            echo '<option value="'.$valores[IdAS].'">'.$valores[NombreAS]."  ".$valores[ap]." ".$valores[am].'</option>';
            

                          
          }
        ?> </select>
    
    </div><br><br>

     <p class="text-center">
										    	 <input type="button" name="submit" id="submit" class="btn btn-info btn-raised btn-sm" value="Actualizar" />
										    </p>
    </form>       
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
	<script type="text/javascript">
		
        
     $(document).ready(function(){  
     
        
      $('#submit').click(function(){            
           $.ajax({  
                url:"asignarasesornuevo.php",  
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