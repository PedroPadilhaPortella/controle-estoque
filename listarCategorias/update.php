<?php
require_once "../head.php";
require_once "../config.php";

$id = $_POST['id'];
$nomeCategoria = $_POST['nome_categoria'];

$sql = "UPDATE `estoque_produtos`.`categorias` SET `nome` = '$nomeCategoria' WHERE (`id` = '$id');";

$update = mysqli_query($connection, $sql);
?>

<body>
    <div class="container" style="width: 400px;">
        <div style="text-align: center; margin-top: 40px">
            <h3>Categoria Atualizada com Sucesso!</h3>
            <a href="listar.php" class="btn btn-sucess" style="background-color: #FF8C00; color: white;">Voltar</a>
        </div>
    </div>
</body>

</html>