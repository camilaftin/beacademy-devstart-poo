<?php

include 'Usuario.php';
include 'Cliente.php';
include 'Gestor.php';
include 'ClienteVip.php';
include 'GestorGeral.php';
include 'Validar.php';

$c1 = new Cliente('chiquim@rmail.com', '123456');
$c1->setNome('Chiquim');
$c1->setDataCadastro('01/01/2019');

$cpf = '12345678911';

// $validador = new Validar();
// $validador->validarCPF($cpf);
Validar::validarCPF($cpf);

$c1->setCPF($cpf);


$g1 = new Gestor('zezim@gmail.com','123123', 6000, '5');
//$g1 = new Gestor(6000, '5');
$g1->setNome('Zezim');
$g1->setSalario(6000);

$gg1 = new GestorGeral('maria@gmail.com', 'Iq2e3', 9000, '10');

//$us = new Usuario('hacker@uol.com', '2155fdfs');

//$clienteVip = new ClienteVip('cliente@email.com', 'hfdueeur12');

var_dump($c1);
var_dump($g1);
var_dump($gg1);

