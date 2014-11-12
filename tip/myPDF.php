<?php

include_once '../MPDF56/mpdf.php';

$pdf = new mPDF();
$pdf->WriteHTML("Hello My PDF");
$pdf->Output();
?>
