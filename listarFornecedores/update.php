<?php
require_once "../head.php";
require_once "../config.php";

session_start();
$login = $_SESSION['login'];

if (!isset($_SESSION['login'])) {
    header("Location: ../index.php");
}

$id = $_POST['id'];
$nomeFornecedor = $_POST['nome_fornecedor'];

$sql = "UPDATE `fornecedores` SET `nome` = '$nomeFornecedor' WHERE `id` = '$id';";

$update = mysqli_query($connection, $sql);
?>

<body>
    <div class="container" style="width: 400px;">
        <div style="text-align: center; margin-top: 40px">
            <h3>Fornecedor Atualizado com Sucesso!</h3>
            <a href="listar.php" class="btn btn-sucess" style="background-color: #FF8C00; color: white;">Voltar</a>
        </div>
    </div>
</body>

</html>