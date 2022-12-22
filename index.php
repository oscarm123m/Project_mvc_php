<?php

$controller="pages";
$accion="inicio";

if (isset($_GET['controller']) && isset($_GET['accion'])) {

  $controller=$_GET['controller'];
  $accion=$_GET['accion'];

}

require_once("view/template.php");
?>