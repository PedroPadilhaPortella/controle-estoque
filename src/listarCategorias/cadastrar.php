<?php
require_once "../head.php";

?>

<body>
    <a class="btn btn-primary" style="margin: 20px 0 0 140px;" href="listar.php" role="button"><i class="fas fa-undo"></i>&nbsp;Voltar</a>
    <h3 style="text-align: center;">Adicionar nova Categoria de Produtos</h3>
    <div class="container" id="tamanhoContainer" style="margin-top: 10px">
        <form action="insert.php" method="POST">
            <div class="form-group">
                <label for="categoria">Nova Categoria</label>
                <input type="text" name="categoria" class="form-control" placeholder="Adicione uma nova categoria" required autocomplete="off">

            </div>
            <div style="text-align: right; margin: 20px">
                <button type="submit" id="submit" class="btn">Adicionar</button>
            </div>
        </form>
    </div>

</body>