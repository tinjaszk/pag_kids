<?php 

include_once "operator/script.php";
$obj = new all;

if(isset($_GET["id"])) print $obj->catalogo($_GET["id"]); //prueba


?>