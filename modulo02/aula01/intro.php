<?php

include 'Aluno.php';

$a1 = new Aluno();
$a1->nome = 'Alessandro';
$a1->cpf = '123.123.123-12';

$aluno = [
  'nome' => 'Alessandro',
  'cpf' => '123.123.123-12',

];

$aluno2 = [
  'Nome' => 'Bruno',
  'cpf' => '123.111.222-33',

];


$aluno3 = [
  'NOME' => 'Raquel',
  'CPF' => '345.888.111-84',

];