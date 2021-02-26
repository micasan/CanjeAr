<?php 

//controllers/cargarlogin.php

require '../fw/fw.php';
require '../Models/Usuarios.php';
require '../Views/Login.php';

$m = new Usuarios;

$usuarios= $m->getTodos();

$v = new Login;
$v->usuario = $usuarios;
$v->render(); 

?>