<?php

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


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
</head>

<body>
    <div class="container" style="width: 400px;">
        <div style="text-align: center; margin-top: 40px">
            <h3>Cadastro Atualizado com Sucesso!</h3>
            <a href="list.php" class="btn btn-sucess" style="background-color: #FF8C00; color: white;">Voltar</a>
        </div>
    </div>

    <script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
</body>

</html>