<?php

require_once "../head.php";
require_once "../config.php";

session_start();
$login = $_SESSION['login'];

if (!isset($_SESSION['login'])) {
    header("Location: ../index.php");
}

$categoria = $_POST['categoria'];

$sql = "INSERT INTO `estoque_produtos`.`categorias` (`nome`) VALUES ('$categoria')";

$insert = mysqli_query($connection, $sql);
?>

<div class="container" style="width: 600px; margin-top: 40px; text-align: center;">
    <h4>Categoria Adicionado com Sucesso!</h4>
    <div style="padding-top: 20px;">
        <a href="../listarCategorias/listar.php" role="button" class="btn btn-primary">Gerenciar Categorias</a>
        <a href="../menu.php" role="button" class="btn btn-info">Voltar para o Menu</a>
    </div>
</div>