
<?php

$file = 'https://github.com/sahinibrahimli/menimcv/files/476674/SH.CV.pdf';
$filename = 'SH.CV.pdf';
header('Content-type: application/pdf');
header('Content-Disposition: inline; filename="' . $filename . '"');
header('Content-Transfer-Encoding: binary');
header('Accept-Ranges: bytes');
@readfile($file);


?>

<a href="https://github.com/sahinibrahimli/menimcv/files/476674/SH.CV.pdf" download="newfilename">Download the pdf</a>


<br><h1>Got 123?</h1>
