<?php


// include 'classes/Usuario.php';
// include 'classes/Cliente.php';
// include 'classes/Gestor.php';
// include 'classes/Categoria.php';
// include 'classes/Produto.php';
// include 'classes/Config/Usuario.php';
include 'vendor/autoload.php';

use Classes\Config\Usuario as UsuarioConfig;
use Classes\Usuario;
use Classes\Categoria;
//  $us1 = new Classes\Usuario();
//  $u2 = new UsuarioConfig();

 $us2 = new Usuario();
 $c1 = new Categoria();

var_dump($us2);
var_dump($c1);

