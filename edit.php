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
            <h3>Editar informações</h3></br>
            <input type="text" id="nomeProduto" name="nomeProduto" value="<?php echo $nome ?>"><br />
            <input type="text" id="preco" name="preco" value="<?php echo $preco ?>"><br />
            <input type="text" id="codigo" name="codigo" value="<?php echo $codigo ?>"><br /><br />
            <input type="hidden" name="idproduto" id="idproduto" value="<?php echo $id ?>">
            <button class="botaoCadastrar" type="submit" name="update" id="update">Atualizar</button>
            <a style="text-decoration: none; width: 100%; display: flex; justify-content: center;" href="/desafio2/consulta.php"><button class="botaoCadastrar" type="button" href="consulta.php">Voltar</button></a>
        </form>
    </div>
</body>

</html>