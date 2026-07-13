
<?php

  include '../conexion2.php';
       

if(!empty($_POST)){


 

    $pattern = $_POST['pattern'];

 

    $db = new conexion();

    $conex = $db->getConexion();


	 $sql = " SELECT tb_residentes.no_control , tb_residentes.creditosc, tb_residentes.creditosr, tb_residentes.porcentaje, tb_residentes.promedio, tb_residentes.periodo, tb_residentes.ap,  tb_residentes.am,  tb_residentes.nombre, tb_residentes.semestre,tb_residentes.telefono,tb_residentes.seguro, tb_residentes.folios, tb_residentes.carrera, tb_residentes.email, 
     tb_residentes.calle, tb_residentes.noe, tb_residentes.noi, tb_residentes.colonia, tb_residentes.municipio, tb_residentes.estado, asignacionproyecto.mensaje, asignacionproyecto.no_controlp, asignacionproyecto.fecha, proyectos.nombrep, proyectos.StatusGeneral , proyectos.periodop , empresa.NombreE, empresa.NombreTE, empresa.PuestoTE, empresa.PersonaAEE, empresa.PuestoAEE,  empresa.AsesorE, empresa.PuestoAE, empresa.PersonaCE, empresa.PuestoCE, asignacionempresa.no_controle  , proyectos.IdAS , empresa.status, asesor.NombreAS
FROM tb_residentes , asignacionproyecto , proyectos, empresa, asignacionempresa,  asesor, numerodeasesores
WHERE asignacionproyecto.no_controlp=proyectos.no_control 
AND tb_residentes.no_control=asignacionproyecto.no_control AND proyectos.idproyecto = numerodeasesores.IdAS4     
                AND asesor.IdAS = numerodeasesores.IdAS   AND asignacionempresa.no_controle =empresa.no_control AND   tb_residentes.no_control = asignacionempresa.no_control AND tb_residentes.no_control LIKE '".$pattern."%';";

 
   //$sql = " SELECT tb_residentes.no_control , tb_residentes.creditosc, tb_residentes.creditosr, tb_residentes.porcentaje, tb_residentes.promedio, tb_residentes.periodo, tb_residentes.ap,  tb_residentes.am,  tb_residentes.nombre, tb_residentes.semestre,tb_residentes.telefono,tb_residentes.seguro, tb_residentes.folios, tb_residentes.carrera, tb_residentes.email, 
  //   tb_residentes.calle, tb_residentes.noe, tb_residentes.noi, tb_residentes.colonia, tb_residentes.municipio, tb_residentes.estado, asignacionproyecto.mensaje, asignacionproyecto.no_controlp, asignacionproyecto.fecha, proyectos.nombrep, proyectos.StatusGeneral , proyectos.periodop , empresa.NombreE, empresa.NombreTE, empresa.PuestoTE, empresa.PersonaAEE, empresa.PuestoAEE,  empresa.AsesorE, empresa.PuestoAE, empresa.PersonaCE, empresa.PuestoCE, asignacionempresa.no_controle, asesor.IdAS , proyectos.IdAS , asesor.NombreAS
//FROM tb_residentes , asignacionproyecto , proyectos, empresa, asignacionempresa, asesor
//WHERE asignacionproyecto.no_controlp=proyectos.no_control 
//AND tb_residentes.no_control=asignacionproyecto.no_control AND asesor.IdAS= proyectos.IdAS  AND asignacionempresa.no_controle =empresa.no_control AND   tb_residentes.no_control = asignacionempresa.no_control AND tb_residentes.no_control LIKE '".$pattern."%';";

 

    if($result = $conex->query($sql)){

 

        $numrows = $result->num_rows;

 

        if($numrows > 0){

            $registros = '<table class="table">
        <tr class="bg-primary"> 

                       

                            <th>No_control</th >

                            <th>Nombre</th >

                            <th>Apellido Materno</th >

                            <th>Apellido Paterno</th >

                            <th>Semestre</th >

                            <th>Periodo Escolar</th >

                            <th>Teléfono</th >

                            <th>Seguro</th >


                            <th>Folio</th >

                            <th>Carrera</th >

                            <th>Email</th >

                            <th>Créditos Complementarios</th >

                            <th>Número de creditos acumulados</th >

                            <th>Porcentaje</th >


                            <th>Promedio General</th >


                            <th>Calle o Avenidad</th >

                            <th>Número Exterior</th >

                            <th>Número Interior</th >

                            <th>Colonia</th >

                            <th>Municipio</th >

                            <th>Estado</th >







                            <th>Nombre del proyecto</th >

                            <th>Periodo del proyecto</th >

                            <th>Empresa</th >

                            <th>Nombre del titular de la empresa</th >

                            <th>Puesto del titular</th >

                            <th>Nombre de la persona que firmara el acuerdo</th >

                            <th>Puesto</th >



                            <th>Nombre de la persona a quien se dirigue la carta de presentación</th >

                            <th>Puesto</th >


                            <th>Asesor Externo</th >

                            <th>Puesto</th >

                            <th>Asesor Interno</th >

                            <th>Mensaje</th >

                            <th>Fecha</th >

                            <th>Status Proyecto</th >

                          


                        </tr>';

  
                           
                 
                   
               


            while($datos = $result->fetch_assoc()){

 

                $registros = $registros.

                    '<tr>'.

                    '<td>'.$datos['no_control'].'</td >'.

                    '<td>'.$datos['nombre'].'</td >'.

                    '<td>'.$datos['ap'].'</td >'.

                    '<td>'.$datos['am'].'</td >'.


                     '<td>'.$datos['carrera'].'</td >'.

                    '<td>'.$datos['semestre'].'</td >'.

                    '<td>'.$datos['telefono'].'</td >'.

                    '<td>'.$datos['seguro'].'</td >'.


                     '<td>'.$datos['folios'].'</td >'.





                     '<td>'.$datos['carrera'].'</td >'.

                    '<td>'.$datos['email'].'</td >'.

                    '<td>'.$datos['creditosc'].'</td >'.

                    '<td>'.$datos['creditosr'].'</td >'.


                     '<td>'.$datos['porcentaje'].'</td >'.

                    '<td>'.$datos['promedio'].'</td >'.

                   

                    '<td>'.$datos['calle'].'</td >'.


                     '<td>'.$datos['noe'].'</td >'.

                     '<td>'.$datos['noi'].'</td >'.


                      '<td>'.$datos['colonia'].'</td >'.


                       '<td>'.$datos['municipio'].'</td >'.

                        '<td>'.$datos['estado'].'</td >'.





                     





                    '<td>'.$datos['nombrep'].'</td >'.

                    '<td>'.$datos['periodop'].'</td >'.

                    '<td>'.$datos['NombreE'].'</td >'.


                     '<td>'.$datos['NombreTE'].'</td >'.

                    '<td>'.$datos['PuestoTE'].'</td >'.

                    "<td>".$datos['PersonaAEE'].'</td >'.

                    '<td>'.$datos['PuestoAEE'].'</td >'.



                     '<td>'.$datos['PersonaCE'].'</td >'.

                    '<td>'.$datos['PuestoCE'].'</td >'.


                     '<td>'.$datos['AsesorE'].'</td >'.

                    '<td>'.$datos['PuestoAE'].'</td >'.

                     '<td>'.$datos['NombreAS'].'</td >'.

                    '<td>'.$datos['mensaje'].'</td >'.

                    '<td>'.$datos['fecha'].'</td >'.

                     '<td>'.$datos['StatusGeneral'].'</td >'.


                      


                    '</tr>';



                
                
               

               
               
             
            }

 

            $registros = $registros.'</table >';

 

            print $registros;

 

        }else{

            print "No se Encontraron Coincidencias.";

        }

    }else{

        print $conex->error;

    }

} 

 

?>
