<?php
require_once "../config.php";
require_once "../head.php";

session_start();

$login = $_SESSION['login'];

if (!isset($login)) {
    header('Location: index.php');
}

$sql = "select nivel from usuarios where email = '$login' and status = 'Ativo'";
$buscar = mysqli_query($connection, $sql);
$array = mysqli_fetch_array($buscar);
$nivel = $array['nivel'];
?>

<body>

    <div class="container" style="margin-top: 20px;">
        <a class="btn btn-primary" href="../menu.php" role="button"><i class="fas fa-undo"></i>&nbsp;Voltar</a>
        <h3 style="padding: 20px; text-align: center;">Lista de Produtos</h3>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Código</th>
                    <th scope="col">Nome do Produto</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Quantidade</th>
                    <th scope="col">Fornecedor</th>
                    <?php if (($nivel == 1) || ($nivel == 2)) { ?>
                    <th scope="col">Ação</th>
                    <?php } ?>
                </tr>
            </thead>

            <?php

            $sql = "SELECT * FROM `estoque`;";
            $query = mysqli_query($connection, $sql);

            while ($array = mysqli_fetch_array($query)) {
                $id = $array['id'];
                $numero = $array['numero_produto'];
                $nomeProduto = $array['nome_produto'];
                $categoria = $array['categoria'];
                $quantidade = $array['quantidade'];
                $fornecedor = $array['fornecedor'];
            ?>
                <tr>
                    <td><?php echo $numero ?></td>
                    <td><?php echo $nomeProduto ?></td>
                    <td><?php echo $categoria ?></td>
                    <td><?php echo $quantidade ?></td>
                    <td><?php echo $fornecedor ?></td>
                    <?php if ($nivel == 1) { ?>
                        <td>
                            <a class="btn btn-warning btn-sm" href="editar.php?id=<?php echo $id; ?>" role="button"><i class="far fa-edit"></i>&nbsp;Editar</a>

                            <?php if ($nivel == 1) { ?>
                                <a class="btn btn-danger btn-sm" href="delete.php?id=<?php echo $id; ?>" role="button"><i class="far fa-trash-alt"></i>&nbsp;Exluir</a>
                            <?php } ?>
                        </td>
                    <?php } ?>
                </tr>
            <?php } ?>
        </table>
        <?php if (($nivel == 1) || ($nivel == 2)) { ?>
            <div style="text-align: right; margin-bottom: 30px;">
                <a class="btn btn-success right" href="../cadastrarProduto/cadastrar.php" role="button"><i class="fas fa-plus-circle"></i>&nbsp;Adicionar Novo</a>
            </div>
        <?php } ?>
    </div>
</body>

</html>