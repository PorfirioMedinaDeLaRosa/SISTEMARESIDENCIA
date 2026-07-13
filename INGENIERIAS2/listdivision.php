<?php
//require('../rsesiones.php');
session_start();
if(!isset($_SESSION["user_id"]) || $_SESSION["user_id"]==null){
	header('location:../index.php');
}
$idA =$_SESSION["user_id"]
?>
					



							<div class="table-responsive">
								<table class="table table-hover text-center"  id="table2"  >
									<thead>
										<tr>
											<th class="text-center">#</th>
											<th class="text-center">Nombre</th>
											<th class="text-center">Cargo</th>
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
      
       $sql = "SELECT  *  FROM   divisiones                ";
           $query = $db->execute($sql);
            while($datos=$db->fetch_row($query)){?>
            <tr>
     
            <td><?php echo $datos['idD']; ?></td>
             
                <td><?php echo $datos['NombreD']; ?></td>
                 <td><?php echo $datos['CargoD']; ?></td>
                 <td><?php echo $datos['CarreraD']; ?></td>
                 <td><?php echo $datos['EmailD']; ?></td>
                  <td><?php echo $datos['TelefonoD']; ?></td>
                
              
                 <td><input type="button" class='btn btn-danger btn-raised btn-xs'  name="miboton" id="miboton" onclick="eliminaDato('<?php echo $datos['idD'] ?>')"  value="Eliminar"/></td> 

                 <td><?php echo "<a class='btn btn-danger btn-raised btn-xs' href='actualizardivision.php? id=" .$datos['idD'] ."'><span class='glyphicon glyphicon-actualizar'></span>Actualizar</a>";

                     
                
 


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

	