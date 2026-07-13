<?php 
//require('../rsesiones.php');
	session_start();
	

 ?>
<div class="row">
	<div class="col-sm-12">
	
		<table class="table table-hover table-condensed table-bordered">
		<caption>
			
		</caption>
			<tr>
				<td>Periodo</td>
				<td>Status</td>
				
			
				<td>Eliminar</td>
			</tr>

			<?php




      
      include '../config.inc.php';
        $db=new Conect_MySql();
      
       $sql = "SELECT  *  FROM   periodos                ";
           $query = $db->execute($sql);
            while($datos=$db->fetch_row($query)){?>
            <tr>
     
            <td><?php echo $datos['periodo']; ?></td>
             
                <td><?php echo $datos['status']; ?></td>
                
              


                 <td><input class="btn btn-success btn-raised btn-xs"  type="button"  name="miboton" id="miboton" onclick="eliminaperiodo('<?php echo $datos['idperiodo'] ?>')"  value="Eliminar"/></td> 
     

            
            </tr>

      <?php  } ?>
		</table>
	</div>
</div>