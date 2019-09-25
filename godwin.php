<?php

// store the file name into a variable
 $file='GodwinCurriculumVitae.pdf';
 $filename='GodwinCurriculumVitae.pdf';

// header content type

 header('Content-type: application/pdf');
 header('Content-Disposition: inline; filename="' . $filename .'"');

header('Content-Transfer-Encoding: binary');

header('Accept-Ranges: bytes');

// Read file

@readfile($file);


 ?>
