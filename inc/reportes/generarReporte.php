<?php

// ini_set('display_errors', '1');
// ini_set('error_reporting', E_ALL);

define('FPDF_FONTPATH', 'font/');
require('mysql_table.php');
include('DBConexionReportes.php');

class PDF extends PDF_MySQL_Table{
    function Header()
    {
        // Titulo
        $this->SetFont('Arial', '', 18);
        $this->Cell(0, 6, 'Reporte de Usuarios', 0, 1, 'C');
        $this->Ln(10);
        // Asegurar la header de la tabla en el output
        parent::Header();
    }
}

$pdf=new PDF();
$pdf->AddPage();
//Primera tabla.
$pdf->Table('SELECT
    	nombreUsuario,
    	clave,
    	fechaAlta,
	roles.nombreRol as rol
    FROM
	   usuarios
       INNER JOIN roles ON usuarios.idRol = roles.idRol');
ob_start();
$pdf->Output();
?>

?>
