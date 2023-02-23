<?php
require_once "servidor.php";

    $id = $_POST['idproduto'];
    $nome = $_POST['nomeProduto'];
    $preco = $_POST['preco'];
    $codigo = $_POST['codigo']; 

    $sqlUpdate = "UPDATE produto SET nomeProduto='$nome', preco='$preco', codigo='$codigo'
    WHERE idproduto='$id'" ;

    $result = $connect->query($sqlUpdate);


header('Location: consulta.php');
?>