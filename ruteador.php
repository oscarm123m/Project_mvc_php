<?php

include_once("controller/controller_".$controller.".php");

$objController="Controller".ucfirst($controller);

$controller=new $objController();

$controller->$accion();
?>