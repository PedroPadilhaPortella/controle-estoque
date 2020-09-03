<?php
require_once "../config.php";
require_once "../head.php";

session_start();

$login = $_SESSION['login'];

if (!isset($login)) {
    header('Location: ../index.php');
}

$sql = "select nivel from usuarios where email = '$login' and status = 'Ativo'";
$buscar = mysqli_query($connection, $sql);
$array = mysqli_fetch_array($buscar);
$nivel = $array['nivel'];
?>

<body>

    <a class="btn btn-primary" style="margin: 20px 0 0 140px;" href="../menu.php" role="button"><i class="fas fa-undo"></i>&nbsp;Voltar</a>
    <div class="container" style="margin-top: 20px; width: 500px;">
        <h3 style="padding: 20px; text-align: center;">Fornecedores</h3>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Fornecedor</th>
                    <th scope="col">Ação</th>
                </tr>
            </thead>

            <?php

            $sql = "SELECT * FROM `fornecedores`;";
            $query = mysqli_query($connection, $sql);

            while ($array = mysqli_fetch_array($query)) {
                $id = $array['id'];
                $fornecedor = $array['nome'];

            ?>
                <tr>
                    <td><?php echo $fornecedor ?></td>
                    <td>
                        <a class="btn btn-warning btn-sm" href="editar.php?id=<?php echo $id; ?>" role="button"><i class="far fa-edit"></i>&nbsp;Editar</a>

                        <?php if ($nivel == 1) { ?>
                        <a class="btn btn-danger btn-sm" href="delete.php?id=<?php echo $id; ?>" role="button"><i class="far fa-trash-alt"></i>&nbsp;Exluir</a>
                        <?php } ?>

                    </td>
                <?php } ?>
                </tr>
        </table>
        <div style="text-align: right; margin-bottom: 30px;">

            <a class="btn btn-success right" href="cadastrar.php" role="button"><i class="fas fa-plus-circle"></i>&nbsp;Adicionar Novo</a>
        </div>
    </div>
</body>

</html>