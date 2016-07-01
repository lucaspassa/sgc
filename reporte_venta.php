<!doctype html>
<?php include "inc/menu.php" ?>
<html>
	<head>
    	<?php 
		
		require_once('css/fuente_google.html');?>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/main.css">
        <link rel="stylesheet" type="text/css" href="css/reportes.css">
        <title>Reportes</title>
	</head>
<body>
	<div class="contenedorPrincipal">
    	<?php
			session_start();
			require_once("funciones/funciones.php");
			require_once("funciones/conexion.php");
			require_once('PHP_Excel_1.8.0/classes/PHPExcel.php');
			require_once('PHP_Excel_1.8.0/classes/PHPExcel/Reader/Excel2007.php');
			require_once('PHP_Excel_1.8.0/classes/PHPExcel/IOFactory.php');
			if(isset($_SESSION['user'])){
		?>
                    
                </div><!--barra-->
                <div class="titulo centrar-div centrar-texto borde-10 border-box">	
                	<h1>Reportes de Ventas por Producto</h1>
                </div>
                <div class="contenedorForms borde-10 centrar-div border-box">
                    <form action="<?php $_SERVER['PHP_SELF']?>" method="post" class="reportesFormBuscar alinear-horizontal letraTamaño-16">
                        <strong>Seleccione el producto:</strong>
                        <select name="producto" class="selectProducto cursorPointer letraTamaño-16">
                            <option value="ninguno">Seleccione una opcion</option>	
                            <?php
                            $sql="select  nombre, codigo from productos order by nombre asc";
                            $error="Error al cargar los productos";
                            $buscar=consulta($con,$sql,$error);
                            while($resultado1=mysqli_fetch_array($buscar)){
                                echo"<option value='".$resultado1['codigo']."'>".$resultado1['nombre']."</option>";
                            }//fin while pord nombre
                           ?>
                        </select>
                        <input type="submit" name="verReporte" value="Ver reporte" class="cursorPointer boton borde-5 verReporte letraTamaño-16"> 
                    </form>
                    <a href="guardarReporte.php?guardarReporte=true&codigo=<?php if(isset($_POST['verReporte'])){echo $_POST['producto'];}else{echo"";} ?>"><div class="boton guardarReporte alinear-horizontal letra-negrita centrar-texto border-box borde-5 letraTamaño-16">Guardar Reporte</div></a>
                </div><!--contenedorForms-->
                <div class="linksRegresar centrar-texto">
                	<a href='menuPrincipal.php' style="color:blue;">
                    	Menu princial
                    </a> || 
                    <a href='menu_de_ventas_y_reportes.php' style="color:blue;">
                    	Menu
                    </a>
                </div>
                <?php
                extract($_POST);
            	if (isset($_POST['verReporte'])){
						$sql="select nombre from productos where codigo='$_POST[producto]'";
						$error="Error al mostrar el nombre del producto";
						$buscar=consulta($con,$sql,$error);
						$nombre=mysqli_fetch_assoc($buscar);
					?>
                    	<div class="tituloTabla centrar-div">
                        	PRODUCTO: 
                            <span class="colorProducto">
								<?php echo $nombre['nombre'];?>
                            </span>
                        </div>
                    	<div class="contenedorTablaResultados centrar-div">
                            <table class="tabla centrar-texto">
                                <tr><th>NOMBRE</th><th>USUARIO</th><th>TIPO DE USUARIO</th><th>CANTIDAD</th><th>TOTAL</th><th>FECHA</th></tr>
                        <?php
                                $sql="select  productos.nombre as productoNombre, productos.precio as productoPrecio, usuarios.id as usuariosId, usuarios.nombre as nombre,usuarios.usuario as nombreUsuario,tipo, ventas.fecha as ventasFecha, ventas.codigo as ventasCodigo, ventas.cantidad as ventasCantidad, ventas.idUsuario as ventasIdUs, totalVentas from productos, usuarios, ventas where ventas.codigo='$producto' and productos.codigo=ventas.codigo and usuarios.id=ventas.idUsuario";
                                $error="<div class='error'>Error al cargar los productos</div>";
                                $buscar=consulta($con,$sql,$error);
                        if(mysqli_num_rows($buscar)==0){
                            echo"<div class='error'>No hay ventas registradas del producto $nombre[nombre]</div>";
                        }else{
                            $gt=0;
                            while($campo=mysqli_fetch_array($buscar)){
                                if($campo['tipo']=='a'){
                                    $tipoUsuario='Administrador';
                                }else{
                                    $tipoUsuario='Cajero';
                                }
                                echo "<tr><td>$campo[nombre]</td><td>$campo[nombreUsuario]</td><td>$tipoUsuario</td><td>$campo[ventasCantidad]</td><td>$campo[totalVentas]</td><td>$campo[ventasFecha]</td></tr>";
      
                                $gt = $gt + ($campo['productoPrecio']*$campo['ventasCantidad']); 
                            }//fin while
                        ?>
                            </table>
                            <div class="totalArticulos">
                            	Total de productos vendidos:
                                <u><?php echo "$".$gt; ?></u>
                            </div>
                    	</div><!--contenedorTablaResultados-->
					<?php
					}//if mysqli_num_rows($buscar)==0
           		}else if(isset($_GET['guardarReporte'])){
					require_once('PHP_Excel_1.8.0/classes/PHPExcel.php');
					require_once('PHP_Excel_1.8.0/classes/PHPExcel/Reader/Excel2007.php');
					require_once('PHP_Excel_1.8.0/classes/PHPExcel/IOFactory.php');
					$sql="select  productos.nombre as nombreProducto, productos.precio as productosPrecio, usuarios.id as usuarioId, usuarios.nombre as usuariosNombre, usuario, tipo, ventas.fecha as ventasFecha, ventas.codigo as ventasCodigo, cantidad, totalVentas from productos, usuarios, ventas where ventas.codigo='$_GET[codigo]' and productos.codigo='ventas.codigo' and usuarios.id=ventas.idUsuario";
                	$error="<div class='error'>Error al cargar los productos</div>";
                	$buscar=consulta($con,$sql,$error);
					if($buscar==true){
						echo"guardando";
						$fecha=date('Y/m/d H:m:s');
						//Creacion del objeto PHPExcel 
						$objPHPExcel = new PHPExcel();
						 //Estableciendo propiedades
  						$objPHPExcel->getProperties()
        								->setCreator("Roko")
        								->setLastModifiedBy("Roko")
        								->setTitle("Exportar excel desde mysql")
        								->setSubject("Exportar excel desde mysql")
        								->setDescription("Documento generado con PHPExcel")
        								->setKeywords("Documento excel con phpexcel")
        								->setCategory("Base de datos");
						$registro = mysqli_fetch_assoc ($buscar);
						//agregar informacion   
						$objPHPExcel->setActiveSheetIndex(0)->setCellValue('A1','PRODUCTO');
						$objPHPExcel->setActiveSheetIndex(0)->setCellValue('B1',$registro['nombreProducto']);
						$objPHPExcel->setActiveSheetIndex(0)->setCellValue('A2','NOMBRE');
						$objPHPExcel->setActiveSheetIndex(0)->setCellValue('B2','USUARIO');
						$objPHPExcel->setActiveSheetIndex(0)->setCellValue('C2','TIPO DE USUARIO');
						$objPHPExcel->setActiveSheetIndex(0)->setCellValue('D2','CANTIDAD');
						$objPHPExcel->setActiveSheetIndex(0)->setCellValue('E2','TOTAL');
						$objPHPExcel->setActiveSheetIndex(0)->setCellValue('F2','FECHA');
						$i=3;
						while ($registro = mysqli_fetch_assoc ($buscar)){        
						  $objPHPExcel->setActiveSheetIndex(0)->setCellValue('A'.$i, $registro['usuariosNombre']);
						  $objPHPExcel->setActiveSheetIndex(0)->setCellValue('B'.$i, $registro['usuario']);
						  $objPHPExcel->setActiveSheetIndex(0)->setCellValue('C'.$i, $registro['tipo']);
						  $objPHPExcel->setActiveSheetIndex(0)->setCellValue('D'.$i, $registro['cantidad']);
						  $objPHPExcel->setActiveSheetIndex(0)->setCellValue('E'.$i, $registro['totalVentas']);
						  $objPHPExcel->setActiveSheetIndex(0)->setCellValue('F'.$i, $registro['ventasFecha']);
						  $i++;
   						}
						//renombrar informacion
						$objPHPExcel->getActiveSheet()->setTitle('Respaldo');
						//establecer la hoja activa que al momento de abrir el documento se muestre primero
						$objPHPExcel->setActiveSheetIndex(0);
						//modificacion de los encabezados para indicar que se envia un archivo de excel
						header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
						$fecha=date("Y/m/d H:i:s");
						header("Content-Disposition: attachment;filename='Respaldo_$fecha.xlsx'");
						header('Cache-Control: max-age=0');
						$objWriter=PHPExcel_IOFactory::createWriter($objPHPExcel,'Excel2007');
						$objWriter->save('php://output');
						exit;
					}else{
						echo"<div class='areaNoDisponible centrar-div centrar-texto'>Area no disponible <a href='index.php' style='color:blue;'>Inicie sesion</a></div>";
					}
				}
			}else{
				echo"<div class='areaNoDisponible centrar-div centrar-texto'>Area no disponible <a href='index.php' style='color:blue;'>Inicie sesion</a></div>";
			}//fin else de if session
?>
</body>
</html>