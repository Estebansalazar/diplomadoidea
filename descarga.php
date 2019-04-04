<?php

//The full or relative path to your PDF file.
$pdfFile = 'brochure/bruchure.pdf';

//Set the Content-Type to application/pdf
header('Content-Type: application/pdf');

//Set the Content-Transfer-Encoding to "Binary"
header('Content-Transfer-Encoding: Binary');

//The filename that it should download as.
$downloadName = 'instructions.pdf';

//Set the Content-Disposition to attachment and specify
//the name of the file.
header('Content-Disposition: attachment; filename=' . $downloadName);

//Read the PDF file data and exit the script.
readfile($pdfFile);
exit;
?>
