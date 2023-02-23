<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página inicial</title>
    <link rel="stylesheet" href="style.css">
    <script src="index.js"></script>
</head>
<body>
    <div class="containerp">

        <form class="formC" action="listar.php" method="POST">
            <div class="navegacao">
                <button class="botaoCadastrar"><a href="index.php">Cadastrar</a></button>
                <button class="botaoCadastrar"><a href="consulta.php">Consultar</a></button>
            </div>
            <input type="text" id="nomeProduto" name="nomeProduto" placeholder="Nome do produto"><br />
            <input type="text" id="preco" name="preco" placeholder="Preço do produto"><br />
            <input type="text" id="codigo" name="codigo" placeholder="Código do produto"><br /><br />
    
            <button class="botaoCadastrar" type="submit" onclick="exibirStatus()">Cadastrar</button>
        </form>
    </div>
</body>
</html>
