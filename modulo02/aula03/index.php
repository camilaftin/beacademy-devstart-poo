<?php

include 'Produto.php';
include 'Categoria.php';


$c1 = new Categoria("roupas", "roupas unissex");
$c2 = new Categoria("roupas de banho", "toalhas de rosto");
$c3 = new Categoria("calcados", "chinelo");

$p1 = new Produto('Tenis', 299, $c3);
$p1->setDescricao('Tenis para corrida');
// $p1->setNome('Tenis para corrida');
// $p1->setValor(299);

$p2 = new Produto('Saia', 100, $c1);
//$p2->setCategoria($c2); //categoria apenas para leitura
// $p2->setNome('Calca Jeans');
// $p2->setValor(100);

$p3 = new Produto('Terno', 158.78, $c1);
// $p3->setNome('Terno');


