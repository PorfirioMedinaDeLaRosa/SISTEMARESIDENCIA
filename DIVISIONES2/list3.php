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
										
											<th class="text-center">Número de Oficio</th>
											
											<th class="text-center">Asesor</th>
											
											<th class="text-center">Carrera</th>
											<th class="text-center">Residente</th>
											<th class="text-center">Proyecto</th>

											<th class="text-center">Periodo</th>
											
											<th class="text-center">Fecha de Asignación</th>
											<th class="text-center">Jefe</th>
											<th class="text-center">Cargo</th>
											<th class="text-center">Operaciones</th>
											<th class="text-center">Operaciones</th>
											
										</tr>
									</thead>
									<?php




      
      include '../config.inc.php';
        $db=new Conect_MySql();
      
       $sql = "SELECT  *  FROM  oficioasesor
       where  idD = '$idGT' ORDER BY oficioasesor.idoficio  ASC     
                 ";
           $query = $db->execute($sql);
            while($datos=$db->fetch_row($query)){?>
            <tr>
     
           
             
                <td><?php echo $datos['Numero']; ?></td>
                
                 <td><?php echo $datos['Asesor']; ?></td>
                 <td><?php echo $datos['Carrera']; ?></td>
                 <td><?php echo $datos['alumno']; ?></td>
                  <td><?php echo $datos['Proyecto']; ?></td>


                  <td><?php echo $datos['Periodo']; ?></td>
                 <td><?php echo $datos['Fecha2']; ?></td>
                 <td><?php echo $datos['Jefe']; ?></td>
                  <td><?php echo $datos['Cargo']; ?></td>
              
                 <td><input type="button"  class='btn btn-danger btn-raised btn-xs'  name="miboton" id="miboton" onclick="eliminaroficio('<?php echo $datos['idoficio'] ?>')"  value="Eliminar"/></td>
                 <td><?php echo "<a class='btn btn-danger btn-raised btn-xs' href='asignacion.php? id=" .$datos['idoficio'] ."'><span class='glyphicon glyphicon-actualizar'></span>Generar Reporte</a>";

                     
                
 


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

	