<?php
//--------------------------------Inicio de sesion------------------------


require_once("class.ezpdf.php");
include("conexiondb.php");

//Configuración de página-----------------

$pdf =& new Cezpdf('a4');

$pdf->selectFont('fonts/courier.afm');

$pdf->ezSetCmMargins(1,1,1.5,1.5);

//Fin configuración de página-----------------


//---------------Querys-----------------------------




//------------------------------ Reporte de usuarios
if($_GET['id'] == "usuarios"){

	$usuarios = mysql_query("SELECT idUsuario,nombreUsuario FROM usuarios",$conexion);
	/*$data = array(
		while($usuariosArray = mysql_fetch_assoc($usuarios)){

			array ('id'=>$usuariosArray['idUsuario'],'nombre'=>$usuariosArray['nombreUsuario'])

		}
		
		);
*/
   	
            
	
	//Armado de las matrices-------------------------------------
$ixx = 0;
while($usuariosArray = mysql_fetch_assoc($usuarios)) {
	$ixx = $ixx+1;
    $data[] = array_merge($usuariosArray, array('num'=>$ixx));

}


$titles = array(

                //'num'=>'<b>Num</b>',

               	'idUsuario'=>'<b>ID</b>',
              	'nombreUsuario'=>' <b>Usuario</b>',
				
            );


/*$options = array(

              	
'fontSize' => 7,
'rowGap' => 1,
                'xOrientation'=>'center',

                'width'=>600,
				
				'cols'=>array( 
'idUsuario' => array('justification'=>'left', 'width' => '300'), 
'nombreUsuario' => array('justification'=>'left', 'width' => '300')));

*/
// Fin armado de matrices-----------------------------------

$txttit= "Reportes de Usuarios";
	
}




$pdf->ezText($txttit, 12);


$pdf->ezTable($data);

$pdf->ezText("\n\n\n", 10);

$pdf->ezText("<b>Fecha:</b> ".date("d/m/Y"), 10);

$pdf->ezText("<b>Hora:</b> ".date("H:i:s")."\n\n", 10);
$pdf->ezStream();

?>