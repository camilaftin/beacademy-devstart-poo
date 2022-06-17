<?php

ini_set('display_errors', 1);

include 'Validar.php';
include 'ValidarBR.php';
include 'ValidarUS.php';

$cpf = '12345678911';
$doc = '12345678922222';

$br = new ValidarBR();
$br->validarDocumento($cpf);

$us = new ValidarUS();
$us->validarDocumento($doc);

echo 'Funcionou';

