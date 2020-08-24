<?php
require_once "../config.php";
require_once "../head.php";

?>

<body>
    <a class="btn btn-primary" style="margin: 20px 0 0 140px;" href="listar.php" role="button"><i class="fas fa-undo"></i>&nbsp;Voltar</a>
    <h3 style="text-align:center;">Formulário de Edição dos Produtos</h3>
    <div class="container" id="tamanhoContainer" style="margin-top: 10px">

        <form style="margin-top: 20px" action="update.php" method="POST">
            <?php
            $id = $_GET['id'];
            $sql = "SELECT * FROM `estoque` WHERE id = $id;";
            $busca = mysqli_query($connection, $sql);

            while ($array = mysqli_fetch_array($busca)) {
                $id = $array['id'];
                $numero = $array['numero_produto'];
                $nomeProduto = $array['nome_produto'];
                $categoria = $array['categoria'];
                $quantidade = $array['quantidade'];
                $fornecedor = $array['fornecedor'];
            ?>

                <div class="form-group">
                    <label>N° do Produto</label>
                    <input type="number" class="form-control" name="numero_produto" value="<?php echo $numero; ?>" disabled>
                    <input type="number" class="form-control" name="id" value="<?php echo $id; ?>" style="display: none;">
                </div>
                <div class="form-group">
                    <label>Nome do Produto</label>
                    <input type="texto" class="form-control" name="nome_produto" value="<?php echo $nomeProduto; ?>">
                </div>
                <div class="form-group">
                    <label>Quantidade</label>
                    <input type="number" class="form-control" name="quantidade" min="0" value="<?php echo $quantidade; ?>">
                </div>
                <div class="form-group">
                    <label>Categorias</label>
                    <select class="form-control" name="categoria">
                        <?php

                        $sql_categoria = "SELECT * FROM `estoque_produtos`.`categorias` order by nome ASC";
                        $search_categoria = mysqli_query($connection, $sql_categoria);

                        while ($array = mysqli_fetch_array($search_categoria)) {
                            $id = $array['id'];
                            $categoria = $array['nome'];
                        ?>
                            <option><?php echo $categoria ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Fornecedor</label>
                    <select class="form-control" name="fornecedor">
                        <?php

                        $sql_fornecedor = "SELECT * FROM `estoque_produtos`.`fornecedores` order by nome ASC";
                        $search_fornecedor = mysqli_query($connection, $sql_fornecedor);

                        while ($array = mysqli_fetch_array($search_fornecedor)) {
                            $id = $array['id'];
                            $fornecedor = $array['nome'];
                        ?>
                            <option><?php echo $fornecedor ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div style="text-align: right">
                    <button type="submit" id="submit" class="btn">Atualizar</button>
                </div>
            <?php } ?>
        </form>
    </div>
</body>

</html>