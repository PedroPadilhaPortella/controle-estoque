<?php

require_once "config.php";

$id = $_GET['id'];

$sql = "DELETE FROM `estoque_produtos`.`estoque` WHERE (`id` = '$id');";
$delete = mysqli_query($connection, $sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
</head>

<body>
    <div class="container" style="width: 400px;">
        <div style="text-align: center; margin-top: 40px">
            <h3>Cadastro Deletado com Sucesso!</h3>
            <a href="../pages/listar.php" class="btn btn-sucess" style="background-color: #FF8C00; color: white;">Voltar</a>
        </div>
    </div>
</body>

</html>