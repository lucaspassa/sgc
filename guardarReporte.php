<?php
	require_once("funciones/funciones.php");
	require_once("funciones/conexion.php");
	$sql="select  productos.nombre as nombreProducto, productos.precio as productosPrecio, usuarios.id as usuarioId, usuarios.nombre as usuariosNombre, usuario, tipo, ventas.fecha as ventasFecha, ventas.codigo as ventasCodigo, cantidad, totalVentas from productos, usuarios, ventas where ventas.codigo='".$_GET['codigo']."' and productos.codigo=ventas.codigo and usuarios.id=ventas.idUsuario";
    $error="<div class='error'>Error al cargar los productos</div>";
    $buscar=consulta($con,$sql,$error);
	if($buscar==true){
		require_once('PHP_Excel_1.8.0/classes/PHPExcel.php');
		require_once('PHP_Excel_1.8.0/classes/PHPExcel/Reader/Excel2007.php');
		require_once('PHP_Excel_1.8.0/classes/PHPExcel/IOFactory.php');
		$fecha=date('Y/m/d H:m:s');
		/*while($registro=mysqli_fetch_assoc($buscar)){
			echo"".$registro['nombreProducto']."";
		}*/
		$objPHPExcel = new PHPExcel();
		$objPHPExcel
				->getProperties()
        		->setCreator("Roko")
        		->setLastModifiedBy("Roko")
        		->setTitle("Exportar excel desde mysql")
        		->setSubject("Exportar excel desde mysql")
        		->setDescription("Documento generado con PHPExcel")
        		->setKeywords("Documento excel con phpexcel")
        		->setCategory("Base de datos");
				
		$nombreProducto = mysqli_fetch_assoc ($buscar);
		$objPHPExcel
					->setActiveSheetIndex(0)
					->setCellValue('A1','PRODUCTO')
					->setCellValue('B1',$nombreProducto['nombreProducto'])
					->setCellValue('A2','NOMBRE')
					->setCellValue('B2','USUARIO')
					->setCellValue('C2','TIPO DE USUARIO')
					->setCellValue('D2','CANTIDAD')
					->setCellValue('E2','TOTAL')
					->setCellValue('F2','FECHA');
		$i=3;
		while ($registro = mysqli_fetch_assoc ($buscar)){ 
				if($registro['tipo']=='a'){
					$tipoUsuario='Administrador';
				}else{
					$tipoUsuario='Cajero';
				}       
			$objPHPExcel
					->setActiveSheetIndex(0)
					->setCellValue('A'.$i, $registro['usuariosNombre'])
					->setCellValue('B'.$i, $registro['usuario'])
					->setCellValue('C'.$i, $tipoUsuario)
					->setCellValue('D'.$i, $registro['cantidad'])
					->setCellValue('E'.$i, $registro['totalVentas'])
					->setCellValue('F'.$i, $registro['ventasFecha']);
			$i++;
   		}

		$objPHPExcel->getActiveSheet()->setTitle('Respaldo');
		$objPHPExcel->setActiveSheetIndex(0);

		header('Content-Type: application/vnd.ms-excel');
		header('Content-Disposition: attachment;filename="Respaldo_'.$fecha.'.xlsx"');
		header('Cache-Control: max-age=0');

		$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
		$objWriter->save('php://output');	
		exit;
		mysqli_close($con);
	}				
?>