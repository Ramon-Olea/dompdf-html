<?php
include_once "./vendor/autoload.php";

use Dompdf\Dompdf;
$dompdf = new Dompdf();

include "tabla_estilos.php";
$options = $dompdf->getOptions();
$options->set(array('isRemoteEnabled' => true));
$dompdf->setOptions($options);

$dompdf->loadHtml($html);
$dompdf->setPaper("letter");

$dompdf->render();

$dompdf->stream("archivo_pdf", array("Attachment" =>false));

