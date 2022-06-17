<?php

include 'Usuario.php';
include 'Cliente.php';
include 'Gestor.php';
include 'GestorGeral.php';

$c1 = new Cliente('chiquim@rmail.com', '123456');
$c1->setNome('Chiquim');
$c1->setDataCadastro('01/01/2019');

$g1 = new Gestor('zezim@gmail.com','123123', 6000, '5');
//$g1 = new Gestor(6000, '5');
$g1->setNome('Zezim');
$g1->setSalario(6000);

$gg1 = new GestorGeral('maria@gmail.com', 'Iq2e3', 9000, '10');

$us = new Usuario('hacker@uol.com', '2155fdfs');

var_dump($c1);
var_dump($g1);
var_dump($gg1);
var_dump($us);
