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

        <form class="formC" name="frmcadastrar" action="listar.php" method="POST" onsubmit="return exibirStatus()">
            <div class="botaoConsulta">
                <a href="consulta.php"><button type="button">Consultar</button></a>
            </div>
            <div class="titulo">
                <legend>CADASTRAR PRODUTO</legend>
            </div>

            <input class="inputC" type="text" id="nomeProduto" name="nomeProduto" placeholder="Digite o nome do produto"><br />
            <input class="inputC" type="text" id="preco" name="preco" placeholder="Digite o  preço do produto"><br />
            <input class="inputC" type="text" id="codigo" name="codigo" placeholder="Crie um código para seu produto"><br />

            <div class="botaoCadastrar">
                <a><button type="submit">Cadastrar</button></a><br>
            </div>

        </form>
    </div>
</body>

</html>