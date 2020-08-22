<?php
require_once "../head.php";
require_once "config.php";

$id = $_POST['id'];
//$numero = $_POST['numero_produto'];
$nomeProduto = $_POST['nome_produto'];
$categoria = $_POST['categoria'];
$quantidade = $_POST['quantidade'];
$fornecedor = $_POST['fornecedor'];

$sql = "UPDATE `estoque_produtos`.`estoque` SET `nome_produto` = '$nomeProduto', `categoria` = '$categoria', `quantidade` = '$quantidade', `fornecedor` = '$fornecedor' WHERE (`id` = '$id');";

$update = mysqli_query($connection, $sql);
?>

<body>
    <div class="container" style="width: 400px;">
        <div style="text-align: center; margin-top: 40px">
            <h3>Cadastro Atualizado com Sucesso!</h3>
            <a href="../pages/listar.php" class="btn btn-sucess" style="background-color: #FF8C00; color: white;">Voltar</a>
        </div>
    </div>
</body>

</html>