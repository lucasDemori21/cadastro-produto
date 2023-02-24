<?php 
require_once "servidor.php";

if(!empty($_GET['id'])){

    
    $id = $_GET['id'];
    
    $sqlSelect = "SELECT * FROM produto WHERE idproduto=$id";
    
    $result = $connect->query($sqlSelect);
    
    if($result->num_rows > 0){
        while($dados_produto = mysqli_fetch_assoc($result)){
            $nome = $dados_produto['nomeProduto'];
            $preco = $dados_produto['preco'];
            $codigo = $dados_produto['codigo']; 
        }
        }else{
            header('Location: consulta.php');
        }
    
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página inicial</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="containerp">
        <form class="formC" action="saveEdit.php" method="POST"> 
            <div class="botaoConsulta">
                <a href="consulta.php"><button type="button">Voltar</button></a>
            </div>
            <div class="titulo">
                <legend>EDITAR CADASTRO</legend>
            </div>
            <input class="inputC" type="text" id="nomeProduto" name="nomeProduto" value="<?php echo $nome ?>"><br />
            <input class="inputC" type="text" id="preco" name="preco" value="<?php echo $preco ?>"><br />
            <input class="inputC" type="text" id="codigo" name="codigo" value="<?php echo $codigo ?>"><br /><br />
            <input type="hidden" name="idproduto" id="idproduto" value="<?php echo $id ?>">
            
            <div class="botaoCadastrar">
                <a><button type="submit" name="update" id="update">Atualizar</button></a>
            </div>

        </form>
    </div>
</body>

</html>