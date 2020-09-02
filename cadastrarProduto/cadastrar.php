<?php
require_once "../head.php";
require_once "../config.php";
?>

<body>
    <a class="btn btn-primary" style="margin: 20px 0 0 140px;" href="../menu.php" role="button"><i class="fas fa-undo"></i>&nbsp;Voltar</a>
    <h3 style="text-align:center;">Formulário de Cadastro dos Produtos</h3>

    <div class="container" id="tamanhoContainer" style="margin-top: 10px">
        <form style="margin-top: 20px" action="insert.php" method="POST">
            <div class="form-group">
                <label>N° do Produto</label>
                <input type="number" class="form-control" name="Nproduto" placeholder="Insira o numero do Produto" required>
            </div>
            <div class="form-group">
                <label>Nome do Produto</label>
                <input type="texto" class="form-control" name="NomeProduto" placeholder="Insira o nome do Produto" autocomplete="off" required>
            </div>
            <div class="form-group">
                <label>Quantidade</label>
                <input type="number" class="form-control" name="quantidade" placeholder="Insira a Quantidade" min="0" required>
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
            <div style="text-align: right; margin: 20px">
                <button type="submit" id="submit" class="btn">Cadastrar</button>
            </div>
        </form>
    </div>
</body>

</html>