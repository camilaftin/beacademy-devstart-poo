<?php

include 'Produto.php';

$p1 = new Produto('Tenis', 299);
$p1->setDescricao('Tenis para corrida');
// $p1->setNome('Tenis para corrida');
// $p1->setValor(299);

$p2 = new Produto('Saia', 100);
// $p2->setNome('Calca Jeans');
// $p2->setValor(100);

$p3 = new Produto('Terno', 158.78);
// $p3->setNome('Terno');

var_dump($p3);
