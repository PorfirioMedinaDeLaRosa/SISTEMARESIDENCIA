<?php


    include'../conexion.php';



	if (mysqli_connect_errno()) {
    	printf("La conexión con el servidor de base de datos falló: %s\n", mysqli_connect_error());
    	exit();
	}

    

    //Recogemos las claves enviadas
    


  


  
	 $consulta = " SELECT tb_residentes.no_control , tb_residentes.creditosc, tb_residentes.creditosr, tb_residentes.porcentaje, tb_residentes.promedio, tb_residentes.periodo, tb_residentes.ap,  tb_residentes.am,  tb_residentes.nombre, tb_residentes.semestre,tb_residentes.telefono,tb_residentes.seguro, tb_residentes.folios, tb_residentes.carrera, tb_residentes.email, 
     tb_residentes.calle, tb_residentes.noe, empresa.TelefonoE, empresa.EmailE, tb_residentes.noi, tb_residentes.colonia, tb_residentes.municipio, tb_residentes.estado, asignacionproyecto.mensaje, asignacionproyecto.no_controlp, asignacionproyecto.fecha, proyectos.nombrep, proyectos.StatusGeneral , proyectos.DiaInicio, proyectos.MesInicio, proyectos.AnoInicio, proyectos.DiaTermino, proyectos.MesTermino, proyectos.AnoTermino,  proyectos.opcion, empresa.NombreE, empresa.NombreTE, empresa.PuestoTE, empresa.PersonaAEE, empresa.PuestoAEE,  empresa.AsesorE, empresa.PuestoAE, empresa.PersonaCE, empresa.PuestoCE, asignacionempresa.no_controle  , proyectos.IdAS , empresa.status, asesor.NombreAS
FROM tb_residentes , asignacionproyecto , proyectos, empresa, asignacionempresa,  asesor, numerodeasesores
WHERE asignacionproyecto.no_controlp=proyectos.no_control 
AND tb_residentes.no_control=asignacionproyecto.no_control AND proyectos.idproyecto = numerodeasesores.IdAS4 
                AND asesor.IdAS = numerodeasesores.IdAS   AND asignacionempresa.no_controle =empresa.no_control AND   tb_residentes.no_control = asignacionempresa.no_control  AND tb_residentes.periodo = 'AGO-DIC 2024'";




	$resultado = $mysqli->query($consulta);
	if($resultado->num_rows > 0 ){
						
		date_default_timezone_set('America/Mexico_City');

		if (PHP_SAPI == 'cli')
			die('Este archivo solo se puede ver desde un navegador web');

		/** Se agrega la libreria PHPExcel */
		require_once '../LIBRERIA/PHPExcel/PHPExcel.php';

		// Se crea el objeto PHPExcel
		$objPHPExcel = new PHPExcel();

		// Se asignan las propiedades del libro
		$objPHPExcel->getProperties()->setCreator("Codedrinks") //Autor
							 ->setLastModifiedBy("Codedrinks") //Ultimo usuario que lo modificó
							 ->setTitle("Reporte Excel con PHP y MySQL")
							 ->setSubject("Reporte Excel con PHP y MySQL")
							 ->setDescription("Reporte de alumnos")
							 ->setKeywords("reporte alumnos carreras")
							 ->setCategory("Reporte excel");

		$tituloReporte = "ALUMNOS RESIDENTES";
		$titulosColumnas = array('NO_CONTROL', 'NOMBRE', 'APELLIDO PATERNO', 'APELLIDO MATERNO', 'CARRERA', 'SEMESTRE', 'PERIODO', 'TELÉFONO', 'SEGURO', 'FOLIO', 'EMAIL',  'CRÉDITOS COMPLEMENTARIOS', 'CRÉDITOS RETICULA',  'PORCENTAJE', 'PROMEDIO GENERAL', 'CALLE O AVENIDA', 'NÚMERO EXTERIOR ',  'NÚMERO INTERIOR', 'COLONIA', 'MUNICIPIO', 'ESTADO', 'PROYECTO', 'PERIODO PROYECTO', 'EMPRESA', 'TITULAR EMPRESA', 'PUESTO TITULAR', 'PERSONA ACUERDO', 'PUESTO', 'PERSONA CARTA DE PRESENTACIÓN ', 'PUESTO', 'ASESOR EXTERNO', 'PUESTO', 'ASESOR INTERNO',  'MENSAJE', 'FECHA', 'STATUS PROYECTO' , 'STATUS EMPRESA' , 'TIPO PROYECTO', 'CALIFICACION FINAL');
		
		$objPHPExcel->setActiveSheetIndex(0)
        		    ->mergeCells('A1:AL1');
						
		// Se agregan los titulos del reporte
		$objPHPExcel->setActiveSheetIndex(0)
					->setCellValue('A1',$tituloReporte)
        		    ->setCellValue('A2',  $titulosColumnas[0])
		            ->setCellValue('B2',  $titulosColumnas[1])
        		    ->setCellValue('C2',  $titulosColumnas[2])
            		->setCellValue('D2',  $titulosColumnas[3])
            		->setCellValue('E2',  $titulosColumnas[4])
        		    ->setCellValue('F2',  $titulosColumnas[5])
		            ->setCellValue('G2',  $titulosColumnas[6])
        		    ->setCellValue('H2',  $titulosColumnas[7])
            		->setCellValue('I2',  $titulosColumnas[8])
            		->setCellValue('J2',  $titulosColumnas[9])
        		    ->setCellValue('K2',  $titulosColumnas[10])
		            ->setCellValue('L2',  $titulosColumnas[11])
        		    ->setCellValue('M2',  $titulosColumnas[12])
            		->setCellValue('N2',  $titulosColumnas[13])
            		->setCellValue('O2',  $titulosColumnas[14])
        		    ->setCellValue('P2',  $titulosColumnas[15])
		            ->setCellValue('Q2',  $titulosColumnas[16])
        		    ->setCellValue('R2',  $titulosColumnas[17])
            		->setCellValue('S2',  $titulosColumnas[18])
            		->setCellValue('T2',  $titulosColumnas[19])
        		    ->setCellValue('U2',  $titulosColumnas[20])
            	

            		->setCellValue('V2',  $titulosColumnas[21])


                    ->setCellValue('W2',  $titulosColumnas[22])
                    ->setCellValue('X2',  $titulosColumnas[23])
                    ->setCellValue('Y2',  $titulosColumnas[24])
                    ->setCellValue('Z2',  $titulosColumnas[25])
                    ->setCellValue('AA2',  $titulosColumnas[26])
                    ->setCellValue('AB2',  $titulosColumnas[27])
                    ->setCellValue('AC2',  $titulosColumnas[28])
                    ->setCellValue('AD2',  $titulosColumnas[29])
                    ->setCellValue('AE2',  $titulosColumnas[30])
                    ->setCellValue('AF2',  $titulosColumnas[31])
                    ->setCellValue('AG2',  $titulosColumnas[32])
                    ->setCellValue('AH2',  $titulosColumnas[33])
                    ->setCellValue('AI2',  $titulosColumnas[34])
                    ->setCellValue('AJ2',  $titulosColumnas[35])
					->setCellValue('AK2',  $titulosColumnas[36])
					->setCellValue('AL2',  $titulosColumnas[37])
					->setCellValue('AM2',  $titulosColumnas[38]);
                   
                  		
		//Se agregan los datos de los alumnos
		$i = 3;
		while ($fila = $resultado->fetch_array()) {
			$objPHPExcel->setActiveSheetIndex(0)
        		    ->setCellValue('A'.$i,  $fila['no_control'])
		            ->setCellValue('B'.$i,  $fila['nombre'])
        		    ->setCellValue('C'.$i,  $fila['ap'])
        		    ->setCellValue('D'.$i,  $fila['am'])
            		->setCellValue('E'.$i,  $fila['carrera'])
                    ->setCellValue('F'.$i,  $fila['semestre'])
                    ->setCellValue('G'.$i,  $fila['DiaInicio']." de ".$fila['MesInicio']." de ".$fila['AnoInicio']." al ".$fila['DiaTermino']." de ".$fila['MesTermino']." de ".$fila['AnoTermino'])
                    ->setCellValue('H'.$i,  $fila['telefono'])
                    ->setCellValue('I'.$i,  $fila['seguro'])
                    ->setCellValue('J'.$i,  $fila['folios'])

					                                                        

 


                    ->setCellValue('K'.$i,  $fila['email'])
                    ->setCellValue('L'.$i,  $fila['creditosc'])
                    ->setCellValue('M'.$i,  $fila['creditosr'])
                    ->setCellValue('N'.$i,  $fila['porcentaje'])
                    ->setCellValue('O'.$i,  $fila['promedio'])
                    ->setCellValue('P'.$i,  $fila['calle'])
                    ->setCellValue('Q'.$i,  $fila['noe'])
                    ->setCellValue('R'.$i,  $fila['noi'])
                    ->setCellValue('S'.$i,  $fila['colonia'])
                    ->setCellValue('T'.$i,  $fila['municipio'])

                    ->setCellValue('U'.$i,  $fila['estado'])
                    ->setCellValue('V'.$i,  $fila['nombrep'])

                     ->setCellValue('W'.$i,  $fila['periodop'])
                    ->setCellValue('X'.$i,  $fila['NombreE'])


                    ->setCellValue('Y'.$i,  $fila['NombreTE'])
                    ->setCellValue('Z'.$i,  $fila['PuestoTE'])

                     ->setCellValue('AA'.$i,  $fila['PersonaAEE'])
                    ->setCellValue('AB'.$i,  $fila['PuestoAEE'])

                    ->setCellValue('AC'.$i,  $fila['PersonaCE'])
                    ->setCellValue('AD'.$i,  $fila['PuestoCE'])

                    ->setCellValue('AE'.$i,  $fila['AsesorE'])
                    ->setCellValue('AF'.$i,  $fila['PuestoAE'])

                    ->setCellValue('AG'.$i,  $fila['NombreAS'])

                     ->setCellValue('AH'.$i,  $fila['TelefonoE'])
                    ->setCellValue('AI'.$i,  $fila['fecha'])

                    ->setCellValue('AJ'.$i,  $fila['StatusGeneral'])
					  ->setCellValue('Ak'.$i,  $fila['status'])
					  ->setCellValue('AL'.$i,  $fila['opcion'])
					  ->setCellValue('AM'.$i,  $fila['EmailE']);







                    

					$i++;
		}
		
		$estiloTituloReporte = array(
        	'font' => array(
	        	'name'      => 'Verdana',
    	        'bold'      => true,
        	    'italic'    => false,
                'strike'    => false,
               	'size' =>20,
                'width' =>100,
	            	'color'     => array(
    	            	'rgb' => 'FFFFFF'
        	       	)
            ),
	        'fill' => array(
				'type'	=> PHPExcel_Style_Fill::FILL_SOLID,
				'color'	=> array('argb' => 'FF220835')
			),
            'borders' => array(
               	'allborders' => array(
                	'style' => PHPExcel_Style_Border::BORDER_NONE                    
               	)
            ), 
            'alignment' =>  array(
        			'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
        			'vertical'   => PHPExcel_Style_Alignment::VERTICAL_CENTER,
        			'rotation'   => 0,
        			'wrap'          => TRUE
    		)
        );

		$estiloTituloColumnas = array(
            'font' => array(
                'name'      => 'Arial',
                'bold'      => true, 
                    'size' =>10,   
                     'width' =>100,
                'color'     => array(
                    'rgb' => 'FFFFFF'
                )
            ),
            'fill' 	=> array(
				'type'		=> PHPExcel_Style_Fill::FILL_GRADIENT_LINEAR,
				'rotation'   => 70,
        		'startcolor' => array(
            		'rgb' => 'c47cf2'
        		),
        		'endcolor'   => array(
            		'argb' => 'FF431a5d'
        		)
			),
            'borders' => array(
            	'top'     => array(
                    'style' => PHPExcel_Style_Border::BORDER_MEDIUM ,
                    'color' => array(
                        'rgb' => '143860'
                    )
                ),
                'bottom'     => array(
                    'style' => PHPExcel_Style_Border::BORDER_MEDIUM ,
                    'color' => array(
                        'rgb' => '143860'
                    )
                )
            ),
			'alignment' =>  array(
        			'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
        			'vertical'   => PHPExcel_Style_Alignment::VERTICAL_CENTER,
        			'wrap'          => TRUE
    		));
			
		$estiloInformacion = new PHPExcel_Style();
		$estiloInformacion->applyFromArray(
			array(
           		'font' => array(
               	'name'      => 'Arial',               
               	'color'     => array(
                   	'rgb' => '000000'
               	)
           	),
           	'fill' 	=> array(
				'type'		=> PHPExcel_Style_Fill::FILL_SOLID,
				'color'		=> array('argb' => 'FFd9b7f4')
			),
           	'borders' => array(
               	'left'     => array(
                   	'style' => PHPExcel_Style_Border::BORDER_THIN ,
	                'color' => array(
    	            	'rgb' => '3a2a47'
                   	)
               	)             
           	)
        ));

		 
		$objPHPExcel->getActiveSheet()->getStyle('A1:AL1')->applyFromArray($estiloTituloReporte);
		$objPHPExcel->getActiveSheet()->getStyle('A2:AL2')->applyFromArray($estiloTituloColumnas);		
		$objPHPExcel->getActiveSheet()->setSharedStyle($estiloInformacion, "A3:AL".($i-1));
				
		for($i = 'A'; $i <= 'AL'; $i++){
			$objPHPExcel->setActiveSheetIndex(0)			
				->getColumnDimension($i)->setAutoSize(TRUE);
            
        
		}
		
		// Se asigna el nombre a la hoja
		$objPHPExcel->getActiveSheet()->setTitle('Alumnos');

		// Se activa la hoja para que sea la que se muestre cuando el archivo se abre
		$objPHPExcel->setActiveSheetIndex(0);
		// Inmovilizar paneles 
		//$objPHPExcel->getActiveSheet(0)->freezePane('A4');
		$objPHPExcel->getActiveSheet(0)->freezePaneByColumnAndRow(0,4);

		// Se manda el archivo al navegador web, con el nombre que se indica (Excel2007)
		header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
		header('Content-Disposition: attachment;filename="Reportedealumnos.xlsx"');
		header('Cache-Control: max-age=0');

		$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
		$objWriter->save('php://output');
		exit;
		
	}
	else{
		print_r('No hay resultados para mostrar');



	}


    
?> 