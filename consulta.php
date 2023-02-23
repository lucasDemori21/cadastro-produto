
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src="index.js"></script>
</head>

<body>
<?php
require_once "servidor.php";

if(!empty($_GET['pesquisar'])){
    $pesquisar = $_GET['pesquisar'];
    $sql = "SELECT * FROM produto WHERE idproduto LIKE '%$pesquisar%' OR nomeProduto LIKE '%$pesquisar%' OR preco LIKE '%$pesquisar%' OR codigo LIKE '%$pesquisar%' ORDER BY idproduto ASC";
  
}else{
    $sql = "SELECT * FROM produto ORDER BY idproduto ASC";
}

$result = $connect->query($sql);

?>
    <div class="containerp">
        <form action="" name="formSearch">
            <div class="navegacao">
                <button class="botaoCadastrar"><a href="index.php">Cadastrar</a></button>
                <button class="botaoCadastrar"><a href="consulta.php">Consultar</a></button>
            </div>
            <div style="width: 100%; display: flex; justify-content: center; gap: 1%;">
                <input type="search" class="form-control w-75" style="height: 33px;"  placeholder='Pesquisar' id='pesquisar' name="pesquisar">
                <button onclick="searchData()" class="btn btn-sm btn-primary">
                    <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-search' viewBox='0 0 16 16'>
                        <path d='M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z'/>
                    </svg>
                </button>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome do produto</th>
                        <th scope="col">Preço</th>
                        <th scope="col">Código</th>
                        <th scope="col">...</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    <?php
                    while ($dados_produto = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>" . $dados_produto['idproduto'] . "</td>";
                        echo "<td>" . $dados_produto['nomeProduto'] . "</td>";
                        echo "<td>" . $dados_produto['preco'] . "</td>";
                        echo "<td>" . $dados_produto['codigo'] . "</td>";
                        echo "<td>
                        <a class= 'btn btn-sm btn-primary' href='edit.php?id=$dados_produto[idproduto]'>
                            <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil' viewBox='0 0 16 16'>
                                <path d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z'/>
                            </svg>
                        </a>
                        <a class= 'btn btn-sm btn-danger' href='delete.php?id=$dados_produto[idproduto]'> 
                            <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash-fill' viewBox='0 0 16 16'>
                                <path d='M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z'/>
                            </svg>
                        </a>
                        </td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </form>
    </div>
</body>
    <script>
        var search = document.getElementById['pesquisar'].value;
    
        function searchData(){
            window.location = '/desafio2/consulta.php?search='+ search.value;
        }
    </script>

</html>