<?php
//require('../rsesiones.php');
session_start();
if(!isset($_SESSION["user_id"]) || $_SESSION["user_id"]==null){
	print "<script>window.location='../index.php';</script>";
}
$idA =$_SESSION["user_id"]
?>
					



							<div class="table-responsive">
								<table class="table table-hover text-center"  id="table2"  >
									<thead>
										<tr>
											<th class="text-center">#</th>
											<th class="text-center">Carrera</th>
											
											<th class="text-center">Operaciones</th>
											
										</tr>
									</thead>
									<?php




      
      include '../config.inc.php';
        $db=new Conect_MySql();
      
       $sql = "SELECT  *  FROM   carreras               ";
           $query = $db->execute($sql);
            while($datos=$db->fetch_row($query)){?>
            <tr>
     
            <td><?php echo $datos['idcarrera']; ?></td>
             
                <td><?php echo $datos['carrera']; ?></td>
                
              
                 <td><input type="button"  class="btn btn-info btn-raised btn-sm"  name="miboton" id="miboton" onclick="eliminacarrera('<?php echo $datos['idcarrera'] ?>')"  value="Eliminar"/></td> 
     

            
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

	