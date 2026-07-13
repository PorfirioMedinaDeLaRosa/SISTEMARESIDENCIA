<?php
//require('../rsesiones.php');
session_start();

if(!isset($_SESSION["gestion_id"]) || $_SESSION["gestion_id"]==null){
	print "<script>window.location='../index.php';</script>";
}
$idGT =$_SESSION["gestion_id"]




?>
							<div class="table-responsive">
								<table class="table table-hover text-center"  id="table2"  >
									<thead>
										<tr>
											<th class="text-center">No Control</th>
											<th class="text-center">Nombre completo</th>
											
											<th class="text-center">Número de Oficio</th>
											
											
											<th class="text-center">Carrera</th>
											
											<th class="text-center">Proyecto</th>

											<th class="text-center">Periodo</th>
											<th class="text-center">Empresa</th>
											
											
											<th class="text-center">Operaciones</th>
											<th class="text-center">Operaciones</th>
											
										</tr>
									</thead>
									<?php




      
      include '../config.inc.php';
        $db=new Conect_MySql();
      
       $sql = "SELECT  *  FROM  cartapresentacion  where id>='830';
      
               
                 ";
           $query = $db->execute($sql);
            while($datos=$db->fetch_row($query)){?>
            <tr>
     
          
              <td><?php echo $datos['no_control']; ?></td>
               <td><?php echo $datos['nombre']; ?></td>

                <td><?php echo $datos['oficio']; ?></td>
                 <td><?php echo $datos['carrera']; ?></td>
                 <td><?php echo $datos['proyecto']; ?></td>
                 <td><?php echo $datos['periodo']; ?></td>
                  <td><?php echo $datos['empresa']; ?></td>
                 


                 
              
                 <td><input type="button"  class='btn btn-danger btn-raised btn-xs'  name="miboton" id="miboton" onclick="eliminarcarta('<?php echo $datos['id'] ?>')"  value="Eliminar"/></td>
                 <td><?php echo "<a class='btn btn-danger btn-raised btn-xs' href='cartapresentacion.php? id=" .$datos['id'] ."'><span class='glyphicon glyphicon-actualizar'></span>Generar Reporte</a>";

                     
                
 


            ?></td> 
     

            
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
					</div>
				</div>
			</div>

	