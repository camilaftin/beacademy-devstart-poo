<?php

include 'vendor/autoload.php';

use Classes\Config\Usuario;
use Classes\Categoria;

$us2 = new Usuario();
$c1 = new Categoria();


use Dompdf\Dompdf;

$dompdf = new Dompdf();

$html = '';

for($n = 0; $n < 10; $n++){
  $html .= 'oi oi oi <br>';
}
$dompdf->loadHtml('<h1>PHP com pdf</h1>'.$html);

$dompdf->render();


$dompdf->stream();