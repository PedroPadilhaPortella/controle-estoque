<?php
require_once "../config.php";
require_once "../head.php";

session_start();
$login = $_SESSION['login'];

if (!isset($_SESSION['login'])) {
    header("Location: ../index.php");
}

?>

<body>
    <a class="btn btn-primary" style="margin: 20px 0 0 140px;" href="listar.php" role="button"><i class="fas fa-undo"></i>&nbsp;Voltar</a>
    <h3 style="text-align:center;">Formulário de Edição de Fornecedor</h3>
    <div class="container" id="tamanhoContainer" style="margin-top: 10px">

        <form style="margin-top: 20px" action="update.php" method="POST">
            <?php
            $id = $_GET['id'];
            $sql = "SELECT * FROM `fornecedores` WHERE id = $id;";
            $busca = mysqli_query($connection, $sql);

            while ($array = mysqli_fetch_array($busca)) {
                $id = $array['id'];
                $nomeFornecedor = $array['nome'];
            ?>

                <div class="form-group">
                    <label>Nome do Fornecedor</label>
                    <input type="text" class="form-control" name="nome_fornecedor" value="<?php echo $nomeFornecedor; ?>">
                    <input type="number" class="form-control" name="id" value="<?php echo $id; ?>" style="display: none;">
                </div>

                <div style="text-align: right">
                    <button type="submit" id="submit" class="btn">Atualizar</button>
                </div>
            <?php } ?>
        </form>
    </div>
</body>

</html>