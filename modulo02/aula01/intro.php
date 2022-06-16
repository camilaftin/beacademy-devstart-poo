<?php

include 'Aluno.php';
include 'Professor.php';
include 'Curso.php';

$a = 10;
$b = 'dez';

$a1 = new Aluno();
$a1->nome = 'Camila';
$a1->cpf = '123.123.123-12';

$a1->nome .= 'Ferreira';

$cursoPHP = new Curso();
$cursoPHP->nome = 'Introducao ao PHP';
$cursoPHP->cargaHoraria = 88; 
$cursoPHP->descricao = 'Aprender o basico e intermediario de PHP';


$professor = new Professor();

echo "<h1>Aluno: {$a1->nome}</h1>";