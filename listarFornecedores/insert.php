<?php

require_once "../head.php";
require_once "../config.php";

session_start();
$login = $_SESSION['login'];

if (!isset($_SESSION['login'])) {
    header("Location: ../index.php");
}

$fornecedor = $_POST['fornecedor'];

$sql = "INSERT INTO `estoque_produtos`.`fornecedores` (`nome`) VALUES ('$fornecedor')";

$insert = mysqli_query($connection, $sql);
?>

<div class="container" style="width: 600px; margin-top: 40px; text-align: center;">
    <h4>Fornecedor Adicionado com Sucesso!</h4>
    <div style="padding-top: 20px;">
        <a href="listar.php" role="button" class="btn btn-primary">Gerenciar Fornecedores</a>
        <a href="../menu.php" role="button" class="btn btn-info">Voltar para o Menu</a>
    </div>
</div>