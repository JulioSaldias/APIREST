<?php
//controladores
require_once "controlador/rutas.controlador.php";
require_once "controlador/cursos.controlador.php";
require_once "controlador/clientes.controlador.php";


//modelos
require_once "modelo/cursos.modelo.php";
require_once "modelo/clientes.modelo.php";




$rutas = new controladorRutas();
$rutas->inicio();
