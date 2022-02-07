<?php
include("../../includes/conexion.php");
require_once("../../../dompdf/autoload.inc.php");
$folio=$_POST['id'];
  function pdf_create($html, $filename, $paper, $orientation, $stream=TRUE)
  {
    $dompdf = new Dompdf\Dompdf();
    $dompdf->set_paper($paper,$orientation);
    $dompdf->load_html($html);
    $dompdf->render(); 
    $dompdf->stream($filename.".pdf",array('Attachment'=>0));
    $pdf = $dompdf->output(); 
  }
  $filename = 'Mantenimiento folio '.$folio;
  include("mantenimientoEarchivo.php");
pdf_create($html,$filename,'A4','portrait');
?>

