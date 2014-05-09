<?php


//el fronten controller se encarga 
require "config.php";
require "helpers.php";

//llamar a los controladores individuales

//index.php
if(empty($_GET['url']))
{
	require "controllers/home.php";
}
elseif($_GET['url']=='contacto')
{
	require "controllers/contacto.php";
}
var_dump($_GET);


