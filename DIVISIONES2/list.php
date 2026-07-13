
	<?php
	//require('../rsesiones.php');
session_start();

if(!isset($_SESSION["division_id"]) || $_SESSION["division_id"]==null){
	print "<script>window.location='../index.html';</script>";
}
$idGT =$_SESSION["division_id"]



?>						



							<div class="table-responsive">
								<table class="table table-hover text-center"  id="table2"  >
									<thead>
										<tr>
											<th class="text-center">#</th>
											<th class="text-center">Nombre</th>
											<th class="text-center">Carrera</th>
											
											<th class="text-center">Email</th>
											<th class="text-center">Telefono</th>
											
											<th class="text-center">Operaciones</th>
											<th class="text-center">Operaciones</th>
											
										</tr>
									</thead>
									<?php




      
      include '../config.inc.php';
        $db=new Conect_MySql();
      
       $sql = "SELECT  *  FROM  asesor , divisiones 
       where asesor.idD = divisiones.idD And divisiones.idD = '$idGT'
               
                 ";
           $query = $db->execute($sql);
            while($datos=$db->fetch_row($query)){?>
            <tr>
     
            <td><?php echo $datos['IdAS']; ?></td>
             
                <td><?php echo $datos['NombreAS']; ?></td>
                 <td><?php echo $datos['CarreraAS']; ?></td>
                 <td><?php echo $datos['EmailAS']; ?></td>
                 <td><?php echo $datos['TelefonoAS']; ?></td>
                 
              
                 <td><input type="button"  class='btn btn-danger btn-raised btn-xs' name="miboton" id="miboton" onclick="eliminarDato('<?php echo $datos['IdAS'] ?>')"  value="Eliminar"/></td> 
                 <td><?php echo "<a class='btn btn-danger btn-raised btn-xs' href='actualizarasesor.php? id=" .$datos['IdAS'] ."'><span class='glyphicon glyphicon-actualizar'></span>Actualizar</a>";

                     
                
 


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

	