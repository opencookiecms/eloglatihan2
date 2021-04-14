<?php

use Spipu\Html2Pdf\Html2Pdf;
use Spipu\Html2Pdf\Exception\Html2PdfException;
use Spipu\Html2Pdf\Exception\ExceptionFormatter;

try {
    ob_start();
    include dirname(__FILE__).'\klaporan.php';

  
    $content = ob_get_clean();

    $html2pdf = new HTML2PDF('L', 'A4', 'en');
    $html2pdf->writeHTML($content);
    $html2pdf->output('example01.pdf');

} catch (Html2PdfException $e) {
    $html2pdf->clean();

    $formatter = new ExceptionFormatter($e);
    echo $formatter->getHtmlMessage();


}


?>