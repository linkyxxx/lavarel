<?php

require "config.php";
require "helpers.php";

$lenguaje = "PHP";
$confidencial = "esto es confidencial";
$titulo = "Mejorando la";



//llamda de funcion

view('home', compact('lenguaje', 'titulo'));