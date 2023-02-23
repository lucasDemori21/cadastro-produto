<?php 
require_once "servidor.php";

if(!empty($_GET['id'])){

    $id = $_GET['id'];
    
    $sqlSelect = "SELECT * FROM produto WHERE idproduto=$id";
    
    $result = $connect->query($sqlSelect);
    
    if($result->num_rows > 0){
        
        $sqlDelete = "DELETE FROM produto WHERE idproduto=$id";
        $resultDelete = $connect->query($sqlDelete);
    
    }
}
header('Location: consulta.php');
?>