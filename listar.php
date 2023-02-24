<?php
require_once "servidor.php";

$nomeProdudo = $_POST["nomeProduto"];
$preco = $_POST["preco"];
$codigo = $_POST["codigo"];

$sql = "INSERT INTO produto (idproduto, nomeProduto, preco, codigo) 
VALUES (null, '" .$nomeProdudo. "', $preco, $codigo)";


$result = $connect->query($sql);


header('Location: index.php')
?>