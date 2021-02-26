<?php 

//controllers/cargarProductos.php

require '../fw/fw.php';
require '../Models/Productos.php';
require '../Views/index.php';


$m = new Productos;

$productos= $m->getTodos();

$v = new Index;
$v->productos = $productos;
$v->render(); 


?>