<?php

// declarar funcion
function view($template, $vars = array())
{
	extract($vars);
	require "view/$template.tpl.php";

}