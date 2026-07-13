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
											<th class="text-center">Cargo</th>
											<th class="text-center">Carrera</th>
											
											<th class="text-center">Email</th>
											<th class="text-center">Telefono</th>
											
											<th class="text-center">Operaciones</th>
											
										</tr>
									</thead>
									<?php




      
      include '../config.inc.php';
        $db=new Conect_MySql();
      
       $sql = "SELECT  *  FROM  presidente, divisiones
       where presidente.idD = divisiones.idD AND divisiones.idD = '$idGT'
               
                 ";
           $query = $db->execute($sql);
            while($datos=$db->fetch_row($query)){?>
            <tr>
     
            <td><?php echo $datos['idP']; ?></td>
             
                <td><?php echo $datos['NombreP']; ?></td>
                 <td><?php echo $datos['Cargo']; ?></td>
                 <td><?php echo $datos['CarreraP']; ?></td>
                 <td><?php echo $datos['EmailP']; ?></td>
                 <td><?php echo $datos['TelefonoP']; ?></td>
                 
              
                 <td><input type="button" class='btn btn-danger btn-raised btn-xs'   name="miboton" id="miboton" onclick="eliminarDato2('<?php echo $datos['idP'] ?>')"  value="Eliminar"/></td> 
     

            
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

	