<?php
require_once "config.php";

$numero = $_POST['Nproduto'];
$nomeProduto = $_POST['NomeProduto'];
$categoria = $_POST['categoria'];
$quantidade = $_POST['quantidade'];
$fornecedor = $_POST['fornecedor'];

$sql = "INSERT INTO `estoque_produtos`.`estoque` (`numero_produto`, `nome_produto`, `categoria`, `quantidade`, `fornecedor`) VALUES ('$numero', '$nomeProduto', '$categoria', '$quantidade', '$fornecedor');";

$insert = mysqli_query($connection, $sql);

?>

<link rel="stylesheet" href="bootstrap/css/bootstrap.css">

<div class="container" style="width: 600px; margin-top: 40px; text-align: center;">
    <h4>Produto Adicionado com Sucesso!</h4>
    <div style="padding-top: 20px;">
        <a href="index.php" role="button" class="btn btn-primary">Cadastrar Novo Item</a>
    </div>
</div>