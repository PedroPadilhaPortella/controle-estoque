<?php
require_once "../config.php";
require_once "../head.php";

?>
<body>

    <div class="container" style="margin-top: 20px;">
    <a class="btn btn-primary" href="../../index.php" role="button"><i class="fas fa-undo"></i>&nbsp;Voltar</a>
        <h3 style="padding: 20px; text-align: center;">Lista de Produtos</h3>

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
                        <a class="btn btn-warning btn-sm" href="editar.php?id=<?php echo $id; ?>" role="button"><i class="far fa-edit"></i>&nbsp;Editar</a>

                        <a class="btn btn-danger btn-sm" href="delete.php?id=<?php echo $id; ?>" role="button"><i class="far fa-trash-alt"></i>&nbsp;Exluir</a>
                    </td>
                <?php } ?>
                </tr>
        </table>
        <div style="text-align: right; margin-bottom: 30px;">
            
            <a class="btn btn-success right" href="../cadastrarProduto/cadastrar.php" role="button"><i class="fas fa-plus-circle"></i>&nbsp;Adicionar Novo</a>
        </div>
    </div>
</body>

</html>