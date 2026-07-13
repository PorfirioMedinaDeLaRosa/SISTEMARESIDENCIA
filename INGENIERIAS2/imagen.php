<?php


include '../config.inc.php';
  $db=new Conect_MySql();

       $sql = "SELECT  *  FROM  logos WHERE idlogos='5'  ";
           $query = $db->execute($sql);
            while($datos=$db->fetch_row($query)){?>
            <tr>
     
            <td><?php echo $datos['idlogos']; ?></td>
                <td><?php echo $datos['tamanioL']; ?></td>
                <td><?php echo $datos['tipoL']; ?></td>
                <td><?php echo $datos['nombre_archivo']; ?></td>
               
                <td><a href="archivoimagen.php?id=<?php echo $datos['idlogos']?>" ><?php echo $datos['nombre_archivo']; ?></a></td>

                 
            </tr>

      <?php  } ?>
