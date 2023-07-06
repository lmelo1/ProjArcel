<?php

require_once("config.php");

/*
$sql = new Sql();

$clientes = $sql->select("SELECT * FROM CLIENTES WHERE ID_CLI < 20");
 echo json_encode($clientes);

 */ 


$cliente = new Usuario();

$cliente->loadById(19);

echo $cliente;

?>