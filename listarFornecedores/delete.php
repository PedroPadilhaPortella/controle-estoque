<?php
require_once "../head.php";
require_once "../config.php";

session_start();
$login = $_SESSION['login'];

if (!isset($_SESSION['login'])) {
    header("Location: ../index.php");
}

$id = $_GET['id'];

$sql = "DELETE FROM `estoque_produtos`.`fornecedores` WHERE `id` = '$id';";
$delete = mysqli_query($connection, $sql);

?>

<body>
    <div class="container" style="width: 400px;">
        <div style="text-align: center; margin-top: 40px">
            <h3>Fornecedor Deletado com Sucesso!</h3>
            <a href="listar.php" class="btn btn-sucess" style="background-color: #FF8C00; color: white;">Voltar</a>
        </div>
    </div>
</body>

</html>