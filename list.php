<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <script src="https://kit.fontawesome.com/ef27dc1cf3.js" crossorigin="anonymous"></script>
    <title>Listagem de Produtos</title>
</head>

<body>
    <div class="container" style="margin-top: 40px;">
        <h3 style="padding: 30px; text-align: center;">Lista de Produtos</h3>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Código</th>
                    <th scope="col">Nome do Produto</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Quantidade</th>
                    <th scope="col">Fornecedor</th>
                    <th scope="col">Ação</th>
                </tr>
            </thead>

            <?php
            require_once "connection.php";
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
                    <td>
                        <a class="btn btn-warning btn-sm" href="updateForm.php?id=<?php echo $id; ?>" role="button"><i class="far fa-edit"></i>&nbsp;Editar</a>

                        <a class="btn btn-danger btn-sm" href="delete.php?id=<?php echo $id; ?>" role="button"><i class="far fa-trash-alt"></i>&nbsp;Exluir</a>
                    </td>
                <?php } ?>
                </tr>
        </table>
    </div>



    <script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
</body>

</html>