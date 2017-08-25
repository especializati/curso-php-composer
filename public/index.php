<?php

require '../vendor/autoload.php';

use Dompdf\Dompdf;

//use App\Controllers\HomeController;

//$query = new \ETI\DB\Query;
//var_dump($query->query());

//$home = new HomeController;
//var_dump($home->index());

//var_dump(getTrim(" sdfsd sfs "));
//$object = new MyClass;
//var_dump($object->myMethod());

// reference the Dompdf namespace


// instantiate and use the dompdf class
$dompdf = new Dompdf();
$dompdf->loadHtml('hello world');

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'landscape');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream();
