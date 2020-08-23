<?php
require_once "../head.php";

?>

<body>
    <a class="btn btn-primary" style="margin: 20px 0 0 140px;" href="../index.php" role="button"><i class="fas fa-undo"></i>&nbsp;Voltar</a>
    <h3 style="text-align: center;">Adicionar Fornecedor de Produtos</h3>
    <div class="container" id="tamanhoContainer" style="margin-top: 10px">
        <form action="../src/fornecedorInsert.php" method="POST">
            <div class="form-group">
                <label for="categoria">Fornecedor</label>
                <input type="text" name="fornecedor" class="form-control" placeholder="Adicione um fornecedor" required autocomplete="off">

            </div>
            <div style="text-align: right; margin: 20px">
                <button type="submit" id="submit" class="btn btn-primary">Cadastrar</button>
            </div>
        </form>
    </div>

</body>